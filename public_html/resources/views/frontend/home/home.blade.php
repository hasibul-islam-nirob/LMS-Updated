@extends('frontend.layouts.app')

@section('content')

    @include('frontend.home.components.1st')
    @include('frontend.home.components.2nd')
    @include('frontend.home.components.3rd')
    @include('frontend.home.components.4th')
    @include('frontend.home.components.5th')
    @include('frontend.home.components.6th')
    @include('frontend.home.components.7th')
    @include('frontend.home.components.8th')
    @include('frontend.home.components.9th')
    @include('frontend.home.components.10th')
    @include('frontend.home.components.11th')
    @include('frontend.home.components.12th')

    @include('frontend.home.partial.consultation-booking-schedule-modal')

    @include('frontend.home.components.13th')

@endsection

@push('style')
    <!-- Video Player css -->
    <link rel="stylesheet" href="{{ asset('frontend/assets/vendor/video-player/plyr.css') }}">
@endpush

@push('script')
    <!--Hero text effect-->
    <script src="{{ asset('frontend/assets/js/hero-text-effect.js') }}"></script>

    <script src="{{ asset('frontend/assets/js/course/addToCart.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/course/addToWishlist.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/custom/booking.js') }}"></script>

    <!-- Video Player js -->
    <script src="{{ asset('frontend/assets/vendor/video-player/plyr.js') }}"></script>
    <script>
        const zai_player = new Plyr('#player');
    </script>
    <!-- Video Player js -->
@endpush
