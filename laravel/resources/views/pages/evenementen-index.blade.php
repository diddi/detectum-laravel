@extends('layouts.app')

@section('title', 'Mijn Evenementen')

@section('content')
<div class="container mx-auto px-4 py-8">
    <!-- Breadcrumb -->
    <div class="flex items-center text-sm text-gray-600 mb-8">
        <a href="{{ route('home') }}" class="hover:text-green-800">Home</a>
        <span class="mx-2">/</span>
        <a href="{{ route('dashboard') }}" class="hover:text-green-800">Dashboard</a>
        <span class="mx-2">/</span>
        <span class="text-gray-800">Mijn Evenementen</span>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-4 gap-8 mb-12">
        <!-- Sidebar -->
        <div class="md:col-span-1">
            <div class="bg-white rounded-lg shadow-md p-6">
                <h3 class="text-xl font-bold mb-4 text-green-800">Mijn Account</h3>
                <ul class="space-y-2">
                    <li class="pl-3 hover:border-l-4 hover:border-green-800"><a href="{{ route('vrijwilligers.profiel') }}" class="text-gray-700 hover:text-green-800">Mijn Profiel</a></li>
                    <li class="border-l-4 border-green-800 pl-3"><a href="{{ route('evenementen.index') }}" class="text-green-800 font-medium">Mijn Evenementen</a></li>
                    <li class="pl-3 hover:border-l-4 hover:border-green-800"><a href="{{ route('dashboard') }}" class="text-gray-700 hover:text-green-800">Dashboard</a></li>
                    <li class="pl-3 hover:border-l-4 hover:border-green-800">
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <a href="{{ route('logout') }}" onclick="event.preventDefault(); this.closest('form').submit();" class="text-gray-700 hover:text-green-800">Uitloggen</a>
                        </form>
                    </li>
                </ul>
            </div>
        </div>

        <!-- Main Content -->
        <div class="md:col-span-3">
            <div class="bg-white rounded-lg shadow-md p-8">
                <div class="flex justify-between items-center mb-6">
                    <h2 class="text-3xl font-bold">Mijn Evenementen</h2>
                    <a href="{{ route('activiteiten') }}" class="bg-green-800 text-white px-4 py-2 rounded hover:bg-green-700 transition">Bekijk alle evenementen</a>
                </div>

                @if(session('success'))
                <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded mb-6">
                    {{ session('success') }}
                </div>
                @endif

                <!-- Tabs -->
                <div class="mb-8 border-b border-gray-200">
                    <div class="flex flex-wrap -mb-px">
                        <button class="mr-2 py-2 px-4 border-b-2 border-green-800 text-green-800 font-medium">
                            Komende evenementen
                        </button>
                        <button class="mr-2 py-2 px-4 border-b-2 border-transparent hover:text-green-800 hover:border-green-800">
                            Afgelopen evenementen
                        </button>
                    </div>
                </div>

                <!-- Upcoming Events -->
                <div class="space-y-6 mb-8">
                    @if(count($upcomingEvents) > 0)
                        @foreach($upcomingEvents as $event)
                        <div class="bg-white border border-gray-200 rounded-lg shadow-sm overflow-hidden">
                            <div class="p-6">
                                <div class="flex justify-between items-start mb-4">
                                    <div>
                                        <div class="inline-block bg-blue-100 text-blue-800 px-3 py-1 rounded-full text-sm font-medium mb-2">
                                            {{ $event->type }}
                                        </div>
                                        <h3 class="text-xl font-bold">{{ $event->titel }}</h3>
                                    </div>
                                    <div class="text-center">
                                        <div class="text-3xl font-bold text-green-800">{{ $event->datum->format('d') }}</div>
                                        <div class="text-sm">{{ $event->datum->format('M') }}</div>
                                    </div>
                                </div>
                                
                                <div class="flex items-center text-gray-600 mb-2">
                                    <i class="far fa-clock mr-2"></i>
                                    <span>{{ $event->start_tijd }} - {{ $event->eind_tijd }}</span>
                                </div>
                                
                                <div class="flex items-center text-gray-600 mb-4">
                                    <i class="fas fa-map-marker-alt mr-2"></i>
                                    <span>{{ $event->locatie }}</span>
                                </div>
                                
                                <div class="flex justify-between items-center">
                                    <span class="text-gray-600">Status: <span class="font-medium text-green-800">Ingeschreven</span></span>
                                    <form action="{{ route('evenementen.cancel', $event->id) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="inline-block bg-red-600 text-white px-4 py-2 rounded hover:bg-red-700 transition" onclick="return confirm('Weet je zeker dat je je inschrijving wilt annuleren?')">
                                            Annuleren
                                        </button>
                                    </form>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    @else
                        <div class="bg-gray-50 p-6 rounded-lg text-center">
                            <p class="text-gray-700 mb-4">Je bent nog niet ingeschreven voor komende evenementen.</p>
                            <a href="{{ route('activiteiten') }}" class="inline-block bg-green-800 text-white px-4 py-2 rounded hover:bg-green-700 transition">Bekijk beschikbare evenementen</a>
                        </div>
                    @endif
                </div>

                <!-- Proposed Events -->
                <div class="mb-8">
                    <h3 class="text-2xl font-bold mb-4">Mijn voorgestelde evenementen</h3>
                    
                    @if(count($proposedEvents) > 0)
                        <div class="space-y-6">
                            @foreach($proposedEvents as $event)
                            <div class="bg-white border border-gray-200 rounded-lg shadow-sm overflow-hidden">
                                <div class="p-6">
                                    <div class="flex justify-between items-start mb-4">
                                        <div>
                                            <div class="inline-block bg-yellow-100 text-yellow-800 px-3 py-1 rounded-full text-sm font-medium mb-2">
                                                {{ $event->type }}
                                            </div>
                                            <h3 class="text-xl font-bold">{{ $event->titel }}</h3>
                                        </div>
                                        <div class="text-center">
                                            <div class="text-3xl font-bold text-green-800">{{ $event->datum->format('d') }}</div>
                                            <div class="text-sm">{{ $event->datum->format('M') }}</div>
                                        </div>
                                    </div>
                                    
                                    <div class="flex items-center text-gray-600 mb-2">
                                        <i class="far fa-clock mr-2"></i>
                                        <span>{{ $event->start_tijd }} - {{ $event->eind_tijd }}</span>
                                    </div>
                                    
                                    <div class="flex items-center text-gray-600 mb-4">
                                        <i class="fas fa-map-marker-alt mr-2"></i>
                                        <span>{{ $event->locatie }}</span>
                                    </div>
                                    
                                    <div class="flex justify-between items-center">
                                        <span class="text-gray-600">Status: 
                                            @if($event->status == 'pending')
                                                <span class="font-medium text-yellow-600">In behandeling</span>
                                            @elseif($event->status == 'approved')
                                                <span class="font-medium text-green-600">Goedgekeurd</span>
                                            @elseif($event->status == 'rejected')
                                                <span class="font-medium text-red-600">Afgewezen</span>
                                            @endif
                                        </span>
                                        <a href="{{ route('evenementen.show', $event->id) }}" class="inline-block bg-gray-600 text-white px-4 py-2 rounded hover:bg-gray-700 transition">
                                            Details
                                        </a>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    @else
                        <div class="bg-gray-50 p-6 rounded-lg text-center">
                            <p class="text-gray-700 mb-4">Je hebt nog geen evenementen voorgesteld.</p>
                            <a href="{{ route('activiteiten.voorstel') }}" class="inline-block bg-green-800 text-white px-4 py-2 rounded hover:bg-green-700 transition">Stel een evenement voor</a>
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
