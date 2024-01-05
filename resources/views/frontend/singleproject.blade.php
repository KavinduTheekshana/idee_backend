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
                        <div class="col-xl-5 position-relative">
                            <h3 class="fw-bolder">{{ $project->title }}</h3>
                            <h6 class="m-0">Location _ {{ $project->location }}</h6>
                            <h6 class="m-0">Scale - {{ $project->scale }} / Stage - {{ $project->stage }}</h6>
                            <p class="mt-4 page-content-long-paragraph">{{ strip_tags($project->description) }}
                            </p>


                            <div thumbsSlider="" class="swiper mySwiper thumbsSlider thumbsSliderobject">
                                <div class="swiper-wrapper">
                                    @foreach ($images as $image)
                                        <div class="swiper-slide">
                                            <img src="{{ asset($image->image) }}" />
                                        </div>
                                    @endforeach


                                </div>
                            </div>

                        </div>
                        <div class="col-xl-7">
                            <div class="swiper mySwiper2" style="height: 100%">
                                <div class="swiper-wrapper main-swiper">
                                    @foreach ($images as $image)
                                        <div class="swiper-slide">
                                            <img src="{{ asset($image->image) }}"
                                                style="height: 100% !important; object-fit: cover" class="slider-image"
                                                style="cursor: pointer" />
                                        </div>
                                    @endforeach
                                </div>
                                <div class="swiper-button-next"></div>
                                <div class="swiper-button-prev"></div>

                            </div>

                            <div class="mobile-thumb">
                                {{-- <div thumbsSlider="" class="swiper mySwiper thumbsSlider">
                                    <div class="swiper-wrapper">
                                        @foreach ($images as $image)
                                            <div class="swiper-slide">
                                                <img src="{{ asset($image->image) }}" />
                                            </div>
                                        @endforeach


                                    </div>
                                </div> --}}

                                {{-- <div thumbsSlider="" class="swiper mySwiper3 thumbsSlider2">
                                    <div class="swiper-wrapper">
                                        @foreach ($images as $image)
                                            <div class="swiper-slide">
                                                <img src="{{ asset($image->image) }}" />
                                            </div>
                                        @endforeach


                                    </div>
                                </div> --}}
                            </div>


                        </div>
                    </div>
                    <div class="project-horizontal-list-area">

                        <div class="swiper mySwiper2333">
                            <div class="swiper-wrapper justify-center">
                                {{-- <ul> --}}
                                @foreach ($otherProjects as $otherProject)
                                    <li>
                                        <div class="swiper-slide"><a href="{{ url('/project/' . $otherProject->slug) }}">
                                                {{-- <img class="other-project-image"
                                                    src="{{ asset($otherProject->image) }}" /> --}}



                                                <img src="{{ asset($otherProject->image) }}" class="other-project-image"
                                                    alt="project-8" data-toggle="tooltip" data-bs-placement="bottom"
                                                    title="" data-bs-original-title="{{ $otherProject->title }}"
                                                    aria-label="{{ asset($otherProject->title) }}">
                                            </a></div>
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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/screenfull.js/5.1.0/screenfull.min.js"></script>


    <script>
        var swiper = new Swiper(".mySwiper", {
            spaceBetween: 10,
            slidesPerView: 4,
            freeMode: true,
            watchSlidesProgress: true,
        });

        // var swiper3 = new Swiper(".mySwiper3", {
        //     spaceBetween: 10,
        //     slidesPerView: 4,
        //     freeMode: true,
        //     watchSlidesProgress: true,
        // });

        var swiper2 = new Swiper(".mySwiper2", {
            spaceBetween: 10,
            navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev",
            },
            thumbs: {
                swiper: swiper, // Key-value pair for the second thumb
            },
        });


        // Add click event listener to the whole slider container
        var sliderContainer = document.querySelector('.mySwiper2');
        sliderContainer.addEventListener('click', function(event) {
            // Check if the click is not on navigation buttons
            if (!event.target.classList.contains('swiper-button-next') && !event.target.classList.contains(
                    'swiper-button-prev')) {
                // Toggle full-screen mode using Screenfull
                if (screenfull.isEnabled) {
                    screenfull.toggle(sliderContainer);
                }
            }
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

    <script>
        $(window).resize(function() {
            if ($(window).width() < 1199) {
                // Move thumbsSlider to col-xl-7
                $('.thumbsSliderobject').appendTo('.mobile-thumb').addClass('thumbsSlider2').removeClass('thumbsSlider');
            } else {
                // Move it back to its original position if the window is resized back
                $('.thumbsSliderobject').appendTo('.col-xl-5 .position-relative').addClass('thumbsSlider').removeClass('thumbsSlider2');
            }
        });

        // Trigger the resize function on page load
        $(window).trigger('resize')
    </script>
@endpush
