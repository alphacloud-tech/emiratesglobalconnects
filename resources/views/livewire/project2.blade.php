 <!-- Start of Project section
     ============================================= -->
 <section id="ft-portfolio-2" class="ft-portfolio-section-2 position-relative">
     <div class="ft-section-title-2 headline pera-content text-center">
         <span class="sub-title">Project</span>
         <h2>Let's Checkout our All
             Latest Project
         </h2>
     </div>
     <div class="ft-portfolio-content-2">
         <div class="ft-portfolio-slider-2">
             @foreach ($projects as $item)
                 <div class="ft-portfolio-slider-item">
                     <div class="ft-portfolio-slider-innerbox position-relative">
                         <div class="ft-portfolio-img">
                             <img src="{{ asset($item->image_url) }} " alt="">
                         </div>
                         <div class="ft-portfolio-text headline headline pera-content">
                             <h3>
                                 <a href="">
                                     {{ $item->title }}
                                 </a>
                             </h3>
                             {{-- <p>dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo vel
                                 facilisis.
                             </p> --}}
                             <div class="ft-btn-3">
                                 {{-- <a class="d-flex justify-content-center align-items-center"
                                     href="project-single.html">Read
                                     More <i class="flaticon-right-arrow"></i></a> --}}
                             </div>
                         </div>
                     </div>
                 </div>
             @endforeach

             {{-- <div class="ft-portfolio-slider-item">
                 <div class="ft-portfolio-slider-innerbox position-relative">
                     <div class="ft-portfolio-img">
                         <img src="{{ asset('frontend/assets/img/project/port2.jpg') }} " alt="">
                     </div>
                     <div class="ft-portfolio-text headline headline pera-content">
                         <h3><a href="%60project-single.html">Service & Aftermarket
                                 Logistics</a></h3>
                         <p>dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo vel facilisis.
                         </p>
                         <div class="ft-btn-3">
                             <a class="d-flex justify-content-center align-items-center" href="project-single.html">Read
                                 More <i class="flaticon-right-arrow"></i></a>
                         </div>
                     </div>
                 </div>
             </div>
             <div class="ft-portfolio-slider-item">
                 <div class="ft-portfolio-slider-innerbox position-relative">
                     <div class="ft-portfolio-img">
                         <img src="{{ asset('frontend/assets/img/project/port3.jpg') }} " alt="">
                     </div>
                     <div class="ft-portfolio-text headline headline pera-content">
                         <h3><a href="%60project-single.html">Service & Aftermarket
                                 Logistics</a></h3>
                         <p>dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo vel facilisis.
                         </p>
                         <div class="ft-btn-3">
                             <a class="d-flex justify-content-center align-items-center" href="project-single.html">Read
                                 More <i class="flaticon-right-arrow"></i></a>
                         </div>
                     </div>
                 </div>
             </div>
             <div class="ft-portfolio-slider-item">
                 <div class="ft-portfolio-slider-innerbox position-relative">
                     <div class="ft-portfolio-img">
                         <img src="{{ asset('frontend/assets/img/project/port4.jpg') }} " alt="">
                     </div>
                     <div class="ft-portfolio-text headline headline pera-content">
                         <h3><a href="%60project-single.html">Service & Aftermarket
                                 Logistics</a></h3>
                         <p>dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo vel facilisis.
                         </p>
                         <div class="ft-btn-3">
                             <a class="d-flex justify-content-center align-items-center" href="project-single.html">Read
                                 More <i class="flaticon-right-arrow"></i></a>
                         </div>
                     </div>
                 </div>
             </div>
             <div class="ft-portfolio-slider-item">
                 <div class="ft-portfolio-slider-innerbox position-relative">
                     <div class="ft-portfolio-img">
                         <img src="{{ asset('frontend/assets/img/project/port1.jpg') }} " alt="">
                     </div>
                     <div class="ft-portfolio-text headline headline pera-content">
                         <h3><a href="%60project-single.html">Service & Aftermarket
                                 Logistics</a></h3>
                         <p>dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo vel facilisis.
                         </p>
                         <div class="ft-btn-3">
                             <a class="d-flex justify-content-center align-items-center" href="project-single.html">Read
                                 More <i class="flaticon-right-arrow"></i></a>
                         </div>
                     </div>
                 </div>
             </div>
             <div class="ft-portfolio-slider-item">
                 <div class="ft-portfolio-slider-innerbox position-relative">
                     <div class="ft-portfolio-img">
                         <img src="{{ asset('frontend/assets/img/project/port2.jpg') }} " alt="">
                     </div>
                     <div class="ft-portfolio-text headline headline pera-content">
                         <h3><a href="%60project-single.html">Service & Aftermarket
                                 Logistics</a></h3>
                         <p>dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo vel facilisis.
                         </p>
                         <div class="ft-btn-3">
                             <a class="d-flex justify-content-center align-items-center" href="project-single.html">Read
                                 More <i class="flaticon-right-arrow"></i></a>
                         </div>
                     </div>
                 </div>
             </div>
             <div class="ft-portfolio-slider-item">
                 <div class="ft-portfolio-slider-innerbox position-relative">
                     <div class="ft-portfolio-img">
                         <img src="{{ asset('frontend/assets/img/project/port3.jpg') }} " alt="">
                     </div>
                     <div class="ft-portfolio-text headline headline pera-content">
                         <h3><a href="%60project-single.html">Service & Aftermarket
                                 Logistics</a></h3>
                         <p>dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo vel facilisis.
                         </p>
                         <div class="ft-btn-3">
                             <a class="d-flex justify-content-center align-items-center" href="project-single.html">Read
                                 More <i class="flaticon-right-arrow"></i></a>
                         </div>
                     </div>
                 </div>
             </div> --}}
         </div>
     </div>
 </section>
 <!-- End of Project section
     ============================================= -->
