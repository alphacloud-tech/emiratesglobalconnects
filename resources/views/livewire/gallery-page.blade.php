@extends('layouts.app')

@section('title', 'Gallery')
@section('content')


    <!-- Start of Breadcrumb section ============================================= -->
    <section id="ft-breadcrumb" class="ft-breadcrumb-section position-relative"
        data-background="{{ asset('frontend/assets/img/bg/bread-bg.jpg') }} ">
        <span class="background_overlay"></span>
        <span class="design-shape position-absolute">
            <img src=" {{ asset('frontend/assets/img/shape/tmd-sh.png') }}" alt=""></span>
        <div class="container">
            <div class="ft-breadcrumb-content headline text-center position-relative">
                <h2>Gallery</h2>
                <div class="ft-breadcrumb-list ul-li">
                    <ul>
                        <li><a href="{{ url('/') }}">Home</a></li>
                        <li>Gallery</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!-- End of Breadcrumb section  ============================================= -->

    <section id="ft-blog-post-feed" class="ft-blog-post-feed-section page-padding zoom-gallery">
        <div class="container">
            <div class="row gallery-row">

                @foreach ($galleries as $item)
                    <div class="col-md-3 mb-4">
                        <a href="{{ asset($item->image_url) }}" data-fancybox="gallery"
                            data-src="{{ asset($item->image_url) }}" class="gallery-item">
                            <img src="{{ asset($item->image_url) }}" alt="">
                            <div class="gallery-overlay">
                                <i class="fas fa-plus-square"></i>
                            </div>
                        </a>
                    </div>
                @endforeach

            </div>
        </div>
    </section>

@endsection


@section('styles')
    <link rel="stylesheet" type="text/css"
        href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.css">

    <style>
        /* Change color of next and previous arrows in Fancybox to white */
        .fancybox-button--arrow_right path,
        .fancybox-button--arrow_left path {
            fill: white !important;
        }
    </style>

    <style>
        .gallery-item {
            position: relative;
            display: block;
        }

        .gallery-overlay {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: #ea1e00;
            /* Transparent white background */
            display: none;
            /* Initially hidden */
            justify-content: center;
            align-items: center;
            opacity: 0.7;
            transition: background-color 0.3s ease;
        }

        .gallery-overlay i {
            font-size: 40px;
            /* Adjust icon size */
            color: #fff;
            /* Icon color */
        }

        .gallery-item:hover .gallery-overlay {
            display: flex;
            /* Show overlay on hover */
        }
    </style>
@endsection


@section('scripts')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.js"></script>

@endsection


{{-- </div> --}}
