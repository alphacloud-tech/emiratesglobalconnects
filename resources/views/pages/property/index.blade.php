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
                        <li class="breadcrumb-item"><a href="javascript:void(0)">Property</a></li>
                        <li class="breadcrumb-item active">

                            <a href="javascript:void(0)" data-toggle="modal" data-target="#exampleModalCenter">Add
                                property</a>
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
                                            <th>Location</th>
                                            <th>Category</th>
                                            <th>Property type</th>
                                            <th>Price</th>
                                            <th>Rooms</th>
                                            <th>Beds</th>
                                            <th>Bath</th>
                                            <th>Description</th>
                                            <th>Activate</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @php
                                            $i = 1;
                                        @endphp
                                        @foreach ($properties as $item)
                                            <tr>
                                                <th>{{ $i++ }}</th>
                                                <td><img width="100px" src="{{ asset($item->image_url) }}"
                                                        alt="{{ $item->title }}"></td>
                                                <td>{{ $item->title }} </td>
                                                <td>{{ $item->location }} </td>
                                                <td>{{ $item->category }} </td>
                                                <td>{{ $item->property_type }} </td>
                                                <td>{{ $item->price }} </td>
                                                <td>{{ $item->detail->rooms }} </td>
                                                <td>{{ $item->detail->beds }} </td>
                                                <td>{{ $item->detail->baths }} </td>
                                                <td>{!! \Illuminate\Support\Str::limit($item->description, 50) !!} </td>

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
                                                        <form action="{{ route('property.update', $item->id) }}"
                                                            method="POST" enctype="multipart/form-data">

                                                            @csrf
                                                            @method('PUT')

                                                            <input type="hidden" value="{{ $item->image_url }}"
                                                                name="old_img">

                                                            <div class="modal-header">
                                                                <h5 class="modal-title">Edit Property</h5>
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
                                                                            value="{{ $item->title }}">
                                                                    </div>

                                                                    <div class="form-group col-md-6">
                                                                        <label>Price</label>
                                                                        <input type="text" class="form-control"
                                                                            placeholder="1000" name="price"
                                                                            value="{{ $item->price }}">
                                                                    </div>

                                                                    <div class="form-group col-md-6">
                                                                        <label>Category</label>
                                                                        <select class="custom-select" name="category">
                                                                            <option>Choose category</option>
                                                                            <option value="FOR RENT">For Rent</option>
                                                                            <option value="FOR SELL">For Sell</option>
                                                                        </select>
                                                                    </div>

                                                                    <div class="form-group col-md-6">
                                                                        <label>Location</label>
                                                                        <input type="text" class="form-control"
                                                                            placeholder="" name="location"
                                                                            value="{{ $item->location }}">
                                                                    </div>

                                                                    <div class="form-group col-md-6">
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

                                                                    <div class="form-group col-md-6">
                                                                        <label>Facts and Features - <i
                                                                                style="color: #f44336">Multiple</i></label>
                                                                        <select multiple class="form-control"
                                                                            name="features[]" id="sel2">
                                                                            @foreach ($features as $feature)
                                                                                <option value="{{ $feature->id }}">
                                                                                    {{ $feature->feature_name }}</option>
                                                                            @endforeach
                                                                        </select>
                                                                    </div>

                                                                    <div class="form-group col-md-6">
                                                                        <label>Home Area</label>
                                                                        <input type="text" class="form-control"
                                                                            placeholder="120 sqft" name="property_area"
                                                                            value="{{ $item->detail->home_area }}">
                                                                    </div>

                                                                    <div class="form-group col-md-6">
                                                                        <label>Lot dimensions</label>
                                                                        <input type="text" class="form-control"
                                                                            placeholder="120 sqft" name="lot_dimensions"
                                                                            value="{{ $item->detail->lot_dimensions }}">
                                                                    </div>

                                                                    <div class="form-group col-md-6">
                                                                        <label>Lot Area</label>
                                                                        <input type="text" class="form-control"
                                                                            placeholder="Uniqure Id" name="lot_area"
                                                                            value="{{ $item->detail->lot_area }}">
                                                                    </div>

                                                                    <div class="form-group col-md-6">
                                                                        <label>Rooms</label>
                                                                        <input type="text" class="form-control"
                                                                            placeholder="Number of rooms" name="rooms"
                                                                            value="{{ $item->detail->rooms }}">
                                                                    </div>
                                                                    <div class="form-group col-md-6">
                                                                        <label>Beds</label>
                                                                        <input type="text" class="form-control"
                                                                            placeholder="Number of beds" name="beds"
                                                                            value="{{ $item->detail->beds }}">
                                                                    </div>
                                                                    <div class="form-group col-md-6">
                                                                        <label>Baths</label>
                                                                        <input type="text" class="form-control"
                                                                            placeholder="Number of baths" name="baths"
                                                                            value="{{ $item->detail->baths }}">
                                                                    </div>

                                                                    <div class="form-group col-md-12">
                                                                        <label>Other images ( &nbsp;<i
                                                                                style="color: red">Required 4 max
                                                                                images</i>
                                                                            &nbsp;)</label>
                                                                        <div class="input-group mb-3">
                                                                            <div class="input-group-prepend">
                                                                                <span
                                                                                    class="input-group-text">Upload</span>
                                                                            </div>
                                                                            <div class="custom-file">

                                                                                <input name="image_url_light[]"
                                                                                    class="custom-file-input"
                                                                                    id="file-upload" type="file"
                                                                                    multiple />

                                                                                <label class="custom-file-label">Choose
                                                                                    file</label>
                                                                            </div>
                                                                        </div>
                                                                    </div>

                                                                    <div class="form-group col-md-12">
                                                                        <div class="image-preview-container"></div>
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
                                                            <h5 class="modal-title">Delete Property</h5>
                                                            <button type="button" class="close"
                                                                data-dismiss="modal"><span>×</span>
                                                            </button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <form action="{{ route('property.destroy', $item->id) }}"
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
                        <form action="{{ route('property.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf

                            <div class="modal-header">
                                <h5 class="modal-title">Create property</h5>
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
                                        <label>Price</label>
                                        <input type="text" class="form-control" placeholder="1000" name="price"
                                            value="">
                                    </div>

                                    <div class="form-group col-md-6">
                                        <label>Property type</label>
                                        <select class="custom-select" name="property_type">
                                            <option selected="">Choose Property type</option>
                                            <option value="Single Room">Single Room</option>
                                            <option value="One Bed Room">One Bed Room</option>
                                            <option value="Two Bed Room">Two Bed Room</option>
                                            <option value="Three Bed Room">Three Bed Room</option>
                                            <option value="Office Villa">Office Villa</option>
                                            <option value="Studio">Studio</option>
                                            <option value="House">House</option>
                                        </select>
                                    </div>

                                    <div class="form-group col-md-6">
                                        <label>Category</label>
                                        <select class="custom-select" name="category">
                                            <option selected="">Choose category</option>
                                            <option value="FOR RENT">For Rent</option>
                                            <option value="FOR SELL">For Sell</option>
                                        </select>
                                    </div>

                                    <div class="form-group col-md-6">
                                        <label>Location</label>
                                        <input type="text" class="form-control" placeholder="" name="location"
                                            value="">
                                    </div>

                                    <div class="form-group col-md-6">
                                        <label>Main Image</label>
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
                                        <label>Home Area</label>
                                        <input type="text" class="form-control" placeholder="120 sqft"
                                            name="property_area" value="">
                                    </div>

                                    <div class="form-group col-md-6">
                                        <label>Lot dimensions</label>
                                        <input type="text" class="form-control" placeholder="120 sqft"
                                            name="lot_dimensions" value="">
                                    </div>

                                    <div class="form-group col-md-6">
                                        <label>Lot Area</label>
                                        <input type="text" class="form-control" placeholder="Uniqure Id"
                                            name="lot_area" value="">
                                    </div>

                                    <div class="form-group col-md-6">
                                        <label>Rooms</label>
                                        <input type="text" class="form-control" placeholder="Number of rooms"
                                            name="rooms" value="">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label>Beds</label>
                                        <input type="text" class="form-control" placeholder="Number of beds"
                                            name="beds" value="">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label>Baths</label>
                                        <input type="text" class="form-control" placeholder="Number of baths"
                                            name="baths" value="">
                                    </div>

                                    <div class="form-group col-md-12">
                                        <label>Facts and Features - <i style="color: #f44336">Multiple</i></label>
                                        <select multiple class="form-control" name="features[]" id="sel2">
                                            @foreach ($features as $feature)
                                                <option value="{{ $feature->id }}">{{ $feature->feature_name }}</option>
                                            @endforeach
                                        </select>
                                    </div>

                                    <div class="form-group col-md-12">
                                        <label>Other images ( &nbsp;<i style="color: red">Required 4 max
                                                images</i>
                                            &nbsp;)</label>
                                        <div class="input-group mb-3">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text">Upload</span>
                                            </div>
                                            <div class="custom-file">

                                                <input name="image_url_light[]" class="custom-file-input"
                                                    id="file-upload" type="file" multiple />

                                                <label class="custom-file-label">Choose
                                                    file</label>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group col-md-12">
                                        <div class="image-preview-container"></div>
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
                        url: `/property-activate/${activeId}`,
                        data: {
                            active: isChecked ? '1' : '0'
                        },
                        success: function(data) {
                            if (data.success) {
                                if (isChecked) {
                                    Swal.fire('Success',
                                        'Property activated successfully.',
                                        'success');
                                } else {
                                    Swal.fire('Success',
                                        'Property deactivated successfully.',
                                        'success');
                                }
                            } else {
                                Swal.fire('Error', 'Error updating property status.',
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
@endsection
