@extends('layouts.app')

@section('title', 'Campaign Resources')

@section('content')

<div class="container mx-auto p-4 lg:h-screen relative">
<div class="absolute lg:top-10 top-9 left-0 lg:mr-0 mr-8">
    <a href="/" class="bg-indigo-950 text-white lg:y-2 lg:px-4 px-2 rounded-lg font-semibold hover:bg-gray-950 transition duration-200">
        <i class="fas fa-arrow-left"></i> 
    </a>
</div>
    <div class="max-w-4xl mx-auto bg-white p-4 rounded-lg shadow-lg">
        <h1 class="lg:text-3xl text-xl font-bold text-center mb-6 text-indigo-950">
            <i class="fas fa-bullhorn"></i> Campaign Resources
        </h1>

   
        <p class="text-lg text-gray-700 mb-6 text-center">
            Explore the resources below to support your campaign efforts. Whether you're looking for guides, templates, or other helpful materials, we have you covered.
        </p>


        <div class="mb-8">
            <h2 class="text-2xl font-semibold mb-4">Campaign Guides</h2>
            <ul class="list-disc list-inside space-y-2">
                <li>
                    <a href="/resources/campaign-guide.pdf" class="text-indigo-600 hover:underline">Complete Campaign Guide</a>
                </li>
                <li>
                    <a href="/resources/social-media-strategy.pdf" class="text-indigo-600 hover:underline">Social Media Strategy Guide</a>
                </li>
                <li>
                    <a href="/resources/voter-engagement.pdf" class="text-indigo-600 hover:underline">Voter Engagement Tips</a>
                </li>
            </ul>
        </div>

        <div class="mb-8">
            <h2 class="text-2xl font-semibold mb-4">Pamphlets & Flyers</h2>
            <ul class="list-disc list-inside space-y-2">
                <li>
                    <a href="/resources/pamphlet-template.docx" class="text-indigo-600 hover:underline">Pamphlet Template</a>
                </li>
                <li>
                    <a href="/resources/flyer-design.pdf" class="text-indigo-600 hover:underline">Flyer Design Guide</a>
                </li>
                <li>
                    <a href="/resources/voter-information-flyer.pdf" class="text-indigo-600 hover:underline">Voter Information Flyer</a>
                </li>
            </ul>
        </div>

        <div class="mb-8">
            <h2 class="text-2xl font-semibold mb-4">Useful Links</h2>
            <ul class="list-disc list-inside space-y-2">
                <li>
                    <a href="https://www.vote.org" target="_blank" class="text-indigo-600 hover:underline">Vote.org - Check Your Registration</a>
                </li>
                <li>
                    <a href="https://www.nass.org/can-I-vote" target="_blank" class="text-indigo-600 hover:underline">Can I Vote? - National Association of Secretaries of State</a>
                </li>
                <li>
                    <a href="https://www.usa.gov/election-office" target="_blank" class="text-indigo-600 hover:underline">Find Your Local Election Office</a>
                </li>
            </ul>
        </div>

    </div>
</div>

@endsection
