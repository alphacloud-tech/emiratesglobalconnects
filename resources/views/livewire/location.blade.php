<!-- Location Section -->
{{-- <section class="ft1-location-section">
    <div class="auto-container">
        <div class="inner-container" style="background-image:url(assets/images/background/pattern-4.png)">
            <div class="title-box">
                <h4>Global Location</h4>
            </div>
            <div class="row clearfix">
                <!-- Column -->
                <div class="column col-lg-6 col-md-6 col-sm-12">
                    <h6>United Kingdom- Head Office</h6>
                    <ul class="post-info">
                        <li><span class="icon flaticon-location"></span>
                            3499 Sigley Road, Belleville, <br> KS 66935, UK
                            {{ strip_tags($setting->address) }}
                        </li>
                        <li><span class="icon flaticon-email"></span>{{ $setting->email_1 }}</li>
                    </ul>
                </div>
                <!-- Column -->
                <div class="column col-lg-6 col-md-6 col-sm-12">
                    <h6>United States- 2nd Office</h6>
                    <ul class="post-info">
                        <li><span class="icon flaticon-location"></span>
                            {{ strip_tags($setting->address) }}
                        </li>
                        <li><span class="icon flaticon-email"></span>{{ $setting->email_2 }}</li>
                    </ul>
                </div>
                <!-- Column -->
                <div class="column col-lg-4 col-md-6 col-sm-12">
                    <h6>Canada- 3rd Office</h6>
                    <ul class="post-info">
                        <li><span class="icon flaticon-location"></span>3499 Sigley Road, Belleville, <br> KS 66935, UK
                        </li>
                        <li><span class="icon flaticon-email"></span>fastrans@gmail.com</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section> --}}


<section class="ft1-location-section">
    <div class="auto-container">
        <div class="inner-container" style="background-image:url(assets/images/background/pattern-4.png)">
            <div class="title-box">
                <h4>United Emirate - Head Office</h4>
            </div>
            <div class="row clearfix">
                <!-- Column -->
                <div class="column col-lg-12 col-md-12 col-sm-12">
                    {{-- <h6 class="text-center">United Kingdom- Head Office</h6> --}}
                    <ul class="post-info text-center">
                        <li><span class="icon flaticon-location"></span>
                            {{-- 3499 Sigley Road, Belleville, <br> KS 66935, UK --}}
                            {{ strip_tags($setting->address) }}
                        </li>
                        <br>
                        <li><span class="icon flaticon-email"></span>{{ $setting->email_1 }}</li> &nbsp; &nbsp; &nbsp;
                        <li><span class="icon flaticon-call"></span>{{ $setting->phone_1 }}</li>
                    </ul>
                </div>
                <!-- Column -->
                {{-- <div class="column col-lg-6 col-md-6 col-sm-12">
                    <h6>United States- 2nd Office</h6>
                    <ul class="post-info">
                        <li><span class="icon flaticon-location"></span>
                            {{ strip_tags($setting->address) }}
                        </li>
                        <li><span class="icon flaticon-email"></span>{{ $setting->email_2 }}</li>
                    </ul>
                </div> --}}
                <!-- Column -->
                {{-- <div class="column col-lg-4 col-md-6 col-sm-12">
                    <h6>Canada- 3rd Office</h6>
                    <ul class="post-info">
                        <li><span class="icon flaticon-location"></span>3499 Sigley Road, Belleville, <br> KS 66935, UK
                        </li>
                        <li><span class="icon flaticon-email"></span>fastrans@gmail.com</li>
                    </ul>
                </div> --}}
            </div>
        </div>
    </div>
</section>
<!-- End Location Section -->
