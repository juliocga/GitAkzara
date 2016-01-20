<div class="container">
    <table class="table table-hover">
        <h4 class="text-center col-md-6 col-md-offset-3">Registered Users</h4>
        @include('admin.users.partials.search')
        <tr>
            <th>ID</th>
            <th>Full Name</th>
            <th>E-mail</th>
            <th>Type</th>
            <th>Actions</th>
        </tr>
        @foreach ($users as $user)
            <tr data-id="{{$user->id}}">
                <td>{{ $user->id }}</td>
                <td>{{ $user->full_name }}</td>
                <td>{{ $user->email }}</td>
                <td>{{ $user->type}}</td>
                <td>
                    <a href="{{ route('admin.users.edit', $user->id)}}">[Edit]</a>
                    <a href="#" class="btn-delete">[Delete]</a>
                </td>
            </tr>
        @endforeach
    </table>
    {!!  $users->appends(Request::only('name'))->render()  !!}
</div>
{!! Form::open(['route' => ['admin.users.destroy', ':USER_ID'], 'method' => 'DELETE', 'id' => 'form-delete']) !!}
{!! Form::close() !!}


