
<?php 
$con = mysqli_connect('localhost','root','','real_estate');
session_start();
if(isset($_SESSION['user_id']))
{
  header("location:View_admin.php");
}
if(isset($_POST['Login_admin']))
{
    $User_name = $_POST['User_name'];
    $Password = $_POST['Password'];

    $sql = "select * from admin where User_name ='$User_name' and Password='$Password'";
    echo $sql;
    $res=mysqli_query($con,$sql);

    $cnt = mysqli_num_rows($res);
    if($cnt == 0)
    {
        echo "Invalid Password";
    }else
    {
        $row = mysqli_fetch_assoc($res);
        $_SESSION['user_id']=$row['id'];
        header("location:View_admin.php");
        
    }
   
}



 ?>
 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Form</title>
     <!-- CSS Files -->
     <link rel="stylesheet" href="assets/css/bootstrap.min.css" />
    <link rel="stylesheet" href="assets/css/plugins.min.css" />
    <link rel="stylesheet" href="assets/css/kaiadmin.min.css" />

    <!-- CSS Just for demo purpose, don't include it in your project -->
    <link rel="stylesheet" href="assets/css/demo.css" />
    <!-- <link rel="stylesheet" type="text/css" href="../User/cass/Login_style..css"> -->
</head>
<body>

    <div class="main">
    <div class="forms_design">
        <h1>Login</h1>
        <form action="" method="post">
            <div class="inputs_group"> 
                <input type="text" placeholder="Enter Your Username" name="User_name">
                <span>Enter Username</span>
            </div>
            <div class="inputs_group">
                <input type="password" placeholder="Enter Your Password" name="Password">
                <span>Enter Password</span>
            </div>
            <div class="frm_btn">
                <button type="submit" name="Login_admin">Login</button>
            </div>
        </form>
        <a href="#" class="forget_link">Forget Your Password ?</a>
    </div>
        
</div>
    
</body>
</html>