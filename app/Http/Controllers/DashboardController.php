<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ParkingSpace;

class DashboardController extends Controller
{
    public function index()
    {
     
        $parkingSpaces = ParkingSpace::all();

        // Pass the data to the 'lot.blade.php' view
        return view('dashboard', compact('parkingSpaces'));
    }

    public function services()
    {
     
        return view('services');
    }

    public function faqs()
    {
        return view('faqs');
    }
}
