@extends('layouts.siteLayout')
@section('pageTitle')
    {{ env('APP_NAME') }}
@endsection
@section('setHomeActive')
    active
@endsection


@section('content')
    <div class="content-body">
        <div class="container-fluid">
            <div class="row page-titles mx-0">
                <div class="col-sm-6 p-md-0">
                    <div class="welcome-text">
                        <h4>Hi, welcome back!</h4>
                        <p class="mb-0">{{ env('APP_NAME') }}</p>
                    </div>
                </div>
                <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0)">Projects</a></li>
                        <li class="breadcrumb-item active">

                            <a href="javascript:void(0)" data-toggle="modal" data-target="#exampleModalCenter">Add
                                Project</a>
                        </li>

                    </ol>
                </div>
            </div>
            <!-- row -->


            @if (session('success'))
                <div class="alert alert-primary alert-dismissible alert-alt solid fade show">
                    <button type="button" class="close h-100" data-dismiss="alert" aria-label="Close"><span><i
                                class="mdi mdi-close"></i></span>
                    </button>
                    <strong>Success!</strong>

                    {{ session('success') }}
                </div>
            @endif

            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Team lists</h4>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered table-responsive-sm">
                                    <thead>
                                        <tr>
                                            <th>S/N</th>
                                            <th>Image</th>
                                            <th>Title</th>
                                            <th>Sub-title</th>
                                            <th>Client</th>
                                            <th>Category</th>
                                            <th>Description</th>
                                            <th>Project icon</th>
                                            <th>Project type</th>
                                            <th>Activate</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @php
                                            $i = 1;
                                        @endphp
                                        @foreach ($projects as $item)
                                            <tr>
                                                <th>{{ $i++ }}</th>
                                                <td><img width="100px" src="{{ asset($item->image_url) }}"
                                                        alt="{{ $item->title_1 }}"></td>
                                                <td>{{ $item->title_1 }} </td>
                                                <td>{{ $item->title_2 }} </td>
                                                <td>{{ $item->client }} </td>
                                                <td>{{ $item->category }} </td>
                                                <td>{!! \Illuminate\Support\Str::limit($item->description, 50) !!} </td>
                                                <td>{{ $item->project_icon }} </td>
                                                <td>{{ $item->project_type }} </td>

                                                <td>
                                                    <label class="switch">
                                                        <input type="checkbox" checked id="toggle"
                                                            data-active-id="{{ $item->id }}" name="active"
                                                            data-active="{{ $item->active ? '1' : '0' }}">
                                                        <span class="slider round"></span>
                                                    </label>
                                                </td>

                                                <td>

                                                    <a type="button" class="btn btn-primary" data-toggle="modal"
                                                        data-target="#editModalCenter{{ $item->id }}" class="edit"
                                                        title="Edit" data-toggle="tooltip">
                                                        <i class="fa fa-pencil" style="color: #fff; font-weight:700"></i>
                                                    </a>

                                                    <a type="button" class="btn btn-danger" data-toggle="modal"
                                                        data-target="#deleteModalCenter{{ $item->id }}" class="delete"
                                                        title="Delete" data-toggle="tooltip">
                                                        <i class="fa fa-trash" style="color: #fff; font-weight:700"></i>
                                                    </a>
                                                </td>


                                            </tr>

                                            <!-- Edit Modal -->
                                            <div class="modal fade" id="editModalCenter{{ $item->id }}"
                                                aria-hidden="true" style="display: none;">
                                                <div class="modal-dialog modal-dialog-centered" role="document">
                                                    <div class="modal-content">
                                                        <form action="{{ route('project.update', $item->id) }}"
                                                            method="POST" enctype="multipart/form-data">

                                                            @csrf
                                                            @method('PUT')

                                                            <input type="hidden" value="{{ $item->image_url }}"
                                                                name="old_img">

                                                            <div class="modal-header">
                                                                <h5 class="modal-title">Edit project</h5>
                                                                <button type="button" class="close"
                                                                    data-dismiss="modal"><span>×</span>
                                                                </button>
                                                            </div>
                                                            <div class="modal-body">
                                                                <p>
                                                                <div class="form-row">
                                                                    <div class="form-group col-md-6">
                                                                        <label>Title</label>
                                                                        <input type="text" class="form-control"
                                                                            placeholder="" name="title_1"
                                                                            value="{{ $item->title_1 }}">
                                                                    </div>

                                                                    <div class="form-group col-md-6">
                                                                        <label>Sub-title</label>
                                                                        <input type="text" class="form-control"
                                                                            placeholder="" name="title_2"
                                                                            value="{{ $item->title_2 }}">
                                                                    </div>

                                                                    <div class="form-group col-md-6">
                                                                        <label>Client</label>
                                                                        <input type="text" class="form-control"
                                                                            placeholder="" name="client"
                                                                            value="{{ $item->client }}">
                                                                    </div>

                                                                    <div class="form-group col-md-6">
                                                                        <label>Category</label>
                                                                        <input type="text" class="form-control"
                                                                            placeholder="" name="category"
                                                                            value="{{ $item->category }}">
                                                                    </div>

                                                                    <div class="form-group col-md-6">
                                                                        <label>Project icon</label>
                                                                        <input type="text" class="form-control"
                                                                            placeholder="" name="project_icon"
                                                                            value="{{ $item->project_icon }}">
                                                                    </div>

                                                                    <div class="form-group col-md-6">
                                                                        <label>Project icon</label>
                                                                        <input type="text" class="form-control"
                                                                            placeholder="" name="project_type"
                                                                            value="{{ $item->project_type }}">
                                                                    </div>

                                                                    <div class="form-group col-md-12">
                                                                        <label>Image</label>
                                                                        <div class="input-group mb-3">
                                                                            <div class="input-group-prepend">
                                                                                <span
                                                                                    class="input-group-text">Upload</span>
                                                                            </div>
                                                                            <div class="custom-file">
                                                                                <input type="file"
                                                                                    class="custom-file-input"
                                                                                    name="image_url">
                                                                                <label class="custom-file-label">Choose
                                                                                    file</label>
                                                                            </div>
                                                                        </div>
                                                                    </div>

                                                                    <div class="form-group col-md-12">
                                                                        <label>Description</label>
                                                                        <textarea class="form-control" name="description" id="description" cols="30" rows="3">{{ $item->description }}</textarea>
                                                                    </div>

                                                                </div>

                                                                </p>
                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-secondary"
                                                                    data-dismiss="modal">Close</button>
                                                                <button type="submit"
                                                                    class="btn btn-primary">Save</button>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>

                                            {{-- delete modal  --}}
                                            <div class="modal fade" id="deleteModalCenter{{ $item->id }}"
                                                aria-hidden="true" style="display: none;">
                                                <div class="modal-dialog modal-dialog-centered" role="document">
                                                    <div class="modal-content">

                                                        <div class="modal-header">
                                                            <h5 class="modal-title">Delete cause list</h5>
                                                            <button type="button" class="close"
                                                                data-dismiss="modal"><span>×</span>
                                                            </button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <form action="{{ route('project.destroy', $item->id) }}"
                                                                method="POST">
                                                                @csrf
                                                                @method('DELETE')

                                                                <p>Are you sure you want to delete?</p>

                                                                <div class="modal-footer">
                                                                    <button type="button" class="btn btn-secondary"
                                                                        data-dismiss="modal">Close</button>
                                                                    <button type="submit"
                                                                        class="btn btn-danger">Delete</button>
                                                                </div>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Add Modal -->
            <div class="modal fade" id="exampleModalCenter" aria-hidden="true" style="display: none;">
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                        <form action="{{ route('project.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf

                            <div class="modal-header">
                                <h5 class="modal-title">Create project</h5>
                                <button type="button" class="close" data-dismiss="modal"><span>×</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <p>
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label>Title</label>
                                        <input type="text" class="form-control" placeholder="" name="title_1"
                                            value="">
                                    </div>

                                    <div class="form-group col-md-6">
                                        <label>Sub-title</label>
                                        <input type="text" class="form-control" placeholder="" name="title_2"
                                            value="">
                                    </div>

                                    <div class="form-group col-md-6">
                                        <label>Client</label>
                                        <input type="text" class="form-control" placeholder="" name="client"
                                            value="">
                                    </div>

                                    <div class="form-group col-md-6">
                                        <label>Category</label>
                                        <input type="text" class="form-control" placeholder="" name="category"
                                            value="">
                                    </div>

                                    <div class="form-group col-md-6">
                                        <label>Project icon</label>
                                        <input type="text" class="form-control" placeholder="" name="project_icon"
                                            value="">
                                    </div>

                                    <div class="form-group col-md-6">
                                        <label>Project icon</label>
                                        <input type="text" class="form-control" placeholder="" name="project_type"
                                            value="">
                                    </div>

                                    <div class="form-group col-md-12">
                                        <label>Image</label>
                                        <div class="input-group mb-3">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text">Upload</span>
                                            </div>
                                            <div class="custom-file">
                                                <input type="file" class="custom-file-input" name="image_url">
                                                <label class="custom-file-label">Choose
                                                    file</label>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group col-md-12">
                                        <label>Description</label>
                                        <textarea class="form-control" name="description" id="description" cols="30" rows="3"></textarea>
                                    </div>

                                </div>
                                </p>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-primary">Save</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection


