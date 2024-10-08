@extends('layouts.app')

@section('title', 'Election Worker')

@section('content')

<div class="container mx-auto p-4 h-fit relative">
<div class="absolute top-10 left-0">
    <a href="/" class="bg-indigo-950 text-white py-2 px-4 rounded-lg font-semibold hover:bg-gray-950 transition duration-200">
        <i class="fas fa-arrow-left"></i> 
    </a>
</div>
    <div class="max-w-4xl mx-auto bg-white p-4 rounded-lg shadow-lg">
        <h1 class="text-3xl font-bold text-center mb-6 text-indigo-950">
            <i class="fas fa-briefcase "></i> Become an Election Worker
        </h1>

        <p class="text-lg mb-6 text-center">
            Join us in making a difference! Become an election worker and play a vital role in the democratic process.
        </p>

        <section class="mb-8">
            <h2 class="text-2xl font-semibold mb-4">What is an Election Worker?</h2>
            <p class=" mb-4">
                Election workers, also known as poll workers, are responsible for ensuring that the election process runs smoothly. They help set up polling places, assist voters, and ensure compliance with election laws.
            </p>
        </section>

        <section class="mb-8">
            <h2 class="text-2xl font-semibold mb-4">Benefits of Being an Election Worker</h2>
            <ul class="list-disc list-inside ">
                <li>Earn extra income for your time and efforts.</li>
                <li>Gain valuable experience and insights into the electoral process.</li>
                <li>Make a difference in your community by helping ensure fair elections.</li>
                <li>Meet new people and engage with your community.</li>
            </ul>
        </section>

        <section class="mb-8">
            <h2 class="text-2xl font-semibold mb-4">Requirements to Become an Election Worker</h2>
            <p class=" mb-4">
                To be eligible to work as an election worker, you must meet the following requirements:
            </p>
            <ul class="list-disc list-inside ">
                <li>Be at least 18 years old or a high school student (check local regulations).</li>
                <li>Be a registered voter in the jurisdiction where you will work.</li>
                <li>Attend training sessions prior to the election.</li>
            </ul>
        </section>

        <div class="text-center">
            <a href="/apply" class="bg-gray-950 text-white py-2 px-4 rounded-lg font-semibold hover:bg-indigo-950 transition duration-200">
                Apply to Become an Election Worker
            </a>
        </div>

    </div>
</div>

@endsection
