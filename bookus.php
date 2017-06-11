<!DOCTYPE html>
<html>
<head>
<title>Foodcubo || Registration Deals</title>
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
				<h3>Book Us for any type of Function</h3>
				<p>We'll provide you good service in  low cost.</p>
			</div>
		</div>
		
		<div class="contact_top">
			 		<div class="container">
			 			<div class="col-md-12 contact_left wow fadeInRight" data-wow-delay="0.4s">
			 				<h4>Please fill your information below:</h4>
			 				
			 				
							  <form method="POST" action="bookus_script.php" enctype="multipart-formdata">
								 <div class="form-group">
					                 <input type="text" class="form-control" placeholder="Enter Your Name" name="cust_name" required="required"/>
						          </div>
						          <div class="form-group">
						          	<select class="form-control" name="fun_type">
						          	<option selected="selected">Select your Function Type</option>
						          	<option value="mega">Saadi</option>
						          	<option value="medium">Sagai</option>
						          	<option value="mini">B'day Party</option>
						          	<option value="mini">Any Other function</option>
						          	</select>
						          </div>
						          <div class="form-group">
						          	<input type="number" class="form-control" name="cust_budget" placeholder="Budget for function" required="required" />
						          </div>
						          <div class="form-group">
						          	<input type="tel" class="form-control" name="cust_contact" placeholder="+91" required="required" />
						          </div>
						          <button type="submit" class="btn btn-success">Register</button>&nbsp;&nbsp;<button type="reset" class="btn btn-default">Reset</button>
						       </form>
					        </div>
					        <p>
			 					<h3>To opt for other Package than above, Contact Us</h3>
			 					
			 				</p>
					       
      
	  
									<div class="follow-us">
										<h3>Follow us on</h3>
										<a href="https://facebook.com/foodcubo"><i class="facebook"></i></a>
										<a href="https://twitter.com/@FoodCubo1"><i class="twitter"></i></a>
										<a href="https://plus.google.com/u/0/110532383341903764214"><i class="google-pluse"></i></a>
									</div>
			
							
							 </div>
						</div>
					</div>

	</div>
<?php include_once 'includes/footer.php'; ?>
</body>
</html>