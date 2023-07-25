@extends('layouts.frontend')
@section('page_title', 'Projects | idée CA')
@section('site_logo', asset('frontend/images/logo-white.svg'))
@section('content')
<body>
@include('frontend.components.header')
<main>
    <div class="page-content">
      <div class="project-page">
          <div class="project-list-area d-none" id="project-list-description">
            <h2 class="fw-bolder">Residential projects</h2>
            <ul class="project-list-area__list">
              <li class="project-list-area__list-item">
                <a href="project-1.html" class="project-list-area__list-item-link">
                  <h4 class="fw-bolder m-0">Proposed Residence for Mr. Sameera Ranasinghe,</h4>
                  <p class="m-0">Location _ No. 119/11, Malambe Road, Kottawa,, Pannipitiya</p>
                  <p>Land Extent_15p/Floor area_3000 Sqft/ Project year_2020/ Completed_2021</p>
                </a>
              </li>
              <li class="project-list-area__list-item">
                <a href="" class="project-list-area__list-item-link">
                  <h4 class="fw-bolder m-0">Mohan House , Colombo 09,</h4>
                  <p class="m-0">Location _ No. 119/11, Malambe Road, Kottawa,, Pannipitiya</p>
                  <p>Land Extent_15p/Floor area_3000 Sqft/ Project year_2020/ Completed_2021</p>
                </a>
              </li>
              <li class="project-list-area__list-item">
                <a href="" class="project-list-area__list-item-link">
                  <h4 class="fw-bolder m-0">Saleem House,</h4>
                  <p class="m-0">Location _ No. 119/11, Malambe</p>
                  <p>Land Extent_15p/Floor area_3000 Sqft/ Project year_2020/ Completed_2021</p>
                </a>
              </li>
              <li class="project-list-area__list-item">
                <a href="" class="project-list-area__list-item-link">
                  <h4 class="fw-bolder m-0">Galpoththa House,</h4>
                  <p class="m-0">Location _ No. 119/11, Malambe</p>
                  <p>area_3000 Sqft/ Project year_2020/ Completed_2021</p>
                </a>
              </li>
              <li class="project-list-area__list-item">
                <a href="" class="project-list-area__list-item-link">
                  <h4 class="fw-bolder m-0">Neelanthi House,</h4>
                  <p class="m-0">Location _ No. 119/11, Malambe</p>
                  <p>Land Extent_15p/Floor area_3000 Sqft/ Project year_2020/ Completed_2021 vhhvj</p>
                </a>
              </li>
              <li class="project-list-area__list-item">
                <a href="" class="project-list-area__list-item-link">
                  <h4 class="fw-bolder m-0">Kandana House,</h4>
                  <p class="m-0">Location _ No. 119/11, Malambe</p>
                  <p>Land Extent_15p/Floor area_3000 Sqft/ Project year_2020/ Completed_2021 vhhvj</p>
                </a>
              </li>
              <li class="project-list-area__list-item">
                <a href="" class="project-list-area__list-item-link">
                  <h4 class="fw-bolder m-0">Kandana House II,</h4>
                  <p class="m-0">Location _ No. 119/11, Malambe</p>
                  <p>Land Extent_15p/Floor area_3000 Sqft/ Project year_2020/ Completed_2021 vhhvj</p>
                </a>
              </li>
              <li class="project-list-area__list-item">
                <a href="" class="project-list-area__list-item-link">
                  <h4 class="fw-bolder m-0">Diyatha Apartments,</h4>
                  <p class="m-0">Location _ No. 119/11, Malambe</p>
                  <p>Land Extent_15p/Floor area_3000 Sqft/ Project year_2020/ Completed_2021 vhhvj</p>
                </a>
              </li>
            </ul>
          </div>
          <div class="projects-area">
            <div class="project-circle-area">
              <div class="hide-on-mobile">
                <table class="table table-borderless">
                  <tbody>
                      <tr>
                        <td class="project-circle">
                          <img src="{{ asset('frontend/images/projects-thumbnails/empty-thumbnail.svg') }}" alt="thumbnail-1">
                        </td>
                        <td class="project-circle">
                          <img src="{{ asset('frontend/images/projects-thumbnails/empty-thumbnail.svg') }}" alt="thumbnail-1">
                        </td>
                        <td class="project-circle">
                          <img src="{{ asset('frontend/images/projects-thumbnails/empty-thumbnail.svg') }}" alt="thumbnail-2">
                        </td>
                        <td class="project-circle">
                          <img src="{{ asset('frontend/images/projects-thumbnails/empty-thumbnail.svg') }}" alt="thumbnail-3">
                        </td>
                        <td class="project-circle">
                          <img src="{{ asset('frontend/images/projects-thumbnails/empty-thumbnail.svg') }}" alt="thumbnail-4">
                        </td>
                        <td class="project-circle">
                          <img src="{{ asset('frontend/images/projects-thumbnails/empty-thumbnail.svg') }}" alt="thumbnail-5">
                        </td>
                        <td class="project-circle">
                          <img src="{{ asset('frontend/images/projects-thumbnails/empty-thumbnail.svg') }}" alt="thumbnail-6">
                        </td>
                        <td class="project-circle">
                          <img src="{{ asset('frontend/images/projects-thumbnails/empty-thumbnail.svg') }}" alt="thumbnail-7">
                        </td>
                        <td class="project-circle">
                          <img src="{{ asset('frontend/images/projects-thumbnails/empty-thumbnail.svg') }}" alt="thumbnail-8">
                        </td>
                        <td class="project-circle">
                          <img src="{{ asset('frontend/images/projects-thumbnails/empty-thumbnail.svg') }}" alt="thumbnail-9">
                        </td>
                        <td class="project-circle">
                          <img src="{{ asset('frontend/images/projects-thumbnails/empty-thumbnail.svg') }}" alt="thumbnail-10">
                        </td>
                        <td class="project-circle">
                          <img src="{{ asset('frontend/images/projects-thumbnails/empty-thumbnail.svg') }}" alt="thumbnail-11">
                        </td>
                        <td class="project-circle">
                          <img src="{{ asset('frontend/images/projects-thumbnails/empty-thumbnail.svg') }}" alt="thumbnail-12">
                        </td>
                        <td class="project-circle">
                          <img src="{{ asset('frontend/images/projects-thumbnails/empty-thumbnail.svg') }}" alt="thumbnail-13">
                        </td>
                        <td class="project-circle">
                          <img src="{{ asset('frontend/images/projects-thumbnails/empty-thumbnail.svg') }}" alt="thumbnail-14">
                        </td>
                        <td class="project-circle">
                          <img src="{{ asset('frontend/images/projects-thumbnails/empty-thumbnail.svg') }}" alt="thumbnail-15">
                        </td>
                        <td class="project-circle">
                          <img src="{{ asset('frontend/images/projects-thumbnails/empty-thumbnail.svg') }}" alt="thumbnail-16">
                        </td>
                      </tr>
    
                      <tr>
                        <td class="project-circle">
                          <img src="{{ asset('frontend/images/projects-thumbnails/empty-thumbnail.svg') }}" alt="thumbnail-1">
                        </td>
                        <td class="project-circle">
                          <img src="{{ asset('frontend/images/projects-thumbnails/empty-thumbnail.svg') }}" alt="thumbnail-1">
                        </td>
                        <td class="project-circle">
                          <img src="{{ asset('frontend/images/projects-thumbnails/empty-thumbnail.svg') }}" alt="thumbnail-2">
                        </td>
                        <td class="project-circle">
                          <img src="{{ asset('frontend/images/projects-thumbnails/empty-thumbnail.svg') }}" alt="thumbnail-3">
                        </td>
                        <td class="project-circle">
                          <img src="{{ asset('frontend/images/projects-thumbnails/empty-thumbnail.svg') }}" alt="thumbnail-4">
                        </td>
                        <td class="project-circle">
                          <img src="{{ asset('frontend/images/projects-thumbnails/empty-thumbnail.svg') }}" alt="thumbnail-5">
                        </td>
                        <td class="project-circle">
                          <img src="{{ asset('frontend/images/projects-thumbnails/empty-thumbnail.svg') }}" alt="thumbnail-6">
                        </td>
                        <td class="project-circle">
                          <img src="{{ asset('frontend/images/projects-thumbnails/empty-thumbnail.svg') }}" alt="thumbnail-7">
                        </td>
                        <td class="project-circle">
                          <img src="{{ asset('frontend/images/projects-thumbnails/empty-thumbnail.svg') }}" alt="thumbnail-8">
                        </td>
                        <td class="project-circle">
                          <img src="{{ asset('frontend/images/projects-thumbnails/empty-thumbnail.svg') }}" alt="thumbnail-9">
                        </td>
                        <td class="project-circle">
                          <img src="{{ asset('frontend/images/projects-thumbnails/empty-thumbnail.svg') }}" alt="thumbnail-10">
                        </td>
                        <td class="project-circle">
                          <img src="{{ asset('frontend/images/projects-thumbnails/empty-thumbnail.svg') }}" alt="thumbnail-11">
                        </td>
                        <td class="project-circle">
                          <img src="{{ asset('frontend/images/projects-thumbnails/empty-thumbnail.svg') }}" alt="thumbnail-12">
                        </td>
                        <td class="project-circle">
                          <img src="{{ asset('frontend/images/projects-thumbnails/empty-thumbnail.svg') }}" alt="thumbnail-13">
                        </td>
                        <td class="project-circle">
                          <img src="{{ asset('frontend/images/projects-thumbnails/empty-thumbnail.svg') }}" alt="thumbnail-14">
                        </td>
                        <td class="project-circle">
                          <img src="{{ asset('frontend/images/projects-thumbnails/empty-thumbnail.svg') }}" alt="thumbnail-15">
                        </td>
                        <td class="project-circle">
                          <img src="{{ asset('frontend/images/projects-thumbnails/empty-thumbnail.svg') }}" alt="thumbnail-16">
                        </td>
                      </tr>
                      
                      <tr>
                        <td class="project-circle">
                          <img src="{{ asset('frontend/images/projects-thumbnails/empty-thumbnail.svg') }}" alt="thumbnail-1">
                        </td>                     
                        <td class="project-circle">
                          <a onclick="selectProject()">
                            <img src="{{ asset('frontend/images/residential-icon.svg') }}" alt="Residential projects" data-toggle="tooltip" data-bs-placement="bottom" title="Residential projects">
                          </a>
                        </td>
                        <td class="project-circle">
                          <a href="">
                            <img src="{{ asset('frontend/images/comercial-icon.svg') }}" alt="Commercial projects" data-toggle="tooltip" data-bs-placement="bottom" title="Commercial projects">
                          </a>
                        </td>
                        <td class="project-circle">
                          <a href="">
                            <img src="{{ asset('frontend/images/hospitality-icon.svg') }}" alt="Hospitality">
                          </a>
                        </td>
                        <td class="project-circle">
                          <a href="">
                            <img src="{{ asset('frontend/images/health-icon.svg') }}" alt="Hospitality">
                          </a>
                        </td>
                        <td class="project-circle">
                          <img src="{{ asset('frontend/images/projects-thumbnails/empty-thumbnail.svg') }}" alt="thumbnail-1">
                        </td>
                        <td class="project-circle">
                          <img src="{{ asset('frontend/images/projects-thumbnails/empty-thumbnail.svg') }}" alt="thumbnail-8">
                        </td>
                        <td class="project-circle">
                          <img src="{{ asset('frontend/images/projects-thumbnails/empty-thumbnail.svg') }}" alt="thumbnail-13">
                        </td>
                        <td class="project-circle">
                          <img src="{{ asset('frontend/images/projects-thumbnails/empty-thumbnail.svg') }}" alt="thumbnail-13">
                        </td>
                        <td class="project-circle">
                          <img src="{{ asset('frontend/images/projects-thumbnails/empty-thumbnail.svg') }}" alt="thumbnail-13">
                        </td>
                        <td class="project-circle">
                          <img src="{{ asset('frontend/images/projects-thumbnails/empty-thumbnail.svg') }}" alt="thumbnail-13">
                        </td>
                        <td class="project-circle">
                          <img src="{{ asset('frontend/images/projects-thumbnails/empty-thumbnail.svg') }}" alt="thumbnail-13">
                        </td>
                        <td class="project-circle">
                          <img src="{{ asset('frontend/images/projects-thumbnails/empty-thumbnail.svg') }}" alt="thumbnail-14">
                        </td>
                        <td class="project-circle">
                          <img src="{{ asset('frontend/images/projects-thumbnails/empty-thumbnail.svg') }}" alt="thumbnail-15">
                        </td>
                        <td class="project-circle">
                          <img src="{{ asset('frontend/images/projects-thumbnails/empty-thumbnail.svg') }}" alt="thumbnail-16">
                        </td>
                      </tr>
    
                      <tr>
                        <td class="project-circle">
                          <img src="{{ asset('frontend/images/projects-thumbnails/empty-thumbnail.svg') }}" alt="thumbnail-1">
                        </td>
                        <td class="project-circle">
                          <a href="">
                            <img src="{{ asset('frontend/images/comercial-icon.svg') }}" alt="Commercial projects" data-toggle="tooltip" data-bs-placement="bottom" title="Commercial projects">
                          </a>
                        </td>
                        <td class="project-circle">
                          <a href="">
                            <img src="{{ asset('frontend/images/hospitality-icon.svg') }}" alt="Hospitality projects" data-toggle="tooltip" data-bs-placement="bottom" title="Hospitality projects">
                          </a>
                        </td>
                        <td class="project-circle">
                          <a href="">
                            <img src="{{ asset('frontend/images/institution-icon.svg') }}" alt="Institution projects" data-toggle="tooltip" data-bs-placement="bottom" title="Institution projects">
                          </a>
                        </td>
                        <td class="project-circle">
                          <a href="">
                            <img src="{{ asset('frontend/images/industrial-icon.svg') }}" alt="Industrial projects" data-toggle="tooltip" data-bs-placement="bottom" title="Industrial projects">
                          </a>
                        </td> 
                        <td class="project-circle">
                          <img src="{{ asset('frontend/images/projects-thumbnails/empty-thumbnail.svg') }}" alt="thumbnail-3">
                        </td>                         
                        <td class="project-circle">
                          <img src="{{ asset('frontend/images/projects-thumbnails/empty-thumbnail.svg') }}" alt="thumbnail-8">
                        </td>
                        <td class="project-circle">
                          <img src="{{ asset('frontend/images/projects-thumbnails/empty-thumbnail.svg') }}" alt="thumbnail-9">
                        </td>
                        <td class="project-circle">
                          <img src="{{ asset('frontend/images/projects-thumbnails/empty-thumbnail.svg') }}" alt="thumbnail-10">
                        </td>
                        <td class="project-circle">
                          <img src="{{ asset('frontend/images/projects-thumbnails/empty-thumbnail.svg') }}" alt="thumbnail-11">
                        </td>
                        <td class="project-circle">
                          <img src="{{ asset('frontend/images/projects-thumbnails/empty-thumbnail.svg') }}" alt="thumbnail-12">
                        </td>
                        <td class="project-circle">
                          <img src="{{ asset('frontend/images/projects-thumbnails/empty-thumbnail.svg') }}" alt="thumbnail-13">
                        </td>
                        <td class="project-circle">
                          <img src="{{ asset('frontend/images/projects-thumbnails/empty-thumbnail.svg') }}" alt="thumbnail-14">
                        </td>
                        <td class="project-circle">
                          <img src="{{ asset('frontend/images/projects-thumbnails/empty-thumbnail.svg') }}" alt="thumbnail-15">
                        </td>
                        <td class="project-circle">
                          <img src="{{ asset('frontend/images/projects-thumbnails/empty-thumbnail.svg') }}" alt="thumbnail-16">
                        </td>
                      </tr>
    
                      <tr>
                        <td class="project-circle">
                          <img src="{{ asset('frontend/images/projects-thumbnails/empty-thumbnail.svg') }}" alt="thumbnail-1">
                        </td>
                        <td class="project-circle">
                          <img src="{{ asset('frontend/images/projects-thumbnails/empty-thumbnail.svg') }}" alt="thumbnail-3">
                        </td>
                        <td class="project-circle">
                          <img src="{{ asset('frontend/images/projects-thumbnails/empty-thumbnail.svg') }}" alt="thumbnail-4">
                        </td>
                        <td class="project-circle">
                          <img src="{{ asset('frontend/images/projects-thumbnails/empty-thumbnail.svg') }}" alt="thumbnail-5">
                        </td>
                        <td class="project-circle">
                          <img src="{{ asset('frontend/images/projects-thumbnails/empty-thumbnail.svg') }}" alt="thumbnail-6">
                        </td>
                        <td class="project-circle">
                          <img src="{{ asset('frontend/images/projects-thumbnails/empty-thumbnail.svg') }}" alt="thumbnail-7">
                        </td>
                        <td class="project-circle">
                          <img src="{{ asset('frontend/images/projects-thumbnails/empty-thumbnail.svg') }}" alt="thumbnail-8">
                        </td>
                        <td class="project-circle">
                          <img src="{{ asset('frontend/images/projects-thumbnails/empty-thumbnail.svg') }}" alt="thumbnail-9">
                        </td>
                        <td class="project-circle">
                          <img src="{{ asset('frontend/images/projects-thumbnails/empty-thumbnail.svg') }}" alt="thumbnail-10">
                        </td>
                        <td class="project-circle">
                          <img src="{{ asset('frontend/images/projects-thumbnails/empty-thumbnail.svg') }}" alt="thumbnail-11">
                        </td>
                        <td class="project-circle">
                          <img src="{{ asset('frontend/images/projects-thumbnails/empty-thumbnail.svg') }}" alt="thumbnail-12">
                        </td>
                        <td class="project-circle">
                          <img src="{{ asset('frontend/images/projects-thumbnails/empty-thumbnail.svg') }}" alt="thumbnail-13">
                        </td>
                        <td class="project-circle">
                          <img src="{{ asset('frontend/images/projects-thumbnails/empty-thumbnail.svg') }}" alt="thumbnail-14">
                        </td>
                        <td class="project-circle">
                          <img src="{{ asset('frontend/images/projects-thumbnails/empty-thumbnail.svg') }}" alt="thumbnail-15">
                        </td>
                        <td class="project-circle">
                          <img src="{{ asset('frontend/images/projects-thumbnails/empty-thumbnail.svg') }}" alt="thumbnail-16">
                        </td>
                      </tr>
    
                      <tr>
                        <td class="project-circle">
                          <img src="{{ asset('frontend/images/projects-thumbnails/empty-thumbnail.svg') }}" alt="thumbnail-1">
                        </td>
                        <td class="project-circle">
                          <img src="{{ asset('frontend/images/projects-thumbnails/empty-thumbnail.svg') }}" alt="thumbnail-3">
                        </td>
                        <td class="project-circle">
                          <img src="{{ asset('frontend/images/projects-thumbnails/empty-thumbnail.svg') }}" alt="thumbnail-4">
                        </td>
                        <td class="project-circle">
                          <img src="{{ asset('frontend/images/projects-thumbnails/empty-thumbnail.svg') }}" alt="thumbnail-5">
                        </td>
                        <td class="project-circle">
                          <img src="{{ asset('frontend/images/projects-thumbnails/empty-thumbnail.svg') }}" alt="thumbnail-6">
                        </td>
                        <td class="project-circle">
                          <img src="{{ asset('frontend/images/projects-thumbnails/empty-thumbnail.svg') }}" alt="thumbnail-7">
                        </td>
                        <td class="project-circle">
                          <img src="{{ asset('frontend/images/projects-thumbnails/empty-thumbnail.svg') }}" alt="thumbnail-8">
                        </td>
                        <td class="project-circle">
                          <img src="{{ asset('frontend/images/projects-thumbnails/empty-thumbnail.svg') }}" alt="thumbnail-9">
                        </td>
                        <td class="project-circle">
                          <img src="{{ asset('frontend/images/projects-thumbnails/empty-thumbnail.svg') }}" alt="thumbnail-10">
                        </td>
                        <td class="project-circle">
                          <img src="{{ asset('frontend/images/projects-thumbnails/empty-thumbnail.svg') }}" alt="thumbnail-11">
                        </td>
                        <td class="project-circle">
                          <img src="{{ asset('frontend/images/projects-thumbnails/empty-thumbnail.svg') }}" alt="thumbnail-12">
                        </td>
                        <td class="project-circle">
                          <img src="{{ asset('frontend/images/projects-thumbnails/empty-thumbnail.svg') }}" alt="thumbnail-13">
                        </td>
                        <td class="project-circle">
                          <img src="{{ asset('frontend/images/projects-thumbnails/empty-thumbnail.svg') }}" alt="thumbnail-14">
                        </td>
                        <td class="project-circle">
                          <img src="{{ asset('frontend/images/projects-thumbnails/empty-thumbnail.svg') }}" alt="thumbnail-15">
                        </td>
                        <td class="project-circle">
                          <img src="{{ asset('frontend/images/projects-thumbnails/empty-thumbnail.svg') }}" alt="thumbnail-16">
                        </td>
                      </tr>
    
                      <tr>
                        <td class="project-circle">
                          <img src="{{ asset('frontend/images/projects-thumbnails/empty-thumbnail.svg') }}" alt="thumbnail-1">
                        </td>
                        <td class="project-circle">
                          <img src="{{ asset('frontend/images/projects-thumbnails/empty-thumbnail.svg') }}" alt="thumbnail-3">
                        </td>
                        <td class="project-circle">
                          <img src="{{ asset('frontend/images/projects-thumbnails/empty-thumbnail.svg') }}" alt="thumbnail-4">
                        </td>
                        <td class="project-circle">
                          <img src="{{ asset('frontend/images/projects-thumbnails/empty-thumbnail.svg') }}" alt="thumbnail-5">
                        </td>
                        <td class="project-circle">
                          <img src="{{ asset('frontend/images/projects-thumbnails/empty-thumbnail.svg') }}" alt="thumbnail-6">
                        </td>
                        <td class="project-circle">
                          <img src="{{ asset('frontend/images/projects-thumbnails/empty-thumbnail.svg') }}" alt="thumbnail-7">
                        </td>
                        <td class="project-circle">
                          <img src="{{ asset('frontend/images/projects-thumbnails/empty-thumbnail.svg') }}" alt="thumbnail-8">
                        </td>
                        <td class="project-circle">
                          <img src="{{ asset('frontend/images/projects-thumbnails/empty-thumbnail.svg') }}" alt="thumbnail-9">
                        </td>
                        <td class="project-circle">
                          <img src="{{ asset('frontend/images/projects-thumbnails/empty-thumbnail.svg') }}" alt="thumbnail-10">
                        </td>
                        <td class="project-circle">
                          <img src="{{ asset('frontend/images/projects-thumbnails/empty-thumbnail.svg') }}" alt="thumbnail-11">
                        </td>
                        <td class="project-circle">
                          <img src="{{ asset('frontend/images/projects-thumbnails/empty-thumbnail.svg') }}" alt="thumbnail-12">
                        </td>
                        <td class="project-circle">
                          <img src="{{ asset('frontend/images/projects-thumbnails/empty-thumbnail.svg') }}" alt="thumbnail-13">
                        </td>
                        <td class="project-circle">
                          <img src="{{ asset('frontend/images/projects-thumbnails/empty-thumbnail.svg') }}" alt="thumbnail-14">
                        </td>
                        <td class="project-circle">
                          <img src="{{ asset('frontend/images/projects-thumbnails/empty-thumbnail.svg') }}" alt="thumbnail-15">
                        </td>
                        <td class="project-circle">
                          <img src="{{ asset('frontend/images/projects-thumbnails/empty-thumbnail.svg') }}" alt="thumbnail-16">
                        </td>
                      </tr>
    
                      <tr>
                        <td class="project-circle">
                          <img src="{{ asset('frontend/images/projects-thumbnails/empty-thumbnail.svg') }}" alt="thumbnail-1">
                        </td>
                        <td class="project-circle">
                          <img src="{{ asset('frontend/images/projects-thumbnails/empty-thumbnail.svg') }}" alt="thumbnail-3">
                        </td>
                        <td class="project-circle">
                          <img src="{{ asset('frontend/images/projects-thumbnails/empty-thumbnail.svg') }}" alt="thumbnail-4">
                        </td>
                        <td class="project-circle">
                          <img src="{{ asset('frontend/images/projects-thumbnails/empty-thumbnail.svg') }}" alt="thumbnail-5">
                        </td>
                        <td class="project-circle">
                          <img src="{{ asset('frontend/images/projects-thumbnails/empty-thumbnail.svg') }}" alt="thumbnail-6">
                        </td>
                        <td class="project-circle">
                          <img src="{{ asset('frontend/images/projects-thumbnails/empty-thumbnail.svg') }}" alt="thumbnail-7">
                        </td>
                        <td class="project-circle">
                          <img src="{{ asset('frontend/images/projects-thumbnails/empty-thumbnail.svg') }}" alt="thumbnail-8">
                        </td>
                        <td class="project-circle">
                          <img src="{{ asset('frontend/images/projects-thumbnails/empty-thumbnail.svg') }}" alt="thumbnail-9">
                        </td>
                        <td class="project-circle">
                          <img src="{{ asset('frontend/images/projects-thumbnails/empty-thumbnail.svg') }}" alt="thumbnail-10">
                        </td>
                        <td class="project-circle">
                          <img src="{{ asset('frontend/images/projects-thumbnails/empty-thumbnail.svg') }}" alt="thumbnail-11">
                        </td>
                        <td class="project-circle">
                          <img src="{{ asset('frontend/images/projects-thumbnails/empty-thumbnail.svg') }}" alt="thumbnail-12">
                        </td>
                        <td class="project-circle">
                          <img src="{{ asset('frontend/images/projects-thumbnails/empty-thumbnail.svg') }}" alt="thumbnail-13">
                        </td>
                        <td class="project-circle">
                          <img src="{{ asset('frontend/images/projects-thumbnails/empty-thumbnail.svg') }}" alt="thumbnail-14">
                        </td>
                        <td class="project-circle">
                          <img src="{{ asset('frontend/images/projects-thumbnails/empty-thumbnail.svg') }}" alt="thumbnail-15">
                        </td>
                        <td class="project-circle">
                          <img src="{{ asset('frontend/images/projects-thumbnails/empty-thumbnail.svg') }}" alt="thumbnail-16">
                        </td>
                      </tr>

                      <tr>
                        <td class="project-circle">
                          <img src="{{ asset('frontend/images/projects-thumbnails/empty-thumbnail.svg') }}" alt="thumbnail-1">
                        </td>
                        <td class="project-circle">
                          <img src="{{ asset('frontend/images/projects-thumbnails/empty-thumbnail.svg') }}" alt="thumbnail-3">
                        </td>
                        <td class="project-circle">
                          <img src="{{ asset('frontend/images/projects-thumbnails/empty-thumbnail.svg') }}" alt="thumbnail-4">
                        </td>
                        <td class="project-circle">
                          <img src="{{ asset('frontend/images/projects-thumbnails/empty-thumbnail.svg') }}" alt="thumbnail-5">
                        </td>
                        <td class="project-circle">
                          <img src="{{ asset('frontend/images/projects-thumbnails/empty-thumbnail.svg') }}" alt="thumbnail-6">
                        </td>
                        <td class="project-circle">
                          <img src="{{ asset('frontend/images/projects-thumbnails/empty-thumbnail.svg') }}" alt="thumbnail-7">
                        </td>
                        <td class="project-circle">
                          <img src="{{ asset('frontend/images/projects-thumbnails/empty-thumbnail.svg') }}" alt="thumbnail-8">
                        </td>
                        <td class="project-circle">
                          <img src="{{ asset('frontend/images/projects-thumbnails/empty-thumbnail.svg') }}" alt="thumbnail-9">
                        </td>
                        <td class="project-circle">
                          <img src="{{ asset('frontend/images/projects-thumbnails/empty-thumbnail.svg') }}" alt="thumbnail-10">
                        </td>
                        <td class="project-circle">
                          <img src="{{ asset('frontend/images/projects-thumbnails/empty-thumbnail.svg') }}" alt="thumbnail-11">
                        </td>
                        <td class="project-circle">
                          <img src="{{ asset('frontend/images/projects-thumbnails/empty-thumbnail.svg') }}" alt="thumbnail-12">
                        </td>
                        <td class="project-circle">
                          <img src="{{ asset('frontend/images/projects-thumbnails/empty-thumbnail.svg') }}" alt="thumbnail-13">
                        </td>
                        <td class="project-circle">
                          <img src="{{ asset('frontend/images/projects-thumbnails/empty-thumbnail.svg') }}" alt="thumbnail-14">
                        </td>
                        <td class="project-circle">
                          <img src="{{ asset('frontend/images/projects-thumbnails/empty-thumbnail.svg') }}" alt="thumbnail-15">
                        </td>
                        <td class="project-circle">
                          <img src="{{ asset('frontend/images/projects-thumbnails/empty-thumbnail.svg') }}" alt="thumbnail-16">
                        </td>
                      </tr>

                      <tr>
                        <td class="project-circle">
                          <img src="{{ asset('frontend/images/projects-thumbnails/empty-thumbnail.svg') }}" alt="thumbnail-1">
                        </td>
                        <td class="project-circle">
                          <img src="{{ asset('frontend/images/projects-thumbnails/empty-thumbnail.svg') }}" alt="thumbnail-3">
                        </td>
                        <td class="project-circle">
                          <img src="{{ asset('frontend/images/projects-thumbnails/empty-thumbnail.svg') }}" alt="thumbnail-4">
                        </td>
                        <td class="project-circle">
                          <img src="{{ asset('frontend/images/projects-thumbnails/empty-thumbnail.svg') }}" alt="thumbnail-5">
                        </td>
                        <td class="project-circle">
                          <img src="{{ asset('frontend/images/projects-thumbnails/empty-thumbnail.svg') }}" alt="thumbnail-6">
                        </td>
                        <td class="project-circle">
                          <img src="{{ asset('frontend/images/projects-thumbnails/empty-thumbnail.svg') }}" alt="thumbnail-7">
                        </td>
                        <td class="project-circle">
                          <img src="{{ asset('frontend/images/projects-thumbnails/empty-thumbnail.svg') }}" alt="thumbnail-8">
                        </td>
                        <td class="project-circle">
                          <img src="{{ asset('frontend/images/projects-thumbnails/empty-thumbnail.svg') }}" alt="thumbnail-9">
                        </td>
                        <td class="project-circle">
                          <img src="{{ asset('frontend/images/projects-thumbnails/empty-thumbnail.svg') }}" alt="thumbnail-10">
                        </td>
                        <td class="project-circle">
                          <img src="{{ asset('frontend/images/projects-thumbnails/empty-thumbnail.svg') }}" alt="thumbnail-11">
                        </td>
                        <td class="project-circle">
                          <img src="{{ asset('frontend/images/projects-thumbnails/empty-thumbnail.svg') }}" alt="thumbnail-12">
                        </td>
                        <td class="project-circle">
                          <img src="{{ asset('frontend/images/projects-thumbnails/empty-thumbnail.svg') }}" alt="thumbnail-13">
                        </td>
                        <td class="project-circle">
                          <img src="{{ asset('frontend/images/projects-thumbnails/empty-thumbnail.svg') }}" alt="thumbnail-14">
                        </td>
                        <td class="project-circle">
                          <img src="{{ asset('frontend/images/projects-thumbnails/empty-thumbnail.svg') }}" alt="thumbnail-15">
                        </td>
                        <td class="project-circle">
                          <img src="{{ asset('frontend/images/projects-thumbnails/empty-thumbnail.svg') }}" alt="thumbnail-16">
                        </td>
                      </tr>

                      <tr>
                        <td class="project-circle">
                          <img src="{{ asset('frontend/images/projects-thumbnails/empty-thumbnail.svg') }}" alt="thumbnail-1">
                        </td>
                        <td class="project-circle">
                          <img src="{{ asset('frontend/images/projects-thumbnails/empty-thumbnail.svg') }}" alt="thumbnail-3">
                        </td>
                        <td class="project-circle">
                          <img src="{{ asset('frontend/images/projects-thumbnails/empty-thumbnail.svg') }}" alt="thumbnail-4">
                        </td>
                        <td class="project-circle">
                          <img src="{{ asset('frontend/images/projects-thumbnails/empty-thumbnail.svg') }}" alt="thumbnail-5">
                        </td>
                        <td class="project-circle">
                          <img src="{{ asset('frontend/images/projects-thumbnails/empty-thumbnail.svg') }}" alt="thumbnail-6">
                        </td>
                        <td class="project-circle">
                          <img src="{{ asset('frontend/images/projects-thumbnails/empty-thumbnail.svg') }}" alt="thumbnail-7">
                        </td>
                        <td class="project-circle">
                          <img src="{{ asset('frontend/images/projects-thumbnails/empty-thumbnail.svg') }}" alt="thumbnail-8">
                        </td>
                        <td class="project-circle">
                          <img src="{{ asset('frontend/images/projects-thumbnails/empty-thumbnail.svg') }}" alt="thumbnail-9">
                        </td>
                        <td class="project-circle">
                          <img src="{{ asset('frontend/images/projects-thumbnails/empty-thumbnail.svg') }}" alt="thumbnail-10">
                        </td>
                        <td class="project-circle">
                          <img src="{{ asset('frontend/images/projects-thumbnails/empty-thumbnail.svg') }}" alt="thumbnail-11">
                        </td>
                        <td class="project-circle">
                          <img src="{{ asset('frontend/images/projects-thumbnails/empty-thumbnail.svg') }}" alt="thumbnail-12">
                        </td>
                        <td class="project-circle">
                          <img src="{{ asset('frontend/images/projects-thumbnails/empty-thumbnail.svg') }}" alt="thumbnail-13">
                        </td>
                        <td class="project-circle">
                          <img src="{{ asset('frontend/images/projects-thumbnails/empty-thumbnail.svg') }}" alt="thumbnail-14">
                        </td>
                        <td class="project-circle">
                          <img src="{{ asset('frontend/images/projects-thumbnails/empty-thumbnail.svg') }}" alt="thumbnail-15">
                        </td>
                        <td class="project-circle">
                          <img src="{{ asset('frontend/images/projects-thumbnails/empty-thumbnail.svg') }}" alt="thumbnail-16">
                        </td>
                      </tr>

                      <tr>
                        <td class="project-circle">
                          <img src="{{ asset('frontend/images/projects-thumbnails/empty-thumbnail.svg') }}" alt="thumbnail-1">
                        </td>
                        <td class="project-circle">
                          <img src="{{ asset('frontend/images/projects-thumbnails/empty-thumbnail.svg') }}" alt="thumbnail-3">
                        </td>
                        <td class="project-circle">
                          <img src="{{ asset('frontend/images/projects-thumbnails/empty-thumbnail.svg') }}" alt="thumbnail-4">
                        </td>
                        <td class="project-circle">
                          <img src="{{ asset('frontend/images/projects-thumbnails/empty-thumbnail.svg') }}" alt="thumbnail-5">
                        </td>
                        <td class="project-circle">
                          <img src="{{ asset('frontend/images/projects-thumbnails/empty-thumbnail.svg') }}" alt="thumbnail-6">
                        </td>
                        <td class="project-circle">
                          <img src="{{ asset('frontend/images/projects-thumbnails/empty-thumbnail.svg') }}" alt="thumbnail-7">
                        </td>
                        <td class="project-circle">
                          <img src="{{ asset('frontend/images/projects-thumbnails/empty-thumbnail.svg') }}" alt="thumbnail-8">
                        </td>
                        <td class="project-circle">
                          <img src="{{ asset('frontend/images/projects-thumbnails/empty-thumbnail.svg') }}" alt="thumbnail-9">
                        </td>
                        <td class="project-circle">
                          <img src="{{ asset('frontend/images/projects-thumbnails/empty-thumbnail.svg') }}" alt="thumbnail-10">
                        </td>
                        <td class="project-circle">
                          <img src="{{ asset('frontend/images/projects-thumbnails/empty-thumbnail.svg') }}" alt="thumbnail-11">
                        </td>
                        <td class="project-circle">
                          <img src="{{ asset('frontend/images/projects-thumbnails/empty-thumbnail.svg') }}" alt="thumbnail-12">
                        </td>
                        <td class="project-circle">
                          <img src="{{ asset('frontend/images/projects-thumbnails/empty-thumbnail.svg') }}" alt="thumbnail-13">
                        </td>
                        <td class="project-circle">
                          <img src="{{ asset('frontend/images/projects-thumbnails/empty-thumbnail.svg') }}" alt="thumbnail-14">
                        </td>
                        <td class="project-circle">
                          <img src="{{ asset('frontend/images/projects-thumbnails/empty-thumbnail.svg') }}" alt="thumbnail-15">
                        </td>
                        <td class="project-circle">
                          <img src="{{ asset('frontend/images/projects-thumbnails/empty-thumbnail.svg') }}" alt="thumbnail-16">
                        </td>
                      </tr>

                      <tr>
                        <td class="project-circle">
                          <img src="{{ asset('frontend/images/projects-thumbnails/empty-thumbnail.svg') }}" alt="thumbnail-1">
                        </td>
                        <td class="project-circle">
                          <img src="{{ asset('frontend/images/projects-thumbnails/empty-thumbnail.svg') }}" alt="thumbnail-3">
                        </td>
                        <td class="project-circle">
                          <img src="{{ asset('frontend/images/projects-thumbnails/empty-thumbnail.svg') }}" alt="thumbnail-4">
                        </td>
                        <td class="project-circle">
                          <img src="{{ asset('frontend/images/projects-thumbnails/empty-thumbnail.svg') }}" alt="thumbnail-5">
                        </td>
                        <td class="project-circle">
                          <img src="{{ asset('frontend/images/projects-thumbnails/empty-thumbnail.svg') }}" alt="thumbnail-6">
                        </td>
                        <td class="project-circle">
                          <img src="{{ asset('frontend/images/projects-thumbnails/empty-thumbnail.svg') }}" alt="thumbnail-7">
                        </td>
                        <td class="project-circle">
                          <img src="{{ asset('frontend/images/projects-thumbnails/empty-thumbnail.svg') }}" alt="thumbnail-8">
                        </td>
                        <td class="project-circle">
                          <img src="{{ asset('frontend/images/projects-thumbnails/empty-thumbnail.svg') }}" alt="thumbnail-9">
                        </td>
                        <td class="project-circle">
                          <img src="{{ asset('frontend/images/projects-thumbnails/empty-thumbnail.svg') }}" alt="thumbnail-10">
                        </td>
                        <td class="project-circle">
                          <img src="{{ asset('frontend/images/projects-thumbnails/empty-thumbnail.svg') }}" alt="thumbnail-11">
                        </td>
                        <td class="project-circle">
                          <img src="{{ asset('frontend/images/projects-thumbnails/empty-thumbnail.svg') }}" alt="thumbnail-12">
                        </td>
                        <td class="project-circle">
                          <img src="{{ asset('frontend/images/projects-thumbnails/empty-thumbnail.svg') }}" alt="thumbnail-13">
                        </td>
                        <td class="project-circle">
                          <img src="{{ asset('frontend/images/projects-thumbnails/empty-thumbnail.svg') }}" alt="thumbnail-14">
                        </td>
                        <td class="project-circle">
                          <img src="{{ asset('frontend/images/projects-thumbnails/empty-thumbnail.svg') }}" alt="thumbnail-15">
                        </td>
                        <td class="project-circle">
                          <img src="{{ asset('frontend/images/projects-thumbnails/empty-thumbnail.svg') }}" alt="thumbnail-16">
                        </td>
                      </tr>
    
                    </tbody>
                </table>
              </div>

              <div class="show-on-mobile">
                <table class="table table-borderless">
                  <tbody>
                      <tr>
                        <td class="project-circle">
                          <img src="{{ asset('frontend/images/projects-thumbnails/empty-thumbnail.svg') }}" alt="thumbnail-1">
                        </td>
                        <td class="project-circle">
                          <img src="{{ asset('frontend/images/projects-thumbnails/empty-thumbnail.svg') }}" alt="thumbnail-1">
                        </td>
                        <td class="project-circle">
                          <img src="{{ asset('frontend/images/projects-thumbnails/empty-thumbnail.svg') }}" alt="thumbnail-2">
                        </td>
                        <td class="project-circle">
                          <img src="{{ asset('frontend/images/projects-thumbnails/empty-thumbnail.svg') }}" alt="thumbnail-3">
                        </td>
                        <td class="project-circle">
                          <img src="{{ asset('frontend/images/projects-thumbnails/empty-thumbnail.svg') }}" alt="thumbnail-4">
                        </td>
                        <td class="project-circle">
                          <img src="{{ asset('frontend/images/projects-thumbnails/empty-thumbnail.svg') }}" alt="thumbnail-5">
                        </td>
                        <td class="project-circle">
                          <img src="{{ asset('frontend/images/projects-thumbnails/empty-thumbnail.svg') }}" alt="thumbnail-6">
                        </td>
                        <td class="project-circle">
                          <img src="{{ asset('frontend/images/projects-thumbnails/empty-thumbnail.svg') }}" alt="thumbnail-7">
                        </td>
                        <td class="project-circle">
                          <img src="{{ asset('frontend/images/projects-thumbnails/empty-thumbnail.svg') }}" alt="thumbnail-8">
                        </td>
                        <td class="project-circle">
                          <img src="{{ asset('frontend/images/projects-thumbnails/empty-thumbnail.svg') }}" alt="thumbnail-9">
                        </td>
                        <td class="project-circle">
                          <img src="{{ asset('frontend/images/projects-thumbnails/empty-thumbnail.svg') }}" alt="thumbnail-10">
                        </td>
                        <td class="project-circle">
                          <img src="{{ asset('frontend/images/projects-thumbnails/empty-thumbnail.svg') }}" alt="thumbnail-11">
                        </td>
                        <td class="project-circle">
                          <img src="{{ asset('frontend/images/projects-thumbnails/empty-thumbnail.svg') }}" alt="thumbnail-12">
                        </td>
                        <td class="project-circle">
                          <img src="{{ asset('frontend/images/projects-thumbnails/empty-thumbnail.svg') }}" alt="thumbnail-13">
                        </td>
                        <td class="project-circle">
                          <img src="{{ asset('frontend/images/projects-thumbnails/empty-thumbnail.svg') }}" alt="thumbnail-14">
                        </td>
                        <td class="project-circle">
                          <img src="{{ asset('frontend/images/projects-thumbnails/empty-thumbnail.svg') }}" alt="thumbnail-15">
                        </td>
                        <td class="project-circle">
                          <img src="{{ asset('frontend/images/projects-thumbnails/empty-thumbnail.svg') }}" alt="thumbnail-16">
                        </td>
                      </tr>
    
                      <tr>
                        <td class="project-circle">
                          <img src="{{ asset('frontend/images/projects-thumbnails/empty-thumbnail.svg') }}" alt="thumbnail-1">
                        </td>
                        <td class="project-circle">
                          <img src="{{ asset('frontend/images/projects-thumbnails/empty-thumbnail.svg') }}" alt="thumbnail-1">
                        </td>
                        <td class="project-circle">
                          <img src="{{ asset('frontend/images/projects-thumbnails/empty-thumbnail.svg') }}" alt="thumbnail-2">
                        </td>
                        <td class="project-circle">
                          <img src="{{ asset('frontend/images/projects-thumbnails/empty-thumbnail.svg') }}" alt="thumbnail-3">
                        </td>
                        <td class="project-circle">
                          <img src="{{ asset('frontend/images/projects-thumbnails/empty-thumbnail.svg') }}" alt="thumbnail-4">
                        </td>
                        <td class="project-circle">
                          <img src="{{ asset('frontend/images/projects-thumbnails/empty-thumbnail.svg') }}" alt="thumbnail-5">
                        </td>
                        <td class="project-circle">
                          <img src="{{ asset('frontend/images/projects-thumbnails/empty-thumbnail.svg') }}" alt="thumbnail-6">
                        </td>
                        <td class="project-circle">
                          <img src="{{ asset('frontend/images/projects-thumbnails/empty-thumbnail.svg') }}" alt="thumbnail-7">
                        </td>
                        <td class="project-circle">
                          <img src="{{ asset('frontend/images/projects-thumbnails/empty-thumbnail.svg') }}" alt="thumbnail-8">
                        </td>
                        <td class="project-circle">
                          <img src="{{ asset('frontend/images/projects-thumbnails/empty-thumbnail.svg') }}" alt="thumbnail-9">
                        </td>
                        <td class="project-circle">
                          <img src="{{ asset('frontend/images/projects-thumbnails/empty-thumbnail.svg') }}" alt="thumbnail-10">
                        </td>
                        <td class="project-circle">
                          <img src="{{ asset('frontend/images/projects-thumbnails/empty-thumbnail.svg') }}" alt="thumbnail-11">
                        </td>
                        <td class="project-circle">
                          <img src="{{ asset('frontend/images/projects-thumbnails/empty-thumbnail.svg') }}" alt="thumbnail-12">
                        </td>
                        <td class="project-circle">
                          <img src="{{ asset('frontend/images/projects-thumbnails/empty-thumbnail.svg') }}" alt="thumbnail-13">
                        </td>
                        <td class="project-circle">
                          <img src="{{ asset('frontend/images/projects-thumbnails/empty-thumbnail.svg') }}" alt="thumbnail-14">
                        </td>
                        <td class="project-circle">
                          <img src="{{ asset('frontend/images/projects-thumbnails/empty-thumbnail.svg') }}" alt="thumbnail-15">
                        </td>
                        <td class="project-circle">
                          <img src="{{ asset('frontend/images/projects-thumbnails/empty-thumbnail.svg') }}" alt="thumbnail-16">
                        </td>
                      </tr>
                      
                      <tr>
                        <td class="project-circle">
                          <img src="{{ asset('frontend/images/projects-thumbnails/empty-thumbnail.svg') }}" alt="thumbnail-1">
                        </td>
                        <td class="project-circle">
                          <img src="{{ asset('frontend/images/projects-thumbnails/empty-thumbnail.svg') }}" alt="thumbnail-1">
                        </td>
                        <td class="project-circle">
                          <a href="projects-list.html">
                            <img src="{{ asset('frontend/images/residential-icon.svg') }}" alt="Residential projects" data-toggle="tooltip" data-bs-placement="bottom" title="Residential projects">
                          </a>
                        </td>
                        <td class="project-circle">
                          <a href="projects-list.html">
                            <img src="{{ asset('frontend/images/comercial-icon.svg') }}" alt="Commercial projects" data-toggle="tooltip" data-bs-placement="bottom" title="Commercial projects">
                          </a>
                        </td>
                        <td class="project-circle">
                          <a href="">
                            <img src="{{ asset('frontend/images/hospitality-icon.svg') }}" alt="Hospitality">
                          </a>
                        </td>
                        <td class="project-circle">
                          <a href="">
                            <img src="{{ asset('frontend/images/hospitality-icon.svg') }}" alt="Hospitality">
                          </a>
                        </td>
                        <td class="project-circle">
                          <img src="{{ asset('frontend/images/projects-thumbnails/empty-thumbnail.svg') }}" alt="thumbnail-8">
                        </td>
                        <td class="project-circle">
                          <img src="{{ asset('frontend/images/projects-thumbnails/empty-thumbnail.svg') }}" alt="thumbnail-13">
                        </td>
                        <td class="project-circle">
                          <img src="{{ asset('frontend/images/projects-thumbnails/empty-thumbnail.svg') }}" alt="thumbnail-13">
                        </td>
                        <td class="project-circle">
                          <img src="{{ asset('frontend/images/projects-thumbnails/empty-thumbnail.svg') }}" alt="thumbnail-13">
                        </td>
                        <td class="project-circle">
                          <img src="{{ asset('frontend/images/projects-thumbnails/empty-thumbnail.svg') }}" alt="thumbnail-13">
                        </td>
                        <td class="project-circle">
                          <img src="{{ asset('frontend/images/projects-thumbnails/empty-thumbnail.svg') }}" alt="thumbnail-13">
                        </td>
                        <td class="project-circle">
                          <img src="{{ asset('frontend/images/projects-thumbnails/empty-thumbnail.svg') }}" alt="thumbnail-14">
                        </td>
                        <td class="project-circle">
                          <img src="{{ asset('frontend/images/projects-thumbnails/empty-thumbnail.svg') }}" alt="thumbnail-15">
                        </td>
                        <td class="project-circle">
                          <img src="{{ asset('frontend/images/projects-thumbnails/empty-thumbnail.svg') }}" alt="thumbnail-16">
                        </td>
                      </tr>
    
                      <tr>
                        <td class="project-circle">
                          <img src="{{ asset('frontend/images/projects-thumbnails/empty-thumbnail.svg') }}" alt="thumbnail-1">
                        </td>
                        <td class="project-circle">
                          <img src="{{ asset('frontend/images/projects-thumbnails/empty-thumbnail.svg') }}" alt="thumbnail-3">
                        </td>
                        <td class="project-circle">
                          <a href="">
                            <img src="{{ asset('frontend/images/comercial-icon.svg') }}" alt="Commercial projects" data-toggle="tooltip" data-bs-placement="bottom" title="Commercial projects">
                          </a>
                        </td>
                        <td class="project-circle">
                          <a href="">
                            <img src="{{ asset('frontend/images/hospitality-icon.svg') }}" alt="Hospitality projects" data-toggle="tooltip" data-bs-placement="bottom" title="Hospitality projects">
                          </a>
                        </td>
                        <td class="project-circle">
                          <a href="">
                            <img src="{{ asset('frontend/images/institution-icon.svg') }}" alt="Institution projects" data-toggle="tooltip" data-bs-placement="bottom" title="Institution projects">
                          </a>
                        </td>
                        <td class="project-circle">
                          <a href="">
                            <img src="{{ asset('frontend/images/industrial-icon.svg') }}" alt="Industrial projects" data-toggle="tooltip" data-bs-placement="bottom" title="Industrial projects">
                          </a>
                        </td>                         
                        <td class="project-circle">
                          <img src="{{ asset('frontend/images/projects-thumbnails/empty-thumbnail.svg') }}" alt="thumbnail-8">
                        </td>
                        <td class="project-circle">
                          <img src="{{ asset('frontend/images/projects-thumbnails/empty-thumbnail.svg') }}" alt="thumbnail-9">
                        </td>
                        <td class="project-circle">
                          <img src="{{ asset('frontend/images/projects-thumbnails/empty-thumbnail.svg') }}" alt="thumbnail-10">
                        </td>
                        <td class="project-circle">
                          <img src="{{ asset('frontend/images/projects-thumbnails/empty-thumbnail.svg') }}" alt="thumbnail-11">
                        </td>
                        <td class="project-circle">
                          <img src="{{ asset('frontend/images/projects-thumbnails/empty-thumbnail.svg') }}" alt="thumbnail-12">
                        </td>
                        <td class="project-circle">
                          <img src="{{ asset('frontend/images/projects-thumbnails/empty-thumbnail.svg') }}" alt="thumbnail-13">
                        </td>
                        <td class="project-circle">
                          <img src="{{ asset('frontend/images/projects-thumbnails/empty-thumbnail.svg') }}" alt="thumbnail-14">
                        </td>
                        <td class="project-circle">
                          <img src="{{ asset('frontend/images/projects-thumbnails/empty-thumbnail.svg') }}" alt="thumbnail-15">
                        </td>
                        <td class="project-circle">
                          <img src="{{ asset('frontend/images/projects-thumbnails/empty-thumbnail.svg') }}" alt="thumbnail-16">
                        </td>
                      </tr>
    
                      <tr>
                        <td class="project-circle">
                          <img src="{{ asset('frontend/images/projects-thumbnails/empty-thumbnail.svg') }}" alt="thumbnail-1">
                        </td>
                        <td class="project-circle">
                          <img src="{{ asset('frontend/images/projects-thumbnails/empty-thumbnail.svg') }}" alt="thumbnail-3">
                        </td>
                        <td class="project-circle">
                          <img src="{{ asset('frontend/images/projects-thumbnails/empty-thumbnail.svg') }}" alt="thumbnail-4">
                        </td>
                        <td class="project-circle">
                          <img src="{{ asset('frontend/images/projects-thumbnails/empty-thumbnail.svg') }}" alt="thumbnail-5">
                        </td>
                        <td class="project-circle">
                          <img src="{{ asset('frontend/images/projects-thumbnails/empty-thumbnail.svg') }}" alt="thumbnail-6">
                        </td>
                        <td class="project-circle">
                          <img src="{{ asset('frontend/images/projects-thumbnails/empty-thumbnail.svg') }}" alt="thumbnail-7">
                        </td>
                        <td class="project-circle">
                          <img src="{{ asset('frontend/images/projects-thumbnails/empty-thumbnail.svg') }}" alt="thumbnail-8">
                        </td>
                        <td class="project-circle">
                          <img src="{{ asset('frontend/images/projects-thumbnails/empty-thumbnail.svg') }}" alt="thumbnail-9">
                        </td>
                        <td class="project-circle">
                          <img src="{{ asset('frontend/images/projects-thumbnails/empty-thumbnail.svg') }}" alt="thumbnail-10">
                        </td>
                        <td class="project-circle">
                          <img src="{{ asset('frontend/images/projects-thumbnails/empty-thumbnail.svg') }}" alt="thumbnail-11">
                        </td>
                        <td class="project-circle">
                          <img src="{{ asset('frontend/images/projects-thumbnails/empty-thumbnail.svg') }}" alt="thumbnail-12">
                        </td>
                        <td class="project-circle">
                          <img src="{{ asset('frontend/images/projects-thumbnails/empty-thumbnail.svg') }}" alt="thumbnail-13">
                        </td>
                        <td class="project-circle">
                          <img src="{{ asset('frontend/images/projects-thumbnails/empty-thumbnail.svg') }}" alt="thumbnail-14">
                        </td>
                        <td class="project-circle">
                          <img src="{{ asset('frontend/images/projects-thumbnails/empty-thumbnail.svg') }}" alt="thumbnail-15">
                        </td>
                        <td class="project-circle">
                          <img src="{{ asset('frontend/images/projects-thumbnails/empty-thumbnail.svg') }}" alt="thumbnail-16">
                        </td>
                      </tr>
    
                      <tr>
                        <td class="project-circle">
                          <img src="{{ asset('frontend/images/projects-thumbnails/empty-thumbnail.svg') }}" alt="thumbnail-1">
                        </td>
                        <td class="project-circle">
                          <img src="{{ asset('frontend/images/projects-thumbnails/empty-thumbnail.svg') }}" alt="thumbnail-3">
                        </td>
                        <td class="project-circle">
                          <img src="{{ asset('frontend/images/projects-thumbnails/empty-thumbnail.svg') }}" alt="thumbnail-4">
                        </td>
                        <td class="project-circle">
                          <img src="{{ asset('frontend/images/projects-thumbnails/empty-thumbnail.svg') }}" alt="thumbnail-5">
                        </td>
                        <td class="project-circle">
                          <img src="{{ asset('frontend/images/projects-thumbnails/empty-thumbnail.svg') }}" alt="thumbnail-6">
                        </td>
                        <td class="project-circle">
                          <img src="{{ asset('frontend/images/projects-thumbnails/empty-thumbnail.svg') }}" alt="thumbnail-7">
                        </td>
                        <td class="project-circle">
                          <img src="{{ asset('frontend/images/projects-thumbnails/empty-thumbnail.svg') }}" alt="thumbnail-8">
                        </td>
                        <td class="project-circle">
                          <img src="{{ asset('frontend/images/projects-thumbnails/empty-thumbnail.svg') }}" alt="thumbnail-9">
                        </td>
                        <td class="project-circle">
                          <img src="{{ asset('frontend/images/projects-thumbnails/empty-thumbnail.svg') }}" alt="thumbnail-10">
                        </td>
                        <td class="project-circle">
                          <img src="{{ asset('frontend/images/projects-thumbnails/empty-thumbnail.svg') }}" alt="thumbnail-11">
                        </td>
                        <td class="project-circle">
                          <img src="{{ asset('frontend/images/projects-thumbnails/empty-thumbnail.svg') }}" alt="thumbnail-12">
                        </td>
                        <td class="project-circle">
                          <img src="{{ asset('frontend/images/projects-thumbnails/empty-thumbnail.svg') }}" alt="thumbnail-13">
                        </td>
                        <td class="project-circle">
                          <img src="{{ asset('frontend/images/projects-thumbnails/empty-thumbnail.svg') }}" alt="thumbnail-14">
                        </td>
                        <td class="project-circle">
                          <img src="{{ asset('frontend/images/projects-thumbnails/empty-thumbnail.svg') }}" alt="thumbnail-15">
                        </td>
                        <td class="project-circle">
                          <img src="{{ asset('frontend/images/projects-thumbnails/empty-thumbnail.svg') }}" alt="thumbnail-16">
                        </td>
                      </tr>
    
                      <tr>
                        <td class="project-circle">
                          <img src="{{ asset('frontend/images/projects-thumbnails/empty-thumbnail.svg') }}" alt="thumbnail-1">
                        </td>
                        <td class="project-circle">
                          <img src="{{ asset('frontend/images/projects-thumbnails/empty-thumbnail.svg') }}" alt="thumbnail-3">
                        </td>
                        <td class="project-circle">
                          <img src="{{ asset('frontend/images/projects-thumbnails/empty-thumbnail.svg') }}" alt="thumbnail-4">
                        </td>
                        <td class="project-circle">
                          <img src="{{ asset('frontend/images/projects-thumbnails/empty-thumbnail.svg') }}" alt="thumbnail-5">
                        </td>
                        <td class="project-circle">
                          <img src="{{ asset('frontend/images/projects-thumbnails/empty-thumbnail.svg') }}" alt="thumbnail-6">
                        </td>
                        <td class="project-circle">
                          <img src="{{ asset('frontend/images/projects-thumbnails/empty-thumbnail.svg') }}" alt="thumbnail-7">
                        </td>
                        <td class="project-circle">
                          <img src="{{ asset('frontend/images/projects-thumbnails/empty-thumbnail.svg') }}" alt="thumbnail-8">
                        </td>
                        <td class="project-circle">
                          <img src="{{ asset('frontend/images/projects-thumbnails/empty-thumbnail.svg') }}" alt="thumbnail-9">
                        </td>
                        <td class="project-circle">
                          <img src="{{ asset('frontend/images/projects-thumbnails/empty-thumbnail.svg') }}" alt="thumbnail-10">
                        </td>
                        <td class="project-circle">
                          <img src="{{ asset('frontend/images/projects-thumbnails/empty-thumbnail.svg') }}" alt="thumbnail-11">
                        </td>
                        <td class="project-circle">
                          <img src="{{ asset('frontend/images/projects-thumbnails/empty-thumbnail.svg') }}" alt="thumbnail-12">
                        </td>
                        <td class="project-circle">
                          <img src="{{ asset('frontend/images/projects-thumbnails/empty-thumbnail.svg') }}" alt="thumbnail-13">
                        </td>
                        <td class="project-circle">
                          <img src="{{ asset('frontend/images/projects-thumbnails/empty-thumbnail.svg') }}" alt="thumbnail-14">
                        </td>
                        <td class="project-circle">
                          <img src="{{ asset('frontend/images/projects-thumbnails/empty-thumbnail.svg') }}" alt="thumbnail-15">
                        </td>
                        <td class="project-circle">
                          <img src="{{ asset('frontend/images/projects-thumbnails/empty-thumbnail.svg') }}" alt="thumbnail-16">
                        </td>
                      </tr>
    
                      <tr>
                        <td class="project-circle">
                          <img src="{{ asset('frontend/images/projects-thumbnails/empty-thumbnail.svg') }}" alt="thumbnail-1">
                        </td>
                        <td class="project-circle">
                          <img src="{{ asset('frontend/images/projects-thumbnails/empty-thumbnail.svg') }}" alt="thumbnail-3">
                        </td>
                        <td class="project-circle">
                          <img src="{{ asset('frontend/images/projects-thumbnails/empty-thumbnail.svg') }}" alt="thumbnail-4">
                        </td>
                        <td class="project-circle">
                          <img src="{{ asset('frontend/images/projects-thumbnails/empty-thumbnail.svg') }}" alt="thumbnail-5">
                        </td>
                        <td class="project-circle">
                          <img src="{{ asset('frontend/images/projects-thumbnails/empty-thumbnail.svg') }}" alt="thumbnail-6">
                        </td>
                        <td class="project-circle">
                          <img src="{{ asset('frontend/images/projects-thumbnails/empty-thumbnail.svg') }}" alt="thumbnail-7">
                        </td>
                        <td class="project-circle">
                          <img src="{{ asset('frontend/images/projects-thumbnails/empty-thumbnail.svg') }}" alt="thumbnail-8">
                        </td>
                        <td class="project-circle">
                          <img src="{{ asset('frontend/images/projects-thumbnails/empty-thumbnail.svg') }}" alt="thumbnail-9">
                        </td>
                        <td class="project-circle">
                          <img src="{{ asset('frontend/images/projects-thumbnails/empty-thumbnail.svg') }}" alt="thumbnail-10">
                        </td>
                        <td class="project-circle">
                          <img src="{{ asset('frontend/images/projects-thumbnails/empty-thumbnail.svg') }}" alt="thumbnail-11">
                        </td>
                        <td class="project-circle">
                          <img src="{{ asset('frontend/images/projects-thumbnails/empty-thumbnail.svg') }}" alt="thumbnail-12">
                        </td>
                        <td class="project-circle">
                          <img src="{{ asset('frontend/images/projects-thumbnails/empty-thumbnail.svg') }}" alt="thumbnail-13">
                        </td>
                        <td class="project-circle">
                          <img src="{{ asset('frontend/images/projects-thumbnails/empty-thumbnail.svg') }}" alt="thumbnail-14">
                        </td>
                        <td class="project-circle">
                          <img src="{{ asset('frontend/images/projects-thumbnails/empty-thumbnail.svg') }}" alt="thumbnail-15">
                        </td>
                        <td class="project-circle">
                          <img src="{{ asset('frontend/images/projects-thumbnails/empty-thumbnail.svg') }}" alt="thumbnail-16">
                        </td>
                      </tr>

                      <tr>
                        <td class="project-circle">
                          <img src="{{ asset('frontend/images/projects-thumbnails/empty-thumbnail.svg') }}" alt="thumbnail-1">
                        </td>
                        <td class="project-circle">
                          <img src="{{ asset('frontend/images/projects-thumbnails/empty-thumbnail.svg') }}" alt="thumbnail-3">
                        </td>
                        <td class="project-circle">
                          <img src="{{ asset('frontend/images/projects-thumbnails/empty-thumbnail.svg') }}" alt="thumbnail-4">
                        </td>
                        <td class="project-circle">
                          <img src="{{ asset('frontend/images/projects-thumbnails/empty-thumbnail.svg') }}" alt="thumbnail-5">
                        </td>
                        <td class="project-circle">
                          <img src="{{ asset('frontend/images/projects-thumbnails/empty-thumbnail.svg') }}" alt="thumbnail-6">
                        </td>
                        <td class="project-circle">
                          <img src="{{ asset('frontend/images/projects-thumbnails/empty-thumbnail.svg') }}" alt="thumbnail-7">
                        </td>
                        <td class="project-circle">
                          <img src="{{ asset('frontend/images/projects-thumbnails/empty-thumbnail.svg') }}" alt="thumbnail-8">
                        </td>
                        <td class="project-circle">
                          <img src="{{ asset('frontend/images/projects-thumbnails/empty-thumbnail.svg') }}" alt="thumbnail-9">
                        </td>
                        <td class="project-circle">
                          <img src="{{ asset('frontend/images/projects-thumbnails/empty-thumbnail.svg') }}" alt="thumbnail-10">
                        </td>
                        <td class="project-circle">
                          <img src="{{ asset('frontend/images/projects-thumbnails/empty-thumbnail.svg') }}" alt="thumbnail-11">
                        </td>
                        <td class="project-circle">
                          <img src="{{ asset('frontend/images/projects-thumbnails/empty-thumbnail.svg') }}" alt="thumbnail-12">
                        </td>
                        <td class="project-circle">
                          <img src="{{ asset('frontend/images/projects-thumbnails/empty-thumbnail.svg') }}" alt="thumbnail-13">
                        </td>
                        <td class="project-circle">
                          <img src="{{ asset('frontend/images/projects-thumbnails/empty-thumbnail.svg') }}" alt="thumbnail-14">
                        </td>
                        <td class="project-circle">
                          <img src="{{ asset('frontend/images/projects-thumbnails/empty-thumbnail.svg') }}" alt="thumbnail-15">
                        </td>
                        <td class="project-circle">
                          <img src="{{ asset('frontend/images/projects-thumbnails/empty-thumbnail.svg') }}" alt="thumbnail-16">
                        </td>
                      </tr>

                      <tr>
                        <td class="project-circle">
                          <img src="{{ asset('frontend/images/projects-thumbnails/empty-thumbnail.svg') }}" alt="thumbnail-1">
                        </td>
                        <td class="project-circle">
                          <img src="{{ asset('frontend/images/projects-thumbnails/empty-thumbnail.svg') }}" alt="thumbnail-3">
                        </td>
                        <td class="project-circle">
                          <img src="{{ asset('frontend/images/projects-thumbnails/empty-thumbnail.svg') }}" alt="thumbnail-4">
                        </td>
                        <td class="project-circle">
                          <img src="{{ asset('frontend/images/projects-thumbnails/empty-thumbnail.svg') }}" alt="thumbnail-5">
                        </td>
                        <td class="project-circle">
                          <img src="{{ asset('frontend/images/projects-thumbnails/empty-thumbnail.svg') }}" alt="thumbnail-6">
                        </td>
                        <td class="project-circle">
                          <img src="{{ asset('frontend/images/projects-thumbnails/empty-thumbnail.svg') }}" alt="thumbnail-7">
                        </td>
                        <td class="project-circle">
                          <img src="{{ asset('frontend/images/projects-thumbnails/empty-thumbnail.svg') }}" alt="thumbnail-8">
                        </td>
                        <td class="project-circle">
                          <img src="{{ asset('frontend/images/projects-thumbnails/empty-thumbnail.svg') }}" alt="thumbnail-9">
                        </td>
                        <td class="project-circle">
                          <img src="{{ asset('frontend/images/projects-thumbnails/empty-thumbnail.svg') }}" alt="thumbnail-10">
                        </td>
                        <td class="project-circle">
                          <img src="{{ asset('frontend/images/projects-thumbnails/empty-thumbnail.svg') }}" alt="thumbnail-11">
                        </td>
                        <td class="project-circle">
                          <img src="{{ asset('frontend/images/projects-thumbnails/empty-thumbnail.svg') }}" alt="thumbnail-12">
                        </td>
                        <td class="project-circle">
                          <img src="{{ asset('frontend/images/projects-thumbnails/empty-thumbnail.svg') }}" alt="thumbnail-13">
                        </td>
                        <td class="project-circle">
                          <img src="{{ asset('frontend/images/projects-thumbnails/empty-thumbnail.svg') }}" alt="thumbnail-14">
                        </td>
                        <td class="project-circle">
                          <img src="{{ asset('frontend/images/projects-thumbnails/empty-thumbnail.svg') }}" alt="thumbnail-15">
                        </td>
                        <td class="project-circle">
                          <img src="{{ asset('frontend/images/projects-thumbnails/empty-thumbnail.svg') }}" alt="thumbnail-16">
                        </td>
                      </tr>
    
                    </tbody>
                </table>
              </div>
            </div>
          </div>
      </div>
    </div>
  </main>
</body>
@endsection