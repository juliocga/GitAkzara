@extends('app')

@section('content')
    <div class="row" style="padding-top: 30px;">
        @include('admin.partials.message')
        @include('admin.reservations.partials.calendars')
    </div>
@endsection