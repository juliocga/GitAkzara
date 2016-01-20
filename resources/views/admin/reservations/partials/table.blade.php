<div class="container">
    <table class="table table-hover">
        <h4 class="text-center">Booking List</h4>
        @include('admin.reservations.partials.search')
        <tr>
            <th>ID</th>
            <th>For:</th>
            <th>Service</th>
            <th>Date</th>
            <th>Time</th>
            <th>Status</th>
            <th>Actions</th>
        </tr>
        @foreach ($reservations as $reservation)
            <tr data-id="{{$reservation->id}}">
                <td>{{ $reservation->id }}</td>
                <td>{{ $reservation->forwho }}</td>
                <td>{{ $reservation->service }}</td>
                <td>{{ $reservation->when}}</td>
                <td>{{ $reservation->time}}</td>
                <td>{{ $reservation->status}}</td>
                <td>
                    <a href="{{ route('admin.reservations.edit', $reservation->id)}}">[Edit]</a>
                    <a href="#" class="btn-delete">[Delete]</a>
                </td>
            </tr>
        @endforeach
    </table>
    {!!  $reservations->appends(Request::all())->render()  !!}
</div>
{!! Form::open(['route' => ['admin.reservations.destroy', ':SERV_ID'], 'method' => 'DELETE', 'id' => 'form-delete']) !!}
{!! Form::close() !!}


