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
 
 
 <header class="py-3 bg-white border-bottom position-sticky top-0 header" style="background-color: #202947;">
        <div class="container-fluid d-flex align-items-center px-5 justify-content-between" style="grid-template-columns: 1fr 2fr;">
            <div class="left-info">
                  <div class="bars"data-bs-toggle="offcanvas" href="#offcanvasExample" role="button" aria-controls="offcanvasExample">
                  <svg xmlns="http://www.w3.org/2000/svg" width="26px" height="26px" viewBox="0 0 24 24"><path fill="currentColor" d="M19 12.75H5a.75.75 0 0 1 0-1.5h14a.75.75 0 0 1 0 1.5m0-4.5H5a.75.75 0 0 1 0-1.5h14a.75.75 0 0 1 0 1.5m0 9H5a.75.75 0 0 1 0-1.5h14a.75.75 0 0 1 0 1.5"/></svg>
                  </div>
            </div>
          <div class="d-flex align-items-center justify-self-end">
          <svg xmlns="http://www.w3.org/2000/svg" class="me-3 notification" width="20px" height="20px" viewBox="0 0 24 24"><g fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" color="currentColor"><path d="M5.158 11.491c-.073 1.396.011 2.882-1.236 3.817A2.3 2.3 0 0 0 3 17.153C3 18.15 3.782 19 4.8 19h14.4c1.018 0 1.8-.85 1.8-1.847c0-.726-.342-1.41-.922-1.845c-1.247-.935-1.163-2.421-1.236-3.817a6.851 6.851 0 0 0-13.684 0"/><path d="M10.5 3.125C10.5 3.953 11.172 5 12 5s1.5-1.047 1.5-1.875S12.828 2 12 2s-1.5.297-1.5 1.125M15 19a3 3 0 1 1-6 0"/></g></svg>
            <div class="flex-shrink-0 dropdown profile-edit border-1 ">
              <a href="#" class="d-block link-body-emphasis text-decoration-none dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
              <?php if($row['Image']) { ?>
                <img src="../upload/<?php echo $row['Image'];?>" alt="mdo" width="32" height="32" class="rounded-circle">
                <?php }else { ?>
                  <img src="../img/Default_profile.png" alt=""width="32" height="32" class="rounded-circle" >
                  <?php } ?>
               
              </a>
              <ul class="dropdown-menu text-small shadow">
                <li><a class="dropdown-item" href="Dashborad.php">Home</a></li>
                <li><a class="dropdown-item" href="View_profile.php">Profile</a></li>
                <li><a class="dropdown-item" href="change_password.php">Change Password</a></li>
                <li><hr class="dropdown-divider"></li>
                <li><a class="dropdown-item" href="../logout.php">Sign out</a></li>
              </ul>
            </div>
          </div>
        </div>
    </header>
    <!-- header start -->


    <!-- nav menu -->
    <div class="offcanvas offcanvas-start sidebar-menus nav-sidebar" tabindex="-1" id="offcanvasExample" aria-labelledby="offcanvasExampleLabel">
    <div class="logo my-3 d-flex justify-content-center w-100">
                    <a href="#" class="d-flex align-items-center col-lg-4 mb-2 mb-lg-0 link-body-emphasis text-decoration-none display-6 fw-bolder light-text"  aria-expanded="false">
                      <img src="../img/theme-logo.png" alt="">
                    </a>
                  </div>
            <div class="d-flex flex-column flex-shrink-0 bars-tabs">
                <ul class="nav flex-column mb-auto sidebar-menu">
                  <li class="nav-item py-1">
                    <a href="Dashborad.php" class="nav-link  py-2 pe-2" aria-current="page">
                        <svg xmlns="http://www.w3.org/2000/svg" class="me-2" width="18px" height="18px" viewBox="0 0 15 15"><path fill="currentColor" fill-rule="evenodd" d="M7.08.222a.6.6 0 0 1 .84 0l6.75 6.64a.6.6 0 0 1-.84.856L13 6.902V12.5a.5.5 0 0 1-.5.5h-10a.5.5 0 0 1-.5-.5V6.902l-.83.816a.6.6 0 1 1-.84-.856zm.42 1.27L12 5.918V12h-2V8.5a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5V12H3V5.918zM7 12h2V9H7z" clip-rule="evenodd"/></svg>
                     Dashborad
                    </a>
                  </li>
                  <li>
                    <a href="View_profile.php" class="nav-link  py-2">
                    <svg xmlns="http://www.w3.org/2000/svg" class="me-2" width="18px" height="18px" viewBox="0 0 24 24"><g fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"><path d="M12 2C6.477 2 2 6.477 2 12s4.477 10 10 10s10-4.477 10-10S17.523 2 12 2"/><path d="M4.271 18.346S6.5 15.5 12 15.5s7.73 2.846 7.73 2.846M12 12a3 3 0 1 0 0-6a3 3 0 0 0 0 6"/></g></svg>
                      Profile
                    </a>
                  </li>
                  <li>
                    <a href="change_password.php" class="nav-link  py-2">
                    <svg xmlns="http://www.w3.org/2000/svg" class="me-2" width="18px" height="18px" viewBox="0 0 32 32"><path fill="currentColor" d="M21 2a8.998 8.998 0 0 0-8.612 11.612L2 24v6h6l10.388-10.388A9 9 0 1 0 21 2m0 16a7 7 0 0 1-2.032-.302l-1.147-.348l-.847.847l-3.181 3.181L12.414 20L11 21.414l1.379 1.379l-1.586 1.586L9.414 23L8 24.414l1.379 1.379L7.172 28H4v-3.172l9.802-9.802l.848-.847l-.348-1.147A7 7 0 1 1 21 18"/><circle cx="22" cy="10" r="2" fill="currentColor"/></svg>
                      Change Password
                    </a>
                     
                  </li>
                 
                  <li>
                    <a href="Send_inquery.php" class="nav-link  py-2 ">
                    <svg xmlns="http://www.w3.org/2000/svg" class="me-2" width="19px" height="19px" viewBox="0 0 24 24"><path fill="currentColor" d="M12 17.75a.75.75 0 0 0 .75-.75v-6a.75.75 0 0 0-1.5 0v6c0 .414.336.75.75.75M12 7a1 1 0 1 1 0 2a1 1 0 0 1 0-2"/><path fill="currentColor" fill-rule="evenodd" d="M1.25 12C1.25 6.063 6.063 1.25 12 1.25S22.75 6.063 22.75 12S17.937 22.75 12 22.75S1.25 17.937 1.25 12M12 2.75a9.25 9.25 0 1 0 0 18.5a9.25 9.25 0 0 0 0-18.5" clip-rule="evenodd"/></svg>
                      Send Inquirey 
                    </a>
                  </li>
                  <li>
                    <a href="View_answer_inquery.php" class="nav-link  py-2">
                    <svg xmlns="http://www.w3.org/2000/svg" class="me-2" width="19px" height="19px" viewBox="0 0 28 28"><path fill="currentColor" d="M14 2c6.627 0 12 5.373 12 12s-5.373 12-12 12S2 20.627 2 14S7.373 2 14 2m0 1.5C8.201 3.5 3.5 8.201 3.5 14S8.201 24.5 14 24.5S24.5 19.799 24.5 14S19.799 3.5 14 3.5m0 15a1.25 1.25 0 1 1 0 2.5a1.25 1.25 0 0 1 0-2.5m0-11.75c1.963 0 3.75 1.725 3.75 3.75c0 1.431-.465 2.274-1.546 3.306l-.197.184l-.204.187c-.806.738-1.053 1.125-1.053 1.823a.75.75 0 0 1-1.5 0c0-1.149.398-1.842 1.343-2.745l.57-.528c.81-.772 1.087-1.285 1.087-2.227c0-1.184-1.104-2.25-2.25-2.25s-2.25 1.066-2.25 2.25a.75.75 0 0 1-1.5 0c0-2.025 1.787-3.75 3.75-3.75"/></svg>
                        Answerd Query
                    </a>
                  </li>
                  <li>
                    <a href="View_Schedual_tour.php" class="nav-link  py-2">
                    <svg xmlns="http://www.w3.org/2000/svg" class="me-2" width="18px" height="18px" viewBox="0 0 36 36"><path fill="currentColor" d="M32.25 6H29v2h3v22H4V8h3V6H3.75A1.78 1.78 0 0 0 2 7.81v22.38A1.78 1.78 0 0 0 3.75 32h28.5A1.78 1.78 0 0 0 34 30.19V7.81A1.78 1.78 0 0 0 32.25 6" class="clr-i-outline clr-i-outline-path-1"/><path fill="currentColor" d="M8 14h2v2H8z" class="clr-i-outline clr-i-outline-path-2"/><path fill="currentColor" d="M14 14h2v2h-2z" class="clr-i-outline clr-i-outline-path-3"/><path fill="currentColor" d="M20 14h2v2h-2z" class="clr-i-outline clr-i-outline-path-4"/><path fill="currentColor" d="M26 14h2v2h-2z" class="clr-i-outline clr-i-outline-path-5"/><path fill="currentColor" d="M8 19h2v2H8z" class="clr-i-outline clr-i-outline-path-6"/><path fill="currentColor" d="M14 19h2v2h-2z" class="clr-i-outline clr-i-outline-path-7"/><path fill="currentColor" d="M20 19h2v2h-2z" class="clr-i-outline clr-i-outline-path-8"/><path fill="currentColor" d="M26 19h2v2h-2z" class="clr-i-outline clr-i-outline-path-9"/><path fill="currentColor" d="M8 24h2v2H8z" class="clr-i-outline clr-i-outline-path-10"/><path fill="currentColor" d="M14 24h2v2h-2z" class="clr-i-outline clr-i-outline-path-11"/><path fill="currentColor" d="M20 24h2v2h-2z" class="clr-i-outline clr-i-outline-path-12"/><path fill="currentColor" d="M26 24h2v2h-2z" class="clr-i-outline clr-i-outline-path-13"/><path fill="currentColor" d="M10 10a1 1 0 0 0 1-1V3a1 1 0 0 0-2 0v6a1 1 0 0 0 1 1" class="clr-i-outline clr-i-outline-path-14"/><path fill="currentColor" d="M26 10a1 1 0 0 0 1-1V3a1 1 0 0 0-2 0v6a1 1 0 0 0 1 1" class="clr-i-outline clr-i-outline-path-15"/><path fill="currentColor" d="M13 6h10v2H13z" class="clr-i-outline clr-i-outline-path-16"/><path fill="none" d="M0 0h36v36H0z"/></svg>
                       Schudule Tour
                    </a>
                  </li>
                  <li>
                    <a href="../logout.php" class="nav-link  py-2">
                    <svg xmlns="http://www.w3.org/2000/svg" class="me-2" width="18px" height="18px" viewBox="0 0 24 24"><path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="m11 3l-.663.234c-2.578.91-3.868 1.365-4.602 2.403S5 8.043 5 10.777v2.445c0 2.735 0 4.102.735 5.14c.734 1.039 2.024 1.494 4.602 2.404L11 21m10-9H11m10 0c0-.7-1.994-2.008-2.5-2.5M21 12c0 .7-1.994 2.008-2.5 2.5" color="currentColor"/></svg>
                        Logout
                    </a>
                  </li>
                </ul>
            </div>
    </div>