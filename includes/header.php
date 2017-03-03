<!-- header-section-starts -->
	<div class="header">
		<div class="container">
			<div class="top-header">
				<div class="logo">
					<a href="index.php"><h2>FoodCubo</h2></a>
					<p class="text-center"><h5>Getting Hungry !!!! Just Let Us Know</h5></p>
				</div>
				<div class="queries">
					<p>Questions? Call us Toll-free!<span>1800-0000-0000</span><label>(11AM to 11PM)</label></p>

				</div>
				<div class="header-right">
						<div class="cart box_1">
							<a href="checkout.php">
								<h3> <span class="simpleCart_total"> $0.00 </span> (<span id="simpleCart_quantity" class="simpleCart_quantity"> 0 </span> items)<img src="images/bag.png" alt=""></h3>
							</a>	
							<p><a href="javascript:;" class="simpleCart_empty">Empty card</a></p>
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
						<li class="active"><a href="index.php" class="scroll">Home</a></li>
						<li><a href="restaurants.php">Popular Restaurants</a></li>|
						<li><a href="order.php">Order</a></li>|
						<li><a href="contact.php">contact</a></li>
						<div class="clearfix"></div>
					</ul>
				</div>
				<div class="login-section">
					<ul>
						<li><a href="login.php">Login</a>  </li> |
						<li><a href="restaurants_reg.php">Register</a> </li> |
						<li><a href="#">Help</a></li>
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
						<h1>Network of over 5000 Restaurants</h1>
						<div class="line">
							<h2> To Order Online</h2>
						</div>
					</div>
					<div class="form-list wow fadeInRight" data-wow-delay="0.5s">
						<form>
						  <ul class="navmain">
							<li><span>Location Name</span>
							 <input type="text" class="text" value="Secunderabad" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Secunderabad';}">
							</li>
							<li><span>Restaurant Name</span>
							 <input type="text" class="text" value="Swagath Grand" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Swagath Grand';}">
							</li>
							<li><span>Cuisine Name</span>
							 <input type="text" class="text" value="Chicken Biriyani" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Chicken Biriyani';}">
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
					
				</div>
			</div>
		</div>
	</div>
	<!-- header-section-ends -->