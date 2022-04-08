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
    <div class="container">
        <form class="login-form" method="post" action="otp.php">
            <div class="login-title">
			<b>TAXMANDU</b> <br> FORGET PASSWORD
		    </div>
            <div class="info">
            Enter Email Address to get link to reset your password.
            </div>    
            <div class="">
                <input class="login-input" class="form-control" id="inputEmail" type="email" placeholder="name@example.com" />
               <!-- <label for="inputEmail">Email address</label>-->
            </div>

            <div class="login-input button">
            <a class="gap" href="otp.php">Reset Password</a>
            </div>

            <div class="login-forgot">
                <a class="" href="login.php">Return to login</a>
                <!-- <a class="gap" href="otp.php">Reset Password</a>-->
            </div>
        </form>   
            <div class="card-footer text-center py-3">
                <div class="login-signup" class="small"><a href="Signup.php">Need an account? Sign up!</a></div>
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

