<div class="ltn__product-slider-area ltn__product-gutter pt-115 pb-70">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title-area ltn__section-title-2--- text-center">
                    <h6 class="section-subtitle section-subtitle-2 ltn__secondary-color">Property</h6>
                    <h1 class="section-title">Latest Listings</h1>
                </div>
            </div>
        </div>
        <div class="row ltn__product-slider-item-three-active slick-arrow-1">
            <!-- ltn__product-item -->

            @foreach ($properties as $item)
                @php
                    $title = strtolower(str_replace(' ', '-', $item->title));
                @endphp
                <div class="col-xl-4 col-sm-6 col-12">
                    <div class="ltn__product-item ltn__product-item-4 ltn__product-item-5 text-center---">
                        <div class="product-img">
                            <a href="{{ route('property.single', $title) }}" wire:navigate><img
                                    src="{{ asset($item->image_url) }} " alt="#"></a>
                            <div class="real-estate-agent">
                                {{-- <div class="agent-img">
                                    <a href="team-details.html"><img
                                            src="{{ asset('cleverbiz/frontend/img/blog/author.jpg') }} "
                                            alt="#"></a>
                                </div> --}}
                            </div>
                        </div>
                        <div class="product-info">
                            <div class="product-badge">
                                <ul>
                                    <li class="sale-badg">{{ $item->category }}</li>
                                </ul>
                            </div>
                            <h2 class="product-title"><a href="{{ route('property.single', $title) }}"
                                    wire:navigate>{{ $item->title }}</a>
                            </h2>
                            <div class="product-img-location">
                                <ul>
                                    <li>
                                        <a><i class="flaticon-pin"></i> {{ $item->location }}</a>
                                    </li>
                                </ul>
                            </div>
                            <ul class="ltn__list-item-2--- ltn__list-item-2-before--- ltn__plot-brief">
                                <li><span>{{ $item->detail->beds }} </span>
                                    Bed
                                </li>
                                <li><span>{{ $item->detail->baths }}</span>
                                    Bath
                                </li>
                                <li><span>{{ $item->detail->home_area }} </span>
                                    Square Ft
                                </li>
                            </ul>
                            {{-- <div class="product-hover-action">
                                <ul>
                                    <li>
                                        <a href="#" title="Quick View" data-bs-toggle="modal"
                                            data-bs-target="#quick_view_modal">
                                            <i class="flaticon-expand"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" title="Wishlist" data-bs-toggle="modal"
                                            data-bs-target="#liton_wishlist_modal">
                                            <i class="flaticon-heart-1"></i></a>
                                    </li>
                                    <li>
                                        <a href="product-details.html" title="Product Details">
                                            <i class="flaticon-add"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div> --}}
                        </div>
                        <div class="product-info-bottom">
                            <div class="product-price">
                                <span>#{{ number_format($item->price, 0, '.', ',') }}<label>/Month</label></span>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
            <!--  -->
        </div>
    </div>
</div>
