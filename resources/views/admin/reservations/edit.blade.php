@extends('app')

@section('content')
    <div class="container-fluid">
        <div class="row">
            @include('admin.partials.message')
            @include('admin.partials.errormsg')
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Edit Reservation : {{$reservation->name}}</div>
                    <div class="panel-body">
                        {!! Form::model($reservation, ['route' => ['admin.reservations.update', $reservation->id], 'method' => 'PUT', 'class' => 'form-horizontal']) !!}
                        @include('admin.reservations.partials.createform')
                        {!! Form::close() !!}
                    </div>
                </div>
                @include('admin.reservations.partials.delete')
            </div>
        </div>
    </div>
@endsection