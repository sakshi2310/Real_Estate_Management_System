
<?php 

$con=mysqli_connect("localhost","root","","real_estate");

// Header start
include('header.php');
// Page session
if(!isset($_SESSION['user_id']))
{
  header("location:index.php");
}
$user_id = $_SESSION['user_id'];
$sql = "select * from property_register where Approval_status='Approved' and User_id=".$user_id." order by id DESC";
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

$sql = "select * from property_register where Approval_status='Approved' order by id DESC";
if (isset($_POST['search']) && isset($_POST['search_by'])) {
  $search = mysqli_real_escape_string($con, $_POST['search']);
  $search_by = mysqli_real_escape_string($con, $_POST['search_by']);
  
  // Build SQL query based on the selected search criterion
  if ($search_by == 'Title') {
      $sql = "SELECT * FROM property_register WHERE Approval_status='Approved' AND Property_title LIKE '%$search%' ORDER BY id DESC";
  } elseif ($search_by == 'Type') {
      $sql = "SELECT * FROM property_register WHERE Approval_status='Approved' AND Type LIKE '%$search%' ORDER BY id DESC";
  } elseif ($search_by == 'Status') {
      $sql = "SELECT * FROM property_register WHERE Approval_status='Approved' AND Status LIKE '%$search%' ORDER BY id DESC";
  } elseif ($search_by == 'Area') {
      $sql = "SELECT * FROM property_register WHERE Approval_status='Approved' AND Area_name LIKE '%$search%' ORDER BY id DESC";
  } elseif ($search_by == 'BHK') {
      $sql = "SELECT * FROM property_register WHERE Approval_status='Approved' AND BHK_plot LIKE '%$search%' ORDER BY id DESC";
  } elseif ($search_by == 'Date') {
      $sql = "SELECT * FROM property_register WHERE Approval_status='Approved' AND Pro_date LIKE '%$search%' ORDER BY id DESC";
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
    <link href="../css/bootstrap.min.css" rel="stylesheet" >

    <!-- css file -->
    <link rel="stylesheet" href="../css/style.css">
    <script src="../../Admin/assets/js/jquery.min.js"></script>
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

    <!-- header start -->
    <?php
  // include('header.php');
  ?>
    <!-- header start -->

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
                  <option value="Title" selected>Title</option>
                  <option value="Type">Properyt Type</option>
                  <option value="Status">Status</option>
                  <option value="Area">Area</option>
                  <option value="BHK">BHK</option>
                  <option value="Date">Date</option>
                </select>
              </div>
            </div>
            </div>
             <!-- table start -->
           <table class="table bg-transparent">
            <thead>
                            <tr>
                                <th>ID</th>
                                <th>Iamge</th>
                                <th>title</th>
                                <th>Status</th>
                                <th>Type</th>
                                <th>City</th> 
                                <th>Approval status</th>
                                <th class="text-center">Action</th> 
                                <th>Preview</th>
                            </tr>
                        </thead>
            <tr>
                   <tbody id="data-table">
                          <?php while($row = mysqli_fetch_assoc($res)) { ?>
                          <tr>  
                             <td><?php echo $row['id']; ?></td>
                              <td>
                                  <div class="img-data" style="width:180px; height: 180px;">
                                      <img src="../upload/<?php echo $row['Image1']; ?>" alt="" class="img" style="height:100%; width:100%; object-fit:cover;">
                                  </div>
                              </td>
                              <td><?php echo $row['Property_title'];  ?></td>
                              <td>
                                  <?php echo $row['Status']; ?>
                              </td>
                               <td>
                                  <?php echo $row['Type']; ?>
                              </td>
                              <td>
                                  <?php echo $row['City']; ?>
                              </td>
                              <td>
                                  <?php echo $row['Approval_status']; ?>
                              </td>
                              <td>
                <div class="action-icn d-flex gap-2">
                <a href="Add_property.php?edit_id=<?php echo $row['id'];?>" class="edit-btn"><i class="bi bi-pencil"></i></a>
                <a href="View_property.php?del_id=<?php echo $row['id'];?>" class="del-btn"><i class="bi bi-trash3"></i></a>
                </div>
              </td>
              <td>
                <div class="action-icn d-flex justify-content-center">
                <a href="Single_property.php?view_id=<?php echo $row['id'];?>" class="prev-btn"><i class="bi bi-eye"></i></a>
                </div>
              </td>
                          </tr>
                        <?php } ?>
                        </tbody>
           </table>
          <!-- table start -->
          </div>
         

     

        </div>
      </div>
    </div>

    
    <!-- bootstrap js -->
    <script src="../js/bootstrap.bundle.js"></script>
    
    <!-- script  -->
    <script src="../js/script.js"></script>
    

</body>
</html>