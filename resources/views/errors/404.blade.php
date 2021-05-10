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


  <main id="main">
    <!-- ======= barang Section ======= -->
    <section id="Produk" class="barang">
        <div class="margin m-5">
            <div class="row d-flex justify-content-center">
                <img src="{{asset('assets/img/404.svg')}}" alt="img-fluid" class="img-fluid">
            </div>
            <div class="row d-flex justify-content-center mb-4">
                <img src="{{asset('assets/img/text404.svg')}}" alt="img-fluid" class="img-fluid">
            </div>
            <div class="row d-flex justify-content-center">
                <a href="{{route('index')}}">
                    <img src="{{asset('assets/img/button404.svg')}}" alt="img-fluid" class="img-fluid">
                </a>
            </div>
        </div>
    </section>
    <!-- End barang Section -->
  </main>
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
