@extends('layouts.appcreate')

@section('template_title')
    Create Space
@endsection

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"></div><br>
                
                <div class="title text-left">
                    <h2>Create a space</h2>
                </div>
                <div class="card-body">

                    @includeif('partials.errors')

                    <div class="card card-default">
                        <div class="card-header">
                            <span class="card-title"></span>
                        </div>
                        <div class="card-body">
                            <form method="POST" action="{{ route('spaces.store') }}"  role="form" enctype="multipart/form-data">
                                @csrf

                                @include('space.form')

                            </form>
                        </div>
                    </div>       
                </div>
            </div>
        </div>
    </div>   
</div>
@endsection
