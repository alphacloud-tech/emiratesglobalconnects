{{-- <div> --}}
{{-- Knowing others is intelligence; knowing yourself is true wisdom. --}}

@extends('layouts.app')

@section('title', 'About Us')
@section('content')

    <!-- Start of Breadcrumb section ============================================= -->
    <section id="ft-breadcrumb" class="ft-breadcrumb-section position-relative"
        data-background="{{ asset('frontend/assets/img/bg/bread-bg.jpg') }} ">
        <span class="background_overlay"></span>
        <span class="design-shape position-absolute">
            <img src=" {{ asset('frontend/assets/img/shape/tmd-sh.png') }}" alt=""></span>
        <div class="container">
            <div class="ft-breadcrumb-content headline text-center position-relative">
                <h2>About</h2>
                <div class="ft-breadcrumb-list ul-li">
                    <ul>
                        <li><a href="{{ url('/') }}">Home</a></li>
                        <li>About</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!-- End of Breadcrumb section  ============================================= -->

    <!-- Start of About section ============================================= -->
    <livewire:about />
    <!-- End of About section ============================================= -->

    <!-- Start of funfact section ============================================= -->
    <livewire:call-to-action />
    <!-- End of funfact section ============================================= -->

    <!-- Start of goodness feature section ============================================= -->
    <section id="ft-goodness-feature" class="ft-goodness-feature-section">
        <div class="container">
            <div class="ft-section-title-2 headline pera-content text-center">
                <span class="sub-title">Our Goodness</span>
                <h2>What Make Us Special</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et
                    dolore magna aliqua.</p>
            </div>
            <div class="ft-goodness-featured-content">
                <div class="row">
                    <div class="col-lg-4 col-md-6">
                        <div class="ft-goodness-featured-innerbox text-center">
                            <div class="ft-goodness-featured-icon d-flex align-items-center justify-content-center">
                                <i class="fal fa-anchor"></i>
                            </div>
                            <div class="ft-goodness-featured-text headline pera-content">
                                <h3>Trusted Franchise</h3>
                                <p>Dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra
                                    maecenas accumsan vel facilisis. </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="ft-goodness-featured-innerbox text-center">
                            <div class="ft-goodness-featured-icon d-flex align-items-center justify-content-center">
                                <i class="fal fa-user-headset"></i>
                            </div>
                            <div class="ft-goodness-featured-text headline pera-content">
                                <h3>Customer Support</h3>
                                <p>Dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra
                                    maecenas accumsan vel facilisis. </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="ft-goodness-featured-innerbox text-center">
                            <div class="ft-goodness-featured-icon d-flex align-items-center justify-content-center">
                                <i class="fal fa-badge-sheriff"></i>
                            </div>
                            <div class="ft-goodness-featured-text headline pera-content">
                                <h3>Reliability & Punctuality</h3>
                                <p>Dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra
                                    maecenas accumsan vel facilisis. </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End of goodness feature section ============================================= -->

    <!-- Start of Video section ============================================= -->
    <section id="ft-video" class="ft-video-section">
        <div class="container">
            <div class="ft-video-content position-relative">
                <div class="ft-video-img-play-btn">
                    <div class="ft-video-img">
                        <img src="{{ asset('frontend/assets/img/bg/v-bg.jpg') }} " alt="">
                    </div>
                    <div class="ft-video-play">
                        <a class="d-flex justify-content-center align-items-center position-relative video_box"
                            href="https://www.youtube.com/watch?v=C4jjFanHZo8">
                            <i class="fas fa-play"></i>
                            <span class="video_btn_border border_wrap-1"></span>
                            <span class="video_btn_border border_wrap-2"></span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End of Video section ============================================= -->

    <!-- Start of Testimonial section ============================================= -->
    <livewire:testimonial2 />
    <!-- End of Testimonial section  ============================================= -->


@endsection


@section('styles')
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/animated-slider.css') }} ">
@endsection


@section('scripts')
    <script src="{{ asset('frontend/assets/js/gmaps.min.js') }} "></script>
    {{-- <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDk2HrmqE4sWSei0XdKGbOMOHN3Mm2Bf-M&amp;ver=2.1.6"> --}}
    </script>
    <script src="{{ asset('frontend/assets/js/jquery.nice-select.min.js') }} "></script>

@endsection


{{-- </div> --}}
