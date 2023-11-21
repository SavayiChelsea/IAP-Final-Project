<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ParkingSpace extends Model
{
    use HasFactory;
    
    protected $table = 'parkingspace';
    protected $fillable = [
        'Section',
        'availability',
        'state'
    ];

 
    public function index()
    {
        // Fetch all parking spaces from the database
        $parkingSpaces = ParkingSpace::all();

        // Pass the data to the 'lot.blade.php' view
        return view('lot', compact('parkingSpaces'));
    }
}
