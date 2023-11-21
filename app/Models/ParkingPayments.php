<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ParkingPayments extends Model
{
    use HasFactory;

    public function parkingInvoices(){
        return $this->hasMany(parkingInvoices::class);
    }


}
