 <div>
     <!-- HEADER AREA START (header-5) -->
     <header class="ltn__header-area ltn__header-5 ltn__header-transparent--- gradient-color-4---">
         <!-- ltn__header-top-area start -->
         <div class="ltn__header-top-area section-bg-6 top-area-color-white---">
             <div class="container">
                 <div class="row">
                     <div class="col-md-9">
                         <div class="ltn__top-bar-menu">
                             <ul>
                                 <li><a href="tel::{{ $setting->phone_1 }}"><i class="icon-call"></i>
                                         {{ $setting->phone_1 }}</a></li>
                                 <li><a><i class="icon-placeholder"></i>{{ strip_tags($setting->address) }}</a></li>
                             </ul>
                         </div>
                     </div>
                     <div class="col-md-3">
                         <div class="top-bar-right text-end">
                             <div class="ltn__top-bar-menu">
                                 <ul>
                                     <li class="d-none">
                                         <!-- ltn__language-menu -->
                                         <div class="ltn__drop-menu ltn__currency-menu ltn__language-menu">
                                             <ul>
                                                 <li><a href="#" class="dropdown-toggle"><span
                                                             class="active-currency">English</span></a>
                                                     <ul>
                                                         <li><a href="#">Arabic</a></li>
                                                         <li><a href="#">Bengali</a></li>
                                                         <li><a href="#">Chinese</a></li>
                                                         <li><a href="#">English</a></li>
                                                         <li><a href="#">French</a></li>
                                                         <li><a href="#">Hindi</a></li>
                                                     </ul>
                                                 </li>
                                             </ul>
                                         </div>
                                     </li>
                                     <li>
                                         <!-- ltn__social-media -->
                                         <div class="ltn__social-media">
                                             <ul>
                                                 <li><a href="{{ $setting->facebook }}" target="_blank"
                                                         title="Facebook"><i class="fab fa-facebook-f"></i></a></li>
                                                 <li><a href="{{ $setting->youtube }}" target="_blank"
                                                         title="youtube"><i class="fab fa-youtube"></i></a>
                                                 </li>

                                                 <li><a href="{{ $setting->instagram }}" target="_blank"
                                                         title="Instagram"><i class="fab fa-instagram"></i></a>
                                                 </li>
                                             </ul>
                                         </div>
                                     </li>
                                     <li>
                                         <!-- header-top-btn -->
                                         <div class="header-top-btn">
                                             <a>RC-1238707</a>
                                         </div>
                                     </li>
                                 </ul>
                             </div>
                         </div>
                     </div>
                 </div>
             </div>
         </div>
         <!-- ltn__header-top-area end -->

         <!-- ltn__header-middle-area start -->
         <div class="ltn__header-middle-area ltn__header-sticky ltn__sticky-bg-white">
             <div class="container">
                 <div class="row">
                     <div class="col">
                         <div class="site-logo-wrap">
                             <div class="site-logo">
                                 <a href="{{ url('/') }}" wire:navigate><img
                                         src="{{ asset('cleverbiz/frontend/img/logo.png') }} " alt="Logo"></a>
                             </div>
                             <div class="get-support clearfix d-none">
                                 <div class="get-support-icon">
                                     <i class="icon-call"></i>
                                 </div>
                                 <div class="get-support-info">
                                     <h6>Get Support</h6>
                                     <h4><a href="tel:{{ $setting->phone_1 }}">{{ $setting->phone_1 }}</a></h4>
                                 </div>
                             </div>
                         </div>
                     </div>
                     <div class="col header-menu-column">
                         <div class="header-menu d-none d-xl-block">
                             <nav>
                                 <div class="ltn__main-menu">
                                     <ul>
                                         <li class="menu-icon"><a href="#">Home</a>
                                             <ul class="sub-menu menu-pages-img-show">
                                                 <li>
                                                     <a href="{{ url('/') }}" wire:navigate>Home</a>
                                                 </li>
                                             </ul>
                                         </li>
                                         <li class="menu-icon"><a href="/about-us" wire:navigate>About</a>
                                             <ul>
                                                 <li><a href="/about-us" wire:navigate>About</a></li>
                                                 <li><a href="{{ route('service.page') }}" wire:navigate>Services</a>
                                                 </li>
                                                 <li><a href="{{ route('team.page') }}" wire:navigate>Team</a></li>
                                             </ul>
                                         </li>

                                         <li class="menu-icon"><a href="{{ route('gallery.page') }}"
                                                 wire:navigate>Portfolio</a>
                                             <ul>
                                                 <li><a href="{{ route('gallery.page') }}" wire:navigate>Portfolio</a>
                                                 </li>
                                             </ul>
                                         </li>

                                         <li class="menu-icon"><a href="{{ route('property.page') }}"
                                                 wire:navigate>Property</a>
                                             <ul>
                                                 <li><a href="{{ route('property.page') }}" wire:navigate.lazy>Property
                                                         List</a> </li>
                                             </ul>
                                         </li>
                                         <li class="menu-icon"><a href="{{ route('blog.page') }}"
                                                 wire:navigate>News</a>
                                             <ul>
                                                 <li><a href="{{ route('blog.page') }}" wire:navigate>News</a></li>
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

                                         <li class="menu-icon"><a href="{{ route('faq.page') }}" wire:navigate>FAQ</a>
                                             <ul>
                                                 <li><a href="{{ route('faq.page') }}" wire:navigate>FAQ</a></li>
                                             </ul>
                                         </li>

                                         <li><a href="{{ route('contact.page') }}" wire:navigate>Contact</a></li>
                                     </ul>
                                 </div>
                             </nav>
                         </div>
                     </div>
                     <div class="col ltn__header-options ltn__header-options-2 mb-sm-20">
                         <!-- header-search-1 -->
                         <div class="header-search-wrap">
                             <div class="header-search-1">
                                 <div class="search-icon">
                                     <i class="icon-search for-search-show"></i>
                                     <i class="icon-cancel  for-search-close"></i>
                                 </div>
                             </div>
                             <div class="header-search-1-form">
                                 <form id="#" method="get" action="#">
                                     <input type="text" name="search" value="" placeholder="Search here..." />
                                     <button type="submit">
                                         <span><i class="icon-search"></i></span>
                                     </button>
                                 </form>
                             </div>
                         </div>

                         <!-- Mobile Menu Button -->
                         <div class="mobile-menu-toggle d-xl-none">
                             <a href="#ltn__utilize-mobile-menu" class="ltn__utilize-toggle">
                                 <svg viewBox="0 0 800 600">
                                     <path
                                         d="M300,220 C300,220 520,220 540,220 C740,220 640,540 520,420 C440,340 300,200 300,200"
                                         id="top"></path>
                                     <path d="M300,320 L540,320" id="middle"></path>
                                     <path
                                         d="M300,210 C300,210 520,210 540,210 C740,210 640,530 520,410 C440,330 300,190 300,190"
                                         id="bottom"
                                         transform="translate(480, 320) scale(1, -1) translate(-480, -318) ">
                                     </path>
                                 </svg>
                             </a>
                         </div>
                     </div>
                 </div>
             </div>
         </div>
         <!-- ltn__header-middle-area end -->
     </header>

     <!-- Utilize Mobile Menu Start -->
     <div id="ltn__utilize-mobile-menu" class="ltn__utilize ltn__utilize-mobile-menu">
         <div class="ltn__utilize-menu-inner ltn__scrollbar">
             <div class="ltn__utilize-menu-head">
                 <div class="site-logo">
                     <a href="{{ url('/') }}" wire:navigate><img
                             src="{{ asset('cleverbiz/frontend/img/logo.png') }} " alt="Logo"></a>
                 </div>
                 <button class="ltn__utilize-close">×</button>
             </div>
             <div class="ltn__utilize-menu-search-form">
                 <form action="#">
                     <input type="text" placeholder="Search...">
                     <button><i class="fas fa-search"></i></button>
                 </form>
             </div>
             <div class="ltn__utilize-menu">
                 <ul>
                     <li><a href="{{ url('/') }}" wire:navigate>Home</a>
                         <ul class="sub-menu">
                             <li><a href="{{ url('/') }}" wire:navigate>Home</a></li>
                         </ul>
                     </li>
                     <li><a href="{{ route('about.page') }}" wire:navigate>About</a>
                         <ul class="sub-menu">
                             <li><a href="{{ route('about.page') }}" wire:navigate>About</a></li>
                             <li><a href="{{ route('service.page') }}" wire:navigate>Services</a></li>
                             <li><a href="{{ route('team.page') }}" wire:navigate>Team</a></li>
                         </ul>
                     </li>
                     <li><a href="{{ route('property.page') }}" wire:navigate>Property</a>
                         <ul class="sub-menu">
                             <li><a href="{{ route('property.page') }}" wire:navigate>Property List</a></li>
                         </ul>
                     </li>
                     <li><a href="{{ route('blog.page') }}" wire:navigate>News</a>
                         <ul class="sub-menu">
                             <li><a href="{{ route('blog.page') }}" wire:navigate>News</a></li>
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
                     <li><a href="{{ route('gallery.page') }}" wire:navigate>Portfolio</a></li>

                     <li><a href="{{ route('faq.page') }}" wire:navigate>FAQ</a></li>

                     <li><a href="{{ route('contact.page') }}" wire:navigate>Contact</a></li>
                 </ul>
             </div>
             <div class="ltn__utilize-buttons ltn__utilize-buttons-2">
                 <ul>
                     <li>
                         <a title="RC Number" style="color: #FF5A3C; font-weight: bold">
                             {{-- <span class="utilize-btn-icon">
                                <i class="far fa-user"></i>
                            </span> --}}
                             RC-1238707
                         </a>
                     </li>
                     {{-- <li>
                        <a href="wishlist.html" title="Wishlist">
                            <span class="utilize-btn-icon">
                                <i class="far fa-heart"></i>
                                <sup>3</sup>
                            </span>
                            Wishlist
                        </a>
                    </li>
                    <li>
                        <a href="cart.html" title="Shoping Cart">
                            <span class="utilize-btn-icon">
                                <i class="fas fa-shopping-cart"></i>
                                <sup>5</sup>
                            </span>
                            Shoping Cart
                        </a>
                    </li> --}}
                 </ul>
             </div>
             <div class="ltn__social-media-2">
                 <ul>
                     <li><a href="{{ $setting->facebook }}" target="_blank" title="Facebook"><i
                                 class="fab fa-facebook-f"></i></a></li>
                     <li><a href="{{ $setting->youtube }}" target="_blank" title="youtube"><i
                                 class="fab fa-youtube"></i></a></li>
                     <li><a href="{{ $setting->instagram }}" target="_blank" title="Instagram"><i
                                 class="fab fa-instagram"></i></a></li>
                 </ul>
             </div>
         </div>
     </div>
     <!-- Utilize Mobile Menu End -->

     <!-- HEADER AREA END -->
 </div>
