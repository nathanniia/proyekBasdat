<?php
require "koneksi.php";
$find= mysqli_select_db($mysqli, $database);

$username = $_POST['username'];
$password=$_POST['password'];

 
$query = "SELECT * FROM tamu where username='$username' AND password='$password'";
$data= mysqli_query($mysqli, $query);
$result= mysqli_fetch_assoc($data);
$cek = mysqli_num_rows($data);

if($cek){
    session_start();
    $_SESSION["tamu"] = $result;
    header("Location: home.php");
}else{
    echo "email atau password salah";
    
}
