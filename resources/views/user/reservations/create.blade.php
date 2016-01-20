@extends('app')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Reservate</div>
                    <div class="panel-body">
                        @include('admin.partials.errormsg')

                        {!! Form::open(['route' => 'user.reservations.store', 'method' => 'POST', 'class' => 'form-horizontal']) !!}
                        @include('user.reservations.partials.createform')
                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection