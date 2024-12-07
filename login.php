<?php  
include "connection.php";

if(isset($_REQUEST['login']))
{
 $lemail = $_POST['Lemail'];
  $lpass = md5($_POST['Lpass']);


    $sql= "SELECT * FROM login WHERE email='$lemail' and password='$lpass'";


    $result=mysqli_query($con,$sql) or die("Query is failed...");
    
    
    if(mysqli_num_rows($result)>0){
      while($row=mysqli_fetch_assoc($result))
        {
        session_start();
            $_SESSION['username']=$row['email'];
            $_SESSION['pass']=$row['password'];
        echo "<script>
            alert('Successfully login.....');
            window.location.href='index.php';</script>";
    
        //header("location:index.php");
        }
    }
    else{
      
      echo "<html><head><script>alert('Username OR Password is Invalid');</script></head></html>";
      echo "<script>window.location.href='member.php';</script>";

        //include 'index.php';
    }
    }







?>