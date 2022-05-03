<?php
    error_reporting(0);
    session_start();
    require '../userlogin/config.php';
    if(isset($_POST['calculate'])){
        $rate1 = "SELECT `rate` FROM `income_rate` WHERE id = 1;";
        mysqli_query($con, $rate1);
        echo ($rate1);
    $salary = $_POST['ysal']; //Takes value from Yearly Salary
    $bonus = $_POST['ybonus']; //Takes value from Yearly Bonus
    $epf = $_POST['epf']; //Takes value from Employee Providend Fund
    $cit = $_POST['cit']; //Takes value from Citizen Investment Trust
    $pfcit = $epf + $cit; //Sum of EPF and CIT
    $insu = $_POST['insu']; //Takes value from Insurance
    $total = $salary + $bonus; //Sum of Ysal and Ybonus
    $status = $_POST['status']; //Check status married, unmarried or nonresident
        if ($status == "nonresident"){

        }
    if ($pfcit < 300000){ //check if EPF adn CIT are lesser than required
        if ($pfcit < (0.33*$total)){ //check if EPF adn CIT are lesser than salary total
            $total = $total - $pfcit;
            if ($insu <= 25000){ //check if insurance is lesser than 25k which is max
                $total = $total-$insu;
                if ($status== 'married'){

                    if($total <= 450000){
                        $outcome = 0.01 * $total;
                    }
                    elseif($total <= 500000){ //next 1 lakh
                        $prevOut = 0.01 * 450000;
                        $newTotal = $total - 450000;
                        $outcome = 0.10 * $newTotal + $prevOut;
                    }
                    elseif($total <= 700000){ //next 2 lakh
                        $firstOut = 0.01 * 450000;
                        $prevTotal = 0.10 * 100000;
                        $newTotal = $total - 500000;
                        $outcome = 0.20 * $newTotal + $firstOut + $prevTotal;
                    }
                    elseif($total <= 2000000){ //next 13 lakh
                        $firstOut = 0.01 * 450000;
                        $secondOut = 0.10 * 100000;
                        $thirdOut = 0.20 * 200000;
                        $newTotal = $total - 700000;
                        $outcome = 0.30 * $newTotal + $firstOut + $secondOut + $thirdOut;
                    }
                    if($total > 2000000){ //more than 20 lakh
                        $firstOut = 0.01 * 450000;
                        $secondOut = 0.10 * 100000;
                        $thirdOut = 0.20 * 200000;
                        $newTotal = $total - 700000;
                        $outcome = 0.36 * $newTotal + $firstOut + $secondOut + $thirdOut;
                    }
                }
                if ($status== 'unmarried'){

                    if($total <= 400000){
                        $outcome = 0.01 * $total;
                    }
                    elseif($total <= 500000){
                        $prevOut = 0.01 * 400000;
                        $newTotal = $total - 400000;
                        $outcome = 0.10 * $newTotal + $prevOut;
                    }
                    elseif($total <= 700000){
                        $firstOut = 0.01 * 400000;
                        $prevTotal = 0.10 * 100000;
                        $newTotal = $total - 500000;
                        $outcome = 0.20 * $newTotal + $firstOut + $prevTotal;
                    }
                    elseif($total <= 2000000){
                        $firstOut = 0.01 * 400000;
                        $secondOut = 0.10 * 100000;
                        $thirdOut = 0.20 * 200000;
                        $newTotal = $total - 700000;
                        $outcome = 0.30 * $newTotal + $firstOut + $secondOut + $thirdOut;
                    }
                    if($total > 2000000){
                        $firstOut = 0.01 * 400000;
                        $secondOut = 0.10 * 100000;
                        $thirdOut = 0.20 * 200000;
                        $newTotal = $total - 700000;
                        $outcome = 0.36 * $newTotal + $firstOut + $secondOut + $thirdOut;
                    }
                }
            }
            else{
                $outcome ="Maximum Insurance is 25k"; //error msg
            }
        }
        elseif ($pfcit > (0.33*$total)){
            $outcome = "CIT and EPF exceeded the limit"; //error msg
        }
    }
    else{
        $outcome = "CIT and EPF exceeded the limit"; //error msg
    }

    $email = $_SESSION['islogged'];
    $date = date("Y/m/d");
    $sql = "INSERT INTO `tax_history`(`email`, `vehicle`, `income`,`date`) VALUES ('$email','0','$outcome', '$date')";
    mysqli_query($con, $sql);
}
?>
<!DOCTYPE html>
<html lang="en">
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    
    <title>INCOME TAX CALCULATOR</title>

    
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
	
	<!-- Standard Favicon -->
	<link rel="icon" type="image/x-icon" href="images//favicon.ico" />
	<link rel="apple-touch-icon-precomposed" sizes="114x114" href="images//apple-touch-icon-114x114-precomposed.png">
	<link rel="apple-touch-icon-precomposed" sizes="72x72" href="images//apple-touch-icon-72x72-precomposed.png">
	<link rel="apple-touch-icon-precomposed" href="images//apple-touch-icon-57x57-precomposed.png">
	<!-- Library - Google Font Familys -->
	<link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,https://fonts.googleapis.com/css?family=Lato:100,100i,300,300i,400,400i,700,700i,900,900i,https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i" rel="stylesheet"> 

    <link rel="stylesheet" type="text/css" href="libraries/lib.css">
	
	<!-- Custom - Theme CSS -->
	<link rel="stylesheet" type="text/css" href="css/plugins.css">			
	<link rel="stylesheet" type="text/css" href="css/navigation-menu.css">
	<link rel="stylesheet" type="text/css" href="css/shortcode.css">
	<link rel="stylesheet" type="text/css" href="style.css">
