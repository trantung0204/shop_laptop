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
                           @include('shop.parts.shopping-mobile')
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
               <li><a href="#">Laptop</a></li>
               <li class="active">Dell</li>
            </ol>
         </div>
      </div>
      <!-- /breadcrumbs --> 
      <!-- CONTENT section -->
      <div id="pageContent">
         <section class="content offset-top-0">
            <div class="container">
               <div class="row product-info-outer">
                  <div id="productPrevNext" class="hidden-xs hidden-sm">
                     <a href="#" class="product-prev"><img src="images/product/product-2.jpg" alt="" /></a>
                     <a href="#" class="product-next"><img src="images/product/product-3.jpg" alt="" /></a>
                  </div>
                  <div class="col-sm-12 col-md-12 col-lg-12 col-xl-8">
                     <div class="row">
                        <div class="col-sm-6 col-md-6 col-lg-6 col-xl-6 hidden-xs">
                           <div class="product-main-image">
                              <div class="product-main-image__item"><img class="product-zoom" src='images/product/product-big-1.jpg' data-zoom-image="images/product/product-big-1-zoom.jpg" alt="" /></div>
                              <div class="product-main-image__zoom"></div>
                           </div>
                           <div class="product-images-carousel">
                              <ul id="smallGallery">
                                 <li><a href="#" data-image="images/product/product-big-1.jpg" data-zoom-image="images/product/product-big-1-zoom.jpg"><img src="images/product/product-small-1.jpg" alt="" /></a></li>
                                 <li><a href="#" data-image="images/product/product-big-2.jpg" data-zoom-image="images/product/product-big-2-zoom.jpg"><img src="images/product/product-small-2.jpg" alt="" /></a></li>
                                 <li><a href="#" data-image="images/product/product-big-3.jpg" data-zoom-image="images/product/product-big-3-zoom.jpg"><img src="images/product/product-small-3.jpg" alt="" /></a></li>
                                 <li><a href="#" data-image="images/product/product-big-4.jpg" data-zoom-image="images/product/product-big-4-zoom.jpg"><img src="images/product/product-small-4.jpg" alt="" /></a></li>
                                 <li><a href="#" data-image="images/product/product-big-5.jpg" data-zoom-image="images/product/product-big-5-zoom.jpg"><img src="images/product/product-small-5.jpg" alt="" /></a></li>
                              </ul>
                           </div>
                           <a href="http://www.youtube.com/watch?v=0O2aH4XLbto" class="video-link"><span class="icon icon-videocam"></span>Video</a>
                        </div>
                        <div class="product-info col-sm-6 col-md-6 col-lg-6 col-xl-6">
                           <div class="wrapper hidden-xs">
                              <div class="product-info__sku pull-left">Mã sản phẩm: <strong>mtk012c</strong></div>
                              <div class="product-info__availability pull-right">Trạng thái:   <strong class="color">Còn hàng</strong></div>
                           </div>
                           <div class="product-info__title">
                              <h2>Tên sản phẩm</h2>
                           </div>
                           <div class="wrapper visible-xs">
                              <div class="product-info__sku pull-left">Mã sản phẩm: <strong>mtk012c</strong></div>
                              <div class="product-info__availability pull-right">Trạng thái:   <strong class="color">Còn hàng</strong></div>
                           </div>
                           <div class="visible-xs">
                              <div class="clearfix"></div>
                              <ul id="mobileGallery">
                                 <li><a href="#" data-image="images/product/product-big-1.jpg" data-zoom-image="images/product/product-big-1-zoom.jpg"><img src="images/product/product-small-1.jpg" alt="" /></a></li>
                                 <li><a href="#" data-image="images/product/product-big-2.jpg" data-zoom-image="images/product/product-big-2-zoom.jpg"><img src="images/product/product-small-2.jpg" alt="" /></a></li>
                                 <li><a href="#" data-image="images/product/product-big-3.jpg" data-zoom-image="images/product/product-big-3-zoom.jpg"><img src="images/product/product-small-3.jpg" alt="" /></a></li>
                                 <li><a href="#" data-image="images/product/product-big-4.jpg" data-zoom-image="images/product/product-big-4-zoom.jpg"><img src="images/product/product-small-4.jpg" alt="" /></a></li>
                                 <li><a href="#" data-image="images/product/product-big-5.jpg" data-zoom-image="images/product/product-big-5-zoom.jpg"><img src="images/product/product-small-5.jpg" alt="" /></a></li>
                              </ul>
                           </div>
                           <div class="price-box product-info__price"><span class="price-box__new">800.000 VNĐ</span> <span class="price-box__old">1.000.000 VNĐ</span></div>
                           <div class="product-info__review">
                              <div class="rating"> <span class="icon-star"></span> <span class="icon-star"></span> <span class="icon-star"></span> <span class="icon-star"></span> <span class="icon-star empty-star"></span> </div>
                              <a href="#">1 Đánh giá</a> <a href="#">Thêm đánh giá của bạn</a> 
                           </div>
                           <div class="divider divider--xs product-info__divider hidden-xs"></div>
                           <div class="product-info__description hidden-xs">
                              <div class="product-info__description__brand"><img src="images/custom/brand.png"  alt="" /> </div>
                              <div class="product-info__description__text">Chi tiết sản phẩm</div>
                           </div>
                           <div class="divider divider--xs product-info__divider"></div>
                           <div class="wrapper">
                              <div class="pull-left"><span class="option-label">Màu sắc:</span></div>
                              <div class="pull-right required">* Bắt buộc</div>
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
                              <div class="pull-left"><span class="qty-label">Số lượng:</span></div>
                              <div class="pull-left">                               
                                 <!--  -->
                                 <div class="number input-counter">
                                     <span class="minus-btn"></span>
                                     <input type="text" value="1" size="5"/>
                                     <span class="plus-btn"></span>
                                 </div>
                                 <!-- / -->
                              </div>
                              <div class="pull-left"><button type="submit" class="btn btn--ys btn--xxl"><span class="icon icon-shopping_basket"></span> Thêm vào giỏ hàng</button></div>
                           </div>
                           <ul class="product-link">
                              <li class="text-right"><a href="#"><span class="icon icon-favorite_border  tooltip-link"></span><span class="text">Thêm vào yêu thích</span></a></li>
                           </ul>                         
                        </div>   
                     </div>
                     <div class="content">
                        <!-- Nav tabs -->
                        <ul class="nav nav-tabs nav-tabs--ys1" role="tablist">
                           <li class="active"><a href="#Tab1"  role="tab" data-toggle="tab" class="text-uppercase">Miêu Tả</a></li>
                           <li><a href="#Tab2" role="tab" data-toggle="tab" class="text-uppercase">Đánh Giá</a></li>
                           <li><a href="#Tab3" role="tab" data-toggle="tab" class="text-uppercase">Tags</a></li>
                           <li><a href="#Tab5" role="tab" data-toggle="tab" class="text-uppercase">Sizing Guide</a></li>
                        </ul>
                        <!-- Tab panes -->
                        <div class="tab-content tab-content--ys nav-stacked">
                           <div role="tabpanel" class="tab-pane active" id="Tab1">
                              <p>Miêu tả</p>
                              <div class="divider divider--md"></div>
                              <table class="table table-params">
                                 <tbody>
                                    <tr>
                                       <td class="text-right"><span class="color">PROOF</span></td>
                                       <td>PDF Proof</td>
                                    </tr>
                                    <tr>
                                       <td class="text-right"><span class="color">SAMPLES</span></td>
                                       <td>Digital, Printed</td>
                                    </tr>
                                    <tr>
                                       <td class="text-right"><span class="color">WRAPPING</span></td>
                                       <td>Yes,  No</td>
                                    </tr>
                                    <tr>
                                       <td class="text-right"><span class="color">UV GLOSS COATING</span></td>
                                       <td>Yes</td>
                                    </tr>
                                    <tr>
                                       <td class="text-right"><span class="color">SHRINK WRAPPING</span></td>
                                       <td>No Shrink Wrapping, Shrink in 25s, Shrink in 50s, Shrink in 100s</td>
                                    </tr>
                                    <tr>
                                       <td class="text-right"><span class="color">WEIGHT</span></td>
                                       <td>0.05, 0.06, 0.07ess cards</td>
                                    </tr>
                                 </tbody>
                              </table>
                           </div>
                           <div role="tabpanel" class="tab-pane" id="Tab2">
                              <h5><strong class="color">CUSTOMER REVIEWS 1 ITEM(S)</strong></h5>
                              <p> GREAT!</p>
                              <p>Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. </p>
                              <div class="divider divider--xs"></div>
                              <p class="color-light">Review by User / (posted on 16/9/2016)</p>
                              <div class="divider divider--xs"></div>
                              <h5><strong class="color">WRITE YOUR OWN REVIEW</strong></h5>
                              <p><span class="color">YOU'RE REVIEWING:</span>  Lorem ipsum dolor sit amet conse ctetur</p>
                              <p><span class="color">HOW DO YOU RATE THIS PRODUCT?</span></p>
                              <div class="divider divider--xs"></div>
                              <div class="divider divider--xs"></div>
                              <form action="#" class="contact-form">
                                 <label>Nickname<span class="required">*</span></label>
                                 <input type="text" class="input--ys input--ys--full">
                                 <label>Summary of Your Review<span class="required">*</span></label>
                                 <input type="text" class="input--ys input--ys--full">
                                 <label>Review<span class="required">*</span></label>
                                 <textarea class="textarea--ys input--ys--full"></textarea>
                                 <div class="divider divider--xs"></div>
                                 <button type="submit" class="btn btn--ys text-uppercase">Submit Review</button>
                              </form>
                           </div>
                           
                           
                           <div role="tabpanel" class="tab-pane" id="Tab5">
                              <h5><strong class="color text-uppercase">Clothing - Single Size Conversion (Continued)</strong></h5>
                              <div class="divider divider--xs"></div>
                           </div>
                        </div>
                     </div>
                  </div>                  
                  
               </div>
            </div>
         </section>        
         <!-- related products -->
         <!-- /related products -->
      </div>
      <!-- End CONTENT section --> 
      <!-- FOOTER section -->
      @include('shop.parts.footer')
      <!-- END FOOTER section -->
      <!-- Modal (quickViewModal) -->     
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
      <script src="external/imagesloaded/imagesloaded.pkgd.min.js"></script> 
      <script src="external/elevatezoom/jquery.elevatezoom.js"></script>
      <script src="external/colorbox/jquery.colorbox-min.js"></script> 
      <!-- Custom --> 
      <script src="js/custom.js"></script> 
      <script src="js/js-product.js"></script>     
   </body>
</html>