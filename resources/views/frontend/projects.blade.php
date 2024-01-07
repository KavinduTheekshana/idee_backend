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
                        <h2 id="category-name-header" class="fw-bolder"></h2>
                        <br>
                        <ul class="project-list-area__list" id="projects-container">

                            {{-- <li class="project-list-area__list-item">
                                <a href="project-1.html" class="project-list-area__list-item-link">

                                    <h4 class="fw-bolder m-0">Proposed Residence for Mr. Sameera Ranasinghe,</h4>
                                    <p class="m-0">Location _ No. 119/11, Malambe Road, Kottawa,, Pannipitiya</p>
                                    <p>Land Extent_15p/Floor area_3000 Sqft/ Project year_2020/ Completed_2021</p>
                                </a>
                            </li> --}}




                        </ul>
                    </div>
                    <div class="projects-area">
                        <div class="project-circle-area">
                            <div class="hide-on-mobile">
                                <table class="table table-borderless">
                                    <tbody>
                                        <tr>
                                            <td class="project-circle">
                                                <img src="{{ asset('frontend/images/projects-thumbnails/empty-thumbnail.svg') }}"
                                                    alt="thumbnail-1">
                                            </td>
                                            <td class="project-circle">
                                                <img src="{{ asset('frontend/images/projects-thumbnails/empty-thumbnail.svg') }}"
                                                    alt="thumbnail-1">
                                            </td>
                                            <td class="project-circle">
                                                <img src="{{ asset('frontend/images/projects-thumbnails/empty-thumbnail.svg') }}"
                                                    alt="thumbnail-2">
                                            </td>
                                            <td class="project-circle">
                                                <img src="{{ asset('frontend/images/projects-thumbnails/empty-thumbnail.svg') }}"
                                                    alt="thumbnail-3">
                                            </td>
                                            <td class="project-circle">
                                                <img src="{{ asset('frontend/images/projects-thumbnails/empty-thumbnail.svg') }}"
                                                    alt="thumbnail-4">
                                            </td>
                                            <td class="project-circle">
                                                <img src="{{ asset('frontend/images/projects-thumbnails/empty-thumbnail.svg') }}"
                                                    alt="thumbnail-5">
                                            </td>
                                            <td class="project-circle">
                                                <img src="{{ asset('frontend/images/projects-thumbnails/empty-thumbnail.svg') }}"
                                                    alt="thumbnail-6">
                                            </td>
                                            <td class="project-circle">
                                                <img src="{{ asset('frontend/images/projects-thumbnails/empty-thumbnail.svg') }}"
                                                    alt="thumbnail-7">
                                            </td>
                                            <td class="project-circle">
                                                <img src="{{ asset('frontend/images/projects-thumbnails/empty-thumbnail.svg') }}"
                                                    alt="thumbnail-8">
                                            </td>
                                            <td class="project-circle">
                                                <img src="{{ asset('frontend/images/projects-thumbnails/empty-thumbnail.svg') }}"
                                                    alt="thumbnail-9">
                                            </td>
                                            <td class="project-circle">
                                                <img src="{{ asset('frontend/images/projects-thumbnails/empty-thumbnail.svg') }}"
                                                    alt="thumbnail-10">
                                            </td>
                                            <td class="project-circle">
                                                <img src="{{ asset('frontend/images/projects-thumbnails/empty-thumbnail.svg') }}"
                                                    alt="thumbnail-11">
                                            </td>
                                            <td class="project-circle">
                                                <img src="{{ asset('frontend/images/projects-thumbnails/empty-thumbnail.svg') }}"
                                                    alt="thumbnail-12">
                                            </td>
                                            <td class="project-circle">
                                                <img src="{{ asset('frontend/images/projects-thumbnails/empty-thumbnail.svg') }}"
                                                    alt="thumbnail-13">
                                            </td>
                                            <td class="project-circle">
                                                <img src="{{ asset('frontend/images/projects-thumbnails/empty-thumbnail.svg') }}"
                                                    alt="thumbnail-14">
                                            </td>
                                            <td class="project-circle">
                                                <img src="{{ asset('frontend/images/projects-thumbnails/empty-thumbnail.svg') }}"
                                                    alt="thumbnail-15">
                                            </td>
                                            <td class="project-circle">
                                                <img src="{{ asset('frontend/images/projects-thumbnails/empty-thumbnail.svg') }}"
                                                    alt="thumbnail-16">
                                            </td>
                                        </tr>

                                        <tr>
                                            <td class="project-circle">
                                                <img src="{{ asset('frontend/images/projects-thumbnails/empty-thumbnail.svg') }}"
                                                    alt="thumbnail-1">
                                            </td>
                                            <td class="project-circle">
                                                <img src="{{ asset('frontend/images/projects-thumbnails/empty-thumbnail.svg') }}"
                                                    alt="thumbnail-1">
                                            </td>
                                            <td class="project-circle">
                                                <img src="{{ asset('frontend/images/projects-thumbnails/empty-thumbnail.svg') }}"
                                                    alt="thumbnail-2">
                                            </td>
                                            <td class="project-circle">
                                                <img src="{{ asset('frontend/images/projects-thumbnails/empty-thumbnail.svg') }}"
                                                    alt="thumbnail-3">
                                            </td>
                                            <td class="project-circle">
                                                <img src="{{ asset('frontend/images/projects-thumbnails/empty-thumbnail.svg') }}"
                                                    alt="thumbnail-4">
                                            </td>
                                            <td class="project-circle">
                                                <img src="{{ asset('frontend/images/projects-thumbnails/empty-thumbnail.svg') }}"
                                                    alt="thumbnail-5">
                                            </td>
                                            <td class="project-circle">
                                                <img src="{{ asset('frontend/images/projects-thumbnails/empty-thumbnail.svg') }}"
                                                    alt="thumbnail-6">
                                            </td>
                                            <td class="project-circle">
                                                <img src="{{ asset('frontend/images/projects-thumbnails/empty-thumbnail.svg') }}"
                                                    alt="thumbnail-7">
                                            </td>
                                            <td class="project-circle">
                                                <img src="{{ asset('frontend/images/projects-thumbnails/empty-thumbnail.svg') }}"
                                                    alt="thumbnail-8">
                                            </td>
                                            <td class="project-circle">
                                                <img src="{{ asset('frontend/images/projects-thumbnails/empty-thumbnail.svg') }}"
                                                    alt="thumbnail-9">
                                            </td>
                                            <td class="project-circle">
                                                <img src="{{ asset('frontend/images/projects-thumbnails/empty-thumbnail.svg') }}"
                                                    alt="thumbnail-10">
                                            </td>
                                            <td class="project-circle">
                                                <img src="{{ asset('frontend/images/projects-thumbnails/empty-thumbnail.svg') }}"
                                                    alt="thumbnail-11">
                                            </td>
                                            <td class="project-circle">
                                                <img src="{{ asset('frontend/images/projects-thumbnails/empty-thumbnail.svg') }}"
                                                    alt="thumbnail-12">
                                            </td>
                                            <td class="project-circle">
                                                <img src="{{ asset('frontend/images/projects-thumbnails/empty-thumbnail.svg') }}"
                                                    alt="thumbnail-13">
                                            </td>
                                            <td class="project-circle">
                                                <img src="{{ asset('frontend/images/projects-thumbnails/empty-thumbnail.svg') }}"
                                                    alt="thumbnail-14">
                                            </td>
                                            <td class="project-circle">
                                                <img src="{{ asset('frontend/images/projects-thumbnails/empty-thumbnail.svg') }}"
                                                    alt="thumbnail-15">
                                            </td>
                                            <td class="project-circle">
                                                <img src="{{ asset('frontend/images/projects-thumbnails/empty-thumbnail.svg') }}"
                                                    alt="thumbnail-16">
                                            </td>
                                        </tr>

                                        <tr>
                                            <td class="project-circle">
                                                <img src="{{ asset('frontend/images/projects-thumbnails/empty-thumbnail.svg') }}"
                                                    alt="thumbnail-1">
                                            </td>
                                            <td class="project-circle">
                                                <a href="javascript:void(0)" data-category-id="1" class="category-link">
                                                    <img class="category-icon"
                                                        src="{{ asset('frontend/images/residential-icon.svg') }}"
                                                        alt="Residential projects" data-toggle="tooltip"
                                                        data-bs-placement="bottom" title="Residential projects">
                                                </a>
                                            </td>
                                            <td class="project-circle">
                                                <a href="javascript:void(0)" data-category-id="2" class="category-link">
                                                    <img class="category-icon"
                                                        src="{{ asset('frontend/images/comercial-icon.svg') }}"
                                                        alt="Commercial projects" data-toggle="tooltip"
                                                        data-bs-placement="bottom" title="Commercial projects">
                                                </a>
                                            </td>
                                            <td class="project-circle">
                                                <a href="javascript:void(0)" data-category-id="3" class="category-link">
                                                    <img class="category-icon"
                                                        src="{{ asset('frontend/images/industrial-icon.svg') }}"
                                                        alt="Industrial projects" data-toggle="tooltip"
                                                        data-bs-placement="bottom" title="Industrial projects">
                                                </a>
                                            </td>
                                            <td class="project-circle">
                                                <a href="javascript:void(0)" data-category-id="4" class="category-link">
                                                    <img class="category-icon"
                                                        src="{{ asset('frontend/images/health-icon.svg') }}"
                                                        alt="Health projects" data-toggle="tooltip"
                                                        data-bs-placement="bottom" title="Health projects">
                                                </a>
                                            </td>
                                            <td class="project-circle">
                                                <img src="{{ asset('frontend/images/projects-thumbnails/empty-thumbnail.svg') }}"
                                                    alt="thumbnail-1">
                                            </td>
                                            <td class="project-circle">
                                                <img src="{{ asset('frontend/images/projects-thumbnails/empty-thumbnail.svg') }}"
                                                    alt="thumbnail-8">
                                            </td>
                                            <td class="project-circle">
                                                <img src="{{ asset('frontend/images/projects-thumbnails/empty-thumbnail.svg') }}"
                                                    alt="thumbnail-13">
                                            </td>
                                            <td class="project-circle">
                                                <img src="{{ asset('frontend/images/projects-thumbnails/empty-thumbnail.svg') }}"
                                                    alt="thumbnail-13">
                                            </td>
                                            <td class="project-circle">
                                                <img src="{{ asset('frontend/images/projects-thumbnails/empty-thumbnail.svg') }}"
                                                    alt="thumbnail-13">
                                            </td>
                                            <td class="project-circle">
                                                <img src="{{ asset('frontend/images/projects-thumbnails/empty-thumbnail.svg') }}"
                                                    alt="thumbnail-13">
                                            </td>
                                            <td class="project-circle">
                                                <img src="{{ asset('frontend/images/projects-thumbnails/empty-thumbnail.svg') }}"
                                                    alt="thumbnail-13">
                                            </td>
                                            <td class="project-circle">
                                                <img src="{{ asset('frontend/images/projects-thumbnails/empty-thumbnail.svg') }}"
                                                    alt="thumbnail-14">
                                            </td>
                                            <td class="project-circle">
                                                <img src="{{ asset('frontend/images/projects-thumbnails/empty-thumbnail.svg') }}"
                                                    alt="thumbnail-15">
                                            </td>
                                            <td class="project-circle">
                                                <img src="{{ asset('frontend/images/projects-thumbnails/empty-thumbnail.svg') }}"
                                                    alt="thumbnail-16">
                                            </td>
                                        </tr>

                                        <tr>
                                            <td class="project-circle">
                                                <img src="{{ asset('frontend/images/projects-thumbnails/empty-thumbnail.svg') }}"
                                                    alt="thumbnail-1">
                                            </td>
                                            <td class="project-circle">
                                                <a href="javascript:void(0)" data-category-id="5" class="category-link">
                                                    <img class="category-icon"
                                                        src="{{ asset('frontend/images/institution-icon.svg') }}"
                                                        alt="Institutional projects" data-toggle="tooltip"
                                                        data-bs-placement="bottom" title="Institutional projects">
                                                </a>
                                            </td>

                                            <td class="project-circle">
                                                <a href="javascript:void(0)" data-category-id="6" class="category-link">
                                                    <img class="category-icon"
                                                        src="{{ asset('frontend/images/hospitality-icon.svg') }}"
                                                        alt="Hospitality projects" data-toggle="tooltip"
                                                        data-bs-placement="bottom" title="Hospitality projects">
                                                </a>
                                            </td>
                                            <td class="project-circle">
                                                <a href="javascript:void(0)" data-category-id="7" class="category-link">
                                                    <img class="category-icon"
                                                        src="{{ asset('frontend/images/iterior-icon.svg') }}"
                                                        alt="Interior projects" data-toggle="tooltip"
                                                        data-bs-placement="bottom" title="Interior projects">
                                                </a>
                                            </td>
                                            <td class="project-circle">
                                                <a href="javascript:void(0)" data-category-id="8" class="category-link">
                                                    <img class="category-icon"
                                                        src="{{ asset('frontend/images/other-icon.svg') }}"
                                                        alt="Other projects" data-toggle="tooltip"
                                                        data-bs-placement="bottom" title="Other projects">
                                                </a>
                                            </td>

                                            <td class="project-circle">
                                                <img src="{{ asset('frontend/images/projects-thumbnails/empty-thumbnail.svg') }}"
                                                    alt="thumbnail-3">
                                            </td>
                                            <td class="project-circle">
                                                <img src="{{ asset('frontend/images/projects-thumbnails/empty-thumbnail.svg') }}"
                                                    alt="thumbnail-8">
                                            </td>
                                            <td class="project-circle">
                                                <img src="{{ asset('frontend/images/projects-thumbnails/empty-thumbnail.svg') }}"
                                                    alt="thumbnail-9">
                                            </td>
                                            <td class="project-circle">
                                                <img src="{{ asset('frontend/images/projects-thumbnails/empty-thumbnail.svg') }}"
                                                    alt="thumbnail-10">
                                            </td>
                                            <td class="project-circle">
                                                <img src="{{ asset('frontend/images/projects-thumbnails/empty-thumbnail.svg') }}"
                                                    alt="thumbnail-11">
                                            </td>
                                            <td class="project-circle">
                                                <img src="{{ asset('frontend/images/projects-thumbnails/empty-thumbnail.svg') }}"
                                                    alt="thumbnail-12">
                                            </td>
                                            <td class="project-circle">
                                                <img src="{{ asset('frontend/images/projects-thumbnails/empty-thumbnail.svg') }}"
                                                    alt="thumbnail-13">
                                            </td>
                                            <td class="project-circle">
                                                <img src="{{ asset('frontend/images/projects-thumbnails/empty-thumbnail.svg') }}"
                                                    alt="thumbnail-14">
                                            </td>
                                            <td class="project-circle">
                                                <img src="{{ asset('frontend/images/projects-thumbnails/empty-thumbnail.svg') }}"
                                                    alt="thumbnail-15">
                                            </td>
                                            <td class="project-circle">
                                                <img src="{{ asset('frontend/images/projects-thumbnails/empty-thumbnail.svg') }}"
                                                    alt="thumbnail-16">
                                            </td>
                                        </tr>

                                        <tr>
                                            <td class="project-circle">
                                                <img src="{{ asset('frontend/images/projects-thumbnails/empty-thumbnail.svg') }}"
                                                    alt="thumbnail-1">
                                            </td>
                                            <td class="project-circle">
                                                <img src="{{ asset('frontend/images/projects-thumbnails/empty-thumbnail.svg') }}"
                                                    alt="thumbnail-3">
                                            </td>
                                            <td class="project-circle">
                                                <img src="{{ asset('frontend/images/projects-thumbnails/empty-thumbnail.svg') }}"
                                                    alt="thumbnail-4">
                                            </td>
                                            <td class="project-circle">
                                                <img src="{{ asset('frontend/images/projects-thumbnails/empty-thumbnail.svg') }}"
                                                    alt="thumbnail-5">
                                            </td>
                                            <td class="project-circle">
                                                <img src="{{ asset('frontend/images/projects-thumbnails/empty-thumbnail.svg') }}"
                                                    alt="thumbnail-6">
                                            </td>
                                            <td class="project-circle">
                                                <img src="{{ asset('frontend/images/projects-thumbnails/empty-thumbnail.svg') }}"
                                                    alt="thumbnail-7">
                                            </td>
                                            <td class="project-circle">
                                                <img src="{{ asset('frontend/images/projects-thumbnails/empty-thumbnail.svg') }}"
                                                    alt="thumbnail-8">
                                            </td>
                                            <td class="project-circle">
                                                <img src="{{ asset('frontend/images/projects-thumbnails/empty-thumbnail.svg') }}"
                                                    alt="thumbnail-9">
                                            </td>
                                            <td class="project-circle">
                                                <img src="{{ asset('frontend/images/projects-thumbnails/empty-thumbnail.svg') }}"
                                                    alt="thumbnail-10">
                                            </td>
                                            <td class="project-circle">
                                                <img src="{{ asset('frontend/images/projects-thumbnails/empty-thumbnail.svg') }}"
                                                    alt="thumbnail-11">
                                            </td>
                                            <td class="project-circle">
                                                <img src="{{ asset('frontend/images/projects-thumbnails/empty-thumbnail.svg') }}"
                                                    alt="thumbnail-12">
                                            </td>
                                            <td class="project-circle">
                                                <img src="{{ asset('frontend/images/projects-thumbnails/empty-thumbnail.svg') }}"
                                                    alt="thumbnail-13">
                                            </td>
                                            <td class="project-circle">
                                                <img src="{{ asset('frontend/images/projects-thumbnails/empty-thumbnail.svg') }}"
                                                    alt="thumbnail-14">
                                            </td>
                                            <td class="project-circle">
                                                <img src="{{ asset('frontend/images/projects-thumbnails/empty-thumbnail.svg') }}"
                                                    alt="thumbnail-15">
                                            </td>
                                            <td class="project-circle">
                                                <img src="{{ asset('frontend/images/projects-thumbnails/empty-thumbnail.svg') }}"
                                                    alt="thumbnail-16">
                                            </td>
                                        </tr>

                                        <tr>
                                            <td class="project-circle">
                                                <img src="{{ asset('frontend/images/projects-thumbnails/empty-thumbnail.svg') }}"
                                                    alt="thumbnail-1">
                                            </td>
                                            <td class="project-circle">
                                                <img src="{{ asset('frontend/images/projects-thumbnails/empty-thumbnail.svg') }}"
                                                    alt="thumbnail-3">
                                            </td>
                                            <td class="project-circle">
                                                <img src="{{ asset('frontend/images/projects-thumbnails/empty-thumbnail.svg') }}"
                                                    alt="thumbnail-4">
                                            </td>
                                            <td class="project-circle">
                                                <img src="{{ asset('frontend/images/projects-thumbnails/empty-thumbnail.svg') }}"
                                                    alt="thumbnail-5">
                                            </td>
                                            <td class="project-circle">
                                                <img src="{{ asset('frontend/images/projects-thumbnails/empty-thumbnail.svg') }}"
                                                    alt="thumbnail-6">
                                            </td>
                                            <td class="project-circle">
                                                <img src="{{ asset('frontend/images/projects-thumbnails/empty-thumbnail.svg') }}"
                                                    alt="thumbnail-7">
                                            </td>
                                            <td class="project-circle">
                                                <img src="{{ asset('frontend/images/projects-thumbnails/empty-thumbnail.svg') }}"
                                                    alt="thumbnail-8">
                                            </td>
                                            <td class="project-circle">
                                                <img src="{{ asset('frontend/images/projects-thumbnails/empty-thumbnail.svg') }}"
                                                    alt="thumbnail-9">
                                            </td>
                                            <td class="project-circle">
                                                <img src="{{ asset('frontend/images/projects-thumbnails/empty-thumbnail.svg') }}"
                                                    alt="thumbnail-10">
                                            </td>
                                            <td class="project-circle">
                                                <img src="{{ asset('frontend/images/projects-thumbnails/empty-thumbnail.svg') }}"
                                                    alt="thumbnail-11">
                                            </td>
                                            <td class="project-circle">
                                                <img src="{{ asset('frontend/images/projects-thumbnails/empty-thumbnail.svg') }}"
                                                    alt="thumbnail-12">
                                            </td>
                                            <td class="project-circle">
                                                <img src="{{ asset('frontend/images/projects-thumbnails/empty-thumbnail.svg') }}"
                                                    alt="thumbnail-13">
                                            </td>
                                            <td class="project-circle">
                                                <img src="{{ asset('frontend/images/projects-thumbnails/empty-thumbnail.svg') }}"
                                                    alt="thumbnail-14">
                                            </td>
                                            <td class="project-circle">
                                                <img src="{{ asset('frontend/images/projects-thumbnails/empty-thumbnail.svg') }}"
                                                    alt="thumbnail-15">
                                            </td>
                                            <td class="project-circle">
                                                <img src="{{ asset('frontend/images/projects-thumbnails/empty-thumbnail.svg') }}"
                                                    alt="thumbnail-16">
                                            </td>
                                        </tr>

                                        <tr>
                                            <td class="project-circle">
                                                <img src="{{ asset('frontend/images/projects-thumbnails/empty-thumbnail.svg') }}"
                                                    alt="thumbnail-1">
                                            </td>
                                            <td class="project-circle">
                                                <img src="{{ asset('frontend/images/projects-thumbnails/empty-thumbnail.svg') }}"
                                                    alt="thumbnail-3">
                                            </td>
                                            <td class="project-circle">
                                                <img src="{{ asset('frontend/images/projects-thumbnails/empty-thumbnail.svg') }}"
                                                    alt="thumbnail-4">
                                            </td>
                                            <td class="project-circle">
                                                <img src="{{ asset('frontend/images/projects-thumbnails/empty-thumbnail.svg') }}"
                                                    alt="thumbnail-5">
                                            </td>
                                            <td class="project-circle">
                                                <img src="{{ asset('frontend/images/projects-thumbnails/empty-thumbnail.svg') }}"
                                                    alt="thumbnail-6">
                                            </td>
                                            <td class="project-circle">
                                                <img src="{{ asset('frontend/images/projects-thumbnails/empty-thumbnail.svg') }}"
                                                    alt="thumbnail-7">
                                            </td>
                                            <td class="project-circle">
                                                <img src="{{ asset('frontend/images/projects-thumbnails/empty-thumbnail.svg') }}"
                                                    alt="thumbnail-8">
                                            </td>
                                            <td class="project-circle">
                                                <img src="{{ asset('frontend/images/projects-thumbnails/empty-thumbnail.svg') }}"
                                                    alt="thumbnail-9">
                                            </td>
                                            <td class="project-circle">
                                                <img src="{{ asset('frontend/images/projects-thumbnails/empty-thumbnail.svg') }}"
                                                    alt="thumbnail-10">
                                            </td>
                                            <td class="project-circle">
                                                <img src="{{ asset('frontend/images/projects-thumbnails/empty-thumbnail.svg') }}"
                                                    alt="thumbnail-11">
                                            </td>
                                            <td class="project-circle">
                                                <img src="{{ asset('frontend/images/projects-thumbnails/empty-thumbnail.svg') }}"
                                                    alt="thumbnail-12">
                                            </td>
                                            <td class="project-circle">
                                                <img src="{{ asset('frontend/images/projects-thumbnails/empty-thumbnail.svg') }}"
                                                    alt="thumbnail-13">
                                            </td>
                                            <td class="project-circle">
                                                <img src="{{ asset('frontend/images/projects-thumbnails/empty-thumbnail.svg') }}"
                                                    alt="thumbnail-14">
                                            </td>
                                            <td class="project-circle">
                                                <img src="{{ asset('frontend/images/projects-thumbnails/empty-thumbnail.svg') }}"
                                                    alt="thumbnail-15">
                                            </td>
                                            <td class="project-circle">
                                                <img src="{{ asset('frontend/images/projects-thumbnails/empty-thumbnail.svg') }}"
                                                    alt="thumbnail-16">
                                            </td>
                                        </tr>

                                        <tr>
                                            <td class="project-circle">
                                                <img src="{{ asset('frontend/images/projects-thumbnails/empty-thumbnail.svg') }}"
                                                    alt="thumbnail-1">
                                            </td>
                                            <td class="project-circle">
                                                <img src="{{ asset('frontend/images/projects-thumbnails/empty-thumbnail.svg') }}"
                                                    alt="thumbnail-3">
                                            </td>
                                            <td class="project-circle">
                                                <img src="{{ asset('frontend/images/projects-thumbnails/empty-thumbnail.svg') }}"
                                                    alt="thumbnail-4">
                                            </td>
                                            <td class="project-circle">
                                                <img src="{{ asset('frontend/images/projects-thumbnails/empty-thumbnail.svg') }}"
                                                    alt="thumbnail-5">
                                            </td>
                                            <td class="project-circle">
                                                <img src="{{ asset('frontend/images/projects-thumbnails/empty-thumbnail.svg') }}"
                                                    alt="thumbnail-6">
                                            </td>
                                            <td class="project-circle">
                                                <img src="{{ asset('frontend/images/projects-thumbnails/empty-thumbnail.svg') }}"
                                                    alt="thumbnail-7">
                                            </td>
                                            <td class="project-circle">
                                                <img src="{{ asset('frontend/images/projects-thumbnails/empty-thumbnail.svg') }}"
                                                    alt="thumbnail-8">
                                            </td>
                                            <td class="project-circle">
                                                <img src="{{ asset('frontend/images/projects-thumbnails/empty-thumbnail.svg') }}"
                                                    alt="thumbnail-9">
                                            </td>
                                            <td class="project-circle">
                                                <img src="{{ asset('frontend/images/projects-thumbnails/empty-thumbnail.svg') }}"
                                                    alt="thumbnail-10">
                                            </td>
                                            <td class="project-circle">
                                                <img src="{{ asset('frontend/images/projects-thumbnails/empty-thumbnail.svg') }}"
                                                    alt="thumbnail-11">
                                            </td>
                                            <td class="project-circle">
                                                <img src="{{ asset('frontend/images/projects-thumbnails/empty-thumbnail.svg') }}"
                                                    alt="thumbnail-12">
                                            </td>
                                            <td class="project-circle">
                                                <img src="{{ asset('frontend/images/projects-thumbnails/empty-thumbnail.svg') }}"
                                                    alt="thumbnail-13">
                                            </td>
                                            <td class="project-circle">
                                                <img src="{{ asset('frontend/images/projects-thumbnails/empty-thumbnail.svg') }}"
                                                    alt="thumbnail-14">
                                            </td>
                                            <td class="project-circle">
                                                <img src="{{ asset('frontend/images/projects-thumbnails/empty-thumbnail.svg') }}"
                                                    alt="thumbnail-15">
                                            </td>
                                            <td class="project-circle">
                                                <img src="{{ asset('frontend/images/projects-thumbnails/empty-thumbnail.svg') }}"
                                                    alt="thumbnail-16">
                                            </td>
                                        </tr>

                                        <tr>
                                            <td class="project-circle">
                                                <img src="{{ asset('frontend/images/projects-thumbnails/empty-thumbnail.svg') }}"
                                                    alt="thumbnail-1">
                                            </td>
                                            <td class="project-circle">
                                                <img src="{{ asset('frontend/images/projects-thumbnails/empty-thumbnail.svg') }}"
                                                    alt="thumbnail-3">
                                            </td>
                                            <td class="project-circle">
                                                <img src="{{ asset('frontend/images/projects-thumbnails/empty-thumbnail.svg') }}"
                                                    alt="thumbnail-4">
                                            </td>
                                            <td class="project-circle">
                                                <img src="{{ asset('frontend/images/projects-thumbnails/empty-thumbnail.svg') }}"
                                                    alt="thumbnail-5">
                                            </td>
                                            <td class="project-circle">
                                                <img src="{{ asset('frontend/images/projects-thumbnails/empty-thumbnail.svg') }}"
                                                    alt="thumbnail-6">
                                            </td>
                                            <td class="project-circle">
                                                <img src="{{ asset('frontend/images/projects-thumbnails/empty-thumbnail.svg') }}"
                                                    alt="thumbnail-7">
                                            </td>
                                            <td class="project-circle">
                                                <img src="{{ asset('frontend/images/projects-thumbnails/empty-thumbnail.svg') }}"
                                                    alt="thumbnail-8">
                                            </td>
                                            <td class="project-circle">
                                                <img src="{{ asset('frontend/images/projects-thumbnails/empty-thumbnail.svg') }}"
                                                    alt="thumbnail-9">
                                            </td>
                                            <td class="project-circle">
                                                <img src="{{ asset('frontend/images/projects-thumbnails/empty-thumbnail.svg') }}"
                                                    alt="thumbnail-10">
                                            </td>
                                            <td class="project-circle">
                                                <img src="{{ asset('frontend/images/projects-thumbnails/empty-thumbnail.svg') }}"
                                                    alt="thumbnail-11">
                                            </td>
                                            <td class="project-circle">
                                                <img src="{{ asset('frontend/images/projects-thumbnails/empty-thumbnail.svg') }}"
                                                    alt="thumbnail-12">
                                            </td>
                                            <td class="project-circle">
                                                <img src="{{ asset('frontend/images/projects-thumbnails/empty-thumbnail.svg') }}"
                                                    alt="thumbnail-13">
                                            </td>
                                            <td class="project-circle">
                                                <img src="{{ asset('frontend/images/projects-thumbnails/empty-thumbnail.svg') }}"
                                                    alt="thumbnail-14">
                                            </td>
                                            <td class="project-circle">
                                                <img src="{{ asset('frontend/images/projects-thumbnails/empty-thumbnail.svg') }}"
                                                    alt="thumbnail-15">
                                            </td>
                                            <td class="project-circle">
                                                <img src="{{ asset('frontend/images/projects-thumbnails/empty-thumbnail.svg') }}"
                                                    alt="thumbnail-16">
                                            </td>
                                        </tr>

                                        <tr>
                                            <td class="project-circle">
                                                <img src="{{ asset('frontend/images/projects-thumbnails/empty-thumbnail.svg') }}"
                                                    alt="thumbnail-1">
                                            </td>
                                            <td class="project-circle">
                                                <img src="{{ asset('frontend/images/projects-thumbnails/empty-thumbnail.svg') }}"
                                                    alt="thumbnail-3">
                                            </td>
                                            <td class="project-circle">
                                                <img src="{{ asset('frontend/images/projects-thumbnails/empty-thumbnail.svg') }}"
                                                    alt="thumbnail-4">
                                            </td>
                                            <td class="project-circle">
                                                <img src="{{ asset('frontend/images/projects-thumbnails/empty-thumbnail.svg') }}"
                                                    alt="thumbnail-5">
                                            </td>
                                            <td class="project-circle">
                                                <img src="{{ asset('frontend/images/projects-thumbnails/empty-thumbnail.svg') }}"
                                                    alt="thumbnail-6">
                                            </td>
                                            <td class="project-circle">
                                                <img src="{{ asset('frontend/images/projects-thumbnails/empty-thumbnail.svg') }}"
                                                    alt="thumbnail-7">
                                            </td>
                                            <td class="project-circle">
                                                <img src="{{ asset('frontend/images/projects-thumbnails/empty-thumbnail.svg') }}"
                                                    alt="thumbnail-8">
                                            </td>
                                            <td class="project-circle">
                                                <img src="{{ asset('frontend/images/projects-thumbnails/empty-thumbnail.svg') }}"
                                                    alt="thumbnail-9">
                                            </td>
                                            <td class="project-circle">
                                                <img src="{{ asset('frontend/images/projects-thumbnails/empty-thumbnail.svg') }}"
                                                    alt="thumbnail-10">
                                            </td>
                                            <td class="project-circle">
                                                <img src="{{ asset('frontend/images/projects-thumbnails/empty-thumbnail.svg') }}"
                                                    alt="thumbnail-11">
                                            </td>
                                            <td class="project-circle">
                                                <img src="{{ asset('frontend/images/projects-thumbnails/empty-thumbnail.svg') }}"
                                                    alt="thumbnail-12">
                                            </td>
                                            <td class="project-circle">
                                                <img src="{{ asset('frontend/images/projects-thumbnails/empty-thumbnail.svg') }}"
                                                    alt="thumbnail-13">
                                            </td>
                                            <td class="project-circle">
                                                <img src="{{ asset('frontend/images/projects-thumbnails/empty-thumbnail.svg') }}"
                                                    alt="thumbnail-14">
                                            </td>
                                            <td class="project-circle">
                                                <img src="{{ asset('frontend/images/projects-thumbnails/empty-thumbnail.svg') }}"
                                                    alt="thumbnail-15">
                                            </td>
                                            <td class="project-circle">
                                                <img src="{{ asset('frontend/images/projects-thumbnails/empty-thumbnail.svg') }}"
                                                    alt="thumbnail-16">
                                            </td>
                                        </tr>

                                        <tr>
                                            <td class="project-circle">
                                                <img src="{{ asset('frontend/images/projects-thumbnails/empty-thumbnail.svg') }}"
                                                    alt="thumbnail-1">
                                            </td>
                                            <td class="project-circle">
                                                <img src="{{ asset('frontend/images/projects-thumbnails/empty-thumbnail.svg') }}"
                                                    alt="thumbnail-3">
                                            </td>
                                            <td class="project-circle">
                                                <img src="{{ asset('frontend/images/projects-thumbnails/empty-thumbnail.svg') }}"
                                                    alt="thumbnail-4">
                                            </td>
                                            <td class="project-circle">
                                                <img src="{{ asset('frontend/images/projects-thumbnails/empty-thumbnail.svg') }}"
                                                    alt="thumbnail-5">
                                            </td>
                                            <td class="project-circle">
                                                <img src="{{ asset('frontend/images/projects-thumbnails/empty-thumbnail.svg') }}"
                                                    alt="thumbnail-6">
                                            </td>
                                            <td class="project-circle">
                                                <img src="{{ asset('frontend/images/projects-thumbnails/empty-thumbnail.svg') }}"
                                                    alt="thumbnail-7">
                                            </td>
                                            <td class="project-circle">
                                                <img src="{{ asset('frontend/images/projects-thumbnails/empty-thumbnail.svg') }}"
                                                    alt="thumbnail-8">
                                            </td>
                                            <td class="project-circle">
                                                <img src="{{ asset('frontend/images/projects-thumbnails/empty-thumbnail.svg') }}"
                                                    alt="thumbnail-9">
                                            </td>
                                            <td class="project-circle">
                                                <img src="{{ asset('frontend/images/projects-thumbnails/empty-thumbnail.svg') }}"
                                                    alt="thumbnail-10">
                                            </td>
                                            <td class="project-circle">
                                                <img src="{{ asset('frontend/images/projects-thumbnails/empty-thumbnail.svg') }}"
                                                    alt="thumbnail-11">
                                            </td>
                                            <td class="project-circle">
                                                <img src="{{ asset('frontend/images/projects-thumbnails/empty-thumbnail.svg') }}"
                                                    alt="thumbnail-12">
                                            </td>
                                            <td class="project-circle">
                                                <img src="{{ asset('frontend/images/projects-thumbnails/empty-thumbnail.svg') }}"
                                                    alt="thumbnail-13">
                                            </td>
                                            <td class="project-circle">
                                                <img src="{{ asset('frontend/images/projects-thumbnails/empty-thumbnail.svg') }}"
                                                    alt="thumbnail-14">
                                            </td>
                                            <td class="project-circle">
                                                <img src="{{ asset('frontend/images/projects-thumbnails/empty-thumbnail.svg') }}"
                                                    alt="thumbnail-15">
                                            </td>
                                            <td class="project-circle">
                                                <img src="{{ asset('frontend/images/projects-thumbnails/empty-thumbnail.svg') }}"
                                                    alt="thumbnail-16">
                                            </td>
                                        </tr>

                                        <tr>
                                            <td class="project-circle">
                                                <img src="{{ asset('frontend/images/projects-thumbnails/empty-thumbnail.svg') }}"
                                                    alt="thumbnail-1">
                                            </td>
                                            <td class="project-circle">
                                                <img src="{{ asset('frontend/images/projects-thumbnails/empty-thumbnail.svg') }}"
                                                    alt="thumbnail-3">
                                            </td>
                                            <td class="project-circle">
                                                <img src="{{ asset('frontend/images/projects-thumbnails/empty-thumbnail.svg') }}"
                                                    alt="thumbnail-4">
                                            </td>
                                            <td class="project-circle">
                                                <img src="{{ asset('frontend/images/projects-thumbnails/empty-thumbnail.svg') }}"
                                                    alt="thumbnail-5">
                                            </td>
                                            <td class="project-circle">
                                                <img src="{{ asset('frontend/images/projects-thumbnails/empty-thumbnail.svg') }}"
                                                    alt="thumbnail-6">
                                            </td>
                                            <td class="project-circle">
                                                <img src="{{ asset('frontend/images/projects-thumbnails/empty-thumbnail.svg') }}"
                                                    alt="thumbnail-7">
                                            </td>
                                            <td class="project-circle">
                                                <img src="{{ asset('frontend/images/projects-thumbnails/empty-thumbnail.svg') }}"
                                                    alt="thumbnail-8">
                                            </td>
                                            <td class="project-circle">
                                                <img src="{{ asset('frontend/images/projects-thumbnails/empty-thumbnail.svg') }}"
                                                    alt="thumbnail-9">
                                            </td>
                                            <td class="project-circle">
                                                <img src="{{ asset('frontend/images/projects-thumbnails/empty-thumbnail.svg') }}"
                                                    alt="thumbnail-10">
                                            </td>
                                            <td class="project-circle">
                                                <img src="{{ asset('frontend/images/projects-thumbnails/empty-thumbnail.svg') }}"
                                                    alt="thumbnail-11">
                                            </td>
                                            <td class="project-circle">
                                                <img src="{{ asset('frontend/images/projects-thumbnails/empty-thumbnail.svg') }}"
                                                    alt="thumbnail-12">
                                            </td>
                                            <td class="project-circle">
                                                <img src="{{ asset('frontend/images/projects-thumbnails/empty-thumbnail.svg') }}"
                                                    alt="thumbnail-13">
                                            </td>
                                            <td class="project-circle">
                                                <img src="{{ asset('frontend/images/projects-thumbnails/empty-thumbnail.svg') }}"
                                                    alt="thumbnail-14">
                                            </td>
                                            <td class="project-circle">
                                                <img src="{{ asset('frontend/images/projects-thumbnails/empty-thumbnail.svg') }}"
                                                    alt="thumbnail-15">
                                            </td>
                                            <td class="project-circle">
                                                <img src="{{ asset('frontend/images/projects-thumbnails/empty-thumbnail.svg') }}"
                                                    alt="thumbnail-16">
                                            </td>
                                        </tr>

                                        <tr>
                                            <td class="project-circle">
                                                <img src="{{ asset('frontend/images/projects-thumbnails/empty-thumbnail.svg') }}"
                                                    alt="thumbnail-1">
                                            </td>
                                            <td class="project-circle">
                                                <img src="{{ asset('frontend/images/projects-thumbnails/empty-thumbnail.svg') }}"
                                                    alt="thumbnail-3">
                                            </td>
                                            <td class="project-circle">
                                                <img src="{{ asset('frontend/images/projects-thumbnails/empty-thumbnail.svg') }}"
                                                    alt="thumbnail-4">
                                            </td>
                                            <td class="project-circle">
                                                <img src="{{ asset('frontend/images/projects-thumbnails/empty-thumbnail.svg') }}"
                                                    alt="thumbnail-5">
                                            </td>
                                            <td class="project-circle">
                                                <img src="{{ asset('frontend/images/projects-thumbnails/empty-thumbnail.svg') }}"
                                                    alt="thumbnail-6">
                                            </td>
                                            <td class="project-circle">
                                                <img src="{{ asset('frontend/images/projects-thumbnails/empty-thumbnail.svg') }}"
                                                    alt="thumbnail-7">
                                            </td>
                                            <td class="project-circle">
                                                <img src="{{ asset('frontend/images/projects-thumbnails/empty-thumbnail.svg') }}"
                                                    alt="thumbnail-8">
                                            </td>
                                            <td class="project-circle">
                                                <img src="{{ asset('frontend/images/projects-thumbnails/empty-thumbnail.svg') }}"
                                                    alt="thumbnail-9">
                                            </td>
                                            <td class="project-circle">
                                                <img src="{{ asset('frontend/images/projects-thumbnails/empty-thumbnail.svg') }}"
                                                    alt="thumbnail-10">
                                            </td>
                                            <td class="project-circle">
                                                <img src="{{ asset('frontend/images/projects-thumbnails/empty-thumbnail.svg') }}"
                                                    alt="thumbnail-11">
                                            </td>
                                            <td class="project-circle">
                                                <img src="{{ asset('frontend/images/projects-thumbnails/empty-thumbnail.svg') }}"
                                                    alt="thumbnail-12">
                                            </td>
                                            <td class="project-circle">
                                                <img src="{{ asset('frontend/images/projects-thumbnails/empty-thumbnail.svg') }}"
                                                    alt="thumbnail-13">
                                            </td>
                                            <td class="project-circle">
                                                <img src="{{ asset('frontend/images/projects-thumbnails/empty-thumbnail.svg') }}"
                                                    alt="thumbnail-14">
                                            </td>
                                            <td class="project-circle">
                                                <img src="{{ asset('frontend/images/projects-thumbnails/empty-thumbnail.svg') }}"
                                                    alt="thumbnail-15">
                                            </td>
                                            <td class="project-circle">
                                                <img src="{{ asset('frontend/images/projects-thumbnails/empty-thumbnail.svg') }}"
                                                    alt="thumbnail-16">
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
                                                <img src="{{ asset('frontend/images/projects-thumbnails/empty-thumbnail.svg') }}"
                                                    alt="thumbnail-1">
                                            </td>
                                            <td class="project-circle">
                                                <img src="{{ asset('frontend/images/projects-thumbnails/empty-thumbnail.svg') }}"
                                                    alt="thumbnail-1">
                                            </td>
                                            <td class="project-circle">
                                                <img src="{{ asset('frontend/images/projects-thumbnails/empty-thumbnail.svg') }}"
                                                    alt="thumbnail-2">
                                            </td>
                                            <td class="project-circle">
                                                <img src="{{ asset('frontend/images/projects-thumbnails/empty-thumbnail.svg') }}"
                                                    alt="thumbnail-3">
                                            </td>
                                            <td class="project-circle">
                                                <img src="{{ asset('frontend/images/projects-thumbnails/empty-thumbnail.svg') }}"
                                                    alt="thumbnail-4">
                                            </td>
                                            <td class="project-circle">
                                                <img src="{{ asset('frontend/images/projects-thumbnails/empty-thumbnail.svg') }}"
                                                    alt="thumbnail-5">
                                            </td>
                                            <td class="project-circle">
                                                <img src="{{ asset('frontend/images/projects-thumbnails/empty-thumbnail.svg') }}"
                                                    alt="thumbnail-6">
                                            </td>
                                            <td class="project-circle">
                                                <img src="{{ asset('frontend/images/projects-thumbnails/empty-thumbnail.svg') }}"
                                                    alt="thumbnail-7">
                                            </td>
                                            <td class="project-circle">
                                                <img src="{{ asset('frontend/images/projects-thumbnails/empty-thumbnail.svg') }}"
                                                    alt="thumbnail-8">
                                            </td>
                                            <td class="project-circle">
                                                <img src="{{ asset('frontend/images/projects-thumbnails/empty-thumbnail.svg') }}"
                                                    alt="thumbnail-9">
                                            </td>
                                            <td class="project-circle">
                                                <img src="{{ asset('frontend/images/projects-thumbnails/empty-thumbnail.svg') }}"
                                                    alt="thumbnail-10">
                                            </td>
                                            <td class="project-circle">
                                                <img src="{{ asset('frontend/images/projects-thumbnails/empty-thumbnail.svg') }}"
                                                    alt="thumbnail-11">
                                            </td>
                                            <td class="project-circle">
                                                <img src="{{ asset('frontend/images/projects-thumbnails/empty-thumbnail.svg') }}"
                                                    alt="thumbnail-12">
                                            </td>
                                            <td class="project-circle">
                                                <img src="{{ asset('frontend/images/projects-thumbnails/empty-thumbnail.svg') }}"
                                                    alt="thumbnail-13">
                                            </td>
                                            <td class="project-circle">
                                                <img src="{{ asset('frontend/images/projects-thumbnails/empty-thumbnail.svg') }}"
                                                    alt="thumbnail-14">
                                            </td>
                                            <td class="project-circle">
                                                <img src="{{ asset('frontend/images/projects-thumbnails/empty-thumbnail.svg') }}"
                                                    alt="thumbnail-15">
                                            </td>
                                            <td class="project-circle">
                                                <img src="{{ asset('frontend/images/projects-thumbnails/empty-thumbnail.svg') }}"
                                                    alt="thumbnail-16">
                                            </td>
                                        </tr>

                                        <tr>
                                            <td class="project-circle">
                                                <img src="{{ asset('frontend/images/projects-thumbnails/empty-thumbnail.svg') }}"
                                                    alt="thumbnail-1">
                                            </td>
                                            <td class="project-circle">
                                                <img src="{{ asset('frontend/images/projects-thumbnails/empty-thumbnail.svg') }}"
                                                    alt="thumbnail-1">
                                            </td>
                                            <td class="project-circle">
                                                <img src="{{ asset('frontend/images/projects-thumbnails/empty-thumbnail.svg') }}"
                                                    alt="thumbnail-2">
                                            </td>
                                            <td class="project-circle">
                                                <img src="{{ asset('frontend/images/projects-thumbnails/empty-thumbnail.svg') }}"
                                                    alt="thumbnail-3">
                                            </td>
                                            <td class="project-circle">
                                                <img src="{{ asset('frontend/images/projects-thumbnails/empty-thumbnail.svg') }}"
                                                    alt="thumbnail-4">
                                            </td>
                                            <td class="project-circle">
                                                <img src="{{ asset('frontend/images/projects-thumbnails/empty-thumbnail.svg') }}"
                                                    alt="thumbnail-5">
                                            </td>
                                            <td class="project-circle">
                                                <img src="{{ asset('frontend/images/projects-thumbnails/empty-thumbnail.svg') }}"
                                                    alt="thumbnail-6">
                                            </td>
                                            <td class="project-circle">
                                                <img src="{{ asset('frontend/images/projects-thumbnails/empty-thumbnail.svg') }}"
                                                    alt="thumbnail-7">
                                            </td>
                                            <td class="project-circle">
                                                <img src="{{ asset('frontend/images/projects-thumbnails/empty-thumbnail.svg') }}"
                                                    alt="thumbnail-8">
                                            </td>
                                            <td class="project-circle">
                                                <img src="{{ asset('frontend/images/projects-thumbnails/empty-thumbnail.svg') }}"
                                                    alt="thumbnail-9">
                                            </td>
                                            <td class="project-circle">
                                                <img src="{{ asset('frontend/images/projects-thumbnails/empty-thumbnail.svg') }}"
                                                    alt="thumbnail-10">
                                            </td>
                                            <td class="project-circle">
                                                <img src="{{ asset('frontend/images/projects-thumbnails/empty-thumbnail.svg') }}"
                                                    alt="thumbnail-11">
                                            </td>
                                            <td class="project-circle">
                                                <img src="{{ asset('frontend/images/projects-thumbnails/empty-thumbnail.svg') }}"
                                                    alt="thumbnail-12">
                                            </td>
                                            <td class="project-circle">
                                                <img src="{{ asset('frontend/images/projects-thumbnails/empty-thumbnail.svg') }}"
                                                    alt="thumbnail-13">
                                            </td>
                                            <td class="project-circle">
                                                <img src="{{ asset('frontend/images/projects-thumbnails/empty-thumbnail.svg') }}"
                                                    alt="thumbnail-14">
                                            </td>
                                            <td class="project-circle">
                                                <img src="{{ asset('frontend/images/projects-thumbnails/empty-thumbnail.svg') }}"
                                                    alt="thumbnail-15">
                                            </td>
                                            <td class="project-circle">
                                                <img src="{{ asset('frontend/images/projects-thumbnails/empty-thumbnail.svg') }}"
                                                    alt="thumbnail-16">
                                            </td>
                                        </tr>

                                        <tr>
                                            <td class="project-circle">
                                                <img src="{{ asset('frontend/images/projects-thumbnails/empty-thumbnail.svg') }}"
                                                    alt="thumbnail-1">
                                            </td>
                                            <td class="project-circle">
                                                <img src="{{ asset('frontend/images/projects-thumbnails/empty-thumbnail.svg') }}"
                                                    alt="thumbnail-1">
                                            </td>
                                            <td class="project-circle">
                                                <a href="{{ route('project.list', ['id' => '1']) }}">
                                                    <img src="{{ asset('frontend/images/residential-icon.svg') }}"
                                                        alt="Residential projects" data-toggle="tooltip"
                                                        data-bs-placement="bottom" title="Residential projects">
                                                </a>
                                            </td>
                                            <td class="project-circle">
                                                <a href="{{ route('project.list', ['id' => '2']) }}">
                                                    <img src="{{ asset('frontend/images/comercial-icon.svg') }}"
                                                        alt="Commercial projects" data-toggle="tooltip"
                                                        data-bs-placement="bottom" title="Commercial projects">
                                                </a>
                                            </td>

                                            <td class="project-circle">
                                                <a href="{{ route('project.list', ['id' => '3']) }}">
                                                    <img class="category-icon"
                                                        src="{{ asset('frontend/images/industrial-icon.svg') }}"
                                                        alt="Industrial projects" data-toggle="tooltip"
                                                        data-bs-placement="bottom" title="Industrial projects">
                                                </a>
                                            </td>
                                            <td class="project-circle">
                                                <a href="{{ route('project.list', ['id' => '4']) }}">
                                                    <img class="category-icon"
                                                        src="{{ asset('frontend/images/health-icon.svg') }}"
                                                        alt="Health projects" data-toggle="tooltip"
                                                        data-bs-placement="bottom" title="Health projects">
                                                </a>
                                            </td>

                                            {{-- <td class="project-circle">
                          <a href="">
                            <img src="{{ asset('frontend/images/hospitality-icon.svg') }}" alt="Hospitality" data-toggle="tooltip" data-bs-placement="bottom" title="Hospitality">
                          </a>
                        </td> --}}
                                            {{-- <td class="project-circle">
                          <a href="">
                            <img src="{{ asset('frontend/images/hospitality-icon.svg') }}" alt="Hospitality" >
                          </a>
                        </td> --}}
                                            <td class="project-circle">
                                                <img src="{{ asset('frontend/images/projects-thumbnails/empty-thumbnail.svg') }}"
                                                    alt="thumbnail-8">
                                            </td>
                                            <td class="project-circle">
                                                <img src="{{ asset('frontend/images/projects-thumbnails/empty-thumbnail.svg') }}"
                                                    alt="thumbnail-13">
                                            </td>
                                            <td class="project-circle">
                                                <img src="{{ asset('frontend/images/projects-thumbnails/empty-thumbnail.svg') }}"
                                                    alt="thumbnail-13">
                                            </td>
                                            <td class="project-circle">
                                                <img src="{{ asset('frontend/images/projects-thumbnails/empty-thumbnail.svg') }}"
                                                    alt="thumbnail-13">
                                            </td>
                                            <td class="project-circle">
                                                <img src="{{ asset('frontend/images/projects-thumbnails/empty-thumbnail.svg') }}"
                                                    alt="thumbnail-13">
                                            </td>
                                            <td class="project-circle">
                                                <img src="{{ asset('frontend/images/projects-thumbnails/empty-thumbnail.svg') }}"
                                                    alt="thumbnail-13">
                                            </td>
                                            <td class="project-circle">
                                                <img src="{{ asset('frontend/images/projects-thumbnails/empty-thumbnail.svg') }}"
                                                    alt="thumbnail-14">
                                            </td>
                                            <td class="project-circle">
                                                <img src="{{ asset('frontend/images/projects-thumbnails/empty-thumbnail.svg') }}"
                                                    alt="thumbnail-15">
                                            </td>
                                            <td class="project-circle">
                                                <img src="{{ asset('frontend/images/projects-thumbnails/empty-thumbnail.svg') }}"
                                                    alt="thumbnail-16">
                                            </td>
                                        </tr>

                                        <tr>
                                            <td class="project-circle">
                                                <img src="{{ asset('frontend/images/projects-thumbnails/empty-thumbnail.svg') }}"
                                                    alt="thumbnail-1">
                                            </td>
                                            <td class="project-circle">
                                                <img src="{{ asset('frontend/images/projects-thumbnails/empty-thumbnail.svg') }}"
                                                    alt="thumbnail-3">
                                            </td>
                                            <td class="project-circle">
                                                <a href="{{ route('project.list', ['id' => '5']) }}">
                                                    <img src="{{ asset('frontend/images/institution-icon.svg') }}"
                                                        alt="Institution projects" data-toggle="tooltip"
                                                        data-bs-placement="bottom" title="Institution projects">
                                                </a>
                                            </td>
                                            <td class="project-circle">
                                                <a href="{{ route('project.list', ['id' => '6']) }}">
                                                    <img src="{{ asset('frontend/images/hospitality-icon.svg') }}"
                                                        alt="Hospitality projects" data-toggle="tooltip"
                                                        data-bs-placement="bottom" title="Hospitality projects">
                                                </a>
                                            </td>

                                            <td class="project-circle">
                                                <a href="{{ route('project.list', ['id' => '7']) }}">
                                                    <img class="category-icon"
                                                        src="{{ asset('frontend/images/iterior-icon.svg') }}"
                                                        alt="Interior projects" data-toggle="tooltip"
                                                        data-bs-placement="bottom" title="Interior projects">
                                                </a>
                                            </td>
                                            <td class="project-circle">
                                                <a href="{{ route('project.list', ['id' => '8']) }}">
                                                    <img class="category-icon"
                                                        src="{{ asset('frontend/images/other-icon.svg') }}"
                                                        alt="Other projects" data-toggle="tooltip"
                                                        data-bs-placement="bottom" title="Other projects">
                                                </a>
                                            </td>
                                            <td class="project-circle">
                                                <img src="{{ asset('frontend/images/projects-thumbnails/empty-thumbnail.svg') }}"
                                                    alt="thumbnail-8">
                                            </td>
                                            <td class="project-circle">
                                                <img src="{{ asset('frontend/images/projects-thumbnails/empty-thumbnail.svg') }}"
                                                    alt="thumbnail-9">
                                            </td>
                                            <td class="project-circle">
                                                <img src="{{ asset('frontend/images/projects-thumbnails/empty-thumbnail.svg') }}"
                                                    alt="thumbnail-10">
                                            </td>
                                            <td class="project-circle">
                                                <img src="{{ asset('frontend/images/projects-thumbnails/empty-thumbnail.svg') }}"
                                                    alt="thumbnail-11">
                                            </td>
                                            <td class="project-circle">
                                                <img src="{{ asset('frontend/images/projects-thumbnails/empty-thumbnail.svg') }}"
                                                    alt="thumbnail-12">
                                            </td>
                                            <td class="project-circle">
                                                <img src="{{ asset('frontend/images/projects-thumbnails/empty-thumbnail.svg') }}"
                                                    alt="thumbnail-13">
                                            </td>
                                            <td class="project-circle">
                                                <img src="{{ asset('frontend/images/projects-thumbnails/empty-thumbnail.svg') }}"
                                                    alt="thumbnail-14">
                                            </td>
                                            <td class="project-circle">
                                                <img src="{{ asset('frontend/images/projects-thumbnails/empty-thumbnail.svg') }}"
                                                    alt="thumbnail-15">
                                            </td>
                                            <td class="project-circle">
                                                <img src="{{ asset('frontend/images/projects-thumbnails/empty-thumbnail.svg') }}"
                                                    alt="thumbnail-16">
                                            </td>
                                        </tr>

                                        <tr>
                                            <td class="project-circle">
                                                <img src="{{ asset('frontend/images/projects-thumbnails/empty-thumbnail.svg') }}"
                                                    alt="thumbnail-1">
                                            </td>
                                            <td class="project-circle">
                                                <img src="{{ asset('frontend/images/projects-thumbnails/empty-thumbnail.svg') }}"
                                                    alt="thumbnail-3">
                                            </td>
                                            <td class="project-circle">
                                                <img src="{{ asset('frontend/images/projects-thumbnails/empty-thumbnail.svg') }}"
                                                    alt="thumbnail-4">
                                            </td>
                                            <td class="project-circle">
                                                <img src="{{ asset('frontend/images/projects-thumbnails/empty-thumbnail.svg') }}"
                                                    alt="thumbnail-5">
                                            </td>
                                            <td class="project-circle">
                                                <img src="{{ asset('frontend/images/projects-thumbnails/empty-thumbnail.svg') }}"
                                                    alt="thumbnail-6">
                                            </td>
                                            <td class="project-circle">
                                                <img src="{{ asset('frontend/images/projects-thumbnails/empty-thumbnail.svg') }}"
                                                    alt="thumbnail-7">
                                            </td>
                                            <td class="project-circle">
                                                <img src="{{ asset('frontend/images/projects-thumbnails/empty-thumbnail.svg') }}"
                                                    alt="thumbnail-8">
                                            </td>
                                            <td class="project-circle">
                                                <img src="{{ asset('frontend/images/projects-thumbnails/empty-thumbnail.svg') }}"
                                                    alt="thumbnail-9">
                                            </td>
                                            <td class="project-circle">
                                                <img src="{{ asset('frontend/images/projects-thumbnails/empty-thumbnail.svg') }}"
                                                    alt="thumbnail-10">
                                            </td>
                                            <td class="project-circle">
                                                <img src="{{ asset('frontend/images/projects-thumbnails/empty-thumbnail.svg') }}"
                                                    alt="thumbnail-11">
                                            </td>
                                            <td class="project-circle">
                                                <img src="{{ asset('frontend/images/projects-thumbnails/empty-thumbnail.svg') }}"
                                                    alt="thumbnail-12">
                                            </td>
                                            <td class="project-circle">
                                                <img src="{{ asset('frontend/images/projects-thumbnails/empty-thumbnail.svg') }}"
                                                    alt="thumbnail-13">
                                            </td>
                                            <td class="project-circle">
                                                <img src="{{ asset('frontend/images/projects-thumbnails/empty-thumbnail.svg') }}"
                                                    alt="thumbnail-14">
                                            </td>
                                            <td class="project-circle">
                                                <img src="{{ asset('frontend/images/projects-thumbnails/empty-thumbnail.svg') }}"
                                                    alt="thumbnail-15">
                                            </td>
                                            <td class="project-circle">
                                                <img src="{{ asset('frontend/images/projects-thumbnails/empty-thumbnail.svg') }}"
                                                    alt="thumbnail-16">
                                            </td>
                                        </tr>

                                        <tr>
                                            <td class="project-circle">
                                                <img src="{{ asset('frontend/images/projects-thumbnails/empty-thumbnail.svg') }}"
                                                    alt="thumbnail-1">
                                            </td>
                                            <td class="project-circle">
                                                <img src="{{ asset('frontend/images/projects-thumbnails/empty-thumbnail.svg') }}"
                                                    alt="thumbnail-3">
                                            </td>
                                            <td class="project-circle">
                                                <img src="{{ asset('frontend/images/projects-thumbnails/empty-thumbnail.svg') }}"
                                                    alt="thumbnail-4">
                                            </td>
                                            <td class="project-circle">
                                                <img src="{{ asset('frontend/images/projects-thumbnails/empty-thumbnail.svg') }}"
                                                    alt="thumbnail-5">
                                            </td>
                                            <td class="project-circle">
                                                <img src="{{ asset('frontend/images/projects-thumbnails/empty-thumbnail.svg') }}"
                                                    alt="thumbnail-6">
                                            </td>
                                            <td class="project-circle">
                                                <img src="{{ asset('frontend/images/projects-thumbnails/empty-thumbnail.svg') }}"
                                                    alt="thumbnail-7">
                                            </td>
                                            <td class="project-circle">
                                                <img src="{{ asset('frontend/images/projects-thumbnails/empty-thumbnail.svg') }}"
                                                    alt="thumbnail-8">
                                            </td>
                                            <td class="project-circle">
                                                <img src="{{ asset('frontend/images/projects-thumbnails/empty-thumbnail.svg') }}"
                                                    alt="thumbnail-9">
                                            </td>
                                            <td class="project-circle">
                                                <img src="{{ asset('frontend/images/projects-thumbnails/empty-thumbnail.svg') }}"
                                                    alt="thumbnail-10">
                                            </td>
                                            <td class="project-circle">
                                                <img src="{{ asset('frontend/images/projects-thumbnails/empty-thumbnail.svg') }}"
                                                    alt="thumbnail-11">
                                            </td>
                                            <td class="project-circle">
                                                <img src="{{ asset('frontend/images/projects-thumbnails/empty-thumbnail.svg') }}"
                                                    alt="thumbnail-12">
                                            </td>
                                            <td class="project-circle">
                                                <img src="{{ asset('frontend/images/projects-thumbnails/empty-thumbnail.svg') }}"
                                                    alt="thumbnail-13">
                                            </td>
                                            <td class="project-circle">
                                                <img src="{{ asset('frontend/images/projects-thumbnails/empty-thumbnail.svg') }}"
                                                    alt="thumbnail-14">
                                            </td>
                                            <td class="project-circle">
                                                <img src="{{ asset('frontend/images/projects-thumbnails/empty-thumbnail.svg') }}"
                                                    alt="thumbnail-15">
                                            </td>
                                            <td class="project-circle">
                                                <img src="{{ asset('frontend/images/projects-thumbnails/empty-thumbnail.svg') }}"
                                                    alt="thumbnail-16">
                                            </td>
                                        </tr>

                                        <tr>
                                            <td class="project-circle">
                                                <img src="{{ asset('frontend/images/projects-thumbnails/empty-thumbnail.svg') }}"
                                                    alt="thumbnail-1">
                                            </td>
                                            <td class="project-circle">
                                                <img src="{{ asset('frontend/images/projects-thumbnails/empty-thumbnail.svg') }}"
                                                    alt="thumbnail-3">
                                            </td>
                                            <td class="project-circle">
                                                <img src="{{ asset('frontend/images/projects-thumbnails/empty-thumbnail.svg') }}"
                                                    alt="thumbnail-4">
                                            </td>
                                            <td class="project-circle">
                                                <img src="{{ asset('frontend/images/projects-thumbnails/empty-thumbnail.svg') }}"
                                                    alt="thumbnail-5">
                                            </td>
                                            <td class="project-circle">
                                                <img src="{{ asset('frontend/images/projects-thumbnails/empty-thumbnail.svg') }}"
                                                    alt="thumbnail-6">
                                            </td>
                                            <td class="project-circle">
                                                <img src="{{ asset('frontend/images/projects-thumbnails/empty-thumbnail.svg') }}"
                                                    alt="thumbnail-7">
                                            </td>
                                            <td class="project-circle">
                                                <img src="{{ asset('frontend/images/projects-thumbnails/empty-thumbnail.svg') }}"
                                                    alt="thumbnail-8">
                                            </td>
                                            <td class="project-circle">
                                                <img src="{{ asset('frontend/images/projects-thumbnails/empty-thumbnail.svg') }}"
                                                    alt="thumbnail-9">
                                            </td>
                                            <td class="project-circle">
                                                <img src="{{ asset('frontend/images/projects-thumbnails/empty-thumbnail.svg') }}"
                                                    alt="thumbnail-10">
                                            </td>
                                            <td class="project-circle">
                                                <img src="{{ asset('frontend/images/projects-thumbnails/empty-thumbnail.svg') }}"
                                                    alt="thumbnail-11">
                                            </td>
                                            <td class="project-circle">
                                                <img src="{{ asset('frontend/images/projects-thumbnails/empty-thumbnail.svg') }}"
                                                    alt="thumbnail-12">
                                            </td>
                                            <td class="project-circle">
                                                <img src="{{ asset('frontend/images/projects-thumbnails/empty-thumbnail.svg') }}"
                                                    alt="thumbnail-13">
                                            </td>
                                            <td class="project-circle">
                                                <img src="{{ asset('frontend/images/projects-thumbnails/empty-thumbnail.svg') }}"
                                                    alt="thumbnail-14">
                                            </td>
                                            <td class="project-circle">
                                                <img src="{{ asset('frontend/images/projects-thumbnails/empty-thumbnail.svg') }}"
                                                    alt="thumbnail-15">
                                            </td>
                                            <td class="project-circle">
                                                <img src="{{ asset('frontend/images/projects-thumbnails/empty-thumbnail.svg') }}"
                                                    alt="thumbnail-16">
                                            </td>
                                        </tr>

                                        <tr>
                                            <td class="project-circle">
                                                <img src="{{ asset('frontend/images/projects-thumbnails/empty-thumbnail.svg') }}"
                                                    alt="thumbnail-1">
                                            </td>
                                            <td class="project-circle">
                                                <img src="{{ asset('frontend/images/projects-thumbnails/empty-thumbnail.svg') }}"
                                                    alt="thumbnail-3">
                                            </td>
                                            <td class="project-circle">
                                                <img src="{{ asset('frontend/images/projects-thumbnails/empty-thumbnail.svg') }}"
                                                    alt="thumbnail-4">
                                            </td>
                                            <td class="project-circle">
                                                <img src="{{ asset('frontend/images/projects-thumbnails/empty-thumbnail.svg') }}"
                                                    alt="thumbnail-5">
                                            </td>
                                            <td class="project-circle">
                                                <img src="{{ asset('frontend/images/projects-thumbnails/empty-thumbnail.svg') }}"
                                                    alt="thumbnail-6">
                                            </td>
                                            <td class="project-circle">
                                                <img src="{{ asset('frontend/images/projects-thumbnails/empty-thumbnail.svg') }}"
                                                    alt="thumbnail-7">
                                            </td>
                                            <td class="project-circle">
                                                <img src="{{ asset('frontend/images/projects-thumbnails/empty-thumbnail.svg') }}"
                                                    alt="thumbnail-8">
                                            </td>
                                            <td class="project-circle">
                                                <img src="{{ asset('frontend/images/projects-thumbnails/empty-thumbnail.svg') }}"
                                                    alt="thumbnail-9">
                                            </td>
                                            <td class="project-circle">
                                                <img src="{{ asset('frontend/images/projects-thumbnails/empty-thumbnail.svg') }}"
                                                    alt="thumbnail-10">
                                            </td>
                                            <td class="project-circle">
                                                <img src="{{ asset('frontend/images/projects-thumbnails/empty-thumbnail.svg') }}"
                                                    alt="thumbnail-11">
                                            </td>
                                            <td class="project-circle">
                                                <img src="{{ asset('frontend/images/projects-thumbnails/empty-thumbnail.svg') }}"
                                                    alt="thumbnail-12">
                                            </td>
                                            <td class="project-circle">
                                                <img src="{{ asset('frontend/images/projects-thumbnails/empty-thumbnail.svg') }}"
                                                    alt="thumbnail-13">
                                            </td>
                                            <td class="project-circle">
                                                <img src="{{ asset('frontend/images/projects-thumbnails/empty-thumbnail.svg') }}"
                                                    alt="thumbnail-14">
                                            </td>
                                            <td class="project-circle">
                                                <img src="{{ asset('frontend/images/projects-thumbnails/empty-thumbnail.svg') }}"
                                                    alt="thumbnail-15">
                                            </td>
                                            <td class="project-circle">
                                                <img src="{{ asset('frontend/images/projects-thumbnails/empty-thumbnail.svg') }}"
                                                    alt="thumbnail-16">
                                            </td>
                                        </tr>

                                        <tr>
                                            <td class="project-circle">
                                                <img src="{{ asset('frontend/images/projects-thumbnails/empty-thumbnail.svg') }}"
                                                    alt="thumbnail-1">
                                            </td>
                                            <td class="project-circle">
                                                <img src="{{ asset('frontend/images/projects-thumbnails/empty-thumbnail.svg') }}"
                                                    alt="thumbnail-3">
                                            </td>
                                            <td class="project-circle">
                                                <img src="{{ asset('frontend/images/projects-thumbnails/empty-thumbnail.svg') }}"
                                                    alt="thumbnail-4">
                                            </td>
                                            <td class="project-circle">
                                                <img src="{{ asset('frontend/images/projects-thumbnails/empty-thumbnail.svg') }}"
                                                    alt="thumbnail-5">
                                            </td>
                                            <td class="project-circle">
                                                <img src="{{ asset('frontend/images/projects-thumbnails/empty-thumbnail.svg') }}"
                                                    alt="thumbnail-6">
                                            </td>
                                            <td class="project-circle">
                                                <img src="{{ asset('frontend/images/projects-thumbnails/empty-thumbnail.svg') }}"
                                                    alt="thumbnail-7">
                                            </td>
                                            <td class="project-circle">
                                                <img src="{{ asset('frontend/images/projects-thumbnails/empty-thumbnail.svg') }}"
                                                    alt="thumbnail-8">
                                            </td>
                                            <td class="project-circle">
                                                <img src="{{ asset('frontend/images/projects-thumbnails/empty-thumbnail.svg') }}"
                                                    alt="thumbnail-9">
                                            </td>
                                            <td class="project-circle">
                                                <img src="{{ asset('frontend/images/projects-thumbnails/empty-thumbnail.svg') }}"
                                                    alt="thumbnail-10">
                                            </td>
                                            <td class="project-circle">
                                                <img src="{{ asset('frontend/images/projects-thumbnails/empty-thumbnail.svg') }}"
                                                    alt="thumbnail-11">
                                            </td>
                                            <td class="project-circle">
                                                <img src="{{ asset('frontend/images/projects-thumbnails/empty-thumbnail.svg') }}"
                                                    alt="thumbnail-12">
                                            </td>
                                            <td class="project-circle">
                                                <img src="{{ asset('frontend/images/projects-thumbnails/empty-thumbnail.svg') }}"
                                                    alt="thumbnail-13">
                                            </td>
                                            <td class="project-circle">
                                                <img src="{{ asset('frontend/images/projects-thumbnails/empty-thumbnail.svg') }}"
                                                    alt="thumbnail-14">
                                            </td>
                                            <td class="project-circle">
                                                <img src="{{ asset('frontend/images/projects-thumbnails/empty-thumbnail.svg') }}"
                                                    alt="thumbnail-15">
                                            </td>
                                            <td class="project-circle">
                                                <img src="{{ asset('frontend/images/projects-thumbnails/empty-thumbnail.svg') }}"
                                                    alt="thumbnail-16">
                                            </td>
                                        </tr>

                                        <tr>
                                            <td class="project-circle">
                                                <img src="{{ asset('frontend/images/projects-thumbnails/empty-thumbnail.svg') }}"
                                                    alt="thumbnail-1">
                                            </td>
                                            <td class="project-circle">
                                                <img src="{{ asset('frontend/images/projects-thumbnails/empty-thumbnail.svg') }}"
                                                    alt="thumbnail-3">
                                            </td>
                                            <td class="project-circle">
                                                <img src="{{ asset('frontend/images/projects-thumbnails/empty-thumbnail.svg') }}"
                                                    alt="thumbnail-4">
                                            </td>
                                            <td class="project-circle">
                                                <img src="{{ asset('frontend/images/projects-thumbnails/empty-thumbnail.svg') }}"
                                                    alt="thumbnail-5">
                                            </td>
                                            <td class="project-circle">
                                                <img src="{{ asset('frontend/images/projects-thumbnails/empty-thumbnail.svg') }}"
                                                    alt="thumbnail-6">
                                            </td>
                                            <td class="project-circle">
                                                <img src="{{ asset('frontend/images/projects-thumbnails/empty-thumbnail.svg') }}"
                                                    alt="thumbnail-7">
                                            </td>
                                            <td class="project-circle">
                                                <img src="{{ asset('frontend/images/projects-thumbnails/empty-thumbnail.svg') }}"
                                                    alt="thumbnail-8">
                                            </td>
                                            <td class="project-circle">
                                                <img src="{{ asset('frontend/images/projects-thumbnails/empty-thumbnail.svg') }}"
                                                    alt="thumbnail-9">
                                            </td>
                                            <td class="project-circle">
                                                <img src="{{ asset('frontend/images/projects-thumbnails/empty-thumbnail.svg') }}"
                                                    alt="thumbnail-10">
                                            </td>
                                            <td class="project-circle">
                                                <img src="{{ asset('frontend/images/projects-thumbnails/empty-thumbnail.svg') }}"
                                                    alt="thumbnail-11">
                                            </td>
                                            <td class="project-circle">
                                                <img src="{{ asset('frontend/images/projects-thumbnails/empty-thumbnail.svg') }}"
                                                    alt="thumbnail-12">
                                            </td>
                                            <td class="project-circle">
                                                <img src="{{ asset('frontend/images/projects-thumbnails/empty-thumbnail.svg') }}"
                                                    alt="thumbnail-13">
                                            </td>
                                            <td class="project-circle">
                                                <img src="{{ asset('frontend/images/projects-thumbnails/empty-thumbnail.svg') }}"
                                                    alt="thumbnail-14">
                                            </td>
                                            <td class="project-circle">
                                                <img src="{{ asset('frontend/images/projects-thumbnails/empty-thumbnail.svg') }}"
                                                    alt="thumbnail-15">
                                            </td>
                                            <td class="project-circle">
                                                <img src="{{ asset('frontend/images/projects-thumbnails/empty-thumbnail.svg') }}"
                                                    alt="thumbnail-16">
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

