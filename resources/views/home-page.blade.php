@extends('components.layouts.app')

@section('content')
    <!-- Banner Section Start -->
    {{-- @include('frontend.body.slider') --}}
    <!-- Livewire Top Partner Component -->
    {{-- @livewire('frontend.body.slider') --}}
    {{-- @livewire('frontend.body.slider') --}}

    <!-- Banner Section End -->

    <!-- Partner Start -->
    {{-- @include('frontend.body.top_partner') --}}

    <!-- Livewire Top Partner Component -->
    {{-- @livewire('frontend.body.top-partner') --}}
    <!-- Partner End -->


    <!-- About Section Start -->
    <div class="rs-about style2 modify1 pt-120 pb-120 md-pt-70 md-pb-80">
        <div class="container">
            <div class="row">
                @if ($about)
                    {{-- @foreach ($about as $item) --}}
                    <div class="col-lg-6 hidden-md">
                        <div class="images">
                            <img src="{{ asset($about->image_url) }}" alt="">
                        </div>
                    </div>
                    <div class="col-lg-6 pl-60 md-pl-15">
                        <div class="sec-title mb-30">
                            <div class="sub-text style4-bg">SKILLSETS</div>
                            <h2 class="title pb-20">
                                {{ $about->title }}
                            </h2>
                            <div class="desc">
                                {{ strip_tags($about->description) }}
                            </div>
                        </div>
                        {{-- @endforeach --}}

                        <!-- Skillbar Section Start -->
                        <div class="rs-skillbar style1 home4">
                            <div class="cl-skill-bar">
                                @foreach ($abouts as $item)
                                    <span class="skillbar-title">{{ $item->bar_title }}</span>
                                    <div class="skillbar" data-percent="{{ $item->bar_percent }}">
                                        <p class="skillbar-bar {{ $item->bar_bg_color }}"></p>
                                        <span class="skill-bar-percent"></span>
                                    </div>
                                @endforeach
                                <div class="btn-part mt-45">
                                    <a class="readon started" href="contact.html">Get Started</a>
                                </div>
                            </div>
                        </div>
                        <!-- Skillbar Section End -->
                    </div>
                @endif
            </div>
        </div>
    </div>
    <!-- About Section End -->

    <!-- Services Section Start -->
    <div class="rs-services style3 rs-rain-animate gray-color pt-120 pb-120 md-pt-70 md-pb-80">
        <div class="container">
            <div class="row md-mb-60">
                <div class="col-lg-6 mb-60 md-mb-20">
                    <div class="sec-title2 md-center">
                        <span class="sub-text">Services</span>
                        <h2 class="title testi-title">
                            What Solutions We Provide to Our Valued Customers
                        </h2>
                    </div>
                </div>
                <div class="col-lg-6 mb-60 md-mb-0">
                    <div class="btn-part text-right mt-60 md-mt-0 md-center">
                        <a class="readon started" href="web-development.html">Get Started</a>
                    </div>
                </div>
            </div>
            <div class="row">
                @php
                    $num = 1;
                @endphp
                @foreach ($services as $service_item)
                    <div class="col-lg-4 col-md-6 mb-20">
                        <div class="services-item {{ $service_item->color }}">
                            <div class="services-icon">
                                <div class="image-part">
                                    <img class="main-img" src="{{ asset($service_item->image_url_dark) }} " alt="">
                                    <img class="hover-img" src="{{ asset($service_item->image_url_light) }} "
                                        alt="">
                                </div>
                            </div>
                            <div class="services-content">
                                <div class="services-text">
                                    <h3 class="title"><a href="">{{ $service_item->title }}</a>
                                    </h3>
                                </div>
                                <div class="services-desc">
                                    <p>
                                        {!! Str::limit($service_item->description, 100) !!}
                                    </p>
                                </div>
                                <div class="serial-number">
                                    0{{ $num++ }}
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
        <div class="line-inner">
            <div class="line"></div>
            <div class="line"></div>
            <div class="line"></div>
        </div>
    </div>
    <!-- Services Section End -->



    <div class="rs-process style3 gray-color pt-120 pb-120 md-pt-75 md-pb-80">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-5">
                    <div class="process-wrap bg9">
                        <div class="sec-title mb-30">
                            <div class="sub-text new">How We Works</div>
                            <h2 class="title title4 white-color pb-20">
                                How braintech assist your business
                            </h2>
                            <div class="desc white-color">
                                Bring to the table win-win survival strategies to ensure dotted proactive domination. At
                                the
                                end of the day, on going forward, anew normal that has evolved from the generation on
                                streamlined.
                            </div>
                            <div class="btn-part mt-40">
                                <a class="readon discover started" href="contact.html">Learn More</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-7 pl-35 md-pt-40 md-pl-15">
                    <div class="row">
                        <div class="col-md-6 mb-20">
                            <div class="rs-addon-number">
                                <div class="number-text">
                                    <div class="number-area">
                                        01
                                    </div>
                                    <div class="number-title">
                                        <h3 class="title">Discussion</h3>
                                    </div>
                                    <p class="number-txt">Quisque placerat vitae lacus ut scelerisque. Fusce luctus odio
                                        ac
                                        nibh theo lacus egestas.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 mb-20">
                            <div class="rs-addon-number">
                                <div class="number-text">
                                    <div class="number-area">
                                        02
                                    </div>
                                    <div class="number-title">
                                        <h3 class="title">Testing &amp; Trying</h3>
                                    </div>
                                    <p class="number-txt">Quisque placerat vitae lacus ut scelerisque. Fusce luctus odio
                                        ac
                                        nibh theo lacus egestas.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 md-mb-20">
                            <div class="rs-addon-number">
                                <div class="number-text">
                                    <div class="number-area">
                                        03
                                    </div>
                                    <div class="number-title">
                                        <h3 class="title">Ideas &amp; Concepts</h3>
                                    </div>
                                    <p class="number-txt">Quisque placerat vitae lacus ut scelerisque. Fusce luctus odio
                                        ac
                                        nibh theo lacus egestas.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="rs-addon-number">
                                <div class="number-text">
                                    <div class="number-area">
                                        04
                                    </div>
                                    <div class="number-title">
                                        <h3 class="title">Execute &amp; install</h3>
                                    </div>
                                    <p class="number-txt">Quisque placerat vitae lacus ut scelerisque. Fusce luctus odio
                                        ac
                                        nibh theo lacus egestas.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="rs-team" class="rs-team style2 pt-110 pb-120 md-pt-75 md-pb-80">
        <div class="container">
            <div class="sec-title2 text-center mb-30">
                <div class="sub-text">Team</div>
                <h2 class=" title title5 pb-20">
                    Expert IT Consultants
                </h2>
            </div>
            <div class="rs-carousel owl-carousel" data-loop="true" data-items="3" data-margin="30" data-autoplay="true"
                data-hoverpause="true" data-autoplay-timeout="5000" data-smart-speed="800" data-dots="false"
                data-nav="false" data-nav-speed="false" data-center-mode="false" data-mobile-device="1"
                data-mobile-device-nav="false" data-mobile-device-dots="true" data-ipad-device="2"
                data-ipad-device-nav="false" data-ipad-device-dots="true" data-ipad-device2="2"
                data-ipad-device-nav2="false" data-ipad-device-dots2="true" data-md-device="3"
                data-md-device-nav="false" data-md-device-dots="true">
                @foreach ($teams as $item)
                    <div class="team-item">

                        <div class="images-part">
                            <img src="{{ asset($item->image_url) }}" alt="">
                            <div class="social-icon">
                                <ul>
                                    <li><a href="{{ $item->facebook }}"><i class="fa fa-facebook"></i></a></li>
                                    <li><a href="{{ $item->instagram }}"><i class="fa fa-instagram"></i></a></li>
                                    <li><a href="{{ $item->twitter }}"><i class="fa fa-twitter"></i></a></li>
                                    <li><a href="{{ $item->linkedin }}"><i class="fa fa-linkedin"></i></a></li>
                                    <li><a href="{{ $item->github }}"><i class="fa fa-github"></i></a></li>
                                    <li><a href="{{ $item->youtube }}"><i class="fa fa-youtube"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="team-content text-center">
                            <h3 class="person-name"><a href="single-team.html">{{ $item->name }}</a></h3>
                            <span class="designation">{{ $item->position }}</span>
                        </div>
                    </div>
                @endforeach

            </div>
        </div>
    </div>

    <!-- Choose Section Start -->
    <div class="rs-why-choose style2 gray-color rs-rain-animate pt-120 pb-120 md-pt-70 md-pb-80">
        <div class="container">
            <div class="row">
                <div class="col-xl-8 col-lg-7 md-mb-30">
                    <div class="sec-title mb-40">
                        <div class="sub-text style4-bg left">Let's Talk</div>
                        <h2 class="title pb-20">
                            Speak With Expert Engineers.
                        </h2>
                        <div class="desc">
                            From its medieval origins to the digital era, learn everything there<br>
                            is to know about the ubiquitous lorem ipsum passage.
                        </div>
                    </div>
                    <div class="services-wrap mb-25">
                        <div class="services-icon">
                            <img src="{{ asset('frontend/software/assets/images/choose/icons/style2/1.png') }} "
                                alt="">
                        </div>
                        <div class="services-text">
                            <h3 class="title"><a href="mailto:{{ $setting->email_1 }}">Email</a></h3>
                            <p class="services-txt">{{ $setting->email_1 }}</p>
                        </div>
                    </div>
                    <div class="services-wrap mb-25">
                        <div class="services-icon">
                            <img src="{{ asset('frontend/software/assets/images/choose/icons/style2/2.png') }} "
                                alt="">
                        </div>
                        <div class="services-text">
                            <h3 class="title"><a href="tel:{{ $setting->phone_1 }}">Call Us</a></h3>
                            <p class="services-txt"> {{ $setting->phone_1 }}</p>
                        </div>
                    </div>
                    <div class="services-wrap">
                        <div class="services-icon">
                            <img src="{{ asset('frontend/software/assets/images/choose/icons/style2/3.png') }} "
                                alt="">
                        </div>
                        <div class="services-text">
                            <h3 class="title"><a href="#">Office Address</a></h3>
                            <p class="services-txt">{{ strip_tags($setting->address) }}</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-5">
                    <div class="rs-contact mod1">
                        <div class="contact-wrap">
                            <div class="content-part mb-25">
                                <h2 class="title mb-15">Schedule Appointment</h2>
                                <p class="desc">We here to help you 24/7 with experts</p>
                            </div>
                            <div id="appointment-messages"></div>
                            <form id="appointment-form" method="post" action="">
                                <fieldset>
                                    <div class="row">
                                        <div class="col-lg-12 mb-15">
                                            <input class="from-control" type="text" id="appointment_name"
                                                name="appointment_name" placeholder="Name" required="">
                                        </div>
                                        <div class="col-lg-12 mb-15">
                                            <input class="from-control" type="text" id="appointment_email"
                                                name="appointment_email" placeholder="E-Mail" required="">
                                        </div>
                                        <div class="col-lg-12 mb-15">
                                            <input class="from-control" type="text" id="appointment_phone"
                                                name="appointment_phone" placeholder="Phone Number" required="">
                                        </div>
                                        <div class="col-lg-12 mb-25">
                                            <input class="from-control" type="text" id="appointment_website"
                                                name="appointment_website" placeholder="Your Website" required="">
                                        </div>
                                    </div>
                                    <div class="form-group mb-0">
                                        <input class="submit-btn" type="submit" value="Submit Now">
                                    </div>
                                </fieldset>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="line-inner">
            <div class="line"></div>
            <div class="line"></div>
            <div class="line"></div>
        </div>
    </div>
    <!-- Choose Section End -->

    <!-- Blog Section Start -->
    <div id="rs-blog" class="rs-blog pt-120 pb-120 md-pt-70 md-pb-80">
        <div class="container">
            <div class="sec-title2 text-center mb-30">
                <span class="sub-text">Blogs</span>
                <h2 class="title testi-title">
                    Latest Tips &Tricks
                </h2>
                <div class="desc">
                    We've been building creative tools together for over a decade and have a deep appreciation
                    for
                    software applications
                </div>
            </div>
            <div class="rs-carousel owl-carousel" data-loop="true" data-items="3" data-margin="30" data-autoplay="true"
                data-hoverpause="true" data-autoplay-timeout="5000" data-smart-speed="800" data-dots="false"
                data-nav="false" data-nav-speed="false" data-center-mode="false" data-mobile-device="1"
                data-mobile-device-nav="false" data-mobile-device-dots="false" data-ipad-device="2"
                data-ipad-device-nav="false" data-ipad-device-dots="false" data-ipad-device2="2"
                data-ipad-device-nav2="false" data-ipad-device-dots2="false" data-md-device="3"
                data-md-device-nav="false" data-md-device-dots="false">

                @foreach ($blogs as $item)
                    @php
                        $date = \Carbon\Carbon::parse($item->created_at);
                        $day = $date->format('d'); // Extract the day
                        $month = $date->format('M'); // Extract the abbreviated month name
                        $year = $date->format('Y'); // Extract the abbreviated month name
                    @endphp

                    <div class="blog-item">
                        <div class="image-wrap">
                            <a href="blog-details-2.html"><img width="1000px" height="1000px"
                                    src="{{ asset($item->image_url) }} " alt=""></a>
                            <ul class="post-categories">
                                <li><a href="blog-details.html">{{ $item->category_name }}</a></li>
                            </ul>
                        </div>
                        <div class="blog-content">
                            <ul class="blog-meta">
                                <li class="date"><i class="fa fa-calendar-check-o"></i> {{ $day }}
                                    {{ $month }} {{ $year }}</li>
                                <li class="admin"><i class="fa fa-user-o"></i> admin</li>
                            </ul>
                            <h3 class="blog-title"><a href="blog-details.html">{{ $item->title }}</a></h3>
                            <p class="desc">{!! \Illuminate\Support\Str::limit($item->content, 200) !!}...</p>
                            <div class="blog-button"><a href="blog-details.html">Learn More</a></div>
                        </div>
                    </div>
                @endforeach

            </div>
        </div>
    </div>
    <!-- Blog Section End -->

    <!-- Testimonial Section Start -->
    <div class="rs-testimonial main-home rs-rain-animate style4 gray-color modify1 md-fixing">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 hidden-md">
                    <div class="testi-image">
                        <img src="{{ asset('frontend/software/assets/images/testimonial/testimonial-2.png') }} "
                            alt="">
                    </div>
                </div>
                <div class="col-lg-6 pl-50 md-pl-15">
                    <div class="sec-title mb-50">
                        <div class="sub-text style4-bg left testi">Testimonials</div>
                        <h2 class="title pb-20">
                            What Customer Saying
                        </h2>
                        <div class="desc">
                            Over 25 years working in IT services developing software applications and mobile
                            apps
                            for clients all over the world.
                        </div>
                    </div>
                    <div class="rs-carousel owl-carousel" data-loop="true" data-items="1" data-margin="30"
                        data-autoplay="true" data-hoverpause="true" data-autoplay-timeout="5000" data-smart-speed="800"
                        data-dots="true" data-nav="false" data-nav-speed="false" data-md-device="1"
                        data-md-device-nav="false" data-md-device-dots="false" data-center-mode="false"
                        data-ipad-device2="1" data-ipad-device-nav2="false" data-ipad-device-dots2="false"
                        data-ipad-device="1" data-ipad-device-nav="false" data-ipad-device-dots="true"
                        data-mobile-device="1" data-mobile-device-nav="false" data-mobile-device-dots="false">

                        @foreach ($testimonials as $item)
                            <div class="testi-item">
                                <div class="author-desc">
                                    <div class="desc"><img class="quote"
                                            src="{{ asset('frontend/software/assets/images/testimonial/main-home/quote2.png') }} "
                                            alt="">{!! $item->quote !!}</div>
                                </div>
                                <div class="testimonial-content">
                                    <div class="author-img">
                                        <img src="{{ asset($item->image_url) }} " alt="">
                                    </div>
                                    <div class="author-part">
                                        <a class="name" href="#">{{ $item->name }}</a>
                                        <span class="designation">{{ $item->position }}</span>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
        <div class="line-inner">
            <div class="line"></div>
            <div class="line"></div>
            <div class="line"></div>
        </div>
    </div>
    <!-- Testimonial Section End -->

    <!-- Partner Start -->
    {{-- @include('frontend.body.top_partner') --}}

    <!-- Livewire Top Partner Component -->
    {{-- @livewire('frontend.body.top-partner') --}}
    <!-- Partner End -->


    {{-- </x-home-master> --}}
@endsection
