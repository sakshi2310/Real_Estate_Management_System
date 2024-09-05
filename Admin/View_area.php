<?php 

$con=mysqli_connect("localhost","root","","real_estate");

// page session
session_start();
if(!isset($_SESSION['admin_id']))
{
  header("location:index.php");
}

$sql = "select * from property_area";
$res = mysqli_query($con,$sql);

// del the row
if(isset($_GET['del_id']))
{
  $del_id = $_GET['del_id'];
  $sql_del ="delete from property_area where id=".$del_id;
  mysqli_query($con,$sql_del);
  header('location:View_area.php');
}

//  search area
// Search data
$sql = "SELECT * FROM property_area";
if (isset($_POST['search'])) {
    $search = mysqli_real_escape_string($con, $_POST['search']);
    $sql = "SELECT * FROM property_area WHERE Property_area LIKE '%$search%'";
}
$res = mysqli_query($con, $sql);

 ?><!DOCTYPE html>
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
                     url: "View_area.php", 
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
                  <a href="#">Property Type</a>
                </li>
                <li class="separator">
                  <i class="icon-arrow-right"></i>
                </li>
                <li class="nav-item">
                  <a href="#">Add Property Type</a>
                </li>
              </ul>
            </div>
            <div class="row">
              <div class="col-md-12">
              <div class="card">
                  <div class="card-header  d-flex justify-content-between align-items-center">
                    <div class="card-title">View Area</div>
                    
                    <div class="input-group Serach-input">
                            <i class="fa fa-search search-icon"></i>
                            <input
                                type="text"
                                placeholder="Search ..."
                                class="form-control"
                                id="Search"
                            />
                    </div>
                  </div>
                  <div class="card-body">
                    <table class="table mt-4">
                      <thead  style="background-color:#6861ce !important;">
                        <tr>
                          <th scope="col">Id</th>
                          <th scope="col">Name</th>
                          
                          <th scope="col">Action</th>
                        </tr>
                      </thead>
                      <tbody id="data-table">
                        <?php while($row = mysqli_fetch_assoc($res)){ ?>
                        <tr>
                          <td><?php echo $row['id']; ?></td>
                          <td><?php echo $row['Property_area']; ?></td>
                          
                          <td>  <a href="Add_area.php?edit_id=<?php echo $row['id']; ?>" class="text-theme"><i class="far fa-edit"></i> &nbsp;</a> | <a href="View_area.php?del_id=<?php echo $row['id']; ?>" class="text-theme"> &nbsp;<i class="fas fa-trash-alt"></i></a>
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
