<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Task;

class tsaktableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $t = new task;
        $k->name ="cleaning";
        $k->name ="243434";
        $t->save;
        $t->hotelstaff()->attach(1);
        $t->hotelstaff()->attach(2);
    }
}
