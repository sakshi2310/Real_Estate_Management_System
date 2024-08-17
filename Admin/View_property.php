
<?php 

$con=mysqli_connect("localhost","root","","real_estate");
$sql = "select * from property_register";
$res = mysqli_query($con,$sql);


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
                  <a href="#">View all property</a>
                </li>
                <li class="separator">
                  <i class="icon-arrow-right"></i>
                </li>
                <li class="nav-item">
                  <a href="#">Property Data</a>
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
                        class="display table table-striped table-hover"
                      >
                        <thead>
                            <tr>
                                <th class="id-column" style="width: 10px;">ID</th>
                                <th>Iamge</th>
                                <th>title</th>
                                <th>Status</th>
                                <th>Type</th>
                                <th>Approval status</th>
                                <th class="text-center">Action</th> 
                                <th>Preview</th> 
                            </tr>
                        </thead>
                        <tbody>
                          <?php while($row = mysqli_fetch_assoc($res)) { ?>
                          <tr>  
                             <td><?php echo $row['id']; ?></td>
                              <td>
                                  <div class="img-data" style="width:150px; height: 150px;">
                                      <img src="../User/upload/<?php echo $row['Image6']; ?>" alt="" class="img" style="height:100%; width:100%; object-fit:cover;">
                                  </div>
                              </td>
                              <td><?php echo $row['Property_title'];  ?></td>
                              <td>
                                  <?php echo $row['Status']; ?>
                              </td>
                               <td>
                                  <?php echo $row['Type']; ?>
                              </td>
                              <td>
                                  <?php echo $row['Approval_status']; ?>
                              </td>
                              <td>
                                <div class="action-icn">
                                  <div class="form-button-action d-flex gap-2">
                                    <a href="Edit_Property.php" class=""> edit </a>
                                    <a href="" classs=""> del</a>
                                      
                                      <!-- <button type="button"
                                              data-bs-toggle="tooltip"
                                              title=""
                                              class="edit-btn"
                                              data-original-title="Edit Task">
                                              <i class="fa fa-edit"></i>
                                      </button>
                                      <button
                                              type="button"
                                              data-bs-toggle="tooltip"
                                              title=""
                                              class="del-btn"
                                              data-original-title="Remove">           
                                              <i class="fa fa-times"></i>
                                      </button>
                                    -->
                                  </div>
                                </div>
                              </td>
                                <td>
                                <!-- <a href="" class="edit-btn">  <i class="far fa-eye"></i></a> -->
                                    <button type="button"
                                              data-bs-toggle="tooltip"
                                              class="prev-btn"
                                              data-original-title="Edit Task">
                                              <i class="far fa-eye"></i>
                                      </button>
                                </td>
                          </tr>
                        <?php } ?>
                        </tbody>
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
