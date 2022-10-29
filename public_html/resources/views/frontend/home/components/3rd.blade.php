<!-- Board Selection of Courses Area Start -->
<section class="courses-area section-t-space section-b-85-space {{ @$home->courses_area == 1 ? '' : 'd-none' }}">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <!-- section-left-align-->
                <div class="section-left-title-with-btn d-flex justify-content-between align-items-end">
                    <div class="section-title section-title-left d-flex align-items-start">
                        <div class="section-heading-img"><img src="{{ getImageFile(get_option('course_logo')) }}" alt="Course"></div>
                        <div>
                            <h3 class="section-heading">{{ __(get_option('course_title')) }}</h3>
                            <p class="section-sub-heading">{{ __(get_option('course_subtitle')) }}</p>
                        </div>
                    </div>

                    <!-- Tab panel nav list -->
                    <div class="course-tab-nav-wrap d-flex justify-content-between">
                        <ul class="nav nav-tabs tab-nav-list border-0" id="myTab" role="tablist">
                            @foreach($featureCategories as $key => $category)
                                <li class="nav-item" role="presentation">
                                    <a class="nav-link {{ $key == 0 ? 'active' : '' }}" id="{{ $category->slug }}-tab" data-bs-toggle="tab" href="#{{ $category->slug }}" role="tab"
                                       aria-controls="{{ $category->slug }}" aria-selected="{{ $key == 0 ? 'true' : 'false' }}">{{ __($category->name) }}</a>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                    <!-- Tab panel nav list -->

                </div>
                <!-- section-left-align-->
            </div>
        </div>

        <!-- Tab Content-->
        <div class="tab-content" id="myTabContent">
            @foreach($featureCategories as $key => $category)
                <div class="tab-pane fade {{ $key == 0 ? 'show active' : '' }}" id="{{ $category->slug }}" role="tabpanel" aria-labelledby="{{ $category->slug }}-tab">
                    <div class="course-slider-items owl-carousel owl-theme">
                        <!-- Course item start -->
                        @foreach($category->courses as $course)
                            <div class="col-12 col-sm-4 col-lg-3 w-100">
                                <div class="card course-item border-0 radius-3 bg-white">
                                    <div class="course-img-wrap overflow-hidden">
                                        <?php
                                        $special = @$course->specialPromotionTagCourse->specialPromotionTag->name;
                                        ?>
                                        @if($special)
                                            <span class="course-tag badge radius-3 font-12 font-medium position-absolute bg-orange">
                                                    {{ __(@$special) }}
                                                </span>
                                        @endif
                                        <a href="{{ route('course-details', $course->slug) }}"><img src="{{getImageFile($course->image_path)}}" alt="course" class="img-fluid"></a>
                                        <div class="course-item-hover-btns position-absolute">
                                                <span class="course-item-btn addToWishlist" data-course_id="{{ $course->id }}" data-route="{{ route('student.addToWishlist') }}"
                                                      title="Add to Wishlist">
                                                    <i data-feather="heart"></i>
                                                </span>
                                            <span class="course-item-btn addToCart" data-course_id="{{ $course->id }}" data-route="{{ route('student.addToCart') }}"
                                                  title="Add to Cart">
                                                    <i data-feather="shopping-bag"></i>
                                                </span>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <h5 class="card-title course-title"><a href="{{ route('course-details', $course->slug) }}">{{ Str::limit($course->title, 40) }}</a></h5>
                                        <p class="card-text instructor-name-certificate font-medium text-uppercase font-12">
                                            {{ @$course->instructor->name }}
                                            @if(get_instructor_ranking_level(@$course->instructor->user_id))
                                                | {{ get_instructor_ranking_level(@$course->instructor->user_id) }}
                                            @endif
                                        </p>
                                        <div class="course-item-bottom">
                                            <div class="course-rating d-flex align-items-center">
                                                <span class="font-medium font-14 me-2">{{ number_format($course->average_rating, 1) }}</span>
                                                <ul class="rating-list d-flex align-items-center me-2">
                                                    @include('frontend.course.render-course-rating')
                                                </ul>
                                                <span class="rating-count font-14">({{ $course->reviews->count() }})</span>
                                            </div>
                                            @if($course->learner_accessibility == 'paid')
                                                <?php
                                                $startDate = date('d-m-Y H:i:s', strtotime(@$course->promotionCourse->promotion->start_date));
                                                $endDate = date('d-m-Y H:i:s', strtotime(@$course->promotionCourse->promotion->end_date));
                                                $percentage = @$course->promotionCourse->promotion->percentage;
                                                $discount_price = number_format($course->price - (($course->price * $percentage) / 100), 2);
                                                ?>

                                                @if(now()->gt($startDate) && now()->lt($endDate))
                                                    <div class="instructor-bottom-item font-14 font-semi-bold text-uppercase">
                                                        {{ __('Price') }}: <span class="color-hover">
                                                            @if(get_currency_placement() == 'after')
                                                                {{ $discount_price }} {{ get_currency_symbol() }}
                                                            @else
                                                                {{ get_currency_symbol() }} {{ $discount_price }}
                                                            @endif

                                                        </span>
                                                        <span class="text-decoration-line-through fw-normal font-14 color-gray ps-3">
                                                            @if(get_currency_placement() == 'after')
                                                                {{ $course->price }} {{ get_currency_symbol() }}
                                                            @else
                                                                {{ get_currency_symbol() }} {{ $course->price }}
                                                            @endif
                                                        </span>
                                                    </div>
                                                @else
                                                    <div class="instructor-bottom-item font-14 font-semi-bold text-uppercase">
                                                        {{ __('Price') }}: <span class="color-hover">
                                                            @if(get_currency_placement() == 'after')
                                                                {{ $course->price }} {{ get_currency_symbol() }}
                                                            @else
                                                                {{ get_currency_symbol() }} {{ $course->price }}
                                                            @endif
                                                        </span>
                                                    </div>
                                                @endif
                                            @elseif($course->learner_accessibility == 'free')
                                                <div class="instructor-bottom-item font-14 font-semi-bold text-uppercase">
                                                    {{ __('Free') }}
                                                </div>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                            </div>
                    @endforeach
                    <!-- Course item end -->
                    </div>
                </div>
            @endforeach
        </div>

    </div>
</section>
<!-- Board Selection of Courses Area End -->
