@extends('layouts.app')

@section('title', 'Home')

@section('content')
    <div class="container mx-auto p-4 ">
        
        <div class="bg-gradient-to-r from-gray-950 to-indigo-950 text-white text-center rounded-lg p-8 mb-8">
            <h1 class="text-4xl font-bold">Make Your Voice Heard</h1>
            <p class="mt-4 text-lg">Participate in the democratic process and shape the future of your community.</p>
            <a href="{{ route('vote') }}" class="mt-6 inline-block bg-white text-gray-900 font-semibold py-2 px-4 rounded shadow hover:bg-gray-200 transition duration-300">
                Get Started
            </a>
        </div>

        <h1 class="text-3xl font-bold text-red-700 mb-4">Why Voting Matters..?</h1>
        <p class="mb-8">Voting is not just a right; it is a responsibility. Here’s why your vote counts:</p>

        <div class="grid grid-cols-2 md:grid-cols-2 lg:grid-cols-4 gap-4">
            
            <div class="bg-white p-4 rounded-lg shadow-md transition-transform transform hover:scale-105">
                <img src="{{ asset('images/vote.png') }}" alt="Empowerment Through Participation" class="w-full h-48 object-fit rounded mb-2">
                <h2 class="text-xl font-semibold">Empowerment Through Participation</h2>
                <p>Voting empowers citizens to express their beliefs and shape policies, promoting agency within society.</p>
            </div>
           
            <div class="bg-white p-4 rounded-lg shadow-md transition-transform transform hover:scale-105">
                <img src="{{ asset('images/vote.png') }}" alt="A Reflection of Democracy" class="w-full h-48 object-fit rounded mb-2">
                <h2 class="text-xl font-semibold">A Reflection of Democracy</h2>
                <p>Voting is the cornerstone of democracy, reflecting the collective will of the people and holding officials accountable.</p>
            </div>
            
            <div class="bg-white p-4 rounded-lg shadow-md transition-transform transform hover:scale-105">
                <img src="{{ asset('images/vote.png') }}" alt="Advocating for Change" class="w-full h-48 object-fit rounded mb-2">
                <h2 class="text-xl font-semibold">Advocating for Change</h2>
                <p>Voting enables marginalized communities to voice their concerns and influence policies for social justice.</p>
            </div>
            
            <div class="bg-white p-4 rounded-lg shadow-md transition-transform transform hover:scale-105">
                <img src="{{ asset('images/vote.png') }}" alt="Building a Better Future" class="w-full h-48 object-fit rounded mb-2">
                <h2 class="text-xl font-semibold">Building a Better Future</h2>
                <p>Engaging in voting shapes the future by choosing leaders who align with the aspirations of the electorate.</p>
            </div>
        </div>
    </div>
@endsection
