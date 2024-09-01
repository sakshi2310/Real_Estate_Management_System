<?php 

$con = mysqli_connect("localhost", "root", "", "real_estate");
// page session
session_start();
if(!isset($_SESSION['admin_id']))
{
  header("location:index.php");
}

if(isset($_GET['view_id']))
{
    $view_id = $_GET['view_id'];
    $sql = "select * from property_register where id =".$view_id;
    $res = mysqli_query($con,$sql);
    $row_detail = mysqli_fetch_assoc($res);

    $sql_dec = "SELECT * FROM `deline_notice` WHERE Property_id=".$view_id;
    $res_dec = mysqli_query($con, $sql_dec);
    $row_dec = mysqli_fetch_assoc($res_dec);
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
                  <div class="card-header  d-flex justify-content-between align-items-center">
                    <h4 class="card-title">Property Details</h4>
                    
                    <div class="input-group Serach-input">
                            <i class="fa fa-search search-icon"></i>
                            <input
                                type="text"
                                placeholder="Search ..."
                                class="form-control"
                            />
                    </div>
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
            <!-- <tr>
              <th>ID</th>
              <td colspan="3"><?php if($row){ echo $row['id'];}else{ echo "";} ?></td>
            </tr> -->
            <tr>
              <th>Property Title</th>
              <td colspan="3"><?php echo $row_detail['Property_title']; ?></td>
            </tr>
            <tr>
              <th>Description</th>
              <td colspan="3"><?php echo $row_detail['Description']; ?></td>
            </tr>
            <tr>
              <th>Type</th>
              <td colspan="3"><?php echo $row_detail['Type']; ?></td>
            </tr>
            <tr>
              <th>Status</th>
              <td colspan="3"><?php echo $row_detail['Status']; ?></td>
            </tr>
            <tr>
              <th>Sale the Rent</th>
              <td colspan="3"><?php echo $row_detail['Price']; ?></td>
            </tr>
            <tr>
              <th>Secount Price</th>
              <td colspan="3"><?php echo $row_detail['Sec_price']; ?></td>
            </tr>
            <tr>
              <th>Land Price</th>
              <td colspan="3"><?php echo $row_detail['Land_price']; ?></td>
            </tr>
            <tr>
              <th>Land post fix</th>
              <td colspan="3"><?php echo $row_detail['Land_postfix']; ?></td>
            </tr>
            <tr>
              <th style="width: 190px; height: 180px;" >Image</th>
              <td style="width:180px; height: 180px;">
                <img src="../User/upload/<?php echo $row_detail['Image1']; ?>" alt="" class="img" style="height:100%; width:100%; object-fit:cover;">
              </td>
              <td style="width:180px; height: 180px;">
                <img src="../User/upload/<?php echo $row_detail['Image2']; ?>" alt="" class="img" style="height:100%; width:100%; object-fit:cover;">
              </td>
              <td style="width:180px; height: 180px;">
                <img src="../User/upload/<?php echo $row_detail['Image3']; ?>" alt="" class="img" style="height:100%; width:100%; object-fit:cover;">
              </td>
            </tr>
            <tr>
              <th style="width: 190px; height: 180px;" >Image</th>
              <td style="width:180px; height: 180px;">
                <img src="../User/upload/<?php echo $row_detail['Image4']; ?>" alt="" class="img" style="height:100%; width:100%; object-fit:cover;">
              </td>
              <td style="width:180px; height: 180px;">
                <img src="../User/upload/<?php echo $row_detail['Image5']; ?>" alt="" class="img" style="height:100%; width:100%; object-fit:cover;">
              </td>
              <td style="width:180px; height: 180px;">
                <img src="../User/upload/<?php echo $row_detail['Image6']; ?>" alt="" class="img" style="height:100%; width:100%; object-fit:cover;">
              </td>
            </tr>
            <tr>
              <th>Features</th>
              <td colspan="3"><?php echo $row_detail['Feature']; ?></td>
            </tr>
            <tr>
              <th>Address</th>
              <td colspan="3"><?php echo $row_detail['Address']; ?></td>
            </tr>
            <tr>
              <th>Area Name</th>
              <td colspan="3"><?php echo $row_detail['Area_name']; ?></td>
            </tr>
            <tr>
              <th>Area Type</th>
              <td colspan="3"><?php echo $row_detail['Area_type']; ?></td>
            </tr>
            <tr>
              <th>City</th>
              <td colspan="3"><?php echo $row_detail['City']; ?></td>
            </tr>
            <tr>
              <th>Badrooms</th>
              <td colspan="3"><?php echo $row_detail['Badrooms']; ?></td>
            </tr>
            <tr>
              <th>Bathrooms</th>
              <td colspan="3"><?php echo $row_detail['Bathroom']; ?></td>
            </tr>

            <tr>
              <th>Balcony</th>
              <td colspan="3"><?php echo $row_detail['Balcony']; ?></td>
            </tr>

            <tr>
              <th>BHK / Plot</th>
              <td colspan="3"><?php echo $row_detail['BHK_plot']; ?></td>
            </tr>

            <tr>
              <th>Total Floors</th>
              <td colspan="3"><?php echo $row_detail['Total_floors']; ?></td>
            </tr>

            <tr>
              <th>Your Floors</th>
              <td colspan="3"><?php echo $row_detail['Your_floors']; ?></td>
            </tr>

            <tr>
              <th>Property Age</th>
              <td colspan="3"><?php echo $row_detail['Property_age']; ?></td>
            </tr>

            <tr>
              <th>Approval status</th>
              <td colspan="3"><?php echo $row_detail['Approval_status']; ?></td>
            </tr>
            <tr>
              <th>Date</th>
              <td colspan="3"><?php echo $row_detail['Pro_date']; ?></td>
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
