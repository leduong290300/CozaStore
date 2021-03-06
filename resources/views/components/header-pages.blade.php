<header class="header-v4">
  <!-- Header desktop -->
  <div class="container-menu-desktop">

    <div class="wrap-menu-desktop how-shadow1">
      <nav class="limiter-menu-desktop container">

        <!-- Logo desktop -->
        <a href="{{route('home')}}" class="logo">
          <img src="{{asset('assets/image/icons/logo-01.png')}}" alt="IMG-LOGO">
        </a>

        <!-- Menu desktop -->
        <div class="menu-desktop">
          <ul class="main-menu">
            <li class="header">
              <a href="{{route('home')}}">Home</a>
            </li>

            <li class="header label1" data-label1="hot">
              <a href="{{route('shop')}}">Shop</a>
            </li>

            <li class="header">
              <a href="{{route('blog')}}">Blog</a>
            </li>

            <li class="header">
              <a href="{{route('about')}}">About</a>
            </li>

            <li class="header">
              <a href="{{route('contact')}}">Contact</a>
            </li>
          </ul>
        </div>

        <!-- Icon header -->
        <div class="wrap-icon-header flex-w flex-r-m">
          <div class="icon-header-item cl2 hov-cl1 trans-04 p-l-22 p-r-11 js-show-modal-search">
            <i class="zmdi zmdi-search"></i>
          </div>

          <div class="icon-header-item cl2 hov-cl1 trans-04 p-l-22 p-r-11 icon-header-noti js-show-cart"
               data-notify="{{showQuality()}}">
            <i class="zmdi zmdi-shopping-cart"></i>
          </div>

          <div id="dropdownUser" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="dis-block icon-header-item cl2 hov-cl1 trans-04 p-l-22 p-r-11" >
            <i class="zmdi zmdi-account-circle" > </i>
          </div>
          <div class="dropdown-menu" aria-labelledby="dropdownUser">
            @if(auth()->check())
              <a class="dropdown-item" href="#">Profile</a>
              <a class="dropdown-item" href="">Logout</a>
            @else
              <a class="dropdown-item" href="{{route('customer_login')}}">Login</a>
            @endif
          </div>
        </div>
      </nav>
    </div>
  </div>

  <!-- Header Mobile -->
  <div class="wrap-header-mobile">
    <!-- Logo moblie -->
    <div class="logo-mobile">
      <a href="{{route('home')}}"><img src="{{asset('assets/image/icons/logo-01.png')}}" alt="IMG-LOGO"></a>
    </div>

    <!-- Icon header -->
    <div class="wrap-icon-header flex-w flex-r-m m-r-15">
      <div class="icon-header-item cl2 hov-cl1 trans-04 p-r-11 js-show-modal-search">
        <i class="zmdi zmdi-search"></i>
      </div>

      <div class="icon-header-item cl2 hov-cl1 trans-04 p-r-11 p-l-10 icon-header-noti js-show-cart" data-notify="{{showQuality()}}">
        <i class="zmdi zmdi-shopping-cart"></i>
      </div>

      <div id="dropdownUser" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="dis-block icon-header-item cl2 hov-cl1 trans-04 p-l-22 p-r-11" >
        <i class="zmdi zmdi-account-circle" > </i>
      </div>
      <div class="dropdown-menu" aria-labelledby="dropdownUser">
        @if(auth()->check())
          <a class="dropdown-item" href="#">Profile</a>
          <a class="dropdown-item" href="">Logout</a>
        @else
          <a class="dropdown-item" href="{{route('customer_login')}}">Login</a>
        @endif
      </div>
    </div>

    <!-- Button show menu -->
    <div class="btn-show-menu-mobile hamburger hamburger--squeeze">
				<span class="hamburger-box">
					<span class="hamburger-inner"></span>
				</span>
    </div>
  </div>


  <!-- Menu Mobile -->
  <div class="menu-mobile">
    <ul class="main-menu-m">
      <li>
        <a href="{{route('home')}}">Home</a>
        <span class="arrow-main-menu-m">
						<i class="fa fa-angle-right" aria-hidden="true"></i>
					</span>
      </li>

      <li>
        <a href="{{route('shop')}}">Shop</a>
      </li>

      <li>
        <a href="{{route('blog')}}">Blog</a>
      </li>

      <li>
        <a href="{{route('about')}}">About</a>
      </li>

      <li>
        <a href="{{route('contact')}}">Contact</a>
      </li>
    </ul>
  </div>

  <!-- Modal Search -->
  <div class="modal-search-header flex-c-m trans-04 js-hide-modal-search">
    <div class="container-search-header">
      <button class="flex-c-m btn-hide-modal-search trans-04 js-hide-modal-search">
        <img src="{{asset('assets/image/icons/icon-close2.png')}}" alt="CLOSE">
      </button>

      <form class="wrap-search-header flex-w p-l-15">
        <button class="flex-c-m trans-04">
          <i class="zmdi zmdi-search"></i>
        </button>
        <input class="plh3" type="text" name="search" placeholder="Search...">
      </form>
    </div>
  </div>
</header>
