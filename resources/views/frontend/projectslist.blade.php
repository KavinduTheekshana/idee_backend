@extends('layouts.frontend')
@section('page_title', 'Projects | idée CA')
@section('site_logo', asset('frontend/images/logo-white.svg'))
@section('content')

    <body>
        @include('frontend.components.header')
        <main>
            <div class="page-content">
              <div class="project-page">
                  <div class="project-list-area project-list-area_content-page">
                    <h2 class="fw-bolder">{{$project_name}}</h2>
                    <ul class="project-list-area__list">
                        @foreach ($projects as $project)
                        <li class="project-list-area__list-item">
                        <a href="{{ route('project.show', ['slug' => $project->slug]) }}" class="project-list-area__list-item-link">
                          <h4 class="fw-bolder m-0">{{$project->title}}</h4>
                          <p class="m-0">Location _ {{$project->location}}</p>
                          <p>Land Extent_{{$project->land}}p/Floor area_{{$project->floor}} Sqft/ Project year_{{$project->project_year}}/ Completed_{{$project->completed_year}}</p>
                        </a>
                      </li>
                @endforeach



                    </ul>
                  </div>
              </div>
            </div>
          </main>
    </body>
@endsection


