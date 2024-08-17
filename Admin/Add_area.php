<?php 


$con = mysqli_connect('localhost','root','','real_estate');


// edit type

if(isset($_GET['edit_id']))
{
  $edit_id = $_GET['edit_id'];
  $sql_sel = "select * from property_area where id=".$edit_id;
  $res = mysqli_query($con,$sql_sel);
  $row = mysqli_fetch_assoc($res);
}

if(isset($_POST['save']))
{

    $Property_area = $_POST['Property_area'];

    if(isset($_GET['edit_id']))
    {
      $sql = "update property_area set Property_area='$Property_area' where id=".$edit_id;
    }else
    {
      $sql = "insert into property_area (Property_area) values ('$Property_area');";
    }
    mysqli_query($con,$sql);
    header("location:View_area.php");
}
if(isset($_POST['Disdard']))
{
  header("location:View_area.php");
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
              <h3 class="fw-bold mb-3">Area</h3>
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
                  <a href="#">Area</a>
                </li>
              </ul>
            </div>
            <div class="row">
              <div class="col-md-12">
                <div class="card">
                  <div class="card-header">
                    <div class="card-title">Area</div>
                  </div>
                <form method="post">
                    <div class="card-body">
                    <div class="row"> 
                    <div class="col-md-6 col-lg-4">
                        <div class="form-group px-0">
                          <label for="Area" style="font-weight:600 !important;">Area</label>
                          <input type="text" class="form-control" id="Area" placeholder="Area" name="Property_area" value="<?php echo @$row['Property_area']; ?>">
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


