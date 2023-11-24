<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ParkingInvoice;
use App\Models\User;

class ParkingInvoiceController extends Controller
{
    public function show(User $user){

        $parkingInvoices = ParkingInvoice::all();
        
        return view('invoice', compact('parkingInvoices','user'));  

    }
        
}