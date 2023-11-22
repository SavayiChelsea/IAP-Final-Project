<?php

namespace App\Http\Controllers;

use App\Models\ParkingSpace;
use Illuminate\Http\Request;

class ParkingSpaceController extends Controller
{
   public function show(){

    // Fetch all parking spaces from the database
    $parkingSpaces = ParkingSpace::all();

    // Pass the data to the 'lot.blade.php' view
    return view('lot', compact('parkingSpaces'));
    
   }

}
