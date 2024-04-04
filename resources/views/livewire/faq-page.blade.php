{{-- <div> --}}
{{-- Knowing others is intelligence; knowing yourself is true wisdom. --}}

@extends('layouts.app')

@section('title', 'Frequently asked questions')
@section('content')


    <!-- Start of Breadcrumb section ============================================= -->
    <section id="ft-breadcrumb" class="ft-breadcrumb-section position-relative"
        data-background="{{ asset('frontend/assets/img/bg/bread-bg.jpg') }} ">
        <span class="background_overlay"></span>
        <span class="design-shape position-absolute">
            <img src=" {{ asset('frontend/assets/img/shape/tmd-sh.png') }}" alt=""></span>
        <div class="container">
            <div class="ft-breadcrumb-content headline text-center position-relative">
                <h2>FAQ</h2>
                <div class="ft-breadcrumb-list ul-li">
                    <ul>
                        <li><a href="{{ url('/') }}">Home</a></li>
                        <li>FAQ</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!-- End of Breadcrumb section  ============================================= -->

    <!-- Start of faq  section ============================================= -->
    <section id="ft-faq-page" class="ft-faq-page-section page-padding">
        <div class="container">
            <div class="ft-faq-page-top-content d-flex justify-content-between align-items-end flex-wrap">
                <div class="ft-section-title-2 headline pera-content">
                    <h2>Discover Frequently
                        Asked Questions from
                        <span>Our Support</span>
                    </h2>
                </div>
                <div class="ft-btn-3">
                    <a class="d-flex justify-content-center align-items-center" href="{{ route('contact.page') }}">Get a
                        Query <i class="flaticon-right-arrow"></i></a>
                </div>
            </div>

            @php
                $faqsCount = $faqs->count();
                $halfCount = ceil($faqsCount / 2);
                $counter = 0;
            @endphp

            <div class="ft-faq-content">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="accordion" id="accordionExample">
                            @foreach ($faqs as $key => $item)
                                @if ($loop->index < $halfCount)
                                    <div class="accordion-item headline pera-content">
                                        <h2 class="accordion-header" id="headingTwo{{ $item->id }}">
                                            <button
                                                class="accordion-button @if ($key > 0) collapsed @endif "
                                                type="button" data-bs-toggle="collapse"
                                                data-bs-target="#collapseTwo{{ $item->id }}" aria-expanded="true"
                                                aria-controls="collapseTwo">
                                                {{ $item->title }}
                                            </button>
                                        </h2>
                                        <div id="collapseTwo{{ $item->id }}"
                                            class="accordion-collapse collapse @if ($key === 0) show @endif"
                                            aria-labelledby="headingTwo{{ $item->id }}"
                                            data-bs-parent="#accordionExample">
                                            <div class="accordion-body">
                                                {!! $item->description !!}
                                            </div>
                                        </div>
                                    </div>
                                    @php $counter++; @endphp
                                @endif
                            @endforeach
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="accordion" id="accordionExampl2">
                            @foreach ($faqs as $key => $item)
                                @if ($loop->index >= $halfCount)
                                    <div class="accordion-item headline pera-content">
                                        <h2 class="accordion-header" id="headingTwo{{ $item->id }}">
                                            <button
                                                class="accordion-button @if ($key > 0) collapsed @endif "
                                                type="button" data-bs-toggle="collapse"
                                                data-bs-target="#collapseTwo{{ $item->id }}" aria-expanded="true"
                                                aria-controls="collapseTwo">
                                                {{ $item->title }}
                                            </button>
                                        </h2>
                                        <div id="collapseTwo{{ $item->id }}"
                                            class="accordion-collapse collapse @if ($key === 0) show @endif"
                                            aria-labelledby="headingTwo{{ $item->id }}"
                                            data-bs-parent="#accordionExample">
                                            <div class="accordion-body">
                                                {!! $item->description !!}
                                            </div>
                                        </div>
                                    </div>
                                @endif
                                @if ($counter == $faqsCount)
                                @break
                            @endif
                        @endforeach
                    </div>
                </div>
            </div>
        </div>

        <div class="ft-faq-contact-form-wrapper">
            <div class="row">
                <div class="col-lg-6">
                    <div class="ft-faq-contact-form-area">
                        <div class="ft-section-title-2 headline pera-content">
                            <span class="sub-title">Get in Touch</span>
                            <h2>Have Any Query</h2>
                        </div>
                        {{-- <form action="#">
                            <div class="row">
                                <div class="col-md-6">
                                    <input type="text" placeholder="Your Name">
                                </div>
                                <div class="col-md-6">
                                    <input type="email" placeholder="Your Email">
                                </div>
                                <div class="col-md-12">
                                    <input type="text" placeholder="Company Name">
                                </div>
                                <div class="col-md-12">
                                    <textarea name="#" placeholder="Your Query"></textarea>
                                </div>
                                <div class="col-md-12">
                                    <button class="ft-submit-btn">Submit Now <i
                                            class="flaticon-right-arrow"></i></button>
                                </div>
                            </div>
                        </form> --}}

                        <livewire:contact-us-form />
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="ft-faq-form-img">
                        <img src="{{ asset('frontend/assets/img/bg/fq.jpg') }}" alt="">
                    </div>
                </div>
            </div>
        </div>

    </div>
</section>
<!-- End of faq section ============================================= -->

@endsection


@section('styles')

@endsection


@section('scripts')


@endsection


{{-- </div> --}}
