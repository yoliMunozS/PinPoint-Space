@extends('layouts.app')

@section('template_title')
    Space
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">
                            <div class="title text-left">
                                <h2>Spaces</h2>
                            </div>
                            

                             <div class="float-right">
                                <a href="{{ route('spaces.create') }}" class="btn btn-default btn-main"  data-placement="left">
                                  {{ __('Create New') }}
                                </a>
                              </div>
                        </div>
                    </div>
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success">
                            <p>{{ $message }}</p>
                        </div>
                    @endif

                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-hover">
                                <thead class="thead">
                                    <tr>
                                        <th>No</th>
                                        
										<th>Name</th>
										<th>User Id</th>
										<th>Capacity</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($spaces as $space)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $space->name }}</td>
											{{-- <td>{{ $space->user_id }}</td> --}}
											<td>{{ $space->user->name }}</td>
											<td>{{ $space->capacity }}</td>

                                            <td>
                                                <form action="{{ route('spaces.destroy',$space->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('spaces.show',$space->id) }}"><i class="fa fa-fw fa-eye"></i> Show</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('spaces.edit',$space->id) }}"><i class="fa fa-fw fa-edit"></i> Edit</a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-fw fa-trash"></i> Delete</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                {!! $spaces->links() !!}
            </div>
        </div>
    </div>
    
    
    <br><br>


    <!-- Tabla otros espacios -->
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">
                            <div class="title text-left">
                                <h2>Other Spaces</h2>
                            </div>
                        </div>
                    </div>
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success">
                            <p>{{ $message }}</p>
                        </div>
                    @endif

                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-hover">
                                <thead class="thead">
                                    <tr>
                                        <th>No</th>                                        
										<th>Name</th>
										<th>Capacity</th>
                                        <th>Booking the space</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($spaces as $space)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $space->name }}</td>
											<td>{{ $space->capacity }}</td>
                                            <td>
                                                <form action="{{ route('spaces.destroy',$space->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('spaces.show',$space->id) }}"><i class="fa fa-fw fa-eye"></i> Show</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('spaces.edit',$space->id) }}"><i class="fa fa-fw fa-edit"></i> Edit</a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-fw fa-trash"></i> Delete</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                {!! $spaces->links() !!}
            </div>
        </div>
    </div>
@endsection
