@extends('layouts.app')

@section('title', `What's on the Ballot`)

@section('content')

<div class="container mx-auto p-4 h-fit relative">
<div class="absolute lg:top-10 left-0 top-9 lg:mr-0 mr-8">
    <a href="/" class="bg-indigo-950 text-white lg:py-2 lg:px-4 px-2 rounded-lg font-semibold hover:bg-gray-950 transition duration-200">
        <i class="fas fa-arrow-left"></i> 
    </a>
</div>
    <div class="max-w-4xl mx-auto bg-white p-4 rounded-lg shadow-lg">
        <h1 class="lg:text-3xl text-xl font-bold text-indigo-950 text-center mb-6">
            <i class="fas fa-list"></i> What's on the Ballot
        </h1>

        
        <p class="text-lg mb-6 text-center">
            Find out what candidates, issues, and propositions are up for vote in this election.
        </p>

        <div class="space-y-12">

           
            <section class="border-b pb-8">
                <h2 class="text-2xl font-semibold mb-4 text-gray-950">Candidates</h2>
                <ul class="space-y-4">
                    <li class="flex items-center justify-between">
                        <div>
                            <h3 class="text-lg font-semibold">John Doe (Party A)</h3>
                            <p class="text-gray-600">Running for Mayor</p>
                        </div>
                        <a href="#" class="text-gray-950 hover:text-indigo-950">View Profile</a>
                    </li>
                    <li class="flex items-center justify-between">
                        <div>
                            <h3 class="text-lg font-semibold">Jane Smith (Party B)</h3>
                            <p class="text-gray-600">Running for City Council</p>
                        </div>
                        <a href="#" class="text-gray-950 hover:text-indigo-950">View Profile</a>
                    </li>
                    <li class="flex items-center justify-between">
                        <div>
                            <h3 class="text-lg font-semibold">Michael Brown (Party C)</h3>
                            <p class="text-gray-600">Running for Governor</p>
                        </div>
                        <a href="#" class="text-gray-950 hover:text-indigo-950">View Profile</a>
                    </li>
                </ul>
            </section>

            
            <section class="border-b pb-8">
                <h2 class="text-2xl font-semibold mb-4 text-gray-900">Propositions</h2>
                <ul class="space-y-4">
                    <li class="flex items-center justify-between">
                        <div>
                            <h3 class="text-lg font-semibold">Proposition 1</h3>
                            <p class="text-gray-600">Increase funding for public schools</p>
                        </div>
                        <a href="#" class="text-gray-950 hover:text-indigo-950">Read More</a>
                    </li>
                    <li class="flex items-center justify-between">
                        <div>
                            <h3 class="text-lg font-semibold">Proposition 2</h3>
                            <p class="text-gray-600">Legalize recreational cannabis use</p>
                        </div>
                        <a href="#" class="text-gray-950 hover:text-indigo-950">Read More</a>
                    </li>
                </ul>
            </section>

           
            <section>
                <h2 class="text-2xl font-semibold mb-4 text-gray-900">Local Issues</h2>
                <ul class="space-y-4">
                    <li class="flex items-center justify-between">
                        <div>
                            <h3 class="text-lg font-semibold">Issue 1: Road Infrastructure</h3>
                            <p class="text-gray-600">Proposal to allocate funds for repairing roads and bridges.</p>
                        </div>
                        <a href="#" class="text-gray-950 hover:text-indigo-950">Learn More</a>
                    </li>
                    <li class="flex items-center justify-between">
                        <div>
                            <h3 class="text-lg font-semibold">Issue 2: Public Health Services</h3>
                            <p class="text-gray-600">Expansion of local public health services and facilities.</p>
                        </div>
                        <a href="#" class="text-gray-950 hover:text-indigo-950">Learn More</a>
                    </li>
                </ul>
            </section>
        </div>

        <div class="mt-14 text-center">
            <a href="/vote" class="bg-gray-950 text-white font-semibold py-2 px-4 rounded hover:bg-indigo-950">
                Proceed to Vote
            </a>
        </div>
    </div>
</div>

@endsection
