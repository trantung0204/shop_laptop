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
		<!-- Mobile Specific Metas -->
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<base href="{{asset('')}}shop_asset/">
		<!-- External Plugins CSS -->
		<link rel="stylesheet" href="external/slick/slick.css">
		<link rel="stylesheet" href="external/slick/slick-theme.css">
		<link rel="stylesheet" href="external/magnific-popup/magnific-popup.css">
		<link rel="stylesheet" href="external/bootstrap-select/bootstrap-select.css">		
		<!-- Custom CSS -->
		<link rel="stylesheet" href="css/style-layout11.css">
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
										<!-- //end Mobile menu Button -->
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
							<div class="slogan"> Default welcome msg! </div>
							<!-- slogan end --> 						
							<div class="settings">
								<!-- currency start -->
								<div class="currency dropdown text-right">
									<div class="dropdown-label hidden-sm hidden-xs">Currency:</div>
									<a class="dropdown-toggle" data-toggle="dropdown"> USD<span class="caret"></span></a>
									<ul class="dropdown-menu dropdown-menu--xs-full">
										<li><a href="#">GBP - British Pound Sterling</a></li>
										<li><a href="#">EUR - Euro</a></li>
										<li><a href="#">USD - US Dollar</a></li>
										<li class="dropdown-menu__close"><a href="#"><span class="icon icon-close"></span>close</a></li>
									</ul>
								</div>
								<!-- currency end --> 
								<!-- language start -->
								<div class="language dropdown text-right">
									<div class="dropdown-label hidden-sm hidden-xs">Language:</div>
									<a class="dropdown-toggle" data-toggle="dropdown"> English<span class="caret"></span></a>
									<ul class="dropdown-menu dropdown-menu--xs-full">
										<li><a href="#">English</a></li>
										<li><a href="#">German</a></li>
										<li><a href="#">Spanish</a></li>
										<li><a href="#">Russian</a></li>
										<li class="dropdown-menu__close"><a href="#"><span class="icon icon-close"></span>close</a></li>
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
											<li><a href="login_form.html"><span class="icon icon-person"></span>My Account</a></li>
											<li><a href="wishlist.html"><span class="icon icon-favorite_border"></span>My Wishlist</a></li>
											<li><a href="compare.html"><span class="icon icon-sort"></span>Compare</a></li>
											<li><a href="checkout-step.html"><span class="icon icon-done_all"></span>Checkout</a></li>
											<li><a href="#"  data-toggle="modal" data-target="#modalLoginForm"><span class="icon icon-lock"></span>Log In</a></li>
											<li><a href="login_form.html"><span class="icon icon-person_add"></span>Create an account</a></li>
											<li class="dropdown-menu__close"><a href="#"><span class="icon icon-close"></span>close</a></li>
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
		<!-- CONTENT section -->
		<div id="pageContent">
			
			<div class="container-fluid box-baners">
				<div class="row">
					<!-- col-left -->
					<div class="col-xs-12 col-sm-12 col-md-6">
						<!-- banner-slider -->
						<div class="banner-slider banner-slider-button">
							<div>
								<a href="listing-layout11.html" class="banner zoom-in font-size-responsive">
									<span class="figure">
										<img src="images/custom/layout11/banner-04.jpg" alt=""/>
										<span class="figcaption">
											<span class="btn-right-bottom">
												<span class="btn btn--ys btn--l btn--bg-yellow">Mua ngay!</span>
											</span>
											<span class="block-left-bottom">
												<span class="block font-size70 color-blue-light custom-font font-bold">Dell</span>
												<span class="block font-size30 text-dark text-uppercase font-light">Cấu hình khủng</span>
											</span>
										</span>
									</span>
								</a>
							</div>
							<div>
								<a href="listing-layout11.html" class="banner zoom-in font-size-responsive">
									<span class="figure">
										<img src="images/custom/layout11/banner-05.jpg" alt=""/>
										<span class="figcaption">
											<span class="btn-right-bottom">
												<span class="btn btn--ys btn--l btn--bg-yellow">Mua ngay!</span>
											</span>
											<span class="block-left-bottom">
												<span class="block font-size70 custom-font font-bold">Asus</span>
												<span class="block font-size30 text-uppercase font-light">Máy tính văn phòng</span>
											</span>
										</span>
									</span>
								</a>
							</div>
						</div>
						<!-- /banner-slider -->
					</div>
					<!-- /col-left -->
					<!-- col-right -->
					<div class="col-xs-12 col-sm-12 col-md-6">
						<div class="row">
							<div class="col-sm-6 col-md-6">
								<a href="listing-layout11.html" class="banner zoom-in">
									<span class="figure">
										<img src="images/custom/layout11/banner-07.jpg" alt=""/>
										<span class="figcaption text-left">
											<span class="block-table">
												<span class="block-table-cell">
													<span class="block font-size82 text-uppercase font-light">Mới</span>
													<span class="block text-uppercase font-size26">Những thứ bạn cần!</span>
													<em class="link-btn-20 main-font color-yellow">Mua ngay! <span class="icon icon-navigate_next"></span></em>
												</span>
											</span>
										</span>
									</span>
								</a>
							</div>
							<div class="col-sm-6  col-md-6">
								<a href="listing-layout11.html" class="banner zoom-in">
									<span class="figure">
										<img src="images/custom/layout11/banner-08.jpg" alt=""/>
										<span class="figcaption text-center">
											<span class="block-table">
												<span class="block-table-cell">
													<span class="block text-uppercase font-medium  font-size82"><span class="wrapper-green">15% off</span></span>
													<span class="block text-uppercase font-light font-size26">trên các mẫu hoàn toàn mới</span>
												</span>
											</span>
										</span>
									</span>
								</a>
							</div>
						</div>
						<div class="row">
							<div class="col-md-12">
								<a href="listing-layout11.html" class="banner zoom-in">
									<span class="figure">
										<img src="images/custom/layout11/banner-09.jpg" alt=""/>
										<span class="figcaption">
											<span class="block-table">
												<span class="block-table-cell">
													<span class="block text-uppercase font-medium text-dark font-size62">Mua 2 món</span>
													<span class="block text-uppercase font-medium font-size26">Giao hàng miễn phí!</span>
													<span class="btn btn--ys btn--lg btn--bg-red">Mua ngay!</span>
												</span>
											</span>
										</span>
									</span>
								</a>
							</div>
						</div>
					</div>
					<!-- /col-right -->
				</div>
			</div>
			
			<div class="container-fluid box-baners content offset-top-0 ">
				<div class="row">					
					<div class="col-xs-12">
						<!-- banner -->
						<a href="listing-layout11.html" class="banner banner-bg image-bg zoom-in" data-image="images/custom/layout11/banner-23.jpg">
							<span class="figure">
								<img src="images/custom/layout11/banner-23.jpg" alt=""/>
								<span class="figcaption">
									<span class="block-table">
										<span class="block-table-cell text-center">
											<span class="block font-size68 text-uppercase font-bold">LAPTOP ACER</span>
											<span class="block text-uppercase  font-size38 font-light">Có sẵn nhiều mẫu - Tha hồ lựa chọn</span>
											<span class="block font-size20 font-light line-height-md top-indent-sm text-overflow-ellipsis">Chi tiết</span>
											<span class="btn top-indent-sm1 btn--ys btn--l btn--bg-blue-light">Mua ngay!</span>
										</span>
									</span>
								</span>
							</span>
						</a>
						<!-- /banner -->						
					</div>				
				</div>
			</div>
			
			<div class="content offset-top-0  fullwidth indent-col-none">
				<div class="container">
					<div class="row">
						<div class="bannerCarousel box-baners ">
							<div class="col-md-3">
								<a href="listing-layout11.html" class="banner zoom-in">
									<span class="figure">
										<img src="images/custom/layout11/banner-10.jpg" alt=""/>
										<span class="figcaption text-left">
											<span class="block-table">
												<span class="block-table-cell">
													<span class="block font-size82 text-uppercase font-bold text-dark">Beaps</span>
													<span class="block text-uppercase font-size26 text-dark">Headphones</span>
													<span class="block text-uppercase font-size96 top-indent-md text-custom">20%</span>
													<span class="block text-uppercase font-size96 text-custom">off</span>													
												</span>
											</span>
										</span>
									</span>
								</a>
							</div>
							<div class="col-md-3">
								<a href="listing-layout11.html" class="banner zoom-in">
								<span class="figure">
									<img src="images/custom/layout11/banner-11.jpg" alt=""/>
									<span class="figcaption">
										<span class="block-table">
											<span class="block-table-cell">
												<span class="block text-uppercase font-bold  font-size40">Laptop</span>
												<span class="block text-uppercase top-indent-sm1 font-size22">Giảm giá lên đến 20%</span>
												<span class="btn btn--ys btn--bg-red btn--xl top-indent-md">Mua ngay!</span>
											</span>
										</span>
									</span>
								</span>
								</a>
							</div>
							<div class="col-md-3">
								<a href="listing-layout11.html" class="banner zoom-in">
								<span class="figure">
									<img src="images/custom/layout11/banner-12.jpg" alt=""/>
									<span class="figcaption text-left text-top">
										<span class="block-table">
											<span class="block-table-cell">
												<span class="block text-uppercase font-bold  font-size54">Camera</span>
												<em class="block top-indent-sm1 @custom-font font-light font-size21 ">Tha hồ lựa chọn những models hoàn toàn mới</em>
											</span>
										</span>
									</span>
								</span>
								</a>
							</div>							
							<div class="col-md-3">
								<a href="listing-layout11.html" class="banner zoom-in">
									<span class="figure">
										<img src="images/custom/layout11/banner-13.jpg" alt=""/>
										<span class="figcaption">
											<span class="block-table">
												<span class="block-table-cell">
													<span class="block text-uppercase font-medium color  font-size82">
														Giảm 15%
														
													</span>
													<span class="block text-uppercase font-medium font-size26"><span class="wrapper-coquelicot">Khi mua lần đầu tại cửa hàng</span></span>
												</span>
											</span>
										</span>
									</span>
								</a>
							</div>
						</div>
					</div>
				</div>
			</div>
			
			<div class="content">
				<div class="container">
					<!-- title -->
					<div class="title-with-button">
						<div class="carousel-products__button pull-right"> <span class="btn-prev"></span> <span class="btn-next"></span> </div>
						<h2 class="text-center text-uppercase title-under">SẢN PHẨM NỔI BẬT</h2>
					</div>
					<!-- /title --> 
					<!-- carousel -->
					<div class="carousel-products row" id="carouselFeatured">
						<div class="col-lg-3">
							<!-- product -->
							<div class="product">
								<div class="product__inside">
									<!-- product image -->
									<div class="product__inside__image">
										<a href="product-layout11.html"> <img src="images/custom/layout11/products/product-01.jpg" alt=""> </a> 
										<!-- quick-view --> 
										<a href="#" data-toggle="modal" data-target="#quickViewModal" class="quick-view"><b><span class="icon icon-visibility"></span> Xem ngay</b> </a> 
										<!-- /quick-view --> 
									</div>
									<!-- /product image --> 											
									<!-- product name -->
									<div class="product__inside__name">
										<h2><a href="product-layout11.html">Tên sản phẩm</a></h2>
									</div>
									<!-- /product name --> 
									<!-- product price -->
									<div class="product__inside__price price-box">
										150.000 VNĐ
										<span class="price-box__old">200.000 VNĐ</span>
									</div>
									<!-- /product price --> 
									<div class="product__inside__hover">
										<!-- product info -->
										<div class="product__inside__info">
											<div class="product__inside__info__btns"> <a href="#" class="btn btn--ys btn--xl"><span class="icon icon-shopping_basket"></span> Thêm vào giỏ hàng</a>
											<a href="#" class="btn btn--ys btn--xl visible-xs"><span class="icon icon-favorite_border"></span></a>
											<a href="#" class="btn btn--ys btn--xl visible-xs"><span class="icon icon-sort"></span></a>
											<a href="#" class="btn btn--ys btn--xl  row-mode-visible hidden-xs"><span class="icon icon-visibility"></span> Xem ngay</a> </div>
											<ul class="product__inside__info__link hidden-xs">
												<li class="text-right"><span class="icon icon-favorite_border  tooltip-link"></span><a href="#"><span class="text">Thêm vào danh sách yêu thích</span></a></li>
												<li class="text-left"><span class="icon icon-sort  tooltip-link"></span><a href="#" class="compare-link"><span class="text">Thêm vào so sánh</span></a></li>
											</ul>
										</div>
										<!-- /product info --> 
										<!-- product rating -->
										<div class="rating"> <span class="icon-star"></span> <span class="icon-star"></span> <span class="icon-star"></span> <span class="icon-star"></span> <span class="icon-star empty-star"></span> </div>
										<!-- /product rating --> 
									</div>
								</div>
							</div>
							<!-- /product --> 
						</div>
						<div class="col-lg-3">
							<!-- product -->
							<div class="product">
								<div class="product__inside">
									<!-- product image -->
									<div class="product__inside__image">
										<a href="product-layout11.html"> <img src="images/custom/layout11/products/product-01.jpg" alt=""> </a> 
										<!-- quick-view --> 
										<a href="#" data-toggle="modal" data-target="#quickViewModal" class="quick-view"><b><span class="icon icon-visibility"></span> Xem ngay</b> </a> 
										<!-- /quick-view --> 
									</div>
									<!-- /product image --> 											
									<!-- product name -->
									<div class="product__inside__name">
										<h2><a href="product-layout11.html">Tên sản phẩm</a></h2>
									</div>
									<!-- /product name --> 
									<!-- product price -->
									<div class="product__inside__price price-box">
										150.000 VNĐ
										<span class="price-box__old">200.000 VNĐ</span>
									</div>
									<!-- /product price --> 
									<div class="product__inside__hover">
										<!-- product info -->
										<div class="product__inside__info">
											<div class="product__inside__info__btns"> <a href="#" class="btn btn--ys btn--xl"><span class="icon icon-shopping_basket"></span> Thêm vào giỏ hàng</a>
											<a href="#" class="btn btn--ys btn--xl visible-xs"><span class="icon icon-favorite_border"></span></a>
											<a href="#" class="btn btn--ys btn--xl visible-xs"><span class="icon icon-sort"></span></a>
											<a href="#" class="btn btn--ys btn--xl  row-mode-visible hidden-xs"><span class="icon icon-visibility"></span> Xem ngay</a> </div>
											<ul class="product__inside__info__link hidden-xs">
												<li class="text-right"><span class="icon icon-favorite_border  tooltip-link"></span><a href="#"><span class="text">Thêm vào danh sách yêu thích</span></a></li>
												<li class="text-left"><span class="icon icon-sort  tooltip-link"></span><a href="#" class="compare-link"><span class="text">Thêm vào so sánh</span></a></li>
											</ul>
										</div>
										<!-- /product info --> 
										<!-- product rating -->
										<div class="rating"> <span class="icon-star"></span> <span class="icon-star"></span> <span class="icon-star"></span> <span class="icon-star"></span> <span class="icon-star empty-star"></span> </div>
										<!-- /product rating --> 
									</div>
								</div>
							</div>
							<!-- /product --> 
						</div>
						<div class="col-lg-3">
							<!-- product -->
							<div class="product">
								<div class="product__inside">
									<!-- product image -->
									<div class="product__inside__image">
										<a href="product-layout11.html"> <img src="images/custom/layout11/products/product-01.jpg" alt=""> </a> 
										<!-- quick-view --> 
										<a href="#" data-toggle="modal" data-target="#quickViewModal" class="quick-view"><b><span class="icon icon-visibility"></span> Xem ngay</b> </a> 
										<!-- /quick-view --> 
									</div>
									<!-- /product image --> 											
									<!-- product name -->
									<div class="product__inside__name">
										<h2><a href="product-layout11.html">Tên sản phẩm</a></h2>
									</div>
									<!-- /product name --> 
									<!-- product price -->
									<div class="product__inside__price price-box">
										150.000 VNĐ
										<span class="price-box__old">200.000 VNĐ</span>
									</div>
									<!-- /product price --> 
									<div class="product__inside__hover">
										<!-- product info -->
										<div class="product__inside__info">
											<div class="product__inside__info__btns"> <a href="#" class="btn btn--ys btn--xl"><span class="icon icon-shopping_basket"></span> Thêm vào giỏ hàng</a>
											<a href="#" class="btn btn--ys btn--xl visible-xs"><span class="icon icon-favorite_border"></span></a>
											<a href="#" class="btn btn--ys btn--xl visible-xs"><span class="icon icon-sort"></span></a>
											<a href="#" class="btn btn--ys btn--xl  row-mode-visible hidden-xs"><span class="icon icon-visibility"></span> Xem ngay</a> </div>
											<ul class="product__inside__info__link hidden-xs">
												<li class="text-right"><span class="icon icon-favorite_border  tooltip-link"></span><a href="#"><span class="text">Thêm vào danh sách yêu thích</span></a></li>
												<li class="text-left"><span class="icon icon-sort  tooltip-link"></span><a href="#" class="compare-link"><span class="text">Thêm vào so sánh</span></a></li>
											</ul>
										</div>
										<!-- /product info --> 
										<!-- product rating -->
										<div class="rating"> <span class="icon-star"></span> <span class="icon-star"></span> <span class="icon-star"></span> <span class="icon-star"></span> <span class="icon-star empty-star"></span> </div>
										<!-- /product rating --> 
									</div>
								</div>
							</div>
							<!-- /product --> 
						</div>
						<div class="col-lg-3">
							<!-- product -->
							<div class="product">
								<div class="product__inside">
									<!-- product image -->
									<div class="product__inside__image">
										<a href="product-layout11.html"> <img src="images/custom/layout11/products/product-01.jpg" alt=""> </a> 
										<!-- quick-view --> 
										<a href="#" data-toggle="modal" data-target="#quickViewModal" class="quick-view"><b><span class="icon icon-visibility"></span> Xem ngay</b> </a> 
										<!-- /quick-view --> 
									</div>
									<!-- /product image --> 											
									<!-- product name -->
									<div class="product__inside__name">
										<h2><a href="product-layout11.html">Tên sản phẩm</a></h2>
									</div>
									<!-- /product name --> 
									<!-- product price -->
									<div class="product__inside__price price-box">
										150.000 VNĐ
										<span class="price-box__old">200.000 VNĐ</span>
									</div>
									<!-- /product price --> 
									<div class="product__inside__hover">
										<!-- product info -->
										<div class="product__inside__info">
											<div class="product__inside__info__btns"> <a href="#" class="btn btn--ys btn--xl"><span class="icon icon-shopping_basket"></span> Thêm vào giỏ hàng</a>
											<a href="#" class="btn btn--ys btn--xl visible-xs"><span class="icon icon-favorite_border"></span></a>
											<a href="#" class="btn btn--ys btn--xl visible-xs"><span class="icon icon-sort"></span></a>
											<a href="#" class="btn btn--ys btn--xl  row-mode-visible hidden-xs"><span class="icon icon-visibility"></span> Xem ngay</a> </div>
											<ul class="product__inside__info__link hidden-xs">
												<li class="text-right"><span class="icon icon-favorite_border  tooltip-link"></span><a href="#"><span class="text">Thêm vào danh sách yêu thích</span></a></li>
												<li class="text-left"><span class="icon icon-sort  tooltip-link"></span><a href="#" class="compare-link"><span class="text">Thêm vào so sánh</span></a></li>
											</ul>
										</div>
										<!-- /product info --> 
										<!-- product rating -->
										<div class="rating"> <span class="icon-star"></span> <span class="icon-star"></span> <span class="icon-star"></span> <span class="icon-star"></span> <span class="icon-star empty-star"></span> </div>
										<!-- /product rating --> 
									</div>
								</div>
							</div>
							<!-- /product --> 
						</div>
						<div class="col-lg-3">
							<!-- product -->
							<div class="product sold-out">
								<div class="product__inside">
									<!-- product image -->
									<div class="product__inside__image">
										<a href="product-layout11.html"> <img src="images/custom/layout11/products/product-04.jpg" alt=""> </a> 
										<!-- label sold-out -->
										<div class="product__label--sold-out"> <span>Hết<br>
											Hàng</span> 
										</div>
										<!-- /label sold-out --> 
									</div>
									<!-- /product image --> 
									<!-- product name -->
									<div class="product__inside__name">
										<h2><a href="product-layout11.html">Tên sản phẩm</a></h2>
									</div>
									<!-- /product name -->                 <!-- product description --> 
									<!-- visible only in row-view mode -->
									<div class="product__inside__description row-mode-visible"> Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam. </div>
									<!-- /product description -->                 <!-- product price -->
									<div class="product__inside__price price-box">$133.00</div>
									<!-- /product price -->                 <!-- product review --> 
									<!-- visible only in row-view mode -->
									<div class="product__inside__review row-mode-visible">
										<div class="rating row-mode-visible"> <span class="icon-star"></span> <span class="icon-star"></span> <span class="icon-star"></span> <span class="icon-star"></span> <span class="icon-star empty-star"></span> </div>
										<a href="#">1 Review(s)</a> <a href="#">Add Your Review</a> 
									</div>
									<!-- /product review --> 
									<div class="product__inside__hover">
										<!-- product info -->
										<div class="product__inside__info">
											<div class="product__inside__info__btns"> <a href="#" class="btn btn--ys btn--xl"><span class="icon icon-shopping_basket"></span> Add to cart</a>
											<a href="#" class="btn btn--ys btn--xl visible-xs"><span class="icon icon-favorite_border"></span></a>
											<a href="#" class="btn btn--ys btn--xl visible-xs"><span class="icon icon-sort"></span></a>
											<a href="#" class="btn btn--ys btn--xl  row-mode-visible hidden-xs"><span class="icon icon-visibility"></span> Quick view</a> </div>
											<ul class="product__inside__info__link hidden-xs">
												<li class="text-right"><span class="icon icon-favorite_border  tooltip-link"></span><a href="#"><span class="text">Add to wishlist</span></a></li>
												<li class="text-left"><span class="icon icon-sort  tooltip-link"></span><a href="#" class="compare-link"><span class="text">Add to compare</span></a></li>
											</ul>
										</div>
										<!-- /product info --> <!-- product rating -->
										<div class="rating row-mode-hide"> <span class="icon-star"></span> <span class="icon-star"></span> <span class="icon-star"></span> <span class="icon-star"></span> <span class="icon-star empty-star"></span> </div>
										<!-- /product rating --> 
									</div>
								</div>
							</div>
							<!-- /product -->
						</div>
					</div>
					
					<!-- /carousel --> 
				</div>
			</div>			
			<div class="content clearfix">
				<div class="container">
					<div class="row">
						<div class="brands-carousel">
							<div><a href="#"><img src="images/custom/layout11/brand-01.png" alt=""></a></div>
							<div><a href="#"><img src="images/custom/layout11/brand-02.png" alt=""></a></div>
							<div><a href="#"><img src="images/custom/layout11/brand-03.png" alt=""></a></div>
							<div><a href="#"><img src="images/custom/layout11/brand-04.png" alt=""></a></div>
							<div><a href="#"><img src="images/custom/layout11/brand-05.png" alt=""></a></div>
							<div><a href="#"><img src="images/custom/layout11/brand-06.png" alt=""></a></div>
							<div><a href="#"><img src="images/custom/layout11/brand-07.png" alt=""></a></div>
							<div><a href="#"><img src="images/custom/layout11/brand-08.png" alt=""></a></div>
							<div><a href="#"><img src="images/custom/layout11/brand-01.png" alt=""></a></div>
							<div><a href="#"><img src="images/custom/layout11/brand-02.png" alt=""></a></div>
							<div><a href="#"><img src="images/custom/layout11/brand-03.png" alt=""></a></div>
							<div><a href="#"><img src="images/custom/layout11/brand-04.png" alt=""></a></div>
							<div><a href="#"><img src="images/custom/layout11/brand-05.png" alt=""></a></div>
							<div><a href="#"><img src="images/custom/layout11/brand-06.png" alt=""></a></div>
							<div><a href="#"><img src="images/custom/layout11/brand-07.png" alt=""></a></div>
							<div><a href="#"><img src="images/custom/layout11/brand-08.png" alt=""></a></div>
						</div>
					</div>
				</div>
			</div>
			
			<div class="content">
				<div class="container-fluid box-baners">
					<div class="row">
						<div class="banner-carousel-1">
							<!--  -->
							<div class="col-md-3 col-sm-6 col-xs-12">
								<!-- banner -->
								<a href="listing-layout11.html" class="banner banner-md bg-pink  zoom-in">
									<span class="figure">
										<span class="figcaption text-center">
											<span class="block-table">
												<span class="block-table-cell">
													<span class="block font-size90 text-uppercase font-light">Giảm 20%</span>
													<span class="btn btn--border btn--xl">Mua ngay!</span>
												</span>
											</span>
										</span>
									</span>
								</a>
								<!-- /banner -->
							</div>
							<!-- / -->
							<!--  -->
							<div class="col-md-3 col-sm-6 col-xs-12">
								<a href="listing-layout11.html" class="banner banner-md bg-light-blue zoom-in">
									<span class="figure">
										<span class="figcaption text-center">
											<span class="block-table">
												<span class="block-table-cell">
												   <span class="block font-size40 text-uppercase font-medium">Đặt hàng</span>
													<span class="block block-top-md font-size20 text-uppercase font-light">Trả lại trong vòng</span>
													<em class="block  block-top-sm font-size46">7 ngày</em>
												</span>
											</span>
										</span>
									</span>
								</a>
							</div>
							<!-- / -->
							<!--  -->
							<div class="col-md-3 col-sm-6 col-xs-12">
								<a href="listing-layout11.html" class="banner banner-md bg-yellow zoom-in">
									<span class="figure">
										<span class="figcaption text-center">
											<span class="block-table">
												<span class="block-table-cell">
												   <span class="block font-size40 text-uppercase font-medium text-dark">Miễn phí<br>Vận chuyển</span>
													<span class="block font-size24 text-uppercase font-light block-top-md text-dark">Với đơn trên 1.000.000 VNĐ</span>
												</span>
											</span>
										</span>
									</span>
								</a>
							</div>
							<!-- / -->
							<!--  -->
							<div class="col-md-3 col-sm-6 col-xs-12">
								<a href="listing-layout11.html" class="banner banner-md bg-green-light zoom-in">
									<span class="figure">
										<span class="figcaption text-center">
											<span class="block-table">
												<span class="block-table-cell">
												   <em class="block font-size26 text-uppercase main-font">COD</em>
													<span class="block block-top-md font-size40 text-uppercase font-medium">Thanh toán<br>khi giao hàng</span>
												</span>
											</span>
										</span>
									</span>
								</a>
							</div>
							<!-- / -->
						</div>
					</div>
				</div>
			</div>
			
			<div class="content  offset-top-0  fullwidth hidden-xs">
				<div class="container">
					<div class="row">
						<div class="instafeed-wrapper">
							<h3 class="title-vertical"><span>INSTAGRAM FEED</span></h3>
							<div id="instafeed" class="instafeed"></div>
						</div>
					</div>
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
		<div id="productQuickView" class="white-popup mfp-hide">
			<h1>Modal dialog</h1>
			<p>You won't be able to dismiss this by usual means (escape or
				click button), but you can close it programatically based on
				user choices or actions.
			</p>
		</div>
		<div id="compareSlide" class="hidden-xs">
			<div class="container">
				<div class="compareSlide__top">
					Compare
				</div>
				<a class="compareSlide__close icon icon-close">
				</a>
				<div class="compared-product-row">
					<div class="compared-product">
						<a href="#" class="compared-product__delete icon icon-delete"></a>
						<div class="compared-product__image"><a href="#"><img src="images/product/product-1.jpg" alt=""/></a></div>
						<a href="#" class="compared-product__name">Quis nostrud exercitation ullamco labori.</a>
					</div>
					<div class="compared-product">
						<a href="#" class="compared-product__delete icon icon-delete"></a>
						<div class="compared-product__image"><a href="#"><img src="images/product/product-1.jpg" alt=""/></a></div>
						<a href="#" class="compared-product__name">Quis nostrud exercitation ullamco labori.</a>
					</div>
					<div class="compared-product">
						<a href="#" class="compared-product__delete icon icon-delete"></a>
						<div class="compared-product__image"><a href="#"><img src="images/product/product-1.jpg" alt=""/></a></div>
						<a href="#" class="compared-product__name">Quis nostrud exercitation ullamco labori.</a>
					</div>
					<div class="compared-product">
						<a href="#" class="compared-product__delete icon icon-delete"></a>
						<div class="compared-product__image"><a href="#"><img src="images/product/product-1.jpg" alt=""/></a></div>
						<a href="#" class="compared-product__name">Quis nostrud exercitation ullamco labori.</a>
					</div>
					<div class="compared-product">
						<a href="#" class="compared-product__delete icon icon-delete"></a>
						<div class="compared-product__image"><a href="#"><img src="images/product/product-1.jpg" alt=""/></a></div>
						<a href="#" class="compared-product__name">Quis nostrud exercitation ullamco labori.</a>
					</div>
					<div class="compared-product">
						<a href="#" class="compared-product__delete icon icon-delete"></a>
						<div class="compared-product__image"><a href="#"><img src="images/product/product-1.jpg" alt=""/></a></div>
						<a href="#" class="compared-product__name">Quis nostrud exercitation ullamco labori.</a>
					</div>
				</div>
				<div class="compareSlide__bot">
					<a href="#" class="clear-all icon icon-delete"><span>Clear All</span></a>
					<a href="#" class="btn btn--ys btn-compare"><span class="icon icon-shopping_basket"></span> Compare</a>
				</div>
			</div>
		</div>
		<!-- Button trigger modal -->
	  

		<!--================== modal ==================-->
		<!-- modalAddToCart -->
		<div class="modal  fade"  id="modalAddToCart" tabindex="-1" role="dialog" aria-label="myModalLabel" aria-hidden="true">
		  <div class="modal-dialog white-modal modal-sm">
		    <div class="modal-content ">
		      <div class="modal-header">
		        <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><span class="icon icon-clear"></span></button>
		      </div>
		      <div class="modal-body">
		        <div class="text-center">
		        	"Mauris lacinia lectus" added to cart successfully! 
		        </div>
		      </div>
		      <div class="modal-footer text-center">		       	
		        <a href="shopping-cart-right-column.html" class="btn btn--ys btn--full btn--lg">go to cart</a>
		      </div>
		    </div>
		  </div>
		</div>
		<!-- /modalAddToCart -->
		<!-- modalLoginForm-->
		<div class="modal  fade"  id="modalLoginForm" tabindex="-1" role="dialog" aria-label="myModalLabel" aria-hidden="true">
		  <div class="modal-dialog white-modal modal-sm">
		    <div class="modal-content ">
		      <div class="modal-header">
		        <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><span class="icon icon-clear"></span></button>
		        <h4 class="modal-title text-center text-uppercase">Login form</h4>
		      </div>
		      <form>
			      <div class="modal-body indent-bot-none">
			      	<div class="form-group">
			      		<div class="input-group">
						    <span class="input-group-addon">
						    	<span class="icon icon-person"></span>
						    </span>
						    <input type="text" id="LoginFormName" class="form-control" placeholder="Name:">
						</div>
			      	</div>
					<div class="form-group">
						<div class="input-group">
						    <span class="input-group-addon">@</span>
						    <input type="password" id="LoginFormPass" class="form-control" placeholder="Password:">
						</div>
					</div>			         				    				     
 	                 <div class="checkbox-group">
	                  <input type="checkbox" id="checkBox2">
	                  <label for="checkBox2"> 
	                  	<span class="check"></span>
	                  	<span class="box"></span>
	                  	Remember me
	                  </label>
	                </div>
	                <button type="button" class="btn btn--ys btn--full btn--lg">Login</button>
			        <div class="divider divider--xs"></div>
			        <button type="button" class="btn btn--ys btn--full btn--lg btn-blue"><span class="fa fa-facebook"></span> Login with Facebook</button>
			        <div class="divider divider--xs"></div>
			        <button type="button" class="btn btn--ys btn--full btn--lg btn-red"><span class="fa fa-google-plus"></span> Login with Google</button>
			        <div class="divider divider--xs"></div>
			        <ul class="list-arrow-right">
			        	<li><a href="#">Forgot your username?</a></li>
			        	<li><a href="#">Forgot your password?</a></li>
			        	<li><a href="#">Create an account</a></li>
			        </ul>
			      </div>			      
			  </form>
		    </div>
		  </div>
		</div>	
		<!-- /modalLoginForm-->

      <!-- Modal (quickViewModal) -->		
		<div class="modal  modal--bg fade"  id="quickViewModal">
		  <div class="modal-dialog white-modal">
		    <div class="modal-content container">
		    	<div class="modal-header">
		       	 <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><span class="icon icon-clear"></span></button>
		     	 </div>
		    	<!--  -->
		    	<div class="product-popup">
					<div class="product-popup-content">
					<div class="container-fluid">
						<div class="row product-info-outer">
							<div class="col-xs-12 col-sm-5 col-md-6 col-lg-6">
								<div class="product-main-image">
									<div class="product-main-image__item"><img src='images/product/product-big-1.jpg' alt="" /></div>
								</div>
							</div>
							<div class="product-info col-xs-12 col-sm-7 col-md-6 col-lg-6">
								<div class="wrapper">
									<div class="product-info__sku pull-left">SKU: <strong>mtk012c</strong></div>
									<div class="product-info__availabilitu pull-right">Availability:   <strong class="color">In Stock</strong></div>
								</div>
								<div class="product-info__title">
									<h2>Lorem ipsum dolor sit ctetur</h2>
								</div>
								<div class="price-box product-info__price"><span class="price-box__new">$65.00</span> <span class="price-box__old">$84.00</span></div>
								<div class="divider divider--xs product-info__divider"></div>
								<div class="product-info__description">
									<div class="product-info__description__brand"><img src="images/custom/brand.png" alt=""> </div>
									<div class="product-info__description__text">Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</div>
								</div>
								<div class="divider divider--xs product-info__divider"></div>
								<div class="wrapper">
									<div class="pull-left"><span class="option-label">COLOR:</span>  Red + $10.00 *</div>
									<div class="pull-right required">* Required Fields</div>
								</div>
								<ul class="options-swatch options-swatch--color options-swatch--lg">
									<li><a href="#"><span class="swatch-label"><img src="images/colors/oldlace.png" alt=""/></span></a></li>
									<li><a href="#"><span class="swatch-label"><img src="images/colors/dark-grey.png" alt=""/></span></a></li>
									<li><a href="#"><span class="swatch-label"><img src="images/colors/grey.png" alt=""/></span></a></li>
									<li><a href="#"><span class="swatch-label"><img src="images/colors/light-grey.png" alt=""/></span></a></li>
								</ul>						
								<div class="wrapper">
									<div class="pull-left"><span class="option-label">SIZE:</span></div>
									<div class="pull-left required">*</div>
								</div>
								<ul class="options-swatch options-swatch--size options-swatch--lg">
									<li><a href="#">S</a></li>
									<li><a href="#">M</a></li>
									<li><a href="#">L</a></li>
									<li><a href="#">XL</a></li>
									<li><a href="#">2XL</a></li>
									<li><a href="#">3XL</a></li>
								</ul>
								<div class="divider divider--sm"></div>
								<div class="wrapper">
									<div class="pull-left"><span class="qty-label">QTY:</span></div>
									<div class="pull-left"><input type="text" name="quantity" class="input--ys qty-input pull-left" value="1"></div>
									<div class="pull-left"><button type="submit" class="btn btn--ys btn--xxl"><span class="icon icon-shopping_basket"></span> Add to cart</button></div>
								</div>
								<ul class="product-link">
									<li class="text-right"><span class="icon icon-favorite_border  tooltip-link"></span><a href="#"><span class="text">Add to wishlist</span></a></li>
									<li class="text-left"><span class="icon icon-sort  tooltip-link"></span><a href="#"><span class="text">Add to compare</span></a></li>
								</ul>
							</div>
						</div>
					</div>
					</div>
				</div>
		    	<!-- / -->
		    </div>
		  </div>
		</div>
		<!-- / Modal (quickViewModal) -->
		<!-- Modal (newsletter) -->		
		<div class="modal  modal--bg fade"  id="newsletterModal" data-pause=2000>
		  <div class="modal-dialog white-modal">
		    <div class="modal-content modal-md">
		      <div class="modal-bg-image bottom-right"> 
			      <img  src="images/custom/newsletter-bg.png" alt="" class="img-responsive"> 
			  </div>
		      <div class="modal-block">
			      <div class="modal-header">
			        <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><span class="icon icon-clear"></span></button>
			      </div>
			      <div class="modal-newsletter text-center">
			      	    <img class="logo replace-2x img-responsive1" src="images/custom/layout11/logo.png" alt=""/>
			            <h2 class="text-uppercase modal-title">THAM GIA CÙNG CHÚNG TÔI!</h2>
			            <p class="color-dark">Và nhận vô số các tin ưu đã từ chúng tôi</p>
			            <p class="color font24 custom-font font-lighter">
			            	T3Store 
			            </p>
			            <form  method="post" name="mc-embedded-subscribe-form" target="_blank" class="subscribe-form">
			           		<div class="row-subscibe">			           				            		 
								<input  type="text" name="subscribe"   placeholder="E-mail của bạn">
								<button type="submit" class="btn btn--ys btn--xl">Đăng Ký</button>
			           		</div>
							<div class="checkbox-group form-group-top clearfix">
			                  <input type="checkbox" id="checkBox1">
			                  <label for="checkBox1"> 
			                  	<span class="check"></span>
			                  	<span class="box"></span>
			                  	&nbsp;&nbsp;KHÔNG HIỂN THỊ LẦN NỮA
			                  </label>
			                </div>			               			                
			                
			            </form>
			      </div>
		      </div>
		    </div>
		  </div>
		</div>
		<!-- / Modal (newsletter) -->
		<!--================== /modal ==================-->

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
		<script src="external/parallax/jquery.parallax-1.1.3.js"></script>
		<script src="external/colorbox/jquery.colorbox-min.js"></script> 		
		<!-- Custom --> 
		<script src="js/custom.js"></script>
		<script src="js/js-index-11.js"></script>					
	</body>
</html>