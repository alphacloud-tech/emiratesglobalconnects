@extends('layouts.app')

@section('title', 'Property')
@section('content')


    <div class="ltn__utilize-overlay"></div>

    <!-- BREADCRUMB AREA START -->
    <div class="ltn__breadcrumb-area text-left bg-overlay-white-30 bg-image "
        data-bs-bg="{{ asset('cleverbiz/frontend/img/bg/23.jpg') }}">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="ltn__breadcrumb-inner">
                        <h1 class="page-title" style="color: #fff">Property</h1>
                        <div class="ltn__breadcrumb-list">
                            <ul style="color: #fff">
                                <li>
                                    <a href="{{ url('/') }}" wire:navigate><span class="ltn__secondary-color"
                                            style="color: #fff">
                                            <i class="fas fa-home"></i></span> Home
                                    </a>
                                </li>
                                <li style="color: #fff">Property</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- BREADCRUMB AREA END -->


    <!-- PRODUCT DETAILS AREA START -->
    <div class="ltn__product-area ltn__product-gutter mb-100">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="ltn__shop-options">
                        <ul>
                            <li>
                                <div class="ltn__grid-list-tab-menu ">
                                    <div class="nav">
                                        <a class="active show" data-bs-toggle="tab" href="#liton_product_grid"><i
                                                class="fas fa-th-large"></i></a>
                                        <a data-bs-toggle="tab" href="#liton_product_list"><i class="fas fa-list"></i></a>
                                    </div>
                                </div>
                            </li>

                            <li>
                                <div class="showing-product-number text-right">
                                    <span>Showing {{ $properties->count() }} of {{ $properties->total() }} results</span>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="tab-content">
                        <div class="tab-pane fade active show" id="liton_product_grid">
                            <div class="ltn__product-tab-content-inner ltn__product-grid-view">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <!-- Search Widget -->
                                        <div class="ltn__search-widget mb-30">
                                            <form action="#">
                                                <input type="text" name="search" placeholder="Search your keyword...">
                                                <button type="submit"><i class="fas fa-search"></i></button>
                                            </form>
                                        </div>
                                    </div>
                                    @foreach ($properties as $item)
                                        @php
                                            $title = strtolower(str_replace(' ', '-', $item->title));
                                        @endphp
                                        <!-- ltn__product-item -->
                                        <div class="col-lg-4 col-sm-6 col-12">
                                            <div
                                                class="ltn__product-item ltn__product-item-4 ltn__product-item-5 text-center---">
                                                <div class="product-img">
                                                    <a href="{{ route('property.single', $title) }}" wire:navigate><img
                                                            src="{{ asset($item->image_url) }}" alt="#"></a>
                                                    {{-- <div class="real-estate-agent">
                                                        <div class="agent-img">
                                                            <a href="team-details.html"><img
                                                                    src="{{ asset('cleverbiz/frontend/img/blog/author.jpg') }} "
                                                                    alt="#"></a>
                                                        </div>
                                                    </div> --}}
                                                </div>
                                                <div class="product-info">
                                                    <div class="product-badge">
                                                        <ul>
                                                            <li class="sale-badg">{{ $item->category }}</li>
                                                        </ul>
                                                    </div>
                                                    <h2 class="product-title"><a
                                                            href="{{ route('property.single', $title) }}"
                                                            wire:navigate>{{ $item->title }}</a></h2>
                                                    <div class="product-img-location">
                                                        <ul>
                                                            <li>
                                                                <a><i class="flaticon-pin"></i>
                                                                    {{ $item->location }}</a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <ul
                                                        class="ltn__list-item-2--- ltn__list-item-2-before--- ltn__plot-brief">
                                                        <li><span>{{ $item->detail->beds }}</span>
                                                            Bedrooms
                                                        </li>
                                                        <li><span>{{ $item->detail->baths }}</span>
                                                            Bathrooms
                                                        </li>
                                                        <li><span>{{ $item->detail->home_area }} </span>
                                                            square Ft
                                                        </li>
                                                    </ul>
                                                    {{--
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
                        <div class="tab-pane fade" id="liton_product_list">
                            <div class="ltn__product-tab-content-inner ltn__product-list-view">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <!-- Search Widget -->
                                        <div class="ltn__search-widget mb-30">
                                            <form action="#">
                                                <input type="text" name="search" placeholder="Search your keyword...">
                                                <button type="submit"><i class="fas fa-search"></i></button>
                                            </form>
                                        </div>
                                    </div>
                                    @foreach ($properties as $item)
                                        <!-- ltn__product-item -->
                                        <div class="col-lg-12">
                                            <div class="ltn__product-item ltn__product-item-4 ltn__product-item-5">
                                                <div class="product-img">
                                                    <a href="{{ route('property.single', $title) }}" wire:navigate><img
                                                            src="{{ asset($item->image_url) }} " alt="#"></a>
                                                </div>
                                                <div class="product-info">
                                                    <div class="product-badge-price">
                                                        <div class="product-badge">
                                                            <ul>
                                                                <li class="sale-badg">{{ $item->category }}</li>
                                                            </ul>
                                                        </div>
                                                        <div class="product-price">
                                                            <span>#{{ number_format($item->price, 0, '.', ',') }}<label>/Month</label></span>
                                                        </div>
                                                    </div>
                                                    <h2 class="product-title"><a
                                                            href="{{ route('property.single', $title) }}"
                                                            wire:navigate>{{ $item->title }}</a></h2>
                                                    <div class="product-img-location">
                                                        <ul>
                                                            <li>
                                                                <a href="locations.html"><i class="flaticon-pin"></i>
                                                                    {{ $item->location }}</a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <ul
                                                        class="ltn__list-item-2--- ltn__list-item-2-before--- ltn__plot-brief">
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
                                                {{-- <div class="product-info-bottom">
                                                    <div class="real-estate-agent">
                                                        <div class="agent-img">
                                                            <a href="team-details.html"><img
                                                                    src="{{ asset('cleverbiz/frontend/img/blog/author.jpg') }} "
                                                                    alt="#"></a>
                                                        </div>
                                                        <div class="agent-brief">
                                                            <h6><a href="team-details.html">William Seklo</a></h6>
                                                            <small>Estate Agents</small>
                                                        </div>
                                                    </div>
                                                    <div class="product-hover-action">
                                                        <ul>
                                                            <li>
                                                                <a href="#" title="Quick View"
                                                                    data-bs-toggle="modal"
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
                                                    </div>
                                                </div> --}}
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                    {{-- <div class="ltn__pagination-area text-center">
                        <div class="ltn__pagination">
                            <ul>
                                <li><a href="#"><i class="fas fa-angle-double-left"></i></a></li>
                                <li><a href="#">1</a></li>
                                <li class="active"><a href="#">2</a></li>
                                <li><a href="#">3</a></li>
                                <li><a href="#">...</a></li>
                                <li><a href="#">10</a></li>
                                <li><a href="#"><i class="fas fa-angle-double-right"></i></a></li>
                            </ul>
                        </div>
                    </div> --}}

                    {{ $properties->links() }}
                </div>
            </div>
        </div>
    </div>
    <!-- PRODUCT DETAILS AREA END -->

    <!-- CALL TO ACTION START (call-to-action-6) -->
    <livewire:call-to-action />
    <!-- CALL TO ACTION END -->


@endsection


@section('styles')

@endsection


@section('scripts')


@endsection
