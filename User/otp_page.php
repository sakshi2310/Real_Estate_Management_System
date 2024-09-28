<?php 

session_start();
if(!isset($_SESSION['user_id']))
{
  header("location:index.php");
}
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;
if(isset($_POST['otp']))
{
    $entered_otp = $_POST['otp'];
    $user_type = $_SESSION['User_type'];
    $Email = $_SESSION['Email'];

    if (isset($_SESSION['otp'])) {
        $generate_otp = $_SESSION['otp'];

        if($entered_otp == $generate_otp)
        {
           
            if($user_type == 'Buyer')
            {   
                echo "<script>alert('OTP verified successfully. You are logged in!'); window.location.href = 'Buyer/View_profile.php'; </script>";
            }else
            {   
                header("location:Owner/View_approved_property.php");
                echo "<script>alert('OTP verified successfully. You are logged in!');  window.location.href = 'Owner/View_approved_property.php';</script>";
            }
            unset($_SESSION['otp']);
        }else{
            unset($_SESSION['user_id']);
            echo "<script>
            alert('Invalid OTP. A new OTP has been sent to your email. Login again.');
            window.location.href = 'index.php'; 
            </script>";
          exit;
            // header("location:index.php");
        
        }

    }
}
   


?>


<html lang="en">
<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OTP Genrate</title>
    <link rel="stylesheet" href="css/Login_style.css">

</head>
<body>
    <div class="main">
    <div class="forms_design">
        <h1>OTP Verification</h1>
        <form action="" method="post" id="otp-form">
            <p class="otp_code">Enter OTP Code :</p>
            <div class="otp-code d-flex justify-content-center">
            <input type="number" maxlength="1" class="otp-input" id="input1" oninput="moveNext(this, 'input2')" required>
            <input type="number" maxlength="1" class="otp-input" id="input2" oninput="moveNext(this, 'input3')" required>
            <input type="number" maxlength="1" class="otp-input" id="input3" oninput="moveNext(this, 'input4')" required>
            <input type="number" maxlength="1" class="otp-input" id="input4" oninput="moveNext(this, 'input5')" required>
            <input type="number" maxlength="1" class="otp-input" id="input5" oninput="moveNext(this, 'input6')" required>
            <input type="number" maxlength="1" class="otp-input" id="input6" oninput="moveNext(this, 'input1')" required>
                    </div>
            <div class="otp_handle d-flex">
                <span>Resend Code</span>
            </div>
           <div class="frm_btn">
                <input type="hidden" name="otp" id="otp-value">
                <input type="submit" value="Verify OTP" onclick="combineOtp()">
                <!-- <button  type="submit" name="Register">Submit</button> -->
            </div>
        </form>
    </div>
        
</div>

<script>

function combineOtp() {
    let otp = '';
    for (let i = 1; i <= 6; i++) {
        otp += document.getElementById('input' + i).value;
    }
    document.getElementById('otp-value').value = otp;
}
function moveNext(current, nextFieldID) {
    if (current.value.length >= 1) {
        let nextField = document.getElementById(nextFieldID);
        if (nextField) {
            nextField.focus();
        }
    }
}

// Backspace: Move to the previous field
document.querySelectorAll('.otp-input').forEach((input, index, inputs) => {
    input.addEventListener('keydown', (event) => {
        if (event.key === "Backspace" && input.value === '') {
            const prevInput = inputs[index - 1];
            if (prevInput) {
                prevInput.focus();
            }
        }
    });
});
</script>

    
</body>
</html>