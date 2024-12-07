<header role="banner">
      <nav class="navbar navbar-expand-md navbar-dark bg-dark">
        <div class="container">
          <a class="navbar-brand" href="index.php">girly<span>FITNESS</span></a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample05" aria-controls="navbarsExample05" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>

          <div class="collapse navbar-collapse" id="navbarsExample05">
            <ul class="navbar-nav mr-auto pl-lg-5 pl-0">
              <li class="nav-item">
                <a class="nav-link active" href="index.php">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="about.php">About</a>
              </li>
            
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="services.html" id="dropdown04" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Services</a>
                <div class="dropdown-menu" aria-labelledby="dropdown04">
                  <a class="dropdown-item" href="yoga.php">glam yoga</a>
                  <a class="dropdown-item" href="nutrition.php">nutrition coaching</a>
                  <a class="dropdown-item" href="personal.php">personal training</a>
                  <a class="dropdown-item" href="zumba.php">gracefull zumba</a>
                  
                </div>

              </li>
              <li class="nav-item">
                <a class="nav-link" href="schedule.php">schedule</a>
              </li>

              </li>
              <!-- <li class="nav-item">
                <a class="nav-link" href="news.php">News</a>
              </li> -->
              <li class="nav-item">
                <a class="nav-link" href="gallery.php">gallery</a>
              </li>

              <li class="nav-item">
                <a class="nav-link" href="contact.php">Contact</a>
              </li>

              <li class="nav-item">
                <a class="nav-link" href="plan.php">Plan</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="admin/login.php">Admin</a>
              </li>
              <?php 
             //  session_start(); 
              if(isset($_SESSION["username"])) {
                ?>
              <li class="nav-item">
                <a class="nav-link" href="#"><?php echo $_SESSION['username']?></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="logout.php">logout</a>
              </li>
              <?php }?>
            </ul>
<?php            
          if (!isset($_SESSION["username"]))
           {
              ?>
            <ul class="navbar-nav ml-auto">
              <li class="nav-item cta-btn">
                <a class="nav-link" href="member.php">Become a member</a>
              </li>
            </ul>
            <?php }?>
              

                
              <!-- <li class="nav-item">
                <a class="nav-link" href="#"><?php echo $_SESSION['username']?></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="logout.php">logout</a>
              </li> -->




            

            
         </div>
        </div>
      </nav>

        </header>
    <!-- END header -->
