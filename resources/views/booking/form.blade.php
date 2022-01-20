<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('Name Space') }}
            {{ Form::text('space_id', $booking->space->name, ['class' => 'form-control' . ($errors->has('space_id') ? ' is-invalid' : ''), 'placeholder' => 'Space Id']) }}
            {!! $errors->first('space_id', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('User') }}
            {{ Form::text('user_id', $booking->user->name, ['class' => 'form-control' . ($errors->has('user_id') ? ' is-invalid' : ''), 'placeholder' => 'User Id']) }}
            {!! $errors->first('user_id', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Start') }}
            {{-- {{ Form::text('start', $booking->start, ['class' => 'form-control' . ($errors->has('start') ? ' is-invalid' : ''), 'placeholder' => 'Start']) }} --}}
            {{ Form::datetime('start', (\Carbon\Carbon::parse($booking->start)->format('i:H d/m/Y')), ['class' => 'form-control' . ($errors->has('start') ? ' is-invalid' : ''), 'placeholder' => 'Start']) }}
            
            {!! $errors->first('start', '<div class="invalid-feedback">:message</p>') !!}
               
        </div>
        <div class="form-group">
            {{ Form::label('End') }}
            {{-- {{ Form::text('end', $booking->end, ['class' => 'form-control' . ($errors->has('end') ? ' is-invalid' : ''), 'placeholder' => 'End']) }} --}}        
            {{ Form::datetime('end', (\Carbon\Carbon::parse($booking->end)->format('i:H d/m/Y')), ['class' => 'form-control' . ($errors->has('end') ? ' is-invalid' : ''), 'placeholder' => 'End']) }}
            {{-- {{ \Carbon\Carbon::parse($booking->end)->format('d/m/Y') }} --}}
            {!! $errors->first('end', '<div class="invalid-feedback">:message</p>') !!}
                
        </div>
        <div class="form-group">
            {{ Form::label('Assistants') }}
            {{ Form::text('assistants', $booking->assistants, ['class' => 'form-control' . ($errors->has('assistants') ? ' is-invalid' : ''), 'placeholder' => 'Assistants']) }}
            {!! $errors->first('assistants', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Pending to Accepted') }}
            {{ Form::checkbox('accepted', $booking->accepted, ['class' => 'form-control' . ($errors->has('accepted') ? ' is-invalid' : ''), 'placeholder' => 'Accepted']) }}
            {!! $errors->first('accepted', '<div class="invalid-feedback">:message</p>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        {{-- <button type="submit" class="btn btn-primary" href="{{ url('/bookings.show') }}">            
            Submit
        </button> --}}
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>