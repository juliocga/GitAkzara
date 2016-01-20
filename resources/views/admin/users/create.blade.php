@extends('app')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Create User</div>
                    <div class="panel-body">
                        @include('admin.partials.errormsg')

                        {!! Form::open(['route' => 'admin.users.store', 'method' => 'POST', 'class' => 'form-horizontal']) !!}
                            @include('admin.users.partials.createform')
                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection