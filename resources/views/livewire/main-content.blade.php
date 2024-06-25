<div>

    <!-- Start of About section
    ============================================= -->
    <livewire:about />

    <!-- End of About section
    ============================================= -->

    <!-- Start of Service section
    ============================================= -->
    <livewire:service />
    <!-- End of Service section
    ============================================= -->

    <!-- Start of counterup section
    ============================================= -->
    <section id="ft-counterup" class="ft-counterup-section position-relative">
        <div class="container">
            <div class="ft-counterup-content">
                <div class="row">
                    <div class="col-lg-3 col-md-6">
                        <div class="ft-counterup-innerbox d-flex align-items-center position-relative">
                            <div class="ft-counterup-icon d-flex align-items-center justify-content-center">
                                <i class="flaticon-delivery-truck"></i>
                            </div>
                            <div class="ft-counterup-text headline pera-content">
                                <h3><span class="counter">25</span>k</h3>
                                <p>Parcel Delivered</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="ft-counterup-innerbox d-flex align-items-center position-relative">
                            <div class="ft-counterup-icon d-flex align-items-center justify-content-center">
                                <i class="flaticon-office"></i>
                            </div>
                            <div class="ft-counterup-text headline pera-content">
                                <h3><span class="counter">300</span>+</h3>
                                <p>Total Branch</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="ft-counterup-innerbox d-flex align-items-center position-relative">
                            <div class="ft-counterup-icon d-flex align-items-center justify-content-center">
                                <i class="flaticon-community"></i>
                            </div>
                            <div class="ft-counterup-text headline pera-content">
                                <h3><span class="counter">500</span>k</h3>
                                <p>Satisfied Clients</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="ft-counterup-innerbox d-flex align-items-center position-relative">
                            <div class="ft-counterup-icon d-flex align-items-center justify-content-center">
                                <i class="flaticon-free-shipping"></i>
                            </div>
                            <div class="ft-counterup-text headline pera-content">
                                <h3><span class="counter">5</span>M</h3>
                                <p>Delivered Packages</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End of counterup section
    ============================================= -->

    <!-- Start of why choose section
    ============================================= -->
    <livewire:why-choose-us />
    <!-- End of of why choose section
    ============================================= -->

    <!-- Start of Team section
    ============================================= -->
    <livewire:team />
    <!-- End of Team section
    ============================================= -->

    <!-- Start of gallery section
    ============================================= -->
    <livewire:gallery />
    <!-- End of gallery section
    ============================================= -->

    <!-- Start of Testimonial section
    ============================================= -->
    <livewire:testimonial />

    <!-- End of Testimonial section
    ============================================= -->

    <!-- Start of Contact section
    ================================ appointment ============= -->

    <section id="ft-contact" class="ft-contact-section position-relative"
        data-background="{{ asset('frontend/assets/img/bg/c-bg.jpg') }}">
        <div class="container">
            <div class="ft-contact-content">
                <div class="ft-section-title headline pera-content">
                    <span class="sub-title">Project Estimateing</span>
                    <h2>Request A Quick Quotes
                    </h2>
                    <p>
                        Request a Quick Quote for Your Project Estimating Needs! Our team at Emirates Global Connect
                        Logistics & Travel is ready to provide you with fast and accurate estimates tailored to your
                        specific requirements. Get in touch with us today to start planning your project with
                        confidence.
                    </p>
                </div>
                <div class="ft-contact-form-wrapper">
                    <livewire:appointment-form />
                </div>
            </div>
        </div>
    </section>


    <!-- End of Contact section
    ============================================= -->
    <!-- Start of Blog section
    ============================================= -->
    <livewire:blog />
    <!-- End of Blog section
    ============================================= -->

</div>
