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
                                @if (isset($lang))
                                @if ($lang == 1)
                                {{ $costNumber+$sum }}
                            @endif
                            @if ($lang == 0)
                                {{ floor($costNumber+$sum / 89) }}
                            @endif
                            @if ($lang == 2)
                                {{ floor($costNumber+$sum / 12 )}}
                            @endif
                                @endif
                                @if (!isset($lang))
                                {{ $costNumber+$sum }}

                                @endif
                            </p>
                            @if (isset($lang))
                            @if ($lang == 1)
                                    <svg width="22" height="24" viewBox="0 0 22 24"
                                        fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M13.5 14.85C15.513 14.85 17.4451 14.1171 18.8709 12.8101C20.297 11.5028 21.1 9.72783 21.1 7.875C21.1 6.02217 20.297 4.24719 18.8709 2.93993C17.4451 1.63293 15.513 0.9 13.5 0.9H6C5.71093 0.9 5.43214 1.00518 5.22532 1.19477C5.01821 1.38463 4.9 1.64408 4.9 1.91667V12.8167H2C1.71093 12.8167 1.43214 12.9218 1.22532 13.1114C1.01821 13.3013 0.9 13.5608 0.9 13.8333C0.9 14.1059 1.01821 14.3654 1.22532 14.5552C1.43215 14.7448 1.71093 14.85 2 14.85H4.9V16.4833H2C1.71093 16.4833 1.43215 16.5885 1.22532 16.7781C1.01821 16.968 0.9 17.2274 0.9 17.5C0.9 17.7726 1.01821 18.032 1.22532 18.2219C1.43214 18.4115 1.71093 18.5167 2 18.5167H4.9V22.0833C4.9 22.3559 5.01821 22.6154 5.22532 22.8052C5.43215 22.9948 5.71093 23.1 6 23.1C6.28907 23.1 6.56785 22.9948 6.77468 22.8052C6.98179 22.6154 7.1 22.3559 7.1 22.0833V18.5167H13C13.2891 18.5167 13.5679 18.4115 13.7747 18.2219C13.9818 18.032 14.1 17.7726 14.1 17.5C14.1 17.2274 13.9818 16.968 13.7747 16.7781C13.5679 16.5885 13.2891 16.4833 13 16.4833H7.1V14.85H13.5ZM7.1 2.93333H13.5C14.9348 2.93333 16.3094 3.4559 17.3215 4.38372C18.3334 5.31127 18.9 6.56734 18.9 7.875C18.9 9.18266 18.3334 10.4387 17.3215 11.3663C16.3094 12.2941 14.9348 12.8167 13.5 12.8167H7.1V2.93333Z"
                                            fill="black" stroke="black" stroke-width="0.2" />
                                    </svg>
                            @endif
                            @if ($lang == 0)
                                    <svg width="20" height="36" viewBox="0 0 20 36"
                                        fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M8.1 4.1H8C5.90479 4.1 3.89539 4.93232 2.41386 6.41386C0.932319 7.89539 0.1 9.90479 0.1 12C0.1 14.0952 0.932319 16.1046 2.41386 17.5861C3.89539 19.0677 5.90479 19.9 8 19.9H8.1V20V28V28.1L8.00005 28.1C7.15197 28.1004 6.32462 27.8378 5.632 27.3484C4.93964 26.8592 4.41596 26.1674 4.13304 25.3683M8.1 4.1L4.227 25.334M8.1 4.1V4V2C8.1 1.49609 8.30018 1.01282 8.6565 0.656497C9.01282 0.300178 9.49609 0.1 10 0.1C10.5039 0.1 10.9872 0.300178 11.3435 0.656497C11.6998 1.01282 11.9 1.49609 11.9 2V4V4.10002L12 4.1C13.634 4.09974 15.2279 4.60616 16.5621 5.54951C17.8961 6.49268 18.9048 7.82622 19.4494 9.36647L8.1 4.1ZM4.13304 25.3683C4.13294 25.368 4.13283 25.3677 4.13272 25.3673L4.227 25.334M4.13304 25.3683C4.13314 25.3685 4.13324 25.3688 4.13333 25.369L4.227 25.334M4.13304 25.3683C3.95857 24.9022 3.60824 24.5233 3.15731 24.3128C2.70614 24.1022 2.19033 24.0771 1.72086 24.2429C1.25138 24.4087 0.86576 24.7522 0.646957 25.1995C0.428288 25.6465 0.393697 26.1614 0.550592 26.6335M4.227 25.334C4.04345 24.8431 3.67453 24.4438 3.19961 24.2222C2.7247 24.0005 2.18174 23.9741 1.68755 24.1486C1.19337 24.3232 0.787449 24.6847 0.55713 25.1555C0.326811 25.6263 0.290496 26.1687 0.456 26.666M0.550592 26.6335C0.550489 26.6333 0.550387 26.633 0.550284 26.6327L0.456 26.666M0.550592 26.6335C1.0952 28.1738 2.10393 29.5073 3.43788 30.4505C4.77208 31.3938 6.36597 31.9003 7.99998 31.9L8.1 31.9V32V34C8.1 34.5039 8.30018 34.9872 8.6565 35.3435C9.01282 35.6998 9.49609 35.9 10 35.9C10.5039 35.9 10.9872 35.6998 11.3435 35.3435C11.6998 34.9872 11.9 34.5039 11.9 34V32V31.9H12C14.0952 31.9 16.1046 31.0677 17.5861 29.5861C19.0677 28.1046 19.9 26.0952 19.9 24C19.9 21.9048 19.0677 19.8954 17.5861 18.4139C16.1046 16.9323 14.0952 16.1 12 16.1H11.9V16V8V7.90005L12 7.9C12.848 7.89958 13.6754 8.16216 14.368 8.65156C15.0604 9.14079 15.584 9.8326 15.867 10.6318L0.456 26.666M0.550592 26.6335C0.550689 26.6338 0.550786 26.6341 0.550883 26.6344L0.456 26.666M7.9 27.9988V28H7.996C7.96396 28 7.93196 27.9996 7.9 27.9988ZM8.1 8V7.9H8C6.91261 7.9 5.86976 8.33196 5.10086 9.10086C4.33196 9.86976 3.9 10.9126 3.9 12C3.9 13.0874 4.33196 14.1302 5.10086 14.8991C5.86976 15.668 6.91261 16.1 8 16.1H8.1V16V8ZM12 19.9H11.9V20V28V28.1H12C13.0874 28.1 14.1302 27.668 14.8991 26.8991C15.668 26.1302 16.1 25.0874 16.1 24C16.1 22.9126 15.668 21.8698 14.8991 21.1009C14.1302 20.332 13.0874 19.9 12 19.9Z"
                                            fill="black" stroke="black" stroke-width="0.2" />
                                    </svg>
                            @endif
                            @if ($lang == 2)
                                    <svg width="43" height="44" viewBox="0 0 43 44"
                                        fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                            d="M9.50069 5.19994C9.73051 5.03588 9.9904 4.91869 10.2655 4.85508C10.5406 4.79146 10.8256 4.78266 11.1041 4.82918C11.3826 4.8757 11.6492 4.97663 11.8887 5.12619C12.1282 5.27576 12.3359 5.47105 12.4999 5.70089L23.2499 20.7509C23.5812 21.215 23.7146 21.7918 23.6206 22.3543C23.5267 22.9167 23.2132 23.4188 22.749 23.7501C22.2848 24.0814 21.7081 24.2148 21.1456 24.1208C20.5832 24.0269 20.081 23.7133 19.7497 23.2492L8.99974 8.19919C8.83568 7.96937 8.7185 7.70949 8.65488 7.43438C8.59127 7.15926 8.58247 6.87432 8.62899 6.5958C8.6755 6.31729 8.77643 6.05067 8.926 5.81117C9.07557 5.57166 9.27085 5.36397 9.50069 5.19994Z"
                                            fill="black" />
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                            d="M33.4989 5.19994C33.2691 5.03588 33.0092 4.91869 32.7341 4.85508C32.459 4.79146 32.1741 4.78266 31.8955 4.82918C31.617 4.8757 31.3504 4.97663 31.1109 5.12619C30.8714 5.27576 30.6637 5.47105 30.4997 5.70089L19.7497 20.7509C19.5856 20.9807 19.4685 21.2406 19.4049 21.5157C19.3413 21.7908 19.3325 22.0758 19.379 22.3543C19.4729 22.9167 19.7865 23.4188 20.2506 23.7501C20.7148 24.0814 21.2915 24.2148 21.854 24.1208C22.1325 24.0743 22.3991 23.9734 22.6386 23.8238C22.8781 23.6743 23.0858 23.479 23.2499 23.2492L33.9999 8.19919C34.1639 7.96937 34.2811 7.70949 34.3447 7.43438C34.4084 7.15926 34.4172 6.87432 34.3706 6.5958C34.3241 6.31729 34.2232 6.05067 34.0736 5.81117C33.9241 5.57166 33.7288 5.36397 33.4989 5.19994Z"
                                            fill="black" />
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                            d="M9.67578 24.15C9.67578 23.5798 9.9023 23.0329 10.3055 22.6297C10.7087 22.2265 11.2556 22 11.8258 22H31.1758C31.746 22 32.2929 22.2265 32.6961 22.6297C33.0993 23.0329 33.3258 23.5798 33.3258 24.15C33.3258 24.7202 33.0993 25.2671 32.6961 25.6703C32.2929 26.0735 31.746 26.3 31.1758 26.3H11.8258C11.2556 26.3 10.7087 26.0735 10.3055 25.6703C9.9023 25.2671 9.67578 24.7202 9.67578 24.15Z"
                                            fill="black" />
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                            d="M21.4996 19.8501C22.0698 19.8501 22.6167 20.0766 23.0199 20.4798C23.4231 20.883 23.6496 21.4299 23.6496 22.0001V37.0501C23.6496 37.6203 23.4231 38.1672 23.0199 38.5704C22.6167 38.9736 22.0698 39.2001 21.4996 39.2001C20.9294 39.2001 20.3825 38.9736 19.9793 38.5704C19.5761 38.1672 19.3496 37.6203 19.3496 37.0501V22.0001C19.3496 21.4299 19.5761 20.883 19.9793 20.4798C20.3825 20.0766 20.9294 19.8501 21.4996 19.8501Z"
                                            fill="black" />
                                    </svg>
                            @endif
                        @endif
                        @if (!isset($lang))
                            
                                <svg width="22" height="24" viewBox="0 0 22 24" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M13.5 14.85C15.513 14.85 17.4451 14.1171 18.8709 12.8101C20.297 11.5028 21.1 9.72783 21.1 7.875C21.1 6.02217 20.297 4.24719 18.8709 2.93993C17.4451 1.63293 15.513 0.9 13.5 0.9H6C5.71093 0.9 5.43214 1.00518 5.22532 1.19477C5.01821 1.38463 4.9 1.64408 4.9 1.91667V12.8167H2C1.71093 12.8167 1.43214 12.9218 1.22532 13.1114C1.01821 13.3013 0.9 13.5608 0.9 13.8333C0.9 14.1059 1.01821 14.3654 1.22532 14.5552C1.43215 14.7448 1.71093 14.85 2 14.85H4.9V16.4833H2C1.71093 16.4833 1.43215 16.5885 1.22532 16.7781C1.01821 16.968 0.9 17.2274 0.9 17.5C0.9 17.7726 1.01821 18.032 1.22532 18.2219C1.43214 18.4115 1.71093 18.5167 2 18.5167H4.9V22.0833C4.9 22.3559 5.01821 22.6154 5.22532 22.8052C5.43215 22.9948 5.71093 23.1 6 23.1C6.28907 23.1 6.56785 22.9948 6.77468 22.8052C6.98179 22.6154 7.1 22.3559 7.1 22.0833V18.5167H13C13.2891 18.5167 13.5679 18.4115 13.7747 18.2219C13.9818 18.032 14.1 17.7726 14.1 17.5C14.1 17.2274 13.9818 16.968 13.7747 16.7781C13.5679 16.5885 13.2891 16.4833 13 16.4833H7.1V14.85H13.5ZM7.1 2.93333H13.5C14.9348 2.93333 16.3094 3.4559 17.3215 4.38372C18.3334 5.31127 18.9 6.56734 18.9 7.875C18.9 9.18266 18.3334 10.4387 17.3215 11.3663C16.3094 12.2941 14.9348 12.8167 13.5 12.8167H7.1V2.93333Z"
                                        fill="black" stroke="black" stroke-width="0.2" />
                                </svg>
                        @endif
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