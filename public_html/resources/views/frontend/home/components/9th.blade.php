<!-- Customers Says/ testimonial Area Start -->
<section class="customers-says-area gradient-bg p-0 {{ @$home->customer_says_area == 1 ? '' : 'd-none' }}">
    <div class="section-overlay section-t-space section-b-space">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-title text-center">
                        <div class="section-heading-img"><img src="{{ getImageFile(get_option('customer_say_logo')) }}" alt="Our categories"></div>
                        <h3 class="section-heading section-heading-light mx-auto">{{ __(get_option('customer_say_title')) }}</h3>
                    </div>
                </div>
            </div>
            <div class="row testimonial-content-wrap">

                <!-- Single Testimonial Item start-->
                <div class="col-md-4">
                    <div class="testimonial-item">
                        <div class="testimonial-top-content d-flex align-items-center">
                            <div class="flex-shrink-0 quote-img-wrap">
                                <img src="{{ asset('frontend/assets/img/icons-svg/quote.svg') }}" alt="quote">
                            </div>
                            <div class="flex-grow-1 ms-3 testimonial-content">
                                <h6 class="text-uppercase font-16">{{ __(get_option('customer_say_first_name')) }}</h6>
                                <p class="text-uppercase font-13 font-medium">{{ __(get_option('customer_say_first_position')) }}</p>
                            </div>
                        </div>
                        <div class="testimonial-bottom-content">
                            <h6 class="text-white">{{ __(get_option('customer_say_first_comment_title')) }}</h6>
                            <p class="font-17">{{ __(get_option('customer_say_first_comment_description') )}}</p>
                            @include('frontend.home.partial.customer-say-first-comment-rating')
                        </div>

                    </div>
                </div>
                <!-- Single Testimonial Item End-->

                <!-- Single Testimonial Item start-->
                <div class="col-md-4">
                    <div class="testimonial-item">
                        <div class="testimonial-top-content d-flex align-items-center">
                            <div class="flex-shrink-0 quote-img-wrap">
                                <img src="{{ asset('frontend/assets/img/icons-svg/quote.svg') }}" alt="quote">
                            </div>
                            <div class="flex-grow-1 ms-3 testimonial-content">
                                <h6 class="text-uppercase font-16">{{ __(get_option('customer_say_second_name')) }}</h6>
                                <p class="text-uppercase font-13 font-medium">{{ __(get_option('customer_say_second_position')) }}</p>
                            </div>
                        </div>
                        <div class="testimonial-bottom-content">
                            <h6 class="text-white">{{ __(get_option('customer_say_second_comment_title')) }}</h6>
                            <p class="font-17">{{ __(get_option('customer_say_second_comment_description')) }}</p>
                            @include('frontend.home.partial.customer-say-second-comment-rating')
                        </div>

                    </div>
                </div>
                <!-- Single Testimonial Item End-->

                <!-- Single Testimonial Item start-->
                <div class="col-md-4">
                    <div class="testimonial-item">
                        <div class="testimonial-top-content d-flex align-items-center">
                            <div class="flex-shrink-0 quote-img-wrap">
                                <img src="{{ asset('frontend/assets/img/icons-svg/quote.svg') }}" alt="quote">
                            </div>
                            <div class="flex-grow-1 ms-3 testimonial-content">
                                <h6 class="text-uppercase font-16">{{ __(get_option('customer_say_third_name')) }}</h6>
                                <p class="text-uppercase font-13 font-medium">{{ __(get_option('customer_say_third_position')) }}</p>
                            </div>
                        </div>
                        <div class="testimonial-bottom-content">
                            <h6 class="text-white">{{ __(get_option('customer_say_third_comment_title')) }}</h6>
                            <p class="font-17">{{ __(get_option('customer_say_third_comment_description')) }}</p>
                            @include('frontend.home.partial.customer-say-third-comment-rating')
                        </div>

                    </div>
                </div>
                <!-- Single Testimonial Item End-->

            </div>
        </div>
    </div>
</section>
<!-- Customers Says/ testimonial Area End -->
