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
                @section('page_name', 'Projects List')
                @include('backend.components.breadcrumb')


                <div class="ms-auto">
                    <div class="btn-group">
                        <a href="{{ route('projects.add') }}" type="button" class="btn btn-primary"><i
                                class='bx bx-message-square-add'></i> Add Project</a>

                    </div>
                </div>
            </div>
            <!--end breadcrumb-->
            <h6 class="mb-0 text-uppercase">Your all added Projects</h6>
            <hr />
            @include('backend.components.alert')
            <div class="card">
                <div class="card-body">
                    <div class="table-responsive">
                        <table id="example" class="table table-striped table-bordered" style="width:100%">
                            <thead>
                                <tr>
                                    <th>Image</th>
                                    <th>Title</th>
                                    <th>Location</th>
                                    <th>Category</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($projects as $project)
                                    <tr>
                                        <td><img src="{{ asset($project->image) }}" class="table-image-holder"
                                                alt="image" /> </td>


                                        <td>{{ \Illuminate\Support\Str::limit($project->title, 70, '...') }}</td>

                                        <td>{{ $project->location }}</td>
                                        <td>{{ $project->category->name }}</td>




                                        <td>
                                            @if ($project->status)
                                                <span class="badge bg-success">Active</span>
                                            @else
                                                <span class="badge bg-danger">Diactive</span>
                                            @endif
                                        </td>






                                        <td>
                                            <div class=" table-icon-group">
                                                {{-- <a href="{{ route('project.view', ['id' => $project->id]) }}" type="button"
                                                    class="btn btn-primary"><i class='bx bx-align-middle me-0 margin-btn'></i></a> --}}


                                                <button type="button" class="btn btn-dark" data-bs-toggle="modal"
                                                    data-bs-target="#exampleLargeModal"
                                                    data-title="{{ $project->title }}"
                                                    data-location="{{ $project->location }}"
                                                    data-stage="{{ $project->stage }}"
                                                    data-description="{{ $project->description }}"
                                                    data-status="{{ $project->status }}"
                                                    data-scale="{{ $project->scale }}"
                                                    data-category="{{ $project->category->name }}"
                                                    data-project_year="{{ $project->project_year }}"
                                                    data-completed_year="{{ $project->completed_year }}"
                                                    data-image="{{ asset($project->image) }}"><i
                                                        class="bx bxs-show me-0"></i></button>

                                                @if ($project->status)
                                                    <a href="{{ route('project.diactive', ['id' => $project->id]) }}"
                                                        type="button" class="btn btn-danger"><i
                                                            class="bx bxs-lock me-0"></i></a>
                                                @else
                                                    <a href="{{ route('project.active', ['id' => $project->id]) }}"
                                                        type="button" class="btn btn-success"><i
                                                            class="bx bxs-lock-open me-0"></i></a>
                                                @endif


                                                <a href="{{ route('project.update_view', ['id' => $project->id]) }}"
                                                    type="button" class="btn btn-primary"><i
                                                        class='bx bxs-edit me-0'></i></a>
                                                <a href="{{ route('project.delete', ['id' => $project->id]) }}"
                                                    type="button" class="btn btn-warning"><i
                                                        class='bx bxs-trash-alt me-0'></i></a>

                                                <a href="{{ route('project.gallery', ['id' => $project->id]) }}"
                                                    type="button" class="btn btn-success"><i
                                                        class='bx bx-right-arrow-alt me-0 margin-btn'></i></i></a>
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach

                            </tbody>
                            <tfoot>
                                <tr>
                                    <th>Image</th>
                                    <th>Title</th>
                                    <th>Location</th>
                                    <th>Category</th>
                                    <th>Status</th>
                                    <th>Action</th>
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
@include('backend.components.modal')
<script>
    // data table
    $(document).ready(function() {
        $('#example').DataTable();
    });

    // model content
    $(document).ready(function() {
        $('#exampleLargeModal').on('show.bs.modal', function(event) {
            var button = $(event.relatedTarget);
            var title = button.data('title');
            var location = button.data('location');
            var status = button.data('status');
            var scale = button.data('scale');
            var stage = button.data('stage');
            var description = button.data('description');
            var category = button.data('category');
            var image = button.data('image');

            if (status == 1) {
                $('#active-badge').html("Active");
                $('#active-badge').addClass('badge bg-success');
            } else {
                $('#active-badge').html("Deactive");
                $('#active-badge').addClass('badge bg-danger');
            }



            $('#modal-title').html(title);
            $('#modal-location').html(location);
            $('#stage').html(stage);
            $('#scale').html(scale);
            $('#category').html(category);
            $('#modalBody').html(description);
            $('.model-image').attr('src', image);
        });
    });
</script>
@endpush
