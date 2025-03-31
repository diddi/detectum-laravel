@extends('layouts.admin')

@section('title', 'Admin Dashboard')

@section('content')
<div class="container mx-auto px-4 py-8">
    <h1 class="text-3xl font-bold mb-6">Dashboard</h1>

    <!-- Statistics Cards -->
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mb-8">
        <!-- Volunteers Card -->
        <div class="bg-white rounded-lg shadow-md p-6">
            <div class="flex items-center">
                <div class="p-3 rounded-full bg-blue-100 text-blue-800 mr-4">
                    <i class="fas fa-users text-2xl"></i>
                </div>
                <div>
                    <p class="text-gray-500 text-sm">Vrijwilligers</p>
                    <p class="text-2xl font-bold">{{ $stats['volunteers'] }}</p>
                </div>
            </div>
            <a href="{{ route('admin.vrijwilligers') }}" class="text-blue-600 hover:text-blue-800 text-sm mt-4 inline-block">Bekijk alle vrijwilligers</a>
        </div>

        <!-- Events Card -->
        <div class="bg-white rounded-lg shadow-md p-6">
            <div class="flex items-center">
                <div class="p-3 rounded-full bg-green-100 text-green-800 mr-4">
                    <i class="fas fa-calendar-alt text-2xl"></i>
                </div>
                <div>
                    <p class="text-gray-500 text-sm">Evenementen</p>
                    <p class="text-2xl font-bold">{{ $stats['events'] }}</p>
                </div>
            </div>
            <a href="{{ route('admin.evenementen') }}" class="text-green-600 hover:text-green-800 text-sm mt-4 inline-block">Bekijk alle evenementen</a>
        </div>

        <!-- Pending Events Card -->
        <div class="bg-white rounded-lg shadow-md p-6">
            <div class="flex items-center">
                <div class="p-3 rounded-full bg-yellow-100 text-yellow-800 mr-4">
                    <i class="fas fa-clock text-2xl"></i>
                </div>
                <div>
                    <p class="text-gray-500 text-sm">Wachtende evenementen</p>
                    <p class="text-2xl font-bold">{{ $stats['pending_events'] }}</p>
                </div>
            </div>
            <a href="{{ route('admin.evenementen') }}?status=pending" class="text-yellow-600 hover:text-yellow-800 text-sm mt-4 inline-block">Bekijk wachtende evenementen</a>
        </div>

        <!-- Upcoming Events Card -->
        <div class="bg-white rounded-lg shadow-md p-6">
            <div class="flex items-center">
                <div class="p-3 rounded-full bg-purple-100 text-purple-800 mr-4">
                    <i class="fas fa-calendar-check text-2xl"></i>
                </div>
                <div>
                    <p class="text-gray-500 text-sm">Komende evenementen</p>
                    <p class="text-2xl font-bold">{{ $stats['upcoming_events'] }}</p>
                </div>
            </div>
            <a href="{{ route('admin.evenementen') }}?upcoming=true" class="text-purple-600 hover:text-purple-800 text-sm mt-4 inline-block">Bekijk komende evenementen</a>
        </div>
    </div>

    <div class="grid grid-cols-1 lg:grid-cols-2 gap-8">
        <!-- Recent Volunteers -->
        <div class="bg-white rounded-lg shadow-md p-6">
            <div class="flex justify-between items-center mb-4">
                <h2 class="text-xl font-bold">Recente vrijwilligers</h2>
                <a href="{{ route('admin.vrijwilligers') }}" class="text-blue-600 hover:text-blue-800 text-sm">Bekijk alle</a>
            </div>
            
            @if(count($recentVolunteers) > 0)
                <div class="overflow-x-auto">
                    <table class="min-w-full">
                        <thead>
                            <tr class="bg-gray-100">
                                <th class="py-2 px-4 text-left">Naam</th>
                                <th class="py-2 px-4 text-left">Stad</th>
                                <th class="py-2 px-4 text-left">Actieradius</th>
                                <th class="py-2 px-4 text-left">Datum</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($recentVolunteers as $volunteer)
                                <tr class="border-b">
                                    <td class="py-2 px-4">
                                        <a href="{{ route('admin.vrijwilligers.show', $volunteer->id) }}" class="text-blue-600 hover:text-blue-800">
                                            {{ $volunteer->voornaam }} {{ $volunteer->naam }}
                                        </a>
                                    </td>
                                    <td class="py-2 px-4">{{ $volunteer->stad }}</td>
                                    <td class="py-2 px-4">{{ $volunteer->actieradius }} km</td>
                                    <td class="py-2 px-4">{{ $volunteer->created_at->format('d-m-Y') }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            @else
                <p class="text-gray-500">Geen recente vrijwilligers.</p>
            @endif
        </div>

        <!-- Pending Events -->
        <div class="bg-white rounded-lg shadow-md p-6">
            <div class="flex justify-between items-center mb-4">
                <h2 class="text-xl font-bold">Wachtende evenementen</h2>
                <a href="{{ route('admin.evenementen') }}?status=pending" class="text-yellow-600 hover:text-yellow-800 text-sm">Bekijk alle</a>
            </div>
            
            @if(count($pendingEvents) > 0)
                <div class="overflow-x-auto">
                    <table class="min-w-full">
                        <thead>
                            <tr class="bg-gray-100">
                                <th class="py-2 px-4 text-left">Titel</th>
                                <th class="py-2 px-4 text-left">Type</th>
                                <th class="py-2 px-4 text-left">Datum</th>
                                <th class="py-2 px-4 text-left">Actie</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($pendingEvents as $event)
                                <tr class="border-b">
                                    <td class="py-2 px-4">
                                        <a href="{{ route('admin.evenementen.show', $event->id) }}" class="text-yellow-600 hover:text-yellow-800">
                                            {{ $event->titel }}
                                        </a>
                                    </td>
                                    <td class="py-2 px-4">{{ $event->type }}</td>
                                    <td class="py-2 px-4">{{ $event->datum->format('d-m-Y') }}</td>
                                    <td class="py-2 px-4">
                                        <a href="{{ route('admin.evenementen.show', $event->id) }}" class="text-blue-600 hover:text-blue-800">
                                            Beoordelen
                                        </a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            @else
                <p class="text-gray-500">Geen wachtende evenementen.</p>
            @endif
        </div>
    </div>

    <!-- Volunteer Search -->
    <div class="bg-white rounded-lg shadow-md p-6 mt-8">
        <h2 class="text-xl font-bold mb-4">Zoek vrijwilligers op basis van stad</h2>
        <form action="{{ route('admin.vrijwilligers.search') }}" method="GET" class="flex flex-col md:flex-row gap-4">
            <div class="flex-grow">
                <label for="stad" class="block text-gray-700 font-medium mb-2">Stad</label>
                <input type="text" id="stad" name="stad" required placeholder="Voer een stad in" class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-600">
            </div>
            <div class="self-end">
                <button type="submit" class="bg-blue-600 text-white px-6 py-2 rounded-md hover:bg-blue-700 transition">Zoeken</button>
            </div>
        </form>
        <p class="text-sm text-gray-500 mt-2">
            Zoek vrijwilligers die in de opgegeven stad wonen of waarvan de actieradius deze stad omvat.
        </p>
    </div>
</div>
@endsection
