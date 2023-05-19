<?= $this->extend('layout/template'); ?>
<?= $this->section('konten'); ?>
<!-- Begin Page Content -->
<div class="container-fluid">
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h1 class="mb-3">Page Borrow</h1>
            <a href="<?= base_url('/borrow-add'); ?>" class="mb-2 btn btn-primary"><i class="fa-solid fa-plus mr-2"></i>Add</a>
            <h6 class="m-0 font-weight-bold text-primary">DataTables Borrow</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="text-center table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Borrower</th>
                            <th>Book</th>
                            <th>Staff</th>
                            <th>Release Date</th>
                            <th>Due Date</th>
                            <th>Note</th>
                            <th>Tools</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $no = 1; ?>
                        <?php foreach ($borrow as $b) : ?>
                            <tr class="">
                                <th scope="row"><?= $no++; ?></th>
                                <td><?= $b['name']; ?></td>
                                <td><?= $b['title']; ?></td>
                                <td><?= $b['staff']; ?></td>
                                <td><?= $b['release_date']; ?></td>
                                <td><?= $b['due_date']; ?></td>
                                <td><?= $b['note']; ?></td>
                                <td>
                                    <a href=" <?= base_url('borrow-edit/') . $b['id']; ?>" class="btn btn-warning mb-1">
                                        <i class="fa-solid fa-pen-to-square" style="color: white;"></i>
                                    </a>
                                    <a onclick="return confirm('Anda yakin data dihapus?')" href="<?= base_url('borrow-delete/') . $b['id']; ?>" class="btn btn-danger mb-1">
                                        <i class="fa-solid fa-trash"></i>
                                    </a>
                                    <a onclick="return confirm('Anda yakin buku di kembalikan?')" href="<?= base_url('borrow-return/') . $b['id']; ?>" class="btn btn-info mb-1">
                                        <i class="fa-solid fa-reply"></i>
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