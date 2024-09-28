
<?php 
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
if(isset($_GET['ans_id']))
{
     $ans_id = $_GET['ans_id'];
     $sql = "select * from property_inquiry where Id=".$ans_id;
     $res = mysqli_query($con,$sql);
     $row = mysqli_fetch_assoc($res);

     if(isset($_POST['submit'])){
          $ans_qur = $_POST['ans_iqy'];
          $sql_update = "UPDATE property_inquiry SET Answer_inquery='$ans_qur',Ans_date=CURDATE() WHERE id=$ans_id";
     
          mysqli_query($con, $sql_update);
          header("Location:View_answer_query.php");
     }


    

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
              <h4 class="frm-title">Answer Query</h4>
            </div>
            <div class="col-lg-4 col-md-6 col-12">
              <label for="exampleInputEmail1" class="form-label">Name</label>
              <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Property Title" name="Property_title" value="<?php echo @$row['Name']; ?>" disabled>
            </div>
            <div class="col-lg-4 col-md-6 col-12">
              <label for="exampleInputEmail1" class="form-label">Email</label>
              <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Property Title" name="Property_title" value="<?php echo @$row['Email']; ?>" disabled>
            </div>
            <div class="col-lg-4 col-md-6 col-12">
              <label for="exampleInputEmail1" class="form-label">Mb_num</label>
              <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Property Title" name="Property_title" value="<?php echo @$row['MB_num']; ?>" disabled>
            </div>
            <div class="col-lg-4 col-md-6 col-12">
              <label for="exampleInputEmail1" class="form-label">User Type</label>
              <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Property Title" name="Property_title" value="<?php echo @$row['User_type']; ?>" disabled>
            </div>
            <div class="col-lg-4 col-md-6 col-12">
              <label for="exampleInputEmail1" class="form-label">Date</label>
              <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Property Title" name="Property_title" value="<?php echo @$row['Date']; ?>" disabled>
            </div>
            <div class="col-lg-4 col-md-6 col-12">
              <label for="exampleInputEmail1" class="form-label">Message</label>
              <textarea name="" id=""  class="form-control" disabled><?php echo $row['Message']; ?></textarea>
               </div>
               <div class="col-lg-4 col-md-6 col-12">
              <label for="exampleInputEmail1" class="form-label">Answer Inquery</label>
              <textarea name="ans_iqy" id=""  class="form-control" ></textarea>
               </div>
            <div class="main-Borad bg-white p-4 mt-4 d-flex gap-4">
                <div class="col-12">
                    <button type="submit" name="submit" value="submit" class="py-2 submit-btn action-btn">Submit</button>
                    <button type="submit" name="submit" value="submit" class="py-2 cancel-btn action-btn">Cancel</button>
                </div>
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