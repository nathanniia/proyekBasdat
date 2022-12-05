<?php
require_once("auth.php");
include('koneksi.php');
$id_kamar=$_GET['IdKamar'];
$query = mysqli_query($mysqli,"SELECT * FROM kamar WHERE id_kamar='$id_kamar'");
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>login form</title>
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
                    <a class="btn btn-primary fs-3" href="lihat_kamar.php" role="button">Kamar & Reservasi</a>
                    <a class="btn btn-primary fs-3" href="index.php" role="button">Log Out</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
    
    <?php while($result = mysqli_fetch_assoc($query)){ ?>

        <div>
          <div class="row g-0">
            <div class="col-md-4">
              <img src="gambar_kamar.php?IdKamar=<?php echo $result['id_kamar']; ?>" class="img-fluid rounded-start" alt="...">
            </div>
            <div class="col-md-8">
              <div class="card-body">
              <p class="card-text fs-1" style="margin-left:8%"><small class="text-muted">Tipe Kamar</small></p>
              <p class="card-text fs-1" style="margin-left:8%"><?= $result['tipe_kamar']?></p>
              <p class="card-text fs-1" style="margin-left:8%"><small class="text-muted">Fasilitas</small></p>
              <p class="card-text fs-1" style="margin-left:8%"><?= $result['fasilitas']?></p>
              <p class="card-text fs-1" style="margin-left:8%"><small class="text-muted">Harga</small></p>
              <p class="card-text fs-1" style="margin-left:8%"><?= $result['harga']?></p>
              <a href="lihat_kamar.php?IdKamar=<?= $result['id_kamar']?>"><button type="button" class="btn btn-primary fs-3 " style="margin-left:40%">Kembali</button></a> 
              </div>
            </div>
          </div>
        </div>

				<?php }?>
          </main>
        </div>
    </div>  
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>
</html>