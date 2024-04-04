<div class="col-lg-3 col-md-12 col-sm-12">
    <h3 class="widget-title">Newsletter</h3>
    <p class="widget-desc">
        Subscribe to our newsletter and stay updated on the latest industry trends,
        tech insights, and exclusive offers.
        Join our community today for a regular dose of knowledge and inspiration.
    </p>
    <form wire:submit.prevent="subscribe">
        @csrf
        <p>
            <input type="email" wire:model="email" name="EMAIL" placeholder="Your email address" required="">
            <em class="paper-plane">
                <input type="submit" value="Sign up">
            </em>
            <i class="flaticon-send"></i>

            @if (session('success'))
                <p>{{ session('success') }}</p>
            @endif
        </p>
    </form>

</div>


