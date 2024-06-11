@extends('layouts.app')
@section('content')
    <!--------trustpilot---------->
    @include('inc.trustpilot')
    <!--------trustpilot---------->
    <!--------feature------------->
    @include('inc.feature')
    <!--------feature------------->
    <!--------About Us start------>
    @include('inc.aboutus')
    <!--------About Us end-------->
    <!--------Our Services start-->
    @include('inc.service')
    <!--------Our Services end---->
    <!-------why chose us start -->
    @include('inc.whychuse')
    <!-------why chose us  end --->
    <!-------Testmonial start----->
    @include('inc.faq')
    <!-------Testmonial end------->
    <!-------FAQ Section --------->
    @include('inc.testmonial')
    <!-------FAQ Section -------->
    <!-------OurPricing section-->
    @include('inc.pricing')
    <!------Our Pricing section-->
    <!------Our Benifites ------->
    @include('inc.benifite')
    <!------Our Benifites ------->
    <!------Our contact --------->
    @include('inc.contact')
    <!------Our contact --------->
    <!------Our blog ------------>
    @include('inc.blog')
    <!------Our blog ------------>
@endsection


@push('styles')
    <link rel="stylesheet" href="{{ asset('css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/owl.theme.default.min.css') }}">
@endpush

@push('scripts')
    <script src="https://code.jquery.com/jquery-3.6.1.min.js"></script>
    <script src="{{ asset('js/owl.carousel.min.js') }}"></script>
    <script>
        $(document).ready(function() {
            // Feature Slider
            $('#featureOwlSlider').owlCarousel({
                loop: true,
                margin: 10,
                nav: false,
                dots: true,
                responsive: {
                    0: {
                        items: 1
                    },
                    600: {
                        items: 3
                    },
                    1000: {
                        items: 3
                    }
                }
            })
            // Servie Slider
            $('#servicesslider').owlCarousel({
                loop: true,
                margin: 10,
                nav: false,
                dots: true,
                responsive: {
                    0: {
                        items: 1
                    },
                    600: {
                        items: 3
                    },
                    1000: {
                        items: 3
                    }
                }
            })
            // Testmonial Slider
            $('#testmonialslider').owlCarousel({
                loop: true,
                margin: 10,
                nav: false,
                dots: true,
                responsive: {
                    0: {
                        items: 1
                    },
                    600: {
                        items: 2
                    },
                    1000: {
                        items: 3
                    }
                }
            })

            // Blog Slider
            $('#blogslider').owlCarousel({
            loop: true,
            margin: 10,
            nav: false,
            dots:true,
            responsive: {
                0: {
                    items: 1
                },
                600: {
                    items: 3
                },
                1000: {
                    items: 3
                }
            }
        })
        });
    </script>
@endpush
