<div class="wrap-header-cart js-panel-cart">
  <div class="s-full js-hide-cart"></div>

  <div class="header-cart flex-col-l p-l-65 p-r-25">
    <div class="header-cart-title flex-w flex-sb-m p-b-8">
				<span class="mtext-103 cl2">
					Your Cart
				</span>

      <div class="fs-35 lh-10 cl2 p-lr-5 pointer hov-cl1 trans-04 js-hide-cart">
        <i class="zmdi zmdi-close"></i>
      </div>
    </div>

    <div class="header-cart-content flex-w js-pscroll">
      @if($carts)
          @php
          $totalCart = 0;
          @endphp
          <ul class="header-cart-wrapitem w-full">
            @foreach($carts as $id => $cart)
             @php
             $totalCart += $cart['quanlity']*$cart['price']
             @endphp
            <li class="header-cart-item flex-w flex-t m-b-12">
              <div class="header-cart-item-img">
                <img src="{{asset('storage/upload/products/'.$cart['image'])}}" alt="{{$cart['name']}}">
              </div>

              <div class="header-cart-item-txt p-t-8">
                <a href="{{route('product.show',$id)}}" class="header-cart-item-name m-b-18 hov-cl1 trans-04">
                  {{$cart['name']}}
                </a>
                <span class="header-cart-item-info">
								{{$cart['quanlity']}} x {{$cart['price']}}$
							</span>
              </div>
            </li>
            @endforeach
          </ul>
      @else
        <img style="border:none" src="{{asset('assets/image/empty-cart/empty_cart-1200x900.png')}}" alt="..." class="img-thumbnail">
      @endif

      <div class="w-full">
        <div class="header-cart-total w-full p-tb-40">

          Total: @if(isset($totalCart)) {{$totalCart}} @else 0 @endif$
        </div>

        <div class="header-cart-buttons flex-w w-full">
          <a href="{{route('order.index')}}" class="flex-c-m stext-101 cl0 size-107 bg3 bor2 hov-btn3 p-lr-15 trans-04 m-b-10">
            View Cart
          </a>
        </div>
      </div>
    </div>
  </div>
</div>
