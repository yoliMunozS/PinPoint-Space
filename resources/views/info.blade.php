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

      <!-- /* Optional: Makes the sample page fill the window. */
    </style> -->
    <script src="assets/plugins/modernizr.min.js"></script>
  </head>
  <body>


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

      <!-- Redirección a contact -->
        <li><a href="{{ url('/contact') }}">Contact</a></li>
        
      </ul>
    </div><!-- /.navbar-collapse -->
  </div>
</nav>

 <!-- Hero Area -section
  =========================-->
  <section class="page-header services-header" data-parallax="scroll" data-image-src="assets/images/slider/bg-3.jpg" width="2%">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <h1 class="text-center"> More Info...<br>
              About Us </h1>
        </div>
      </div>
    </div>
  </section>

 <!-- Blog Sections 
  =========================-->
  <section class="blog-single">
  	<div class="container">
  		<div class="row">
        <div class="title text-center">
          <h2>Te explicamos un poco más sobre nosotros</h2>
        </div>
  			<div class="col-md-9">
				  <!-- Blog Left Sections 
				  =========================-->
            <!-- Single Blog Page Main Img
            ============================== -->
            <div class="blog-single-section-img">
              <img src="assets/images/single-blog.jpg" alt="Blog Single Img">
            </div>
            <!-- Single Blog Page Main Content
            ================================== -->
            <div class="blog-single-content">
              <div class="blog-content-description">
                <h3><a class="blog-content-title" href="#">PinPoint Space es una empresa que te llevará mucho más allá de la reserva de espacios.</a></h3>
                <div class="meta">
                  <div class="date">
                    <p>01<sup>st</sup>Jan 2022</p>
                  </div>
                  <div class="author">
                    <p>By Mariola Ortín</p>
                  </div>
                </div>
                <p class="blog-description">Nuestra empresa nació en el año 2021, cuando Yolanda, Óscar y Mariola decidieron llevar a cabo el proyecto por el que estuvieron luchando durante meses. Somos una pequeña empresa que ha estado buscando soluciones para todas aquellas empresas y particulares que necesiten de este servicio.</p>
              </div>
              <div class="blog-content-description">
                <h4 class="blog-inner-heading">Regístrate para conocernos mejor </h4>
                <p class="blog-description">Para empezar a disfrutar de nuestras ventajas, solamente necesitas registrarte en nuestra web. Hecho esto, podrás ver los espacios que tenemos disponibles y si te interesa alguno, siéntete libre de reservarlo y ver toda su información, como el número de personas admitido, su horario, el precio y días disponibles... Además, podrás registrar tus espacios, si los tienes, y ver las reservas en cada uno de ellos. </p>
              </div>
              <div class="blog-content-description">
                <h4 class="blog-inner-heading">¿Puedo hacer una reserva y luego anularla, si finalmente no es posible?</h4>
                <p class="blog-description">Sí, no hay problema. Conocemos la situación actual y sabemos que pueden surgir muchos imprevistos que nos hagan anular la reserva a última hora. Nosotros nos encargamos de estas anulaciones, siempre y cuando se realicen en el plazo anterior a 24 horas de la reserva. </p>
              </div>
              <div class="blog-content-description">
                <h4 class="blog-inner-heading">¿Qué sucede si finalmente no puedo permitir una reserva en mi espacio?</h4>
                <p class="blog-description">Si finalmente no tienes el local disponible para las reservas, te permitimos que anules reservas ya hechas, y nosotros nos encargaremos de avisar al responsable. Queremos que te sientas cómodos con nosotros.</p>
              </div>
              <div class="blog-content-description">
                <h4 class="blog-inner-heading">¿Qué sucede si alguien cancela la reserva antes de 24 horas en mi espacio?</h4>
                <p class="blog-description">Nosotros llamaremos y te avisaremos.</p>
              </div>
            </div><!-- End Single Blog Content -->
            <!-- Single Blog Page Comments
            ================================== -->
            <div class="blog-single-comments">
              <h4 class="comments-title">Déjanos tu comentario y ayúdanos a mejorar (2)</h4>
              <div class="blog-comments">
                <div class="media">
                  <div class="media-left blog-left-img">
                    <div class="blog-comments-img">
                      <img class="media-object" src="assets/images/yo2.png" width="65px" alt="comments pic">
                    </div>
                  </div>
                  <div class="media-body comments-body">
                    <p class="blog-comments-text">“ Es una página ideal que te ayuda a encontrar espacios disponibles para hacer la reunión a cualquier tipo de evento que tengas. Lo hacen todo muy sencillo y fácil. Solo necesitas crear una cuenta y ya estarás listo para empezar a disfrutar de sus ventajas. ” </p>
                    <h4 class="media-heading comments-author">Mariola Ortín</h4>
                  </div>
                </div>
              </div>
              <div class="blog-comments">
                <div class="media">
                  <div class="media-left blog-left-img">
                    <div class="blog-comments-img">
                      <img class="media-object" src="assets/images/ceo-png.png" alt="comments pic" width="75px">
                    </div>
                  </div>
                  <div class="media-body comments-body">
                    <p class="blog-comments-text">“ PinPoint es mucho más que una empresa de alquiler de espacios. Incluso como particular, te permite registrarte y poner a la disposición de sus clientes aquellos espacios de los que dispones. Una maravilla, vamos."</p>
                    <h4 class="media-heading comments-author">Marco Polo</h4>
                  </div>
                </div>
              </div>
            </div>

            <!-- Single Blog Page Form
            ================================== -->
            <div class="blog-single-form">
              <form>
                <div class="form-group col-md-6 padding-0">
                  <input type="text" class="form-control blog-form-input" placeholder="Your Name">
                </div>
                <div class="form-group col-md-6 padding-0 padding-left-15">
                  <input type="email" class="form-control blog-form-input" placeholder="Your Email">
                </div>
                <div class="form-group col-md-12 padding-0">
                  <textarea class="form-control blog-form-textarea" placeholder="Your Comment"></textarea>
                </div>
                <div class="col-md-12 padding-0">
                  <div class="form-submit-btn text-center">
                    <button type="submit" class="btn btn-default btn-main th-btn">Submit Comment</button>
                  </div>
                </div>
              </form>
            </div>

          <!-- See All Post -->
          <div class="col-md-12">
            <div class="see-all-post text-center">
              <a class="btn btn-default th-btn solid-btn" href="{{ url('/home') }}" role="button"><i class="fa fa-long-arrow-left" aria-hidden="true"></i> Back To Home </a>
            </div>
          </div>
  			</div>
  			<div class="col-md-3">
				  <!-- Blog Right Sections 
				  =========================-->
	  				<div class="blog-sidbar">
            <div class="search widgets">
              <form class="form-inline">
                <div class="form-group search-input">
                  <input type="text" class="form-control" placeholder="Search ...">
                </div>
                <button type="submit" class="btn btn-default tf-search-btn"><i class="tf-search"></i></button>
              </form>
            </div>
            <div class="categories widgets">
              <div class="list-group text-center">
                <div class="list-group-item active"> Top Categories </div>
                <a href="#" class="list-group-item">Crea tu cuenta</a>
                <a href="#" class="list-group-item">Descubre nuevos Espacios - <br>
                  Consulta tus espacios</a>
                <a href="#" class="list-group-item">Reserva - <br>
                Consulta tus Reservas</a>
                <a href="#" class="list-group-item">Contacta con nosotros</a>
                <a href="#" class="list-group-item">Trabaja con nosotros</a>
              </div>
            </div>
          </div>
  			</div>
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
                            <li><a href="{{ url('/contact') }}                                                   ">Contact</a></li>
                            
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