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
        body {
            overflow: hidden;
        }

        .card-me {
            width: 50vw;
            border: 5px solid violet;
            margin: 150px auto;
        }

        @media screen and (max-width: 767px) {
            .card-me {
                width: 100vw;
                height: 100vh;
            }
        }
    </style>
</head>

<body>
    <div class="card card-me">
        <div class="card-body">
            <form action="#" method="POST">
                <div class="mb-3 row">
                    <label for="nama" class="col-sm-2 col-form-label">Name</label>
                    <div class="col-sm-10">
                        <input type="text" name="nama" class="form-control" id="nama">
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="email" class="col-sm-2 col-form-label">Email</label>
                    <div class="col-sm-10">
                        <input type="text" name="email" class="form-control" id="email">
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="password" class="col-sm-2 col-form-label">Password</label>
                    <div class="col-sm-10">
                        <input type="password" name="password" class="form-control" id="password">
                    </div>
                </div>
                <button class="btn btn-primary mt-3 form-control" type="submit">login</button>
            </form>
        </div>
    </div>
</body>

</html>