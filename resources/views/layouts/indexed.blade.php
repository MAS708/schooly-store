<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Presento Bootstrap Template - Index</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="{{asset('assets/img/favicon.png')}}" rel="icon">
  <link href="{{asset('assets/img/apple-touch-icon.png')}}" rel="apple-touch-icon">

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

  <!-- =======================================================
  * Template Name: Presento - v1.1.1
  * Template URL: https://bootstrapmade.com/presento-bootstrap-corporate-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

    <!-- ======= Header ======= -->
      <header id="header" class="fixed-top">
        <!--Logo-->
        <div class="container d-flex align-items-center justify-content-center">
          <div class="row">
            <h1 class="logo ml-auto"><a href="{{ route('index')}}"><img src="assets/img/Logo Schooly Store.svg" alt="" class="img-fluid"></a></h1>
          </div>
        </div>
        <!--Menu-->
        <div class="container-fluid mt-3 ml-4 ml-4 ">
          <nav class="nav-menu d-none d-lg-block">
            <div class="row">
              <div class="col">
                <div class="row">
                  <div class="menu-icon d-none d-lg-block ml-auto ">
                    <a href="{{route('index')}}"><img src="assets/img/home.svg" alt="" class="img-fluid mt-2"></a>
                  </div>
                  <div class="menu d-none d-lg-block ml-5 mr-4 mt-3 ">
                    <a href="{{route('index')}}">Home</a>
                  </div>
                </div>
              </div>
              <div class="col border-right border-left d-flex justify-content-center">
                <div class="row mt-3 ">
                  <div class="menu ml-3 d-none d-lg-block mr-4">
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
              <div class="col-5 ">
                <div class="row mt-1 ">
                  <div class="Search d-none d-lg-block ml-4">
                    <form class="form-inline my-2 my-lg-0  ">
                      <div class="search-box border-bottom border-secondary ">
                       <small><input class="search-txt" type="search" placeholder="Search Product" aria-label="Search"></small>
                       <img src="assets/img/Search.svg" alt="" class="img-fluid" type="submit">
                      </div>
                    </form>
                  </div>
                </div>
              </div>
              <div class="col-3">
                <div class="row ">
                  <div class="menu d-none d-lg-block mt-2 mr-4">
                    <a href="{{ route('cart.index')}}"><img src="assets/img/Shopping Card.svg" alt="" class="img-fluid mr-3 mb-2">Shopping Bag</a>
                  </div>
                  <div class="user d-none d-lg-block ml-4 mt-1">
                    <a href="#"><img src="assets/img/team/team-1.jpg" alt="" class="img-fluid box-user"></a>
                  </div>
                </div>
              </div>
            </div>
            <!--mobile-->
            <div class="user d-lg-none text-center mt-5">
              <li class=""><a href="index.html"><img src="assets/img/team/team-1.jpg" alt="" class="img-fluid box-user2"></a></li>
            </div>
            <div class="biodata d-lg-none text-center mt-2">
              <h3><b>Adam Alex</b></h3>
              <p>XII SIJA</p>
            </div>
            <div class="Search2 d-lg-none d-flex justify-content-center mt-4 mb-3">
              <form class="form-inline my-2 my-lg-0">
                <div class="search-box2">
                  <input class="search-txt2 border-bottom" type="search" placeholder="Search Product" aria-label="Search">
                  <i class="btn2-search fas fa-search fa-md" type="submit"></i>
                </div>
              </form>
            </div>
            <div class="menu d-lg-none ml-2 ">
              <a href="{{ route('index') }}"><i class="fa fa-angle-right mr-2"></i>Home</a>
            </div>
            <div class="menu d-lg-none ml-2 ">
                @auth
                @if(auth()->user()->hasRole('seller'))
                <a href="{{ route('voyager.dashboard') }}"><i class="fas fa-angle-right mr-2"></i>Go to Your Shop</a>
                @elseif(auth()->user()->hasRole('admin'))
                <a href="{{ route('voyager.dashboard') }}"><i class="fas fa-angle-right mr-2"></i>Admin Panel</a>
                @elseif(auth()->user()->hasRole('user'))
                <a href="{{ route('shops.create') }}"><i class="fas fa-angle-right mr-2"></i>Open Your Shop</a>
                @endif
                @else
                <a href="{{ route('login') }}"><i class="fas fa-angle-right mr-2"></i>Open Your shop</a>
            @endauth
            </div>
            <div class="menu d-lg-none ml-2 ">
              <a href="{{ route('cart.index')}}"><i class="fas fa-angle-right mr-2"></i>Shopping Bag</a>
            </div>
          </nav>
        </div>
      </header>
    <!-- End Header -->

      @yield('content')

    <!-- ======= Footer ======= -->
        <footer id="footer">
            <div class="footer-bottom">
                <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-6 border border-light footer-links d-flex align-items-center justify-content-center">
                    <div class="container border border-light">
                        <div class="row d-flex justify-content-start">
                        <img src="assets/img/Logo Schooly Store.svg" alt="img-fluid" class="img-fluid">
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
                    <h4>Our Services</h4>
                    <ul>
                        <li><i class="bx bx-chevron-right"></i> <a href="#">Web Design</a></li>
                        <li><i class="bx bx-chevron-right"></i> <a href="#">Web Development</a></li>
                        <li><i class="bx bx-chevron-right"></i> <a href="#">Product Management</a></li>
                        <li><i class="bx bx-chevron-right"></i> <a href="#">Marketing</a></li>
                        <li><i class="bx bx-chevron-right"></i> <a href="#">Graphic Design</a></li>
                    </ul>
                    </div>
                    <div class="col-lg-3 col-md-6 footer-links">
                    <h4>Our Services</h4>
                    <ul>
                        <li><i class="bx bx-chevron-right"></i> <a href="#">Web Design</a></li>
                        <li><i class="bx bx-chevron-right"></i> <a href="#">Web Development</a></li>
                        <li><i class="bx bx-chevron-right"></i> <a href="#">Product Management</a></li>
                        <li><i class="bx bx-chevron-right"></i> <a href="#">Marketing</a></li>
                        <li><i class="bx bx-chevron-right"></i> <a href="#">Graphic Design</a></li>
                    </ul>
                    </div>
                    <div class="col-lg-3 col-md-6 footer-links">
                    <h4>Our Services</h4>
                    <ul>
                        <li><i class="bx bx-chevron-right"></i> <a href="#">Web Design</a></li>
                        <li><i class="bx bx-chevron-right"></i> <a href="#">Web Development</a></li>
                        <li><i class="bx bx-chevron-right"></i> <a href="#">Product Management</a></li>
                        <li><i class="bx bx-chevron-right"></i> <a href="#">Marketing</a></li>
                        <li><i class="bx bx-chevron-right"></i> <a href="#">Graphic Design</a></li>
                    </ul>
                    </div>
                </div>
                </div>
            </div>
        </footer>
    <!-- End Footer -->

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
