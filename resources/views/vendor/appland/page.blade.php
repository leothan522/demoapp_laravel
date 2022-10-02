@extends('vendor.appland.master')

@section('main')
    <!-- ======= App Features Section ======= -->
    @include('vendor.appland.components.app_features_section')
    <!-- End App Features Section -->

    <!-- ======= Details Section ======= -->
    @include('vendor.appland.components.details_section')
    <!-- End Details Section -->

    <!-- ======= Gallery Section ======= -->
    @include('vendor.appland.components.gallery_section')
    <!-- End Gallery Section -->

    <!-- ======= Testimonials Section ======= -->
    @include('vendor.appland.components.testimonials_section')
    <!-- End Testimonials Section -->

    <!-- ======= Pricing Section ======= -->
    @include('vendor.appland.components.pricing_section')
    <!-- End Pricing Section -->

    <!-- ======= Frequently Asked Questions Section ======= -->
    @include('vendor.appland.components.frequently_asked_questions_section')
    <!-- End Frequently Asked Questions Section -->
    <!-- ======= Contact Section ======= -->
    @include('vendor.appland.components.contact_section')
    <!-- End Contact Section -->
@endsection
