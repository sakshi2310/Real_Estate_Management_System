<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashborad</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
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
                  <a href="#">View Profile</a>
                </li>
                <li class="separator">
                  <i class="icon-arrow-right"></i>
                </li>
                <li class="nav-item">
                  <a href="#">Edit Profile</a>
                </li>
              </ul>
            </div>
            <div class="row">
              <div class="col-md-12">
                <div class="card">
                  <div class="card-header">
                  <div class="col-12 d-flex w-100 justify-content-between">
                    <h5 class="page-title mb-0">Edit Profile Info</h5>
                    <div class="input-group Serach-input">
                            <i class="fa fa-search search-icon"></i>
                            <input
                                type="text"
                                placeholder="Search ..."
                                class="form-control"
                            />
                    </div>
                    </div>
                  </div>
                  <form method="post" enctype="multipart/form-data"> 
                    <div class="card-body">
                    <div class="row gy-4">
                            <div class="col-lg-4 col-md-6 col-12">
                                <div class="profile-pic position-relative d-flex flex-wrap align-items-center">
                                    <input type="file" class="file-profile position-relative" name="Image">
                                    <div class="profile-pic-icn position-absolute">
                                    <i class="bi bi-image-fill"></i>
                                    </div>
                                    <p class="ms-4 mb-0">Add Profile Picture</p>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 col-12">
                            <label for="exampleInputname" class="form-label">Name</label>
                            <input type="text" class="form-control" id="exampleInputname" placeholder="Name" name="Name" value="<?php echo @$row['User_name']; ?>">
                            </div>
                            <div class="col-lg-4 col-md-6 col-12">
                            <label for="exampleInputEmail" class="form-label">Email</label>
                            <input type="email" class="form-control" id="exampleInputEmail" placeholder="Email" name="Email"value="<?php echo @$row['Email']; ?>" >
                            </div>
                            <div class="col-lg-4 col-md-6 col-12">
                            <label for="exampleInputpassword" class="form-label">Passsword</label>
                            <input type="password" class="form-control" id="exampleInputpassword" placeholder="Passsword" name="Password" value="<?php echo @$row['Password']; ?>">
                            </div>
                            <div class="col-lg-4 col-md-6 col-12">
                            <label for="exampleInputMob" class="form-label">Mobile No</label>
                            <input type="text" class="form-control" id="exampleInputMob" placeholder="MoblieNo" name="MoblieNo" value="<?php echo @$row['Contact']; ?>" >
                            </div>
                        </div>
                    </div>
                    
                    <div class="card-action mt-4">
                        <button class="btn btn-submit" name="edit" type="submit">Submit</button>
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
    