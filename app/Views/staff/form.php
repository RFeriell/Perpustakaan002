<?php
$is_edit = isset($item);
$target_url = ($is_edit) ? "/staff-editpro" : "/staff-addpro"
?>

<?= $this->extend('layout/template'); ?>
<?= $this->section('konten'); ?>
<main class="col-md-9 ml-sm-auto col-lg-10 px-md-4 py-4">
    <h2>Add Staff</h2>
    <?php if (!empty(session()->getFlashdata('error'))) : ?>
        <div class="alert alert-warning alert-dismissible fade show" role="alert">
            <strong><?= session()->getFlashdata('error') ?></strong>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <script>
            window.setTimeout(function() {
                $(".alert").fadeTo(500, 0).slideUp(500, function() {
                    $(this).remove();
                });
            }, 2000);
        </script>
    <?php endif ?>
    <form action="<?= base_url($target_url); ?>" method="post" enctype="multipart/form-data">
        <?= csrf_field(); ?>
        <div class="card">
            <div class="card-body">
                <div class="mb-3 row">
                    <label for="name" class="col-sm-2 col-form-label">Name</label>
                    <div class="col-sm-10">
                        <input type="text" name="name" class="form-control" placeholder="Username" required id="name" <?= (!empty(session()->getFlashdata('validation')['name'])) ? 'is-invalid' : '' ?>" value="<?= ($is_edit) ? $item['name'] : old('name') ?>">
                        <div class=" invalid-feedback">
                            <?= (!empty(session()->getFlashdata('validation')['name'])) ? session()->getFlashdata('validation')['name'] : '' ?>
                        </div>
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="email" class="col-sm-2 col-form-label">Email</label>
                    <div class="col-sm-10">
                        <input type="email" name="email" class="form-control" placeholder="Email" required id="email" <?= (!empty(session()->getFlashdata('validation')['email'])) ? 'is-invalid' : '' ?>" value="<?= ($is_edit) ? $item['email'] : old('email') ?>">
                        <div class=" invalid-feedback">
                            <?= (!empty(session()->getFlashdata('validation')['email'])) ? session()->getFlashdata('validation')['email'] : '' ?>
                        </div>
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="password" class="col-sm-2 col-form-label">password</label>
                    <div class="col-sm-10">
                        <input type="password" name="password" class="form-control" placeholder="password" required id="password" <?= (!empty(session()->getFlashdata('validation')['password'])) ? 'is-invalid' : '' ?>" value="<?= ($is_edit) ? '' : old('password') ?>">
                        <div class=" invalid-feedback">
                            <?= (!empty(session()->getFlashdata('validation')['password'])) ? session()->getFlashdata('validation')['password'] : '' ?>
                        </div>
                    </div>
                </div>
                <div class="mb-3">
                    <button class="btn btn-primary" type="submit">Save</button>
                </div>
            </div>
        </div>
    </form>
</main>
<?= $this->endSection(); ?>