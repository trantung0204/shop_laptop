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
					<li class="active">Bảo Hành</li>
				</ol>
			</div>
		</div>
		<!-- /breadcrumbs --> 
		<!-- CONTENT section -->
		
		<div id="pageContent">
			<section class="container">	
				<h3><strong>C&aacute;c sản phẩm m&aacute;y t&iacute;nh x&aacute;ch tay do T3Store kinh doanh được bảo h&agrave;nh c&oacute; thời hạn khi thỏa m&atilde;n c&aacute;c điều kiện sau:</strong></h3>

				<p>-&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;C&oacute; phiếu bảo h&agrave;nh/thẻ bảo h&agrave;nh/h&oacute;a đơn mua h&agrave;ng v&agrave; tem bảo h&agrave;nh của T3Store&nbsp;tr&ecirc;n m&aacute;y t&iacute;nh x&aacute;ch tay.</p>

				<p>-&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Tem bảo h&agrave;nh của nh&agrave; sản xuất / nh&agrave; ph&acirc;n phối v&agrave; tem bảo h&agrave;nh của T3Store c&ograve;n nguy&ecirc;n vẹn.</p>

				<p>-&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;M&aacute;y t&iacute;nh x&aacute;ch tay c&ograve;n trong thời hạn bảo h&agrave;nh. Thời hạn bảo h&agrave;nh được ghi r&otilde; tr&ecirc;n thẻ bảo h&agrave;nh hoặc phiếu bảo h&agrave;nh hoặc t&iacute;nh từ ng&agrave;y xuất b&aacute;n ghi tr&ecirc;n h&oacute;a đơn mua h&agrave;ng.</p>

				<p>-&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;M&aacute;y t&iacute;nh x&aacute;ch tay đủ điều kiện bảo h&agrave;nh theo điều kiện bảo h&agrave;nh của T3Store v&agrave; theo quy định của từng h&atilde;ng sản xuất.</p>

				<p>-&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;M&aacute;y t&iacute;nh x&aacute;ch tay ph&aacute;t sinh lỗi kỹ thuật ảnh hưởng đến khả năng hoạt động v&agrave; t&igrave;nh trạng của thiết bị. Lỗi kỹ thuật l&agrave; lỗi do quy tr&igrave;nh sản xuất sản phẩm từ nh&agrave; sản xuất, kh&ocirc;ng bao gồm c&aacute;c lỗi ph&aacute;t sinh do qu&aacute; tr&igrave;nh&nbsp;sử dụng sai quy c&aacute;ch&nbsp;hoặc&nbsp;do lỗi phần mềm&nbsp;hoặc do thi&ecirc;n tai, ch&aacute;y nổ v.v...</p>

				<p>&nbsp;</p>

				<h3><strong>Một số lưu &yacute;:</strong></h3>

				<p>-&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Điểm chấm m&agrave;n h&igrave;nh kh&ocirc;ng phải l&agrave; lỗi kỹ thuật.&nbsp;Nếu số điểm chấm m&agrave;n h&igrave;nh kh&ocirc;ng vượt qu&aacute; quy định của h&atilde;ng sản xuất c&ocirc;ng bố th&igrave; kh&ocirc;ng thuộc phạm vi bảo h&agrave;nh.</p>

				<p>-&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Thời gian&nbsp;sử dụng pin dưới 70%&nbsp;thời gian&nbsp; c&ocirc;ng bố của h&atilde;ng th&igrave; được xem l&agrave; lỗi kỹ thuật của pin. Ngoại trừ c&aacute;c trường hợp kh&aacute;ch h&agrave;ng sử dụng pin sai quy c&aacute;ch&nbsp; hoặc sai c&ocirc;ng năng của pin (d&ugrave;ng laptop để sạc điện thoại, sạc c&aacute;c thiết bị kh&aacute;c qua cổng USB, v.v.) th&igrave; kh&ocirc;ng được xem l&agrave; lỗi kỹ thuật.</p>

				<p>-&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;T&igrave;nh trạng k&eacute;n dĩa&nbsp;của ổ đĩa quang kh&ocirc;ng thuộc phạm vi bảo h&agrave;nh. Chất lượng đọc / ghi nội dung tốt nhất khi sử dụng dĩa c&oacute; chất lượng cao.</p>

				<p>-&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Ảnh hưởng từ&nbsp;virus m&aacute;y t&iacute;nh, từ sự&nbsp;kh&ocirc;ng tương th&iacute;ch giữa c&aacute;c phần mềm&nbsp;... g&acirc;y ảnh hưởng đến tốc độ v&agrave; hiệu quả hoạt động của laptop kh&ocirc;ng nằm trong phạm vi bảo h&agrave;nh.</p>

				<p>&nbsp;</p>

				<h3><strong>C&aacute;c trường hợp từ chối bảo h&agrave;nh:</strong></h3>

				<p>-&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;M&aacute;y bị hư hỏng do thi&ecirc;n tai, tai nạn hoặc c&ocirc;n tr&ugrave;ng ph&aacute; hoại.</p>

				<p>-&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;M&aacute;y tiếp x&uacute;c với chất lỏng hoặc đổ chất lỏng v&agrave;o m&aacute;y hoặc được bảo quản/sử dụng trong m&ocirc;i trường ẩm ướt.</p>

				<p>-&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Sử dụng sai điện &aacute;p theo quy định của nh&agrave; sản xuất.</p>

				<p>-&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Sản phẩm bị s&eacute;t đ&aacute;nh, ch&aacute;y nổ, bị biến dạng, bị gỉ s&eacute;t ăn m&ograve;n.</p>

				<p>-&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;C&aacute;c&nbsp;lỗi ph&aacute;t sinh do virus tin học.</p>

				<p>-&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Dữ liệu bị mất&nbsp;do qu&aacute; tr&igrave;nh sử dụng / bảo h&agrave;nh kh&ocirc;ng thuộc điều khoản bảo h&agrave;nh. Qu&yacute; kh&aacute;ch h&agrave;ng n&ecirc;n sao lưu dữ liệu định kỳ v&agrave; sao lưu dự ph&ograve;ng trước khi đem m&aacute;y đi bảo h&agrave;nh.</p>

				<p>-&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Việc&nbsp;mất ph&acirc;n v&ugrave;ng Recovery&nbsp;(ph&acirc;n v&ugrave;ng ổ cứng chứa dữ liệu hệ điều h&agrave;nh bản quyền) do qu&yacute; kh&aacute;ch h&agrave;ng tự ph&acirc;n chia ổ đĩa cứng sẽ kh&ocirc;ng được bảo h&agrave;nh. Chi ph&iacute; kh&ocirc;i phục bản quyền cho hệ điều h&agrave;nh sẽ được t&iacute;nh t&ugrave;y theo theo h&atilde;ng.</p>

				<p>-&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Tem bảo h&agrave;nh bị r&aacute;ch, bị sửa chữa, hoặc bị d&aacute;n đ&egrave; tem kh&aacute;c.</p>

				<p>-&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;C&aacute;c hao m&ograve;n về kiểu d&aacute;ng, vỏ thiết bị&nbsp; do t&aacute;c động của qu&aacute; tr&igrave;nh sử dụng.</p>

				<p>-&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;C&aacute;c lỗi về phần mềm chỉ được hỗ trợ khắc phục, kh&ocirc;ng thuộc phạm vi bảo h&agrave;nh.</p>

				<p>-&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Lỗi mất password (nhận diện v&acirc;n tay/khu&ocirc;n mặt) do người sử dụng sẽ kh&ocirc;ng được bảo h&agrave;nh. Chi ph&iacute; kh&ocirc;i phục sẽ được t&iacute;nh t&ugrave;y theo theo h&atilde;ng.</p>

				<p>Thời hạn bảo h&agrave;nh&nbsp;của kh&aacute;ch h&agrave;ng lu&ocirc;n được t&iacute;nh từ ng&agrave;y kh&aacute;ch h&agrave;ng mua sản phẩm.</p>
				
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