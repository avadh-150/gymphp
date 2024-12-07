<?php

use LDAP\Result;

include "access.php"; ?>



<!doctype html>
<html lang="en">

<head>
  <title>girly FITNESS CLUB</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700,800" rel="stylesheet">

  <link rel="stylesheet" href="css/bootstrap.css">
  <link rel="stylesheet" href="css/animate.css">
  <link rel="stylesheet" href="css/owl.carousel.min.css">

  <link rel="stylesheet" href="css/magnific-popup.css">


  <link rel="stylesheet" href="fonts/ionicons/css/ionicons.min.css">
  <link rel="stylesheet" href="fonts/fontawesome/css/font-awesome.min.css">

  <!-- Theme Style -->
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="css/plan.css">
</head>

<body>

  <?php include "nav.php" ?>

  <section class="home-slider-loop-false  inner-page owl-carousel">
    <div class="slider-item" style="background-image: url('img/slider-1.jpg');">

      <div class="container">
        <div class="row slider-text align-items-center justify-content-center">
          <div class="col-md-8 text-center col-sm-12 element-animate">
            <h1>Plane</h1>

          </div>
        </div>
      </div>

    </div>

  </section>
  <!-- END slider -->


  <section class="section element-animate">
    <div class="clearfix mb-5 pb-5">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-12 text-center heading-wrap">
            <h2>Plane</h2>
            <span class="back-text">Plane</span>
          </div>
        </div>
      </div>
    </div>

  </section>
  <style>
    /* Global Styles */
    /* Basic reset */
  </style>
  </head>

  <body>
    <!-- Main Content -->
    <main class="blog">

      <section class="pricing-section spad">
        <div class="containers_main">
          <div class="section-title text-center">
            <img src="img/icons/logo-icon.png" alt="">
            <h2>Pricing plans</h2>
            <p>Practice Yoga to perfect physical beauty, take care of your soul and enjoy life more fully!</p>
          </div>
          <div class="row_main">
            <?php
            include "connection.php";
            $sql = "SELECT * from tbladdpackage";
            $results = mysqli_query($con, $sql);


            $cnt = 1; {
              while ($result = mysqli_fetch_assoc($results)) {
            ?>
            
                <div class="blog-posts">
                  <div class="blog-post">
                    <div class="pi-top">
                      <h4><?php echo $result['titlename']; ?></h4>
                    </div>
                    <div class="pi-price">
                      <h3>₹<?php echo $result['Price']; ?></h3>
                      <p> <?php echo $result['month']; ?></p>
                    </div>
                    <ul>
                     <li>

                       <?php echo $result['Description']; ?>
                     </li>
                    </ul>
                    <?php if (!isset($_SESSION['username'])): ?>
                      <a href="login.php" class="site-btn sb-line-gradient">Booking Now</a>
                    <?php else : ?>
                      <!-- <a href="#" class="site-btn sb-line-gradient">Booking Now</a> -->
                      <form method='post'>
                        <input type='hidden' name='pid' value='<?php echo $result['id']; ?>'>
                        <input class='site-btn sb-line-gradient' type='submit' name='submit' value='Booking Now' onclick="return confirm('Do you really want to book this package.');">
                      </form>
                    <?php endif; ?>
                  </div>
                </div>
            <?php $cnt = $cnt + 1;
              }
            } ?>
          </div>
        </div>
      </section>

      <!-- Add more blog posts as needed -->
      </div>
    </main>



    <footer class="site-footer" role="contentinfo">
      <div class="container">
        <div class="row mb-5">
          <div class="col-md-4 mb-5">
            <h3>About Us</h3>
            <p class="mb-5">Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatibus et dolor blanditiis consequuntur ex voluptates perspiciatis omnis unde minima expedita.</p>
            <ul class="list-unstyled footer-link d-flex footer-social">
              <li><a href="#" class="p-2"><span class="fa fa-twitter"></span></a></li>
              <li><a href="#" class="p-2"><span class="fa fa-facebook"></span></a></li>
              <li><a href="#" class="p-2"><span class="fa fa-linkedin"></span></a></li>
              <li><a href="#" class="p-2"><span class="fa fa-instagram"></span></a></li>
            </ul>

          </div>
          <div class="col-md-5 mb-5">
            <h3>Contact Info</h3>
            <ul class="list-unstyled footer-link">
              <li class="d-block">
                <span class="d-block">Address:</span>
                <span class="text-white">02-second floor, shyamdhamchock, surat</span>
              </li>
              <li class="d-block"><span class="d-block">Telephone:</span><span class="text-white">+91 75679922111</span></li>
              <li class="d-block"><span class="d-block">Email:</span><span class="text-white">khushianghan@gmail.com</span></li>
            </ul>
          </div>
          <div class="col-md-3 mb-5">
            <h3>Quick Links</h3>
            <ul class="list-unstyled footer-link">
              <li><a href="#">About</a></li>
              <li><a href="#">Terms of Use</a></li>
              <li><a href="#">Disclaimers</a></li>
              <li><a href="#">Contact</a></li>
            </ul>
          </div>
          <div class="col-md-3">

          </div>
        </div>
        <div class="row">
          <div class="col-12 text-md-center text-left">
            <p>&copy; <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
              Copyright &copy;<script>
                document.write(new Date().getFullYear());
              </script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
              <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --> <br> Demo Images Unsplash</p>
          </div>
        </div>
      </div>
    </footer>
    <!-- END footer -->

    <!-- loader -->
    <div id="loader" class="show fullscreen"><svg class="circular" width="48px" height="48px">
        <circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee" />
        <circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#f4b214" />
      </svg></div>

    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/jquery.waypoints.min.js"></script>

    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/magnific-popup-options.js"></script>

    <script src="js/main.js"></script>
  </body>

</html>