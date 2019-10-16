@if(Session::has('success_message'))
    <div class="alert alert-success text-center" role="alert">
        <strong> Success: </strong> {{ Session::get('success_message') }}
    </div>
@endif

@if(Session::has('error_message'))
    <div class="alert alert-danger text-center" role="alert">
        <strong> Error: </strong> {{ Session::get('error_message') }}
    </div>
@endif

@if(count($errors) > 0)
    <div class="alert alert-danger text-center" role="alert">
        <strong> Errors: </strong>
        <ul>
            @foreach($errors->all() as $error)
                <li> {{ $error }} </li>
            @endforeach
        </ul>
    </div>
@endif