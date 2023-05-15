<?= $this->extend('layout/template'); ?>
<?= $this->section('konten'); ?>
<main class="col-md-9 ml-sm-auto col-lg-10 px-md-4 py-4">
    <div class="container container-table">
        <a href="<?= base_url('/book-add'); ?>" class="btn btn-primary"><i class="fa-solid fa-user-plus mr-2"></i>Add</a>
        <table class="table table-hover ">
            <thead class="table-dark">
                <tr>
                    <th class="text-center" scope="col">No.</th>
                    <th class="text-center" scope="col">Title</th>
                    <th class="text-center" scope="col">Author</th>
                    <th class="text-center" scope="col">Publication Year</th>
                    <th class="text-center" scope="col">Publisher</th>
                    <th class="text-center" scope="col">Category</th>
                    <th class="text-center" scope="col">Quantity</th>
                    <th class="text-center" scope="col">Tools</th>
                </tr>
            </thead>
            <tbody>
                <?php $no = 1; ?>
                <?php foreach ($book as $b) : ?>
                    <tr class="text-center">
                        <th scope="row"><?= $no++; ?></th>
                        <td><?= $b['title']; ?></td>
                        <td><?= $b['author']; ?></td>
                        <td><?= $b['publication_year']; ?></td>
                        <td><?= $b['id_publisher']; ?></td>
                        <td><?= $b['id_category']; ?></td>
                        <td><?= $b['quantity']; ?></td>
                        <td>
                            <a href="<?= base_url('/edit-book'); ?>" class="btn btn-warning">
                                <i class="fa-solid fa-pen-to-square" style="color: white;"></i>
                            </a>
                            <a href="<?= base_url('delete-book'); ?>" class="btn btn-danger">
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