<div class="col-md-6 pull-right">
    {!! Form::model(Request::all(), ['route' => 'user.reservations.index', 'method' => 'GET', 'class' => 'form-inline' ]) !!}
        <div class="form-group col-md-3">
            {!! Form::select('status', config('options.reservStatus'), null, ['class' => 'form-control']) !!}
        </div>
        <div class="form-group col-md-6">
            <div class="input-group">
                {!! Form::text('service', null, ['class'=> 'form-control', 'placeholder' => 'Search service...' ]) !!}
                <span class="input-group-btn">
                    <button type="submit" class="btn btn-default">Go!</button>
                </span>
            </div>
        </div>
    {!! Form::close() !!}
</div>
