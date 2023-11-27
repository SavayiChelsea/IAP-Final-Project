<?php

namespace App\Http\Controllers;

use App\Models\ParkingInstance;
use App\Models\ParkingInvoice;
use App\Models\ParkingSpace;
use App\Models\PriceRates;
use App\Models\User;
use Illuminate\Http\Request;

class ParkingInstanceController extends Controller
{
    public function index()
    {
        return view('admin.instance');
    }


    public function store(Request $request)
{
    // Retrieve user based on the license plate
    $licensePlate = $request->input('licence');
    $user = User::where('licenseplate', $licensePlate)->first();

    if ($user) {
        $parkingInstance = new ParkingInstance();
        $parkingInstance->parkingSpace_id = $request->input('parkingSpace_id');

        // Associate the user with the parking instance
        $parkingInstance->user()->associate($user);

        // Save the ParkingInstance
        $parkingInstance->save();

        $parkingSpaceId = $request->input('parkingSpace_id');
        if ($parkingSpaceId) {
            $parkingSpace = ParkingSpace::find($parkingSpaceId);
            if ($parkingSpace) {
                $parkingSpace->Availability = 'NOT AVAILABLE';
                $parkingSpace->save();
            }
        }

        return redirect()->route('admin.instance')->with('success', 'Parking Instance created successfully!!!');
    } else {
        // Handle the case where no user with the provided license plate was found
        return redirect()->back()->with('error', 'User with this license plate not found.');
    }
}

    public function update(Request $request){

        $licensePlate = $request->input('licence');
        $parkingSpaceId = $request->input('parkingSpace_id');
        $user = User::where('licenseplate', $licensePlate)->first();

        if ($user) {

            // Retrieve the specific ParkingInstance based on license plate and parking space ID
            $parkingInstance = ParkingInstance::where('user_id', $user->id)
            ->where('parkingSpace_id', $parkingSpaceId)
            ->orderBy('created_at', 'desc') // Assuming the latest record is the active one
            ->first();

            if ($parkingInstance) {
                // Update updated_at timestamp
                $parkingInstance->touch();

                // Calculate duration
                $duration = $parkingInstance->updated_at->diffInHours($parkingInstance->created_at);

                // Retrieve price from the Price table (assuming price per hour)
                $price = PriceRates::first()->price; // Assuming a single price for simplicity

                // Calculate total cost
                $totalCost = $duration * $price;

                // Create a new invoice record in ParkingInvoice table
                $parkingInvoice = new ParkingInvoice();
                $parkingInvoice->parkingInstance_id = $parkingInstance->id;
                $parkingInvoice->user_id = $parkingInstance->user_id;
                $parkingInvoice->invoice = $totalCost;
                // Set other invoice details as needed
                $parkingInvoice->save();

                if ($parkingSpaceId) {
                    $parkingSpace = ParkingSpace::find($parkingSpaceId);
                    if ($parkingSpace) {
                        $parkingSpace->Availability = 'AVAILABLE';
                        $parkingSpace->save();
                    }
                }

                return redirect()->route('admin.instance')->with('absolute', 'Parking space freed successfully!!!');

            }
        }
    }

}