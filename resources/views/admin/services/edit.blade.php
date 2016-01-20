@extends('app')

@section('content')
    <div class="container-fluid">
        <div class="row">
            @include('admin.partials.message')
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Edit Service : {{$service->name}}</div>
                    <div class="panel-body">
                        {!! Form::model($service, ['route' => ['admin.services.update', $service->id], 'method' => 'PUT', 'class' => 'form-horizontal']) !!}
                        @include('admin.services.partials.createform')
                        {!! Form::close() !!}
                    </div>
                </div>
                @include('admin.services.partials.delete')
            </div>
        </div>
    </div>
@endsection