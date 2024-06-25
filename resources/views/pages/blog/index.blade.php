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
                    <h4 class="header-title">Blog</h4>
                    <div class="table-responsive datatable-primary">
                        <table id="dataTable2" class="text-centerss">
                            <thead class="text-capitalize">
                                <tr>
                                    <th>S/N</th>
                                    <th>Image</th>
                                    <th>Title</th>
                                    <th>Category</th>
                                    <th>Description</th>
                                    <th>Quote</th>
                                    <th>Active/Inactive</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php
                                    $i = 1;
                                @endphp
                                @foreach ($blogs as $item)
                                    <tr>
                                        <th>{{ $i++ }}</th>
                                        <td><img width="100px" src="{{ asset($item->image_url) }}"
                                                alt="{{ $item->title }}"></td>
                                        <td>{{ $item->title }} </td>
                                        <td>{{ $item->category->name }}</td>
                                        <td>
                                            {!! \Illuminate\Support\Str::limit($item->content, 50) !!}

                                            <i class="fa fa-eye mr-1 btn btn-warning" data-toggle="modal"
                                                data-target="#showModalCenterdescription{{ $item->id }}" class="edit"
                                                title="Edit" data-toggle="tooltip">
                                            </i>
                                        </td>
                                        <td>
                                            @if ($item->quote)
                                                {!! \Illuminate\Support\Str::limit($item->quote->quote_content, 50) !!}
                                                <i class="fa fa-eye mr-1 btn btn-warning" data-toggle="modal"
                                                    data-target="#showModalCenterbiography{{ $item->id }}"
                                                    class="edit" title="Edit" data-toggle="tooltip">
                                                </i>
                                            @else
                                                No Quote
                                            @endif
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
                                            <i class="fa fa-pencil mr-1 btn btn-success" data-toggle="modal"
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
                                                <form action="{{ route('blog.update', $item->id) }}" method="POST"
                                                    enctype="multipart/form-data">

                                                    @csrf
                                                    @method('PUT')

                                                    <input type="hidden" value="{{ $item->image_url }}" name="old_img">

                                                    <div class="modal-header">
                                                        <h5 class="modal-title">Edit blog post</h5>
                                                        <button type="button" class="close"
                                                            data-dismiss="modal"><span>×</span>
                                                        </button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <p>
                                                        <div class="form-row">

                                                            <div class="form-group col-md-6">

                                                            </div>
                                                            <div class="form-group col-md-6"
                                                                style="padding-right: 0; margin-right: 0">
                                                                <label>Preview</label>
                                                                <div class="input-group mb-3">
                                                                    <img id="imagePreviewOne{{ $item->id }}"
                                                                        src="{{ asset($item->image_url) }}"
                                                                        alt="Image Preview"
                                                                        style="max-width: 100%; display: non;">
                                                                </div>
                                                            </div>

                                                            <div class="form-group col-md-6">
                                                                <label>Title</label>
                                                                <input type="text" class="form-control" placeholder=""
                                                                    name="title" value="{{ $item->title }}">
                                                            </div>

                                                            <div class="form-group col-md-6">
                                                                <label>Category</label>
                                                                <select class="custom-select" name="category_id">
                                                                    <option value="" selected>Choose category
                                                                    </option> <!-- Preselect the default option -->
                                                                    @foreach ($categories as $category)
                                                                        <option value="{{ $category->id }}"
                                                                            @if ($category->id == $item->category->id) selected @endif>
                                                                            {{ $category->name }}
                                                                        </option>
                                                                    @endforeach
                                                                </select>
                                                            </div>


                                                            <div class="form-group col-md-12">
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

                                                            <div class="form-group col-md-12">
                                                                <label>Quote Content</label>
                                                                <textarea class="ckeditor-textarea" name="quote_content" cols="30" rows="10"
                                                                    id="editor1{{ $item->id }}">{{ $item->quote->quote_content ?? '' }}</textarea>
                                                            </div>

                                                            <div class="form-group col-md-12">
                                                                <label>Description</label>
                                                                <textarea class="ckeditor-textarea" name="content" cols="30" rows="10" id="editor2{{ $item->id }}">{!! $item->content !!}</textarea>
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
                                                        {!! $item->content !!}
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
                                                        @if ($item->quote)
                                                            {!! $item->quote->quote_content !!}
                                                        @endif
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
                                                    <h5 class="modal-title">Delete blog post</h5>
                                                    <button type="button" class="close"
                                                        data-dismiss="modal"><span>×</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <form action="{{ route('blog.destroy', $item->id) }}" method="POST">
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

        <div class="modal fade" id="exampleModalCenter">
            <div class="modal-dialog modal-lg2">
                <div class="modal-content">
                    <form action="{{ route('blog.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf

                        <div class="modal-header">
                            <h5 class="modal-title">Create blog post</h5>
                            <button type="button" class="close" data-dismiss="modal"><span>×</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <p>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label>Title</label>
                                    <input type="text" class="form-control" placeholder="" name="title"
                                        value="">
                                </div>
                                <div class="form-group col-md-6">
                                    <label>Category</label>
                                    <select class="custom-select" name="category_id">
                                        <option selected="">Choose category</option>
                                        @foreach ($categories as $item)
                                            <option value="{{ $item->id }}">{{ $item->name }}</option>
                                        @endforeach
                                    </select>
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
                                    <textarea class="form-control ckeditor-textarea1" name="content" id="editor3"></textarea>
                                    {{-- <div class="summernote"></div> --}}
                                </div>

                                <div class="form-group col-md-12">
                                    <label for="quote_content">Quote Content</label>
                                    <textarea class="form-control ckeditor-textarea1" name="quote_content" id="editor4"></textarea>
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

        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@10">
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
    @endsection


    @section('scripts')
        <script>
            function previewImageOne(input) {
                // Extract the item ID from the input element's ID
                var itemId = input.id.replace('imageInput', '');
                var preview = document.getElementById('imagePreviewOne' + itemId);
                var file = input.files[0];

                if (file) {
                    var reader = new FileReader();

                    reader.onload = function(e) {
                        preview.src = e.target.result;
                        preview.style.display = 'block'; // Show the image preview
                    };

                    reader.readAsDataURL(file);
                } else {
                    // No file selected or invalid file
                    preview.src = '#';
                    preview.style.display = 'none'; // Hide the image preview
                }
            }
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

                        $.ajaxSetup({
                            headers: {
                                'X-CSRF-TOKEN': csrfToken,
                            },
                        });

                        // Send an AJAX request to update the "active" status
                        $.ajax({
                            type: 'POST',
                            url: `/blog-activate/${activeId}`,
                            data: {
                                active: isChecked ? '1' : '0'
                            },
                            success: function(data) {
                                if (data.success) {
                                    if (isChecked) {
                                        Swal.fire('Success',
                                            'Blog activated successfully.',
                                            'success');
                                    } else {
                                        Swal.fire('Success',
                                            'Blog deactivated successfully.',
                                            'success');
                                    }
                                } else {
                                    Swal.fire('Error', 'Error updating blog status.',
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
