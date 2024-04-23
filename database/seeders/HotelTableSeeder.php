<?php

namespace Database\Seeders;
use App\Models\Hotel;


use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;


class hoteltableseeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $h1 = new Hotel;
        
        $h1->name = "Krishna";
        $h1->mobile = "9822977709";
        $h1->save();

        Hotel::factory()->count(50)->create();
    }
}
