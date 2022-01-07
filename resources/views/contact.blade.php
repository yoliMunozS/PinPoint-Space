<!doctype html>
<html class="no-js" lang="zxx">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Fiction Multipage Bootstrap Template</title>
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

    <!-- <img src="img/loader.gif" alt=""> -->

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
        
      <!-- Redirección a login -->
      @if (Route::has('login'))
        <li class="nav-item">
           <!--  modificada ruta de redirección del login  -->
          <a class="nav-link" href="{{ url('loginIn') }}">Login</a>
        </li>
      @endif

      @if (Route::has('register'))
            <li class="nav-item">
                <a class="nav-link" href="{{ route('register') }}">Create an account</a>
            </li>
        @endif
        
      </ul>
    </div><!-- /.navbar-collapse -->
  </div>
</nav>

<!-- Contact header-section 
  =========================-->
<section class="page-header services-header" data-parallax="scroll" data-image-src="assets/images/slider/bg-2.jpg" width="2%">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <h1 class="text-center"> Contact Us </h1>
      </div>
    </div>
  </div>
</section>

  <!-- Info Section
  =========================-->
<div class="container-fluid">
  <div class="row">
    <div class="col-md-12 padding-0">
        
        <!-- Contact Information -->
        <div class="contact-info">
          <div class="contact-img">
            <img src="assets/images/contact/contact-img1.png" alt="">
          </div>
          <div class="contact-content">
            <div class="content-title-section">
              <h3 class="content-title">PinPoint Space S.L.</h3>
            </div>
            <div class="home-address">
              <div class="flex">
                <div class="contact-icon">
                  <i class="tf-ion-ios-home-outline"></i>
                </div>
                <p class="ct-info">Av. del Paral·lel, 71, 08004 Barcelona</p>
              </div>
            </div>
            <div class="web-address">
              <div class="flex">
                <div class="contact-icon">
                  <i class="tf-global"></i>
                </div>
                <a href="#" class="ct-info">pinpoint-space.com</a>
              </div>
            </div>
            <div class="phone-address">
              <div class="flex">
                <div class="contact-icon">
                  <i class="tf-mobile" aria-hidden="true"></i>
                </div>
                <p class="ct-info">+34 93 3476100</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  

 <!-- Contact From Study Sections 
  =========================-->
 <section class="contact-form">
   <div class="container">
     <div class="row">
       <div class="title text-center">
         <h2>Si lo prefieres, déjanos un mensaje</h2>
       </div>
       <form class="" method="post">
         <div class="col-md-6">
           <div class="form-group">
             <input type="text" class="form-control" placeholder="Subject">
           </div>
           <div class="form-group">
             <input type="email" class="form-control" placeholder="Email">
           </div>
           <div class="form-group margin-0">
             <input type="text" class="form-control" placeholder="Name">
           </div>
         </div>
         <div class="col-md-6 margin-0">
           <div class="form-group">
             <textarea class="form-control " rows="3" placeholder="Message"></textarea>
           </div>
         </div>
         <div class="col-md-12">
           <div class="contact-btn text-center">
            <input class="btn btn-default btn-main" type="submit" value="Sent Message">
           </div>
         </div>
       </form>
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

                          <!-- Redirección a login -->
                          @if (Route::has('login'))
                            <li><a class="nav-link" href="{{ url('loginIn') }}">Login</a></li>
                          @endif

                          <!-- Redirección a registrarse -->
                          @if (Route::has('register'))
                              <li class="nav-item">
                                  <a class="nav-link" href="{{ route('register') }}">Create an account</a>
                              </li>
                          @endif

                          <!-- Redirección a contact -->
                            <li><a href="{{ url('/contact') }}">Contact</a></li>
                            
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


    <script src="assets/plugins/jquery.min.js"></script>

    <script src="assets/plugins/bootstrap/bootstrap.min.js"></script>
    <!-- slick slider -->
    <script src="assets/plugins/slick/slick.min.js"></script>
    <!-- filter -->
    <script src="assets/plugins/filterizr/jquery.filterizr.min.js"></script>
    <!-- Lightbox -->
    <script src="assets/plugins/magnific-popup/jquery.magnific-popup.min.js"></script>
    <!-- Parallax -->
    <script src="assets/plugins/parallax.min.js"></script>
    <!-- Video -->
    <script src="assets/plugins/jquery.vide.js"></script>
    <!-- google map -->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBu5nZKbeK-WHQ70oqOWo-_4VmwOwKP9YQ"></script>
    <script src="assets/plugins/google-map/gmap.js"></script>

    <script src="assets/js/script.js"></script>
    </body>

    </html>
