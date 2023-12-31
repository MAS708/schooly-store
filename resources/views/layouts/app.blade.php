<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">
    <!-- Font Awesome icons (free version)-->
    <script src="https://use.fontawesome.com/releases/v5.13.0/js/all.js" crossorigin="anonymous"></script>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'Laravel') }}
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item">
                            @auth
                            @if(auth()->user()->hasRole('seller'))
                            <a class="nav-link d-inline-block align-top" href="{{ route('voyager.dashboard') }}">Go to Your Shop</a>
                            @elseif(auth()->user()->hasRole('admin'))
                            <a class="nav-link d-inline-block align-top" href="{{ route('voyager.dashboard') }}">Admin Panel</a>
                            @elseif(auth()->user()->hasRole('user'))
                            <a class="nav-link d-inline-block align-top" href="{{ route('shops.create') }}">Open Your Shop</a>
                            <a class="nav-link d-inline-block align-top" href="{{ route('wishlist') }}">
                                <i class="fa fa-star"></i>Wishlist<span>({{ App\Wishlist::where('user_id', auth()->user()->id)->count() }})</span>
                            @endif
                            @else
                            <a class="nav-link d-inline-block align-top" href="{{ route('login') }}">Open Your Shop</a>
                            @endauth
                        </li>
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item">
                            @auth
                                <a class="nav-link p-0 m-0" href="{{ route('cart.index') }}">
                                <i class="fas fa-shopping-cart text-success fa-2x"></i>
                            @else
                                <a class="nav-link p-0 m-0" href="{{ route('login') }}">
                                <i class="fas fa-shopping-cart text-success fa-2x"></i>
                            @endauth
                                <div class="badge badge-danger">
                                    @auth
                                    {{ \Cart::session(auth()->id())->getContent()->count() }}
                                    @else
                                    0
                                    @endauth
                                </div>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href=""></a>
                        </li>
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

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

        <main class="py-4 container">
            @yield('content')
        </main>
    </div>
</body>
</html>
