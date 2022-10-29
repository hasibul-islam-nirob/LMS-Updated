<!-- Special Feature Area Start -->
<section class="special-feature-area p-0 {{ @$home->special_feature_area == 1 ? '' : 'd-none' }}">
    <div class="container">
        <div class="row">
            <!-- Single Feature Item start-->
            <div class="col-md-4">
                <div class="single-feature-item d-flex align-items-center">
                    <div class="flex-shrink-0 feature-img-wrap">
                        <img src="{{ getImageFile(get_option('home_special_feature_first_logo')) }}" alt="feature">
                    </div>
                    <div class="flex-grow-1 ms-3 feature-content">
                        <h6>{{ __(get_option('home_special_feature_first_title')) }}</h6>
                        <p>{{ __(get_option('home_special_feature_first_subtitle')) }}</p>
                    </div>
                </div>
            </div>
            <!-- Single Feature Item End-->
            <!-- Single Feature Item start-->
            <div class="col-md-4">
                <div class="single-feature-item d-flex align-items-center">
                    <div class="flex-shrink-0 feature-img-wrap">
                        <img src="{{ getImageFile(get_option('home_special_feature_second_logo')) }}" alt="feature">
                    </div>
                    <div class="flex-grow-1 ms-3 feature-content">
                        <h6>{{ __(get_option('home_special_feature_second_title')) }}</h6>
                        <p>{{ __(get_option('home_special_feature_second_subtitle')) }}</p>
                    </div>
                </div>
            </div>
            <!-- Single Feature Item End-->
            <!-- Single Feature Item start-->
            <div class="col-md-4">
                <div class="single-feature-item d-flex align-items-center">
                    <div class="flex-shrink-0 feature-img-wrap">
                        <img src="{{ getImageFile(get_option('home_special_feature_third_logo')) }}" alt="feature">
                    </div>
                    <div class="flex-grow-1 ms-3 feature-content">
                        <h6>{{ __(get_option('home_special_feature_third_title')) }}</h6>
                        <p>{{ __(get_option('home_special_feature_third_subtitle')) }}</p>
                    </div>
                </div>
            </div>
            <!-- Single Feature Item End-->

        </div>
    </div>
</section>
<!-- Special Feature Area End -->
