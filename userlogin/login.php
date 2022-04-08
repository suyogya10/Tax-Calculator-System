<?php
    require "./config.php";
    session_start();
    if(isset($_SESSION['isloggedin'])) {
        header('Location: ./index.php');

    }
    if(isset($_POST['login'])){
        $uemail = $_POST['email'];
        $pass = md5($_POST['pass']);
        $query = mysqli_query($con, "SELECT * FROM user_login WHERE email='$uemail' AND pass='$pass'");

        $checkrow = mysqli_num_rows($query);
        if($checkrow == 1){
            $_SESSION['isloggedin'] == $pass;
            header('Location: ../admin/index.php');
        }

        else{
            $error = "Incorrect username or password.";
        }
    }



?>


<!DOCTYPE html>
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
		<div class="login-icon">
			<i class="glyphicon glyphicon-tint"></i> TAXMANDU
		</div>
		<div class="login-form">
		  <div class="login-title">
			Log In
		  </div>
            <form method="post">
		  <div class="login-input-parts">
			<input class="login-input" placeholder="Email Address" name="email"/>
			<input class="login-input" type="password" placeholder="Password" name="pass"/>
			<input class="login-input button" type="submit" value="Log In" name="login"/>
		  </div>
            </form>
		  <div class="login-forgot">
			<a href="forgot.php">Forgot password? </a>
		  </div>
		</div>
		<div class="login-signup">
		  Don't have an account? <a href="Signup.php">Sign Up</a>
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
}
.container *{
  box-sizing:border-box;
  border-radius:3px;
}

.login-icon{
  color:white;
  font-size:30px;
  font-weight:600;
  margin:40px auto;
}

.login-form{
  background: #FFFFFF;
  color:#565656;
  padding:40px;
}

.login-form .login-title{
  font-size:30px;
  font-weight:bold;
  margin:0px 0px 45px 0px;
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
	  </style>


</body>
</html>