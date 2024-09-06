
<?php 

$con=mysqli_connect("localhost","root","","real_estate");

// page session
session_start();
if(!isset($_SESSION['admin_id']))
{
  header("location:index.php");
}

// $status = "Pending";
$sql = "select * from property_register where Approval_status='Pending' order by id DESC";
$res = mysqli_query($con,$sql);

if(isset($_GET['Approved_id']))
{
  $approved_id = $_GET['Approved_id'];
  $approval_status = "Approved";
  $sql_update = "update property_register set Approval_status='$approval_status' where id =".$approved_id;
  mysqli_query($con,$sql_update);
  header("location:View_Approved_property.php");
}





if(isset($_GET['del_id']))
{
  $del_id = $_GET['del_id'];
  // $sql_sel = "select * from property_register where id =".$del_id;
  // $sql_res = mysqli_query($con,$sql_sel);
  // $row = mysqli_fetch_assoc($sql_res);
  // if(file_exists('upload/'.$row['Image1']) & $row['Image1']!=" ")
  // {
  //   echo "image 1";
  //   unlink('upload/'.$row['Image1']);
  // }
  $sql_del = "delete from property_register where id = ".$del_id;
  mysqli_query($con,$sql_del);
  header('location:View_property.php');
}


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
                     url: "View_feature.php", 
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
              <h3 class="fw-bold mb-3">View Property </h3>
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
                    <h4 class="card-title">View Property</h4>
                    
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
                  />
                  <div class="dropdown position-absolute top-0 start-0">
                <select class="form-select" aria-label="Default select example">
                  <option selected>Select</option>
                  <option value="1">Name</option>
                  <option value="2">Contact</option>
                  <option value="3">Status</option>
                </select>
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
                                <th>title</th>
                                <th>Type</th>
                                <th>Approval status</th>
                                <th class="text-center">Action</th> 
                                <th>Preview</th> 
                            </tr>
                        </thead>
                        <tbody>
                          <?php while($row = mysqli_fetch_assoc($res)) { ?>
                          <tr>  
                             <td><?php echo $row['id']; ?></td>
                              <td>
                                  <div class="img-data" style="width:130px; height: 130px;">
                                      <img src="../User/upload/<?php echo $row['Image1']; ?>" alt="" class="img" style="height:100%; width:100%; object-fit:cover;">
                                  </div>
                              </td>
                              <td><?php echo $row['Property_title'];  ?></td>
                            
                               <td>
                                  <?php echo $row['Type']; ?>
                              </td>
                              <td>
                                  <!-- <?php echo $row['Approval_status']; ?> -->
                                   <div class="approve_status d-flex gap-2">
                                    <a href="Add_Decline_notice.php?Decline_id=<?php echo $row['id']; ?>" class="bg-danger"> Decline</a>
                                    <a href="View_property.php?Approved_id=<?php echo $row['id']; ?>" class="bg-warning">Approved</a>
                                    <!-- <button class="bg-danger" name="Decline" value="Decline">Decline</button> -->
                                    <!-- <button class="bg-warning " name="Approved" value="Approved">Approved</button> -->
                                   </div>
                                </td>
                              <td>
                                <div class="action-icn">
                                  <div class="form-button-action d-flex gap-2">
                                    <a href="Edit_Property.php?edit_id=<?php echo $row['id']; ?>" class="edit-btn">  <i class="fa fa-edit"></i> </a>
                                    <a href="View_property.php?del_id=<?php echo $row['id']?>" class="del-btn"> <i class="fa fa-times"></i></a>
                                  </div>
                                </div>
                              </td>
                                <td>
                                <a href="View_property_detailed.php?view_id=<?php echo $row['id']; ?>" class="prev-btn">  <i class="far fa-eye"></i></a>
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
