<div class="wrapper">
      <!-- Sidebar -->
      <?php 
        include('sidebar.php');
      ?>

      <!-- End Sidebar -->

      <div class="main-panel">
        
        <?php 
          include('header.php');
        ?>

      <div class="container">
          <div class="page-inner">
            <div class="page-header">
              <h3 class="fw-bold mb-3">Dashborad </h3>
              <ul class="breadcrumbs mb-3">
                <li class="nav-home">
                  <a href="#">
                    <i class="icon-home"></i>
                  </a>
                </li>
                <li class="separator">
                  <i class="icon-arrow-right"></i>
                </li>
                <li class="nav-item">
                  <a href="#">View Profile</a>
                </li>
              </ul>
            </div>
            <div class="row">
              <div class="col-md-12">
                <div class="card">
                  <div class="card-header">
                  <div class="col-12 d-flex w-100 justify-content-between">
                    <h5 class="page-title mb-0">View Profile</h5>
                    <a href="Edit_profile.php" class="py-2 btn-submit btn action-btn px-4 d-inline-flex w-auto align-items-center" >Edit Profile <i class="bi bi-pencil-square ms-2"></i></a>
                    </div>
                  </div>
                  <div class="card-body pb-5">
                  <div class="row">
                <div class="col-lg-6 col-md-8 col-12 mx-auto justify-content-center d-flex">
                    <div class="profile-pic-view d-flex justify-content-center flex-wrap mb03">
                        <img src="assets/img/profile1.jpg" alt="">
                        <a href="#" class="edit-icn text-center mt-2">
                            Edit Image
                            <i class="bi bi-pencil cursor ms-2"></i>
                        </a>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6 col-md-8 col-12 mx-auto d-flex justify-content-center mt-4">
                    <div class="pro-detail d-flex mt-4 w-100">
                        <div class="pro-icon me-4">
                            <i class="bi bi-person-circle"></i>
                        </div>
                        <div class="pro-info me-5">
                            <span>Username</span>
                            <p>Admin</p>
                        </div>
                        <a href="#" class="edit-icn ms-auto">
                            <i class="bi bi-pencil cursor"></i>
                        </a>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6 col-md-8 col-12 mx-auto d-flex justify-content-center">
                    <div class="pro-detail d-flex mt-4 w-100">
                        <div class="pro-icon me-4">
                        <i class="bi bi-envelope"></i>
                        </div>
                        <div class="pro-info me-5">
                            <span>Email</span>
                            <p>admin123@gmail.com</p>
                        </div>
                        <a href="#" class="edit-icn ms-auto">
                            <i class="bi bi-pencil cursor"></i>
                        </a>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6 col-md-8 col-12 mx-auto d-flex justify-content-center">
                    <div class="pro-detail d-flex mt-4 w-100">
                        <div class="pro-icon me-4">
                        <i class="bi bi-person-badge"></i>
                        </div>
                        <div class="pro-info me-5">
                            <span>User Type</span>
                            <p>Buyer</p>
                        </div>
                        <a href="#" class="edit-icn ms-auto">
                            <i class="bi bi-pencil cursor"></i>
                        </a>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6 col-md-8 col-12 mx-auto d-flex justify-content-center">
                    <div class="pro-detail d-flex mt-4 w-100">
                        <div class="pro-icon me-4">
                            <i class="bi bi-telephone"></i>
                        </div>
                        <div class="pro-info me-5">
                            <span>Mobile Number</span>
                            <p>+91 99887 23456</p>
                        </div>
                        <a href="#" class="edit-icn ms-auto">
                            <i class="bi bi-pencil cursor"></i>
                        </a>
                    </div>
                </div>
            </div>
                  </div>
                </div>
              </div>
          </div>
        </div>


       <?php 
        include('footer.php');
       ?>
      </div>
     
      <!-- End Custom template -->
    </div>
    