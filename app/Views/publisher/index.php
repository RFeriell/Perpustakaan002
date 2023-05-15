<?= $this->extend('layout/template'); ?>
<?= $this->section('konten'); ?>
<main class="col-md-9 ml-sm-auto col-lg-10 px-md-4 py-4">
    <div class="container">
        <h1 class="mb-3">Page Publisher</h1>
        <a href="<?= base_url('/publisher-add'); ?>" class=" mb-2 btn btn-primary"><i class="fa-solid fa-user-plus mr-2"></i>Add</a>
        <table class="table table-striped table-hover">
            <thead>
                <tr>
                    <th class="text-center" scope="col">No.</th>
                    <th class="text-center" scope="col">Name</th>
                    <th class="text-center" scope="col">Address</th>
                    <th class="text-center" scope="col">Contact</th>
                    <th class="text-center" scope="col">Tools</th>
                </tr>
            </thead>
            <tbody>
                <?php $no = 1; ?>
                <?php foreach ($publisher as $p) : ?>
                    <tr class="text-center">
                        <th scope="row"><?= $no++; ?></th>
                        <td><?= $p['name']; ?></td>
                        <td><?= $p['address']; ?></td>
                        <td><?= $p['contact']; ?></td>
                        <td>
                            <a href="<?= base_url('publisher-edit/') . $p['id']; ?>" class="btn btn-warning">
                                <i class="fa-solid fa-pen-to-square" style="color: white;"></i>
                            </a>
                            <a href="<?= base_url('publisher-delete/') . $p['id']; ?>" class="btn btn-danger">
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