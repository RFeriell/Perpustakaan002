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
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/chartist.js/latest/chartist.min.css">
        <!-- CSS ICON -->
        <link rel="stylesheet" href="<?= base_url('public'); ?>/css/all.css">
        <link rel="stylesheet" href="<?= base_url('public'); ?>/css/brands.css">
        <link rel="stylesheet" href="<?= base_url('public'); ?>/css/fontawesome.css">
        <link rel="stylesheet" href="<?= base_url('public'); ?>/css/regular.css">
        <link rel="stylesheet" href="<?= base_url('public'); ?>/css/solid.css">
        <style>
            /* google fonts link  */
            @import url('https://fonts.googleapis.com/css2?family=Courgette&family=Leckerli+One&family=Sriracha&display=swap');

            body {
                background-color: #f8f9fa;
            }

            main {
                position: relative;
            }

            .sidebar {
                top: 0;
                bottom: 0;
                left: 0;
                position: fixed;
                z-index: 100;
                padding: 90px 0 0;
                box-shadow: inset -1px 0 0 rgba(0, 0, 0, .1);
                z-index: 99;
            }

            @media (max-width: 767.98px) {
                .sidebar {
                    top: 11.5rem;
                    padding: 0;
                }
            }

            .navbar {
                box-shadow: inset 0 -1px 0 rgba(0, 0, 0, .1);
            }

            @media (min-width: 767.98px) {
                .navbar {
                    top: 0;
                    position: sticky;
                    z-index: 999;
                }
            }

            .sidebar .nav-link {
                color: #333;
            }

            .sidebar .nav-link.active {
                color: #0d6efd;
            }

            .nav-item:hover {
                background-color: #f0f0f0;
            }

            .nav-item details ul li a {
                display: inline-block;
                color: black;
                text-decoration: none;
            }

            .nav-item details ul li a span {
                padding: 0 5px;
            }

            .judul-web {
                font-family: 'Sriracha', cursive;
            }

            .judul-web span {
                font-family: 'Leckerli One', cursive;
                color: purple;
                font-weight: 700;
            }

            .radius {
                border-radius: 5px;
            }

            .nav-item details ul li:hover a {
                text-decoration: underline;
                color: black;
                background-color: #0D6EFD;
                color: white;
            }

            .nav-item details ul li a {
                margin: 5px 0;
                display: block;
                padding: 10px;
                background-color: #e9e6e6;
                border-radius: 8px;
                transition: all .2s;
                font-weight: 600;
                /* border: 1px solid black; */
            }
        </style>
    </head>

    <body>
        <nav class="navbar navbar-dark bg-primary p-3">
            <div class="d-flex col-12 col-md-3 col-lg-2 mb-2 mb-lg-0 flex-wrap flex-md-nowrap justify-content-between">
                <a class="navbar-brand" href="<?= base_url('/'); ?>">
                    <h3 class="judul-web">Perpustaka<span>.an</span></h3>
                </a>
                <button class="navbar-toggler d-md-none collapsed mb-3" type="button" data-toggle="collapse" data-target="#sidebar" aria-controls="sidebar" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
            </div>
            <div class="col-12 col-md-4 col-lg-2">
                <input class="form-control form-control-dark" type="text" placeholder="Search" aria-label="Search">
            </div>
            <div class="col-12 col-md-5 col-lg-8 d-flex align-items-center justify-content-md-end mt-3 mt-md-0">
                <div class="dropdown">
                    <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-expanded="false">
                        <?= session('email'); ?>
                    </button>
                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                        <li><a class="dropdown-item" href="<?= base_url('logout'); ?>">Logout</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <div class="container-fluid">
            <div class="row">
                <nav id="sidebar" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
                    <div class="position-sticky">
                        <ul class="nav flex-column">
                            <li class="nav-item">
                                <a class="nav-link" aria-current="page" href="<?= base_url('/home'); ?>">
                                    <i class="fa fa-home"></i>
                                    <span class="ml-2"><strong>Home</strong></span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" aria-current="page" href="<?= base_url('/staff'); ?>">
                                    <i class="fa-solid fa-user"></i>
                                    <span class="ml-2"><b>Staf</b></span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <details class="nav-link">
                                    <summary type="none" style="cursor: pionter;" class="d-block">
                                        <i class="fa fa-book"></i>
                                        <span class="ml-2"><b>Books</b></span>
                                    </summary>
                                    <ul type="none">
                                        <li><a href="<?= base_url('/book'); ?>"><i class="fa fa-book"></i></i></i><span class="ml-2">Book</span></a></li>
                                        <li><a href="<?= base_url('category'); ?>"><i class="fa fa-book"></i></i><span class="ml-2">Category</span></a></li>
                                        <li><a href="<?= base_url('publisher'); ?>"><i class="fa fa-book"></i></i><span class="ml-2">Publisher</span></a></li>
                                    </ul>
                                </details>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" aria-current="page" href="<?= base_url('/borrower'); ?>">
                                    <i class="fa-solid fa-bookmark"></i>
                                    <span class="ml-2"><b>Borrower</b></span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
        <!-- akhir navbar -->

        <!-- Page Contens -->
        <?= $this->renderSection('konten'); ?>
        <!-- Page contens  -->

        <!-- awal footer -->

        <!-- akhir footer -->


        <!--------------------------------------------------------- script---------------------------------------------------->
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js" integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/chartist.js/latest/chartist.min.js"></script>
        <!-- javascript ICONS -->
        <script src="<?= base_url('public'); ?>/js/all.js"></script>
        <script src="<?= base_url('public'); ?>/js/brands.js"></script>
        <script src="<?= base_url('public'); ?>/js/fontawesome.js"></script>
        <script src="<?= base_url('public'); ?>/js/regular.js"></script>
        <script src="<?= base_url('public'); ?>/js/solid.js"></script>
    </body>

    </html>