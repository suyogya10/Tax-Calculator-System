<?php
    session_start();
    require "../userlogin/config.php";
    $postid= intval($_GET['nid']);
    $main = mysqli_query($con, "SELECT * FROM news WHERE `newsID` = '$postid';");
    $sub = mysqli_query($con, "SELECT * FROM cmts WHERE `newsID` = '$postid';");

    if(isset($_POST['addcmt'])){
    $fname = $_POST['fname'];
    $email = $_POST['email'];
    $cmt = $_POST['cmt'];
    $sql = "INSERT INTO `cmts`(`fname`, `email`, `comment`,`newsID`) VALUES ('$fname','$email', '$cmt','$postid')";
    mysqli_query($con, $sql);
    }

?>
<!DOCTYPE html>
<html lang="en" class="">
<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
	<title> TAXMANDU</title>
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
								<a href="index.php"><img src="images/logo.png" alt="logo" /></a>
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
							<a href="index.php" class="navbar-brand"><img src="images/logo.png" alt="logo" /></a>
						</div>
						<div class="navbar-collapse collapse" id="navbar">
							<ul class="nav navbar-nav menu-open">
								<li class=" dropdown">
									<a href="index.php" title="Home" class="dropdown-toggle" role="button" aria-haspopup="true" aria-expanded="false">Home</a>
									<i class="ddl-switch fa fa-angle-down"></i>
								</li>
								<li class="active dropdown">
									<a href="#" title="news" class="dropdown-toggle" role="button" aria-haspopup="true" aria-expanded="false">News</a>
									<i class="ddl-switch fa fa-angle-down"></i>
									<ul class="dropdown-menu">
														
										<li><a href="world.php" title="World">World</a></li>
										<li><a href="nepal.php" title="Nepal">Nepal</a></li>
										<li><a href="Finance.php" title="Finance">Finance</a></li>
										<li><a href="sports.php" title="Sports">Sports</a></li>
										<li><a href="Business.php" title="Business">Business</a></li>
										
									</ul>
								</li>

								<li class="dropdown">
									<a href="#" title="Tax-Calculator" class="dropdown-toggle" role="button" aria-haspopup="true" aria-expanded="false">Tax-Calculator</a>
									<i class="ddl-switch fa fa-angle-down"></i>
									<ul class="dropdown-menu">				
										<li><a href="calculator.php" title="Income-Tax">Income-Tax</a></li>
										<li><a href="vehicle-tax.php" title="Vehicle-Tax">Vehicle-Tax</a></li>
                                        <li><a href="non-resi.php" title="Non-Resident">Non-Resident</a></li>
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
        <div>
            <img src="image/page-banner.jpg" alt="Team" />
        </div><!-- Page Banner /- -->
        <div>
            <br>
        </div>
		
		<main class="site-main page_spacing">

            <!-- Container -->
            <div class="container">
                <!-- Row -->
                <div class="row blog-single">
                    <!-- Content Area -->
                    <?php
                    while($r = mysqli_fetch_assoc($main))
                    {
                    ?>
                    <div class="col-md-9 col-sm-8 content-area content_space">
                        <article class="type-post">
                            <div class="entry-cover">
                                <a href="#"><img src="images/blog-single.jpg" alt="Blog" /></a>
                            </div>
                            <div class="entry-header">
                                <h3 class="entry-title"><?php echo $r['newsHead'];?></h3>
                                <div class="entry-meta">
                                    <div class="post-date"><a href="#" title="May 22, 2016"><?php echo $r['newsTime'];?></a></div>


                                </div>
                            </div>
                            <div class="entry-content">
                                <p><?php echo $r['newsBody'];?> </p>

                            </div>


                        </article>

                        <?php  } ?>
                    </div><!-- Content Area /- -->
					
					<!-- Widget Area -->
					<div class="col-md-3 col-sm-4 widget-area widget_space">

						<!-- Widget: Latest Posts -->

						<aside class="widget widget_latestposts" style="text-align: justify">
                            <form method="post"  action=" " onSubmit="window.location.reload()>
							<h3 class="widget-title">Post Comment</h3>
							<div class="side">
                                    <div class="breadcrumb-item active"><h5>Full Name</h5>
                                <input class="one" type="text" id="fname" name="fname" placeholder=""><br>
                            </div>
                            </div>
							<div class="side">
                                    <div class="breadcrumb-item active"><h5>Email</h5>
                                <input class="one" type="text" id="email" name="email" placeholder=""><br>
                            </div>
                            </div>
							<div class="side">
                                    <div class="breadcrumb-item active"><h5>Comment</h5>
                                <textarea class="two" type="text" id="cmt" name="cmt" placeholder=""></textarea><br>
                            </div>
                            <div>
                            </div>
                                <br>
                                <button type="submit" class="btn-outline-dark" id="addcmt" name="addcmt">ADD</button>
                            </div>
                        </form>
                        </aside>
                       <!-- Comment: Latest Posts /- -->


						<aside class="widget widget_latestposts">COMMENTS
							
							<div style="background-color: #ebf2ff">
                                <?php
                                while($mr = mysqli_fetch_assoc($sub))
                                {
                                ?>
                                <br>
                                <div class="breadcrumb-item active" style="text-align: center"><h4><?php echo $mr['fname'];?>:</h4>
                                    <div><h5><?php echo $mr['comment'];?></h5></div>
                                <?php } ?>
                            </div>

							
						</aside><!-- Comment: Latest Posts /- -->
						<style>
							.side{
								margin-left: -10px;
							}
							#sidee{
								margin-left: -23px;
							}
							#side{
								margin-left: -10px;
							}
							.sidee{
								margin-left: -10px;
							}
							#mainn{
								margin-top: 40px;
								margin-left: 80px;
							}
							.one{
								height: 30px;
								width: 270px;
							}
							.two{
								height: 70px;
								width: 270px;
							}
						</style>
						
						
						
						
					</div><!-- Widget Area /- -->
				</div><!-- Row /- -->
			</div><!-- Container /- -->
			
		</main>

		<!-- Footer Section -->
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
									<li><a href="#" title="Food">Nepal</a></li>
									
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
	
	</div>

	<!-- JQuery v1.12.4 -->
	<script src="js/jquery-1.12.4.min.js"></script>

	<!-- Library - Js -->
	<script src="libraries/lib.js"></script>

	<!-- Library - Theme JS -->
	<script src="js/functions.js"></script>
	
</body>
</html>