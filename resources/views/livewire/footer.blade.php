  <!-- Start of Footer section
    ============================================= -->
  <footer id="ft-footer" class="ft1-main-footer"
      style="background-image:url({{ asset('frontend/assets/images/background/pattern-5.png') }} )">
      <div class="container">
          <div class="ft-footer-widget-wrapper">
              <div class="row">
                  <div class="col-lg-3 col-md-6">
                      <div class="ft-footer-widget ul-li-block headline pera-content">
                          <div class="logo-widget">
                              <div class="site-logo">
                                  <a href="{{ url('/') }}"><img src="{{ asset($setting->logo) }} "
                                          alt=""></a>
                              </div>
                              <p>{!! $setting->description !!} </p>
                              <div class="ft-btn">
                                  <a class="d-flex justify-content-center align-items-center"
                                      href="{{ route('contact.page') }}">Get In
                                      Touch</a>
                              </div>
                          </div>
                      </div>
                  </div>
                  <div class="col-lg-3 col-md-6">
                      <div class="ft-footer-widget ul-li-block headline pera-content">
                          <div class="menu-widget">
                              <h3 class="widget-title">Our Service</h3>
                              <ul>
                                  @foreach ($services as $item)
                                      @php
                                          $title = strtolower(str_replace(' ', '-', $item->title));
                                      @endphp
                                      <li><a href="{{ route('service.single', $title) }}">{{ $item->title }}</a></li>
                                  @endforeach
                              </ul>
                          </div>
                      </div>
                  </div>
                  <div class="col-lg-3 col-md-6">
                      <div class="ft-footer-widget ul-li-block headline pera-content">
                          <div class="menu-widget">
                              <h3 class="widget-title">Quick Links</h3>
                              <ul>
                                  <li><a href="{{ url('/') }}">Home</a></li>
                                  <li><a href="{{ route('about.page') }}">About us</a></li>
                                  <li><a href="{{ route('service.page') }}">Services</a></li>
                                  <li><a href="{{ route('blog.page') }}">Blog</a></li>
                                  <li><a href="{{ route('faq.page') }}">FAQS</a></li>
                                  <li><a href="{{ route('gallery.page') }}">Gallery</a></li>
                                  <li><a href="{{ route('video.page') }}">Video</a></li>
                                  {{-- <li><a href="{{ route('contact.page') }}">Contact Us</a></li> --}}
                              </ul>
                          </div>
                      </div>
                  </div>
                  <div class="col-lg-3 col-md-6">
                      <div class="ft-footer-widget ul-li-block headline pera-content">
                          <div class="gallery-widget clearfix">
                              <h3 class="widget-title">Gallery </h3>
                              <ul class="zoom-gallery">
                                  @foreach ($galleries2 as $item)
                                      <li>
                                          <a href="{{ asset($item->image_url) }} "
                                              data-source="{{ asset($item->image_url) }} ">
                                              <img src="{{ asset($item->image_url) }} " alt="">
                                          </a>
                                      </li>
                                  @endforeach

                              </ul>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
          <div class="ft-footer-copywrite-1 text-center" style="background-color: #EC0000">
              <span>
                  Copyright @ {{ \Carbon\Carbon::now()->format('Y') }}.All
                  Rights Reserved -
                  Designed by

                  <a href="https://eldantech.com.ng/" style=" font-weight:800">
                      EldanTech Technology Solutions
                  </a>
              </span>
          </div>
      </div>
  </footer>
  <!-- End of Footer section
    ============================================= -->
