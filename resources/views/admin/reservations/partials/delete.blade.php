{!! Form::open(['route' => ['admin.reservations.destroy', $reservation->id], 'method' => 'DELETE']) !!}
    {!! Form::submit('Delete', ['class' => 'btn btn-danger', 'onclick' => 'return confirm("Are you sure?")']) !!}
{!! Form::close() !!}