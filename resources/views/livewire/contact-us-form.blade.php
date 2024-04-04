<div>
    <div id="form-messages">
        @if (session()->has('message'))
            <div class="alert alert-success">
                {{ session('message') }}
            </div>
        @endif
    </div>

    <form wire:submit.prevent="submitForm">
        @csrf
        <div class="row">
            <div class="col-lg-12">
                <input type="text" wire:model.lazy="fullname" placeholder="Your Name" id="fullname">
                @error('fullname')
                    <span class="error text-danger">{{ $message }}</span>
                @enderror
            </div>
            <div class="col-lg-12">
                <input type="email" wire:model.lazy="email" placeholder="Your Email" id="email">
                @error('email')
                    <span class="error text-danger">{{ $message }}</span>
                @enderror
            </div>

            <div class="col-lg-12">
                <input type="text" wire:model.lazy="phone" placeholder="Number" id="phone">
                @error('phone')
                    <span class="error text-danger">{{ $message }}</span>
                @enderror
            </div>

            <div class="col-lg-12">
                <textarea wire:model.lazy="message" placeholder="Your Message" id="message"></textarea>
                @error('message')
                    <span class="error text-danger">{{ $message }}</span>
                @enderror
            </div>

            <div wire:loading wire:target="submitForm" class="loading-indicator">
                <img width="50px" src="{{ asset('frontend/loading.gif') }}" alt="loading" srcset="">
            </div>



            @if (request()->is('contact-us'))
                <button wire:loading.attr="disabled" type="submit" wire:loading.remove wire:target="submitForm">
                    Book An Appointment
                </button>
            @else
                {{-- <button wire:loading.attr="disabled" type="submit" wire:loading.remove wire:target="submitForm">Contact
                    Now</button> --}}

                <button wire:loading.attr="disabled" type="submit" wire:loading.remove wire:target="submitForm"
                    class="ft-submit-btn">
                    Submit Now
                    <i class="flaticon-right-arrow"></i>
                </button>
            @endif

        </div>
    </form>

    @section('styles')
    @endsection


    @section('scripts')
    @endsection
</div>
