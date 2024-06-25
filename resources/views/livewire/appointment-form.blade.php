<div>
    <div id="appointment-messages">
        @if (session()->has('message'))
            <div class="alert alert-success">
                {{ session('message') }}
            </div>
        @endif
    </div>
    <form id="contact-form22" wire:submit="submitAppointmentForm">
        <div class="row">
            <div class="col-md-6">
                <input wire:model="fullname" type="text" placeholder="Your Name Here">

                @error('fullname')
                    <span class="error text-danger">{{ $message }}</span>
                @enderror
            </div>
            <div class="col-md-6">
                <input wire:model="subject" type="text" placeholder="Subject">
                @error('subject')
                    <span class="error text-danger">{{ $message }}</span>
                @enderror
            </div>
            <div class="col-md-6">
                <input wire:model="email" type="text" placeholder="Your Email">
                @error('email')
                    <span class="error text-danger">{{ $message }}</span>
                @enderror
            </div>
            <div class="col-md-6">
                <input wire:model="phone" type="text" placeholder="Phone">
                @error('phone')
                    <span class="error text-danger">{{ $message }}</span>
                @enderror
            </div>
            <div class="col-md-12">
                <textarea wire:model="message" placeholder="Your Massage"></textarea>
                @error('message')
                    <span class="error text-danger">{{ $message }}</span>
                @enderror
            </div>

            <div wire:loading wire:target="submitAppointmentForm" class="loading-indicator">
                <img width="50px" src="{{ asset('frontend/loading.gif') }}" alt="loading" srcset="">
            </div>

            <div class="btn-part">
                <div class="form-group mb-0">
                    <input wire:loading.attr="disabled" wire:loading.remove wire:target="submitAppointmentForm"
                        class="submit-btn" type="submit" value="Submit Now">
                </div>
            </div>
        </div>
    </form>
    </section>
    @section('styles')
    @endsection


    @section('scripts')
    @endsection
</div>
