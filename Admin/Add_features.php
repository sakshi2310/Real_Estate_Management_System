
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
  $sql_sel = "select * from property_feature where id=".$edit_id;
  $res = mysqli_query($con,$sql_sel);
  $row = mysqli_fetch_assoc($res);
}




if(isset($_POST['save']))
{
    $Property_feature = $_POST['Feature'];

    if(isset($_GET['edit_id']))
    {
        $sql = "update property_feature set Feature_name='$Property_feature' where id=".$edit_id;
    }else
    {
        $sql = "insert into property_feature (Feature_name) values ('$Property_feature');"; 
    }
    mysqli_query($con,$sql);
    header("location:View_feature.php");
}
if(isset($_POST['Disdard']))
{
  header("location:View_feature.php");
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
              <h3 class="fw-bold mb-3">Features</h3>
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
              </ul>
            </div>
            <div class="row">
              <div class="col-md-12">
                <div class="card">
                  <div class="card-header  d-flex justify-content-between align-items-center">
                    <div class="card-title">Features</div>
                    
                    <div class="input-group Serach-input">
                            <i class="fa fa-search search-icon"></i>
                            <input
                                type="text"
                                placeholder="Search ..."
                                class="form-control"
                            />
                    </div>
                  </div>
                  <form method="post">
                    <div class="card-body">
                    <div class="row"> 
                    <div class="col-md-6 col-lg-4">
                        <div class="form-group px-0">
                          <label for="features" style="font-weight:600 !important;">Features</label>
                          <input type="text" class="form-control" id="features" placeholder="Features" name="Feature" value="<?php echo @$row['Feature_name']; ?>">
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
   <?php 
        include('footer.php');
       ?>

      </div>


