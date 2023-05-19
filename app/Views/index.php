<?= $this->extend('layout/template'); ?>
<?= $this->section('konten'); ?>
<div class="container-fluid">
    <div class="row">
        <!-- Card Example -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Books</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">
                                <?= $jml_book; ?>
                            </div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-book fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Card Example -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-success shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Staff</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">
                                <?= $jml_staff; ?>
                            </div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-user fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Tasks Card Example -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-success shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Borrow</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">
                                <?= $jml_borrow; ?>
                            </div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-bookmark fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Pending Requests Card Example -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-success shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Borrower</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">
                                <?= $jml_borrower; ?>
                            </div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-bookmark fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-xl-6 col-md-6 mb-4">
            <div class="card border-left-success shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Category</div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800">
                            <?= $jml_category; ?>
                        </div>
                        <div class="col mr-2">
                            <?php foreach ($category as $c) : ?>
                                <h4 class="small font-weight-bold"><?= $c['category']; ?><span class="float-right">50</span></h4>
                                <div class="progress">
                                    <div class="progress-bar bg-success" role="progressbar" style="width: 50%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                                <br>
                            <?php endforeach ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-6 col-md-6 mb-4">
            <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Publisher</div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800">
                            <?= $jml_publisher; ?>
                        </div>
                        <div class="col mr-2">
                            <?php foreach ($publisher as $p) : ?>
                                <h4 class="small font-weight-bold"><?= $p['name']; ?><span class="float-right">50</span></h4>
                                <div class="progress">
                                    <div class="progress-bar bg-success" role="progressbar" style="width: 50%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                                <br>
                            <?php endforeach ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection(); ?>