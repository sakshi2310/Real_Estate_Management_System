<?php 

$con = mysqli_connect('localhost','root','','real_estate');
// page session
session_start();
if(!isset($_SESSION['admin_id']))
{
  header("location:index.php");
}

// edit type

if(isset($_GET['edit_id']))
{
  $edit_id = $_GET['edit_id'];
  $sql_sel = "select * from property_feature where id=".$edit_id;
  $res = mysqli_query($con,$sql_sel);
  $row = mysqli_fetch_assoc($res);
}

$sql_all = "SELECT COUNT(*) AS total_records FROM property_register";
$res_all = mysqli_query($con,$sql_all);
$row_all = mysqli_fetch_assoc($res_all);
$total_records = $row_all['total_records'];

$sql_approved = "SELECT COUNT(*) AS total_records FROM property_register where Approval_status='Approved'";
$res_approved = mysqli_query($con,$sql_approved);
$row_approved = mysqli_fetch_assoc($res_approved);
$approved_records = $row_approved['total_records'];

$sql_Pending = "SELECT COUNT(*) AS total_records FROM property_register where Approval_status='Pending'";
$res_Pending = mysqli_query($con,$sql_Pending);
$row_Pending = mysqli_fetch_assoc($res_Pending);
$Pending_records = $row_Pending['total_records'];

$sql_decline = "SELECT COUNT(*) AS total_records FROM property_register where  Approval_status='Decline'";
$res_Decline = mysqli_query($con,$sql_decline);
$row_Decline = mysqli_fetch_assoc($res_Decline);
$Decline_records = $row_Decline['total_records']




 ?>

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

    
    </script>
    <!-- CSS Files -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css" />
    <link rel="stylesheet" href="assets/css/plugins.min.css" />
    <link rel="stylesheet" href="assets/css/kaiadmin.min.css" />
    <!-- CSS Just for demo purpose, don't include it in your project -->
    <link rel="stylesheet" href="assets/css/demo.css" />
    <link rel="shortcut icon" href="assets/img/logo-dash.png" type="image/x-icon">
</head>
<body>


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
              <h3 class="fw-bold mb-3">Dashborad</h3>
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
                  <a href="#">Dashborad</a>
                </li>
              </ul>
            </div>
            <div class="row row-card-no-pd">
              <div class="col-12 col-sm-6 col-md-6 col-xl-3">
                <div class="card cursor">
                  <div class="card-body">
                    <div class="d-flex justify-content-between">
                      <div>
                        <h6><b>All Property</b></h6>
                        <p class="text-muted mb-0">Property</p>
                      </div>
                      <h4 class="text-info fw-bold">  <?php echo $total_records; ?></h4>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-12 col-sm-6 col-md-6 col-xl-3">
                <div class="card cursor">
                  <div class="card-body">
                    <div class="d-flex justify-content-between">
                      <div>
                        <h6><b>Approved Property</b></h6>
                        <p class="text-muted mb-0">Property</p>
                      </div>
                      <h4 class="text-success fw-bold">  <?php echo $approved_records; ?></h4>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-12 col-sm-6 col-md-6 col-xl-3">
                <div class="card cursor">
                  <div class="card-body">
                    <div class="d-flex justify-content-between">
                      <div>
                        <h6><b>Pending Property</b></h6>
                        <p class="text-muted mb-0">Property</p>
                      </div>
                      <h4 class="text-danger fw-bold">  <?php echo $Pending_records; ?></h4>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-12 col-sm-6 col-md-6 col-xl-3">
                <div class="card cursor">
                  <div class="card-body">
                    <div class="d-flex justify-content-between">
                      <div>
                        <h6><b>Decline Property</b></h6>
                        <p class="text-muted mb-0">Property</p>
                      </div>
                      <h4 class="text-secondary fw-bold">  <?php echo $Decline_records; ?></h4>
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


