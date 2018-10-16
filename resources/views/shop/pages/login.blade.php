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
							<a href="index-11.html"><img class="logo replace-2x img-responsive" src="images/custom/layout11/logo.png" alt=""/></a> 
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
									<div class="pull-right col-stuck-cart text-right">								
										<div class="cart link-inline">
										<div class="dropdown text-right">
											<a class="dropdown-toggle">
											<span class="icon icon-shopping_basket"></span>
											<span class="badge badge--cart">2</span>
											</a>
											<div class="dropdown-menu dropdown-menu--xs-full slide-from-top" role="menu">
												<div class="container">
													<div class="cart__top">(CÁC) MỤC ĐƯỢC THÊM GẦN ĐÂY</div>
													<a href="#" class="icon icon-close cart__close"><span>ĐÓNG</span></a>
													<ul>
														<li class="cart__item">
															<div class="cart__item__image pull-left"><a href="#"><img src="images/product/product-1.jpg" alt=""/></a></div>
															<div class="cart__item__control">
																<div class="cart__item__delete"><a href="#" class="icon icon-delete"><span>Xoá</span></a></div>
																<div class="cart__item__edit"><a href="#" class="icon icon-edit"><span>Sửa</span></a></div>
															</div>
															<div class="cart__item__info">
																<div class="cart__item__info__title">
																	<h2><a href="#">Tên sản phẩm</a></h2>
																</div>
																<div class="cart__item__info__price"><span class="info-label">Giá:</span><span>1.000.000 VNĐ</span></div>
																<div class="cart__item__info__qty"><span class="info-label">Số lượng:</span><input type="text" class="input--ys" value='1' /></div>
																<div class="cart__item__info__details">
																	<div class='multitooltip'>
																		<a href="#">Chi tiết</a>
																		<div class="tip on-bottom">
																			<span><strong>Màu sắc:</strong> Purple</span>
																			<span><strong>Số lượng:</strong> 200</span>
																			<span><strong>Hình ảnh:</strong> No</span>
																			<span><strong>Kích cỡ:</strong> 4"x3.5"</span>
																		</div>
																	</div>
																</div>
															</div>
														</li>
														<li class="cart__item">
															<div class="cart__item__image pull-left"><a href="#"><img src="images/product/product-1.jpg" alt=""/></a></div>
															<div class="cart__item__control">
																<div class="cart__item__delete"><a href="#" class="icon icon-delete"><span>Xoá</span></a></div>
																<div class="cart__item__edit"><a href="#" class="icon icon-edit"><span>Sửa</span></a></div>
															</div>
															<div class="cart__item__info">
																<div class="cart__item__info__title">
																	<h2><a href="#">Tên sản phẩm</a></h2>
																</div>
																<div class="cart__item__info__price"><span class="info-label">Giá:</span><span>1.000.000 VNĐ</span></div>
																<div class="cart__item__info__qty"><span class="info-label">Số lượng:</span><input type="text" class="input--ys" value='1' /></div>
																<div class="cart__item__info__details">
																	<div class='multitooltip'>
																		<a href="#">Chi tiết</a>
																		<div class="tip on-bottom">
																			<span><strong>Màu sắc:</strong> Purple</span>
																			<span><strong>Số lượng:</strong> 200</span>
																			<span><strong>Hình ảnh:</strong> No</span>
																			<span><strong>Kích cỡ:</strong> 4"x3.5"</span>
																		</div>
																	</div>
																</div>
															</div>
														</li>
													</ul>
													<div class="cart__bottom">
														<div class="cart__total">Tổng giỏ hàng: <span> 2.000.000 VNĐ</span></div>
														<button class="btn btn--ys btn-checkout">Kiểm Tra <span class="icon icon--flippedX icon-reply"></span></button>
														<a href="#" class="btn btn--ys"><span class="icon icon-shopping_basket"></span> Xem Giỏ Hàng</a>
													</div>
												</div>
											</div>
										</div>
									</div>
									<!-- shopping cart end -->	
								</div>	
						    </div>							
						</div>
							
						</div>
						<div class="col-sm-8 col-md-8 col-lg-6 col-xl-5 text-right visible-mobile-menu-on">
							<!-- slogan start -->
							<div class="slogan"> Chào mừng đến với T3 Store! </div>
							<!-- slogan end --> 						
							<div class="settings">
								<!-- currency start -->
								<div class="currency dropdown text-right">
									<div class="dropdown-label hidden-sm hidden-xs">TIỀN TỆ:</div>
									<a class="dropdown-toggle" data-toggle="dropdown"> USD<span class="caret"></span></a>
									<ul class="dropdown-menu dropdown-menu--xs-full">
										<li><a href="#">VNĐ - Việt Nam Đồng</a></li>
										<li><a href="#">USD - US Dollar</a></li>
										<li class="dropdown-menu__close"><a href="#"><span class="icon icon-close"></span>Đóng</a></li>
									</ul>
								</div>
								<!-- currency end --> 
								<!-- language start -->
								<div class="language dropdown text-right">
									<div class="dropdown-label hidden-sm hidden-xs">Ngôn Ngữ:</div>
									<a class="dropdown-toggle" data-toggle="dropdown"> Tiếng Việt<span class="caret"></span></a>
									<ul class="dropdown-menu dropdown-menu--xs-full">
										<li><a href="#">Tiếng Việt</a></li>
										<li><a href="#">English</a></li>
										<li class="dropdown-menu__close"><a href="#"><span class="icon icon-close"></span>Đóng</a></li>
									</ul>
								</div>
								<!-- language end --> 
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
								<div class="account link-inline hidden mobile-menu-on">
									<div class="dropdown text-right">
										<a class="dropdown-toggle" data-toggle="dropdown">
										<span class="icon icon-person "></span>
										</a>
										<ul class="dropdown-menu dropdown-menu--xs-full">
											<li><a href="login_form.html"><span class="icon icon-person"></span>Tài Khoản Của Tôi</a></li>
											<li><a href="wishlist.html"><span class="icon icon-favorite_border"></span>Danh Sách Yêu Thích</a></li>
											<li><a href="compare.html"><span class="icon icon-sort"></span>So Sánh</a></li>
											<li><a href="checkout-step.html"><span class="icon icon-done_all"></span>Kiểm Tra</a></li>
											<li><a href="#"  data-toggle="modal" data-target="#modalLoginForm"><span class="icon icon-lock"></span>Đăng Nhập</a></li>
											<li><a href="login_form.html"><span class="icon icon-person_add"></span>Tạo Tài Khoản</a></li>
											<li class="dropdown-menu__close"><a href="#"><span class="icon icon-close"></span>Đóng</a></li>
										</ul>
									</div>
								</div>
								<!-- account menu end -->
								<!-- icon toggle menu -->
								<div class="link-inline toggle-menu  visible-mobile-menu-off">
									<span class="icon icon-reorder"></span>									
							          <ul class="dropdown-menu " role="menu">
							          	<li class='li-col-full'>
							          		<span class="close icon-clear pull-right" data-dismiss="modal"></span>
											<em class="color main-font">Chào mừng đến với website</em>
							          	</li>
							          	<li class='li-col list-user-menu'>									 
										  <h4 class="megamenu__subtitle"><span>Tài khoản của tôi</span></h4>		
							              <ul>
							                <li><a href="#">Tài khoản</a></li>
							                <li><a href="#">Yêu thích</a></li>
							                <li><a href="#">So sánh</a></li>
							                <li><a href="#">Kiểm tra</a></li>
							              </ul>
							            </li>						           
							            <li class='li-col languages languages--flag'>									 
										  <h4 class="megamenu__subtitle"><span>Ngôn ngữ</span></h4>		
							              <ul>
							                <li class="languages__item active">
							                	<a href="#">
							                		<span class="languages__item__flag flag"><img src="images/flags/gb.png" alt=""/></span>
							                		<span class="languages__item__label">Tiếng Việt</span>
							                	</a>
							                </li>
							                <li class="languages__item">
							                	<a href="#">
							                		<span class="languages__item__flag flag"><img src="images/flags/de.png" alt=""/></span>
							                		<span class="languages__item__label">English</span>
							                	</a>
							                </li>
							              </ul>
							            </li>
							             <li class='li-col currency'>
										  <h4 class="megamenu__subtitle"><span>Tiền tệ</span></h4>									  
							              <ul>
							              	<li class="currency__item active"><a href="#">VNĐ - Việt Nam Đồng</a></li>
							                <li class="currency__item"><a href="#">USD - US Dollar</a></li>
							              </ul>
							            </li>
							          </ul>
								</div>
								<!-- /icon toggle menu -->
								<!-- shopping cart start -->
								<div class="cart link-inline">
									<div class="dropdown text-right">
										<a class="dropdown-toggle">
										<span class="icon icon-shopping_basket"></span>
										<span class="badge badge--cart">2</span>
										</a>
										<div class="dropdown-menu dropdown-menu--xs-full slide-from-top" role="menu">
											<div class="container">
												<div class="cart__top">(CÁC) MỤC ĐƯỢC THÊM GẦN ĐÂY</div>
												<a href="#" class="icon icon-close cart__close"><span>ĐÓNG</span></a>
												<ul>
													<li class="cart__item">
														<div class="cart__item__image pull-left"><a href="#"><img src="images/custom/layout11/products/product-02.jpg" alt=""/></a></div>
														<div class="cart__item__control">
															<div class="cart__item__delete"><a href="#" class="icon icon-delete"><span>XOÁ</span></a></div>
															<div class="cart__item__edit"><a href="#" class="icon icon-edit"><span>SỬA</span></a></div>
														</div>
														<div class="cart__item__info">
															<div class="cart__item__info__title">
																<h2><a href="#">SẢN PHẨM</a></h2>
															</div>
															<div class="cart__item__info__price"><span class="info-label">Giá bán:</span><span>1.000.000 VNĐ</span></div>
															<div class="cart__item__info__qty"><span class="info-label">Số lượng:</span><input type="text" class="input--ys" value='1' /></div>
															<div class="cart__item__info__details">
																<div class='multitooltip'>
																	<a href="#">Chi tiết</a>
																	<div class="tip on-bottom">
																		<span><strong>Màu sắc:</strong> Purple</span>
																		<span><strong>Số lượng:</strong> 200</span>
																		<span><strong>Hình ảnh:</strong> No</span>
																		<span><strong>Kích cỡ:</strong> 4"x3.5"</span>
																	</div>
																</div>
															</div>
														</div>
													</li>
													<li class="cart__item">
														<div class="cart__item__image pull-left"><a href="#"><img src="images/custom/layout11/products/product-01.jpg" alt=""/></a></div>
														<div class="cart__item__control">
															<div class="cart__item__delete"><a href="#" class="icon icon-delete"><span>Xoá</span></a></div>
															<div class="cart__item__edit"><a href="#" class="icon icon-edit"><span>Sửa</span></a></div>
														</div>
														<div class="cart__item__info">
															<div class="cart__item__info__title">
																<h2 class="title-center"><a href="#">SẢN PHẨM</a></h2>
															</div>
															<div class="cart__item__info__price"><span class="info-label">Giá bán:</span><span>1.000.000 VNĐ</span></div>
															<div class="cart__item__info__qty"><span class="info-label">Số lượng:</span><input type="text" class="input--ys" value='1' /></div>															
														</div>
													</li>
												</ul>
												<div class="cart__bottom">
													<div class="cart__total">Tổng giỏ hàng: <span> 2.000.000 VNĐ</span></div>
													<button class="btn btn--ys btn-checkout">KIỂM TRA <span class="icon icon--flippedX icon-reply"></span></button>
													<a href="#" class="btn btn--ys"><span class="icon icon-shopping_basket"></span> XEM GIỎ HÀNG</a>
												</div>
											</div>
										</div>
									</div>
								</div>
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
				            <button class="btn btn--ys btn--xl" onclick="location.href='#';"><span class="icon icon-person_add"></span>Tạo một tài khoản</button>
						 </div>
					</section>
					<div class="divider divider--md visible-sm visible-xs"></div>
					<section class="col-sm-12 col-md-6 col-lg-6 col-xl-4">
						<div class="login-form-box">
							<h3 class="color small">ĐĂNG NHẬP</h3>
							<p>
								Nếu bạn có tài khoản với chúng tôi, vui lòng đăng nhập.
							</p>
				              <form action="#" id="form-returning">
				                <div class="form-group">
				                  <label for="email">Email <sup>*</sup></label>
				                  <input type="email" class="form-control" id="email">
				                </div>
				                <div class="form-group">
				                  <label for="password">Mật khẩu <sup>*</sup></label>
				                  <input type="password" class="form-control" id="password">
				                </div>
				                <div class="row">
				                	<div class="col-xs-12 col-sm-6 col-md-6">
				                		<button type="submit" class="btn btn--ys btn-top btn--xl" onclick="document.getElementById('form-returning').submit();"><span class="icon icon-vpn_key"></span>ĐĂNG NHẬP</button>			               			
				                	</div>
				                	<div class="divider divider--md visible-xs"></div>
				                	<div class="col-xs-12 col-sm-6 col-md-6">
				                		<div class="pull-right note btn-top">* Bắt buộc</div>
				                	</div>
				                </div>			               			                
				                <p class="btn-top">
		               				<a class="link-color" href="#">Quên mật khẩu?</a>
		               			</p>
				              </form>
						</div>
					</section>
				</div>						
			</div>
		</div>
		<!-- End CONTENT section --> 
		<!-- FOOTER section -->
		<footer class="fill-bg offset-top-0 ">
			<!-- footer-data -->
			<div class="container inset-bottom-60">
				<div class="row" >
					<div class="col-sm-12 col-md-5 col-lg-6 border-sep-right">
						<div class="footer-logo hidden-xs">
							<!--  Logo  --> 
							<a class="logo" href="index-11.html"> <img class="replace-2x" src="images/custom/layout11/logo-transparent.png" alt="YOURStore"> </a> 
							<!-- /Logo --> 
						</div>
						<div class="box-about">
							<div class="mobile-collapse">
								<h4 class="mobile-collapse__title visible-xs">Về chúng tôi</h4>
								<div class="mobile-collapse__content">
									<p> Được thành lập vào năm 20xx. Cửa hàng đã có nhiều năm kinh nghiệm trong việc mua bán các loại laptop, camera cho thị trường. </p>
								</div>
							</div>
						</div>
						<!-- subscribe-box -->
						<div class="subscribe-box offset-top-20">
							<div class="mobile-collapse">
								<h4 class="mobile-collapse__title">Đăng kí bản tin</h4>
								<div class="mobile-collapse__content">
									<form class="form-inline">
										<input class="subscribe-form__input" type="text" name="subscribe">
										<button type="submit" class="btn btn--ys btn--xl">Đăng ký</button>
									</form>
								</div>
							</div>
						</div>
						<!-- /subscribe-box --> 
					</div>
					<div class="col-sm-12 col-md-7 col-lg-6 border-sep-left">
						<div class="row">
							<div class="col-sm-6">
								<div class="mobile-collapse">
									<h4 class="text-left  title-under  mobile-collapse__title">THÔNG TIN</h4>
									<div class="v-links-list mobile-collapse__content">
										<ul>
											<li><a href="about.html">Về chúng tôi</a></li>
											<li><a href="support-24.html">Customer Service</a></li>
											<li><a href="faq.html">Điều khoản</a></li>
											<li><a href="site-map.html">Bản đồ</a></li>
											<li><a href="warranty.html">Tìm kiếm nâng cao</a></li>
											<li><a href="delivery-page.html">Đơn đặt và trả lại</a></li>
											<li><a href="contact.html">Liên hệ với chúng tôi</a></li>
										</ul>
									</div>
								</div>
							</div>
							<div class="col-sm-6">
								<div class="mobile-collapse">
									<h4 class="text-left  title-under  mobile-collapse__title">TÀI KHOẢN CỦA TÔI</h4>
									<div class="v-links-list mobile-collapse__content">
										<ul>
											<li><a href="login_form.html">Đăng Nhập</a></li>
											<li><a href="shopping_cart.html">Xem Đơn Hàng</a></li>
											<li><a href="wishlist.html">Danh Sách Yêu Thích</a></li>
											<li><a href="support-24.html">Theo Dõi Đơn Hàng</a></li>
											<li><a href="faq.html">Giúp Đỡ</a></li>
										</ul>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- /footer-data --> 
			<div class="divider divider-md visible-sm"></div>
			<!-- social-icon -->
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<div class="social-links social-links--large">
							<ul>
								<li><a class="icon fa fa-facebook" href="http://www.facebook.com/"></a></li>
								<li><a class="icon fa fa-twitter" href="http://www.twitter.com/"></a></li>
								<li><a class="icon fa fa-google-plus" href="http://www.google.com/"></a></li>
								<li><a class="icon fa fa-instagram" href="https://instagram.com/"></a></li>
								<li><a class="icon fa fa-youtube-square" href="https://www.youtube.com/"></a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
			<!-- /social-icon --> 
			<!-- footer-copyright -->
			<div class="container footer-copyright">
				<div class="row">
					<div class="col-lg-12"> <a href="index.html"><span>T3</span>Store</a> &copy; 2018 . All Rights Reserved. </div>
				</div>
			</div>
			<!-- /footer-copyright --> 
			<a href="#" class="btn btn--ys btn--full visible-xs" id="backToTop">Back to top <span class="icon icon-expand_less"></span></a> 
		</footer>
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