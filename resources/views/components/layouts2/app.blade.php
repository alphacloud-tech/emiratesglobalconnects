@php
    $setting = DB::table('settings')
        ->where('id', 1)
        ->first();
@endphp

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta charset="UTF-8">
    <meta name="keywords" content="{{ $setting->company_name }} - IT Solutions and Technology" />
    <meta itemprop="name" content="{{ $setting->company_name }} - IT Solutions and Technology">
    <meta name="description" content="IT Solutions and Technology" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <title>{{ $setting->company_name }} - IT Solutions and Technology | @yield('title')</title>

    <!-- favicon -->
    <link rel="apple-touch-icon" href="apple-touch-icon.html">
    {{-- {{ asset('frontend/software/') }} --}}
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('frontend/software/assets/images/fav.png') }}">
    <!-- Bootstrap v4.4.1 css -->
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/software/assets/css/bootstrap.min.css') }}">
    <!-- font-awesome css -->
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/software/assets/css/font-awesome.min.css') }}">
    <!-- flaticon css -->
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/software/assets/fonts/flaticon.css') }}">
    <!-- animate css -->
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/software/assets/css/animate.css') }}">
    <!-- owl.carousel css -->
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/software/assets/css/owl.carousel.css') }}">
    <!-- slick css -->
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/software/assets/css/slick.css') }}">
    <!-- off canvas css -->
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/software/assets/css/off-canvas.css') }}">
    <!-- magnific popup css -->
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/software/assets/css/magnific-popup.css') }}">
    <!-- Main Menu css -->
    <link rel="stylesheet" href="{{ asset('frontend/software/assets/css/rsmenu-main.css') }}">
    <!-- spacing css -->
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/software/assets/css/rs-spacing.css') }}">
    <!-- style css -->
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/software/style.css') }}">
    <!-- This stylesheet dynamically changed from style.less -->
    {{-- {{ asset('frontend/software/') }} --}}
    <!-- responsive css -->
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/software/assets/css/responsive.css') }}">

    <!--========================================================================-->
    @yield('styles')
    <!--========================================================================-->

    @livewireStyles

</head>

<body>
    <div>
        <div class="offwrap"></div>

        <!--Preloader area start here-->
        {{-- <div id="loader" class="loader">
        <div class="loader-container"></div>
    </div> --}}
        <!--Preloader area End here-->

        <!-- Navbar -->


        <!-- Main content Start -->
        <div class="main-content">
            <livewire:header />


            {{-- <livewire:home-page /> --}}
            <livewire:about-page />

        </div>
        <!-- Main content End -->


        <!-- Footer -->
        <livewire:footer />

        {{-- @livewire('about-page') --}}

        <!-- modernizr js -->
        <script src="{{ asset('frontend/software/assets/js/modernizr-2.8.3.min.js') }}"></script>
        <!-- jquery latest version -->
        <script src="{{ asset('frontend/software/assets/js/jquery.min.js') }}"></script>
        <!-- Bootstrap v4.4.1 js -->
        <script src="{{ asset('frontend/software/assets/js/bootstrap.min.js') }}"></script>
        <!-- Menu js -->
        <script src="{{ asset('frontend/software/assets/js/rsmenu-main.js') }}"></script>
        <!-- op nav js -->
        <script src="{{ asset('frontend/software/assets/js/jquery.nav.js') }}"></script>
        <!-- owl.carousel js -->
        <script src="{{ asset('frontend/software/assets/js/owl.carousel.min.js') }}"></script>
        <!-- wow js -->
        <script src="{{ asset('frontend/software/assets/js/wow.min.js') }}"></script>
        <!-- Skill bar js -->
        <script src="{{ asset('frontend/software/assets/js/skill.bars.jquery.js') }}"></script>
        <script src="{{ asset('frontend/software/assets/js/jquery.counterup.min.js') }}"></script>
        <!-- counter top js -->
        <script src="{{ asset('frontend/software/assets/js/waypoints.min.js') }}"></script>
        <!-- swiper js -->
        <script src="{{ asset('frontend/software/assets/js/swiper.min.js') }}"></script>
        <!-- particles js -->
        <script src="{{ asset('frontend/software/assets/js/particles.min.js') }}"></script>
        <!-- magnific popup js -->
        <script src="{{ asset('frontend/software/assets/js/jquery.magnific-popup.min.js') }}"></script>
        <!-- plugins js -->
        <script src="{{ asset('frontend/software/assets/js/plugins.js') }}"></script>
        <!-- pointer js -->
        <script src="{{ asset('frontend/software/assets/js/pointer.js') }}"></script>
        <!-- contact form js -->
        <script src="{{ asset('frontend/software/assets/js/contact.form.js') }}"></script>
        <!-- appointment form js -->
        <script src="{{ asset('frontend/software/assets/js/appointment.form.js') }}"></script>
        <!-- main js -->
        <script src="{{ asset('frontend/software/assets/js/main.js') }}"></script>


        <!--========================================================================-->
        @yield('scripts')
        <!--========================================================================-->

        @livewireScripts

    </div>
</body>

</html>
