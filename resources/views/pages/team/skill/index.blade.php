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
                    <h4 class="header-title">Team Skills Percent</h4>
                    <div class="table-responsive datatable-primary">
                        <table id="dataTable2" class="text-center33">
                            <thead class="text-capitalize">
                                <tr>
                                    <th>S/N</th>
                                    <th>Name</th>
                                    <th>Percent (%)</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php
                                    $i = 1;
                                @endphp
                                @foreach ($skills as $item)
                                    <tr>
                                        <th>{{ $i++ }}</th>

                                        <td>{{ $item->name }} </td>
                                        <td>{{ $item->skillPercent->percentage }} </td>

                                        <td>
                                            <i class="fa fa-pencil mr-1 btn btn-success" data-toggle="modal"
                                                data-target="#editModalCenter{{ $item->id }}" class="edit"
                                                title="Edit" data-toggle="tooltip"></i>
                                            <i class="fa fa-trash btn btn-danger" class="btn btn-danger" data-toggle="modal"
                                                data-target="#deleteModalCenter{{ $item->id }}" class="delete"
                                                title="Delete" data-toggle="tooltip"></i>
                                        </td>
                                    </tr>

                                    <!-- Edit Modal -->
                                    <div class="modal fade" id="editModalCenter{{ $item->id }}">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <form action="{{ route('skills.update', $item->id) }}" method="POST"
                                                    enctype="multipart/form-data">

                                                    @csrf
                                                    @method('PUT')

                                                    <div class="modal-header">
                                                        <h5 class="modal-title">Edit Team Skill</h5>
                                                        <button type="button" class="close"
                                                            data-dismiss="modal"><span>×</span>
                                                        </button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <p>
                                                        <div class="form-row">
                                                            <div class="form-group col-md-12">
                                                                <label>Skill</label>
                                                                <input type="text" class="form-control" placeholder=""
                                                                    name="name" value="{{ $item->name }}">
                                                            </div>

                                                            <div class="form-group col-md-12">
                                                                <label>Percentage</label>
                                                                <select class="custom-select" name="skill_percent_id">
                                                                    <option value="" selected>Choose
                                                                        percentage
                                                                    </option>
                                                                    @foreach ($percents as $percent)
                                                                        <option value="{{ $percent->id }}"
                                                                            @if ($percent->id == $item->skillPercent->id) selected @endif>
                                                                            {{ $percent->percentage }}
                                                                        </option>
                                                                    @endforeach
                                                                </select>
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
                                                    <h5 class="modal-title">Delete cause list</h5>
                                                    <button type="button" class="close"
                                                        data-dismiss="modal"><span>×</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <form action="{{ route('skills.destroy', $item->id) }}" method="POST">
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
                <form action="{{ route('skills.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf

                    <div class="modal-header">
                        <h5 class="modal-title">Create Team Skill</h5>
                        <button type="button" class="close" data-dismiss="modal"><span>×</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <p>
                        <div class="form-row">
                            <div class="form-group col-md-12">
                                <label>Skill</label>
                                <input type="text" class="form-control" placeholder="" name="name" value="">
                            </div>

                            <div class="form-group col-md-12">
                                <label>Percentage</label>
                                <select class="custom-select" name="skill_percent_id">
                                    <option selected="">Choose percentage</option>
                                    @foreach ($percents as $item)
                                        <option value="{{ $item->id }}">{{ $item->percentage }}</option>
                                    @endforeach
                                </select>
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
@endsection


@section('scripts')
    {{-- <script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
    <script src="{{ asset('js/multislider.js') }}"></script> --}}
@endsection
