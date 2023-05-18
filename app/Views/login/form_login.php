<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- ICON Bar  -->
    <link rel="icon" href="https://cdn.icon-icons.com/icons2/1148/PNG/512/1486503771-book-books-education-library-reading-open-book-study_81275.png">
    <!-- CSS Bootstrap  -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/chartist.js/latest/chartist.min.css">
    <link rel="stylesheet" href="/css/style.css">
    <!-- CSS Login Colorlib  -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="<?= base_url('public/login/'); ?>fonts/icomoon/style.css">
    <link rel="stylesheet" href="<?= base_url('public/login/'); ?>css/owl.carousel.min.css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?= base_url('public/login/'); ?>css/bootstrap.min.css">
    <!-- Style -->
    <link rel="stylesheet" href="<?= base_url('public/login/'); ?>css/style.css">
    <title>login Sekarang</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Courgette&family=Leckerli+One&family=Sriracha&display=swap');

        body {
            box-sizing: border-box;
            overflow: hidden;
            background-repeat: no-repeat;
            background-size: cover;
            color: black;
        }

        .half {
            background-color: #4E73DF;
        }

        .card-me {
            width: 50vw;
            border: 3px solid violet;
            margin: 150px auto;
            backdrop-filter: blur(20px);
            background-color: transparent;
            position: relative;
        }

        @media screen and (max-width: 767px) {
            .card-me {
                width: 100vw;
                height: 100vh;
            }
        }

        .judul-web {
            font-family: 'Sriracha', cursive;
        }

        .judul-web span {
            font-family: 'Leckerli One', cursive;
            color: purple;
            font-weight: 700;
        }
    </style>
</head>

<body>
    <div class="half">
        <div class="bg order-1 order-md-2" style="background-image: url('<?= base_url('public/'); ?>image/library2.jpg');"></div>
        <div class="contents bg-gradient order-2 order-md-1">
            <div class="container">
                <div class="row align-items-center justify-content-center">
                    <div class="col-md-6">
                        <div class="form-block">
                            <div class="text-center mb-5">
                                <?php if (!empty(session()->getFlashdata('error'))) : ?>
                                    <div class="alert alert-warning alert-dismissible fade show " onclick="style.display = 'none'" role="alert">
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
                                <img class="my-2" style="width: 70px; display: iniline-block; margin: auto;" src="https://cdn.icon-icons.com/icons2/1148/PNG/512/1486503771-book-books-education-library-reading-open-book-study_81275.png" alt="Perpustaka.an">
                                <h3>Login to <strong class="judul-web">Perpustaka<span>.an</span></strong></h3>
                            </div>
                            <form action="<?= base_url('auth'); ?>" method="POST" enctype="multipart/form-data">
                                <?= csrf_field(); ?>
                                <div class="form-group first">
                                    <label for="username">Username</label>
                                    <input type="email" name="email" class="form-control" placeholder="your-email@gmail.com" id="username">
                                </div>
                                <div class="form-group last mb-3">
                                    <label for="password">Password</label>
                                    <input type="password" name="password" class="form-control" placeholder="Your Password" id="password">
                                </div>
                                <button type="submit" class="btn-block btn btn-danger">Log in</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Javascript Login Colorlib  -->
    <script src="<?= base_url('public/login/'); ?>js/jquery-3.3.1.min.js"></script>
    <script src="<?= base_url('public/login/'); ?>js/popper.min.js"></script>
    <script src="<?= base_url('public/login/'); ?>js/bootstrap.min.js"></script>
    <script src="<?= base_url('public/login/'); ?>js/main.js"></script>
</body>

</html>