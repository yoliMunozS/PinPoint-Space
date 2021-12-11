@extends('layouts.appcreate')

@section('template_title')
    {{ $booking->name ?? 'Show Booking' }}
@endsection

@section('content')
    <section class="content container-fluid">
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
@endsection
