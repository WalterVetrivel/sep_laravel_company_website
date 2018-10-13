<nav class="navbar navbar-expand-lg navbar-light sticky-navbar" id="navbar">
    <div class="container">
        <a href="#" class="navbar-brand">
            <i class="fa fa-3x fa-globe mr-2"></i>Company
        </a>
        <button class="navbar-toggler" type="button" role="button" data-toggle="collapse" data-target="#navLinks">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navLinks">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item {{ Request::is('/') ? 'active' : '' }}"><a href="{{ route('home') }}" class="nav-link">Home</a></li>
                <li class="nav-item {{ Request::is('about') ? 'active' : '' }}"><a href="{{ route('about') }}" class="nav-link">About</a></li>
                <li class="nav-item {{ Request::is('portfolio') ? 'active' : '' }}"><a href="{{ route('portfolio') }}" class="nav-link">Portfolio</a></li>
                <li class="nav-item {{ Request::is('blog') ? 'active' : '' }}"><a href="{{ route('blog') }}" class="nav-link">Blog</a></li>
            </ul>
        </div>
    </div>
</nav>
