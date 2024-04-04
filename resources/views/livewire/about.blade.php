  <!-- Start of about section
    ============================================= -->
  <section id="ft-about" class="ft-about-section">
      <div class="container">
          <div class="ft-about-content">
              <div class="row">
                  <div class="col-lg-6 wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
                      <div class="ft-about-img-exp position-relative">
                          <div class="ft-about-exp-area headline pera-content position-absolute">
                              <div class="ft-about-exp-img">
                                  <img src="{{ asset('frontend/assets/img/shape/exp-sh1.png') }} " alt="">
                              </div>
                              <div class="ft-about-exp-text position-absolute">
                                  <h3><span class="counter">{{ $about->coy_yr_exp }}</span><b>+</b> Years</h3>
                                  <p>We have more than years of experience
                                  </p>
                              </div>
                          </div>
                          <div class="ft-about-img">
                              <img src="{{ asset($about->image_url) }}" alt="">
                          </div>
                      </div>
                  </div>
                  <div class="col-lg-6">
                      <div class="ft-about-text-wrapper">
                          <div class="ft-section-title headline pera-content">
                              <span class="sub-title">About Company</span>
                              <h2>
                                  {{ $about->title }}
                              </h2>
                              <p>{!! $about->content_short !!}</p>

                          </div>
                          <div class="ft-about-feature-list-warpper">
                              @foreach ($abouts as $item)
                                  <div class="ft-about-feature-list-item d-flex align-items-center wow fadeInUp"
                                      data-wow-delay="0ms" data-wow-duration="1500ms">
                                      <div
                                          class="ft-about-feature-icon d-flex align-items-center justify-content-center">
                                          <i class="{{ $item->bar_bg_color }}"></i>
                                      </div>
                                      <div class="ft-about-feature-text headline pera-content">
                                          <h3>{{ $item->bar_title }}</h3>
                                          <p>{{ $item->bar_percent }} </p>
                                      </div>
                                  </div>
                              @endforeach



                              @if (request()->is('/'))
                                  <div class="ft-btn wow fadeInUp" data-wow-delay="300ms" data-wow-duration="1500ms">
                                      <a class="d-flex justify-content-center align-items-center"
                                          href="{{ route('about.page') }}">Explore More</a>
                                  </div>
                              @else
                                  <div class="ft-btn wow fadeInUp" data-wow-delay="300ms" data-wow-duration="1500ms">
                                      <a class="d-flex justify-content-center align-items-center"
                                          href="{{ route('service.page') }}">Our Services</a>
                                  </div>
                              @endif
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </section>
  <!-- End of about section
    ============================================= -->
