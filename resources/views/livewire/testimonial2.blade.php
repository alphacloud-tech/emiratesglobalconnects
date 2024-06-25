<section id="ft-testimonial-2" class="ft-testimonial-section-2">
    <div class="container">
        <div class="ft-testimonial-top-content-2 d-flex justify-content-between align-items-end flex-wrap">
            <div class="ft-section-title-2 headline pera-content">
                <span class="sub-title">Testimonial</span>
                <h2>What People & Clients
                    Think About Us?
                </h2>
            </div>
            {{-- <div class="ft-title-text">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et
                dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan
                lacus vel facilisis.
            </div> --}}
        </div>
        <div class="ft-testimonial-slider-wrapper-2  swiper-container">
            <div class="ft-testimonial-slider-2">
                <div class="choose_slider_items ul-li choose_slider">
                    <ul id="mySlider1">

                        @foreach ($testimonials as $item)
                            <li class="current_item">
                                <div class="ft-testimonial-innerbox-item-2 text-center">
                                    <div class="ft-testimonial-img">
                                        <img src="{{ asset($item->image_url) }}" alt="{{ $item->name }}">
                                    </div>
                                    <div class="ft-testimonial-text headline pera-content">
                                        <div class="ft-testimonial-meta">
                                            <h3>{{ $item->name }}</h3>
                                            <span>{{ $item->position }}</span>
                                        </div>
                                        <p>{!! $item->quote !!} </p>
                                        <div class="ft-testimonial-rate ul-li">
                                            <ul>
                                                <li><i class="fas fa-star"></i></li>
                                                <li><i class="fas fa-star"></i></li>
                                                <li><i class="fas fa-star"></i></li>
                                                <li><i class="fas fa-star"></i></li>
                                                <li><i class="fas fa-star"></i></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        @endforeach
                    </ul>
                    <div><a id="btn_next1" href="#"><i class="far fa-arrow-right"></i></a></div>
                    <div><a id="btn_prev1" href="#"><i class="far fa-arrow-left"></i></a></div>
                </div>
            </div>
        </div>
    </div>
</section>
