<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class hotel extends Model
{
    use HasFactory;
    public function hotelmanager()
    {
        return $this->hasOne(hotelmanager::class);
    }   
}
