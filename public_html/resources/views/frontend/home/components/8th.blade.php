<!-- Video Area Start -->
<section class="video-area {{ @$home->video_area == 1 ? '' : 'd-none' }}">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-6 col-lg-7 col-xl-8">
                <div class="video-area-left position-relative d-flex align-items-center justify-content-center">
                    <img src="{{ getImageFile(get_option('become_instructor_video_preview_image')) }}" alt="video" class="img-fluid">
                    <button type="button" class="play-btn position-absolute" data-bs-toggle="modal" data-bs-target="#newVideoPlayerModal">
                        <img src="{{ asset('frontend/assets/img/icons-svg/play.svg') }}" alt="play">
                    </button>
                </div>
            </div>
            <div class="col-md-6 col-lg-5 col-xl-4">
                <div class="video-area-right position-relative">
                    <div class="section-title">
                        <h3 class="section-heading">{{ Str::limit(__(get_option('become_instructor_video_title')), 100) }}</h3>
                    </div>

                    <div class="video-floating-img-wrap pe-2 position-relative">
                        <p>{{ Str::limit(get_option('become_instructor_video_subtitle'), 450) }}</p>
                        <img src="{{ getImageFile(get_option('become_instructor_video_logo')) }}" alt="video" class="position-absolute">
                    </div>

                    <!-- section button start-->
                    <div class="col-12 section-btn">
                        <a href="{{ route('student.become-an-instructor') }}" class="theme-btn theme-button1">{{ __('Become an Instructor') }} <i
                                data-feather="arrow-right"></i></a>
                    </div>
                    <!-- section button end-->
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Video Area End -->
