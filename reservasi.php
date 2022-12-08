<?php
require_once("auth.php");
include('koneksi.php');
$id_kamar=$_GET['IdKamar'];
$id_tamu=$_SESSION["tamu"]["id_tamu"];
$query = mysqli_query($mysqli,"SELECT * FROM kamar WHERE id_kamar='$id_kamar'"); 
$query2 = mysqli_query($mysqli,"SELECT * FROM tamu WHERE id_tamu='$id_tamu'");
$result = mysqli_fetch_assoc($query);
$result2 = mysqli_fetch_assoc($query2);

if(isset($_POST['tombol']))
{
            $nama_lengkap = $result2["nama_lengkap"];
            $no_telepon = $result2["no_telepon"];
            $alamat = $result2["alamat"];
            $tipe_kamar = $result["tipe_kamar"];
            $check_in = @$_POST["check_in"];
            $check_out = @$_POST["check_out"];
            $harga = $result["harga"];

            $query3="INSERT INTO reservasi (id_tamu, id_kamar, nama_lengkap, no_telepon, alamat, tipe_kamar, check_in, check_out, harga) VALUES('$id_tamu','$id_kamar','$nama_lengkap','$no_telepon','$alamat', '$tipe_kamar', '$check_in', '$check_out', '$harga')";
            $simpan= mysqli_query($mysqli, $query3);

            mysqli_query($mysqli, "UPDATE kamar SET status = 1 WHERE id_kamar = '$id_kamar'");

            if($simpan){
             header("Location:hasil_reservasi.php");
            }else{
              echo "Data gagal disimpan";}
        }
       
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
                <div class="boxlogin">
                    <form class="form-inline" role="form">
                    <a class="btn btn-primary fs-3" href="home.php" role="button">Home</a>
                    <a class="btn btn-primary fs-3" href="#" role="button">Kamar & Reservasi</a>
                    <!-- <a class="btn btn-primary" href="reservasi.php" role="button">Reservasi</a> -->
                    <a class="btn btn-primary fs-3" href="index.php" role="button">Log Out</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div >
        <div >
            <div class="col-md-6">
                <div >
                    <div class="panel panel-default">
                    <div class="panel-heading">
                            <h1>Reservasi</h1>
                            <div class="panel-body fs-3">
                            <form role="form" method="post">
                                <div class="form-group">
                                    <label for="nama_lengkap"><h4>Nama Lengkap</h4></label>
                                    <input type="text" name="nama_lengkap" value="<?= $result2['nama_lengkap']?>" class="form-control fs-3" id="nama_lengkap">
                                </div>
                                <div class="form-group">
                                    <label for="no_telepon"><h4>No Telepon</h4></label>
                                    <input type="text" name="no_telepon" value="<?= $result2['no_telepon']?>" class="form-control fs-3" id="no_telepon">
                                </div>
                                <div class="form-group">
                                    <label for="alamat"><h4>Alamat</h4></label>
                                    <input type="text" name="alamat" value="<?= $result2['alamat']?>" class="form-control fs-3" id="alamat">
                                </div>
                                <div class="form-group">
                                    <label for="tipe_kamar"><h4>Tipe Kamar</h4></label>
                                    <input type="text" name="tipe_kamar" value="<?= $result['tipe_kamar']?>" class="form-control fs-3" id="tipe_kamar">
                                </div>
                                <div class="form-group">
                                    <label for="harga"><h4>Harga</h4></label>
                                    
                                    <input type="text" name="harga" value="<?=rupiah( $result['harga'])?>" class="form-control fs-3" id="tipe_kamar">
                                </div>
                                <div class="form-group">
                                    <label for="checkin-date"><h4>Check-in Date</h4></label>
                                    <input type="date" name="check_in" class="form-control fs-3" id="checkin-date" >
                                    
                                </div>
                                <div class="form-group">
                                    <label for="checkout-date"><h4>Check-out Date</h4></label>
                                    <input type="date" name="check_out" class="form-control fs-3" id="checkout-date">
                                </div>
                                <div class="form-group">
                                <button type="submit" name="tombol" class="btn btn-primary fs-4">Reservasi</button>
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