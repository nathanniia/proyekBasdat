<?php
require_once("auth.php");
require "koneksi.php";
$find= mysqli_select_db($mysqli, $database);
$query="SELECT * FROM kamar WHERE status = 0";
$execute = mysqli_query($mysqli, $query);
?>

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
                    <a class="btn btn-primary fs-3" href="home.php" role="button">Home</a>
                    <a class="btn btn-primary fs-3" href="lihat_kamar.php" role="button">Kamar & Reservasi</a>
                    <a class="btn btn-primary me-md-4 fs-3" href="index.php" role="button">Log Out</a>
                    </form>
                </div>
            </div>
        </div>
    </div>

  
          <main class="col-md-9 ms-sm-auto col-lg-12 px-md-4">
            <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
              <h3 class="h5 fs-1"></h3>
            </div>    
            
            <form action="lihat_kamar.php" class="fs-3" method="get">
              <label>Cari :</label>
              <input type="text" name="cari">
              <input type="submit" value="Cari">
            </form>

      <table class="table table-bordered" style="margin-bottom:40px;">
				<thead class="table-primary fs-3">
				 <td align=center>Id Kamar</td>
				 <td align=center>Tipe Kamar</td>
				 <td align=center>Fasilitas</td>
				 <td align=center>Harga</td>
         <td align=center>Pilihan Menu</td>
				</thead>
				<?php //while($result = mysqli_fetch_assoc($execute)){
          if(isset($_GET['cari'])){
            $cari = $_GET['cari'];
            $data = mysqli_query($mysqli,"select * from kamar where tipe_kamar like '%".$cari."%' and status=0");    
          }else{
            $data = mysqli_query($mysqli,"select * from kamar where status = 0");  
          }
          
          while($result = mysqli_fetch_array($data)){
          ?>
				<tr>
				 <td class="fs-2"><?= $result['id_kamar']?></td>
         <td class="fs-2"><?= $result['tipe_kamar']?></td>
				 <td class="fs-2"><?= $result['fasilitas']?></td>
				 <td class="fs-2"><?= rupiah ($result['harga'])?></td>
         <td align=center>
            <a href="detail_kamar.php?IdKamar=<?= $result['id_kamar']?>"><button type="button" class="btn btn-primary fs-4">Lihat Detail</button></a>
            <a href="reservasi.php?IdKamar=<?= $result['id_kamar']?>"><button type="button" class="btn btn-primary fs-4">Reservasi</button></a>
				 </td>
				</tr>
				<?php }?>
        </table>
          </main>
        </div>
    </div>

      
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>
</html>