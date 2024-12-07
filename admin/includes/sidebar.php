<aside id="menubar" class="menubar light" style="margin-top:90px; border-radius:10px; height:100%">
  <div class="app-user">
    <div class="media">
      <div class="media-left">
        <div class="avatar avatar-md avatar-circle">
          <a href="javascript:void(0)"><img class="img-responsive" src="assets/images/images.png" alt="avatar" /></a>
        </div><!-- .avatar -->
      </div>
      <?php
      session_start();
       echo $_SESSION['email']; ?>

      <br>
      <br>

      <div class="menubar-scroll">
        <div class="menubar-scroll-inner">
          <ul class="app-menu">
            <li class="has-submenu">
              <a href="user.php">
                <i class="bi bi-person-fill me-4 fs-5"></i>
                <span class="menu-text">Users</span> </a>



            </li>
            <li>

              <a href="manage-post.php">
                <i class="bi bi-person-fill me-4 fs-5" aria-hidden="true"></i>
                <span class="menu-text">Plans</span>
  
              </a>
            </li>
            <li>

              <a href="register.php">
                <i class="bi bi-person-fill me-4 fs-5" aria-hidden="true"></i>
                <span class="menu-text">Register As Admin</span>
  
              </a>
            </li>
            <li>

              <a href="admin.php">
                <i class="bi bi-person-fill me-4 fs-5" aria-hidden="true"></i>
                <span class="menu-text">Admin user</span>
  
              </a>
            </li>
            <li>

              <a href="logout.php">
                <i class="fa fa-sign-out" aria-hidden="true"></i>
                <span class="menu-text">Logout</span>
  
              </a>
            </li>


          </ul><!-- .app-menu -->
        </div><!-- .menubar-scroll-inner -->
      </div><!-- .menubar-scroll -->
</aside>