<head></head>
<body data-offset="200" data-spy="scroll" data-target=".ow-navigation">
	<div class="main-container">
		<div id="site-loader" class="load-complete">
			<div class="loader">
				<div class="loader-inner ball-clip-rotate">
					<div></div>
				</div>
			</div>
		</div>

		<!-- Header Section -->
		<header class="container-fluid no-padding header-section header-section1">
		
			<!-- SidePanel -->
			<div id="slidepanel">
			
				<!-- Top Header -->
				<div class="container-fluid no-padding top-header">
					<!-- Container -->
					<div class="container">
						<div class="row">
							<div class="col-md-4 col-sm-6 col-xs-6 social-block">
								
							</div>
							<div class="col-md-4 col-sm-6 logo-block">
								<a href="#"><img src="images/logo.png" alt="logo" /></a>
							</div>

                            <div class="col-md-4 col-sm-6 col-xs-6 login-n-switch">

                                <?php
                                if(!isset($_SESSION['islogged'])){
                                    ?>
                                    <a href="http://localhost/tcs/userlogin/login.php"><button id="margin" class="btn-outline-dark">Login</button></a>
                                    <a href="http://localhost/tcs/userlogin/signup.php"><button  class="btn-outline-dark">Signup</button></a>

                                    <?php
                                }

                                else{
                                    ?>

                                    <a href="http://localhost/tcs/userlogin/logout.php"><button type="button" class="btn-outline-dark">Logout</button></a>
                                    <a href="http://localhost/tcs/news/user.php"><button type="button" class="btn-outline-dark">History</button></a>
                                    <?php
                                }
                                ?>

                            </div>
							
							<style>
								
.btn-outline-dark {
    text-align: center;
    font-weight:bold;
    background:white;
    font-family: roboto, 'sans serif';
    font-size:16px;
    text-transform: uppercase;
    border-radius: 30px;
    border: 2px solid #666666;
    width: 90px;
    color: #666666;  
    
}
.btn-outline-dark:hover {
    background:#2D9CDB;
    color:white;
    cursor:pointer;
	border: 2px solid #2D9CDB;
}

.btn-outline-dark:active {
    background:#2D9CDB;
    color:white;
	border: 2px solid #2D9CDB ;
    transform: scale(0.98);     
    box-shadow: 3px 2px 22px 1px rgba(0, 0, 0, 0.24);
}

