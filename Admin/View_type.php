<?php 

$con=mysqli_connect("localhost","root","","real_estate");
$sql = "select * from property_type";
$res = mysqli_query($con,$sql);

// Del the row
if(isset($_GET['del_id']))
{
  $del_id = $_GET['del_id'];
  $sql_del ="delete from property_type where id=".$del_id;
  mysqli_query($con,$sql_del);
  header('location:View_type.php');
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
                  <div class="card-header">
                    <div class="card-title">Property Type</div>
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
                      <tbody>
                        <?php while($row = mysqli_fetch_assoc($res)){ ?>
                        <tr>
                          <td><?php echo $row['id']; ?></td>
                          <td><?php echo $row['Property_type']; ?></td>
                          
                          <td>  <a href="Add_type.php?edit_id=<?php echo $row['id']; ?>" class="text-theme"><i class="far fa-edit"></i> &nbsp;</a> | <a href="View_type.php?del_id=<?php echo $row['id']; ?>" class="text-theme"> &nbsp;<i class="fas fa-trash-alt"></i></a>
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
