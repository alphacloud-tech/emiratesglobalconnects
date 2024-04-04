@extends('layouts.siteLayout')
@section('pageTitle')
    Cleverbiz - Real Estate
@endsection
@section('setHomeActive')
    active
@endsection


@section('content')
    <div class="main-content-inner">
        <div class="row">
            <div class="col-lg-12 mb-4">
                <div class="card">
                    <div class="card-body">
                        <h3>
                            Mailbox
                            <small>{{ count($messages) }} new messages</small>
                        </h3>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            {{-- <div class="col-lg-3 col-sm-12">
                <div class="card">
                    <div class="card-body">
                        <a class="btn btn-primary btn-block" href="javascript:void(0);">Compose</a>
                        <ul class="list-unstyled mail_tabs">
                            <li class="active">
                                <a href="javascript:void(0);"> <i class="fa fa-inbox"></i> Inbox <span
                                        class="badge badge-primary pull-right">6</span> </a>
                            </li>
                            <li class="">
                                <a href="javascript:void(0);"> <i class="fa fa-send-o"></i> Sent </a>
                            </li>
                            <li class="">
                                <a href="javascript:void(0);"> <i class="fa fa-edit"></i> Drafts <span
                                        class="badge badge-accent pull-right">2</span> </a>
                            </li>
                            <li class="">
                                <a href="javascript:void(0);"> <i class="fa fa-star-o"></i> Important </a>
                            </li>
                            <li class="">
                                <a href="javascript:void(0);"> <i class="fa fa-trash-o"></i> Trash </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div> --}}
            <div class="col-lg-12 col-sm-12 mt-mob-4">
                <div class="card">
                    <div class="card-body">
                        <div class="mail_content">
                            <div class="row">
                                <div class="col-lg-12">
                                    <h3 class="mail_head">Inbox <span
                                            class="inbox_numb bg-primary">{{ count($messages) }}</span></h3>
                                </div>
                                <div class="col-lg-12">
                                    <div class="pull-right all_mails_btn">
                                        <div class="btn-group btn-split mail_more_btn mt-0">
                                            {{-- <button type="button" class="btn btn-primary">All Mails</button>
                                            <button type="button"
                                                class="btn btn-primary dropdown-toggle dropdown-toggle-split"
                                                data-toggle="dropdown">
                                                <span class="sr-only">Toggle Dropdown</span>
                                            </button>
                                            <div class="dropdown-menu">
                                                <a class="dropdown-item" href="#">Dropdown</a>
                                                <a class="dropdown-item" href="#">Another action</a>
                                                <a class="dropdown-item" href="#">Something else here</a>
                                                <div class="dropdown-divider"></div>
                                                <a class="dropdown-item" href="#">Separated link</a>
                                            </div> --}}

                                            <a class="btn btn-primary btn-block" href="javascript:void(0);"
                                                class="btn btn-sm btn-primary btn-inverse-primary" data-toggle="modal"
                                                data-target="#exampleModalCenter" title="Compose">Compose</a>
                                        </div>
                                    </div>
                                </div>

                                <div class="mail_list col-lg-12 table-responsive">
                                    <table class="table table-striped table-hover">
                                        <tbody>
                                            @foreach ($messages as $item)
                                                <tr class="unread" id="mail_msg_1">
                                                    {{-- <td class="">
                                                        <div class="custom-control custom-checkbox primary-checkbox">
                                                            <input type="checkbox" checked class="custom-control-input"
                                                                id="customCheck1" />
                                                            <label class="custom-control-label" for="customCheck1"></label>
                                                        </div>
                                                    </td> --}}
                                                    {{-- <td class="">
                                                        <div class="star"><i class="fa fa-star-o icon-accent"></i></div>
                                                    </td> --}}
                                                    <td class="open-view" style="width: 150px">{{ $item->fullname }}</td>
                                                    {{-- <td class="open-view">{{ $item->email }}</td> --}}
                                                    <td class="open-view"> <span class="label label-secondary mr-2">
                                                            {{ $item->email }}
                                                        </span>&nbsp;
                                                    </td>
                                                    <td class="open-view"> <span class="label label-primary mr-2">
                                                            {{ $item->phone }}
                                                        </span>&nbsp;
                                                    </td>
                                                    <td class="open-view">


                                                        <span class="msgtext">
                                                            {!! \Illuminate\Support\Str::limit($item->message, 50) !!}
                                                            <i class="fa fa-eye mr-1 btn btn-warning" data-toggle="modal"
                                                                data-target="#showModalCenterdescription{{ $item->id }}"
                                                                class="edit" title="Edit" data-toggle="tooltip">
                                                            </i>
                                                        </span>
                                                    </td>

                                                    <td class="open-view">
                                                        <span class="msg_time">
                                                            {{-- {{ $item->created_at }} --}}
                                                            {{ \Carbon\Carbon::parse($item->created_at)->format('D, M j, Y \a\t g:ia') }}

                                                        </span>
                                                    </td>

                                                    <td>
                                                        <a type="button" class="btn btn-danger" data-toggle="modal"
                                                            data-target="#deleteModalCenter{{ $item->id }}"
                                                            class="delete" title="Delete" data-toggle="tooltip">
                                                            <i class="fa fa-trash" style="color: #fff; font-weight:700"></i>
                                                        </a>
                                                    </td>
                                                </tr>


                                                <div class="modal fade" id="showModalCenterdescription{{ $item->id }}">
                                                    <div class="modal-dialog">
                                                        <div class="modal-content">
                                                            <div class="modal-body">
                                                                <p>
                                                                    {!! $item->message !!}
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
                                                <div class="modal fade" id="deleteModalCenter{{ $item->id }}"
                                                    aria-hidden="true" style="display: none;">
                                                    <div class="modal-dialog modal-dialog-centered" role="document">
                                                        <div class="modal-content">

                                                            <div class="modal-header">
                                                                <h5 class="modal-title">Delete message</h5>
                                                                <button type="button" class="close"
                                                                    data-dismiss="modal"><span>×</span>
                                                                </button>
                                                            </div>
                                                            <div class="modal-body">
                                                                <form action="{{ route('messages.destroy', $item->id) }}"
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

                                    <nav aria-label="Page navigation" class="mt-4">
                                        <ul class="pagination justify-content-center">
                                            <li class="page-item disabled">
                                                <a class="page-link" href="#" tabindex="-1">
                                                    <span class="fa fa-angle-left"></span>
                                                </a>
                                            </li>
                                            <li class="page-item"><a class="page-link" href="#">1</a></li>
                                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                                            <li class="page-item">
                                                <a class="page-link" href="#">
                                                    <span class="fa fa-angle-right"></span>
                                                </a>
                                            </li>
                                        </ul>
                                    </nav>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="exampleModalCenter">
        <div class="modal-dialog modal-lg1">
            <div class="modal-content">
                <form action="{{ route('team.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf

                    <div class="modal-header">
                        <h5 class="modal-title">Send Message</h5>
                        <button type="button" class="close" data-dismiss="modal"><span>×</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <p>
                        <div class="form-row">

                            <div class="form-group col-md-12">
                                <label>Email</label>
                                <input type="email" class="form-control" placeholder="" name="email">
                            </div>

                            <div class="form-group col-md-12">
                                <label>Message</label>
                                <textarea class="form-control" name="message" cols="30" rows="10" id="editor1"></textarea>
                            </div>

                        </div>
                        </p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Send</button>
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
@endsection
