<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\HotelStaff;

class hotelstafftableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $s1 = new staff;

        $s1->name = "jeff";
        $s1->mobile = "9822388736";
        $s1->Hotel_id = 1;
        $s1->save();


    }
}
