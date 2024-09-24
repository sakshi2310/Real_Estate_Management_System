
<?php 
echo "ssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssss";
$con = mysqli_connect("localhost",'root','','real_estate');
// echo $con;
if (!$con) {
  echo $con;
  die("Connection failed: " . mysqli_connect_error());
}
// Header start
include('header.php');
// Page session
if(!isset($_SESSION['user_id']))
{
  header("location:../index.php");
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
  if (isset($_POST['submit'])) {
      // Database connection (make sure $con is initialized)
  
    
  
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
      if (!file_exists('upload')) {
          mkdir('upload', 0777, true);
      }
  
      // Function to handle file uploads
      function handleFileUpload($fileInputName, $existingImage = null) {
          if (isset($_FILES[$fileInputName]) && $_FILES[$fileInputName]['error'] == UPLOAD_ERR_OK) {
              $fileName = basename($_FILES[$fileInputName]['name']);
              if (move_uploaded_file($_FILES[$fileInputName]['tmp_name'], 'upload/' . $fileName)) {
                  return $fileName;
              } else {
                  echo "Failed to upload $fileInputName.";
              }
          }
          return $existingImage;
      }
  
      // Handle image uploads
      $image1 = handleFileUpload('Image1');
      $image2 = handleFileUpload('Image2');
      $image3 = handleFileUpload('Image3');
      $image4 = handleFileUpload('Image4');
      $image5 = handleFileUpload('Image5');
      $image6 = handleFileUpload('Image6');
  
      // SQL operations
      if (isset($_GET['edit_id'])) {
          $edit_id = intval($_GET['edit_id']);
  
          // Fetch existing property data
          $result = mysqli_query($con, "SELECT * FROM property_register WHERE id = $edit_id");
          $proprty_row = mysqli_fetch_assoc($result);
          $Approval_status = $proprty_row['Approval_status'];
  
          // Delete old images
          $images = ['Image1', 'Image2', 'Image3', 'Image4', 'Image5', 'Image6'];
          foreach ($images as $img) {
              if (!empty(${$img}) && !empty($proprty_row[$img])) {
                  unlink('upload/' . $proprty_row[$img]);
              }
          }
  
          // Prepare and execute update query
          $sql_update = "UPDATE property_register SET 
              Property_title='$property_title', Description='$des', Type='$type', Status='$status', Price='$price', 
              Sec_price='$sec_price', Land_price='$land_price', Land_postfix='$land_postfix', 
              Image1='$image1', Image2='$image2', Image3='$image3', Image4='$image4', Image5='$image5', 
              Image6='$image6', Feature='$featurs_str', Address='$address', Area_name='$area_name', 
              Area_type='$area_type', City='$city', Badrooms='$badrooms', Bathroom='$bathrooms', 
              Balcony='$balcony', BHK_plot='$BHK_plot', Total_floors='$total_floors', Your_floors='$your_floors', 
              Property_age='$property_age', Approval_status='$Approval_status' WHERE id=$edit_id";
          
          mysqli_query($con, $sql_update);
          header("Location: View_approved_property.php");
      } else {
          // New property insert
          $Approval_status = "Pending";
  
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
          header("Location: View_pending_property.php");
      }
  
      // Close the database connection
      mysqli_close($con);
  }
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

  <div class="container-fluid">
    <div class="row">
      <!-- sidebar start -->
      <?php
      include('sidebar.php');
      ?>
      <!-- sidebar end -->
      <form method="post" enctype="multipart/form-data">
        <div class="col-10 p-4 ms-auto">
          <div class="row main-Borad bg-white p-4" id="page1">
            <div class="col-12 ">
              <h4 class="frm-title">Description</h4>
            </div>
            <div class="col-lg-4 col-md-6 col-12">
              <label for="exampleInputEmail1" class="form-label">Property Title</label>
              <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Property Title" name="Property_title" value="<?php echo @$proprty_row['Property_title']; ?>">
            </div>
            <div class="col-lg-4 col-md-6 col-12">
              <label for="exampleInput" class="form-label">Description</label>
              <input type="text" class="form-control" id="exampleInput" placeholder="Description" name="Description" value="<?php echo @$proprty_row['Description']; ?>">
            </div>
            <div class="col-lg-4 col-md-6 col-12">
              <label class="form-label">Type</label>
              <select class="form-select" aria-label="Default select example" name="Type">
                <option value="">Select Type</option>
                <?php while($row=mysqli_fetch_assoc($res_type)) {?>
                  <option value="<?php echo $row['Property_type']; ?>" <?php if(@$proprty_row['Type']==$row['Property_type']){ echo "selected" ; } ?>>
                  <?php echo $row['Property_type']; ?>
                  </option>
                <?php } ?>
              </select>
            </div>
            <div class="col-lg-4 col-md-6 col-12">
              <label class="form-label">Status</label>
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
          <div class="row main-Borad bg-white p-4 mt-4">
            <div class="col-12">
              <h4 class="frm-title">Price</h4>
            </div>
            <div class="col-lg-4 col-md-6 col-12">
              <label for="exampleInputEmail1" class="form-label">Sale the Rent </label>
              <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Sale the Rent " name="Price" value="<?php echo @$proprty_row['Price']; ?>">
            </div>
            <div class="col-lg-4 col-md-6 col-12">
              <label for="exampleInput" class="form-label">Secount Price </label>
              <input type="text" class="form-control" id="exampleInput" placeholder="Secount Price " name="Sec_price" value="<?php echo @$proprty_row['Sec_price']; ?>">
            </div>
            <div class="col-lg-4 col-md-6 col-12">
              <label class="form-label">Land Price</label>
              <input type="text" class="form-control" id="exampleInput" placeholder="Land Price " name="Land_price" value="<?php echo @$proprty_row['Land_price']; ?>">
            </div>
            <div class="col-lg-4 col-md-6 col-12">
              <label class="form-label">Land post fix </label>
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
          <div class="row main-Borad bg-white p-4 mt-4" id="page2">
            <div class="col-12">
              <h4 class="frm-title">Media</h4>
            </div>
            <div class="col-lg-4 col-md-6 col-12">
              <label for="exampleInputEmail1" class="form-label">Select Image</label>
              <input type="file" class="form-control" id="exampleInputEmail1" placeholder="Select Image" name="Image1">
              <img src="upload/<?php echo @$proprty_row['Image1']; ?>" width="50" >
            </div>
            <div class="col-lg-4 col-md-6 col-12">
              <label for="exampleInputEmail1" class="form-label">Select Image</label>
              <input type="file" class="form-control" id="exampleInputEmail2" placeholder="Select Image" name="Image2">
              <img src="upload/<?php echo @$proprty_row['Image2']; ?>" width="50" >
            </div>
            <div class="col-lg-4 col-md-6 col-12">
              <label for="exampleInputEmail1" class="form-label">Select Image</label>
              <input type="file" class="form-control" id="exampleInputEmail3" placeholder="Select Image" name="Image3">
              <img src="upload/<?php echo @$proprty_row['Image3']; ?>" width="50" >
            </div>
          </div>
          <div class="row main-Borad bg-white p-4 " id="page2">
            <div class="col-lg-4 col-md-6 col-12">
              <label for="exampleInputEmail1" class="form-label">Select Image</label>
              <input type="file" class="form-control" id="exampleInputEmail4" placeholder="Select Image" name="Image4">
              <img src="upload/<?php echo @$proprty_row['Image4']; ?>" width="50" >
            </div>
            <div class="col-lg-4 col-md-6 col-12">
              <label for="exampleInputEmail1" class="form-label">Select Image</label>
              <input type="file" class="form-control" id="exampleInputEmail5" placeholder="Select Image" name="Image5">
              <img src="upload/<?php echo @$proprty_row['Image5']; ?>" width="50" >
            </div>
            <div class="col-lg-4 col-md-6 col-12">
              <label for="exampleInputEmail1" class="form-label">Select Imae</label>
              <input type="file" class="form-control" id="exampleInputEmail6" placeholder="Select Image" name="Image6">
              <img src="upload/<?php echo @$proprty_row['Image6']; ?>" width="50" >
            </div>
          </div>
          <div class="row main-Borad bg-white p-4 mt-4">
            <div class="col-12">
              <h4 class="frm-title">Features</h4>
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
          </div>
          <div class="row main-Borad bg-white p-4 mt-4">
            <div class="col-12">
              <h4 class="frm-title">Location</h4>
            </div>

            <div class="col-lg-4 col-md-6 col-12">
              <label class="form-label">Address</label>
              <input type="text" class="form-control" id="exampleInput" placeholder="Address " name="Address" value="<?php echo @$proprty_row['Address']; ?>">
            </div>
            <div class="col-lg-4 col-md-6 col-12">
              <label class="form-label">Area Name </label>
              <select class="form-select" aria-label="Default select example" name="Area_name">
                <option selected>Area Name</option>
                <?php while ($row = mysqli_fetch_assoc($res_area)) { ?>
                  <option value="<?php echo $row['Property_area'] ?>" <?php if(@$proprty_row['Area_name']==$row['Property_area']){ echo "selected" ; } ?>><?php echo $row['Property_area']; ?></option>
                <?php } ?>
              </select>
            </div>
            <div class="col-lg-4 col-md-6 col-12">
              <label class="form-label">Area Type </label>
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
            <div class="col-lg-4 col-md-6 col-12">
              <label class="form-label">City</label>
              <input type="text" class="form-control" id="exampleInput" placeholder="City" name="City" value="<?php echo @$proprty_row['City']; ?>">
            </div>
          </div>
          <div class="row main-Borad bg-white p-4 mt-4">
            <div class="col-12">
              <h4 class="frm-title">Other Details</h4>
            </div>
            <div class="col-lg-4 col-md-6 col-12">
              <label for="exampleInputEmail1" class="form-label">Badrooms</label>
              <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Badrooms " name="Badrooms" value="<?php echo @$proprty_row['Badrooms']; ?>">
            </div>
            <div class="col-lg-4 col-md-6 col-12">
              <label for="exampleInput" class="form-label">Bathrooms </label>
              <input type="text" class="form-control" id="exampleInput" placeholder="Bathrooms " name="Bathrooms" value="<?php echo @$proprty_row['Bathroom']; ?>">
            </div>
            <div class="col-lg-4 col-md-6 col-12">
              <label for="exampleInput" class="form-label">Balcony </label>
              <input type="text" class="form-control" id="exampleInput" placeholder="Balcony " name="Balcony" value="<?php echo @$proprty_row['Balcony']; ?>">
            </div>
            <div class="col-lg-4 col-md-6 col-12">
              <label for="exampleInput" class="form-label">BHK / Plot</label>
              <input type="text" class="form-control" id="exampleInput" placeholder="BHK / Plot" name="BHK_plot" value="<?php echo @$proprty_row['BHK_plot']; ?>">
            </div>
            <div class="col-lg-4 col-md-6 col-12">
              <label for="exampleInput" class="form-label">Total Floors </label>
              <input type="text" class="form-control" id="exampleInput" placeholder="Total Floors" name="Total_floors" value="<?php echo @$proprty_row['Total_floors']; ?>">
            </div>
            <div class="col-lg-4 col-md-6 col-12">
              <label for="exampleInput" class="form-label">Your Floors </label>
              <input type="text" class="form-control" id="exampleInput" placeholder="Your Floor" name="Your_floor" value="<?php echo @$proprty_row['Your_floors']; ?>">
            </div>
            <div class="col-lg-4 col-md-6 col-12">
              <label for="exampleInput" class="form-label">Property Age</label>
              <input type="text" class="form-control" id="exampleInput" placeholder="Property Age" name="Property_age" value="<?php echo @$proprty_row['Property_age']; ?>">
            </div>


          </div>
          <div class="main-Borad bg-white p-4 mt-4 d-flex gap-4">
                <div class="col-12">
                    <button type="submit" name="submit" value="submit" class="py-2 submit-btn action-btn">Submit</button>
                    <button type="submit" name="submit" value="submit" class="py-2 cancel-btn action-btn">Cancel</button>
                </div>
          </div>
      </form>
    </div>
  </div>
  <!-- <div class="row">
        <div class="col-12">
          <nav aria-label="Page navigation example">
            <ul class="pagination justify-content-end">
              <li class="page-item disabled">
                <a class="page-link">Previous</a>
              </li>
              <li class="page-item"><a class="page-link" href="#page1">1</a></li>
              <li class="page-item"><a class="page-link" href="#page2">2</a></li>
              <li class="page-item"><a class="page-link" href="#">3</a></li>
              <li class="page-item">
                <a class="page-link" href="#">Next</a>
              </li>
            </ul>
          </nav>
        </div>
      </div> -->
  </div>










  <!-- bootstrap js -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</body>

</html>