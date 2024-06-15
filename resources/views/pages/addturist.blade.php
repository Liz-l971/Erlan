@extends('loyauts.app')
@section('title')
   Добавить туриста
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
            <a href="" class="href_crum">главная</a>
            <svg width="8" height="15" viewBox="0 0 8 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M1 1.5L7 7.5L1 13.5" stroke="white" stroke-width="1.1" stroke-linecap="square" stroke-linejoin="round" />
            </svg>
            <a href="" class="href_crum">Поиск тура</a>
            <svg width="8" height="15" viewBox="0 0 8 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M1 1.5L7 7.5L1 13.5" stroke="white" stroke-width="1.1" stroke-linecap="square" stroke-linejoin="round" />
            </svg>
            <a href="" class="href_crum">Название отеля</a>
            <svg width="8" height="15" viewBox="0 0 8 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M1 1.5L7 7.5L1 13.5" stroke="white" stroke-width="1.1" stroke-linecap="square" stroke-linejoin="round" />
            </svg>
            <a href="" class="href_crum">Выбор рейса</a>
            <svg width="8" height="15" viewBox="0 0 8 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M1 1.5L7 7.5L1 13.5" stroke="white" stroke-width="1.1" stroke-linecap="square" stroke-linejoin="round" />
            </svg>
            <a href="" class="href_crum">Выбор класса</a>
            <svg width="8" height="15" viewBox="0 0 8 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M1 1.5L7 7.5L1 13.5" stroke="white" stroke-width="1.1" stroke-linecap="square" stroke-linejoin="round" />
            </svg>
            <a href="" class="href_crum">Добавление туристов</a>
        </section>
        <section class="add_pass">
            <div class="block_add_turist">
                <h2 class="name_page">
                    Добавление туристов
                </h2>
                <div class="block_content_add_turist">
                    @for ($i=1;$i<=$search['tourists'];$i++)
                    <div class="qweweweq">
                        <h4 class="name_block">
                            турист {{$i}}
                        </h4>
                        @if (empty($tourists[$i])&&(((!empty($tourists[$i-1]))||(($i==1)&&empty($tourists[1])))))
                        <form action="/addTurist/{{$i}}" class="add_turist_form" method="POST">
                            @csrf
                            
                            <div class="display_flex">
                                <input type="text" id="psevdonameInput" placeholder="псевдоним(мама, муж)" class="top_inputs" name="psevdoname" >
                                @error('psevdoname')
                                <span class ="red" style="color: red">{{$message}}</span> 
                                @enderror
                                <input type="text" placeholder="фамилия" class="top_inputs addInp" name="surname">
                                @error('surname')
                                <span class ="red" style="color: red">{{$message}}</span> 
                                @enderror
                                <input type="text" placeholder="Имя" class="top_inputs addInp" name="name">
                                @error('name')
                                <span class ="red" style="color: red">{{$message}}</span> 
                                @enderror
                                <input type="text" placeholder="отчество"class="top_inputs addInp" value="@if(!empty($tourists[$i])){{$tourists[$i]['name']}}@endif"
                                 name="patronymic">
                                @error('patronymic')
                                <span class ="red" style="color: red">{{$message}}</span> 
                                @enderror
                            </div>
                            <div class="display_flex">
                                <input type="date" placeholder="дата рождения" class="data_inputs addInp" value="" name="date">
                                @error('date')
                                <span class ="red" style="color: red">{{$message}}</span> 
                                @enderror

                                <select name="gender"  class="pol_inputs addInp" id="">
                                    <option>пол</option>
                                    <option value="м">м</option>
                                    <option value="ж">ж</option>
                                </select>
                                @error('gender')
                                <span class ="red" style="color: red">{{$message}}</span> 
                                @enderror


                                <select name="nation"  class="top_inputs addInp" id="">
                                    <option>гражданство</option>
                                    <option value="россия">россия</option>
                                    <option value="Китай">Китай</option>
                                    <option value="Сша">Сша</option>
                                   
                                </select>
                                @error('nation')
                                <span class ="red" style="color: red">{{$message}}</span> 
                                @enderror

                                <input type="text" placeholder="телефон" class="top_inputs addInp" name="number">
                                @error('number')
                                <span class ="red" style="color: red">{{$message}}</span> 
                                @enderror
                                <input type="text" placeholder="электронная почта"class="top_inputs addInp" name="email">
                                @error('email')
                                <span class ="red" style="color: red">{{$message}}</span> 
                                @enderror
                            </div>
                            <button type="submit" class="btn_add_turist">добавить туриста</button>
                        </form>
                        @endif
                        @if (!(empty($tourists[$i])&&((!empty($tourists[$i]))||($i==1))))
                        <div class="add_turist_form" method="POST">
                            @csrf
                            <div class="display_flex">
                                <input type="text" placeholder="псевдоним(мама, муж)" class="top_inputs" name="psevdoname" value="@if(!empty($tourists[$i])){{$tourists[$i]['psevdoname']}}@endif" disabled>
                                {{-- @error('psevdoname')
                                <span class ="red" style="color: red">{{$message}}</span> 
                                @enderror --}}
                                <input type="text" placeholder="фамилия" class="top_inputs" value="@if(!empty($tourists[$i])){{$tourists[$i]['surname']}}@endif" name="surname" disabled>
                                {{-- @error('surname')
                                <span class ="red" style="color: red">{{$message}}</span> 
                                @enderror --}}
                                <input type="text" placeholder="Имя" class="top_inputs" name="name" value="@if(!empty($tourists[$i])){{$tourists[$i]['name']}}@endif" disabled>
                                {{-- @error('name')
                                <span class ="red" style="color: red">{{$message}}</span> 
                                @enderror --}}
                                <input type="text" placeholder="отчество"class="top_inputs" value="@if(!empty($tourists[$i])){{$tourists[$i]['patronymic']}}@endif"   disabled>
                                {{-- @error('patronymic')
                                <span class ="red" style="color: red">{{$message}}</span> 
                                @enderror --}}
                            </div>
                            <div class="display_flex">
                                <input type="date" placeholder="дата рождения" class="data_inputs" value="@if(!empty($tourists[$i])){{$tourists[$i]['date']}}@endif" disabled>
                                {{-- @error('date')
                                <span class ="red" style="color: red">{{$message}}</span> 
                                @enderror --}}

                                <select name="gender"  class="pol_inputs" id="" disabled>
                                    @if(!empty($tourists[$i]))<option value="{{$tourists[$i]['gender']}}">{{$tourists[$i]['gender']}}</option>@endif
                                    <option>пол</option>
                                    <option value="м">м</option>
                                    <option value="ж">ж</option>
                                </select>
                                {{-- @error('gender')
                                <span class ="red" style="color: red">{{$message}}</span> 
                                @enderror --}}


                                <select name="nation"  class="top_inputs" id="" disabled>
                                    @if(!empty($tourists[$i]))<option value="{{$tourists[$i]['nation']}}">{{$tourists[$i]['nation']}}</option>@endif
                                    <option>гражданство</option>
                                    <option value="россия">россия</option>
                                    <option value="Китай">Китай</option>
                                    <option value="Сша">Сша</option>
                                   
                                </select>
                                {{-- @error('nation')
                                <span class ="red" style="color: red">{{$message}}</span> 
                                @enderror --}}

                                <input type="text" placeholder="телефон" class="top_inputs" name="number" disabled value="@if(!empty($tourists[$i])){{$tourists[$i]['number']}}@endif">
                                {{-- @error('number')
                                <span class ="red" style="color: red">{{$message}}</span> 
                                @enderror --}}
                                <input type="text" placeholder="электронная почта"class="top_inputs" name="email" value="@if(!empty($tourists[$i])){{$tourists[$i]['email']}}@endif" disabled>
                                {{-- @error('email')
                                <span class ="red" style="color: red">{{$message}}</span> 
                                @enderror --}}
                            </div>
                        </div>
                        @endif
                       
                    </div>
                    @endfor
                    
                   
                </div>
            </div>
            <div class="block_all_info_about_broni">
                <div class="top_white_block">
                    <div class="top_white_block_content">
                        <p class="little_text">
                            Итоговая стоимость:
                        </p>
                        <div class="cost">
                            <p class="cost_p">
                                {{$costNumber+$sum}}
                            </p>
                            <svg width="22" height="24" viewBox="0 0 22 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M13.5 14.85C15.513 14.85 17.4451 14.1171 18.8709 12.8101C20.297 11.5028 21.1 9.72783 21.1 7.875C21.1 6.02217 20.297 4.24719 18.8709 2.93993C17.4451 1.63293 15.513 0.9 13.5 0.9H6C5.71093 0.9 5.43214 1.00518 5.22532 1.19477C5.01821 1.38463 4.9 1.64408 4.9 1.91667V12.8167H2C1.71093 12.8167 1.43214 12.9218 1.22532 13.1114C1.01821 13.3013 0.9 13.5608 0.9 13.8333C0.9 14.1059 1.01821 14.3654 1.22532 14.5552C1.43215 14.7448 1.71093 14.85 2 14.85H4.9V16.4833H2C1.71093 16.4833 1.43215 16.5885 1.22532 16.7781C1.01821 16.968 0.9 17.2274 0.9 17.5C0.9 17.7726 1.01821 18.032 1.22532 18.2219C1.43214 18.4115 1.71093 18.5167 2 18.5167H4.9V22.0833C4.9 22.3559 5.01821 22.6154 5.22532 22.8052C5.43215 22.9948 5.71093 23.1 6 23.1C6.28907 23.1 6.56785 22.9948 6.77468 22.8052C6.98179 22.6154 7.1 22.3559 7.1 22.0833V18.5167H13C13.2891 18.5167 13.5679 18.4115 13.7747 18.2219C13.9818 18.032 14.1 17.7726 14.1 17.5C14.1 17.2274 13.9818 16.968 13.7747 16.7781C13.5679 16.5885 13.2891 16.4833 13 16.4833H7.1V14.85H13.5ZM7.1 2.93333H13.5C14.9348 2.93333 16.3094 3.4559 17.3215 4.38372C18.3334 5.31127 18.9 6.56734 18.9 7.875C18.9 9.18266 18.3334 10.4387 17.3215 11.3663C16.3094 12.2941 14.9348 12.8167 13.5 12.8167H7.1V2.93333Z" fill="black" stroke="black" stroke-width="0.2" />
                            </svg>
                        </div>
                    </div>
                </div>
                <div class="bottom_block_border">
                    <div class="bottom_block_border_content">
                        <h4 class="main_name_bl">
                            Детали тура
                        </h4> 
                        <h5 class="name_blovk">
                            {{$hotel->name}}
                        </h5>
                        <div class="tet_a_tet">
                            <div class="column_time">
                                <p class="time">
                                    {{formatDate($from->time_prib)}}
                                </p>
                                <p class="lit">
                                    Дата заезда
                                </p>
                            </div>
                            <svg width="39" height="7" viewBox="0 0 39 7" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M39 3.5L34 0.613249V6.38675L39 3.5ZM0 4H34.5V3H0V4Z" fill="#9A9A9A" />
                            </svg>
                            <div class="column_time">
                                <p class="time">
                                    {{formatDate($from->time_otb)}}
                                </p>
                                <p class="lit">
                                    Дата выезда
                                </p>
                            </div>
                            

                        </div>
                        <div class="hotel_info">
                            <div class="stars">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M12 17.27L18.18 21L16.54 13.97L22 9.24L14.81 8.63L12 2L9.19 8.63L2 9.24L7.46 13.97L5.82 21L12 17.27Z" fill="white" />
                                </svg>
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M12 17.27L18.18 21L16.54 13.97L22 9.24L14.81 8.63L12 2L9.19 8.63L2 9.24L7.46 13.97L5.82 21L12 17.27Z" fill="white" />
                                </svg>
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M12 17.27L18.18 21L16.54 13.97L22 9.24L14.81 8.63L12 2L9.19 8.63L2 9.24L7.46 13.97L5.82 21L12 17.27Z" fill="white" />
                                </svg>
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M12 17.27L18.18 21L16.54 13.97L22 9.24L14.81 8.63L12 2L9.19 8.63L2 9.24L7.46 13.97L5.82 21L12 17.27Z" fill="white" />
                                </svg>
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M12 15.39L8.24 17.66L9.23 13.38L5.91 10.5L10.29 10.13L12 6.09L13.71 10.13L18.09 10.5L14.77 13.38L15.76 17.66M22 9.24L14.81 8.63L12 2L9.19 8.63L2 9.24L7.45 13.97L5.82 21L12 17.27L18.18 21L16.54 13.97L22 9.24Z" fill="white" />
                                </svg>
                            </div>
                            <p class="name_hotel">
                                {{$hotel->name}}
                            </p>
                            <p class="class_and_eat">
                                {{$hotel->terms}}
                            </p>
                        </div>
                                      
                    </div>
                    <hr class="line_white">
                    <div class="bottom_block_border_content">
                        <h5 class="name_blovk">
                            космоперелёт
                        </h5>
                        <div class="tet_a_tet">
                            <div class="column_time">
                                <p class="time">
                                    {{formatDate($from->time_otb)}}
                                </p>
                                <p class="lit">
                                    {{$from->otcuda}}
                                </p>
                            </div>
                            <svg width="40" height="7" viewBox="0 0 39 7" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M39 3.5L34 0.613249V6.38675L39 3.5ZM0 4H34.5V3H0V4Z" fill="#9A9A9A" />
                            </svg>
                            <div class="column_time">
                                <p class="time">
                                    {{formatDate($from->time_prib)}}

                                </p>
                                <p class="lit">
                                    {{$from->cuda}}
                                </p>
                            </div>

                        </div>
                        <div class="hotel_info">
                            
                            <p class="name_hotel">
                                @if ($from->company==1)
                                    rosscosmos
                                @endif
                            </p>
                            <p class="class_and_eat">
                                {{$classFrom}}
                            </p>
                        </div>
                        <div class="time_info">
                            <p class="name_hotel">
                                время полёта
                            </p>
                            <p class="class_and_eat">
                                {{$timeFlyFrom}} д
                            </p>
                        </div>
                    </div>
                    <hr class="line_grey">
                    <div class="bottom_block_border_content">
                        <h5 class="name_blovk">
                            космоперелёт
                        </h5>
                        <div class="tet_a_tet">
                            <div class="column_time">
                                <p class="time">
                                    {{formatDate($to->time_otb)}}
                                </p>
                                <p class="lit">
                                    {{$to->otcuda}}
                                </p>
                            </div>
                            <svg width="40" height="7" viewBox="0 0 39 7" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M39 3.5L34 0.613249V6.38675L39 3.5ZM0 4H34.5V3H0V4Z" fill="#9A9A9A" />
                            </svg>
                            <div class="column_time">
                                <p class="time">
                                    {{formatDate($to->time_prib)}}

                                </p>
                                <p class="lit">
                                    {{$to->cuda}}
                                </p>
                            </div>

                        </div>
                        <div class="hotel_info">
                            
                            <p class="name_hotel">
                                @if ($to->company==1)
                                    rosscosmos
                                @endif
                            </p>
                            <p class="class_and_eat">
                                {{$classTo}}
                            </p>
                        </div>
                        <div class="time_info">
                            <p class="name_hotel">
                                время полёта
                            </p>
                            <p class="class_and_eat">
                                {{$timeFlyTo}} д
                            </p>
                        </div>
                        <form action="/makeBron" method="POST">
                            @csrf
                            <button type="submit" class="bron white_cur">Бронировать</button>
                        </form>
                    </div>

                    {{-- <a href="/bron" class="bron white_cur">Бронировать</a> --}}
                </div>
            </div>
        </section>
    </div>
</main>
<script>
    const wordInput = document.getElementById('psevdonameInput');
const inputsArr = document.querySelectorAll('.addInp');

fetch('/allTourists')
  .then(response => {
    if (!response.ok) {
      throw new Error('Network response was not ok');
    }
    return response.json();
  })
  .then(data => {

    wordInput.addEventListener('blur', function(){


    for (let key in data) {
        if (data[key]['psevdoname'] == wordInput.value) {
            // Once a match is found, update the inputs array with the value
            // inputsArr.forEach((input, index) => {
                inputsArr[0].value = data[key]['surname'];
                inputsArr[1].value = data[key]['name'];
                inputsArr[2].value = data[key]['patronymic'];
                inputsArr[3].value = data[key]['date'];
                inputsArr[4].value = data[key]['gender'];
                inputsArr[5].value = data[key]['nation'];
                inputsArr[6].value = data[key]['number'];
                inputsArr[7].value = data[key]['email'];
            // });
            break; // Exit the loop once a match is found
        }
    }


});
  })
  .catch(error => {
    console.error('There was a problem with the fetch operation:', error);
  });




</script>
@endsection