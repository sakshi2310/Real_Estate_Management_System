

<?php 
    include('sidebar.php');
?>


<div class="main-panel">
    <?php 
        include('header.php');
    ?>
   <div class="container">
          <div class="page-inner">
            <div class="page-header">
              <h3 class="fw-bold mb-3">Features</h3>
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
                  <a href="#">Property Type</a>
                </li>
              </ul>
            </div>
            <div class="row">
              <div class="col-md-12">
                <div class="card">
                  <div class="card-header">
                    <div class="card-title">Features</div>
                  </div>
                  <form method="post">
                    <div class="card-body">
                    <div class="row">
                    <div class="col-12">
                         <h4 class="frm-title">Description</h4>
                    </div>
                    <div class="col-4">
                    <div class="form-group px-0">
              <label for="exampleInputEmail1" class="form-label">Property Title</label>
              <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Property Title" name="Property_title" value="<?php echo @$proprty_row['Property_title']; ?>">
            </div>
                    </div>
                         <div class="col-md-6 col-lg-4">
                      
                          <label for="features" style="font-weight:600 !important;">Features</label>
                          <input type="text" class="form-control" id="features" placeholder="Features" name="Feature" value="<?php echo @$row['Feature_name']; ?>">
                        </div>
                    </div>
                  </div>
                  <div class="card-action mt-4">
                    <button class="btn btn-submit" name="save" type="submit">Submit</button>
                    <button class="btn btn-cancel" name="Disdard">Cancel</button>
                  </div>
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


