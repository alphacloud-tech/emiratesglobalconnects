{{-- <div> --}}
{{-- Knowing others is intelligence; knowing yourself is true wisdom. --}}

@extends('layouts.app')

@section('title', 'Blog Details')
@section('content')
    @php
        $date = \Carbon\Carbon::parse($blogPost->created_at);
        $day = $date->format('d'); // Extract the day
        $month = $date->format('F'); // Extract the abbreviated month name
        $year = $date->format('Y'); // Extract the abbreviated month name

        $paragraphs = explode("\n", $blogPost->content);
        $name = strtolower(str_replace(' ', '-', $blogPost->category->name));

        $title = strtolower(str_replace(' ', '-', $previousPost->title));

        $title2 = strtolower(str_replace(' ', '-', $nextPost->title));
    @endphp
    <!-- Start of Breadcrumb section ============================================= -->
    <section id="ft-breadcrumb" class="ft-breadcrumb-section position-relative"
        data-background="{{ asset('frontend/assets/img/bg/bread-bg.jpg') }} ">
        <span class="background_overlay"></span>
        <span class="design-shape position-absolute">
            <img src=" {{ asset('frontend/assets/img/shape/tmd-sh.png') }}" alt=""></span>
        <div class="container">
            <div class="ft-breadcrumb-content headline text-center position-relative">
                <h2>{{ $blogPost->category->name }}</h2>
                <div class="ft-breadcrumb-list ul-li">
                    <ul>
                        <li><a href="{{ url('/') }}">Home</a></li>
                        <li>Blog Details</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!-- End of Breadcrumb section  ============================================= -->

    <!-- Start of Blog Details section ============================================= -->
    <section id="ft-blog-feed-details" class="ft-blog-feed-details-section page-padding">
        <div class="container">
            <div class="ft-blog-feed-details-content">
                <div class="row">
                    <div class="col-lg-9">
                        <div class="blog-details-img-text-wrapper">
                            <div class="blog-details-img position-relative">
                                <img src="{{ asset($blogPost->image_url) }}" alt="" />
                            </div>
                            <div class="ft-blog-details-item">
                                <div class="blog-details-text headline">
                                    <div class="ftd-blog-meta-2 position-relative text-capitalize">
                                        <a><i class="far fa-clock"></i>
                                            {{ $month }} {{ $day }}, {{ $year }}</a>
                                        <a><i class="far fa-user"></i> by admin</a>
                                        <a><i class="fas fa-tags"></i> {{ $blogPost->category->name }}</a>
                                    </div>
                                    <article>
                                        {!! $blogPost->content !!}
                                    </article>

                                    @if (!empty($blogPost->quote))
                                        <blockquote>
                                            {!! $blogPost->quote->quote_content !!}
                                            <span>Admin</span>
                                        </blockquote>
                                    @endif
                                </div>
                                <div class="ft-blog-tag-share clearfix">
                                    <div class="ft-blog-tag float-left">
                                        <span>Tags:</span>
                                        <a href="{{ route('service.page') }}">Flight Forwarding</a>
                                        <a href="{{ route('service.page') }}">Cars for Sale</a>
                                        <a href="{{ route('service.page') }}">Shipping Services</a>
                                        <a href="{{ route('service.page') }}">Travel Services</a>
                                    </div>
                                    {{-- <div class="ft-blog-share float-right">
                                        <a class="fb-social" href="#"><i class="fab fa-facebook-f"></i><span>Like
                                                Us</span></a>
                                        <a class="tw-social" href="#"><i class="fab fa-twitter"></i><span>Like
                                                Us</span></a>
                                        <a class="ln-social" href="#"><i class="fab fa-linkedin-in"></i><span>Like
                                                Us</span></a>
                                        <a class="in-social" href="#"><i class="fab fa-instagram"></i><span>Like
                                                Us</span></a>
                                    </div> --}}
                                </div>
                            </div>

                            {{-- <div class="ft-blog-next-prev d-flex justify-content-between flex-wrap">
                                <div class="ft-blog-next-prev-btn">
                                    <a class="np-text text-uppercase" href="#"><i
                                            class="fas fa-angle-double-left"></i> Previous Post</a>
                                    <div class="ft-blog-next-prev-img-text clearfix">
                                        <div class="ft-blog-np-img float-left">
                                            <img src="{{ asset($previousPost->image_url) }}"
                                                alt="{{ $previousPost->title }}" />
                                        </div>
                                        <div class="ft-blog-np-text headline">
                                            <h3><a href="{{ route('blog.single', $title) }}">{{ $previousPost->title }}</a>
                                            </h3>
                                        </div>
                                    </div>
                                </div>
                                <div class="ft-blog-next-prev-btn np-text-item text-right">
                                    <a class="np-text text-uppercase" href="#">Next Post <i
                                            class="fas fa-angle-double-right"></i></a>
                                    <div class="ft-blog-next-prev-img-text d-flex clearfix">
                                        <div class="ft-blog-np-text headline">
                                            <h3><a href="{{ route('blog.single', $title2) }}">{{ $nextPost->title }}</a>
                                            </h3>
                                        </div>
                                        <div class="ft-blog-np-img">
                                            <img src="{{ asset($nextPost->image_url) }}" alt="{{ $nextPost->title }}" />
                                        </div>
                                    </div>
                                </div>
                            </div> --}}

                        
                        </div>

                        <livewire:comment-section :blogPost="$blogPost" :blog="$blogPost" />

                    </div>
                    <div class="col-lg-3">
                        <div class="ft-side-bar-wrapper top-stikcy">
                            <div class="ft-side-bar-widget-area">
                                <div class="ft-side-bar-widget search-widget-area headline ul-li-block">
                                    <div class="search-widget position-relative">
                                        <form>
                                            <input type="text" placeholder="Search.">
                                            <button><i class="far fa-search"></i></button>
                                        </form>
                                    </div>
                                </div>
                                <div class="ft-side-bar-widget headline ul-li-block">
                                    <div class="category-widget">
                                        <h3 class="widget-title position-relative">Categories</h3>
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
                                </div>
                                <div class="ft-side-bar-widget headline ul-li-block">
                                    <div class="recent-news-widget">
                                        <h3 class="widget-title position-relative">Recent News</h3>

                                        @foreach ($blogs as $item)
                                            @php
                                                $date = \Carbon\Carbon::parse($item->created_at);
                                                $day = $date->format('d'); // Extract the day
                                                $month = $date->format('F'); // Extract the abbreviated month name M
                                                $year = $date->format('Y'); // Extract the abbreviated month name
                                                $title = strtolower(str_replace(' ', '-', $item->title));
                                            @endphp
                                            <div class="recent-blog-img-text clearfix">
                                                <div class="recent-blog-img float-left">
                                                    <img src="{{ asset($item->image_url) }}" alt="">
                                                </div>
                                                <div class="recent-blog-text headline">
                                                    <h3><a
                                                            href="{{ route('blog.single', $title) }}">{{ $item->title }}</a>
                                                    </h3>
                                                    <span><i class="far fa-calendar-alt"></i>{{ $month }}
                                                        {{ $day }}, {{ $year }}</span>
                                                </div>
                                            </div>
                                        @endforeach

                                    </div>
                                </div>

                                <div class="ft-side-bar-widget headline ul-li-block">
                                    <div class="gallery-widget">
                                        <h3 class="widget-title position-relative">Gallery</h3>
                                        <ul class="zoom-gallery">
                                            @foreach ($galleries2 as $item)
                                                <li>
                                                    <a href="{{ asset($item->image_url) }} "
                                                        data-source="{{ asset($item->image_url) }} ">
                                                        <img src="{{ asset($item->image_url) }} " alt="">
                                                    </a>
                                                </li>
                                            @endforeach

                                        </ul>
                                    </div>
                                </div>

                                <div class="ft-side-bar-add headline ul-li-block">
                                    <a href="{{ route('contact.page') }}">
                                        <img src="{{ asset('frontend/assets/img/bg/add-bg.png') }} " alt="">
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Start of Blog Details section ============================================= -->
@endsection


@section('styles')

@endsection


@section('scripts')

@endsection
