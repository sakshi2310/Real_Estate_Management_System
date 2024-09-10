
<?php 

$con=mysqli_connect("localhost","root","","real_estate");



// haader start
include('header.php');
// Page session
if(!isset($_SESSION['user_id']))
{
  header("location:index.php");
}
$user_id  = $_SESSION['user_id'];
// $status = "Pending";
$sql = "select * from property_register where Approval_status='Decline' and User_id=".$user_id." order by id DESC";
$res = mysqli_query($con,$sql);
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

// search

$sql = "select * from property_register where Approval_status='Decline' order by id DESC";
if (isset($_POST['search']) && isset($_POST['search_by'])) {
  $search = mysqli_real_escape_string($con, $_POST['search']);
  $search_by = mysqli_real_escape_string($con, $_POST['search_by']);
  
  // Build SQL query based on the selected search criterion
  if ($search_by == 'Title') {
      $sql = "SELECT * FROM property_register WHERE Approval_status='Decline' AND Property_title LIKE '%$search%' ORDER BY id DESC";
  } elseif ($search_by == 'Type') {
      $sql = "SELECT * FROM property_register WHERE Approval_status='Decline' AND Type LIKE '%$search%' ORDER BY id DESC";
  } elseif ($search_by == 'Status') {
      $sql = "SELECT * FROM property_register WHERE Approval_status='Decline' AND Status LIKE '%$search%' ORDER BY id DESC";
  } elseif ($search_by == 'Area') {
      $sql = "SELECT * FROM property_register WHERE Approval_status='Decline' AND Area_name LIKE '%$search%' ORDER BY id DESC";
  } elseif ($search_by == 'BHK') {
      $sql = "SELECT * FROM property_register WHERE Approval_status='Decline' AND BHK_plot LIKE '%$search%' ORDER BY id DESC";
  } elseif ($search_by == 'Date') {
      $sql = "SELECT * FROM property_register WHERE Approval_status='Decline' AND Pro_date LIKE '%$search%' ORDER BY id DESC";
  }
}

$res = mysqli_query($con,$sql);
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashborad</title>
    <!-- bootstrap css -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <!-- css file -->
    <link rel="stylesheet" href="css/style.css">
    <script src="../Admin/assets/js/jquery.min.js"></script>
    <script>
      
      $(document).ready(function() {
            $('#Search').keyup(function() {
                var search = $(this).val();
                var search_by = $('#Search_by').val()
                console.log(search);
                console.log(search_by);
                $.ajax({
                    type: "POST",
                    data: { search_by:search_by,search: search },
                    url: "View_Approved_property.php", 
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
</head>
<body>


    <div class="container-fluid">
      <div class="row">
      <?php
      include('sidebar.php');
      ?>
        <div class="col-10 p-4 ms-auto">
          <div class="main-Borad p-5 bg-white">
          <div class="table-header d-flex justify-content-between py-3">
              <h5 class="page-title mb-0">View Data</h5>
              <div class="input-group position-relative search-dropdown w-auto">
                  <div class="input-group-prepend">
                    <button type="submit" class="btn btn-search pe-1">
                      <i class="bi bi-search search-icn"></i>
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
                  <option value="Title" selected>Date</option>
                  <option value="Status">Rating</option>
                  <option value="Area">Title</option>
                  <option value="Id">Properyt Id</option>
                </select>
              </div>
            </div>
      </div>
             <!-- table start -->
           <table class="table bg-transparent">
            <thead>
                            <tr>
                            <th class="id-column" style="width: 10px;">ID</th>
                                <th>Email</th>
                                <th>Title</th>
                                <th>Rating</th>
                                <th>Review</th>
                                <th>Property_id</th> 
                                <th>Date</th> 
                                <th>Action</th>
                            </tr>
                        </thead>
            <tr>
                   <tbody id="data-table">
                   <tr>  
                                <td>1</td>
                                <td>sakshi@gmail.com</td>
                                <td>DSDA</td>
                                <td>1</td>
                                <td>it's great</td>
                                <td>4</td>
                                <td>2024-08-04</td>
                                <td>
                                <div class="action-icn">
                                  <div class="form-button-action d-flex gap-2">
                                  <a href="Edit_Property.php" class="edit-btn">  <i class="bi bi-pencil"></i> </a>
                                  <a href="View_property.php" class="del-btn"> <i class="bi bi-trash3"></i></a>
                                  </div>
                                </div>
                                </td>
                          </tr>
                          <tr>  
                                <td>2</td>
                                <td>vrushti@gmail.com</td>
                                <td>DSDA</td>
                                <td>2</td>
                                <td>it's great</td>
                                <td>5</td>
                                <td>2024-09-04</td>
                                <td>
                                <div class="action-icn">
                                  <div class="form-button-action d-flex gap-2">
                                    <a href="Edit_Property.php" class="edit-btn">  <i class="bi bi-pencil"></i> </a>
                                    <a href="View_property.php" class="del-btn"> <i class="bi bi-trash3"></i></a>
                                  </div>
                                </div>
                                </td>
                          </tr>
                        </tbody>
           </table>
          <!-- table start -->
          </div>
         

     

        </div>
      </div>
    </div>


       
    
    


    


    <!-- bootstrap js -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</body>
</html>