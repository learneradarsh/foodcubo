<!DOCTYPE html>
<html>
<head>
<title>Foodcubo || Restaurants</title>
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
	<div class="Popular-Restaurants-content">
		<div class="Popular-Restaurants-grids">
			<div class="container">
				<div class="Popular-Restaurants-grid wow fadeInRight" data-wow-delay="0.4s">
					<div class="col-md-3 restaurent-logo">
						<img src="images/restaurent-logo1.jpg" class="img-responsive" alt="" />
					</div>
					<div class="col-md-2 restaurent-title">
						<div class="logo-title">
							<h4><a href="#">pizza hut</a></h4>
						</div>
						<div class="rating">
							<span>ratings</span>
							<a href="#"> <img src="images/star1.png" class="img-responsive" alt="">(004)</a>
						</div>
					</div>
					<div class="col-md-7 buy">
						<a class="morebtn hvr-rectangle-in" href="orders-list.php">SHOP FROM HERE</a>
					</div>
					<div class="clearfix"></div>
				</div>
				<div class="Popular-Restaurants-grid wow fadeInLeft" data-wow-delay="0.4s">
					<div class="col-md-3 restaurent-logo">
						<img src="images/restaurent-logo2.jpg" class="img-responsive" alt="" />
					</div>
					<div class="col-md-2 restaurent-title">
						<div class="logo-title logo-title-1">
							<h4><a href="#">Subway</a></h4>
						</div>
						<div class="rating">
							<span>ratings</span>
							<a href="#"> <img src="images/star2.png" class="img-responsive" alt="">(005)</a>
						</div>
					</div>
					<div class="col-md-7 buy">
						<a class="morebtn hvr-rectangle-in" href="orders-list.php">SHOP FROM HERE</a>
					</div>
					<div class="clearfix"></div>
				</div>
			</div>
		</div>
	</div>
	
	<?php include_once 'includes/footer.php'; ?>
</body>
</html>