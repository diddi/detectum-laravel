@extends('layouts.app')

@section('title', 'Bedankt voor je registratie')

@section('content')
<div class="container mx-auto px-4 py-16">
    <div class="max-w-2xl mx-auto bg-white rounded-lg shadow-md p-8">
        <div class="text-center mb-8">
            <div class="w-20 h-20 bg-green-100 rounded-full flex items-center justify-center mx-auto mb-4">
                <i class="fas fa-check text-green-800 text-3xl"></i>
            </div>
            <h1 class="text-3xl font-bold mb-4">Bedankt voor je registratie!</h1>
            <p class="text-gray-700">
                Je registratie als vrijwilliger bij Detectum is succesvol ontvangen.
            </p>
        </div>

        <div class="mb-8">
            <h2 class="text-xl font-bold mb-4">Wat gebeurt er nu?</h2>
            <ol class="list-decimal pl-6 space-y-2 text-gray-700">
                <li>We hebben een bevestigingsmail gestuurd naar het door jou opgegeven e-mailadres.</li>
                <li>Ons team zal je gegevens verwerken en je account activeren.</li>
                <li>Je ontvangt binnen 2 werkdagen een e-mail met je inloggegevens.</li>
                <li>Na het inloggen kun je je profiel beheren en je inschrijven voor evenementen.</li>
            </ol>
        </div>

        <div class="mb-8">
            <h2 class="text-xl font-bold mb-4">Komende evenementen</h2>
            <p class="text-gray-700 mb-4">
                Bekijk alvast onze komende evenementen en activiteiten. Na activatie van je account kun je je hiervoor inschrijven.
            </p>
            <a href="{{ route('activiteiten') }}" class="inline-block bg-green-800 text-white px-6 py-3 rounded-md hover:bg-green-700 transition">Bekijk evenementen</a>
        </div>

        <div class="border-t border-gray-200 pt-6 text-center">
            <p class="text-gray-700 mb-4">
                Heb je vragen over je registratie? Neem dan contact met ons op.
            </p>
            <a href="{{ route('contact') }}" class="text-green-800 hover:underline">Contact opnemen</a>
        </div>
    </div>
</div>
@endsection
