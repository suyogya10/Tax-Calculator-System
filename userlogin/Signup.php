<?php
    require "./config.php";


    session_start();
    if(isset($_SESSION['isloggedin'])){
        header('Location: ./index.php');
    }
    if(isset($_POST['signup'])){
        $fname = $_POST['fname'];
        $lname = $_POST['lname'];
        $email = $_POST['email'];
        $pass = md5($_POST['pass']);
        $cpass = md5($_POST['cpass']);
        if($pass == $cpass){
            $checkuser = mysqli_query($con, "SELECT * FROM user_login WHERE email='$email'");
            $countuser = mysqli_num_rows($checkuser);
            if($countuser == 1){
                $error = "<p>User with this email already exists.</p>";
            }
            else{
                $query =  "INSERT INTO user_login (fname, lname, email, pass) VALUES('$fname', '$lname', '$email', '$pass')";
                if(mysqli_query($con, $query)){
                    $success = "User Registered Successfully. Click <a href='./login.php'> here to login.</a>";
                }

            }
        }
        else{
            $error = "<p>Please Enter the same password.</p>";

        }
    }
?>



<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Signup Page</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js" crossorigin="anonymous"></script>
</head>
<body>
<form method="post" action="Signup.php">
    <?php
    if(!empty($error)):

        echo"<div class='alert alert-danger' role='alert'>"
            . $error .
            "</div>";
    endif;
    if(!empty($success)):

        echo"<div class='alert alert-success' role='alert'>"
            . $success .
            "</div>";
    endif;
    ?>
	<div class="container">
		<div class="login-icon">
			<i class="glyphicon glyphicon-tint"></i> 
		</div>
		<div class="login-form">
		  <div class="login-title">
			TAXMANDU - Sign Up
		  </div>
		  <div class="login-input-parts">
              
            <input class="login-input" placeholder="First Name" name="fname"/>
            <input class="login-input" placeholder="Last Name" name="lname"/>
			<input class="login-input" placeholder="Email Address" name="email"/>
			<input class="login-input" placeholder="Password" name="pass" type="password"/>
              <input class="login-input" placeholder="Password" name="cpass" type="password"/>
			<input class="login-input button" type="submit" value="Sign Up" name="signup"/>
		  </div>
		</div>
		<div class="login-signup">
		  Already have an account? <a class="black" href="login.php">Login</a>
		</div>
	  </div>
</form>
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
  margin:0px 0px 30px 0px;
}

.login-form .login-input{
  display:block;
  margin: 14px auto;
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
  color:white;
  margin:20px 0px;
  font-weight: bold; 
  font-size: 20px;
}

.login-signup a{
  color:#FFF;
  font-weight:600;
}
	  </style>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
</body>
</html>