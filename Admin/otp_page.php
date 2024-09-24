<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register Form</title>
      <!-- CSS Files -->
      <link rel="stylesheet" href="assets/css/bootstrap.min.css" />
    <link rel="stylesheet" href="assets/css/plugins.min.css" />
    <link rel="stylesheet" href="assets/css/kaiadmin.min.css" />

    <!-- CSS Just for demo purpose, don't include it in your project -->
    <link rel="stylesheet" href="assets/css/demo.css" />
    <link rel="stylesheet" href="assets/css/style.css" />
    
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
            <div class="otp_handle">
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