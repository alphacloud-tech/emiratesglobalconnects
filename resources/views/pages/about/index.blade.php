@extends('layouts.siteLayout')
@section('pageTitle')
    Cleverbiz - Real Estate
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
                    <h4 class="header-title">Slider</h4>
                    <div class="table-responsive datatable-primary">
                        <table id="dataTable2" class="text-center33">
                            <thead class="text-capitalize">
                                <tr>
                                    <th>S/N</th>
                                    <th>Image</th>
                                    <th>Title</th>
                                    <th>Year</th>
                                    <th>Short Description</th>
                                    <th>Description</th>
                                    <th>Activate</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php
                                    $i = 1;
                                @endphp
                                @foreach ($abouts as $item)
                                    <tr>
                                        <th>{{ $i++ }}</th>
                                        <td><img width="100px" src="{{ asset($item->image_url) }}"
                                                alt="{{ $item->title }}"></td>
                                        <td>{{ $item->title }} </td>
                                        <td>{{ $item->coy_yr_exp }} </td>
                                        <td>
                                            {!! \Illuminate\Support\Str::limit($item->content_short, 50) !!}
                                            <i class="fa fa-eye mr-1 btn btn-warning" data-toggle="modal"
                                                data-target="#shortModalCenter{{ $item->id }}" class="edit"
                                                title="Edit" data-toggle="tooltip">
                                            </i>
                                        </td>
                                        <td>
                                            {!! \Illuminate\Support\Str::limit($item->description, 50) !!}
                                            <i class="fa fa-eye mr-1 btn btn-warning" data-toggle="modal"
                                                data-target="#longModalCenter{{ $item->id }}" class="edit"
                                                title="Edit" data-toggle="tooltip">
                                            </i>
                                        </td>

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
                                                <form action="{{ route('about.update', $item->id) }}" method="POST"
                                                    enctype="multipart/form-data">

                                                    @csrf
                                                    @method('PUT')

                                                    <input type="hidden" value="{{ $item->image_url }}" name="old_img">

                                                    <div class="modal-header">
                                                        <h5 class="modal-title">Edit About Us</h5>
                                                        <button type="button" class="close"
                                                            data-dismiss="modal"><span>×</span>
                                                        </button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <p>
                                                        <div class="form-row">
                                                            <div class="form-group col-md-12">
                                                                <label>Title</label>
                                                                <input type="text" class="form-control" placeholder=""
                                                                    name="title" value="{{ $item->title }}">
                                                            </div>
                                                            <div class="form-group col-md-6">
                                                                <label>Year</label>
                                                                <input type="text" class="form-control" placeholder=""
                                                                    name="coy_yr_exp" value="{{ $item->coy_yr_exp }}">
                                                            </div>


                                                            <div class="form-group col-md-6">
                                                                <label>Image</label>
                                                                <div class="input-group mb-3">
                                                                    <div class="input-group-prepend">
                                                                        <span class="input-group-text">Upload</span>
                                                                    </div>
                                                                    <div class="custom-file">
                                                                        <input type="file" class="custom-file-input"
                                                                            name="image_url">
                                                                        <label class="custom-file-label">Choose
                                                                            file</label>
                                                                    </div>
                                                                </div>
                                                            </div>


                                                            <div class="form-group col-md-6">
                                                                <label>Short Description</label>
                                                                {{-- <textarea class="summernote" name="content_short">{{ $item->content_short }}</textarea> --}}

                                                                <input type="hidden" id="unique"
                                                                    value="editor1{{ $item->id }}">
                                                                <textarea class="ckeditor-textarea" name="content_short" cols="30" rows="10"
                                                                    id="editor1{{ $item->id }}">{!! $item->content_short !!}</textarea>

                                                            </div>

                                                            <div class="form-group col-md-6">
                                                                <label>Description</label>
                                                                {{-- <textarea class="summernote" name="description">{{ $item->description }}</textarea> --}}
                                                                <input type="hidden" id="unique"
                                                                    value="editor2{{ $item->id }}">
                                                                <textarea class="ckeditor-textarea2" name="description" cols="30" rows="10"
                                                                    id="editor2{{ $item->id }}">{!! $item->description !!}</textarea>

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

                                    <div class="modal fade" id="shortModalCenter{{ $item->id }}">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-body">
                                                    <p>
                                                        {!! $item->content_short !!}
                                                    </p>
                                                </div>
                                                <div class="modal-footer">

                                                    <button type="button" class="btn btn-danger"
                                                        data-dismiss="modal">Close</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="modal fade" id="longModalCenter{{ $item->id }}">
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

                                    {{-- delete modal  --}}
                                    <div class="modal fade" id="deleteModalCenter{{ $item->id }}" aria-hidden="true"
                                        style="display: none;">
                                        <div class="modal-dialog modal-dialog-centered" role="document">
                                            <div class="modal-content">

                                                <div class="modal-header">
                                                    <h5 class="modal-title">Delete About Us</h5>
                                                    <button type="button" class="close"
                                                        data-dismiss="modal"><span>×</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <form action="{{ route('about.destroy', $item->id) }}"
                                                        method="POST">
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
        <div class="modal-dialog">
            <div class="modal-content">
                <form action="{{ route('about.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf

                    <div class="modal-header">
                        <h5 class="modal-title">Create About Us</h5>
                        <button type="button" class="close" data-dismiss="modal"><span>×</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <p>
                        <div class="form-row">
                            <div class="form-group col-md-12">
                                <label>Title</label>
                                <input type="text" class="form-control" placeholder="" name="title">
                            </div>
                            <div class="form-group col-md-12">
                                <label>Year</label>
                                <input type="text" class="form-control" placeholder="" name="coy_yr_exp">
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
                                <label>Short Description</label>
                                <textarea class="summernote" name="content_short" id="editor2"></textarea>
                            </div>

                            <div class="form-group col-md-12">
                                <label>Description</label>
                                <textarea class="summernote" name="description" id="editor3"></textarea>
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
        $(document).ready(function() {

            $('.edit').click(function() {
                // Find the ID of the modal associated with the clicked edit button
                let modalId = $(this).data('target');
                // alert(modalId);

                // Find the CKEditor textarea within the modal
                let editorId = $(modalId).find('.ckeditor-textarea').attr('id');
                let editorId2 = $(modalId).find('.ckeditor-textarea2').attr('id');
                // Initialize CKEditor for the current textarea
                ClassicEditor
                    .create(document.querySelector('#' + editorId))
                    .catch(error => {

                        console.error("im getting error", error);
                    });

                ClassicEditor
                    .create(document.querySelector('#' + editorId2))
                    .catch(error => {

                        console.error("im getting error", error);
                    });
            });
        });
    </script>

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
                    // alert(activeId);
                    $.ajaxSetup({
                        headers: {
                            'X-CSRF-TOKEN': csrfToken,
                        },
                    });

                    // Send an AJAX request to update the "active" status
                    $.ajax({
                        type: 'POST',
                        url: `/about-activate/${activeId}`,
                        data: {
                            active: isChecked ? '1' : '0'
                        },
                        success: function(data) {
                            if (data.success) {
                                if (isChecked) {
                                    Swal.fire('Success',
                                        'About Us activated successfully.',
                                        'success');
                                } else {
                                    Swal.fire('Success',
                                        'About Us deactivated successfully.',
                                        'success');
                                }
                            } else {
                                Swal.fire('Error', 'Error updating about us status.',
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
