<header id="ft-header" class="ft-header-section header-style-one">
    <div class="ft-header-content-wrapper position-relative">
        <div class="container">
            <div class="ft-header-content position-relative">
                <div class="ft-brand-logo">
                    <a href="{{ url('/') }}"><img src="{{ asset($setting->logo) }}" alt="" /></a>
                </div>
                <div class="ft-header-menu-top-cta position-relative">
                    <div class="ft-header-top ul-li">
                        <ul>
                            <li><i class="fal fa-envelope"></i>{{ $setting->email_1 }}</li>
                            <li><i class="fal fa-map-marker-alt"></i>
                                {{-- 121 WallStreet Street, NY York, USA --}}
                                {{ strip_tags($setting->address) }}
                            </li>
                        </ul>
                    </div>
                    <div class="ft-header-main-menu d-flex justify-content-end align-items-center">
                        <nav class="ft-main-navigation clearfix ul-li">
                            <ul id="ft-main-nav" class="nav navbar-nav clearfix">

                                <li>
                                    <a href="{{ url('/') }}">Home</a>
                                    <ul class="dropdown-menu clearfix">
                                        <li><a href="{{ url('/') }}">Home</a></li>
                                    </ul>
                                </li>

                                <li class="dropdown">
                                    <a href="{{ route('about.page') }}">About Us</a>
                                    <ul class="dropdown-menu clearfix">
                                        <li><a href="{{ route('about.page') }}">About Us</a></li>
                                        <li><a href="{{ route('team.page') }}">Meet Our Team</a></li>
                                    </ul>
                                </li>

                                <li class="dropdown">
                                    <a href="{{ route('service.page') }}">Service</a>
                                    <ul class="dropdown-menu clearfix">
                                        <li><a href="{{ route('service.page') }}">Services</a>
                                        </li>

                                        @foreach ($services as $item)
                                            @php
                                                $title = strtolower(str_replace(' ', '-', $item->title));
                                            @endphp
                                            <li><a
                                                    href="{{ route('service.single', $title) }}">{{ $item->title }}</a>
                                            </li>
                                        @endforeach
                                    </ul>
                                </li>
                                <li class="dropdown">
                                    <a href="{{ route('gallery.page') }}">Media</a>
                                    <ul class="dropdown-menu clearfix">
                                        <li><a href="{{ route('gallery.page') }}">Gallery</a></li>
                                        <li><a href="{{ route('video.page') }}">Video</a></li>
                                    </ul>
                                </li>

                                <li class="dropdown">
                                    <a href="{{ route('blog.page') }}">News</a>
                                    <ul class="dropdown-menu clearfix">
                                        <li><a href="{{ route('blog.page') }}">News </a></li>
                                        @foreach ($categories as $item)
                                            @php
                                                $name = strtolower(str_replace(' ', '-', $item->name));
                                            @endphp
                                            <li>
                                                <a href="{{ route('blog.cat', $name) }}">
                                                    {{ $item->name }}</a>
                                            </li>
                                        @endforeach
                                    </ul>
                                </li>
                                <li>
                                    <a href="{{ route('faq.page') }}">FAQ'S</a>
                                </li>

                            </ul>
                        </nav>
                        <div class="ft-header-cta-btn">
                            <a class="d-flex justify-content-center align-items-center"
                                href="{{ route('contact.page') }}">Get A
                                Quote</a>
                        </div>
                    </div>
                </div>
                <div class="mobile_menu position-relative">
                    <div class="mobile_menu_button open_mobile_menu">
                        <i class="fal fa-bars"></i>
                    </div>
                    <div class="mobile_menu_wrap">
                        <div class="mobile_menu_overlay open_mobile_menu"></div>
                        <div class="mobile_menu_content">
                            <div class="mobile_menu_close open_mobile_menu">
                                <i class="fal fa-times"></i>
                            </div>
                            <div class="m-brand-logo">
                                <a href="{{ url('/') }}"><img src="{{ asset($setting->logo) }}"
                                        alt=""></a>
                            </div>
                            <nav class="mobile-main-navigation  clearfix ul-li">
                                <ul id="m-main-nav" class="navbar-nav text-capitalize clearfix">
                                    <li class="dropdown">
                                        <a href="{{ url('/') }}">Home</a>
                                        <ul class="dropdown-menu clearfix">
                                            <li><a href="{{ url('/') }}">Home</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="{{ route('about.page') }}">About Us</a>
                                        <ul class="dropdown-menu clearfix">
                                            <li><a href="{{ route('about.page') }}">About Us</a></li>
                                            <li><a href="{{ route('team.page') }}">Meet Our Team</a></li>
                                        </ul>
                                    </li>
                                    <li class="dropdown">
                                        <a href="{{ route('service.page') }}">Service</a>
                                        <ul class="dropdown-menu clearfix">
                                            <li><a href="{{ route('service.page') }}">Services</a>
                                            </li>

                                            @foreach ($services as $item)
                                                @php
                                                    $title = strtolower(str_replace(' ', '-', $item->title));
                                                @endphp
                                                <li><a
                                                        href="{{ route('service.single', $title) }}">{{ $item->title }}</a>
                                                </li>
                                            @endforeach
                                        </ul>
                                    </li>


                                    <li class="dropdown">
                                        <a href="{{ route('gallery.page') }}">Media</a>
                                        <ul class="dropdown-menu clearfix">
                                            <li><a href="{{ route('gallery.page') }}">Gallery</a></li>
                                            <li><a href="{{ route('video.page') }}">Video</a></li>
                                        </ul>
                                    </li>

                                    <li class="dropdown">
                                        <a href="{{ route('blog.page') }}">News</a>
                                        <ul class="dropdown-menu clearfix">
                                            <li><a href="{{ route('blog.page') }}">News </a></li>
                                            @foreach ($categories as $item)
                                                @php
                                                    $name = strtolower(str_replace(' ', '-', $item->name));
                                                @endphp
                                                <li>
                                                    <a href="{{ route('blog.cat', $name) }}">
                                                        {{ $item->name }}</a>
                                                </li>
                                            @endforeach
                                        </ul>
                                    </li>
                                    <li class="dropdown">
                                        <a href="{{ route('faq.page') }}">FAQ'S</a>
                                    </li>

                                    <li class="dropdown">
                                        <a href="{{ route('contact.page') }}">Contact Us</a>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                    <!-- /Mobile-Menu -->
                </div>
            </div>
        </div>
        <div class="ft-header-cta-info d-flex">
            <div class="ft-header-cta-icon d-flex justify-content-center align-items-center">
                <i class="flaticon-call" ></i>
            </div>
            <div class="ft-header-cta-text headline pera-content">
                <p>Get In Touch</p>
                <h3 style="color: #fff">{{ $setting->phone_1 }}</h3>
            </div>
        </div>
    </div>
</header>
