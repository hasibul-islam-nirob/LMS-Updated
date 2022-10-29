<!-- Achievement Area Start -->
<section class="achievement-area {{ @$home->achievement_area == 1 ? '' : 'd-none' }}">
    <div class="container">
        <div class="row achievement-content-area">
            <!-- Achievement Item start-->
            <div class="col-md-6 col-lg-6 col-xl-3">
                <div class="achievement-item d-flex align-items-center">
                    <div class="flex-shrink-0 achievement-img-wrap">
                        <img src="{{ getImageFile(get_option('achievement_first_logo')) }}" alt="achievement">
                    </div>
                    <div class="flex-grow-1 ms-3 achievement-content">
                        <h6>{{ __(get_option('achievement_first_title')) }}</h6>
                        <p>{{ __(get_option('achievement_first_subtitle')) }}</p>
                    </div>
                </div>
            </div>
            <!-- Achievement Item End-->

            <!-- Achievement Item start-->
            <div class="col-md-6 col-lg-6 col-xl-3">
                <div class="achievement-item d-flex align-items-center">
                    <div class="flex-shrink-0 achievement-img-wrap">
                        <img src="{{ getImageFile(get_option('achievement_second_logo')) }}" alt="achievement">
                    </div>
                    <div class="flex-grow-1 ms-3 achievement-content">
                        <h6>{{ __(get_option('achievement_second_title')) }}</h6>
                        <p>{{ __(get_option('achievement_second_subtitle')) }}</p>
                    </div>
                </div>
            </div>
            <!-- Achievement Item End-->

            <!-- Achievement Item start-->
            <div class="col-md-6 col-lg-6 col-xl-3">
                <div class="achievement-item d-flex align-items-center">
                    <div class="flex-shrink-0 achievement-img-wrap">
                        <img src="{{ getImageFile(get_option('achievement_third_logo')) }}" alt="achievement">
                    </div>
                    <div class="flex-grow-1 ms-3 achievement-content">
                        <h6>{{ __(get_option('achievement_third_title')) }}</h6>
                        <p>{{ __(get_option('achievement_third_subtitle')) }}</p>
                    </div>
                </div>
            </div>
            <!-- Achievement Item End-->

            <!-- Achievement Item start-->
            <div class="col-md-6 col-lg-6 col-xl-3">
                <div class="achievement-item d-flex align-items-center">
                    <div class="flex-shrink-0 achievement-img-wrap">
                        <img src="{{ getImageFile(get_option('achievement_four_logo')) }}" alt="achievement">
                    </div>
                    <div class="flex-grow-1 ms-3 achievement-content">
                        <h6>{{ __(get_option('achievement_four_title')) }}</h6>
                        <p>{{ __(get_option('achievement_four_subtitle')) }}</p>
                    </div>
                </div>
            </div>
            <!-- Achievement Item End-->
        </div>
    </div>
</section>
<!-- Achievement Area End -->
