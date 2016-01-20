<div class="container">

    @foreach($services as $service)
        @if( $service->type == 'room' )
            <div class="col-xs-6 col-md-3">
                <div class="thumbnail">
                    <img  class="img-thumbnail" src="{{$service->urlimage}}" style="width:240px;height:230px;">
                    <div class="caption">
                        <h3>{{$service->name}}</h3>
                        <p>Cost: {{$service->price}} $<br> Length: {{$service->length}} minutes</p>
                        <p>
                            <a href="{{$service->urlinfo}}" class="btn btn-default" role="button">Info</a>
                            <a href="{{ route('user.reservations.create', ['serviceid' => $service->id]) }}" class="btn btn-primary" role="button">Reserve</a>
                        </p>
                    </div>
                </div>
            </div>
@endif
@endforeach