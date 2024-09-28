<?php 

$con=mysqli_connect("localhost","root","","real_estate");

// Header start
include('header.php');
// Page session
if(!isset($_SESSION['user_id']))
{
  header("location:index.php");
}


$user_id = $_SESSION['user_id'];

$sql = "select * from users where id=".$user_id;
$res = mysqli_query($con,$sql);
$row = mysqli_fetch_assoc($res);




if(isset($_POST['edit']))
{
  $name = $_POST['Name'];
  $email = $_POST['Email'];
  $password = $_POST['Password'];
  $Mb_num = $_POST['MoblieNo'];
  // $image = $_FILES['Image']['name'];

  if (isset($_FILES['Image']) && $_FILES['Image']['error'] === UPLOAD_ERR_OK)
  {
    $image = $_FILES['Image']['name'];
    
    if (!empty($proprty_row['Image'])) {
      unlink('upload/' . $proprty_row['Image']); // Delete the existing image
    }
    move_uploaded_file($_FILES['Image']['tmp_name'], 'upload/' . $image);
  }else{
    $image = $row['Image']; 
  }


    $sql_update = "update users set User_name='$name',Email='$email',Password='$password',Mb_num='$Mb_num',Image='$image' where id =".$user_id;
    mysqli_query($con,$sql_update);
    header('location:View_profile.php');
}



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashborad</title>
    
    <!-- bootstrap css -->
    <link href="../css/bootstrap.min.css" rel="stylesheet" >

    <!-- css file -->
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>

    <div class="container-fluid">
      <div class="row">
      <?php
      include('sidebar.php');
      ?>
        <div class="col-10 p-4 ms-auto">
          <div class="main-Borad p-5 bg-white">
            <div class="row">
                <div class="col-12  d-flex justify-content-between align-items-center">
                    <h5 class="page-title">Edit Profile Info</h5>
                    
            </div>
            <form action="" method="post"  enctype="multipart/form-data">
            <div class="row">
                <div class="col-lg-4 col-md-6 col-12">
                    <div class="profile-pic position-relative d-flex flex-wrap align-items-center">
                        <input type="file" class="file-profile position-relative" name="Image">
                        <div class="profile-pic-icn position-absolute">
                        <i class="bi bi-image-fill"></i>
                        </div>
                        <p class="ms-4 mb-0">Add Profile Picture</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-12">
                <label for="exampleInputname" class="form-label">Name</label>
                <input type="text" class="form-control" id="exampleInputname" placeholder="Name" name="Name" value="<?php echo @$row['User_name']; ?>" >
                </div>
                <div class="col-lg-4 col-md-6 col-12">
                <label for="exampleInputEmail" class="form-label">Email</label>
                <input type="email" class="form-control" id="exampleInputEmail" placeholder="Email" name="Email" value="<?php echo @$row['Email']; ?>">
                </div>
                <div class="col-lg-4 col-md-6 col-12">
                <label for="exampleInputpassword" class="form-label">Passsword</label>
                <input type="password" class="form-control" id="exampleInputpassword" placeholder="Passsword" name="Password" value="<?php echo @$row['Password']; ?>" >
                </div>
                <div class="col-lg-4 col-md-6 col-12">
                <label for="exampleInputMob" class="form-label">Mobile No</label>
                <input type="text" class="form-control" id="exampleInputMob" placeholder="MoblieNo" name="MoblieNo" value="<?php echo @$row['Mb_num']; ?>" >
                </div>
            </div>


          </div>
        <div class=" main-Borad bg-white p-4 mt-4 d-flex gap-4">
            <button type="submit" name="edit" value="submit" class="py-2 submit-btn action-btn">Submit</button>
            <button type="submit" name="submit" value="submit" class="py-2 cancel-btn action-btn">Cancel</button>
          </div>
        </div>
</form>

    </div>
    
    <!-- bootstrap js -->
    <script src="../js/bootstrap.bundle.js"></script>
    
    <!-- script  -->
    <script src="../js/script.js"></script>
    

</body>
</html>