 <!-- Start of FAQ why choose  section ============================================= -->
 <section id="ft-faq-why-choose-us" class="ft-faq-why-choose-us-section">
     <div class="container">
         <div class="ft-faq-why-choose-content">
             <div class="row">
                 <div class="col-lg-6">
                     <div class="ft-faq-content">
                         <div class="ft-section-title-2 headline pera-content">
                             <span class="sub-title">Frequently Asked Question</span>
                             <h2>Have an Any Question?</h2>
                         </div>
                         <div class="accordion" id="accordionExample">
                             @foreach ($faqs as $key => $item)

                                 <div class="accordion-item headline pera-content">
                                     <h2 class="accordion-header" id="headingTwo{{ $item->id }}">
                                         <button class="accordion-button @if ($key > 0) collapsed @endif " type="button"
                                             data-bs-toggle="collapse" data-bs-target="#collapseTwo{{ $item->id }}"
                                             aria-expanded="true" aria-controls="collapseTwo">
                                             {{ $item->title }}
                                         </button>
                                     </h2>
                                     <div id="collapseTwo{{ $item->id }}" class="accordion-collapse collapse @if ($key === 0) show @endif"
                                         aria-labelledby="headingTwo{{ $item->id }}" data-bs-parent="#accordionExample">
                                         <div class="accordion-body">
                                            {!! $item->description !!}
                                         </div>
                                     </div>
                                 </div>
                             @endforeach

                         </div>
                     </div>
                 </div>
                 <div class="col-lg-6">
                     <div class="ft-why-choose-content-2">
                         <div class="ft-section-title-2 headline pera-content">
                             <span class="sub-title">Why Choos Us</span>
                             <h2>Why You Like FasTrans?</h2>
                         </div>
                         <div class="ft-why-choose-feature-wrapper-2">
                             <div class="row">
                                 <div class="col-lg-6">
                                     <div class="ft-why-choose-feature-list-item-2">
                                         <div class="ft-why-choose-feature-icon">
                                             <i class="flaticon-logistics"></i>
                                         </div>
                                         <div class="ft-why-choose-feature-text headline pera-content">
                                             <h3>Safe Packing</h3>
                                             <p>Do eiusmod tempor incididunt ut labore et dolore aliqua.
                                             </p>
                                         </div>
                                     </div>
                                 </div>
                                 <div class="col-lg-6">
                                     <div class="ft-why-choose-feature-list-item-2">
                                         <div class="ft-why-choose-feature-icon">
                                             <i class="flaticon-delivery-truck"></i>
                                         </div>
                                         <div class="ft-why-choose-feature-text headline pera-content">
                                             <h3>Right Time Delivery</h3>
                                             <p>Do eiusmod tempor incididunt ut labore et dolore aliqua.
                                             </p>
                                         </div>
                                     </div>
                                 </div>
                                 <div class="col-lg-6">
                                     <div class="ft-why-choose-feature-list-item-2">
                                         <div class="ft-why-choose-feature-icon">
                                             <i class="flaticon-boat"></i>
                                         </div>
                                         <div class="ft-why-choose-feature-text headline pera-content">
                                             <h3>Ship everywhere</h3>
                                             <p>Do eiusmod tempor incididunt ut labore et dolore aliqua.
                                             </p>
                                         </div>
                                     </div>
                                 </div>
                                 <div class="col-lg-6">
                                     <div class="ft-why-choose-feature-list-item-2">
                                         <div class="ft-why-choose-feature-icon">
                                             <i class="flaticon-free-shipping"></i>
                                         </div>
                                         <div class="ft-why-choose-feature-text headline pera-content">
                                             <h3>Fastest Shipping</h3>
                                             <p>Do eiusmod tempor incididunt ut labore et dolore aliqua.
                                             </p>
                                         </div>
                                     </div>
                                 </div>
                             </div>
                         </div>
                     </div>
                 </div>
             </div>
         </div>
     </div>
 </section>
 <!-- End of FAQ why choose  section ============================================= -->
