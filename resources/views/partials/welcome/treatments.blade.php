<div class="container">
    <div class="col-xs-6 col-md-6">
        <div class=" well ">
            <table class="table table-hover">
                <h4 class="text-center ">Corporal Treatments</h4>
                @foreach($services as $service)
                    @if( $service->type == 'corporal' )
                        <tr>
                            <td><img class="media-object"
                                     src="{{$service->urlimage}}" height="64" width="64"></td>
                            <td><b>{{ $service->name }}</b></td>
                            <td>{{ $service->price }} $</td>
                            <td>{{ $service->length }} min.</td>
                            <td><a href="{{$service->urlinfo}}" class="btn btn-default" role="button">Info</a></td>
                            <td><a href="{{ route('user.reservations.create', ['serviceid' => $service->id]) }}" class="btn btn-primary" role="button">Reserve</a></td>
                        </tr>
                    @endif
                @endforeach
            </table>
        </div>
    </div>
    <div class="col-xs-6 col-md-6">
        <div class=" well ">
            <table class="table table-hover">
                <h4 class="text-center ">Facial Treatments</h4>
                @foreach($services as $service)
                    @if( $service->type == 'facial' )
                        <tr>
                            <td><img class="media-object"
                                     src="{{$service->urlimage}}" height="64" width="64"></td>
                            <td><b>{{ $service->name }}</b></td>
                            <td>{{ $service->price }} $</td>
                            <td>{{ $service->length }} min.</td>
                            <td><a href="{{$service->urlinfo}}" class="btn btn-default" role="button">Info</a></td>
                            <td><a href="{{ route('user.reservations.create', ['serviceid' => $service->id]) }}" class="btn btn-primary" role="button">Reserve</a></td>
                        </tr>
                    @endif
                @endforeach
            </table>
        </div>
    </div>
    <div class="col-xs-6 col-md-6">
        <div class=" well ">
            <table class="table table-hover">
                <h4 class="text-center ">Other Treatments</h4>
                @foreach($services as $service)
                    @if( $service->type == 'other' )
                        <tr>
                            <td><img class="media-object"
                                     src="{{$service->urlimage}}" height="64" width="64"></td>
                            <td><b>{{ $service->name }}</b></td>
                            <td>{{ $service->price }} $</td>
                            <td>{{ $service->length }} min.</td>
                            <td><a href="{{$service->urlinfo}}" class="btn btn-default" role="button">Info</a></td>
                            <td><a href="{{ route('user.reservations.create', ['serviceid' => $service->id]) }}" class="btn btn-primary" role="button">Reserve</a></td>
                        </tr>
                    @endif
                @endforeach
            </table>
        </div>
    </div>
</div>
