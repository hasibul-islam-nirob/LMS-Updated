@if(count($bundles) > 0)
    <!-- Latest Courses bundles Area Start -->
    <section class="courses-area courses-bundels-area section-t-space section-b-85-space bg-page {{ @$home->bundle_area == 1 ? '' : 'd-none' }}">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <!-- section-left-align-->
                    <div class="section-left-title-with-btn d-flex justify-content-between align-items-end">
                        <div class="section-title section-title-left d-flex align-items-start">
                            <div class="section-heading-img"><img src="{{ getImageFile(get_option('bundle_course_logo')) }}" alt="Course"></div>
                            <div>
                                <h3 class="section-heading">{{ __(get_option('bundle_course_title')) }}</h3>
                                <p class="section-sub-heading">{{ __(get_option('bundle_course_subtitle')) }}</p>
                            </div>
                        </div>
                        <a href="{{ route('bundles') }}" class="theme-btn theme-button2 theme-button3">{{ __('View All') }} <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-right"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg></a>
                    </div>
                    <!-- section-left-align-->
                </div>
            </div>
            <!-- Tab Content-->
            <div class="tab-content" id="myTabContent1">
                <div class="tab-pane fade show active" id="React" role="tabpanel" aria-labelledby="React-tab">
                    <div class="course-slider-items owl-carousel owl-theme">
                    @foreach($bundles as $bundle)
                        <!-- Course item start -->
                            <div class="col-12 col-sm-4 col-lg-3 w-100">
                                <div class="card course-item border-0 radius-3 bg-white">
                                    <div class="course-img-wrap overflow-hidden">
                                        <a href="{{ route('bundle-details', [$bundle->uuid, $bundle->slug]) }}"><img src="{{ getImageFile($bundle->image) }}" alt="course"
                                                                                                                     class="img-fluid"></a>
                                        <div class="course-item-hover-btns position-absolute">
                                        <span class="course-item-btn addToWishlist" data-bundle_id="{{ $bundle->id }}" data-route="{{ route('student.addToWishlist') }}"
                                              title="Add to Wishlist">
                                                    <i data-feather="heart"></i>
                                                </span>
                                            <span class="course-item-btn addToCart" data-bundle_id="{{ $bundle->id }}" data-route="{{ route('student.addToCart') }}"
                                                  title="Add to Cart">
                                                    <i data-feather="shopping-bag"></i>
                                                </span>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <h5 class="card-title course-title"><a
                                                href="{{ route('bundle-details', [$bundle->uuid, $bundle->slug]) }}">{{ Str::limit($bundle->name, 40) }}</a></h5>
                                        <p class="card-text instructor-name-certificate font-medium text-uppercase font-12">
                                            {{ @$bundle->user->instructor->name }}
                                            @if(get_instructor_ranking_level(@$bundle->user_id))
                                                | {{ get_instructor_ranking_level(@$bundle->user_id) }}
                                            @endif
                                        </p>
                                        <div class="course-item-bottom">
                                            <div class="instructor-bottom-item font-14 font-semi-bold text-uppercase mb-15">{{ __('Courses') }}: <span
                                                    class="color-hover">{{ @$bundle->bundleCourses->count() }}</span></div>
                                            <div class="instructor-bottom-item font-14 font-semi-bold text-uppercase">{{ __('Price') }}: <span class="color-hover">
                                                @if(get_currency_placement() == 'after')
                                                        {{$bundle->price}} {{ get_currency_symbol() }}
                                                    @else
                                                        {{ get_currency_symbol() }} {{$bundle->price}}
                                                    @endif
                                            </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Course item end -->
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Latest Courses bundles Area End -->
@endif
