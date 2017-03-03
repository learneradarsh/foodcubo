<!DOCTYPE html>
<html>
<head>
<title>Foodcubo || ContactUs</title>
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
				<h3>Welcome Restaurants For Register Yourself</h3>
				<p>Home/RestaurantRegistration</p>
			</div>
		</div>
		
		<div class="contact_top">
			 		<div class="container">
			 			<div class="col-md-12 contact_left wow fadeInRight" data-wow-delay="0.4s">
			 				<h4>Registration Form for Restaurants</h4>
			 				<h5>
			 				Offers Like as follows:
			 				</h5>
			 				<p>
			 					<h4>Mega Restaurants</h4>
			 					<ul type="disc">
			 					<li>First 199 Orders For Free</li>
			 					<li>Registration fee Rs.999/-</li>
			 					<li>Profit Margin 10% to 25%</li>
			 					</ul>
			 				</p>
			 				<p>
			 					<h4>Medium Restaurants</h4>
			 					<ul type="disc">
			 						<li>First Rs. 499 orders free</li>
			 						<li>Registration fee Rs.799/-</li>
			 						<li>Profit Margin 12% to 20%</li>
			 					</ul>
			 				</p>
			 				<p>
			 					<h4>Medium Restaurants</h4>
			 					<ul type="disc">
			 						<li>First Rs. 499 orders free</li>
			 						<li>Registration fee Rs.799/-</li>
			 						<li>Profit Margin 12% to 20%</li>
			 					</ul>
			 				</p>
			 				<p>
			 					<h4>Mini Restaurants</h4>
			 					<ul type="disc">
			 						<li>First Rs. 349 orders free</li>
			 						<li>Registration fee Rs.499/-</li>
			 						<li>Profit Margin 10% to 18%</li>
			 					</ul>
			 				</p>
			 				
							  <form method="POST" action="includes/register.php" enctype="multipart-formdata">
								 <div class="form-group">
					                 <input type="text" class="form-control" placeholder="Restaurant Name" name="res_name" required="required"/>
						          </div>
						          <div class="form-group">
						          	<input type="text" class="form-control" placeholder="Restaurant Location" name="res_loc" required="required"/>
						          </div>
						          <div class="form-group">
						          	<select class="form-control" name="res_type">
						          	<option selected="selected">Select your Restaurant Type</option>
						          	<option value="mega">Mega</option>
						          	<option value="medium">Medium</option>
						          	<option value="mini">Mini</option>
						          	</select>
						          </div>
						          <div class="form-group">
						          	<input type="email" class="form-control" name="res_email" placeholder="Email" required="required" />
						          </div>
						          <div class="form-group">
						          	<input type="tel" class="form-control" name="res_contact" placeholder="+91" required="required" />
						          </div>
						          <button type="submit" class="btn btn-success">Register</button>&nbsp;&nbsp;<button type="reset" class="btn btn-default">Reset</button>
						       </form>
					        </div>
					       
      
	  
									<div class="follow-us">
										<h3>follow us on</h3>
										<a href="#"><i class="facebook"></i></a>
										<a href="#"><i class="twitter"></i></a>
										<a href="#"><i class="google-pluse"></i></a>
									</div>
			
							
							 </div>
						</div>
					</div>

	</div>
<?php include_once 'includes/footer.php'; ?>
</body>
</html>