{{-- <div> --}}
{{-- Knowing others is intelligence; knowing yourself is true wisdom. --}}

@extends('layouts.app')

@section('title', 'Agent Details')
@section('content')



    <!-- Start of Breadcrumb section ============================================= -->
    <section id="ft-breadcrumb" class="ft-breadcrumb-section position-relative"
        data-background="{{ asset('frontend/assets/img/bg/bread-bg.jpg') }} ">
        <span class="background_overlay"></span>
        <span class="design-shape position-absolute">
            <img src=" {{ asset('frontend/assets/img/shape/tmd-sh.png') }}" alt=""></span>
        <div class="container">
            <div class="ft-breadcrumb-content headline text-center position-relative">
                <h2>{{ $team->name }}</h2>
                <div class="ft-breadcrumb-list ul-li">
                    <ul>
                        <li><a href="{{ url('/') }}">Home</a></li>
                        <li>Team Details</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!-- End of Breadcrumb section  ============================================= -->

    <section id="ft-team-details" class="ft-team-details-section page-padding">
        <div class="container">
            <div class="ft-team-details-content position-relative">
                <span class="design-shape position-absolute"><img src="{{ asset('frontend/assets/img/shape/tmd-sh.png') }} "
                        alt="1" /></span>
                <div class="row">
                    <div class="col-lg-5">
                        <div class="ft-team-details-img position-relative">
                            <img src="{{ asset($team->image_url) }}" alt="2" />
                        </div>
                    </div>
                    <div class="col-lg-7">
                        <div class="ft-team-details-text-wrapper headline pera-content">
                            <div class="ft-team-details-text">
                                <h3>{{ $team->name }}</h3>
                                <span>{{ $team->position }}</span>
                                <p>{!! $team->description !!}</p>
                            </div>
                            <div class="ft-team-details-info ul-li-block">
                                <ul>
                                    <li><span>Experience:</span> 5+ Years</li>
                                    <li><span>Email:</span> {{ $team->email }}</li>
                                    <li><span>Phone:</span> {{ $team->phone }}</li>
                                    {{-- <li><span>Fax:</span> +1 (123) 542 25 67</li> --}}
                                </ul>
                            </div>
                            <div class="coming-soon-social d-flex">

                                @if ($team->facebook)
                                    <a href="{{ $team->facebook }}"><i class="fab fa-facebook-f"></i></a>
                                @endif
                                @if ($team->twitter)
                                    <a href="{{ $team->twitter }}"><i class="fab fa-twitter"></i></a>
                                @endif
                                @if ($team->instagram)
                                    <a href="{{ $team->instagram }}"><i class="fab fa-instagram"></i></a>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="ft-team-personal-form-cta-wrapper">
                <div class="row">
                    <div class="col-lg-9">
                        <div class="ft-team-personal headline pera-content">
                            <h2 class="title">Personal Experience</h2>
                            <p>{!! $team->biography !!}</p>

                            @php
                                $skills = explode(', ', $team->skills);
                                $percent = [80, 74, 89, 90, 84];
                                $text = [
                                    'Mod tempor incididunt magna aliqua 1.',
                                    'Mod tempor incididunt magna aliqua. 2',
                                    'Mod tempor incididunt magna aliqua. 3',
                                ];
                            @endphp
                            <div class="ft-team-personal-skill">
                                <div class="row">
                                    @foreach ($skills as $i => $skill)
                                        <div class="col-md-4">
                                            <div class="ft-team-skill-inner align-items-center d-flex">
                                                <div class="counter-boxed headline position-relative">
                                                    <div class="graph-outer">
                                                        <input type="text" class="dial" data-fgColor="#f22728"
                                                            data-bgColor="#fff" data-width="65" data-height="65"
                                                            data-linecap="round" value="95" />
                                                        <div class="inner-text count-box"><span class="count-text"
                                                                data-stop="{{ $percent[$i] }}" data-speed="3500"></span>%
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="ft-team-skill-text">
                                                    <h3>{{ $skill }}</h3>
                                                    <p>{{ $text[$i] }}</p>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                            {{-- <div class="ft-team-contact-form-wrapper">
                                <div class="ft-team-contact-form">
                                    <h3>Contact Me</h3>
                                    <form action="#">
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <input type="text" placeholder="Your Name" />
                                            </div>
                                            <div class="col-lg-6">
                                                <input type="email" placeholder="Your Email" />
                                            </div>
                                            <div class="col-lg-12">
                                                <input type="text" placeholder="Your Website" />
                                            </div>
                                            <div class="col-lg-12">
                                                <textarea name="#" placeholder="Your Question"></textarea>
                                            </div>
                                            <div class="col-lg-12">
                                                <button class="ft-submit-btn">Post Comment <i
                                                        class="flaticon-right-arrow"></i></button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div> --}}
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="ft-team-personal-cta text-center"
                            data-background="{{ asset('frontend/assets/img/bg/td-bg.png') }}">
                            <div class="ft-team-personal-cta-icon d-flex justify-content-center align-items-center">
                                <i class="fal fa-phone-rotary"></i>
                            </div>
                            <div class="ft-team-personal-cta-text headline">
                                <h3>Contact Info:-</h3>
                                <span>Phone : {{ $setting->phone_1 }}</span>
                                <span style="font-size: 14px">Email : {{ $setting->email_1 }}</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection


@section('styles')

@endsection


@section('scripts')


@endsection


{{-- </div> --}}
