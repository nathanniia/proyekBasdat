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
        </div>
    </div>
    <div class="hero">
        <div class="row">
            <div class="col-md-6">
                <div class="formhero">
                    <div class="panel panel-default">
                        <div class="panel-body">
                            <h1>Daftar</h1>
                            <form action="registrasi.php" method="post">
                                <div class="form-group fs-3">
                                    <label for="nama_lengkap"><h4>Nama Lengkap</h4></label>
                                    <input type="text" name="nama_lengkap" class="form-control fs-4" id="nama_lengkap" placeholder="Enter Nama">
                                </div>
                                <div class="form-group">
                                    <label for="no_telepon"><h4>No Telepon</h4></label>
                                    <input type="text" name="no_telepon" class="form-control fs-4" id="no_telepon" placeholder="Enter Nomor">
                                </div>
                                <div class="form-group">
                                    <label for="alamat"><h4>Alamat</h4></label>
                                    <input type="text" name="alamat" class="form-control fs-4" id="alamat" placeholder="Enter Alamat">
                                </div>
                                <div class="form-group">
                                    <label for="email"><h4>Email</h4></label>
                                    <input type="email" name="email" class="form-control fs-4" id="email" placeholder="Enter Email">
                                </div>
                                <div class="form-group">
                                    <label for="username"><h4>Username</h4></label>
                                    <input type="text" name="username" class="form-control fs-4" id="username" placeholder="Enter Username">
                                </div>
                                <div class="form-group">
                                    <label for="password"><h4>Password</h4></label>
                                    <input type="password" name="password" class="form-control fs-4" id="password" placeholder="Password">
                                </div>
                                <div class="form-group">
                                <button type="submit" class="btn btn-primary fs-3">Simpan</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>