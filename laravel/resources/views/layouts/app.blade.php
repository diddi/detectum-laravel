<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title') - Detectum</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/js/all.min.js"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.2.19/tailwind.min.css" rel="stylesheet">
<!-- CSS en JS assets -->
<link rel="stylesheet" href="{{ asset('css/app.css') }}">
<script src="{{ asset('js/app.js') }}" defer></script>    @yield('styles')
</head>
<body class="bg-gray-50">
    <!-- Header -->
    <header class="bg-white shadow-md">
        <div class="container mx-auto px-4 py-2">
            <div class="flex justify-between items-center">
                <!-- Logo -->
                <a href="{{ route('home') }}" class="text-2xl font-bold text-green-800">Detectum</a>
                
                <!-- Main Navigation -->
                <nav class="hidden md:flex space-x-6">
                    <a href="{{ route('over-detectum') }}" class="text-gray-700 hover:text-green-800">Over Detectum</a>
                    <a href="{{ route('voor-vrijwilligers') }}" class="text-gray-700 hover:text-green-800">Voor Vrijwilligers</a>
                    <a href="{{ route('wetgeving-richtlijnen') }}" class="text-gray-700 hover:text-green-800">Wetgeving & Richtlijnen</a>
                    <a href="{{ route('vondsten-melden') }}" class="text-gray-700 hover:text-green-800">Vondsten Melden</a>
                    <a href="{{ route('activiteiten') }}" class="text-gray-700 hover:text-green-800">Activiteiten</a>
                    <a href="{{ route('kennisbank') }}" class="text-gray-700 hover:text-green-800">Kennisbank</a>
                    <a href="{{ route('nieuws') }}" class="text-gray-700 hover:text-green-800">Nieuws</a>
                    <a href="{{ route('contact') }}" class="text-gray-700 hover:text-green-800">Contact</a>
                </nav>
                
                <!-- Login Button -->
                <div class="flex items-center">
                    @auth
                        <a href="{{ route('dashboard') }}" class="bg-green-800 text-white px-4 py-2 rounded hover:bg-green-700">Dashboard</a>
                    @else
                        <a href="{{ route('login') }}" class="bg-green-800 text-white px-4 py-2 rounded hover:bg-green-700">Inloggen</a>
                    @endauth
                </div>
                
                <!-- Mobile Menu Button -->
                <div class="md:hidden">
                    <button id="mobile-menu-button" class="text-gray-700">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                        </svg>
                    </button>
                </div>
            </div>
            
            <!-- Mobile Menu -->
            <div id="mobile-menu" class="hidden md:hidden mt-4 pb-4">
                <a href="{{ route('over-detectum') }}" class="block py-2 text-gray-700 hover:text-green-800">Over Detectum</a>
                <a href="{{ route('voor-vrijwilligers') }}" class="block py-2 text-gray-700 hover:text-green-800">Voor Vrijwilligers</a>
                <a href="{{ route('wetgeving-richtlijnen') }}" class="block py-2 text-gray-700 hover:text-green-800">Wetgeving & Richtlijnen</a>
                <a href="{{ route('vondsten-melden') }}" class="block py-2 text-gray-700 hover:text-green-800">Vondsten Melden</a>
                <a href="{{ route('activiteiten') }}" class="block py-2 text-gray-700 hover:text-green-800">Activiteiten</a>
                <a href="{{ route('kennisbank') }}" class="block py-2 text-gray-700 hover:text-green-800">Kennisbank</a>
                <a href="{{ route('nieuws') }}" class="block py-2 text-gray-700 hover:text-green-800">Nieuws</a>
                <a href="{{ route('contact') }}" class="block py-2 text-gray-700 hover:text-green-800">Contact</a>
            </div>
        </div>
    </header>

    <!-- Hero Section (if needed) -->
    @yield('hero')

    <!-- Main Content -->
    <main>
        @yield('content')
    </main>

    <!-- Footer -->
    <footer class="bg-gray-800 text-white py-12">
        <div class="container mx-auto px-4">
            <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
                <!-- Column 1: Logo and Info -->
                <div>
                    <h3 class="text-xl font-bold mb-4">Detectum</h3>
                    <p class="text-gray-300 mb-4">Samen voor ons erfgoed</p>
                    <p class="text-gray-300 mb-2">Archeologiestraat 123, 1000 Brussel</p>
                    <p class="text-gray-300 mb-2">+32 2 123 45 67</p>
                    <p class="text-gray-300">info@detectum.be</p>
                </div>
                
                <!-- Column 2: Over Detectum -->
                <div>
                    <h3 class="text-xl font-bold mb-4">Over Detectum</h3>
                    <ul class="space-y-2">
                        <li><a href="{{ route('over-detectum') }}#missie-visie" class="text-gray-300 hover:text-white">Missie & visie</a></li>
                        <li><a href="{{ route('over-detectum') }}#bestuur" class="text-gray-300 hover:text-white">Bestuur</a></li>
                        <li><a href="{{ route('over-detectum') }}#geschiedenis" class="text-gray-300 hover:text-white">Geschiedenis</a></li>
                        <li><a href="{{ route('over-detectum') }}#partners" class="text-gray-300 hover:text-white">Partners</a></li>
                        <li><a href="{{ route('over-detectum') }}#statuten" class="text-gray-300 hover:text-white">Statuten</a></li>
                    </ul>
                </div>
                
                <!-- Column 3: Voor vrijwilligers -->
                <div>
                    <h3 class="text-xl font-bold mb-4">Voor vrijwilligers</h3>
                    <ul class="space-y-2">
                        <li><a href="{{ route('voor-vrijwilligers') }}" class="text-gray-300 hover:text-white">Word vrijwilliger</a></li>
                        <li><a href="{{ route('voor-vrijwilligers') }}#voordelen" class="text-gray-300 hover:text-white">Voordelen</a></li>
                        <li><a href="{{ route('vondsten-melden') }}" class="text-gray-300 hover:text-white">Vondsten melden</a></li>
                        <li><a href="{{ route('activiteiten') }}" class="text-gray-300 hover:text-white">Activiteiten</a></li>
                        <li><a href="{{ route('kennisbank') }}" class="text-gray-300 hover:text-white">Kennisbank</a></li>
                    </ul>
                </div>
                
                <!-- Column 4: Social and Newsletter -->
                <div>
                    <h3 class="text-xl font-bold mb-4">Volg ons</h3>
                    <div class="flex space-x-4 mb-6">
                        <a href="#" class="text-white hover:text-gray-300"><i class="fab fa-facebook-f"></i></a>
                        <a href="#" class="text-white hover:text-gray-300"><i class="fab fa-twitter"></i></a>
                        <a href="#" class="text-white hover:text-gray-300"><i class="fab fa-instagram"></i></a>
                        <a href="#" class="text-white hover:text-gray-300"><i class="fab fa-linkedin-in"></i></a>
                    </div>
                    
                    <h3 class="text-xl font-bold mb-4">Nieuwsbrief</h3>
                    <form action="#" method="POST" class="flex">
                        <input type="email" name="email" placeholder="E-mailadres" class="px-4 py-2 w-full rounded-l text-gray-800">
                        <button type="submit" class="bg-green-800 px-4 py-2 rounded-r hover:bg-green-700">
                            <i class="fas fa-paper-plane"></i>
                        </button>
                    </form>
                </div>
            </div>
            
            <!-- Copyright -->
            <div class="border-t border-gray-700 mt-8 pt-8 text-center text-gray-400">
                <p>&copy; {{ date('Y') }} Detectum. Alle rechten voorbehouden.</p>
                <div class="mt-2">
                    <a href="{{ route('privacy') }}" class="text-gray-400 hover:text-white mx-2">Privacybeleid</a>
                    <a href="{{ route('cookies') }}" class="text-gray-400 hover:text-white mx-2">Cookiebeleid</a>
                    <a href="{{ route('disclaimer') }}" class="text-gray-400 hover:text-white mx-2">Disclaimer</a>
                </div>
            </div>
        </div>
    </footer>

    <!-- Scripts -->
    <script>
        // Mobile menu toggle
        document.getElementById('mobile-menu-button').addEventListener('click', function() {
            document.getElementById('mobile-menu').classList.toggle('hidden');
        });
    </script>
    @yield('scripts')
</body>
</html>
