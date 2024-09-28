<?php 

$con = mysqli_connect("localhost", "root", "", "real_estate");

// Header start
include('header.php');
// Page session
if(!isset($_SESSION['user_id']))
{
  header("location:index.php");
}



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashborad</title>
    <!-- bootstrap css -->
    <link href="../css/bootstrap.min.css" rel="stylesheet" >

    <!-- css file -->
    <link rel="stylesheet" href="../css/style.css">
    
</head>
<body>


    <div class="container-fluid">
      <div class="row">
      <?php
      include('sidebar.php');
      ?>
        <div class="col-10 p-4 ms-auto">
        <div class="row">
                <div class="col-12  d-flex justify-content-between align-items-center">
                    <h5 class="page-title">Dashborad</h5>
                    
            </div>
        <div class="row gap-3">
              <div class="col-12 col-md-6 col-lg row-card-no-pd p-4 py-4 main-Borad bg-white cursor" style="border-bottom: 6px solid #48ABF7;">
                    <div class="card-body">
                        <div class="d-flex justify-content-between">
                            <div>
                                <h6>All Property</h6>
                                <p class="text-muted mb-0">Property</p>
                            </div>
                            <div class="d-flex align-items-center">
                                <h4 class="text-info fw-bold">
                                    24
                                </h4>
                            </div>
                        </div>
                    </div>
              </div>
              <div class="col-12 col-md-6 col-lg row-card-no-pd p-4 py-4 main-Borad bg-white cursor" style="border-bottom: 6px solid #E354D4;">
                    <div class="card-body">
                        <div class="d-flex justify-content-between">
                            <div>
                                <h6>Approved Property</h6>
                                <p class="text-muted mb-0">Property</p>
                            </div>
                            <div class="d-flex align-items-center">
                                <h4 class=" fw-bold" style="color:#E354D4;">
                                    14
                                </h4>
                            </div>
                        </div>
                    </div>
              </div>
              <div class="col-12 col-md-6 col-lg row-card-no-pd p-4 py-4 main-Borad bg-white cursor" style="border-bottom: 6px solid #FF5D9F;">
                    <div class="card-body">
                        <div class="d-flex justify-content-between">
                            <div>
                                <h6>Pending Property</h6>
                                <p class="text-muted mb-0">Property</p>
                            </div>
                            <div class="d-flex align-items-center">
                                <h4 class=" fw-bold" style="color:#FF5D9F;">
                                    4
                                </h4>
                            </div>
                        </div>
                    </div>
              </div>
              <div class="col-12 col-md-6 col-lg row-card-no-pd p-4 py-4 main-Borad bg-white cursor" style="border-bottom: 6px solid #FF8E6F;">
                    <div class="card-body">
                        <div class="d-flex justify-content-between">
                            <div>
                                <h6>Decline Property</h6>
                                <p class="text-muted mb-0">Property</p>
                            </div>
                            <div class="d-flex align-items-center">
                                <h4 class=" fw-bold" style="color:#FF8E6F;">
                                    10
                                </h4>
                            </div>
                        </div>
                    </div>
              </div>
      </div>


    </div>

    <!-- bootstrap js -->
    <script src="../js/bootstrap.bundle.js"></script>
    
    <!-- script  -->
    <script src="../js/script.js"></script>

    <script>
        function checkScreenWidth() {
        const mainBorad = document.querySelector('.col-10');
        
        if (window.innerWidth <= 991) {
            mainBorad.classList.add('col-12');
        } else {
            mainBorad.classList.remove('col-12');
        }
    }
    </script>


</body>
</html>