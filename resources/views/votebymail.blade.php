@extends('layouts.app')

@section('title', 'Vote by Mail')

@section('content')
<div class="container mx-auto p-4 h-fit relative">
<div class="absolute lg:top-10 top-9 left-0 lg:m-0 mr-8">
    <a href="/" class="bg-indigo-950 text-white lg:py-2 lg:px-4 px-2 rounded-lg font-semibold hover:bg-gray-950 transition duration-200">
        <i class="fas fa-arrow-left"></i> 
    </a>
</div>
    <div class="max-w-4xl mx-auto bg-white p-4 rounded-lg shadow-lg">
        <h1 class="lg:text-3xl text-xl font-bold text-indigo-950 text-center mb-6">
            <i class="fas fa-envelope"></i> How to Vote by Mail
        </h1>

        <p class="text-lg text-gray-700 mb-6 text-center">
            Follow these steps to cast your vote by mail:
        </p>

   
        <ol class="list-decimal list-inside space-y-4 text-lg">
            <li>
                <span class="font-semibold">Step 1:</span> Request your mail-in ballot by filling out the 
                <a href="#" class="text-indigo-950 underline text-lg font-serif font-semibold">ballot request form</a> or contact your local election office.
            </li>
            <li>
                <span class="font-semibold">Step 2:</span> Once you receive your ballot, carefully read the instructions included.
            </li>
            <li>
                <span class="font-semibold">Step 3:</span> Mark your choices on the ballot using the specified method (e.g., filling bubbles, marking X).
            </li>
            <li>
                <span class="font-semibold">Step 4:</span> Place your completed ballot in the provided return envelope.
            </li>
            <li>
                <span class="font-semibold">Step 5:</span> Sign and date the envelope as required to certify your vote.
            </li>
            <li>
                <span class="font-semibold">Step 6:</span> Mail your ballot back to the election office. Make sure it’s postmarked by the election day.
            </li>
        </ol>

      
        <div class="mt-8">
            <h2 class="text-2xl font-bold text-gray-900 mb-4">Helpful Tips:</h2>
            <ul class="list-disc list-inside space-y-2 text-lg ">
                <li>Double-check that your ballot is filled out completely and correctly.</li>
                <li>Make sure you sign the envelope where indicated. An unsigned envelope may invalidate your vote.</li>
                <li>Use adequate postage when mailing your ballot.</li>
                <li>Mail your ballot early to ensure it arrives on time.</li>
            </ul>
        </div>

     
        <div class="mt-8 text-center">
            <a href="#" class="bg-gray-950 lg:text-lg text-sm text-white font-semibold py-2 px-4 rounded hover:bg-indigo-950">
                Download Mail-in Ballot Form
            </a>
        </div>
        
    </div>
</div>
@endsection
