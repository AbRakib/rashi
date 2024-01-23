<nav class="sidebar sidebar-offcanvas" id="sidebar">
    <ul class="nav">
        <li class="nav-item nav-profile">
        <a href="{{route('dashboard')}}" class="nav-link">
            <div class="nav-profile-image">
            <img src="{{ asset('backend/images/faces/face1.jpg') }}" alt="profile">
            <span class="login-status online"></span>
            <!--change to offline or busy as needed-->
            </div>
            <div class="nav-profile-text d-flex flex-column">
            <span class="font-weight-bold mb-2">{{ Auth::user()->name }}</span>
            <span class="text-secondary text-small">Project Manager</span>
            </div>
            <i class="mdi mdi-bookmark-check text-success nav-profile-badge"></i>
        </a>
        </li>
        <li class="nav-item">
        <a class="nav-link" href="{{route('dashboard')}}">
            <span class="menu-title">Dashboard</span>
            <i class="mdi mdi-home menu-icon"></i>
        </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-bs-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
                <span class="menu-title">Post Menu</span>
                <i class="menu-arrow"></i>
                <i class="mdi mdi-crosshairs-gps menu-icon"></i>
            </a>
            <div class="collapse" id="ui-basic">
                <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="{{route('post.index')}}">Post List</a></li>
                <li class="nav-item"> <a class="nav-link" href="{{route('post.create')}}">Post Add</a></li>
                </ul>
            </div>
        </li>
        
        <li class="nav-item">
            <a class="nav-link" data-bs-toggle="collapse" href="#general-pages" aria-expanded="false" aria-controls="general-pages">
                <span class="menu-title">Pages</span>
                <i class="menu-arrow"></i>
                <i class="mdi mdi-medical-bag menu-icon"></i>
            </a>
            <div class="collapse" id="general-pages">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item"> <a class="nav-link" href=""> Contact Us Page </a></li>
                    <li class="nav-item"> <a class="nav-link" href=""> Privacy Policy </a></li>
                    <li class="nav-item"> <a class="nav-link" href=""> Terms & Conditions </a></li>
                </ul>
            </div>
        </li>
        <li class="nav-item sidebar-actions">
            <span class="nav-link">
                <div class="border-bottom">
                </div>
                <a href="{{route('home')}}" class="btn btn-block btn-lg btn-gradient-primary mt-4" target="_blank">Visit Website</a>
            </span>
        </li>
    </ul>
</nav>