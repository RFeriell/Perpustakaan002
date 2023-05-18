<!-- awal navbar -->
<!-- offcanvas -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title; ?></title>
    <link rel="icon" href="https://cdn.icon-icons.com/icons2/1148/PNG/512/1486503771-book-books-education-library-reading-open-book-study_81275.png">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
    <!-- CSS ICON -->
    <link rel="stylesheet" href="<?= base_url('public'); ?>/css/all.css">
    <link rel="stylesheet" href="<?= base_url('public'); ?>/css/brands.css">
    <link rel="stylesheet" href="<?= base_url('public'); ?>/css/fontawesome.css">
    <link rel="stylesheet" href="<?= base_url('public'); ?>/css/regular.css">
    <link rel="stylesheet" href="<?= base_url('public'); ?>/css/solid.css">

    <!-- Custom fonts for this template -->
    <link href="<?= base_url('public/sb/'); ?>vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="<?= base_url('public/sb/'); ?>css/sb-admin-2.min.css" rel="stylesheet">
    <!-- Custom styles for this page -->
    <link href="<?= base_url('public/sb/'); ?>vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">

    <!-- My style CSS  -->
    <link rel="stylesheet" href="<?= base_url('public'); ?>/css/style.css">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Courgette&family=Leckerli+One&family=Sriracha&display=swap');

        .judul-web {
            font-family: 'Sriracha', cursive;
            font-size: 1.2em;
            text-transform: capitalize;
        }

        .judul-web span {
            font-family: 'Leckerli One', cursive;
            color: darkblue;
            font-weight: 700;
            text-transform: lowercase;
        }
    </style>
</head>

<body id="page-top">
    <!-- Page Wrapper -->
    <div id="wrapper">
        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">
            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="<?= base_url('home'); ?>">
                <div class="sidebar-brand-icon">
                    <img class="my-2" style=" border: 2px solid white; padding: 3px; border-radius: 50%; width: 40px; display: iniline-block; margin: auto;" src="https://cdn.icon-icons.com/icons2/1148/PNG/512/1486503771-book-books-education-library-reading-open-book-study_81275.png" alt="Perpustaka.an">
                </div>
                <div class="sidebar-brand-text mx-3 judul-web">Perpustaka<span>.an</span></div>
            </a>
            <!-- Divider -->
            <hr class="sidebar-divider my-0">
            <!-- Nav Item  -->
            <li class="nav-item active">
                <a class="nav-link" href="<?= base_url('home'); ?>">
                    <i class="fas fa-fw fa-home"></i>
                    <span>Home</span></a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="<?= base_url('staff'); ?>">
                    <i class="fas fa-fw fa-user"></i>
                    <span>Staff</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">
            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
                    <i class="fas fa-fw fa-book"></i>
                    <span>Books</span>
                </a>
                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">item Books:</h6>
                        <a class="collapse-item" href="<?= base_url('book'); ?>">Book</a>
                        <a class="collapse-item" href="<?= base_url('category'); ?>">Category</a>
                        <a class="collapse-item" href="<?= base_url('publisher'); ?>">publisher</a>
                    </div>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities" aria-expanded="true" aria-controls="collapseUtilities">
                    <i class="fas fa-fw fa-bookmark"></i>
                    <span>borrower</span>
                </a>
                <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <a class="collapse-item" href="<?= base_url('borrower'); ?>">Borrower</a>
                        <a class="collapse-item" href="<?= base_url('borrow'); ?>">Borrow</a>
                    </div>
                </div>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">
            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>
        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">
            <!-- Main Content -->
            <div id="content">
                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">
                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>
                    <!-- Topbar Search -->
                    <form class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
                        <div class="input-group">
                            <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
                            <div class="input-group-append">
                                <button class="btn btn-primary" type="button">
                                    <i class="fas fa-search fa-sm"></i>
                                </button>
                            </div>
                        </div>
                    </form>
                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Nav Item - Search Dropdown (Visible Only XS) -->
                        <li class="nav-item dropdown no-arrow d-sm-none">
                            <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-search fa-fw"></i>
                            </a>
                            <!-- Dropdown - Messages -->
                            <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in" aria-labelledby="searchDropdown">
                                <form class="form-inline mr-auto w-100 navbar-search">
                                    <div class="input-group">
                                        <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
                                        <div class="input-group-append">
                                            <button class="btn btn-primary" type="button">
                                                <i class="fas fa-search fa-sm"></i>
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </li>

                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fa-solid fa-user m-1" style="color: #4E73DF;"></i>
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small"><?= session('email'); ?></span>
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                                <a class="dropdown-item" href="<?= base_url('logout'); ?>">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Logout
                                </a>
                            </div>
                        </li>
                    </ul>
                </nav>
                <!-- End of Topbar -->

                <!-- Page Contens -->
                <?= $this->renderSection('konten'); ?>
                <!-- Page contens  -->

                <!-- awal footer -->
                <footer class="sticky-footer bg-white">
                    <div class="container my-auto">
                        <div class="copyright text-center my-auto">
                            <span>Copyright &copy; MyFer Website 2023</span>
                        </div>
                    </div>
                </footer>
                <!-- scroll top bar  -->
                <a class="scroll-to-top rounded" href="#page-top">
                    <i class="fas fa-angle-up"></i>
                </a>
                <!-- akhir footer -->


                <!--------------------------------------------------------- script---------------------------------------------------->
                <!-- <script>
                const del = document.querySelector('a.btn.btn-danger');
                del.addEventListener('click', function() {
                    confirm('Anda yakin untuk mengehapus?');
                });
                </script> -->
                <!-- javascript ICONS -->
                <script src="<?= base_url('public'); ?>/js/all.js"></script>
                <script src="<?= base_url('public'); ?>/js/brands.js"></script>
                <script src="<?= base_url('public'); ?>/js/fontawesome.js"></script>
                <script src="<?= base_url('public'); ?>/js/regular.js"></script>
                <script src="<?= base_url('public'); ?>/js/solid.js"></script>

                <!-- Bootstrap core JavaScript-->
                <script src="<?= base_url('public/sb/'); ?>vendor/jquery/jquery.min.js"></script>
                <script src="<?= base_url('public/sb/'); ?>vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
                <!-- Core plugin JavaScript-->
                <script src="<?= base_url('public/sb/'); ?>vendor/jquery-easing/jquery.easing.min.js"></script>
                <!-- Custom scripts for all pages-->
                <script src="<?= base_url('public/sb/'); ?>js/sb-admin-2.min.js"></script>
                <!-- Page level plugins -->
                <script src="<?= base_url('public/sb/'); ?>vendor/chart.js/Chart.min.js"></script>
                <script src="<?= base_url('public/sb/'); ?>vendor/datatables/jquery.dataTables.min.js"></script>
                <script src="<?= base_url('public/sb/'); ?>vendor/datatables/dataTables.bootstrap4.min.js"></script>
                <!-- Page level custom scripts -->
                <script src="<?= base_url('public/sb/'); ?>js/demo/datatables-demo.js"></script>
                <script src="<?= base_url('public/sb/'); ?>js/demo/chart-area-demo.js"></script>
                <script src="<?= base_url('public/sb/'); ?>js/demo/chart-pie-demo.js"></script>
                <script src="<?= base_url('public/sb/'); ?>js/demo/chart-bar-demo.js"></script>

</body>

</html>