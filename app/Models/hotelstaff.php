<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class hotelstaff extends Model
{
    use HasFactory;
    public function hotelmanager()
    {
        return $this->belongsTo(hotelmanager::class);
    }  
    public function tasks()
    {
        return $this->belongsToMany(task::class);
    }  
}
