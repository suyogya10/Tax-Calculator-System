<?php
        if(isset($_POST['Calculate'])){
            $vehicle = $_POST['vehicle'];
            $pradesh = $_POST['Pradesh'];
            $cc = $_POST['cc'];

            if($pradesh == "3"){
                if($cc <= 125){
                    $price = "Rs 2800";
                }
                elseif ($cc <=160 ){
                    $price = "Rs 6000";
                }
                elseif ($cc <=225 ){
                    $price = "Rs 8000";
                }
                elseif ($cc <=400 ){
                    $price = "Rs 11000";
                }
                elseif ($cc <=650 ){
                    $price = "Rs 20000";
                }
                elseif ($cc >=650 ){
                    $price = "Rs 30000";
                }
            }
            else{
                if($cc <= 125){
                    $price = "Rs 2800";
                }
                elseif ($cc <=160 ){
                    $price = "Rs 4500";
                }
                elseif ($cc <=250 ){
                    $price = "Rs 5500";
                }
                elseif ($cc <=400 ){
                    $price = "Rs 9000";
                }
                elseif ($cc <=650 ){
                    $price = "Rs 20000";
                }
                elseif ($cc >=650 ){
                    $price = "Rs 30000";
                }
            }

        }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    
    <title>VEHICLE TAX CALCULATOR</title>

    
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
</head>

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
										<li><a href="World.html" title="World">World</a></li>
										<li><a href="Nepal.html" title="Nepal">Nepal</a></li>
										<li><a href="Finance.html" title="Finance">Finance</a></li>
										<li><a href="Sports.html" title="Sports">Sports</a></li>
										<li><a href="Business.html" title="Business">Business</a></li>
										
									</ul>
								</li>

								<li class="active dropdown">
									<a href="#" title="Tax-Calculator" class="dropdown-toggle" role="button" aria-haspopup="true" aria-expanded="false">Tax-Calculator</a>
									<i class="ddl-switch fa fa-angle-down"></i>
									<ul class="dropdown-menu">				
										<li><a href="#" title="Income-Tax">Income-Tax</a></li>
										<li><a href="#" title="Vehicle-Tax">Vehicle-Tax</a></li>
									</ul>
								</li>
								
								<li><a href="about.html" title="About-us">About Us</a></li>
								
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
				<h3>VEHICLE TAX CALCULATOR</h3>
				<ol class="breadcrumb">
					<li><a href="index.html">Home</a></li>
					<li class="active">VEHICLE TAX CALCULATOR</li>
				</ol>
			</div><!-- Container /- -->
		</div><!-- Page Banner /- -->
		
<main class="maan">
    <h1>Calculate Vehicle Tax</h1>
    <form class="form" method="post" action="vehicle-tax.php">
    <div> 
        <div>
        <label class="stus">Select Vehicle Type:</label> <br>   
        <select name= "vehicle" placeholder="vehicle">
            <option value= "1"> Bike </option>
        </select>
        </div>

        <div>
            <label class="stu">Select your Pradesh:</label><br>    
            <select name= "Pradesh" placeholder="Pradesh">
                <option value= "1"> Province 1 </option>
                <option value= "2"> Madhesh </option>
                <option value= "3"> Bagmati </option>
                <option value= "4"> Gandaki </option>
                <option value= "5"> Lumbini </option>
                <option value= "6"> Karnali </option>
                <option value= "7"> Sudur Paschim </option>
            </select>
        </div>

        <div>
            <label class="stu">Select Fiscal Year:</label><br>
            <select name= "fy" placeholder="fy">
                <option value= "1"> 2078/79 </option>
            </select>
        </div>

        <div>
            <label class="stu">Enter your Vehicle CC: </label><br>
            <input name = "cc" type = "number" placeholder = "eg. 150" >
        </div>

        <div class="stu"> 
            <button class="rest" name="Reset"> Reset</button>   
            <button class="calcu" name="Calculate"> Calculate</button>
        </div>
        <div class="tala">
            <label>Tax Amount:</label><br><input name = "amount" type = "text" placeholder = "" value="<?php
            if(!empty($price)):
                echo $price;
                endif;
             ?>" >
        </div> 
    </div>
</form>
            </main>
<style>
.maan{
    margin-left: 500px;

    }
.stu{
    margin-top: 20px;
}
.form{
    margin-left: 60px;
    font-weight: medium;
    font-size: 18px;
}
.stus{
    margin-top: 40px;
}  
.tala{
    padding: 40px;
    margin-left: -40px;
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
    
</style>
</body>

		<!--Footer-->
		<footer class="container-fluid no-padding footer-main">
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
<!-- JQuery v1.12.4 -->
<script src="js/jquery-1.12.4.min.js"></script>

<!-- Library - Js -->
<script src="libraries/lib.js"></script>

<!-- Library - Theme JS -->
<script src="js/functions.js"></script>

</html>