<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DrivingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \App\Models\Driving::factory()->forUser()->forTravel()->create();
    }
}
