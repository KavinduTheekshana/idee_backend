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
                @section('page_group', 'Projects')
                @section('page_name', 'Projects Image Gallery')
                @include('backend.components.breadcrumb')


                <div class="ms-auto">
                    <div class="btn-group">
                        <a href="{{ route('projects.list') }}" type="button" class="btn btn-warning"><i
                                class='bx bx-list-check'></i>Projects List</a>

                    </div>
                </div>
            </div>
            <!--end breadcrumb-->
            <h6 class="mb-0 text-uppercase">Enhance your existing project by incorporating an image gallery.</h6>
            <hr />
            @include('backend.components.alert')
            <div class="card">
                <div class="card-body">
                    <div class="table-responsive">
                        <table id="example" class="table table-striped table-bordered" style="width:100%">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Image</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($galleries as $gallery)
                                    <tr>
                                        <td>{{$gallery->id}}</td>
                                        <td><img src="{{ asset($gallery->image) }}" class="gallery-image-holder"
                                                alt="image" /> </td>
                                        <td>
                                            @if ($gallery->status)
                                                <span class="badge bg-success">Active</span>
                                            @else
                                                <span class="badge bg-danger">Diactive</span>
                                            @endif
                                        </td>
                                        <td>
                                            @if ($gallery->status)
                                                <a href="{{ route('gallery.diactive', ['id' => $gallery->id]) }}"
                                                    type="button" class="btn btn-danger"><i
                                                        class="bx bxs-lock me-0"></i></a>
                                            @else
                                                <a href="{{ route('gallery.active', ['id' => $gallery->id]) }}"
                                                    type="button" class="btn btn-success"><i
                                                        class="bx bxs-lock-open me-0"></i></a>

                                                    
                                            @endif
                                            <a href="{{ route('gallery.delete', ['id' => $gallery->id]) }}" type="button"
                                                class="btn btn-warning"><i class='bx bxs-trash-alt me-0'></i></a>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                            <tfoot>
                                <tr>
                                    <th>Status</th>
                                    <th>Actions</th>
                                </tr>
                            </tfoot>
                        </table>
                    </div>
                </div>
            </div>
            <br>


            <div class="card">
                <div class="card-body">
                    <form class="row g-3" method="POST" action="{{ route('gallery.save') }}"
                        enctype="multipart/form-data">
                        @csrf
                        <input type="text" name="id" value="{{ $project->id }}" hidden>
                        <div class="col-md-12">


                            <div class="form-row mt-3">
                                <label for="input1" class="form-label">Upload Image</label>
                                <div class="input-group mb-3">
                                    <label class="input-group-text" for="inputGroupFile01">Upload</label>
                                    <input type="file" class="form-control" name="image" required
                                        id="inputGroupFile01" onchange="readURL(this);">
                                </div>

                                <img id="blah" src="{{ asset('backend/assets/images/default-coverImage.png') }}"
                                    class="placeholder-image" alt="your image" width="500" />
                            </div>


                            <div class="form-row mt-3">
                                <div class="d-grid d-flex">
                                    <button type="submit" class="btn btn-primary px-4">Submit</button>

                                </div>
                            </div>
                        </div>
                    </form>
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
    // image display
    function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function(e) {
                $('#blah')
                    .attr('src', e.target.result)
            };

            reader.readAsDataURL(input.files[0]);
        }
    }
</script>
@endpush
