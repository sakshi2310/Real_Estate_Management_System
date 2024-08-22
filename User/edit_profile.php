<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashborad</title>
    <!-- bootstrap css -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <!-- css file -->
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    
    <!-- header start -->
    <?php
  include('header.php');
  ?>
    <!-- header start -->

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
                    
                    <div class="input-group Serach-input">
                            <i class="bi bi-search"></i>
                            <input
                                type="text"
                                placeholder="Search ..."
                                class="form-control"
                            />
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6 col-12">
                    <div class="profile-pic position-relative d-flex flex-wrap align-items-center">
                        <input type="file" class="file-profile position-relative">
                        <div class="profile-pic-icn position-absolute">
                        <i class="bi bi-image-fill"></i>
                        </div>
                        <p class="ms-4 mb-0">Add Profile Picture</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-12">
                <label for="exampleInputname" class="form-label">Name</label>
                <input type="text" class="form-control" id="exampleInputname" placeholder="Name" name="Name" >
                </div>
                <div class="col-lg-4 col-md-6 col-12">
                <label for="exampleInputEmail" class="form-label">Email</label>
                <input type="email" class="form-control" id="exampleInputEmail" placeholder="Email" name="Email" >
                </div>
                <div class="col-lg-4 col-md-6 col-12">
                <label for="exampleInputpassword" class="form-label">Passsword</label>
                <input type="password" class="form-control" id="exampleInputpassword" placeholder="Passsword" name="Passsword" >
                </div>
                <div class="col-lg-4 col-md-6 col-12">
                <label for="exampleInputMob" class="form-label">Mobile No</label>
                <input type="text" class="form-control" id="exampleInputMob" placeholder="MoblieNo" name="MoblieNo" >
                </div>
            </div>
          </div>
        <div class=" main-Borad bg-white p-4 mt-4 d-flex gap-4">
            <button type="submit" name="submit" value="submit" class="py-2 submit-btn action-btn">Submit</button>
            <button type="submit" name="submit" value="submit" class="py-2 cancel-btn action-btn">Cancel</button>
          </div>
        </div>
    </div>
</body>
</html>