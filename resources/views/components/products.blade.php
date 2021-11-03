@if($products)
    <div class="row isotope-grid">
      @forelse($products as $product)
      <div class="col-sm-6 col-md-4 col-lg-3 p-b-35 isotope-item {{$product->categories_id}}">
        <!-- Block2 -->
        <div class="block2">
          <div class="block2-pic hov-img0">
            <img src="{{asset('storage/upload/products/'.$product->image)}}" alt="{{$product->name}}">

            <a href="#" class="block2-btn flex-c-m stext-103 cl2 size-102 bg0 bor2 hov-btn1 p-lr-15 trans-04 js-show-modal1">
              Quick View
            </a>
          </div>

          <div class="block2-txt flex-w flex-t p-t-14">
            <div class="block2-txt-child1 flex-col-l ">
              <a href="{{route('product.show',$product->id)}}" class="stext-104 cl4 hov-cl1 trans-04 js-name-b2 p-b-6">
                {{$product->name}}
              </a>
              <span class="stext-105 cl3">
									{{$product->price}}$
								</span>
            </div>
          </div>
        </div>
      </div>
      <!-- Modal1 -->
      <x-modal-preview :product="$product"/>
      @empty
        "Not found"
      @endforelse
    </div>
@endif

