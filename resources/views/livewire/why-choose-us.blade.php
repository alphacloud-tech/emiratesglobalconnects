<section id="ft-why-choose" class="ft-why-choose-section position-relative"
    data-background="{{ asset('frontend/assets/img/bg/wc-bg.jpg') }} ">
    <div class="container">
        <div class="ft-why-choose-content">
            <div class="row justify-content-end">
                <div class="col-lg-7">
                    <div class="ft-why-choose-text-area">
                        <div class="ft-section-title headline pera-content wow fadeInUp" data-wow-delay="0ms"
                            data-wow-duration="1500ms">
                            <span class="sub-title">Why Choose Us</span>
                            <h2 style="font-size: 25px">
                                We're Dedicated to Enhancing Your <br> Company's Success.
                            </h2>
                        </div>
                        <div class="ft-why-choose-feature-wrapper">

                            @foreach ($whychooses as $item)
                                <div class="ft-why-choose-feature-item d-flex align-items-center wow fadeInUp"
                                    data-wow-delay="200ms" data-wow-duration="1500ms">
                                    <div
                                        class="ft-why-choose-feature-icon d-flex align-items-center justify-content-center position-relative">
                                        <i class="@if ($item->icon) {{ $item->icon }} @else fa fa-plane @endif"></i>
                                    </div>
                                    <div class="ft-why-choose-feature-text headline pera-content">
                                        <h3>{{ $item->title }}</h3>
                                        <p>
                                            {!! $item->description !!}
                                        </p>
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
