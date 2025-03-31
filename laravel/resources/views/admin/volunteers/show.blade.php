@extends('layouts.admin')

@section('title', 'Vrijwilliger details')

@section('content')
<div class="container mx-auto px-4 py-8">
    <div class="flex justify-between items-center mb-6">
        <h1 class="text-3xl font-bold">Vrijwilliger details</h1>
        <div>
            <a href="{{ route('admin.vrijwilligers') }}" class="bg-gray-200 text-gray-700 px-4 py-2 rounded hover:bg-gray-300 transition mr-2">Terug naar overzicht</a>
            <a href="mailto:{{ $volunteer->email }}" class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700 transition">E-mail versturen</a>
        </div>
    </div>

    <!-- Volunteer Details -->
    <div class="bg-white rounded-lg shadow-md p-8 mb-8">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
            <!-- Personal Information -->
            <div>
                <h2 class="text-xl font-bold mb-4 text-blue-800">Persoonlijke gegevens</h2>
                <div class="space-y-4">
                    <div>
                        <h3 class="text-gray-500 text-sm">Naam</h3>
                        <p class="font-medium">{{ $volunteer->voornaam }} {{ $volunteer->naam }}</p>
                    </div>
                    <div>
                        <h3 class="text-gray-500 text-sm">E-mailadres</h3>
                        <p class="font-medium">
                            <a href="mailto:{{ $volunteer->email }}" class="text-blue-600 hover:text-blue-800">
                                {{ $volunteer->email }}
                            </a>
                        </p>
                    </div>
                    <div>
                        <h3 class="text-gray-500 text-sm">Telefoonnummer</h3>
                        <p class="font-medium">{{ $volunteer->telefoon }}</p>
                    </div>
                    <div>
                        <h3 class="text-gray-500 text-sm">Geregistreerd op</h3>
                        <p class="font-medium">{{ $volunteer->created_at->format('d-m-Y') }}</p>
                    </div>
                    <div>
                        <h3 class="text-gray-500 text-sm">Laatst bijgewerkt op</h3>
                        <p class="font-medium">{{ $volunteer->updated_at->format('d-m-Y') }}</p>
                    </div>
                </div>
            </div>

            <!-- Address Information -->
            <div>
                <h2 class="text-xl font-bold mb-4 text-blue-800">Adresgegevens</h2>
                <div class="space-y-4">
                    <div>
                        <h3 class="text-gray-500 text-sm">Adres</h3>
                        <p class="font-medium">{{ $volunteer->adres }}</p>
                    </div>
                    <div>
                        <h3 class="text-gray-500 text-sm">Postcode</h3>
                        <p class="font-medium">{{ $volunteer->postcode }}</p>
                    </div>
                    <div>
                        <h3 class="text-gray-500 text-sm">Stad</h3>
                        <p class="font-medium">{{ $volunteer->stad }}</p>
                    </div>
                    <div>
                        <h3 class="text-gray-500 text-sm">Actieradius</h3>
                        <p class="font-medium">{{ $volunteer->actieradius }} km</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Additional Information -->
        <div class="mt-8">
            <h2 class="text-xl font-bold mb-4 text-blue-800">Aanvullende informatie</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                <div>
                    <h3 class="text-gray-500 text-sm">Ervaring</h3>
                    <p class="font-medium">{{ $volunteer->ervaring ?: 'Niet opgegeven' }}</p>
                </div>
                <div>
                    <h3 class="text-gray-500 text-sm">Interesses</h3>
                    <p class="font-medium">{{ $volunteer->interesses ?: 'Niet opgegeven' }}</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Registered Events -->
    <div class="bg-white rounded-lg shadow-md p-8">
        <h2 class="text-xl font-bold mb-4">Ingeschreven evenementen</h2>
        
        @if(count($volunteer->events) > 0)
            <div class="overflow-x-auto">
                <table class="min-w-full">
                    <thead>
                        <tr class="bg-gray-100">
                            <th class="py-3 px-4 text-left">Evenement</th>
                            <th class="py-3 px-4 text-left">Type</th>
                            <th class="py-3 px-4 text-left">Datum</th>
                            <th class="py-3 px-4 text-left">Locatie</th>
                            <th class="py-3 px-4 text-left">Acties</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($volunteer->events as $event)
                            <tr class="border-b hover:bg-gray-50">
                                <td class="py-3 px-4 font-medium">
                                    <a href="{{ route('admin.evenementen.show', $event->id) }}" class="text-blue-600 hover:text-blue-800">
                                        {{ $event->titel }}
                                    </a>
                                </td>
                                <td class="py-3 px-4">{{ $event->type }}</td>
                                <td class="py-3 px-4">{{ $event->datum->format('d-m-Y') }}</td>
                                <td class="py-3 px-4">{{ $event->locatie }}</td>
                                <td class="py-3 px-4">
                                    <a href="{{ route('admin.evenementen.show', $event->id) }}" class="text-blue-600 hover:text-blue-800">
                                        <i class="fas fa-eye"></i> Bekijken
                                    </a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        @else
            <p class="text-gray-500">Deze vrijwilliger is nog niet ingeschreven voor evenementen.</p>
        @endif
    </div>
</div>
@endsection
