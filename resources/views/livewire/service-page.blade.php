{{-- <div> --}}
{{-- Knowing others is intelligence; knowing yourself is true wisdom. --}}

@extends('layouts.app')

@section('title', 'Services')
@section('content')

    <!-- Start of Breadcrumb section ============================================= -->
    <section id="ft-breadcrumb" class="ft-breadcrumb-section position-relative"
        data-background="{{ asset('frontend/assets/img/bg/bread-bg.jpg') }} ">
        <span class="background_overlay"></span>
        <span class="design-shape position-absolute">
            <img src=" {{ asset('frontend/assets/img/shape/tmd-sh.png') }}" alt=""></span>
        <div class="container">
            <div class="ft-breadcrumb-content headline text-center position-relative">
                <h2>Services</h2>
                <div class="ft-breadcrumb-list ul-li">
                    <ul>
                        <li><a href="{{ url('/') }}">Home</a></li>
                        <li>Services</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!-- End of Breadcrumb section  ============================================= -->


    <!-- Start of Service page section  ============================================= -->
    <section id="ft-service-page" class="ft-service-page-section page-padding">
        <div class="container">
            <div class="ft-section-title-2 headline pera-content text-center">
                <span class="sub-title">Featured</span>
                <h2>We are optimists who Love
                    to <span>work together</span>.
                </h2>
            </div>
            <div class="ft-service-page-items">
                <div class="row">
                    @php
                        $i = 1;
                    @endphp
                    @foreach ($services as $item)
                        @php
                            $title = strtolower(str_replace(' ', '-', $item->title));
                        @endphp
                        <div class="col-lg-3 col-md-6">
                            <div class="ft-service-innerbox-2 position-relative">
                                <div class="ft-service-img text-center" style="width: 254px; height: 199px">
                                    {{-- <img src="{{ asset('frontend/assets/img/service/ser4.2.jpg') }} " alt=""> --}}
                                    <img src="{{ asset($item->image_url_dark) }}" alt="" height="199px"
                                        width="254px">
                                </div>
                                <div class="ft-service-text position-relative headline">
                                    <div
                                        class="ft-service-icon position-absolute d-flex align-items-center justify-content-center">
                                        <i class="flaticon-free-shipping"></i>
                                    </div>
                                    <h3 style="font-size: 16px"><a
                                            href="{{ route('service.single', $title) }}">{{ $item->title }}</a></h3>
                                    <div class="ft-btn-2">
                                        <a href="{{ route('service.single', $title) }}">
                                            <i class="icon-first flaticon-right-arrow"></i>
                                            <span>Read More</span>
                                        </a>
                                    </div>
                                </div>
                                <div class="ft-service-serial position-absolute">
                                    0{{ $i++ }}
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
                {{ $services->links() }}
            </div>
        </div>
    </section>
    <!-- End of Service page section ============================================= -->
    {{-- <livewire:project2 /> --}}
    <livewire:gallery />
    <!-- Start of Project section ============================================= -->

    <!-- End of Project section ============================================= -->

    <!-- Start of FAQ why choose  section ============================================= -->
    <livewire:faq />
    <!-- End of FAQ why choose  section ============================================= -->

@endsection


@section('styles')

@endsection


@section('scripts')


@endsection


{{-- </div> --}}
