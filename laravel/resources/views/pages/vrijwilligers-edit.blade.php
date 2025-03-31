@extends('layouts.app')

@section('title', 'Bewerk Profiel')

@section('content')
<div class="container mx-auto px-4 py-8">
    <!-- Breadcrumb -->
    <div class="flex items-center text-sm text-gray-600 mb-8">
        <a href="{{ route('home') }}" class="hover:text-green-800">Home</a>
        <span class="mx-2">/</span>
        <a href="{{ route('dashboard') }}" class="hover:text-green-800">Dashboard</a>
        <span class="mx-2">/</span>
        <a href="{{ route('vrijwilligers.profiel') }}" class="hover:text-green-800">Mijn Profiel</a>
        <span class="mx-2">/</span>
        <span class="text-gray-800">Bewerken</span>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-4 gap-8 mb-12">
        <!-- Sidebar -->
        <div class="md:col-span-1">
            <div class="bg-white rounded-lg shadow-md p-6">
                <h3 class="text-xl font-bold mb-4 text-green-800">Mijn Account</h3>
                <ul class="space-y-2">
                    <li class="border-l-4 border-green-800 pl-3"><a href="{{ route('vrijwilligers.profiel') }}" class="text-green-800 font-medium">Mijn Profiel</a></li>
                    <li class="pl-3 hover:border-l-4 hover:border-green-800"><a href="{{ route('evenementen.index') }}" class="text-gray-700 hover:text-green-800">Mijn Evenementen</a></li>
                    <li class="pl-3 hover:border-l-4 hover:border-green-800"><a href="{{ route('dashboard') }}" class="text-gray-700 hover:text-green-800">Dashboard</a></li>
                    <li class="pl-3 hover:border-l-4 hover:border-green-800">
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <a href="{{ route('logout') }}" onclick="event.preventDefault(); this.closest('form').submit();" class="text-gray-700 hover:text-green-800">Uitloggen</a>
                        </form>
                    </li>
                </ul>
            </div>
        </div>

        <!-- Main Content -->
        <div class="md:col-span-3">
            <div class="bg-white rounded-lg shadow-md p-8">
                <h2 class="text-3xl font-bold mb-6">Bewerk Profiel</h2>

                @if ($errors->any())
                <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded mb-6">
                    <ul class="list-disc pl-5">
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
                @endif

                <form action="{{ route('vrijwilligers.update') }}" method="POST">
                    @csrf
                    @method('PUT')
                    
                    <div class="mb-6">
                        <h3 class="font-bold text-lg mb-4">Persoonlijke gegevens</h3>
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            <div>
                                <label for="voornaam" class="block text-gray-700 font-medium mb-2">Voornaam *</label>
                                <input type="text" id="voornaam" name="voornaam" value="{{ old('voornaam', $volunteer->voornaam) }}" required class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-green-600">
                            </div>
                            <div>
                                <label for="naam" class="block text-gray-700 font-medium mb-2">Naam *</label>
                                <input type="text" id="naam" name="naam" value="{{ old('naam', $volunteer->naam) }}" required class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-green-600">
                            </div>
                            <div>
                                <label for="email" class="block text-gray-700 font-medium mb-2">E-mailadres *</label>
                                <input type="email" id="email" name="email" value="{{ old('email', $volunteer->email) }}" required class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-green-600">
                            </div>
                            <div>
                                <label for="telefoon" class="block text-gray-700 font-medium mb-2">Telefoonnummer *</label>
                                <input type="tel" id="telefoon" name="telefoon" value="{{ old('telefoon', $volunteer->telefoon) }}" required class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-green-600">
                            </div>
                        </div>
                    </div>
                    
                    <div class="mb-6">
                        <h3 class="font-bold text-lg mb-4">Adresgegevens</h3>
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            <div class="md:col-span-2">
                                <label for="adres" class="block text-gray-700 font-medium mb-2">Adres *</label>
                                <input type="text" id="adres" name="adres" value="{{ old('adres', $volunteer->adres) }}" required class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-green-600">
                            </div>
                            <div>
                                <label for="postcode" class="block text-gray-700 font-medium mb-2">Postcode *</label>
                                <input type="text" id="postcode" name="postcode" value="{{ old('postcode', $volunteer->postcode) }}" required class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-green-600">
                            </div>
                            <div>
                                <label for="stad" class="block text-gray-700 font-medium mb-2">Stad *</label>
                                <input type="text" id="stad" name="stad" value="{{ old('stad', $volunteer->stad) }}" required class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-green-600">
                            </div>
                        </div>
                    </div>
                    
                    <div class="mb-6">
                        <h3 class="font-bold text-lg mb-4">Vrijwilligersgegevens</h3>
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            <div>
                                <label for="actieradius" class="block text-gray-700 font-medium mb-2">Actieradius (km) *</label>
                                <input type="number" id="actieradius" name="actieradius" value="{{ old('actieradius', $volunteer->actieradius) }}" min="1" max="500" required class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-green-600">
                                <p class="text-sm text-gray-500 mt-1">Maximale afstand die u bereid bent te reizen voor activiteiten</p>
                            </div>
                            <div>
                                <label for="ervaring" class="block text-gray-700 font-medium mb-2">Ervaring met metaaldetectie</label>
                                <select id="ervaring" name="ervaring" class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-green-600">
                                    <option value="geen" {{ old('ervaring', $volunteer->ervaring) == 'geen' ? 'selected' : '' }}>Geen ervaring</option>
                                    <option value="beginner" {{ old('ervaring', $volunteer->ervaring) == 'beginner' ? 'selected' : '' }}>Beginner (< 1 jaar)</option>
                                    <option value="gemiddeld" {{ old('ervaring', $volunteer->ervaring) == 'gemiddeld' ? 'selected' : '' }}>Gemiddeld (1-3 jaar)</option>
                                    <option value="ervaren" {{ old('ervaring', $volunteer->ervaring) == 'ervaren' ? 'selected' : '' }}>Ervaren (3+ jaar)</option>
                                </select>
                            </div>
                            <div class="md:col-span-2">
                                <label for="interesses" class="block text-gray-700 font-medium mb-2">Interesses (optioneel)</label>
                                <textarea id="interesses" name="interesses" rows="3" class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-green-600">{{ old('interesses', $volunteer->interesses) }}</textarea>
                            </div>
                        </div>
                    </div>
                    
                    <div class="flex justify-between">
                        <a href="{{ route('vrijwilligers.profiel') }}" class="bg-gray-300 text-gray-800 px-6 py-3 rounded-md hover:bg-gray-400 transition">Annuleren</a>
                        <button type="submit" class="bg-green-800 text-white px-6 py-3 rounded-md hover:bg-green-700 transition">Opslaan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
