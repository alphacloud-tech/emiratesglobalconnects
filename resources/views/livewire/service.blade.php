 <!-- Start of Service section
    ============================================= -->
 <section id="ft-service" class="ft-service-section">
     <div class="container">
         <div class="ft-service-content">
             <div class="row">
                 <div class="col-lg-3 wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
                     <div class="ft-service-text-area">
                         <div class="ft-section-title headline pera-content">
                             <span class="sub-title">What We Do</span>
                             <h2>We are
                                 optimists who
                                 Love to work
                                 together.
                             </h2>
                         </div>
                         <div class="ft-btn">
                             <a class="d-flex justify-content-center align-items-center"
                                 href="{{ route('service.page') }}">More
                                 Service</a>
                         </div>
                     </div>
                 </div>
                 <div class="col-lg-9">
                     <div class="ft-service-slider-area">
                         <div class="ft-service-slider-wrapper">
                             @php
                                 $i = 1;
                             @endphp
                             @foreach ($services as $item)
                                 @php
                                     $title = strtolower(str_replace(' ', '-', $item->title));
                                 @endphp

                                 <div class="ft-item-innerbox" data-wow-duration="1500ms">
                                     <div class="ft-service-slider-item">
                                         <div class="ft-service-inner-img" style="width: 270px; height: 150px">
                                             <img src="{{ asset($item->image_url_dark) }}" alt="" height="150px"
                                                 width="270px">
                                         </div>
                                         <div class="ft-service-inner-text headline pera-content position-relative">
                                             <h6><a href="{{ route('service.single', $title) }}">{{ $item->title }}</a>
                                             </h6>
                                             <p> {!! \Illuminate\Support\Str::limit($item->description, 50) !!}</p>
                                             <a class="service-more" href="{{ route('service.single', $title) }}">Get
                                                 Started
                                                 <span>+</span></a>
                                             <div class="ft-service-serial position-absolute">
                                                 <span style="color: #EA1E00">0</span>{{ $i++ }}
                                             </div>
                                         </div>
                                     </div>
                                 </div>
                             @endforeach
                         </div>
                     </div>
                 </div>
             </div>
         </div>
     </div>
 </section>

 <!-- End of Service section
    ============================================= -->
