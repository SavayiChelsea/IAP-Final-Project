<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ParkingInvoice extends Model
{
    use HasFactory;

    protected $table = 'parkinginvoice';
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
