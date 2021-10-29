@extends("layouts.pages")
@section('pages','Shop')
@section('content')
  <div class="bg0 m-t-23 p-b-140">
    <div class="container">
      <div class="flex-w flex-sb-m p-b-52">
        <div class="flex-w flex-l-m filter-tope-group m-tb-10">
          <button class="stext-106 cl6 hov1 bor3 trans-04 m-r-32 m-tb-5 how-active1" data-filter="*">
            All Products
          </button>
          <x-filter :categories="$categories"/>
        </div>

        <div class="flex-w flex-c-m m-tb-10">
          <div class="flex-c-m stext-106 cl6 size-104 bor4 pointer hov-btn3 trans-04 m-r-8 m-tb-4 js-show-filter">
            <i class="icon-filter cl2 m-r-6 fs-15 trans-04 zmdi zmdi-filter-list"></i>
            <i class="icon-close-filter cl2 m-r-6 fs-15 trans-04 zmdi zmdi-close dis-none"></i>
            Filter
          </div>
        </div>
        <!-- Filter -->
        <x-filter-advance/>
      </div>

      <x-products :products="$products"/>

      <!-- Load more -->
      <div class="flex-c-m flex-w w-full p-t-45">
        <a href="#" class="flex-c-m stext-101 cl5 size-103 bg2 bor1 hov-btn1 p-lr-15 trans-04">
          Load More
        </a>
      </div>
    </div>
  </div>
@endsection
