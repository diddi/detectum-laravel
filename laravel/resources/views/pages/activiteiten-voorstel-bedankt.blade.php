@extends('layouts.app')

@section('title', 'Bedankt voor je evenementvoorstel')

@section('content')
<div class="container mx-auto px-4 py-16">
    <div class="max-w-2xl mx-auto bg-white rounded-lg shadow-md p-8">
        <div class="text-center mb-8">
            <div class="w-20 h-20 bg-green-100 rounded-full flex items-center justify-center mx-auto mb-4">
                <i class="fas fa-check text-green-800 text-3xl"></i>
            </div>
            <h1 class="text-3xl font-bold mb-4">Bedankt voor je evenementvoorstel!</h1>
            <p class="text-gray-700">
                Je voorstel is succesvol ontvangen en zal worden beoordeeld door ons team.
            </p>
        </div>

        <div class="mb-8">
            <h2 class="text-xl font-bold mb-4">Wat gebeurt er nu?</h2>
            <ol class="list-decimal pl-6 space-y-2 text-gray-700">
                <li>Ons team beoordeelt je voorstel binnen 5 werkdagen.</li>
                <li>Je ontvangt een e-mail met de beslissing en eventuele feedback.</li>
                <li>Bij goedkeuring wordt het evenement gepubliceerd op onze website.</li>
                <li>Je kunt de status van je voorstel volgen in je persoonlijke account.</li>
            </ol>
        </div>

        <div class="mb-8">
            <h2 class="text-xl font-bold mb-4">Je voorgestelde evenementen</h2>
            <p class="text-gray-700 mb-4">
                Je kunt al je voorgestelde evenementen en hun status bekijken in je persoonlijke account.
            </p>
            <a href="{{ route('evenementen.index') }}" class="inline-block bg-green-800 text-white px-6 py-3 rounded-md hover:bg-green-700 transition">Bekijk mijn evenementen</a>
        </div>

        <div class="border-t border-gray-200 pt-6 text-center">
            <p class="text-gray-700 mb-4">
                Heb je vragen over je evenementvoorstel? Neem dan contact met ons op.
            </p>
            <a href="{{ route('contact') }}" class="text-green-800 hover:underline">Contact opnemen</a>
        </div>
    </div>
</div>
@endsection
