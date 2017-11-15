 <style>
      .location {
        height: 30px;
        padding-left: 10px;
        border-radius: 4px;
        border: 1px solid rgb(186, 178, 178);
        box-shadow: 0px 0px 12px #EFEFEF;
      }
    </style>
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDAZN7ERsvhNWJjO4AWv6vILYD0ULoNl1Y=places"></script>
<!-- header-section-starts -->
	<div class="header">
		<div class="container">
			<div class="top-header">

				<div class="logo">
					<a href="index.php"><center><h1>Food<a href="index.php"><img src="images/food.png" style="width: 120px; height: 70px; position: relative; left: 0px; top: 5px;" alt="">ubo</a></h1></center></a>
					<p class="text-center"><center>
					<h5 style="margin-top: 20px;">Experience yourself inside a Cube of Food!</h5></center></p>

				</div>
				
				<div class="queries">
					<p>Questions? Ping Us<span>9430256286/9334077555</span><label></label></p>

				</div>
				<div class="header-right">
						<div class="cart box_1">
							<a href="checkout.php">
								<h3> <span class="simpleCart_total"> Rs. 0.0 </span> (<span id="simpleCart_quantity" class="simpleCart_quantity"> 0 </span> items)<img src="images/bag.png" alt=""></h3>
							</a>	
							<p><a href="javascript:;" class="simpleCart_empty">Empty Cart</a></p>
							<div class="clearfix"> </div>
						</div>
					</div>
				<div class="clearfix"></div>
			</div>
		</div>
		
			<div class="menu-bar">
			<div class="container">
				<div class="top-menu">
					<ul>
						<li class="active"><a href="index.php">Home</a></li>
						<li><a href="restaurants.php">Restaurants with Us</a></li>|
						<!--li><a href="order.php">Order</a></li>|-->
						<li><a href="bookus.php">Book Us</a></li>|
						<li><a href="contact.php">contact</a></li>
						<div class="clearfix"></div>
					</ul>
				</div>
				<div class="login-section">
					<ul>
						<li><a href="restaurants_reg.php">Register As a Restaurant</a> </li> |
						<li><a href="register.php">Register As a User</a> </li> |
						<li><a href="teefinsup.php">Register As a Teffin Supplier</a> </li> |
						<li><a href="login.php">Login</a>  </li> |
						<div class="clearfix"></div>
					</ul>
				</div>
				<div class="clearfix"></div>
			</div>
		</div>
		<div class="banner wow fadeInUp" data-wow-delay="0.4s" id="Home">
		    <div class="container">
				<div class="banner-info">
					<div class="banner-info-head text-center wow fadeInLeft" data-wow-delay="0.5s">
						<h1>Network of over 100 Restaurants</h1>
						<div class="line">
							<h2> To Order Online</h2>
						</div>
					</div>
					<div class="form-list wow fadeInRight" data-wow-delay="0.5s">
						<form>
						  <ul class="navmain">
							<li><span>Location Name</span>
							 <input type="text" class="text" value="" onfocus="this.value = '';" id="autocomplete" class="location">
							</li>
							<li><span>Restaurant Name</span>
							 <input type="text" class="text" value="Swagath Grand">
							</li>
							<li><span>Cuisine Name</span>
							 <input type="text" class="text" value="Chicken Biriyani">
						    </li>
						  </ul>
						</form>
						</div>
					<!-- start search-->
		 <div class="main-search">
	        <form action="https://p.w3layouts.com/demos/food_template/web/search.php">
	           <input type="text" value="Search" onFocus="this.value = '';" onBlur="if (this.value == '') {this.value = 'Search';}" class="text"/>
	            <input type="submit" value=""/>
	        </form>
	        <div class="close"><img src="images/cross.png" /></div>
	    </div>
	    <div class="srch"><button></button></div>
		<script type="text/javascript">
	         $('.main-search').hide();
	        $('button').click(function (){
	            $('.main-search').show();
	            $('.main-search text').focus();
	        }
	        );
	        $('.close').click(function(){
	            $('.main-search').hide();
	        });
	    </script>
	    <script>
      var input = document.getElementById('autocomplete');
      var autocomplete = new google.maps.places.Autocomplete(input);
    </script>
					
				</div>
			</div>
		</div>
	</div>
	<!-- header-section-ends -->