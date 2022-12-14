<?php require_once("auth.php"); ?>

<!DOCTYPE html>
<html>
<head>
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
    
    <!-- <h1><center>Selamat Datang </center></h1>
  <img src="img/img_4.jpg" alt="Nature" style="width:100%;"> -->

  <div class="col-12 py-4 text-center">
                <h1 class="display-1">Selamat Datang</h1>
                <!-- <p class="lead">Panduan Belajar Bootstrap untuk Pemula</p> -->
            </div>

            <div class="col-md-8 py-3 fs-3">
                <h1><center>RE'S HOTEL</center></h1>
                <p><center>Selamat datang dihalaman utama untuk tamu <br>
                Re's Hotel dapat digunakan untuk membuat reservasi kamar secara online</center></p>
            </div>
            <div class="col-md-4 py-5">
                <img class="w-50" src="img/img_2.jpg" alt="gambar alam">
            </div>


  <main class="container border">
        <!-- <div class="row"> -->
            <hr>
            <div class="col-md-4">
                <h1>Enjoy</h1>
                <img class="w-50" src="img/enjoy.png" alt="enjoy">
            </div>
            <div class="col-md-4">
                <h1>Happy</h1>
                <img class="w-50" src="img/happy.png" alt="happy">
            </div>
            <div class="col-md-4">
                <h1>Healthy</h1>
                <img class="w-50" src="img/health.png" alt="health">
            </div>
        </div>
    </main>


 
		
</body> 
</html>




