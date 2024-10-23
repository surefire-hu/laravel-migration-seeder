<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Train;
use Carbon\Carbon;

class NextDepartures extends Controller
{
    public function index()
    {
        $trains = Train::limit(40)->get();

        return view('NextDepartures', compact('trains'));
    }
}