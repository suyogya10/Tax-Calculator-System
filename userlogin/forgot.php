<?php
    require "./config.php";
    require ".././src/PHPMailer.php";
    require ".././src/POP3.php";
    require ".././src/SMTP.php";
    require ".././src/Exception.php";


    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\SMTP;
    use PHPMailer\PHPMailer\Exception;

    if(isset($_POST['reset'])){

        $otp = rand(000000,999999);
        $email= $_POST['email'];
        echo $email;
        $query = "UPDATE `user_login` SET `otp`='.$otp.' WHERE email = '$email'";
        mysqli_query($con, $query);

        //Create an instance; passing `true` enables exceptions
        $mail = new PHPMailer(true);

        try {
            //Server settings
            $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
            $mail->isSMTP();                                            //Send using SMTP
            $mail->Host       = 'smtp.mailgun.org';                     //Set the SMTP server to send through
            $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
            $mail->Username   = 'otp@amsystem.codes';                     //SMTP username
            $mail->Password   = '8a801b07a93c183f930b212b2f718fcf-0677517f-c4783eaa';                               //SMTP password
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
            $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

            //Recipients
            $mail->setFrom('otp@amsystem.codes', 'TAXMANDU');
            $mail->addAddress($email);     //Add a recipient
            $mail->addAddress($email);               //Name is optional


            //Content

            $mail->isHTML(true);                                  //Set email format to HTML
            //$mail->AddAttachment('../news/images/logo.png');
            $mail->Subject = 'Here is the subject';
            $mail->Body    = 'Your One-Time Password is <b>'.$otp.'</b>. Please reset your password with the OTP recieved. <b> OR </b> <br> Goto the link provided below: <br> http://localhost/tcs/userlogin/otp.php . ';
            $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

            $mail->send();
            header("Location: ./otp.php");
        } catch (Exception $e) {
            echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
        }
    }


?>

<!Doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forgot Password</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js" crossorigin="anonymous"></script>
</head>
<body>
<div class="container">
    <form class="login-form" method="post">
        <div class="login-title">
            <b>TAXMANDU</b> <br> FORGET PASSWORD
        </div>
        <div class="info">
            Enter Email Address to get link to reset your password.
        </div>
        <div class="">
            <input class="login-input" class="form-control" id="inputEmail" name="email" type="email" placeholder="name@example.com" />
            <!-- <label for="inputEmail">Email address</label>-->
        </div>


            <input  class="login-input button" value="Reset Password" type="submit" name="reset">


        <div class="login-forgot">
            <a class="" href="login.php">Return to login</a>
            <!-- <a class="gap" href="otp.php">Reset Password</a>-->
        </div>
    </form>
    <div class="card-footer text-center py-3">
        <div class="login-signup" class="small"><a href="signup.php">Need an account? Sign up!</a></div>
    </div>

</div>
<style>
    html, body{
        padding:0px;
        margin:0px;
        background: #6fa5d6;
        font-family: "proxima-nova", helvetica;
    }
    .container{
        max-width:450px;
        margin:auto;
        text-align:center;
        margin-top: 100px;
    }
    .container *{
        box-sizing:border-box;
        border-radius:3px;
    }

    .login-form{
        background: #FFFFFF;
        color:#565656;
        padding:30px;
    }
    .login-form .login-title{
        font-size:30px;

        font-weight:bold;
        margin:0px 0px 30px 0px;
    }
    .login-form .login-input{
        display:block;
        margin: 20px auto;
        width:100%;
        padding:15px;
        font-size:18px;
        border: 2px solid #e7e7e7;
        background:#fcfcfc;
    }
    .info{
        font-size: 20px;
        font-weight: medium;
    }
    .login-forgot{
        text-decoration:underline;
        font-size:14px;
        color:#999;
    }

    .login-signup{
        color:#FFF;
        margin:20px 0px;
        font-size: 20px;
        font-weight: bold;
    }

    .login-signup a{
        color:#FFF;
        font-weight:600;
    }

    .login-form .login-input.button{
        border:none;
        color:white;
        background:#15CD72;
    }


    .login-form .login-input.button:hover{
        cursor:pointer;
        background:#026d38;
    }

    login-form .login-input.button:active{
        cursor:pointer;
        background:#026d38;
        transform: scale(0.98);

    }

    .gap{
        margin:20px;
    }
</style>
</body>
</html>