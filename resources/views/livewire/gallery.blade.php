{{-- <section id="ft-project" class="ft-project-section position-relative">
    <div class="container">
        <div class="ft-project-content d-flex justify-content-between align-items-end flex-wrap">
            <div class="ft-section-title headline pera-content">
                <span class="sub-title">Project</span>
                <h2>Let's Checkout our All Latest Project</h2>
            </div>
            <div class="ft-btn">
                <a class="d-flex justify-content-center align-items-center" href="project.html">All Project</a>
            </div>
        </div>
    </div>
    <div class="ft-project-slider-wrapper">
        <div class="ft-project-slider-area">
            @foreach ($galleries as $item)
                <div class="ft-item-innerbox">
                    <div class="ft-project-itembox position-relative">
                        <div class="ft-project-img">
                            <img src="{{ asset($item->image_url) }}" alt="" />
                        </div>
                        <div class="ft-project-text headline pera-content">
                            <h3><a>{{ $item->title }} </a></h3>
                            <p>Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus
                                vel
                                facilisis.</p>
                            <div class="ft-btn">
                                <a class="d-flex justify-content-center align-items-center"
                                    href="project-single.html">Explore More</a>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach

        </div>
    </div>
</section> --}}


<!-- Start of Project section
     ============================================= -->
<section id="ft-portfolio-2" class="ft-portfolio-section-2 position-relative">
    <div class="ft-section-title-2 headline pera-content text-center">
        <span class="sub-title">Images Gallery</span>
        <h2>Let's Checkout our All
            Latest Project
        </h2>
    </div>
    <div class="ft-portfolio-content-2">
        <div class="ft-portfolio-slider-2">
            @foreach ($galleries as $item)
                @php

                    $service = DB::table('services')
                        ->where('id', $item->service_id)
                        ->first();

                    $title = strtolower(str_replace(' ', '-', $item->title));

                @endphp


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
                            <p>
                                {!! \Illuminate\Support\Str::limit($service->description, 200) !!}
                            </p>
                            <div class="ft-btn-3">
                                <a class="d-flex justify-content-center align-items-center"
                                    href="{{ route('service.single', $title) }}">Read
                                    More <i class="flaticon-right-arrow"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach

        </div>
    </div>
</section>
<!-- End of Project section
        ============================================= -->
