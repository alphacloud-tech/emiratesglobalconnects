<!-- Start of Project section ============================================= -->


<section id="ft-project-page" class="ft-project-page-section page-padding" style="padding-top: 10px">
    <div class="container">

        @if ($check)
            {{-- <div class="ft-section-title-2 headline pera-content text-center">
                <span class="sub-title">Project</span>
                <h2>Let's Checkout our All Top Ratted Latest {{ $service->title }} Gallery</h2>
            </div> --}}
            <div class="ft-project-post-item-content">
                {{-- <div class="ft-project-item-filter-btn ul-li">
                  <ul id="filters" class="nav-gallery text-center">
                      <li class="filtr-button filtr-active" data-filter="all">All</li>
                      @foreach ($services as $service)
                          <li class="filtr-button" data-filter="{{ $service->id }}">{{ $service->title }}</li>
                      @endforeach
                      <li class="filtr-button" data-filter="2">Air Freight</li>
                      <li class="filtr-button" data-filter="3">Rail Freight</li>
                      <li class="filtr-button" data-filter="4">Warehouse Freight</li>
                  </ul>
              </div> --}}

                <div class="ft-project-item-wrapper filtr-container row">
                    @foreach ($projects as $item)
                        <div class="col-lg-4 col-sm-6 filtr-item" data-category="{{ $item->service_id }}"
                            data-sort="Busy streets">
                            <div class="ft-portfolio-slider-innerbox3 position-relative">
                                <div class="ft-portfolio-img mt-4">
                                    <img src="{{ asset($item->image_url) }}" alt="" />
                                </div>
                                <div class="ft-portfolio-text headline headline pera-content">

                                </div>
                            </div>
                        </div>
                    @endforeach

                </div>

            </div>
        @endif
    </div>
</section>




<!-- End of Project section ============================================= -->
