<?php
    require "./config.php";


?>

<!Doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js" crossorigin="anonymous"></script>
</head>
<body>
    <div class="">Enter your email address and we will send you a link to reset your password.</div>
    <form method="post" action="otp.php">
        <div class="">
            <input class="form-control" id="inputEmail" type="email" placeholder="name@example.com" />
            <label for="inputEmail">Email address</label>
        </div>
        <div class="">
            <a class="" href="login.php">Return to login</a>
            <a class="" href="otp.php">Reset Password</a>
        </div>
        <div class="card-footer text-center py-3">
            <div class="small"><a href="Signup.php">Need an account? Sign up!</a></div>
        </div>
    </form>

