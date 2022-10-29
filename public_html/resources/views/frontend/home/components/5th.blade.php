<!-- Our Top Categories Area Start -->
<section class="top-categories-area gradient-bg p-0 {{ @$home->top_category_area == 1 ? '' : 'd-none' }}">
    <div class="section-overlay section-t-space section-b-space">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-title text-center">
                        <div class="section-heading-img"><img src="{{ asset(get_option('top_category_logo')) }}" alt="Our categories"></div>
                        <h3 class="section-heading section-heading-light">{{ __(get_option('top_category_title')) }}</h3>
                        <p class="section-sub-heading section-sub-heading-light">{{ __(get_option('top_category_subtitle')) }}</p>
                    </div>
                </div>
            </div>
            <div class="row top-categories-content-wrap">
            @foreach(@$firstFourCategories as $firstFourCategory)

                <!-- Single Feature Item start-->
                    <div class="col-md-6 col-lg-6 col-xl-3">
                        <div class="single-feature-item top-cat-item align-items-center">
                            <div class="flex-shrink-0 feature-img-wrap">
                                <img src="{{ getImageFile($firstFourCategory->image ?? 'frontend/assets/img/top-categories-icon/1.png') }}" alt="categories">
                            </div>
                            <div class="flex-grow-1 mt-3 feature-content">
                                <h6>{{ Str::limit($firstFourCategory->name, 20) }}</h6>
                                <p>{{ @$firstFourCategory->courses->count() }} {{ __('Courses') }}</p>
                            </div>
                        </div>
                    </div>
                    <!-- Single Feature Item End-->

            @endforeach
            <!-- section button start-->
                <div class="col-12 text-center section-btn">
                    <a href="{{ route('courses') }}" class="theme-btn theme-button1">{{ __('All Categories') }} <i data-feather="arrow-right"></i></a>
                </div>
                <!-- section button end-->

            </div>
        </div>
    </div>
</section>
<!-- Our Top Categories Area End -->
