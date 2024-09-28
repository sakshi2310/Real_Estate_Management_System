<?php 


$con=mysqli_connect("localhost","root","","real_estate");

// Page session
include('header.php');
if(!isset($_SESSION['user_id']))
{
  header("location:index.php");
}

$user_id = $_SESSION['user_id'];

$sql = "select * from users where id=".$user_id;
$res = mysqli_query($con,$sql);
$row = mysqli_fetch_assoc($res);


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashborad</title>
    <!-- bootstrap css -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <!-- css file -->
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>
    
    <!-- header start -->

    <!-- header start -->

    <div class="container-fluid">
      <div class="row">
      <?php
      include('sidebar.php');
      ?>
        <div class="col-10 p-4 ms-auto">
          <div class="main-Borad p-5 bg-white">
            <div class="row">
                <div class="col-12 d-flex w-100 justify-content-between mb-4">
                <h4 class="frm-title">View Profile</h4>
                    <a href="edit_profile.php?user_id=<?php echo $row['id'];?>" class="py-2 submit-btn action-btn px-4 d-inline-flex w-auto" >Edit Profile <i class="bi bi-pencil-square ms-2"></i></a>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6 col-md-8 col-12 mx-auto justify-content-center d-flex">
                    <div class="profile-pic-view">
                    <?php if($row['Image']) { ?>
                        <img src="../upload/<?php echo $row['Image']; ?>" alt="">
                        <?php }else { ?>
                            <img src="../img/Default_profile.png" alt="">
                            <?php } ?>
                        <a href="edit_profile.php?user_id=<?php echo $row['id'];?>" class="edit-icn text-center mt-2">
                            Edit Image
                            <i class="bi bi-pencil cursor ms-2"></i>
                        </a>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6 col-md-8 col-12 mx-auto d-flex justify-content-center mt-4">
                    <div class="pro-detail d-flex mt-4 w-100">
                        <div class="pro-icon me-4">
                            <i class="bi bi-person-circle"></i>
                        </div>
                        <div class="pro-info me-5">
                            <span>Username</span>
                            <p><?php echo $row['User_name'];?></p>
                        </div>
                        <a href="edit_profile.php?user_id=<?php echo $row['id'];?>" class="edit-icn ms-auto">
                            <i class="bi bi-pencil cursor"></i>
                        </a>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6 col-md-8 col-12 mx-auto d-flex justify-content-center">
                    <div class="pro-detail d-flex mt-4 w-100">
                        <div class="pro-icon me-4">
                        <i class="bi bi-envelope"></i>
                        </div>
                        <div class="pro-info me-5">
                            <span>Email</span>
                            <p><?php echo $row['Email'];?></p>
                        </div>
                        <a href="edit_profile.php?user_id=<?php echo $row['id'];?>" class="edit-icn ms-auto">
                            <i class="bi bi-pencil cursor"></i>
                        </a>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6 col-md-8 col-12 mx-auto d-flex justify-content-center">
                    <div class="pro-detail d-flex mt-4 w-100">
                        <div class="pro-icon me-4">
                        <i class="bi bi-person-badge"></i>
                        </div>
                        <div class="pro-info me-5">
                            <span>User Type</span>
                            <p><?php echo $row['User_type'];?></p>
                        </div>
                        <a href="edit_profile.php?user_id=<?php echo $row['id'];?>" class="edit-icn ms-auto disabled-link"  onclick="return false;">
                            <i class="bi bi-pencil cursor"></i>
                        </a>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6 col-md-8 col-12 mx-auto d-flex justify-content-center">
                    <div class="pro-detail d-flex mt-4 w-100">
                        <div class="pro-icon me-4">
                            <i class="bi bi-telephone"></i>
                        </div>
                        <div class="pro-info me-5">
                            <span>Mobile Number</span>
                            <p>+91 <?php echo $row['Mb_num']; ?></p>
                        </div>
                        <a href="edit_profile.php?user_id=<?php echo $row['id'];?>" class="edit-icn ms-auto">
                            <i class="bi bi-pencil cursor"></i>
                        </a>
                    </div>
                </div>
            </div>
          </div>
    </div>
</body>
</html>