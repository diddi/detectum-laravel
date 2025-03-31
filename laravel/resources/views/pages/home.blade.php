@extends('layouts.app')

@section('title', 'Samen voor ons erfgoed')

@section('hero')
<div class="relative bg-gray-700">
    <!-- Hero background image would go here in production -->
    <div class="bg-opacity-60 bg-black absolute inset-0"></div>
    <div class="container mx-auto px-4 py-32 relative z-10 text-center">
        <h1 class="text-4xl md:text-5xl font-bold text-white mb-4">Detectum: samen voor ons erfgoed</h1>
        <p class="text-xl text-white mb-8">Word vrijwilliger en help mee het verleden bewaren.</p>
        <div class="flex flex-wrap justify-center gap-4">
            <a href="{{ route('voor-vrijwilligers') }}" class="bg-green-800 text-white px-6 py-3 rounded-md hover:bg-green-700 transition">Word vrijwilliger</a>
            <a href="{{ route('vondsten-melden') }}" class="bg-amber-700 text-white px-6 py-3 rounded-md hover:bg-amber-600 transition">Meld je vondst</a>
            <a href="{{ route('activiteiten') }}" class="bg-gray-600 text-white px-6 py-3 rounded-md hover:bg-gray-500 transition">Bekijk agenda</a>
        </div>
    </div>
</div>
@endsection

