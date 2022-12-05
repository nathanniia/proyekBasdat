<?php
require_once("auth.php");
include('koneksi.php');
$id_tamu=$_SESSION["tamu"]["id_tamu"];
$query = mysqli_query($mysqli,"SELECT * FROM reservasi WHERE id_tamu='$id_tamu'"); 
$result = mysqli_fetch_assoc($query);

?>


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
<pre>
        Nama Lengkap    : <?php echo  $result['nama_lengkap']?> <br>
        No Telepon      : <?php echo  $result['no_telepon']?> <br>
        Alamat          : <?php echo  $result['alamat']?> <br>
        Tipe Kamar      : <?php echo  $result['tipe_kamar']?> <br>
        Checkin         : <?php echo  $result['check_in']?> <br>>
        Checkout        : <?php echo  $result['check_out']?> <br>
        Lama Menginap   : <?php echo $lama; ?> Hari <br>
        Tarif Sewa      : <?php echo "Rp.".number_format($harga); ?> <br>
        ======================================== <br>
        Subtotal     : <?php echo "Rp.".number_format($subtotal); ?> <br>
        <pre>
        <br>

</body>
</html>