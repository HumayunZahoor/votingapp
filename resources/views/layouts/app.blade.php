<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'My Laravel App')</title>
    @vite('resources/css/app.css')
</head>
<body class="flex flex-col">

    @include('layouts.menu') 

    <div class="container mx-auto flex-grow p-4">
        @yield('content') 
    </div>

    <footer class=" sticky bottom-0 bg-gray-950 text-white text-center p-4">
        <p>&copy; 2024 My Laravel App</p>
    </footer>
</body>
</html>