@section('content')
<div class="container mx-auto px-4 py-16">
    <!-- Introduction -->
    <div class="max-w-3xl mx-auto text-center mb-16">
        <p class="text-lg text-gray-700 mb-6">
            Detectum is de brug tussen metaaldetectoristen, archeologen en erfgoedinstanties. 
            We ondersteunen vrijwilligers, delen kennis en helpen om archeologische vondsten correct te melden.
        </p>
        <a href="{{ route('over-detectum') }}" class="inline-block bg-green-800 text-white px-6 py-3 rounded-md hover:bg-green-700 transition">Meer over Detectum</a>
    </div>

    <!-- Feature Blocks -->
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8 mb-16">
        <!-- Block 1: Vrijwilliger worden -->
        <div class="bg-white p-8 rounded-lg shadow-md text-center">
            <div class="w-20 h-20 bg-green-100 rounded-full flex items-center justify-center mx-auto mb-4">
                <i class="fas fa-bullseye text-green-800 text-2xl"></i>
            </div>
            <h3 class="text-xl font-bold mb-4">Vrijwilliger worden</h3>
            <p class="text-gray-600 mb-6">
                Werk mee aan archeologisch onderzoek en help ons erfgoed te beschermen. 
                Als vrijwilliger krijg je toegang tot exclusieve zoekdagen en workshops.
            </p>
            <a href="{{ route('voor-vrijwilligers') }}" class="inline-block bg-green-800 text-white px-4 py-2 rounded hover:bg-green-700 transition">Word vrijwilliger</a>
        </div>

        <!-- Block 2: Vondst melden -->
        <div class="bg-white p-8 rounded-lg shadow-md text-center">
            <div class="w-20 h-20 bg-amber-100 rounded-full flex items-center justify-center mx-auto mb-4">
                <i class="fas fa-tools text-amber-700 text-2xl"></i>
            </div>
            <h3 class="text-xl font-bold mb-4">Vondst melden</h3>
            <p class="text-gray-600 mb-6">
                Heb je iets bijzonders gevonden? Meld je vondst en draag bij aan ons collectieve archeologische erfgoed. 
                Wij begeleiden je door het proces.
            </p>
            <a href="{{ route('vondsten-melden') }}" class="inline-block bg-amber-700 text-white px-4 py-2 rounded hover:bg-amber-600 transition">Meld je vondst</a>
        </div>

        <!-- Block 3: Kennisbank -->
        <div class="bg-white p-8 rounded-lg shadow-md text-center">
            <div class="w-20 h-20 bg-blue-100 rounded-full flex items-center justify-center mx-auto mb-4">
                <i class="fas fa-brain text-blue-800 text-2xl"></i>
            </div>
            <h3 class="text-xl font-bold mb-4">Kennisbank</h3>
            <p class="text-gray-600 mb-6">
                Bekijk onze uitgebreide verzameling informatie over vondsten, methoden en wetgeving. 
                Met tips en trucs om je vaardigheden te verbeteren.
            </p>
            <a href="{{ route('kennisbank') }}" class="inline-block bg-blue-800 text-white px-4 py-2 rounded hover:bg-blue-700 transition">Ontdek kennis</a>
        </div>

        <!-- Block 4: Activiteiten -->
        <div class="bg-white p-8 rounded-lg shadow-md text-center">
            <div class="w-20 h-20 bg-purple-100 rounded-full flex items-center justify-center mx-auto mb-4">
                <i class="fas fa-calendar-alt text-purple-800 text-2xl"></i>
            </div>
            <h3 class="text-xl font-bold mb-4">Activiteiten</h3>
            <p class="text-gray-600 mb-6">
                Neem deel aan zoekdagen, workshops en webinars. Ontmoet gelijkgestemden en verfijn je detectievaardigheden onder professionele begeleiding.
            </p>
            <a href="{{ route('activiteiten') }}" class="inline-block bg-purple-800 text-white px-4 py-2 rounded hover:bg-purple-700 transition">Bekijk agenda</a>
        </div>
    </div>

    <!-- Latest News -->
    <div class="mb-16">
        <h2 class="text-3xl font-bold text-center mb-12">Laatste nieuws</h2>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <!-- News Item 1 -->
            <div class="bg-white rounded-lg shadow-md overflow-hidden">
                <div class="p-6">
                    <div class="text-gray-500 mb-2">15 maart 2025</div>
                    <h3 class="text-xl font-bold mb-3">Nieuwe wetgeving voor metaaldetectie van kracht</h3>
                    <p class="text-gray-600 mb-4">De nieuwe regelgeving voor metaaldetectie is vanaf vandaag van kracht. Lees hier wat dit voor jou betekent.</p>
                    <a href="{{ route('nieuws.show', 1) }}" class="text-green-800 hover:text-green-700 font-medium">Lees meer</a>
                </div>
            </div>

            <!-- News Item 2 -->
            <div class="bg-white rounded-lg shadow-md overflow-hidden">
                <div class="p-6">
                    <div class="text-gray-500 mb-2">10 maart 2025</div>
                    <h3 class="text-xl font-bold mb-3">Middeleeuwse muntschat ontdekt in Vlaanderen</h3>
                    <p class="text-gray-600 mb-4">Een van onze vrijwilligers heeft een bijzondere vondst gedaan: een verzameling middeleeuwse munten uit de 14e eeuw.</p>
                    <a href="{{ route('nieuws.show', 2) }}" class="text-green-800 hover:text-green-700 font-medium">Lees meer</a>
                </div>
            </div>

            <!-- News Item 3 -->
            <div class="bg-white rounded-lg shadow-md overflow-hidden">
                <div class="p-6">
                    <div class="text-gray-500 mb-2">2 maart 2025</div>
                    <h3 class="text-xl font-bold mb-3">Inschrijvingen voorjaarszoekdagen geopend</h3>
                    <p class="text-gray-600 mb-4">De inschrijvingen voor onze populaire voorjaarszoekdagen zijn nu geopend. Wees er snel bij, want vol is vol!</p>
                    <a href="{{ route('nieuws.show', 3) }}" class="text-green-800 hover:text-green-700 font-medium">Lees meer</a>
                </div>
            </div>
        </div>
        <div class="text-center mt-8">
            <a href="{{ route('nieuws') }}" class="inline-block bg-gray-800 text-white px-6 py-3 rounded-md hover:bg-gray-700 transition">Meer nieuws</a>
        </div>
    </div>
</div>
@endsection
