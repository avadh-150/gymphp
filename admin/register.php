
<?php
session_start();
error_reporting(0);
include('connection.php');
if (!isset($_SESSION['email'])) {
  header('location:logout.php');
  } else{

?><!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content=
        "width=device-width, initial-scale=1.0" />
    <title>Form Validation</title>
<style>
    
    body {
    font-family: Arial, sans-serif;
    background-color: #f0f2f5;
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
    margin: 80px;
    flex-direction: column;
}

h1 {
    margin-bottom: 20px;
    color: #333;
}

form {
    background-color: #fff;
    padding: 40px;
    border-radius: 10px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    width: 500px;
    text-align: left;
}

label {
    display: block;
    margin-bottom: 5px;
    color: #333;
}

input, textarea {
    width: calc(100% - 20px);
    padding: 10px;
    margin: 10px 0;
    border: 1px solid #ccc;
    border-radius: 5px;
    font-size: 14px;
}

.error-message {
    color: red;
    font-size: 12px;
    margin-top: -10px;
}

input[type="submit"] {
    width: 100%;
    padding: 10px;
    background-color: #4CAF50;
    color: white;
    border: none;
    border-radius: 5px;
    font-size: 16px;
    cursor: pointer;
}

input[type="submit"]:hover {
    background-color: #45a049;
}

</style>
</head>

<body>
    <h1>ADMIN REGISTRATION</h1>
    <form method="post" action="register.php" name="RegForm" onsubmit="return validateForm()">
        <p>
            <label for="name">User Name:</label>
            <input type="text" id="name" name="Name" 
                placeholder="Enter your User name" />
            <span id="name-error" class="error-message"></span>
        </p>
      
        <p>
            <label for="email">Email:</label>
            <input type="text" id="email" name="EMail" 
            placeholder="Enter your email" />
            <span id="email-error" class="error-message"></span>
        </p>
      
        <p>
            <label for="password">Password:</label>
            <input type="password" id="password" name="Password" placeholder="Enter your Password" />
            <span id="password-error" class="error-message"></span>
        </p>
        <p>
            <label for="email">Contact No.</label>
            <input type="text" id="contact" name="contact" 
            placeholder="Enter your contact number" />
            <span id="contact-error" class="error-message"></span>
        </p>
        <p>
            <label for="comment">City:</label>
            <input  id="address" name="city" 
            placeholder="Enter your city"></input>
            <span id="address-error" class="error-message"></span>
        </p>
        <p>
            <label for="comment">State:</label>
            <input  id="address" name="state" 
            placeholder="Enter your State"></input>
            <span id="address-error" class="error-message"></span>
        </p>
       
        
       
        <p>
            <input type="submit" value="Register Now" name="Submit" />
        </p>
    </form>
    <script src="assets/js/register.js"></script>
</body>

</html>

<?php
include "connection.php";
if (isset($_REQUEST['Submit'])) {
    
    $uname = $_POST['Name'];
    $email = $_POST['EMail'];
    $pass = md5($_POST['Password']);
    $no = $_POST['contact'];
    $city = $_POST['city'];
    $state = $_POST['state'];
    // $gn = $_POST['Subject'];
   

    $sql = "insert into admin(username,email,password,contact,city,state) values('$uname','$email','$pass','$no','$city','$state')";
    $result = mysqli_query($con, $sql) or die("some query issues....");
    
    if ($result) {
        echo "<script>alter('register the record..........')</script>";

       // header("location:login.php");
                     echo "<script>window.location.href='login.php';</script>";
    } else {
        echo "error......";
    }
}}
?>
