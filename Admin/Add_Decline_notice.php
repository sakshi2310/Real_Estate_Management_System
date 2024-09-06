<?php 


$con = mysqli_connect('localhost','root','','real_estate');

// page session
session_start();
if(!isset($_SESSION['admin_id']))
{
  header("location:index.php");
}

if(isset($_GET['Decline_id']))
{
  if(isset($_POST['save']))
  {
    $title = $_POST['title'];
    $dec = $_POST['dec'];
    $decline_id = $_GET['Decline_id'];
    $sql = "insert into deline_notice (Property_id,Pro_title,Pro_dec,Deline_date) value ('$decline_id','$title','$dec', CURDATE())";
    mysqli_query($con,$sql);

    $decline_id = $_GET['Decline_id'];
    $approval_status = "Decline";
    $sql_update = "update property_register set Approval_status='$approval_status' where id =".$decline_id;
    mysqli_query($con,$sql_update);
    header('location:View_Decline_property.php');

  }
 }
else{
  $decline_id = '';
}




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
              <h3 class="fw-bold mb-3">Deline Description</h3>
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
                  <a href="#">Decline Property</a>
                </li>
              </ul>
            </div>
            <div class="row">
              <div class="col-md-12">
                <div class="card">
                  <div class="card-header  d-flex justify-content-between align-items-center">
                    <div class="card-title">Decline</div>
                    <div class="input-group Serach-input">
                            <i class="fa fa-search search-icon"></i>
                            <input
                                type="text"
                                placeholder="Search ..."
                                class="form-control"
                            />
                    </div>
                  </div>
                <form method="post">
                    <div class="card-body">
                    <div class="row"> 
                    <div class="col-md-6 col-lg-4">
                        <div class="form-group px-0">
                          <label for="Area" style="font-weight:600 !important;">Title</label>
                          <input type="text" class="form-control" id="title" placeholder="enter title" name="title" value="<?php  ?>">
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4">
                        <div class="form-group px-0">
                          <label for="Area" style="font-weight:600 !important;">Description</label>
                          <input type="text" class="form-control" id="dec" placeholder="enter description" name="dec" value="<?php ?>">
                        </div>
                    </div>
                  </div>
                  <div class="card-action mt-4">
                    <button class="btn btn-submit" name="save" type="submit" value="save">Submit</button>
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