@section('styles')
    {{-- <link rel="stylesheet" href="http://netdna.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <link href="http://www.jqueryscript.net/css/jquerysctipttop.css" rel="stylesheet" type="text/css"> --}}

    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <style>
        .switch {
            position: relative;
            display: inline-block;
            width: 60px;
            height: 34px;
        }

        .switch input {
            opacity: 0;
            width: 0;
            height: 0;
        }

        .slider {
            position: absolute;
            cursor: pointer;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background-color: red;
            -webkit-transition: .4s;
            transition: .4s;
        }

        .slider:before {
            position: absolute;
            content: "";
            height: 26px;
            width: 26px;
            left: 4px;
            bottom: 4px;
            background-color: white;
            -webkit-transition: .4s;
            transition: .4s;
        }

        input:checked+.slider {
            background-color: #2196F3;
        }

        input:focus+.slider {
            box-shadow: 0 0 1px #2196F3;
        }

        input:checked+.slider:before {
            -webkit-transform: translateX(26px);
            -ms-transform: translateX(26px);
            transform: translateX(26px);
        }

        /* Rounded sliders */
        .slider.round {
            border-radius: 34px;
        }

        .slider.round:before {
            border-radius: 50%;
        }
    </style>


    <script>
        $(document).ready(function() {
            $('[data-toggle="tooltip"]').tooltip();
        });
    </script>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@10">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
@endsection


@section('scripts')
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const csrfToken = $('meta[name="csrf-token"]').attr('content');

            const toggleElements = document.querySelectorAll('input[name="active"]');
            toggleElements.forEach(function(toggle) {
                const isActive = toggle.getAttribute('data-active');
                toggle.checked = isActive === '1';
                // Add an event listener to handle changes and make AJAX requests
                toggle.addEventListener('change', function() {
                    const activeId = toggle.getAttribute('data-active-id');
                    const isChecked = toggle.checked;

                    $.ajaxSetup({
                        headers: {
                            'X-CSRF-TOKEN': csrfToken,
                        },
                    });

                    // Send an AJAX request to update the "active" status
                    $.ajax({
                        type: 'POST',
                        url: `/project-activate/${activeId}`,
                        data: {
                            active: isChecked ? '1' : '0'
                        },
                        success: function(data) {
                            if (data.success) {
                                if (isChecked) {
                                    Swal.fire('Success',
                                        'Project activated successfully.',
                                        'success');
                                } else {
                                    Swal.fire('Success',
                                        'Project deactivated successfully.',
                                        'success');
                                }
                            } else {
                                Swal.fire('Error', 'Error updating project status.',
                                    'error');
                            }
                        },
                        error: function() {
                            alert('An error occurred.');
                        },
                    });
                });
            });
        });
    </script>
@endsection
