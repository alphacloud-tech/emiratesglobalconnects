{{-- <div> --}}
{{-- Knowing others is intelligence; knowing yourself is true wisdom. --}}

@extends('layouts.app')

@section('title', 'Blog')
@section('content')


    <!-- Start of Breadcrumb section ============================================= -->
    <section id="ft-breadcrumb" class="ft-breadcrumb-section position-relative"
        data-background="{{ asset('frontend/assets/img/bg/bread-bg.jpg') }} ">
        <span class="background_overlay"></span>
        <span class="design-shape position-absolute">
            <img src=" {{ asset('frontend/assets/img/shape/tmd-sh.png') }}" alt=""></span>
        <div class="container">
            <div class="ft-breadcrumb-content headline text-center position-relative">
                <h2>Blog - {{ $cat }}</h2>
                <div class="ft-breadcrumb-list ul-li">
                    <ul>
                        <li><a href="{{ url('/') }}">Home</a></li>
                        <li>Blog</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!-- End of Breadcrumb section  ============================================= -->


    <!-- Start of blog post feed section ============================================= -->
    <section id="ft-blog-post-feed" class="ft-blog-post-feed-section page-padding">
        <div class="container">
            <div class="row">
                @foreach ($blogs as $item)
                    @php
                        $date = \Carbon\Carbon::parse($item->created_at);
                        $day = $date->format('d'); // Extract the day
                        $month = $date->format('M'); // Extract the abbreviated month name
                        $year = $date->format('Y'); // Extract the abbreviated month name
                        $title = strtolower(str_replace(' ', '-', $item->title));

                        $name = strtolower(str_replace(' ', '-', $item->category->name));

                    @endphp
                    <div class="col-lg-6">
                        <div class="ft-blog-post-feed-content">

                            <div class="ft-blog-post-feed-innerbox">
                                <div class="ft-blog-post-feed-img">
                                    <img src="{{ asset($item->image_url) }}" alt="">
                                </div>
                                <div class="ft-blog-post-feed-text-wrapper headline pera-content">
                                    <div class="blog-meta">
                                        {{-- <a><i class="fas fa-user"></i> By Admin</a> --}}
                                        <a><i class="fas fa-user"></i> {{ $day }}
                                            {{ $month }}/{{ $year }}</a>
                                        <a href="{{ route('blog.single', $title) }}"><i
                                                class="fas fa-tag"></i>{{ $item->category->name }}</a>
                                    </div>
                                    <div class="ft-blog-feed-title-text">
                                        <h3><a href="{{ route('blog.single', $title) }}">{{ $item->title }}</a></h3>
                                        <p>{!! \Illuminate\Support\Str::limit($item->content, 200) !!} </p>
                                    </div>
                                    <div class="ft-btn-2">
                                        <a href="{{ route('blog.single', $title) }}">
                                            <i class="icon-first flaticon-right-arrow"></i>
                                            <span>Read More</span>
                                        </a>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                @endforeach

                {{ $blogs->links() }}


            </div>
        </div>
    </section>
    <!-- End of blog post section ============================================= -->

@endsection


@section('styles')

@endsection


@section('scripts')


@endsection


{{-- </div> --}}
