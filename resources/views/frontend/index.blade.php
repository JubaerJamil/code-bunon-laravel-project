@extends('frontend.layouts.app')
@section('forntend_content')

    @include('frontend.home.banner-slider');
    @include('frontend.home.intro-about');
    @include('frontend.home.service');
    @include('frontend.home.work-process');
    @include('frontend.home.build-area');
    @include('frontend.home.counter-area');
    @include('frontend.home.call-us-area');
    @include('frontend.home.case-study');
    @include('frontend.home.technology-area');
    @include('frontend.home.brand-area');
    @include('frontend.home.clients-area');
    @include('frontend.home.blog-area');

@endsection
