<section id="pr-sv-case-study" class="pr-sv-case-study-section zoom-gallery" style="padding-top: 10px">
    <div class="container">

        @if ($check)
            <div class="pr-sx-secion-title headline pera-content  wow fadeInUp" data-wow-delay="00ms"
                data-wow-duration="1500ms">
                <span class="pr-sx-title-tag position-relative">Our Project</span>
                <h2>Some Of Our <span>Project</span>
                    Gallery</h2>
            </div>
            <div class="pr-sv-case-study-content">
                <div class="pr-sv-case-study-filter-btn ul-li">
                    <ul id="filters" class="nav-gallery">
                        <li class="filtr-button filtr-active" data-filter="all">All Project</li>

                        {{-- @foreach ($services as $service)
                        <li class="filtr-button" data-filter="{{ $service->id }}">{{ $service->title }}</li>
                    @endforeach --}}

                    </ul>
                </div>
                <div class="pr-sv-case-study-item-wrapper filtr-container row">
                    @foreach ($projects as $item)
                        @if ($item->service_id == $service->id)
                            <div class="col-lg-4 col-sm-6 filtr-item" data-category="{{ $item->service_id }}"
                                data-sort="Busy streets">
                                <div class="pr-sv-case-study-item">
                                    <a href="{{ asset($item->image_url) }}" data-fancybox="gallery"
                                        data-src="{{ asset($item->image_url) }}" class="gallery-item">
                                        <div class="pr-sv-case-study-img position-relative">
                                            <img src="{{ asset($item->image_url) }}" alt="">
                                        </div>
                                        <div class="gallery-overlay2">
                                            <i class="fal fa-link"></i>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        @endif
                    @endforeach
                </div>
            </div>
        @endif
    </div>
</section>

