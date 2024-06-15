<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;


class Hotel extends Model
{
    use HasFactory;

    protected $guarded =[];

    public function imageHotel(){

        $imageUrl = Storage::url('hotels/' . $this->file);
    
        return $imageUrl;
    }

    public function freeNumber(){
        $minPrice = Number::where('hotel', $this->id)->min('cost');
        return $minPrice;
    }

    public function numbers(){
        return Number::where('hotel', $this->id)->get();
    }
}
