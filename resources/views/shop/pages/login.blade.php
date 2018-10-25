<!DOCTYPE html>
<html lang="en">
	<head>
		<!-- Basic -->
		<meta charset="utf-8">
		<title>T3 Store - Quality is Our Top Priority</title>
		<meta name="keywords" content="HTML5 Template" />
		<meta name="description" content="T3 Store - Quality is Our Top Priority">
		<meta name="author" content="etheme.com">
		<base href="{{asset('')}}shop_asset/">
		<link rel="shortcut icon" href="favicon.ico">
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
										<!-- //end Mobile menu  -->
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
					<li class="home-link"><a href="{{ asset('shop') }}" class="icon icon-home"></a></li>										
					<li class="active">Đăng Nhập</li>
				</ol>
			</div>
		</div>
		<!-- /breadcrumbs --> 
		<!-- CONTENT section -->
		<div id="pageContent">
			<div class="container">				
				<!-- title -->
				<div class="title-box">
					<h1 class="text-center text-uppercase title-under">ĐĂNG NHẬP HOẶC TẠO TÀI KHOẢN</h1>
				</div>
				<!-- /title -->		
				<div class="row">
					<section class="col-sm-12 col-md-6 col-lg-6 col-xl-4 col-xl-offset-2">
						 <div class="login-form-box">
						 	 <h3 class="color small">KHÁCH HÀNG MỚI</h3>
				             <p>Bằng cách tạo tài khoản với cửa hàng chúng tôi, bạn có thể mua hàng nhanh hơn, lưu trữ nhiều địa chỉ giao hàng, xem và theo dõi đơn hàng của bạn trong tài khoản</p>
				            <br>
				            <button class="btn btn--ys btn--xl" onclick="location.href='{{ asset('register') }}';"><span class="icon icon-person_add"></span>Tạo một tài khoản</button>
						 </div>
					</section>
					<div class="divider divider--md visible-sm visible-xs"></div>
					<section class="col-sm-12 col-md-6 col-lg-6 col-xl-4">
						<div class="login-form-box">
							<h3 class="color small">ĐĂNG NHẬP</h3>
							<p>
								Nếu bạn có tài khoản với chúng tôi, vui lòng đăng nhập.
							</p>
				              <form action="{{ route('login') }}" method="post" id="form-returning">
				              	@csrf
				                <div class="form-group">
				                  	<label for="email">Email <sup>*</sup></label>
				                  	<input type="email" id="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus>
				                  	@if ($errors->has('email'))
						                <span class="invalid-feedback">
						                    <strong>{{ $errors->first('email') }}</strong>
						                </span>
						            @endif
				                </div>
				                <div class="form-group">
				                  	<label for="password">Mật khẩu <sup>*</sup></label>
				                  	<input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required >
				                  	@if ($errors->has('password'))
						                <span class="invalid-feedback">
						                    <strong>{{ $errors->first('password') }}</strong>
						                </span>
						            @endif
				                </div>
				                <div class="row">
				                	<div class="col-xs-12 col-sm-6 col-md-6">
				                		<button type="submit" class="btn btn--ys btn-top btn--xl" ><span class="icon icon-vpn_key"></span>ĐĂNG NHẬP</button>			               			
				                	</div>
				                	<div class="divider divider--md visible-xs"></div>
				                	<div class="col-xs-12 col-sm-6 col-md-6">
				                		<div class="pull-right note btn-top">* Bắt buộc</div>
				                	</div>
				                </div>	
				              </form>
						</div>
					</section>
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
	</body>
</html>