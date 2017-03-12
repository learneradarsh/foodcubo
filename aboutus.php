<!DOCTYPE html>
<html>
<head>
<title>Foodcubo || AboutUs</title>
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

<body>
<?php include_once 'includes/header.php'; ?>
    	<div class="contact-section-page">
		<div class="contact-head">
		    <div class="container">
				<h3>About Us</h3>
				<p>Home/AboutUs</p>
			</div>
		</div>
		
		
			 		<div class="container" style="margin-top: 50px;">
			 			
			 			<div class="row">
       <div class="col-md-4 thumbnail">
         <img class="img-circle" src="images/" alt="Generic placeholder image" width="140" height="140" style="margin-top: 28px">
         <h2 align="center">Shanu Kumar</h2>
         <p style="text-align:justify" margin-left=5px:margin-right=5px>
         	Founder
         </p>
         <p><a class="btn btn-default" href="https://www.facebook.com/" role="button" target="_blank">View details &raquo;</a></p>
       </div><!-- /.col-lg-4 -->
       <div class="col-md-4 thumbnail" >
         <img class="img-circle" src="images/" alt="Generic placeholder image" width="140" height="140">
         <h2 align="center">Rohit</h2>
         <p>
         	CFO
         </p>
         <p><a class="btn btn-default" href="https://www.facebook.com/" role="button" target="_blank">View details &raquo;</a></p>
       </div><!-- /.col-lg-4 -->
       <div class="col-md-4 thumbnail" >
         <img class="img-circle" src="images/" alt="Generic placeholder image" width="140" height="140">
         <h2 align="center">Aditya</h2>
         <p>
         	CCO
         </p>
         <p><a class="btn btn-default" href="https://www.facebook.com/" role="button" target="_blank">View details &raquo;</a></p>
       </div><!-- /.col-lg-4 -->
     </div><!-- /.row -->
			<div class="row">
			<div class="col-md-4"></div>
			<div class="col-md-4 thumbnail" >
         <img class="img-circle" src="images/" alt="Generic placeholder image" width="140" height="140">
         <h2 align="center">Adarsh Learner</h2>
         <p>CTO</p>
         <p><a class="btn btn-default" href="https://learner.github.io" role="button" target="_blank">View details &raquo;</a></p>
       </div>
       <div class="col-md-4"></div>
			</div>			
					</div>
		</div>
			</div>

	</div>
<?php include_once 'includes/footer.php'; ?>
</body>
</html>