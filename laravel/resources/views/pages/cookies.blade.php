@extends('layouts.app')

@section('title', 'Cookiebeleid')

@section('content')
<div class="container mx-auto px-4 py-8">
    <h1 class="text-3xl font-bold mb-6">Cookiebeleid</h1>
    
    <div class="bg-white rounded-lg shadow-md p-6">
        <p class="text-gray-600 mb-4">
            Dit is het cookiebeleid van Detectum. Hier leggen we uit hoe we cookies gebruiken op onze website.
        </p>
        
        <h2 class="text-xl font-bold mt-6 mb-3">Wat zijn cookies?</h2>
        <p class="text-gray-600 mb-4">
            Cookies zijn kleine tekstbestanden die op uw computer worden opgeslagen wanneer u onze website bezoekt.
        </p>
        
        <h2 class="text-xl font-bold mt-6 mb-3">Welke cookies gebruiken we?</h2>
        <p class="text-gray-600 mb-4">
            We gebruiken de volgende soorten cookies:
        </p>
        <ul class="list-disc pl-5 mb-4">
            <li class="mb-2">Functionele cookies: noodzakelijk voor het functioneren van de website</li>
            <li class="mb-2">Analytische cookies: om het gebruik van de website te analyseren</li>
            <li class="mb-2">Tracking cookies: om uw voorkeuren te onthouden</li>
        </ul>
    </div>
</div>
@endsection
