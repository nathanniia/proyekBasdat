<?php

require "koneksi.php";
$find= mysqli_select_db($mysqli, $database);

$id_kamar = $_GET['IdKamar'];
$sql_read = "SELECT * FROM kamar WHERE id_kamar='$id_kamar'";
$execute_read = mysqli_query($mysqli, $sql_read);
$result_read = mysqli_fetch_assoc($execute_read);

if(isset($_POST['update'])){
	        $tipe_kamar = @$_POST["tipe_kamar"];
            $fasilitas = @$_POST["fasilitas"];
            $harga = @$_POST["harga"];
            $status = @$_POST["status"];
	
	$sql = "UPDATE kamar SET tipe_kamar='$tipe_kamar', fasilitas='$fasilitas', harga='$harga', status = $status WHERE id_kamar='$id_kamar'";
	$execute = mysqli_query($mysqli, $sql);
	
	if($execute){
		header('Location:hapus.php');
	}else{
		echo "GAGAL UPDATE DATA";
	}
}




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
                    <ul class="nav nav-pills flex-column mb-auto">
                    <li>
                        <a href="#" class="nav-link link-dark fs-3" >
                        <svg class="bi pe-none me-2" width="16" height="16"><use xlink:href="#home"/></svg>
                            Data Tamu
                        </a>
                    </li>
                    <li>
                        <a href="#" class="nav-link link-dark fs-3" >
                        <svg class="bi pe-none me-2" width="16" height="16"><use xlink:href="#home"/></svg>
                            Data Reservasi
                        </a>
                    </li>
                    <li>
                        <a href="#" class="nav-link link-dark fs-3">
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
               
            </div>
            <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
            <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
              <h1 class="h1">Update Kamar </h1>
            </div>
    
          <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
            <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            </div>      
        <form method=post action="<?php $_SERVER['PHP_SELF']?>" enctype="multipart/form-data">
            <div class="row mb-3">
            <label for="inputKamar" class="col-sm-2 col-form-label fs-2">Tipe Kamar</label>
            <div class="col-sm-10">
              <input type="text" name="tipe_kamar" class="form-control fs-3" id="inputKamar" value="<?=$result_read['tipe_kamar']?>">
            </div>
        </div>
        <div class="row mb-3">
            <label for="inputFasilitas" class="col-sm-2 col-form-label fs-2">Fasilitas</label>
            <div class="col-sm-10">
              <input type="text" name="fasilitas" class="form-control fs-3" id="inputFasilitas" value="<?=$result_read['fasilitas']?>">
            </div>
        </div>
        <div class="row mb-3">
            <label for="inputHarga" class="col-sm-2 col-form-label fs-2">Harga</label>
            <div class="col-sm-10">
              <input type="text" name="harga" class="form-control fs-3" id="inputHarga" value="<?=$result_read['harga']?>">
            </div>
        </div>
        <div class="row mb-3">
            <label for="inputStatus" class="col-sm-2 col-form-label fs-2">Status</label>
            <div class="col-sm-10">
              <!-- <input type="text"  value="<?=$result_read['status']?>"> -->
              <select name="status" class="form-control fs-3" id="inputStatus">
                <option>0</option>
                <option>1</option>
              </select>
            </div>
        </div>
        <!-- <div class="row mb-3">
            <label for="inputGroupFile" class="col-sm-2 col-form-label fs-2">Gambar</label>
            <div class="col-sm-10">
              <input type="file" name="gambar" class="form-control f3" id="inputGroupFile02">
            </div>
        </div> -->
        <!-- <button type="submit" class="btn btn-light" name="update"><h3>Update<h3></Input></button> -->
        <button type="submit" class="btn btn-primary fs-4 col-md-3 center-block" name="update">Edit</button>
    </form>
          </main>
        </div>
    </div>

      
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>
</html>