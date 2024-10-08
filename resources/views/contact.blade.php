@extends('layouts.app')

@section('title', 'Contact Us')

@section('content')
<div class="container mx-auto h-screen flex flex-col pt-8 relative">
    <div class="absolute top-10 left-0">
        <a href="/" class="bg-indigo-950 text-white py-2 px-4 rounded-lg font-semibold hover:bg-gray-950 transition duration-200">
            <i class="fas fa-arrow-left"></i> 
        </a>
    </div>
    
    <h1 class="text-3xl font-bold text-indigo-950 text-center mb-6">
        <i class="fas fa-envelope"></i> Contact Us
    </h1>
    <p class="text-center mb-4">We'd love to hear from you! Please fill out the form below to get in touch.</p>

    <div class="w-full max-w-lg mx-auto bg-white rounded-lg shadow-lg p-8">
        <form id="contact-form">
            <div>
                <label for="name" class="block text-sm font-medium text-gray-700">Full Name</label>
                <input type="text" id="name" name="name" required class="w-full mt-1 p-3 border border-gray-300 rounded-lg shadow-sm focus:ring-gray-950 focus:border-indigo-950" placeholder="Your Name">
            </div>

            <div class="mt-4">
                <label for="email" class="block text-sm font-medium text-gray-700">Email Address</label>
                <input type="email" id="email" name="email" required class="w-full mt-1 p-3 border border-gray-300 rounded-lg shadow-sm focus:ring-gray-950 focus:border-indigo-950" placeholder="Your Email">
            </div>

            <div class="mt-4">
                <label for="message" class="block text-sm font-medium text-gray-700">Message</label>
                <textarea id="message" name="message" required class="w-full mt-1 p-3 border border-gray-300 rounded-lg shadow-sm focus:ring-gray-950 focus:border-indigo-950" rows="4" placeholder="Your Message"></textarea>
            </div>

            <div class="flex justify-center mt-6">
                <button type="submit" class="bg-gray-950 hover:bg-indigo-950 text-white font-bold py-2 px-4 rounded-lg shadow-md focus:outline-none focus:ring-2 focus:ring-gray-950 focus:border-indigo-950">
                    Send Message
                </button>
            </div>
        </form>

        <div id="success-message" class="mt-4 hidden text-green-600 text-center">
            Your message has been sent successfully!
        </div>
    </div>
</div>

<script>
    document.getElementById('contact-form').addEventListener('submit', function(e) {
        e.preventDefault();

        document.getElementById('success-message').classList.remove('hidden');
        this.reset(); 
    });
</script>
@endsection
