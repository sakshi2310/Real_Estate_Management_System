
<?php 

$con=mysqli_connect("localhost","root","","real_estate");

// page session
session_start();
if(!isset($_SESSION['admin_id']))
{
  header("location:index.php");
}

// Fetch the review
$Sql_Service = "select * from website_services";


// if(isset($_POST['search']) && isset($_POST['search_by']))
// {
//   $search = mysqli_real_escape_string($con,$_POST['search']);
//   $search_by = mysqli_real_escape_string($con,$_POST['search_by']);

//   if($search_by == 'Rating')
//   {
//     $sql_review = "select * from property_review where Rating LIKE '%$search%'";
   
//   }elseif($search_by == 'Property_id')
//   {
//     $sql_review = "select * from property_review where Property_id LIKE '%$search%'";
//   }elseif($search_by == 'Date')
//   {
//     $sql_review = "select * from property_review where Date LIKE '%$search%'";
//   }

// }


$res_service = mysqli_query($con,$Sql_Service);




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
                    url: "View_reviews.php", 
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
                    id="Search"
                  />
                  <div class="dropdown position-absolute top-0 start-0">
                <select class="form-select" aria-label="Default select example" id="Search_by">
                  <option >Select</option>
                  <option value="Rating" selected>Rating</option>
                  <option value="Property_id" >Property id</option>
                  <option value="Date">Date</option>
                  <option value="Title">Title</option>
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
                                <th>Title</th>
                                <th>Description</th>
                                <th>Image</th>
                                <th>Date</th>
                                <th>Action</th>
                               
                               
                            </tr>
                        </thead>
                        <?php while($row = mysqli_fetch_assoc($res_service)){
                          ?>
                        <tbody id="data-table">
                          <tr>  
                                <td><?php echo $row['Id'] ?></td>
                                <td><?php echo $row['Title'] ?></td>
                                <td><?php echo $row['Description'] ?></td>
                                <td>
                                  <div class="img-data" style="width:130px; height: 130px;">
                                      <img src="upload/<?php echo $row['Image']; ?>" alt="" class="img" style="height:100%; width:100%; object-fit:cover;">
                                  </div>
                              </td>
                              <td><?php echo $row['Date'] ?></td>
                                  <td>
                                <div class="action-icn">
                                  <div class="form-button-action d-flex gap-2">
                                    <a href="Add_webstie_services.php?edit_id=<?php echo $row['Id']; ?>" class="edit-btn">  <i class="fa fa-edit"></i> </a>
                                    <a href="Add_webstie_services.php?del_id=<?php echo $row['Id']?>" class="del-btn"> <i class="fa fa-times"></i></a>
                                  </div>
                                </div>
                              </td>
                          </tr>
                          
                        </tbody>
                        <?php } ?>
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