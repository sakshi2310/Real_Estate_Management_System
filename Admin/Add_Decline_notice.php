<?php 


$con = mysqli_connect('localhost','root','','real_estate');

// page session
session_start();
if(!isset($_SESSION['admin_id']))
{
  header("location:index.php");
}

if(isset($_GET['Decline_id']))
{
  $decline_id = $_GET['Decline_id'];
}
else{
  $decline_id = '';
}

if(isset($_POST['save']))
{
  $title = $_POST['title'];
  $dec = $_POST['dec'];

  $sql = "insert into deline_notice (Property_id,Pro_title,Pro_dec) value ('$decline_id','$title','$dec')";
  mysqli_query($con,$sql);
}


 ?>

<?php 
    include('sidebar.php');
?>

<div class="main-panel">
    <?php 
        include('header.php');
    ?>
   <div class="container">
          <div class="page-inner">
            <div class="page-header">
              <h3 class="fw-bold mb-3">Deline Description</h3>
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
                  <a href="#">Decline Property</a>
                </li>
              </ul>
            </div>
            <div class="row">
              <div class="col-md-12">
                <div class="card">
                  <div class="card-header">
                    <div class="card-title">Decline</div>
                  </div>
                <form method="post">
                    <div class="card-body">
                    <div class="row"> 
                    <div class="col-md-6 col-lg-4">
                        <div class="form-group px-0">
                          <label for="Area" style="font-weight:600 !important;">Title</label>
                          <input type="text" class="form-control" id="title" placeholder="enter title" name="title" value="<?php  ?>">
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4">
                        <div class="form-group px-0">
                          <label for="Area" style="font-weight:600 !important;">Description</label>
                          <input type="text" class="form-control" id="dec" placeholder="enter description" name="dec" value="<?php ?>">
                        </div>
                    </div>
                  </div>
                  <div class="card-action mt-4">
                    <button class="btn btn-submit" name="save" type="submit" value="save">Submit</button>
                    <button class="btn btn-cancel" name="Disdard">Cancel</button>
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


