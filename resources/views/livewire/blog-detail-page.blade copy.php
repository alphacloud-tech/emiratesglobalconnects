{{-- <div> --}}
{{-- Knowing others is intelligence; knowing yourself is true wisdom. --}}

@extends('layouts.app')

@section('title', 'Blog Details')
@section('content')

    <div class="ltn__utilize-overlay"></div>

    <!-- BREADCRUMB AREA START -->
    <div class="ltn__breadcrumb-area text-left bg-overlay-white-30 bg-image "
        data-bs-bg="{{ asset('cleverbiz/frontend/img/bg/23.jpg') }}">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="ltn__breadcrumb-inner">
                        <h1 class="page-title" style="color: #fff">News Details</h1>
                        <div class="ltn__breadcrumb-list">
                            <ul style="color: #fff">
                                <li>
                                    <a href="{{ url('/') }}" wire:navigate><span class="ltn__secondary-color"
                                            style="color: #fff">
                                            <i class="fas fa-home"></i></span> Home
                                    </a>
                                </li>
                                <li style="color: #fff">News Details</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- BREADCRUMB AREA END -->

    @php
        $date = \Carbon\Carbon::parse($blogPost->created_at);
        $day = $date->format('d'); // Extract the day
        $month = $date->format('M'); // Extract the abbreviated month name
        $year = $date->format('Y'); // Extract the abbreviated month name

        $paragraphs = explode("\n", $blogPost->content);
        $name = strtolower(str_replace(' ', '-', $blogPost->category->name));
    @endphp

    <!-- PAGE DETAILS AREA START (blog-details) -->
    <div class="ltn__page-details-area ltn__blog-details-area mb-120">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="ltn__blog-details-wrap">
                        <div class="ltn__page-details-inner ltn__blog-details-inner">
                            <div class="ltn__blog-meta">
                                <ul>
                                    <li class="ltn__blog-category">
                                        <a href="{{ route('blog.cat', $name) }}">{{ $blogPost->category->name }}</a>
                                    </li>
                                </ul>
                            </div>
                            <h2 class="ltn__blog-title">
                                {{ $blogPost->title }}
                            </h2>
                            <div class="ltn__blog-meta">
                                <ul>
                                    <li class="ltn__blog-author">
                                        <a href="{{ route('blog.cat', $name) }}">
                                            {{-- <img src="{{ asset($blogPost->image_url) }}" alt="#"> --}}
                                            By: admin</a>
                                    </li>
                                    <li class="ltn__blog-date">
                                        <i class="far fa-calendar-alt"></i>{{ $month }}
                                        {{ $day }}, {{ $year }}
                                    </li>
                                    <li>
                                        <a><i class="far fa-comments"></i>{{ count($blogPost->comments) }} Comments</a>
                                    </li>
                                </ul>
                            </div>
                            <p>{!! $blogPost->content !!}</p>


                            <img src="{{ asset($blogPost->image_url) }}" alt="Image">

                            @if (!empty($blogPost->quote))
                                <blockquote>
                                    <h6 class="ltn__secondary-color mt-0">

                                    </h6>
                                    {!! $blogPost->quote->quote_content !!}
                                </blockquote>
                            @endif

                        </div>

                        <livewire:comment-section :blogPost="$blogPost" :blog="$blogPost" />


                    </div>
                </div>

                <div class="col-lg-4">
                    <aside class="sidebar-area blog-sidebar ltn__right-sidebar">

                        <!-- Search Widget -->
                        <div class="widget ltn__search-widget">
                            <h4 class="ltn__widget-title ltn__widget-title-border-2">Search Objects</h4>
                            <form action="#">
                                <input type="text" name="search" placeholder="Search your keyword...">
                                <button type="submit"><i class="fas fa-search"></i></button>
                            </form>
                        </div>

                        <!-- Menu Widget (Category) -->
                        <div class="widget ltn__menu-widget ltn__menu-widget-2--- ltn__menu-widget-2-color-2---">
                            <h4 class="ltn__widget-title ltn__widget-title-border-2">Top Blog Categories</h4>
                            <ul>
                                @foreach ($categories as $item)
                                    @php
                                        $name = strtolower(str_replace(' ', '-', $item->name));
                                    @endphp
                                    <li><a href="{{ route('blog.cat', $name) }}">{{ $item->name }}
                                            {{-- <span>(26)</span> --}}
                                        </a>
                                    </li>
                                @endforeach
                            </ul>
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
                                                <a href="{{ route('property.single', $title) }}" wire:navigate><img
                                                        src="{{ asset($item->image_url) }}" alt="#"></a>
                                                <div class="real-estate-agent">
                                                    <div class="agent-img">
                                                        <a href="team-details.html"><img src="{{ asset($item->image_url) }}"
                                                                alt="#"></a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="product-info">
                                                <div class="product-price">
                                                    <span>#{{ number_format($item->price, 0, '.', ',') }}<label>/Month</label></span>
                                                </div>
                                                <h2 class="product-title"><a href="{{ route('property.single', $title) }}"
                                                        wire:navigate>{{ $item->title }}</a></h2>
                                                <div class="product-img-location">
                                                    <ul>
                                                        <li>
                                                            <a href="{{ route('property.single', $title) }}"
                                                                wire:navigate><i class="flaticon-pin"></i>
                                                                {{ $item->location }}</a>
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
                                                        wire:navigate>{{ \Illuminate\Support\Str::limit(strip_tags($item->content), 50, '...') }}</a>
                                                </h6>
                                                <div class="ltn__blog-meta">
                                                    <ul>
                                                        <li class="ltn__blog-date">
                                                            <a><i class="far fa-calendar-alt"></i>{{ $month }}
                                                                {{ $day }}, {{ $year }}</a>
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
                                    <li><a href="{{ $setting->youtube }}" target="_blank" title="youtube"><i
                                                class="fab fa-youtube"></i></a></li>
                                    <li><a href="{{ $setting->instagram }}" target="_blank" title="Instagram"><i
                                                class="fab fa-instagram"></i></a></li>

                                </ul>
                            </div>
                        </div>

                    </aside>
                </div>
            </div>
        </div>
    </div>
    <!-- PAGE DETAILS AREA END -->

    <!-- CALL TO ACTION START (call-to-action-6) -->
    <livewire:call-to-action />
    <!-- CALL TO ACTION END -->


@endsection


@section('styles')

@endsection


@section('scripts')

@endsection
