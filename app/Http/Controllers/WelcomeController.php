<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Hotel;
use App\Models\Race;
use App\Models\Ship;
use Illuminate\Support\Facades\Session;
use Carbon\Carbon;
use App\Models\Number;
use App\Models\Tourist;
use App\Models\Bron;

class WelcomeController extends Controller
{
    //

    public function welcome()
    {
        return view('welcome');
    }

    public function shipsApi()
    {
        return Ship::all();
    }

    public function catalogflight()
    {
        $search = Session::get('search');
        $startDate = Carbon::parse($search['date']);
        $numberOfDaysToAdd = $search['nights'];
        $newDate = $startDate->addDays($numberOfDaysToAdd)->toDateString();

        $racesQ = Race::where('otcuda', $search['from'])->where('cuda', $search['to'])->where('time_otb', $search['date']);
        $racesTwoQ = Race::where('otcuda', $search['to'])->where('cuda', $search['from'])->where('time_otb', $newDate);

        $idNumber = Session::get('number')['id_number'];
        $number =  Number::where('id', $idNumber)->first();
        $costNumber = $number['cost'];

        $flightFilter = Session::get('flightFilter');

        if (!isset($flightFilter['cost_one_f']) && !isset($flightFilter['cost_two_f'])) {


            $flightFilter['cost_one_f'] = '';
            $flightFilter['cost_two_f'] = '';
        }

        $racesQ->where(function ($q) use ($flightFilter) {
            if (isset($flightFilter['ecomom'])) {
                $q->where('cost_ec', '!=', null);
            }
            if (isset($flightFilter['busines'])) {
                $q->orWhere('cost_bus', '!=', null);
            }
            if (isset($flightFilter['first'])) {
                $q->orWhere('cost_first', '!=', null);
            }
            if (isset($flightFilter['ros'])) {
                $q->orWhere('company','1');
            }
            if (isset($flightFilter['space'])) {
                $q->orWhere('company','2');
            }
            if (isset($flightFilter['cnsa'])) {
                $q->orWhere('company','3');
            }
            if (isset($flightFilter['blue'])) {
                $q->orWhere('company','4');
            }
        });

        $racesTwoQ->where(function ($q) use ($flightFilter) {
            if (isset($flightFilter['ecomom'])) {
                $q->where('cost_ec', '!=', null);
            }
            if (isset($flightFilter['busines'])) {
                $q->orWhere('cost_bus', '!=', null);
            }
            if (isset($flightFilter['first'])) {
                $q->orWhere('cost_first', '!=', null);
            }
            if (isset($flightFilter['ros'])) {
                $q->orWhere('company','1');
            }
            if (isset($flightFilter['space'])) {
                $q->orWhere('company','2');
            }
            if (isset($flightFilter['cnsa'])) {
                $q->orWhere('company',3);
            }
            if (isset($flightFilter['blue'])) {
                $q->orWhere('company','4');
            }
        });

        $races = $racesQ->get();
        $racesTwo = $racesTwoQ->get();
        
        // Определяем количество элементов в меньшей коллекции
        $minCount = min(count($races), count($racesTwo));
        
        // Удаляем лишние элементы
        if (count($races) > $minCount) {
            $races = $races->slice(0, $minCount);
        }
        
        if (count($racesTwo) > $minCount) {
            $racesTwo = $racesTwo->slice(0, $minCount);
        }
        return view('pages.catalogflight', compact('races', 'search', 'racesTwo', 'costNumber', 'flightFilter'));
    }

    public function cataloghotel()
    {
        $hotels = Hotel::all();
        $search = Session::get('search');
        $filterHotel = Session::get('filterhotel');
        $costOne = '';
        $costTwo = '';

        $query = Hotel::join('numbers', 'hotels.id', '=', 'numbers.hotel')
            ->select('hotels.id', 'hotels.name', 'hotels.reiting', 'hotels.place', 'hotels.feed', 'hotels.concepc', 'numbers.cost', 'hotels.img');

        if (isset($filterHotel['cost_one']) && isset($filterHotel['cost_two'])) {
            $costOne = (int) $filterHotel['cost_one'];
            $costTwo = (int) $filterHotel['cost_two'];
            $query->whereBetween('numbers.cost', [$costOne, $costTwo]);
        } else {
            $filterHotel['cost_one'] = '';
            $filterHotel['cost_two'] = '';
        }

        $query->where(function ($q) use ($filterHotel) {
            if (isset($filterHotel['ultra_all'])) {
                $q->where('terms', 'like', '%Ультра всё включено%');
            }

            if (isset($filterHotel['all'])) {
                $q->orWhere('terms', 'like', '%всё включено,%');
            }
            if (isset($filterHotel['pansion'])) {
                $q->orWhere('terms', 'like', '%Полупансион%');
            }

            if (isset($filterHotel['breakfast'])) {
                $q->orWhere('terms', 'like', '%завтрак%');
            }

            if (isset($filterHotel['without'])) {
                $q->orWhere('terms', 'like', '%без питания%');
            }
            if (isset($filterHotel['osob'])) {
                $q->orWhere('terms', 'like', '%особые типы питания%');
            }
            if (isset($filterHotel['standart'])) {

                $q->orWhere('numbers.type', 'STANDART');
            }
            if (isset($filterHotel['SUITE_FAMILY_DELUXE'])) {

                $q->orWhere('numbers.type', 'SUITE + FAMILY + DELUXE');
            }
            if (isset($filterHotel['VILLA'])) {

                $q->orWhere('numbers.type', 'VILLA');
            }
            if (isset($filterHotel['LARGER_SUITES'])) {

                $q->orWhere('numbers.type', 'LARGER SUITES');
            }
        });





        $hotels = $query->get();



        return view('pages.cataloghotel', compact('hotels', 'search', 'filterHotel'));
    }

