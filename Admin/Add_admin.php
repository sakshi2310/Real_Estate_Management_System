
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
              <h3 class="fw-bold mb-3">Forms</h3>
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
                  <a href="#">Admin</a>
                </li>
                <li class="separator">
                  <i class="icon-arrow-right"></i>
                </li>
                <li class="nav-item">
                  <a href="#">Add Admin</a>
                </li>
              </ul>
            </div>
            <div class="row">
              <div class="col-md-12">
                <div class="card">
                  <div class="card-header">
                    <div class="card-title">Admin</div>
                  </div>
                  <div class="card-body">
                    <div class="row">
                      <div class="col-md-6 col-lg-4">
                        <div class="form-group px-0">
                          <label for="user" style="font-weight:600 !important;">Username</label>
                          <input type="text" class="form-control" id="user" placeholder="Enter User"/>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4">
                        <div class="form-group px-0">
                          <label for="email2" style="font-weight:600 !important;">Address</label>
                          <input type="email" class="form-control" id="email2" placeholder="Enter Email"/>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4">
                        <div class="form-group px-0">
                          <label for="password" style="font-weight:600 !important;"> Password</label>
                          <input type="text" class="form-control" id="password" placeholder="Contact"/>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4">
                        <div class="form-group px-0">
                          <label for="contact" style="font-weight:600 !important;">Contact</label>
                          <input type="text" class="form-control" id="contact" placeholder="Contact"/>
                        </div>
                    </div>
                  </div>
                  <div class="card-action mt-4">
                    <button class="btn btn-success">Submit</button>
                    <button class="btn btn-danger">Cancel</button>
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
