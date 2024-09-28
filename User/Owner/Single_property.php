<?php 

$con = mysqli_connect("localhost", "root", "", "real_estate");

// Header start
include('header.php');
// Page session
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
  

  $sql_dec = "SELECT * FROM `deline_notice` WHERE Property_id=".$view_id;
  $res_dec = mysqli_query($con, $sql_dec);
  $row_dec = mysqli_fetch_assoc($res_dec);
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
          <div class="main-Borad p-5 bg-white  d-flex justify-content-center align-items-between">
            <h5 class="page-title">View Data</h5>
            <div class="input-group Serach-input">
                            <i class="bi bi-search"></i>
                            <input
                                type="text"
                                placeholder="Search ..."
                                class="form-control"
                            />
                    </div>
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

            <tr>
              <th>Property Register Date</th>
              <td colspan="3"><?php echo $row['Pro_date']; ?></td>
            </tr>
            <tr>
             
              <th>Deline Notice Title</th> 
              <td colspan="3"><?php if($row_dec){echo $row_dec['Pro_title'];}else{ echo ""; }   ?></td>

            </tr>
            <tr>
              <th>Decline Description:</th>
              <td colspan="3"><?php if($row_dec){echo $row_dec['Pro_dec'];}else{ echo ""; }   ?></td>
            </tr>
            


           </table>
          <!-- table start -->
          </div>
         

          

        </div>
      </div>
    </div>

    
    <!-- bootstrap js -->
    <script src="../js/bootstrap.bundle.js"></script>
    
    <!-- script  -->
    <script src="../js/script.js"></script>
    

</body>
</html>