@extends('layouts.app')

@section('title', 'Software Development')

@section('content')


    <!-- Breadcrumbs Start -->
    <div class="rs-breadcrumbs img4">
        <div class="breadcrumbs-inner text-center">
            <h1 class="page-title">Software Development</h1>
            <ul>
                <li title="{{ $setting->company_name }} - IT Solutions and Technology">
                    <a class="active" href="{{ url('/') }}">Home</a>
                </li>
                <li title="Go To Services">
                    <a class="active" href="{{ route('service.page') }}">Services</a>
                </li>
                <li>Software Development</li>
            </ul>
        </div>
    </div>
    <!-- Breadcrumbs End -->

    <!-- About Section Start -->
    <div class="rs-about pt-120 pb-120 md-pt-80 md-pb-80">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 pr-40 md-pr-15 md-mb-50">
                    <div class="sec-title4">
                        <span class="sub-text">Software Development</span>
                        <h2 class="title">We Help to Implement Your Ideas into Automation</h2>
                        <div class="heading-line"></div>
                        <div class="desc desc-big">
                            <p>At Cleverbiz - Real EstateTech, we are your dedicated partners in transforming concepts and
                                ideas
                                into
                                efficient and automated solutions. With our years of experience and technical expertise, we
                                specialize in crafting tailor-made software that streamlines your business operations and
                                brings
                                your innovative visions to life.</p>
                        </div>



                        <div class="desc">

                            <p>Our team of seasoned developers and engineers is committed to understanding your unique needs
                                and
                                challenges. We work closely with you to design, develop, and deploy software applications
                                that
                                not only meet but exceed your expectations.</p>
                            <p>From custom web applications to mobile apps, our solutions are scalable, secure, and designed
                                for
                                optimal performance. Whether you're looking to improve productivity, enhance customer
                                experiences, or gain a competitive edge, we have the knowledge and skills to make it happen.
                            </p>
                            <p>Our approach is client-centric, and our results speak for themselves. Join us on a journey of
                                innovation, automation, and growth. Let's collaborate to turn your ideas into reality and
                                drive
                                your business forward with cutting-edge software solutions.</p>
                        </div>
                        {{-- <div class="btn-part mt-45">
                        <a class="readon learn-more" href="{{ route('contact.page') }}">Contact Us</a>
                    </div> --}}
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="software-img">
                        {{-- <img src="{{ asset('frontend/software/assets/images/about/about-us/1.jpg') }}" alt="images"> --}}
                        <img src="{{ asset('frontend/software/assets/images/choose/5.png') }}" alt="images"
                            style="margin-top: -100px;">
                    </div>
                </div>
            </div>
        </div>
        <!-- Services Section Start -->
        <div class="rs-services style5 pt-120 md-pt-80">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 md-mb-30">
                        <div class="services-item">
                            <div class="services-icon">
                                <img src="{{ asset('frontend/software/assets/images/services/style7/1.png') }}"
                                    alt="Images">
                            </div>
                            <div class="services-content">
                                <h3 class="services-title"><a href="">Skilled Development Team</a></h3>
                                <p class="services-desc">
                                    Our team consists of highly skilled and certified developers who are passionate about
                                    technology and dedicated to delivering excellence.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 md-mb-30">
                        <div class="services-item">
                            <div class="services-icon">
                                <img src="{{ asset('frontend/software/assets/images/services/style7/5.png') }}"
                                    alt="Images">
                            </div>
                            <div class="services-content">
                                <h3 class="services-title"><a href="">Quality Assurance</a></h3>
                                <p class="services-desc">

                                    Quality is at the core of everything we do. Rigorous testing and quality assurance
                                    processes guarantee that our software is reliable and bug-free.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="services-item">
                            <div class="services-icon">
                                <img src="{{ asset('frontend/software/assets/images/services/style7/6.png') }}"
                                    alt="Images">
                            </div>
                            <div class="services-content">
                                <h3 class="services-title"><a href="">Client-Centric Approach</a></h3>
                                <p class="services-desc">

                                    We believe in strong client collaboration. Your input and feedback are invaluable
                                    throughout the project, ensuring that the end product meets your expectations.
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6">
                        <div class="services-item">
                            <div class="services-icon">
                                <img src="{{ asset('frontend/software/assets/images/services/style7/2.png') }}"
                                    alt="Images">
                            </div>
                            <div class="services-content">
                                <h3 class="services-title"><a href="">On-Time Delivery </a></h3>
                                <p class="services-desc">

                                    We understand the importance of deadlines. Count on us to deliver your project on time,
                                    within budget, and to your complete satisfaction.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Services Section End -->
    </div>
    <!-- About Section End -->


    <!-- Call Us Section Start -->
    <div class="rs-call-us bg1 pt-120 md-pt-80">
        <div class="container">
            <div class="row rs-vertical-middle">
                <div class="col-lg-6">
                    <div class="image-part">
                        <img src="{{ asset('frontend/software/assets/images/call-us/1.png') }}" alt="">
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="rs-contact-box text-center">
                        <div class="address-item mb-25">
                            <div class="address-icon">
                                <i class="fa fa-phone"></i>
                            </div>
                        </div>
                        <div class="sec-title3">
                            <span class="sub-text">CALL US 24/7</span>
                            <h2 class="title">{{ $setting->phone_1 }}</h2>
                            <p class="desc">Have any idea or project for in your mind call us or schedule a appointment.
                                Our representative will reply you shortly.</p>
                        </div>
                        <div class="btn-part mt-40 md-mb-60">
                            <a class="readon lets-talk"href="/contact-us" wire:navigate>Let's Talk</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Call Us Section Start -->

    <!-- Counter Section Start -->
    <div class="rs-counter main-counter-home">
        <div class="counter-top-area text-center bg2">
            <div class="row">
                <div class="col-lg-4 md-mb-40">
                    <div class="counter-list">
                        <div class="counter-text">
                            <div class="count-number">
                                <span class="rs-count k">20</span>
                            </div>
                            <h3 class="title">Happy Clients</h3>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 md-mb-40">
                    <div class="counter-list">
                        <div class="counter-text">
                            <div class="count-number">
                                <span class="rs-count plus">10</span>
                            </div>
                            <h3 class="title">Companies</h3>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="counter-list">
                        <div class="counter-text">
                            <div class="count-number">
                                <span class="rs-count plus">50</span>
                            </div>
                            <h3 class="title">Projects Done</h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Counter Section End -->


    <!-- project Start -->
    <livewire:project />
    <!-- project End -->


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
