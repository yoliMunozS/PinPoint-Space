<!doctype html>
<html class="no-js" lang="en">
  <head>
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
<nav class="navbar navbar-fixed-top navigation" >
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

      <!-- Redirección a espacios -->
        <li><a href="">Spaces</a></li>
        
      <!-- Redirección a login -->
      @if (Route::has('login'))
        <li class="nav-item"><a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a></li>
      @endif

      <!-- Redirección a contact -->
        <li><a href="">Contact</a></li>
        
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

 <!-- Secciones
  =========================-->

  <section class="case-study">
    <div class="text-center">
      <h2 class="title">Spaces that you need</h2>
    </div>

    <!-- PinPoint Description
      =========================-->
    <div class="case-study-content">
      <div class="container">
        <div class="row">
          <div class="col-md-6">
            <!-- inner sub-title -->
            <div class="content">
              <h4 class="inner-title">Los espacios para preparar tu reunión o evento</h4>
              <p class="case-description">Disponemos de diferentes y nuevos espacios a diario para reuniones comerciales, exposiciones o diferentes eventos en Barcelona y alrededores. Encuentra fotografías, precios, opiniones y promociones de los mejores espacios en Barcelona.</p>
              <p>
                Encuentra el lugar ideal en Barcelona y su área metropolitana donde organizar y celebrar tu reunión de trabajo. ¿A qué esperas para descubrirlo?
              </p>
              <!-- Botón para saber más -->
              <a class="btn btn-default btn-main" href="#" role="button">Saber más</a>
            </div>
          </div>
          <div class="col-md-6">
            <div class="img-content">
              <img class="img-responsive" src="assets/images/case-study/case-study-img2.png" alt="">
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Case Study Description
      bottom section -->
    <div class="case-study-content">
      <div class="container">
        <div class="row">
          <div class="col-md-6">
            <div class="img-content">              
              <img class="img-responsive" src="assets/images/case-study/case-study-img1.png" alt="">
            </div>
          </div>
          <div class="col-md-6">
            <!-- inner sub-title -->
            <div class="content">
              <h4 class="inner-title">¿Cómo puedo publicar una sala?</h4>
              <p class="case-description">Si dispones de uno o varios espacios que se encuentren bien acondicionados para realizar reuniones o eventos relacionados con el entorno laboral y que no siempre estén ocupados, éste es tu sitio. </p>
              <p>
                Nosotros te ayudamos a conseguir que tu espacio tenga una mayor difusión, llegando al alcance de más personas. Vas a conseguir así tener un mayor número de clientes y una mayor rentabilidad de tu local.  
              </p>
              <!-- Botón para saber más -->
              <a class="btn btn-default btn-main" href="{{ route('login') }}">Saber más</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  

<!-- Opiniones Clientes
=========================-->
<section class="clients" data-parallax="scroll" data-image-src="assets/images/slider/bg-3.jpg">
  <div class="section">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12">
          <div class="title text-center">
            <h2>Clients Opinion</h2>
          </div>
          <div class="col-md-8 col-md-offset-2 col-lg-8 col-lg-offset-2 padding-0 slider-main">
            <div class="testimonial-slider">
              <div class="item">
                <!-- Slider item -->
                <div class="col-md-8 col-md-offset-2 col-lg-8 col-lg-offset-2 padding-0">
                <div class="testimonials-area">
                  <div class="round-shape"></div>
                  <p class="testimonials-description">Nuestros espacios son especialmente seleccionados 
                    para una acogida perfecta. Nosotros no trabajamos con los que no respetan nuestros 
                    Criterios de Calidad, incluyendo la normativa de higiene, limpieza y desinfección. 
                  </p>
                  <div class="author">
                    <img src="assets/images/ceo-png.png" width="100px" alt="Clients">                    
                    <h3 class="author-name">Bob Spounge </h3>
                    <span class="designation">CEO at PinPoint</span>
                  </div>
                </div>
                </div>
                <!-- End Slider item -->
              </div>
              <div class="item"> 
                <!-- Slider item -->
                <div class="col-md-8 col-md-offset-2 col-lg-8 col-lg-offset-2 padding-0"> 
                <div class="testimonials-area"> 
                   <div class="round-shape"></div>
                   <p class="testimonials-description">Somos una empresa responsable y con muchas ganas de 
                     dar una gran oportunidad para hacer reservas de espacios tanto para grandes, medianas 
                     y pequeñas empresas. Además, incluímos reuniones para particulares, ya que nos preocupan 
                     todas aquellas personas que necesitan disponer de un espacio para reuniones o eventos.
                  </p>
                  <div class="author">
                    <img src="assets/images/yo2.png" width="75px" id="yo-foto" alt="Clients">
                    <h3 class="author-name">Mariola Ortín</h3>
                    <span class="designation">FrontEnd Developer at PinPoint Space</span>
                  </div>
                </div>
                </div>
                <!-- End Slider item -->
              </div>
            </div>
          </div>
        </div>
      </div><!-- /.End row -->
    </div>
  </div>
</section>


  
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

                              <!-- Redirección a espacios -->
                                <li><a href="">Espacios</a></li>

                              <!-- Redirección a login -->
                              @if (Route::has('login'))
                                <li><a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a></li>
                              @endif

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
    <!-- filter -->
    <!-- <script src="assets/plugins/filterizr/jquery.filterizr.min.js"></script> -->
    <!-- Lightbox -->
    <script src="assets/plugins/magnific-popup/jquery.magnific-popup.min.js"></script>
    <!-- Parallax -->
    <script src="assets/plugins/parallax.min.js"></script>
    <!-- Video -->
    <!-- <script src="assets/plugins/jquery.vide.js"></script> -->
   
    <script src="assets/js/script.js"></script>
    </body>

    </html>