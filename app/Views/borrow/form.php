<?php
$is_edit = isset($item);
$target_url = ($is_edit) ? "/borrow-editpro" : "/borrow-addpro"
?>

<?= $this->extend('layout/template'); ?>
<?= $this->section('konten'); ?>
<div class="container-fluid">
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <a class="btn btn-primary mb-2" href="<?= base_url('borrow'); ?>"><i class="fa-solid fa-arrow-left mr-2"></i>Back</a>
            <h2><?= $judul; ?></h2>
        </div>
        <form action="<?= base_url($target_url); ?>" method="post" enctype="multipart/form-data">
            <?= csrf_field(); ?>
            <div class="card radius">
                <div class="card-body m-2">
                    <!-- input untuk mengambil id, membedakan add dan edit  -->
                    <input hidden type="text" name="id" value="<?= ($is_edit) ? $id : '' ?>">
                    <div class="mb-3 row">
                        <label class="col-sm-2 col-form-label">Borrower</label>
                        <div class="col-sm-10">
                            <select name="id_borrower" class="form-control <?= (!empty(session()->getFlashdata('validation')['id_borrower'])) ? 'is-invalid' : '' ?>" placeholder="" value="<?= ($is_edit) ? $item['id_borrower'] : old('id_borrower') ?>">
                                <option value=""></option>
                                <?php foreach ($borrower as $b) { ?>
                                    <option <?= ($b['id'] == old('id_borrower')) ? 'selected' : (($is_edit) ? (($b['id'] == $item['id_borrower']) ? 'selected' : '') : '') ?> value=" <?= $b['id']; ?>"><?= $b['name']; ?></option>
                                <?php } ?>
                            </select>
                            <div class="invalid-feedback">
                                <?= (!empty(session()->getFlashdata('validation')['id_borrower'])) ? session()->getFlashdata('validation')['id_borrower'] : '' ?>
                            </div>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label class="col-sm-2 col-form-label">Books</label>
                        <div class="col-sm-10">
                            <select name="id_book" class="form-control <?= (!empty(session()->getFlashdata('validation')['id_book'])) ? 'is-invalid' : '' ?>" placeholder="" value="<?= ($is_edit) ? $item['id_book'] : old('id_book') ?>">
                                <option value=""></option>
                                <?php foreach ($book as $b) { ?>
                                    <option <?= ($b['id'] == old('id_book')) ? 'selected' : (($is_edit) ? (($b['id'] == $item['id_book']) ? 'selected' : '') : '') ?> value=" <?= $b['id']; ?>"><?= $b['title']; ?></option>
                                <?php } ?>
                            </select>
                            <div class="invalid-feedback">
                                <?= (!empty(session()->getFlashdata('validation')['id_book'])) ? session()->getFlashdata('validation')['id_book'] : '' ?>
                            </div>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label class="col-sm-2 col-form-label">Release date</label>
                        <div class="col-sm-10">
                            <input type="date" name="release_date" class="form-control <?= (!empty(session()->getFlashdata('validation')['release_date'])) ? 'is-invalid' : '' ?>" placeholder="" value="<?= ($is_edit) ? $item['release_date'] : old('release_date') ?>">
                            <div class="invalid-feedback">
                                <?= (!empty(session()->getFlashdata('validation')['release_date'])) ? session()->getFlashdata('validation')['release_date'] : '' ?>
                            </div>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label class="col-sm-2 col-form-label">Due date</label>
                        <div class="col-sm-10">
                            <input type="date" name="due_date" class="form-control <?= (!empty(session()->getFlashdata('validation')['due_date'])) ? 'is-invalid' : '' ?>" placeholder="" value="<?= ($is_edit) ? $item['due_date'] : old('due_date') ?>">
                            <div class="invalid-feedback">
                                <?= (!empty(session()->getFlashdata('validation')['due_date'])) ? session()->getFlashdata('validation')['due_date'] : '' ?>
                            </div>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label class="col-sm-2 col-form-label">Staff</label>
                        <div class="col-sm-10">
                            <input class="form-control" disabled name="id_staff" value="<?= session('name'); ?>">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label class="col-sm-2 col-form-label">Note</label>
                        <div class="col-sm-10">
                            <input class="form-control" name="note" disabled value="Pinjam">
                        </div>
                    </div>
                    <div class="mb-3">
                        <button class="btn btn-primary" type="submit">Save</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>
<?= $this->endSection(); ?>