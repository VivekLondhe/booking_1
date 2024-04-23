<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class hotelmanager extends Model
{
    use HasFactory;
    public function hotels()
    {
        return $this->belongsTo(hotel::class);
    }  
    public function staff()
    {
        return $this->hasMany(hotelstaff::class);
    }     
}

