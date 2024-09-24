
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
        <form action="" method="post">
            <p class="otp_code">Enter OTP Code :</p>
            <div class="otp-code d-flex justify-content-center">
                <input type="number" maxlength="1" oninput="this.value = this.value.slice(0, 1);" required>
                <input type="number" maxlength="1" oninput="this.value = this.value.slice(0, 1);" required>
                <input type="number" maxlength="1" oninput="this.value = this.value.slice(0, 1);" required>
                <input type="number" maxlength="1" oninput="this.value = this.value.slice(0, 1);" required>
            </div>
            <div class="otp_handle d-flex">
                <span>Resend Code</span>
            </div>
           <div class="frm_btn">
                <button  type="submit" name="Register">Submit</button>
            </div>
        </form>
    </div>
        
</div>
    
</body>
</html>