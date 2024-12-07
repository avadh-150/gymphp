

<?php
include "connection.php";
session_start();
error_reporting(0);
if (!isset($_SESSION['email'])) {
  header('location:logout.php');
  } 
  else{
if ($_GET['id']) {
    $id = $_GET['id'];
    $sql = "delete from register where id='$id'";
    $result = mysqli_query($con, $sql) or die("Query Falied.................");
    if ($result) {
        header("location:user.php");
    } else {
        echo "<h1>404</h1>";
    }
}
  }
  if($_GET['pid'])
  {
    $pid = $_GET['pid'];
    $sql = "delete from tbladdpackage where id='$pid'";
    $result = mysqli_query($con, $sql) or die("Query Falied.................");
    if ($result) {
        header("location:manage-post.php");
    } else {
        echo "<h1>404</h1>";
    } 
  }
  
?>