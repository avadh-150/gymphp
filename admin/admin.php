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
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <!-- Remix icon cdn file -->
    <link href="https://cdn.jsdelivr.net/npm/remixicon@2.2.0/fonts/remixicon.css" rel="stylesheet">
    <!-- google fonts link -->
    <link href="https://fonts.googleapis.com/css2?family=Jost:wght@100;200;300&display=swap" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="libs/bower/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="libs/bower/material-design-iconic-font/dist/css/material-design-iconic-font.css">
    <!-- build:css assets/css/app.min.css -->
    <link rel="stylesheet" href="libs/bower/animate.css/animate.min.css">
    <link rel="stylesheet" href="libs/bower/fullcalendar/dist/fullcalendar.min.css">
    <link rel="stylesheet" href="libs/bower/perfect-scrollbar/css/perfect-scrollbar.css">
    <link rel="stylesheet" href="assets/css/bootstrap.css">
    <link rel="stylesheet" href="assets/css/core.css">
    <link rel="stylesheet" href="assets/css/app.css">
    <!-- endbuild -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway:400,500,600,700,800,900,300">
    <script src="libs/bower/breakpoints.js/dist/breakpoints.min.js"></script>
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" />
    <link rel="stylesheet" href="assets/css/styl.css">

</head>
<body>
    <?php include_once('includes/header.php'); ?>

    <?php include_once('includes/sidebar.php'); ?>

    <main>
        <div class="container">
            <div class="table1">
                <h3 class="title">Admin users </h3>
                <!-- <a href="adduser.php">
                    <button id="btn"><span>+</span>New</button>
                </a> -->
                <div class="t-contect">
                    <table border="1px">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>User Name</th>
                                <th>Email</th>
                                <th>Password</th>
                                <th>Contact</th>
                                
                                <th>City</th>
                                <th>State</th>

                                <!-- <th>Action</th> -->
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            include "connection.php";
                            $sql = "select * from admin";
                            $result = mysqli_query($con, $sql) or die("some query issues....");
                            while ($row = mysqli_fetch_assoc($result)) {
                            ?>
                                <td><?php echo $row['a_id'] ?></td>
                                <td><?php echo $row['username'] ?></td>
                                <td><?php echo $row['email'] ?></td>
                                <td><?php echo $row['password'] ?></td>
                                <td><?php echo $row['contact'] ?></td>
                                <td><?php echo $row['city'] ?></td>
                                <td><?php echo $row['state'] ?></td>
                                <!-- <td>
                                    <a href="update.php?id=<?php echo $row['id']; ?>"><button class="btn"><b>Edit</b></button></a>
                                    <a href="delete.php?id=<?php echo $row['id']; ?>"><button class="btn" id="delete"><b>delete</b></button></a>
                                </td> -->
                                </tr>
                            <?php } ?>
                        </tbody>

                    </table>
                </div>
            </div>

        </div>
        <?php include_once('includes/footer.php'); ?>

    </main>

    <!-- build:js assets/js/core.min.js -->
    <script src="libs/bower/jquery/dist/jquery.js"></script>
    <script src="libs/bower/jQuery-Storage-API/jquery.storageapi.min.js"></script>
    <script src="assets/js/app.js"></script>
    <!-- endbuild -->
   

</html>
<?php }  
?>