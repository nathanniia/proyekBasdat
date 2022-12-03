<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Reservasi</title>
    <!-- di bawah ini source google font -->
    <style>@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@800&family=Roboto:wght@100&display=swap');</style>
    <!-- di bawah ini source bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <!-- di bawah ini source style.css -->
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<div class="header">
        <div class="row">
            <div class="col-md-4">
                <div class="textlogo">Re's Hotel</div>
            </div>
            <div class="col-md-3"></div>
            <div class="col-md-5">
                <div class="boxlogin">
                    <form class="form-inline" role="form">
                    <a class="btn btn-primary" href="home.php" role="button">Home</a>
                    <a class="btn btn-primary" href="#" role="button">Kamar</a>
                    <a class="btn btn-primary" href="reservasi.php" role="button">Reservasi</a>
                    <a class="btn btn-primary" href="index.php" role="button">Log Out</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="hero">
        <div class="row">
            <div class="col-md-6">
                <div class="formhero">
                    <div class="panel panel-default">
                        <div class="panel-body">
                            <h1>Reservasi</h1>
                            <form role="form">
                                <div class="form-group">
                                    <label for="nama_lengkap"><h4>Nama Lengkap</h4></label>
                                    <input type="text" class="form-control" id="nama_lengkap" placeholder="Enter Nama">
                                </div>
                                <div class="form-group">
                                    <label for="no_telepon"><h4>No Telepon</h4></label>
                                    <input type="text" class="form-control" id="no_telepon" placeholder="Enter Nomor">
                                </div>
                                <div class="form-group">
                                    <label for="alamat"><h4>Alamat</h4></label>
                                    <input type="text" class="form-control" id="alamat" placeholder="Enter Alamat">
                                </div>
                                <div class="form-group">
                                    <label for="email"><h4>Email</h4></label>
                                    <input type="email" class="form-control" id="email" placeholder="Enter Email">
                                </div>
                                <div class="form-group">
                                    <label for="tipe_kamar"><h4>Tipe Kamar</h4></label>
                                    <input type="text" class="form-control" id="tipe_kamar" placeholder="Tipe Kamar">
                                </div>
                                <div class="form-group">
                                    <label for="checkin-date"><h4>Check-in Date</h4></label>
                                    <input type="date" class="form-control" id="checkin-date" placeholder="Tanggal">
                                    
                                </div>
                                <div class="form-group">
                                    <label for="checkout-date"><h4>Check-out Date</h4></label>
                                    <input type="date" class="form-control" id="checkout-date" placeholder="Tanggal">
                                </div>
                                <div class="form-group">
                                    <button type="submit" class="btn btn-primary btn-lg">Submit</button>
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