<?php
$is_edit = isset($item);
$target_url = ($is_edit) ? "/borrower-editpro" : "/borrower-addpro"
?>

<?= $this->extend('layout/template'); ?>
<?= $this->section('konten'); ?>
<div class="container-fluid">
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <a class="btn btn-primary mb-2" href="<?= base_url('borrower'); ?>"><i class="fa-solid fa-arrow-left mr-2"></i>Back</a>
            <h2><?= $judul; ?></h2>
        </div>
        <form action="<?= base_url($target_url); ?>" method="post" enctype="multipart/form-data">
            <?= csrf_field(); ?>
            <div class="card radius">
                <div class="card-body m-2">
                    <!-- input untuk mengambil id, membedakan add dan edit  -->
                    <input hidden type="text" name="id" value="<?= ($is_edit) ? $id : '' ?>">
                    <div class="mb-3 row">
                        <label class="col-sm-2 col-form-label">Name</label>
                        <div class="col-sm-10">
                            <input type="text" name="name" class="form-control <?= (!empty(session()->getFlashdata('validation')['name'])) ? 'is-invalid' : '' ?>" placeholder="Username" value="<?= ($is_edit) ? $item['name'] : old('name') ?>">
                            <div class="invalid-feedback">
                                <?= (!empty(session()->getFlashdata('validation')['name'])) ? session()->getFlashdata('validation')['name'] : '' ?>
                            </div>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label class="col-sm-2 col-form-label">Birthdate</label>
                        <div class="col-sm-10">
                            <input type="date" name="birthdate" class="form-control <?= (!empty(session()->getFlashdata('validation')['birthdate'])) ? 'is-invalid' : '' ?>" placeholder="birthdate" value="<?= ($is_edit) ? $item['birthdate'] : old('birthdate') ?>">
                            <div class="invalid-feedback">
                                <?= (!empty(session()->getFlashdata('validation')['birthdate'])) ? session()->getFlashdata('validation')['birthdate'] : '' ?>
                            </div>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label class="col-sm-2 col-form-label">Address</label>
                        <div class="col-sm-10">
                            <input type="text" name="address" class="form-control <?= (!empty(session()->getFlashdata('validation')['address'])) ? 'is-invalid' : '' ?>" placeholder="address" value="<?= ($is_edit) ? $item['address'] : old('address') ?>">
                            <div class="invalid-feedback">
                                <?= (!empty(session()->getFlashdata('validation')['address'])) ? session()->getFlashdata('validation')['address'] : '' ?>
                            </div>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="gender" class="col-sm-2 col-form-label">Gender</label>
                        <div class="col-sm-10">
                            <div style="line-height: 5px;" class="btn btn-danger">
                                <label for="laki_laki">Laki-laki</label>
                                <input type="radio" id="laki_laki" name="gender" value="L" <?= (!empty(session()->getFlashdata('validation')['gender'])) ? 'is-invalid' : '' ?>" placeholder="gender" value="<?= ($is_edit) ? $item['gender'] : old('gender') ?>" />
                                <div class="invalid-feedback">
                                    <?= (!empty(session()->getFlashdata('validation')['gender'])) ? session()->getFlashdata('validation')['gender'] : '' ?>
                                </div>
                            </div>
                            <div style="line-height: 5px;" class="btn btn-primary">
                                <label for="perempuan">Perempuan</label>
                                <input type="radio" id="perempuan" name="gender" value="P" <?= (!empty(session()->getFlashdata('validation')['gender'])) ? 'is-invalid' : '' ?>" placeholder="gender" value="<?= ($is_edit) ? $item['gender'] : old('gender') ?>" />
                                <div class=" invalid-feedback">
                                    <?= (!empty(session()->getFlashdata('validation')['gender'])) ? session()->getFlashdata('validation')['gender'] : '' ?>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label class="col-sm-2 col-form-label">Contact</label>
                        <div class="col-sm-10">
                            <input type="number" name="contact" class="form-control <?= (!empty(session()->getFlashdata('validation')['contact'])) ? 'is-invalid' : '' ?>" placeholder="contact" value="<?= ($is_edit) ? $item['contact'] : old('contact') ?>">
                            <div class="invalid-feedback">
                                <?= (!empty(session()->getFlashdata('validation')['contact'])) ? session()->getFlashdata('validation')['contact'] : '' ?>
                            </div>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label class="col-sm-2 col-form-label">Email</label>
                        <div class="col-sm-10">
                            <input type="text" name="email" class="form-control <?= (!empty(session()->getFlashdata('validation')['email'])) ? 'is-invalid' : '' ?>" placeholder="email" value="<?= ($is_edit) ? $item['email'] : old('email') ?>">
                            <div class="invalid-feedback">
                                <?= (!empty(session()->getFlashdata('validation')['email'])) ? session()->getFlashdata('validation')['email'] : '' ?>
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