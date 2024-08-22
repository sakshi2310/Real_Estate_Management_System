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
                  <a href="#">Change Password</a>
                </li>
              </ul>
            </div>
            <div class="row">
              <div class="col-md-12">
                <div class="card">
                  <div class="card-header">
                  <div class="col-12 d-flex w-100 justify-content-between">
                    <h5 class="page-title mb-0">Change Password</h5>
                    <div class="input-group Serach-input">
                            <i class="fa fa-search search-icon"></i>
                            <input
                                type="text"
                                placeholder="Search ..."
                                class="form-control"
                            />
                    </div>
                   
                  </div>
                  <form>
                    <div class="card-body">
                    <div class="row gy-4">
                        <div class="col-lg-4 col-md-6 col-12">
                        <label for="exampleInputoldpassword" class="form-label">Old Passsword</label>
                        <input type="text" class="form-control" id="exampleInputoldpassword" placeholder="Old Passsword" name="Old_Passsword"  >
                        </div>
                        <div class="col-lg-4 col-md-6 col-12">
                        <label for="exampleInputnewpassword" class="form-label">New Passsword</label>
                        <input type="password" class="form-control" id="exampleInputnewpassword" placeholder="New Passsword" name="New_Passsword" >
                        </div>
                        <div class="col-lg-4 col-md-6 col-12">
                        <label for="exampleInputconpassword" class="form-label">Confirm Passsword</label>
                        <input type="password" class="form-control" id="exampleInputconpassword" placeholder="Con Passsword" name="Con_Passsword" >
                        </div>
                    </div>
                    
                    <div class="card-action mt-4">
                        <button class="btn btn-submit" name="save" type="submit">Submit</button>
                        <button class="btn btn-cancel" name="Disdard">Cancel</button>
                    </div>
                    </form>
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
    