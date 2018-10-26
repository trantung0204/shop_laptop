<!DOCTYPE html>
<html lang="en">
   <head>
      <!-- Basic -->
      <meta charset="utf-8">
      <title>T3 Store - Quality is Our Top </title>
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
               <li><a href="#">Sản Phẩm</a></li>
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
                  <!-- brands block -->
                  @if (isset($categories))
                     @foreach ($categories  as $key => $category)
                     <div class="collapse-block open">
                        <h4 class="collapse-block__title">{{$key}}</h4>
                        <div class="collapse-block__content">
                           <ul class="simple-list">
                           @foreach ($category as $key2 => $child)
                              @continue($key2=='parentSlug')
                              <li><a href="{{ asset('shop/category/') }}/{{$child->slug}}">{{$key2}}</a></li>
                           @endforeach
                           </ul>
                        </div>
                     </div>
                     @endforeach
                  @endif
                  <div class="collapse-block open">
                     <h4 class="collapse-block__title">Nhãn hiệu</h4>
                     <div class="collapse-block__content">
                        <ul class="simple-list">
                           @foreach ($brands  as $brand)
                              <li><a href="{{ asset('shop/brand/') }}/{{$brand->slug}}">{{$brand->name}}</a></li>
                           @endforeach
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
                  </div>
                  <!-- /filters row -->
                  <div class="product-listing row">
                     @if (isset($products))
                        @foreach ($products as $product)
                           <div class="col-xs-6 col-sm-4 col-md-6 col-lg-4 col-xl-one-fifth">
                              <!-- product -->
                              <div class="product product--zoom">
                                 <div class="product__inside">
                                    <!-- product image -->
                                    <div class="product__inside__image">
                                       @php
                                          $src=$product->link;
                                          $src=str_replace('public',asset('storage'),$src);
                                       @endphp
                                       <a href="{{ asset('shop/productShop/') }}/{{$product->slug}}"> <img src="{{$src}}" alt=""> </a> 
                                       <!-- quick-view --> 
                                       <a href="{{ asset('shop/productShop/') }}/{{$product->slug}}" class="quick-view"><b><span class="icon icon-visibility"></span> Xem</b> </a> 
                                       <!-- /quick-view --> 
                                    </div>
                                    <!-- /product image --> 
                                    <!-- product name -->
                                    <div class="product__inside__name">
                                       <h2><a href="{{ asset('shop/productShop/') }}/{{$product->slug}}">{{$product->name}}</a></h2>
                                    </div>
                                    <!-- /product name -->                 
                                    <!-- product description --> 
                                    <!-- visible only in row-view mode -->
                                    {{-- <div class="product__inside__description row-mode-visible"> Chi Tiết Sản Phẩm</div> --}}
                                    <!-- /product description -->                 <!-- product price -->
                                    <div class="product__inside__price price-box"><span class="product_price">{{$product->sale_price}}</span><br><span class="price-box__old product_price">{{$product->origin_price}}</span></div>
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
                                          <div class="product__inside__info__btns">
                                             <a href="#" class="btn btn--ys btn--xl visible-xs"><span class="icon icon-favorite_border"></span></a>
                                             <a href="#" class="btn btn--ys btn--xl visible-xs"><span class="icon icon-sort"></span></a>
                                             <a href="{{ asset('shop/productShop/') }}/{{$product->slug}}" data-toggle="modal" data-target="#quickViewModal" class="btn btn--ys btn--xl  row-mode-visible hidden-xs"><span class="icon icon-visibility"></span> Xem thêm</a> 
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
                        @endforeach
                     @endif
                  </div>
                  <!-- filters row -->
                  <div class="filters-row">
                     <div class="pull-left">
                        <div class="filters-row__mode">
                              <a href="#" class="btn btn--ys slide-column-open visible-xs visible-sm hidden-xl hidden-lg hidden-md">Lọc</a> 
                           <a class="filters-row__view active link-grid-view btn-img btn-img-view_module"><span></span></a> 
                           <a class="filters-row__view link-row-view btn-img btn-img-view_list"><span></span></a> 
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
      @include('shop.parts.footer')
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
      <script src="https://code.jquery.com/jquery.js"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>              
      <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js" type="text/javascript" charset="utf-8" async defer></script>
      <script src="{{ asset('js/autoNumeric-min.js') }}"></script>
      <script type="text/javascript">
         var asset='{{ asset('/') }}';
      </script>
      <script src="{{ asset('shop_asset/') }}/ajax/ajax-product.js"></script>  
   </body>
</html>