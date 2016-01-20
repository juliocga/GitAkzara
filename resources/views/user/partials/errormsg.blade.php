@if ($errors->any())
    <div class="alert alert-danger" role="alert">
        <p> Errors have been found</p>
        <ul>
            @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif