@extends('layouts.appcreate')

@section('template_title')
    {{ $space->name ?? 'Show Space' }}
@endsection

@section('content')

  <!-- <section class="content container-fluid"-->
  <section class="blog-single">
  	<div class="container">
  		<div class="row">
        <div class="title text-center">
            <h2>
                <div class="float-left">
                    <span class="card-title">{{ $space->name }} - Space</span>
                </div>
            </h2>
        </div>
  			
            <!-- Imagen
            ============================== -->
            <div class="title text-center">
              <img src="..\assets\images\header\studio.jpg">
            </div>
            <!-- Page Main Content
            ================================== -->
            <div class="blog-single-content">
              <div class="blog-content-description">          
                <h3 class="footer-title">Sabemos lo que necesitas. Reserva ya el espacio que más se ajuste a tus necesidades.</h3>
                <p><strong>CARACTERÍSTICAS:</strong></p><br>
                <div class="meta">
                  <div class="date">
                    <p><strong>Space Name  | </strong> {{ $space->name }}</p>
                  </div>
                </div>
                <div class="meta">
                  <div class="date">
                    <p><strong>Capacity | </strong> {{ $space->capacity }}  people</p>
                  </div>
                </div>
                <div class="meta">
                  <div class="date">
                    <p><strong>Host Nº | </strong> {{ $space->user_id }} </p>
                  </div>
                </div>
                <br>
                <p class="blog-description">Espacio ideal para tus reuniones o eventos en grupo.</p>
              </div>
              
              <!-- Medidas de salud - info -->
              <br><br>
              <div class="blog-content-description">
                <h3 class="footer-title">Medidas de seguridad y salud especiales  <i class="tf-ion-alert-circled"></i>  </h3>
                
                <p class="blog-description"> - Mascarillas y desinfectante de manos a disposición de los clientes
                </br> - Limpieza del alojamiento realizada por empresas profesionales
                <br> - Se han eliminado objetos compartidos como revistas, bolígrafos y papeles
                </br> - Kit de primeros auxilios
                </p>
                 
              </div>
              
              <!-- Botón de vuelta a atrás -->
                <div class="float-right">
                        <a class="btn btn-primary" href="{{ route('spaces.index') }}"> Back</a>
                </div>
            </div>


            <!-- <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Space</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('spaces.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Name:</strong>
                            {{ $space->name }}
                        </div>
                        <div class="form-group">
                            <strong>User Id:</strong>
                            {{ $space->user_id }}
                        </div>
                        <div class="form-group">
                            <strong>Capacity:</strong>
                            {{ $space->capacity }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section> -->

@endsection
