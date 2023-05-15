<?php
$is_edit = isset($item);
$target_url = ($is_edit) ? "/category-editpro" : "/category-addpro"
?>

<?= $this->extend('layout/template'); ?>
<?= $this->section('konten'); ?>
<main class="col-md-9 ml-sm-auto col-lg-10 px-md-4 py-4">
    <div class="container">
        <h2><?= $judul; ?></h2>
        <form action="<?= base_url($target_url); ?>" method="post" enctype="multipart/form-data">
            <?= csrf_field(); ?>
            <div class="card radius">
                <div class="card-body m-2">
                    <!-- input untuk mengambil id, membedakan add dan edit  -->
                    <input hidden type="text" name="id" value="<?= ($is_edit) ? $id : '' ?>">
                    <div class="mb-3 row">
                        <label class="col-sm-2 col-form-label">Name Category</label>
                        <div class="col-sm-10">
                            <input type="text" name="category" class="form-control <?= (!empty(session()->getFlashdata('validation')['category'])) ? 'is-invalid' : '' ?>" placeholder="Action.." value="<?= ($is_edit) ? $item['category'] : old('category') ?>">
                            <div class="invalid-feedback">
                                <?= (!empty(session()->getFlashdata('validation')['category'])) ? session()->getFlashdata('validation')['category'] : '' ?>
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
</main>
<?= $this->endSection(); ?>