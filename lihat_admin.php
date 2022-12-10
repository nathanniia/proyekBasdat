<?php

require "koneksi.php";
$find= mysqli_select_db($mysqli, $database);
$query="SELECT * FROM reservasi";
$execute = mysqli_query($mysqli, $query);

?>

<!-- <?php
// require_once("auth.php");
// include('koneksi.php');
// $id_tamu=$_SESSION["tamu"]["id_tamu"];
// $query = mysqli_query($mysqli,"SELECT * FROM reservasi WHERE id_tamu='$id_tamu'"); 
// $result = mysqli_fetch_assoc($query);
// // $lama3 = isset($result['check_out']) ? $result['check_out'] : '';
// // $lama4 = isset($result['check_in']) ? $result['check_in'] : '';
// $out = $result['check_out'];
// $in = $result['check_in'];
// $lama = mysqli_query($mysqli, "SELECT DATEDIFF('$out', '$in') lama from reservasi WHERE id_tamu='$id_tamu'");
// $lama2 = mysqli_fetch_assoc($lama);
?> -->

<!doctype html>
<html lang="en">
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
            <div class="boxlogin d-grid gap-2 d-md-flex justify-content-md-end">
                    <form class="form-inline" role="form">
                    <a class="btn btn-primary me-md-4 fs-3 " href="index.php" role="button">Log Out</a>
                    </form>
                </div>
                
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="b-example-divider b-example-vr"></div>
                <div class="d-flex flex-column flex-shrink-0 p-3 bg-light" style="width: 200px;">
                <hr>
                    <ul class="nav nav-pills flex-column mb-auto ">
                    <li>
                        <a href="lihatData_tamu.php" class="nav-link link-dark fs-3" >
                        <svg class="bi pe-none me-2" width="16" height="16"><use xlink:href="#home"/></svg>
                            Data Tamu
                        </a>
                    </li>
                    <li>
                        <a href="lihat_admin.php" class="nav-link link-dark fs-3" >
                        <svg class="bi pe-none me-2" width="16" height="16"><use xlink:href="#home"/></svg>
                            Data Reservasi
                        </a>
                    </li>
                    <li>
                        <a href="input_kamar.php" class="nav-link link-dark fs-3">
                        <svg class="bi pe-none me-2" width="16" height="16"><use xlink:href="#speedometer2"/></svg>
                            Input Kamar
                        </a>
                    </li>
                    <li>
                        <a href="hapus.php" class="nav-link link-dark fs-3">
                        <svg class="bi pe-none me-2" width="16" height="16"><use xlink:href="#speedometer2"/></svg>
                            Delete & Edit
                        </a>
                    </li>
                    </ul>
                <hr />
            </div>
            <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
            <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
              <h1 class="h1">Data Reservasi </h1>
            </div>

      <table class="table table-bordered fs-4">
				<thead class="table-primary">
                <th>Id Reservasi</th>
				 <th>Id Tamu</th>
                 <th>Id Kamar</th>
				 <th>Nama Lengkap</th>
				 <th>No Handphone</th>
				 <th>Alamat</th>
                 <th>Tipe Kamar</th>
                 <th>Check In</th>
                 <th>Check Out</th>
                 <th>Total Harga</th>
                 <th>Menu</th>
				</thead>
				<?php while($result = mysqli_fetch_assoc($execute)){ ?>
				<tr>
                <td><?= $result['id_reservasi']?></td>
				 <td><?= $result['id_tamu']?></td>
                 <td><?= $result['id_kamar']?></td>
				 <td><?= $result['nama_lengkap']?></td>
				 <td><?= $result['no_telepon']?></td>
				 <td><?= $result['alamat']?></td>
				 <td><?= $result['tipe_kamar']?></td>
                 <td><?= $result['check_in']?></td>
                 <td><?= $result['check_out']?></td>
                 <td><?= rupiah ($result['total_harga'])?></td>
                 <td>
                    <a href="?HapusButton=<?php echo $result['id_reservasi'] ?>" onclick="">
                        <input type="submit" class="btn btn-primary fs-4" value="Sudah Reservasi">
                    </a>
                 </td>
         <!-- <td align=center>
            <a href="detail_user.php?Nama=<?= $result[0]?>"><button type="button" class="btn btn-primary">Lihat Detail</button></a>
            <a href="deleteUser.php?IdUser=<?= $result['id_user']?>"><button type="button" class="btn btn-primary">Hapus</button></a>
				 </td> -->
				</tr>
				<?php }?>
			</table>





<?php 

if (isset($_GET['HapusButton'])) {
    # code...
    $hapus = $_GET['HapusButton'];

    mysqli_query($mysqli, "DELETE FROM reservasi WHERE id_reservasi = '$hapus'");

    echo "<meta http-equiv=refresh content=0,URL='lihat_admin.php'>";

}


?>