@extends('layouts.frontend')
@section('page_title', 'Home | idée CA')
@section('site_logo', asset('frontend/images/logo-white.svg'))
@section('content')
<body>


    @include('frontend.components.header')

      <main>
        <div class="page-content">
          <div class="home-banner-area">
            <div class="project-circle-area">
            <table class="table table-borderless">
              <tbody>
                  <tr>
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
                      <img src="{{ asset('frontend/images/projects-thumbnails/empty-thumbnail.svg') }}" alt="thumbnail-2">
                    </td>
                    <td class="project-circle">
                      <img src="{{ asset('frontend/images/projects-thumbnails/empty-thumbnail.svg') }}" alt="thumbnail-3">
                    </td>



                    <td class="project-circle hide-on-ipad">
                      <a href="{{route('project')}}">
                        <img src="{{ asset('frontend/images/residential-icon.svg') }}" alt="Residential" title="Residential" data-toggle="tooltip" data-bs-placement="bottom">
                      </a>
                    </td>
                    <td class="project-circle">
                      <a href="{{route('project')}}">
                        <img src="{{ asset('frontend/images/comercial-icon.svg') }}" alt="commercial" title="commercial" data-toggle="tooltip" data-bs-placement="bottom">
                      </a>
                    </td>
                    <td class="project-circle">
                      <a href="{{route('project')}}">
                        <img src="{{ asset('frontend/images/industrial-icon.svg') }}" alt="Industial" title="Industial" data-toggle="tooltip" data-bs-placement="bottom">
                      </a>
                    </td>
                    <td class="project-circle">
                      <a href="{{route('project')}}">
                        <img src="{{ asset('frontend/images/health-icon.svg') }}" alt="Health" title="Health" data-toggle="tooltip" data-bs-placement="bottom">
                      </a>
                    </td>
                    <td class="project-circle hide-on-ipad">
                      <a href="{{route('project')}}">
                        <img src="{{ asset('frontend/images/institution-icon.svg') }}" alt="Institutional" title="Institutional" data-toggle="tooltip" data-bs-placement="bottom">
                      </a>
                    </td>
                    <td class="project-circle">
                      <a href="{{route('project')}}">
                        <img src="{{ asset('frontend/images/hospitality-icon.svg') }}" alt="Hospitality" title="Hospitality" data-toggle="tooltip" data-bs-placement="bottom">
                      </a>
                    </td>
                    <td class="project-circle hide-on-ipad">
                      <a href="{{route('project')}}">
                        <img src="{{ asset('frontend/images/iterior-icon.svg') }}" alt="Interior" title="Interior" data-toggle="tooltip" data-bs-placement="bottom">
                      </a>
                    </td>

                    <td class="project-circle">
                      <a href="{{route('project')}}">
                        <img src="{{ asset('frontend/images/other-icon.svg') }}" alt="Other" title="Other" data-toggle="tooltip" data-bs-placement="bottom">
                      </a>
                    </td>














                    <td class="project-circle show-on-ipad">
                      <img src="{{ asset('frontend/images/projects-thumbnails/empty-thumbnail.svg') }}" alt="thumbnail-13">
                    </td>
                    <td class="project-circle show-on-ipad">
                      <img src="{{ asset('frontend/images/projects-thumbnails/empty-thumbnail.svg') }}" alt="thumbnail-13">
                    </td>
                    <td class="project-circle show-on-ipad">
                      <img src="{{ asset('frontend/images/projects-thumbnails/empty-thumbnail.svg') }}" alt="thumbnail-13">
                    </td>
                    <td class="project-circle show-on-ipad">
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
                      <img src="{{ asset('frontend/images/projects-thumbnails/empty-thumbnail.svg') }}" alt="thumbnail-2">
                    </td>
                    <td class="project-circle">
                      <img src="{{ asset('frontend/images/projects-thumbnails/empty-thumbnail.svg') }}" alt="thumbnail-3">
                    </td>
                    <td class="project-circle hide-on-ipad">
                      <img src="{{ asset('frontend/images/projects-thumbnails/empty-thumbnail.svg') }}" alt="thumbnail-13">
                    </td>
                    <td class="project-circle hide-on-ipad">
                      <img src="{{ asset('frontend/images/projects-thumbnails/empty-thumbnail.svg') }}" alt="thumbnail-13">
                    </td>
                    <td class="project-circle hide-on-ipad">
                      <img src="{{ asset('frontend/images/projects-thumbnails/empty-thumbnail.svg') }}" alt="thumbnail-13">
                    </td>
                    <td class="project-circle hide-on-ipad">
                      <img src="{{ asset('frontend/images/projects-thumbnails/empty-thumbnail.svg') }}" alt="thumbnail-13">
                    </td>
                    <td class="project-circle show-on-ipad">
                      <a href="">
                        <img src="./assets/images/iterior-icon.svg" alt="Interior">
                      </a>
                    </td>
                    <td class="project-circle show-on-ipad">
                      <a href="">
                        <img src="./assets/images/hospitality-icon.svg" alt="Hospitality">
                      </a>
                    </td>
                    <td class="project-circle show-on-ipad">
                      <a href="">
                        <img src="./assets/images/institution-icon.svg" alt="Institution">
                      </a>
                    </td>
                    <td class="project-circle show-on-ipad">
                      <a href="">
                        <img src="./assets/images/residential-icon.svg" alt="Residential">
                      </a>
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

                </tbody>
            </table>
            </div>










            <div class="project-circle-area d-none">
              <div class="row p-0 m-0 g-3 row-cols-auto">
                <div class="col">
                  <div class="project-circle">
                    <a href="">
                      <img src="./assets/images/projects-thumbnails/1.jpg" alt="thumbnail-1">
                    </a>
                  </div>
                </div>
                <div class="col">
                  <div class="project-circle">
                    <img src="{{ asset('frontend/images/projects-thumbnails/empty-thumbnail.svg') }}" alt="thumbnail-0">
                  </div>
                </div>
                <div class="col">
                  <div class="project-circle">
                    <img src="{{ asset('frontend/images/projects-thumbnails/empty-thumbnail.svg') }}" alt="thumbnail-0">
                  </div>
                </div>
                <div class="col">
                  <div class="project-circle">
                    <a href="">
                      <img src="./assets/images/projects-thumbnails/2.jpg" alt="thumbnail-2">
                    </a>
                  </div>
                </div>
                <div class="col">
                  <div class="project-circle">
                    <img src="{{ asset('frontend/images/projects-thumbnails/empty-thumbnail.svg') }}" alt="thumbnail-0">
                  </div>
                </div>
                <div class="col">
                  <div class="project-circle">
                    <img src="{{ asset('frontend/images/projects-thumbnails/empty-thumbnail.svg') }}" alt="thumbnail-0">
                  </div>
                </div>
                <div class="col">
                  <div class="project-circle">
                    <img src="{{ asset('frontend/images/projects-thumbnails/empty-thumbnail.svg') }}" alt="thumbnail-0">
                  </div>
                </div>
                <div class="col">
                  <div class="project-circle">
                    <img src="{{ asset('frontend/images/projects-thumbnails/empty-thumbnail.svg') }}" alt="thumbnail-0">
                  </div>
                </div>
                <div class="col">
                  <div class="project-circle">
                    <a href="">
                      <img src="{{ asset('frontend/images/projects-thumbnails/3.jpg') }}" alt="thumbnail-3">
                    </a>
                  </div>
                </div>


                <div class="col">
                  <div class="project-circle">
                    <img src="{{ asset('frontend/images/projects-thumbnails/empty-thumbnail.svg') }}" alt="thumbnail-0">
                  </div>
                </div>
                <div class="col">
                  <div class="project-circle">
                    <img src="{{ asset('frontend/images/projects-thumbnails/empty-thumbnail.svg') }}" alt="thumbnail-0">
                  </div>
                </div>
                <div class="col">
                  <div class="project-circle">
                    <img src="{{ asset('frontend/images/projects-thumbnails/empty-thumbnail.svg') }}" alt="thumbnail-0">
                  </div>
                </div>
                <div class="col">
                  <div class="project-circle">
                    <a href="">
                      <img src="./assets/images/projects-thumbnails/2.jpg" alt="thumbnail-2">
                    </a>
                  </div>
                </div>
                <div class="col">
                  <div class="project-circle">
                    <img src="{{ asset('frontend/images/projects-thumbnails/empty-thumbnail.svg') }}" alt="thumbnail-0">
                  </div>
                </div>
                <div class="col">
                  <div class="project-circle">
                    <img src="{{ asset('frontend/images/projects-thumbnails/empty-thumbnail.svg') }}" alt="thumbnail-0">
                  </div>
                </div>
                <div class="col">
                  <div class="project-circle">
                    <img src="{{ asset('frontend/images/projects-thumbnails/empty-thumbnail.svg') }}" alt="thumbnail-0">
                  </div>
                </div>
                <div class="col">
                  <div class="project-circle">
                    <img src="{{ asset('frontend/images/projects-thumbnails/empty-thumbnail.svg') }}" alt="thumbnail-0">
                  </div>
                </div>
                <div class="col">
                  <div class="project-circle">
                    <a href="">
                      <img src="{{ asset('frontend/images/projects-thumbnails/3.jpg') }}" alt="thumbnail-3">
                    </a>
                  </div>
                </div>


                <div class="col">
                  <div class="project-circle">
                    <img src="{{ asset('frontend/images/projects-thumbnails/empty-thumbnail.svg') }}" alt="thumbnail-0">
                  </div>
                </div>
                <div class="col">
                  <div class="project-circle">
                    <img src="{{ asset('frontend/images/projects-thumbnails/empty-thumbnail.svg') }}" alt="thumbnail-0">
                  </div>
                </div>
                <div class="col">
                  <div class="project-circle">
                    <img src="{{ asset('frontend/images/projects-thumbnails/empty-thumbnail.svg') }}" alt="thumbnail-0">
                  </div>
                </div>
                <div class="col">
                  <div class="project-circle">
                    <a href="">
                      <img src="./assets/images/projects-thumbnails/2.jpg" alt="thumbnail-2">
                    </a>
                  </div>
                </div>
                <div class="col">
                  <div class="project-circle">
                    <img src="{{ asset('frontend/images/projects-thumbnails/empty-thumbnail.svg') }}" alt="thumbnail-0">
                  </div>
                </div>
                <div class="col">
                  <div class="project-circle">
                    <img src="{{ asset('frontend/images/projects-thumbnails/empty-thumbnail.svg') }}" alt="thumbnail-0">
                  </div>
                </div>
                <div class="col">
                  <div class="project-circle">
                    <img src="{{ asset('frontend/images/projects-thumbnails/empty-thumbnail.svg') }}" alt="thumbnail-0">
                  </div>
                </div>
                <div class="col">
                  <div class="project-circle">
                    <img src="{{ asset('frontend/images/projects-thumbnails/empty-thumbnail.svg') }}" alt="thumbnail-0">
                  </div>
                </div>
                <div class="col">
                  <div class="project-circle">
                    <a href="">
                      <img src="{{ asset('frontend/images/projects-thumbnails/3.jpg') }}" alt="thumbnail-3">
                    </a>
                  </div>
                </div>
                <div class="col">
                  <div class="project-circle">
                    <img src="{{ asset('frontend/images/projects-thumbnails/empty-thumbnail.svg') }}" alt="thumbnail-0">
                  </div>
                </div>


                <div class="col">
                  <div class="project-circle">
                    <img src="{{ asset('frontend/images/projects-thumbnails/empty-thumbnail.svg') }}" alt="thumbnail-0">
                  </div>
                </div>
                <div class="col">
                  <div class="project-circle">
                    <img src="{{ asset('frontend/images/projects-thumbnails/empty-thumbnail.svg') }}" alt="thumbnail-0">
                  </div>
                </div>
                <div class="col">
                  <div class="project-circle">
                    <a href="">
                      <img src="./assets/images/projects-thumbnails/2.jpg" alt="thumbnail-2">
                    </a>
                  </div>
                </div>
                <div class="col">
                  <div class="project-circle">
                    <img src="{{ asset('frontend/images/projects-thumbnails/empty-thumbnail.svg') }}" alt="thumbnail-0">
                  </div>
                </div>
                <div class="col">
                  <div class="project-circle">
                    <img src="{{ asset('frontend/images/projects-thumbnails/empty-thumbnail.svg') }}" alt="thumbnail-0">
                  </div>
                </div>
                <div class="col">
                  <div class="project-circle">
                    <img src="{{ asset('frontend/images/projects-thumbnails/empty-thumbnail.svg') }}" alt="thumbnail-0">
                  </div>
                </div>
                <div class="col">
                  <div class="project-circle">
                    <img src="{{ asset('frontend/images/projects-thumbnails/empty-thumbnail.svg') }}" alt="thumbnail-0">
                  </div>
                </div>
                <div class="col">
                  <div class="project-circle">
                    <a href="">
                      <img src="{{ asset('frontend/images/projects-thumbnails/3.jpg') }}" alt="thumbnail-3">
                    </a>
                  </div>
                </div>
                <div class="col">
                  <div class="project-circle">
                    <img src="{{ asset('frontend/images/projects-thumbnails/empty-thumbnail.svg') }}" alt="thumbnail-0">
                  </div>
                </div>


                <div class="col">
                  <div class="project-circle">
                    <img src="{{ asset('frontend/images/projects-thumbnails/empty-thumbnail.svg') }}" alt="thumbnail-0">
                  </div>
                </div>
                <div class="col">
                  <div class="project-circle">
                    <img src="{{ asset('frontend/images/projects-thumbnails/empty-thumbnail.svg') }}" alt="thumbnail-0">
                  </div>
                </div>
                <div class="col">
                  <div class="project-circle">
                    <a href="">
                      <img src="./assets/images/projects-thumbnails/2.jpg" alt="thumbnail-2">
                    </a>
                  </div>
                </div>
                <div class="col">
                  <div class="project-circle">
                    <img src="{{ asset('frontend/images/projects-thumbnails/empty-thumbnail.svg') }}" alt="thumbnail-0">
                  </div>
                </div>
                <div class="col">
                  <div class="project-circle">
                    <img src="{{ asset('frontend/images/projects-thumbnails/empty-thumbnail.svg') }}" alt="thumbnail-0">
                  </div>
                </div>
                <div class="col">
                  <div class="project-circle">
                    <img src="{{ asset('frontend/images/projects-thumbnails/empty-thumbnail.svg') }}" alt="thumbnail-0">
                  </div>
                </div>
                <div class="col">
                  <div class="project-circle">
                    <img src="{{ asset('frontend/images/projects-thumbnails/empty-thumbnail.svg') }}" alt="thumbnail-0">
                  </div>
                </div>
                <div class="col">
                  <div class="project-circle">
                    <a href="">
                      <img src="{{ asset('frontend/images/projects-thumbnails/3.jpg') }}" alt="thumbnail-3">
                    </a>
                  </div>
                </div>
                <div class="col">
                  <div class="project-circle">
                    <img src="{{ asset('frontend/images/projects-thumbnails/empty-thumbnail.svg') }}" alt="thumbnail-0">
                  </div>
                </div>


                <div class="col">
                  <div class="project-circle">
                    <img src="{{ asset('frontend/images/projects-thumbnails/empty-thumbnail.svg') }}" alt="thumbnail-0">
                  </div>
                </div>
                <div class="col">
                  <div class="project-circle">
                    <img src="{{ asset('frontend/images/projects-thumbnails/empty-thumbnail.svg') }}" alt="thumbnail-0">
                  </div>
                </div>
                <div class="col">
                  <div class="project-circle">
                    <a href="">
                      <img src="./assets/images/projects-thumbnails/2.jpg" alt="thumbnail-2">
                    </a>
                  </div>
                </div>
                <div class="col">
                  <div class="project-circle">
                    <img src="{{ asset('frontend/images/projects-thumbnails/empty-thumbnail.svg') }}" alt="thumbnail-0">
                  </div>
                </div>
                <div class="col">
                  <div class="project-circle">
                    <img src="{{ asset('frontend/images/projects-thumbnails/empty-thumbnail.svg') }}" alt="thumbnail-0">
                  </div>
                </div>
                <div class="col">
                  <div class="project-circle">
                    <img src="{{ asset('frontend/images/projects-thumbnails/empty-thumbnail.svg') }}" alt="thumbnail-0">
                  </div>
                </div>
                <div class="col">
                  <div class="project-circle">
                    <img src="{{ asset('frontend/images/projects-thumbnails/empty-thumbnail.svg') }}" alt="thumbnail-0">
                  </div>
                </div>
                <div class="col">
                  <div class="project-circle">
                    <a href="">
                      <img src="{{ asset('frontend/images/projects-thumbnails/3.jpg') }}" alt="thumbnail-3">
                    </a>
                  </div>
                </div>
                <div class="col">
                  <div class="project-circle">
                    <img src="{{ asset('frontend/images/projects-thumbnails/empty-thumbnail.svg') }}" alt="thumbnail-0">
                  </div>
                </div>


                <div class="col">
                  <div class="project-circle">
                    <img src="{{ asset('frontend/images/projects-thumbnails/empty-thumbnail.svg') }}" alt="thumbnail-0">
                  </div>
                </div>
                <div class="col">
                  <div class="project-circle">
                    <img src="{{ asset('frontend/images/projects-thumbnails/empty-thumbnail.svg') }}" alt="thumbnail-0">
                  </div>
                </div>
                <div class="col">
                  <div class="project-circle">
                    <a href="">
                      <img src="./assets/images/projects-thumbnails/2.jpg" alt="thumbnail-2">
                    </a>
                  </div>
                </div>
                <div class="col">
                  <div class="project-circle">
                    <img src="{{ asset('frontend/images/projects-thumbnails/empty-thumbnail.svg') }}" alt="thumbnail-0">
                  </div>
                </div>
                <div class="col">
                  <div class="project-circle">
                    <img src="{{ asset('frontend/images/projects-thumbnails/empty-thumbnail.svg') }}" alt="thumbnail-0">
                  </div>
                </div>
                <div class="col">
                  <div class="project-circle">
                    <img src="{{ asset('frontend/images/projects-thumbnails/empty-thumbnail.svg') }}" alt="thumbnail-0">
                  </div>
                </div>
                <div class="col">
                  <div class="project-circle">
                    <img src="{{ asset('frontend/images/projects-thumbnails/empty-thumbnail.svg') }}" alt="thumbnail-0">
                  </div>
                </div>
                <div class="col">
                  <div class="project-circle">
                    <a href="">
                      <img src="{{ asset('frontend/images/projects-thumbnails/3.jpg') }}" alt="thumbnail-3">
                    </a>
                  </div>
                </div>
                <div class="col">
                  <div class="project-circle">
                    <img src="{{ asset('frontend/images/projects-thumbnails/empty-thumbnail.svg') }}" alt="thumbnail-0">
                  </div>
                </div>


                <div class="col">
                  <div class="project-circle">
                    <img src="{{ asset('frontend/images/projects-thumbnails/empty-thumbnail.svg') }}" alt="thumbnail-0">
                  </div>
                </div>
                <div class="col">
                  <div class="project-circle">
                    <img src="{{ asset('frontend/images/projects-thumbnails/empty-thumbnail.svg') }}" alt="thumbnail-0">
                  </div>
                </div>
                <div class="col">
                  <div class="project-circle">
                    <a href="">
                      <img src="./assets/images/projects-thumbnails/2.jpg" alt="thumbnail-2">
                    </a>
                  </div>
                </div>
                <div class="col">
                  <div class="project-circle">
                    <img src="{{ asset('frontend/images/projects-thumbnails/empty-thumbnail.svg') }}" alt="thumbnail-0">
                  </div>
                </div>
                <div class="col">
                  <div class="project-circle">
                    <img src="{{ asset('frontend/images/projects-thumbnails/empty-thumbnail.svg') }}" alt="thumbnail-0">
                  </div>
                </div>
                <div class="col">
                  <div class="project-circle">
                    <img src="{{ asset('frontend/images/projects-thumbnails/empty-thumbnail.svg') }}" alt="thumbnail-0">
                  </div>
                </div>
                <div class="col">
                  <div class="project-circle">
                    <img src="{{ asset('frontend/images/projects-thumbnails/empty-thumbnail.svg') }}" alt="thumbnail-0">
                  </div>
                </div>
                <div class="col">
                  <div class="project-circle">
                    <a href="">
                      <img src="{{ asset('frontend/images/projects-thumbnails/3.jpg') }}" alt="thumbnail-3">
                    </a>
                  </div>
                </div>
                <div class="col">
                  <div class="project-circle">
                    <img src="{{ asset('frontend/images/projects-thumbnails/empty-thumbnail.svg') }}" alt="thumbnail-0">
                  </div>
                </div>


                <div class="col">
                  <div class="project-circle">
                    <img src="{{ asset('frontend/images/projects-thumbnails/empty-thumbnail.svg') }}" alt="thumbnail-0">
                  </div>
                </div>
                <div class="col">
                  <div class="project-circle">
                    <img src="{{ asset('frontend/images/projects-thumbnails/empty-thumbnail.svg') }}" alt="thumbnail-0">
                  </div>
                </div>
                <div class="col">
                  <div class="project-circle">
                    <a href="">
                      <img src="./assets/images/projects-thumbnails/2.jpg" alt="thumbnail-2">
                    </a>
                  </div>
                </div>
                <div class="col">
                  <div class="project-circle">
                    <img src="{{ asset('frontend/images/projects-thumbnails/empty-thumbnail.svg') }}" alt="thumbnail-0">
                  </div>
                </div>
                <div class="col">
                  <div class="project-circle">
                    <img src="{{ asset('frontend/images/projects-thumbnails/empty-thumbnail.svg') }}" alt="thumbnail-0">
                  </div>
                </div>
                <div class="col">
                  <div class="project-circle">
                    <img src="{{ asset('frontend/images/projects-thumbnails/empty-thumbnail.svg') }}" alt="thumbnail-0">
                  </div>
                </div>
                <div class="col">
                  <div class="project-circle">
                    <img src="{{ asset('frontend/images/projects-thumbnails/empty-thumbnail.svg') }}" alt="thumbnail-0">
                  </div>
                </div>
                <div class="col">
                  <div class="project-circle">
                    <a href="">
                      <img src="{{ asset('frontend/images/projects-thumbnails/3.jpg') }}" alt="thumbnail-3">
                    </a>
                  </div>
                </div>
                <div class="col">
                  <div class="project-circle">
                    <img src="{{ asset('frontend/images/projects-thumbnails/empty-thumbnail.svg') }}" alt="thumbnail-0">
                  </div>
                </div>


                <div class="col">
                  <div class="project-circle">
                    <img src="{{ asset('frontend/images/projects-thumbnails/empty-thumbnail.svg') }}" alt="thumbnail-0">
                  </div>
                </div>
                <div class="col">
                  <div class="project-circle">
                    <img src="{{ asset('frontend/images/projects-thumbnails/empty-thumbnail.svg') }}" alt="thumbnail-0">
                  </div>
                </div>
                <div class="col">
                  <div class="project-circle">
                    <a href="">
                      <img src="./assets/images/projects-thumbnails/2.jpg" alt="thumbnail-2">
                    </a>
                  </div>
                </div>
                <div class="col">
                  <div class="project-circle">
                    <img src="{{ asset('frontend/images/projects-thumbnails/empty-thumbnail.svg') }}" alt="thumbnail-0">
                  </div>
                </div>
                <div class="col">
                  <div class="project-circle">
                    <img src="{{ asset('frontend/images/projects-thumbnails/empty-thumbnail.svg') }}" alt="thumbnail-0">
                  </div>
                </div>
                <div class="col">
                  <div class="project-circle">
                    <img src="{{ asset('frontend/images/projects-thumbnails/empty-thumbnail.svg') }}" alt="thumbnail-0">
                  </div>
                </div>
                <div class="col">
                  <div class="project-circle">
                    <img src="{{ asset('frontend/images/projects-thumbnails/empty-thumbnail.svg') }}" alt="thumbnail-0">
                  </div>
                </div>
                <div class="col">
                  <div class="project-circle">
                    <a href="">
                      <img src="{{ asset('frontend/images/projects-thumbnails/3.jpg') }}" alt="thumbnail-3">
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </main>
</body>
@endsection