    public function profile()
    {
        if (auth()->user()->status != 2) {
            $brons = Bron::where('user_id',auth()->user()->id)->get();

            return view('pages.profile',compact('brons'));
        } else if (auth()->user()->status == 2) {
            $users = User::where('status', 1)->get();
            $usersB = User::where('status', 0)->get();
            $hotels = Hotel::all();
            $ships = Ship::all();
            return view('pages.admin', compact('users', 'usersB', 'hotels', 'ships'));
        }
    }

    public function signUp()
    {
        return view('pages.signup');
    }
    public function signIn()
    {
        return view('pages.signin');
    }

    public function hotel(Hotel $hotel)
    {
        $search = Session::get('search');
        // Session::put('hotel',['id_hotel'=>$hotel->id]);
        return view('pages.hotel', compact('hotel', 'search'));
    }
    public function flight($from, $to)
    {
        $search = Session::get('search');
        $fromRace = Race::where('id', $from)->first();
        $toRace = Race::where('id', $to)->first();
        return view('pages.flight', compact('search', 'fromRace', 'toRace'));
    }
    public function addturist()
    {
        // Session::unset('tourists');
        // Session::forget('tourists');
        $search = Session::get('search');
        $tourists = Session::get('tourists');

        $idNumber = Session::get('number')['id_number'];
        $number =  Number::where('id', $idNumber)->first();
        $costNumber = $number['cost'];

        $from =  Race::where('id', Session::get('from')['id'])->first();
        $to =  Race::where('id', Session::get('to')['id'])->first();
        $hotel = Hotel::where('id', $number->hotel)->first();

        $costFrom = 0;
        $costTo = 0;
        $classFrom = '';
        $classTo = '';
        if (Session::get('class')['fromClass'] == 'econom') {
            $costFrom = $from->cost_ec;
            $classFrom = 'Эконом';
        } else if (Session::get('class')['fromClass'] == 'busines') {
            $classFrom = 'Бизнес';
            $costFrom = $from->cost_bus;
        } else if (Session::get('class')['fromClass'] == 'first') {
            $classFrom = 'Первый';
            $costFrom = $from->cost_first;
        }


        if (Session::get('class')['fromClass'] == 'econom') {
            $costTo = $from->cost_ec;
            $classTo = 'Эконом';
        } else if (Session::get('class')['fromClass'] == 'busines') {
            $classTo = 'Бизнес';

            $costTo = $from->cost_bus;
        } else if (Session::get('class')['fromClass'] == 'first') {
            $classTo = 'Первый';

            $costTo = $from->cost_first;
        }
        $sum = $costTo + $costFrom;



        $dateFromOtcuda = Carbon::parse($from->time_otb);
        $dateFromCuda = Carbon::parse($from->time_prib);

        $timeFlyFrom = $dateFromOtcuda->diffInDays($dateFromCuda);


        $dateToOtcuda = Carbon::parse($to->time_otb);
        $dateToCuda = Carbon::parse($to->time_prib);

        $timeFlyTo = $dateToOtcuda->diffInDays($dateToCuda);

        return view('pages.addturist', compact('search', 'tourists', 'costNumber', 'sum', 'from', 'to', 'hotel', 'classFrom', 'classTo', 'timeFlyFrom', 'timeFlyTo'));
    }

    public function bron()
    {
        return view('pages.bron');
    }
    public function about()
    {
        $ros = Ship::where('id_company',1)->get();
        $spacex = Ship::where('id_company',2)->get();
        $cnsa = Ship::where('id_company',3)->get();
        $blue = Ship::where('id_company',4)->get();
        return view('pages.about' ,compact('ros','spacex','cnsa','blue'));
    }

    public function allTourists(){
        return Tourist::where('id_user',auth()->user()->id)->get();
    }
}
