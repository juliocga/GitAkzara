<div class="container">
    <table class="table table-hover">
        <h4 class="text-center col-md-6 col-md-offset-3">Offered Services</h4>
        @include('admin.services.partials.search')
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Type</th>
            <th>Price</th>
            <th>Length</th>
            <th>Actions</th>
        </tr>
        @foreach ($services as $service)
            <tr data-id="{{$service->id}}">
                <td>{{ $service->id }}</td>
                <td>{{ $service->name }}</td>
                <td>{{ $service->type }}</td>
                <td>{{ $service->price}}</td>
                <td>{{ $service->length}}</td>
                <td>
                    <a href="{{ route('admin.services.edit', $service->id)}}">[Edit]</a>
                    <a href="#" class="btn-delete">[Delete]</a>
                </td>
            </tr>
        @endforeach
    </table>
    {!!  $services->appends(Request::only('name'))->render()  !!}
</div>
{!! Form::open(['route' => ['admin.services.destroy', ':SERV_ID'], 'method' => 'DELETE', 'id' => 'form-delete']) !!}
{!! Form::close() !!}


