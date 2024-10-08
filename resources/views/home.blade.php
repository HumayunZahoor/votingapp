@extends('layouts.app')

@section('title', 'Home')

@section('content')
    <div class="container mx-auto pt-4">
        <div class="flex px-3 py-3 bg-gradient-to-r from-indigo-950 to-gray-950 rounded-xl">
            <h1 class="text-base font-serif font-semibold text-white">We are open by appointment only</h1>
            <span class="text-base font-serif text-white ml-3 mr-3">/</span>
            <h1 class="text-base font-serif text-white">Please call 0900-7860110 to schedule an appointment</h1>
        </div>

        <div class="bg-gradient-to-r from-gray-950 to-indigo-950 text-white text-center rounded-lg p-8 mb-8">
            <h1 class="text-4xl font-bold">Make Your Voice Heard</h1>
            <p class="mt-4 text-lg">Participate in the democratic process and shape the future of your community.</p>
            <a href="{{ route('vote') }}" class="mt-6 inline-block bg-white text-gray-900 font-semibold py-2 px-4 rounded shadow hover:bg-gray-200 transition duration-300">
                Get Started
            </a>
        </div>

        <h1 class="text-3xl font-bold text-red-700 mb-4">Why Voting Matters..?</h1>
        <p class="mb-8 font-serif text-lg">Voting is not just a right; it is a responsibility. Here’s why your vote counts:</p>

        <div class="grid grid-cols-2 md:grid-cols-2 lg:grid-cols-4 gap-4 text-indigo-950">
            <div class="bg-white p-6 rounded-lg shadow-lg transition-transform transform hover:scale-105 border-2 border-indigo-500 border-opacity-50 ">
                <a href="{{ route('register') }}">
                    <div class="flex justify-center">
                        <img src="{{ asset('images/vote.png') }}" alt="Empowerment Through Participation" class="w-48 h-40 object-fit rounded mb-3">
                    </div>
                    <h2 class="text-xl font-semibold text-center">Registration</h2>
                </a>
            </div>

            <div class="bg-white p-6 rounded-lg shadow-lg transition-transform transform hover:scale-105 border-2 border-indigo-500 border-opacity-50">
                <a href="{{ route('votebymail') }}">
                    <div class="flex justify-center">
                        <img src="{{ asset('images/vote.png') }}" alt="Empowerment Through Participation" class="w-48 h-40 object-fit rounded mb-3">
                    </div>
                    <h2 class="text-xl font-semibold text-center">How to Vote by Mail</h2>
                </a>
            </div>

            <div class="bg-white p-6 rounded-lg shadow-lg transition-transform transform hover:scale-105 border-2 border-indigo-500 border-opacity-50">
                <a href="{{ route('result') }}">
                    <div class="flex justify-center">
                        <img src="{{ asset('images/vote.png') }}" alt="Empowerment Through Participation" class="w-48 h-40 object-fit rounded mb-3">
                    </div>
                    <h2 class="text-xl font-semibold text-center">Election Results</h2>
                </a>
            </div>

            <div class="bg-white p-6 rounded-lg shadow-lg transition-transform transform hover:scale-105 border-2 border-indigo-500 border-opacity-50">
                <a href="{{ route('ballot') }}">
                    <div class="flex justify-center">
                        <img src="{{ asset('images/vote.png') }}" alt="Empowerment Through Participation" class="w-48 h-40 object-fit rounded mb-3">
                    </div>
                    <h2 class="text-xl font-semibold text-center">What's on the Ballot</h2>
                </a>
            </div>

            <div class="bg-white p-6 rounded-lg shadow-lg transition-transform transform hover:scale-105 border-2 border-indigo-500 border-opacity-50">
                <a href="{{ route('voteinperson') }}">
                    <div class="flex justify-center">
                        <img src="{{ asset('images/vote.png') }}" alt="Empowerment Through Participation" class="w-48 h-40 object-fit rounded mb-3">
                    </div>
                    <h2 class="text-xl font-semibold text-center">Where to Vote in Person</h2>
                </a>
            </div>

            <div class="bg-white p-6 rounded-lg shadow-lg transition-transform transform hover:scale-105 border-2 border-indigo-500 border-opacity-50">
                <a href="{{ route('worker') }}">
                    <div class="flex justify-center">
                        <img src="{{ asset('images/vote.png') }}" alt="Empowerment Through Participation" class="w-48 h-40 object-fit rounded mb-3">
                    </div>
                    <h2 class="text-xl font-semibold text-center">Become an Election Worker</h2>
                </a>
            </div>

            <div class="bg-white p-6 rounded-lg shadow-lg transition-transform transform hover:scale-105 border-2 border-indigo-500 border-opacity-50">
                <a href="{{ route('campaign') }}">
                    <div class="flex justify-center">
                        <img src="{{ asset('images/vote.png') }}" alt="Empowerment Through Participation" class="w-48 h-40 object-fit rounded mb-3">
                    </div>
                    <h2 class="text-xl font-semibold text-center">Campaign Resources</h2>
                </a>
            </div>

            <div class="bg-white p-6 rounded-lg shadow-lg transition-transform transform hover:scale-105 border-2 border-indigo-500 border-opacity-50">
                <a href="{{ route('news') }}">
                    <div class="flex justify-center">
                        <img src="{{ asset('images/vote.png') }}" alt="Empowerment Through Participation" class="w-48 h-40 object-fit rounded mb-3">
                    </div>
                    <h2 class="text-xl font-semibold text-center">News & Press Release</h2>
                </a>
            </div>
        </div>
    </div>
@endsection
