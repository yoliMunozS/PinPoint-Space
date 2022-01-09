@extends('layouts.appcreate')

@section('template_title')
    Booking Space
@endsection

@section('content')

    {{-- <section class="content container-fluid"> --}}
    <div class="container"> 

        <div class="row justify-content-center">       
            <div class="col-md-8">

                @includeif('partials.errors')

                <div class="card card-default">
                    <div class="card-header">
                        <h3 class="card-title">Reserva del espacio</h3>
                    </div><br>
                    <div class="card-body">
                        <form method="POST" action="{{ route('bookings.update', $booking->id) }}"  role="form" enctype="multipart/form-data">
                            {{ method_field('PATCH') }}
                            @csrf

                            @include('booking.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- </section> --}}
@endsection