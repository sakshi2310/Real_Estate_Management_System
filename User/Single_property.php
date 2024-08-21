<?php 

$con = mysqli_connect("localhost", "root", "", "real_estate");

// Page session
session_start();
if(!isset($_SESSION['user_id']))
{
  header("location:index.php");
}

if(isset($_GET['view_id']))
{
  $view_id = $_GET['view_id'];
  $sql = "select * from property_register where id = ".$view_id;
  $res = mysqli_query($con, $sql);
  $row = mysqli_fetch_assoc($res);
  
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
            <h5 class="page-title">View Data</h5>
             <!-- table start -->
           <table class="table bg-transparent">
            <tr>
              <th>Field</th>
              <th>Details</th>
            </tr>
            <tr>
              <th>ID</th>
              <td colspan="3"><?php echo $row['id']; ?></td>
            </tr>
            <tr>
              <th>Property Title</th>
              <td colspan="3"><?php echo $row['Property_title']; ?></td>
            </tr>
            <tr>
              <th>Description</th>
              <td colspan="3"><?php echo $row['Description']; ?></td>
            </tr>
            <tr>
              <th>Type</th>
              <td colspan="3"><?php echo $row['Type']; ?></td>
            </tr>
            <tr>
              <th>Status</th>
              <td colspan="3"><?php echo $row['Status']; ?></td>
            </tr>
            <tr>
              <th>Sale the Rent</th>
              <td colspan="3"><?php echo $row['Price']; ?></td>
            </tr>
            <tr>
              <th>Secount Price</th>
              <td colspan="3"><?php echo $row['Sec_price']; ?></td>
            </tr>
            <tr>
              <th>Land Price</th>
              <td colspan="3"><?php echo $row['Land_price']; ?></td>
            </tr>
            <tr>
              <th>Land post fix</th>
              <td colspan="3"><?php echo $row['Land_postfix']; ?></td>
            </tr>
            <tr>
              <th style="width: 190px; height: 180px;" >Image</th>
              <td style="width:180px; height: 180px;">
                <img src="upload/<?php echo $row['Image1']; ?>" alt="" class="img" style="height:100%; width:100%; object-fit:cover;">
              </td>
              <td style="width:180px; height: 180px;">
                <img src="upload/<?php echo $row['Image2']; ?>" alt="" class="img" style="height:100%; width:100%; object-fit:cover;">
              </td>
              <td style="width:180px; height: 180px;">
                <img src="upload/<?php echo $row['Image3']; ?>" alt="" class="img" style="height:100%; width:100%; object-fit:cover;">
              </td>
            </tr>
            <tr>
              <th style="width: 190px; height: 180px;" >Image</th>
              <td style="width:180px; height: 180px;">
                <img src="upload/<?php echo $row['Image4']; ?>" alt="" class="img" style="height:100%; width:100%; object-fit:cover;">
              </td>
              <td style="width:180px; height: 180px;">
                <img src="upload/<?php echo $row['Image5']; ?>" alt="" class="img" style="height:100%; width:100%; object-fit:cover;">
              </td>
              <td style="width:180px; height: 180px;">
                <img src="upload/<?php echo $row['Image6']; ?>" alt="" class="img" style="height:100%; width:100%; object-fit:cover;">
              </td>
            </tr>
            <tr>
              <th>Features</th>
              <td colspan="3"><?php echo $row['Feature']; ?></td>
            </tr>
            <tr>
              <th>Address</th>
              <td colspan="3"><?php echo $row['Address']; ?></td>
            </tr>
            <tr>
              <th>Area Name</th>
              <td colspan="3"><?php echo $row['Area_name']; ?></td>
            </tr>
            <tr>
              <th>Area Type</th>
              <td colspan="3"><?php echo $row['Area_type']; ?></td>
            </tr>
            <tr>
              <th>City</th>
              <td colspan="3"><?php echo $row['City']; ?></td>
            </tr>
            <tr>
              <th>Badrooms</th>
              <td colspan="3"><?php echo $row['Badrooms']; ?></td>
            </tr>
            <tr>
              <th>Bathrooms</th>
              <td colspan="3"><?php echo $row['Bathroom']; ?></td>
            </tr>

            <tr>
              <th>Balcony</th>
              <td colspan="3"><?php echo $row['Balcony']; ?></td>
            </tr>

            <tr>
              <th>BHK / Plot</th>
              <td colspan="3"><?php echo $row['BHK_plot']; ?></td>
            </tr>

            <tr>
              <th>Total Floors</th>
              <td colspan="3"><?php echo $row['Total_floors']; ?></td>
            </tr>

            <tr>
              <th>Your Floors</th>
              <td colspan="3"><?php echo $row['Your_floors']; ?></td>
            </tr>

            <tr>
              <th>Property Age</th>
              <td colspan="3"><?php echo $row['Property_age']; ?></td>
            </tr>

            <tr>
              <th>Approval status</th>
              <td colspan="3"><?php echo $row['Approval_status']; ?></td>
            </tr>


            

           </table>
          <!-- table start -->
          </div>
         

          

        </div>
      </div>
    </div>


       
    
    


    


    <!-- bootstrap js -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</body>
</html>