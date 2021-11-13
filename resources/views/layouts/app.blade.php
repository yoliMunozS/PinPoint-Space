<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <!-- <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1"> -->

    <!-- CSRF Token -->
    <!-- <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title> -->

    <!-- Scripts -->
    <!-- <script src="{{ asset('js/app.js') }}" defer></script> -->

    <!-- Fonts -->
    <!-- <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet"> -->

    <!-- Styles -->
    <!-- <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/home') }}"> -->
                    <!-- {{ config('app.name', 'Laravel') }} -->
                    <!-- <img src="assets/images/logo/logo1-png.png" width="15%">
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent"> -->
                    <!-- Left Side Of Navbar -->
                    <!-- <ul class="navbar-nav mr-auto">

                    </ul>
 -->
                    <!-- Right Side Of Navbar -->
                    <!-- <ul class="navbar-nav ml-auto"> -->
                        <!-- Authentication Links -->
                        <!-- @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif

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

        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>
</html> -->




    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>PinPoint Space</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" href="assets/apple-touch-icon.png">
    <!-- Place favicon.ico in the root directory -->

    <link rel="stylesheet" href="assets/plugins/bootstrap/bootstrap.min.css">
    <!-- ThemeFisher Icon -->
    <link rel="stylesheet" href="assets/plugins/themefisher-fonts/themefisher-fonts.css">
    <!-- Light Box -->
    <link rel="stylesheet" href="assets/plugins/magnific-popup/magnific-popup.css">
    <!-- animation css -->
    <link rel="stylesheet" href="assets/plugins/animate/animate.css">
    <!-- slick slider -->
    <link rel="stylesheet" href="assets/plugins/slick/slick.css">

    <!-- Revolution Slider -->
    <link rel="stylesheet" href="assets/css/style.css">

      <!-- /* Optional: Makes the sample page fill the window. */ -->
    </style>
    <script src="assets/plugins/modernizr.min.js"></script>
  </head>
  <body>
    <!--[if lt IE 8]>
      <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
    <![endif]-->

  <!-- Loader to display before content Load-->
  <div class="loading">

    <img src="assets/img/loader.gif" alt="">

    <div class="windows8 loading-position">
      <div class="wBall" id="wBall_1">
        <div class="wInnerBall"></div>
      </div>
      <div class="wBall" id="wBall_2">
        <div class="wInnerBall"></div>
      </div>
      <div class="wBall" id="wBall_3">
        <div class="wInnerBall"></div>
      </div>
      <div class="wBall" id="wBall_4">
        <div class="wInnerBall"></div>
      </div>
      <div class="wBall" id="wBall_5">
        <div class="wInnerBall"></div>
      </div>
    </div>
  </div> 


 <!-- Navigation -section
  =========================-->
<nav class="navbar navbar-fixed-top navigation">
  <div class="container">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand logo" href="{{ url('/home')}}">
        <img src="assets/images/logo/logo1-negro2.png" height="220%" img-align="left">
      </a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse navbar-ex1-collapse">
      <ul class="nav navbar-nav navbar-right menu">

      <!-- Redirección a home -->
        <li><a href="{{ url('/home') }}">Home</a></li>

      <!-- Redirección a reservas -->
        <li><a href="{{ url('/bookings') }}">Bookings</a></li>
        
      <!-- Redirección a alquila tu espacio -->
        <li class="nav-item"><a href="{{ url('/spaces') }}">Spaces</a></li>

      
        
        @guest
        @if (Route::has('login'))
            <li class="nav-item">
                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
            </li>
        @endif

        

        <!-- Redirección a contact -->
        <li><a href="">Contact</a></li>

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
    </div><!-- /.navbar-collapse -->
  </div>
</nav>

<!-- Hero Area -section
  =========================-->
  <header class="hero-area th-fullpage" data-parallax="scroll" data-image-src="assets/images/slider/bg-1.jpg">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <h1>We know what you need,<br>
            We Ensure Quality Spaces</h1>
        </div>
      </div>
    </div>
  </header>

  <br><br>
<main class="py-4">
            @yield('content')
</main>



<footer class="footer">
        <div class="container">
            <div class="row">
                <div class="container">
                    <div class="footer-top">
                        <div class="col-md-4">
                            <!-- footer About section
                            ========================== -->
                            <div class="footer-about">
                                <h3 class="footer-title">About Us</h3>
                                <p>Somos una pequeña empresa que busca <br>
                                soluciones futuras. Todos podemos  <br>
                                observar que el teletrabajo ha llegado para <br>
                                quedarse, por lo tanto necesitamos<br>
                                adaptarnos a ello. Así pues, decidimos crear este<br>
                                buscador, para facilitar a todos una más<br>
                                sencilla búsqueda de espacios.</p>
                            </div>
                        </div>
                        <div class="col-md-4">

                            <!-- footer Address section
                            ========================== -->
                            <div class="footer-address">
                                <h3 class="footer-title">Address</h3>
                                <p>PinPoint Space <br>
                                Av. del Paral·lel, 71, 08004 Barcelona.</p>
                                <p class="contact-address">
                                    Contact us : <a href="">+34 93 3476100 </a> <br>
                                    Write us : <a href="mailto:mariolika19@gmail.com">grupo3proyectodaw@info.com</a>
                                </p>
                            </div>
                        </div>
                        <div class="col-md-4">
                        <!-- footer Media link section
                        ========================== -->
                        <div class="footer-social-media">
                            <h3 class="footer-title">Keep in touch</h3>
                            <ul class="footer-media-link">
                                <li><a href="https://www.facebook.com/"><i class="tf-ion-social-facebook" aria-hidden="true"></i></a></li>
                                <li><a href="https://www.twitter.com/"><i class="tf-ion-social-twitter" aria-hidden="true"></i></a></li>                                   
                                <li><a href="https://www.instagram.com/"><i class="tf-ion-social-instagram-outline"
                                            aria-hidden="true"></i></a></li>
                                <li><a href="https://github.com/yoliMunozS/PinPoint-Space"><i class="tf-ion-social-github-outline" aria-hidden="true"></i></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="footer-nav text-center">
                    <div class="col-md-12">
                        <ul>                  
                          <!-- Redirección a home -->
                            <li><a href="{{ url('/home') }}">Home</a></li>

                          <!-- Redirección a bookings - Reserva de espacios -->
                            <li><a href="{{ url('/bookings') }}">Bookings</a></li>

                          <!-- Redirección a Spaces - Registro de espacios -->
                            <li><a class="nav-link" href="{{ url('/spaces') }}">Spaces</a></li>                          

                          <!-- Redirección a contact -->
                            <li><a href="">Contact</a></li>
                            
                        </ul>
                    </div>
                </div>
                <div class="text-center">
                    <div class="col-md-12">
                        <div class="copyright">
                            <p>&copy; 2021-2022 All rights reserved. <br>
                                Design and Developed By <a href="https://github.com/yoliMunozS/PinPoint-Space">PinPoint-Space.com</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
  </footer>


  <!-- JQuery -->
  <script src="assets/plugins/jquery.min.js"></script>
    <!-- bootstrap -->
  <script src="assets/plugins/bootstrap/bootstrap.min.js"></script>
  <!-- slick slider -->
  <script src="assets/plugins/slick/slick.min.js"></script>
  <!-- Lightbox -->
  <script src="assets/plugins/magnific-popup/jquery.magnific-popup.min.js"></script>
  <!-- Parallax -->
  <script src="assets/plugins/parallax.min.js"></script>
  

  <script src="assets/js/script.js"></script>
  </body>

</html>