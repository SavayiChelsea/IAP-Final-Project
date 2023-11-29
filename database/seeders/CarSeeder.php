<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Car;
use App\Models\User;

class CarSeeder extends Seeder
{
    public function run()
    {
        // Assuming you have users in the 'users' table
        $users = User::all();

        // Insert example data into the 'cars' table
        foreach ($users as $user) {
            Car::create([
                'user_id' => $user->id,
                'license_plate' => 'ABC123', // Replace with actual license plates
                'parking_number' => 'P001',
                'parking_duration' => rand(1, 24), // Random duration for testing
                'parking_fee' => rand(10, 50), // Random fee for testing
                'parked_at' => now(),
                // Add other attributes as needed
            ]);
            Car::create([
                'user_id' => $user->id,
                'license_plate' => 'ABC124', // Replace with actual license plates
                'parking_number' => 'P002',
                'parking_duration' => rand(1, 24), // Random duration for testing
                'parking_fee' => rand(10, 50), // Random fee for testing
                'parked_at' => now(),
                // Add other attributes as needed
            ]);
        }
    }
}
