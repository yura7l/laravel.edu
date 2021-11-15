@if($errors->any())
    <div class="alert alert-danger mt-3" id="errors">
        <ul>
            @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

@if(session('success'))
    <div class="alert alert-success mt-3" id="success">
        {{ session('success') }}
    </div>
@endif
