<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Session;


class Number extends Model
{
    use HasFactory;

    protected $guarded = [];


    public function imageNumber(){

        $imageUrl = Storage::url('ships/');
    
        return $imageUrl;
    }

    public function numberCost(){
        $idNumber=Session::get('number')->id_number;
        $number =  Number::where('id',$idNumber)->first();
        $cost = $number['cost'];
        return $cost;
    }

    public function hotelBron(){
        return $this->belongsTo(Hotel::class,'hotel');
    }
}
