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
               <div class="cart__total">Tổng giỏ hàng: <span id="cart-list-total"></span></div>
               <a href="{{ asset('shop/checkout') }}" class="btn btn--ys btn-checkout">THANH TOÁN <span class="icon icon--flippedX icon-reply"></span></a>
               {{-- <a href="#" class="btn btn--ys"><span class="icon icon-shopping_basket"></span> XEM GIỎ HÀNG</a> --}}
            </div>
         </div>
      </div>
   </div>
</div>