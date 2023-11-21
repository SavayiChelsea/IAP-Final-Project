<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ChargeInvoice extends Model
{
    use HasFactory;

    public function charges(){
        return $this->hasMany(Charges::class);
    }

}
