  <!-- Start of Team section
    ============================================= -->
  {{-- <section id="ft-team" class="ft-team-section">
      <div class="container">
          <div class="ft-team-content">
              <div class="row">
                  <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="00ms" data-wow-duration="1500ms">
                      <div class="ft-team-text-area">
                          <div class="ft-section-title headline pera-content">
                              <span class="sub-title">Our Team</span>
                              <h2>Our expert
                                  Team Member
                              </h2>
                              <p>aliqua. Quis ipsum suspendisse viverra maecenas accumsan lacus vel facilisis. </p>
                          </div>
                          <div class="ft-btn">
                              <a class="d-flex justify-content-center align-items-center"
                                  href="{{ route('team.page') }}">Explore
                                  Team</a>
                          </div>
                      </div>
                  </div>

                  @foreach ($teams as $item)
                      <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="200ms" data-wow-duration="1500ms">
                          <div class="ft-team-inner-itembox position-relative">
                              <span class="hover-shape position-absolute">
                                  <img src="{{ asset('frontend/assets/img/shape/tm-sh.png') }} " alt="">
                              </span>
                              <div class="ft-team-inner-item-img">
                                  <img src="{{ asset($item->image_url) }} " alt="{{ $item->name }}">
                              </div>
                              <div class="ft-team-inner-item-text headline">
                                  <h3><a href="team-single.html">{{ $item->name }}</a></h3>
                                  <span>{{ $item->position }}</span>
                              </div>
                          </div>
                      </div>
                  @endforeach

              </div>
          </div>
      </div>
  </section> --}}
  <!-- End of Team section
    ============================================= -->


  <section class="ft2-team-section-two">
      <div class="auto-container">
          <div class="sec-title-two style-two">
              <div class="title">Our expert team member</div>
              <h2>Our expert team will assist.</h2>
          </div>
          <div class="team-carousel-two owl-carousel owl-theme">
              @foreach ($teams as $item)
                  @php
                      $name = strtolower(str_replace(' ', '-', $item->name));
                  @endphp
                  <!-- Team Block Two -->
                  <div class="ft2-team-block-two">
                      <div class="inner-box">
                          <div class="image">
                              <img src="{{ asset($item->image_url) }}" alt="" />
                              <!-- Overlay Box -->
                              <div class="overlay-box">
                                  <div class="overlay-image-layer"
                                      style="background-image:url(assets/images/resource/service-5.jpg)"></div>
                                  <div class="shape-layer"></div>
                                  <div class="overlay-inner">
                                      <div class="content">
                                          <div class="author-image">
                                              <img src="{{ asset($item->image_url) }}" alt="" />
                                          </div>
                                          <div class="text">
                                              {!! \Illuminate\Support\Str::limit($item->description, 50) !!}
                                          </div>
                                          <!-- Social Box -->
                                          <ul class="social-box">
                                              <li><a href="{{ $item->facebook }}" class="fab fa-facebook-f"></a></li>
                                              <li><a href="{{ $item->instagram }}" class="fab fa-instagram"></a></li>
                                              <li><a href="{{ $item->twitter }}" class="fab fa-twitter"></a></li>
                                          </ul>
                                          <!-- End Social Box -->
                                      </div>
                                  </div>
                              </div>
                          </div>
                          <div class="lower-content">
                              <div class="content">
                                  <h5><a href="{{ route('team.single', $name) }}">{{ $item->name }}</a></h5>
                                  <div class="designation">{{ $item->position }}</div>
                                  <div class="phone-number">
                                      <a class=" fa fa-phone" href="tel:{{ $item->phone }}">{{ $item->phone }}</a>
                                  </div>
                              </div>
                              <a href="{{ route('team.single', $name) }}" class="more">Read More <span
                                      class="fa fa-angle-right"></span></a>
                          </div>
                      </div>
                  </div>
              @endforeach
          </div>
      </div>
  </section>
