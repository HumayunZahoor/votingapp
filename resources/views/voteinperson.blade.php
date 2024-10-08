@extends('layouts.app')

@section('title', 'Vote in Person')

@section('content')

<div class="container mx-auto p-4 lg:h-screen h-screen relative">
<div class="absolute top-10 left-0">
    <a href="/" class="bg-indigo-950 text-white py-2 px-4 rounded-lg font-semibold hover:bg-gray-950 transition duration-200">
        <i class="fas fa-arrow-left"></i> 
    </a>
</div>
    <div class="max-w-4xl mx-auto bg-white p-4 rounded-lg shadow-lg">
        <h1 class="text-3xl font-bold text-center mb-6 text-indigo-950">
            <i class="fas fa-map-marker-alt"></i> Where to Vote in Person
        </h1>

        
        <p class="text-lg text-gray-950 mb-6 text-center">
            Select your city to find your nearest polling location.
        </p>

        
        <div class="mb-8">
            <select id="city-select" class="w-full p-2 mb-4 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-indigo-950">
                <option value="">Select a city</option>
                <option value="New York">New York</option>
                <option value="Los Angeles">Los Angeles</option>
                <option value="Chicago">Chicago</option>
            </select>
            <div class="text-center">
                <button id="search-button" class="bg-gray-950 text-white py-2 px-4 rounded-lg font-semibold hover:bg-indigo-950 transition duration-200">
                    Show Locations
                </button>
            </div>
        </div>

       
        <div id="locations-list" class="space-y-6 text-indigo-950">
           
        </div>

    </div>
</div>

<script>
    
    const pollingStations = {
        "New York": [
            { name: "NYC Polling Station 1", address: "123 Main St, New York, NY", hours: "8 AM - 8 PM" },
            { name: "NYC Polling Station 2", address: "456 Park Ave, New York, NY", hours: "8 AM - 8 PM" }
        ],
        "Los Angeles": [
            { name: "LA Polling Station 1", address: "789 Sunset Blvd, Los Angeles, CA", hours: "8 AM - 8 PM" },
            { name: "LA Polling Station 2", address: "321 Hollywood Blvd, Los Angeles, CA", hours: "8 AM - 8 PM" }
        ],
        "Chicago": [
            { name: "Chicago Polling Station 1", address: "234 W State St, Chicago, IL", hours: "8 AM - 8 PM" },
            { name: "Chicago Polling Station 2", address: "567 N Michigan Ave, Chicago, IL", hours: "8 AM - 8 PM" }
        ]
    };

    document.getElementById('search-button').addEventListener('click', function() {
        const city = document.getElementById('city-select').value;

        
        const locationsList = document.getElementById('locations-list');
        locationsList.innerHTML = '';

        if (pollingStations[city]) {
            pollingStations[city].forEach(station => {
                const stationDiv = document.createElement('div');
                stationDiv.className = 'bg-gray-100 p-4 rounded-lg shadow-md';

                stationDiv.innerHTML = `
                    <h2 class="text-xl font-semibold text-indigo-950">${station.name}</h2>
                    <p class="text-gray-950">${station.address}</p>
                    <p class="text-gray-950">Hours: ${station.hours}</p>
                    <div class="mt-2 text-right">
                        <a href="https://maps.google.com?q=${encodeURIComponent(station.address)}" target="_blank" class="text-gray-950 hover:text-indigo-950">View on Map</a>
                    </div>
                `;

                locationsList.appendChild(stationDiv);
            });
        } else {
            locationsList.innerHTML = '<p class="text-center text-gray-600">No polling stations found for this city.</p>';
        }
    });
</script>

@endsection
