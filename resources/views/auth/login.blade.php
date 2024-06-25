@php
    $setting = DB::table('settings')->where('id', 1)->first();
@endphp
<!DOCTYPE html>

<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Emirates Global Connect Logistics</title>
    <meta name="author" content="Mannat Studio">
    <meta name="description" content="Emirates Global Connect Logistics">
    <meta name="keywords" content="">

    <!--=========================*
                {{-- Favicon {{ asset('backend/') }} --}}
    *===========================-->
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('backend/images/favicon.png') }} " />

    <!--=========================*
            Bootstrap Css
    *===========================-->
    <link rel="stylesheet" href="{{ asset('backend/css/bootstrap.min.css') }} " />

    <!--=========================*
              Custom CSS
    *===========================-->
    <link rel="stylesheet" href="{{ asset('backend/css/style.css') }} " />

    <!--=========================*
               Owl CSS
    *===========================-->
    <link href="{{ asset('backend/css/owl.carousel.min.css') }} " rel="stylesheet" type="text/css" />
    <link href="{{ asset('backend/css/owl.theme.default.min.css') }} " rel="stylesheet" type="text/css" />

    <!--=========================*
            Font Awesome
    *===========================-->
    <!-- <link rel="stylesheet" href="css/font-awesome.min.css" /> -->

    <!--=========================*
             Themify Icons
    *===========================-->
    <!-- <link rel="stylesheet" href="css/themify-icons.css" /> -->

    <!--=========================*
               Ionicons
    *===========================-->
    <!-- <link href="css/ionicons.min.css" rel="stylesheet" /> -->

    <!--=========================*
              EtLine Icons
    *===========================-->
    <link href="{{ asset('backend/css/et-line.css') }} " rel="stylesheet" />

    <!--=========================*
              Feather Icons
    *===========================-->
    <!-- <link href="css/feather.css" rel="stylesheet" /> -->

    <!--=========================*
              Flag Icons
    *===========================-->
    <!-- <link href="css/flag-icon.min.css" rel="stylesheet" /> -->

    <!--=========================*
              Modernizer
    *===========================-->
    <script src="{{ asset('backend/js/modernizr-2.8.3.min.js') }} "></script>

    <!--=========================*
               Metis Menu
    *===========================-->
    <link rel="stylesheet" href="{{ asset('backend/css/metisMenu.css') }} " />

    <!--=========================*
               Slick Menu
    *===========================-->
    <link rel="stylesheet" href="{{ asset('backend/css/slicknav.min.css') }} " />

    <!--=========================*
               AM Chart
    *===========================-->
    <link rel="stylesheet" href="{{ asset('backend/vendors/am-charts/css/am-charts.css') }} " type="text/css"
        media="all" />

    <!--=========================*
               Morris Css
    *===========================-->
    <link rel="stylesheet" href="{{ asset('backend/vendors/charts/morris-bundle/morris.css') }} " />

    <!--=========================*
            Google Fonts
    *===========================-->

    <!-- Montserrat USE: font-family: 'Montserrat', sans-serif;-->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:100,200,300,400,500,600,700,800,900"
        rel="stylesheet" />



    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.0.0/css/font-awesome.css"
        integrity="sha512-72McA95q/YhjwmWFMGe8RI3aZIMCTJWPBbV8iQY3jy1z9+bi6+jHnERuNrDPo/WGYEzzNs4WdHNyyEr/yXJ9pA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/4.5.0/css/ionicons-core.min.css"
        integrity="sha512-Gay5UZ5iQRlc7QMlB5ZbkTgGzWR/GfwirUWbcYQoDIZEtKp5jMzFXTUZJ7dNXwIYPYr/lWg7RKsEpn95NsIBcw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/4.5.0/css/ionicons.min.css"
        integrity="sha512-gRH4zCbJNNA06nPijMDEWiONBgPyVc1+urJQR+LyEeEm9CBksPOIIL5X4MfxP+NJMLg9VjNMy+HYGPAtVBkZHQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flag-icon-css/4.1.5/css/flag-icons.min.css"
        integrity="sha512-UwbBNAFoECXUPeDhlKR3zzWU3j8ddKIQQsDOsKhXQGdiB5i3IHEXr9kXx82+gaHigbNKbTDp3VY/G6gZqva6ZQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />



    <link href="https://cdn.jsdelivr.net/npm/feather-icons-css@1.2.0/css/feather.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/@icon/themify-icons@1.0.1-alpha.3/themify-icons.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/ion@1.0.1/lib/index.min.js" rel="stylesheet">




    <!--=========================*
               Datatable
    *===========================-->
    <!-- Start datatable css -->
    <link rel="stylesheet" type="text/css"
        href="{{ asset('backend/vendors/data-table/css/jquery.dataTables.css') }} " />
    <link rel="stylesheet" type="text/css"
        href="{{ asset('backend/vendors/data-table/css/dataTables.bootstrap4.min.css') }} " />
    <link rel="stylesheet" type="text/css"
        href="{{ asset('backend/vendors/data-table/css/responsive.bootstrap.min.css') }} " />
    <link rel="stylesheet" type="text/css"
        href="{{ asset('backend/vendors/data-table/css/responsive.jqueryui.min.css') }} " />


    <!--=========================*
               Toastr Css
    *===========================-->
    <link rel="stylesheet" href="{{ asset('backend/vendors/toastr/css/toastr.min.css') }} " />

    <!--=========================*
               Ladda Button
    *===========================-->
    <link rel="stylesheet" href=" {{ asset('backend/vendors/ladda-button/css/ladda-themeless.min.css') }} " />


    <!--=========================*
               Dropzone
    *===========================-->
    <link rel="stylesheet" href="{{ asset('backend/vendors/dropzone/css/dropzone.css') }} " />

    <!--=========================*
               Fancy Box
    *===========================-->
    <link rel="stylesheet" href="{{ asset('backend/css/jquery.fancybox.css') }} " />



    <link href="https://fonts.googleapis.com/css?family=Montserrat:100,200,300,400,500,600,700,800,900"
        rel="stylesheet" />

    <!-- CKEditor 5 Builds -->
    <script src="https://cdn.ckeditor.com/ckeditor5/41.3.0/classic/ckeditor.js"></script>


    {{-- {{asset('backend/')}} --}}

    <!--========================================================================-->
    @yield('styles')
    <!--========================================================================-->

