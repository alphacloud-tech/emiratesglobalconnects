@extends('layouts.app')

@section('title', 'Team')
@section('content')

    <!-- Start of Breadcrumb section ============================================= -->
    <section id="ft-breadcrumb" class="ft-breadcrumb-section position-relative"
        data-background="{{ asset('frontend/assets/img/bg/bread-bg.jpg') }} ">
        <span class="background_overlay"></span>
        <span class="design-shape position-absolute">
            <img src=" {{ asset('frontend/assets/img/shape/tmd-sh.png') }}" alt=""></span>
        <div class="container">
            <div class="ft-breadcrumb-content headline text-center position-relative">
                <h2>Team</h2>
                <div class="ft-breadcrumb-list ul-li">
                    <ul>
                        <li><a href="{{ url('/') }}">Home</a></li>
                        <li>Team</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!-- End of Breadcrumb section  ============================================= -->

    <!-- Start of Team  page section ============================================= -->
    <section id="ft-team-page" class="ft-team-page-section page-padding">
        <div class="container">
            <div class="ft-team-content">
                <div class="row">

                    @foreach ($teams as $item)
                        @php
                            $name = strtolower(str_replace(' ', '-', $item->name));
                        @endphp
                        <div class="col-lg-3 col-md-6">
                            <div class="ft-team-inner-itembox position-relative">
                                <span class="hover-shape position-absolute"><img
                                        src="{{ asset('frontend/assets/img/shape/tm-sh2.png') }} " alt=""></span>
                                <div class="ft-team-inner-item-img">
                                    {{-- <img src="{{ asset('frontend/assets/img/team/tm3.jpg') }} " alt=""> --}}
                                    <img src="{{ asset($item->image_url) }}" alt="{{ $item->name }}">

                                </div>
                                <div class="ft-team-inner-item-text headline">
                                    <h3><a href="{{ route('team.single', $name) }}">{{ $item->name }}</a></h3>
                                    <span>{{ $item->position }}</span>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
                {{ $teams->links() }}
            </div>
        </div>
    </section>
    <!-- End of Team  page section ============================================= -->
@endsection


@section('styles')

@endsection


@section('scripts')


@endsection


{{-- </div> --}}
