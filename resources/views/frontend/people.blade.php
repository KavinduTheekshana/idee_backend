@extends('layouts.frontend')
@section('page_title', 'People Team | idée CA')
@section('navbar_type', 'navbar-light bg-white')
@section('site_logo', asset('frontend/images/logo-dark.svg'))
@section('content')
<body class="bg-white">
@include('frontend.components.header')
<main>
    <div class="page-content">
      <div class="hide-on-mobile">
        <ul class="sub-header-nav">
          <li class="sub-header-nav__item">
            <a href="people-team.html" class="sub-header-nav__item-link active"><h2 class="fw-bolder m-0">Team</h2></a>
          </li>
          <li class="sub-header-nav__item">
            <a href="people-consultants.html" class="sub-header-nav__item-link"><h2 class="fw-bolder m-0">Consultants</h2></a>
          </li>
        </ul>
        <div class="people-list-area">
          <ul class="people-list">
            <li class="people-list__item people-list__item-1">
              <img src="{{ asset('frontend/images/people/1.png') }}" alt="people-1" class="people-list__item-link" data-toggle="tooltip" data-bs-placement="bottom" title="TNKR Liyanage">
            </li>
            <li class="people-list__item people-list__item-2">
              <img src="{{ asset('frontend/images/people/2.png') }}" alt="people-2" class="people-list__item-link" data-toggle="tooltip" data-bs-placement="bottom" title="John Doe">
            </li>
            <li class="people-list__item people-list__item-3">
              <img src="{{ asset('frontend/images/people/3.png') }}" alt="people-3" class="people-list__item-link" data-toggle="tooltip" data-bs-placement="bottom" title="Jane Doe">
            </li>
            <li class="people-list__item people-list__item-4">
              <img src="{{ asset('frontend/images/people/4.png') }}" alt="people-4" class="people-list__item-link" data-toggle="tooltip" data-bs-placement="bottom" title="TNKR Liyanage">
            </li>
            <li class="people-list__item people-list__item-5">
              <img src="{{ asset('frontend/images/people/5.png') }}" alt="people-5" class="people-list__item-link" data-toggle="tooltip" data-bs-placement="bottom" title="TNKR Liyanage">
            </li>
            <li class="people-list__item people-list__item-6">
              <img src="{{ asset('frontend/images/people/6.png') }}" alt="people-6" class="people-list__item-link" data-toggle="tooltip" data-bs-placement="bottom" title="Jeewanthi Senadheera">
            </li>
          </ul>         
        </div>
        <div class="people-list__description-area">
          <div class="people-list__item-description people-list__item-description-1">
            <div class="container-fluid p-lg-3">
              <div class="row">
                <div class="col-lg-3 offset-lg-2 col-md-5 text-md-end">
                  <h4 class="fw-bolder m-0">TNKR Liyanage</h4>
                  <h4 class="fw-bolder m-0">Principal architect</h4>
                  <h6>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Dolor a cum facilis omnis</h6>
                </div>
                <div class="col-lg-7 col-md-7">
                  <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Dolor a cum facilis omnis, nostrum maxime cupiditate incidunt iusto veritatis neque. Doloribus quia, dolore libero officiis nisi ab accusantium unde molestiae!</p>
                </div>
              </div>
            </div>
          </div>
          <div class="people-list__item-description people-list__item-description-2">
            <div class="container-fluid p-lg-3">
              <div class="row">
                <div class="col-lg-3 offset-lg-2 col-md-5 text-md-end">
                  <h4 class="fw-bolder m-0">John Doe</h4>
                  <h4 class="fw-bolder m-0">Principal architect</h4>
                  <h6>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Dolor a cum facilis omnis</h6>
                </div>
                <div class="col-lg-7 col-md-7">
                  <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Dolor a cum facilis omnis, nostrum maxime cupiditate incidunt iusto veritatis neque. Doloribus quia, dolore libero officiis nisi ab accusantium unde molestiae!</p>
                </div>
              </div>
            </div>
          </div>
          <div class="people-list__item-description people-list__item-description-3">
            <div class="container-fluid p-lg-3">
              <div class="row">
                <div class="col-lg-3 offset-lg-2 col-md-5 text-md-end">
                  <h4 class="fw-bolder m-0">Jane Doe</h4>
                  <h4 class="fw-bolder m-0">Principal architect</h4>
                  <h6>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Dolor a cum facilis omnis</h6>
                </div>
                <div class="col-lg-7 col-md-7">
                  <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Dolor a cum facilis omnis, nostrum maxime cupiditate incidunt iusto veritatis neque. Doloribus quia, dolore libero officiis nisi ab accusantium unde molestiae!</p>
                </div>
              </div>
            </div>
          </div>
          <div class="people-list__item-description people-list__item-description-4">
            <div class="container-fluid p-lg-3">
              <div class="row">
                <div class="col-lg-3 offset-lg-2 col-md-5 text-md-end">
                  <h4 class="fw-bolder m-0">TNKR Liyanage</h4>
                  <h4 class="fw-bolder m-0">Principal architect</h4>
                  <h6>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Dolor a cum facilis omnis</h6>
                </div>
                <div class="col-lg-7 col-md-7">
                  <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Dolor a cum facilis omnis, nostrum maxime cupiditate incidunt iusto veritatis neque. Doloribus quia, dolore libero officiis nisi ab accusantium unde molestiae!</p>
                </div>
              </div>
            </div>
          </div>
          <div class="people-list__item-description people-list__item-description-5">
            <div class="container-fluid p-lg-3">
              <div class="row">
                <div class="col-lg-3 offset-lg-2 col-md-5 text-md-end">
                  <h4 class="fw-bolder m-0">TNKR Liyanage</h4>
                  <h4 class="fw-bolder m-0">Principal architect</h4>
                  <h6>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Dolor a cum facilis omnis</h6>
                </div>
                <div class="col-lg-7 col-md-7">
                  <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Dolor a cum facilis omnis, nostrum maxime cupiditate incidunt iusto veritatis neque. Doloribus quia, dolore libero officiis nisi ab accusantium unde molestiae!</p>
                </div>
              </div>
            </div>
          </div>
          <div class="people-list__item-description people-list__item-description-6">
            <div class="container-fluid p-lg-3">
              <div class="row">
                <div class="col-lg-3 offset-lg-2 col-md-5 text-md-end">
                  <h4 class="fw-bolder m-0">Jeewanthi Senadheera</h4>
                  <h4 class="fw-bolder m-0">Partner/ Director</h4>
                  <h6>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Dolor a cum facilis omnis</h6>
                </div>
                <div class="col-lg-7 col-md-7">
                  <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Dolor a cum facilis omnis, nostrum maxime cupiditate incidunt iusto veritatis neque. Doloribus quia, dolore libero officiis nisi ab accusantium unde molestiae!</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="show-on-mobile">
        <ul class="sub-header-nav">
          <li class="sub-header-nav__item">
            <a href="people-team.html" class="sub-header-nav__item-link active"><h2 class="fw-bolder m-0">Team</h2></a>
          </li>
          <li class="sub-header-nav__item">
            <a href="people-consultants.html" class="sub-header-nav__item-link"><h2 class="fw-bolder m-0">Consultants</h2></a>
          </li>
        </ul>
        <div class="people-list__mobile-item">
          <img src="./assets/images/people/1.png" alt="people-1">
          <div class="mt-md">
              <h4 class="fw-bolder m-0">TNKR Liyanage</h4>
              <h4 class="fw-bolder m-0">Principal architect</h4>
              <h6>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Dolor a cum facilis omnis</h6>
              <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Dolor a cum facilis omnis, nostrum maxime cupiditate incidunt iusto veritatis neque. Doloribus quia, dolore libero officiis nisi ab accusantium unde molestiae!</p>
          </div>
        </div>
        <div class="people-list__mobile-item-separator"></div>
        <div class="people-list__mobile-item">
          <img src="./assets/images/people/2.png" alt="people-2">
          <div class="mt-md">
              <h4 class="fw-bolder m-0">Joun Doe</h4>
              <h4 class="fw-bolder m-0">Principal architect</h4>
              <h6>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Dolor a cum facilis omnis</h6>
              <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Dolor a cum facilis omnis, nostrum maxime cupiditate incidunt iusto veritatis neque. Doloribus quia, dolore libero officiis nisi ab accusantium unde molestiae!</p>
          </div>
        </div>
        <div class="people-list__mobile-item-separator"></div>
        <div class="people-list__mobile-item">
          <img src="./assets/images/people/3.png" alt="people-3">
          <div class="mt-md">
              <h4 class="fw-bolder m-0">Joun Doe</h4>
              <h4 class="fw-bolder m-0">Principal architect</h4>
              <h6>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Dolor a cum facilis omnis</h6>
              <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Dolor a cum facilis omnis, nostrum maxime cupiditate incidunt iusto veritatis neque. Doloribus quia, dolore libero officiis nisi ab accusantium unde molestiae!</p>
          </div>
        </div>
        <div class="people-list__mobile-item-separator"></div>
        <div class="people-list__mobile-item">
          <img src="./assets/images/people/4.png" alt="people-4">
          <div class="mt-md">
              <h4 class="fw-bolder m-0">Joun Doe</h4>
              <h4 class="fw-bolder m-0">Principal architect</h4>
              <h6>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Dolor a cum facilis omnis</h6>
              <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Dolor a cum facilis omnis, nostrum maxime cupiditate incidunt iusto veritatis neque. Doloribus quia, dolore libero officiis nisi ab accusantium unde molestiae!</p>
          </div>
        </div>
        <div class="people-list__mobile-item-separator"></div>
        <div class="people-list__mobile-item">
          <img src="./assets/images/people/5.png" alt="people-5">
          <div class="mt-md">
              <h4 class="fw-bolder m-0">Joun Doe</h4>
              <h4 class="fw-bolder m-0">Principal architect</h4>
              <h6>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Dolor a cum facilis omnis</h6>
              <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Dolor a cum facilis omnis, nostrum maxime cupiditate incidunt iusto veritatis neque. Doloribus quia, dolore libero officiis nisi ab accusantium unde molestiae!</p>
          </div>
        </div>
      </div>
    </div>
  </main>
</body>
@endsection