<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Car; 

class CarController extends Controller
{
    public function carParkStatistics()
    {
        // Assuming you have a 'parked_at' timestamp column in the cars table
        $todayCars = Car::whereDate('parked_at', now()->toDateString())->get();
        $revenue = $todayCars->sum('parking_fee');

        return view('carpark.statistics', [
            'revenue' => $revenue,
            'carsParked' => $todayCars->unique('license_plate')->count(),
        ]);
    }
}