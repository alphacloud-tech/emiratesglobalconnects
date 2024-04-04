@php
    $setting = DB::table('settings')->where('id', 1)->first();
@endphp

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>

    <script>
        (function(w, d, s, l, i) {
            w[l] = w[l] || [];
            w[l].push({
                'gtm.start': new Date().getTime(),
                event: 'gtm.js'
            });
            var f = d.getElementsByTagName(s)[0],
                j = d.createElement(s),
                dl = l != 'dataLayer' ? '&l=' + l : '';
            j.async = true;
            j.src =
                '../../www.googletagmanager.com/gtm5445.html?id=' + i + dl;
            f.parentNode.insertBefore(j, f);
        })(window, document, 'script', 'dataLayer', 'GTM-TNL8QV6');
    </script>

    {{-- //////////////////////////////////////////////////////////////////////////////////////////////// --}}
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta charset="UTF-8">
    <meta name="keywords"
        content="{{ $setting->company_name }} - IT Solutions and Technology, web development, software development, programming, coding, web design, front-end, back-end, full-stack, web technologies, software engineering, development tools, coding languages, software architecture, IT, computer science">
    <meta itemprop="name" content="{{ $setting->company_name }} - IT Solutions and Technology">
    <meta name="description"
        content="Explore comprehensive IT solutions and cutting-edge technology services. From software development and web solutions to innovative IT strategies, we empower businesses with the tools and expertise needed for success in the digital era. Discover how our team of skilled professionals can elevate your technology infrastructure and drive your organization forward.">

    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    {{-- <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" /> --}}
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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


    <title>{{ $setting->company_name }} - Real Estate | @yield('title')</title>

    <!-- favicon -->
    <link rel="apple-touch-icon" href="apple-touch-icon.html">
    {{-- {{ asset('frontend/software/') }} --}}
    <link rel="shortcut icon" type="image/x-icon" href="{{ $setting->favicon }}">
    {{-- <!-- Bootstrap v4.4.1 css {{ asset('cleverbiz/frontend/') }} --> --}}

    <!-- External CSS libraries -->
    <link rel="stylesheet" type="text/css" href="{{ asset('cleverbiz/frontend/css/bootstrap.min.css') }} ">
    <link rel="stylesheet" type="text/css" href="{{ asset('cleverbiz/frontend/css/animate.min.css') }} ">
    <link rel="stylesheet" type="text/css" href="{{ asset('cleverbiz/frontend/css/bootstrap-submenu.css') }} ">
    <link rel="stylesheet" type="text/css" href="{{ asset('cleverbiz/frontend/css/bootstrap-select.min.css') }} ">
    <link rel="stylesheet" type="text/css" href="{{ asset('cleverbiz/frontend/css/leaflet.css') }} ">
    <link rel="stylesheet" type="text/css" href="{{ asset('cleverbiz/frontend/css/map.css') }} ">
    <link rel="stylesheet" type="text/css" href="{{ asset('cleverbiz/frontend/fonts/font-awesome/css/font-awesome.min.css') }} ">
    <link rel="stylesheet" type="text/css" href="{{ asset('cleverbiz/frontend/fonts/flaticon/font/flaticon.css') }} ">
    <link rel="stylesheet" type="text/css" href="{{ asset('cleverbiz/frontend/fonts/linearicons/style.css') }} ">
    <link rel="stylesheet" type="text/css" href="{{ asset('cleverbiz/frontend/css/jquery.mCustomScrollbar.css') }} ">
    <link rel="stylesheet" type="text/css" href="{{ asset('cleverbiz/frontend/css/dropzone.css') }} ">
    <link rel="stylesheet" type="text/css" href="{{ asset('cleverbiz/frontend/css/magnific-popup.css') }} ">
    <script></script>
    <!-- Custom stylesheet -->
    <link rel="stylesheet" type="text/css" href="{{ asset('cleverbiz/frontend/css/style.css') }} ">
    <link rel="stylesheet" type="text/css" id="style_sheet" href="{{ asset('cleverbiz/frontend/css/skins/default.css') }} ">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous">
    </script>

    <!-- social link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('cleverbiz/frontend/css/social.css') }} ">




    <!-- Favicon icon -->
    <link rel="shortcut icon"
        href="https://storage.googleapis.com/theme-vessel/template-images/nest-html/assets/img/favicon.ico"
        type="image/x-icon">

    <!-- Google fonts -->
    <link rel="stylesheet" type="text/css"
        href="https://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800%7CPlayfair+Display:400,700%7CRoboto:100,300,400,400i,500,700">
    <link
        href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;300;400;600;700;900&amp;family=Roboto:wght@400;500;700&amp;display=swap"
        rel="stylesheet">

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link rel="stylesheet" type="text/css" href="{{ asset('cleverbiz/frontend/css/ie10-viewport-bug-workaround.css') }} ">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script type="text/javascript" src="js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="{{ asset('cleverbiz/frontend/js/ie-emulation-modes-warning.js') }} "></script>


    <!--========================================================================-->
    @yield('styles')
    <!--========================================================================-->


    @livewireStyles


</head>

<body>
    <div>
        {{-- <livewire:language-switcher /> --}}

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


            @yield('content')


        </div>
        <!-- Main content End -->


        <!-- Footer -->
        <livewire:footer />

        <script src="{{ asset('cleverbiz/frontend/js/jquery-2.2.0.min.js') }} "></script>
        <script src="{{ asset('cleverbiz/frontend/js/bootstrap.min.js') }} "></script>
        <script src="{{ asset('cleverbiz/frontend/js/bootstrap-submenu.js') }} "></script>
        <script src="{{ asset('cleverbiz/frontend/js/rangeslider.js') }} "></script>
        <script src="{{ asset('cleverbiz/frontend/js/jquery.mb.YTPlayer.js') }} "></script>
        <script src="{{ asset('cleverbiz/frontend/js/wow.min.js') }} "></script>
        <script src="{{ asset('cleverbiz/frontend/js/bootstrap-select.min.js') }} "></script>
        <script src="{{ asset('cleverbiz/frontend/js/jquery.easing.1.3.js') }} "></script>
        <script src="{{ asset('cleverbiz/frontend/js/jquery.scrollUp.js') }} "></script>
        <script src="{{ asset('cleverbiz/frontend/js/jquery.mCustomScrollbar.concat.min.js') }} "></script>
        <script src="{{ asset('cleverbiz/frontend/js/leaflet.js') }} "></script>
        <script src="{{ asset('cleverbiz/frontend/js/leaflet-providers.js') }} "></script>
        <script src="{{ asset('cleverbiz/frontend/js/leaflet.markercluster.js') }} "></script>
        <script src="{{ asset('cleverbiz/frontend/js/dropzone.js') }} "></script>
        <script src="{{ asset('cleverbiz/frontend/js/jquery.filterizr.js') }} "></script>
        <script src="{{ asset('cleverbiz/frontend/js/jquery.magnific-popup.min.js') }} "></script>
        <script src="{{ asset('cleverbiz/frontend/js/maps.js') }} "></script>
        <script src="{{ asset('cleverbiz/frontend/js/app.js') }} "></script>

        <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
        <script src="{{ asset('cleverbiz/frontend/js/ie10-viewport-bug-workaround.js') }} "></script>
        <!-- Custom javascript -->
        <script src="{{ asset('cleverbiz/frontend/js/ie10-viewport-bug-workaround.js') }} "></script>

        <script>
            var latitude = 51.541216;
            var longitude = -0.095678;
            var providerName = 'Hydda.Full';
            generateMap(latitude, longitude, providerName);
        </script>

        <script src="{{ asset('cleverbiz/frontend/social.js') }} "></script>


        <!--========================================================================-->
        @yield('scripts')
        <!--========================================================================-->

        @livewireScripts


        <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>


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
