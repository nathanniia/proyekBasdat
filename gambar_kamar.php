<?php
include('koneksi.php');
if(isset($_GET['IdKamar'])) 
{
    $query = mysqli_query($mysqli,"SELECT gambar FROM kamar WHERE id_kamar='".$_GET['IdKamar']."'");
    $row = mysqli_fetch_array($query);
    echo $row["gambar"];
}
else
{
    header('location:detail_kamar.php');
}
?>