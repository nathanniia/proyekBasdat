<?php
require_once("auth.php");
include('koneksi.php');
$id_tamu=$_SESSION["tamu"]["id_tamu"];
$query = mysqli_query($mysqli,"SELECT * FROM reservasi INNER JOIN kamar USING (id_kamar) WHERE id_tamu='$id_tamu'"); 
$result = mysqli_fetch_assoc($query);
// $lama3 = isset($result['check_out']) ? $result['check_out'] : '';
// $lama4 = isset($result['check_in']) ? $result['check_in'] : '';
$out = $result['check_out'];
$in = $result['check_in'];
$lama = mysqli_query($mysqli, "SELECT DATEDIFF('$out', '$in') lama from reservasi WHERE id_tamu='$id_tamu'");
$lama2 = mysqli_fetch_assoc($lama);
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
                <div class="boxlogin d-grid gap-2 d-md-flex justify-content-md-end">
                    <form class="form-inline" role="form">
                    <a class="btn btn-primary fs-3" href="home.php" role="button">Home</a>
                    <a class="btn btn-primary fs-3" href="lihat_kamar.php" role="button">Kamar & Reservasi</a>
                    <a class="btn btn-primary me-md-4 fs-3" href="index.php" role="button">Log Out</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
<pre class="fs-3">
        Nama Lengkap    : <?php echo  $result['nama_lengkap']?> <br>
        No Telepon      : <?php echo  $result['no_telepon']?> <br>
        Alamat          : <?php echo  $result['alamat']?> <br>
        Tipe Kamar      : <?php echo  $result['tipe_kamar']?> <br>
        Checkin         : <?php echo  $result['check_in']?> <br>>
        Checkout        : <?php echo  $result['check_out']?> <br>
        Lama Menginap   : <?php echo  $lama2['lama']?> <br>
        Tarif Sewa      : <?php echo  rupiah($result['harga']) ?> <br>
        ======================================== <br>
        Subtotal     : <?php echo  rupiah($result['harga'] * $lama2['lama']) ?>

        <a href="lihat_kamar.php?IdKamar=<?= $result['id_kamar']?>"><button type="button" class="btn btn-primary fs-3 " style="margin-left:40%">Kembali</button></a> 

</body>
</html>