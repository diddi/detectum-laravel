@extends('layouts.app')

@section('title', 'Evenement voorstellen')

@section('hero')
<div class="relative bg-gray-700">
    <!-- Hero background image would go here in production -->
    <div class="bg-opacity-60 bg-black absolute inset-0"></div>
    <div class="container mx-auto px-4 py-32 relative z-10 text-center">
        <h1 class="text-4xl md:text-5xl font-bold text-white mb-4">Evenement voorstellen</h1>
        <p class="text-xl text-white mb-8">Stel een nieuw evenement voor aan de Detectum gemeenschap</p>
    </div>
</div>
@endsection

@section('content')
<div class="container mx-auto px-4 py-8">
    <!-- Breadcrumb -->
    <div class="flex items-center text-sm text-gray-600 mb-8">
        <a href="{{ route('home') }}" class="hover:text-green-800">Home</a>
        <span class="mx-2">/</span>
        <a href="{{ route('activiteiten') }}" class="hover:text-green-800">Activiteiten</a>
        <span class="mx-2">/</span>
        <span class="text-gray-800">Evenement voorstellen</span>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-3 gap-8 mb-12">
        <!-- Sidebar -->
        <div class="md:col-span-1">
            <div class="bg-white rounded-lg shadow-md p-6 mb-6">
                <h3 class="text-xl font-bold mb-4 text-green-800">Informatie</h3>
                <p class="text-gray-700 mb-4">
                    Heb je een idee voor een evenement dat interessant kan zijn voor de Detectum gemeenschap? 
                    Vul het formulier in en dien je voorstel in.
                </p>
                <p class="text-gray-700 mb-4">
                    Alle voorstellen worden beoordeeld door ons team. Bij goedkeuring wordt het evenement 
                    gepubliceerd op onze website en kunnen andere vrijwilligers zich inschrijven.
                </p>
                <p class="text-gray-700">
                    Heb je vragen over het voorstellen van een evenement? Neem dan 
                    <a href="{{ route('contact') }}" class="text-green-800 hover:underline">contact</a> met ons op.
                </p>
            </div>
            
            <div class="bg-white rounded-lg shadow-md p-6">
                <h3 class="text-xl font-bold mb-4 text-green-800">Richtlijnen</h3>
                <ul class="space-y-2 text-gray-700">
                    <li class="flex items-start">
                        <i class="fas fa-check-circle text-green-800 mt-1 mr-2"></i>
                        <span>Zorg voor een duidelijke en informatieve titel en beschrijving</span>
                    </li>
                    <li class="flex items-start">
                        <i class="fas fa-check-circle text-green-800 mt-1 mr-2"></i>
                        <span>Vermeld alle praktische informatie zoals datum, tijd en locatie</span>
                    </li>
                    <li class="flex items-start">
                        <i class="fas fa-check-circle text-green-800 mt-1 mr-2"></i>
                        <span>Geef aan hoeveel deelnemers maximaal kunnen deelnemen</span>
                    </li>
                    <li class="flex items-start">
                        <i class="fas fa-check-circle text-green-800 mt-1 mr-2"></i>
                        <span>Zorg dat het evenement voldoet aan de wetgeving rond metaaldetectie</span>
                    </li>
                    <li class="flex items-start">
                        <i class="fas fa-check-circle text-green-800 mt-1 mr-2"></i>
                        <span>Vermeld eventuele kosten of benodigdheden voor deelnemers</span>
                    </li>
                </ul>
            </div>
        </div>

        <!-- Main Content -->
        <div class="md:col-span-2">
            <div class="bg-white rounded-lg shadow-md p-8">
                <h2 class="text-3xl font-bold mb-6">Evenement voorstellen</h2>

                @if ($errors->any())
                <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded mb-6">
                    <ul class="list-disc pl-5">
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
                @endif

                <form action="{{ route('activiteiten.voorstel.submit') }}" method="POST">
                    @csrf
                    
                    <div class="mb-6">
                        <h3 class="font-bold text-lg mb-4">Evenement details</h3>
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            <div class="md:col-span-2">
                                <label for="titel" class="block text-gray-700 font-medium mb-2">Titel evenement *</label>
                                <input type="text" id="titel" name="titel" value="{{ old('titel') }}" required class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-green-600">
                            </div>
                            <div>
                                <label for="type" class="block text-gray-700 font-medium mb-2">Type evenement *</label>
                                <select id="type" name="type" required class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-green-600">
                                    <option value="">Selecteer type</option>
                                    <option value="Zoekdag" {{ old('type') == 'Zoekdag' ? 'selected' : '' }}>Zoekdag</option>
                                    <option value="Workshop" {{ old('type') == 'Workshop' ? 'selected' : '' }}>Workshop</option>
                                    <option value="Lezing" {{ old('type') == 'Lezing' ? 'selected' : '' }}>Lezing</option>
                                    <option value="Excursie" {{ old('type') == 'Excursie' ? 'selected' : '' }}>Excursie</option>
                                    <option value="Tentoonstelling" {{ old('type') == 'Tentoonstelling' ? 'selected' : '' }}>Tentoonstelling</option>
                                    <option value="Anders" {{ old('type') == 'Anders' ? 'selected' : '' }}>Anders</option>
                                </select>
                            </div>
                            <div>
                                <label for="datum" class="block text-gray-700 font-medium mb-2">Datum *</label>
                                <input type="date" id="datum" name="datum" value="{{ old('datum') }}" required min="{{ date('Y-m-d', strtotime('+1 day')) }}" class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-green-600">
                            </div>
                            <div>
                                <label for="start_tijd" class="block text-gray-700 font-medium mb-2">Starttijd *</label>
                                <input type="time" id="start_tijd" name="start_tijd" value="{{ old('start_tijd') }}" required class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-green-600">
                            </div>
                            <div>
                                <label for="eind_tijd" class="block text-gray-700 font-medium mb-2">Eindtijd *</label>
                                <input type="time" id="eind_tijd" name="eind_tijd" value="{{ old('eind_tijd') }}" required class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-green-600">
                            </div>
                            <div class="md:col-span-2">
                                <label for="locatie" class="block text-gray-700 font-medium mb-2">Locatie *</label>
                                <input type="text" id="locatie" name="locatie" value="{{ old('locatie') }}" required class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-green-600">
                                <p class="text-sm text-gray-500 mt-1">Vermeld het volledige adres of een duidelijke omschrijving van de locatie</p>
                            </div>
                            <div>
                                <label for="max_deelnemers" class="block text-gray-700 font-medium mb-2">Maximum aantal deelnemers</label>
                                <input type="number" id="max_deelnemers" name="max_deelnemers" value="{{ old('max_deelnemers') }}" min="1" class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-green-600">
                                <p class="text-sm text-gray-500 mt-1">Laat leeg indien er geen maximum is</p>
                            </div>
                        </div>
                    </div>
                    
                    <div class="mb-6">
                        <label for="beschrijving" class="block text-gray-700 font-medium mb-2">Beschrijving *</label>
                        <textarea id="beschrijving" name="beschrijving" rows="6" required class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-green-600">{{ old('beschrijving') }}</textarea>
                        <p class="text-sm text-gray-500 mt-1">Geef een duidelijke beschrijving van het evenement, inclusief wat deelnemers kunnen verwachten en eventuele benodigdheden</p>
                    </div>
                    
                    <div class="mb-6">
                        <h3 class="font-bold text-lg mb-4">Contactgegevens</h3>
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            <div>
                                <label for="naam" class="block text-gray-700 font-medium mb-2">Naam contactpersoon *</label>
                                <input type="text" id="naam" name="naam" value="{{ old('naam', Auth::user()->name ?? '') }}" required class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-green-600">
                            </div>
                            <div>
                                <label for="email" class="block text-gray-700 font-medium mb-2">E-mailadres contactpersoon *</label>
                                <input type="email" id="email" name="email" value="{{ old('email', Auth::user()->email ?? '') }}" required class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-green-600">
                            </div>
                            <div>
                                <label for="telefoon" class="block text-gray-700 font-medium mb-2">Telefoonnummer contactpersoon</label>
                                <input type="tel" id="telefoon" name="telefoon" value="{{ old('telefoon', Auth::user()->volunteer->telefoon ?? '') }}" class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-green-600">
                            </div>
                        </div>
                    </div>
                    
                    <div class="mb-6">
                        <label class="flex items-center">
                            <input type="checkbox" name="voorwaarden" required class="mr-2">
                            <span class="text-gray-700">Ik ga akkoord met de <a href="{{ route('voorwaarden') }}" class="text-green-800 hover:underline">voorwaarden</a> voor het organiseren van evenementen *</span>
                        </label>
                    </div>
                    
                    <div class="flex justify-between">
                        <a href="{{ route('activiteiten') }}" class="bg-gray-300 text-gray-800 px-6 py-3 rounded-md hover:bg-gray-400 transition">Annuleren</a>
                        <button type="submit" class="bg-green-800 text-white px-6 py-3 rounded-md hover:bg-green-700 transition">Voorstel indienen</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
