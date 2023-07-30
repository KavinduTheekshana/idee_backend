<!--start header -->
<header>
    <div class="topbar d-flex align-items-center">
        <nav class="navbar navbar-expand gap-3">
            <div class="mobile-toggle-menu"><i class='bx bx-menu'></i>
            </div>




            <div class="top-menu ms-auto">
             
            </div>
            <div class="user-box dropdown px-3">
                <a class="d-flex align-items-center nav-link dropdown-toggle gap-3 dropdown-toggle-nocaret"
                    href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    <img src="{{ asset('backend/assets/images/user.png') }}" class="user-img object-fit-cover" alt="user avatar">
                    <div class="user-info">
                        <p class="user-name mb-0"> {{ Auth::user()->name }}</p>
                        <p class="designattion mb-0">Admin</p>
                    </div>
                </a>
                <ul class="dropdown-menu dropdown-menu-end">
                    <li><a class="dropdown-item d-flex align-items-center" href="{{ route('home') }}"><i
                                class="bx bx-user fs-5"></i><span>Profile</span></a>
                    </li>

                    <li><a class="dropdown-item d-flex align-items-center" href="{{ route('home') }}"><i
                                class="bx bx-home-circle fs-5"></i><span>Dashboard</span></a>
                    </li>


                    <li>
                        <div class="dropdown-divider mb-0"></div>
                    </li>

                    <li>
                        <a class="dropdown-item" href="{{ route('logout') }}"
                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                            <i class="bx bx-log-out-circle"></i> {{ __('Logout') }}
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                    </li>
                </ul>
            </div>
        </nav>
    </div>
</header>
<!--end header -->