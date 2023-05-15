<?= $this->extend('layout/template'); ?>
<?= $this->section('konten'); ?>
<main class="col-md-9 ml-sm-auto col-lg-10 px-md-4 py-4">
    <div class="container">
        <h1 class="mb-3">Page Staff</h1>
        <a href="<?= base_url('/staff-add'); ?>" class="mb-2 btn btn-primary"><i class="fa-solid fa-user-plus mr-2"></i>Add</a>
        <table class="table table-striped table-hover">
            <thead>
                <tr>
                    <th class="text-center" scope="col">No.</th>
                    <th class="text-center" scope="col">Name</th>
                    <th class="text-center" scope="col">Email</th>
                    <th class="text-center" scope="col">Tools</th>
                </tr>
            </thead>
            <tbody>
                <?php $no = 1; ?>
                <?php foreach ($staff as $s) : ?>
                    <tr class="text-center">
                        <th scope="row"><?= $no++; ?></th>
                        <td><?= $s['name']; ?></td>
                        <td><?= $s['email']; ?></td>
                        <td>
                            <a href="<?= base_url('staff-edit/') . $s['id']; ?>" class="btn btn-warning">
                                <i class="fa-solid fa-pen-to-square" style="color: white;"></i>
                            </a>
                            <a href="<?= base_url('staff-delete/') . $s['id']; ?>" class="btn btn-danger">
                                <i class="fa-solid fa-trash"></i>
                            </a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</main>
<?= $this->endSection(); ?>