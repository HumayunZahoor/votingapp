@extends('layouts.app')

@section('title', 'News & Press Release')

@section('content')
<div class="container mx-auto p-8 h-fit relative">
<div class="absolute top-10 left-0">
    <a href="/" class="bg-indigo-950 text-white py-2 px-4 rounded-lg font-semibold hover:bg-gray-950 transition duration-200">
        <i class="fas fa-arrow-left"></i> 
    </a>
</div>
<!-- <div class="max-w-4xl mx-auto bg-white pt-4 rounded-lg shadow-lg"> -->
    <h1 class="text-3xl font-bold text-center mb-6 text-indigo-950">
        <i class="fas fa-newspaper"></i> News & Press Release
    </h1>
    <p class="text-center mb-4">
        Stay updated with the latest news and announcements.
    </p>

    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4 mt-8">
     
        @php
            $newsArticles = [
                [
                    'title' => 'Election Day Reminder',
                    'date' => 'October 8, 2024',
                    'description' => 'Don’t forget to cast your vote on Election Day. Make your voice heard!',
                    'link' => '#'
                ],
                [
                    'title' => 'New Voting Regulations Announced',
                    'date' => 'September 15, 2024',
                    'description' => 'Important changes have been made to the voting regulations. Please check the details.',
                    'link' => '#'
                ],
                [
                    'title' => 'Candidate Debates Scheduled',
                    'date' => 'August 22, 2024',
                    'description' => 'Join us for the upcoming candidate debates to hear their plans for our community.',
                    'link' => '#'
                ],
                [
                    'title' => 'Voter Registration Deadline Approaching',
                    'date' => 'September 30, 2024',
                    'description' => 'Make sure you’re registered to vote by the deadline! Check your registration status today.',
                    'link' => '#'
                ],
                [
                    'title' => 'How to Vote by Mail',
                    'date' => 'October 1, 2024',
                    'description' => 'Learn the steps to vote by mail and ensure your vote counts this election.',
                    'link' => '#'
                ],
                [
                    'title' => 'Polling Station Hours Extended',
                    'date' => 'October 5, 2024',
                    'description' => 'Certain polling stations will have extended hours to accommodate more voters. Check the list!',
                    'link' => '#'
                ],
                [
                    'title' => 'Vote Safe: Health Guidelines for Polling Places',
                    'date' => 'October 3, 2024',
                    'description' => 'Follow these health guidelines to ensure a safe voting experience at the polls.',
                    'link' => '#'
                ],
                [
                    'title' => 'Early Voting Starts Soon',
                    'date' => 'October 2, 2024',
                    'description' => 'Early voting will begin on October 10. Find your early voting location today!',
                    'link' => '#'
                ],
                [
                    'title' => 'Understanding the Voting Process',
                    'date' => 'September 28, 2024',
                    'description' => 'Get informed about the voting process and what to expect on Election Day.',
                    'link' => '#'
                ],
            ];
        @endphp

        @foreach ($newsArticles as $article)
            <div class="bg-white p-4 rounded-lg shadow-md hover:shadow-lg transition-shadow duration-200">
                <h2 class="text-xl font-semibold">{{ $article['title'] }}</h2>
                <p class="text-sm">{{ $article['date'] }}</p>
                <p class="mt-2 ">{{ $article['description'] }}</p>
                <div class="mt-4 text-right">
                    <a href="{{ $article['link'] }}" class="text-indigo-950 hover:text-gray-950 font-semibold">
                        Read More
                    </a>
                </div>
            </div>
        @endforeach
    </div>
        <!-- </div> -->
</div>
@endsection
