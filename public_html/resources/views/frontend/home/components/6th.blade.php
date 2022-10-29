@if(count($consultationInstructors) > 0)
    <!-- One to One Consultation Area Start -->
    <section class="courses-area courses-bundels-area one-to-one-consultation-area section-t-space section-b-85-space bg-page {{ @$home->consultation_area == 1 ? '' : 'd-none' }}">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <!-- section-left-align-->
                    <div class="section-left-title-with-btn d-flex justify-content-between align-items-end">
                        <div class="section-title section-title-left d-flex align-items-start">
                            <div class="section-heading-img"><img src="{{ asset('uploads_demo/setting/consultation.png') }}" alt="Consultant">
                            </div>
                            <div>
                                <h3 class="section-heading">{{ __('One to one consultation') }}</h3>
                                <p class="section-sub-heading">{{ __('Consult with your favorite consultant!') }}</p>
                            </div>
                        </div>
                        <a href="{{ route('consultationInstructorList') }}" class="theme-btn theme-button2 theme-button3">{{ __('View All') }}
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                 stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-right">
                                <line x1="5" y1="12" x2="19" y2="12"></line>
                                <polyline points="12 5 19 12 12 19"></polyline>
                            </svg>
                        </a>
                    </div>
                    <!-- section-left-align-->
                </div>
            </div>

            <!-- One to one consultation Slider start -->
            <div class="row">
                <div class="col-12">
                    <div class="course-slider-items one-to-one-slider-items owl-carousel owl-theme">
                    @foreach($consultationInstructors as $consultationInstructor)
                        <!-- Course item start -->
                            <div class="col-12 col-sm-4 col-lg-3 w-100">
                                <div class="card course-item consultation-instructor-item border-0 radius-3 bg-white">
                                    <div class="course-img-wrap overflow-hidden">
                                        <div class="consultation-tag position-absolute">
                                        <span class="text-white">
                                            @if(get_currency_placement() == 'after')
                                                {{$consultationInstructor->hourly_rate}}/h {{ get_currency_symbol() }}
                                            @else
                                                {{ get_currency_symbol() }} {{$consultationInstructor->hourly_rate}}/h
                                            @endif
                                        </span>
                                        </div>
                                        <a href="#">
                                            <img src="{{ getImageFile($consultationInstructor->user->image_path) }}" alt="course" class="img-fluid">
                                        </a>
                                    </div>
                                    <div class="card-body position-relative">
                                        <h5 class="card-title course-title"><a
                                                href="{{ route('instructorDetails', [$consultationInstructor->user->id, Str::slug($consultationInstructor->full_name)]) }}">{{ $consultationInstructor->full_name }}</a>
                                        </h5>
                                        <p class="card-text instructor-name-certificate font-medium text-uppercase font-12">{{ $consultationInstructor->professional_title }} |
                                            @if(get_instructor_ranking_level(@$consultationInstructor->user_id))
                                                | {{ get_instructor_ranking_level(@$consultationInstructor->user_id) }}
                                            @endif </p>
                                        <div class="course-item-bottom">
                                            <div class="course-rating d-flex align-items-center">
                                            <span class="font-medium font-14 me-2">
                                                <?php
                                                $average_rating = getUserAverageRating($consultationInstructor->user_id);
                                                ?>
                                                {{ number_format(@$average_rating, 1) }}
                                            </span>
                                                @include('frontend.home.partial.instructor-rating')
                                                <span class="rating-count font-14">({{ getInstructorTotalReview($consultationInstructor->user_id) }})</span>
                                            </div>
                                            @php $hourly_fee = 0; @endphp
                                            @if(get_currency_placement() == 'after')
                                                @php $hourly_fee = $consultationInstructor->hourly_rate . ' ' . get_currency_symbol() . '/h'; @endphp
                                            @else
                                                @php $hourly_fee = get_currency_symbol() . ' ' . $consultationInstructor->hourly_rate . '/h'; @endphp
                                            @endif
                                            <div class="instructor-bottom-item">
                                                <button type="button" data-type="{{ $consultationInstructor->available_type }}" data-booking_instructor_user_id="{{ $consultationInstructor->user_id }}"
                                                        data-hourly_fee="{{ $hourly_fee }}" data-hourly_rate="{{ $consultationInstructor->hourly_rate }}"
                                                        data-get_off_days_route="{{ route('getOffDays', $consultationInstructor->user_id) }}"
                                                        class="theme-btn theme-button1 theme-button3 w-100 bookSchedule"
                                                        data-bs-toggle="modal" data-bs-target="#consultationBookingModal">{{ __('Book Schedule') }}
                                                </button>
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
            <!-- One to one consultation Slider end -->

        </div>
    </section>
    <!-- One to One Consultation Area End -->
@endif
