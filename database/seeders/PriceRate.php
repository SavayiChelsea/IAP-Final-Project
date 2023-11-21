<?php

namespace Database\Seeders;

use App\Models\PriceRates;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PriceRate extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $prices = [
            [
                'id' => 1,
                'description' => 'Hourly',
                'price' => 50
            ]
        ];

        PriceRates::insert($prices);

    }
}
