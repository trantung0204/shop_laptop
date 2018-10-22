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
		@include('shop.parts.mobile-navbar')			
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
					<li class="active">Liên Hệ</li>
				</ol>
			</div>
		</div>
		<!-- /breadcrumbs --> 
		<!-- CONTENT section -->
		
		<div id="pageContent">
			<!-- map -->
			<div class="content-bottom">
				<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3725.319847236282!2d105.78519026488254!3d20.97981218602485!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3135accde64f515b%3A0x8635163e12717d64!2zVHLhuqduIFBow7osIFbEg24gUXXDoW4sIEjDoCDEkMO0bmcsIEjDoCBO4buZaSwgVmnhu4d0IE5hbQ!5e0!3m2!1svi!2s!4v1540192978939" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
			</div>				
			<!-- /map -->
			<section class="container">				
				<div class="row">
					<div class="col-md-3 col-sm-12">
						<h2 class="text-uppercase title-bottom">Liên Hệ</h2>
						<ul class="list-icon">
							<li>
								<span class="icon icon-home"></span>
								<strong>Địa chỉ :</strong> Đường Trần Phú, Quận Hà Đông, Thành phố Hà Nội
							</li>
							<li>
								<span class="icon icon-call"></span>
								<strong>SĐT:</strong> +84123456789
							</li>
							<li>
								<span class="fa fa-fax"></span>
								<strong>Fax:</strong> +84123456789
							</li>
							<li>
								<span class="icon icon-schedule"></span>
								<strong>Giờ làm việc:</strong> Tất cả các ngày trong tuần (trừ ngày lễ)
								Bắt đầu từ 9:00 sáng - 9:00 chiều
							</li>
							<li>
								<span class="icon icon-mail"></span>
								<strong>E-mail:</strong> <a class="color" href="t3store@gmail.com">t3store@gmail.com</a>
							</li>
						</ul>
						<div class="divider divider--sm"></div>
					</div>
					<div class="col-md-9  col-sm-12">
						<div class="divider divider--lg visible-xs"></div>
						<h2 class="text-uppercase title-bottom">Gửi tin nhắn với chúng tôi</h2>
						<form action="#" class="contact-form">
							<!-- input -->
							<div class="row">
								<div class="col-md-4">
									<div class="form-group">
									    <label for="inputName">Tên của bạn <sup>*</sup></label>
									    <input type="text" class="form-control" id="inputName">
									  </div>
								</div>
								<div class="col-md-4">
									<div class="form-group">
									    <label for="inputEmail">Email <sup>*</sup></label>
									    <input type="email" class="form-control" id="inputEmail">
									  </div>
								</div>
								<div class="col-md-4">
									<div class="form-group">
									    <label for="inputPhone">Số điện thoại </label>
									    <input type="text" class="form-control" id="inputPhone">
									  </div>
								</div>
							</div>
							<!-- /input -->
							<!-- textarea -->
							<div class="form-group">
							    <label for="textareaMessage">Tin nhắn <sup>*</sup></label>
							    <textarea  class="form-control" rows="12"  id="textareaMessage"></textarea>
						   </div>
						   <!-- /textarea -->
						   <!-- button -->
						   <div class="pull-right note">* Bắt buộc</div>
						   <button class="btn btn--ys btn--xl btn-top" type="submit">Gửi tin nhắn</button>
						   <!-- /button -->						   
						</form>						
					</div>
				</div>					
			</section>
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