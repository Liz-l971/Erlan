<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bron extends Model
{
    use HasFactory;
    protected $guarded =[];


    public function raceFrom(){
        return $this->belongsTo(Race::class,'race_from');
    }
    public function raceTo(){
        return $this->belongsTo(Race::class,'race_to');
    }

    public function numberBron(){
        return $this->belongsTo(Number::class,'number');
    }
}
