<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title>Kaiadmin - Bootstrap 5 Admin Dashboard</title>
    <meta content="width=device-width, initial-scale=1.0, shrink-to-fit=no" name="viewport" />
    <link rel="icon" href="assets/img/kaiadmin/favicon.ico" type="image/x-icon" />
    <!-- Fonts and icons -->
    <script src="assets/js/plugin/webfont/webfont.min.js"></script>
    <script src="assets/js/jquery.min.js"></script>
    <script type="text/javascript">
        WebFont.load({
            google: { families: ["Public Sans:300,400,500,600,700"] },
            custom: {
                families: [
                    "Font Awesome 5 Solid",
                    "Font Awesome 5 Regular",
                    "Font Awesome 5 Brands",
                    "simple-line-icons",
                ],
                urls: ["assets/css/fonts.min.css"],
            },
            active: function () {
                sessionStorage.fonts = true;
            },
        });

        $(document).ready(function() {
            $('#Search').keyup(function() {
                var search = $(this).val();
                console.log(search);
                $.ajax({
                    type: "POST",
                    data: { search: search },
                    url: "View_feature.php", 
                    success: function(response) {
                        $('#data-table').html($(response).find('#data-table').html());
                    },
                    error: function(xhr, status, error) {
                        console.log("Error: " + error); // Log errors if any
                }
                });
            });
        });
    </script>
    <!-- CSS Files -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css" />
    <link rel="stylesheet" href="assets/css/plugins.min.css" />
    <link rel="stylesheet" href="assets/css/kaiadmin.min.css" />
    <!-- CSS Just for demo purpose, don't include it in your project -->
    <link rel="stylesheet" href="assets/css/demo.css" />
</head>
<body>
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
    