</style>
							<div class="col-md-4 col-sm-6 col-xs-6 login-n-switch">
								
								
							</div>
						</div>
						
					</div><!-- Container /- -->
				</div><!-- Top Header /- -->
				
			</div><!-- SidePanel /- -->
			
			<div class="container-fluid no-padding menu-block">
				<!-- Container -->
				<div class="container">	
					<!-- nav -->
					<nav class="navbar navbar-default ow-navigation">
						<div class="navbar-header">
							<button aria-controls="navbar" aria-expanded="false" data-target="#navbar" data-toggle="collapse" class="navbar-toggle collapsed" type="button">
								<span class="sr-only">Toggle navigation</span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							</button>
							<a href="index.php" class="navbar-brand"><img src="images/logo.png" alt="logo" /></a> --->
						</div>
						<div class="navbar-collapse collapse" id="navbar">
							<ul class="nav navbar-nav menu-open">
								<li class="dropdown">
									<a href="index.php" title="Home" class="dropdown-toggle" role="button" aria-haspopup="true" aria-expanded="false">Home</a>
									<i class="ddl-switch fa fa-angle-down"></i>
								</li>
								<li class="dropdown">
									<a href="#" title="news" class="dropdown-toggle" role="button" aria-haspopup="true" aria-expanded="false">News</a>
									<i class="ddl-switch fa fa-angle-down"></i>
									<ul class="dropdown-menu">				
										<li><a href="world.php" title="World">World</a></li>
										<li><a href="nepal.php" title="Nepal">Nepal</a></li>
										<li><a href="finance.php" title="Finance">Finance</a></li>
										<li><a href="sports.php" title="Sports">Sports</a></li>
										<li><a href="business.php" title="Business">Business</a></li>
										
									</ul>
								</li>

								<li class=" active dropdown">
									<a href="#" title="Tax-Calculator" class="dropdown-toggle" role="button" aria-haspopup="true" aria-expanded="false">Tax-Calculator</a>
									<i class="ddl-switch fa fa-angle-down"></i>
									<ul class="dropdown-menu">				
										<li><a href="calculator.php" title="Income-Tax">Income-Tax</a></li>
										<li><a href="vehicle-tax.php" title="Vehicle-Tax">Vehicle-Tax</a></li>
                                        <li><a href="non-resi.php" title="nonresi">Non-Resident</a></li>
									</ul>
								</li>
								
								<li><a href="about.php" title="About-us">About Us</a></li>
								
							</ul>
						</div><!--/.nav-collapse -->
						<div id="loginpanel" class="desktop-hide">
							<div class="right" id="toggle">
								<a id="slideit" href="#slidepanel"><i class="fo-icons fa fa-inbox"></i></a>
								<a id="closeit" href="#slidepanel"><i class="fo-icons fa fa-close"></i></a>
							</div>
						</div>
					</nav><!-- nav /- -->
				</div><!-- Container /- -->
			</div>
		</header><!-- Header Section /- -->
	
		
		<!-- Page Banner -->
		<div class="container-fluid no-padding page-banner">
            <img src="image/incometax.jpg" alt="Team" />
			<!-- Container -->
			<div class="container">
				<h3>INCOME TAX CALCULATOR</h3>
				<ol class="breadcrumb">
					<!--- <li><a href="index.php">Home</a></li> --->
					<li class="active">INCOME TAX CALCULATOR</li>
				</ol>
			</div><!-- Container /- -->
		</div><!-- Page Banner /- -->

<main class="maan">
	<h1>Calculate Income Tax</h1>
    <div class="form">
        <form method="post" action="calculator.php">
            <label class="stus">Status:</label><br>
            <select name="status" id="status">
                <option value="married" name="married">Married</option>
                <option value="unmarried" name="unmarried">Un-Married</option>

            </select><br>
            <label class="stu">Yearly Salary:</label><br>
            <input type="text" id="ysal" name="ysal"><br>
            <label class="stu">Yearly Bonus:</label><br>
            <input type="text" id="ybonus" name="ybonus" value="0"><br>
            <label class="stu">Employee Provident Fund:</label><br>
            <input type="text" id="epf" name="epf" value="0"><br>
            <label class="stu">Citizen Investment Trust:</label><br>
            <input type="text" id="cit" name="cit" value="0"><br>
            <label class="stu">Insurance:</label><br>
            <input type="text" id="insu" name="insu" value="0"><br><br>
			<div>
				<input class="rest" type="submit" value="Reset" name="Reset" value="1">
				<input class="calcu" type="submit" value="Calculate" name="calculate" value="0">	
			</div>	
        </form><br>
		<div class="txar">
			<textarea name="ans">
				<?php
					if (!empty($outcome)):
						echo $outcome;
				endif;

				?>
			</textarea>
		</div>
    </div>

		</main>
