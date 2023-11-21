<?php

namespace Database\Seeders;

use App\Models\Charges as ModelsCharges;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class Charges extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $charges = [
            [
                'id' => 1,
                'description' => 'Double Parking',
                'price' => 1000
            ]
        ];

        ModelsCharges::insert($charges);
    }
}
