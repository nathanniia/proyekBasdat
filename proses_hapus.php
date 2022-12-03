<?php
require "koneksi.php";

$id_kamar = $_GET['IdKamar'];
$sql = "DELETE FROM kamar WHERE id_kamar='$id_kamar'";
$execute= mysqli_query($mysqli, $sql);

if($execute){
	header("Location:hapus.php");
}
else{
	echo "GAGAL MENGHAPUS";
}
?>