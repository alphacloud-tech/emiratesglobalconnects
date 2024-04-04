<!-- Project Section Start -->
<div class="ltn__img-slider-area">
    @if ($galleries)

        <div class="container-fluid">
            <div class="row ltn__image-slider-4-active slick-arrow-1 slick-arrow-1-inner ltn__no-gutter-all">

                @foreach ($galleries as $item)
                    <div class="col-lg-12">
                        <div class="ltn__img-slide-item-4">
                            <a href="{{ asset($item->image_url) }}" data-rel="lightcase:myCollection">
                                <img src="{{ asset($item->image_url) }}" alt="Image">
                            </a>
                            <div class="ltn__img-slide-info">
                                <div class="ltn__img-slide-info-brief">
                                    <h6>{{ $item->title }}</h6>
                                    {{-- <h1><a href="portfolio-details.html">Manhattan </a></h1> --}}
                                </div>
                                {{-- <div class="btn-wrapper">
                                    <a href="portfolio-details.html"
                                        class="btn theme-btn-1 btn-effect-1 text-uppercase">Details</a>
                                </div> --}}
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    @endif

</div>
<!-- Project Section End -->
