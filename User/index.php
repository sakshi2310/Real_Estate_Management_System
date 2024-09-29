<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

$con = mysqli_connect('localhost','root','','real_estate');
session_start();
if(isset($_SESSION['user_id']))
{
  if($_SESSION['User_type'] == 'Sellar')
  {
        header("location:Owner/View_approved_property.php");
  }else{
    header("location:Buyer/View_profile.php");
  }

}


//Load Composer's autoloader
require '../PHPMailer/Exception.php';
require '../PHPMailer/PHPMailer.php';
require '../PHPMailer/SMTP.php';
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
        echo "<script>alert('Invalid Password');</script>";
    }else
    {
        $row = mysqli_fetch_assoc($res);
        $_SESSION['user_id']=$row['id'];
        $_SESSION['User_type'] = $row['User_type'];
        $_SESSION['Email'] = $row['Email'];
        $Mail = $row['Email'];


        $otp = rand(100000, 999999);
        $_SESSION['otp'] = $otp;

        //Create an instance; passing `true` enables exceptions
        $mail = new PHPMailer(true);

        try {

            //Server settings                     //Enable verbose debug output
            $mail->isSMTP();                                            //Send using SMTP
            $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
            $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
            $mail->Username   = 'dreamwell1623@gmail.com';                     //SMTP username
            $mail->Password   = 'ihbe ytzf plqa vnva';                               //SMTP password
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
            $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

            //Recipients
            $mail->setFrom('dreamwell1623@gmail.com', 'Dreamwell');
            $mail->addAddress($Mail, $Mail);     //Add a recipient
            

            //Content
            $mail->isHTML(true);                                  //Set email format to HTML
            $mail->Subject = 'Your OTP Code';
            $mail->Body    = 'Sender Email : dreamwell1623@gmail.com <br> Your OTP for login is: '.$otp;
            $mail->AltBody = 'Your OTP for login is: ' . $otp;

            $mail->send();
            echo 'OTP has been sent to your email.';
        } catch (Exception $e) {
            echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
        }
        
        header("location:otp_page.php");
        
       


        
       
      
        
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
            <div class="register_link">
                <a href="register.php">Register Now</a>
            </div>
        </form>
    </div>
        
</div>
    
</body>
</html>