<?php

include 'koneksi.php';

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Re's Hotel</title>
    <!-- di bawah ini source google font -->
    <style>@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@800&family=Roboto:wght@100&display=swap');</style>
    <!-- di bawah ini source bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <!-- di bawah ini source style.css -->
    <link rel="stylesheet" type="text/css" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>
<body>

    <div class="header">
        <div class="row">
            <div class="col-md-4">
                <div class="textlogo">Re's Hotel</div>
            </div>
            <div class="col-md-3"></div>
            <div class="col-md-5">
            <div class="boxlogin ">
                    <form class="form-inline d-grid gap-2 d-md-flex justify-content-md-end" role="form">
                    <a class="btn btn-primary me-md-2 fs-3" href="daftar.php" role="button">Daftar</a>
                    <a class="btn btn-primary me-md-2 fs-3" href="loginadmin.php" role="button">Admin</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="hero">
    <div class="container">>
            <div class="col-md-6">
                <div class="formhero">
                    <div class="panel panel-default">
                        <div class="panel-body">
                            <h1>Sign In</h1>
                            <form action="login.php" method="post">
                                <div class="form-group fs-3">
                                    <label for="username"><h4>Username</h4></label>
                                    <input type="text" name="username" class="form-control fs-3" id="username" placeholder="Enter Username">
                                </div>
                                <div class="form-group fs-3">
                                    <label for="password"><h4>Password</h4></label>
                                    <input type="password" name="password" class="form-control fs-3" id="password" placeholder="Password">
                                </div>
                                <div class="form-group fs-3">
                                <button class="w-100 btn btn-lg btn-primary fs-3" type="submit" name="login">Masuk</button>
                                
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>
</html>