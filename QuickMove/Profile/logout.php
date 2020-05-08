<?php
session_start();
$_SESSION['loggedin'] = 0;
header("location: http://localhost:8080/QuickMove/Home/home.php");
?>