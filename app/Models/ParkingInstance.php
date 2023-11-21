<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ParkingInstance extends Model
{
    use HasFactory;

    protected $fillable = [
        'ParkingSpace_id',
        'user_id',
        'likes'
    ];

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function parkingSpace(){
        return $this->belongsTo(ParkingSpaceModel::class);
    }

}
