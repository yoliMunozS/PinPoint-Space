@extends('layouts.app')

@section('template_title')
    Booking
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">
                        <div class="title text-left">
                            <h2>My Bookings</h2><br>
                        </div>
                            

                             <div class="float-right">
                                <a href="{{ route('bookings.create') }}" class="btn btn-default btn-main"  data-placement="left">
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
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th>Number</th>
                                        
										<th>Space Name</th>
										<!-- <th>User Id</th> -->
										<th>Start</th>
										<th>End</th>
										<th>Assistants</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($bookings as $booking)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                           
											<td>{{ $booking->space->name}}</td>
											<td>{{ $booking->start}}</td>
											<td>{{ $booking->end }}</td>
											<td>{{ $booking->assistants }}</td>

                                            <td>
                                                <form action="{{ route('bookings.destroy',$booking->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('bookings.show',$booking->id) }}"><i class="fa fa-fw fa-eye"></i> Show</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('bookings.edit',$booking->id) }}"><i class="fa fa-fw fa-edit"></i> Edit</a>
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
                {!! $bookings->links() !!}
            </div>
        </div>
    </div>

<br><br>


<!-- Tabla para observar las reservas de mis espacios -->
<div class="container-fluid">
    <div class="row">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-header">
                    <div style="display: flex; justify-content: space-between; align-items: center;">
                    <div class="title text-left">
                        <h2>Bookings in my Spaces</h2><br>
                    </div>
                            <div class="float-right">
                            <a href="{{ route('bookings.create') }}" class="btn btn-default btn-main"  data-placement="left">
                                {{ __('Create New') }}
                            </a>
                            </div>
                    </div>
                </div>
    

                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-hover">
                            <thead class="thead">
                                <tr>
                                    <th>Number</th>
                                    
                                    <th>Space Name</th>
                                    <!-- <th>User Id</th> -->
                                    <th>Start</th>
                                    <th>End</th>
                                    <th>Assistants</th>

                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($myspacesbookings as $myspacesbooking)
                                    <tr>
                                        <td>{{ ++$i }}</td>

                                        <td>{{ $myspacesbooking->space->name}}</td>
                                        {{-- <!-- <td>{{ $myspacesbooking->space_id }}</td> --> --}}
                                        <td>{{ $myspacesbooking->start }}</td>
                                        <td>{{ $myspacesbooking->end }}</td>
                                        <td>{{ $myspacesbooking->assistants }}</td>

                                        <td>
                                            <form action="{{ route('bookings.destroy',$myspacesbooking->id) }}" method="POST">
                                                <a class="btn btn-sm btn-primary " href="{{ route('bookings.show',$myspacesbooking->id) }}"><i class="fa fa-fw fa-eye"></i> Show</a>
                                                <a class="btn btn-sm btn-success" href="{{ route('bookings.edit',$myspacesbooking->id) }}"><i class="fa fa-fw fa-edit"></i> Edit</a>
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
            {!! $bookings->links() !!}
        </div>
    </div>
</div>
@endsection
