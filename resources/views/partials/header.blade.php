<header class="navigation sticky-top bg-white">
    <div class="container">
      <nav class="navbar navbar-expand-lg navbar-light">
        <a class="navbar-brand" href="{{ route('home') }}"> <img src="{{ asset('frontend/images/logo.png') }}" alt="Vex" width="100px">
        </a>
        <button class="navbar-toggler p-0 border-0" type="button" data-toggle="collapse" data-target="#navigation"
          aria-controls="navigation" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
  
        <div class="collapse navbar-collapse text-center" id="navigation">
          <ul class="navbar-nav ml-auto mr-n0 mr-md-n3">
  
            <li class="nav-item">
              <a class="nav-link" href="{{route('home')}}">Home</a>
            </li>
  
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#!" id="dropdown02" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Pages <i class="tf-ion-chevron-down"></i></a>
              <ul class="dropdown-menu" aria-labelledby="dropdown02">
                <li><a class="dropdown-item" href="{{route('privacy')}}">Privacy Policy</a></li>
                <li><a class="dropdown-item" href="{{route('terms')}}">Terms Conditions</a></li>
              </ul>
            </li>
  
            <li class="nav-item">
              <a class="nav-link" href="{{route('contact')}}">Contact</a>
            </li>
            @auth
                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#!" id="dropdown03" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">{{ Auth::user()->name }} <i class="tf-ion-chevron-down"></i></a>
                  <ul class="dropdown-menu" aria-labelledby="dropdown03">
                    <li><a class="dropdown-item" target="_blank" href="{{route('dashboard')}}">Dashboard</a></li>
                    <li><a class="dropdown-item" href="{{route('logout')}}">Logout</a></li>
                  </ul>
                </li>
            @endauth
            @guest
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#!" id="dropdown03" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Auth <i class="tf-ion-chevron-down"></i></a>
              <ul class="dropdown-menu" aria-labelledby="dropdown03">
                <li><a class="dropdown-item" href="{{route('login')}}">Login</a></li>
                <li><a class="dropdown-item" href="{{route('register')}}">Registration</a></li>
              </ul>
            </li>
            @endguest
            
  
          </ul>
  
        </div>
      </nav>
    </div>
  </header>