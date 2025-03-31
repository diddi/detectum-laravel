@extends('layouts.app')

@section('title', 'Contact')

@section('hero')
<div class="relative bg-gray-700">
    <!-- Hero background image would go here in production -->
    <div class="bg-opacity-60 bg-black absolute inset-0"></div>
    <div class="container mx-auto px-4 py-32 relative z-10 text-center">
        <h1 class="text-4xl md:text-5xl font-bold text-white mb-4">Contact</h1>
        <p class="text-xl text-white mb-8">Neem contact met ons op voor vragen of informatie</p>
    </div>
</div>
@endsection

@section('content')
<div class="container mx-auto px-4 py-8">
    <!-- Breadcrumb -->
    <div class="flex items-center text-sm text-gray-600 mb-8">
        <a href="{{ route('home') }}" class="hover:text-green-800">Home</a>
        <span class="mx-2">/</span>
        <span class="text-gray-800">Contact</span>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-3 gap-8 mb-12">
        <!-- Contact Information -->
        <div class="md:col-span-1">
            <div class="bg-white rounded-lg shadow-md p-6 mb-6">
                <h3 class="text-xl font-bold mb-4 text-green-800">Contactgegevens</h3>
                
                <div class="space-y-4">
                    <div class="flex items-start">
                        <div class="text-green-800 mt-1 mr-3">
                            <i class="fas fa-map-marker-alt"></i>
                        </div>
                        <div>
                            <h4 class="font-bold">Adres</h4>
                            <p class="text-gray-700">
                                Archeologiestraat 123<br>
                                1000 Brussel<br>
                                België
                            </p>
                        </div>
                    </div>
                    
                    <div class="flex items-start">
                        <div class="text-green-800 mt-1 mr-3">
                            <i class="fas fa-phone"></i>
                        </div>
                        <div>
                            <h4 class="font-bold">Telefoon</h4>
                            <p class="text-gray-700">+32 2 123 45 67</p>
                        </div>
                    </div>
                    
                    <div class="flex items-start">
                        <div class="text-green-800 mt-1 mr-3">
                            <i class="fas fa-envelope"></i>
                        </div>
                        <div>
                            <h4 class="font-bold">E-mail</h4>
                            <p class="text-gray-700">info@detectum.be</p>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="bg-white rounded-lg shadow-md p-6 mb-6">
                <h3 class="text-xl font-bold mb-4 text-green-800">Openingsuren</h3>
                
                <div class="space-y-2">
                    <div class="flex justify-between">
                        <span class="text-gray-700">Maandag</span>
                        <span class="text-gray-700">9:00 - 17:00</span>
                    </div>
                    <div class="flex justify-between">
                        <span class="text-gray-700">Dinsdag</span>
                        <span class="text-gray-700">9:00 - 17:00</span>
                    </div>
                    <div class="flex justify-between">
                        <span class="text-gray-700">Woensdag</span>
                        <span class="text-gray-700">9:00 - 17:00</span>
                    </div>
                    <div class="flex justify-between">
                        <span class="text-gray-700">Donderdag</span>
                        <span class="text-gray-700">9:00 - 17:00</span>
                    </div>
                    <div class="flex justify-between">
                        <span class="text-gray-700">Vrijdag</span>
                        <span class="text-gray-700">9:00 - 16:00</span>
                    </div>
                    <div class="flex justify-between">
                        <span class="text-gray-700">Zaterdag</span>
                        <span class="text-gray-700">Gesloten</span>
                    </div>
                    <div class="flex justify-between">
                        <span class="text-gray-700">Zondag</span>
                        <span class="text-gray-700">Gesloten</span>
                    </div>
                </div>
                
                <p class="text-gray-700 mt-4 text-sm">
                    Bezoek op afspraak. Neem contact op via telefoon of e-mail om een afspraak te maken.
                </p>
            </div>
            
            <div class="bg-white rounded-lg shadow-md p-6">
                <h3 class="text-xl font-bold mb-4 text-green-800">Volg ons</h3>
                
                <div class="flex space-x-4">
                    <a href="#" class="text-gray-700 hover:text-green-800">
                        <i class="fab fa-facebook-f text-2xl"></i>
                    </a>
                    <a href="#" class="text-gray-700 hover:text-green-800">
                        <i class="fab fa-twitter text-2xl"></i>
                    </a>
                    <a href="#" class="text-gray-700 hover:text-green-800">
                        <i class="fab fa-instagram text-2xl"></i>
                    </a>
                    <a href="#" class="text-gray-700 hover:text-green-800">
                        <i class="fab fa-linkedin-in text-2xl"></i>
                    </a>
                    <a href="#" class="text-gray-700 hover:text-green-800">
                        <i class="fab fa-youtube text-2xl"></i>
                    </a>
                </div>
            </div>
        </div>

        <!-- Contact Form -->
        <div class="md:col-span-2">
            <div class="bg-white rounded-lg shadow-md p-8">
                <h2 class="text-3xl font-bold mb-6">Stuur ons een bericht</h2>
                
                <form action="{{ route('contact.submit') }}" method="POST">
                    @csrf
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-6">
                        <div>
                            <label for="naam" class="block text-gray-700 font-medium mb-2">Naam *</label>
                            <input type="text" id="naam" name="naam" required class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-green-600">
                        </div>
                        <div>
                            <label for="email" class="block text-gray-700 font-medium mb-2">E-mailadres *</label>
                            <input type="email" id="email" name="email" required class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-green-600">
                        </div>
                        <div>
                            <label for="telefoon" class="block text-gray-700 font-medium mb-2">Telefoonnummer</label>
                            <input type="tel" id="telefoon" name="telefoon" class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-green-600">
                        </div>
                        <div>
                            <label for="onderwerp" class="block text-gray-700 font-medium mb-2">Onderwerp *</label>
                            <select id="onderwerp" name="onderwerp" required class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-green-600">
                                <option value="">Selecteer onderwerp</option>
                                <option value="algemeen">Algemene vraag</option>
                                <option value="vrijwilliger">Vrijwilliger worden</option>
                                <option value="vondst">Vondst melden</option>
                                <option value="evenement">Evenementen</option>
                                <option value="samenwerking">Samenwerking</option>
                                <option value="anders">Anders</option>
                            </select>
                        </div>
                    </div>
                    <div class="mb-6">
                        <label for="bericht" class="block text-gray-700 font-medium mb-2">Bericht *</label>
                        <textarea id="bericht" name="bericht" rows="6" required class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-green-600"></textarea>
                    </div>
                    <div class="mb-6">
                        <label class="flex items-center">
                            <input type="checkbox" name="privacy_akkoord" required class="mr-2">
                            <span class="text-gray-700">Ik ga akkoord met het <a href="{{ route('privacy') }}" class="text-green-800 hover:underline">privacybeleid</a> *</span>
                        </label>
                    </div>
                    <div>
                        <button type="submit" class="bg-green-800 text-white px-6 py-3 rounded-md hover:bg-green-700 transition">Versturen</button>
                    </div>
                </form>
            </div>
            
            <!-- Map -->
            <div class="bg-white rounded-lg shadow-md p-8 mt-8">
                <h2 class="text-3xl font-bold mb-6">Locatie</h2>
                
                <div class="h-96 bg-gray-200 rounded-lg flex items-center justify-center">
                    <p class="text-gray-500">Kaart wordt hier weergegeven</p>
                </div>
                
                <div class="mt-4">
                    <h3 class="font-bold text-lg mb-2">Bereikbaarheid</h3>
                    <p class="text-gray-700 mb-4">
                        Ons kantoor is gemakkelijk bereikbaar met het openbaar vervoer. Het dichtstbijzijnde metrostation is 
                        "Centraal Station" op 5 minuten loopafstand. Er zijn ook verschillende buslijnen die stoppen in de buurt.
                    </p>
                    <p class="text-gray-700">
                        Komt u met de auto? Er is een openbare parkeergarage op 200 meter afstand.
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
