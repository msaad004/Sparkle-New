<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/index.css') }}" rel="stylesheet">
    <title>Sparkle</title>
  </head>
  <body>
  @include('_partials/_navbar')

  <div class="d-flex flex-wrap justify-content-center">
    <div class="container mt-3">
      <ul class="nav bg-light">
        <li class="nav-item">
          <a class="nav-link link-dark">Sort by Categores:</a>
        </li>
        <div class="d-flex justify-content-center">
          <li class="nav-item">
            <a class="nav-link link-dark" href="#">Personal</a>
          </li>
          <li class="nav-item">
            <a class="nav-link link-dark" href="#">Business</a>
          </li>
          <li class="nav-item">
            <a class="nav-link link-dark" href="#">Tourism</a>
          </li>
        </div>
      </ul>
    </div>
    <div class="container mx-5 mt-4 w-5">
      <div class="p-5 bg-light rounded-3">
        <h1 class="display-4">Your Heading</h1>
        <p class="lead">Your description goes here.</p>
        <hr class="my-4">
        <p>Additional information or content.</p>
      </div>
    </div>
  </div>

    <script src="{{ asset('jquery/jquery-3.7.1.min.js') }}"></script>
    <script src="{{ asset('js/index.js') }}"></script>
    <script src="{{ asset('popper/popper.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
  </body>
</html>