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
				<h3>Contact</h3>
				<p>Home/Contact</p>
			</div>
		</div>
		
		<div class="contact_top">
			 		<div class="container">
			 			<div class="col-md-6 contact_left wow fadeInRight" data-wow-delay="0.4s">
			 				<h4>Contact Form</h4>
			 				<p>
			 				Feel free to contact us anytime because we are always ready to serve you.
			 				</p>
							  <form method="POST" action="contact_script.php" enctype="multipart-formdata">
								 <div class="form_details">
					                 <input type="text" class="text" name="name" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Name';}" required="required"/>
									 <input type="text" class="text" name="email" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Email Address';}" required="required"/>
									 <input type="text" class="text" name="subject" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Subject';}" required="required"/>
									 <textarea name="message" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Message';}" required="required">Message</textarea>
									 <div class="clearfix"> </div>
									 <div class="sub-button wow swing animated" data-wow-delay= "0.4s">
									 	<input name="submit" type="submit" value="Send message">
									 </div>
						          </div>
						       </form>
					        </div>
					        <div class="col-md-6 company-right wow fadeInLeft" data-wow-delay="0.4s">
					        	<div class="contact-map">
			<iframe src="https://goo.gl/maps/Tj2v3k6ttyA2"> </iframe>
		</div>
      
	  <div class="company-right">
					        	<div class="company_ad">
							     		<h3>Contact Info</h3>
			      						<address>
											 <p>Email :<a href="mailto:info@example.com">foodcuboofficial@gmail.com</a></p>
											 <p>Phone : 9430256286</p>
									   		<p>146 Harijan Colony Grand Appartment Nehar Nagar	</p>
									   		<p>Boring Road Patna</p>
									   		<p>Pincde - 8000001</p>
									 	 	
							   			</address>
							   		</div>
									</div>	
									<div class="follow-us">
										<h3>Follow us on</h3>
										<a href="https://facebook.com/foodcubo"><i class="facebook"></i></a>
										<a href="https://twitter.com/@foodcubo"><i class="twitter"></i></a>
										<a href="https://plus.google.com/u/0/110532383341903764214"><i class="google-pluse"></i></a>
									</div>
			
							
							 </div>
						</div>
					</div>

	</div>
<?php include_once 'includes/footer.php'; ?>
</body>
</html>