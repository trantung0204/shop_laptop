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
      <link rel="stylesheet" href="external/nouislider/nouislider.css">
      <link rel="stylesheet" href="external/bootstrap-select/bootstrap-select.css">
      <!-- SLIDER REVOLUTION 4.x CSS SETTINGS -->
      <link rel="stylesheet" type="text/css" href="external/rs-plugin/css/settings.css" media="screen" />
      <!-- Custom CSS -->
      <link rel="stylesheet" href="css/style-layout11.css">
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
               <li><a href="#">Sản Phẩm</a></li>
               <li class="active">Laptop</li>
            </ol>
         </div>
      </div>
      <!-- /breadcrumbs --> 
      <!-- CONTENT section -->
      <div id="pageContent">
         <div class="container">
            <!-- two columns -->
            <div class="row">
               <!-- left column -->
               <aside class="col-md-4 col-lg-3 col-xl-2" id="leftColumn">
                  <a href="#" class="slide-column-close visible-sm visible-xs"><span class="icon icon-chevron_left"></span>Trở lại</a>
                  <div class="filters-block visible-xs">
                     <div class="filters-row__select">
                        <label>Sắp xếp bởi: </label>
                        <div class="select-wrapper">
                           <select class="select--ys">
                              <option>Tên</option>
                              <option>Giá</option>
                              <option>Đánh Giá</option>
                           </select>
                        </div>
                        <a href="#" class="sort-direction icon icon-arrow_back"></a> 
                     </div>
                     <div class="filters-row__select">
                        <label>Hiển Thị: </label>
                        <div class="select-wrapper">
                           <select class="select--ys">
                              <option>25</option>
                              <option>50</option>
                              <option>100</option>
                           </select>
                        </div>
                     </div>
                     <a href="#" class="icon icon-arrow-down active"></a><a href="#" class="icon icon-arrow-up"></a> 
                  </div>
                  <!-- shopping by block -->
                  <div class="collapse-block open">
                     <h4 class="collapse-block__title">MUA HÀNG BỞI:</h4>
                     <div class="collapse-block__content">
                        <ul class="filter-list">
                           <li> Màu: <span>Trắng</span><a href="#" class="icon icon-clear icon-to-right"></a> </li>
                           <li> Kích Cỡ: <span>15,6 inch</span><a href="#" class="icon icon-clear icon-to-right"></a> </li>
                        </ul>
                        <a class="btn btn--ys btn--sm btn--light">Xoá tất cả</a> 
                     </div>
                  </div>
                  <!-- /shopping by block --> 
                  <!-- category block -->
                  <div class="collapse-block open">
                     <h4 class="collapse-block__title ">TOP</h4>
                     <div class="collapse-block__content">
                        <ul class="expander-list">
                           <li class="active">
                              <a href="#">Xếp hạng</a><span class="expander"></span>
                              <ul>
                                 <li class="active"><a href="#">Laptop</a></li>
                                 <li><a href="#">Camera</a></li>
                              </ul>
                           </li>
                           <li>
                              <a href="#">Màn Hình</a><span class="expander"></span>
                              <ul>
                                 <li><a href="#">11 inch</a></li>
                                 <li><a href="#">12,5 inch</a></li>
                                 <li><a href="#">13,3 inch</a></li>
                                 <li><a href="#">15,6 inch</a></li>
                                 <li><a href="#">17,3 inch</a></li>
                              </ul>
                           </li>
                           <li>
                              <a href="#">RAM</a><span class="expander"></span>
                              <ul>
                                 <li><a href="#">1GB</a></li>
                                 <li><a href="#">2GB</a></li>
                                 <li><a href="#">4GB</a></li>
                                 <li><a href="#">8GB</a></li>
                                 <li><a href="#">16GB</a></li>
                              </ul>
                           </li>
                        </ul>
                     </div>
                  </div>
                  <!-- /category block --> 
                  <!-- price slider block -->
                  <div class="collapse-block open">
                     <h4 class="collapse-block__title">Giá</h4>
                     <div class="collapse-block__content">
                        <div id="priceSlider" class="price-slider"></div>
                        <form action="#">
                           <div class="price-input">
                              <label>Từ:</label>
                              <input type="text" id="priceMin" />
                           </div>
                           <div class="price-input-divider">-</div>
                           <div class="price-input">
                              <label>Đến:</label>
                              <input type="text" id="priceMax" />
                           </div>
                           <div class="price-input">
                              <button type="submit" class="btn btn--ys btn--md">Lọc</button>
                           </div>
                        </form>
                     </div>
                  </div>
                  <!-- /price slider block --> 
                  <!-- size block -->
                  <div class="collapse-block open">
                     <h4 class="collapse-block__title">SIZE</h4>
                     <div class="collapse-block__content">
                        <ul class="options-swatch options-swatch--size options-swatch--lg">
                           <li><a href="#">XS</a></li>
                           <li><a href="#">S</a></li>
                           <li><a href="#">M</a></li>
                           <li><a href="#">L</a></li>
                           <li><a href="#">XL</a></li>
                           <li><a href="#">2XL</a></li>
                           <li><a href="#">3XL</a></li>
                        </ul>
                     </div>
                  </div>
                  <!-- /size block --> 
                  <!-- color block -->
                  <div class="collapse-block open">
                     <h4 class="collapse-block__title">Màu Sắc</h4>
                     <div class="collapse-block__content">
                        <ul class="options-swatch options-swatch--color options-swatch--lg">
                           <li><a href="#"><span class="swatch-label color-black"></span></a></li>
                           <li><a href="#"><span class="swatch-label color-grey"></span></a></li>
                           <li><a href="#"><span class="swatch-label color-light-grey"></span></a></li>
                           <li><a href="#"><span class="swatch-label color-blue"></span></a></li>
                           <li><a href="#"><span class="swatch-label color-dark-turquoise "></span></a></li>
                        </ul>
                     </div>
                  </div>
                  <!-- /color block --> 
                  <!-- brands block -->
                  <div class="collapse-block">
                     <h4 class="collapse-block__title">CAMERA</h4>
                     <div class="collapse-block__content">
                        <ul class="simple-list">
                           <li><a href="#">Có Dây </a></li>
                           <li><a href="#">Không Dây</a></li>
                           <li><a href="#">360</a></li>
                        </ul>
                     </div>
                  </div>
               </aside>
               <!-- /left column --> 
               <!-- center column -->
               <aside class="col-md-8 col-lg-9 col-xl-10" id="centerColumn">
                  <!-- title -->
                  <div class="title-box">
                     <h2 class="text-center text-uppercase title-under">Sản Phẩm</h2>
                  </div>
                  <!-- /title -->
                  
                  
               
                  <!-- filters row -->
                  <div class="filters-row border-top-none">
                     <div class="pull-left">
                        <div class="filters-row__mode">
                              <a href="#" class="btn btn--ys slide-column-open visible-xs visible-sm hidden-xl hidden-lg hidden-md">Lọc</a> 
                           <a class="filters-row__view active link-grid-view btn-img btn-img-view_module"><span></span></a> 
                           <a class="filters-row__view link-row-view btn-img btn-img-view_list"><span></span></a> 
                        </div>
                        <div class="filters-row__select hidden-sm hidden-xs">
                           <label>Sắp xếp bởi: </label>
                           <div class="select-wrapper">
                              <select class="select--ys sort-position">
                                 <option>Tên</option>
                                 <option>Giá</option>
                                 <option>Đánh Giá</option>
                              </select>
                           </div>
                           <a href="#" class="sort-direction icon icon-arrow_back"></a> 
                        </div>
                     </div>
                     <div class="pull-right">
                        <div class="filters-row__items hidden-sm hidden-xs">28 Item(s)</div>
                        <div class="filters-row__select hidden-sm hidden-xs">
                           <label>Hiển Thị: </label>
                           <div class="select-wrapper">
                              <select class="select--ys show-qty">
                                 <option>25</option>
                                 <option>50</option>
                                 <option>100</option>
                              </select>
                           </div>
                           <a href="#" class="icon icon-arrow-down active"></a><a href="#" class="icon icon-arrow-up"></a> 
                        </div>
                        <div class="filters-row__pagination">
                           <ul class="pagination">
                              <li class="active"><a href="#">1</a></li>
                              <li><a href="#">2</a></li>
                              <li><a href="#">3</a></li>
                              <li><a href="#"><span class="icon icon-chevron_right"></span></a></li>
                           </ul>
                        </div>
                     </div>
                  </div>
                  <!-- /filters row -->
                  <div class="product-listing row">
                     <div class="col-xs-6 col-sm-4 col-md-6 col-lg-4 col-xl-one-fifth">
                        <!-- product -->
                        <div class="product product--zoom">
                           <div class="product__inside">
                              <!-- product image -->
                              <div class="product__inside__image">
                                 <!-- product image carousel -->
                                 <div class="product__inside__carousel slide" data-ride="carousel">
                                    <div class="carousel-inner" role="listbox">
                                       <div class="item active"> <a href="product.html"><img src="images/custom/layout11/products/product-03.jpg" alt=""></a> </div>
                                       <div class="item"> <a href="product.html"><img src="images/custom/layout11/products/product-03.jpg" alt=""></a> </div>
                                       <div class="item"> <a href="product.html"><img src="images/custom/layout11/products/product-03.jpg" alt=""></a> </div>
                                    </div>
                                    <!-- Controls --> 
                                    <a class="carousel-control next"></a> <a class="carousel-control prev"></a> 
                                 </div>
                                 <!-- /product image carousel --> 
                                 <!-- quick-view --> 
                                 <a href="#" data-toggle="modal" data-target="#quickViewModal" class="quick-view"><b><span class="icon icon-visibility"></span> Xem Nhanh</b> </a> 
                                 <!-- /quick-view --> 
                                 <!-- countdown_box -->
                                 <div class="countdown_box">
                                    <div class="countdown_inner">
                                       <div id="countdown1"></div>
                                    </div>
                                 </div>
                                 <!-- /countdown_box --> 
                              </div>
                              <!-- /product image --> 
                              <!-- label news -->
                              <div class="product__label product__label--right product__label--new"> <span>Mới</span> </div>
                              <!-- /label news --> 
                              <!-- label sale -->
                              <div class="product__label product__label--left product__label--sale"> <span>Giảm Giá<br>
                                 -20%</span> 
                              </div>
                              <!-- /label sale --> 
                              <!-- product name -->
                              <div class="product__inside__name">
                                 <h2><a href="product.html">Tên Sản Phẩm</a></h2>
                              </div>
                              <!-- /product name --> 
                              <!-- product description --> 
                              <!-- visible only in row-view mode -->
                              <div class="product__inside__description row-mode-visible"> Chi Tiết Sản Phẩm</div>
                              <!-- /product description --> 
                              <!-- product price -->
                              <div class="product__inside__price price-box">1.000.000 VNĐ<br><span class="price-box__old">1.500.000 VNĐ</span></div>
                              <!-- /product price --> 
                              <!-- product review --> 
                              <!-- visible only in row-view mode -->
                              <div class="product__inside__review row-mode-visible">
                                 <div class="rating row-mode-visible"> <span class="icon-star"></span> <span class="icon-star"></span> <span class="icon-star"></span> <span class="icon-star"></span> <span class="icon-star empty-star"></span> </div>
                                 <a href="#">1 Đánh giá</a> <a href="#">Thêm đánh giá của bạn</a> 
                              </div>
                              <!-- /product review --> 
                              <div class="product__inside__hover">
                                 <!-- product info -->
                                 <div class="product__inside__info">
                                    <div class="product__inside__info__btns"> <a href="#" class="btn btn--ys btn--xl"><span class="icon icon-shopping_basket"></span> Thêm vào giỏ hàng</a>
                                       <a href="#" class="btn btn--ys btn--xl visible-xs"><span class="icon icon-favorite_border"></span></a>
                                       <a href="#" class="btn btn--ys btn--xl visible-xs"><span class="icon icon-sort"></span></a>
                                       <a href="#" data-toggle="modal" data-target="#quickViewModal" class="btn btn--ys btn--xl  row-mode-visible hidden-xs"><span class="icon icon-visibility"></span> Xem nhanh</a> 
                                    </div>
                                    <ul class="product__inside__info__link hidden-sm">
                                       <li class="text-right"><span class="icon icon-favorite_border  tooltip-link"></span><a href="#"><span class="text">Thêm vào yêu thích</span></a></li>
                                       <li class="text-left"><span class="icon icon-sort  tooltip-link"></span><a href="#" class="compare-link"><span class="text">Thêm vào so sánh</span></a></li>
                                    </ul>
                                 </div>
                                 <!-- /product info --> 
                                 <!-- product rating -->
                                 <div class="rating row-mode-hide"> <span class="icon-star"></span> <span class="icon-star"></span> <span class="icon-star"></span> <span class="icon-star"></span> <span class="icon-star empty-star"></span> </div>
                                 <!-- /product rating --> 
                              </div>
                           </div>
                        </div>
                        <!-- /product --> 
                     </div>
                     <div class="col-xs-6 col-sm-4 col-md-6 col-lg-4 col-xl-one-fifth">
                        <!-- product -->
                        <div class="product product--zoom">
                           <div class="product__inside">
                              <!-- product image -->
                              <div class="product__inside__image">
                                 <a href="product.html"> <img src="images/custom/layout11/products/product-01.jpg" alt=""> </a> 
                                 <!-- quick-view --> 
                                 <a href="#" data-toggle="modal" data-target="#quickViewModal" class="quick-view"><b><span class="icon icon-visibility"></span> Xem nhanh</b> </a> 
                                 <!-- /quick-view --> 
                              </div>
                              <!-- /product image --> 
                              <!-- product name -->
                              <div class="product__inside__name">
                                 <h2><a href="product.html">Tên sản phẩm</a></h2>
                              </div>
                              <!-- /product name -->                 
                              <!-- product description --> 
                              <!-- visible only in row-view mode -->
                              <div class="product__inside__description row-mode-visible"> Chi Tiết Sản Phẩm</div>
                              <!-- /product description -->                 <!-- product price -->
                              <div class="product__inside__price price-box">1.000.000 VNĐ</div>
                              <!-- /product price --> 
                              <!-- product review --> 
                              <!-- visible only in row-view mode -->
                              <div class="product__inside__review row-mode-visible">
                                 <div class="rating row-mode-visible"> <span class="icon-star"></span> <span class="icon-star"></span> <span class="icon-star"></span> <span class="icon-star"></span> <span class="icon-star empty-star"></span> </div>
                                 <a href="#">1 Đánh giá</a> <a href="#">Thêm nhận xét của bạn</a> 
                              </div>
                              <!-- /product review --> 
                              <div class="product__inside__hover">
                                 <!-- product info -->
                                 <div class="product__inside__info">
                                    <div class="product__inside__info__btns"> <a href="#" class="btn btn--ys btn--xl"><span class="icon icon-shopping_basket"></span> Thêm vào giỏ hàng</a>
                                       <a href="#" class="btn btn--ys btn--xl visible-xs"><span class="icon icon-favorite_border"></span></a>
                                       <a href="#" class="btn btn--ys btn--xl visible-xs"><span class="icon icon-sort"></span></a>
                                       <a href="#" data-toggle="modal" data-target="#quickViewModal" class="btn btn--ys btn--xl  row-mode-visible hidden-xs"><span class="icon icon-visibility"></span> Xem nhanh</a> 
                                    </div>
                                    <ul class="product__inside__info__link hidden-sm">
                                       <li class="text-right"><span class="icon icon-favorite_border  tooltip-link"></span><a href="#"><span class="text">Thêm vào danh sách yêu thích</span></a></li>
                                       <li class="text-left"><span class="icon icon-sort  tooltip-link"></span><a href="#" class="compare-link"><span class="text">Thêm vào so sánh</span></a></li>
                                    </ul>
                                 </div>
                                 <!-- /product info --> 
                                 <!-- product rating -->
                                 <div class="rating row-mode-hide"> <span class="icon-star"></span> <span class="icon-star"></span> <span class="icon-star"></span> <span class="icon-star"></span> <span class="icon-star empty-star"></span> </div>
                                 <!-- /product rating --> 
                              </div>
                           </div>
                        </div>
                        <!-- /product --> 
                     </div>
                  </div>
                  <!-- filters row -->
                  <div class="filters-row">
                     <div class="pull-left">
                        <div class="filters-row__mode">
                              <a href="#" class="btn btn--ys slide-column-open visible-xs visible-sm hidden-xl hidden-lg hidden-md">Lọc</a> 
                           <a class="filters-row__view active link-grid-view btn-img btn-img-view_module"><span></span></a> 
                           <a class="filters-row__view link-row-view btn-img btn-img-view_list"><span></span></a> 
                        </div>
                        <div class="filters-row__select hidden-sm hidden-xs">
                           <label>Sắp xếp bởi: </label>
                           <div class="select-wrapper">
                              <select class="select--ys sort-position">
                                 <option>Tên</option>
                                 <option>Giá</option>
                                 <option>Đánh Giá</option>
                              </select>
                           </div>
                           <a href="#" class="sort-direction icon icon-arrow_back"></a> 
                        </div>
                     </div>
                     <div class="pull-right">
                        <div class="filters-row__items hidden-sm hidden-xs">28 Item(s)</div>
                        <div class="filters-row__select hidden-sm hidden-xs">
                           <label>Hiển Thị: </label>
                           <div class="select-wrapper">
                              <select class="select--ys show-qty">
                                 <option>25</option>
                                 <option>50</option>
                                 <option>100</option>
                              </select>
                           </div>
                           <a href="#" class="icon icon-arrow-down active"></a><a href="#" class="icon icon-arrow-up"></a> 
                        </div>
                        <div class="filters-row__pagination">
                           <ul class="pagination">
                              <li class="active"><a href="#">1</a></li>
                              <li><a href="#">2</a></li>
                              <li><a href="#">3</a></li>
                              <li><a href="#"><span class="icon icon-chevron_right"></span></a></li>
                           </ul>
                        </div>
                     </div>
                  </div>
                  <!-- /filters row --> 
               </aside>
               <!-- center column --> 
            </div>
            <!-- /two columns --> 
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
                        <h4 class="mobile-collapse__title visible-xs">ABOUT US</h4>
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
                           <div class="product-info__sku pull-left">Sản Phẩm: <strong>SD123</strong></div>
                           <div class="product-info__availabilitu pull-right">Trạng thái:   <strong class="color">Còn hàng</strong></div>
                        </div>
                        <div class="product-info__title">
                           <h2>ACER Aspire V</h2>
                        </div>
                        <div class="price-box product-info__price"><span class="price-box__new">800.000 VNĐ</span> <span class="price-box__old">1.000.000 VNĐ</span></div>
                        <div class="divider divider--xs product-info__divider"></div>
                        <div class="product-info__description">
                           <div class="product-info__description__brand"><img src="images/custom/brand.png" alt=""> </div>
                           <div class="product-info__description__text">Chi Tiết</div>
                        </div>
                        <div class="divider divider--xs product-info__divider"></div>
                        <div class="wrapper">
                           <div class="pull-left"><span class="option-label">Màu sắc:</span> </div>
                           <div class="pull-right required">* Chú ý</div>
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
                        </ul>
                        <div class="divider divider--sm"></div>
                        <div class="wrapper">
                           <div class="pull-left"><span class="qty-label">Số lượng:</span></div>
                           <div class="pull-left"><input type="text" name="quantity" class="input--ys qty-input pull-left" value="1"></div>
                           <div class="pull-left"><button type="submit" class="btn btn--ys btn--xxl"><span class="icon icon-shopping_basket"></span> Thêm vào giỏ hàng</button></div>
                        </div>
                        <ul class="product-link">
                           <li class="text-right"><span class="icon icon-favorite_border  tooltip-link"></span><a href="#"><span class="text">Thêm vào yêu thích</span></a></li>
                           <li class="text-left"><span class="icon icon-sort  tooltip-link"></span><a href="#"><span class="text">Thêm vào so sánh</span></a></li>
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