@extends('layouts.frontend')
@section('page_title', 'People Consultants | idée CA')
@section('navbar_type', 'navbar-light bg-white')
@section('site_logo', asset('frontend/images/logo-dark.svg'))
@section('content')
<body class="bg-white">
@include('frontend.components.header')
<main>
    <div class="page-content">
        @include('frontend.components.people_menu')
      <div class="people-consultants-area">
        <ul class="people-consultants-area-list">
          <li class="people-consultants-area-list__item">
            <div class="row">
              <div class="col-xxl-3 offset-xxl-2 col-md-3 offset-md-1 text-md-end">
                <h3 class="fw-bolder m-0">Sujeewa Amarasinghe</h3>
                <h3 class="fw-bolder m-0">Service engineer</h3>
                <h6>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Dolor a cum facilis omnis</h6>
              </div>
              <div class="col-xxl-6 col-md-8">
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Dolor a cum facilis omnis, nostrum maxime cupiditate incidunt iusto veritatis neque. Lorem ipsum dolor, sit amet consectetur adipisicing elit. Dolor a cum facilis omnis, nostrum maxime cupiditate incidunt iusto veritatis neque. Doloribus quia, dolore libero officiis nisi ab accusantium unde molestiae!</p>
              </div>
            </div>
          </li>
          <li class="people-consultants-area-list__item">
            <div class="row">
              <div class="col-xxl-3 offset-xxl-2 col-md-3 offset-md-1 text-md-end">
                <h3 class="fw-bolder m-0">Waruna Vithanachchi</h3>
                <h3 class="fw-bolder m-0">Electrical Engineer</h3>
                <h6>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Dolor a cum facilis omnis</h6>
              </div>
              <div class="col-xxl-6 col-md-8">
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Dolor a cum facilis omnis, nostrum maxime cupiditate incidunt iusto veritatis neque. Doloribus quia, Lorem ipsum dolor, sit amet consectetur adipisicing elit. Dolor a cum facilis omnis, nostrum maxime cupiditate incidunt iusto veritatis neque. dolore libero officiis nisi ab accusantium unde molestiae!</p>
              </div>
            </div>
          </li>
          <li class="people-consultants-area-list__item">
            <div class="row">
              <div class="col-xxl-3 offset-xxl-2 col-md-3 offset-md-1 text-md-end">
                <h3 class="fw-bolder m-0">Muditha Dissanayake</h3>
                <h3 class="fw-bolder m-0">Engineer</h3>
                <h6>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Dolor a cum facilis omnis</h6>
              </div>
              <div class="col-xxl-6 col-md-8">
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Dolor a cum facilis omnis, nostrum maxime cupiditate incidunt iusto veritatis neque. Doloribus quia, Lorem ipsum dolor, sit amet consectetur adipisicing elit. Dolor a cum facilis omnis, nostrum maxime cupiditate incidunt iusto veritatis neque. dolore libero officiis nisi ab accusantium unde molestiae!</p>
              </div>
            </div>
          </li>
          <li class="people-consultants-area-list__item">
            <div class="row">
              <div class="col-xxl-3 offset-xxl-2 col-md-3 offset-md-1 text-md-end">
                <h3 class="fw-bolder m-0">Kalana Weerasinghe</h3>
                <h3 class="fw-bolder m-0">Quantity Surveyor</h3>
                <h6>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Dolor a cum facilis omnis</h6>
              </div>
              <div class="col-xxl-6 col-md-8">
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Dolor a cum facilis omnis, nostrum maxime cupiditate incidunt iusto veritatis neque. Doloribus quia, dolore libero officiis nisi ab accusantium unde molestiae!</p>
              </div>
            </div>
          </li>
        </ul>
      </div>         
    </div>
  </main>
@endsection