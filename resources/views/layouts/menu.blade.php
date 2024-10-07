<nav class="bg-gray-900 p-4">
    <div class="flex items-center justify-between">
        <h1 class="text-xl text-white font-semibold font-serif flex items-center">
            <img src="{{ asset('images/logo.jpg') }}" alt="Logo" class="w-8 h-8 mr-3 rounded-full">
            <span class="text-red-600">V</span>ote 
            <span class="text-red-600">N</span>ow
        </h1>
        <div class="md:hidden">
            <button id="menu-toggle" class="text-white focus:outline-none">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7"></path>
                </svg>
            </button>
        </div>
        <ul id="menu" class="hidden md:flex items-center space-x-4">
            <li>
                <a class="text-white font-semibold text-lg font-serif py-2 px-4 rounded hover:bg-indigo-950 transition duration-200" href="{{ route('home') }}">
                    Home
                </a>
            </li>
            <li>
                <a class="text-white font-semibold text-lg font-serif py-2 px-4 rounded hover:bg-indigo-950 transition duration-200" href="{{ route('about') }}">
                    About Us
                </a>
            </li>
            <li>
                <a class="text-white font-semibold text-lg font-serif py-2 px-4 rounded hover:bg-indigo-950 transition duration-200" href="{{ route('contact') }}">
                    Contact Us
                </a>
            </li>
        </ul>
    </div>
    
    <ul id="dropdown-menu" class="hidden flex-col mt-2 space-y-2 md:hidden">
        <li>
            <a class="text-white font-semibold text-lg font-serif py-2 px-4 rounded hover:bg-indigo-950 transition duration-200" href="{{ route('home') }}">
                Home
            </a>
        </li>
        <li>
            <a class="text-white font-semibold text-lg font-serif py-2 px-4 rounded hover:bg-indigo-950 transition duration-200" href="{{ route('about') }}">
                About Us
            </a>
        </li>
        <li>
            <a class="text-white font-semibold text-lg font-serif py-2 px-4 rounded hover:bg-indigo-950 transition duration-200" href="{{ route('contact') }}">
                Contact Us
            </a>
        </li>
        <li>
            <a class="text-white font-semibold text-lg font-serif py-2 px-4 rounded hover:bg-indigo-950 transition duration-200" href="{{ route('project') }}">
                Projects
            </a>
        </li>
    </ul>
</nav>

<script>
    
    document.getElementById('menu-toggle').addEventListener('click', function() {
        const menu = document.getElementById('dropdown-menu');
        menu.classList.toggle('hidden');
    });
</script>
