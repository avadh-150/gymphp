<?php 
session_start();
if(!isset($_SESSION["username"])){
    echo "<script>window.location.href='logout.php';</script>";
           // header("location:login.php");
    }
?>