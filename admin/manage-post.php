<?php
session_start();
error_reporting(0);
include  'connection.php';
if (!isset($_SESSION['email'])) {
  header('location:logout.php');
} else {

?>
  <!DOCTYPE html>
  <html lang="en">

  <head>
    <meta name="description" content="Vali is a responsive">

    <title>Admin | Manage Package </title>
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
          <center>

            <h3>Manage Packages</h3>
          </center>
          <a href="addplan.php">
            <button id="btn"><span>+</span>Add
          plan</button>
          </a>
          <!-- <hr /> -->
          <table class="table table-hover table-bordered" id="sampleTable">
            <thead>
              <tr>
                <th>Sr.No</th>
                <!-- <th>Category</th>
                <th>Package Type</th> -->
                <th>Title</th>
                <th>Category</th>

                <th>Package Duratiobn</th>
                <th>Price</th>
                <th>Action</th>
              </tr>
            </thead>

            <?php
            include "connection.php";
            $sql = "SELECT * FROM tbladdpackage";
            $results = mysqli_query($con, $sql);


            $cnt = 1; {
              foreach ($results as $result) {
            ?>

                <tbody>
                  <tr>
                    <td><?php echo ($cnt); ?></td>
                    <!-- <td><?php echo $result['category_name']; ?></td>
                    <td><?php echo $result['PackageName']; ?></td> -->
                    <td><?php echo $result['titlename']; ?></td>
                    <td><?php echo $result['category']; ?></td>
                    <td><?php echo $result['month']; ?></td>
                    <td><?php echo $result['Price']; ?></td>
                    <?php $id = $result['category_name']; ?>
                    <td>

                      <a href="edit-post.php?pid=<?php echo $result['id']; ?>"><span class="btn btn-success">Edit</span>
                      <a href="delete.php?pid=<?php echo $result['id'];?>"><span class="btn" style="background-color:red;">Delete</span>
                    </td>
                  </tr>


                </tbody>

                <!--    // end modal popup code........ -->
            <?php $cnt = $cnt + 1;
              }
            } ?>
          </table>
        </div>
      </div>

    </main>
    <script src="libs/bower/jquery/dist/jquery.js"></script>
    <script src="libs/bower/jQuery-Storage-API/jquery.storageapi.min.js"></script>
    <script src="assets/js/app.js"></script>
  </body>

  </html>
<?php } ?>