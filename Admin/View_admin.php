<?php 

// Connention
$con=mysqli_connect("localhost","root","","real_estate");

// For fetch all admins
$sql = "select * from admin";
$res = mysqli_query($con,$sql);

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
                    <div class="input-group Serach-input">
                            <i class="fa fa-search search-icon"></i>
                            <input
                                type="text"
                                placeholder="Search ..."
                                class="form-control"
                            />
                    </div>
                  </div>
                  <div class="card-body">
                      <table class="table mt-4">
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
                      <tbody>
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
