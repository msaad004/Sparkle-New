<nav id="navbar" class="navbar navbar-expand-lg navbar-light bg-light">
      <div class="container-fluid">
        <a class="navbar-brand fw-bold" href="{{ url('/') }}">
          <img src="{{ asset('img/logo.png') }}" alt="Logo" class="logo" width="30" height="30">
          Sparkle
       </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
              <li class="nav-item me-5">
                <a class="nav-link fw-bold" aria-current="page" href="{{ url('/') }}">Home</a>
              </li>
              <li class="nav-item me-5">
                <a class="nav-link fw-bold" href="{{ url('post') }}">Post Spark</a>
              </li>
              <li class="nav-item dropdown me-5">
                <a class="nav-link dropdown-toggle fw-bold" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Profile
                </a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="{{ url('profile') }}">View Profile</a></li>
                  <li><a class="dropdown-item" href="{{ url('help') }}">Get Help</a></li>
                  <li><hr class="dropdown-divider"></li>
                  <li><a class="dropdown-item" href="#">Logout</a></li>
                </ul>
              </li>
            </ul>
          <form class="d-flex" role="search">
            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success" type="submit">Search</button>
          </form>
        </div>
      </div>
    </nav>