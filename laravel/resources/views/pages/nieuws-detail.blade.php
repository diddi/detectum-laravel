@extends('layouts.app')

@section('title', 'Nieuwsartikel')

@section('content')
<div class="container mx-auto px-4 py-8">
    <h1 class="text-3xl font-bold mb-6">Nieuwsartikel {{ $id }}</h1>
    
    <div class="bg-white rounded-lg shadow-md p-6">
        <div class="text-gray-500 mb-2">15 maart 2025</div>
        
        @if($id == 1)
            <h2 class="text-2xl font-bold mb-4">Nieuwe wetgeving voor metaaldetectie van kracht</h2>
            <p class="text-gray-600 mb-4">
                De nieuwe regelgeving voor metaaldetectie is vanaf vandaag van kracht. Deze wijzigingen zijn bedoeld om het cultureel erfgoed beter te beschermen en tegelijkertijd hobbyisten duidelijke richtlijnen te geven.
            </p>
            <p class="text-gray-600 mb-4">
                De belangrijkste veranderingen zijn:
            </p>
            <ul class="list-disc pl-5 mb-4">
                <li class="mb-2">Verplichte registratie van alle vondsten via het Detectum platform</li>
                <li class="mb-2">Uitgebreide zones waar detectie is toegestaan</li>
                <li class="mb-2">Nieuwe procedure voor het melden van archeologisch belangrijke ontdekkingen</li>
            </ul>
        @elseif($id == 2)
            <h2 class="text-2xl font-bold mb-4">Middeleeuwse muntschat ontdekt in Vlaanderen</h2>
            <p class="text-gray-600 mb-4">
                Een van onze vrijwilligers heeft een bijzondere vondst gedaan: een verzameling middeleeuwse munten uit de 14e eeuw. De munten werden gevonden tijdens een georganiseerde zoektocht in de omgeving van Gent.
            </p>
            <p class="text-gray-600 mb-4">
                De collectie bestaat uit 37 zilveren munten die vermoedelijk rond 1320 zijn begraven. Experts van het lokale museum zijn enthousiast over deze ontdekking die nieuwe inzichten kan geven in de economische situatie van die tijd.
            </p>
        @else
            <h2 class="text-2xl font-bold mb-4">Nieuwsartikel</h2>
            <p class="text-gray-600 mb-4">
                Dit nieuwsartikel is nog in ontwikkeling.
            </p>
        @endif
        
        <a href="{{ route('nieuws') }}" class="inline-block mt-4 text-green-800 hover:text-green-700 font-medium">← Terug naar nieuws</a>
    </div>
</div>
@endsection
