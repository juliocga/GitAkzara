<div class="form-group">
    {!! Form::label('name', 'Name :', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('name', null, ['class' => 'form-control']) !!}
    </div>
</div>
<div class="form-group">
    {!! Form::label('last_name', 'Last Name :', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('last_name', null, ['class' => 'form-control']) !!}
    </div>
</div>
<div class="form-group">
    {!! Form::label('email', 'E-Mail :', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::email('email', null, ['class' => 'form-control']) !!}
    </div>
</div>
<div class="form-group">
    {!! Form::label('password', 'Password :', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::password('password', ['class' => 'form-control']) !!}
    </div>
</div>
<div class="form-group">
    {!! Form::label('type', 'Type :', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-3">
        {!! Form::select('type', ['user' => 'User', 'admin' => 'Admin'], null, ['class' => 'form-control']) !!}
    </div>
    <div class="col-md-3">
        {!! Form::submit('Submit', ['class' => 'btn btn-info']) !!}
    </div>

</div>
