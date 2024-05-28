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