@push('scripts')
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <script>
        $(document).ready(function() {
            $('.category-link').click(function() {
                $('.project-list-area').addClass('d-none');
                $('.category-icon').removeClass('active-button');
                $(this).find('.category-icon').addClass('active-button');
                var projectsContainer = $('#projects-container');
                projectsContainer.empty();
                var categoryId = $(this).data('category-id');
                $.ajax({
                    url: '/get-projects',
                    type: 'GET',
                    data: {
                        category_id: categoryId
                    },
                    success: function(response) {
                        // Handle the response containing project details
                        console.log(response);
                        $('#category-name-header').text(response.categoryName + " " +
                            "Projects");
                        response.projects.forEach(function(project) {
                            // Create an <a> tag for each project
                            var projectLink = $('<a>')
                                .attr('href', '/project/' + project
                                .slug) // Adjust the URL as needed
                                .addClass('project-list-area__list-item-link');

                            // Append the project title in an <h4> tag
                            projectLink.append($('<h4>').addClass('fw-bolder m-0').text(
                                project.title));

                            // Append the project location in a <p> tag
                            projectLink.append($('<p>').addClass('m-0').text(
                                'Location: ' + project.location
                                )); // Assuming 'location' is the property

                            // Append additional project details in another <p> tag
                            var additionalDetails = 'Scale - ' + project.scale +
                                '/ Stage - ' + project.stage; // Adjust property names as needed
                            projectLink.append($('<p>').text(additionalDetails));

                            // Create an <li> tag and append the <a> tag to it
                            var projectListItem = $('<li>').addClass(
                                'project-list-area__list-item').append(projectLink);

                            // Append the <li> tag to the <ul> container
                            projectsContainer.append(projectListItem);
                        });
                        $('.project-list-area').removeClass('d-none');
                        // You can update the DOM here to show project details
                    },
                    error: function(error) {
                        console.log(error);
                    }
                });
            });
        });
    </script>
@endpush
