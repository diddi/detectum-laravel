@extends('layouts.app')

@section('title', 'Voor Vrijwilligers')

@section('hero')
<div class="relative bg-gray-700">
    <!-- Hero background image would go here in production -->
    <div class="bg-opacity-60 bg-black absolute inset-0"></div>
    <div class="container mx-auto px-4 py-32 relative z-10 text-center">
        <h1 class="text-4xl md:text-5xl font-bold text-white mb-4">Voor Vrijwilligers</h1>
        <p class="text-xl text-white mb-8">Word vrijwilliger en help mee het verleden te bewaren en beschermen</p>
    </div>
</div>
@endsection

@section('content')
<div class="container mx-auto px-4 py-8">
    <!-- Breadcrumb -->
    <div class="flex items-center text-sm text-gray-600 mb-8">
        <a href="{{ route('home') }}" class="hover:text-green-800">Home</a>
        <span class="mx-2">/</span>
        <span class="text-gray-800">Voor Vrijwilligers</span>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-3 gap-8 mb-12">
        <!-- Sidebar -->
        <div class="md:col-span-1">
            <div class="bg-white rounded-lg shadow-md p-6">
                <h3 class="text-xl font-bold mb-4 text-green-800">Voor Vrijwilligers</h3>
                <ul class="space-y-2">
                    <li class="border-l-4 border-green-800 pl-3"><a href="#" class="text-green-800 font-medium">Word vrijwilliger</a></li>
                    <li class="pl-3 hover:border-l-4 hover:border-green-800"><a href="#voordelen" class="text-gray-700 hover:text-green-800">Voordelen</a></li>
                    <li class="pl-3 hover:border-l-4 hover:border-green-800"><a href="#wat-doen-vrijwilligers" class="text-gray-700 hover:text-green-800">Wat doen vrijwilligers?</a></li>
                    <li class="pl-3 hover:border-l-4 hover:border-green-800"><a href="#ervaringen" class="text-gray-700 hover:text-green-800">Ervaringen</a></li>
                    <li class="pl-3 hover:border-l-4 hover:border-green-800"><a href="#veelgestelde-vragen" class="text-gray-700 hover:text-green-800">Veelgestelde vragen</a></li>
                </ul>
            </div>
        </div>

        <!-- Main Content -->
        <div class="md:col-span-2">
            <div class="bg-white rounded-lg shadow-md p-8">
                <h2 class="text-3xl font-bold mb-6">Word vrijwilliger bij Detectum</h2>
                
                <p class="text-gray-700 mb-6">
                    Als vrijwilliger bij Detectum draag je actief bij aan het behoud en de studie van ons archeologisch erfgoed. 
                    Je maakt deel uit van een groeiende gemeenschap van enthousiaste detectoristen en erfgoedliefhebbers die 
                    samenwerken met professionele archeologen en erfgoedinstanties.
                </p>

                <div class="mb-8">
                    <h3 class="text-2xl font-bold mb-4" id="voordelen">Voordelen van vrijwilliger worden</h3>
                    <ul class="list-disc pl-6 space-y-2 text-gray-700">
                        <li>Toegang tot exclusieve zoekdagen op anders niet toegankelijke terreinen</li>
                        <li>Gratis of tegen gereduceerd tarief deelnemen aan workshops en webinars</li>
                        <li>Persoonlijke begeleiding door professionele archeologen</li>
                        <li>Netwerken met gelijkgestemden en experts</li>
                        <li>Bijdragen aan wetenschappelijk onderzoek</li>
                        <li>Vermelding in publicaties bij significante bijdragen</li>
                    </ul>
                </div>

                <div class="mb-8">
                    <h3 class="text-2xl font-bold mb-4" id="wat-doen-vrijwilligers">Wat doen vrijwilligers?</h3>
                    <p class="text-gray-700 mb-4">
                        Als vrijwilliger bij Detectum kun je op verschillende manieren bijdragen, afhankelijk van je interesses, 
                        vaardigheden en beschikbaarheid:
                    </p>
                    <ul class="list-disc pl-6 space-y-2 text-gray-700">
                        <li>Deelnemen aan georganiseerde zoekdagen en veldverkenningen</li>
                        <li>Helpen bij het documenteren en registreren van vondsten</li>
                        <li>Assisteren bij workshops en evenementen</li>
                        <li>Bijdragen aan de kennisbank met artikelen of fotografie</li>
                        <li>Meewerken aan educatieve projecten</li>
                    </ul>
                </div>

                <!-- Registration Form -->
                <div class="bg-gray-50 p-6 rounded-lg border border-gray-200 mb-8">
                    <h3 class="text-2xl font-bold mb-6">Registreer als vrijwilliger</h3>
                    <form action="{{ route('vrijwilligers.register') }}" method="POST">
                        @csrf
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-6">
                            <div>
                                <label for="voornaam" class="block text-gray-700 font-medium mb-2">Voornaam *</label>
                                <input type="text" id="voornaam" name="voornaam" required class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-green-600">
                            </div>
                            <div>
                                <label for="naam" class="block text-gray-700 font-medium mb-2">Naam *</label>
                                <input type="text" id="naam" name="naam" required class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-green-600">
                            </div>
                            <div>
                                <label for="email" class="block text-gray-700 font-medium mb-2">E-mailadres *</label>
                                <input type="email" id="email" name="email" required class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-green-600">
                            </div>
                            <div>
                                <label for="telefoon" class="block text-gray-700 font-medium mb-2">Telefoonnummer *</label>
                                <input type="tel" id="telefoon" name="telefoon" required class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-green-600">
                            </div>
                            <div>
                                <label for="adres" class="block text-gray-700 font-medium mb-2">Adres *</label>
                                <input type="text" id="adres" name="adres" required class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-green-600">
                            </div>
                            <div>
                                <label for="postcode" class="block text-gray-700 font-medium mb-2">Postcode *</label>
                                <input type="text" id="postcode" name="postcode" required class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-green-600">
                            </div>
                            <div>
                                <label for="stad" class="block text-gray-700 font-medium mb-2">Stad *</label>
                                <input type="text" id="stad" name="stad" required class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-green-600">
                            </div>
                            <div>
                                <label for="actieradius" class="block text-gray-700 font-medium mb-2">Actieradius (km) *</label>
                                <input type="number" id="actieradius" name="actieradius" min="1" max="500" required class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-green-600">
                                <p class="text-sm text-gray-500 mt-1">Maximale afstand die u bereid bent te reizen voor activiteiten</p>
                            </div>
                        </div>
                        <div class="mb-6">
                            <label for="ervaring" class="block text-gray-700 font-medium mb-2">Ervaring met metaaldetectie</label>
                            <select id="ervaring" name="ervaring" class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-green-600">
                                <option value="geen">Geen ervaring</option>
                                <option value="beginner">Beginner (< 1 jaar)</option>
                                <option value="gemiddeld">Gemiddeld (1-3 jaar)</option>
                                <option value="ervaren">Ervaren (3+ jaar)</option>
                            </select>
                        </div>
                        <div class="mb-6">
                            <label for="interesses" class="block text-gray-700 font-medium mb-2">Interesses (optioneel)</label>
                            <textarea id="interesses" name="interesses" rows="3" class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-green-600"></textarea>
                        </div>
                        <div class="mb-6">
                            <label class="flex items-center">
                                <input type="checkbox" name="privacy_akkoord" required class="mr-2">
                                <span class="text-gray-700">Ik ga akkoord met het <a href="{{ route('privacy') }}" class="text-green-800 hover:underline">privacybeleid</a> *</span>
                            </label>
                        </div>
                        <div>
                            <button type="submit" class="bg-green-800 text-white px-6 py-3 rounded-md hover:bg-green-700 transition">Registreren als vrijwilliger</button>
                        </div>
                    </form>
                </div>

                <div class="mb-8" id="ervaringen">
                    <h3 class="text-2xl font-bold mb-4">Ervaringen van vrijwilligers</h3>
                    
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <!-- Testimonial 1 -->
                        <div class="bg-gray-50 p-6 rounded-lg border border-gray-200">
                            <p class="text-gray-700 italic mb-4">"Als vrijwilliger bij Detectum heb ik niet alleen mijn detectievaardigheden verbeterd, maar ook een hele nieuwe kijk op archeologie gekregen. De samenwerking met professionals is ontzettend leerzaam."</p>
                            <p class="font-medium">Jan Peeters, vrijwilliger sinds 2022</p>
                        </div>
                        
                        <!-- Testimonial 2 -->
                        <div class="bg-gray-50 p-6 rounded-lg border border-gray-200">
                            <p class="text-gray-700 italic mb-4">"De exclusieve zoekdagen zijn fantastisch. Je komt op plekken waar je normaal nooit zou kunnen zoeken, en de begeleiding door archeologen maakt het extra bijzonder."</p>
                            <p class="font-medium">Marie Dubois, vrijwilliger sinds 2023</p>
                        </div>
                    </div>
                </div>

                <div id="veelgestelde-vragen">
                    <h3 class="text-2xl font-bold mb-4">Veelgestelde vragen</h3>
                    
                    <div class="space-y-4">
                        <div class="border-b border-gray-200 pb-4">
                            <h4 class="font-bold text-lg mb-2">Hoeveel tijd kost vrijwilligerswerk bij Detectum?</h4>
                            <p class="text-gray-700">Je bepaalt zelf hoeveel tijd je wilt investeren. Er is geen minimum aantal uren of dagen. Je kiest zelf aan welke activiteiten je wilt deelnemen.</p>
                        </div>
                        
                        <div class="border-b border-gray-200 pb-4">
                            <h4 class="font-bold text-lg mb-2">Moet ik ervaring hebben met metaaldetectie?</h4>
                            <p class="text-gray-700">Nee, ook beginners zijn welkom. We organiseren regelmatig workshops en trainingen voor nieuwe detectoristen.</p>
                        </div>
                        
                        <div class="border-b border-gray-200 pb-4">
                            <h4 class="font-bold text-lg mb-2">Heb ik een eigen metaaldetector nodig?</h4>
                            <p class="text-gray-700">Voor de meeste activiteiten is een eigen detector handig, maar niet verplicht. Bij sommige evenementen kunnen we een beperkt aantal detectoren uitlenen.</p>
                        </div>
                        
                        <div>
                            <h4 class="font-bold text-lg mb-2">Zijn er kosten verbonden aan het vrijwilligerswerk?</h4>
                            <p class="text-gray-700">Registratie als vrijwilliger is gratis. Voor sommige activiteiten vragen we een kleine bijdrage, maar vrijwilligers krijgen altijd korting.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
