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

        <div class="col-md-4 mt-4">
            <div class="card card-icon text-center">
                <div class="card-body">
                    {{-- <i class="fa fa-image"></i> --}}
                    <i class="">Company logo</i>

                    <p style="background-color: #EA1E00">
                        <img class="card-img-top img-fluid" src="{{ asset($setting->logo) }}" alt="Card image cap">
                    </p>
                    <br>
                    <span>
                        <a href="button" class="btn btn-primary" data-toggle="modal"
                            data-target="#editLogo{{ $setting->id }}" class="edit" title="Edit" data-toggle="tooltip">
                            Edit
                        </a>
                    </span>
                </div>
            </div>
        </div>
        <div class="col-md-4 mt-4">
            <div class="card card-icon text-center">
                <div class="card-body">
                    <i class="">Company favicon</i>

                    <p class="card-text">
                        <img src="{{ asset($setting->favicon) }}" alt="" srcset="" class="img-responsive">
                    </p>
                    <br><br>
                    <span>
                        <a href="button" class="btn btn-primary" data-toggle="modal"
                            data-target="#editfavicon{{ $setting->id }}" class="edit" title="Edit"
                            data-toggle="tooltip">
                            Edit
                        </a>
                    </span>
                </div>
            </div>
        </div>

        <div class="col-md-4 mt-4">
            <div class="card card-icon text-center">
                <div class="card-body">
                    <i class="">Company Name</i>
                    {{-- <img class="card-img-top img-fluid" src="{{ asset($setting->company_name) }}" alt="Card image cap"> --}}

                    <p class="card-text" style="color: #000">
                        {{ $setting->company_name }}
                    </p>
                    <br><br>
                    <span>
                        <a href="button" class="btn btn-primary" data-toggle="modal"
                            data-target="#editcompany_name{{ $setting->id }}" class="edit" title="Edit"
                            data-toggle="tooltip">
                            Edit
                        </a>
                    </span>
                </div>
            </div>
        </div>

        <div class="col-md-4 mt-4">
            <div class="card card-icon text-center">
                <div class="card-body">
                    <i class="">Company Address</i>
                    {{-- <img class="card-img-top img-fluid" src="{{ asset($setting->company_name) }}" alt="Card image cap"> --}}

                    <p class="card-text" style="color: #000">
                        {{ $setting->address }}
                    </p>
                    <br><br>
                    <span>
                        <a href="button" class="btn btn-primary" data-toggle="modal"
                            data-target="#editaddress{{ $setting->id }}" class="edit" title="Edit"
                            data-toggle="tooltip">
                            Edit
                        </a>
                    </span>
                </div>
            </div>
        </div>


        <div class="col-md-4 mt-4">
            <div class="card card-icon text-center">
                <div class="card-body">
                    <i class="">Company Phones</i>
                    {{-- <img class="card-img-top img-fluid" src="{{ asset($setting->company_name) }}" alt="Card image cap"> --}}

                    <p class="card-text" style="color: #000">
                        {{ $setting->phone_1 }}
                    </p>
                    <p class="card-text" style="color: #000">
                        {{ $setting->phone_2 }}
                    </p>
                    <br><br>
                    <span>
                        <a href="button" class="btn btn-primary" data-toggle="modal"
                            data-target="#editphones{{ $setting->id }}" class="edit" title="Edit"
                            data-toggle="tooltip">
                            Edit
                        </a>
                    </span>
                </div>
            </div>
        </div>

        <div class="col-md-4 mt-4">
            <div class="card card-icon text-center">
                <div class="card-body">
                    <i class="">Company Email</i>
                    {{-- <img class="card-img-top img-fluid" src="{{ asset($setting->company_name) }}" alt="Card image cap"> --}}

                    <p class="card-text" style="color: #000">
                        {{ $setting->email_1 }}
                    </p>
                    <p class="card-text" style="color: #000">
                        {{ $setting->email_2 }}
                    </p>
                    <br><br>
                    <span>
                        <a href="button" class="btn btn-primary" data-toggle="modal"
                            data-target="#editEmail{{ $setting->id }}" class="edit" title="Edit"
                            data-toggle="tooltip">
                            Edit
                        </a>
                    </span>
                </div>
            </div>
        </div>

        <div class="col-md-4 mt-4">
            <div class="card card-icon text-center">
                <div class="card-body">
                    <i class="">Company Social Media</i>
                    {{-- <img class="card-img-top img-fluid" src="{{ asset($setting->company_name) }}" alt="Card image cap"> --}}

                    <p class="card-text" style="color: #000">
                        {{ $setting->facebook }}
                    </p>
                    <p class="card-text" style="color: #000">
                        {{ $setting->instagram }}
                    </p>
                    <p class="card-text" style="color: #000">
                        {{ $setting->Youtube }}
                    </p>
                    <br><br>
                    <span>
                        <a href="button" class="btn btn-primary" data-toggle="modal"
                            data-target="#editsocial{{ $setting->id }}" class="edit" title="Edit"
                            data-toggle="tooltip">
                            Edit
                        </a>
                    </span>
                </div>
            </div>
        </div>


        <div class="col-md-4 mt-4">
            <div class="card card-icon text-center">
                <div class="card-body">
                    <i class="">Short Description</i>
                    {{-- <img class="card-img-top img-fluid" src="{{ asset($setting->company_name) }}" alt="Card image cap"> --}}

                    <p class="card-text" style="color: #000">
                        {{ $setting->description }}
                    </p>
                    <br><br>
                    <span>
                        <a href="button" class="btn btn-primary" data-toggle="modal"
                            data-target="#editdescription{{ $setting->id }}" class="edit" title="Edit"
                            data-toggle="tooltip">
                            Edit
                        </a>
                    </span>
                </div>
            </div>
        </div>


    </div>


    <div class="modal fade" id="editsocial{{ $setting->id }}">
        <div class="modal-dialog">
            <div class="modal-content">
                <form action="{{ route('social.update', $setting->id) }}" method="POST" enctype="multipart/form-data">

                    @csrf
                    @method('PUT')

                    <div class="modal-header">
                        <h5 class="modal-title">Edit Company Social Media</h5>
                        <button type="button" class="close" data-dismiss="modal"><span>×</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <p>
                        <div class="form-group col-md-12">
                            <label>Company facebook</label>
                            <input type="text" class="form-control" placeholder="" name="facebook"
                                value="{{ $setting->facebook }}">
                        </div>
                        <div class="form-group col-md-12">
                            <label>Company youtube</label>
                            <input type="text" class="form-control" placeholder="" name="youtube"
                                value="{{ $setting->youtube }}">
                        </div>
                        <div class="form-group col-md-12">
                            <label>Company instagram</label>
                            <input type="text" class="form-control" placeholder="" name="instagram"
                                value="{{ $setting->instagram }}">
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

    <div class="modal fade" id="editdescription{{ $setting->id }}">
        <div class="modal-dialog">
            <div class="modal-content">
                <form action="{{ route('description.update', $setting->id) }}" method="POST"
                    enctype="multipart/form-data">

                    @csrf
                    @method('PUT')

                    <div class="modal-header">
                        <h5 class="modal-title">Edit Company short description</h5>
                        <button type="button" class="close" data-dismiss="modal"><span>×</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <p>
                        <div class="form-group col-md-12">
                            <label>Company description</label>
                            <textarea class="form-control" name="description" id="editor" cols="30" rows="10">{{ $setting->description }}</textarea>
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

    <div class="modal fade" id="editEmail{{ $setting->id }}">
        <div class="modal-dialog">
            <div class="modal-content">
                <form action="{{ route('email.update', $setting->id) }}" method="POST" enctype="multipart/form-data">

                    @csrf
                    @method('PUT')

                    <div class="modal-header">
                        <h5 class="modal-title">Edit Email No</h5>
                        <button type="button" class="close" data-dismiss="modal"><span>×</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <p>
                        <div class="form-group col-md-12">
                            <label>Company Email No 1</label>
                            <input type="text" class="form-control" placeholder="" name="email_1"
                                value="{{ $setting->email_1 }}">
                        </div>
                        <div class="form-group col-md-12">
                            <label>Company Email No 2</label>
                            <input type="text" class="form-control" placeholder="" name="email_2"
                                value="{{ $setting->email_2 }}">
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


    <div class="modal fade" id="editphones{{ $setting->id }}">
        <div class="modal-dialog">
            <div class="modal-content">
                <form action="{{ route('phone.update', $setting->id) }}" method="POST" enctype="multipart/form-data">

                    @csrf
                    @method('PUT')

                    <div class="modal-header">
                        <h5 class="modal-title">Edit Phones No</h5>
                        <button type="button" class="close" data-dismiss="modal"><span>×</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <p>
                        <div class="form-group col-md-12">
                            <label>Company phone No 1</label>
                            <input type="text" class="form-control" placeholder="" name="phone_1"
                                value="{{ $setting->phone_1 }}">
                        </div>
                        <div class="form-group col-md-12">
                            <label>Company phone No 2</label>
                            <input type="text" class="form-control" placeholder="" name="phone_2"
                                value="{{ $setting->phone_2 }}">
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

    <div class="modal fade" id="editaddress{{ $setting->id }}">
        <div class="modal-dialog">
            <div class="modal-content">
                <form action="{{ route('address.update', $setting->id) }}" method="POST" enctype="multipart/form-data">

                    @csrf
                    @method('PUT')

                    <div class="modal-header">
                        <h5 class="modal-title">Edit Company Address</h5>
                        <button type="button" class="close" data-dismiss="modal"><span>×</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <p>
                        <div class="form-group col-md-12">
                            <label>Company Address</label>
                            <textarea class="form-control" name="address" id="editor1" cols="30" rows="10">{{ $setting->address }}</textarea>
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


    <div class="modal fade" id="editcompany_name{{ $setting->id }}">
        <div class="modal-dialog">
            <div class="modal-content">
                <form action="{{ route('company_name.update', $setting->id) }}" method="POST"
                    enctype="multipart/form-data">

                    @csrf
                    @method('PUT')

                    <div class="modal-header">
                        <h5 class="modal-title">Edit Company Name</h5>
                        <button type="button" class="close" data-dismiss="modal"><span>×</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <p>
                        <div class="form-group col-md-12">
                            <label>Company Name</label>
                            <input type="text" class="form-control" placeholder="" name="company_name"
                                value="{{ $setting->company_name }}">
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


    <div class="modal fade" id="editfavicon{{ $setting->id }}">
        <div class="modal-dialog">
            <div class="modal-content">
                <form action="{{ route('favicon.update', $setting->id) }}" method="POST" enctype="multipart/form-data">

                    @csrf
                    @method('PUT')

                    <input type="hidden" value="{{ $setting->favicon }}" name="old_img">

                    <div class="modal-header">
                        <h5 class="modal-title">Edit favicon</h5>
                        <button type="button" class="close" data-dismiss="modal"><span>×</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <p>
                        <div class="form-row">
                            <div class="form-group col-md-12">
                                <label>Image</label>
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">Upload</span>
                                    </div>
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input" name="favicon">
                                        <label class="custom-file-label">Choose
                                            file</label>
                                    </div>
                                </div>
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


    <div class="modal fade" id="editLogo{{ $setting->id }}">
        <div class="modal-dialog">
            <div class="modal-content">
                <form action="{{ route('logo.update', $setting->id) }}" method="POST" enctype="multipart/form-data">

                    @csrf
                    @method('PUT')

                    <input type="hidden" value="{{ $setting->logo }}" name="old_img">
                    <input type="hidden" value="{{ $setting->logo2 }}" name="old_img2">

                    <div class="modal-header">
                        <h5 class="modal-title">Edit logo</h5>
                        <button type="button" class="close" data-dismiss="modal"><span>×</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <p>
                        <div class="form-row">
                            <div class="form-group col-md-12">
                                <label>Logo Dark</label>
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">Upload</span>
                                    </div>
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input" name="logo">
                                        <label class="custom-file-label">Choose
                                            file</label>
                                    </div>
                                </div>
                            </div>
                            {{-- <div class="form-group col-md-12">
                                <label>Logo light</label>
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">Upload</span>
                                    </div>
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input" name="logo2">
                                        <label class="custom-file-label">Choose
                                            file</label>
                                    </div>
                                </div>
                            </div> --}}
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
