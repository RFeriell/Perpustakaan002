<?php
$is_edit = isset($item);
$target_url = ($is_edit) ? "/book-editpro" : "/book-addpro"
?>

<?= $this->extend('layout/template'); ?>
<?= $this->section('konten'); ?>
<div class="container-fluid">
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <a class="btn btn-primary mb-2" href="<?= base_url('book'); ?>"><i class="fa-solid fa-arrow-left mr-2"></i>Back</a>
            <h2><?= $judul; ?></h2>
        </div>
        <form action="<?= base_url($target_url); ?>" method="post" enctype="multipart/form-data">
            <?= csrf_field(); ?>
            <div class="card">
                <div class="card-body m-2">
                    <!-- input untuk mengambil id, membedakan add dan edit  -->
                    <input hidden type="text" name="id" value="<?= ($is_edit) ? $id : '' ?>">
                    <div class="mb-3 row">
                        <label class="col-sm-2 col-form-label"> Name Book</label>
                        <div class="col-sm-10">
                            <input type="text" name="title" class="form-control <?= (!empty(session()->getFlashdata('validation')['title'])) ? 'is-invalid' : '' ?>" placeholder="" value="<?= ($is_edit) ? $item['title'] : old('title') ?>">
                            <div class="invalid-feedback">
                                <?= (!empty(session()->getFlashdata('validation')['title'])) ? session()->getFlashdata('validation')['title'] : '' ?>
                            </div>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label class="col-sm-2 col-form-label">Author</label>
                        <div class="col-sm-10">
                            <input type="text" name="author" class="form-control <?= (!empty(session()->getFlashdata('validation')['author'])) ? 'is-invalid' : '' ?>" placeholder="" value="<?= ($is_edit) ? $item['author'] : old('author') ?>">
                            <div class="invalid-feedback">
                                <?= (!empty(session()->getFlashdata('validation')['author'])) ? session()->getFlashdata('validation')['author'] : '' ?>
                            </div>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label class="col-sm-2 col-form-label">Publication Year</label>
                        <div class="col-sm-10">
                            <input maxlength="4" type="text" name="publication_year" class="form-control <?= (!empty(session()->getFlashdata('validation')['publication_year'])) ? 'is-invalid' : '' ?>" placeholder="" value="<?= ($is_edit) ? $item['publication_year'] : old('publication_year') ?>">
                            <div class="invalid-feedback">
                                <?= (!empty(session()->getFlashdata('validation')['publication_year'])) ? session()->getFlashdata('validation')['publication_year'] : '' ?>
                            </div>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label class="col-sm-2 col-form-label">Publisher</label>
                        <div class="col-sm-10">
                            <select name="id_publisher" class="form-control <?= (!empty(session()->getFlashdata('validation')['id_publisher'])) ? 'is-invalid' : '' ?>" placeholder="" value="<?= ($is_edit) ? $item['id_publisher'] : old('id_publisher') ?>">
                                <option value=""></option>
                                <?php foreach ($publisher as $p) { ?>
                                    <option <?= ($p['id'] == old('id_publisher')) ? 'selected' : (($is_edit) ? (($p['id'] == $item['id_publisher']) ? 'selected' : '') : '') ?> value="<?= $p['id'] ?>"><?= $p['name']; ?></option>
                                <?php } ?>
                            </select>
                            <div class="invalid-feedback">
                                <?= (!empty(session()->getFlashdata('validation')['id_publisher'])) ? session()->getFlashdata('validation')['id_publisher'] : '' ?>
                            </div>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label class="col-sm-2 col-form-label">Category</label>
                        <div class="col-sm-10">
                            <select name="id_category" class="form-control <?= (!empty(session()->getFlashdata('validation')['id_category'])) ? 'is-invalid' : '' ?>" placeholder="" value="<?= ($is_edit) ? $item['id_category'] : old('id_category') ?>">
                                <option value=""></option>
                                <?php foreach ($category as $c) { ?>
                                    <option <?= ($c['id'] == old('id_category')) ? 'selected' : (($is_edit) ? (($c['id'] == $item['id_category']) ? 'selected' : '') : '') ?> value=" <?= $c['id']; ?>"><?= $c['category']; ?></option>
                                <?php } ?>
                            </select>
                            <div class="invalid-feedback">
                                <?= (!empty(session()->getFlashdata('validation')['id_category'])) ? session()->getFlashdata('validation')['id_category'] : '' ?>
                            </div>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label class="col-sm-2 col-form-label">Quantity</label>
                        <div class="col-sm-10">
                            <input type="number" name="quantity" class="form-control <?= (!empty(session()->getFlashdata('validation')['quantity'])) ? 'is-invalid' : '' ?>" placeholder="" value="<?= ($is_edit) ? $item['quantity'] : old('quantity') ?>">
                            <div class="invalid-feedback">
                                <?= (!empty(session()->getFlashdata('validation')['quantity'])) ? session()->getFlashdata('validation')['quantity'] : '' ?>
                            </div>
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