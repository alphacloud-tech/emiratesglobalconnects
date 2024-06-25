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
    <br>

    <div class="row">
        <div class="col-12 mb-4">
            <div class="card">
                <div class="card-body">
                    <h3 class="card_title">
                        Gallery
                    </h3>
                    <div id="mt_portfolio" class="gallery-section gallery-page">
                        <div class="container">
                            <div class="row portfolio_row grid-masonry">
                                <div class="isotopeContainer">
                                    @foreach ($gallerys as $item)
                                        <!-- Portfolio Item -->
                                        <div class="portfolio_grid grid no-padding isotopeSelector webdesign grid-item">
                                            <figure class="effect-chico">
                                                <img src="{{ asset($item->image_url) }}" alt="Portfolio" />
                                                <figcaption>
                                                    <h3>
                                                        {{ $item->title }}
                                                        {{-- <a href="javascript:void(0);"
                                                            class="view_proj">{{ $item->title }}</a> --}}

                                                        <br><br>
                                                        <span>
                                                            <a href="{{ asset($item->image_url) }}"
                                                                class="fancybox open_img"><i class="fa fa-plus"></i></a>

                                                            <i class="fa fa-pencil mr-1 btn btn-success" data-toggle="modal"
                                                                data-target="#editModalCenter{{ $item->id }}"
                                                                title="Edit" data-toggle="tooltip">
                                                            </i>

                                                            <i class="fa fa-trash mr-1 btn btn-danger" data-toggle="modal"
                                                                data-target="#deleteModalCenter{{ $item->id }}"
                                                                title="Delete" data-toggle="tooltip">
                                                            </i>

                                                        </span>

                                                    </h3>
                                                </figcaption>
                                            </figure>
                                        </div>

                                        {{-- delete modal  --}}
                                        <div class="modal fade" id="deleteModalCenter{{ $item->id }}">
                                            <div class="modal-dialog modal-lg2">
                                                <div class="modal-content">

                                                    <div class="modal-header">
                                                        <h5 class="modal-title">Delete Gallery</h5>
                                                        <button type="button" class="close"
                                                            data-dismiss="modal"><span>×</span>
                                                        </button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <form action="{{ route('gallery.destroy', $item->id) }}"
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


                                        <div class="modal fade" id="editModalCenter{{ $item->id }}">
                                            <div class="modal-dialog modal-lg2">
                                                <div class="modal-content">
                                                    <form action="{{ route('gallery.update', $item->id) }}" method="POST"
                                                        enctype="multipart/form-data">

                                                        @csrf
                                                        @method('PUT')

                                                        <input type="hidden" value="{{ $item->image_url }}"
                                                            name="old_img">

                                                        <div class="modal-header">
                                                            <h5 class="modal-title">Edit Gallery</h5>
                                                            <button type="button" class="close"
                                                                data-dismiss="modal"><span>×</span>
                                                            </button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <p>

                                                            <div class="form-group col-md-12">
                                                                <label>Service</label>
                                                                <select class="custom-select" name="service_id">
                                                                    <option>Choose service</option>
                                                                    @foreach ($services as $service)
                                                                        <option value="{{ $service->id }}"
                                                                            @if ($service->id == $item->service_id) selected @endif>
                                                                            {{ $service->title }}
                                                                        </option>
                                                                    @endforeach
                                                                </select>
                                                            </div>


                                                            <div class="form-group col-md-12">
                                                                <label>Images ( &nbsp;<i style="color: red">Maximum
                                                                        upload 8</i>
                                                                    &nbsp;)</label>
                                                                <div class="input-group mb-3">
                                                                    <div class="input-group-prepend">
                                                                        <span class="input-group-text">Upload</span>
                                                                    </div>
                                                                    <div class="custom-file">

                                                                        <input name="image_url" class="custom-file-input"
                                                                            id="file-upload" type="file" multiple />

                                                                        <label class="custom-file-label">Choose
                                                                            file</label>
                                                                    </div>
                                                                </div>
                                                            </div>


                                                            <div class="form-row">
                                                                {{-- <div class="form-group col-md-12">

                                                                    <img src="{{ asset($item->image_url) }}"
                                                                        alt="{{ $item->image_url }}"
                                                                        style="" width="100px">
                                                                </div> --}}
                                                                <div class="form-group col-md-12">
                                                                    <img src="{{ asset($item->image_url) }}"
                                                                        alt="{{ $item->image_url }}"
                                                                        style="width: 100%; height: 400px">
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
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                    {{-- <div class="clearfix"></div> --}}
                </div>
            </div>
        </div>
    </div>



    <div class="modal fade" id="exampleModalCenter">
        <div class="modal-dialog">
            <div class="modal-content">
                <form action="{{ route('gallery.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf

                    <div class="modal-header">
                        <h5 class="modal-title">Create Gallery</h5>
                        <button type="button" class="close" data-dismiss="modal"><span>×</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <p>
                        <div class="form-group col-md-12">
                            <label>Service</label>
                            <select class="custom-select" name="service_id">
                                <option>Choose service</option>
                                @foreach ($services as $item)
                                    <option value="{{ $item->id }}">{{ $item->title }}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="form-group col-md-12">
                            <label>Images ( &nbsp;<i style="color: red">Maximum upload 8</i>
                                &nbsp;)</label>
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">Upload</span>
                                </div>
                                <div class="custom-file">

                                    <input name="image_url[]" class="custom-file-input" id="file-upload" type="file"
                                        multiple />

                                    <label class="custom-file-label">Choose
                                        file</label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group col-md-12">
                            <div class="image-preview-container"></div>
                        </div>

                        <div class="form-row">
                            <div class="form-group col-md-12">
                                <div id="imagePreview"></div>
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

    <style>
        .upload-container {
            margin: 20px auto;
            max-width: 500px;
        }

        .custom-file-upload {
            display: inline-block;
            cursor: pointer;
            padding: 10px 20px;
            background: #4CAF50;
            color: white;
            border: none;
            border-radius: 5px;
            font-size: 16px;
        }

        .custom-file-upload:hover {
            background: #45a049;
        }

        .image-preview-container {
            display: flex;
            flex-wrap: wrap;
            margin-top: 10px;
        }

        .image-preview {
            width: 100px;
            height: 100px;
            margin: 5px;
            position: relative;
        }

        .image-preview img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            border-radius: 5px;
        }

        .image-preview .delete-btn {
            position: absolute;
            top: 5px;
            right: 5px;
            background: #f44336;
            color: white;
            border: none;
            border-radius: 50%;
            width: 25px;
            height: 25px;
            padding: 0;
            cursor: pointer;
            display: flex;
            justify-content: center;
            align-items: center;
        }
    </style>
