<!-- FAQ Area Start -->
<section class="faq-area home-page-faq-area section-t-space {{ @$home->faq_area == 1 ? '' : 'd-none' }}">
    <div class="container">

        <!-- FAQ Shape Image Start-->
        <div class="faq-area-shape"></div>
        <!-- FAQ Shape Image End-->

        <div class="row align-items-center">
            <div class="col-md-6 col-lg-6 col-xl-5">

                <div class="section-title">
                    <h3 class="section-heading">{{ __(get_option('faq_title')) }}</h3>
                    <p class="section-sub-heading">{{ __(get_option('faq_subtitle')) }}</p>
                </div>

                <div class="accordion" id="accordionExample">
                    @foreach($faqQuestions as $key => $faqQuestion)
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="heading_{{ $key }}">
                                <button class="accordion-button font-medium font-18 {{ $key == 0 ? '' : 'collapsed' }}" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapse_{{ $key }}"
                                        aria-expanded="{{ $key == 0 ? 'true' : 'false' }}" aria-controls="collapse_{{ $key }}">
                                    {{ $key+1 }}. {{ __($faqQuestion->question) }}
                                </button>
                            </h2>
                            <div id="collapse_{{ $key }}" class="accordion-collapse collapse {{ $key == 0 ? 'show' : '' }}" aria-labelledby="heading_{{ $key }}"
                                 data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    {{ __($faqQuestion->answer) }}
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
            <div class="col-md-6 col-lg-6 col-xl-7">
                <div class="faq-area-right position-relative">
                    <img src="{{ getImageFile(get_option('faq_image')) }}" alt="faq" class="img-fluid">
                    <div class="still-no-luck radius-3 bg-white position-absolute">
                        <h6>{{ __(get_option('faq_image_title')) }}</h6>
                        <p>{{ __('Then feel free to') }} <a href="{{ route('contact') }}"
                                                            class="text-decoration-underline color-heading">{{ __('Contact With Us') }}</a>,
                            {{ __('We are 24/7 for you') }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- FAQ Area End -->
