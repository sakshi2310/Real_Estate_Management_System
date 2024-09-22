<?php 
$con = mysqli_connect('localhost','root','','real_estate');
session_start();
// if(isset($_SESSION['user_id']))
// {
//   header("location:View_approved_property.php");
// }
if(isset($_POST['Login']))
{
    $User_name = $_POST['User_name'];
    $Password = $_POST['Password'];

    $sql = "select * from users where User_name ='$User_name' and Password='$Password'";
    $res=mysqli_query($con,$sql);
    
    $cnt = mysqli_num_rows($res);
    if($cnt == 0)
    {
        echo "Invalid Password";
    }else
    {
        $row = mysqli_fetch_assoc($res);
        $_SESSION['user_id']=$row['id'];
        $user_type = $row['User_type'];
        if($user_type == 'Buyer')
        {   
            header("location:Buyer/View_profile.php");
        }else
        {   
            header("location:Owner/View_approved_property.php");
        }
       
      
        
    }
   
}



 ?>
 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Form</title>
    <link rel="stylesheet" href="css/Login_style.css">
</head>
<body>

    <div class="main">
    <div class="forms_design">
        <h1>Login</h1>
        <form action="" method="post"s>
            <div class="inputs_group">
                <input type="text" placeholder="Enter Your Username" name="User_name">
                <span>Enter Username</span>
            </div>
            <div class="inputs_group">
                <input type="password" placeholder="Enter Your Password" name="Password">
                <span>Enter Password</span>
            </div>
            <div class="forget_link">
                <a href="#">Forget Your Password ?</a>
            </div>
            <div class="frm_btn">
                <button type="submit" name="Login">Login</button>
            </div>
        </form>
    </div>
        
</div>
    
</body>
</html>