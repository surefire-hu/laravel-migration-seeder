@extends('layouts.app')

@section('page-title')
Prossime Partenze
@endsection

@section('next_departures')

<div class="text-center">
    <h1 class="text-2xl font-bold">Next Departures</h1>
</div>
<div class="flex flex-wrap justify-center"> 
    @foreach ($trains as $train)
        <div class="max-w-xs mx-3 my-3 bg-white border border-gray-300 rounded-lg shadow-lg">
            <img src="https://images.unsplash.com/photo-1543967625-f24827a5fdb8?w=500&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8Mjl8fHRyZW5vfGVufDB8MXwwfHx8Mg%3D%3D">
            <div class="p-4">
                <p class="font-bold">Company: <span class="font-semibold">{{ $train->azienda }}</span></p>
                <p class="font-bold">Train Code: <span class="font-semibold">{{ $train->codice_treno }}</span></p>
                <p class="font-bold">Departures Date: <span class="font-semibold">{{ \Carbon\Carbon::parse($train->data_partenza)->format('d-m-Y') }}</span></p>
                <a href="{{ route('train.details', ['id' => $train->id]) }}" class="mt-2 inline-block bg-blue-500 text-white py-2 px-4 rounded">Details</a>
            </div>
        </div>
    @endforeach
</div>
@endsection
