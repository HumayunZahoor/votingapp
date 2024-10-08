@extends('layouts.app')

@section('title', 'Apply')

@section('content')

<div class="container mx-auto p-4 lg:h-screen relative">
<div class="absolute top-10 left-0">
    <a href="/worker" class="bg-indigo-950 text-white py-2 px-4 rounded-lg font-semibold hover:bg-gray-950 transition duration-200">
        <i class="fas fa-arrow-left"></i> 
    </a>
</div>
    <div class="max-w-4xl mx-auto bg-white p-4 rounded-lg shadow-lg">
        <h1 class="text-3xl font-bold text-center mb-6 text-indigo-950">
            <i class="fas fa-user-plus"></i> Apply to Become an Election Worker
        </h1>

        <p class="text-lg  mb-6 text-center">
            Fill out the form below to apply for the position of election worker. Your support is essential for a fair and smooth election process.
        </p>

        <form id="application-form" action="/submit-application" method="POST">
            @csrf
            <div class="mb-4">
                <label for="name" class="block  mb-2">Full Name</label>
                <input type="text" id="name" name="name" required class="w-full p-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-indigo-950" placeholder="Enter your full name">
            </div>

            <div class="mb-4">
                <label for="email" class="block  mb-2">Email Address</label>
                <input type="email" id="email" name="email" required class="w-full p-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-indigo-950" placeholder="Enter your email address">
            </div>

            <div class="mb-4">
                <label for="phone" class="block  mb-2">Phone Number</label>
                <input type="tel" id="phone" name="phone" required class="w-full p-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-indigo-950" placeholder="Enter your phone number">
            </div>

            <div class="mb-4">
                <label for="experience" class="block  mb-2">Relevant Experience</label>
                <textarea id="experience" name="experience" rows="4" class="w-full p-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-indigo-950" placeholder="Describe any relevant experience"></textarea>
            </div>

            <div class="text-center">
                <button type="submit" class="bg-gray-950 text-white py-2 px-4 rounded-lg font-semibold hover:bg-indigo-950 transition duration-200">
                    Submit Application
                </button>
            </div>
        </form>


    </div>
</div>

@endsection
