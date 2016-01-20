@extends('app')

@section('content')
    <div class="container-fluid">
        <div class="row">
            @include('admin.partials.message')
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Edit User : {{$user->name}}</div>
                    <div class="panel-body">
                        {!! Form::model($user, ['route' => ['admin.users.update', $user->id], 'method' => 'PUT', 'class' => 'form-horizontal']) !!}
                        @include('admin.users.partials.createform')
                        {!! Form::close() !!}
                    </div>
                </div>
                @include('admin.users.partials.delete')
            </div>
        </div>
    </div>
@endsection