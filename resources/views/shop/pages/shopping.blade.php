<!DOCTYPE html>
<html lang="en">
<head>
	<!-- Basic -->
	<meta charset="utf-8">
	<title>T3 Store - Quality is Our Top Priority</title>
	<meta name="keywords" content="HTML5 Template" />
	<meta name="description" content="T3 Store - Quality is Our Top Priority">
	<meta name="author" content="etheme.com">
	<link rel="shortcut icon" href="favicon.ico">
	<base href="{{asset('')}}shop_asset/">
	<!-- Mobile Specific Metas -->
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- External Plugins CSS -->
	<link rel="stylesheet" href="external/slick/slick.css">
	<link rel="stylesheet" href="external/slick/slick-theme.css">
	<link rel="stylesheet" href="external/magnific-popup/magnific-popup.css">
	<link rel="stylesheet" href="external/nouislider/nouislider.css">
	<link rel="stylesheet" href="external/bootstrap-select/bootstrap-select.css">
	<!-- Custom CSS -->
	<link rel="stylesheet" href="css/style.css">
	<!-- Icon Fonts  -->
	<link rel="stylesheet" href="font/style.css">
	<!-- Head Libs -->
	<!-- Modernizr -->
	<script src="external/modernizr/modernizr.js"></script>

</head>
<body>
	<div id="loader-wrapper">
		<div id="loader">
			<div class="dot"></div>
			<div class="dot"></div>
			<div class="dot"></div>
			<div class="dot"></div>
			<div class="dot"></div>
			<div class="dot"></div>
			<div class="dot"></div>
			<div class="dot"></div>
		</div>
	</div>
	<!-- Back to top -->
	<div class="back-to-top"><span class="icon-keyboard_arrow_up"></span></div>
	<!-- /Back to top -->
	<!-- mobile menu -->
	<div class="hidden">
		@include('shop.parts.mobile-navbar')
	</div>			
	<!-- /mobile menu -->
	<!-- HEADER section -->
	
	<div class="header-wrapper">
		<header id="header" class="header-layout-06">
			<div class="container">
				<div class="row">
					<div class="col-xl-3">
						<!-- logo start --> 
						<a href="{{ asset('shop') }}"><img class="logo replace-2x img-responsive" src="images/custom/layout11/logo.png" alt=""/></a> 
						<!-- logo end --> 
					</div>
					<div class="col-xl-7 col-lg-push-12 text-center">							
						<div class="stuck-nav">
							<div class="container">
								<!-- navigation start -->
								<div class="col-stuck-menu">
									<nav class="navbar">
										<div class="responsive-menu mainMenu">									
											<!-- Mobile menu Button-->
											<div class="col-xs-2 visible-mobile-menu-on">
												<div class="expand-nav compact-hidden">
													<a href="#off-canvas-menu" class="off-canvas-menu-toggle">
														<div class="navbar-toggle"> 
															<span class="icon-bar"></span> 
															<span class="icon-bar"></span> 
															<span class="icon-bar"></span> 
															<span class="menu-text">MENU</span> 
														</div>
													</a>
												</div>
											</div>
											<!-- //end Mobile menu Button -->
											@include('shop.parts.navbar')
										</div>
									</nav>
								</div>
								<!-- /navigation end -->
								<!-- shopping cart start -->
								@include('shop.parts.shopping-mobile')
								<!-- shopping cart end -->	
							</div>	
						</div>							
					</div>

				</div>
				<div class="pull-right  col-lg-pull-3 col-md-3  col-xl-2 alignment-extra">
					<div class="text-right">
						<!-- search start -->
						<div class="search link-inline">
							<a href="#" class="search__open"><span class="icon icon-search"></span></a>
							<div class="search-dropdown">
								<form  action="#" method="get">
									<div class="input-outer">
										<input  type="search" name="search" value="" maxlength="128" placeholder="SEARCH:">
										<button type="submit" title="" class="icon icon-search"></button>
									</div>
									<a href="#" class="search__close"><span class="icon icon-close"></span></a>									
								</form>
							</div>
						</div>
						<!-- search end -->			
						<!-- account menu start -->
						<!-- account menu end -->
						<!-- icon toggle menu -->
						<!-- /icon toggle menu -->
						<!-- shopping cart start -->
						@include('shop.parts.shopping-pc')
						<!-- shopping cart end -->			
					</div>
				</div>
			</div>
		</div>			
	</header>
