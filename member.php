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
  </head>
  <body>
    
  <?php include "nav.php"?>

    <!-- END header -->
    
    <section class="home-slider-loop-false  inner-page owl-carousel">
      <div class="slider-item" style="background-image: url('img/pic-14.jpg');">
        
        <div class="container">
          <div class="row slider-text align-items-center justify-content-center">
            <div class="col-md-8 text-center col-sm-12 element-animate">
              <h1>Sign up or Login</h1>
            </div>
          </div>
        </div>

      </div>

    </section>
    <!-- END slider -->
    
    <section class="section">
      <div class="container">
        <div class="row">
          <div class="col-md-6">
            <div class="form-wrap overlap primary element-animate">
              <h2 class="h2">Register</h2>
              <form action="member.php" method="post">
              
                <div class="form-group" >
                  <input type="text" class="form-control" name="fname"  placeholder="Full Name" required>
                </div>
                <div class="form-group">
                  <input type="text" class="form-control" name="uname" placeholder="User Name" required>
                </div>
                <div class="form-group">
                  <input type="email" class="form-control" name="email" placeholder="Email" required>
                </div>
                <div class="form-group">
                  <input type="password" class="form-control" name="pass" placeholder="Password" required> 
                </div>
                <div class="form-group">
                  <input type="number" class="form-control" name="contact" placeholder="Contact" required>
                </div>
                <div class="col-md-12 form-group">
                  <!-- <label for="message">Write Message</label> -->
                  <textarea id="message" class="form-control " name="address" placeholder="Address" cols="6" rows="4"></textarea>
                </div>
                <div class="form-group">
                  <div class="select-wrap">
                  <span class="ion-ios-arrow-down select-arrow-icon"></span>
                  <select id="message" class="form-control" name="plan" >
                    <option disabled select>--Choose Plan--</option>
                    <option value="Classic">Classic</option>
                    <option value="Gold">Gold</option>
                    <option value="Premium">Premium</option>
                  </select>
                  </div>
                </div>
                
                <div class="form-group">
                  <input type="submit" class="btn btn-warning btn-block py-3" value="Create an account" name="submit">
                </div>
              </form>
            </div>
          </div>

          <div class="col-md-6">
            <div class="form-wrap overlap element-animate">
              <h2 class="h2">Log in</h2>
              <form action="login.php" method="post">
                <div class="form-group">
                  <input type="email" class="form-control" name="Lemail" required placeholder="Email">
                </div>
                <div class="form-group">
                  <input type="password" class="form-control" name="Lpass" required placeholder="Password">
                </div>
                <div class="form-group">
                  <p>Redirect to Home <a href="index.php">click here</a></p>
                </div>
                <div class="form-group">
                  <button href="registration.php" class="btn btn-primary btn-block py-3" name="login" type="submit">log In</button>
                </div>
              </form>
            </div>
          </div>

        </div>
      </div>
    </section>

    <footer class="site-footer" role="contentinfo">
      <div class="container">
        <div class="row mb-5">
          <div class="col-md-4 mb-5">
            <h3>About Us</h3>
            <p class="mb-5">our team of experienced trainers and staff are here to  guide and support you every step of the way. join us today and bbecome a part of our fitness family!</p>
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
                <span class="text-white">02-second floor, shyamdhamchock, surat</span></li>
              <li class="d-block"><span class="d-block">Telephone:</span><span class="text-white">+91 7567992211</span></li>
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
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --> <br> Demo Images Unsplash</p>
          </div>
        </div>
      </div>
    </footer>
    <!-- END footer -->

    <!-- loader -->
    <div id="loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#f4b214"/></svg></div>

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

<?php
include "connection.php";
if (isset($_REQUEST['submit'])) {
    
    $fname = $_POST['fname'];
    $uname = $_POST['uname'];
    $email = $_POST['email'];
    $pass = md5($_POST['pass']);
    
    $contact = $_POST['contact'];
    $address = $_POST['address'];
    $plan = $_POST['plan'];
    // $gn = $_POST['Subject'];
   

    $sql = "insert into register(fullname,uname,email,password,contact,address,plan) values('$fname','$uname','$email','$pass','$contact','$address','$plan')";
    $sql1="insert into login values('$email','$pass')";
    $result = mysqli_query($con, $sql) or die("some query issues....");
    $result1 = mysqli_query($con, $sql1) or die("some query issues....");
    
    if ($result && $result1) {    
                     echo "
                     <script>
                     alter('register the record..........');
                     window.location.href='member.php';</script>";
    } else {
        echo "<script>
                     alter('same thing is wrong/......~!');
                    </script>";
    }
}

    
?>
