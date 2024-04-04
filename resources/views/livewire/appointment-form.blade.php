<div>
    <div id="appointment-messages">
        @if (session()->has('message'))
            <div class="alert alert-success">
                {{ session('message') }}
            </div>
        @endif
    </div>

    <section id="ft-contact" class="ft-contact-section position-relative"
        data-background="{{ asset('frontend/assets/img/bg/c-bg.jpg') }}">
        <div class="container">
            <div class="ft-contact-content">
                <div class="ft-section-title headline pera-content">
                    <span class="sub-title">Project Estimateing</span>
                    <h2>Request A Quick Quotes
                    </h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod r incididunt ut labore et
                        dolore magna aliqua. 302625 302625 </p>
                </div>
                <div class="ft-contact-form-wrapper">
                    <form id="contact-form22" wire:submit="submitAppointmentForm">
                        <div class="row">
                            <div class="col-md-6">
                                <input wire:model.live.debounce.3500ms="fullname" type="text"
                                    placeholder="Your Name Here">

                                @error('fullname')
                                    <span class="error text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="col-md-6">
                                <input type="text" placeholder="Subject">
                            </div>
                            <div class="col-md-6">
                                <input wire:model.live.debounce.3500ms="email" type="text" placeholder="Your Email">
                                @error('email')
                                    <span class="error text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="col-md-6">
                                <input wire:model.live.debounce.3500ms="phone" type="text" placeholder="Phone">
                                @error('phone')
                                    <span class="error text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="col-md-12">
                                <textarea wire:model.live.debounce.3500ms="message" placeholder="Your Massage"></textarea>
                                @error('message')
                                    <span class="error text-danger">{{ $message }}</span>
                                @enderror
                            </div>

                            <div wire:loading wire:target="submitAppointmentForm" class="loading-indicator">
                                <img width="50px" src="{{ asset('frontend/loading.gif') }}" alt="loading"
                                    srcset="">
                            </div>

                            <div class="btn-part">
                                <div class="form-group mb-0">
                                    <input wire:loading.attr="disabled" wire:loading.remove
                                        wire:target="submitAppointmentForm" class="submit-btn" type="submit"
                                        value="Submit Now">
                                </div>
                            </div>

                            
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    @section('styles')
    @endsection


    @section('scripts')
    @endsection
</div>
