@extends('layouts.backend')

@section('content')
    <!--wrapper-->
    <div class="wrapper">

        @include('backend.components.sidemenu')
        @include('backend.components.header')

        <!--end header -->
        <!--start page wrapper -->
        <div class="page-wrapper">
            <div class="page-content">
                <!--breadcrumb-->
                <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
                @section('page_group', 'Contact')
                @section('page_name', 'Contact List')
                @include('backend.components.breadcrumb')



            </div>
            <!--end breadcrumb-->
            <h6 class="mb-0 text-uppercase">Your all Contact Form Details</h6>
            <hr />
            @include('backend.components.alert')
            <div class="card">
                <div class="card-body">
                    <div class="table-responsive">
                        <table id="example" class="table table-striped table-bordered" style="width:100%">
                            <thead>
                                <tr>


                                    <th>ID</th>
                                    <th>Name</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($categories as $category)
                                    <td>{{ $category->id }}</td>
                                    <td>{{ $category->name }}</td>
                

                                 
                                    </tr>
                                @endforeach

                            </tbody>
                            <tfoot>
                                <tr>
                                    
                                    <th>ID</th>
                                    <th>Name</th>
                                </tr>
                            </tfoot>
                        </table>


                    </div>
                </div>
            </div>

        </div>
    </div>
    <!--end page wrapper -->

</div>
<!--end wrapper-->

@include('backend.components.footer')
@endsection

@push('scripts')

<script>
    // data table 
    $(document).ready(function() {
        $('#example').DataTable();
    });
</script>
@endpush