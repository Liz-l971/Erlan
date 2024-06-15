@extends('loyauts.app')
@section('title')
Erlan
@endsection
@section('content')
<?php
function formatDate($date, $format = 'd.m.y')
{
    return date($format, strtotime($date));
    
}

 ?>
  <main>
    <section class="banner">
        <div class="container">
            <div class="banner_content">
                <form action="/searchRace" method="POST" class="banner_form desktop">
                    @csrf
                    <select name="from"  class="banner_inp_one" id="">
                        <option value="{{$search['from']}}">{{$search['from']}}</option>
                        <option>Откуда</option>
                        <option value="байконур">байконур</option>
                        <option value="Starbase">Starbase</option>
                        <option value="Вэньчан">Вэньчан</option>
                        <option value="Канаверал">Канаверал</option>
                    </select>
                    <select name="to"  class="banner_inp_one" id="">
                        <option value="{{$search['to']}}">{{$search['to']}}</option>
                        <option>Куда</option>
                        <option value="луна">луна</option>
                        <option value="Международная космическая станция (МКС)">Международная космическая станция (МКС)</option>
                        <option value="Китайская модульная космическая станция (cms)">Китайская модульная космическая станция (cms)</option>
                        <option value="Космическая станция Axiom Space">Космическая станция Axiom Space</option>
                    </select>
        
    

                    <input type="date" name="date" value="{{$search['date']}}" class="banner_inp_two" placeholder="период вылета">
                    <input type="text" name="nights" class="banner_inp_three" value="{{$search['nights']}}" placeholder="ночей">
                    <input type="text" name="tourists" class="banner_inp_three" value="{{$search['tourists']}}" placeholder="чел">
                    <button type="submit" class="banner_btn">найти</button>
                </form>
            </div>
        </div>
    </section> 
    <div class="container">
        <section class="crums">
            <a href="/" class="href_crum">главная</a>
            <svg width="8" height="15" viewBox="0 0 8 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M1 1.5L7 7.5L1 13.5" stroke="white" stroke-width="1.1" stroke-linecap="square" stroke-linejoin="round" />
            </svg>
            <a href="/catalog-hotel" class="href_crum">Поиск тура</a>
            <svg width="8" height="15" viewBox="0 0 8 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M1 1.5L7 7.5L1 13.5" stroke="white" stroke-width="1.1" stroke-linecap="square" stroke-linejoin="round" />
            </svg>
            <a href="/hotel" class="href_crum">Название отеля</a>
            <svg width="8" height="15" viewBox="0 0 8 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M1 1.5L7 7.5L1 13.5" stroke="white" stroke-width="1.1" stroke-linecap="square" stroke-linejoin="round" />
            </svg>
            <a href="/catalog-flight" class="href_crum">Выбор рейса</a>
        </section>
        <section class="catalog_hotel">
            <form action="/flightFilter" method="POST" class="left_catalog_hotel">
                @csrf
                <h4 class="name_block">
                    Фильтры
                </h4>
                <div class="filtr_block">
                    <h5 class="name_filtr_block">
                        цена
                    </h5>
                    <div class="filtr_block_column_price">
                        <input type="text" class="filtr_block_price_inp" name="cost_one_f">
                        <hr class="price_line">
                        <input type="text" class="filtr_block_price_inp" name="cost_two_f">
                    </div>
                    
                </div>
                <div class="filtr_block">
                    <h5 class="name_filtr_block">
                        класс перелета
                    </h5>
                    <div class="filtr_block_column">
                        <div class="checkbox-wrapper-21">
                            <label class="control control--checkbox">
                                Эконом-класс
                              <input type="checkbox" value="e" name="econom"/>
                              <div class="control__indicator"></div>
                            </label>
                        </div>
                        <div class="checkbox-wrapper-21">
                            <label class="control control--checkbox">
                                Бизнес-класс
                              <input type="checkbox" value="e" name="busines" />
                              <div class="control__indicator"></div>
                            </label>
                        </div>
                        <div class="checkbox-wrapper-21">
                            <label class="control control--checkbox">
                                Первый класс
                              <input type="checkbox" value="e" name="first"/>
                              <div class="control__indicator"></div>
                            </label>
                        </div>
                    </div>
                </div>
                <div class="filtr_block">
                    <h5 class="name_filtr_block">
                        КОСМОКОМПАНИЯ
                    </h5>
                    <div class="filtr_block_column">
                        <div class="checkbox-wrapper-21">
                            <label class="control control--checkbox">
                                Roscosmos
                              <input type="checkbox" value="e" name="ros"/>
                              <div class="control__indicator"></div>
                            </label>
                        </div>
                        <div class="checkbox-wrapper-21">
                            <label class="control control--checkbox">
                                SpaceX
                              <input type="checkbox" value="e" name="space"/>
                              <div class="control__indicator"></div>
                            </label>
                        </div>
                        <div class="checkbox-wrapper-21">
                            <label class="control control--checkbox">
                                CNSA
                              <input type="checkbox"  value="e" name="cnsa"/>
                              <div class="control__indicator"></div>
                            </label>
                        </div>
                        <div class="checkbox-wrapper-21">
                            <label class="control control--checkbox">
                                Blue Origin
                              <input type="checkbox" value="e" name="blue"/>
                              <div class="control__indicator"></div>
                            </label>
                        </div>
                        
                    </div>
                </div>
                <button type="submit" class="filter_btn white_cur">Применить</button>
            </form>
            <div class="right_catalog_flight">
                <?
         

