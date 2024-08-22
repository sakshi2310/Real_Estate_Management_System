<?php 

$con = mysqli_connect('localhost','root','','real_estate');
// page session
session_start();
if(!isset($_SESSION['admin_id']))
{
  header("location:index.php");
}
// edit type

if(isset($_GET['edit_id']))
{
  $edit_id = $_GET['edit_id'];
  $sql_sel = "select * from admin where id=".$edit_id;
  $res = mysqli_query($con,$sql_sel);
  $row = mysqli_fetch_assoc($res);
}

if(isset($_POST['Register_admin']))
{
  $User_name = $_POST['User_name'];
  $Email = $_POST['Email'];
  $Password = $_POST['Password'];
  $Contact = $_POST['Contact'];
  $Status = "active";

  if(isset($_GET['edit_id']))
  {
    $sql = "update admin set User_name='$User_name',Email='$Email',Password='$Password',Contact='$Contact' where id=".$edit_id;
  }else
  {
     $sql = "insert into admin (User_name,Email,Password,Contact,Status) values ('$User_name','$Email','$Password','$Contact','$Status');";
  }
    mysqli_query($con,$sql);
    header("location:view_admin.php");
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
                  <a href="#">Add Admin</a>
                </li>
              </ul>
            </div>
            <div class="row">
              <div class="col-md-12">
               <form method="post">
                  <div class="card">
                  <div class="card-header d-flex justify-content-between align-items-center">
                    <div class="card-title">Admin</div>
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
                    <div class="row">
                      <div class="col-md-6 col-lg-4">
                        <div class="form-group px-0">
                          <label for="user" style="font-weight:600 !important;">Username</label>
                          <input type="text" class="form-control" id="user" placeholder="Enter User"/ name="User_name" value="<?php echo @$row['User_name']; ?>">
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4">
                        <div class="form-group px-0">
                          <label for="email2" style="font-weight:600 !important;">Email</label>
                          <input type="email" class="form-control" id="email2" placeholder="Enter Email"/ name="Email" value="<?php echo @$row['Email'] ?>">
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4">
                        <div class="form-group px-0">
                          <label for="password" style="font-weight:600 !important;"> Password</label>
                          <input type="password" class="form-control" id="password" placeholder="Password"/ name="Password" value="<?php echo @$row['Password']; ?>">
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4">
                        <div class="form-group px-0">
                          <label for="contact" style="font-weight:600 !important;">Contact</label>
                          <input type="text" class="form-control" id="contact" placeholder="Contact"/ name="Contact" value="<?php echo @$row['Contact']; ?>">
                        </div>
                    </div>
                  </div>
                  <div class="card-action mt-4">
                    <button class="btn btn-submit" type="submit" name="Register_admin">Submit</button>
                    <button class="btn btn-cancel" name=>Cancel</button>
                  </div>
              </div>
               </form>
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
