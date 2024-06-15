<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Carbon\Carbon;

class Race extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function ship($id){
        return  Ship::where('id',$id)->first();
    }

    public function timeFly(){
        $dateFromOtcuda = Carbon::parse($this->time_otb);
        $dateFromCuda = Carbon::parse($this->time_prib);

        $timeFlyFrom = $dateFromOtcuda->diffInDays($dateFromCuda);

        return $timeFlyFrom;
    }

}
