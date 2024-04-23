<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\HotelManegerSeeder;
use App\Models\HotelStaffSeeder;
use App\Models\TaskSeeder;
use App\Models\HotelSeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        $this->call(hotelmanagerTableSeeder::class);
        $this->call(hotelstaffTableSeeder::class);
        $this->call(hotelTableSeeder::class);
        $this->call(taskTableSeeder::class);
    }
}
