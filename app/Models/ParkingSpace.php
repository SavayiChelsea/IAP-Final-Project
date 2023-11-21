<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ParkingSpace extends Model
{
    use HasFactory;

    protected $fillable = [
        'Section',
        'availability',
        'state'
    ];

    public function parkingInstances(){
        return $this->hasMany(ParkingInstanceModel::class);
    }

}
