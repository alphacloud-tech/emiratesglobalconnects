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
                                                        <a href="javascript:void(0);"
                                                            class="view_proj">{{ $item->title }}</a>
                                                        <span>
                                                            <a href="{{ asset($item->image_url) }}"
                                                                class="fancybox open_img"><i class="fa fa-plus"></i></a>
                                                        </span>

                                                        <span>
                                                            <form action="{{ route('gallery.destroy', $item->id) }}"
                                                                method="POST">
                                                                @csrf
                                                                @method('DELETE')
                                                                <button type="submit" class="btn btn-rounded btn-danger">
                                                                    <span class="btn-icon-center">
                                                                        <i class="fa fa-trash"></i>
                                                                    </span>
                                                                </button>
                                                            </form>
                                                        </span>

                                                        {{-- <span>
                                                            <label class="switch">
                                                                <input type="checkbox" checked id="toggle"
                                                                    data-active-id="{{ $item->id }}" name="active"
                                                                    data-active="{{ $item->active ? '1' : '0' }}">
                                                                <span class="slider round"></span>
                                                            </label>
                                                        </span> --}}
                                                    </h3>
                                                </figcaption>
                                            </figure>
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
                            <label>Title</label>
                            <input type="text" class="form-control" placeholder="" name="title">
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

    <script>
        $(document).ready(function() {
            $('[data-toggle="tooltip"]').tooltip();
        });
    </script>

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
