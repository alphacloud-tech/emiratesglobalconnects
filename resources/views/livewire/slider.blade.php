<div>

    <!-- Start of Slider section
    ============================================= -->
    <rs-module-wrap id="rev_slider_27_1_wrapper" data-alias="slider-7" data-source="gallery"
        style="visibility:hidden;background:transparent;padding:0;margin:0px auto;margin-top:0;margin-bottom:0;">
        <rs-module id="rev_slider_27_1" style="" data-version="6.5.8">
            <rs-slides>
                @foreach ($sliders as $item)
                    @php
                        $title = $item->title;
                        $words = explode(' ', $title);
                        $title =
                            implode(' ', array_slice($words, 0, 3)) . '<br />' . implode(' ', array_slice($words, 3));
                    @endphp

                    <rs-slide style="position: absolute;" data-key="rs-70{{ $item->id }}" data-title="Slide"
                        data-thumb="{{ asset('frontend/assets/slider-1-50x100.jpg') }} " data-in="o:0;"
                        data-out="a:false;">
                        <img src="{{ asset($item->slider_image) }}" alt="Image" title="slider-1" width="1614"
                            height="908" class="rev-slidebg tp-rs-img" data-parallax="3"
                            data-panzoom="d:10000;ss:100;se:120%;" data-no-retina>
                        <rs-layer id="slider-27-slide-70-layer-0" data-type="image" data-rsp_ch="on"
                            data-text="w:normal;s:20,16,12,7;l:0,20,15,9;"
                            data-dim="w:['100%','100%','100%','100%'];h:['100%','100%','100%','100%'];"
                            data-basealign="slide" data-frame_999="o:0;st:w;" style="z-index:8;"><img
                                src="{{ asset('frontend/assets/slider-shape1.png') }}" alt="" class="tp-rs-img"
                                width="1903" height="901" data-c="cover-proportional" data-no-retina>
                        </rs-layer>
                        <rs-layer id="slider-27-slide-70-layer-1" data-type="text" data-rsp_ch="on"
                            data-xy="xo:15px,12px,9px,5px;yo:340px,280px,212px,124px;"
                            data-text="w:normal;s:72,59,44,40;l:80,66,50,40;fw:700;" data-frame_0="o:1;"
                            data-frame_0_chars="d:5;o:0;rX:-90deg;oZ:-50;" data-frame_1="sp:1750;"
                            data-frame_1_chars="e:power4.inOut;d:10;oZ:-50;" data-frame_999="o:0;st:w;"
                            style="z-index:9;font-family:'Poppins';"> {!! $title !!}
                        </rs-layer>
                        <rs-layer id="slider-27-slide-70-layer-2" data-type="text" data-rsp_ch="on"
                            data-xy="xo:15px,12px,9px,5px;yo:535px,445px,338px,219px;"
                            data-text="w:normal;s:18,14,16,16;l:25,20,20,20;fw:500;" data-frame_0="x:-100%;"
                            data-frame_0_mask="u:t;" data-frame_1="e:power4.inOut;st:1000;sp:1300;"
                            data-frame_1_mask="u:t;" data-frame_999="o:0;st:w;"
                            style="z-index:10;font-family:'Roboto';"> {!! $item->description !!}
                        </rs-layer>
                        <a id="slider-27-slide-70-layer-5-{{ $item->id }}" class="rs-layer rev-btn"
                            href="{{ route('about.page') }}" target="_blank" rel="noopener" data-type="button"
                            data-rsp_ch="on" data-xy="xo:235px,194px,147px,138px;yo:620px,512px,389px,275px;"
                            data-text="w:normal;s:18,14,10,14;l:52,42,31,40;fw:500;a:center;"
                            data-dim="w:200px,165px,125px,120px;h:55px,45px,34px,45px;minh:0px,none,none,none;"
                            data-padding="r:40,33,25,15;l:40,33,25,15;"
                            data-border="bos:solid;boc:#ffffff;bow:2px,2px,2px,2px;bor:3px,3px,3px,3px;"
                            data-frame_0="x:175%;o:1;" data-frame_0_mask="u:t;x:-100%;"
                            data-frame_1="e:power3.out;st:1500;sp:1000;" data-frame_1_mask="u:t;"
                            data-frame_999="o:0;st:w;"
                            data-frame_hover="bgc:#ea1e00;boc:#ea1e00;bor:3px,3px,3px,3px;bos:solid;bow:2px,2px,2px,2px;sp:100;e:power1.inOut;bri:120%;"
                            style="z-index: 12; background-color: #00044b; font-family: 'Poppins';">About Us </a>
                        <a id="slider-27-slide-70-layer-6-{{ $item->id }}" class="rs-layer rev-btn"
                            href="{{ route('service.page') }}" target="_blank" rel="noopener" data-type="button" data-rsp_ch="on"
                            data-xy="xo:15px,12px,9px,5px;yo:620px,512px,389px,274px;"
                            data-text="w:normal;s:18,14,10,14;l:52,42,31,40;fw:500;a:center;"
                            data-dim="w:200px,165px,125px,120px;h:55px,45px,34px,45px;minh:0px,none,none,none;"
                            data-padding="r:40,33,25,15;l:40,33,25,15;"
                            data-border="bos:solid;boc:#ffffff;bow:2px,2px,2px,2px;bor:3px,3px,3px,3px;"
                            data-frame_0="x:-175%;o:1;" data-frame_0_mask="u:t;x:100%;"
                            data-frame_1="e:power3.out;st:1200;sp:1000;" data-frame_1_mask="u:t;"
                            data-frame_999="o:0;st:w;"
                            data-frame_hover="bgc:#ea1e00;boc:#ea1e00;bor:3px,3px,3px,3px;bos:solid;bow:2px,2px,2px,2px;sp:100;e:power1.inOut;bri:120%;"
                            style="z-index: 11; background-color: #00044b; font-family: 'Poppins';">Our Service </a>
                    </rs-slide>
                @endforeach

                {{-- <rs-slide style="position: absolute;" data-key="rs-72" data-title="Slide"
                    data-thumb="{{ asset('frontend/assets/slider-1-2-50x100.jpg') }} " data-in="o:0;"
                    data-out="a:false;">
                    <img src="{{ asset('frontend/assets/slider-1-2.jpg') }} " title="slider-1" width="1606"
                        height="815" class="rev-slidebg tp-rs-img" data-parallax="3"
                        data-panzoom="d:10000;ss:100;se:120%;" data-no-retina>
                    <rs-layer id="slider-27-slide-72-layer-0" data-type="image" data-rsp_ch="on"
                        data-text="w:normal;s:20,16,12,7;l:0,20,15,9;"
                        data-dim="w:['100%','100%','100%','100%'];h:['100%','100%','100%','100%'];"
                        data-basealign="slide" data-frame_999="o:0;st:w;" style="z-index:8;"><img
                            src="{{ asset('frontend/assets/slider-shape1.png') }} " alt="" class="tp-rs-img"
                            width="1903" height="901" data-c="cover-proportional" data-no-retina>
                    </rs-layer>
                    <rs-layer id="slider-27-slide-72-layer-1" data-type="text" data-rsp_ch="on"
                        data-xy="xo:15px,12px,9px,5px;yo:340px,280px,212px,124px;"
                        data-text="w:normal;s:72,59,44,40;l:80,66,50,40;fw:700;" data-frame_0="o:1;"
                        data-frame_0_chars="d:5;o:0;rX:-90deg;oZ:-50;" data-frame_1="sp:1750;"
                        data-frame_1_chars="e:power4.inOut;d:10;oZ:-50;" data-frame_999="o:0;st:w;"
                        style="z-index:9;font-family:'Poppins';">We Are Global<br />
                        Logistic Provider
                    </rs-layer>
                    <rs-layer id="slider-27-slide-72-layer-2" data-type="text" data-rsp_ch="on"
                        data-xy="xo:15px,12px,9px,5px;yo:535px,445px,338px,219px;"
                        data-text="w:normal;s:18,14,16,16;l:25,20,20,20;fw:500;" data-frame_0="x:-100%;"
                        data-frame_0_mask="u:t;" data-frame_1="e:power4.inOut;st:1000;sp:1300;"
                        data-frame_1_mask="u:t;" data-frame_999="o:0;st:w;"
                        style="z-index:10;font-family:'Roboto';">Lpsum dolor sit amet, consectetur adipiscing elit, sed
                        do eius-<br />
                        mod tempor ut labore et dolore magna aliqua.
                    </rs-layer>
                    <a id="slider-27-slide-72-layer-5" class="rs-layer rev-btn" href="about.html" target="_blank"
                        rel="noopener" data-type="button" data-rsp_ch="on"
                        data-xy="xo:235px,194px,147px,138px;yo:620px,512px,389px,275px;"
                        data-text="w:normal;s:18,14,10,14;l:52,42,31,40;fw:500;a:center;"
                        data-dim="w:200px,165px,125px,120px;h:55px,45px,34px,45px;minh:0px,none,none,none;"
                        data-padding="r:40,33,25,15;l:40,33,25,15;"
                        data-border="bos:solid;boc:#ffffff;bow:2px,2px,2px,2px;bor:3px,3px,3px,3px;"
                        data-frame_0="x:175%;o:1;" data-frame_0_mask="u:t;x:-100%;"
                        data-frame_1="e:power3.out;st:1500;sp:1000;" data-frame_1_mask="u:t;"
                        data-frame_999="o:0;st:w;"
                        data-frame_hover="bgc:#ea1e00;boc:#ea1e00;bor:3px,3px,3px,3px;bos:solid;bow:2px,2px,2px,2px;sp:100;e:power1.inOut;bri:120%;"
                        style="z-index:12;background-color:#00044b;font-family:'Poppins';">About Us
                    </a>
                    <a id="slider-27-slide-72-layer-6" class="rs-layer rev-btn" href="service.html" target="_blank"
                        rel="noopener" data-type="button" data-rsp_ch="on"
                        data-xy="xo:15px,12px,9px,5px;yo:620px,512px,389px,274px;"
                        data-text="w:normal;s:18,14,10,14;l:52,42,31,40;fw:500;a:center;"
                        data-dim="w:200px,165px,125px,120px;h:55px,45px,34px,45px;minh:0px,none,none,none;"
                        data-padding="r:40,33,25,15;l:40,33,25,15;"
                        data-border="bos:solid;boc:#ffffff;bow:2px,2px,2px,2px;bor:3px,3px,3px,3px;"
                        data-frame_0="x:-175%;o:1;" data-frame_0_mask="u:t;x:100%;"
                        data-frame_1="e:power3.out;st:1200;sp:1000;" data-frame_1_mask="u:t;"
                        data-frame_999="o:0;st:w;"
                        data-frame_hover="bgc:#ea1e00;boc:#ea1e00;bor:3px,3px,3px,3px;bos:solid;bow:2px,2px,2px,2px;sp:100;e:power1.inOut;bri:120%;"
                        style="z-index:11;background-color:#00044b;font-family:'Poppins';">Our Service
                    </a>
                </rs-slide>
                <rs-slide style="position: absolute;" data-key="rs-73" data-title="Slide"
                    data-thumb="{{ asset('frontend/assets/slider-1-50x100.jpg') }} " data-in="o:0;"
                    data-out="a:false;">
                    <img src="{{ asset('frontend/assets/slider-1.jpg') }} " alt="Image" title="slider-1"
                        width="1614" height="908" class="rev-slidebg tp-rs-img" data-parallax="3"
                        data-panzoom="d:10000;ss:100;se:120%;" data-no-retina>
                    <rs-layer id="slider-27-slide-73-layer-0" data-type="image" data-rsp_ch="on"
                        data-text="w:normal;s:20,16,12,7;l:0,20,15,9;"
                        data-dim="w:['100%','100%','100%','100%'];h:['100%','100%','100%','100%'];"
                        data-basealign="slide" data-frame_999="o:0;st:w;" style="z-index:8;"><img
                            src="{{ asset('frontend/assets/slider-shape1.png') }} " alt="" class="tp-rs-img"
                            width="1903" height="901" data-c="cover-proportional" data-no-retina>
                    </rs-layer>
                    <rs-layer id="slider-27-slide-73-layer-1" data-type="text" data-rsp_ch="on"
                        data-xy="xo:15px,12px,9px,5px;yo:340px,280px,212px,124px;"
                        data-text="w:normal;s:72,59,44,40;l:80,66,50,40;fw:700;" data-frame_0="o:1;"
                        data-frame_0_chars="d:5;o:0;rX:-90deg;oZ:-50;" data-frame_1="sp:1750;"
                        data-frame_1_chars="e:power4.inOut;d:10;oZ:-50;" data-frame_999="o:0;st:w;"
                        style="z-index:9;font-family:'Poppins';">We Are Global<br />
                        Logistic Provider
                    </rs-layer>
                    <rs-layer id="slider-27-slide-73-layer-2" data-type="text" data-rsp_ch="on"
                        data-xy="xo:15px,12px,9px,5px;yo:535px,445px,338px,219px;"
                        data-text="w:normal;s:18,14,16,16;l:25,20,20,20;fw:500;" data-frame_0="x:-100%;"
                        data-frame_0_mask="u:t;" data-frame_1="e:power4.inOut;st:1000;sp:1300;"
                        data-frame_1_mask="u:t;" data-frame_999="o:0;st:w;"
                        style="z-index:10;font-family:'Roboto';">Lpsum dolor sit amet, consectetur adipiscing elit, sed
                        do eius-<br />
                        mod tempor ut labore et dolore magna aliqua.
                    </rs-layer>
                    <a id="slider-27-slide-73-layer-5" class="rs-layer rev-btn" href="about.html" target="_blank"
                        rel="noopener" data-type="button" data-rsp_ch="on"
                        data-xy="xo:235px,194px,147px,138px;yo:620px,512px,389px,275px;"
                        data-text="w:normal;s:18,14,10,14;l:52,42,31,40;fw:500;a:center;"
                        data-dim="w:200px,165px,125px,120px;h:55px,45px,34px,45px;minh:0px,none,none,none;"
                        data-padding="r:40,33,25,15;l:40,33,25,15;"
                        data-border="bos:solid;boc:#ffffff;bow:2px,2px,2px,2px;bor:3px,3px,3px,3px;"
                        data-frame_0="x:175%;o:1;" data-frame_0_mask="u:t;x:-100%;"
                        data-frame_1="e:power3.out;st:1500;sp:1000;" data-frame_1_mask="u:t;"
                        data-frame_999="o:0;st:w;"
                        data-frame_hover="bgc:#ea1e00;boc:#ea1e00;bor:3px,3px,3px,3px;bos:solid;bow:2px,2px,2px,2px;sp:100;e:power1.inOut;bri:120%;"
                        style="z-index:12;background-color:#00044b;font-family:'Poppins';">About Us
                    </a>
                    <a id="slider-27-slide-73-layer-6" class="rs-layer rev-btn" href="service.html" target="_blank"
                        rel="noopener" data-type="button" data-rsp_ch="on"
                        data-xy="xo:15px,12px,9px,5px;yo:620px,512px,389px,274px;"
                        data-text="w:normal;s:18,14,10,14;l:52,42,31,40;fw:500;a:center;"
                        data-dim="w:200px,165px,125px,120px;h:55px,45px,34px,45px;minh:0px,none,none,none;"
                        data-padding="r:40,33,25,15;l:40,33,25,15;"
                        data-border="bos:solid;boc:#ffffff;bow:2px,2px,2px,2px;bor:3px,3px,3px,3px;"
                        data-frame_0="x:-175%;o:1;" data-frame_0_mask="u:t;x:100%;"
                        data-frame_1="e:power3.out;st:1200;sp:1000;" data-frame_1_mask="u:t;"
                        data-frame_999="o:0;st:w;"
                        data-frame_hover="bgc:#ea1e00;boc:#ea1e00;bor:3px,3px,3px,3px;bos:solid;bow:2px,2px,2px,2px;sp:100;e:power1.inOut;bri:120%;"
                        style="z-index:11;background-color:#00044b;font-family:'Poppins';">Our Service
                    </a>
                </rs-slide> --}}
            </rs-slides>
        </rs-module>
    </rs-module-wrap>
    <!-- End of Slider section
    ============================================= -->

    <!-- Start of Booking form section
    ============================================= -->
    <section id="ft-booking-form" class="ft-booking-form-section">
        <div class="container">
            <div class="ft-booking-form-content position-relative">
                <form>
                    <div class="booking-form-input-wrapper d-flex flex-wrap">
                        <label class="booking-form-input position-relative">
                            <span class="booking-form-icon"><i class="flaticon-face-detection"></i></span>
                            <input type="text" placeholder="Your Tracking  ID Now">
                        </label>
                        <label class="booking-form-input position-relative">
                            <span class="booking-form-icon"><i class="flaticon-email"></i></span>
                            <input type="text" placeholder="Your Email Address">
                        </label>
                        <button class="ft-sb-button" type="submit">Track Order Now</button>
                    </div>
                </form>
            </div>
        </div>
    </section>
    <!-- End of Booking form section
    ============================================= -->
</div>


@section('styles')
@endsection

@section('scripts')
@endsection
