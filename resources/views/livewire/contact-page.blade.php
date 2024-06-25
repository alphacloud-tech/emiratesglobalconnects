@extends('layouts.app')

@section('title', 'Contact Us')
@section('content')


    <!-- Start of Breadcrumb section ============================================= -->
    <section id="ft-breadcrumb" class="ft-breadcrumb-section position-relative"
        data-background="{{ asset('frontend/assets/img/bg/bread-bg.jpg') }} ">
        <span class="background_overlay"></span>
        <span class="design-shape position-absolute">
            <img src=" {{ asset('frontend/assets/img/shape/tmd-sh.png') }}" alt=""></span>
        <div class="container">
            <div class="ft-breadcrumb-content headline text-center position-relative">
                <h2>Contact Us</h2>
                <div class="ft-breadcrumb-list ul-li">
                    <ul>
                        <li><a href="{{ url('/') }}">Home</a></li>
                        <li>Contact Us</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!-- End of Breadcrumb section  ============================================= -->

    <!-- Start of contact page section
         ============================================= -->
    <section id="ft-contact-page" class="ft-contact-page-section page-padding">
        <div class="container">
            <div class="ft-contact-page-content">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="ft-contact-page-text-wrapper">
                            <div class="ft-section-title-2 headline pera-content">
                                <span class="sub-title">Get a Quote</span>
                                <h2>Get in Touch And We’ll Help
                                    Your Business
                                </h2>
                            </div>
                            <div class="ft-contact-page-contact-info">
                                <div class="ft-contact-cta-items d-flex">
                                    <div class="ft-contact-cta-icon d-flex align-items-center justify-content-center">
                                        <i class="fal fa-map-marker-alt"></i>
                                    </div>
                                    <div class="ft-contact-cta-text headline pera-content">
                                        <h3>Office address</h3>
                                        <p>
                                            {{ strip_tags($setting->address) }}
                                        </p>
                                    </div>
                                </div>
                                <div class="ft-contact-cta-items d-flex">
                                    <div class="ft-contact-cta-icon d-flex align-items-center justify-content-center">
                                        <i class="fas fa-phone-alt"></i>
                                    </div>
                                    <div class="ft-contact-cta-text headline pera-content">
                                        <h3>Telephone number</h3>
                                        <p>{{ $setting->phone_1 }}</p>
                                        <p>{{ $setting->phone_2 }}</p>
                                    </div>
                                </div>
                                <div class="ft-contact-cta-items d-flex">
                                    <div class="ft-contact-cta-icon d-flex align-items-center justify-content-center">
                                        <i class="far fa-envelope"></i>
                                    </div>
                                    <div class="ft-contact-cta-text headline pera-content">
                                        <h3>Mail address</h3>
                                        <p>{{ $setting->email_1 }}</p>
                                        <p>{{ $setting->email_2 }}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="ft-contact-page-form-wrapper headline">
                            <h3 class="text-center">Get a Quote</h3>

                            <livewire:contact-us-form />

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End of contact page section
         ============================================= -->

@endsection


@section('styles')

@endsection


@section('scripts')


@endsection
