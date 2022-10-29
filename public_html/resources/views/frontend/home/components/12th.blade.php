<!-- Course Instructor and Support Area Start -->
<section class="course-instructor-support-area bg-light section-t-space {{ @$home->instructor_support_area == 1 ? '' : 'd-none' }}">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="section-title text-center">
                    <h3 class="section-heading">{{ __(@$aboutUsGeneral->instructor_support_title) }}</h3>
                    <p class="section-sub-heading">{{ __(@$aboutUsGeneral->instructor_support_subtitle) }}</p>
                </div>
            </div>
        </div>
        <div class="row course-instructor-support-wrap">
        @foreach($instructorSupports as $instructorSupport)
            <!-- Instructor Support Item start-->
                <div class="col-md-4">
                    <div class="instructor-support-item bg-white radius-3 text-center">
                        <div class="instructor-support-img-wrap">
                            <img src="{{ getImageFile($instructorSupport->image_path) }}" alt="support">
                        </div>
                        <h6>{{ __($instructorSupport->title) }}</h6>
                        <p>{{ __($instructorSupport->subtitle) }} </p>
                        <a href="{{ $instructorSupport->button_link ?? '#' }}" class="theme-btn theme-button1 theme-button3">{{ __($instructorSupport->button_name) }} <i data-feather="arrow-right"></i></a>
                    </div>
                </div>
                <!-- Instructor Support Item End-->
            @endforeach
        </div>

        <!-- Client Logo Area start-->
        <div class="row client-logo-area">
            @foreach($clients as $client)
                <div class="col">
                    <div class="client-logo-item text-center">
                        <img src="{{ getImageFile($client->image_path) }}" alt="{{ $client->name }}">
                    </div>
                </div>
            @endforeach
        </div>
        <!-- Client Logo Area end-->
    </div>
</section>
<!-- Course Instructor and Support Area End -->
