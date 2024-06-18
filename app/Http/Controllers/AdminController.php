<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\AddShipRequest;
use App\Http\Requests\AddHotelRequest;
use App\Models\Ship;
use App\Models\Hotel;
use App\Models\Number;
use App\Http\Requests\AddNumber;
use App\Http\Requests\AddRaceRequest;
use App\Models\Bron;
use App\Models\Race;
class AdminController extends Controller
{
    //

    public function changeBronStatus(Bron $bron){
        $bron->update(['status'=>0]);
        return redirect('/profile');
    }
     public function addShip(AddShipRequest $request){
        $data = $request->validated();

        if ($request->hasFile('img_one')) {
            $data['img_one'] = basename($request->file('img_one')->store('public/ships')); 
        }

        if ($request->hasFile('img_two')) {
            $data['img_two'] = basename($request->file('img_two')->store('public/ships')); 
        }

        if ($request->hasFile('img_three')) {
            $data['img_three'] = basename($request->file('img_three')->store('public/ships')); 
        }

        Ship::create($data);

        return redirect('/profile');

     }

     public function addHotel(AddHotelRequest $request){


        $data = $request->validated();

        if ($request->hasFile('img')) {
            $data['img'] = basename($request->file('img')->store('public/hotels')); 
        }

        Hotel::create($data);

        return redirect('/profile');

     }

     public function addNumber(AddNumber $request){

        $data = $request->validated();


        if ($request->hasFile('img_one')) {
            $data['img_one'] = basename($request->file('img_one')->store('public/ships')); 
        }

        if ($request->hasFile('img_two')) {
            $data['img_two'] = basename($request->file('img_two')->store('public/ships')); 
        }

        if ($request->hasFile('img_three')) {
            $data['img_three'] = basename($request->file('img_three')->store('public/ships')); 
        }

        Number::create($data);

        return redirect('/profile');
     }


     public function addRace(AddRaceRequest $request){
        $data = $request->validated();


        Race::create($data);

        return redirect('/profile');
     }
}
