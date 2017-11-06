@extends('layouts.master')

@section('content')
    @include('partials.home.sliders.2')

    @include('partials.cars.tabs')

    @if('salatalık'==1)
        @include('partials.home.blog')

        @include('partials.home.slogans')

        @include('partials.home.about-us')

        @include('partials.home.testimonials')

        @include('partials.cars.tabs')

        @include('partials.home.counter')

        @include('partials.home.faq')

        @include('partials.cars.search')

        @include('partials.home.newsletters')

        @include('partials.home.customer-service')

        @include('partials.home.contact-us')

    @endif
@endsection