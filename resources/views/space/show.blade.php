@extends('layouts.app')

@section('template_title')
    {{ $space->name ?? 'Show Space' }}
@endsection

@section('content')
    <section class="content container-fluid">
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
    </section>
@endsection
