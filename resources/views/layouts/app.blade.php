@php
    $setting = DB::table('settings')->where('id', 1)->first();
@endphp

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>


    {{-- //////////////////////////////////////////////////////////////////////////////////////////////// --}}
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta charset="UTF-8">
    <meta name="keywords"
        content="{{ $setting->company_name }} - IT Solutions and Technology, web development, software development, programming, coding, web design, front-end, back-end, full-stack, web technologies, software engineering, development tools, coding languages, software architecture, IT, computer science">
    <meta itemprop="name" content="{{ $setting->company_name }} - IT Solutions and Technology">
    <meta name="description"
        content="Explore comprehensive IT solutions and cutting-edge technology services. From software development and web solutions to innovative IT strategies, we empower businesses with the tools and expertise needed for success in the digital era. Discover how our team of skilled professionals can elevate your technology infrastructure and drive your organization forward.">

    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="author" content="{{ $setting->company_name }}">
    {{-- This tag instructs search engine crawlers on how to index your content. "index" allows indexing, and "follow" allows following links. --}}
    <meta name="robots" content="index, follow">

    <meta property="og:title" content="{{ $setting->company_name }}">
    <meta property="og:description"
        content="Explore comprehensive IT solutions and cutting-edge technology services. From software development and web solutions to innovative IT strategies, we empower businesses with the tools and expertise needed for success in the digital era.">
    <meta property="og:image" content="{{ env('APP_URL') . '/' . $setting->logo }}">


    <meta name="twitter:title" content="{{ $setting->company_name }}">
    <meta name="twitter:description"
        content="Explore comprehensive IT solutions and cutting-edge technology services. From software development and web solutions to innovative IT strategies, we empower businesses with the tools and expertise needed for success in the digital era.">
    <meta name="twitter:image" content="{{ env('APP_URL') . '/' . $setting->logo }}">


    <title>{{ $setting->company_name }} - Logistic, flight forwarding, money exchange and travel | @yield('title')
    </title>

    {{-- {{ asset('frontend/') }} --}}
    <link rel="shortcut icon" href="{{ asset('frontend/assets/img/logo/ficon.png') }} " type="image/x-icon">
    <!-- Mobile Specific Meta -->

    <link rel="stylesheet" href="{{ asset('frontend/assets/css/owl.carousel.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/jquery-ui.css') }}" />

    <link rel="stylesheet" href="{{ asset('frontend/assets/css/bootstrap.min.css') }} ">
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/fontawesome-all.css') }} ">
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/flaticon.css') }} ">
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/animate.css') }} ">
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/nice-select.css') }} ">
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/video.min.css') }} ">
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/jquery.mCustomScrollbar.min.css') }} ">
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/slick.css') }} ">
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/rs6.css') }} ">
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/slick-theme.css') }} ">
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/style.css') }} ">

    {{-- <link rel="stylesheet" href="{{ asset('frontend/assets/css/custom-animate.css') }} ">
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/jquery.fancybox.min.css') }} ">
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/responsive.css') }} "> --}}



    {{-- <link href="{{ asset('frontend/assets/plugins/revolution/css/settings.css') }}" rel="stylesheet" type="text/css"> --}}
    <!-- REVOLUTION SETTINGS STYLES -->
    <link href="{{ asset('frontend/assets/plugins/revolution/css/layers.css') }}" rel="stylesheet" type="text/css">
    <!-- REVOLUTION LAYERS STYLES -->
    <link href="{{ asset('frontend/assets/plugins/revolution/css/navigation.css') }}" rel="stylesheet" type="text/css">
    <!-- REVOLUTION NAVIGATION STYLES -->

    <!--========================================================================-->
    @yield('styles')
    <!--========================================================================-->


    @livewireStyles


</head>

<body>
    <div>

        <div id="preloader"></div>
        <div class="up">
            <a href="#" class="scrollup text-center"><i class="fas fa-chevron-up"></i></a>
        </div>

        <livewire:header />

        {{-- @if (request()->is('/'))
                <!-- Use Header 1 -->
                <livewire:header />
            @else
                <!-- Use Header 2 -->
                <livewire:header2 />
            @endif --}}


        @yield('content')


        <livewire:location />

        <!-- Footer -->
        <livewire:footer />
        <!-- Main content End -->


        <!-- For Js Library -->
        <script src="{{ asset('frontend/assets/js/jquery.js') }}"></script>
        <script src="{{ asset('frontend/assets/js/jquery.min.js') }}"></script>
        <script src="{{ asset('frontend/assets/js/bootstrap.min.js') }}"></script>
        <script src="{{ asset('frontend/assets/js/popper.min.js') }}"></script>
        <script src="{{ asset('frontend/assets/js/jquery.magnific-popup.min.js') }}"></script>
        <script src="{{ asset('frontend/assets/js/appear.js') }}"></script>
        <script src="{{ asset('frontend/assets/js/slick.js') }}"></script>
        <script src="{{ asset('frontend/assets/js/jquery.counterup.min.js') }}"></script>
        <script src="{{ asset('frontend/assets/js/waypoints.min.js') }}"></script>
        <script src="{{ asset('frontend/assets/js/imagesloaded.pkgd.min.js') }}"></script>
        <script src="{{ asset('frontend/assets/js/jquery.filterizr.js') }}"></script>
        <script src="{{ asset('frontend/assets/js/jquery.mCustomScrollbar.concat.min.js') }}"></script>
        <script src="{{ asset('frontend/assets/js/wow.min.js') }}"></script>
        <script src="{{ asset('frontend/assets/js/jquery.cssslider.min.js') }}"></script>
        <script src="{{ asset('frontend/assets/js/rbtools.min.js') }}"></script>
        <script src="{{ asset('frontend/assets/js/rs6.min.js') }}"></script>
        <script src="{{ asset('frontend/assets/js/owl.carousel.min.js') }}"></script>
        <script src="{{ asset('frontend/assets/js/isotope.pkgd.js') }}"></script>
        <script src="{{ asset('frontend/assets/js/progress-bar.js') }}"></script>
        {{-- <script src="{{ asset('frontend/assets/js/script.js') }}"></script> --}}


        <script src="{{ asset('frontend/assets/plugins/revolution/js/jquery.themepunch.revolution.min.js') }}"></script>
        <script src="{{ asset('frontend/assets/plugins/revolution/js/jquery.themepunch.tools.min.js') }}"></script>
        <script src="{{ asset('frontend/assets/plugins/revolution/js/extensions/revolution.extension.actions.min.js') }}">
        </script>
        <script src="{{ asset('frontend/assets/plugins/revolution/js/extensions/revolution.extension.carousel.min.js') }}">
        </script>
        <script src="{{ asset('frontend/assets/plugins/revolution/js/extensions/revolution.extension.kenburn.min.js') }}">
        </script>
        <script
            src="{{ asset('frontend/assets/plugins/revolution/js/extensions/revolution.extension.layeranimation.min.js') }}">
        </script>
        <script src="{{ asset('frontend/assets/plugins/revolution/js/extensions/revolution.extension.migration.min.js') }}">
        </script>
        <script src="{{ asset('frontend/assets/plugins/revolution/js/extensions/revolution.extension.navigation.min.js') }}">
        </script>
        <script src="{{ asset('frontend/assets/plugins/revolution/js/extensions/revolution.extension.parallax.min.js') }}">
        </script>
        <script src="{{ asset('frontend/assets/plugins/revolution/js/extensions/revolution.extension.slideanims.min.js') }}">
        </script>
        <script src="{{ asset('frontend/assets/plugins/revolution/js/extensions/revolution.extension.video.min.js') }}">
        </script>
        <script src="{{ asset('frontend/assets/plugins/revolution/js/main-slider-script.js') }}"></script>


        <script src="{{ asset('frontend/assets/js/jquery.fancybox.js') }}"></script>
        <script src="{{ asset('frontend/assets/js/wow.js') }}"></script>
        <script src="{{ asset('frontend/assets/js/jquery-ui.js') }}"></script>
        <script src="{{ asset('frontend/assets/js/knob.js') }}"></script>

        <script src="{{ asset('frontend/assets/js/tilt.jquery.min.js') }}"></script>
        <script src="{{ asset('frontend/assets/js/script-two.js') }}"></script>

        <script src="{{ asset('frontend/assets/js/script.js') }}"></script>


        {{-- <!--============================ {{ asset('frontend/') }} ============================================--> --}}
        @yield('scripts')
        {{-- <!--========================================================================--> --}}

        @livewireScripts



        <script>
            // Listen for the 'commentAdded' event
            Livewire.on('emitCommentAdded', () => {
                // Handle the event, for example, you can reload the Livewire component
                Livewire.emit('refreshComponent'); // assuming you have a 'refreshComponent' method
            });
        </script>


        <script>
            document.addEventListener('livewire:init', function() {

                Livewire.on('showSuccessToast', function(message) {
                    // console.log('Livewire script loaded', message[0]);
                    Swal.fire({
                        icon: 'success',
                        title: 'Success!',
                        text: message[0].message,
                        timer: 3000, // Specify the duration in milliseconds (e.g., 3000 ms for 3 seconds)
                        showConfirmButton: false, // Remove the "OK" button
                    });

                    // toastr.success(message[0].message);
                });
            });
        </script>

    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const cookieConsent = document.getElementById('cookie-consent');
            const acceptCookies = document.getElementById('accept-cookies');

            if (!Cookies.get('cookie-consent')) {
                cookieConsent.style.display = 'block';

                acceptCookies.addEventListener('click', function() {
                    Cookies.set('cookie-consent', 'accepted', {
                        expires: 365
                    });
                    cookieConsent.style.display = 'none';
                });
            }
        });
    </script>

</body>

</html>
