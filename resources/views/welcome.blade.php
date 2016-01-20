@extends('app')

@section('content')
    <div class="row" style="padding-top: 30px;">
            @include('partials.welcome.rituals')
    </div>
    <div class="row" style="padding-top: 30px;">
        @include('partials.welcome.treatments')
    </div>

    <div>
        <iframe src="https://calendar.google.com/calendar/embed?src=fbc6stivnvvv59ujkqsnd86nu8%40group.calendar.google.com&ctz=America/Bogota" style="border: 0" width="800" height="600" frameborder="0" scrolling="no"></iframe>    </div>

@endsection
