<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Tailwind CSS CDN (لضمان ظهور التنسيقات فوراً بدون الحاجة لبناء Vite) -->
        <script src="https://cdn.tailwindcss.com"></script>
    </head>
    <body class="bg-gray-100 dark:bg-gray-900 text-gray-800 dark:text-gray-200 antialiased min-h-screen flex flex-col justify-center items-center p-6">
        
        <!-- Header Links -->
        <div class="fixed top-0 right-0 p-6 text-right z-10">
            @if (Route::has('login'))
                <nav class="flex space-x-4 rtl:space-x-reverse">
                    @auth
                        <a href="{{ url('/dashboard') }}" class="font-semibold hover:text-gray-600 dark:hover:text-white">Dashboard</a>
                    @else
                        <a href="{{ route('login') }}" class="font-semibold hover:text-gray-600 dark:hover:text-white">Log in</a>
                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 font-semibold hover:text-gray-600 dark:hover:text-white">Register</a>
                        @endif
                    @endauth
                </nav>
            @endif
        </div>

        <!-- Main Card Content -->
        <div class="max-w-xl w-full bg-white dark:bg-gray-800 rounded-xl shadow-lg p-8 text-center border border-gray-200 dark:border-gray-700">
            <div class="flex justify-center mb-6">
                <svg class="h-16 w-auto text-red-600" viewBox="0 0 62 65" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M61.8548 14.6253C61.8768 14.7102 61.8884 14.7978 61.8884 14.8858V49.8858C61.8884 50.1837 61.7583 50.4658 61.5332 50.6607L46.5332 63.6607C46.2976 63.8647 45.9897 63.9767 45.6715 63.9719C45.3533 63.9671 45.0512 63.8458 44.8284 63.6338L29.8284 49.3838C29.6087 49.1746 29.4884 48.8824 29.4884 48.5802V36.8858C29.4884 36.5878 29.6185 36.3057 29.8436 36.1108L44.8436 23.1108C45.1872 22.8133 45.6888 22.8133 46.0324 23.1108L61.0324 36.1108C61.2575 36.3057 61.3876 36.5878 61.3876 36.8858V48.1108" fill="currentColor"/>
                </svg>
            </div>
            
            <h1 class="text-2xl font-bold mb-2">Welcome to Laravel</h1>
            <p class="text-gray-600 dark:text-gray-400 mb-6">Your Laravel application and Breeze authentication are ready.</p>

            <div class="flex justify-center space-x-4">
                <a href="{{ route('login') }}" class="px-5 py-2.5 bg-red-600 text-white font-medium text-sm rounded-lg hover:bg-red-700 transition">Go to Login</a>
                <a href="{{ route('register') }}" class="px-5 py-2.5 bg-gray-200 dark:bg-gray-700 text-gray-800 dark:text-white font-medium text-sm rounded-lg hover:bg-gray-300 transition">Register Account</a>
            </div>
        </div>

    </body>
</html>