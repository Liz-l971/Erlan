<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\SearchRequest;
use App\Models\Hotel;
use App\Models\Number;
use Illuminate\Support\Facades\Session;
use App\Http\Requests\ChoiceClassRequest;
use Illuminate\Console\View\Components\Choice;
use App\Models\Race;

class SearchController extends Controller
{
    //

    public function searchMain(SearchRequest $request)
    {

        $data = $request->validated();

        if(!auth()->user()){
            return redirect('/sign-in');
        }else{
            Session::put('search', $data);
            return redirect('/catalog-hotel');
        }

        
    }

    public function searchRace(SearchRequest $request)
    {

        $data = $request->validated();

        Session::put('search', $data);

        return redirect('/catalog-flight');
    }

    public function choiceNumber(Number $number)
    {
        Session::put('number', ['id_number' => $number->id]);
        return redirect('/catalog-flight');
    }

    public function chooseClass(ChoiceClassRequest $request, $from, $to)
    {

        $data = $request->validated();

        Session::put('class',['fromClass' =>$data['fromClass'], 'toClass' =>$data['toClass']]);
        Session::put('from',Race::where('id',$from)->first());
        Session::put('to',Race::where('id',$to)->first());
        

        return redirect('/add-turist');
    }

    public function filterHotel(Request $request){


        $data = $request->all(); // Получаем все данные из объекта запроса
        $filter = array_filter($data, function($value) {
            // Удаляем пустые значения, включая пустые строки, null и 0
            return !empty($value);
        });
    
        Session::put('filterhotel', $filter);

        return redirect()->back();
    }

    public function  flightFilter(Request $request){


        $data = $request->all(); // Получаем все данные из объекта запроса
        $filter = array_filter($data, function($value) {
            // Удаляем пустые значения, включая пустые строки, null и 0
            return !empty($value);
        });
    
        Session::put('flightFilter', $filter);

        return redirect()->back();
    }

   
}
