<?= $this->extend('layout/template'); ?>
<?= $this->section('konten'); ?>
<!-- Begin Page Content -->
<div class="container-fluid">
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h1 class="mb-3">Page Borrower</h1>
            <a href="<?= base_url('/borrower-add'); ?>" class="mb-2 btn btn-primary"><i class="fa-solid fa-plus mr-2"></i>Add</a>
            <h6 class="m-0 font-weight-bold text-primary">DataTables Borrower</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="text-center table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Name</th>
                            <th>Birthdate</th>
                            <th>Address</th>
                            <th>Gender</th>
                            <th>Contact</th>
                            <th>Email</th>
                            <th>Tools</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $no = 1; ?>
                        <?php foreach ($borrower as $b) : ?>
                            <tr class="">
                                <th scope="row"><?= $no++; ?></th>
                                <td><?= $b['name']; ?></td>
                                <td><?= $b['birthdate']; ?></td>
                                <td><?= $b['address']; ?></td>
                                <td><?= $b['gender']; ?></td>
                                <td><?= $b['contact']; ?></td>
                                <td><?= $b['email']; ?></td>
                                <td>
                                    <a href="<?= base_url('borrower-edit/') . $b['id']; ?>" class="btn btn-warning mb-1">
                                        <i class="fa-solid fa-pen-to-square" style="color: white;"></i>
                                    </a>
                                    <a onclick="return confirm('Anda yakin data dihapus?')" href="<?= base_url('borrower-delete/') . $b['id']; ?>" class="btn btn-danger mb-1">
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