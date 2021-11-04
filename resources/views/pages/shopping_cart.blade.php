@extends("layouts.pages")
@section('pages','Cart')
@section('breadcrumb')
  <x-breadcrumb/>
@endsection
@section('content')
  <form class="bg0 p-t-75 p-b-85">
    <div class="container">
      <div class="row">
        <div class="col-lg-10 col-xl-12 m-lr-auto m-b-50">
          <div class="m-l-25 m-r--38 m-lr-0-xl">
            <div class="wrap-table-shopping-cart">
              <table class="table-shopping-cart">
                <tr class="table_head">
                  <th class="column-1">Product</th>
                  <th class="column-2"></th>
                  <th class="column-3">Price</th>
                  <th class="column-4">Quantity</th>
                  <th class="column-4">Total</th>
                  <th class="column-5"></th>
                </tr>
                @if($carts)
                  @php $total = 0 @endphp
                  @foreach($carts as $id => $cart)
                    @php $total += $cart['quanlity'] * $cart['price'] @endphp
                    <tr class="table_row">
                      <td class="column-1">
                        <div class="how-itemcart1">
                          <img src="{{asset('storage/upload/products/'.$cart['image'])}}" alt="{{$cart['name']}}">
                        </div>
                      </td>
                      <td class="column-2">{{$cart['name']}}</td>
                      <td class="column-3">{{$cart['price']}}$</td>
                      <td class="column-4">
                        <div class="wrap-num-product flex-w m-l-auto m-r-0">
                          <div class="btn-num-product-down cl8 hov-btn3 trans-04 flex-c-m btn-decrease"
                          data-url="{{route('order.update',$id)}}"
                               data-id="{{$id}}"
                          >
                            <i class="fs-16 zmdi zmdi-minus"></i>
                          </div>

                          <input class="mtext-104 cl3 txt-center num-product" type="number" name="num-product1" value="{{$cart['quanlity']}}">

                          <div class="btn-num-product-up cl8 hov-btn3 trans-04 flex-c-m btn-increase"
                               data-url="{{route('order.update',$id)}}"
                               data-id="{{$id}}"
                          >
                            <i class="fs-16 zmdi zmdi-plus"></i>
                          </div>
                        </div>
                      </td>
                      <td class="column-4">{{$cart['quanlity'] * $cart['price']}}$</td>
                      <td class="column-5">
                        <i class="fa fa-close remove-cart"
                        data-url="{{route('order.destroy',$id)}}"
                        ></i>
                      </td>
                    </tr>
                  @endforeach
                @endif
              </table>
            </div>

            <div class="flex-w flex-sb-m bor15 p-t-18 p-b-15 p-lr-40 p-lr-15-sm">
              <div class="flex-w flex-m m-r-20 m-tb-5">
                <input class="stext-104 cl2 plh4 size-117 bor13 p-lr-20 m-r-10 m-tb-5" type="text" name="coupon" placeholder="Coupon Code">
              </div>

              <div class="flex-c-m stext-101 cl2 size-119 bg8 bor13 hov-btn3 p-lr-15 trans-04 pointer m-tb-10">
                Apply coupon
              </div>
            </div>
          </div>
        </div>

        <div class="col-sm-10 col-lg-12 col-xl-12 m-lr-auto m-b-50">
          <div class="bor10 p-lr-40 p-t-30 p-b-40 m-l-63 m-r-40 m-lr-0-xl p-lr-15-sm">
            <h4 class="mtext-109 cl2 p-b-30">
              Cart Totals
            </h4>

            <div class="flex-w flex-t bor12 p-t-15 p-b-30">
              <div class="size-208 w-full-ssm">
								<span class="stext-110 cl2">
									Shipping:
								</span>
              </div>

              <div class="size-209 p-r-18 p-r-0-sm w-full-ssm">
                <div class="form-group">
                  <label>Address</label>
                  <textarea class="form-control address" rows="3">
                  @if(auth()->check())
                    {{auth()->user()->address}}
                    @endif
                </textarea>
                </div>
                <div class="form-group">
                  <label>Name</label>
                  <input class="form-control name"  @if(auth()->check())
                    value="{{auth()->user()->username}}"
                    @endif>
                </div>
                <div class="form-group">
                  <label>Email</label>
                  <input class="form-control email" @if(auth()->check())
                  value="{{auth()->user()->email}}"
                    @endif>
                </div>
                <div class="form-group">
                  <label>Number phone</label>
                  <input class="form-control phone" @if(auth()->check())
                  value="{{auth()->user()->phone_number}}"
                    @endif>
                </div>
              </div>
            </div>

            <div class="flex-w flex-t p-t-27 p-b-33">
              <div class="size-208">
								<span class="mtext-101 cl2">
									Total:
								</span>
              </div>

              <div class="size-209 p-t-1">
								<span class="mtext-110 cl2">
									{{$total ?? '0'}}$
								</span>
              </div>
            </div>

            <button class="flex-c-m stext-101 cl2 size-119 bg8 bor13 hov-btn3 p-lr-15 trans-04 pointer m-tb-10 btn-checkout"
            data-url="{{route('purchaseProduct')}}"
            >
              Checkout
            </button>
          </div>
        </div>
      </div>
    </div>
  </form>
@endsection
