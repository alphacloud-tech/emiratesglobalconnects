  <!-- Start of Blog section
    ============================================= -->
  <section id="ft-blog-3" class="ft-blog-section-3">
      <div class="container">
          <div class="ft-section-title-3 headline text-center">
              <span class="text-uppercase">Some of our news from latest blog</span>
              <h2>Get the latest news, advice &
                  best practice from blog.</h2>
          </div>
          <div class="ft-blog-content-3">
              <div class="blog-slider-3">

                  @foreach ($blogs as $item)
                      @php
                          $date = \Carbon\Carbon::parse($item->created_at);
                          $day = $date->format('d'); // Extract the day
                          $month = $date->format('M'); // Extract the abbreviated month name
                          $year = $date->format('Y'); // Extract the abbreviated month name
                          $title = strtolower(str_replace(' ', '-', $item->title));

                      @endphp

                      <div class="ft-item-innerbox">
                          <div class="ft-blog-innerbox-3 position-relative">
                              <div class="ft-blog-img">
                                  <img src="{{ asset($item->image_url) }} " alt="">
                              </div>
                              <div class="ft-blog-text headline pera-content position-relative">
                                  <div class="ft-blog-meta d-flex justify-content-between">
                                      <a><i class="fas fa-calendar-alt"></i> {{ $month }} {{ $day }},
                                        {{ $year }}</a>
                                      <a><i class="fas fa-user"></i> Admin</a>
                                  </div>
                                  <h3><a href="{{ route('blog.single', $title) }}">{{ $item->title }}</a></h3>
                                  <a class="more-btn text-uppercase d-flex justify-content-center align-items-center position-absolute"
                                      href="{{ route('blog.single', $title) }}">Read More</a>
                              </div>
                          </div>
                      </div>
                  @endforeach

              </div>
          </div>
      </div>
  </section>
  <!-- End of Blog section
    ============================================= -->
