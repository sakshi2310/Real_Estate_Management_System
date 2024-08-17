
<?php 

$con=mysqli_connect("localhost","root","","real_estate");
// $status = "Pending";
$sql = "select * from property_register where Approval_status='Decline'";
$res = mysqli_query($con,$sql);

// if(isset($_GET['Decline_id']))
// {
//   $approved_id = $_GET['Decline_id'];
//   $approval_status = "Decline";
//   $sql_update = "update property_register set Approval_status='$approval_status' where id =".$approved_id;
//   mysqli_query($con,$sql_update);
//   header("location:View_property.php");
// }




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
                  <div class="card-header">
                    <h4 class="card-title">Admin Data</h4>
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
                                      <img src="../User/upload/<?php echo $row['Image6']; ?>" alt="" class="img" style="height:100%; width:100%; object-fit:cover;">
                                  </div>
                              </td>
                              <td><?php echo $row['Property_title'];  ?></td>
                            
                               <td>
                                  <?php echo $row['Type']; ?>
                              </td>
                              <td>
                                  <!-- <?php echo $row['Approval_status']; ?> -->
                                   <div class="approve_status d-flex gap-2">
                                    <a href="" class="bg-danger"> Decline</a>
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
