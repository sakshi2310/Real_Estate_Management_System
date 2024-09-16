
<?php 

$con=mysqli_connect("localhost","root","","real_estate");

// page session
session_start();
if(!isset($_SESSION['admin_id']))
{
  header("location:index.php");
}

// Fetch the review
$sql_contactUs = "select * from website_contact_us";


if(isset($_POST['search']) && isset($_POST['search_by']))
{
     // echo "Hello";
  $search = mysqli_real_escape_string($con,$_POST['search']);
  $search_by = mysqli_real_escape_string($con,$_POST['search_by']);

  if($search_by == 'First_name')
  {
    $sql_contactUs = "select * from website_contact_us where First_name LIKE '%$search%'";
   
  }elseif($search_by == 'Email')
  {
    $sql_contactUs = "select * from website_contact_us where Email LIKE '%$search%'";
  }elseif($search_by == 'Date')
  {
    $sql_contactUs = "select * from property_review where Date LIKE '%$search%'";
  }

}


$res_review = mysqli_query($con,$sql_contactUs);




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
                    url: "View_contact_us.php", 
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
                  <option value="First_name" selected>First Name</option>
                  <option value="Email" >Email</option>
                  <option value="Date">Date</option>
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
                                <th>First Name</th>
                                <th>Last Name</th>
                                <th>Email</th>
                                <th>Message</th>
                              
                               
                            </tr>
                        </thead>
                       
                        <tbody id="data-table">
                        <?php while($row = mysqli_fetch_assoc($res_review)){?>
                          <tr>  
                                <td><?php echo $row['Id'] ?></td>
                                <td><?php echo $row['First_name'] ?></td>
                                <td><?php echo $row['Last_name'] ?></td>
                                <td><?php echo $row['Email'] ?></td>
                                <td><?php echo $row['Message'] ?></td>
                                <td><?php echo $row['Date'] ?></td>
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