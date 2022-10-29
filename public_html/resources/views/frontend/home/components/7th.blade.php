<!-- Our Top Instructor Area Start -->
<section class="top-instructor-area section-t-space bg-white {{ @$home->instructor_area == 1 ? '' : 'd-none' }}">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <!-- section-left-align-->
                <div class="section-left-title-with-btn d-flex justify-content-between align-items-end">
                    <div class="section-title section-title-left d-flex align-items-start">
                        <div class="section-heading-img"><img src="{{ getImageFile(get_option('top_instructor_logo')) }}" alt="Our categories"></div>
                        <div>
                            <h3 class="section-heading">{{ __(get_option('top_instructor_title')) }}</h3>
                            <p class="section-sub-heading">{{ __(get_option('top_instructor_subtitle')) }}</p>
                        </div>
                    </div>

                    <a href="{{ route('allInstructor') }}" class="theme-btn theme-button2 theme-button3">{{ __('View All Instructor') }} <i data-feather="arrow-right"></i></a>
                </div>
                <!-- section-left-align-->
            </div>
        </div>
        <div class="row top-instructor-content-wrap">
        @foreach($instructors as $instructor)
            <!-- Single Instructor Item start-->
                <div class="col-md-6 col-lg-6 col-xl-3">
                    <div class="card instructor-item border-0">
                        <div class="instructor-img-wrap overflow-hidden"><a
                                href="{{ route('instructorDetails', [$instructor->user_id, Str::slug($instructor->name)]) }}"><img
                                    src="{{ getImageFile(@$instructor->user->image_path) }}" alt="instructor"></a></div>
                        <div class="card-body">
                            <h5 class="card-title"><a
                                    href="{{ route('instructorDetails', [$instructor->user_id, Str::slug($instructor->name)]) }}">{{ $instructor->name }}</a></h5>
                            <p class="card-text instructor-designation font-medium text-uppercase">{{ @$instructor->professional_title }}</p>
                            <div class="instructor-bottom d-flex align-items-start justify-content-between">
                                <div class="instructor-bottom-item font-14 font-medium"><img src="{{ asset('frontend/assets/img/icons-svg/rating.svg') }}" alt="star">
                                    <?php
                                    $average_rating = \App\Models\Course::where('user_id', $instructor->user_id)->avg('average_rating');
                                    ?>
                                    {{ number_format(@$average_rating, 1) }}
                                </div>
                                <div class="instructor-bottom-item font-14">{{ @$instructor->user->students->count() }} {{ __('Students') }}</div>
                                <div class="instructor-bottom-item font-14">{{ @$instructor->user->courses->count() }} {{ __('Courses') }}</div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Single Instructor Item End-->
            @endforeach
        </div>
    </div>
</section>
<!-- Our Top Instructor Area End -->
