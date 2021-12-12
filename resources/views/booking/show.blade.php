@extends('layouts.appcreate')

@section('template_title')
    {{ $booking->name ?? 'Show Booking' }}
@endsection

@section('content')


    <!-- <section class="content container-fluid"-->
  <section class="blog-single">
  	<div class="container">
  		<div class="row">
        <div class="title text-center">
            <h2>
                <div class="float-left">
                    <span class="card-title">Show Booking</span>
                </div>
            </h2>
        </div>
  			
            <!-- Imagen
            ============================== -->
            <div class="title text-center">
              <img src="..\assets\images\slider\bg-2.jpg" width="73%">
            </div>
            <!-- Page Main Content
            ================================== -->
            <div class="blog-single-content">
              <div class="blog-content-description">          
                <h3 class="footer-title">Consulta los datos de la reserva.</h3>
                <p><strong>CARACTERÍSTICAS:</strong></p><br>
                <div class="meta">
                  <div class="date">
                    <p><strong>Space ID  | </strong> {{ $booking->space_id }}</p>
                  </div>
                </div>
                <div class="meta">
                  <div class="date">
                    <p><strong>Assistants | </strong> {{ $booking->assistants }}  people</p>
                  </div>
                </div>
                <div class="meta">
                  <div class="date">
                    <p><strong>Start Date | </strong> {{ $booking->start }} </p>
                  </div>
                </div>
                <div class="meta">
                  <div class="date">
                    <p><strong>End Date | </strong> {{ $booking->end }} </p>
                  </div>
                </div>
                <br>
                <p class="blog-description"><strong>Observaciones: </strong></p>
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
                        <a class="btn btn-primary" href="{{ route('bookings.index') }}"> Back</a>
                </div>
            </div>
        </div>
    </section>

    <!-- <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Booking</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('bookings.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Space Id:</strong>
                            {{ $booking->space_id }}
                        </div>
                        <div class="form-group">
                            <strong>User Id:</strong>
                            {{ $booking->user_id }}
                        </div>
                        <div class="form-group">
                            <strong>Start:</strong>
                            {{ $booking->start }}
                        </div>
                        <div class="form-group">
                            <strong>End:</strong>
                            {{ $booking->end }}
                        </div>
                        <div class="form-group">
                            <strong>Assistants:</strong>
                            {{ $booking->assistants }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
     -->
@endsection
