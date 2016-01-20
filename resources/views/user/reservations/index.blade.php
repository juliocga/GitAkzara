@extends('app')

@section('content')
    <div class="row" style="padding-top: 30px;">
        @include('user.partials.message')
        @include('user.reservations.partials.table')
    </div>
@endsection

