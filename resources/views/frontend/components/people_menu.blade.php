<ul class="sub-header-nav">
    <li class="sub-header-nav__item">
      <a href="{{ route('people') }}" class="sub-header-nav__item-link {{ request()->is('people') ? 'active' : '' }}"><h2 class="fw-bolder m-0">Team</h2></a>
    </li>
    <li class="sub-header-nav__item">
      <a href="{{ route('consultants') }}" class="sub-header-nav__item-link {{ request()->is('consultants') ? 'active' : '' }}"><h2 class="fw-bolder m-0">Consultants</h2></a>
    </li>
  </ul>