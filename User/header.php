 <!-- header start -->
 <?php 
 
 $con=mysqli_connect("localhost","root","","real_estate");  
 // Page session
session_start();
if(!isset($_SESSION['user_id']))
{
  header("location:index.php");
}
$user_id = $_SESSION['user_id'];
$sql = "select * from users where id =".$user_id;
$res = mysqli_query($con,$sql);
$row = mysqli_fetch_assoc($res); 
 
 ?>
 
 
 <header class="py-3 bg-white border-bottom position-sticky top-0">
        <div class="container-fluid d-flex align-items-center px-5 justify-content-between" style="grid-template-columns: 1fr 2fr;">
            <div class="left-info">
                  <div class="logo">
                    <a href="#" class="d-flex align-items-center col-lg-4 mb-2 mb-lg-0 link-body-emphasis text-decoration-none display-6 fw-bolder light-text"  aria-expanded="false">
                      <img src="img/theme-logo.png" alt="">
                    </a>
                  </div>
            </div>
          <div class="d-flex align-items-center justify-self-end">
            <i class="bi bi-bell-fill fs-5 me-3"></i>
            <div class="flex-shrink-0 dropdown profile-edit border-1 ">
              <a href="#" class="d-block link-body-emphasis text-decoration-none dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                <img src="upload/<?php echo $row['Image'];?>" alt="mdo" width="32" height="32" class="rounded-circle">
              </a>
              <ul class="dropdown-menu text-small shadow">
                <li><a class="dropdown-item" href="#">Home</a></li>
                <li><a class="dropdown-item" href="#">Profile</a></li>
                <li><a class="dropdown-item" href="#">Settings</a></li>
                <li><hr class="dropdown-divider"></li>
                <li><a class="dropdown-item" href="logout.php">Sign out</a></li>
              </ul>
            </div>
          </div>
        </div>
    </header>
    <!-- header start -->