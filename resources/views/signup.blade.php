<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/signup.css') }}" rel="stylesheet">
    <title>Signup to Sparkle</title>
  </head>
  <body>
    @include('_partials._auth_navbar_signup')

    <div id="reg_form" class="container mt-4 pt-3 p-5">
        <h4 class="text-center">Create a new Account</h4>
        <form id="register_form">
          @csrf
            <div class="mb-3">
              <label for="email" class="form-label">Email address</label>
              <input type="email" name="email" class="form-control" id="email" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
              <label for="full_name" class="form-label">Full Name</label>
              <input type="text" name="full_name" class="form-control" id="full_name">
            </div>
            <div class="mb-3">
              <label for="password" class="form-label">Password</label>
              <input type="password" name="password" minlength="7" maxlength="255" class="form-control" id="password">
            </div>
            <div class="mb-3">
              <label for="cpassword" class="form-label">Confirm Password</label>
              <input type="password" name="cpassword" class="form-control" id="cpassword">
            </div>
            <button type="submit" class="btn btn-primary">Signup</button>
          </form>
    </div>


    <script src="{{ asset('jquery/jquery-3.7.1.min.js') }}"></script>
    <script>
        let baseUrl = "{{ url('/') }}";
    </script>
    <script src="{{ asset('js/signup.js') }}"></script>
    <script src="{{ asset('popper/popper.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
  </body>
</html>
