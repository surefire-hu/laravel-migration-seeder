@extends('layouts.app')

@section('details')
<div class="flex justify-center">
    <div class="max-w-lg bg-white border border-gray-300 rounded-lg shadow-lg">
        <img src="https://images.unsplash.com/photo-1543967625-f24827a5fdb8?w=500&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8Mjl8fHRyZW5vfGVufDB8MXwwfHx8Mg%3D%3D">
        <div class="p-4">
            <h3 class="text-xl font-bold">Dettagli del Treno</h3>
            <p>Azienda: {{ $train->azienda }}</p>
            <p>Codice Treno: {{ $train->codice_treno }}</p>
            <p>Stazione di Partenza: {{ $train->stazione_partenza }}</p>
            <p>Stazione di Arrivo: {{ $train->stazione_arrivo }}</p>
            <p>Data di Partenza: {{ \Carbon\Carbon::parse($train->data_partenza)->format('d-m-Y') }}</p>
            <p>Orario di Partenza: {{ $train->orario_partenza }}</p>
            <p>Orario di Arrivo: {{ $train->orario_arrivo }}</p>
            <p>Numero Carrozze: {{ $train->numero_carrozze }}</p>
            <p>In Orario: {{ $train->in_orario ? 'Sì' : 'No' }}</p>
            <p>Cancellato: {{ $train->cancellato ? 'Sì' : 'No' }}</p>
            <a href="#" class="mt-2 inline-block bg-blue-500 text-white py-2 px-4 rounded">Buy</a>
        </div>
    </div>
</div>
@endsection
