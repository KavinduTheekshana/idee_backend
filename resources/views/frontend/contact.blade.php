@extends('layouts.frontend')
@section('page_title', 'Contact | idée CA')
@section('navbar_type', 'navbar-light bg-white')
@section('site_logo', asset('frontend/images/logo-dark.svg'))
@section('content')
<body class="bg-white">
@include('frontend.components.header')
<main>
    <div class="page-content">
      <div class="common-content pt-0 pb-0">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-5 offset-md-1">
              <div class="contact-us-list-area">
                <div>
                  <ul class="m-0 p-0 contact-us-list justify-content-center">
                    <li class="contact-us-list__item">
                      <a href="" target="_blank" class="contact-us-list__item-link">
                        <i class="bi bi-facebook"></i>
                      </a>
                    </li>
                    <li class="contact-us-list__item">
                      <a href="" target="_blank" class="contact-us-list__item-link">
                        <i class="bi bi-twitter"></i>
                      </a>
                    </li>
                    <li class="contact-us-list__item">
                      <a href="" target="_blank" class="contact-us-list__item-link">
                        <i class="bi bi-instagram"></i>
                      </a>
                    </li>
                    <li class="contact-us-list__item">
                      <a href="" target="_blank" class="contact-us-list__item-link">
                        <i class="bi bi-pinterest"></i>
                      </a>
                    </li>
                  </ul>
                  <h5 class="mt-4 mb-0 fw-bolder">A8G2,mangala road, Manning town HS</h5>
                  <h5 class="m-0 fw-bolder"><a mailto:></a>Idee@gmail.com</h5>
                  <h5 class="m-0 fw-bolder">0119687563</h5>
                  <h5 class="m-0 fw-bolder">0779794783</h5>
                </div>
              </div>
            </div>
            <div class="col-md-6 px-md-3 px-0">
              <div id="map">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3960.90939756575!2d79.8787407!3d6.9014382!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ae25980dfebe90b%3A0x757e5680c7d5a1e3!2sid%C3%A9e%20Chartered%20Architects!5e0!3m2!1sen!2suk!4v1690710279787!5m2!1sen!2suk" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </main>
</body>
@endsection