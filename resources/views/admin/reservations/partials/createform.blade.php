<div class="form-group">
    {!! Form::label('forwho', 'Name :', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('forwho', $reservation->forwho, ['class' => 'form-control',]) !!}
    </div>
</div>
<div class="form-group">
    {!! Form::label('whoid', 'ID :', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::number('whoid', $reservation->whoid, ['class' => 'form-control',]) !!}
    </div>
</div>

<div class="form-group">
    {!! Form::label('service', 'Service :', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('service', $reservation->service, ['class' => 'form-control',]) !!}
    </div>
</div>
<div class="form-group">
    {!! Form::label('serviceid', 'ID :', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::number('serviceid', $reservation->serviceid, ['class' => 'form-control',]) !!}
    </div>
</div>

<div class="form-group">
    {!! Form::label('when', 'Date :', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::date('when', $reservation->when, ['class' => 'form-control']) !!}
    </div>
</div>
<div class="form-group">
    {!! Form::label('time', 'Time :', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        <input type="time" name="time" value="{{$reservation->time}}" class="form-control" id="time">
    </div>
</div>
<div class="form-group">
    {!! Form::label('status', 'Status :', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-3">
        {!! Form::select('status', ['created' => 'Created', 'confirmed' => 'Confirmed', 'canceled' => 'canceled', 'completed' => 'completed', 'missed' => 'missed'], null, ['class' => 'form-control']) !!}
    </div>
    <div class="col-md-3">
        {!! Form::submit('Submit', ['class' => 'btn btn-info']) !!}
    </div>
</div>


