<!-- Navbar Start -->
<div class="container-fluid position-relative p-0">
    <nav class="navbar navbar-expand-lg navbar-dark px-5 py-3 py-lg-0">
        <a href="{{ route('home') }}" class="navbar-brand p-0">
            <h1 class="m-0"><i class="fa fa-industry me-2"></i>Skilledge Engineering</h1>
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="fa fa-bars"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto py-0">
                <a href="{{ route('home') }}" class="nav-item nav-link {{ request()->routeIs('home') ? 'active' : '' }}">Home</a>
                <a href="{{ route('about') }}" class="nav-item nav-link {{ request()->routeIs('about') ? 'active' : '' }}">About</a>
                <a href="{{ route('services') }}" class="nav-item nav-link {{ request()->routeIs('services') ? 'active' : '' }}">Products &amp; Services</a>
                <a href="{{ route('manufacturing-partner') }}" class="nav-item nav-link {{ request()->routeIs('manufacturing-partner') ? 'active' : '' }}">International Partner &amp; Offices</a>
                <a href="{{ route('team') }}" class="nav-item nav-link {{ request()->routeIs('team') ? 'active' : '' }}">Our Team</a>
                <a href="{{ route('it-team') }}" class="nav-item nav-link {{ request()->routeIs('it-team') ? 'active' : '' }}">IT Team</a>
                <a href="{{ route('rd') }}" class="nav-item nav-link {{ request()->routeIs('rd') ? 'active' : '' }}">R&amp;D</a>
                <a href="{{ route('career') }}" class="nav-item nav-link {{ request()->routeIs('career') ? 'active' : '' }}">Career</a>
                <a href="{{ route('contact') }}" class="nav-item nav-link nav-contact {{ request()->routeIs('contact') ? 'active' : '' }}">Contact</a>
            </div>
            <a href="{{ route('contact') }}" class="btn btn-primary py-2 px-4 ms-3">Get A Quote</a>
        </div>
    </nav>

    @yield('nav-header')
</div>
<!-- Navbar End -->
