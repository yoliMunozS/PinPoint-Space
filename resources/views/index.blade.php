<!doctype html>
<html class="no-js" lang="zxx">
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

    <style>
      /* Always set the map height explicitly to define the size of the div
       * element that contains the map. */
      #map_canvas {
        height: 100%;
      }
      /* Optional: Makes the sample page fill the window. */
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
      <a class="navbar-brand logo" href="index.html">
        <!-- <img src="assets/images/logo/logo1-png.png" alt=""> -->
      </a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse navbar-ex1-collapse">
      <ul class="nav navbar-nav navbar-right menu">
        <li><a href="index.html">Home</a></li>
        <li><a href="portfolio.html">Espacios</a></li>
        
        <!-- Redirección a login -->
        @if (Route::has('login'))
        <li class="nav-item"><a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a></li>
        @endif

        <li><a href="blog.html">Contact</a></li>
        
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

 <!-- Case Study Sections
  =========================-->

  <section class="case-study">
    <div class="text-center">
      <h2 class="title">Case Study</h2>
    </div>
    <!-- Case Study Description
      top section -->
    <div class="case-study-content">
      <div class="container">
        <div class="row">
          <div class="col-md-6">
            <!-- inner sub-title -->
            <div class="content">
              <h4 class="inner-title">E Banks That Accept Us Casino Players</h4>
              <p class="case-description">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euiyd tincidunt ut laoreet dolore magna aliquam nibh utpat.Ullamcorper suscipit lobo nibh euiyd tinci- dunt ut laoreet.</p>
              <p>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rem impedit molestias cumque dolorum, sunt, provident blanditiis tempora, aut explicabo error ipsa repudiandae. Dolores eius eaque eum mollitia esse nisi necessitatibus distinctio ea, dolorem non, optio minima temporibus blanditiis, quidem aperiam!
              </p>
              <!-- View More Details -->
              <a class="btn btn-default btn-main" href="#" role="button">View More</a>
            </div>
          </div>
          <div class="col-md-6">
            <div class="img-content">
              <img class="img-responsive" src="assets/images/case-study/case-study-img1.png" alt="">
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
              <img class="img-responsive" src="assets/images/case-study/case-study-img2.png" alt="">
            </div>
          </div>
          <div class="col-md-6">
            <!-- inner sub-title -->
            <div class="content">
              <h4 class="inner-title">E Banks That Accept Us Casino Players</h4>
              <p class="case-description">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euiyd tincidunt ut laoreet dolore magna aliquam nibh utpat.Ullamcorper suscipit lobo nibh euiyd tinci- dunt ut laoreet.</p>
              <p>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ex unde soluta, nesciunt consequuntur accusamus sint! Eaque quod consectetur laborum quae repudiandae illum hic explicabo sunt perferendis. Voluptas, fugiat eos sed!
              </p>
              <!-- View More Details -->
              <a class="btn btn-default btn-main" href="#" role="button">View More</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  

<!-- Clients Sections
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
                <!-- <div class="col-md-8 col-md-offset-2 col-lg-8 col-lg-offset-2 padding-0"> -->
                <div class="testimonials-area">
                  <!-- <div class="round-shape"></div> -->
                  <p class="testimonials-description">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed
                    diam nonummy nibh euismod tincidunt ut laoreet dolore magna. ipsum dolor sit amet, consectetuer
                    adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat
                    volutpat. Ut wisi enim ad minim veniam. Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                    Nemo vitae natus odio quasi recusandae, esse! Libero ipsum cum aliquid, nisi, maiores animi iste
                    vel consectetur error facilis quae ducimus sint beatae vitae nesciunt explicabo esse nam. Soluta
                    harum ipsa officia nam adipisci velit debitis! Dolore a ducimus, assumenda aspernatur fugit!
                  </p>
                  <div class="author">
                    <img src="assets/images/clients-img1.png" alt="Clients">
                    <h3 class="author-name">Paul Lapkin</h3>
                    <span class="designation">CEO at IOC</span>
                  </div>
                </div>
                <!-- </div> -->
                <!-- End Slider item -->
              </div>
              <div class="item">
                <!-- Slider item -->
                <!-- <div class="col-md-8 col-md-offset-2 col-lg-8 col-lg-offset-2 padding-0"> -->
                <div class="testimonials-area">
                  <!-- <div class="round-shape"></div> -->
                  <p class="testimonials-description">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed
                    diam nonummy nibh euismod tincidunt ut laoreet dolore magna. ipsum dolor sit amet, consectetuer
                    adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat
                    volutpat. Ut wisi enim ad minim veniam. Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                    Nemo vitae natus odio quasi recusandae, esse! Libero ipsum cum aliquid, nisi, maiores animi iste
                    vel consectetur error facilis quae ducimus .
                  </p>
                  <div class="author">
                    <img src="assets/images/clients-img1.png" alt="Clients">
                    <h3 class="author-name">Paul Lapkin</h3>
                    <span class="designation">CEO at DeviserWeb</span>
                  </div>
                </div>
                <!-- </div> -->
                <!-- End Slider item -->
              </div>
            </div>
          </div>
        </div>
      </div><!-- /.End row -->
    </div>
  </div>
</section>


  

                            <!-- footer Address section
                            ========================== -->
                            <div class="footer-address">
                                <h3 class="footer-title">Address</h3>
                                <p>PinPoint Space <br>
                                Av. del Paral·lel, 71, 08004 Barcelona.</p>
                                <p class="contact-address">
                                    Contact us : <a href="tel:+610383666274">+34 93 3476100 </a> <br>
                                    Write us : <a href="mailto:info@info.com">grupo3proyectodaw@info.com</a>
                                </p>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <!-- footer Media link section
                            ========================== -->
                            <div class="footer-social-media">
                                <h3 class="footer-title">Keep in touch</h3>
                                <ul class="footer-media-link">
                                    <li><a href="#"><i class="tf-ion-social-facebook" aria-hidden="true"></i></a></li>
                                    <li><a href="#"><i class="tf-ion-social-twitter" aria-hidden="true"></i></a></li>
                                    <li><a href="#"><i class="tf-ion-social-linkedin-outline"
                                                aria-hidden="true"></i></a></li>
                                    <li><a href="#"><i class="tf-ion-social-google-outline" aria-hidden="true"></i></a>
                                    </li>
                                    <li><a href="#"><i class="tf-ion-social-instagram-outline"
                                                aria-hidden="true"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="footer-nav text-center">
                        <div class="col-md-12">
                            <ul>
                                <li><a href="index.html">Home</a></li>
                                <li><a href="services.html">Espacios</a></li>

                                <!-- Redirección a login -->
                                @if (Route::has('login'))
                                <li><a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a></li>
                                @endif

                                <li><a href="contact.html">Contact</a></li>
                                
                            </ul>
                        </div>
                    </div>
                    <div class="text-center">
                        <div class="col-md-12">
                            <div class="copyright">
                                <p>&copy; 2013-2017 All rights reserved. <br>
                                    Design and Developed By <a href="https://themefisher.com">Themefisher.com</a></p>
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
