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
                        <li class="breadcrumb-item"><a href="javascript:void(0)">Property Feature</a></li>
                        <li class="breadcrumb-item active">

                            <a href="javascript:void(0)" data-toggle="modal" data-target="#exampleModalCenter">Add
                                Property Feature</a>
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
                            <h4 class="card-title"> Property Feature</h4>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered table-responsive-sm">
                                    <thead>
                                        <tr>
                                            <th>S/N</th>
                                            <th>Feature Name</th>
                                            <th>Feature Dimension</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @php
                                            $i = 1;
                                        @endphp
                                        @foreach ($features as $item)
                                            <tr>
                                                <th>{{ $i++ }}</th>

                                                <td>{{ $item->feature_name }} </td>
                                                <td>{{ $item->dimension }} </td>

                                                <td>

                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <button type="button" class="btn btn-rounded btn-primary"
                                                                data-toggle="modal"
                                                                data-target="#editModalCenter{{ $item->id }}">
                                                                <span class="btn-icon-left text-info"><i
                                                                        class="fa fa-edit color-info"></i>
                                                                </span>edit
                                                            </button>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <form action="{{ route('feature.destroy', $item->id) }}"
                                                                method="POST">
                                                                @csrf
                                                                @method('DELETE')
                                                                <button type="submit" class="btn btn-rounded btn-danger">
                                                                    <span class="btn-icon-left text-info"><i
                                                                            class="fa fa-edit color-info"></i></span>
                                                                    Delete
                                                                </button>
                                                            </form>
                                                        </div>
                                                    </div>


                                                </td>
                                            </tr>

                                            <!-- Edit Modal -->
                                            <div class="modal fade" id="editModalCenter{{ $item->id }}"
                                                aria-hidden="true" style="display: none;">
                                                <div class="modal-dialog modal-dialog-centered" role="document">
                                                    <div class="modal-content">
                                                        <form action="{{ route('feature.update', $item->id) }}"
                                                            method="POST" enctype="multipart/form-data">

                                                            @csrf
                                                            @method('PUT')

                                                            <div class="modal-header">
                                                                <h5 class="modal-title">Edit Property Feature</h5>
                                                                <button type="button" class="close"
                                                                    data-dismiss="modal"><span>×</span>
                                                                </button>
                                                            </div>
                                                            <div class="modal-body">
                                                                <p>
                                                                <div class="form-row">
                                                                    <div class="form-group col-md-12">
                                                                        <label>Feature Name</label>
                                                                        <input type="text" class="form-control"
                                                                            placeholder="Living Room" name="feature_name"
                                                                            value="{{ $item->feature_name }}">
                                                                    </div>
                                                                </div>

                                                                <div class="form-row">
                                                                    <div class="form-group col-md-12">
                                                                        <label>Feature Dimension</label>
                                                                        <input type="text" class="form-control"
                                                                            placeholder="20 x 16 sq feet" name="dimension"
                                                                            value="{{ $item->dimension }}">
                                                                    </div>
                                                                </div>
                                                                </p>
                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-secondary"
                                                                    data-dismiss="modal">Close</button>
                                                                <button type="submit" class="btn btn-primary">Save</button>
                                                            </div>
                                                        </form>
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
                        <form action="{{ route('feature.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf

                            <div class="modal-header">
                                <h5 class="modal-title">Create Property Feature</h5>
                                <button type="button" class="close" data-dismiss="modal"><span>×</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <p>
                                <div class="form-row">
                                    <div class="form-group col-md-12">
                                        <label>Feature Name</label>
                                        <input type="text" class="form-control" placeholder="Living Room"
                                            name="feature_name" value="">
                                    </div>
                                </div>

                                <div class="form-row">
                                    <div class="form-group col-md-12">
                                        <label>Feature Dimension</label>
                                        <input type="text" class="form-control" placeholder="20 x 16 sq feet"
                                            name="dimension" value="">
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
    <style>

    </style>
@endsection


@section('scripts')
    {{-- <script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
    <script src="{{ asset('js/multislider.js') }}"></script> --}}
@endsection
