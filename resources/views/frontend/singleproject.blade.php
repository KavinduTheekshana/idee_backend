@extends('layouts.frontend')
@section('page_title', 'Projects | idée CA')
@section('navbar_type', 'navbar-light bg-white')
@section('site_logo', asset('frontend/images/logo-white.svg'))
@section('content')

    <body class="bg-white">
        @include('frontend.components.header')
        <main>
            <div class="page-content">
                <div class="common-content-small">
                    <h2 class="fw-bolder">{{ $categoryName }} Projects</h2>
                    <div class="row mt-3">
                        <div class="col-xl-5 col-lg-5 col-md-5 position-relative">
                            <h3 class="fw-bolder">{{ $project->title }}</h3>
                            <h6 class="m-0">Location _ {{ $project->location }}</h6>
                            <h6 class="m-0">Land Extent_{{ $project->land }}/Floor area_{{ $project->floor }}/ Project
                                year_{{ $project->project_year }}/ Completed_{{ $project->completed_year }}</h6>
                            <p class="mt-4 page-content-long-paragraph">{{ strip_tags($project->description) }}
                            </p>


                            <div thumbsSlider="" class="swiper mySwiper thumbsSlider">
                                <div class="swiper-wrapper">
                                    @foreach ($images as $image)
                                    <div class="swiper-slide">
                                        <img src="{{ asset($image->image) }}" />
                                    </div>
                                    @endforeach


                                </div>
                            </div>

                        </div>
                        <div class="col-xl-7 col-lg-7 col-md-7">
                            <div style="--swiper-navigation-color: #fff; --swiper-pagination-color: #fff"
                                class="swiper mySwiper2">
                                <div class="swiper-wrapper main-swiper">
                                    @foreach ($images as $image)
                                    <div class="swiper-slide">
                                        <img src="{{ asset($image->image) }}" />
                                    </div>
                                    @endforeach
                                </div>
                                <div class="swiper-button-next"></div>
                                <div class="swiper-button-prev"></div>
                            </div>

                        </div>
                    </div>
                    <div class="project-horizontal-list-area">

                        <div class="swiper mySwiper2333">
                            <div class="swiper-wrapper justify-center">
                                {{-- <ul> --}}
                                    @foreach($otherProjects as $otherProject)
                                        <li>
                                            <div class="swiper-slide"><a href="{{ url('/project/' . $otherProject->slug) }}"> <img class="other-project-image" src="{{ asset($otherProject->image) }}" /></a></div>

                                        </li>
                                    @endforeach
                                {{-- </ul> --}}

                                <div class="swiper-button-next"></div>
                                <div class="swiper-button-prev"></div>
                            </div>

                          </div>
                    </div>
                </div>
            </div>
        </main>
    </body>
@endsection
@push('scripts')
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script>
        var swiper = new Swiper(".mySwiper", {
            spaceBetween: 10,
            slidesPerView: 4,
            freeMode: true,
            watchSlidesProgress: true,
        });
        var swiper2 = new Swiper(".mySwiper2", {
            spaceBetween: 10,
            navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev",
            },
            thumbs: {
                swiper: swiper,
            },
        });
    </script>

<script>
    var swiper = new Swiper(".mySwiper2333", {
      slidesPerView: 1,
      spaceBetween: 10,
      navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev",
            },
      breakpoints: {
        640: {
          slidesPerView: 2,
          spaceBetween: 20,
        },
        768: {
          slidesPerView: 4,
          spaceBetween: 40,
        },
        1024: {
          slidesPerView: 5,
          spaceBetween: 50,
        },
      },
    });
  </script>
@endpush
