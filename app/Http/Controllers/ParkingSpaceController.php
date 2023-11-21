<?php

namespace App\Http\Controllers;

use App\Models\ParkingSpace;
use Illuminate\Http\Request;

class ParkingSpaceController extends Controller
{
   public function show(){

    dump(ParkingSpace::all());

    return view('dashboard',[
        'parkingSpace'=> ParkingSpace::all()
    ]);

   }

}
