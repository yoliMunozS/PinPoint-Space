@extends('layouts.appcreate2')

@section('template_title')
    Update Space
@endsection

@section('content')

    {{-- <section class="content container-fluid"> --}}
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">

                @includeif('partials.errors')

                <div class="card card-default">
                    <div class="card-header">
                        <h3 class="card-title">Update Space</h3>
                    </br>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('spaces.update', $space->id) }}"  role="form" enctype="multipart/form-data">
                            {{ method_field('PATCH') }}
                            @csrf

                            @include('space.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- </section> --}}
@endsection
