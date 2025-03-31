@extends('layouts.app')

@section('title', 'Activiteiten & Evenementen')

@section('hero')
<div class="relative bg-gray-700">
    <!-- Hero background image would go here in production -->
    <div class="bg-opacity-60 bg-black absolute inset-0"></div>
    <div class="container mx-auto px-4 py-32 relative z-10 text-center">
        <h1 class="text-4xl md:text-5xl font-bold text-white mb-4">Activiteiten & Evenementen</h1>
        <p class="text-xl text-white mb-8">Ontdek en neem deel aan onze zoekdagen, workshops en webinars</p>
    </div>
</div>
@endsection

@section('content')
<div class="container mx-auto px-4 py-8">
    <!-- Breadcrumb -->
    <div class="flex items-center text-sm text-gray-600 mb-8">
        <a href="{{ route('home') }}" class="hover:text-green-800">Home</a>
        <span class="mx-2">/</span>
        <span class="text-gray-800">Activiteiten & Evenementen</span>
    </div>

    <!-- Tabs -->
    <div class="mb-8 border-b border-gray-200">
        <div class="flex flex-wrap -mb-px">
            <button class="mr-2 py-2 px-4 border-b-2 border-green-800 text-green-800 font-medium">
                Komende evenementen
            </button>
            <button class="mr-2 py-2 px-4 border-b-2 border-transparent hover:text-green-800 hover:border-green-800">
                Kalender
            </button>
            <button class="mr-2 py-2 px-4 border-b-2 border-transparent hover:text-green-800 hover:border-green-800">
                Per categorie
            </button>
            <button class="py-2 px-4 border-b-2 border-transparent hover:text-green-800 hover:border-green-800">
                Afgelopen evenementen
            </button>
        </div>
    </div>

    <!-- Featured Event -->
    <div class="bg-white rounded-lg shadow-md overflow-hidden mb-12">
        <div class="md:flex">
            <div class="md:w-2/3 p-8">
                <div class="inline-block bg-blue-100 text-blue-800 px-3 py-1 rounded-full text-sm font-medium mb-4">
                    Zoekdag
                </div>
                <h2 class="text-3xl font-bold mb-4">Voorjaarszoekdag Limburg</h2>
                
                <div class="flex items-center text-gray-600 mb-4">
                    <i class="far fa-clock mr-2"></i>
                    <span>09:00 - 17:00</span>
                </div>
                
                <div class="flex items-center text-gray-600 mb-6">
                    <i class="fas fa-map-marker-alt mr-2"></i>
                    <span>Archeologisch terrein Tongeren, Limburg</span>
                </div>
                
                <p class="text-gray-700 mb-6">
                    Onze jaarlijkse voorjaarszoekdag in samenwerking met de provincie Limburg en de Universiteit Hasselt. 
                    Een unieke kans om te zoeken op een anders niet toegankelijk archeologisch terrein onder begeleiding 
                    van professionele archeologen.
                </p>
                
                <div class="flex items-center mb-6">
                    <i class="fas fa-users text-gray-600 mr-2"></i>
                    <span class="text-gray-600">15 plaatsen beschikbaar</span>
                </div>
                
                <a href="{{ route('activiteiten.inschrijven', 1) }}" class="inline-block bg-green-800 text-white px-6 py-3 rounded-md hover:bg-green-700 transition">
                    Inschrijven
                </a>
            </div>
            <div class="md:w-1/3 bg-gray-200 flex items-center justify-center">
                <div class="text-center p-6">
                    <div class="text-5xl font-bold text-green-800">15</div>
                    <div class="text-xl font-medium">April</div>
                    <div class="text-gray-600">2025</div>
                </div>
            </div>
        </div>
    </div>

    <!-- Event List -->
    <div class="grid grid-cols-1 md:grid-cols-2 gap-8 mb-12">
        <!-- Event 1 -->
        <div class="bg-white rounded-lg shadow-md overflow-hidden">
            <div class="p-6">
                <div class="flex justify-between items-start mb-4">
                    <div>
                        <div class="inline-block bg-purple-100 text-purple-800 px-3 py-1 rounded-full text-sm font-medium mb-2">
                            Workshop
                        </div>
                        <h3 class="text-xl font-bold">Vondstfotografie voor beginners</h3>
                    </div>
                    <div class="text-center">
                        <div class="text-3xl font-bold text-green-800">22</div>
                        <div class="text-sm">April</div>
                    </div>
                </div>
                
                <div class="flex items-center text-gray-600 mb-2">
                    <i class="far fa-clock mr-2"></i>
                    <span>18:30 - 21:00</span>
                </div>
                
                <div class="flex items-center text-gray-600 mb-4">
                    <i class="fas fa-map-marker-alt mr-2"></i>
                    <span>Detectum Hoofdkantoor, Brussel</span>
                </div>
                
                <p class="text-gray-700 mb-4">
                    Leer de basis van goede fotografie voor je archeologische vondsten. 
                    Workshop geschikt voor beginners, eigen camera of smartphone meebrengen.
                </p>
                
                <div class="flex justify-between items-center">
                    <span class="text-gray-600">€15 (€10 voor leden)</span>
                    <a href="{{ route('activiteiten.inschrijven', 2) }}" class="inline-block bg-green-800 text-white px-4 py-2 rounded hover:bg-green-700 transition">
                        Inschrijven
                    </a>
                </div>
            </div>
        </div>

        <!-- Event 2 -->
        <div class="bg-white rounded-lg shadow-md overflow-hidden">
            <div class="p-6">
                <div class="flex justify-between items-start mb-4">
                    <div>
                        <div class="inline-block bg-yellow-100 text-yellow-800 px-3 py-1 rounded-full text-sm font-medium mb-2">
                            Webinar
                        </div>
                        <h3 class="text-xl font-bold">Nieuwe wetgeving metaaldetectie uitgelegd</h3>
                    </div>
                    <div class="text-center">
                        <div class="text-3xl font-bold text-green-800">29</div>
                        <div class="text-sm">April</div>
                    </div>
                </div>
                
                <div class="flex items-center text-gray-600 mb-2">
                    <i class="far fa-clock mr-2"></i>
                    <span>19:00 - 20:30</span>
                </div>
                
                <div class="flex items-center text-gray-600 mb-4">
                    <i class="fas fa-map-marker-alt mr-2"></i>
                    <span>Online (Zoom)</span>
                </div>
                
                <p class="text-gray-700 mb-4">
                    Expert Thomas Janssens van het Agentschap Onroerend Erfgoed legt de recente 
                    wijzigingen in de wetgeving rond metaaldetectie uit.
                </p>
                
                <div class="flex justify-between items-center">
                    <span class="text-gray-600">Gratis</span>
                    <a href="{{ route('activiteiten.inschrijven', 3) }}" class="inline-block bg-green-800 text-white px-4 py-2 rounded hover:bg-green-700 transition">
                        Registreren
                    </a>
                </div>
            </div>
        </div>

        <!-- Event 3 -->
        <div class="bg-white rounded-lg shadow-md overflow-hidden">
            <div class="p-6">
                <div class="flex justify-between items-start mb-4">
                    <div>
                        <div class="inline-block bg-red-100 text-red-800 px-3 py-1 rounded-full text-sm font-medium mb-2">
                            Lezing
                        </div>
                        <h3 class="text-xl font-bold">Romeinse munten in Vlaanderen</h3>
                    </div>
                    <div class="text-center">
                        <div class="text-3xl font-bold text-green-800">5</div>
                        <div class="text-sm">Mei</div>
                    </div>
                </div>
                
                <div class="flex items-center text-gray-600 mb-2">
                    <i class="far fa-clock mr-2"></i>
                    <span>14:00 - 16:00</span>
                </div>
                
                <div class="flex items-center text-gray-600 mb-4">
                    <i class="fas fa-map-marker-alt mr-2"></i>
                    <span>Provinciaal Archeologisch Museum, Gent</span>
                </div>
                
                <p class="text-gray-700 mb-4">
                    Prof. Dr. Luc Verstraeten neemt je mee in de fascinerende wereld van 
                    Romeinse munten gevonden in Vlaanderen en hun historische context.
                </p>
                
                <div class="flex justify-between items-center">
                    <span class="text-gray-600">€8 (€5 voor leden)</span>
                    <a href="{{ route('activiteiten.inschrijven', 4) }}" class="inline-block bg-green-800 text-white px-4 py-2 rounded hover:bg-green-700 transition">
                        Inschrijven
                    </a>
                </div>
            </div>
        </div>

        <!-- Event 4 -->
        <div class="bg-white rounded-lg shadow-md overflow-hidden">
            <div class="p-6">
                <div class="flex justify-between items-start mb-4">
                    <div>
                        <div class="inline-block bg-blue-100 text-blue-800 px-3 py-1 rounded-full text-sm font-medium mb-2">
                            Zoekdag
                        </div>
                        <h3 class="text-xl font-bold">Gezinszoekdag Antwerpen</h3>
                    </div>
                    <div class="text-center">
                        <div class="text-3xl font-bold text-green-800">19</div>
                        <div class="text-sm">Mei</div>
                    </div>
                </div>
                
                <div class="flex items-center text-gray-600 mb-2">
                    <i class="far fa-clock mr-2"></i>
                    <span>10:00 - 16:00</span>
                </div>
                
                <div class="flex items-center text-gray-600 mb-4">
                    <i class="fas fa-map-marker-alt mr-2"></i>
                    <span>Recreatiedomein De Schorre, Antwerpen</span>
                </div>
                
                <p class="text-gray-700 mb-4">
                    Een leuke dag voor het hele gezin! Zoekwedstrijd voor volwassenen en 
                    kinderactiviteiten. Speciaal voorbereid terrein met "verstopte" vondsten.
                </p>
                
                <div class="flex justify-between items-center">
                    <span class="text-gray-600">€20 per gezin</span>
                    <a href="{{ route('activiteiten.inschrijven', 5) }}" class="inline-block bg-green-800 text-white px-4 py-2 rounded hover:bg-green-700 transition">
                        Inschrijven
                    </a>
                </div>
            </div>
        </div>
    </div>

    <!-- Submit Event Section -->
    <div class="bg-gray-50 rounded-lg shadow-md p-8 mb-12">
        <h2 class="text-2xl font-bold mb-4">Organiseer je eigen evenement</h2>
        <p class="text-gray-700 mb-6">
            Heb je een idee voor een evenement gerelateerd aan metaaldetectie of archeologie? 
            Dien je voorstel in en wij helpen je bij de organisatie en promotie.
        </p>
        <a href="{{ route('activiteiten.voorstel') }}" class="inline-block bg-green-800 text-white px-6 py-3 rounded-md hover:bg-green-700 transition">
            Evenement voorstellen
        </a>
    </div>

    <!-- Event Proposal Form -->
    <div class="bg-white rounded-lg shadow-md p-8">
        <h2 class="text-2xl font-bold mb-6">Stel een evenement voor</h2>
        <form action="{{ route('activiteiten.voorstel.submit') }}" method="POST">
            @csrf
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-6">
                <div>
                    <label for="titel" class="block text-gray-700 font-medium mb-2">Titel evenement *</label>
                    <input type="text" id="titel" name="titel" required class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-green-600">
                </div>
                <div>
                    <label for="type" class="block text-gray-700 font-medium mb-2">Type evenement *</label>
                    <select id="type" name="type" required class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-green-600">
                        <option value="">Selecteer type</option>
                        <option value="zoekdag">Zoekdag</option>
                        <option value="workshop">Workshop</option>
                        <option value="lezing">Lezing</option>
                        <option value="webinar">Webinar</option>
                        <option value="excursie">Excursie</option>
                        <option value="anders">Anders</option>
                    </select>
                </div>
                <div>
                    <label for="datum" class="block text-gray-700 font-medium mb-2">Datum *</label>
                    <input type="date" id="datum" name="datum" required class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-green-600">
                </div>
                <div>
                    <label for="tijd" class="block text-gray-700 font-medium mb-2">Tijd *</label>
                    <div class="grid grid-cols-2 gap-4">
                        <input type="time" id="start_tijd" name="start_tijd" required class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-green-600">
                        <input type="time" id="eind_tijd" name="eind_tijd" required class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-green-600">
                    </div>
                </div>
                <div>
                    <label for="locatie" class="block text-gray-700 font-medium mb-2">Locatie *</label>
                    <input type="text" id="locatie" name="locatie" required class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-green-600">
                </div>
                <div>
                    <label for="max_deelnemers" class="block text-gray-700 font-medium mb-2">Maximum aantal deelnemers</label>
                    <input type="number" id="max_deelnemers" name="max_deelnemers" min="1" class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-green-600">
                </div>
            </div>
            <div class="mb-6">
                <label for="beschrijving" class="block text-gray-700 font-medium mb-2">Beschrijving *</label>
                <textarea id="beschrijving" name="beschrijving" rows="4" required class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-green-600"></textarea>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-6">
                <div>
                    <label for="naam" class="block text-gray-700 font-medium mb-2">Uw naam *</label>
                    <input type="text" id="naam" name="naam" required class="w-full px-4 py-2 border border-gray-
(Content truncated due to size limit. Use line ranges to read in chunks)