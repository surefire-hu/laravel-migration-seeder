@extends('layouts.app')

@section('page-title')
Treni in partenza oggi
@endsection

@section('departure_trains')

<div class="py-3 text-center">
    <h1 class="mt-5 mb-4 text-2xl font-bold">Departures Today</h1>
</div>
@if ($trains->isEmpty())
    <p class="text-center">Nessun treno in partenza oggi.</p>
@else
    <div class="overflow-x-auto">
        <table class="min-w-full bg-white border border-gray-300">
            <thead>
                <tr class="bg-gray-200">
                    <th class="py-2 px-4 border">Company</th>
                    <th class="py-2 px-4 border">Departure Station</th>
                    <th class="py-2 px-4 border">Departure Date</th>
                    <th class="py-2 px-4 border">Arrival Station</th>
                    <th class="py-2 px-4 border">Departure Time</th>
                    <th class="py-2 px-4 border">Arrival Time</th>
                    <th class="py-2 px-4 border">Train Code</th>
                    <th class="py-2 px-4 border">Number of Carriages</th>
                    <th class="py-2 px-4 border">On Time</th>
                    <th class="py-2 px-4 border">Cancelled</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($trains as $train)
                    <tr class="hover:bg-gray-100">
                        <td class="py-2 px-4 border">{{ $train->azienda }}</td>
                        <td class="py-2 px-4 border">{{ $train->stazione_partenza }}</td>
                        <td class="py-2 px-4 border">{{ \Carbon\Carbon::parse($train->data_partenza)->format('d-m-Y') }}</td>
                        <td class="py-2 px-4 border">{{ $train->stazione_arrivo }}</td>
                        <td class="py-2 px-4 border">{{ \Carbon\Carbon::parse($train->orario_partenza)->format('H:i:s') }}</td>
                        <td class="py-2 px-4 border">{{ \Carbon\Carbon::parse($train->orario_arrivo)->format('H:i:s') }}</td>
                        <td class="py-2 px-4 border">{{ $train->codice_treno }}</td>
                        <td class="py-2 px-4 border">{{ $train->numero_carrozze }}</td>
                        <td class="py-2 px-4 border">{{ $train->in_orario ? 'Sì' : 'No' }}</td>
                        <td class="py-2 px-4 border">{{ $train->cancellato ? 'Sì' : 'No' }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endif

@endsection
