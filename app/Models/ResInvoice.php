<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ResInvoice extends Model
{
    use HasFactory;

    protected $table = 'resinvoice';
    public function user(){
        return $this->belongsTo(User::class);
    }

}
