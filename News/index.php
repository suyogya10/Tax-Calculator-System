<?php
    session_start();
    error_reporting(0);


?>


<!DOCTYPE html>

<html lang="en" class="">
<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
	<title>Tax Calculation System</title>
	<link rel="icon" type="image/x-icon" href="images//favicon.ico" />
	<link rel="apple-touch-icon-precomposed" sizes="114x114" href="images//apple-touch-icon-114x114-precomposed.png">
	<link rel="apple-touch-icon-precomposed" sizes="72x72" href="images//apple-touch-icon-72x72-precomposed.png">
	<link rel="apple-touch-icon-precomposed" href="images//apple-touch-icon-57x57-precomposed.png">
	<link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,https://fonts.googleapis.com/css?family=Lato:100,100i,300,300i,400,400i,700,700i,900,900i,https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i" rel="stylesheet"> 
	<link rel="stylesheet" type="text/css" href="revolution/css/settings.css">
	<link rel="stylesheet" type="text/css" href="revolution/css/layers.css">
	<link rel="stylesheet" type="text/css" href="revolution/css/navigation.css">
    <link rel="stylesheet" type="text/css" href="libraries/lib.css">
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
								<li class="active dropdown">
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

								<li class="dropdown">
									<a href="#" title="Tax-Calculator" class="dropdown-toggle" role="button" aria-haspopup="true" aria-expanded="false">Tax-Calculator</a>
									<i class="ddl-switch fa fa-angle-down"></i>
									<ul class="dropdown-menu">
										<li><a href="calculator.php" title="Income-Tax">Income-Tax</a></li>
										<li><a href="vehicle-tax.php" title="Vehicle-Tax">Vehicle-Tax</a></li>
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
	
		<main class="site-main">
						
			<!-- Slider Section 1 -->
			<div id="home-revslider" class="slider-section container-fluid no-padding">
				<!-- START REVOLUTION SLIDER 5.0 -->
				<div class="rev_slider_wrapper">
					<div id="home-slider1" class="rev_slider" data-version="5.0">
						<ul>
							<li>
								<img src="image/slide1.jpg" alt="slider" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="10" class="rev-slidebg" data-no-retina>
								<div class="tp-caption tp-shape tp-shapewrapper" id="slide-layer-0"
									data-x="['center','center','center','center']" 
									data-y="['middle','middle','middle','middle']" 
									data-basealign="slide" 
									data-height="full" 
									data-hoffset="['0','0','0','0']" 
									data-responsive="off" 
									data-responsive_offset="off" 
									data-start="0" 
									data-transform_idle="o:1;" 
									data-transform_in="opacity:0;s:2000;e:Power2.easeInOut;" 
									data-transform_out="opacity:0;s:500;s:500;" 
									data-voffset="['0','0','0','0']" 
									data-whitespace="nowrap" 
									data-width="full"
									style="z-index: 5;background-color:rgba(34, 34, 34, 0.549);">
								</div>
								<div class="tp-caption NotGeneric-Title tp-resizeme rs-parallaxlevel-0" id="slide-layer-1" 
									data-x="['left','left','left','left']" data-hoffset="['375','140','70','45']" 
									data-y="['top','top','top','top']" data-voffset="['240','170','130','90']" 
									data-fontsize="['46','40','32','20']"
									data-lineheight="['64','50','38','25']"
									data-width="none"
									data-height="none"
									data-whitespace="nowrap"
									data-transform_idle="o:1;"
									data-transform_in="x:[-105%];s:1000;e:Power4.slideInRight;" 
									data-transform_out="y:[100%];s:1000;s:1000;e:Power2.slideInRight;" 
									data-mask_in="x:0px;y:0px;s:inherit;e:inherit;" 
									data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;"  
									data-start="1000" 
									data-splitin="none" 
									data-splitout="none" 
									data-responsive_offset="on"
									data-elementdelay="0.05" 
									style="z-index: 5; white-space: nowrap; letter-spacing: 1.38px; color:#fff; font-weight: 600;  font-family: 'Poppins', sans-serif;">Action against Governor <br> Cause unease in <br> Nepal congress leaders
								</div>
								<div class="tp-caption NotGeneric-Title tp-resizeme rs-parallaxlevel-0" id="slide-layer-2" 
									data-x="['left','left','left','left']" data-hoffset="['375','140','70','45']" 
									data-y="['top','top','top','top']" data-voffset="['430','320','250','180']" 
									data-fontsize="['20','20','20','16']"
									data-lineheight="['64','64','54','34']"
									data-width="none"
									data-height="none"
									data-whitespace="nowrap"
									data-transform_idle="o:1;"
									data-transform_in="x:[105%];s:1000;e:Power4.slideInLeft;" 
									data-transform_out="y:[100%];s:1000;s:1000;e:Power2.slideInLeft;"
									data-mask_in="x:0px;y:0px;s:inherit;e:inherit;" 
									data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;"
									data-start="1000" 
									data-splitin="none" 
									data-splitout="none" 
									data-responsive_offset="on"
									data-elementdelay="0.05" 
									style="z-index: 5; white-space: nowrap; letter-spacing: 0.6px; color:#c7c6c6; font-weight: 600; font-family: 'Poppins', sans-serif;">
								</div>
								
							</li>
							
							<li>
								<img src="image/slide2.jpg" alt="slider" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="10" class="rev-slidebg" data-no-retina>
								<div class="tp-caption tp-shape tp-shapewrapper" id="slide-layer-4"
									data-x="['center','center','center','center']" 
									data-y="['middle','middle','middle','middle']" 
									data-basealign="slide" 
									data-height="full" 
									data-hoffset="['0','0','0','0']" 
									data-responsive="off" 
									data-responsive_offset="off" 
									data-start="0" 
									data-transform_idle="o:1;" 
									data-transform_in="opacity:0;s:2000;e:Power2.easeInOut;" 
									data-transform_out="opacity:0;s:500;s:500;" 
									data-voffset="['0','0','0','0']" 
									data-whitespace="nowrap" 
									data-width="full"
									style="z-index: 5;background-color:rgba(34, 34, 34, 0.549);">
								</div>
								<div class="tp-caption NotGeneric-Title tp-resizeme rs-parallaxlevel-0" id="slide-layer-5" 
									data-x="['left','left','left','left']" data-hoffset="['375','140','70','45']" 
									data-y="['top','top','top','top']" data-voffset="['240','170','130','90']" 
									data-fontsize="['46','40','32','20']"
									data-lineheight="['64','50','38','25']"
									data-width="none"
									data-height="none"
									data-whitespace="nowrap"
									data-transform_idle="o:1;"
									data-transform_in="y:[-105%];s:1000;e:Power4.slideInUp;" 
									data-transform_out="y:[100%];s:1000;s:1000;e:Power2.slideInRight;"  
									data-mask_in="x:0px;y:0px;s:inherit;e:inherit;" 
									data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;"  
									data-start="1000" 
									data-splitin="none" 
									data-splitout="none" 
									data-responsive_offset="on"
									data-elementdelay="0.05" 
									style="z-index: 5; white-space: nowrap; letter-spacing: 1.38px; color:#fff; font-weight: 600;  font-family: 'Poppins', sans-serif;">Nepal logs four covid news
									 <br> According to  <br> Ministry of health
								</div>
								<div class="tp-caption NotGeneric-Title tp-resizeme rs-parallaxlevel-0" id="slide-layer-6" 
									data-x="['left','left','left','left']" data-hoffset="['375','140','70','45']" 
									data-y="['top','top','top','top']" data-voffset="['430','320','250','180']" 
									data-fontsize="['20','20','20','16']"
									data-lineheight="['64','64','54','34']"
									data-width="none"
									data-height="none"
									data-whitespace="nowrap"
									data-transform_idle="o:1;"
									data-transform_in="x:[-105%];s:1000;e:Power4.slideInRight;" 
									data-transform_out="y:[100%];s:1000;s:1000;e:Power2.slideInRight;"
									data-mask_in="x:0px;y:0px;s:inherit;e:inherit;" 
									data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;"
									data-start="1000" 
									data-splitin="none" 
									data-splitout="none" 
									data-responsive_offset="on"
									data-elementdelay="0.05" 
									style="z-index: 5; white-space: nowrap; letter-spacing: 0.6px; color:#c7c6c6; font-weight: 600; font-family: 'Poppins', sans-serif;">
								</div>
								
							</li>
						</ul>
					</div>
				</div>
			</div>
			<div class="container-fluid no-left-padding no-right-padding recent-reviews">
				<div class="container">	
					<div class="section-header">
						<h3>RECENT NEWS</h3>
					</div>		
					<div class="row">
						<div class="col-md-7 col-sm-6 col-xs-6 rcnt-review-left">
							<div class="type-post">
								<div class="entry-cover">
									<a href="#"><img src="image/rcnt-review.jpg" alt="Recent" /></a>
									<div class="rcnt-category"><a href="#">SPORTS</a></div>
								</div>
								<h3 class="entry-title"><a href="#">Nepal beat PNG by 7 wicket</a></h3>
								<div class="post-meta">
									<div class="post-time"><a href="#">1 hour ago</a></div>
									
								</div>
								<div class="entry-content">
									<p> Nepal beat PNG by 7 wicket chasing the target of 210. Sandeep take 3 wicket  and Rohit score century. </p>
								</div>
							</div>
						</div><!-- Recent Reviews Left /- -->
						<!-- Recent Reviews Thumb -->
						<div class="col-md-5 col-sm-6 col-xs-6 rcnt-review-right">
							<div class="rcnt-review-thumb">
								<div class="entry-cover">
									<a href="#"><img src="image/rcnt-review1.jpg" alt="Reviews" /></a>
									<div class="rcnt-category"><a href="#">Travel</a></div>
								</div>
								<h3 class="entry-title"><a href="#">Tourism sector upbeat as Nepal throws door open to fully vaxxed travellers</a></h3>
								<div class="post-meta">
									<div class="post-time"><a href="#">1 hour ago</a></div>
								
								</div>
							</div>
							<div class="rcnt-review-thumb">
								<div class="entry-cover">
									<a href="#"><img src="image/rcnt-review1.jpg" alt="Reviews" /></a>
									<div class="rcnt-category"><a href="#">WORLD</a></div>
								</div>
								<h3 class="entry-title"><a href="#">Zelenskiy braces for ‘hard battle’, Boris Johnson visits with aid </a></h3>
								<div class="post-meta">
									<div class="post-time"><a href="#">2 hour ago</a></div>
								
								</div>
							</div>
							<div class="rcnt-review-thumb">
								<div class="entry-cover">
									<a href="#"><img src="image/rcnt-review1.jpg" alt="Reviews" /></a>
									<div class="rcnt-category"><a href="#">SPORTS</a></div>
								</div>
								<h3 class="entry-title"><a href="#">20 teams on 2024 t20 cricket world cup</a></h3>
								<div class="post-meta">
									<div class="post-time"><a href="#">1 hour ago</a></div>
								
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			
			<div class="padding-80"></div>
			<div class="container">
				<div class="row">
					<div class="col-md-9 col-sm-7 content-area content_space">
						<div class="lifestyle-bolck">
							<h4 class="block-title">NEPAL NEWS</h4>
							<div class="row">
								<div class="col-md-3 col-sm-12 col-xs-3 thumb-block no-padding">
									<div class="col-md-12 col-sm-6 col-xs-12 life-block-thumb">
										<div class="entry-cover"><a href="#"><img src="image/lifestyle-thumb1.jpg" alt="Life Style" /></a></div>
										<div class="post-date"><a href="#">Date </a></div>
										<h3 class="entry-title"><a href="#">Date set but why some are doubting timely polls</a></h3>
									</div>
									<div class="col-md-12 col-sm-6 col-xs-12 life-block-thumb">
										<div class="entry-cover"><a href="#"><img src="image/lifestyle-thumb1.jpg" alt="Life Style" /></a></div>
										<div class="post-date"><a href="#">Date</a></div>
										<h3 class="entry-title"><a href="#">Nepali Congress set to decide today in favour of poll alliance</a></h3>
									</div>
								</div>
								<div class="col-md-6 col-sm-12 col-xs-6 big-block">
									<div class="life-block-big">
										<div class="entry-cover"><a href="#"><img src="image/lifestyle-big.jpg" alt="Life Style" /></a></div>
										<div class="entry-content">
											<div class="post-date"><a href="#">Date</a></div>
											<h3 class="entry-title"><a href="#">‘Out of compulsion’: Ruling coalition’s electoral alliance easier said than done</a></h3>
										</div>
									</div>
								</div>
								<div class="col-md-3 col-sm-12 col-xs-3 thumb-block no-padding">
									<div class="col-md-12 col-sm-6 col-xs-12 life-block-thumb">
										<div class="entry-cover"><a href="#"><img src="image/lifestyle-thumb1.jpg" alt="Life Style" /></a></div>
										<div class="post-date"><a href="#">Date</a></div>
										<h3 class="entry-title"><a href="#">Coalition members seek to fortify alliance plan for local elections</a></h3>
									</div>
									<div class="col-md-12 col-sm-6 col-xs-12 life-block-thumb">
										<div class="entry-cover"><a href="#"><img src="image/lifestyle-thumb1.jpg" alt="Life Style" /></a></div>
										<div class="post-date"><a href="#">date</a></div>
										<h3 class="entry-title"><a href="#">Ruling alliance finds it tough to divide up six metropolis mayor positions</a></h3>
									</div>
								</div>
							</div>
						</div>
						
						
					</div><!-- Content Area /- -->
					
					<!-- Widget Area -->
					<div class="col-md-3 col-sm-5 widget-area widget_space">
					
						<!-- Widget: Search -->
						
						<aside id="widget_latestposts" class="widget widget_latestposts">
							<h3 class="widget-title">Recent News</h3>
							<div class="latest-content">
								<a href="#" title="Recent Posts"><i><img src="image/wd-rcnt-post1.jpg" class="wp-post-image" alt="blog-1"></i></a>
								<h5><a title="The paradox of modern Vietnam" href="#">Pakistan’s Prime Minister Imran Khan ousted in no-confidence vote</a></h5>
								<span><a href="#">WORLD</a> <a href="#">date</a></span>
							</div>
							<div class="latest-content">
								<a href="#" title="Recent Posts"><i><img src="image/wd-rcnt-post1.jpg" class="wp-post-image" alt="blog-1"></i></a>
								<h5><a title="BHP Billiton's Samarco costs top $3 billion" href="#">Health insurance policyholders bear the brunt of payment arrears by authority</a></h5>
								<span><a href="#">BUSINESS</a> <a href="#">Date</a></span>
							</div>
							<div class="latest-content">
								<a href="#" title="Recent Posts"><i><img src="image/wd-rcnt-post1.jpg" class="wp-post-image" alt="blog-1"></i></a>
								<h5><a title="I'm a goose too, says Dimma over Dusty" href="#">DC beats kkr by 45 runs</a></h5>
								<span><a href="#">SPORTS</a> <a href="#">date</a></span>
							</div>
							<div class="latest-content">
								<a href="#" title="Recent Posts"><i><img src="image/wd-rcnt-post1.jpg" class="wp-post-image" alt="blog-1"></i></a>
								<h5><a title="The Tradtional Console Life Cycle is Dying" href="#">New Bhairahawa airport is ready, but airlines are not</a></h5>
								<span><a href="#">NEPAL</a> <a href="#">date</a></span>
							</div>
						</aside>
					</div>
				</div>
			</div>
			
			<div class="container-fluid no-padding sports-block">
				<div class="container">
					<div class="section-header section-header2">
						<h3>Sports NEWS</h3>
					</div>
					<div class="row">				
						<div class="col-md-4 col-sm-6 col-xs-6 post-box">
							<div class="type-post">
								<div class="entry-cover"><a href="#"><img src="image/sport-post1.jpg" alt="Sports" /></a></div>
								<div class="entry-header">
									<h3 class="entry-title"><a href="#">DC beats mumbai by 3 run</a></h3>
								</div>
							</div>
						</div><!-- Post Box /- -->
						<!-- Post Box -->
						<div class="col-md-4 col-sm-6 col-xs-6 post-box">
							<div class="type-post">
								<div class="entry-header">
									<h3 class="entry-title"><a href="#">Barca beats real madrid by 5-1 goal</a></h3>
									
								</div>
								<div class="entry-cover"><a href="#"><img src="image/sport-post1.jpg" alt="Sports" /></a></div>
							</div>
						</div><!-- Post Box /- -->
						<!-- Post Box -->
						<div class="col-md-4 col-sm-6 col-xs-6 post-box">
							<div class="type-post">
								<div class="entry-cover"><a href="#"><img src="image/sport-post1.jpg" alt="Sports" /></a></div>
								<div class="entry-header">
									<h3 class="entry-title"><a href="#">Nepal wins three nation tri-series </a></h3>
									
								</div>
							</div>
						</div><!-- Post Box /- -->
						<!-- Post Box -->
						<div class="col-md-4 col-sm-6 col-xs-6 post-box">
							<div class="type-post">
								<div class="entry-header">
									<h3 class="entry-title"><a href="#">Nepal football team flight thailand for asia cup qualifier</a></h3>
									
								</div>
								<div class="entry-cover"><a href="#"><img src="image/sport-post1.jpg" alt="Sports" /></a></div>
							</div>
						</div><!-- Post Box /- -->
						<!-- Post Box -->
						<div class="col-md-4 col-sm-6 col-xs-6 post-box">
							<div class="type-post">
								<div class="entry-cover"><a href="#"><img src="image/sport-post1.jpg" alt="Sports" /></a></div>
								<div class="entry-header">
									<h3 class="entry-title"><a href="#">Qatar to provide visa for 180+ countries during world cup </a></h3>
									
								</div>
							</div>
						</div><!-- Post Box /- -->
						<!-- Post Box -->
						<div class="col-md-4 col-sm-6 col-xs-6 post-box">
							<div class="type-post">
								<div class="entry-header">
									<h3 class="entry-title"><a href="#">CSK loose four consecutive matches</a></h3>
									
								</div>
								<div class="entry-cover"><a href="#"><img src="image/sport-post1.jpg" alt="Sports" /></a></div>
							</div>
						</div><!-- Post Box /- -->
					</div><!-- Row /- -->
				</div><!-- Container /- -->
			</div><!-- Sports Post Block /- -->
			
			<!-- Categories Post Block -->
			<div class="container-fluid no-padding category-post-block">
				<!-- Container -->
				<div class="container">
					<!-- Row -->
					<div class="row">
						<!-- Category Box -->
						<div class="col-md-4 col-sm-6 col-xs-6 category-box">
							<!-- Section Header -->
							<div class="section-header section-header2 section-header3">
								
								<h3>INTERNATIONAL</h3>
							</div><!-- Section Header /- -->
							<div class="category-full-box">
								<div class="entry-cover"><a href="#"><img src="image/category-health.jpg" alt="Categories" /></a></div>
								<div class="entry-header">
									<h3 class="entry-title"><a href="#">Srilanka on financial crisis</a></h3>
									<div class="post-meta">
										<span><a href="#">Date </a></span>
										</span>
									</div>
								</div>
							</div>
							<div class="category-thumb-box">
								<div class="entry-cover"><a href="#"><img src="image/category-health-thumb1.jpg" alt="Categories" /></a></div>
								<div class="entry-header">
									<h3 class="entry-title"><a href="#">Human nasal might be superbug killer</a></h3>
									<div class="post-meta">
										<span><a href="#">May 12, 2016</a></span>
									</div>
								</div>
							</div>
							<div class="category-thumb-box">
								<div class="entry-cover"><a href="#"><img src="image/category-health-thumb1.jpg" alt="Categories" /></a></div>
								<div class="entry-header">
									<h3 class="entry-title"><a href="#">Climate change displacing the most vulnerable</a></h3>
									<div class="post-meta">
										<span><a href="#">Date</a></span>
									</div>
								</div>
							</div>
							
						</div><!-- Category Box /- -->
						
						<!-- Category Box -->
						<div class="col-md-4 col-sm-6 col-xs-6 category-box">
							<!-- Section Header -->
							<div class="section-header section-header2 section-header3">
								
								<h3>INTERNATIONAL</h3>
							</div><!-- Section Header /- -->
							<div class="category-full-box">
								<div class="entry-cover"><a href="#"><img src="image/category-health.jpg" alt="Categories" /></a></div>
								<div class="entry-header">
									<h3 class="entry-title"><a href="#">Shanghai Covid cases keep rising, food supply problems persist</a></h3>
									<div class="post-meta">
										<span><a href="#">date</a></span>
										</span>
									</div>
								</div>
							</div>
							<div class="category-thumb-box">
								<div class="entry-cover"><a href="#"><img src="image/category-health-thumb1.jpg" alt="Categories" /></a></div>
								<div class="entry-header">
									<h3 class="entry-title"><a href="#">Leclerc claims thumping win in Australia for Ferrari</a></h3>
									<div class="post-meta">
										<span><a href="#">date</a></span>
									</div>
								</div>
							</div>
							<div class="category-thumb-box">
								<div class="entry-cover"><a href="#"><img src="image/category-health-thumb1.jpg" alt="Categories" /></a></div>
								<div class="entry-header">
									<h3 class="entry-title"><a href="#">Tiger Woods' rollercoaster third round</a></h3>
									<div class="post-meta">
										<span><a href="#">date</a></span>
									</div>
								</div>
							</div>
							
						</div><!-- Category Box /- -->
						
						<!-- Category Box -->
						<div class="col-md-4 col-sm-6 col-xs-6 category-box">
							<!-- Section Header -->
							<div class="section-header section-header2 section-header3">
								<h3>INTERNATIONAL</h3>
							</div><!-- Section Header /- -->
							<div class="category-full-box">
								<div class="entry-cover"><a href="#"><img src="image/category-health.jpg" alt="Categories" /></a></div>
								<div class="entry-header">
									<h3 class="entry-title"><a href="#">Shanghai to New York in two hours? China joins the hypersonic flight race</a></h3>
									<div class="post-meta">
										<span><a href="#">date</a></span>
										
										
									</div>
								</div>
							</div>
							<div class="category-thumb-box">
								<div class="entry-cover"><a href="#"><img src="image/category-health-thumb1.jpg" alt="Categories" /></a></div>
								<div class="entry-header">
									<h3 class="entry-title"><a href="#">'Birtherism' to the 'Big Lie': Inside Obama's fight to counter </a></h3>
									<div class="post-meta">
										<span><a href="#">date</a></span>
									</div>
								</div>
							</div>
							<div class="category-thumb-box">
								<div class="entry-cover"><a href="#"><img src="image/category-health-thumb1.jpg" alt="Categories" /></a></div>
								<div class="entry-header">
									<h3 class="entry-title"><a href="#">Two GOP senators chose to disrespect Ketanji Brown Jackson. </a></h3>
									<div class="post-meta">
										<span><a href="#">date</a></span>
									</div>
								</div>
							</div>
							
						</div><!-- Category Box /- -->
					</div><!-- Row /- -->
				</div><!-- Container /- -->
			</div><!-- Categories Post Block /- -->
			
			

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
								<p> This is a project by Group 3 of L5CG4 </p>
								
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
									<li><a href="world.php" title="World">World</a></li>
									<li><a href="nepal.php" title="Nepal">Nepal</a></li>
									
								</ul>
								<ul>
									<li><a href="finance.php" title="Finance">Finance</a></li>
									<li><a href="sports.php" title="Sports">Sports</a></li>
									
								</ul>
							</div><!-- Link Widget /- -->
						</div><!-- Widget Block /- -->
					</div>
				</div><!-- Container /- -->
			</div>
		</footer>	

			
					
	
	</div>

	<!-- JQuery  -->
	<script src="js/jquery-1.12.4.min.js"></script>

	<!-- Library - Js -->
	<script src="libraries/lib.js"></script>
		
	<!-- RS5.0 Core JS Files -->
	<script type="text/javascript" src="revolution/js/jquery.themepunch.tools.min.js?rev=5.0"></script>
	<script type="text/javascript" src="revolution/js/jquery.themepunch.revolution.min.js?rev=5.0"></script>
	<script type="text/javascript" src="revolution/js/extensions/revolution.extension.actions.min.js"></script>
	<script type="text/javascript" src="revolution/js/extensions/revolution.extension.carousel.min.js"></script>
	<script type="text/javascript" src="revolution/js/extensions/revolution.extension.kenburn.min.js"></script>
	<script type="text/javascript" src="revolution/js/extensions/revolution.extension.layeranimation.min.js"></script>
	<script type="text/javascript" src="revolution/js/extensions/revolution.extension.migration.min.js"></script>
	<script type="text/javascript" src="revolution/js/extensions/revolution.extension.navigation.min.js"></script>
	<script type="text/javascript" src="revolution/js/extensions/revolution.extension.parallax.min.js"></script>
	<script type="text/javascript" src="revolution/js/extensions/revolution.extension.slideanims.min.js"></script>
	<script type="text/javascript" src="revolution/js/extensions/revolution.extension.video.min.js"></script>

	<!-- Library - Theme JS -->
	<script src="js/functions.js"></script>
	
</body>
</html>
