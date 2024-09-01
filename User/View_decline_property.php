
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
    
</head>
<body>


    <div class="container-fluid">
      <div class="row">
      <?php
      include('sidebar.php');
      ?>
        <div class="col-10 p-4 ms-auto">
          <div class="main-Borad p-5 bg-white">
            <h5 class="page-title">View Data</h5>
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
                   <tbody>
                          <?php while($row = mysqli_fetch_assoc($res)) { ?>
                          <tr>  
                             <td><?php echo $row['id']; ?></td>
                              <td>
                                  <div class="img-data" style="width:180px; height: 180px;">
                                      <img src="upload/<?php echo $row['Image1']; ?>" alt="" class="img" style="height:100%; width:100%; object-fit:cover;">
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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</body>
</html>