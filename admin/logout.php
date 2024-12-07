<?php 
//  $conn=mysqli_connect("localhost","root","","gymsite") or die("connection is failed....");
include "connection.php";
    session_start();

    session_unset();
    session_destroy();

header("location:login.php")

?>