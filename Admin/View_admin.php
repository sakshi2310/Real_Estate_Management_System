<?php 

// Connention
$con=mysqli_connect("localhost","root","","real_estate");


// page session
session_start();
if(!isset($_SESSION['admin_id']))
{
  header("location:index.php");
}

// status Update
if(isset($_GET['U_id']))
{
  $u_id = $_GET['U_id'];
  $sql_status_update = "update admin set Status='Unactive' where id=".$u_id;
  mysqli_query($con,$sql_status_update);
  header('location:View_admin.php');
}
if(isset($_GET['A_id']))
{
  $a_id = $_GET['A_id'];
  $sql_status_update = "update admin set Status='Active' where id=".$a_id;
  echo $sql_status_update;
  mysqli_query($con,$sql_status_update);
  header('location:View_admin.php');
}

//  del admin
if(isset($_GET['del_admin']))
{
  $del_id = $_GET['del_admin'];
  $sql_del ="delete from admin where id=".$del_id;
  mysqli_query($con,$sql_del);
  header('location:View_admin.php');
}
//Serach By
// For fetch all admins
$sql = "select * from admin";

if(isset($_POST['search']) && isset($_POST['search_by']))
{
  $search = mysqli_real_escape_string($con,$_POST['search']);
  $search_by = mysqli_real_escape_string($con,$_POST['search_by']);

  if($search_by == 'Name')
  {
    $sql = "select * from admin where User_name LIKE '%$search%'";
  }elseif($search_by == 'Contact')
  {
    $sql = "select * from admin where Contact LIKE '%$search%'";
  }elseif($search_by == 'Status')
  {
    $sql = "select * from admin where Status LIKE '%$search%'";
  }

}


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

        $(document).ready(function() {
            $('#Search').keyup(function() {
                var search = $(this).val();
                var search_by = $('#Search_by').val()
                console.log(search);
                console.log(search_by);
                $.ajax({
                    type: "POST",
                    data: { search_by:search_by,search: search },
                    url: "View_admin.php", 
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
                  <a href="#">Admin</a>
                </li>
                <li class="separator">
                  <i class="icon-arrow-right"></i>
                </li>
                <li class="nav-item">
                  <a href="#">New Admin</a>
                </li>
              </ul>
            </div>
            <div class="row">
              <div class="col-md-12">
              <div class="card">
                  <div class="card-header  d-flex justify-content-between align-items-center">
                    <div class="card-title">New Admin</div>
                    <div class="input-group position-relative search-dropdown">
                  <div class="input-group-prepend">
                    <button type="submit" class="btn btn-search pe-1">
                      <i class="fa fa-search search-icon"></i>
                    </button>
                  </div>
                  <input
                    type="text"
                    placeholder="Search ..."
                    class="form-control"
                    id="Search" 
                  />
                  <div class="dropdown position-absolute top-0 start-0">
                <select class="form-select" aria-label="Default select example" name="Search_by" id="Search_by">
                  <option >Select</option>
                  <option value="Name" selected>Name</option>
                  <option value="Contact">Contact</option>
                  <option value="Status">Status</option>
                </select>
              </div>
      </div>
      </div>
                  <div class="card-body">
                      <table class="table">
                      <thead  style="background-color:#6861ce !important;">
                        <tr>
                          <th scope="col">Id</th>
                          <th scope="col">Name</th>
                          <th scope="col">Passsword</th>
                          <th scope="col">Email</th>
                          <th scope="col">Contact</th>
                          <th scope="col">Status</th>
                          <th scope="col">Status Update</th>
                          <th scope="col">Edit</th>
                        </tr>
                      </thead>
                      <tbody id="data-table">
                        <?php while($row = mysqli_fetch_assoc($res)) { ?>
                        <tr>
                          <td><?php echo $row['id']; ?></td>
                          <td><?php echo $row['User_name']; ?></td>
                          <td><?php echo $row['Password']; ?></td>
                          <td><?php echo $row['Email'] ?></td>
                          <td><?php echo $row['Contact']; ?></td>
                          <td><?php echo $row['Status']; ?></td>
                          <td>
                                <a href="View_admin.php?A_id=<?php echo $row['id']; ?>" class="text-success">&nbsp;active &nbsp;</a> | <a href="View_admin.php?U_id=<?php echo $row['id']; ?>" class="text-danger">&nbsp; unactive</a>
                          </td>
                          <td>
                                <a href="Add_admin.php?edit_id=<?php echo $row['id']; ?>" class="text-theme"><i class="far fa-edit"></i> &nbsp;</a> | <a href="View_admin.php?del_admin=<?php echo $row['id'];?>" class="text-theme"> &nbsp;<i class="fas fa-trash-alt"></i></a>
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
