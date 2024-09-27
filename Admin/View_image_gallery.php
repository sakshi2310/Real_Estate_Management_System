
<?php 

$con=mysqli_connect("localhost","root","","real_estate");

// page session
session_start();
if(!isset($_SESSION['admin_id']))
{
  header("location:index.php");
}



if(isset($_GET['del_id']))
{
  $del_id = $_GET['del_id'];
  $sql_sel = "select * from website_aboutus_photo_gallery  where id =".$del_id;
  $sql_res = mysqli_query($con,$sql_sel);
  $row = mysqli_fetch_assoc($sql_res);
  if(file_exists('upload/'.$row['Image']) & $row['Image']!=" ")
  {
    echo "image 1";
    unlink('upload/'.$row['Image']);
  }
  $sql_del = "delete from website_aboutus_photo_gallery where id = ".$del_id;
  mysqli_query($con,$sql_del);
  header('location:View_image_gallery.php');
}

// search

$sql = "select * from website_aboutus_photo_gallery";


$res = mysqli_query($con,$sql);


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
              <h3 class="fw-bold mb-3">Admin Data </h3>
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
                  <a href="#">View all property</a>
                </li>
                <li class="separator">
                  <i class="icon-arrow-right"></i>
                </li>
                <li class="nav-item">
                  <a href="#">Property Data</a>
                </li>
              </ul>
            </div>
            <div class="row">
              <div class="col-md-12">
                <div class="card">
                  <div class="card-header  d-flex justify-content-between align-items-center">
                    <h4 class="card-title">Admin Data</h4>
                    
                    <div class="input-group position-relative search-dropdown">
                  <div class="input-group-prepend">
                   </
                  <div class="dropdown position-absolute top-0 start-0">
                  
              </div>
      </div>
                  </div>
                  <div class="card-body">
                    <div class="table-responsive">
                      <table
                        id="basic-datatables"
                        class="display table table-striped table-hover"
                      >
                        <thead>
                            <tr>
                                <th class="id-column" style="width: 10px;">ID</th>
                                <th>Iamge</th>
                                <th>Date</th>
                                <th>Delete</th> 
                            </tr>
                        </thead>
                        <tbody id="data-table">
                          <?php while($row = mysqli_fetch_assoc($res)) { ?>
                          <tr>  
                             <td><?php echo $row['id']; ?></td>
                              <td>
                                  <div class="img-data" style="width: 200px; height: 150px;">
                                      <img src="upload/<?php echo $row['Image']; ?>" alt="" class="img" style="height:100%; width:100%; object-fit:cover;">
                                  </div>
                              </td>
                              <td><?php echo $row['Date'];  ?></td>
                            
                                <td>
                                <a href="View_image_gallery.php?del_id=<?php echo $row['id']?>" class="del-btn"> <i class="fa fa-times"></i></a>
                                </td>
                          </tr>
                        <?php } ?>
                        </tbody>
                      </table>
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
     
      <!-- End Custom template -->
    </div>
