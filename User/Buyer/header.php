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
 
 
 <header class="py-3 bg-white border-bottom position-sticky top-0 header">
        <div class="container-fluid d-flex align-items-center px-5 justify-content-between" style="grid-template-columns: 1fr 2fr;">
            <div class="left-info">
                  <div class="logo">
                    <!-- <a href="#" class="d-flex align-items-center col-lg-4 mb-2 mb-lg-0 link-body-emphasis text-decoration-none display-6 fw-bolder light-text"  aria-expanded="false">
                      <img src="../img/theme-logo.png" alt="">
                    </a> -->
                  </div>
            </div>
          <div class="d-flex align-items-center justify-self-end">
          <svg xmlns="http://www.w3.org/2000/svg" class="me-3 notification" width="20px" height="20px" viewBox="0 0 24 24"><g fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" color="currentColor"><path d="M5.158 11.491c-.073 1.396.011 2.882-1.236 3.817A2.3 2.3 0 0 0 3 17.153C3 18.15 3.782 19 4.8 19h14.4c1.018 0 1.8-.85 1.8-1.847c0-.726-.342-1.41-.922-1.845c-1.247-.935-1.163-2.421-1.236-3.817a6.851 6.851 0 0 0-13.684 0"/><path d="M10.5 3.125C10.5 3.953 11.172 5 12 5s1.5-1.047 1.5-1.875S12.828 2 12 2s-1.5.297-1.5 1.125M15 19a3 3 0 1 1-6 0"/></g></svg>
            <div class="flex-shrink-0 dropdown profile-edit border-1 ">
              <a href="#" class="d-block link-body-emphasis text-decoration-none dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                <img src="../upload/<?php echo $row['Image'];?>" alt="mdo" width="32" height="32" class="rounded-circle">
              </a>
              <ul class="dropdown-menu text-small shadow">
                <li><a class="dropdown-item" href="#">Home</a></li>
                <li><a class="dropdown-item" href="#">Profile</a></li>
                <li><a class="dropdown-item" href="#">Settings</a></li>
                <li><hr class="dropdown-divider"></li>
                <li><a class="dropdown-item" href="../logout.php">Sign out</a></li>
              </ul>
            </div>
          </div>
        </div>
    </header>
    <!-- header start -->