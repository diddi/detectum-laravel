@extends('layouts.app')

@section('title', 'Nieuws')

@section('hero')
<div class="relative bg-gray-700">
    <!-- Hero background image would go here in production -->
    <div class="bg-opacity-60 bg-black absolute inset-0"></div>
    <div class="container mx-auto px-4 py-32 relative z-10 text-center">
        <h1 class="text-4xl md:text-5xl font-bold text-white mb-4">Nieuws</h1>
        <p class="text-xl text-white mb-8">Blijf op de hoogte van het laatste nieuws over Detectum en metaaldetectie</p>
    </div>
</div>
@endsection

@section('content')
<div class="container mx-auto px-4 py-8">
    <!-- Breadcrumb -->
    <div class="flex items-center text-sm text-gray-600 mb-8">
        <a href="{{ route('home') }}" class="hover:text-green-800">Home</a>
        <span class="mx-2">/</span>
        <span class="text-gray-800">Nieuws</span>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-3 gap-8 mb-12">
        <!-- Main Content -->
        <div class="md:col-span-2">
            <!-- Featured News -->
            <div class="bg-white rounded-lg shadow-md overflow-hidden mb-8">
                <div class="p-8">
                    <div class="text-gray-500 mb-2">15 maart 2025</div>
                    <h2 class="text-3xl font-bold mb-4">Nieuwe wetgeving voor metaaldetectie van kracht</h2>
                    <p class="text-gray-700 mb-6">
                        De nieuwe regelgeving voor metaaldetectie is vanaf vandaag van kracht. Deze update van het Onroerenderfgoeddecreet 
                        brengt enkele belangrijke wijzigingen met zich mee voor hobbydetectoristen en professionele archeologen.
                    </p>
                    <p class="text-gray-700 mb-6">
                        De belangrijkste veranderingen betreffen de meldingsplicht, de erkenning van detectoristen en de regels 
                        voor het zoeken op beschermde archeologische sites. Detectum heeft actief bijgedragen aan de totstandkoming 
                        van deze nieuwe regelgeving door deel te nemen aan overlegmomenten met het Agentschap Onroerend Erfgoed.
                    </p>
                    <a href="{{ route('nieuws.show', 1) }}" class="inline-block bg-green-800 text-white px-4 py-2 rounded hover:bg-green-700 transition">Lees meer</a>
                </div>
            </div>

            <!-- News List -->
            <div class="grid grid-cols-1 gap-8">
                <!-- News Item 1 -->
                <div class="bg-white rounded-lg shadow-md overflow-hidden">
                    <div class="p-6">
                        <div class="text-gray-500 mb-2">10 maart 2025</div>
                        <h3 class="text-xl font-bold mb-3">Middeleeuwse muntschat ontdekt in Vlaanderen</h3>
                        <p class="text-gray-600 mb-4">
                            Een van onze vrijwilligers heeft een bijzondere vondst gedaan: een verzameling middeleeuwse munten uit de 14e eeuw. 
                            De muntschat werd gevonden tijdens een georganiseerde zoekdag in de provincie Oost-Vlaanderen en is inmiddels 
                            overgedragen aan het provinciaal archeologisch depot voor verder onderzoek.
                        </p>
                        <a href="{{ route('nieuws.show', 2) }}" class="text-green-800 hover:text-green-700 font-medium">Lees meer</a>
                    </div>
                </div>

                <!-- News Item 2 -->
                <div class="bg-white rounded-lg shadow-md overflow-hidden">
                    <div class="p-6">
                        <div class="text-gray-500 mb-2">2 maart 2025</div>
                        <h3 class="text-xl font-bold mb-3">Inschrijvingen voorjaarszoekdagen geopend</h3>
                        <p class="text-gray-600 mb-4">
                            De inschrijvingen voor onze populaire voorjaarszoekdagen zijn nu geopend. Dit jaar organiseren we zoekdagen 
                            in Limburg, Antwerpen en West-Vlaanderen, in samenwerking met lokale archeologische diensten. De zoekdagen 
                            staan onder begeleiding van professionele archeologen en zijn een uitgelezen kans om bij te dragen aan 
                            wetenschappelijk onderzoek.
                        </p>
                        <a href="{{ route('nieuws.show', 3) }}" class="text-green-800 hover:text-green-700 font-medium">Lees meer</a>
                    </div>
                </div>

                <!-- News Item 3 -->
                <div class="bg-white rounded-lg shadow-md overflow-hidden">
                    <div class="p-6">
                        <div class="text-gray-500 mb-2">15 februari 2025</div>
                        <h3 class="text-xl font-bold mb-3">Nieuwe samenwerking met Universiteit Hasselt</h3>
                        <p class="text-gray-600 mb-4">
                            Detectum is verheugd om een nieuwe samenwerking aan te kondigen met de afdeling Archeologie van de Universiteit Hasselt. 
                            Deze samenwerking omvat een gezamenlijk onderzoeksproject naar Romeinse vondsten in Limburg, waarbij vrijwilligers 
                            van Detectum actief zullen bijdragen aan het veldwerk en de documentatie.
                        </p>
                        <a href="{{ route('nieuws.show', 4) }}" class="text-green-800 hover:text-green-700 font-medium">Lees meer</a>
                    </div>
                </div>

                <!-- News Item 4 -->
                <div class="bg-white rounded-lg shadow-md overflow-hidden">
                    <div class="p-6">
                        <div class="text-gray-500 mb-2">28 januari 2025</div>
                        <h3 class="text-xl font-bold mb-3">Workshop vondstfotografie groot succes</h3>
                        <p class="text-gray-600 mb-4">
                            De workshop vondstfotografie die afgelopen weekend plaatsvond in ons hoofdkantoor in Brussel was volledig volgeboekt. 
                            Onder leiding van professioneel fotograaf en archeoloog Pieter Janssens leerden 25 deelnemers de fijne kneepjes van 
                            het fotograferen van archeologische vondsten. Vanwege het grote succes zal deze workshop in april worden herhaald.
                        </p>
                        <a href="{{ route('nieuws.show', 5) }}" class="text-green-800 hover:text-green-700 font-medium">Lees meer</a>
                    </div>
                </div>
            </div>

            <!-- Pagination -->
            <div class="mt-8 flex justify-center">
                <nav class="inline-flex rounded-md shadow">
                    <a href="#" class="px-4 py-2 bg-white border border-gray-300 text-gray-700 rounded-l-md hover:bg-gray-50">Vorige</a>
                    <a href="#" class="px-4 py-2 bg-green-800 border border-green-800 text-white hover:bg-green-700">1</a>
                    <a href="#" class="px-4 py-2 bg-white border border-gray-300 text-gray-700 hover:bg-gray-50">2</a>
                    <a href="#" class="px-4 py-2 bg-white border border-gray-300 text-gray-700 hover:bg-gray-50">3</a>
                    <a href="#" class="px-4 py-2 bg-white border border-gray-300 text-gray-700 rounded-r-md hover:bg-gray-50">Volgende</a>
                </nav>
            </div>
        </div>

        <!-- Sidebar -->
        <div class="md:col-span-1">
            <!-- Search -->
            <div class="bg-white rounded-lg shadow-md p-6 mb-8">
                <h3 class="text-xl font-bold mb-4">Zoeken</h3>
                <form action="{{ route('nieuws.search') }}" method="GET">
                    <div class="flex">
                        <input type="text" name="q" placeholder="Zoekterm..." class="flex-grow px-4 py-2 border border-gray-300 rounded-l focus:outline-none focus:ring-2 focus:ring-green-600">
                        <button type="submit" class="bg-green-800 text-white px-4 py-2 rounded-r hover:bg-green-700">
                            <i class="fas fa-search"></i>
                        </button>
                    </div>
                </form>
            </div>

            <!-- Categories -->
            <div class="bg-white rounded-lg shadow-md p-6 mb-8">
                <h3 class="text-xl font-bold mb-4">Categorieën</h3>
                <ul class="space-y-2">
                    <li><a href="{{ route('nieuws.category', 'wetgeving') }}" class="text-gray-700 hover:text-green-800">Wetgeving & Beleid</a> (8)</li>
                    <li><a href="{{ route('nieuws.category', 'vondsten') }}" class="text-gray-700 hover:text-green-800">Bijzondere Vondsten</a> (15)</li>
                    <li><a href="{{ route('nieuws.category', 'evenementen') }}" class="text-gray-700 hover:text-green-800">Evenementen</a> (12)</li>
                    <li><a href="{{ route('nieuws.category', 'onderzoek') }}" class="text-gray-700 hover:text-green-800">Onderzoek & Publicaties</a> (7)</li>
                    <li><a href="{{ route('nieuws.category', 'vereniging') }}" class="text-gray-700 hover:text-green-800">Verenigingsnieuws</a> (10)</li>
                </ul>
            </div>

            <!-- Archives -->
            <div class="bg-white rounded-lg shadow-md p-6 mb-8">
                <h3 class="text-xl font-bold mb-4">Archief</h3>
                <ul class="space-y-2">
                    <li><a href="{{ route('nieuws.archive', '2025-03') }}" class="text-gray-700 hover:text-green-800">Maart 2025</a> (5)</li>
                    <li><a href="{{ route('nieuws.archive', '2025-02') }}" class="text-gray-700 hover:text-green-800">Februari 2025</a> (4)</li>
                    <li><a href="{{ route('nieuws.archive', '2025-01') }}" class="text-gray-700 hover:text-green-800">Januari 2025</a> (6)</li>
                    <li><a href="{{ route('nieuws.archive', '2024-12') }}" class="text-gray-700 hover:text-green-800">December 2024</a> (3)</li>
                    <li><a href="{{ route('nieuws.archive', '2024-11') }}" class="text-gray-700 hover:text-green-800">November 2024</a> (4)</li>
                    <li><a href="{{ route('nieuws.archive') }}" class="text-green-800 font-medium">Volledig archief</a></li>
                </ul>
            </div>

            <!-- Newsletter -->
            <div class="bg-green-800 text-white rounded-lg shadow-md p-6">
                <h3 class="text-xl font-bold mb-4">Nieuwsbrief</h3>
                <p class="mb-4">Schrijf je in voor onze maandelijkse nieuwsbrief en blijf op de hoogte van het laatste nieuws en evenementen.</p>
                <form action="{{ route('newsletter.subscribe') }}" method="POST">
                    @csrf
                    <div class="mb-4">
                        <input type="email" name="email" placeholder="E-mailadres" required class="w-full px-4 py-2 rounded text-gray-800">
                    </div>
                    <button type="submit" class="w-full bg-white text-green-800 px-4 py-2 rounded hover:bg-gray-100 transition">
                        Inschrijven
                    </button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
