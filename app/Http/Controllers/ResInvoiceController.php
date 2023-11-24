<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ResInvoice;

class ResInvoiceController extends Controller
{
    public function show(){

        $resInvoice = ResInvoice::all();
        
        return view('invoice', compact('resInvoices'));  

    }
}
