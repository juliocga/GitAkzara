<div class="form-group">
    {!! Form::label('name', 'Name :', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('name', null, ['class' => 'form-control']) !!}
    </div>
</div>
<div class="form-group">
    {!! Form::label('type', 'Type :', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-3">
        {!! Form::select('type', ['facial' => 'Facial', 'corporal' => 'Corporal', 'room' => 'Thematic Room', 'other' => 'Other'], null, ['class' => 'form-control']) !!}
    </div>
</div>
<div class="form-group">
    {!! Form::label('price', 'Cost :', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::number('price', null, ['class' => 'form-control']) !!}
    </div>
</div>
<div class="form-group">
    {!! Form::label('urlimage', 'Image URL :', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('urlimage', null, ['class' => 'form-control']) !!}
    </div>
</div>
<div class="form-group">
    {!! Form::label('urlinfo', 'Info URL :', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('urlinfo', null, ['class' => 'form-control']) !!}
    </div>
</div>


<div class="form-group">
    {!! Form::label('length', 'Length :', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-3">
        {!! Form::number('length', null, ['class' => 'form-control']) !!}
    </div>
    <div class="col-md-3">
        {!! Form::submit('Submit', ['class' => 'btn btn-info']) !!}
    </div>
</div>

