<?php
require "koneksi.php";
$find= mysqli_select_db($mysqli, $database);


$nama_lengkap = @$_POST["nama_lengkap"];
$no_telepon = @$_POST["no_telepon"];
$alamat = @$_POST["alamat"];
$email = @$_POST["email"];
$username =@$_POST['username'];
$password =@$_POST['password'];


$query="INSERT INTO tamu (nama_lengkap, no_telepon, alamat, email, username, password) VALUES('$nama_lengkap','$no_telepon','$alamat','$email','$username','$password')";
$simpan= mysqli_query($mysqli, $query);
if($simpan){
    header("Location: index.php");
    // echo "Data tersimpan:<br>";
    // echo "Nama                : ".$nama."<br>";
    // echo "Alamat              : ".$alamat."<br>";
    // echo "Email       		  : ".$email."<br>";
    // echo "Nomor HP            : ".$nomorhp."<br>"; 
    //echo "Password            : ".$password."<br>";
}else{
    echo "Data gagal disimpan";}
?>