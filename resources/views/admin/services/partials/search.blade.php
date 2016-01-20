<div class="col-md-3">
    {!! Form::model(Request::all(), ['route' => 'admin.services.index', 'method' => 'GET', ]) !!}
    <div class="input-group">
        {!! Form::text('name', null, ['class'=> 'form-control', 'placeholder' => 'Search for...' ])!!}
        <span class="input-group-btn">
                        <button type="submit" class="btn btn-default">Go!</button>
                    </span>
    </div>
    {!! Form::close() !!}
</div>