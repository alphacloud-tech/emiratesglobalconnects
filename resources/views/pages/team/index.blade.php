@extends('layouts.siteLayout')
@section('pageTitle')
    {{ env('APP_NAME') }}
@endsection
@section('setHomeActive')
    active
@endsection


@section('content')
    @if (session('success'))
        <div class="alert alert-primary alert-dismissible alert-alt solid fade show">
            <button type="button" class="close h-100" data-dismiss="alert" aria-label="Close">
                <span>
                    <i class="fa fa-close"></i>
                </span>
            </button>
            <strong>Success!</strong>

            {{ session('success') }}
        </div>
    @endif

    @include('pages.common.top')

    <div class="row">
        <!-- Primary table -->
        <div class="col-12 mt-4">
            <div class="card">
                <div class="card-body">
                    <h4 class="header-title">Teams</h4>
                    <div class="table-responsive datatable-primary">
                        <table id="dataTable2" class="text-centerss">
                            <thead class="text-capitalize">
                                <tr>
                                    <th>S/N</th>
                                    <th>Image</th>
                                    <th>Name</th>
                                    <th>Position</th>
                                    <th>Email</th>
                                    <th>Phone</th>
                                    <th>Description</th>
                                    <th>Biography</th>
                                    <th>Skills</th>
                                    <th>Facebook</th>
                                    {{-- <th>Instagram</th> --}}
                                    {{-- <th>Twitter</th> --}}
                                    <th>Activate</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php
                                    $i = 1;
                                @endphp
                                @foreach ($teams as $item)
                                    <tr>
                                        <th>{{ $i++ }}</th>
                                        <td><img width="100px" src="{{ asset($item->image_url) }}"
                                                alt="{{ $item->slide_title }}"></td>
                                        <td>{{ $item->name }} </td>
                                        <td>{{ $item->position }} </td>
                                        <td>{{ $item->email }} </td>
                                        <td>{{ $item->phone }} </td>
                                        <td>
                                            {!! \Illuminate\Support\Str::limit($item->description, 50) !!}
                                            <i class="fa fa-eye mr-1 btn btn-warning" data-toggle="modal"
                                                data-target="#showModalCenterdescription{{ $item->id }}" class="edit"
                                                title="Edit" data-toggle="tooltip">
                                            </i>
                                        </td>

                                        <td>
                                            {!! \Illuminate\Support\Str::limit($item->biography, 50) !!}
                                            <i class="fa fa-eye mr-1 btn btn-warning" data-toggle="modal"
                                                data-target="#showModalCenterbiography{{ $item->id }}" class="edit"
                                                title="Edit" data-toggle="tooltip">
                                            </i>
                                        </td>
                                        <td>{{ $item->skills }} </td>
                                        <td>{{ $item->facebook }}, {{ $item->instagram }} </td>
                                        {{-- <td>{{ $item->instagram }} </td> --}}
                                        {{-- <td>{{ $item->twitter }} </td> --}}

                                        <td>
                                            <label class="switch">
                                                <input type="checkbox" checked id="toggle"
                                                    data-active-id="{{ $item->id }}" name="active"
                                                    data-active="{{ $item->active ? '1' : '0' }}">
                                                <span class="slider round"></span>
                                            </label>
                                        </td>

                                        <td>

                                            <i class="fa fa-pencil mr-1 btn btn-success edit" data-toggle="modal"
                                                data-target="#editModalCenter{{ $item->id }}" class="edit"
                                                title="Edit" data-toggle="tooltip"></i>
                                            <i class="fa fa-trash btn btn-danger" class="btn btn-danger" data-toggle="modal"
                                                data-target="#deleteModalCenter{{ $item->id }}" class="delete"
                                                title="Delete" data-toggle="tooltip"></i>
                                        </td>
                                    </tr>

                                    <div class="modal fade" id="editModalCenter{{ $item->id }}">
                                        <div class="modal-dialog modal-lg">
                                            <div class="modal-content">
                                                <form action="{{ route('team.update', $item->id) }}" method="POST"
                                                    enctype="multipart/form-data">

                                                    @csrf
                                                    @method('PUT')

                                                    <input type="hidden" value="{{ $item->image_url }}" name="old_img">

                                                    <div class="modal-header">
                                                        <h5 class="modal-title">Edit Team</h5>
                                                        <button type="button" class="close"
                                                            data-dismiss="modal"><span>×</span>
                                                        </button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <p>

                                                        <div class="row">
                                                            <div class="col-md-9"></div>
                                                            <div class="col-md-3">
                                                                <div class="input-group mb-3" style="text-align: right;">
                                                                    <img id="imagePreviewOne{{ $item->id }}"
                                                                        src="{{ asset($item->image_url) }}"
                                                                        alt="Image Preview"
                                                                        style=" max-width: 100%; display:;">
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="form-row">
                                                            {{--

                                                            <div class="form-group col-md-6">

                                                            </div>
                                                            <div class="form-group col-md-6">
                                                                <label>Preview</label>

                                                            </div> --}}

                                                            <div class="form-group col-md-6">
                                                                <label>Fullname</label>
                                                                <input type="text" class="form-control" placeholder=""
                                                                    name="name" value="{{ $item->name }}">
                                                            </div>
                                                            <div class="form-group col-md-6">
                                                                <label>Position</label>
                                                                <input type="text" class="form-control" placeholder=""
                                                                    name="position" value="{{ $item->position }}">
                                                            </div>
                                                            <div class="form-group col-md-6">
                                                                <label>Email</label>
                                                                <input type="email" class="form-control" placeholder=""
                                                                    name="email" value="{{ $item->email }}">
                                                            </div>
                                                            <div class="form-group col-md-6">
                                                                <label>Phone</label>
                                                                <input type="text" class="form-control" placeholder=""
                                                                    name="phone" value="{{ $item->phone }}">
                                                            </div>

                                                            <div class="form-group col-md-6">
                                                                <label>Facebook Link</label>
                                                                <input type="text" class="form-control" placeholder=""
                                                                    name="facebook" value="{{ $item->facebook }}">
                                                            </div>
                                                            {{-- <div class="form-group col-md-6">
                                                                <label>Youtube Link</label>
                                                                <input type="text" class="form-control" placeholder=""
                                                                    name="youtube" value="{{ $item->youtube }}">
                                                            </div> --}}
                                                            <div class="form-group col-md-6">
                                                                <label>Instagram Link</label>
                                                                <input type="text" class="form-control" placeholder=""
                                                                    name="instagram" value="{{ $item->instagram }}">
                                                            </div>

                                                            <div class="form-group col-md-6">
                                                                <label>Skills <i style="color: #E34724">comma
                                                                        seperated</i></label>
                                                                <input type="text" class="form-control" placeholder=""
                                                                    name="skills" value="{{ $item->skills }}">
                                                            </div>
                                                            {{-- <div class="form-group col-md-6">
                                                                <label>Twitter Link</label>
                                                                <input type="text" class="form-control" placeholder=""
                                                                    name="twitter" value="{{ $item->twitter }}">
                                                            </div> --}}
                                                            {{-- <div class="form-group col-md-6">
                                                                <label>Linkedin Link</label>
                                                                <input type="text" class="form-control" placeholder=""
                                                                    name="linkedin" value="{{ $item->linkedin }}">
                                                            </div> --}}

                                                            {{-- <div class="form-group col-md-6">
                                                                <label>Github Link</label>
                                                                <input type="text" class="form-control" placeholder=""
                                                                    name="github" value="{{ $item->github }}">
                                                            </div> --}}

                                                            <div class="form-group col-md-6">
                                                                <label>Image</label>
                                                                <div class="input-group mb-3">
                                                                    <div class="input-group-prepend">
                                                                        <span class="input-group-text">Upload</span>
                                                                    </div>
                                                                    <div class="custom-file">
                                                                        <input type="file" class="custom-file-input"
                                                                            name="image_url"
                                                                            id="imageInput{{ $item->id }}"
                                                                            onchange="previewImageOne(this);">
                                                                        <label class="custom-file-label">Choose
                                                                            file</label>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="form-group col-md-6">
                                                                <label>Description</label>


                                                                <textarea class="ckeditor-textarea" name="description" cols="30" rows="10"
                                                                    id="editor1{{ $item->id }}">{!! $item->description !!}</textarea>

                                                                {{-- <textarea class="form-control" name="description" id="editor4" cols="30" rows="10">{{ $item->description }}</textarea> --}}
                                                            </div>

                                                            <div class="form-group col-md-6">
                                                                <label>Biography</label>


                                                                <textarea class="ckeditor-textarea" name="biography" cols="30" rows="10"
                                                                    id="editor2{{ $item->id }}">{!! $item->biography !!}</textarea>

                                                                {{-- <textarea class="form-control" name="biography" id="editor5" cols="30" rows="10">{{ $item->biography }}</textarea> --}}
                                                            </div>

                                                        </div>

                                                        </p>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-danger"
                                                            data-dismiss="modal">Close</button>
                                                        <button type="submit" class="btn btn-primary">Save</button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="modal fade" id="showModalCenterdescription{{ $item->id }}">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-body">
                                                    <p>
                                                        {!! $item->description !!}
                                                    </p>
                                                </div>
                                                <div class="modal-footer">

                                                    <button type="button" class="btn btn-danger"
                                                        data-dismiss="modal">Close</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="modal fade" id="showModalCenterbiography{{ $item->id }}">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-body">
                                                    <p>
                                                        {!! $item->biography !!}
                                                    </p>
                                                </div>
                                                <div class="modal-footer">

                                                    <button type="button" class="btn btn-danger"
                                                        data-dismiss="modal">Close</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    {{-- delete modal  --}}
                                    <div class="modal fade" id="deleteModalCenter{{ $item->id }}" aria-hidden="true"
                                        style="display: none;">
                                        <div class="modal-dialog modal-dialog-centered" role="document">
                                            <div class="modal-content">

                                                <div class="modal-header">
                                                    <h5 class="modal-title">Delete cause list</h5>
                                                    <button type="button" class="close"
                                                        data-dismiss="modal"><span>×</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <form action="{{ route('team.destroy', $item->id) }}" method="POST">
                                                        @csrf
                                                        @method('DELETE')

                                                        <p>Are you sure you want to delete?</p>

                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-secondary"
                                                                data-dismiss="modal">Close</button>
                                                            <button type="submit" class="btn btn-danger">Delete</button>
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
        <!-- Primary table -->
    </div>



    <div class="modal fade" id="exampleModalCenter">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <form action="{{ route('team.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf

                    <div class="modal-header">
                        <h5 class="modal-title">Create team</h5>
                        <button type="button" class="close" data-dismiss="modal"><span>×</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <p>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label>Fullname</label>
                                <input type="text" class="form-control" placeholder="" name="name">
                            </div>
                            <div class="form-group col-md-6">
                                <label>Position</label>
                                <input type="text" class="form-control" placeholder="" name="position">
                            </div>
                            <div class="form-group col-md-6">
                                <label>Email</label>
                                <input type="email" class="form-control" placeholder="" name="email">
                            </div>
                            <div class="form-group col-md-6">
                                <label>Phone</label>
                                <input type="text" class="form-control" placeholder="" name="phone">
                            </div>

                            <div class="form-group col-md-6">
                                <label>Facebook Link</label>
                                <input type="text" class="form-control" placeholder="" name="facebook">
                            </div>
                            {{-- <div class="form-group col-md-6">
                                <label>Youtube Link</label>
                                <input type="text" class="form-control" placeholder="" name="youtube">
                            </div> --}}
                            <div class="form-group col-md-6">
                                <label>Instagram Link</label>
                                <input type="text" class="form-control" placeholder="" name="instagram">
                            </div>

                            <div class="form-group col-md-6">
                                <label>Skills <i style="color: #E34724">comma
                                        seperated</i></label>
                                <input type="text" class="form-control" placeholder="" name="skills">
                            </div>
                            {{-- <div class="form-group col-md-6">
                                <label>Twitter Link</label>
                                <input type="text" class="form-control" placeholder="" name="twitter">
                            </div> --}}
                            {{-- <div class="form-group col-md-6">
                                <label>Linkedin Link</label>
                                <input type="text" class="form-control" placeholder="" name="linkedin">
                            </div> --}}

                            {{-- <div class="form-group col-md-6">
                                <label>Github Link</label>
                                <input type="text" class="form-control" placeholder="" name="github">
                            </div> --}}

                            <div class="form-group col-md-6">
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

                            <div class="form-group col-md-6">
                                <label>Description</label>
                                <textarea class="form-control ckeditor-textarea1" name="description" id="editor3" cols="30" rows="10"></textarea>
                            </div>

                            <div class="form-group col-md-6">
                                <label>Biography</label>
                                <textarea class="form-control ckeditor-textarea1" name="biography" id="editor2" cols="30" rows="10"></textarea>
                            </div>

                        </div>
                        </p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Save</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection


@section('styles')
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
                        url: `/team-activate/${activeId}`,
                        data: {
                            active: isChecked ? '1' : '0'
                        },
                        success: function(data) {
                            if (data.success) {
                                if (isChecked) {
                                    Swal.fire('Success',
                                        'Team activated successfully.',
                                        'success');
                                } else {
                                    Swal.fire('Success',
                                        'Team deactivated successfully.',
                                        'success');
                                }
                            } else {
                                Swal.fire('Error', 'Error updating Team status.',
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
