@extends('layouts.app')

@section('title', 'Register')

@section('content')
<div class="container mx-auto h-screen flex justify-center pt-8 relative">
<div class="absolute top-10 left-0">
    <a href="/" class="bg-indigo-950 text-white py-2 px-4 rounded-lg font-semibold hover:bg-gray-950 transition duration-200">
        <i class="fas fa-arrow-left"></i> 
    </a>
</div>
    <div class="w-full max-w-lg bg-white rounded-lg shadow-lg">
        <h1 class="text-3xl font-bold text-indigo-950 text-center mb-6">
            <i class="fas fa-user"></i> Voter Registration
        </h1>

        <form action="{{ route('register') }}" method="POST" class="space-y-4">
            @csrf

           
            <div>
                <label for="name" class="block text-sm font-medium text-gray-700">Full Name</label>
                <input type="text" id="name" name="name" class="w-full mt-1 p-3 border border-gray-300 rounded-lg shadow-sm focus:ring-gray-950 focus:border-indigo-950" required>
            </div>

      
            <div>
                <label for="email" class="block text-sm font-medium text-gray-700">Email Address</label>
                <input type="email" id="email" name="email" class="w-full mt-1 p-3 border border-gray-300 rounded-lg shadow-sm focus:ring-gray-950 focus:border-indigo-950" required>
            </div>

        
            <div>
                <label for="password" class="block text-sm font-medium text-gray-700">Password</label>
                <input type="password" id="password" name="password" class="w-full mt-1 p-3 border border-gray-300 rounded-lg shadow-sm focus:ring-gray-950 focus:border-indigo-950" required>
            </div>

 
            <div>
                <label for="password_confirmation" class="block text-sm font-medium text-gray-700">Confirm Password</label>
                <input type="password" id="password_confirmation" name="password_confirmation" class="w-full mt-1 p-3 border border-gray-300 rounded-lg shadow-sm focus:ring-gray-950 focus:border-indigo-950" required>
            </div>


            <div class="flex justify-center ">
                <button type="submit" class="bg-gray-950 hover:bg-indigo-950 text-white font-bold py-2 px-4 rounded-lg shadow-md focus:outline-none focus:ring-2 focus:ring-gray-950 focus:border-indigo-950 mt-9">
                    Register Now
                </button>
            </div>
        </form>
        
    </div>
</div>
@endsection
