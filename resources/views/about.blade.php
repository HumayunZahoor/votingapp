@extends('layouts.app')

@section('title', 'About Us')

@section('content')
<div class="container mx-auto h-screen flex flex-col pt-8 relative">
    <div class="absolute lg:top-10 top-9 left-0 lg:mr-0 mr-8">
        <a href="/" class="bg-indigo-950 text-white lg:py-2 lg:px-4 px-2 rounded-lg font-semibold hover:bg-gray-950 transition duration-200">
            <i class="fas fa-arrow-left"></i> 
        </a>
    </div>
    
    <h1 class="lg:text-3xl text-xl font-bold text-indigo-950 text-center mb-6">
        <i class="fas fa-info-circle"></i> About Us
    </h1>
    <p class="text-center mb-4">Learn more about our mission and the team behind our efforts.</p>

    <div class="w-full max-w-3xl mx-auto bg-white rounded-lg shadow-lg p-8">
        <h2 class="text-xl font-semibold text-indigo-950 mb-4">Our Mission</h2>
        <p class="mb-4">We strive to ensure that every eligible voter has the opportunity to cast their vote and have their voice heard in the democratic process. Our team is dedicated to providing comprehensive resources and support to facilitate this important civic duty.</p>

        <h2 class="text-xl font-semibold text-indigo-950 mb-4">Our Team</h2>
        <p class="mb-4">Our team consists of dedicated professionals and volunteers who are passionate about making a difference in the community. We believe in transparency, accountability, and empowerment for all voters.</p>

        <h2 class="text-xl font-semibold text-indigo-950 mb-4">Get Involved</h2>
        <p class="mb-4">Join us in our mission! Whether you want to volunteer, become an election worker, or simply spread the word, we welcome your support. Together, we can make a difference.</p>
    </div>
</div>
@endsection
