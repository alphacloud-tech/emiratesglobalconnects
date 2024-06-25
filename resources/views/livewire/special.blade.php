<div>
    @if (count($specials) > 0)
        <section id="ft-goodness-feature" class="ft-goodness-feature-section">
            <div class="container">

                <div class="ft-section-title-2 headline pera-content text-center">
                    <span class="sub-title">Our Goodness</span>
                    <h2>What Make Us Special</h2>
                    <p>
                        At Emirates Global Connect Logistics & Travel, our commitment to excellence sets us apart.
                    </p>
                </div>


                <div class="ft-goodness-featured-content">
                    <div class="row">

                        @foreach ($specials as $item)
                            <div class="col-lg-4 col-md-6">
                                <div class="ft-goodness-featured-innerbox text-center">
                                    <div
                                        class="ft-goodness-featured-icon d-flex align-items-center justify-content-center">
                                        <i
                                            class="@if ($item->icon) {{ $item->icon }} @else fal fa-anchor @endif"></i>
                                    </div>
                                    <div class="ft-goodness-featured-text headline pera-content">
                                        <h3>{{ $item->title }}</h3>
                                        <p>
                                            {!! $item->description !!}
                                        </p>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </section>
    @endif
</div>
