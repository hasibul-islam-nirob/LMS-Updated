<!-- Header Start -->
<header class="hero-area gradient-bg position-relative">
    <div class="section-overlay">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-7 col-lg-5">
                    <div class="hero-content">
                        <h6 class="come-for-learn-text">
                            @foreach(@$home->banner_mini_words_title ?? [] as $banner_mini_word)
                                <span>{{ __($banner_mini_word) }}</span>
                            @endforeach
                        </h6>

                        <div class="text">
                            <h1 class="hero-heading">{{ __(@$home->banner_first_line_title) }}</h1>
                            <h1 class="hero-heading">
                                <span class="main-middle-text">{{ __(@$home->banner_second_line_title) }}</span>
                                @foreach(@$home->banner_second_line_changeable_words ?? [] as $banner_second_line_changeable_word)
                                    <span class="word">{{ __($banner_second_line_changeable_word) }}</span>
                                @endforeach
                            </h1>
                            <h1 class="hero-heading hero-heading-last-word">{{ __(@$home->banner_third_line_title) }}</h1>
                        </div>

                        <p>{{ __(@$home->banner_subtitle) }} </p>
                        <div class="hero-btns">
                            <a href="{{ route('courses') }}" class="theme-btn theme-button1">{{ __('Browse Course') }} <i data-feather="arrow-right"></i></a>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-md-5 col-lg-7">
                    <div class="hero-right-side">
                        <img src="{{ getImageFile(@$home->banner_image) }}" alt="hero-img" class="img-fluid">
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
<!-- Header End -->
