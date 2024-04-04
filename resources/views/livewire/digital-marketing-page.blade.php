{{-- <div> --}}
{{-- Knowing others is intelligence; knowing yourself is true wisdom. --}}

@extends('layouts.app')

@section('title', 'Web Development')
@section('content')

    <!-- Breadcrumbs Start -->
    <div class="rs-breadcrumbs img4">
        <div class="breadcrumbs-inner text-center">
            <h1 class="page-title">Digital Marketing</h1>
            <ul>
                <li title="{{ $setting->company_name }} - IT Solutions and Technology Startup HTML Template">
                    <a class="active" href="{{ url('/') }}" wire:navigate>Home</a>
                </li>
                <li title="Go To Services">
                    <a class="active" href="{{ route('service.page') }}" wire:navigate>Services</a>
                </li>
                <li>Digital Marketing</li>
            </ul>
        </div>
    </div>
    <!-- Breadcrumbs End -->

    <!-- Services Single Start -->
    <div class="rs-services-single pt-120 pb-120 md-pt-80 md-pb-80">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 md-mb-50">
                    <div class="services-img">
                        <img src="{{ asset('frontend/software/assets/images/services/single/1.jpg') }}" alt="">
                    </div>
                    <h2 class="mt-34">Responsive Pixel Perfect Design</h2>
                    <p>
                        Cras enim urna, interdum nec porttitor vitae, sollicitudin eu eros. Praesent eget mollis nulla, non
                        lacinia urna. Donec sit amet neque auctor, ornare dui rutrum, condimentum justo. Duis dictum, ex
                        accumsan eleifend eleifend, ex justo aliquam nunc, in ultrices ante quam eget massa. Sed
                        scelerisque, odio eu tempor pulvinar, magna tortor finibus lorem, ut mattis tellus nunc ut quam.
                        Curabitur quis ornare leo. Suspendisse bibendum nibh non turpis vestibulum pellentesque.
                    </p>
                    <ul class="listing-style">
                        <li>
                            <i class="fa fa-check-circle"></i>
                            <span>Sed ut perspiciatis unde omnis iste natus error</span>
                        </li>
                        <li>
                            <i class="fa fa-check-circle"></i>
                            <span>Nemo enim ipsam voluptatem quia voluptas sit aspernatur</span>
                        </li>
                        <li>
                            <i class="fa fa-check-circle"></i>
                            <span>Accusamus et iusto odio dignissimos ducimus qui blanditiis</span>
                        </li>
                        <li>
                            <i class="fa fa-check-circle"></i>
                            <span>Nam libero tempore, cum soluta nobis est eligendi optio cumque</span>
                        </li>
                    </ul>
                    <h3 class="mt-34">Why Work With Us</h3>
                    <!-- Skillbar Section Start -->
                    <div class="rs-skillbar style1 modify1">
                        <div class="cl-skill-bar">
                            <div class="row">
                                <div class="col-lg-6">
                                    <!-- Start Skill Bar -->
                                    <span class="skillbar-title">Software Development</span>
                                    <div class="skillbar" data-percent="92">
                                        <p class="skillbar-bar"></p>
                                        <span class="skill-bar-percent"></span>
                                    </div>
                                    <!-- Start Skill Bar -->
                                </div>
                                <div class="col-lg-6">
                                    <!-- Start Skill Bar -->
                                    <span class="skillbar-title">Web Development</span>
                                    <div class="skillbar" data-percent="90">
                                        <p class="skillbar-bar"></p>
                                        <span class="skill-bar-percent"></span>
                                    </div>
                                    <!-- Start Skill Bar -->
                                </div>
                                <div class="col-lg-6">
                                    <!-- Start Skill Bar -->
                                    <span class="skillbar-title">SEO Analysis</span>
                                    <div class="skillbar" data-percent="85">
                                        <p class="skillbar-bar"></p>
                                        <span class="skill-bar-percent"></span>
                                    </div>
                                    <!-- Start Skill Bar -->
                                </div>
                                <div class="col-lg-6">
                                    <!-- Start Skill Bar -->
                                    <span class="skillbar-title">
                                        {{-- Cyber Security --}}
                                        Security
                                    </span>
                                    <div class="skillbar" data-percent="92">
                                        <p class="skillbar-bar"></p>
                                        <span class="skill-bar-percent"></span>
                                    </div>
                                    <!-- Start Skill Bar -->
                                </div>
                                <div class="col-lg-6">
                                    <!-- Start Skill Bar -->
                                    <span class="skillbar-title">Clean Code</span>
                                    <div class="skillbar" data-percent="92">
                                        <p class="skillbar-bar"></p>
                                        <span class="skill-bar-percent"></span>
                                    </div>
                                    <!-- Start Skill Bar -->
                                </div>
                                <div class="col-lg-6">
                                    <!-- Start Skill Bar -->
                                    <span class="skillbar-title">App Development</span>
                                    <div class="skillbar" data-percent="92">
                                        <p class="skillbar-bar"></p>
                                        <span class="skill-bar-percent"></span>
                                    </div>
                                    <!-- Start Skill Bar -->
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Skillbar Section End -->
                    <h3 class="mt-30">24/7 Smart Support</h3>
                    <p class="mt-20 mb-50">
                        Cras enim urna, interdum nec porttitor vitae, sollicitudin eu eros. Praesent eget mollis nulla, non
                        lacinia urna. Donec sit amet neque auctor, ornare dui rutrum, condimentum justo. Duis dictum, ex
                        accumsan eleifend eleifend, ex justo aliquam nunc, in ultrices ante quam eget massa. Sed
                        scelerisque, odio eu tempor pulvinar, magna tortor finibus lorem.
                    </p>

                    {{-- <div class="row mb-80">
                        <div class="col-lg-6 col-md-12 md-mb-30">
                            <img class="bdru-4" src="assets/images/services/single/2.jpg" alt="">
                        </div>
                        <div class="col-lg-6 col-md-12">
                            <img class="bdru-4" src="assets/images/services/single/3.jpg" alt="">
                        </div>
                    </div> --}}


                    <!-- Testimonial Section Start -->
                    <div class="rs-testimonial style5">
                        <div class="testi-item">
                            <div class="testi-img">
                                <img src="{{ asset('frontend/software/assets/images/testimonial/main-home/quote-white2.png') }}"
                                    alt="">
                            </div>
                            <p>{{ $testimonial->quote }}</p>
                            <div class="testi-content">
                                <div class="testi-img">
                                    <img src="{{ asset($testimonial->image_url) }}" alt="">
                                </div>
                                <div class="author-part">
                                    <div class="name">{{ $testimonial->name }}</div>
                                    <span class="designation">{{ $testimonial->position }}</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Testimonial Section End -->


                </div>

                <div class="col-lg-4 pl-32 md-pl-15">
                    <ul class="services-list">
                        @foreach ($services as $service)
                            <li><a href="">{{ $service->title }}</a></li>
                        @endforeach
                    </ul>
                    <div class="services-add mb-50 mt-50">
                        <div class="address-item mb-35">
                            <div class="address-icon">
                                <i class="fa fa-phone"></i>
                            </div>
                        </div>
                        <h2 class="title">Have any Questions? <br> Call us Today!</h2>
                        <div class="contact">
                            <a href="tel:{{ $setting->phone_1 }}">{{ $setting->phone_1 }}</a>
                        </div>
                    </div>

                    <div class="widget-title">
                        <h3 class="title">Latest Posts</h3>
                    </div>

                    @foreach ($blogs as $item)
                        @php
                            $date = \Carbon\Carbon::parse($item->created_at);
                            $day = $date->format('d'); // Extract the day
                            $month = $date->format('M'); // Extract the abbreviated month name
                            $year = $date->format('Y'); // Extract the abbreviated month name
                            $title = strtolower(str_replace(' ', '-', $item->title));
                        @endphp
                        <div class="brochures">
                            <h3>{{ $item->title }}</h3>
                            <p>
                                {{ \Illuminate\Support\Str::limit(strip_tags($item->content), 50, '...') }}
                            </p>
                            <div class="pdf-btn">
                                <a class="readon learn-more pdf" href="{{ route('blog.single', $title) }}">
                                    Read
                                    {{-- <i class="fa fa-file-pdf-o"></i> --}}
                                </a>
                            </div>
                        </div>
                        <br>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
    <!-- Services Single End -->

    <!-- Cta section start -->
    {{-- <div class="rs-cta style1 bg7 pt-80 pb-80">
        <div class="container">
            <div class="cta-wrap">
                <div class="row align-items-center">
                    <div class="col-lg-9 col-md-12 md-mb-30">
                        <span>Plan to Start a Project</span>
                        <div class="title-wrap">
                            <h2 class="epx-title">Our Experts Ready to Help You</h2>
                        </div>
                    </div>
                    <div class="col-lg-3 text-right col-md-12">
                        <div class="button-wrap">
                            <a class="readon learn-more" href="{{ route('contact.page') }}" wire:navigate>Get In
                                Touch</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}
    <!-- Cta section end -->

    <!-- Technology Section Start -->
    <livewire:our-technology />
    <!-- Technology Section End -->

    <!-- Partner Start -->
    <livewire:partner />
    <!-- Partner End -->


@endsection


@section('styles')

@endsection


@section('scripts')


@endsection


{{-- </div> --}}
