<div class="sidebar-menu">
    <div class="sidebar-header">
        <div class="logo">
            <a href="{{ route('dashboard') }}"><img src="{{ asset('backend/images/logo.png') }} " alt="logo" /></a>
        </div>
    </div>

    <div class="main-menu">
        <div class="menu-inner" id="sidebar_menu">
            <nav>
                <ul class="metismenu" id="menu">
                    <li class="active">
                        <a href="{{ route('dashboard') }}">
                            <i class="feather ft-home"></i>
                            <span>Dashboard</span>
                        </a>
                    </li>

                    <li>
                        <a href="javascript:void(0)" aria-expanded="true">
                            <i class="fa fa-step-forward"></i>
                            <span>Slider</span>
                        </a>
                        <ul class="collapse">
                            <li>
                                <a href="{{ route('slider.index') }}">
                                    <i class="fa fa-circle-o "></i>
                                    <span>Slider List</span>
                                </a>
                            </li>

                        </ul>
                    </li>
                    <li>
                        <a href="javascript:void(0)" aria-expanded="true">
                            <i class="fa fa-step-forward"></i>
                            <span>About Us</span>
                        </a>
                        <ul class="collapse">
                            <li><a href="{{ route('about-us-item.index') }}">About Us Item</a></li>
                            <li><a href="{{ route('about.index') }}">About Us</a></li>
                        </ul>
                    </li>

                    <li>
                        <a href="javascript:void(0)" aria-expanded="true">
                            <i class="fa fa-users"></i>
                            <span>Team</span>
                        </a>
                        <ul class="collapse">
                            <li><a href="{{ route('percents.index') }}">Skill Level</a></li>
                            <li><a href="{{ route('skills.index') }}"> Team Skill</a></li>
                            <li><a href="{{ route('team.index') }}">Team List</a></li>
                        </ul>
                    </li>

                    <li>
                        <a href="javascript:void(0)" aria-expanded="true">
                            <i class="fa fa-book"></i>
                            <span>Services</span>
                        </a>
                        <ul class="collapse">
                            <li><a href="{{ route('service.index') }}">Service List</a></li>
                        </ul>
                    </li>

                    {{-- <li>
                        <a href="javascript:void(0)" aria-expanded="true">
                            <i class="fa fa-book"></i>
                            <span>Partners</span>
                        </a>
                        <ul class="collapse">
                            <li><a href="{{ route('partner.index') }}">Partner List</a></li>
                            <li><a href="{{ route('technology.index') }}">Our Technology </a></li>
                        </ul>
                    </li> --}}

                    <li>
                        <a href="javascript:void(0)" aria-expanded="true">
                            <i class="fa fa-image"></i>
                            <span>Gallery</span>
                        </a>
                        <ul class="collapse">
                            <li>
                                <a href="{{ route('gallery.index') }}">
                                    <i class="fa fa-circle-o "></i>
                                    <span> Gallery List</span>
                                </a>
                            </li>
                        </ul>
                    </li>

                    <li>
                        <a href="javascript:void(0)" aria-expanded="true">
                            <i class="fa fa-book"></i>
                            <span>Testimonial</span>
                        </a>
                        <ul class="collapse">
                            <li><a href="{{ route('testimonial.index') }}">Testimonial List</a></li>
                        </ul>
                    </li>

                    <li>
                        <a href="javascript:void(0)" aria-expanded="true">
                            <i class="fa fa-book"></i>
                            <span>Blog</span>
                        </a>
                        <ul class="collapse">
                            <li><a href="{{ route('categories.index') }}">Blog Category</a></li>
                            <li><a href="{{ route('blog.index') }}">Blog List</a></li>

                        </ul>
                    </li>

                    {{-- <li>
                        <a href="javascript:void(0)" aria-expanded="true">
                            <i class="fa fa-book"></i>
                            <span>Project</span>
                        </a>
                        <ul class="collapse">
                            <li><a href="{{ route('project.index') }}">Project List</a></li>

                        </ul>
                    </li> --}}

                    <li>
                        <a href="javascript:void(0)" aria-expanded="true">
                            <i class="fa fa-book"></i>
                            <span>FAQ</span>
                        </a>
                        <ul class="collapse">
                            <li><a href="{{ route('admin-faq.index') }}">FAQ List</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="javascript:void(0)" aria-expanded="true">
                            <i class="fa fa-book"></i>
                            <span>Messages/Complains</span>
                        </a>
                        <ul class="collapse">
                            <li><a href="{{ route('messages.message') }}">Messages/Complains</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="javascript:void(0)" aria-expanded="true">
                            <i class="fa fa-book"></i>
                            <span>Settings</span>
                        </a>
                        <ul class="collapse">
                            <li><a href="{{ route('settings.index') }}">Settings</a></li>
                        </ul>
                    </li>

                </ul>
            </nav>
        </div>
    </div>

</div>