</head>

<body>
    <div class="wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="login-bg">
                    <div class="login-overlay"></div>
                    <div class="login-left">
                        <img src="{{ asset($setting->logo) }}" alt="Logo" />
                        <p>{!! $setting->description !!}</p>
                        <a href="{{ url('/') }}" class="btn btn-primary">Learn More</a>
                    </div>
                    <!--login-left-->
                </div>
                <!--login-bg-->

                <div class="login-form">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf
                        <div class="login-form-body">
                            <div class="form-gp">
                                <label for="exampleInputEmail1">Email address</label>
                                <input type="email" id="exampleInputEmail1" name="email" />
                                <i class="fa fa-user"></i>
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-gp">
                                <label for="exampleInputPassword1">Password</label>
                                <input type="password" id="exampleInputPassword1" name="password" />
                                <i class="fa fa-lock"></i>

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="row mb-4 rmber-area">
                                <div class="col-6">
                                    <div class="custom-control custom-checkbox primary-checkbox mr-sm-2">
                                        <input type="checkbox" class="custom-control-input"
                                            id="customControlAutosizing" name="remember"
                                            {{ old('remember') ? 'checked' : '' }} />
                                        <label class="custom-control-label" for="customControlAutosizing">Remember
                                            Me</label>
                                    </div>
                                </div>
                                <div class="col-6 text-right">
                                    @if (Route::has('password.request'))
                                        <a href="{{ route('password.request') }}" class="text-primary">Forgot
                                            Password?</a>
                                    @endif
                                </div>
                            </div>
                            <div class="submit-btn-area">
                                <button id="form_submit" type="submit" class="btn btn-primary">Submit <i
                                        class="fa fa-arrow-right"></i></button>
                                {{-- <div class="login-other row mt-4">
                                    <div class="col-6">
                                        <a class="fb-login" href="#"><span class="login_txt">Log in with</span>
                                            <i class="fa fa-facebook"></i></a>
                                    </div>
                                    <div class="col-6">
                                        <a class="google-login" href="#"><span class="login_txt">Log in
                                                with</span> <i class="fa fa-google"></i></a>
                                    </div>
                                </div> --}}
                            </div>
                            {{-- <div class="form-footer text-center mt-5">
                                <p class="text-muted">Don't have an account? <a href="register.html"
                                        class="text-primary">Sign up</a></p>
                            </div> --}}
                        </div>
                    </form>
                </div>
                <!--login-form-->
            </div>
            <!--row-->
        </div>
        <!--container-fluid-->
    </div>
    <!--wrapper-->


    <!--**********************************
        {{-- Scripts {{ asset('backend/') }} --}}
    ***********************************-->

    <!-- Jquery Js -->
    <script src="{{ asset('backend/js/jquery.min.js') }}"></script>
    <!-- bootstrap 4 js -->
    <script src="{{ asset('backend/js/popper.min.js') }}"></script>
    <script src="{{ asset('backend/js/bootstrap.min.js') }}"></script>
    <!-- Owl Carousel Js -->
    <script src="{{ asset('backend/js/owl.carousel.min.js') }}"></script>
    <!-- Metis Menu Js -->
    <script src="{{ asset('backend/js/metisMenu.min.js') }}"></script>
    <!-- SlimScroll Js -->
    <script src="{{ asset('backend/js/jquery.slimscroll.min.js') }}"></script>
    <!-- Slick Nav -->
    <script src="{{ asset('backend/js/jquery.slicknav.min.js') }}"></script>
    <script src="{{ asset('backend/js/jquery.fancybox.pack.js') }}"></script>
    <script src="{{ asset('backend/js/main.js.js') }}"></script>

</body>

</html>
