<?php
 $user_name = "root";
 $password  = "";
 $database  = "proyekakhir";
 $host_name = "localhost";

 $mysqli= mysqli_connect($host_name, $user_name, $password, $database) or die('Koneksi ke database gagal!');


 function rupiah($angka){
	
	$hasil_rupiah = "Rp " . number_format($angka,2,',','.');
	return $hasil_rupiah;
 
}


 ?>