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
                    <h4 class="header-title">About Us Item</h4>
                    <div class="table-responsive datatable-primary">
                        <table id="dataTable2" class="text-center33">
                            <thead class="text-capitalize">
                                <tr>
                                    <th>S/N</th>
                                    <th>Title</th>
                                    <th>Percent</th>
                                    <th>Color</th>
                                    <th>Activate</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php
                                    $i = 1;
                                @endphp
                                @foreach ($aboutItems as $item)
                                    <tr>
                                        <th>{{ $i++ }}</th>
                                        <td>{{ $item->bar_title }} </td>
                                        <td>{{ $item->bar_percent }} </td>
                                        <td>{{ $item->bar_bg_color }} </td>

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
                                    <div class="modal fade" id="editModalCenter{{ $item->id }}" aria-hidden="true"
                                        style="display: none;">
                                        <div class="modal-dialog modal-dialog-centered" role="document">
                                            <div class="modal-content">
                                                <form action="{{ route('about-us-item.update', $item->id) }}"
                                                    method="POST" enctype="multipart/form-data">

                                                    @csrf
                                                    @method('PUT')

                                                    <input type="hidden" value="{{ $item->id }}" name="id">

                                                    <div class="modal-header">
                                                        <h5 class="modal-title">Edit About Us Item</h5>
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
                                                                    name="bar_title" value="{{ $item->bar_title }}">
                                                            </div>

                                                            <div class="form-group col-md-12">
                                                                <label>Percent</label>
                                                                <input type="text" class="form-control" placeholder=""
                                                                    name="bar_percent" value="{{ $item->bar_percent }}">
                                                            </div>

                                                            <div class="form-group col-md-12">
                                                                <label>Color</label>
                                                                <input type="text" class="form-control" placeholder=""
                                                                    name="bar_bg_color" value="{{ $item->bar_bg_color }}">
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


                                    {{-- delete modal  --}}
                                    <div class="modal fade" id="deleteModalCenter{{ $item->id }}" aria-hidden="true"
                                        style="display: none;">
                                        <div class="modal-dialog modal-dialog-centered" role="document">
                                            <div class="modal-content">

                                                <div class="modal-header">
                                                    <h5 class="modal-title">Delete About Us Item</h5>
                                                    <button type="button" class="close"
                                                        data-dismiss="modal"><span>×</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <form action="{{ route('about-us-item.destroy', $item->id) }}"
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

                <form id="create-form">
                    @csrf

                    <div class="modal-header">
                        <h5 class="modal-title">Create About Us Item</h5>
                        <button type="button" class="close" data-dismiss="modal"><span>×</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <p>
                        <div class="form-row">

                            <div class="form-group col-md-12">
                                <label>Title</label>
                                <input id="bar_title" type="text" class="form-control" placeholder=""
                                    name="bar_title" value="">
                            </div>

                            <div class="form-group col-md-12">
                                <label>Percent</label>
                                <input id="bar_percent" type="text" class="form-control" placeholder=""
                                    name="bar_percent" value="">
                            </div>

                            <div class="form-group col-md-12">
                                <label>Color</label>
                                <input id="bar_bg_color" type="text" class="form-control" placeholder=""
                                    name="bar_bg_color" value="">
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
                    // alert(activeId);
                    $.ajaxSetup({
                        headers: {
                            'X-CSRF-TOKEN': csrfToken,
                        },
                    });

                    // Send an AJAX request to update the "active" status
                    $.ajax({
                        type: 'POST',
                        url: `/about-us-item-activate/${activeId}`,
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


    <script>
        $(document).ready(function() {
            // Handle form submission via Ajax
            $('#create-form').on('submit', function(e) {
                e.preventDefault();

                $token = $("input[name='_token']").val();

                $.ajax({
                    headers: {
                        'X-CSRF-TOKEN': $token
                    },
                    url: '{{ route('about-us-item.store') }}',
                    type: 'POST',
                    data: $(this).serialize(),
                    success: function(response) {
                        if (response.success) {
                            Swal.fire('Success',
                                'About Us activated successfully.',
                                'success');
                        } else {
                            Swal.fire('Error', 'Error updating about us status.',
                                'error');
                        }

                        $('#exampleModalCenter').modal('hide');
                        location.reload(true);

                    }
                });
            });
        });

        // $(document).ready(function() {
        //     // Handle form submission via Ajax
        //     $.ajax({
        //         headers: {
        //             'X-CSRF-TOKEN': $token
        //         },
        //         url: '{{ route('about-us-item.index') }}',
        //         type: 'GET',
        //         data: $(this).serialize(),
        //         success: function(response) {
        //             console.log('====================================');
        //             console.log(response);
        //             console.log('====================================');
        //         }
        //     });
        // });
    </script>

    <script>
        // $(document).ready(function() {
        //     var id;
        //     $(".edit-action").on('click', function() {
        //         id = $(this).attr('id');
        //         // Set the fileId as a data attribute for the submit button in the modal
        //         $("#submitEdit").data('fileid', id);
        //     });



        //     $("#update-form").on('submit', function(e) {
        //         e.preventDefault();

        //         $token = $("input[name='_token']").val();

        //         $.ajax({
        //             headers: {
        //                 'X-CSRF-TOKEN': $token
        //             },
        //             url: '/about-us-item/' + id,
        //             type: 'PUT',
        //             data: $(this).serialize(),

        //             success: function(response) {
        //                 if (response.success) {
        //                     Swal.fire('Success',
        //                         response.success,
        //                         'success');
        //                 } else {
        //                     Swal.fire('Error', 'Error updating about us status.',
        //                         'error');
        //                 }

        //                 // $('#editModalCenter').modal('hide');
        //                 location.reload(true);

        //             }
        //         });
        //     });

        // });
    </script>
@endsection
