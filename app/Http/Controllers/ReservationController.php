<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ParkingSpace;
use App\Models\Reservation;
use App\Models\ResInvoice;
use Illuminate\Support\Facades\Auth;

class ReservationController extends Controller
{

    public function index(){

        $parkingSpaces = ParkingSpace::all();
        return view('admin.reservation', compact('parkingSpaces'));

    }

    public function reserveParkingSpaces(Request $request)
    {
        $parkingSpace_id = $request->input('parkingSpace_id');
        $amountCharged = $request->input('amountCharged');
        $duration = $request->input('duration');

        

        $reservation = new Reservation();
        $reservation->parkingSpace_id = $parkingSpace_id;
        $reservation->duration = $duration;
        $reservation->save();

        $reservationId = Reservation::where('parkingSpace_id', $parkingSpace_id)
            ->orderBy('created_at', 'desc')
            ->first();

        $user = Auth::user();
        if ($user) {
            $resInvoice = new ResInvoice();
            $resInvoice->res_id = $reservationId->id;
            $resInvoice->user_id = $user->id;
            $resInvoice->state = "Not Paid";
            $resInvoice->Amountcharged = $amountCharged;
            $resInvoice->save();
        }

        $parkingSpace = ParkingSpace::find($parkingSpace_id);
        if ($parkingSpace) {
            $parkingSpace->status = 'RESERVED';
            $parkingSpace->save();
        }

        return redirect()->route('admin.reservation')->with('success', 'Parking Space Reserved Successfully!!!');


    }
}