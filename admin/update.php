<?php
session_start();
error_reporting(0);
include('connection.php');
if (!isset($_SESSION['email'])) {
  header('location:logout.php');
  } else{

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>UPDATE</title>
    <style>
        body {
    font-family: 'Arial', sans-serif;
    background-color: #f4f4f4;
    margin: 0;
    padding: 0;
}

.container {
    width: 60%;
    margin: 50px auto;
    padding: 30px;
    background-color: #ffffff;
    border-radius: 8px;
    box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
}

.title {
    text-align: center;
    font-size: 28px;
    color: #333;
    margin-bottom: 20px;
}

.t-contect {
    padding: 20px;
}

h1 {
    text-align: center;
    font-size: 22px;
    color: #555;
    margin-bottom: 20px;
}

form {
    display: flex;
    flex-direction: column;
    align-items: center;
}

p {
    width: 100%;
    margin-bottom: 15px;
}

.label, .name {
    font-size: 16px;
    color: #333;
    margin-bottom: 5px;
    display: block;
}

input[type="text"], 
input[type="email"], 
input[type="password"], 
input[type="number"], 
select {
    width: 100%;
    padding: 10px;
    font-size: 14px;
    margin: 5px 0 10px;
    border: 1px solid #ddd;
    border-radius: 4px;
    box-sizing: border-box;
    transition: all 0.3s ease;
}

input:focus, select:focus {
    border-color: #007BFF;
    box-shadow: 0 0 5px rgba(0, 123, 255, 0.5);
}

.btn {
    width: 100%;
    padding: 12px;
    background-color: #007BFF;
    color: #ffffff;
    border: none;
    border-radius: 4px;
    font-size: 16px;
    cursor: pointer;
    transition: background-color 0.3s ease;
    text-align: center;
}

.btn:hover {
    background-color: #0056b3;
}

select {
    cursor: pointer;
}

button[type="submit"] {
    width: 50%;
    margin-top: 10px;
}

button[type="submit"]:hover {
    background-color: #28a745;
}

    </style>
</head>

<body>

    <div class="container">
        <div class="table1">
            <h1 class="title"> Update the </h1>

            <div class="t-contect">

                <h1>Members Records</h1>
                <?php
                include "connection.php";
                $user_id = $_GET['id'];
                $sql = "select * from register where id='$user_id'";
                $result = mysqli_query($con, $sql);
                while ($row = mysqli_fetch_assoc($result)) {

                ?>
                    <form action="" method="post">

                       
                        <p>
                            <label for="fname" class="name">Name :</label><br>
                            <input type="text" value="<?php echo $row['fullname']; ?>" name="fname">

                        </p>
                        <p>
                            <label for="fname" class="name">Name :</label><br>
                            <input type="text" value="<?php echo $row['uname']; ?>" name="uname">

                        </p>
                        <p>
                            <label for="email" class="name">Email Ad : </label> <br>
                            <input type="email" value="<?php echo $row['email']; ?>"  name="email">


                        </p>
                        <p>
                            <label for="pass" class="name">Password :</label><br>
                            <input type="password" value="<?php echo $row['password']; ?>" name="pass">
                        </p>
                        <p>
                            <label for="phone" class="name">Contact no. :</label> <br>
                            <input type="number" value="<?php echo $row['contact']; ?>" name="no">
                        </p>
                        <p>
                            <label for="phone" class="name">Address:</label> <br>
                            <input type="text" value="<?php echo $row['address']; ?>" name="ad">
                        </p>

                        <p>
                            <label for="gender" id="gen" class="name">Plane :</label><br>
                            <select name="plan" id="select" placeholder="" >
                                <option value="Classic">Classic</option>
                                <option value="Gold">Gold</option>
                                <option value="Premium">premium</option>
                            
                            </select>
                        </p>
                        
                            <p>
                                <button type="submit" class="btn" value="" name="update">update</button>
                            </p> 
                    </form>
                <?php
                }
                include "includes/footer.php";
                ?>
            </div>
        </div>
    </div>
    </div>
</body>
</html>
<?php

    // include "connection.php";
    if (isset($_REQUEST['update'])) {
        
        $fname = $_POST['fname'];
        $uname = $_POST['uname'];
        $el = $_POST['email'];
        $ps = md5($_POST['pass']);
        $no = $_POST['no'];
        $ad = $_POST['ad'];
        $pl = $_POST['plan'];
        $gn = $_POST['gn'];
       
    $sql1 = "update register set fullname='$fname',uname='$uname',email='$el',password='$ps',contact='$no',address='$ad',plan='$pl' where id='$user_id'";
    $r1 = mysqli_query($con, $sql1) or die("Query is fail.....");
    if ($r1) {
        echo "<script>window.location.href= 'user.php';</script>";
        echo "<script>alter('Updated the record..........')</script>";
    } else {
        echo "<script>alter('Not Update the record..........')</script>";
        echo "<h1>404</h1>";
    }
}
  }
?>