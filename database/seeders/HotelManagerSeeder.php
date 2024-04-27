<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\HotelManager;

class hotelmanegerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $m = new hotelmaneger;

        $m->name = "Tony";
        $m->mobile = "4690422595";
        $m->Hotel_id = 1;
        $m->save();
    }
}
