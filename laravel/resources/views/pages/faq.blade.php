@extends('layouts.app')

@section('title', 'Veelgestelde Vragen (FAQ)')

@section('hero')
<div class="relative bg-gray-700">
    <!-- Hero background image would go here in production -->
    <div class="bg-opacity-60 bg-black absolute inset-0"></div>
    <div class="container mx-auto px-4 py-32 relative z-10 text-center">
        <h1 class="text-4xl md:text-5xl font-bold text-white mb-4">Veelgestelde Vragen</h1>
        <p class="text-xl text-white mb-8">Antwoorden op de meest gestelde vragen over metaaldetectie en Detectum</p>
    </div>
</div>
@endsection

@section('content')
<div class="container mx-auto px-4 py-8">
    <!-- Breadcrumb -->
    <div class="flex items-center text-sm text-gray-600 mb-8">
        <a href="{{ route('home') }}" class="hover:text-green-800">Home</a>
        <span class="mx-2">/</span>
        <span class="text-gray-800">FAQ</span>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-3 gap-8 mb-12">
        <!-- Sidebar -->
        <div class="md:col-span-1">
            <div class="bg-white rounded-lg shadow-md p-6">
                <h3 class="text-xl font-bold mb-4 text-green-800">Categorieën</h3>
                <ul class="space-y-2">
                    <li class="border-l-4 border-green-800 pl-3"><a href="#algemeen" class="text-green-800 font-medium">Algemene vragen</a></li>
                    <li class="pl-3 hover:border-l-4 hover:border-green-800"><a href="#wetgeving" class="text-gray-700 hover:text-green-800">Wetgeving</a></li>
                    <li class="pl-3 hover:border-l-4 hover:border-green-800"><a href="#vrijwilligers" class="text-gray-700 hover:text-green-800">Vrijwilligers</a></li>
                    <li class="pl-3 hover:border-l-4 hover:border-green-800"><a href="#vondsten" class="text-gray-700 hover:text-green-800">Vondsten melden</a></li>
                    <li class="pl-3 hover:border-l-4 hover:border-green-800"><a href="#evenementen" class="text-gray-700 hover:text-green-800">Evenementen</a></li>
                </ul>
            </div>
            
            <div class="bg-white rounded-lg shadow-md p-6 mt-6">
                <h3 class="text-xl font-bold mb-4">Nog vragen?</h3>
                <p class="text-gray-700 mb-4">Staat je vraag er niet tussen? Neem dan contact met ons op.</p>
                <a href="{{ route('contact') }}" class="inline-block bg-green-800 text-white px-4 py-2 rounded hover:bg-green-700 transition">Contact opnemen</a>
            </div>
        </div>

        <!-- Main Content -->
        <div class="md:col-span-2">
            <!-- General Questions -->
            <div id="algemeen" class="bg-white rounded-lg shadow-md p-8 mb-8">
                <h2 class="text-3xl font-bold mb-6">Algemene vragen</h2>
                
                <div class="space-y-6">
                    <div class="border-b border-gray-200 pb-6">
                        <h3 class="text-xl font-bold mb-3">Wat is Detectum?</h3>
                        <p class="text-gray-700">
                            Detectum is een vereniging die de brug vormt tussen metaaldetectoristen, archeologen en erfgoedinstanties. 
                            We streven naar een constructieve samenwerking waarbij het gemeenschappelijke doel centraal staat: 
                            het beschermen, documenteren en bestuderen van ons archeologisch erfgoed.
                        </p>
                    </div>
                    
                    <div class="border-b border-gray-200 pb-6">
                        <h3 class="text-xl font-bold mb-3">Hoe kan ik lid worden van Detectum?</h3>
                        <p class="text-gray-700">
                            Je kunt lid worden door je te registreren als vrijwilliger via onze website. Ga naar de pagina 
                            "Voor Vrijwilligers" en vul het registratieformulier in. Na goedkeuring ontvang je een bevestiging 
                            per e-mail met verdere instructies.
                        </p>
                    </div>
                    
                    <div class="border-b border-gray-200 pb-6">
                        <h3 class="text-xl font-bold mb-3">Zijn er kosten verbonden aan het lidmaatschap?</h3>
                        <p class="text-gray-700">
                            Registratie als vrijwilliger is gratis. Voor sommige activiteiten vragen we een kleine bijdrage, 
                            maar vrijwilligers krijgen altijd korting. We bieden ook een betaald premium lidmaatschap aan met 
                            extra voordelen, zoals gratis deelname aan bepaalde evenementen en workshops.
                        </p>
                    </div>
                    
                    <div>
                        <h3 class="text-xl font-bold mb-3">Wat zijn de voordelen van vrijwilliger worden bij Detectum?</h3>
                        <p class="text-gray-700">
                            Als vrijwilliger krijg je toegang tot exclusieve zoekdagen op anders niet toegankelijke terreinen, 
                            kun je gratis of tegen gereduceerd tarief deelnemen aan workshops en webinars, ontvang je persoonlijke 
                            begeleiding door professionele archeologen, en kun je netwerken met gelijkgestemden en experts.
                        </p>
                    </div>
                </div>
            </div>
            
            <!-- Legislation Questions -->
            <div id="wetgeving" class="bg-white rounded-lg shadow-md p-8 mb-8">
                <h2 class="text-3xl font-bold mb-6">Wetgeving</h2>
                
                <div class="space-y-6">
                    <div class="border-b border-gray-200 pb-6">
                        <h3 class="text-xl font-bold mb-3">Heb ik een vergunning nodig voor metaaldetectie in België?</h3>
                        <p class="text-gray-700">
                            Ja, in Vlaanderen heb je een erkenning nodig als metaaldetectorist. Deze kun je aanvragen bij het 
                            Agentschap Onroerend Erfgoed. In Wallonië en Brussel gelden andere regels. Detectum kan je helpen 
                            bij het aanvragen van de juiste vergunningen.
                        </p>
                    </div>
                    
                    <div class="border-b border-gray-200 pb-6">
                        <h3 class="text-xl font-bold mb-3">Waar mag ik zoeken met een metaaldetector?</h3>
                        <p class="text-gray-700">
                            Met een erkenning mag je in Vlaanderen zoeken op terreinen waar je toestemming hebt van de eigenaar. 
                            Je mag niet zoeken op beschermde archeologische sites, in archeologische zones zonder toestemming, 
                            of op terreinen waar een archeologisch onderzoek loopt. Bij twijfel kun je altijd contact opnemen 
                            met Detectum of het Agentschap Onroerend Erfgoed.
                        </p>
                    </div>
                    
                    <div class="border-b border-gray-200 pb-6">
                        <h3 class="text-xl font-bold mb-3">Moet ik al mijn vondsten melden?</h3>
                        <p class="text-gray-700">
                            Ja, in Vlaanderen ben je verplicht om alle archeologische vondsten te melden via de website van het 
                            Agentschap Onroerend Erfgoed binnen 30 dagen na de vondst. Detectum kan je helpen bij het correct 
                            melden van je vondsten.
                        </p>
                    </div>
                    
                    <div>
                        <h3 class="text-xl font-bold mb-3">Wat zijn de recente wijzigingen in de wetgeving?</h3>
                        <p class="text-gray-700">
                            De meest recente wijzigingen betreffen de meldingsplicht, de erkenning van detectoristen en de regels 
                            voor het zoeken op beschermde archeologische sites. Voor een gedetailleerd overzicht van de wijzigingen 
                            kun je terecht op onze nieuwspagina of de website van het Agentschap Onroerend Erfgoed.
                        </p>
                    </div>
                </div>
            </div>
            
            <!-- Volunteer Questions -->
            <div id="vrijwilligers" class="bg-white rounded-lg shadow-md p-8 mb-8">
                <h2 class="text-3xl font-bold mb-6">Vrijwilligers</h2>
                
                <div class="space-y-6">
                    <div class="border-b border-gray-200 pb-6">
                        <h3 class="text-xl font-bold mb-3">Hoeveel tijd kost vrijwilligerswerk bij Detectum?</h3>
                        <p class="text-gray-700">
                            Je bepaalt zelf hoeveel tijd je wilt investeren. Er is geen minimum aantal uren of dagen. 
                            Je kiest zelf aan welke activiteiten je wilt deelnemen.
                        </p>
                    </div>
                    
                    <div class="border-b border-gray-200 pb-6">
                        <h3 class="text-xl font-bold mb-3">Moet ik ervaring hebben met metaaldetectie?</h3>
                        <p class="text-gray-700">
                            Nee, ook beginners zijn welkom. We organiseren regelmatig workshops en trainingen voor nieuwe detectoristen.
                        </p>
                    </div>
                    
                    <div class="border-b border-gray-200 pb-6">
                        <h3 class="text-xl font-bold mb-3">Heb ik een eigen metaaldetector nodig?</h3>
                        <p class="text-gray-700">
                            Voor de meeste activiteiten is een eigen detector handig, maar niet verplicht. Bij sommige evenementen 
                            kunnen we een beperkt aantal detectoren uitlenen.
                        </p>
                    </div>
                    
                    <div>
                        <h3 class="text-xl font-bold mb-3">Kan ik mijn vrijwilligersgegevens later aanpassen?</h3>
                        <p class="text-gray-700">
                            Ja, na registratie kun je inloggen op je persoonlijke account en je gegevens bijwerken, 
                            inclusief je contactgegevens en actieradius voor evenementen.
                        </p>
                    </div>
                </div>
            </div>
            
            <!-- Finds Reporting Questions -->
            <div id="vondsten" class="bg-white rounded-lg shadow-md p-8 mb-8">
                <h2 class="text-3xl font-bold mb-6">Vondsten melden</h2>
                
                <div class="space-y-6">
                    <div class="border-b border-gray-200 pb-6">
                        <h3 class="text-xl font-bold mb-3">Hoe meld ik een vondst?</h3>
                        <p class="text-gray-700">
                            Je kunt je vondst melden via de website van het Agentschap Onroerend Erfgoed of via onze eigen 
                            "Vondst melden" pagina. Wij kunnen je helpen bij het correct documenteren en melden van je vondst.
                        </p>
                    </div>
                    
                    <div class="border-b border-gray-200 pb-6">
                        <h3 class="text-xl font-bold mb-3">Welke informatie moet ik verstrekken bij een vondstmelding?</h3>
                        <p class="text-gray-700">
                            Bij een vondstmelding moet je de volgende informatie verstrekken: een beschrijving van de vondst, 
                            foto's, de vindplaats (coördinaten), de datum van de vondst, en je contactgegevens. Hoe nauwkeuriger 
                            de informatie, hoe waardevoller voor archeologisch onderzoek.
                        </p>
                    </div>
                    
                    <div class="border-b border-gray-200 pb-6">
                        <h3 class="text-xl font-bold mb-3">Mag ik mijn vondsten houden?</h3>
                        <p class="text-gray-700">
                            In de meeste gevallen mag je je vondsten houden na correcte melding. Bij bijzondere vondsten kan het 
                            Agentschap Onroerend Erfgoed of een museum vragen om de vondst tijdelijk of permanent af te staan voor 
                            onderzoek of tentoonstelling. In dat geval krijg je een certificaat van schenking.
                        </p>
                    </div>
                    
                    <div>
                        <h3 class="text-xl font-bold mb-3">Hoe weet ik of mijn vondst belangrijk is?</h3>
                        <p class="text-gray-700">
                            Elke archeologische vondst is potentieel belangrijk, ook als het op het eerste gezicht niet bijzonder lijkt. 
                            Bij twijfel kun je altijd contact opnemen met Detectum of een foto sturen naar onze experts voor advies.
                        </p>
                    </div>
                </div>
            </div>
            
            <!-- Events Questions -->
            <div id="evenementen" class="bg-white rounded-lg shadow-md p-8">
                <h2 class="text-3xl font-bold mb-6">Evenementen</h2>
                
                <div class="space-y-6">
                    <div class="border-b border-gray-200 pb-6">
                        <h3 class="text-xl font-bold mb-3">Hoe kan ik me inschrijven voor evenementen?</h3>
                        <p class="text-gray-700">
                            Je kunt je inschrijven voor evenementen via onze website. Ga naar de pagina "Activiteiten" en klik op 
                            het gewenste evenement. Vervolgens klik je op de knop "Inschrijven" en volg je de instructies.
                        </p>
                    </div>
                    
                    <div class="border-b border-gray-200 pb-6">
                        <h3 class="text-xl font-bold mb-3">Kan ik een evenement annuleren?</h3>
                        <p class="text-gray-700">
                            Ja, je kunt je inschrijving annuleren tot 48 uur voor aanvang van het evenement. Log in op je account 
                            en ga naar "Mijn evenementen" om je inschrijving te annuleren. Bij annulering binnen 48 uur voor aanvang 
                            kunnen kosten in rekening worden gebracht.
                        </p>
                    </div>
                    
                    <div class="border-b border-gray-200 pb-6">
                        <h3 class="text-xl font-bold mb-3">Kan ik zelf een evenement organiseren?</h3>
                        <p class="text-gray-700">
                            Ja, je kunt een voorstel indienen voor een evenement via onze website. Ga naar de pagina "Activiteiten" 
                            en klik op "Evenement voorstellen". Vul het formulier in met alle details van je evenement. Na goedkeuring 
                            door ons team wordt het evenement gepubliceerd op onze website.
                        </p>
                    </div>
                    
                    <div>
                        <h3 class="text-xl font-bold mb-3">Hoe weet ik of mijn evenementvoorstel is goedgekeurd?</h3>
                        <p class="text-gray-700">
                            Na het indienen van je voorstel ontvang je een bevestigingsmail. Ons team beoordeelt je voorstel binnen 
                            5 werkdagen. Je ontvangt een e-mail met de beslissing en eventuele feedback of vragen. Bij goedkeuring 
                            helpen we je met de verdere organisatie en promotie van het evenement.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
