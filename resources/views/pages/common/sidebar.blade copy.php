<!--**********************************
            Sidebar start
        ***********************************-->
<div class="quixnav">
    <div class="quixnav-scroll">
        <ul class="metismenu" id="menu">
            <li class="nav-label first">Main Menu</li>
            <!-- <li><a href="index.html"><i class="icon icon-single-04"></i><span class="nav-text">Dashboard</span></a>
                    </li> -->
            {{-- <li><a class="has-arrow" href="javascript:void()" aria-expanded="false"><i
                        class="icon icon-single-04"></i><span class="nav-text">Dashboard</span></a>
                <ul aria-expanded="false">
                    <li><a href="./index.html">Dashboard 1</a></li>
                    <li><a href="./index2.html">Dashboard 2</a></li>
                </ul>
            </li> --}}
            {{-- <li><a class="has-arrow" href="javascript:void()" aria-expanded="false"><i class="icon icon-globe-2"></i><span
                        class="nav-text">Slider</span></a>
                <ul aria-expanded="false">
                    <li><a href="{{ route('slider.index') }}">Slider List</a></li>
                </ul>
            </li> --}}

            <li><a class="has-arrow" href="javascript:void()" aria-expanded="false"><i
                        class="icon icon-globe-2"></i><span class="nav-text">Team</span></a>
                <ul aria-expanded="false">
                    {{-- <li><a href="{{ route('skills.index') }}">Add Skill</a></li>
                    <li><a href="{{ route('percents.index') }}">Add Skill Percent</a></li> --}}
                    <li><a href="{{ route('team.index') }}">Team List</a></li>
                </ul>
            </li>

            <li><a class="has-arrow" href="javascript:void()" aria-expanded="false"><i
                        class="icon icon-globe-2"></i><span class="nav-text">Services</span></a>
                <ul aria-expanded="false">
                    <li><a href="{{ route('service.index') }}">Service List</a></li>
                </ul>
            </li>

            <li><a class="has-arrow" href="javascript:void()" aria-expanded="false"><i class="fa fa-users"></i><span
                        class="nav-text">Partners</span></a>
                <ul aria-expanded="false">
                    <li><a href="{{ route('partner.index') }}">Partner List</a></li>
                    {{-- <li><a href="{{ route('technology.index') }}">Our Technology </a></li> --}}
                </ul>
            </li>

            <li><a class="has-arrow" href="javascript:void()" aria-expanded="false"><i class="fa fa-users"></i><span
                        class="nav-text">Gallery</span></a>
                <ul aria-expanded="false">
                    <li><a href="{{ route('gallery.index') }}">Gallery List</a></li>
                </ul>
            </li>

            <li><a class="has-arrow" href="javascript:void()" aria-expanded="false"><i class="fa fa-user"></i><span
                        class="nav-text">Testimonial</span></a>
                <ul aria-expanded="false">
                    <li><a href="{{ route('testimonial.index') }}">Testimonial List</a></li>
                </ul>
            </li>

            <li><a class="has-arrow" href="javascript:void()" aria-expanded="false"><i
                        class="icon icon-globe-2"></i><span class="nav-text">About Us</span></a>
                <ul aria-expanded="false">
                    <li><a href="{{ route('about-us-item.index') }}">About Us Item</a></li>
                    <li><a href="{{ route('about.index') }}">About Us</a></li>
                </ul>
            </li>

            <li><a class="has-arrow" href="javascript:void()" aria-expanded="false"><i
                        class="icon icon-globe-2"></i><span class="nav-text">Blog</span></a>
                <ul aria-expanded="false">
                    <li><a href="{{ route('categories.index') }}">Blog Category</a></li>
                    <li><a href="{{ route('blog.index') }}">Blog List</a></li>
                </ul>
            </li>

            <li><a class="has-arrow" href="javascript:void()" aria-expanded="false"><i
                        class="icon icon-globe-2"></i><span class="nav-text">FAQ</span></a>
                <ul aria-expanded="false">
                    <li><a href="{{ route('admin-faq.index') }}">FAQ List</a></li>
                </ul>
            </li>

            {{-- <li><a class="has-arrow" href="javascript:void()" aria-expanded="false"><i
                        class="icon icon-globe-2"></i><span class="nav-text">Project</span></a>
                <ul aria-expanded="false">
                    <li><a href="{{ route('project.index') }}">Project List</a></li>
                </ul>
            </li> --}}

            <li><a class="has-arrow" href="javascript:void()" aria-expanded="false"><i
                        class="icon icon-globe-2"></i><span class="nav-text">Property</span></a>
                <ul aria-expanded="false">
                    <li><a href="{{ route('feature.index') }}">Project Feature List</a></li>
                    <li><a href="{{ route('property.index') }}">Project List</a></li>
                </ul>
            </li>

            <li><a class="has-arrow" href="javascript:void()" aria-expanded="false"><i
                        class="icon icon-globe-2"></i><span class="nav-text">Messages/Complains</span></a>
                <ul aria-expanded="false">
                    <li><a href="{{ route('messages.message') }}">Messages/Complains</a></li>
                </ul>
            </li>

            <li class="nav-label"></li>
            <li><a class="has-arrow" href="javascript:void()" aria-expanded="false"><i
                        class="icon icon-globe-2"></i><span class="nav-text">Settings</span></a>
                <ul aria-expanded="false">
                    <li><a href="{{ route('settings.index') }}">Settings</a></li>
                </ul>
            </li>

            @guest
            @else
                @if (Auth::user()->role_id == 1)
                    <li><a class="has-arrow" href="javascript:void()" aria-expanded="false"><i
                                class="icon icon-app-store"></i><span class="nav-text">Technical Admin Setup</span></a>
                        <ul aria-expanded="false">
                            <li><a href="./app-profile.html">Profile</a></li>
                            <li><a class="has-arrow" href="javascript:void()" aria-expanded="false">Email</a>
                                <ul aria-expanded="false">
                                    <li><a href="./email-compose.html">Compose</a></li>
                                    <li><a href="./email-inbox.html">Inbox</a></li>
                                    <li><a href="./email-read.html">Read</a></li>
                                </ul>
                            </li>
                            <li><a href="./app-calender.html">Calendar</a></li>
                        </ul>
                    </li>
                @endif
            @endguest
        </ul>
    </div>
</div>
<!--**********************************
    Sidebar end
***********************************-->
