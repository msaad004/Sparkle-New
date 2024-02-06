<nav id="navbar" class="d-flex navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
      <a class="navbar-brand fw-bold">
        <img src="{{ asset('img/logo.png') }}" alt="Logo" class="logo" width="30" height="30">
        Sparkle
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="mx-auto navbar-nav mx-auto mb-2 mb-lg-0 pe-5" style="font-family:Verdana, Geneva, Tahoma, sans-serif">
          <span>Connect, Share and Inspire...</span>
        </ul>
        </div>
        <a href="{{ url('register') }}">
            <button class="btn btn-primary me-3">Signup</button>
        </a>
    </div>
  </nav>