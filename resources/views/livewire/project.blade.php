  <!-- Start of Project section
 ============================================= -->


  <section id="ft-project" class="ft-project-section position-relative">
      <div class="container">
          <div class="ft-project-content d-flex justify-content-between align-items-end flex-wrap">
              <div class="ft-section-title headline pera-content">
                  <span class="sub-title">Project</span>
                  <h2>Let's Checkout our All Latest Project</h2>
              </div>
              <div class="ft-btn">
                  <a class="d-flex justify-content-center align-items-center" href="project.html">All Project</a>
              </div>
          </div>
      </div>
      <div class="ft-project-slider-wrapper">
          <div class="ft-project-slider-area">
              @foreach ($projects as $item)
                  <div class="ft-item-innerbox">
                      <div class="ft-project-itembox position-relative">
                          <div class="ft-project-img">
                              <img src="{{ asset('frontend/assets/img/project/pro1.jpg') }} " alt="" />
                          </div>
                          <div class="ft-project-text headline pera-content">
                              <h3><a href="portfolio-single.html">Industrial And Air Shipping </a></h3>
                              <p>Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus
                                  vel
                                  facilisis.</p>
                              <div class="ft-btn">
                                  <a class="d-flex justify-content-center align-items-center"
                                      href="project-single.html">Explore More</a>
                              </div>
                          </div>
                      </div>
                  </div>
              @endforeach

          </div>
      </div>
  </section>


  <!-- End of Project section
============================================= -->
