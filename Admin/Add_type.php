<?php 

$con = mysqli_connect('localhost','root','','real_estate');


// edit type

if(isset($_GET['edit_id']))
{
  $edit_id = $_GET['edit_id'];
  $sql_sel = "select * from property_type where id=".$edit_id;
  $res = mysqli_query($con,$sql_sel);
  $row = mysqli_fetch_assoc($res);
}


if(isset($_POST['save']))
{

  $Property_type = $_POST['Property_type'];

  // edit type
  if(isset($_GET['edit_id'])){
    $sql = "update property_type set Property_type='$Property_type' where id=".$edit_id;

  }else
  {
    $sql = "insert into property_type (Property_type) values ('$Property_type');";
   
  }
  mysqli_query($con,$sql); 
  header("location:View_type.php");
}
if(isset($_POST['Disdard']))
{
  header("location:View_type.php");
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
                 <form method="post">
                    <div class="card-body">
                    <div class="row"> 
                    <div class="col-md-6 col-lg-4">
                        <div class="form-group px-0">
                          <label for="Property type" style="font-weight:600 !important;">Property type</label>
                          <input type="text" class="form-control" id="contact" placeholder="Property type"/ name="Property_type" value="<?php echo @$row['Property_type'] ?>">
                        </div>
                    </div>
                  </div>
                  <div class="card-action mt-4">
                    <button class="btn btn-submit" name="save" type="submit">Submit</button>
                    <button class="btn btn-cancel" name="Disdard">Cancel</button>
                  </div>
              </div>
                 </form>
            </div>
          </div>
        </div>
                </div>


             </div>
        <?php 
        include('footer.php');
       ?>
      <!-- End Custom template -->
    </div>
