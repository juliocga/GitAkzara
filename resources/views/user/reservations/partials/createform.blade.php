<div class="form-group">
    {!! Form::label('service', 'Name :', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('service', $service->name, ['class' => 'form-control', 'disabled' => 'disabled',]) !!}
        {!! Form::text('service', $service->name, ['class' => 'form-control hidden',]) !!}
    </div>
</div>
{!!Form::number('serviceid', $service->id,['class' => 'hidden'])!!}
<div class="form-group">
    {!! Form::label('when', 'Date :', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::date('when', \Carbon\Carbon::now(), ['class' => 'form-control']) !!}
    </div>
</div>
<div class="form-group">
    {!! Form::label('time', 'Time :', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-3">
        <input type="time" name="time" class="form-control" id="time">
    </div>
    <div class="col-md-3">
        {!! Form::submit('Submit', ['class' => 'btn btn-info']) !!}
    </div>
</div>


