<?php 

$con = mysqli_connect("localhost", "root", "", "real_estate");
if(isset($_GET['view_id']))
{
  $view_id = $_GET['view_id'];
  $sql = "select * from property_register where id = ".$view_id;
  $res = mysqli_query($con, $sql);
  $row = mysqli_fetch_assoc($res);
  
}


?>

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
              <h3 class="fw-bold mb-3">Admin Data </h3>
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
                  <a href="#">Admin</a>
                </li>
                <li class="separator">
                  <i class="icon-arrow-right"></i>
                </li>
                <li class="nav-item">
                  <a href="#">Admin Data</a>
                </li>
              </ul>
            </div>
            <div class="row">
              <div class="col-md-12">
                <div class="card">
                  <div class="card-header">
                    <h4 class="card-title">Admin Data</h4>
                  </div>
                  <div class="card-body">
                    <div class="table-responsive">
                      <table
                        id="basic-datatables"
                        class="display table table-striped table-hover">

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
                     
                    </div>
                  </div>
                </div>
              </div>
          </div>
        </div>


       <?php 
        include('footer.php');
       ?>
      </div>
     
      <!-- End Custom template -->
    </div>