</div>
<!-- End HEADER section -->
<!-- breadcrumbs -->
<div class="breadcrumbs">
	<div class="container">
		<ol class="breadcrumb breadcrumb--ys pull-left">
			<li class="home-link"><a href="index.html" class="icon icon-home"></a></li>					
			<li><a href="#">Checkout</a></li>
		</ol>
	</div>
</div>
<!-- /breadcrumbs --> 
<!-- CONTENT section -->

<div id="pageContent">
	<div class="container">				
		<!-- title -->
		<div class="title-box">
			<h1 class="text-center text-uppercase title-under">SHOPPING CART</h1>
		</div>
		<!-- /title -->		
		<!-- Shopping cart table -->
		<div class="container-widget">
			<table class="shopping-cart-table">
				<thead>
					<tr>
						<th>Product</th>
						<th>&nbsp;</th>
						<th>&nbsp;</th>
						<th>Unit Price</th>
						<th>Qty</th>
						<th>Subtotal</th>
						<th>&nbsp;</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td>
							<div class="shopping-cart-table__product-image">
								<a href="product.html">
									<img class="img-responsive" src="images/product/product-4.jpg" alt="">
								</a>
							</div>
						</td>
						<td>
							<h5 class="shopping-cart-table__product-name text-left text-uppercase">
								<a href="product.html">Mauris lacinia lectus</a>
							</h5>
							<ul class="shopping-cart-table__list-parameters">
								<li>
									<span>Color:</span> Purple
								</li>
								<li>
									<span>Quantity:</span> 200
								</li>
								<li>
									<span>Image:</span> No
								</li>
								<li>
									<span>Paper:</span> Type Linen 
								</li>
								<li>
									<span>Size:</span> 4"x3.5"
								</li>
								<li class="visible-xs">
									<span>Price:</span>
									<span class="price-mobile">$28.00</span>
								</li>
								<li class="visible-xs">
									<span>Qty:</span>
									<!--  -->
									<div class="number input-counter">
										<span class="minus-btn"></span>
										<input type="text" value="1" size="5"/>
										<span class="plus-btn"></span>
									</div>
									<!-- / -->
								</li>
							</ul>																				
						</td>
						<td>
							<a class="shopping-cart-table__create icon icon-create " href="#"></a>
							<a class="shopping-cart-table__delete icon icon-delete visible-xs" href="#"></a>
						</td>
						<td>
							<div class="shopping-cart-table__product-price unit-price">
								$28.00
							</div>
						</td>
						<td>
							<div class="shopping-cart-table__input">
								<!--  -->
								<div class="number input-counter">
									<span class="minus-btn"></span>
									<input type="text" value="1" size="5"/>
									<span class="plus-btn"></span>
								</div>
								<!-- / -->
							</div>								
						</td>
						<td>
							<div class="shopping-cart-table__product-price subtotal">
								$28.00
							</div>
						</td>
						<td>
							<a class="shopping-cart-table__delete icon icon-clear" href="#"></a>
						</td>
					</tr>								
					<tr>
						<td>
							<div class="shopping-cart-table__product-image">
								<a href="product.html">
									<img class="img-responsive" src="images/product/product-4.jpg" alt="">
								</a>
							</div>
						</td>
						<td>
							<h5 class="shopping-cart-table__product-name text-left text-uppercase">
								<a href="product.html">Mauris lacinia lectus</a>
							</h5>
							<ul class="shopping-cart-table__list-parameters">
								<li>
									<span>Color:</span> Purple
								</li>
								<li>
									<span>Quantity:</span> 200
								</li>
								<li>
									<span>Image:</span> No
								</li>
								<li>
									<span>Paper:</span> Type Linen 
								</li>
								<li>
									<span>Size:</span> 4"x3.5"
								</li>
								<li class="visible-xs">
									<span>Price:</span>
									<span class="price-mobile">$28.00</span>
								</li>
								<li class="visible-xs">
									<span>Qty:</span>
									<!--  -->
									<div class="number input-counter">
										<span class="minus-btn"></span>
										<input type="text" value="1" size="5"/>
										<span class="plus-btn"></span>
									</div>
									<!-- / -->
								</li>
							</ul>																				
						</td>
						<td>
							<a class="shopping-cart-table__create icon icon-create " href="#"></a>
							<a class="shopping-cart-table__delete icon icon-delete visible-xs" href="#"></a>
						</td>
						<td>
							<div class="shopping-cart-table__product-price unit-price">
								$28.00
							</div>
						</td>
						<td>
							<div class="shopping-cart-table__input">
								<!--  -->
								<div class="number input-counter">
									<span class="minus-btn"></span>
									<input type="text" value="1" size="5"/>
									<span class="plus-btn"></span>
								</div>
								<!-- / -->
							</div>								
						</td>
						<td>
							<div class="shopping-cart-table__product-price subtotal">
								$28.00
							</div>
						</td>
						<td>
							<a class="shopping-cart-table__delete icon icon-clear" href="#"></a>
						</td>
					</tr>
				</tbody>
			</table>
		</div>
		<!-- /Shopping cart table -->
		<div class="divider divider--xs"></div>
		<div class="clearfix shopping-cart-btns">
			<a class="btn btn--ys btn--light pull-right" href="#"><span class="icon icon-autorenew"></span>UPDATE SHOPPING CART</a>
			<div class="divider divider--xs visible-xs"></div>
			<a class="btn btn--ys btn--light" href="#"><span class="icon icon-delete"></span>CLEAR SHOPPING CART</a> 
			<div class="divider divider--xs visible-xs"></div>
			<a class="btn btn--ys btn--light pull-left btn-right" href="#"><span class="icon icon-keyboard_arrow_left"></span>CONTINUE SHOPPING </a>         
			<div class="divider divider--xs visible-xs"></div>   	
			
		</div>		        
		<div class="divider--md"></div>
		<div class="row">
			<div class="col-md-4">
				<div class="card card--padding">
					<h4>ESTIMATE SHIPPING AND TAX</h4>
					<p>Enter your destination to get a shipping estimate.</p>
					<form>
						<div class="form-group">
							<label  for="selectCountry">Country <sup>*</sup></label>
							<select  id="selectCountry" class="form-control selectpicker "  data-style="select--ys"  data-width="100%">					                   
								<option>Austria </option>
								<option>Belgium</option>
								<option>Cyprus </option>
								<option>Croatia </option>
								<option>Czech Republic </option>
								<option>Denmark </option>
								<option>Finland </option>
								<option>France </option>
								<option>Germany </option>
								<option>Greece </option>
								<option>Hungary </option>
								<option>Ireland </option>
								<option>France </option>
								<option>Italy </option>
								<option>Luxembourg </option>
								<option>Netherlands </option>
								<option>Poland </option>
								<option>Portugal </option>
								<option>Slovakia </option>
								<option>Slovenia </option>
								<option>Spain </option>
								<option>United Kingdom </option>
							</select>									
						</div>									
						<div class="form-group">
							<label  for="selectState">State/Province <sup>*</sup></label>
							<select  id="selectState" class="form-control selectpicker "  data-style="select--ys"  data-width="100%">										
								<option>State/Province </option>
								<option>Austria </option>
								<option>Belgium</option>
								<option>Cyprus </option>
								<option>Croatia </option>
								<option>Czech Republic </option>
								<option>Denmark </option>
								<option>Finland </option>
								<option>France </option>
								<option>Germany </option>
								<option>Greece </option>
								<option>Hungary </option>
								<option>Ireland </option>
								<option>France </option>
								<option>Italy </option>
								<option>Luxembourg </option>
								<option>Netherlands </option>
								<option>Poland </option>
								<option>Portugal </option>
								<option>Slovakia </option>
								<option>Slovenia </option>
								<option>Spain </option>
								<option>United Kingdom </option>
							</select>
						</div>
						<div class="form-group">
							<label for="inputCity">City</label>
							<input type="text" class="form-control" id="inputCity">
						</div>
						<div class="form-group">
							<label for="inputZip">Zip/Postal Code</label>
							<input type="text" class="form-control" id="inputZip">
						</div>
						<button type="submit" class="btn btn-top btn--ys btn--light">Get a quote</button>
					</form>
				</div>
			</div>
			<div class="divider--md visible-sm visible-xs"></div>
			<div class="col-md-4">
				<div class=" card card--padding">
					<h4>DISCOUNT CODES</h4>
					<form>
						<div class="form-group">
							<label for="inputDiscountCodes">Enter your coupon code if you have one.</label>
							<input type="text" class="form-control" id="inputDiscountCodes">
						</div>
						<button type="submit" class="btn btn--ys btn-top btn--light">apply coupon</button>
					</form>	
				</div>
			</div>
			<div class="divider--md visible-sm visible-xs"></div>
			<div class="col-md-4">
				<div class="card card--padding">
					<table class="table-total">
						<tbody>
							<tr>
								<th class="text-left">Subtotal:</th>
								<td class="text-right">$28.00</td>
							</tr>
							<tr>
								<th class="text-left">Tax:</th>
								<td class="text-right">$28.00</td>
							</tr>
						</tbody>
						<tfoot>
							<tr>
								<th>GRAND TOTAL:</th>
								<td>$56.00</td>
							</tr>
						</tfoot>
					</table>
					<a href="#" class="btn btn--ys btn--full btn--xl">PROCEED TO CHECKOUT <span class="icon icon--flippedX icon-reply"></span></a>
					<div class="text-right link-top">
						<a class="link-underline" href="#">Checkout with Multiple Addresses</a>
					</div>
				</div>
			</div>
		</div>				
	</div>
