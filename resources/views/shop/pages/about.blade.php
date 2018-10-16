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
		<link rel="stylesheet" href="external/bootstrap-select/bootstrap-select.css">	
		<!-- Custom CSS -->
		<link rel="stylesheet" href="css/style.css">
		<!-- Icon Fonts  -->
		<link rel="stylesheet" href="font/style.css">
		<!-- Head Libs -->
		<!-- Modernizr -->
		<script src="external/modernizr/modernizr.js"></script>
	</head>
	<body class="index">
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
						<div class="col-sm-8 col-md-8 col-lg-6 col-xl-5 text-right visible-mobile-menu-on">
							<!-- slogan start -->
							<div class="slogan"> Chào mừng đến với T3 Store! </div>
							<!-- slogan end --> 						
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
					<li class="home-link"><a href="{{ asset('shop') }}" class="icon icon-home"></a></li>				
					<li class="active">About</li>
				</ol>
			</div>
		</div>
		<!-- /breadcrumbs --> 
		<!-- CONTENT section -->
		<div id="pageContent">			
			<!-- parallax-img -->
			<section class="content--parallax content--parallax-sm offset-top-0" data-image="images/custom/parallax-img-05.jpg">
				<div class="content  offset-top-0">
					<div class="container">
						<div class="parallax-text">
							<div class="block-table">
								<div class="block-table-cell text-center">
									<h6 class="font50 color-white">Về chúng tôi</h6>
									<div class="divider divider--xs"></div>
									<p class="font30 color-white">Cửa hàng uy tín</p>
									<div class="divider divider--xs"></div>
									<span class="bull-line"></span>
								</div>
							</div>							
						</div>
					</div>
				</div>
			</section>
			<!-- /parallax-img -->
			<!--  -->
			<section class="content">
				<div class="container">
					<h2 class="text-center title-under">Sự thật thú vị</h2>
					<p class="text-center color-dark main-font">
						<em class="font18">Một vài sự thật thú vị về cửa hàng của chúng tôi</em>
					</p>
					<div class="divider divider--md1"></div>		
					<div class="row">
						<div class="col-md-12 col-lg-4 text-center separator-border-right separator-border-right-hidden-md">
							<a class="link-banner1" href="#">
								<div>
									<span class="font96 font-middle color-custom">50</span>
								</div>
								<p>
									<span class="font26 font-middle color-custom">Các mặt hàng trong cửa hàng</span>
								</p>																				
								<p class="side-offset-9">
									Chúng tôi đem đến các trải nghiệm thú vị về các mặt hàng của chúng tôi.
								</p>	
								<div class="divider divider--md"></div>
							</a>						
						</div>						
						<div class="divider divider--md1 visible-md"></div>
						<div class="col-md-12 col-lg-4 text-center separator-border-right separator-border-right-hidden-md">
							<a class="link-banner1" href="#">
								<div>
									<span class="font96 font-middle color-custom">80%</span>
								</div>
								<p>
									<span class="font26 font-middle color-custom">Khách hàng trở lại cửa hàng chúng tôi</span>
								</p>																				
								<p class="side-offset-9">
									Hí hí
								</p>
								<div class="divider divider--md"></div>	
							</a>								
						</div>
						<div class="divider divider--md1 visible-md"></div>
						<div class="col-md-12 col-lg-4 text-center">
							<a class="link-banner1" href="#">
								<div>
									<span class="font96 font-middle color-custom">1 triệu</span>
								</div>
								<p>
									<span class="font26 font-middle color-custom">Người dùng Website</span>
								</p>																				
								<p class="side-offset-9">
									Hí hí
								</p>
								<div class="divider divider--md"></div>		
							</a>							
						</div>
					</div>

				</div>
			</section>
			<!-- / -->
			<!--  -->
			<section class="container-fluid fill-bg content">
				<div class="content-fill">
					<h2 class="text-center title-under">Liên kết với</h2>
					<div class="row">
						<div class="col-lg-10 col-lg-offset-1 col-xs-12 col-xs-offset-0">
							<p class="text-center">
								
							</p>
							<div class="divider divider--lg"></div>
							<div class="brand-lg-list">
								<div class="row-item">
									<a href="#"><img src="images/custom/layout11/brand-01.png" class="img-center" alt=""></a>
									<a href="#"><img src="images/custom/layout11/brand-02.png" class="img-center" alt=""></a>
									<a href="#"><img src="images/custom/layout11/brand-03.png" class="img-center" alt=""></a>
									<a href="#"><img src="images/custom/layout11/brand-04.png" class="img-center" alt=""></a>
									<a href="#"><img src="images/custom/layout11/brand-05.png" class="img-center" alt=""></a>
								</div>
								<div class="row-item">
									<a href="#"><img src="images/custom/layout11/brand-06.png" class="img-center" alt=""></a>
									<a href="#"><img src="images/custom/layout11/brand-07.png" class="img-center" alt=""></a>
									<a href="#"><img src="images/custom/layout11/brand-08.png" class="img-center" alt=""></a>
									<a href="#"><img src="images/custom/layout11/brand-09.png" class="img-center" alt=""></a>
									<a href="#"><img src="images/custom/layout11/brand-10.png" class="img-center" alt=""></a>
								</div>							
							</div>
						</div>
					</div>
				</div>
			</section>
			<!-- / -->
			<!--  -->
			<section class="content--parallax content--parallax-sm offset-top-0" data-image="images/custom/parallax-img-06.jpg">
				<div class="content">
					<div class="container">
						<div class="parallax-text">
							<div class="block-table">
								<div class="block-table-cell text-center">
									<span class="icon icon-done_all color-custom font107"></span>
									<h6 class="color-white font50 title-bottom-sm1">Chỉ bán các sản phẩm được chứng nhận</h6>
									<p class="color-white font24 main-font">
										<em>Đến với cửa hàng chúng tôi, khách hàng sẽ được mua những mặt hàng chính hãng phân phối. Đem lại cảm giác an toàn đến cho người mua.</em>
									</p>
								</div>
							</div>							
						</div>
					</div>
				</div>
			</section>
			<!-- /parallax-img -->
			<!--  -->
			<section class="content">
				<div class="container">
					<!-- title -->
					<div class="title-box">
						<h2 class="text-center title-under">Đội của chúng tôi</h2>
					</div>
					<!-- /title -->
					<div class="row">
						<div class="col-md-4 col-sm-6 col-xs-6">
							<a class="link-img-hover1" href="#"><img src="images/custom/team-img-01.jpg" class="img-responsive-block" alt=""></a>							
							<div class="divider divider--md1"></div>
							<p>
								<a class="hover-effect-01" href="#">
									<span class="font22 text-uppercase color-custom">Danh Tùng</span>
									<span class="font18 color-dark">&nbsp; - &nbsp;<em class="main-font">Giám đốc</em></span>
								</a>
							</p>
							<p>Giám đốc</p>
						</div>
						<div class="col-md-4 col-sm-6 col-xs-6">
							<a class="link-img-hover1" href="#"><img src="images/custom/team-img-02.jpg" class="img-responsive-block" alt=""></a>
							<div class="divider divider--md1"></div>
							<p>
								<a class="hover-effect-01" href="#">
									<span class="font22 text-uppercase color-custom">Minh Tuấn</span>
									<span class="font18 color-dark">&nbsp; - &nbsp;<em class="main-font">Manager</em></span>
								</a>
							</p>
							<p>Quản lý</p>
						</div>
						<div class="divider divider--lg visible-sm visible-xs"></div>
						<div class="col-md-4 col-sm-6 col-xs-6">
							<a class="link-img-hover1" href="#"><img src="images/custom/team-img-03.jpg" class="img-responsive-block" alt=""></a>
							<div class="divider divider--md1"></div>
							<p>
								<a class="hover-effect-01" href="#">
									<span class="font22 text-uppercase color-custom">Lê Tuấn</span>
									<span class="font18 color-dark">&nbsp; - &nbsp;<em class="main-font">Tiếp thị</em></span>
								</a>
							</p>
							<p>Tiếp thị.</p>
						</div>
					</div>
				</div>
			</section>
			<!-- / -->
			<!-- blog slider -->
			<!-- /blog slider -->		
		</div>
		<!-- End CONTENT section -->
		<!-- FOOTER section -->
		@include('shop.parts.footer')
		<!-- END FOOTER section -->		




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
		<script src="external/isotope/isotope.pkgd.min.js"></script> 
		<script src="external/imagesloaded/imagesloaded.pkgd.min.js"></script>
		<script src="external/colorbox/jquery.colorbox-min.js"></script>
		<script src="external/parallax/jquery.parallax-1.1.3.js"></script>		
		<!-- Custom --> 
		<script src="js/custom.js"></script>			
		
	</body>
</html>