$fromCollection = collect($races);
$toCollection = collect($racesTwo);

// Использование метода combine для создания словаря с ключами "from" и "to"
// if(count($fromCollection)>=count($toCollection)){
//     $fromCollection->pop();
// }
// if(count($toCollection)>=count($fromCollection)){
//     $toCollection->pop();
// }
// if(count($fromCollection)==count($toCollection)){
$dictionary = $fromCollection->combine($toCollection)->map(function ($to, $from) {
    return ['from' => $from, 'to' => $to];
})->all();

$keys = array_keys($dictionary);
for ($i = 0; $i < count($dictionary); $i++) {
    $fromArray = json_decode($dictionary[$keys[$i]]['from'], true);
    $toArray = json_decode($dictionary[$keys[$i]]['to'], true);?>

@if((empty($flightFilter['cost_one_f']) && empty($flightFilter['cost_two_f']))||($fromArray['cost_ec'] + $toArray['cost_ec'] + $costNumber>=$flightFilter['cost_one_f']&&$fromArray['cost_ec'] + $toArray['cost_ec'] + $costNumber<=$flightFilter['cost_two_f']))
<div class="right_catalog_flight_flex">
    <div class="flight_napravlenia_info">

        <div class="flight_tuda_obratno_info">
            <div class="name_company_and_status">
                <div class="company">
                    @if ($fromArray['company']==1)
                    <img src="{{asset('public/assets/img/company/roscosmos.png')}}" alt="company">
                    @endif
                    @if ($fromArray['company']==2)
                    <img src="{{asset('public/assets/img/company/space.png')}}" alt="company">
                    @endif
                    @if ($fromArray['company']==3)
                    <img src="{{asset('public/assets/img/company/cnsa.png')}}" alt="company">
                    @endif

                    @if ($fromArray['company']==4)
                    <img src="{{asset('public/assets/img/company/space.png')}}" alt="company">
                    @endif
                    <h4 class="name_company">
                        @if ($fromArray['company']==1)
                            Роскосмос
                        @endif
                        @if ($fromArray['company']==2)
                        SpaceX
                    @endif
                    @if ($fromArray['company']==3)
                    CNSA
                @endif
                @if ($fromArray['company']==4)
                BLUE ORIGIN
            @endif
                    </h4>
                </div>
                {{-- <p class="status">
                    эконом-hsb82-hsb56
                </p> --}}
            </div>
            <div class="info_otkuda">
                <h4 class="kosmodrom">
                    {{ $fromArray['otcuda'] }}
                </h4>
                <p class="time_vilet">
                    {{ formatDate($fromArray['time_otb']) }}
                </p>
            </div>
            <svg width="67" height="2" viewBox="0 0 67 2" fill="none" class="line_tuda_obratno" xmlns="http://www.w3.org/2000/svg">
                <path d="M1 1H66" stroke="white" stroke-linecap="round" stroke-dasharray="6 6" />
            </svg>
            <div class="info_otkuda">
                <h4 class="kosmodrom">
                    {{ $fromArray['cuda'] }}
                </h4>
                <p class="time_vilet">
                    {{formatDate($fromArray['time_prib'])}}
                </p>
            </div>
        </div>

       
        <hr class="line_xa">

        <div class="flight_tuda_obratno_info">
            <div class="name_company_and_status">
                <div class="company">
                    @if ($toArray['company']==1)
                    <img src="{{asset('public/assets/img/company/roscosmos.png')}}" alt="company">
                    @endif
                    @if ($toArray['company']==2)
                    <img src="{{asset('public/assets/img/company/space.png')}}" alt="company">
                    @endif
                    @if ($toArray['company']==3)
                    <img src="{{asset('public/assets/img/company/cnsa.png')}}" alt="company">
                    @endif

                    @if ($toArray['company']==4)
                    <img src="{{asset('public/assets/img/company/space.png')}}" alt="company">
                    @endif
                    <h4 class="name_company">
                        @if ($toArray['company']==1)
                            Роскосмос
                        @endif
                        @if ($toArray['company']==2)
                        SpaceX
                    @endif
                    @if ($toArray['company']==3)
                    CNSA
                @endif
                @if ($toArray['company']==4)
                BLUE ORIGIN
            @endif
                    </h4>
                </div>
                {{-- <p class="status">
                    эконом-hsb82-hsb56
                </p> --}}
            </div>
            <div class="info_otkuda">
                <h4 class="kosmodrom">
                    {{ $toArray['otcuda'] }}
                </h4>
                <p class="time_vilet">
                    {{ formatDate($toArray['time_otb']) }}
                </p>
            </div>
            <svg width="67" height="2" viewBox="0 0 67 2" fill="none" class="line_tuda_obratno" xmlns="http://www.w3.org/2000/svg">
                <path d="M1 1H66" stroke="white" stroke-linecap="round" stroke-dasharray="6 6" />
            </svg>
            <div class="info_otkuda">
                <h4 class="kosmodrom">
                    {{ $toArray['cuda'] }}
                </h4>
                <p class="time_vilet">
                    {{formatDate($toArray['time_prib'])}}
                </p>
            </div>
        </div>
        
    </div>
    <hr class="line_napr_cost">

    <div class="fright_cost_info">
        <p class="melk_text">
            цена от:
        </p>
        <div class="cost">
            <p class="cost_p">
                {{ $fromArray['cost_ec'] + $toArray['cost_ec'] + $costNumber}}
            </p>
            <svg width="22" height="24" viewBox="0 0 22 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M13.5 14.85C15.513 14.85 17.4451 14.1171 18.8709 12.8101C20.297 11.5028 21.1 9.72783 21.1 7.875C21.1 6.02217 20.297 4.24719 18.8709 2.93993C17.4451 1.63293 15.513 0.9 13.5 0.9H6C5.71093 0.9 5.43214 1.00518 5.22532 1.19477C5.01821 1.38463 4.9 1.64408 4.9 1.91667V12.8167H2C1.71093 12.8167 1.43214 12.9218 1.22532 13.1114C1.01821 13.3013 0.9 13.5608 0.9 13.8333C0.9 14.1059 1.01821 14.3654 1.22532 14.5552C1.43215 14.7448 1.71093 14.85 2 14.85H4.9V16.4833H2C1.71093 16.4833 1.43215 16.5885 1.22532 16.7781C1.01821 16.968 0.9 17.2274 0.9 17.5C0.9 17.7726 1.01821 18.032 1.22532 18.2219C1.43214 18.4115 1.71093 18.5167 2 18.5167H4.9V22.0833C4.9 22.3559 5.01821 22.6154 5.22532 22.8052C5.43215 22.9948 5.71093 23.1 6 23.1C6.28907 23.1 6.56785 22.9948 6.77468 22.8052C6.98179 22.6154 7.1 22.3559 7.1 22.0833V18.5167H13C13.2891 18.5167 13.5679 18.4115 13.7747 18.2219C13.9818 18.032 14.1 17.7726 14.1 17.5C14.1 17.2274 13.9818 16.968 13.7747 16.7781C13.5679 16.5885 13.2891 16.4833 13 16.4833H7.1V14.85H13.5ZM7.1 2.93333H13.5C14.9348 2.93333 16.3094 3.4559 17.3215 4.38372C18.3334 5.31127 18.9 6.56734 18.9 7.875C18.9 9.18266 18.3334 10.4387 17.3215 11.3663C16.3094 12.2941 14.9348 12.8167 13.5 12.8167H7.1V2.93333Z" fill="white" stroke="white" stroke-width="0.2" />
            </svg>
        </div>
        <p class="evething">
            включая обязательные доплаты 0 рублей
        </p>
        <a href="/flight/{{$fromArray['id']}}/{{$toArray['id']}}" class="choice white_cur">выбрать</a>
        <div class="po">
            ПОКАЗАТЬ ДЕТАЛИ ПЕРЕЛЁТА
        </div>
    </div>

</div>
@endif

<?}?>
                {{-- @foreach ($dictionary as $item) --}}
              
                {{-- @endforeach --}}
{{--                 
                @foreach ($racesTwo as $item)
                <div class="right_catalog_flight_flex">
                    <div class="flight_napravlenia_info">
                        <div class="flight_tuda_obratno_info">
                            <div class="name_company_and_status">
                                <div class="company">
                                    <img src="assets/img/company/roscosmos.png" alt="company">
                                    <h4 class="name_company">ROSCOSMOS</h4>
                                </div>
                                <p class="status">
                                    эконом-hsb82-hsb56
                                </p>
                            </div>
                            <div class="info_otkuda">
                                <h4 class="kosmodrom">
                                    Космодром г.байконур (Baikonur)
                                </h4>
                                <p class="time_vilet">
                                    12.04.2036 - 21:55
                                </p>
                            </div>
                            <svg width="67" height="2" viewBox="0 0 67 2" fill="none" class="line_tuda_obratno" xmlns="http://www.w3.org/2000/svg">
                                <path d="M1 1H66" stroke="white" stroke-linecap="round" stroke-dasharray="6 6" />
                            </svg>
                            <div class="info_otkuda">
                                <h4 class="kosmodrom">
                                    Космодром г.байконур (Baikonur)
                                </h4>
                                <p class="time_vilet">
                                    12.04.2036 - 21:55
                                </p>
                            </div>
                        </div>
                        <hr class="line_xa">
                        <div class="flight_obratno_tuda_info">
                            <div class="name_company_and_status">
                                <div class="company">
                                    <img src="assets/img/company/roscosmos.png" alt="company">
                                    <h4 class="name_company">ROSCOSMOS</h4>
                                </div>
                                <p class="status">
                                    эконом-hsb82-hsb56
                                </p>
                            </div>
                            <div class="info_otkuda">
                                <h4 class="kosmodrom">
                                    Космодром г.байконур (Baikonur)
                                </h4>
                                <p class="time_vilet">
                                    12.04.2036 - 21:55
                                </p>
                            </div>
                            <svg width="67" height="2" viewBox="0 0 67 2" fill="none" class="line_tuda_obratno" xmlns="http://www.w3.org/2000/svg">
                                <path d="M1 1H66" stroke="white" stroke-linecap="round" stroke-dasharray="6 6" />
                            </svg>
                            <div class="info_otkuda">
                                <h4 class="kosmodrom">
                                    Космодром г.байконур (Baikonur)
                                </h4>
                                <p class="time_vilet">
                                    12.04.2036 - 21:55
                                </p>
                            </div>
                        </div>
                        
                    </div>
                    <hr class="line_napr_cost">
                    <div class="fright_cost_info">
                        <p class="melk_text">
                            цена от:
                        </p>
                        <div class="cost">
                            <p class="cost_p">
                                00 000 000
                            </p>
                            <svg width="22" height="24" viewBox="0 0 22 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M13.5 14.85C15.513 14.85 17.4451 14.1171 18.8709 12.8101C20.297 11.5028 21.1 9.72783 21.1 7.875C21.1 6.02217 20.297 4.24719 18.8709 2.93993C17.4451 1.63293 15.513 0.9 13.5 0.9H6C5.71093 0.9 5.43214 1.00518 5.22532 1.19477C5.01821 1.38463 4.9 1.64408 4.9 1.91667V12.8167H2C1.71093 12.8167 1.43214 12.9218 1.22532 13.1114C1.01821 13.3013 0.9 13.5608 0.9 13.8333C0.9 14.1059 1.01821 14.3654 1.22532 14.5552C1.43215 14.7448 1.71093 14.85 2 14.85H4.9V16.4833H2C1.71093 16.4833 1.43215 16.5885 1.22532 16.7781C1.01821 16.968 0.9 17.2274 0.9 17.5C0.9 17.7726 1.01821 18.032 1.22532 18.2219C1.43214 18.4115 1.71093 18.5167 2 18.5167H4.9V22.0833C4.9 22.3559 5.01821 22.6154 5.22532 22.8052C5.43215 22.9948 5.71093 23.1 6 23.1C6.28907 23.1 6.56785 22.9948 6.77468 22.8052C6.98179 22.6154 7.1 22.3559 7.1 22.0833V18.5167H13C13.2891 18.5167 13.5679 18.4115 13.7747 18.2219C13.9818 18.032 14.1 17.7726 14.1 17.5C14.1 17.2274 13.9818 16.968 13.7747 16.7781C13.5679 16.5885 13.2891 16.4833 13 16.4833H7.1V14.85H13.5ZM7.1 2.93333H13.5C14.9348 2.93333 16.3094 3.4559 17.3215 4.38372C18.3334 5.31127 18.9 6.56734 18.9 7.875C18.9 9.18266 18.3334 10.4387 17.3215 11.3663C16.3094 12.2941 14.9348 12.8167 13.5 12.8167H7.1V2.93333Z" fill="white" stroke="white" stroke-width="0.2" />
                            </svg>
                        </div>
                        <p class="evething">
                            включая обязательные доплаты 0 рублей
                        </p>
                        <a href="/flight" class="choice white_cur">выбрать</a>
                        <div class="po">
                            ПОКАЗАТЬ ДЕТАЛИ ПЕРЕЛЁТА
                        </div>
                    </div>
                </div>
                @endforeach
               
               --}}
                
            </div>
        </section>
    </div>
</main>

@endsection('content')