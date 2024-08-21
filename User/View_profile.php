<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashborad</title>
    <!-- bootstrap css -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <!-- css file -->
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    
    <!-- header start -->
    <?php
  include('header.php');
  ?>
    <!-- header start -->

    <div class="container-fluid">
      <div class="row">
      <?php
      include('sidebar.php');
      ?>
        <div class="col-10 p-4 ms-auto">
          <div class="main-Borad p-5 bg-white">
            <div class="row">
                <div class="col-12 d-flex w-100 justify-content-between">
                    <h5 class="page-title">Edit Profile Info</h5>
                    <a href="edit_profile.php" class="py-2 submit-btn action-btn px-4 d-inline-flex w-auto" >Edit Profile <i class="bi bi-pencil-square ms-2"></i></a>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6 col-md-8 col-12 mx-auto justify-content-center d-flex">
                    <div class="profile-pic-view">
                        <img src="img/profile1.jpg" alt="">
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
</body>
</html>