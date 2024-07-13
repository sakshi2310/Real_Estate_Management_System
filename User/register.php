<?php 	
# Connect to data base
$con = mysqli_connect('localhost','root','','real_estate');
echo "hyyyyyyyyyyyyyys";
if(isset($_POST['Register']))
{
    echo "hyyyyyyyyyyyyyys";
	$User_name = $_POST['User_name'];
	$Email = $_POST['Email'];
    $Password = $_POST['Password'];

    $sql = "insert into admin (User_name,Email,Password) values ('$User_name','$Email','$Password');";
    mysqli_query($con,$sql);
    header("location:index.php");
}


 
 ?>

<html lang="en">
<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register Form</title>
    <link rel="stylesheet" href="css/Login_style.css">
</head>
<body>

    <div class="main">
    <div class="forms_design">
        <h1>Register</h1>
        <form action="" method="post">
            <div class="inputs_group">
                <input type="text" placeholder="Enter Username" name="User_name">
                <span>Enter Username</span>
            </div>
            <div class="inputs_group">
                <input type="email" placeholder="Enter Your Email" name="Email">
                <span>Enter Email</span>
            </div>
            <div class="inputs_group">
                <input type="password" placeholder="Enter Your Password" name="Password">
                <span>Enter Password</span>
            </div>  
           <div class="frm_btn">
                <button  type="submit" name="Register">Submit</button>
            </div>
        </form>
        <a href="#" class="forget_link">Forget Your Password ?</a>
    </div>
        
</div>
    
</body>
</html>