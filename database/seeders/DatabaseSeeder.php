<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Cristiano Morgante',
        //     'email' => 'cris@digi.com',
        // ]);

        $this->call([
          TravelSeeder::class,
          TeamSeeder::class,
          DrivingSeeder::class,
          InvoiceSeeder::class,
      ]);
    }
}
