<?php

session_start();
if(!isset($_SESSION["tamu"])) header("Location: index.php");

?>