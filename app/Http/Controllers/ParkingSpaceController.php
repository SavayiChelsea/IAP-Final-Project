<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ParkingSpace;
class ParkingSpaceController extends Controller
{
    public function index()
{
    // Fetch available parking spaces from the database
    $parkingSpaces = ParkingSpace::where('status', 'available')->get();

    // Pass the parking spaces data to the view
    return view('parking-spaces.index', compact('parkingSpaces'));
}
public function reserve(Request $request, $id)
{
    // Find the parking space by ID
    $parkingSpace = ParkingSpace::findOrFail($id);

    // Check if the parking space is available
    if ($parkingSpace->status === 'available') {
        // Reserve the parking space for the authenticated user
        $parkingSpace->status = 'reserved';
        $parkingSpace->user_id = auth()->user()->id;
        $parkingSpace->save();

        // You can optionally broadcast an event here to notify other users about the reservation
        // For real-time updates using Laravel Echo and Pusher

        return redirect('/parking-spaces')->with('success', 'Parking space reserved successfully!');
    } else {
        return redirect('/parking-spaces')->with('error', 'Parking space is already reserved.');
    }
}
}