</div>
<!-- End CONTENT section --> 
<!-- FOOTER section -->
@include('shop.parts.footer')
<!-- END FOOTER section -->
<!-- External JS --> 
<!-- jQuery 1.10.1--> 
<script src="external/jquery/jquery-2.1.4.min.js"></script> 
<!-- Bootstrap 3--> 
<script src="external/bootstrap/bootstrap.min.js"></script> 
<!-- Specific Page External Plugins --> 
<script src="external/slick/slick.min.js"></script>
<script src="external/bootstrap-select/bootstrap-select.min.js"></script>  
<script src="external/countdown/jquery.plugin.min.js"></script> 
<script src="external/countdown/jquery.countdown.min.js"></script> 		
<script src="external/instafeed/instafeed.min.js"></script> 
<script src="external/magnific-popup/jquery.magnific-popup.min.js"></script> 
<script src="external/nouislider/nouislider.min.js"></script>
<script src="external/isotope/isotope.pkgd.min.js"></script> 
<script src="external/imagesloaded/imagesloaded.pkgd.min.js"></script>
<script src="external/colorbox/jquery.colorbox-min.js"></script>
<!-- Custom --> 
<script src="js/custom.js"></script> 		

<!-- Google map -->
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?sensor=false"></script>
<script src="external/google_map/google_map_init.js"></script>


</body>
</html>
