<div class="container">
    <table class="table table-hover">
        <h4 class="text-center">Booking List</h4>
        @include('user.reservations.partials.search')
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
                    <a href="{{ route('user.reservations.edit', $reservation->id)}}">[cancel]</a>
                    <a href="{{ url('user/pdf',[$reservation->id]) }}" class="btn-delete">[Download PDF]</a>
                </td>
            </tr>
        @endforeach
    </table>
    {!!  $reservations->appends(Request::all())->render()  !!}
</div>



