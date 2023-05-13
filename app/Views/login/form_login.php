<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/chartist.js/latest/chartist.min.css">
    <link rel="stylesheet" href="/css/style.css">
    <title>login Sekarang</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Courgette&family=Leckerli+One&family=Sriracha&display=swap');

        body {
            overflow: hidden;
            background-image: url("<?= base_url('public'); ?>/image/library.jpg");
            background-color: #aea;
            background-repeat: no-repeat;
            background-size: cover;
            color: white;
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

    <div class="card card-me">
        <div class="card-body">
            <h3 class="judul-web">Perpustaka<span>.an</span></h3>
            <h1 class="lead display-5 text-center mb-4">Login</h1>
            <?php if (!empty(session()->getFlashdata('error'))) : ?>
                <div class="alert alert-warning alert-dismissible fade show" onclick="style.display = 'none'" role="alert">
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
            <form action="<?= base_url('auth'); ?>" method="POST" enctype="multipart/form-data">
                <?= csrf_field(); ?>
                <div class="mb-3 row">
                    <label for="email" class="col-sm-2 col-form-label">Email</label>
                    <div class="col-sm-10">
                        <input type="text" name="email" class="form-control" required id="email">
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="password" class="col-sm-2 col-form-label">Password</label>
                    <div class="col-sm-10">
                        <input type="password" name="password" class="form-control" required id="password">
                    </div>
                </div>
                <button class="btn btn-primary mt-3 form-control" type="submit">login</button>
            </form>
        </div>
    </div>
</body>

</html>