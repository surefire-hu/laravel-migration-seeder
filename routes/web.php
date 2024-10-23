<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TrainController;
use App\Http\Controllers\NextDepartures;

Route::get('/', [TrainController::class, 'index'])->name('departures.today');

Route::get('/next-departures', [NextDepartures::class, 'index'])->name('next.departures');

Route::get('/trains/{id}', [TrainController::class, 'show'])->name('train.details');