@extends('layouts.admin')

@section('title', 'Vrijwilligers')

@section('content')
<div class="container mx-auto px-4 py-8">
    <div class="flex justify-between items-center mb-6">
        <h1 class="text-3xl font-bold">Vrijwilligers</h1>
        <a href="{{ route('admin.dashboard') }}" class="bg-gray-200 text-gray-700 px-4 py-2 rounded hover:bg-gray-300 transition">Terug naar dashboard</a>
    </div>

    <!-- Search Form -->
    <div class="bg-white rounded-lg shadow-md p-6 mb-8">
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

    <!-- Volunteers List -->
    <div class="bg-white rounded-lg shadow-md p-6">
        <div class="flex justify-between items-center mb-4">
            <h2 class="text-xl font-bold">Alle vrijwilligers</h2>
            <span class="text-gray-500">{{ $volunteers->total() }} vrijwilligers</span>
        </div>

        @if(count($volunteers) > 0)
            <div class="overflow-x-auto">
                <table class="min-w-full">
                    <thead>
                        <tr class="bg-gray-100">
                            <th class="py-3 px-4 text-left">Naam</th>
                            <th class="py-3 px-4 text-left">Stad</th>
                            <th class="py-3 px-4 text-left">Actieradius</th>
                            <th class="py-3 px-4 text-left">E-mail</th>
                            <th class="py-3 px-4 text-left">Telefoon</th>
                            <th class="py-3 px-4 text-left">Acties</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($volunteers as $volunteer)
                            <tr class="border-b hover:bg-gray-50">
                                <td class="py-3 px-4 font-medium">
                                    <a href="{{ route('admin.vrijwilligers.show', $volunteer->id) }}" class="text-blue-600 hover:text-blue-800">
                                        {{ $volunteer->voornaam }} {{ $volunteer->naam }}
                                    </a>
                                </td>
                                <td class="py-3 px-4">{{ $volunteer->stad }}</td>
                                <td class="py-3 px-4">{{ $volunteer->actieradius }} km</td>
                                <td class="py-3 px-4">
                                    <a href="mailto:{{ $volunteer->email }}" class="text-blue-600 hover:text-blue-800">
                                        {{ $volunteer->email }}
                                    </a>
                                </td>
                                <td class="py-3 px-4">{{ $volunteer->telefoon }}</td>
                                <td class="py-3 px-4">
                                    <a href="{{ route('admin.vrijwilligers.show', $volunteer->id) }}" class="text-blue-600 hover:text-blue-800 mr-3">
                                        <i class="fas fa-eye"></i> Bekijken
                                    </a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>

            <!-- Pagination -->
            <div class="mt-6">
                {{ $volunteers->links() }}
            </div>
        @else
            <div class="text-center py-8">
                <div class="text-gray-400 mb-4">
                    <i class="fas fa-users fa-3x"></i>
                </div>
                <p class="text-gray-500">Geen vrijwilligers gevonden.</p>
            </div>
        @endif
    </div>
</div>
@endsection
