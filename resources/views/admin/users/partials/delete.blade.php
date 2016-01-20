{!! Form::open(['route' => ['admin.users.destroy', $user->id], 'method' => 'DELETE']) !!}
    {!! Form::submit('Delete', ['class' => 'btn btn-danger', 'onclick' => 'return confirm("Are you sure?")']) !!}
{!! Form::close() !!}