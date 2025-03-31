@extends('layouts.app')

@section('title', 'Over Detectum')

@section('hero')
<div class="relative bg-gray-700">
    <!-- Hero background image would go here in production -->
    <div class="bg-opacity-60 bg-black absolute inset-0"></div>
    <div class="container mx-auto px-4 py-32 relative z-10 text-center">
        <h1 class="text-4xl md:text-5xl font-bold text-white mb-4">Over Detectum</h1>
        <p class="text-xl text-white mb-8">De brug tussen metaaldetectoristen, archeologen en erfgoedinstanties</p>
    </div>
</div>
@endsection

@section('content')
<div class="container mx-auto px-4 py-8">
    <!-- Breadcrumb -->
    <div class="flex items-center text-sm text-gray-600 mb-8">
        <a href="{{ route('home') }}" class="hover:text-green-800">Home</a>
        <span class="mx-2">/</span>
        <span class="text-gray-800">Over Detectum</span>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-3 gap-8 mb-12">
        <!-- Sidebar -->
        <div class="md:col-span-1">
            <div class="bg-white rounded-lg shadow-md p-6">
                <h3 class="text-xl font-bold mb-4 text-green-800">Over Detectum</h3>
                <ul class="space-y-2">
                    <li class="border-l-4 border-green-800 pl-3"><a href="#missie-visie" class="text-green-800 font-medium">Missie & visie</a></li>
                    <li class="pl-3 hover:border-l-4 hover:border-green-800"><a href="#bestuur" class="text-gray-700 hover:text-green-800">Bestuur</a></li>
                    <li class="pl-3 hover:border-l-4 hover:border-green-800"><a href="#geschiedenis" class="text-gray-700 hover:text-green-800">Geschiedenis</a></li>
                    <li class="pl-3 hover:border-l-4 hover:border-green-800"><a href="#partners" class="text-gray-700 hover:text-green-800">Partners</a></li>
                    <li class="pl-3 hover:border-l-4 hover:border-green-800"><a href="#statuten" class="text-gray-700 hover:text-green-800">Statuten</a></li>
                </ul>
            </div>
        </div>

        <!-- Main Content -->
        <div class="md:col-span-2">
            <div class="bg-white rounded-lg shadow-md p-8">
                <section id="missie-visie" class="mb-12">
                    <h2 class="text-3xl font-bold mb-6">Missie & visie</h2>
                    
                    <h3 class="text-2xl font-bold mb-4">Onze missie</h3>
                    <p class="text-gray-700 mb-6">
                        Detectum streeft ernaar om de brug te zijn tussen metaaldetectoristen, archeologen en erfgoedinstanties. 
                        We willen een constructieve samenwerking bevorderen waarbij het gemeenschappelijke doel centraal staat: 
                        het beschermen, documenteren en bestuderen van ons archeologisch erfgoed.
                    </p>
                    
                    <h3 class="text-2xl font-bold mb-4">Onze visie</h3>
                    <p class="text-gray-700 mb-6">
                        Wij geloven dat metaaldetectie, mits verantwoord uitgevoerd, een waardevolle bijdrage kan leveren aan 
                        archeologisch onderzoek en erfgoedbeheer. Door kennis te delen, bewustzijn te creëren en samenwerking 
                        te stimuleren, werken we aan een toekomst waarin hobbydetectoristen en professionals elkaar versterken 
                        in plaats van tegenwerken.
                    </p>
                    
                    <h3 class="text-2xl font-bold mb-4">Onze kernwaarden</h3>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-6">
                        <div class="bg-gray-50 p-4 rounded-lg">
                            <h4 class="font-bold mb-2">Respect</h4>
                            <p class="text-gray-700">Voor het erfgoed, de wetgeving en alle betrokken partijen</p>
                        </div>
                        <div class="bg-gray-50 p-4 rounded-lg">
                            <h4 class="font-bold mb-2">Samenwerking</h4>
                            <p class="text-gray-700">Tussen hobbyisten, professionals en overheden</p>
                        </div>
                        <div class="bg-gray-50 p-4 rounded-lg">
                            <h4 class="font-bold mb-2">Kennisdeling</h4>
                            <p class="text-gray-700">Open uitwisseling van informatie en expertise</p>
                        </div>
                        <div class="bg-gray-50 p-4 rounded-lg">
                            <h4 class="font-bold mb-2">Verantwoordelijkheid</h4>
                            <p class="text-gray-700">Voor het correct melden en documenteren van vondsten</p>
                        </div>
                    </div>
                </section>
                
                <section id="bestuur" class="mb-12">
                    <h2 class="text-3xl font-bold mb-6">Bestuur</h2>
                    
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-8 mb-6">
                        <!-- Bestuurslid 1 -->
                        <div class="flex">
                            <div class="w-24 h-24 bg-gray-300 rounded-full mr-4 flex-shrink-0"></div>
                            <div>
                                <h3 class="text-xl font-bold mb-1">Dr. Jan Peeters</h3>
                                <p class="text-gray-600 mb-2">Voorzitter</p>
                                <p class="text-gray-700">Archeoloog met 20 jaar ervaring in veldwerk en beleid. Verbonden aan de Universiteit Gent.</p>
                            </div>
                        </div>
                        
                        <!-- Bestuurslid 2 -->
                        <div class="flex">
                            <div class="w-24 h-24 bg-gray-300 rounded-full mr-4 flex-shrink-0"></div>
                            <div>
                                <h3 class="text-xl font-bold mb-1">Marie Dubois</h3>
                                <p class="text-gray-600 mb-2">Secretaris</p>
                                <p class="text-gray-700">Historica en ervaren metaaldetectoriste. Auteur van verschillende publicaties over vondstmeldingen.</p>
                            </div>
                        </div>
                        
                        <!-- Bestuurslid 3 -->
                        <div class="flex">
                            <div class="w-24 h-24 bg-gray-300 rounded-full mr-4 flex-shrink-0"></div>
                            <div>
                                <h3 class="text-xl font-bold mb-1">Thomas Janssens</h3>
                                <p class="text-gray-600 mb-2">Penningmeester</p>
                                <p class="text-gray-700">Econoom met passie voor archeologie. Verantwoordelijk voor financieel beheer en subsidies.</p>
                            </div>
                        </div>
                        
                        <!-- Bestuurslid 4 -->
                        <div class="flex">
                            <div class="w-24 h-24 bg-gray-300 rounded-full mr-4 flex-shrink-0"></div>
                            <div>
                                <h3 class="text-xl font-bold mb-1">Prof. Dr. Luc Verstraeten</h3>
                                <p class="text-gray-600 mb-2">Bestuurslid</p>
                                <p class="text-gray-700">Hoogleraar Archeologie aan de KU Leuven. Specialist in middeleeuwse numismatiek.</p>
                            </div>
                        </div>
                    </div>
                </section>
                
                <section id="geschiedenis" class="mb-12">
                    <h2 class="text-3xl font-bold mb-6">Geschiedenis</h2>
                    
                    <div class="relative border-l-2 border-green-800 pl-8 pb-6">
                        <div class="absolute w-4 h-4 bg-green-800 rounded-full -left-2 top-0"></div>
                        <h3 class="text-xl font-bold mb-2">2018: Oprichting</h3>
                        <p class="text-gray-700 mb-4">
                            Detectum werd opgericht door een groep enthousiaste metaaldetectoristen en archeologen 
                            die een brug wilden slaan tussen hobby en wetenschap. De eerste bijeenkomst vond plaats 
                            in Gent met 25 deelnemers.
                        </p>
                    </div>
                    
                    <div class="relative border-l-2 border-green-800 pl-8 pb-6">
                        <div class="absolute w-4 h-4 bg-green-800 rounded-full -left-2 top-0"></div>
                        <h3 class="text-xl font-bold mb-2">2019: Eerste zoekdag</h3>
                        <p class="text-gray-700 mb-4">
                            De eerste officiële zoekdag werd georganiseerd in samenwerking met de provincie Oost-Vlaanderen. 
                            Meer dan 50 detectoristen namen deel en documenteerden samen 120 vondsten.
                        </p>
                    </div>
                    
                    <div class="relative border-l-2 border-green-800 pl-8 pb-6">
                        <div class="absolute w-4 h-4 bg-green-800 rounded-full -left-2 top-0"></div>
                        <h3 class="text-xl font-bold mb-2">2021: Lancering kennisbank</h3>
                        <p class="text-gray-700 mb-4">
                            De online kennisbank werd gelanceerd, met informatie over vondstherkenning, 
                            wetgeving en best practices. In hetzelfde jaar groeide het ledenaantal tot boven de 200.
                        </p>
                    </div>
                    
                    <div class="relative border-l-2 border-green-800 pl-8">
                        <div class="absolute w-4 h-4 bg-green-800 rounded-full -left-2 top-0"></div>
                        <h3 class="text-xl font-bold mb-2">2023: Erkenning als erfgoedorganisatie</h3>
                        <p class="text-gray-700 mb-4">
                            Detectum werd officieel erkend als erfgoedorganisatie door de Vlaamse overheid, 
                            wat nieuwe mogelijkheden opende voor subsidies en samenwerkingen.
                        </p>
                    </div>
                </section>
                
                <section id="partners" class="mb-12">
                    <h2 class="text-3xl font-bold mb-6">Partners</h2>
                    
                    <p class="text-gray-700 mb-6">
                        Detectum werkt samen met verschillende organisaties en instellingen om onze doelstellingen te bereiken:
                    </p>
                    
                    <div class="grid grid-cols-2 md:grid-cols-3 gap-6 mb-6">
                        <!-- Partner 1 -->
                        <div class="bg-white border border-gray-200 rounded-lg p-4 text-center">
                            <div class="h-20 bg-gray-100 flex items-center justify-center mb-4">
                                <span class="text-gray-400">Logo</span>
                            </div>
                            <h3 class="font-bold">Agentschap Onroerend Erfgoed</h3>
                        </div>
                        
                        <!-- Partner 2 -->
                        <div class="bg-white border border-gray-200 rounded-lg p-4 text-center">
                            <div class="h-20 bg-gray-100 flex items-center justify-center mb-4">
                                <span class="text-gray-400">Logo</span>
                            </div>
                            <h3 class="font-bold">Universiteit Gent</h3>
                        </div>
                        
                        <!-- Partner 3 -->
                        <div class="bg-white border border-gray-200 rounded-lg p-4 text-center">
                            <div class="h-20 bg-gray-100 flex items-center justify-center mb-4">
                                <span class="text-gray-400">Logo</span>
                            </div>
                            <h3 class="font-bold">KU Leuven</h3>
                        </div>
                        
                        <!-- Partner 4 -->
                        <div class="bg-white border border-gray-200 rounded-lg p-4 text-center">
                            <div class="h-20 bg-gray-100 flex items-center justify-center mb-4">
                                <span class="text-gray-400">Logo</span>
                            </div>
                            <h3 class="font-bold">Provincie Oost-Vlaanderen</h3>
                        </div>
                        
                        <!-- Partner 5 -->
                        <div class="bg-white border border-gray-200 rounded-lg p-4 text-center">
                            <div class="h-20 bg-gray-100 flex items-center justify-center mb-4">
                                <span class="text-gray-400">Logo</span>
                            </div>
                            <h3 class="font-bold">Provinciaal Archeologisch Museum</h3>
                        </div>
                        
                        <!-- Partner 6 -->
                        <div class="bg-white border border-gray-200 rounded-lg p-4 text-center">
                            <div class="h-20 bg-gray-100 flex items-center justify-center mb-4">
                                <span class="text-gray-400">Logo</span>
                            </div>
                            <h3 class="font-bold">Erfgoed Vlaanderen</h3>
                        </div>
                    </div>
                    
                    <p class="text-gray-700">
                        Geïnteresseerd in een samenwerking? <a href="{{ route('contact') }}" class="text-green-800 hover:underline">Neem contact met ons op</a>.
                    </p>
                </section>
                
                <section id="statuten" class="mb-6">
                    <h2 class="text-3xl font-bold mb-6">Statuten</h2>
                    
                    <p class="text-gray-700 mb-4">
                        Detectum is een vzw (vereniging zonder winstoogmerk) volgens de Belgische wetgeving. 
                        Onze statuten zijn gepubliceerd in het Belgisch Staatsblad en beschikbaar voor inzage.
                    </p>
                    
                    <a href="#" class="inline-flex items-center text-green-800 hover:underline">
                        <i class="far fa-file-pdf mr-2"></i>
                        Download statuten (PDF)
                    </a>
                </section>
            </div>
        </div>
    </div>
</div>
@endsection