@endsection


@section('scripts')
    <script>
        function previewImageOne(input) {
            var preview = document.getElementById('imagePreviewOne');
            alert("preview");
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
        document.getElementById('file-upload').addEventListener('change', function() {
            const previewContainer = document.querySelector('.image-preview-container');
            const files = Array.from(this.files);

            files.forEach(file => {
                const reader = new FileReader();

                reader.onload = function(e) {
                    const imagePreview = document.createElement('div');
                    imagePreview.classList.add('image-preview');

                    const image = document.createElement('img');
                    image.src = e.target.result;

                    const deleteButton = document.createElement('button');
                    deleteButton.classList.add('delete-btn');
                    deleteButton.innerHTML = '<i class="fa fa-trash"></i>';

                    deleteButton.addEventListener('click', function() {
                        previewContainer.removeChild(imagePreview);
                    });

                    imagePreview.appendChild(image);
                    imagePreview.appendChild(deleteButton);
                    previewContainer.appendChild(imagePreview);
                };

                reader.readAsDataURL(file);
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

                    $.ajaxSetup({
                        headers: {
                            'X-CSRF-TOKEN': csrfToken,
                        },
                    });

                    // Send an AJAX request to update the "active" status
                    $.ajax({
                        type: 'POST',
                        url: `/gallery-activate/${activeId}`,
                        data: {
                            active: isChecked ? '1' : '0'
                        },
                        success: function(data) {
                            if (data.success) {
                                if (isChecked) {
                                    Swal.fire('Success',
                                        'Gallery activated successfully.',
                                        'success');
                                } else {
                                    Swal.fire('Success',
                                        'gallery deactivated successfully.',
                                        'success');
                                }
                            } else {
                                Swal.fire('Error', 'Error updating gallery status.',
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
