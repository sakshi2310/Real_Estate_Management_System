<?php

# Select the Area from admin
$con = mysqli_connect("localhost", "root", "", "real_estate");

// page session
session_start();
if(!isset($_SESSION['admin_id']))
{
  header("location:index.php");
}

$sql_area = "select * from property_area";
$res_area = mysqli_query($con, $sql_area);

# select the area type form admin
$sql_type = "select * from property_type";
$res_type = mysqli_query($con, $sql_type);

# select the area type form admin
$sql_feature = "select * from property_feature";
$res_feature = mysqli_query($con, $sql_feature);

# Select Particluar Property
if (isset($_GET['edit_id'])) {
  $edit_id = $_GET['edit_id'];
  $edit_id = intval($edit_id);
  $sql_property = "select * from property_register where id=" . $edit_id;
  $sql_res = mysqli_query($con, $sql_property);
  $proprty_row = mysqli_fetch_assoc($sql_res);
  $feature_update = explode(",",$proprty_row['Feature']);
}

if (isset($_POST['save'])) {

  // Gather form data
  $property_title = $_POST['Property_title'];
  $des = $_POST['Description'];
  $type = $_POST['Type'];
  $status = $_POST['Status'];
  $price = $_POST['Price'];
  $sec_price = $_POST['Sec_price'];
  $land_price = $_POST['Land_price'];
  $land_postfix = $_POST['Land_postfix'];
  $address = $_POST['Address'];
  $area_name = $_POST['Area_name'];
  $area_type = $_POST['Area_type'];
  $city = $_POST['City'];
  $badrooms = $_POST['Badrooms'];
  $bathrooms = $_POST['Bathrooms'];
  $balcony = $_POST['Balcony'];
  $BHK_plot = $_POST['BHK_plot'];
  $total_floors = $_POST['Total_floors'];
  $your_floors = $_POST['Your_floor'];
  $property_age = $_POST['Property_age'];
  $user_id = $_SESSION['user_id'];
  $featurs = $_POST['features'];
  $featurs_str = implode(",", $featurs);

  // Create upload directory if not exists
  if (!file_exists('../User/upload')) {
      mkdir('../User/upload', 0777, true);
  }

  // Function to handle file uploads
  function handleFileUpload($fileInputName, $existingImage = null) {
      if (isset($_FILES[$fileInputName]) && $_FILES[$fileInputName]['error'] == UPLOAD_ERR_OK) {
          $fileName = basename($_FILES[$fileInputName]['name']);
          if (move_uploaded_file($_FILES[$fileInputName]['tmp_name'], '../User/upload/' . $fileName)) {
              return $fileName;
          } else {
              echo "Failed to upload $fileInputName.";
          }
      }
      return $existingImage;
  }

  // SQL operations
  if (isset($_GET['edit_id'])) {
      $edit_id = intval($_GET['edit_id']);

      // Fetch current images from the database
      $sql_fetch = "SELECT * FROM property_register WHERE id=$edit_id";
      $result = mysqli_query($con, $sql_fetch);
      $proprty_row = mysqli_fetch_assoc($result);

      // Handle image uploads, preserve existing images if new ones are not uploaded
      $image1 = handleFileUpload('Image1', $proprty_row['Image1']);
      $image2 = handleFileUpload('Image2', $proprty_row['Image2']);
      $image3 = handleFileUpload('Image3', $proprty_row['Image3']);
      $image4 = handleFileUpload('Image4', $proprty_row['Image4']);
      $image5 = handleFileUpload('Image5', $proprty_row['Image5']);
      $image6 = handleFileUpload('Image6', $proprty_row['Image6']);

      // Prepare and execute update query
      $sql_update = "UPDATE property_register SET 
          Property_title='$property_title', Description='$des', Type='$type', Status='$status', Price='$price', 
          Sec_price='$sec_price', Land_price='$land_price', Land_postfix='$land_postfix', 
          Image1='$image1', Image2='$image2', Image3='$image3', Image4='$image4', Image5='$image5', 
          Image6='$image6', Feature='$featurs_str', Address='$address', Area_name='$area_name', 
          Area_type='$area_type', City='$city', Badrooms='$badrooms', Bathroom='$bathrooms', 
          Balcony='$balcony', BHK_plot='$BHK_plot', Total_floors='$total_floors', Your_floors='$your_floors', 
          Property_age='$property_age' WHERE id=$edit_id";

      mysqli_query($con, $sql_update);
      header("Location:View_approved_property.php");

  } else {
      // New property insert
      $Approval_status = "Pending";

      // Handle image uploads
      $image1 = handleFileUpload('Image1');
      $image2 = handleFileUpload('Image2');
      $image3 = handleFileUpload('Image3');
      $image4 = handleFileUpload('Image4');
      $image5 = handleFileUpload('Image5');
      $image6 = handleFileUpload('Image6');

      $sql = "INSERT INTO property_register (
          Property_title, Description, Type, Status, Price, Sec_price, Land_price, Land_postfix, 
          Image1, Image2, Image3, Image4, Image5, Image6, Feature, Address, Area_name, Area_type, 
          City, Badrooms, Bathroom, Balcony, BHK_plot, Total_floors, Your_floors, Property_age, 
          Approval_status, User_id, Pro_date
      ) VALUES (
          '$property_title', '$des', '$type', '$status', '$price', '$sec_price', '$land_price', '$land_postfix', 
          '$image1', '$image2', '$image3', '$image4', '$image5', '$image6', '$featurs_str', '$address', 
          '$area_name', '$area_type', '$city', '$badrooms', '$bathrooms', '$balcony', '$BHK_plot', '$total_floors', 
          '$your_floors', '$property_age', '$Approval_status', '$user_id', CURDATE()
      )";

      mysqli_query($con, $sql);
      header("Location:View_pending_property.php");
  }

  // Close the database connection
  mysqli_close($con);
}


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title>Kaiadmin - Bootstrap 5 Admin Dashboard</title>
    <meta content="width=device-width, initial-scale=1.0, shrink-to-fit=no" name="viewport" />
    <link rel="icon" href="assets/img/kaiadmin/favicon.ico" type="image/x-icon" />
    <!-- Fonts and icons -->
    <script src="assets/js/plugin/webfont/webfont.min.js"></script>
    <script src="assets/js/jquery.min.js"></script>
    <script type="text/javascript">
        WebFont.load({
            google: { families: ["Public Sans:300,400,500,600,700"] },
            custom: {
                families: [
                    "Font Awesome 5 Solid",
                    "Font Awesome 5 Regular",
                    "Font Awesome 5 Brands",
                    "simple-line-icons",
                ],
                urls: ["assets/css/fonts.min.css"],
            },
            active: function () {
                sessionStorage.fonts = true;
            },
        });

    </script>
    <!-- CSS Files -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css" />
    <link rel="stylesheet" href="assets/css/plugins.min.css" />
    <link rel="stylesheet" href="assets/css/kaiadmin.min.css" />
    <!-- CSS Just for demo purpose, don't include it in your project -->
    <link rel="stylesheet" href="assets/css/demo.css" />
