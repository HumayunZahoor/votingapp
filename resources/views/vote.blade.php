@extends('layouts.app')

@section('title', 'Vote')

@section('content')

<div class="container mx-auto p-4 lg:h-screen relative">
<div class="absolute top-10 left-0">
    <a href="/ballot" class="bg-indigo-950 text-white py-2 px-4 rounded-lg font-semibold hover:bg-gray-950 transition duration-200">
        <i class="fas fa-arrow-left"></i> 
    </a>
</div>
<div class="max-w-4xl mx-auto bg-white p-4 rounded-lg shadow-lg">
<h1 class="text-3xl font-bold text-indigo-950 text-center mb-6">
<i class="fas fa-vote-yea"></i>  Cast Your Vote
        </h1>
    <p class="text-center mb-4">You can cast your vote here</p>

    
    <form class="mt-8">
        @csrf 
        <div class="grid grid-cols-2 md:grid-cols-2 lg:grid-cols-3 gap-4">
            @php
                // Static data for participating parties
                $parties = [
                    [
                        'id' => 1,
                        'name' => 'Party A',
                        'symbol' => 'partyA.png',
                    ],
                    [
                        'id' => 2,
                        'name' => 'Party B',
                        'symbol' => 'partyA.png',
                    ],
                    [
                        'id' => 3,
                        'name' => 'Party C',
                        'symbol' => 'partyA.png',
                    ],
                ];
            @endphp

            @foreach ($parties as $party)
                <div class="bg-white p-4 rounded-lg shadow-md transition-transform transform hover:scale-105">
                    <img src="{{ asset('images/' . $party['symbol']) }}" alt="{{ $party['name'] }}" class="w-full h-48 object-fit rounded mb-2">
                    <h2 class="text-xl font-semibold">{{ $party['name'] }}</h2>
                    <input type="radio" name="party_id" value="{{ $party['id'] }}" id="party-{{ $party['id'] }}" class="mt-2">
                    <label for="party-{{ $party['id'] }}" class="ml-2">Select</label>
                </div>
            @endforeach
        </div>
        <div class="mt-6 text-center">
            <button type="submit" class="bg-gray-900 text-white font-semibold text-lg font-serif py-2 px-4 rounded hover:bg-gray-900 transition-transform transform hover:scale-105 duration-200 ">
                Cast Vote
            </button>
        </div>
    </form>
</div>
</div>

@endsection
