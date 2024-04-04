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

    <script src="https://cdn.ckeditor.com/ckeditor5/41.2.1/classic/ckeditor.js"></script>

    {{-- {{asset('backend/')}} --}}

    <!--========================================================================-->
    @yield('styles')
    <!--========================================================================-->

</head>

<body>

    <!--=========================*
         Page Container
    *===========================-->
    <div class="page-container">

        @include('pages.common.sidebar')

        <div class="main-content page-content">

            @include('pages.common.header')

            <div class="main-content-inner">
                @yield('content')
            </div>

        </div>

        <!--=================================*
                Footer Section
        *===================================-->
        <footer>
            <div class="footer-area">
                <p>&copy; Copyright 2019. All right reserved.</p>
            </div>
        </footer>
        <!--=================================*
              End Footer Section
        *===================================-->
    </div>

    <div class="offset-area">
        <div class="offset-close"><i class="ti-close"></i></div>
        <ul class="nav offset-menu-tab">
            <li><a class="active" data-toggle="tab" href="#activity">Activity</a></li>
            <li><a data-toggle="tab" href="#settings">Settings</a></li>
        </ul>
        <div class="offset-content tab-content">
            <div id="activity" class="tab-pane fade in show active">
                <div class="recent-activity">
                    <div class="timeline-task">
                        <div class="icon bg_secondary">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none"
                                stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" aria-hidden="true" data-reactid="781">
                                <path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z"></path>
                            </svg>
                        </div>
                        <div class="timeline_title">
                            <h4>You got 1 New Message</h4>
                            <span class="time"><i class="ti-time"></i>09:35</span>
                        </div>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Esse distinctio itaque at.</p>
                    </div>
                    <div class="timeline-task">
                        <div class="icon bg_success">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none"
                                stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" aria-hidden="true">
                                <polyline points="20 6 9 17 4 12"></polyline>
                            </svg>
                        </div>
                        <div class="timeline_title">
                            <h4>Your Verification Successful</h4>
                            <span class="time"><i class="ti-time"></i>7 Minutes Ago</span>
                        </div>
                        <p>Lorem ipsum dolor sit amet consectetur.</p>
                    </div>
                    <div class="timeline-task">
                        <div class="icon bg_danger">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none"
                                stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" aria-hidden="true">
                                <path
                                    d="M10.29 3.86L1.82 18a2 2 0 0 0 1.71 3h16.94a2 2 0 0 0 1.71-3L13.71 3.86a2 2 0 0 0-3.42 0z">
                                </path>
                                <line x1="12" y1="9" x2="12" y2="13"></line>
                                <line x1="12" y1="17" x2="12" y2="17"></line>
                            </svg>
                        </div>
                        <div class="timeline_title">
                            <h4>Something Went Wrong</h4>
                            <span class="time"><i class="ti-time"></i>09:20 Am</span>
                        </div>
                    </div>
                    <div class="timeline-task">
                        <div class="icon bg_warning">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none"
                                stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" aria-hidden="true">
                                <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path>
                                <circle cx="12" cy="7" r="4"></circle>
                            </svg>
                        </div>
                        <div class="timeline_title">
                            <h4>Member waiting for your Response</h4>
                            <span class="time"><i class="ti-time"></i>09:35</span>
                        </div>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Esse distinctio itaque at.</p>
                    </div>
                    <div class="timeline-task">
                        <div class="icon bg_info">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none"
                                stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" aria-hidden="true">
                                <polyline points="3 6 5 6 21 6"></polyline>
                                <path
                                    d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2">
                                </path>
                                <line x1="10" y1="11" x2="10" y2="17"></line>
                                <line x1="14" y1="11" x2="14" y2="17"></line>
                            </svg>
                        </div>
                        <div class="timeline_title">
                            <h4>You Deleted Jhon Doe</h4>
                            <span class="time"><i class="ti-time"></i>01 minutes ago</span>
                        </div>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Esse distinctio itaque at.</p>
                    </div>
                </div>
            </div>
            <div id="settings" class="tab-pane fade">
                <div class="offset-settings">
                    <h4>General Settings</h4>
                    <div class="settings-list">
                        <div class="settings_sec">
                            <div class="setting_list_title">
                                <h5>Notifications</h5>
                                <div class="ui_switch">
                                    <input type="checkbox" id="switch1" />
                                    <label for="switch1">Toggle</label>
                                </div>
                            </div>
                            <p>Keep it 'On' When you want to get all the notification.</p>
                        </div>
                        <div class="settings_sec">
                            <div class="setting_list_title">
                                <h5>Show recent activity</h5>
                                <div class="ui_switch">
                                    <input type="checkbox" id="switch2" />
                                    <label for="switch2">Toggle</label>
                                </div>
                            </div>
                            <p>The for attribute is necessary to bind our custom checkbox with the input.</p>
                        </div>
                        <div class="settings_sec">
                            <div class="setting_list_title">
                                <h5>Show your emails</h5>
                                <div class="ui_switch">
                                    <input type="checkbox" id="switch3" />
                                    <label for="switch3">Toggle</label>
                                </div>
                            </div>
                            <p>Show email so that easily find you.</p>
                        </div>
                        <div class="settings_sec">
                            <div class="setting_list_title">
                                <h5>Show Task statistics</h5>
                                <div class="ui_switch">
                                    <input type="checkbox" id="switch4" />
                                    <label for="switch4">Toggle</label>
                                </div>
                            </div>
                            <p>The for attribute is necessary to bind our custom checkbox with the input.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

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
    <!-- start amchart js -->
    <script src="{{ asset('backend/vendors/am-charts/js/ammap.js') }}"></script>
    <script src="{{ asset('backend/vendors/am-charts/js/worldLow.js') }}"></script>
    <script src="{{ asset('backend/vendors/am-charts/js/continentsLow.js') }}"></script>
    <script src="{{ asset('backend/vendors/am-charts/js/light.js') }}"></script>
    <!-- maps js -->
    <script src="{{ asset('backend/js/am-maps.js') }}"></script>

    <!--Morris Chart-->
    <script src="{{ asset('backend/vendors/charts/morris-bundle/raphael.min.js') }}"></script>
    <script src="{{ asset('backend/vendors/charts/morris-bundle/morris.js') }}"></script>

    <!--Chart Js-->
    <script src="{{ asset('backend/vendors/charts/charts-bundle/Chart.bundle.js') }}"></script>

    <!--Sparkline Chart-->
    <script src="{{ asset('backend/vendors/charts/sparkline/jquery.sparkline.js') }}"></script>

    <!--Home Script-->
    <script src="{{ asset('backend/js/home.js') }}"></script>


    {{-- <!-- Data Table {{ asset('backend/') }} js --> --}}
    <script src="{{ asset('backend/vendors/data-table/js/jquery.dataTables.js') }}"></script>
    <script src="{{ asset('backend/vendors/data-table/js/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('backend/vendors/data-table/js/dataTables.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('backend/vendors/data-table/js/dataTables.responsive.min.js') }}"></script>
    <script src="{{ asset('backend/vendors/data-table/js/responsive.bootstrap.min.js') }}"></script>

    <!-- Data table Init -->
    <script src="{{ asset('backend/js/init/data-table.js') }}"></script>


    <!-- Toastr Js -->
    <script src="{{ asset('backend/vendors/toastr/js/toastr.min.js') }} "></script>
    <!-- Toastr Init -->
    <script src="{{ asset('backend/js/init/toastr.js') }} "></script>

    <!-- Ladda Button Js -->
    <script src="{{ asset('backend/vendors/ladda-button/js/spin.min.js') }}"></script>
    <script src="{{ asset('backend/vendors/ladda-button/js/ladda.jquery.min.js') }}"></script>
    <script src="{{ asset('backend/vendors/ladda-button/js/ladda.min.js') }}"></script>

    <!-- Ladda Button init Js -->
    <script src="{{ asset('backend/js/init/ladda-button.js') }}"></script>

    <!-- Dropzone Js -->
    <script src="{{ asset('backend/vendors/dropzone/js/dropzone.js') }} "></script>

    <!-- Dropzone init Js -->
    <script src="{{ asset('backend/js/init/dropzone.js') }} "></script>



    <script src="{{ asset('backend/js/masonry.pkgd.min.js') }}"></script>
    <script src="{{ asset('backend/js/init/masonary.js') }}"></script>
    <!-- Fancy Box Js -->
    <script src="{{ asset('backend/js/jquery.fancybox.pack.js') }}"></script>
    <script src="{{ asset('backend/js/init/fancy.js') }}"></script>


    <!-- Validation Script -->
    <script>
        //  Form Validation
        window.addEventListener(
            "load",
            function() {
                // Fetch all the forms we want to apply custom Bootstrap validation styles to
                var forms = document.getElementsByClassName("needs-validation");
                // Loop over them and prevent submission
                var validation = Array.prototype.filter.call(forms, function(form) {
                    form.addEventListener(
                        "submit",
                        function(event) {
                            if (form.checkValidity() === false) {
                                event.preventDefault();
                                event.stopPropagation();
                            }
                            form.classList.add("was-validated");
                        },
                        false
                    );
                });
            },
            false
        );
    </script>


    {{-- <script>
        ClassicEditor
            .create(document.querySelector('#editor1'))
            .catch(error => {
                console.error(error);
            });
    </script> --}}

    <script>
        ClassicEditor
            .create(document.querySelector('#editor2'))
            .catch(error => {
                console.error(error);
            });
    </script>

    <script>
        ClassicEditor
            .create(document.querySelector('#editor3'))
            .catch(error => {
                console.error(error);
            });
    </script>

    <script>
        ClassicEditor
            .create(document.querySelector('#editor4'))
            .catch(error => {
                console.error(error);
            });
    </script>

    <!-- Main Js -->
    <script src="{{ asset('backend/js/main.js') }}"></script>

    <!--========================================================================-->
    @yield('scripts')
    <!--========================================================================-->

</body>

</html>
