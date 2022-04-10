<?php

require './config.php';

session_start();

if(isset($_POST['otp'])){

    $_SESSION['code'] = $_POST['otp'];
}

echo $_SESSION['code'];

if(isset($_POST['change'])){

//    echo $_SESSION['otp'];
//    $otp = $_SESSION['otp'];

    $otp =  $_SESSION['code'];

    if($_POST['pass'] == $_POST['cpass']){

        echo $_POST['pass'];

        $encrypted = md5($_POST['pass']);
        echo  $encrypted;

        $sql = "UPDATE `user_login` SET `pass`='$encrypted' WHERE otp = '$otp'";
        mysqli_query($con, $sql) or die($con -> error);

//        $sql1 = "UPDATE `user_login` SET `otp`='0' WHERE pass = '$encrypted'";
//        mysqli_query($con, $sql1);

//        header("Location: ./login.php");



    }



}


?>

<!Doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RECOVER PASSWORD  </title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js" crossorigin="anonymous"></script>
</head>
<body>
<div class="container">
    <form class="login-form" method="post">
        <div class="login-title">
            <b>TAXMANDU</b> <br> NEW PASSWORD
        </div>
        <div class="info">
            Enter New Password!!
        </div>
        <div class="">
            <input class="login-input" class="form-control" id="inputEmail" name="pass" type="password" placeholder="Password" />
            <!-- <label for="inputEmail">Email address</label>-->
        </div>
        <div class="">
            <input class="login-input" class="form-control" id="inputEmail" name="cpass" type="password" placeholder="Confirm Password" />
            <!-- <label for="inputEmail">Email address</label>-->
        </div>

       <input class="login-input button" type="submit" name="change" value="Change Password">

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
