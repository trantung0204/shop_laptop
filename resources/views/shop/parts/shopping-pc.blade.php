<style type="text/css" media="screen">
   .user-account{
      display: inline;
      position: relative;
   }
   .user-account>div{
      display: inline-block;
   }
   .user-account:hover .btn-logout{
      display: inline-block;
      padding-left: 20px;
   }
   .user-account .btn-logout{
      position: absolute;
      top: -13px;
      right: -30px;
      font-size: 1.5em;
      color: #02a8f3;
      display: none;
      cursor: pointer;
   }
   .user-account .user-name{
      font-size: 1.2em;
      color: #02a8f3;
   }
   .cart__bottom .cart__total{
      margin-right: 20px;
   }
   #cart-destroy-btn{
      position: absolute;
   }
</style>
<div class="cart link-inline">
   <div class="dropdown text-right">
      <a class="dropdown-toggle cart-noti">
         <span class="icon icon-shopping_basket"></span>
         <span class="badge badge--cart cart-list-count"></span>
      </a>
      <div class="dropdown-menu dropdown-menu--xs-full slide-from-top" id="cart-dropdown" role="menu">
         <div class="container">
            <div class="cart__top">(CÁC) MỤC ĐƯỢC THÊM GẦN ĐÂY</div>
            <a href="#" class="icon icon-close cart__close"><span>ĐÓNG</span></a>
            <ul id="pc-cart-list">

            </ul>
            <div class="cart__bottom">
               <div id="cart-destroy-btn">
                  <button type="button" class="btn btn--ys">Xoá giỏ hàng</button>
               </div>
               <div class="cart__total">Tổng giỏ hàng: <span id="cart-list-total"></span></div>
               <a href="{{ asset('shop/checkout') }}" class="btn btn--ys btn-checkout">THANH TOÁN <span class="icon icon--flippedX icon-reply"></span></a>
               {{-- <a href="#" class="btn btn--ys"><span class="icon icon-shopping_basket"></span> XEM GIỎ HÀNG</a> --}}
            </div>
         </div>
      </div>
   </div>
</div>
<div class="user-account" >
   @if (Auth::check())
      <div class="user-name">
         {{Auth::user()->name}}
      </div>
      <div class="btn-logout">
         <i onclick="event.preventDefault(); document.getElementById('logout-form').submit();" class="fa fa-sign-out"></i>
         <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
             @csrf
         </form>
      </div>
   @else 
      <a href="{{ asset('login') }}" title="">Đăng nhập</a>
   @endif
</div>
