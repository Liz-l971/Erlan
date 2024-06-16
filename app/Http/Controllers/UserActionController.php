<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Mail;
use Illuminate\Http\Request;
use App\Http\Requests\AddTouristRequest;
use App\Models\Tourist;
use Illuminate\Support\Facades\Session;
use App\Models\Hotel;
use App\Models\Number;
use App\Http\Requests\ChoiceClassRequest;
use Illuminate\Console\View\Components\Choice;
use App\Models\Race;
use Carbon\Carbon;
use App\Models\Bron;
use App\Mail\SampleMail;


class UserActionController extends Controller
{
    //

    public function addTurist(AddTouristRequest $request,$count){

        $data = $request->validated();
        $data['id_user'] = auth()->user()->id;
        Tourist::create($data);
        $tourists = Session::get('tourists');
        if(empty($tourists)){
            Session::put('tourists',[$count=>$data]);

        }else{
            $newArr = $tourists+[$count=>$data];
            Session::put('tourists',$newArr);
        }


        return redirect('/add-turist');

    }

    public function makeBron(){


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
        $sum = $costNumber+$costTo + $costFrom;


        
        $dateFromOtcuda = Carbon::parse($from->time_otb);
        $dateFromCuda = Carbon::parse($from->time_prib);

        $timeFlyFrom = $dateFromOtcuda->diffInDays($dateFromCuda);


        $dateToOtcuda = Carbon::parse($to->time_otb);
        $dateToCuda = Carbon::parse($to->time_prib);

        $timeFlyTo= $dateToOtcuda->diffInDays($dateToCuda);


        $tourists = Session::get('tourists');
        if(empty($tourists)){
            return redirect('/');
        }else{
            $tourists_str=[];
            for($i=1; $i<=count($tourists);$i++){
                array_push($tourists_str,$tourists[$i]['name']);
            }
            $tourists_str= implode(', ',$tourists_str);
    
    
    
    
            $bron = Bron::create(['user_id'=>auth()->user()->id,
            'number'=>$idNumber,
            'race_from'=>$from->id,
            'race_to'=>$to->id,
            'cost'=>$sum,
            'class_from'=>$classFrom,
            'company_from'=>$from->company,
            'company_to'=>$to->company,
            'class_to'=>$classTo,
            'tourists_id'=>$tourists_str
            
        ]);

        Mail::to(auth()->user()->email)->send(new SampleMail('Ваш билет на полёт',$bron));
        // session()->forget('tourists');
        // session()->forget('search');
        // session()->forget('filterhotel');
        // session()->forget('filterFlight');
            
            return view('pages.bron',compact('bron'));
        }
 
    }
}
