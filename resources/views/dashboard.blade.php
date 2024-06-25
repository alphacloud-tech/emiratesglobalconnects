@extends('layouts.siteLayout')
@section('pageTitle')
    Emirates Global Connect Logistics
@endsection
@section('setHomeActive')
    active
@endsection


@section('content')
    @include('pages.common.top')
    <div class="row mt-4">
        <div class="col-lg-3 col-md-6 stretched_card pl-mob-3 mb-mob-4">
            <div class="card bg-primary analytics_card">
                <div class="card-body">
                    <div class="d-flex flex-md-column flex-xl-row flex-wrap align-items-center justify-content-between">
                        <div class="icon-rounded">
                            <i class="feather ft-trending-up text-primary"></i>
                        </div>
                        <div class="text-white">
                            <p class="mt-xl-0 text-xl-left mb-2">Services</p>
                            <div
                                class="d-flex flex-md-column flex-xl-row flex-wrap align-items-baseline align-items-md-center align-items-xl-baseline">
                                <h3 class="mb-0 mb-md-1 mb-lg-0 mr-1 text-white">{{ count($services) }}</h3>
                                <small class="stats_icon"><span class="feather ft-chevron-up"></span></small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-6 stretched_card mb-mob-4">
            <div class="card bg-success analytics_card">
                <div class="card-body">
                    <div class="d-flex flex-md-column flex-xl-row flex-wrap align-items-center justify-content-between">
                        <div class="icon-rounded">
                            <i class="feather fa fa-user text-success"></i>
                        </div>
                        <div class="text-white">
                            <p class="mt-xl-0 text-xl-left mb-2">Blog Posts</p>
                            <div
                                class="d-flex flex-md-column flex-xl-row flex-wrap align-items-baseline align-items-md-center align-items-xl-baseline">
                                <h3 class="mb-0 mb-md-1 mb-lg-0 mr-1 text-white">{{ count($blogs) }}</h3>
                                <small class="stats_icon"> <span class="feather ft-chevron-up"></span></small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-6 stretched_card mb-xs-mob-4">
            <div class="card bg-danger analytics_card">
                <div class="card-body">
                    <div class="d-flex flex-md-column flex-xl-row flex-wrap align-items-center justify-content-between">
                        <div class="icon-rounded">
                            <i class="feather fa fa-inbox text-danger"></i>
                        </div>
                        <div class="text-white">
                            <p class="mt-xl-0 text-xl-left mb-2">
                                Messages/Complains
                            </p>
                            <div
                                class="d-flex flex-md-column flex-xl-row flex-wrap align-items-baseline align-items-md-center align-items-xl-baseline">
                                <h3 class="mb-0 mb-md-1 mb-lg-0 mr-1 text-white">{{ count($messages) }}</h3>
                                <small class="stats_icon"><span class="feather ft-chevron-up"></span></small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-6 stretched_card pr-mob-3">
            <div class="card bg-dark analytics_card">
                <div class="card-body">
                    <div class="d-flex flex-md-column flex-xl-row flex-wrap align-items-center justify-content-between">
                        <div class="icon-rounded">
                            <i class="feather fa fa-user text-dark"></i>
                        </div>
                        <div class="text-white">
                            <p class="mt-xl-0 text-xl-left mb-2">Our Teams</p>
                            <div
                                class="d-flex flex-md-column flex-xl-row flex-wrap align-items-baseline align-items-md-center align-items-xl-baseline">
                                <h3 class="mb-0 mb-md-1 mb-lg-0 mr-1 text-white">{{ count($teams) }}</h3>
                                <small class="stats_icon"> <span class="feather ft-chevron-up"></span></small>
                            </div>
                        </div>
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
