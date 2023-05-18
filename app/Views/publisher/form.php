<?php
$is_edit = isset($item);
$target_url = ($is_edit) ? "/publisher-editpro" : "/publisher-addpro"
?>

<?= $this->extend('layout/template'); ?>
<?= $this->section('konten'); ?>
<div class="container-fluid">
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <a class="btn btn-primary mb-2" href="<?= base_url('publisher'); ?>"><i class="fa-solid fa-arrow-left mr-2"></i>Back</a>
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
                        <label class="col-sm-2 col-form-label">Address</label>
                        <div class="col-sm-10">
                            <input type="text" name="address" class="form-control <?= (!empty(session()->getFlashdata('validation')['address'])) ? 'is-invalid' : '' ?>" placeholder="address" value="<?= ($is_edit) ? $item['address'] : old('address') ?>">
                            <div class="invalid-feedback">
                                <?= (!empty(session()->getFlashdata('validation')['address'])) ? session()->getFlashdata('validation')['address'] : '' ?>
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
                    <div class="mb-3">
                        <button class="btn btn-primary" type="submit">Save</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>
<?= $this->endSection(); ?>