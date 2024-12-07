<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login</title>
    <link rel="stylesheet" href="assets /css/demo1.css">
</head>
<body>
    <div class="admin-login-container">
        <div class="admin-login-form">
            <h2>Admin Login</h2>
            <form action="login.php" method="post">
                <div class="input-group">
                    <label for="email">Email</label>
                    <input type="email" id="user" placeholder="Enter Email" name="EMail" autocomplete="off" required>
                </div>
                <div class="input-group">
                    <label for="password">Password</label>
                    <input type="password" id="pass" placeholder="Enter Password" name="Password" required>
                </div>
                <div class="input-group">
                    <button type="submit" name="login">Login</button>
                </div>
                <div class="forgot-password">
                    <a href="../index.php">Redirect to Home</a>
                </div>
            </form>
        </div>
    </div>
    
<script src="js/login.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
</body>

</html>
<?php
include "connection.php";

if(isset($_REQUEST['login']))
{
$uname=$_POST['EMail'];
$pass=md5($_POST['Password']);

$sql= "SELECT * FROM admin WHERE email='$uname' and password='$pass'";


$result=mysqli_query($con,$sql) or die("Query is failed...");


if(mysqli_num_rows($result)>0){
	while($row=mysqli_fetch_assoc($result))
    {
		session_start();
        $_SESSION['email']=$row['email'];
        $_SESSION['password']=$row['password'];
		echo "<script>alert('Login SuccessFully Done....');
        window.location.href='user.php';</script>";

		//header("location:index.php");
    }
}
else{
	
	echo "<html><head><script>alert('Username OR Password is Invalid');</script></head></html>";
    //include 'index.php';
}
}
?>

