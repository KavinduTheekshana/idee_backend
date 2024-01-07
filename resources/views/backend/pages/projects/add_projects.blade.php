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
                @section('page_name', 'Add Projects')
                @include('backend.components.breadcrumb')


                <div class="ms-auto">
                    <div class="btn-group">
                        <a href="{{ route('projects.list') }}" type="button" class="btn btn-warning"><i
                                class='bx bx-list-check'></i>Projects List</a>

                    </div>
                </div>
            </div>
            <!--end breadcrumb-->

            <div class="row">
                <div class="col-xl-9 mx-auto">
                    <h6 class="mb-0 text-uppercase">Add a New Projects to your list</h6>
                    <hr />

                    @include('backend.components.alert')

                    <div class="card">
                        <div class="card-body">
                            <form class="row g-3" method="POST" action="{{ route('projects.save') }}"
                                enctype="multipart/form-data">
                                @csrf
                                <div class="col-md-12">




                                    <div class="form-row">
                                        <label for="input1" class="form-label">Title</label>
                                        <input type="text" class="form-control" id="myTextbox" name="title"
                                            required placeholder="Package Title">
                                    </div>

                                    <input hidden type="text" class="form-control" id="mySlugbox" name="slug"
                                    required placeholder="Package Title Slag" readonly>


                                    <div class="form-row mt-3">
                                        <label for="input1" class="form-label">Category</label>
                                    <select class="form-select mb-3" aria-label="Default select example" name="category_id">

                                        @foreach ($categories as $category)
                                        <option value="{{$category->id}}">{{$category->name}}</option>
                                        @endforeach
                                    </select>
                                </div>



                                    <div class="form-row mt-3">
                                        <label for="input1" class="form-label">Location</label>
                                        <input type="text" class="form-control" name="location" required
                                            placeholder="Location">
                                    </div>

                                    <div class="form-row mt-3">
                                        <label for="input1" class="form-label">Scale (If you don't have Scale Please type N/A)</label>
                                        <input type="text" class="form-control" name="scale" required
                                            placeholder="Scale">
                                    </div>
                                    <div class="form-row mt-3">
                                        <label for="input1" class="form-label">Stage</label>
                                    {{-- <select class="form-select mb-3" aria-label="Default select example" name="stage">


                                        <option value="Completed">Completed</option>
                                        <option value="Under Construction">Under Construction</option>
                                        <option value="Not Started">Not Started</option>

                                    </select> --}}
                                    <input type="text" class="form-control" name="stage" required
                                    placeholder="scale">
                                    </div>



                                    {{-- <div class="form-row mt-3">
                                        <label for="input1" class="form-label">Floor area</label>
                                        <input type="text" class="form-control" name="floor" required
                                            placeholder="Floor area">
                                    </div> --}}

                                    {{-- <div class="form-row mt-3">
                                        <label for="input1" class="form-label">Project year</label>
                                        <input type="number" class="form-control" name="project_year" required
                                            placeholder="Project year">
                                    </div>

                                    <div class="form-row mt-3">
                                        <label for="input1" class="form-label">Completed year</label>
                                        <input type="number" class="form-control" name="completed_year" required
                                            placeholder="Completed year">
                                    </div> --}}


                                    <div class="form-row mt-3">
                                        <label for="input1" class="form-label">Cover Image</label>
                                        <div class="input-group mb-3">
                                            <label class="input-group-text" for="inputGroupFile01">Upload</label>
                                            <input type="file" class="form-control" name="image" required
                                                id="inputGroupFile01" onchange="readURL(this);">
                                        </div>

                                        <img id="blah" src="{{ asset('backend/assets/images/default-coverImage.png') }}"
                                            class="placeholder-image" alt="your image" width="500" />
                                    </div>

                                    <div class="form-row mt-3">
                                        <label for="input1" class="form-label">Description</label>

                                        <textarea id="myeditorinstance" name="description" required>Add Your Text Here</textarea>
                                    </div>

                                    <div class="form-row mt-3">
                                        <div class="d-grid d-flex justify-content-end">
                                            <button type="submit" class="btn btn-primary px-4">Submit</button>

                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
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
    // editer
    tinymce.init({
        selector: 'textarea#myeditorinstance', // Replace this CSS selector to match the placeholder element for TinyMCE
        plugins: 'code table lists',
        toolbar: 'undo redo | blocks | bold italic | alignleft aligncenter alignright | indent outdent | bullist numlist | table'
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

    // slug editer
    $(document).ready(function() {
        $('#myTextbox').on('input', function() {
            var value = $(this).val();
            var slug = value.toLowerCase().replace(/[^a-z0-9]+/g, '-').replace(/^-|-$/g, '') + "-" +
                Date.now();
            $('#mySlugbox').val(slug);
        });
    });
</script>
@endpush