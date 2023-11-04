<!-- ======= Header ======= -->
<header id="header">
    <div class="d-flex flex-column">

        <div class="profile">
            <img src="{{ asset('img/dummy-profile.png') }}" alt="" class="img-fluid rounded-circle">
            <h1 class="text-light"><a href="{{ route('home') }}">Agus Supriyatna</a></h1>
            <div class="social-links mt-3 text-center">
                <a href="#" target="_blank" class="linkedin"><i class="bx bxl-linkedin"></i></a>
                <a href="#" target="_blank" class="github"><i class="bx bxl-github"></i></a>
                <a href="#" target="_blank" class="twitter"><i class="bx bxl-twitter"></i></a>
                <a href="#" target="_blank" class="instagram"><i class="bx bxl-instagram"></i></a>
            </div>
        </div>

        <nav id="navbar" class="nav-menu navbar">
            <ul>
                <li><a href="{{ route('home') }}" class="nav-link {{ request()->routeIs('home') ? 'active' : '' }}"><i class="bx bx-home"></i> <span>Home</span></a></li>
                <li><a href="{{ route('about') }}" class="nav-link {{ request()->routeIs('about') ? 'active' : '' }}"><i class="bx bx-user"></i> <span>About</span></a></li>
                <li><a href="{{ route('resume') }}" class="nav-link {{ request()->routeIs('resume') ? 'active' : '' }}"><i class="bx bx-file-blank"></i> <span>Resume</span></a></li>
                <li><a href="{{ route('skills') }}" class="nav-link {{ request()->routeIs('skills') ? 'active' : '' }}"><i class="bx bx-book-content"></i> <span>Skills</span></a></li>
                <li><a href="{{ route('contact') }}" class="nav-link {{ request()->routeIs('contact') ? 'active' : '' }}"><i class="bx bx-envelope"></i> <span>Contact</span></a></li>
            </ul>
        </nav><!-- .nav-menu -->
    </div>
</header><!-- End Header -->
