<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ResPayments extends Model
{
    use HasFactory;

    protected $table = 'respayments';
    public function user(){
        return $this->belongsTo(User::class);
    }

}
