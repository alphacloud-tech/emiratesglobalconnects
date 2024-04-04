{{-- <div> --}}
{{-- Knowing others is intelligence; knowing yourself is true wisdom. --}}

@extends('layouts.app')

@section('title', 'Property details')
@section('content')


    <div class="ltn__utilize-overlay"></div>

    <!-- BREADCRUMB AREA START -->
    <div class="ltn__breadcrumb-area text-left bg-overlay-white-30 bg-image "
        data-bs-bg="{{ asset('cleverbiz/frontend/img/bg/23.jpg') }}">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="ltn__breadcrumb-inner">
                        <h1 class="page-title" style="color: #fff">Property details</h1>
                        <div class="ltn__breadcrumb-list">
                            <ul style="color: #fff">
                                <li>
                                    <a href="{{ url('/') }}" wire:navigate><span class="ltn__secondary-color"
                                            style="color: #fff">
                                            <i class="fas fa-home"></i></span> Home
                                    </a>
                                </li>
                                <li style="color: #fff">Property details</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- BREADCRUMB AREA END -->

    <!-- IMAGE SLIDER AREA START (img-slider-3) -->
    <div class="ltn__img-slider-area mb-90">
        <div class="container-fluid">
            <div class="row ltn__image-slider-5-active slick-arrow-1 slick-arrow-1-inner ltn__no-gutter-all">

                @foreach ($property->subimages as $item)
                    @if ($item->property_id == $property->id)
                        <div class="col-lg-12">
                            <div class="ltn__img-slide-item-4">
                                <a href="{{ asset($item->image_url) }}" data-rel="lightcase:myCollection">
                                    <img src="{{ asset($item->image_url) }}" alt="Image">
                                </a>
                            </div>
                        </div>
                    @endif
                @endforeach

            </div>
        </div>
    </div>
    <!-- IMAGE SLIDER AREA END -->

    @php
        $date = \Carbon\Carbon::parse($property->created_at);
        $day = $date->format('d'); // Extract the day
        $month = $date->format('M'); // Extract the abbreviated month name
        $year = $date->format('Y'); // Extract the abbreviated month name
    @endphp

    <!-- SHOP DETAILS AREA START -->
    <div class="ltn__shop-details-area pb-10">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-12">
                    <div class="ltn__shop-details-inner ltn__page-details-inner mb-60">
                        <div class="ltn__blog-meta">
                            <ul>
                                {{-- <li class="ltn__blog-category">
                                    <a href="#">Featured</a>
                                </li> --}}
                                <li class="ltn__blog-category">
                                    <a class="bg-orange">{{ $property->category }}</a>
                                </li>
                                <li class="ltn__blog-date">
                                    <i class="far fa-calendar-alt"></i>{{ $month }} {{ $day }}, {{ $year }}
                                </li>
                                {{-- <li>
                                    <a href="#"><i class="far fa-comments"></i>35 Comments</a>
                                </li> --}}
                            </ul>
                        </div>
                        <h1>{{ $property->title }}</h1>
                        <label><span class="ltn__secondary-color"><i class="flaticon-pin"></i></span>
                            {{ $property->location }}</label>
                        <h4 class="title-2">Description</h4>
                        <p>{!! $property->description !!}</p>

                        <h4 class="title-2">Property Detail</h4>
                        <div class="property-detail-info-list section-bg-1 clearfix mb-60">
                            <ul>
                                <li><label>Property ID:</label> <span>{{ $property->detail->lot_area }}</span></li>
                                <li><label>Home Area: </label> <span>{{ $property->detail->home_area }} sqft</span></li>
                                <li><label>Rooms:</label> <span>{{ $property->detail->rooms }}</span></li>
                                <li><label>Baths:</label> <span>{{ $property->detail->baths }}</span></li>
                                {{-- <li><label>Year built:</label> <span>1992</span></li> --}}
                            </ul>
                            <ul>
                                <li><label>Lot Area:</label> <span>{{ $property->detail->lot_area }} </span></li>
                                <li><label>Lot dimensions:</label> <span>{{ $property->detail->lot_dimensions }}
                                        sqft</span></li>
                                <li><label>Beds:</label> <span>{{ $property->detail->beds }}</span></li>
                                <li><label>Price:</label> <span>{{ $property->detail->price }}</span></li>
                                {{-- <li><label>Property Status:</label> <span>For Sale</span></li> --}}
                            </ul>
                        </div>

                        <h4 class="title-2">Facts and Features</h4>
                        <div class="property-detail-feature-list clearfix mb-45">
                            <ul>
                                @foreach ($property->features as $item)
                                    <li>
                                        <div class="property-detail-feature-list-item">
                                            <i class="flaticon-double-bed"></i>
                                            <div>
                                                <h6>{{ $item->feature_name }}</h6>
                                                <small>{{ $item->dimension }}</small>
                                            </div>
                                        </div>
                                    </li>
                                @endforeach

                            </ul>
                        </div>

                        <h4 class="title-2">From Our Gallery</h4>
                        <div class="ltn__property-details-gallery mb-30">
                            <div class="row">
                                @foreach ($galleries as $key => $item)
                                    <div class="col-md-6">
                                        <a href="{{ asset($item->image_url) }}" data-rel="lightcase:myCollection">
                                            <img class="mb-30" src="{{ asset($item->image_url) }}" alt="Image">
                                        </a>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <aside class="sidebar ltn__shop-sidebar ltn__right-sidebar---">

                        <!-- Form Widget -->
                        <div class="widget ltn__form-widget">
                            <h4 class="ltn__widget-title ltn__widget-title-border-2">Drop Messege For Book</h4>
                            <form action="#">
                                <input type="text" name="yourname" placeholder="Your Name*">
                                <input type="text" name="youremail" placeholder="Your e-Mail*">
                                <textarea name="yourmessage" placeholder="Write Message..."></textarea>
                                <button type="submit" class="btn theme-btn-1">Send Messege</button>
                            </form>
                        </div>

                        <!-- Popular Product Widget -->
                        <div class="widget ltn__popular-product-widget">
                            <h4 class="ltn__widget-title ltn__widget-title-border-2">Popular Properties</h4>
                            <div class="row ltn__popular-product-widget-active slick-arrow-1">
                                <!-- ltn__product-item -->

                                @foreach ($properties as $item)
                                    @php
                                        $title = strtolower(str_replace(' ', '-', $item->title));
                                    @endphp
                                    <div class="col-12">
                                        <div
                                            class="ltn__product-item ltn__product-item-4 ltn__product-item-5 text-center---">
                                            <div class="product-img">
                                                <a href="{{ route('property.single', $title) }}" wire:navigat><img
                                                        src="{{ asset($item->image_url) }}" alt="#"></a>
                                                {{-- <div class="real-estate-agent">
                                                    <div class="agent-img">
                                                        <a href="team-details.html"><img src="{{ asset($item->image_url) }}"
                                                                alt="#"></a>
                                                    </div>
                                                </div> --}}
                                            </div>
                                            <div class="product-info">
                                                <div class="product-price">
                                                    <span>#{{ number_format($item->price, 0, '.', ',') }}<label>/Month</label></span>
                                                </div>
                                                <h2 class="product-title"><a href="{{ route('property.single', $title) }}"
                                                        wire:navigat>{{ $item->title }}</a></h2>
                                                <div class="product-img-location">
                                                    <ul>
                                                        <li>
                                                            <a><i class="flaticon-pin"></i>
                                                                {{ $item->location }}
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <ul class="ltn__list-item-2--- ltn__list-item-2-before--- ltn__plot-brief">
                                                    <li><span>{{ $item->detail->beds }} </span>
                                                        Bedrooms
                                                    </li>
                                                    <li><span>{{ $item->detail->baths }}</span>
                                                        Bathrooms
                                                    </li>
                                                    <li><span>{{ $item->detail->home_area }} </span>
                                                        square Ft
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach

                            </div>
                        </div>
                        <!-- Popular Post Widget -->
                        <div class="widget ltn__popular-post-widget">
                            <h4 class="ltn__widget-title ltn__widget-title-border-2">Leatest Blogs</h4>
                            <ul>
                                @foreach ($blogs as $item)
                                    @php
                                        $date = \Carbon\Carbon::parse($item->created_at);
                                        $day = $date->format('d'); // Extract the day
                                        $month = $date->format('M'); // Extract the abbreviated month name
                                        $year = $date->format('Y'); // Extract the abbreviated month name
                                        $title = strtolower(str_replace(' ', '-', $item->title));

                                    @endphp
                                    <li>
                                        <div class="popular-post-widget-item clearfix">
                                            <div class="popular-post-widget-img">
                                                <a href="{{ route('blog.single', $title) }}" wire:navigate><img
                                                        src="{{ asset($item->image_url) }}" alt="#"></a>
                                            </div>
                                            <div class="popular-post-widget-brief">
                                                <h6><a href="{{ route('blog.single', $title) }}"
                                                        wire:navigate>{{ $item->title }}</a></h6>
                                                <div class="ltn__blog-meta">
                                                    <ul>
                                                        <li class="ltn__blog-date">
                                                            <a href="#"><i class="far fa-calendar-alt"></i>
                                                                {{ $month }} {{ $day }},
                                                                {{ $year }}
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                        <!-- Social Media Widget -->
                        <div class="widget ltn__social-media-widget">
                            <h4 class="ltn__widget-title ltn__widget-title-border-2">Follow us</h4>
                            <div class="ltn__social-media-2">
                                <ul>
                                    <li><a href="{{ $setting->facebook }}" target="_blank" title="Facebook"><i
                                                class="fab fa-facebook-f"></i></a></li>
                                    <li><a href="{{ $setting->youtube }}" target="_blank" title="Youtube"><i
                                                class="fab fa-youtube"></i></a></li>
                                    <li><a href="{{ $setting->instagram }}" target="_blank" title="instagram"><i
                                                class="fab fa-instagram"></i></a></li>
                                </ul>
                            </div>
                        </div>

                    </aside>
                </div>
            </div>
        </div>
    </div>
    <!-- SHOP DETAILS AREA END -->

    <!-- PRODUCT SLIDER AREA START -->
    <div class="ltn__product-slider-area ltn__product-gutter pb-70 d-none">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title-area ltn__section-title-2--- text-center---">
                        <h1 class="section-title">Related Properties</h1>
                    </div>
                </div>
            </div>
            <div class="row ltn__related-product-slider-two-active slick-arrow-1">
                <!-- ltn__product-item -->
                <div class="col-xl-6 col-sm-6 col-12">
                    <div class="ltn__product-item ltn__product-item-4 ltn__product-item-5 text-center---">
                        <div class="product-img">
                            <a href="product-details.html"><img src="img/product-3/1.jpg" alt="#"></a>
                            <div class="real-estate-agent">
                                <div class="agent-img">
                                    <a href="team-details.html"><img src="img/blog/author.jpg" alt="#"></a>
                                </div>
                            </div>
                        </div>
                        <div class="product-info">
                            <div class="product-badge">
                                <ul>
                                    <li class="sale-badg">For Rent</li>
                                </ul>
                            </div>
                            <h2 class="product-title"><a href="product-details.html">New Apartment Nice View</a></h2>
                            <div class="product-img-location">
                                <ul>
                                    <li>
                                        <a href="product-details.html"><i class="flaticon-pin"></i> Belmont Gardens,
                                            Chicago</a>
                                    </li>
                                </ul>
                            </div>
                            <ul class="ltn__list-item-2--- ltn__list-item-2-before--- ltn__plot-brief">
                                <li><span>3 </span>
                                    Bed
                                </li>
                                <li><span>2 </span>
                                    Bath
                                </li>
                                <li><span>3450 </span>
                                    Square Ft
                                </li>
                            </ul>
                            <div class="product-hover-action">
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
                                        <a href="portfolio-details.html" title="Compare">
                                            <i class="flaticon-add"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="product-info-bottom">
                            <div class="product-price">
                                <span>$349,00<label>/Month</label></span>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- ltn__product-item -->
                <div class="col-xl-6 col-sm-6 col-12">
                    <div class="ltn__product-item ltn__product-item-4 ltn__product-item-5 text-center---">
                        <div class="product-img">
                            <a href="product-details.html"><img src="img/product-3/2.jpg" alt="#"></a>
                            <div class="real-estate-agent">
                                <div class="agent-img">
                                    <a href="team-details.html"><img src="img/blog/author.jpg" alt="#"></a>
                                </div>
                            </div>
                        </div>
                        <div class="product-info">
                            <div class="product-badge">
                                <ul>
                                    <li class="sale-badg">For Sale</li>
                                </ul>
                            </div>
                            <h2 class="product-title"><a href="product-details.html">New Apartment Nice View</a></h2>
                            <div class="product-img-location">
                                <ul>
                                    <li>
                                        <a href="product-details.html"><i class="flaticon-pin"></i> Belmont Gardens,
                                            Chicago</a>
                                    </li>
                                </ul>
                            </div>
                            <ul class="ltn__list-item-2--- ltn__list-item-2-before--- ltn__plot-brief">
                                <li><span>3 </span>
                                    Bed
                                </li>
                                <li><span>2 </span>
                                    Bath
                                </li>
                                <li><span>3450 </span>
                                    Square Ft
                                </li>
                            </ul>
                            <div class="product-hover-action">
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
                                        <a href="portfolio-details.html" title="Compare">
                                            <i class="flaticon-add"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="product-info-bottom">
                            <div class="product-price">
                                <span>$349,00<label>/Month</label></span>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- ltn__product-item -->
                <div class="col-xl-6 col-sm-6 col-12">
                    <div class="ltn__product-item ltn__product-item-4 ltn__product-item-5 text-center---">
                        <div class="product-img">
                            <a href="product-details.html"><img src="img/product-3/3.jpg" alt="#"></a>
                            <div class="real-estate-agent">
                                <div class="agent-img">
                                    <a href="team-details.html"><img src="img/blog/author.jpg" alt="#"></a>
                                </div>
                            </div>
                        </div>
                        <div class="product-info">
                            <div class="product-badge">
                                <ul>
                                    <li class="sale-badg">For Rent</li>
                                </ul>
                            </div>
                            <h2 class="product-title"><a href="product-details.html">New Apartment Nice View</a></h2>
                            <div class="product-img-location">
                                <ul>
                                    <li>
                                        <a href="product-details.html"><i class="flaticon-pin"></i> Belmont Gardens,
                                            Chicago</a>
                                    </li>
                                </ul>
                            </div>
                            <ul class="ltn__list-item-2--- ltn__list-item-2-before--- ltn__plot-brief">
                                <li><span>3 </span>
                                    Bed
                                </li>
                                <li><span>2 </span>
                                    Bath
                                </li>
                                <li><span>3450 </span>
                                    Square Ft
                                </li>
                            </ul>
                            <div class="product-hover-action">
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
                                        <a href="portfolio-details.html" title="Compare">
                                            <i class="flaticon-add"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="product-info-bottom">
                            <div class="product-price">
                                <span>$349,00<label>/Month</label></span>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- ltn__product-item -->
                <div class="col-xl-6 col-sm-6 col-12">
                    <div class="ltn__product-item ltn__product-item-4 ltn__product-item-5 text-center---">
                        <div class="product-img">
                            <a href="product-details.html"><img src="img/product-3/4.jpg" alt="#"></a>
                            <div class="real-estate-agent">
                                <div class="agent-img">
                                    <a href="team-details.html"><img src="img/blog/author.jpg" alt="#"></a>
                                </div>
                            </div>
                        </div>
                        <div class="product-info">
                            <div class="product-badge">
                                <ul>
                                    <li class="sale-badg">For Rent</li>
                                </ul>
                            </div>
                            <h2 class="product-title"><a href="product-details.html">New Apartment Nice View</a></h2>
                            <div class="product-img-location">
                                <ul>
                                    <li>
                                        <a href="product-details.html"><i class="flaticon-pin"></i> Belmont Gardens,
                                            Chicago</a>
                                    </li>
                                </ul>
                            </div>
                            <ul class="ltn__list-item-2--- ltn__list-item-2-before--- ltn__plot-brief">
                                <li><span>3 </span>
                                    Bed
                                </li>
                                <li><span>2 </span>
                                    Bath
                                </li>
                                <li><span>3450 </span>
                                    Square Ft
                                </li>
                            </ul>
                            <div class="product-hover-action">
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
                                        <a href="portfolio-details.html" title="Compare">
                                            <i class="flaticon-add"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="product-info-bottom">
                            <div class="product-price">
                                <span>$349,00<label>/Month</label></span>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- ltn__product-item -->
                <div class="col-xl-6 col-sm-6 col-12">
                    <div class="ltn__product-item ltn__product-item-4 ltn__product-item-5 text-center---">
                        <div class="product-img">
                            <a href="product-details.html"><img src="img/product-3/5.jpg" alt="#"></a>
                            <div class="real-estate-agent">
                                <div class="agent-img">
                                    <a href="team-details.html"><img src="img/blog/author.jpg" alt="#"></a>
                                </div>
                            </div>
                        </div>
                        <div class="product-info">
                            <div class="product-badge">
                                <ul>
                                    <li class="sale-badg">For Rent</li>
                                </ul>
                            </div>
                            <h2 class="product-title"><a href="product-details.html">New Apartment Nice View</a></h2>
                            <div class="product-img-location">
                                <ul>
                                    <li>
                                        <a href="product-details.html"><i class="flaticon-pin"></i> Belmont Gardens,
                                            Chicago</a>
                                    </li>
                                </ul>
                            </div>
                            <ul class="ltn__list-item-2--- ltn__list-item-2-before--- ltn__plot-brief">
                                <li><span>3 </span>
                                    Bed
                                </li>
                                <li><span>2 </span>
                                    Bath
                                </li>
                                <li><span>3450 </span>
                                    Square Ft
                                </li>
                            </ul>
                            <div class="product-hover-action">
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
                                        <a href="portfolio-details.html" title="Compare">
                                            <i class="flaticon-add"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="product-info-bottom">
                            <div class="product-price">
                                <span>$349,00<label>/Month</label></span>
                            </div>
                        </div>
                    </div>
                </div>
                <!--  -->
            </div>
        </div>
    </div>
    <!-- PRODUCT SLIDER AREA END -->

    <!-- CALL TO ACTION START (call-to-action-6) -->
    <livewire:call-to-action />
    <!-- CALL TO ACTION END -->

@endsection


@section('styles')

@endsection


@section('scripts')


@endsection


{{-- </div> --}}
