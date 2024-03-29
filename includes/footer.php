<div class="contact-section" id="contact">
			<div class="container">
				<div class="contact-section-grids">
					<div class="col-md-3 contact-section-grid wow fadeInLeft" data-wow-delay="0.4s">
						<h4>About FoodCubo</h4>
						<ul>
							<li><i class="point"></i></li>
							<li class="data"><a href="aboutus.php">About Us</a></li>
						</ul>
						<ul>
							<li><i class="point"></i></li>
							<li class="data"><a href="http://foodcubo.com/blog" target="_blank">Blog</a></li>
						</ul>
						<ul>
							<li><i class="point"></i></li>
							<li class="data"><a href="careers.php">Careers</a></li>
						</ul>
						
					</div>
					<div class="col-md-3 contact-section-grid wow fadeInLeft" data-wow-delay="0.4s">
						<h4>For Restaurants</h4>
						<ul>
							<li><i class="point"></i></li>
							<li class="data"><a href="restaurants_reg.php">Add a Restaurant</a></li>
						</ul>
						<ul>
							<li><i class="point"></i></li>
							<li class="data"><a href="#">Business App</a></li>
						</ul>
						<ul>
							<li><i class="point"></i></li>
							<li class="data"><a href="contact.php">Contact</a></li>
						</ul>

					</div>
					<div class="col-md-3 contact-section-grid wow fadeInRight" data-wow-delay="0.4s">
						<h4>Follow Us On...</h4>
						<ul>
							<li><i class="fb"></i></li>
							<li class="data"> <a href="https://facebook.com/foodcubo">  Facebook</a></li>
						</ul>
						<ul>
							<li><i class="tw"></i></li>
							<li class="data"> <a href="https://twitter.com/@foodcubo">Twitter</a></li>
						</ul>
						<ul>
							<li><i class="gp"></i></li>
							<li class="data"><a href="https://plus.google.com/u/0/110532383341903764214">Google Plus</a></li>
						</ul>
					</div>
					<div class="col-md-3 contact-section-grid nth-grid wow fadeInRight" data-wow-delay="0.4s">
						<h4>Subscribe Newsletter</h4>
						<p>To get latest updates and food deals every week</p>
						<input type="text" class="text" value="" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = '';}">
						<input type="submit" value="submit" onclick="alert('Thanks For subscription.');">
						</div>
					<div class="clearfix"></div>
				</div>
			</div>
		</div>
	</div>
	<!-- content-section-ends -->
	<!-- footer-section-starts -->
	<div class="footer">
		<div class="container">
			<p class="wow fadeInLeft" data-wow-delay="0.4s">&copy; <?php echo date('Y'); ?> FoodCubo LLP All rights  Reserved | &nbsp;<a href="partner.php">Partner With Us</a> | &nbsp;<a href="terms.php">Terms and Conditions</a>| &nbsp;<a href="privacy.php">Privacy Policy</a></p>
		</div>
	</div>
	<!-- footer-section-ends -->
	  <script type="text/javascript">
						$(document).ready(function() {
							/*
							var defaults = {
					  			containerID: 'toTop', // fading element id
								containerHoverID: 'toTopHover', // fading element hover id
								scrollSpeed: 1200,
								easingType: 'linear' 
					 		};
							*/
							
							$().UItoTop({ easingType: 'easeOutQuart' });
							
						});
					</script>
				<a href="#" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>
				