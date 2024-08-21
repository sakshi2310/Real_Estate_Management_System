
<?php 

$con=mysqli_connect("localhost","root","","real_estate");

// Page session
session_start();
if(!isset($_SESSION['user_id']))
{
  header("location:index.php");
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
            <form method="post" enctype="multipart/form-data">
               <div class="col-10 p-4 ms-auto">
                    <div class="row main-Borad bg-white p-4" id="page1">
                    <div class="col-12">
                         
                    </div>
                    </div>
               </div>
            </form>
          </div>
         

     

        </div>
      </div>
    </div>


       
    
    


    


    <!-- bootstrap js -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</body>
</html>