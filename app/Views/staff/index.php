<?= $this->extend('layout/template'); ?>
<?= $this->section('konten'); ?>
<!-- Begin Page Content -->
<div class="container-fluid">
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h1 class="mb-3">Page Staff</h1>
            <a href="<?= base_url('/staff-add'); ?>" class="mb-2 btn btn-primary"><i class="fa-solid fa-plus mr-2"></i>Add</a>
            <h6 class="m-0 font-weight-bold text-primary">DataTables Staff</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="text-center table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Tools</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $no = 1; ?>
                        <?php foreach ($staff as $s) : ?>
                            <tr class="">
                                <th scope="row"><?= $no++; ?></th>
                                <td><?= $s['name']; ?></td>
                                <td><?= $s['email']; ?></td>
                                <td>
                                    <a href="<?= base_url('staff-edit/') . $s['id']; ?>" class="btn btn-warning mb-1">
                                        <i class="fa-solid fa-pen-to-square" style="color: white;"></i>
                                    </a>
                                    <a href="<?= base_url('staff-delete/') . $s['id']; ?>" class="btn btn-danger mb-1">
                                        <i class="fa-solid fa-trash"></i>
                                    </a>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<!-- /.container-fluid -->
<?= $this->endSection(); ?>