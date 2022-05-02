<?php
error_reporting(0);
session_start();
require '../userlogin/config.php';
if(isset($_POST['calculate'])){
    $ntrans = $_POST['ntrans']; //Takes value from Normal Transaction
    $ship = $_POST['ship']; //Takes value from Shipping
    $ship2 = $_POST['ship2']; //Takes value from Shipping air and telecom
    $rep = $_POST['rep']; //Takes value from Rep
    $aone = 0.25 * $ntrans;
    $atwo = 0.05 * $ship;
    $athree = 0.02 * $ship2;
    $afour = 0.05 * $rep;
    $outcome = $aone + $atwo + $athree + $afour;

}
?>
<!DOCTYPE html>
<html lang="en">
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    
    <title>Non-resident INCOME TAX CALCULATOR</title>

    
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
								<a href="index.html"><img src="images/logo.png" alt="logo" /></a>
							</div>

							<div class="col-md-4 col-sm-6 col-xs-6 login-n-switch">
								<button id="margin" class="btn-outline-dark">Login</button>
								<button  class="btn-outline-dark">Signup</button>
							</div>
							
							<style>
								
.btn-outline-dark {
    margin-top: 0px;
    margin-bottom: -10px;
    border-radius: 30px;
    border: 2px solid #666666;
    font-family: roboto, 'sans serif';
    font-weight:bold;
    font-size:16px;
    background:white;
    text-transform: uppercase;
    height: 42px;
    width: 84px;
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
							<a href="index.html" class="navbar-brand"><img src="images/logo.png" alt="logo" /></a>
						</div>
						<div class="navbar-collapse collapse" id="navbar">
							<ul class="nav navbar-nav menu-open">
								<li class="dropdown">
									<a href="index.html" title="Home" class="dropdown-toggle" role="button" aria-haspopup="true" aria-expanded="false">Home</a>
									<i class="ddl-switch fa fa-angle-down"></i>
								</li>
								<li class="dropdown">
									<a href="#" title="news" class="dropdown-toggle" role="button" aria-haspopup="true" aria-expanded="false">News</a>
									<i class="ddl-switch fa fa-angle-down"></i>
									<ul class="dropdown-menu">				
										<li><a href="World.php" title="World">World</a></li>
										<li><a href="Nepal.php" title="Nepal">Nepal</a></li>
										<li><a href="Finance.php" title="Finance">Finance</a></li>
										<li><a href="Sports.php" title="Sports">Sports</a></li>
										<li><a href="Business.php" title="Business">Business</a></li>
										
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
			<!-- Container -->
			<div class="container">
				<h3>INCOME TAX CALCULATOR</h3><br><h3>For Non-Resident </h3>
               
				<ol class="breadcrumb">
					<li><a href="index.html">Home</a></li>
					<li class="active">INCOME TAX CALCULATOR</li>
				</ol>
			</div><!-- Container /- -->
		</div><!-- Page Banner /- -->

<main class="maan">
	<h1>Calculate Income Tax of Non-resident</h1>
    <div class="form">
        <form method="post" action="non-resi.php">
            
            <label class="stu">Normal Transaction:</label><br>
            <input type="text" id="ntrans" name="ntrans"><br>
            <label class="stu">Through shipping, air or telecom service, postage,<br> satellite, and optional fiber project:</label><br>
            <input type="text" id="ship" name="ship" value="0"><br>
            <label class="stu">Shipping, air or telecom service through territory of Nepal:</label><br>
            <input type="text" id="ship2" name="ship2" value="0"><br>
            <label class="stu">Repatriation of profit by Foreign Permanent Establishment:</label><br>
            <input type="text" id="rep" name="rep" value="0"><br><br>
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
        margin-left: 400px;

    }
    .form{
        margin-left: 100px;
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
								<p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Recusandae fugit minus sapiente, assumenda officia sint consectetur quaerat deserunt corrupti porro et quod molestias, enim dicta?</p>
								
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
									<li><a href="#" title="Technology">World</a></li>
									<li><a href="#" title="Nepal">Nepal</a></li>
									
								</ul>
								<ul>
									<li><a href="#" title="Lifestyle">Finance</a></li>
									<li><a href="#" title="Sports">Sports</a></li>
									
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