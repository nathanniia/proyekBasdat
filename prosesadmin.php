<?php
require "koneksi.php";
$find= mysqli_select_db($mysqli, $database);

$username = $_POST['username'];
$password=$_POST['password'];

 
$query = "SELECT * FROM admin where username='$username' AND password='$password'";
$data= mysqli_query($mysqli, $query);
$cek = mysqli_num_rows($data);

if($cek){
    session_start();
    $_SESSION["lihat_adminadmin"] = $data;
    header("Location: lihat_admin.php");
}else{
    echo "email atau password salah";
    
}