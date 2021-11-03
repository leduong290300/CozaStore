<!DOCTYPE html>
<html lang="en">
<head>
  <title>{{config('app.name')}} | Home</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <!--===============================================================================================-->
  <link rel="icon" type="image/png" href="{{asset('assets/image/icons/favicon.png')}}"/>
  <!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="{{asset('assets/lib/bootstrap/css/bootstrap.min.css')}}">
  <!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="{{asset('assets/fonts/font-awesome-4.7.0/css/font-awesome.min.css')}}">
  <!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="{{asset('assets/fonts/iconic/css/material-design-iconic-font.min.css')}}">
  <!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="{{asset('assets/fonts/linearicons-v1.0.0/icon-font.min.css')}}">
  <!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="{{asset('assets/lib/animate/animate.css')}}">
  <!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="{{asset('assets/lib/css-hamburgers/hamburgers.min.css')}}">
  <!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="{{asset('assets/lib/animsition/css/animsition.min.css')}}">
  <!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="{{asset('assets/lib/select2/select2.css')}}">
  <!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="{{asset('assets/lib/daterangepicker/daterangepicker.css')}}">
  <!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="{{asset('assets/lib/slick/slick.css')}}">
  <!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="{{asset('assets/lib/MagnificPopup/magnific-popup.css')}}">
  <!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="{{asset('assets/lib/perfect-scrollbar/perfect-scrollbar.css')}}">
  <!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="{{asset('assets/css/util.css')}}">
  <link rel="stylesheet" type="text/css" href="{{asset('assets/css/main.css')}}">
  <!--===============================================================================================-->
</head>
<body class="animsition">

<!-- Header -->
<x-header-home/>

<!-- Cart -->
<x-cart :carts="$carts"/>



<!-- Slider -->
<x-sliders :sliders="$sliders"/>


<!-- Banner -->
<x-banners :categories="$categories"/>


<!-- Product -->
<section class="bg0 p-t-23 p-b-140">
  <div class="container">
    <div class="p-b-10">
      <h3 class="ltext-103 cl5">
        Product Overview
      </h3>
    </div>
    <div class="flex-w flex-sb-m p-b-52">
      <div class="flex-w flex-l-m filter-tope-group m-tb-10">
        <button class="stext-106 cl6 hov1 bor3 trans-04 m-r-32 m-tb-5 how-active1" data-filter="*">
          All Products
        </button>
        <x-filter :categories="$categories"/>
      </div>
    </div>
    <x-products :products="$products"/>
    <!-- Load more -->
    <div class="flex-c-m flex-w w-full p-t-45">
      <a href="{{route('shop')}}" class="flex-c-m stext-101 cl5 size-103 bg2 bor1 hov-btn1 p-lr-15 trans-04">
        Go To Shop
      </a>
    </div>
  </div>
</section>

<!-- Footer -->
<x-footer :categories="$categories"/>


<!-- Back to top -->
<div class="btn-back-to-top" id="myBtn">
		<span class="symbol-btn-back-to-top">
			<i class="zmdi zmdi-chevron-up"></i>
		</span>
</div>



<!--===============================================================================================-->
<script src="{{asset('assets/lib/jquery/jquery-3.2.1.min.js')}}"></script>
<!--===============================================================================================-->
<script src="{{asset('assets/lib/animsition/js/animsition.min.js')}}"></script>
<!--===============================================================================================-->
<script src="{{asset('assets/lib/bootstrap/js/popper.js')}}"></script>
<script src="{{asset('assets/lib/bootstrap/js/bootstrap.min.js')}}"></script>
<!--===============================================================================================-->
<script src="{{asset('assets/lib/select2/select2.min.js')}}"></script>
<script>
    $(".js-select2").each(function(){
        $(this).select2({
            minimumResultsForSearch: 20,
            dropdownParent: $(this).next('.dropDownSelect2')
        });
    })
</script>
<!--===============================================================================================-->
<script src="{{asset('assets/lib/daterangepicker/moment.min.js')}}"></script>
<script src="{{asset('assets/lib/daterangepicker/daterangepicker.js')}}"></script>
<!--===============================================================================================-->
<script src="{{asset('assets/lib/slick/slick.min.js')}}"></script>
<script src="{{asset('assets/js/slick-custom.js')}}"></script>
<!--===============================================================================================-->
<script src="{{asset('assets/lib/parallax100/parallax100.js')}}"></script>
<script>
    $('.parallax100').parallax100();
</script>
<!--===============================================================================================-->
<script src="{{asset('assets/lib/MagnificPopup/jquery.magnific-popup.min.js')}}"></script>
<script>
    $('.gallery-lb').each(function() { // the containers for all your galleries
        $(this).magnificPopup({
            delegate: 'a', // the selector for gallery item
            type: 'image',
            gallery: {
                enabled:true
            },
            mainClass: 'mfp-fade'
        });
    });
</script>
<!--===============================================================================================-->
<script src="{{asset('assets/lib/isotope/isotope.pkgd.min.js')}}"></script>
<!--===============================================================================================-->
<script src="{{asset('assets/lib/sweetalert/sweetalert.min.js')}}"></script>
<!--===============================================================================================-->
<script src="{{asset('assets/lib/perfect-scrollbar/perfect-scrollbar.min.js')}}"></script>
<script>
    $('.js-pscroll').each(function(){
        $(this).css('position','relative');
        $(this).css('overflow','hidden');
        var ps = new PerfectScrollbar(this, {
            wheelSpeed: 1,
            scrollingThreshold: 1000,
            wheelPropagation: false,
        });

        $(window).on('resize', function(){
            ps.update();
        })
    });
</script>
<!--===============================================================================================-->
<script src="{{asset('assets/js/main.js')}}"></script>

</body>
</html>
