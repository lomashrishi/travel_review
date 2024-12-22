@extends('includes.layout')

@section('title', 'Home || Travel Remarks')

@section('content')

    {{-- Mission --}}
    @include('includes.mission')

    {{-- Vission --}}
    @include('includes.vission')

    {{-- About-Us --}}
    @include('includes.about')

    {{-- Testimonials --}}
    @include('includes.testimonials')

    {{-- Services --}}
    @include('includes.services')

    {{-- Contact --}}
    @include('includes.contact')



@endsection
