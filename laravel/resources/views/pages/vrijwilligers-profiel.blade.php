@extends('layouts.app')

@section('title', 'Mijn Profiel')

@section('content')
<div class="container mx-auto px-4 py-8">
    <!-- Breadcrumb -->
    <div class="flex items-center text-sm text-gray-600 mb-8">
        <a href="{{ route('home') }}" class="hover:text-green-800">Home</a>
        <span class="mx-2">/</span>
        <a href="{{ route('dashboard') }}" class="hover:text-green-800">Dashboard</a>
        <span class="mx-2">/</span>
        <span class="text-gray-800">Mijn Profiel</span>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-4 gap-8 mb-12">
        <!-- Sidebar -->
        <div class="md:col-span-1">
            <div class="bg-white rounded-lg shadow-md p-6">
                <h3 class="text-xl font-bold mb-4 text-green-800">Mijn Account</h3>
                <ul class="space-y-2">
                    <li class="border-l-4 border-green-800 pl-3"><a href="{{ route('vrijwilligers.profiel') }}" class="text-green-800 font-medium">Mijn Profiel</a></li>
                    <li class="pl-3 hover:border-l-4 hover:border-green-800"><a href="{{ route('evenementen.index') }}" class="text-gray-700 hover:text-green-800">Mijn Evenementen</a></li>
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
                    <h2 class="text-3xl font-bold">Mijn Profiel</h2>
                    <a href="{{ route('vrijwilligers.edit') }}" class="bg-green-800 text-white px-4 py-2 rounded hover:bg-green-700 transition">Bewerken</a>
                </div>

                @if(session('success'))
                <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded mb-6">
                    {{ session('success') }}
                </div>
                @endif

                <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-8">
                    <div>
                        <h3 class="font-bold text-lg mb-2">Persoonlijke gegevens</h3>
                        <div class="bg-gray-50 p-4 rounded-lg">
                            <div class="mb-3">
                                <span class="text-gray-600 block">Naam:</span>
                                <span class="font-medium">{{ $volunteer->voornaam }} {{ $volunteer->naam }}</span>
                            </div>
                            <div class="mb-3">
                                <span class="text-gray-600 block">E-mailadres:</span>
                                <span class="font-medium">{{ $volunteer->email }}</span>
                            </div>
                            <div>
                                <span class="text-gray-600 block">Telefoonnummer:</span>
                                <span class="font-medium">{{ $volunteer->telefoon }}</span>
                            </div>
                        </div>
                    </div>

                    <div>
                        <h3 class="font-bold text-lg mb-2">Adresgegevens</h3>
                        <div class="bg-gray-50 p-4 rounded-lg">
                            <div class="mb-3">
                                <span class="text-gray-600 block">Adres:</span>
                                <span class="font-medium">{{ $volunteer->adres }}</span>
                            </div>
                            <div class="mb-3">
                                <span class="text-gray-600 block">Postcode:</span>
                                <span class="font-medium">{{ $volunteer->postcode }}</span>
                            </div>
                            <div>
                                <span class="text-gray-600 block">Stad:</span>
                                <span class="font-medium">{{ $volunteer->stad }}</span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="mb-8">
                    <h3 class="font-bold text-lg mb-2">Vrijwilligersgegevens</h3>
                    <div class="bg-gray-50 p-4 rounded-lg">
                        <div class="mb-3">
                            <span class="text-gray-600 block">Actieradius:</span>
                            <span class="font-medium">{{ $volunteer->actieradius }} km</span>
                        </div>
                        <div class="mb-3">
                            <span class="text-gray-600 block">Ervaring:</span>
                            <span class="font-medium">{{ $volunteer->ervaring ?: 'Niet opgegeven' }}</span>
                        </div>
                        <div>
                            <span class="text-gray-600 block">Interesses:</span>
                            <span class="font-medium">{{ $volunteer->interesses ?: 'Niet opgegeven' }}</span>
                        </div>
                    </div>
                </div>

                <div>
                    <h3 class="font-bold text-lg mb-2">Account instellingen</h3>
                    <div class="bg-gray-50 p-4 rounded-lg">
                        <div class="mb-3">
                            <span class="text-gray-600 block">Account aangemaakt op:</span>
                            <span class="font-medium">{{ $volunteer->created_at->format('d-m-Y') }}</span>
                        </div>
                        <div>
                            <span class="text-gray-600 block">Laatste update:</span>
                            <span class="font-medium">{{ $volunteer->updated_at->format('d-m-Y') }}</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
