@extends('layouts.app')

@section('title', 'Disclaimer')

@section('content')
<div class="container mx-auto px-4 py-8">
    <h1 class="text-3xl font-bold mb-6">Disclaimer</h1>
    
    <div class="bg-white rounded-lg shadow-md p-6">
        <p class="text-gray-600 mb-4">
            Dit is de disclaimer van Detectum. Hier leggen we uit wat onze verantwoordelijkheden zijn.
        </p>
        
        <h2 class="text-xl font-bold mt-6 mb-3">Aansprakelijkheid</h2>
        <p class="text-gray-600 mb-4">
            Detectum streeft ernaar om accurate en actuele informatie te verstrekken, maar kan niet garanderen dat alle informatie op deze website volledig juist is.
        </p>
        
        <h2 class="text-xl font-bold mt-6 mb-3">Intellectueel eigendom</h2>
        <p class="text-gray-600 mb-4">
            Alle inhoud op deze website, inclusief teksten, afbeeldingen en logo's, is eigendom van Detectum en mag niet worden gebruikt zonder toestemming.
        </p>
        
        <h2 class="text-xl font-bold mt-6 mb-3">Links naar andere websites</h2>
        <p class="text-gray-600 mb-4">
            Deze website kan links bevatten naar externe websites. Detectum is niet verantwoordelijk voor de inhoud of het privacybeleid van deze websites.
        </p>
    </div>
</div>
@endsection
