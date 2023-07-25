<nav class="navbar navbar-expand-lg @yield('navbar_type') fixed-top">
    <div class="container-fluid p-0">
      <a class="navbar-brand" href="{{ route('idee') }}">
        <img src="@yield('site_logo')" alt="Logo">
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link {{ request()->is('about') ? 'active' : '' }}" href="{{ route('about') }}">idée</a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ request()->is('people') ? 'active' : '' }}" href="{{ route('people') }}">people</a>
          </li>  
          <li class="nav-item">
            <a class="nav-link {{ request()->is('projects') ? 'active' : '' }}" href="{{ route('idee') }}">projects</a>
          </li> 
          <li class="nav-item">
            <a class="nav-link" href="{{ route('idee') }}">contact</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ route('idee') }}">accolades</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>