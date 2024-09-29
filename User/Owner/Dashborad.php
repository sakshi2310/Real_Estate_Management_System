<?php 

$con = mysqli_connect("localhost", "root", "", "real_estate");

// Header start
include('header.php');
// Page session
if(!isset($_SESSION['user_id']))
{
  header("location:index.php");
}

$user_id = $_SESSION['user_id'];
$sql_all = "SELECT COUNT(*) AS total_records FROM property_register where User_id ='$user_id'";
$res_all = mysqli_query($con,$sql_all);
$row_all = mysqli_fetch_assoc($res_all);
$total_records = $row_all['total_records'];

$sql_approved = "SELECT COUNT(*) AS total_records FROM property_register where User_id ='$user_id' and Approval_status='Approved'";
$res_approved = mysqli_query($con,$sql_approved);
$row_approved = mysqli_fetch_assoc($res_approved);
$approved_records = $row_approved['total_records'];

$sql_Pending = "SELECT COUNT(*) AS total_records FROM property_register where User_id ='$user_id' and Approval_status='Pending'";
$res_Pending = mysqli_query($con,$sql_Pending);
$row_Pending = mysqli_fetch_assoc($res_Pending);
$Pending_records = $row_Pending['total_records'];

$sql_decline = "SELECT COUNT(*) AS total_records FROM property_register where User_id ='$user_id' and Approval_status='Decline'";
$res_Decline = mysqli_query($con,$sql_decline);
$row_Decline = mysqli_fetch_assoc($res_Decline);
$Decline_records = $row_Decline['total_records'];

$sql_rec_inq =  "SELECT COUNT(*) AS total_records FROM property_inquiry where Pro_admin_id ='$user_id'";
$res_rec_inq = mysqli_query($con,$sql_rec_inq);
$row_inq = mysqli_fetch_assoc($res_rec_inq);
$rec_inq_records = $row_inq['total_records'];

$sql_ans_inq =  "SELECT COUNT(*) AS total_records FROM schedual_tour where Pro_admin_id ='$user_id'";
$res_ans_inq = mysqli_query($con,$sql_ans_inq);
$row_ans_inq = mysqli_fetch_assoc($res_ans_inq);
$ans_inq_records = $row_ans_inq['total_records'];



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
                                <?php echo $total_records; ?>
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
                                <?php echo $approved_records; ?>
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
                                <?php echo $Pending_records; ?>
                                </h4>
                            </div>
                        </div>
                    </div>
              </div>
      </div>
      <div class="row gap-3 mt-3">
        
      <div class="col-12 col-md-6 col-lg row-card-no-pd p-4 py-4 main-Borad bg-white cursor" style="border-bottom: 6px solid #FF8E6F;">
                    <div class="card-body">
                        <div class="d-flex justify-content-between">
                            <div>
                                <h6>Decline Property</h6>
                                <p class="text-muted mb-0">Property</p>
                            </div>
                            <div class="d-flex align-items-center">
                                <h4 class=" fw-bold" style="color:#FF8E6F;">
                                <?php echo $Decline_records; ?>
                                </h4>
                            </div>
                        </div>
                    </div>
              </div>
              <div class="col-12 col-md-6 col-lg row-card-no-pd p-4 py-4 main-Borad bg-white cursor" style="border-bottom: 6px solid #48ABF7;">
                    <div class="card-body">
                        <div class="d-flex justify-content-between">
                            <div>
                                <h6>Total Inquery</h6>
                                <p class="text-muted mb-0">Inquery</p>
                            </div>
                            <div class="d-flex align-items-center">
                                <h4 class="text-info fw-bold">
                                <?php echo $rec_inq_records; ?>
                                </h4>
                            </div>
                        </div>
                    </div>
              </div>
              <div class="col-12 col-md-6 col-lg row-card-no-pd p-4 py-4 main-Borad bg-white cursor" style="border-bottom: 6px solid #E354D4;">
                    <div class="card-body">
                        <div class="d-flex justify-content-between">
                            <div>
                                <h6>Total Schedual Tour</h6>
                                <p class="text-muted mb-0">Property Visit</p>
                            </div>
                            <div class="d-flex align-items-center">
                                <h4 class=" fw-bold" style="color:#E354D4;">
                                <?php echo $ans_inq_records     ; ?>
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