</body>
<style>


    .maan{
        margin-left: 500px;

    }
    .form{
        margin-left: 60px;
        font-weight: medium;
        font-size: 18px; 
    
    }
    .txar{
        padding: 40px;
        margin-left: -30px;
        margin-top: -40px;
    }
    
    .stus{
        margin-top: 40px;
    }
	.stu{
		margin-top: 20px;
	}
    .calcu{
        background-color: #2D9CDB;
        border: none;
        color: white;
        padding: 10px 20px;
        text-align: center;
        text-decoration: none;
        display: inline-block;
        font-size: 18px;
        font-weight: medium;
        border-radius: 12px;
    }

    .calcu:hover{
        cursor:pointer;
        background: #045685;
        color:white;

    }
    .calcu:active{
        border: 2px solid #2D9CDB ;
        transform: scale(0.98);     
        box-shadow: 3px 2px 22px 1px rgba(0, 0, 0, 0.24);
    }

    .rest{
        
        background-color: white;
        border: none;
        color: #2D9CDB;
        padding: 10px 20px;
        text-align: center;
        text-decoration: none;
        display: inline-block;
        font-size: 18px;
        font-weight: medium;
        border-radius: 12px;
        border: 0.5px solid #2D9CDB;
    }
    .rest:hover{
        cursor:pointer;
        background: #eb735e;
        color:white;
        border: 0.5px solid white;
    }
    .rest:active{
        border: 2px solid #eb735e ;
        transform: scale(0.98);     
        box-shadow: 3px 2px 22px 1px rgba(0, 0, 0, 0.24);
    }
   

    }
    
 </style>
<!--Footer-->
<footer id="ftr" class="container-fluid no-padding footer-main">
			<div class="container-fluid no-padding footer-middle">
				<!-- Container -->
				<div class="container">
					<div class="row">
						<!-- Widget Block -->
						<div class="col-md-5 col-sm-6 col-xs-6 widget-block">
							<!-- About Widget -->
							<div class="ftr-widget ftr_widget_about">
								<h3>ABOUT US</h3>
								<p>A small project by L5CG4 Students</p>
								
							</div><!-- About Widget /- -->
						</div><!-- Widget Block /- -->
						<!-- Widget Block -->
						<div class="col-md-4 col-sm-6 col-xs-6 widget-block">
							<!-- Recent Tweets -->
							<div class="ftr-widget ftr_widget_instagram">
								
							</div><!-- Recent Tweets /- -->
						</div><!-- Widget Block /- -->
						<!-- Widget Block -->
						<div class="col-md-3 col-sm-6 col-xs-6 widget-block">
							<!-- Link Widget -->
							<div class="ftr-widget ftr_widget_link">
								<h3>QUICK LINKS</h3>
								<ul>
									<li><a href="about.php" title="Technology">About us</a></li>
									<li><a href="vehicle-tax.php" title="Nepal">Vehicle Tax</a></li>
									
								</ul>
								<ul>
									<li><a href="calculator.php" title="Lifestyle">income Tax</a></li>
									<li><a href="#" title="Sports"></a></li>
									
								</ul>
							</div><!-- Link Widget /- -->
						</div><!-- Widget Block /- -->
					</div>
				</div><!-- Container /- -->
			</div>
			
		</footer><!-- Footer Section /- -->   

<body>
</body>
<!-- JQuery v1.12.4 -->
<script src="js/jquery-1.12.4.min.js"></script>

<!-- Library - Js -->
<script src="libraries/lib.js"></script>

<!-- Library - Theme JS -->
<script src="js/functions.js"></script>
</html>