<?php
    require "../userlogin/config.php";
    session_start();
    $email = $_SESSION['islogged'];
    $sql = "SELECT * FROM `tax_history` WHERE email = '$email'";
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="description" content="">
    <meta name="author" content="">

	<title>HISTORY TAXMANDU</title>

	<!-- Standard Favicon -->
	<link rel="icon" type="image/x-icon" href="images//favicon.ico" />
	
	<!-- For iPhone 4 Retina display: -->
	<link rel="apple-touch-icon-precomposed" sizes="114x114" href="images//apple-touch-icon-114x114-precomposed.png">
	
	<!-- For iPad: -->
	<link rel="apple-touch-icon-precomposed" sizes="72x72" href="images//apple-touch-icon-72x72-precomposed.png">
	
	<!-- For iPhone: -->
	<link rel="apple-touch-icon-precomposed" href="images//apple-touch-icon-57x57-precomposed.png">
	
	<!-- Library - Google Font Familys -->
	<link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,https://fonts.googleapis.com/css?family=Lato:100,100i,300,300i,400,400i,700,700i,900,900i,https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i" rel="stylesheet">
	
	<!-- Library -->
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
                                    <a href="http://localhost/tcs/news/useraddnews.php"><button  class="btn-outline-dark"> Add News </button></a>
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
							<a href="#" class="navbar-brand"><img src="images/logo.png" alt="logo" /></a>
						</div>
						<div class="navbar-collapse collapse" id="navbar">
							<ul class="nav navbar-nav menu-open">
								<li class=" dropdown">
									<a href="index.php" title="Home" class="dropdown-toggle" role="button" aria-haspopup="true" aria-expanded="false">Home</a> 
									<i class="ddl-switch fa fa-angle-down"></i>
								</li>
								<li class="dropdown">
									 <a href="" title="news" class="dropdown-toggle" role="button" aria-haspopup="true" aria-expanded="false">News</a> 
									<i class="ddl-switch fa fa-angle-down"></i>
									<ul class="dropdown-menu">				
										<li><a href="world.php" title="World"></a></li>
										<li><a href="nepal.php" title="Nepal"></a></li>
										<li><a href="finance.php" title="Finance"></a></li>
										<li><a href="sports.php" title="Sports"></a></li>
										 <li><a href="business.php" title="Business"></a></li>
										
									</ul>
								</li>

								<li class="dropdown">
									<a href="#" title="Tax-Calculator" class="dropdown-toggle" role="button" aria-haspopup="true" aria-expanded="false">Tax-Calculator</a>
									<i class="ddl-switch fa fa-angle-down"></i>
									<ul class="dropdown-menu">				
										<li><a href="calculator.php" title="Income-Tax">Income-Tax</a></li>
										<li><a href="vehicle-tax.php" title="Vehicle-Tax">Vehicle-Tax</a></li>
									</ul>
								</li>
								
								<li class=" dropdown"><a href="about.php" title="About-us">About Us</a></li>
								
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
            <img src="image/aboutus.jpg" alt="Team" />
			<!-- Container -->
			<div class="container">
				<h3>TAX HISTORY</h3>
				<ol class="breadcrumb">
				
					<li class="active">TEAM 3 (CG4)</li>
				</ol>
			</div><!-- Container /- -->
		</div><!-- Page Banner /- -->
</head>
<style>
	.row{
		font-weight:bold;
	}
    table, th, td {
        border:1px solid black;
    }
</style>
<body>

    <div class="heading">
        <h2 >Tax History Table </h2>
    </div>

<table style="width:100%">
    <tr class="roww">
        <th > Email</th>
        <th> Income Tax </th>
        <th> Vehicle Tax </th>
        <th> Date </th>
    </tr>

    <?php
    $result = mysqli_query($con, $sql);
    while($row = mysqli_fetch_assoc($result)){
        ?>
        <tr class="data">
            <td><?php echo $row['email']; ?></td>
            <td>Rs <?php echo $row['income']; ?></td>
            <td><?php echo $row['vehicle']; ?></td>
            <td><?php echo $row['date']; ?></td>
        </tr>
        <?php
    }
    ?>

</table>

<style>
    .heading{
        text-align: center;
        font-size: 24px;
        font-weight: 600;
        color: black;
        }
    
    /* .row{
        font-size: 14px;
        background-color: #96D4D4;
        color: black;
        text-align: center;
        
        
    }
    tr, th{
        border-color: #96D4D4;
        border-style: 2px solid ;
    }
    .row th{
        padding: 10px;
    }
    .data{
        font-size: 14px;
        background-color: #96D4D4;
        color: black;
        text-align: center;
    } */
    
    .home{
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

    .home:hover{
        cursor:pointer;
        background: #045685;
        color:white;

    }
    .home:active{
        border: 2px solid #2D9CDB ;
        transform: scale(0.98);     
        box-shadow: 3px 2px 22px 1px rgba(0, 0, 0, 0.24);
    }
	.marginnnn{
		margin-top: 570px;
	}
    
</style>
<div class="marginnnn">

		<!-- Footer Section -->
		<footer id="fotr" class="container-fluid no-padding footer-main">
			
			
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
									<li><a href="vehicle-tax.php" title="Food"></a>Vehicle Tax</li>
									
								</ul>
								<ul>
									<li><a href="calculator.php" title="Lifestyle">Income tax</a></li>
									<li><a href="#" title="Sports"></a></li>
							
								</ul>
							</div><!-- Link Widget /- -->
						</div><!-- Widget Block /- -->
					</div>
				</div><!-- Container /- -->
			</div>
			
		</footer><!-- Footer Section /- -->
	
	</div>

	<!-- JQuery v1.12.4 -->
	<script src="js/jquery-1.12.4.min.js"></script>

	<!-- Library - Js -->
	<script src="libraries/lib.js"></script>

	<!-- Library - Theme JS -->
	<script src="js/functions.js"></script>
	

</body>
</html>
