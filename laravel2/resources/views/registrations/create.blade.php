@extends ('master')

@section ('content')

      <h1> Register </h1>
    
      <form method = "POST" action = "/register">

      {{ csrf_field() }}
      
      <div class="form-group">
        <label for="name"> Name: </label>
        <input type="text" class="form-control" id="name" name = "name" required> 
        <!-- name = ... is used for submitting -->
      </div>

      <div class="form-group">
        <label for="age"> Age: </label>
        <input type="number" class="form-control" id="age" name = "age" required> 
        <!-- name = ... is used for submitting -->
      </div>

      <div class="form-group">
        <label for="citizenship"> Citizenship: </label>
        <input type="text" class="form-control" id="citizenship" name = "name" required> 
        <!-- name = ... is used for submitting -->
      </div>

      <div class="form-group">
        <label for="email"> Email: </label>
        <input type="email" class="form-control" id="email" name = "email" required> 
        <!-- name = ... is used for submitting -->
      </div>

      <div class="form-group">
        <label for="password"> Password: </label>
        <input type="password" class="form-control" id="password" name = "password" required> 
        <!-- name = ... is used for submitting -->
      </div>

      <div class="form-group">
        <label for="password_confirmation"> Password Confirmation: </label>
        <input type="password" class="form-control" id="password_confirmation" name = "password_confirmation" required> 
        <!-- name = ... is used for submitting -->
      </div>

      <div class="form-group">
        <button type="submit" class="btn btn-primary"> Register </button>
      </div>

      @include ('layouts.errors')

    </form>

@endsection ('content')