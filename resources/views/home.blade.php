<!-- Página que nos permite comprobar que hemos accedido correctamente a nuestra cuenta -->

<!-- Enlace a la página layouts.blade.php -->
@extends('layouts.app')


@section('content')
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

  
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }} 

                </div>                
            </div>
        </div>
    </div>
</div>
@endsection
