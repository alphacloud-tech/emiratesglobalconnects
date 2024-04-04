<!-- Start of Testimonial section
    ============================================= -->

<section id="ft-testimonial" class="ft-testimonial-section position-relative">
    <span class="ft-testimonial-map text-center position-absolute">
        <img src="{{ asset('frontend/assets/img/shape/map.png') }} " alt="" /></span>
    <div class="container">
        <div class="ft-section-title headline pera-content text-center">
            <span class="sub-title">Testimonial</span>
            <h2>What People and Clients Think About Us?</h2>
        </div>
        <div class="ft-testimonial-slider-wrapper">
            <div class="ft-testimonial-slider-area">
                @foreach ($testimonials as $item)
                    <div class="ft-item-innerbox">
                        <div class="ft-testimonial-item-innerbox">
                            <div class="ft-testimonial-item-img-wrapper position-relative">
                                <div class="ft-testimonial-item-img">
                                    <img src="{{ asset($item->image_url) }}" alt="" />
                                </div>
                                <div
                                    class="ft-testimonial-quote d-flex align-items-center justify-content-center position-absolute">
                                    <img src="{{ asset('frontend/assets/img/shape/quote.png') }}" alt="" />
                                </div>
                            </div>
                            <div class="ft-testimonial-text-item text-center">
                                {!! $item->quote !!}
                            </div>
                            <div class="ft-testimonial-name headline position-relative">
                                <span class="ft-testimonial-shape"></span>
                                <h3>{{ $item->name }}</h3>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</section>

<!-- End of Testimonial section
    ============================================= -->
