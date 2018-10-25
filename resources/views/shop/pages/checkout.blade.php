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
			<h1 class="text-center text-uppercase title-under">Checkout</h1>
		</div>
		<!-- /title -->
		<div class="row">
			<section class="col-md-6 col-lg-6">
				<!-- checkout-step -->
				<div class="panel-group" id="checkout">
					<div class="panel panel-checkout" role="tablist">
						<!-- panel heading -->
						<div class="panel-heading active" role="tab">
							<h4 class="panel-title"> <a role="button" data-toggle="collapse" href="#collapseOne">THÔNG TIN GIAO HÀNG</a> </h4>
							<div class="panel-heading__number">1</div>
						</div>
						<!-- /panel heading -->
						<!-- panel body -->
						<div id="collapseOne" class="panel-collapse collapse in" role="tabpanel">
							<div class="panel-body">
								<form action="checkout-step_submit" >
									<a class="pull-right link-functional" href="#">
										<span class="icon icon-create"></span>Edit
									</a>
									<div class="form-group">
										<label for="checkoutFormFirstName">Tên<sup>*</sup></label>
										<input type="text" class="form-control" id="checkoutFormFirstName">
									</div>
									<div class="form-group">
										<label for="checkoutFormLastName">Họ<sup>*</sup></label>
										<input type="text" class="form-control" id="checkoutFormLastName">
									</div>
									<div class="form-group">
										<label for="checkoutFormEmailAddress">Email<sup>*</sup></label>
										<input type="text" class="form-control" id="checkoutFormEmailAddress">
									</div>
									<div class="form-group">
										<label for="checkoutFormAddress1">Địa chỉ 1<sup>*</sup></label>
										<input type="text" class="form-control" id="checkoutFormAddress1">
									</div>
									<div class="form-group">
										<label for="checkoutFormAddress2">Địa chỉ 2</label>
										<input type="text" class="form-control" id="checkoutFormAddress2">
									</div>
									<div class="form-group">
										<label for="checkoutFormCity">Thành Phố<sup>*</sup></label>
										<input type="text" class="form-control" id="checkoutFormCity">
									</div>
									<div class="form-group">
										<label  for="checkoutFormState">Quận/Huyện<sup>*</sup></label>
										<select  id="checkoutFormState" class="form-control selectpicker "  data-style="select--ys"  data-width="100%">
										</select>
									</div>
									<div class="form-group">
										<label for="checkoutFormTelephone">SĐT<sup>*</sup></label>
										<input type="text" class="form-control" id="checkoutFormTelephone">
									</div>
									<span class="note pull-right">* Trường bắt buộc</span>
									<p class="btn-top">
										<a class="pull-right link-functional" href="#">
											<span class="icon icon-keyboard_arrow_left"></span>Quay lại
										</a>
										<button class="btn btn--ys" type="submit">Tiếp Tục</button>
									</p>	
								</form>
							</div>
						</div>
						<!-- /panel body -->
					</div>	              
				</div>
				<!-- /checkout-step -->
			</section>
			<aside class="col-md-6 col-lg-6 shopping_cart-aside">
				<!--  -->
				<div class="panel panel-checkout" role="tablist">
					<!-- panel heading -->
					<div class="panel-heading" role="tab">
						<h4 class="panel-title"> <a role="button" data-toggle="collapse" href="#collapseFive">Xem Trước</a> </h4>
						<div class="panel-heading__number">2</div>
					</div>
					<!-- /panel heading -->
					<!-- panel body -->
					<div id="collapseFive" class="panel-collapse collapse" role="tabpanel">
						<div class="panel-body">
							<p class="clearfix">
								<a class="pull-right link-functional link-functional-bottom" href="#">
									<span class="icon icon-create"></span>Edit
								</a>
							</p>
							<div class="clearfix"></div>
							<div class="btn-top">
								<!-- order-review-table -->
								<table class="order-review-table">
									<thead>
										<tr>
											<th>Sản phẩm</th>												
											<th>Giá</th>
											<th>Số lượng</th>
											<th>Thành tiền</th>												
										</tr>
									</thead>
									<tbody>
										<tr>												
											<td>
												<h5 class="order-review-table__product-name text-left text-uppercase">
													<a href="product.html">Mauris lacinia lectus</a>
												</h5>
												<ul class="order-review-table__list-parameters">
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
														<span>1</span>
													</li>
												</ul>																				
											</td>												
											<td>
												<div class="order-review-table__product-price unit-price">
													$28.00
												</div>
											</td>
											<td>
												<span class="color">1</span>
											</td>
											<td>
												<div class="order-review-table__product-price subtotal">
													$28.00
												</div>
											</td>												
										</tr>																			
										<tr>												
											<td>
												<h5 class="order-review-table__product-name text-left text-uppercase">
													<a href="product.html">Mauris lacinia lectus</a>
												</h5>
												<ul class="order-review-table__list-parameters">
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
														<span>1</span>
													</li>
												</ul>																				
											</td>												
											<td>
												<div class="order-review-table__product-price unit-price">
													$28.00
												</div>
											</td>
											<td>
												<span class="color">1</span>
											</td>
											<td>
												<div class="order-review-table__product-price subtotal">
													$28.00
												</div>
											</td>												
										</tr>
									</tbody>
								</table>
								<!-- /order-review-table -->
								<!-- order-review-total -->
								<div class="row clearfix">
									<div class="pull-right col-xl-6 col-lg-9 col-md-9 col-xs-12 btn-top">
										<div class="order-review-total">
											<table class="table-total">
												<tfoot>
													<tr>
														<th>Thành Tiền:</th>
														<td>$56.00</td>
													</tr>
												</tfoot>
											</table>
											<p class="clearfix text-right">
												<a href="#" class="btn btn--ys btn--xl">THANH TOÁN<span class="icon icon--flippedX icon-reply"></span></a>
											</p>
										</div>
									</div>
								</div>
								<!-- /order-review-total -->
							</div>
						</div>
					</div>
					<!-- /panel body -->
				</div>	


			</aside>
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
