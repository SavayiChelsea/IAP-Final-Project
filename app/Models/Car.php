<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    use HasFactory;

    protected $fillable = [
        'license_plate',
        'parking_number',
        'parking_duration',
        'parking_fee',
        'parked_at',
        // Add other attributes as needed
    ];

    protected $dates = ['parked_at'];

    // You may have a relationship with the User model if each car belongs to a user
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
