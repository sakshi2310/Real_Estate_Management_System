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
     echo $sql_select = "select * from website_services where id=".$edit_id;
     $res_select = mysqli_query($con,$sql_select);
     $row_select = mysqli_fetch_assoc($res_select);
}

if(isset($_POST['Submit']))
{
  $Title = $_POST['Title'];
  $Des = $_POST['Description'];

  if (isset($_FILES['Image']) && $_FILES['Image']['error'] === UPLOAD_ERR_OK)
  {
    $image = $_FILES['Image']['name'];
    
    if (!empty($row_select['Image'])) {
      unlink('upload/' . $row_select['Image']); // Delete the existing image
    }
    move_uploaded_file($_FILES['Image']['tmp_name'], 'upload/' . $image);
  }else{
    $image = $row_select['Image']; 
  }


  if(isset($_GET['edit_id']))
  {
    $sql = "update website_services set Title='$Title',Description='$Des',Image='$image' where id=".$edit_id;
  }else
  {
     $sql = "insert into website_services (Title,Description,Image,Date) values ('$Title','$Des','$image',CURDATE());";
  }
    mysqli_query($con,$sql);
    header("location:View_website_services.php");
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
               <form method="post" enctype="multipart/form-data" >
                  <div class="card">
                  <div class="card-header d-flex justify-content-between align-items-center">
                    <div class="card-title">Admin</div>
                  </div>
                  <div class="card-body">
                    <div class="row">
                      <div class="col-md-6 col-lg-4">
                        <div class="form-group px-0">
                          <label for="user" style="font-weight:600 !important;">Title</label>
                          <input type="text" class="form-control" id="user" placeholder="Enter User"/ name="Title" value="<?php echo @$row_select['Title']; ?>">
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4">
                        <div class="form-group px-0">
                          <label for="email2" style="font-weight:600 !important;">Description</label>
                          <textarea class="form-control" id="email2" placeholder="Enter Description"/ name="Description"><?php echo @$row_select['Description']; ?></textarea>
                          </div>
                    </div>
                   
                    <div class="col-lg-4 col-md-6 col-12">
                                <div class="profile-pic position-relative d-flex flex-wrap align-items-center">
                                    <input type="file" class="file-profile position-relative" name="Image" value="">
                                    <div class="profile-pic-icn position-absolute">
                                    <i class="bi bi-image-fill"></i>
                                    </div>
                                    <p class="ms-4 mb-0">Add Picture</p>
                                </div>
                            </div> 
                  </div>
                  <div class="card-action mt-4">
                    <button class="btn btn-submit" type="submit" name="Submit">Submit</button>
                    <button class="btn btn-cancel" name=>Cancel</button>
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
     
      <!-- End Custom template -->
    </div>
