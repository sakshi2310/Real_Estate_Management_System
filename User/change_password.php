<?php 

$con = mysqli_connect('localhost','root','','real_estate');
// Header start
include('header.php');
// Page session
if(!isset($_SESSION['user_id']))
{
  header("location:index.php");
}  


if(isset($_POST['submit']))
{
  
  $old_password = $_POST['Old_Passsword'];
  $new_password = $_POST['New_Passsword'];
  $con_passwod = $_POST['Con_Passsword'];
  $user_id = $_SESSION['user_id'];

  $user_id = $_SESSION['user_id'];
  $sql = "select * from users where id = ".$user_id;
  $res = mysqli_query($con, $sql);
  $row = mysqli_fetch_assoc($res);


  // echo $row[ 'Password'];
  if($new_password == $con_passwod)
  {
    if($old_password == $row['Password'])
    {
      $sql_update = "update users set Password='$new_password' where id =".$user_id;
      mysqli_query($con,$sql_update);
    }else
    {
      echo "not match";
    }
  }else{
    echo "Reenter con pass";
  }

  header("location:View_profile.php");


}
// die();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashborad</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <link rel="stylesheet" href="css/style.css">
</head>
<body>

   
    <div class="container-fluid">
      <div class="row">
      <?php
      include('sidebar.php');
      ?>
      <form action="" method="post">
        <div class="col-10 p-4 ms-auto">
          <div class="main-Borad p-5 bg-white">
            <div class="row">
                <div class="col-12  d-flex justify-content-between align-items-center">
                    <h5 class="page-title">Change Password</h5> 
                </div>
            </div>
            <div class="row">
            <div class="col-lg-4 col-md-6 col-12">
              <label for="exampleInputoldpassword" class="form-label">Old Passsword</label>
              <input type="text" class="form-control" id="exampleInputoldpassword" placeholder="Old Passsword" name="Old_Passsword"  >
            </div>
            <div class="col-lg-4 col-md-6 col-12">
              <label for="exampleInputnewpassword" class="form-label">New Passsword</label>
              <input type="password" class="form-control" id="exampleInputnewpassword" placeholder="New Passsword" name="New_Passsword" >
            </div>
            <div class="col-lg-4 col-md-6 col-12">
              <label for="exampleInputconpassword" class="form-label">Confirm Passsword</label>
              <input type="password" class="form-control" id="exampleInputconpassword" placeholder="Con Passsword" name="Con_Passsword" >
            </div>
            </div>
          </div>
          <div class="main-Borad bg-white p-4 mt-4 d-flex gap-4">
                <div class="col-12">
                    <button type="submit" name="submit" value="submit" class="py-2 submit-btn action-btn">Submit</button>
                    <button type="submit" name="submit" value="submit" class="py-2 cancel-btn action-btn">Cancel</button>
                </div>
          </div>
        </div>
        </form>
    </div>
</body>
</html>