{!! Form::open(['route' => ['admin.services.destroy', $service->id], 'method' => 'DELETE']) !!}
    {!! Form::submit('Delete', ['class' => 'btn btn-danger', 'onclick' => 'return confirm("Are you sure?")']) !!}
{!! Form::close() !!}