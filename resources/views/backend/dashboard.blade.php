@extends('layouts.backend')

@section('content')
    <!--wrapper-->
    <div class="wrapper">

      

   


  

    @include('backend.components.sidemenu')
    @include('backend.components.header')


    @include('backend.pages.dashboard.dashboard')




    @include('backend.components.footer')

</div>
    <!--end wrapper-->








    {{-- <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>
            </div>
        </div>
    </div>
</div> --}}
@endsection