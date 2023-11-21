<?php

namespace Database\Seeders;

use App\Models\ParkingSpace;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ParkingSpaceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        $spaces = [
            [
                'id'=> 1,
                'Section' => '1',
                'Availability' => 'AVAILABLE',
                'status' => 'NOT RESERVED',
            ],
            [
                'id'=> 2,
                'Section' => '1',
                'Availability' => 'AVAILABLE',
                'status' => 'NOT RESERVED',
            ],
            [
                'id'=> 3,
                'Section' => '1',
                'Availability' => 'AVAILABLE',
                'status' => 'NOT RESERVED',
            ],
            [
                'id'=> 4,
                'Section' => '1',
                'Availability' => 'AVAILABLE',
                'status' => 'NOT RESERVED',
            ],
            [
                'id'=> 5,
                'Section' => '1',
                'Availability' => 'AVAILABLE',
                'status' => 'RESERVED',
            ],
            [
                'id'=> 6,
                'Section' => '1',
                'Availability' => 'AVAILABLE',
                'status' => 'NOT RESERVED',
            ],
            [
                'id'=> 7,
                'Section' => '1',
                'Availability' => 'NOT AVAILABLE',
                'status' => 'NOT RESERVED',
            ],
            [
                'id'=> 8,
                'Section' => '1',
                'Availability' => 'AVAILABLE',
                'status' => 'NOT RESERVED',
            ],
            [
                'id'=> 9,
                'Section' => '1',
                'Availability' => 'AVAILABLE',
                'status' => 'NOT RESERVED',
            ],
            [
                'id'=> 10,
                'Section' => '1',
                'Availability' => 'AVAILABLE',
                'status' => 'NOT RESERVED',
            ],
            [
                'id'=> 11,
                'Section' => '2',
                'Availability' => 'AVAILABLE',
                'status' => 'NOT RESERVED',
            ],
            [
                'id'=> 12,
                'Section' => '2',
                'Availability' => 'AVAILABLE',
                'status' => 'RESERVED',
            ],
            [
                'id'=> 13,
                'Section' => '2',
                'Availability' => 'AVAILABLE',
                'status' => 'NOT RESERVED',
            ],
            [
                'id'=> 14,
                'Section' => '2',
                'Availability' => 'NOT AVAILABLE',
                'status' => 'NOT RESERVED',
            ],
            [
                'id'=> 15,
                'Section' => '2',
                'Availability' => 'AVAILABLE',
                'status' => 'NOT RESERVED',
            ],
            [
                'id'=> 16,
                'Section' => '2',
                'Availability' => 'AVAILABLE',
                'status' => 'NOT RESERVED',
            ],
            [
                'id'=> 17,
                'Section' => '2',
                'Availability' => 'AVAILABLE',
                'status' => 'NOT RESERVED',
            ],
            [
                'id'=> 18,
                'Section' => '2',
                'Availability' => 'AVAILABLE',
                'status' => 'NOT RESERVED',
            ],
            [
                'id'=> 19,
                'Section' => '2',
                'Availability' => 'AVAILABLE',
                'status' => 'RESERVED',
            ],
            [
                'id'=> 20,
                'Section' => '2',
                'Availability' => 'AVAILABLE',
                'status' => 'NOT RESERVED',
            ],
            [
                'id'=> 21,
                'Section' => '3',
                'Availability' => 'NOT AVAILABLE',
                'status' => 'NOT RESERVED',
            ],
            [
                'id'=> 22,
                'Section' => '3',
                'Availability' => 'AVAILABLE',
                'status' => 'NOT RESERVED',
            ],
            [
                'id'=> 23,
                'Section' => '3',
                'Availability' => 'AVAILABLE',
                'status' => 'NOT RESERVED',
            ],
            [
                'id'=> 24,
                'Section' => '3',
                'Availability' => 'AVAILABLE',
                'status' => 'NOT RESERVED',
            ],
            [
                'id'=> 25,
                'Section' => '3',
                'Availability' => 'AVAILABLE',
                'status' => 'NOT RESERVED',
            ],
            [
                'id'=> 26,
                'Section' => '3',
                'Availability' => 'AVAILABLE',
                'status' => 'RESERVED',
            ],
            [
                'id'=> 27,
                'Section' => '3',
                'Availability' => 'AVAILABLE',
                'status' => 'NOT RESERVED',
            ],
            [
                'id'=> 28,
                'Section' => '3',
                'Availability' => 'NOT AVAILABLE',
                'status' => 'NOT RESERVED',
            ],
            [
                'id'=> 29,
                'Section' => '3',
                'Availability' => 'AVAILABLE',
                'status' => 'NOT RESERVED',
            ],
            [
                'id'=> 30,
                'Section' => '3',
                'Availability' => 'AVAILABLE',
                'status' => 'NOT RESERVED',
            ],
            [
                'id'=> 31,
                'Section' => '4',
                'Availability' => 'AVAILABLE',
                'status' => 'NOT RESERVED',
            ],
            [
                'id'=> 32,
                'Section' => '4',
                'Availability' => 'AVAILABLE',
                'status' => 'NOT RESERVED',
            ],
            [
                'id'=> 33,
                'Section' => '4',
                'Availability' => 'AVAILABLE',
                'status' => 'RESERVED',
            ],
            [
                'id'=> 34,
                'Section' => '4',
                'Availability' => 'AVAILABLE',
                'status' => 'NOT RESERVED',
            ],
            [
                'id'=> 35,
                'Section' => '4',
                'Availability' => 'NOT AVAILABLE',
                'status' => 'NOT RESERVED',
            ],
            [
                'id'=> 36,
                'Section' => '4',
                'Availability' => 'AVAILABLE',
                'status' => 'NOT RESERVED',
            ],
            [
                'id'=> 37,
                'Section' => '4',
                'Availability' => 'AVAILABLE',
                'status' => 'NOT RESERVED',
            ],
            [
                'id'=> 38,
                'Section' => '4',
                'Availability' => 'AVAILABLE',
                'status' => 'NOT RESERVED',
            ],
            [
                'id'=> 39,
                'Section' => '4',
                'Availability' => 'AVAILABLE',
                'status' => 'NOT RESERVED',
            ],
            [
                'id'=> 40,
                'Section' => '4',
                'Availability' => 'AVAILABLE',
                'status' => 'NOT RESERVED',
            ],
        ];

        ParkingSpace::insert($spaces);
    }
}
