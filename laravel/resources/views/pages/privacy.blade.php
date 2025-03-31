@extends('layouts.app')

@section('title', 'Privacybeleid')

@section('content')
<div class="container mx-auto px-4 py-8">
    <h1 class="text-3xl font-bold mb-6">Privacybeleid</h1>
    
    <div class="bg-white rounded-lg shadow-md p-6">
        <p class="text-gray-600 mb-4">
            Dit is het privacybeleid van Detectum. Hier leggen we uit hoe we omgaan met uw persoonlijke gegevens.
        </p>
        
        <h2 class="text-xl font-bold mt-6 mb-3">Welke gegevens verzamelen we?</h2>
        <p class="text-gray-600 mb-4">
            We verzamelen alleen de gegevens die nodig zijn voor het functioneren van onze diensten, zoals:
        </p>
        <ul class="list-disc pl-5 mb-4">
            <li class="mb-2">Naam en contactgegevens</li>
            <li class="mb-2">Informatie over uw vondsten</li>
            <li class="mb-2">Locatiegegevens van vondsten</li>
        </ul>
        
        <h2 class="text-xl font-bold mt-6 mb-3">Hoe gebruiken we uw gegevens?</h2>
        <p class="text-gray-600 mb-4">
            We gebruiken uw gegevens alleen voor het doel waarvoor ze zijn verzameld, zoals:
        </p>
        <ul class="list-disc pl-5 mb-4">
            <li class="mb-2">Het registreren van vondsten</li>
            <li class="mb-2">Het informeren over activiteiten</li>
            <li class="mb-2">Het verbeteren van onze diensten</li>
        </ul>
    </div>
</div>
@endsection
