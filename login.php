<!DOCTYPE html>
<html>
<head>
<title>FoodCubo || Login</title>
<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="js/jquery.min.js"></script>
<!-- Custom Theme files -->
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<!-- Custom Theme files -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!--webfont-->
<link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:200,300,400,600,700,900,200italic,300italic,400italic,600italic,700italic,900italic' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Lobster+Two:400,400italic,700,700italic' rel='stylesheet' type='text/css'>
<!--Animation-->
<script src="js/wow.min.js"></script>
<link href="css/animate.css" rel='stylesheet' type='text/css' />
<script>
	new WOW().init();
</script>
<script type="text/javascript" src="js/move-top.js"></script>
<script type="text/javascript" src="js/easing.js"></script>
<script type="text/javascript">
			jQuery(document).ready(function($) {
				$(".scroll").click(function(event){		
					event.preventDefault();
					$('html,body').animate({scrollTop:$(this.hash).offset().top},1200);
				});
			});
		</script>
<script src="js/simpleCart.min.js"> </script>	
</head>
<body>
<script src='../../../../ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js'></script>
<body>
<?php include_once 'includes/header.php'; ?>
	<!-- content-section-starts -->
	<div class="content">
	<div class="container">
		<div class="login-page">
			    <div class="dreamcrub">
			   	 <ul class="breadcrumbs">
                    <li class="home">
                       <a href="index-2.php" title="Go to Home Page">Home</a>&nbsp;
                       <span>&gt;</span>
                    </li>
                    <li class="women">
                       Login
                    </li>
                </ul>
                <ul class="previous">
                	<li><a href="index.php">Back to Previous Page</a></li>
                </ul>
                <div class="clearfix"></div>
			   </div>
			   <div class="account_grid">
			   <div class="col-md-6 login-left wow fadeInLeft" data-wow-delay="0.4s">
			  	 <h3>NEW CUSTOMERS</h3>
				 <p>By creating an account with our store, you will be able to move through the checkout process faster, store multiple shipping addresses, view and track your orders in your account and more.</p>
				 <a class="acount-btn" href="register.php">Create an Account</a>
			   </div>
			   <div class="col-md-6 login-right wow fadeInRight" data-wow-delay="0.4s">
			  	<h3>REGISTERED CUSTOMERS</h3>
				<p>If you have an account with us, please log in.</p>
				<form>
				  <div>
					<span>Email Address<label>*</label></span>
					<input type="text"> 
				  </div>
				  <div>
					<span>Password<label>*</label></span>
					<input type="password"> 
				  </div>
				  <a class="forgot" href="#">Forgot Your Password?</a>
				  <input type="submit" value="LOGIN" onclick="alert('Coming Soon.....');">
			    </form>
			   </div>	
			   <div class="clearfix"> </div>
			 </div>
		   </div>
</div>
<div class="special-offers-section">
			<div class="container">
				<div class="special-offers-section-head text-center dotted-line">
					<h4>Special Offers</h4>
				</div>
				<div class="special-offers-section-grids">
				 <div class="m_3"><span class="middle-dotted-line"> </span> </div>
				   <div class="container">
					  <ul id="flexiselDemo3">
						<li>
							<div class="offer">
								<div class="offer-image">	
									<img src="images/moose.jpg" class="img-responsive" alt=""/>
								</div>
								<div class="offer-text">
									<h4>Mosse Cake Combo of 3</h4>
									<p>It's delicious grab it. </p>
									<input type="button" value="Grab It">
									<span></span>
								</div>
								<div class="clearfix"></div>
							</div>
						</li>
						<li>
							<div class="offer">
								<div class="offer-image">	
									<img src="images/chicken_lolipop.jpg" class="img-responsive" alt=""/>
								</div>
								<div class="offer-text">
									<h4>Chicken Jumbo</h4>
									<p>It's delicious grab it. </p>
									<input type="button" value="Grab It">
									<span></span>
								</div>
								<div class="clearfix"></div>
							</div>
						</li>
						<li>
							<div class="offer">
								<div class="offer-image">	
									<img src="images/lollipop.jpg" class="img-responsive" alt=""/>
								</div>
								<div class="offer-text">
									<h4>Chees Cake Lollipop Combo</h4>
									<p>It's delicious grab it </p>
									<input type="button" value="Grab It">
									<span></span>
								</div>
								
								<div class="clearfix"></div>
								</div>
						</li>
						<li>
							<div class="offer">
								<div class="offer-image">	
									<img src="images/moose.jpg" class="img-responsive" alt=""/>
								</div>
								<div class="offer-text">
									<h4>Mosse Cake Combo of 4</h4>
									<p>It's delicious grab it. </p>
									<input type="button" value="Grab It">
									<span></span>
								</div>
								
								<div class="clearfix"></div>
								</div>
					    </li>
					 </ul>
				 <script type="text/javascript">
					$(window).load(function() {
						
						$("#flexiselDemo3").flexisel({
							visibleItems: 3,
							animationSpeed: 1000,
							autoPlay: true,
							autoPlaySpeed: 3000,    		
							pauseOnHover: true,
							enableResponsiveBreakpoints: true,
							responsiveBreakpoints: { 
								portrait: { 
									changePoint:480,
									visibleItems: 1
								}, 
								landscape: { 
									changePoint:640,
									visibleItems: 2
								},
								tablet: { 
									changePoint:768,
									visibleItems: 3
								}
							}
						});
						
					});
				    </script>
				    <script type="text/javascript" src="js/jquery.flexisel.js"></script>
				</div>
			</div>
		</div>
		</div>
	
<?php include_once 'includes/footer.php'; ?>
</body>
</html>
