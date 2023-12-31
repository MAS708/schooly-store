<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <!-- CSRF Token -->
  <meta name="csrf-token" content="{{ csrf_token() }}">

  <title>Schooly Store</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="{{asset('assets/img/Logo Schooly Store.svg')}}" rel="icon">

  <!--font awesome-->
  <link href="{{asset('assets/vendor/fontawesome-free-5.15.2-web/css/all.min.css')}}" rel="stylesheet">
  <link href="{{asset('assets/vendor/fontawesome-free-5.15.2-web/css/fontawesome.min.css')}}" rel="stylesheet">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{asset('assets/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
  <link href="{{asset('assets/vendor/icofont/icofont.min.css')}}" rel="stylesheet">
  <link href="{{asset('assets/vendor/boxicons/css/boxicons.min.css')}}" rel="stylesheet">
  <link href="{{asset('assets/vendor/owl.carousel/assets/owl.carousel.min.css')}}" rel="stylesheet">
  <link href="{{asset('assets/vendor/remixicon/remixicon.css')}}" rel="stylesheet">
  <link href="{{asset('assets/vendor/venobox/venobox.css')}}" rel="stylesheet">
  <link href="{{asset('assets/vendor/aos/aos.css')}}" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="{{asset('assets/css/style.css')}}" rel="stylesheet">

  <!-- Hidden Arrow From Input Number -->
  <style>
    /* Chrome, Safari, Edge, Opera */
    input::-webkit-outer-spin-button,
    input::-webkit-inner-spin-button {
      -webkit-appearance: none;
      margin: 0;
    }

    /* Firefox */
    input[type=number] {
      -moz-appearance: textfield;
    }
    </style>

</head>

<body>

    <!-- ======= Header ======= -->
      <header id="header" class="fixed-top">
        <!--Logo-->
        <div class="container d-flex align-items-center justify-content-center">
          <div class="row">
            <h1 class="logo ml-auto"><a href="{{route('index')}}"><img src="{{asset('assets/img/Logo Schooly Store.svg')}}" alt="" class="img-fluid"></a></h1>
          </div>
        </div>
        <!--Menu-->
        <div class="container-fluid mt-3 ml-4 ml-4 ">
            <nav class="nav-menu d-none d-lg-block">
                <div class="row">
                    <div class="col-3 d-none d-lg-block">
                        <div class="row">
                            <div class="menu-icon d-none d-lg-block ml-auto ">
                                <a href="{{route('index')}}"><img src="{{asset('assets/img/home.svg')}}" alt="" class="img-fluid mt-2"></a>
                            </div>
                            <div class="menu d-none d-lg-block ml-5 mr-4 mt-3 ">
                                <a href="{{route('index')}}">Home</a>
                            </div>
                        </div>
                    </div>
                    <div class="col d-none d-lg-block border-right border-left">
                        <div class="row mt-3 ">
                            <div class="menu m-auto d-none d-lg-block" style="text-align: center">
                                @auth
                                    @if(auth()->user()->hasRole('seller'))
                                    <a href="{{ route('voyager.dashboard') }}">Go to Your Shop</a>
                                    @elseif(auth()->user()->hasRole('admin'))
                                    <a href="{{ route('voyager.dashboard') }}">Admin Panel</a>
                                    @elseif(auth()->user()->hasRole('user'))
                                    <a href="{{ route('shops.create') }}">Open Your Shop</a>
                                    @endif
                                    @else
                                    <a href="{{ route('login') }}">Open Your Shop</a>
                                 @endauth
                            </div>
                        </div>
                    </div>
                    <div class="col-5 d-none d-lg-block">
                        <div class="row mt-1 ">
                            <div class="Search d-none d-lg-block ml-4">
                                <form class="form-inline my-2 my-lg-0  " action="{{ route('searcher') }}" method="GET">
                                    <div class="search-box border-bottom border-secondary ">
                                     <small><input class="search-txt" type="search" placeholder="Search Product" aria-label="Search" name="search"></small>
                                     <img src="{{asset('assets/img/Search.svg')}}" alt="" class="img-fluid" type="submit">
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="col-3 d-none d-lg-block">
                        <div class="row ">
                        <div class="menu d-none d-lg-block mt-2 mr-4">
                            <a href="{{ route('cart.index')}}"><img src="{{asset('assets/img/Shopping Card.svg')}}" alt="" class="img-fluid mr-3 mb-2">Shopping Bag</a>
                        </div>
                            <div class="dropdown">
                                <div class="user d-none d-lg-block ml-4 mt-1" type="button" id="dropdownakun" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <img src="{{asset('assets/img/team/team-1.jpg')}}" alt="" class="img-fluid box-user">
                                </div>
                                <div class="dropdown-menu" aria-labelledby="dropdownakun">
                                    @guest
                                        <div class="menu mt-2" style="cursor: pointer"><a href="{{ route('login') }}"><i class="fas fa-sign-in-alt ml-3 mr-2"></i>Login </a></div>
                                            @if (Route::has('register'))
                                                <div class="menu mt-2" style="cursor: pointer"><a href="{{ route('register') }}"><i class="fas fa-user-plus ml-3 mr-2"></i>Register </a></div>
                                            @endif
                                        @else
                                        <!--iki setelah login tank-->
                                        @guest
                                            <div class="menu mt-2" style="cursor: pointer"><a class ="dropdown-item" href="{{ route('index') }}"><i class="fas fa-user-circle mr-2"></i>Namae</a></div>
                                            @else
                                            <div class="menu mt-2" style="cursor: pointer"><a class ="dropdown-item" href="{{ route('index') }}"><i class="fas fa-user-circle mr-2"></i>{{ Auth::user()->name }}</a></div>
                                        @endguest
                                        <div class="menu mt-2" style="cursor: pointer"><a class ="dropdown-item" href="{{ route('wishlist') }}"><i class="fas fa fa-heart mr-2"></i>Wishlist</a></div>
                                        <div class="menu mt-2" style="cursor: pointer"><a class="dropdown-item" href="{{ route('logout') }}"
                                                onclick="event.preventDefault();
                                                                document.getElementById('logout-form').submit();"><i class="fas fa-sign-out-alt mr-2"></i>
                                                    {{ __('Logout') }}
                                                </a>
                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                            @csrf
                                        </form></div>
                                        <div class="menu mt-2" style="cursor: pointer"><a class ="dropdown-item" href="{{ route('index') }}"><i class="fas fa-door-open mr-2"></i>Landing Page</a></div>
                                    @endguest
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--mobile-->
                <div class="user d-lg-none text-center mt-5">
                    <a href="{{route('index')}}"><img src="{{asset('assets/img/team/team-1.jpg')}}" alt="" class="img-fluid box-user2"></a>
                </div>
                <div class="biodata d-lg-none text-center mt-2">
                    @guest
                        <h3><b><a href="{{ route('index') }}">Guest</a></b></h3>
                        @else
                        <h3><b><a href="{{ route('index') }}">{{ Auth::user()->name }}</a></b></h3>
                    @endguest

                    <p>XII SIJA</p>
                    <div class="row d-flex justify-content-center mt-4 ">
                        @guest
                                <div class="menu" style="cursor: pointer"><a href="{{ route('login') }}"><i class="fas fa-sign-in-alt ml-3 mr-2"></i>Login </a></div>
                            @if (Route::has('register'))
                                <div  class="menu" style="cursor: pointer"><a href="{{ route('register') }}"><i class="fas fa-user-plus ml-3 mr-2"></i>Register</a></div>
                            @endif
                                @else
                                <!--iki setelah login tank-->
                                <div  class="menu" style="cursor: pointer">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                            document.getElementById('logout-form').submit();"><i class="fas fa-sign-out-alt mr-2"></i>
                                                {{ __('Logout') }}
                                            </a>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                        @endguest
                    </div>
                </div>
                <div class="Search2 d-lg-none d-flex justify-content-center mt-3 mb-3">
                    <form class="form-inline my-2 my-lg-0" action="{{ route('searcher') }}" method="GET">
                        <div class="search-box2">
                            <input class="search-txt2 border-bottom" type="search" placeholder="Search Product" aria-label="Search">
                            <i class="btn2-search fas fa-search fa-md" type="submit"></i>
                        </div>
                    </form>
                </div>
                <div class="menu d-lg-none ml-2 ">
                    <a href="{{ route('index') }}"><i class="fa fa-home mr-2"></i>Home</a>
                </div>
                <div class="menu d-lg-none ml-2">
                    <a href="{{ route('wishlist') }}"><i class="fas fa fa-heart mr-2"></i>Wishlist</a>
                </div>
                <div class="menu d-lg-none ml-2 ">
                    @auth
                        @if(auth()->user()->hasRole('seller'))
                            <a href="{{ route('voyager.dashboard') }}"><i class="fas fa-briefcase mr-2"></i>Go to Your Shop</a>
                            @elseif(auth()->user()->hasRole('admin'))
                            <a href="{{ route('voyager.dashboard') }}"><i class="fas fa-briefcase mr-2"></i>Admin Panel</a>
                            @elseif(auth()->user()->hasRole('user'))
                            <a href="{{ route('shops.create') }}"><i class="fas fa-briefcase mr-2"></i>Open Your Shop</a>
                            @endif
                            @else
                            <a href="{{ route('login') }}"><i class="fas fa-briefcase mr-2"></i>Open Your shop</a>
                    @endauth
                </div>
                <div class="menu d-lg-none ml-2 ">
                    <a href="{{ route('cart.index')}}"><i class="fas fa-shopping-cart mr-2"></i>Shopping Bag</a>
                </div>
            </nav>
        </div>
      </header>
    <!-- End Header -->


    @if (session()->has('message'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
            <strong>{{session('message')}}</strong>
        </div>

        <script>
            $(".alert").alert();
        </script>
    @endif

    @if (session()->has('error'))
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
            <strong>{{session('error')}}</strong>
        </div>

        <script>
            $(".alert").alert();
        </script>
    @endif

      @yield('content')

    <!-- ======= Footer ======= -->
        <footer id="footer">
            <div class="footer-bottom">
                <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-6 border border-light footer-links d-flex align-items-center justify-content-center">
                    <div class="container border border-light">
                        <div class="row d-flex justify-content-start">
                        <img src="{{asset('assets/img/Logo Schooly Store.svg')}}" alt="img-fluid" class="img-fluid">
                        </div>
                        <div class="row d-flex justify-content-start">
                        <div class="social-links ">
                            <a href="#" class="facebook border-right border-dark"><i class="bx bxl-facebook mt-2"></i></a>
                            <a href="#" class="instagram border-right border-dark"><i class="bx bxl-instagram mt-2 mr-1"></i></a>
                            <a href="#" class="youtube border-right border-dark "><i class="bx bxl-youtube mt-2 mr-1"></i></a>
                            <a href="#" class="twitter"><i class="bx bxl-twitter mt-2"></i></a>
                        </div>
                        </div>
                    </div>
                    </div>
                    <div class="col-lg-3 col-md-6 footer-links">
                    <h4>Schooly Store Services</h4>
                    <ul>
                        <li><i class="bx bx-chevron-right"></i> <a href="#">Check Out</a></li>
                        <li><i class="bx bx-chevron-right"></i> <a href="#">Open Your Shop</a></li>
                        <li><i class="bx bx-chevron-right"></i> <a href="#">Shopping Bag</a></li>
                        <li><i class="bx bx-chevron-right"></i> <a href="#">Admin</a></li>
                        <li><i class="bx bx-chevron-right"></i> <a href="#">Wishlist</a></li>
                    </ul>
                    </div>
                    <div class="col-lg-3 col-md-6 footer-links">
                    <h4>Schooly Services</h4>
                    <ul>
                        <li><i class="bx bx-chevron-right"></i> <a href="#">Attendance</a></li>
                        <li><i class="bx bx-chevron-right"></i> <a href="#">Point+</a></li>
                        <li><i class="bx bx-chevron-right"></i> <a href="#">Schooly Store</a></li>
                    </ul>
                    </div>
                    <div class="col-lg-3 col-md-6 footer-links">
                    <h4>Schooly Main Page</h4>
                    <ul>
                        <li><i class="bx bx-chevron-right"></i> <a href="#">Landing Page</a></li>
                    </ul>
                    </div>
                </div>
                </div>
            </div>
        </footer>
    <!-- End Footer -->

    <!-- Back-to-top -->
    <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>

    <!-- Vendor JS Files -->
        <script src="{{asset('assets/vendor/jquery/jquery.min.js')}}"></script>
        <script src="{{asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
        <script src="{{asset('assets/vendor/jquery.easing/jquery.easing.min.js')}}"></script>
        <script src="{{asset('assets/vendor/php-email-form/validate.js')}}"></script>
        <script src="{{asset('assets/vendor/owl.carousel/owl.carousel.min.js')}}"></script>
        <script src="{{asset('assets/vendor/waypoints/jquery.waypoints.min.js')}}"></script>
        <script src="{{asset('assets/vendor/counterup/counterup.min.js')}}"></script>
        <script src="{{asset('assets/vendor/isotope-layout/isotope.pkgd.min.js')}}"></script>
        <script src="{{asset('assets/vendor/venobox/venobox.min.js')}}"></script>
        <script src="{{asset('assets/vendor/aos/aos.js')}}"></script>
    <!-- End Vendor -->

    <!-- Template Main JS File -->
        <script src="{{asset('assets/js/main.js')}}"></script>
    <!-- End Template -->

</body>

</html>
