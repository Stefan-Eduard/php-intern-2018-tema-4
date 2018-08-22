@extends ('master')

@section ('content')
    <h1> Sign in </h1>

    <form method = "POST" action = "/login"> <!--or should I use the API? -->
        {{ csrf_field() }}

        <div class = "form-group">
            <label for = "Email"> Email Address: </label>
            <input type = "email" class = "form-control" id = "email" name = "email">
        </div>

        <div class = "form-group">
            <label for = "password"> Password: </label>
            <input type = "password" class = "form-control" id = "password" name = "password">
        </div>
        <div class = "form-group">
            <label for = "password_confirmation"> Confirm Password: </label>
            <input type = "password" class = "form-control" id = "password_confirmation" name = "password_confirmation">
        </div>

        <div class = "form-group">
            <button type = "submit" class = "btn btn-primary"> Sign In </button>
        </div>
    </form>
@endsection ('content')