</head>
<body>


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
              <ul class="breadcrumbs mb-3 ps-0 ">
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
                 <form method="post" enctype="multipart/form-data"
                 >
                    <div class="card-body">
                    <div class="row"> 
                      <div class="col-12">
                        <h4 class="frm-title">Description</h4>
                      </div>
                      <div class="col-md-6 col-lg-4">
                          <div class="form-group px-0">
                            <label for="Property type" style="font-weight:600 !important;">Property title</label>
                            <input type="text" class="form-control" id="contact" placeholder="Property type" name="Property_title" value="<?php echo @$proprty_row['Property_title'] ?>">
                          </div>
                      </div>
                      <div class="col-md-6 col-lg-4">
                          <div class="form-group px-0">
                            <label for="Description" style="font-weight:600 !important;">Description</label>
                            <input type="text" class="form-control" id="exampleInput" placeholder="Description" name="Description" value="<?php echo @$proprty_row['Description']; ?>">
                          </div>
                      </div>
                      <div class="col-md-6 col-lg-4">
                          <div class="form-group px-0">
                            <label for="Type" style="font-weight:600 !important;">Type</label>
                            <select class="form-select" aria-label="Default select example" name="Type">
                              <option value="">Select Type</option>
                              <?php while($row=mysqli_fetch_assoc($res_type)) {?>
                                <option value="<?php echo $row['Property_type']; ?>" <?php if(@$proprty_row['Type']==$row['Property_type']){ echo "selected" ; } ?>>
                                <?php echo $row['Property_type']; ?>
                                </option>
                              <?php } ?>
                            </select>
                          </div>
                      </div>
                      <div class="col-md-6 col-lg-4">
                          <div class="form-group px-0">
                            <label for="Status" style="font-weight:600 !important;">Status</label>
                            <select class="form-select" aria-label="Default select example" name="Status">
                            <option selected>Status</option>
                            <option value="Rent" <?php if (@$proprty_row['Status'] == "Rent") {
                                                    echo "selected";
                                                  } ?>>Rent</option>
                            <option value="Sale" <?php if (@$proprty_row['Status'] == "Sale") {
                                                    echo "selected";
                                                  } ?>>Sale</option>
                          </select>
                          </div>
                      </div>
                    </div>
                    <div class="row"> 
                      <div class="col-12">
                        <h4 class="frm-title mt-4">Price</h4>
                      </div>
                      <div class="col-md-6 col-lg-4">
                          <div class="form-group px-0">
                            <label for="Property type" style="font-weight:600 !important;">Sale the Rent</label>
                            <input type="text" class="form-control" id="contact" placeholder="Property type"/ name="Price" value="<?php echo @$proprty_row['Price']; ?>">
                          </div>
                      </div>
                      <div class="col-md-6 col-lg-4">
                          <div class="form-group px-0">
                            <label for="Description" style="font-weight:600 !important;">Secount Price</label>
                            <input type="text" class="form-control" id="exampleInput" placeholder="Description" name="Sec_price" value="<?php echo @$proprty_row['Sec_price']; ?>">
                          </div>
                      </div>
                      <div class="col-md-6 col-lg-4">
                          <div class="form-group px-0">
                            <label for="Land Price" style="font-weight:600 !important;">Land Price</label>
                            <input type="text" class="form-control" id="exampleInput" placeholder="Land Price " name="Land_price" value="<?php echo @$proprty_row['Land_price']; ?>">
                          </div>
                      </div>
                      <div class="col-md-6 col-lg-4">
                          <div class="form-group px-0">
                            <label for="Land post fix" style="font-weight:600 !important;">Land post fix</label>
                            <select class="form-select" aria-label="Default select example" name="Land_postfix">
                            <option selected>Land post fix </option>
                            <option value="sq ft" <?php if (@$proprty_row['Land_postfix'] == "sq ft") {
                                                    echo "selected";
                                                  } ?>>sq ft </option>
                            <option value="sq meter" <?php if (@$proprty_row['Land_postfix'] == "sq meter") {
                                                        echo "selected";
                                                      } ?>>sq meter </option>
                            <option value="yard" <?php if (@$proprty_row['Land_postfix'] == "yard") {
                                                    echo "selected";
                                                  } ?>>yard</option>
                          </select>
                          </div>
                      </div>
                    </div>
                    <div class="row"> 
                      <div class="col-12">
                        <h4 class="frm-title mt-4">Media</h4>
                      </div>
                      <div class="col-md-6 col-lg-4">
                          <div class="form-group px-0">
                            <label for="Property type" style="font-weight:600 !important;">Select Image</label>
                            <input type="file" class="form-control" id="exampleInputEmail1" placeholder="Select Image" name="Image1">
                            <img src="../User/upload/<?php echo @$proprty_row['Image1']; ?>" width="50" >
                          </div>
                      </div>
                      <div class="col-md-6 col-lg-4">
                          <div class="form-group px-0">
                            <label for="Description" style="font-weight:600 !important;">Select Image</label>
                            <input type="file" class="form-control" id="exampleInputEmail1" placeholder="Select Image" name="Image2">
                            <img src="../User/upload/<?php echo @$proprty_row['Image2']; ?>" width="50" >
                          </div>
                      </div>
                      <div class="col-md-6 col-lg-4">
                          <div class="form-group px-0">
                            <label for="Land Price" style="font-weight:600 !important;">Select Image</label>
                            <input type="file" class="form-control" id="exampleInputEmail1" placeholder="Select Image" name="Image3">
                            <img src="../User/upload/<?php echo @$proprty_row['Image3']; ?>" width="50" >
                          </div>
                      </div>
                      <div class="col-md-6 col-lg-4">
                          <div class="form-group px-0">
                            <label for="Property type" style="font-weight:600 !important;">Select Image</label>
                            <input type="file" class="form-control" id="exampleInputEmail1" placeholder="Select Image" name="Image4">
                            <img src="../User/upload/<?php echo @$proprty_row['Image4']; ?>" width="50" >
                          </div>
                      </div>
                      <div class="col-md-6 col-lg-4">
                          <div class="form-group px-0">
                            <label for="Description" style="font-weight:600 !important;">Select Image</label>
                            <input type="file" class="form-control" id="exampleInputEmail1" placeholder="Select Image" name="Image5">
                            <img src="../User/upload/<?php echo @$proprty_row['Image5']; ?>" width="50" >
                          </div>
                      </div>
                      <div class="col-md-6 col-lg-4">
                          <div class="form-group px-0">
                            <label for="Land Price" style="font-weight:600 !important;">Select Image</label>
                            <input type="file" class="form-control" id="exampleInputEmail1" placeholder="Select Image" name="Image6">
                            <img src="../User/upload/<?php echo @$proprty_row['Image6']; ?>" width="50" >
                          </div>
                      </div>
                    </div>
                    <div class="row"> 
                      <div class="col-12">
                        <h4 class="frm-title mt-4">Features</h4>
                      </div>
                      <div class="col-12">
                        <div class="btn-group d-flex gap-2 flex-wrap checkboxs mt-3" role="group" aria-label="Basic checkbox toggle button group">
                          <?php 
                          if (!isset($feature_update) || !is_array($feature_update)) {
                            $feature_update = array();
                          }
                          while ($row = mysqli_fetch_assoc($res_feature)) { ?>
                            <input type="checkbox" class="btn-check" id="feature-<?php echo $row['id']; ?>" name="features[]" value="<?php echo $row['Feature_name']; ?>"  <?php if(in_array($row['Feature_name'],@$feature_update)){echo "checked";}else{} ?>  autocomplete="off">
                            <label class="btn btn-outline-primary rounded-1" for="feature-<?php echo $row['id']; ?>"><?php echo $row['Feature_name'];  ?></label>
                          <?php } ?>
                        </div>
                    </div>
                    <div class="row"> 
                      <div class="col-12">
                        <h4 class="frm-title mt-4">Location</h4>
                      </div>
                      <div class="col-md-6 col-lg-4">
                          <div class="form-group px-0">
                            <label for="Address" style="font-weight:600 !important;">Address</label>
                            <input type="text" class="form-control" id="exampleInput" placeholder="Address " name="Address" value="<?php echo @$proprty_row['Address']; ?>">
                          </div>
                      </div>
                      <div class="col-md-6 col-lg-4">
                          <div class="form-group px-0">
                            <label for="Area Name" style="font-weight:600 !important;">Area Name</label>
                            <select class="form-select" aria-label="Default select example" name="Area_name">
                              <option selected>Area Name</option>
                              <?php while ($row = mysqli_fetch_assoc($res_area)) { ?>
                                <option value="<?php echo $row['Property_area'] ?>" <?php if(@$proprty_row['Area_name']==$row['Property_area']){ echo "selected" ; } ?>><?php echo $row['Property_area']; ?></option>
                              <?php } ?>
                            </select>
                          </div>
                      </div>
                      <div class="col-md-6 col-lg-4">
                          <div class="form-group px-0">
                            <label for="Area Type" style="font-weight:600 !important;">Area Type</label>
                            <select class="form-select" aria-label="Default select example" name="Area_type">
                            <option selected>Area Type</option>
                            <option value="Super Built up area" <?php if (@$proprty_row['Area_type'] == "Super Built up area") {
                                                                  echo "selected";
                                                                } ?>>Super Built up area</option>
                            <option value="Built up area" <?php if (@$proprty_row['Area_type'] == "Built up area") {
                                                            echo "selected";
                                                          } ?>>Built up area</option>
                            <option value="Carpet area" <?php if (@$proprty_row['Area_type'] == "Carpet area") {
                                                          echo "selected";
                                                        } ?>>Carpet area</option>
                          </select>
                          </div>
                      </div>
                      <div class="col-md-6 col-lg-4">
                          <div class="form-group px-0">
                            <label for="City" style="font-weight:600 !important;">City</label>
                            <input type="text" class="form-control" id="exampleInput" placeholder="City" name="City" value="<?php echo @$proprty_row['City']; ?>">
                          </div>
                      </div>
                    </div>
                    <div class="row"> 
                      <div class="col-12">
                        <h4 class="frm-title mt-4">Other Details</h4>
                      </div>
                      <div class="col-md-6 col-lg-4">
                          <div class="form-group px-0">
                            <label for="Badrooms" style="font-weight:600 !important;">Badrooms</label>
                            <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Badrooms " name="Badrooms" value="<?php echo @$proprty_row['Badrooms']; ?>">
                          </div>
                      </div>
                      <div class="col-md-6 col-lg-4">
                          <div class="form-group px-0">
                            <label for="Bathrooms" style="font-weight:600 !important;">Bathrooms</label>
                            <input type="text" class="form-control" id="exampleInput" placeholder="Bathrooms " name="Bathrooms" value="<?php echo @$proprty_row['Bathroom']; ?>">
                          </div>
                      </div>
                      <div class="col-md-6 col-lg-4">
                          <div class="form-group px-0">
                            <label for="Balcony" style="font-weight:600 !important;">Balcony</label>
                            <input type="text" class="form-control" id="exampleInput" placeholder="Balcony " name="Balcony" value="<?php echo @$proprty_row['Balcony']; ?>">
                          </div>
                      </div>
                      <div class="col-md-6 col-lg-4">
                          <div class="form-group px-0">
                            <label for="BHK / Plot" style="font-weight:600 !important;">BHK / Plot</label>
                            <input type="text" class="form-control" id="exampleInput" placeholder="BHK / Plot" name="BHK_plot" value="<?php echo @$proprty_row['BHK_plot']; ?>">
                          </div>
                      </div>
                      <div class="col-md-6 col-lg-4">
                          <div class="form-group px-0">
                            <label for="Total Floors" style="font-weight:600 !important;">Total Floors</label>
                            <input type="text" class="form-control" id="exampleInput" placeholder="Total Floors" name="Total_floors" value="<?php echo @$proprty_row['Total_floors']; ?>">
                          </div>
                      </div>
                      <div class="col-md-6 col-lg-4">
                          <div class="form-group px-0">
                            <label for="Your Floors" style="font-weight:600 !important;">Your Floors</label>
                            <input type="text" class="form-control" id="exampleInput" placeholder="Your Floor" name="Your_floor" value="<?php echo @$proprty_row['Your_floors']; ?>">
                          </div>
                      </div>
                      <div class="col-md-6 col-lg-4">
                          <div class="form-group px-0">
                            <label for="Property Age" style="font-weight:600 !important;">Property Age</label>
                            <input type="text" class="form-control" id="exampleInput" placeholder="Property Age" name="Property_age" value="<?php echo @$proprty_row['Property_age']; ?>">
                          </div>
                      </div>
                    </div>
                  <div class="card-action mt-4">
                    <button class="btn btn-submit" name="save" type="submit">Submit</button>
                    <button class="btn btn-cancel" name="Disdard">Cancel</button>
                  </div>
                </form>
              </div>
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
