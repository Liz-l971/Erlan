@extends('loyauts.app')
@section('title')
    Админ-панель
@endsection
@section('content')
    <?php
    function formatDate($date, $format = 'd.m.y')
    {
        return date($format, strtotime($date));
    } ?>
  <main>    
    <div class="admin_color">
        <div class="container">
            <section class="crums">
                <a href="/index.html" class="href_crum">главная</a>
                <svg width="8" height="15" viewBox="0 0 8 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M1 1.5L7 7.5L1 13.5" stroke="black" stroke-width="1.1" stroke-linecap="square" stroke-linejoin="round" />
                </svg>
                <a href="" class="href_crum">Админ панель</a>

         
            </section>
            <section class="profile_block_admin">
                <div class="block_all_info_about_broni">
                    <div class="bottom_block_border position">
                        <div class="bottom_block_border_content position">
                            <h4 class="main_name_bl">
                                Админ панель
                            </h4>
                            <div class="tab">
                                <button class="tablinks active" onclick="openCity(event, 'Washington')">пользователи</button>
                                <button class="tablinks" onclick="openCity(event, 'Pekin')">Брони</button>
                                <button class="tablinks" onclick="openCity(event, 'Monte')">Добавить рейс</button>
                                <button class="tablinks" onclick="openCity(event, 'Tokyo')">Добавить отель</button>
                                <button class="tablinks" onclick="openCity(event, 'Berlin')">добавить корабль</button>
                                <button class="tablinks" onclick="openCity(event, 'Rio')">добавить номер</button>
                                <button class="tablinks" onclick="openCity(event, 'Moskow')">выйти из профиля</button>
                            </div>

                        </div>
                    </div>
                </div>
                <div id="Washington" class="tabcontent block">
                    <div class="block_add_turist">
                        <div class="block_content_add_turist">
                            <div class="qweweweq">
                                <h4 class="name_block">
                                    Пользователи
                                </h4>
                                <div class="vklad_sort">
                                    <button class="link act" onclick="openity(event, 'rew')">активные</button>
                                    <button class="link" onclick="openity(event, 'pov')">забаненные</button>

                                </div>
                                
                                <div class="tabcontentqwe" id="rew" style="display: block;">
                                    <div class="content_bron">
                                        <div class="text_column">
                                            <p class="grey_text id">
                                                id
                                            </p>
                                            <p class="grey_text fio">
                                                фио
                                            </p>
                                            <p class="grey_text zaregan">
                                                зареган
                                            </p>
                                        
                                       </div>
                                        <div class="column_flex">
                                            @foreach ($users as $user)
                                            <div class="flrx">
                                                <div class="layot">
                                                    <p class="id">
                                                        {{$user->id}}
                                                    </p>
                                                    <p class="fio">
                                                        {{$user->surname}} {{$user->name}} {{$user->patronymic}}
                                                    </p>
                                                    <p class="data_zareg">
                                                        {{formatDate($user->created_at)}}
                                                    </p>
                                                    <p class="data_zaban">
                                                     
                                                    </p>
                                                </div>
                                                
                                                <form action="/ban/{{$user->id}}" method="POST">
                                                 @csrf
                                                    <button>
                                                        <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path d="M2.22273 0.807542C1.83221 0.417017 1.19904 0.417017 0.808518 0.807542C0.417994 1.19807 0.417994 1.83123 0.808518 2.22176L8.58669 9.99993L0.808519 17.7781C0.417995 18.1686 0.417995 18.8018 0.808519 19.1923C1.19904 19.5828 1.83221 19.5828 2.22273 19.1923L10.0009 11.4141L17.779 19.1922C18.1695 19.5827 18.8027 19.5827 19.1932 19.1922C19.5837 18.8017 19.5837 18.1685 19.1932 17.778L11.4151 9.99993L19.1933 2.22176C19.5838 1.83123 19.5838 1.19807 19.1933 0.807542C18.8028 0.417017 18.1696 0.417017 17.7791 0.807542L10.0009 8.58572L2.22273 0.807542Z" fill="#5F5F5F" />
                                                        </svg>
                                                    </button>
                                                </form>
                                                
                                            </div>
                                            @endforeach
                                        </div>  
                                    </div>
                                       
                                </div>
                                <div class="tabcontentqwe" id="pov" >
                                    <div class="content_bron">
                                        <div class="text_column">
                                            <p class="grey_text id">
                                                id
                                            </p>
                                            <p class="grey_text fio">
                                                фио
                                            </p>
                                            <p class="grey_text zaregan">
                                                зареган
                                            </p>
                                            <p class="grey_text zaregan">
                                                забанен
                                            </p>
                                       </div>
                                        <div class="column_flex">
                                            @foreach ($usersB as $user)
                                            <div class="flrx">
                                                <div class="layot">
                                                    <p class="id">
                                                        {{$user->id}}
                                                    </p>
                                                    <p class="fio">
                                                        {{$user->surname}} {{$user->name}} {{$user->patronymic}}
                                                    </p>
                                                    <p class="data_zareg">
                                                        {{formatDate($user->created_at)}}
                                                    </p>
                                                    <p class="data_zaban">
                                                        {{$user->data_ban}}
                                                    </p>
                                                </div>
                                                <form action="/unban/{{$user->id}}" method="POST">
                                                    @csrf
                                                       <button>
                                                           <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                               <path d="M2.22273 0.807542C1.83221 0.417017 1.19904 0.417017 0.808518 0.807542C0.417994 1.19807 0.417994 1.83123 0.808518 2.22176L8.58669 9.99993L0.808519 17.7781C0.417995 18.1686 0.417995 18.8018 0.808519 19.1923C1.19904 19.5828 1.83221 19.5828 2.22273 19.1923L10.0009 11.4141L17.779 19.1922C18.1695 19.5827 18.8027 19.5827 19.1932 19.1922C19.5837 18.8017 19.5837 18.1685 19.1932 17.778L11.4151 9.99993L19.1933 2.22176C19.5838 1.83123 19.5838 1.19807 19.1933 0.807542C18.8028 0.417017 18.1696 0.417017 17.7791 0.807542L10.0009 8.58572L2.22273 0.807542Z" fill="#5F5F5F" />
                                                           </svg>
                                                       </button>
                                                   </form>
                                            </div>
                                        @endforeach
                                        </div>  
                                    </div>
                                        
                                 </div>
                            </div>
                           
                        </div>
                    </div>
                </div>           
                <div id="Pekin" class="tabcontent">
                    <div class="block_add_turist">
                        <div class="block_content_add_turist">
                            <div class="qweweweq">
                                <h4 class="name_block">
                                    брони пользователей
                                </h4>
                                <div class="vklad_sort">
                                    <p class="link act" onclick="openstate(event, 'all')">все</p>
                                    <p class="link" onclick="openstate(event, 'block')">Забронированные</p>
                                    <p class="link" onclick="openstate(event, 'arh')">архивные</p>
                                </div>

                                @foreach ($brons as $item)
                                <div class="ebanutsa" style="display: block;" id="all" >
                                    <div class="content_bron">
                                        <div class="hrum_hrum">
                                            <div class="flex_top">
                                                <p class="name_bron">
                                                    юзер: №{{$item->user->id}} {{$item->user->surname}} {{$item->user->name}} {{$item->user->patronymic}}
                                                </p>
                                                <p class="namber_order">
                                                    зАКАЗ №:{{$item->id}}
                                                </p>
                                                <p class="data_bron">
                                                    Дата брони: {{$item->created_at}}
                                                </p>
                                            </div>
                                            
                                            <div class="panel_my_bron">
                                                <div class="bottom_block_border_content qwe">
                                                    <h5 class="name_blovk">
                                                        космоперелёт кол-во чел.: 2
                                                    </h5>
                                                    <div class="tet_a_tet">
                                                        <div class="column_time">
                                                            <p class="time">
                                                                {{ $item->raceFrom->time_otb }}
                                                            </p>
                                                            <p class="lit">
                                                                {{ $item->raceFrom->otcuda }}
                                                            </p>
                                                        </div>
                                                        <svg width="40" height="7" viewBox="0 0 39 7" fill="none"
                                                            xmlns="http://www.w3.org/2000/svg">
                                                            <path d="M39 3.5L34 0.613249V6.38675L39 3.5ZM0 4H34.5V3H0V4Z" fill="#9A9A9A" />
                                                        </svg>
                                                        <div class="column_time">
                                                            <p class="time">
                                                                {{ $item->raceFrom->time_prib }}
                
                                                            </p>
                                                            <p class="lit">
                                                                {{ $item->raceFrom->cuda }}
                
                                                            </p>
                                                        </div>
                
                                                    </div>
                                                    <div class="hotel_info">
                
                                                        <p class="name_hotel">
                                                            {{ $item->company_from }}
                                                            @if ($item->company_from == 1)
                                                                Роскосмос
                                                            @endif
                                                            @if ($item->company_from == 2)
                                                                SpaceX
                                                            @endif
                                                            @if ($item->company_from == 3)
                                                                CNSA
                                                            @endif
                                                            @if ($item->company_from == 4)
                                                                BLUE ORIGIN
                                                            @endif
                                                        </p>
                                                        <p class="class_and_eat">
                                                            {{ $item->class_from }}
                                                        </p>
                                                    </div>
                                                    <div class="time_info">
                                                        <p class="name_hotel">
                                                            время полёта
                                                        </p>
                                                        <p class="class_and_eat">
                                                            {{ $item->raceFrom->timeFly()}} д.
                                                        </p>
                                                    </div>
                                                    
                                                </div>
                                                <div class="bottom_block_border_content rew">
                                                    <div class="tet_a_tet">
                                                        <div class="column_time">
                                                            <p class="time">
                                                                {{ $item->raceTo->time_otb }}
                                                            </p>
                                                            <p class="lit">
                                                                {{ $item->raceTo->otcuda }}
                                                            </p>
                                                        </div>
                                                        <svg width="40" height="7" viewBox="0 0 39 7" fill="none"
                                                            xmlns="http://www.w3.org/2000/svg">
                                                            <path d="M39 3.5L34 0.613249V6.38675L39 3.5ZM0 4H34.5V3H0V4Z" fill="#9A9A9A" />
                                                        </svg>
                                                        <div class="column_time">
                                                            <p class="time">
                                                                {{ $item->raceTo->time_prib }}
                
                                                            </p>
                                                            <p class="lit">
                                                                {{ $item->raceTo->cuda }}
                                                            </p>
                                                        </div>
                
                                                    </div>
                                                    <div class="hotel_info">
                
                                                        <p class="name_hotel">
                                                            {{ $item->company_to }}
                                                            @if ($item->company_to == 1)
                                                                Роскосмос
                                                            @endif
                                                            @if ($item->company_to == 2)
                                                                SpaceX
                                                            @endif
                                                            @if ($item->company_to == 3)
                                                                CNSA
                                                            @endif
                                                            @if ($item->company_to == 4)
                                                                BLUE ORIGIN
                                                            @endif
                                                        </p>
                                                        <p class="class_and_eat">
                                                            {{ $item->class_to }}
                                                        </p>
                                                    </div>
                                                    <div class="time_info">
                                                        <p class="name_hotel">
                                                            время полёта
                                                        </p>
                                                        <p class="class_and_eat">
                                                            {{ $item->raceTo->timeFly()}} д.
                                                        </p>
                                                    </div>
                                                    
                                                </div>
                                                <hr class="line_qw">
                                                <div class="riobn">
                                                    <div class="hz_kak_nazvat_block">
                                                        <h5 class="name_blovk">
                                                            Отель
                                                        </h5>
                                                        <div class="tet_a_tet">
                                                            <div class="column_time">
                                                                <p class="time">
                                                                    {{ $item->raceFrom->time_prib }}
                                                                </p>
                                                                <p class="lit">
                                                                    Дата заезда
                                                                </p>
                                                            </div>
                                                            <svg width="39" height="7" viewBox="0 0 39 7" fill="none"
                                                                xmlns="http://www.w3.org/2000/svg">
                                                                <path d="M39 3.5L34 0.613249V6.38675L39 3.5ZM0 4H34.5V3H0V4Z"
                                                                    fill="#9A9A9A" />
                                                            </svg>
                                                            <div class="column_time">
                                                                <p class="time">
                                                                    {{ $item->raceTo->time_otb }}
                                                                </p>
                                                                <p class="lit">
                                                                    Дата выезда
                                                                </p>
                                                            </div>
                
                
                                                        </div>
                                                        <div class="hotel_info">
                                                            <div class="stars">
                                                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                                    xmlns="http://www.w3.org/2000/svg">
                                                                    <path
                                                                        d="M12 17.27L18.18 21L16.54 13.97L22 9.24L14.81 8.63L12 2L9.19 8.63L2 9.24L7.46 13.97L5.82 21L12 17.27Z"
                                                                        fill="white" />
                                                                </svg>
                                                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                                    xmlns="http://www.w3.org/2000/svg">
                                                                    <path
                                                                        d="M12 17.27L18.18 21L16.54 13.97L22 9.24L14.81 8.63L12 2L9.19 8.63L2 9.24L7.46 13.97L5.82 21L12 17.27Z"
                                                                        fill="white" />
                                                                </svg>
                                                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                                    xmlns="http://www.w3.org/2000/svg">
                                                                    <path
                                                                        d="M12 17.27L18.18 21L16.54 13.97L22 9.24L14.81 8.63L12 2L9.19 8.63L2 9.24L7.46 13.97L5.82 21L12 17.27Z"
                                                                        fill="white" />
                                                                </svg>
                                                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                                    xmlns="http://www.w3.org/2000/svg">
                                                                    <path
                                                                        d="M12 17.27L18.18 21L16.54 13.97L22 9.24L14.81 8.63L12 2L9.19 8.63L2 9.24L7.46 13.97L5.82 21L12 17.27Z"
                                                                        fill="white" />
                                                                </svg>
                                                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                                    xmlns="http://www.w3.org/2000/svg">
                                                                    <path
                                                                        d="M12 15.39L8.24 17.66L9.23 13.38L5.91 10.5L10.29 10.13L12 6.09L13.71 10.13L18.09 10.5L14.77 13.38L15.76 17.66M22 9.24L14.81 8.63L12 2L9.19 8.63L2 9.24L7.45 13.97L5.82 21L12 17.27L18.18 21L16.54 13.97L22 9.24Z"
                                                                        fill="white" />
                                                                </svg>
                                                            </div>
                                                            <p class="name_hotel">
                                                                {{ $item->numberBron->hotelBron->name }}
                                                            </p>
                                                            <p class="class_and_eat">
                                                                {{ $item->numberBron->type }} - {{ $item->numberBron->hotelBron->feed }}
                
                                                            </p>
                                                        </div>
                
                
                                                    </div>
                                                    <div class="white_block white_cur">
                                                        <p class="cost">
                                                            {{ $item->cost }}
                                                        </p>
                                                        <svg width="21" height="23" viewBox="0 0 21 23" fill="none"
                                                            xmlns="http://www.w3.org/2000/svg">
                                                            <path
                                                                d="M12.7129 14.35C14.7259 14.35 16.658 13.6171 18.0838 12.3101C19.5099 11.0028 20.3129 9.22783 20.3129 7.375C20.3129 5.52217 19.5099 3.74719 18.0838 2.43993C16.658 1.13293 14.7259 0.4 12.7129 0.4H5.21289C4.92382 0.4 4.64504 0.505182 4.43821 0.69477C4.2311 0.884626 4.11289 1.14408 4.11289 1.41667V12.3167H1.21289C0.923825 12.3167 0.645036 12.4218 0.438212 12.6114C0.231096 12.8013 0.112891 13.0608 0.112891 13.3333C0.112891 13.6059 0.231096 13.8654 0.438212 14.0552C0.645036 14.2448 0.923825 14.35 1.21289 14.35H4.11289V15.9833H1.21289C0.923825 15.9833 0.645036 16.0885 0.438212 16.2781C0.231096 16.468 0.112891 16.7274 0.112891 17C0.112891 17.2726 0.231096 17.532 0.438212 17.7219C0.645035 17.9115 0.923825 18.0167 1.21289 18.0167H4.11289V21.5833C4.11289 21.8559 4.2311 22.1154 4.43821 22.3052C4.64504 22.4948 4.92383 22.6 5.21289 22.6C5.50196 22.6 5.78075 22.4948 5.98757 22.3052C6.19468 22.1154 6.31289 21.8559 6.31289 21.5833V18.0167H12.2129C12.502 18.0167 12.7807 17.9115 12.9876 17.7219C13.1947 17.532 13.3129 17.2726 13.3129 17C13.3129 16.7274 13.1947 16.468 12.9876 16.2781C12.7807 16.0885 12.502 15.9833 12.2129 15.9833H6.31289V14.35H12.7129ZM6.31289 2.43333H12.7129C14.1477 2.43333 15.5222 2.9559 16.5344 3.88372C17.5463 4.81127 18.1129 6.06734 18.1129 7.375C18.1129 8.68266 17.5463 9.93873 16.5344 10.8663C15.5222 11.7941 14.1477 12.3167 12.7129 12.3167H6.31289V2.43333Z"
                                                                fill="black" stroke="black" stroke-width="0.2" />
                                                        </svg>
                                                    </div>
                                                </div>
                                                @if ($item->status==0)
                                                <form action="/changeBronStatus/{{$item->id}}" method="POST">
                                                    @csrf
                                                    <button type="submit">
                                                        <svg width="50" height="50" viewBox="0 0 50 50" class="btn_delete" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <rect width="50" height="50" fill="black" />
                                                            <rect x="14" y="23" width="22" height="4" fill="white" />
                                                        </svg>
                                                    </button>
                                                </form>
                                                @endif
                                             
                                             
                                                <p class="name_pass">
                                                    Пасс.: {{$item->tourists_id}}
                                                </p>
                                            </div>
                                        </div>
                                        
                                    </div>
                                </div>
                                @endforeach
                               
                                @foreach ($bronsActive as $item)
                                <div class="ebanutsa" style="display: block;" id="all" >
                                    <div class="content_bron">
                                        <div class="hrum_hrum">
                                            <div class="flex_top">
                                                <p class="name_bron">
                                                    юзер: №{{$item->user->id}} {{$item->user->surname}} {{$item->user->name}} {{$item->user->patronymic}}
                                                </p>
                                                <p class="namber_order">
                                                    зАКАЗ №:{{$item->id}}
                                                </p>
                                                <p class="data_bron">
                                                    Дата брони: {{$item->created_at}}
                                                </p>
                                            </div>
                                            
                                            <div class="panel_my_bron">
                                                <div class="bottom_block_border_content qwe">
                                                    <h5 class="name_blovk">
                                                        космоперелёт кол-во чел.: 2
                                                    </h5>
                                                    <div class="tet_a_tet">
                                                        <div class="column_time">
                                                            <p class="time">
                                                                {{ $item->raceFrom->time_otb }}
                                                            </p>
                                                            <p class="lit">
                                                                {{ $item->raceFrom->otcuda }}
                                                            </p>
                                                        </div>
                                                        <svg width="40" height="7" viewBox="0 0 39 7" fill="none"
                                                            xmlns="http://www.w3.org/2000/svg">
                                                            <path d="M39 3.5L34 0.613249V6.38675L39 3.5ZM0 4H34.5V3H0V4Z" fill="#9A9A9A" />
                                                        </svg>
                                                        <div class="column_time">
                                                            <p class="time">
                                                                {{ $item->raceFrom->time_prib }}
                
                                                            </p>
                                                            <p class="lit">
                                                                {{ $item->raceFrom->cuda }}
                
                                                            </p>
                                                        </div>
                
                                                    </div>
                                                    <div class="hotel_info">
                
                                                        <p class="name_hotel">
                                                            {{ $item->company_from }}
                                                            @if ($item->company_from == 1)
                                                                Роскосмос
                                                            @endif
                                                            @if ($item->company_from == 2)
                                                                SpaceX
                                                            @endif
                                                            @if ($item->company_from == 3)
                                                                CNSA
                                                            @endif
                                                            @if ($item->company_from == 4)
                                                                BLUE ORIGIN
                                                            @endif
                                                        </p>
                                                        <p class="class_and_eat">
                                                            {{ $item->class_from }}
                                                        </p>
                                                    </div>
                                                    <div class="time_info">
                                                        <p class="name_hotel">
                                                            время полёта
                                                        </p>
                                                        <p class="class_and_eat">
                                                            {{ $item->raceFrom->timeFly()}} д.
                                                        </p>
                                                    </div>
                                                    
                                                </div>
                                                <div class="bottom_block_border_content rew">
                                                    <div class="tet_a_tet">
                                                        <div class="column_time">
                                                            <p class="time">
                                                                {{ $item->raceTo->time_otb }}
                                                            </p>
                                                            <p class="lit">
                                                                {{ $item->raceTo->otcuda }}
                                                            </p>
                                                        </div>
                                                        <svg width="40" height="7" viewBox="0 0 39 7" fill="none"
                                                            xmlns="http://www.w3.org/2000/svg">
                                                            <path d="M39 3.5L34 0.613249V6.38675L39 3.5ZM0 4H34.5V3H0V4Z" fill="#9A9A9A" />
                                                        </svg>
                                                        <div class="column_time">
                                                            <p class="time">
                                                                {{ $item->raceTo->time_prib }}
                
                                                            </p>
                                                            <p class="lit">
                                                                {{ $item->raceTo->cuda }}
                                                            </p>
                                                        </div>
                
                                                    </div>
                                                    <div class="hotel_info">
                
                                                        <p class="name_hotel">
                                                            {{ $item->company_to }}
                                                            @if ($item->company_to == 1)
                                                                Роскосмос
                                                            @endif
                                                            @if ($item->company_to == 2)
                                                                SpaceX
                                                            @endif
                                                            @if ($item->company_to == 3)
                                                                CNSA
                                                            @endif
                                                            @if ($item->company_to == 4)
                                                                BLUE ORIGIN
                                                            @endif
                                                        </p>
                                                        <p class="class_and_eat">
                                                            {{ $item->class_to }}
                                                        </p>
                                                    </div>
                                                    <div class="time_info">
                                                        <p class="name_hotel">
                                                            время полёта
                                                        </p>
                                                        <p class="class_and_eat">
                                                            {{ $item->raceTo->timeFly()}} д.
                                                        </p>
                                                    </div>
                                                    
                                                </div>
                                                <hr class="line_qw">
                                                <div class="riobn">
                                                    <div class="hz_kak_nazvat_block">
                                                        <h5 class="name_blovk">
                                                            Отель
                                                        </h5>
                                                        <div class="tet_a_tet">
                                                            <div class="column_time">
                                                                <p class="time">
                                                                    {{ $item->raceFrom->time_prib }}
                                                                </p>
                                                                <p class="lit">
                                                                    Дата заезда
                                                                </p>
                                                            </div>
                                                            <svg width="39" height="7" viewBox="0 0 39 7" fill="none"
                                                                xmlns="http://www.w3.org/2000/svg">
                                                                <path d="M39 3.5L34 0.613249V6.38675L39 3.5ZM0 4H34.5V3H0V4Z"
                                                                    fill="#9A9A9A" />
                                                            </svg>
                                                            <div class="column_time">
                                                                <p class="time">
                                                                    {{ $item->raceTo->time_otb }}
                                                                </p>
                                                                <p class="lit">
                                                                    Дата выезда
                                                                </p>
                                                            </div>
                
                
                                                        </div>
                                                        <div class="hotel_info">
                                                            <div class="stars">
                                                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                                    xmlns="http://www.w3.org/2000/svg">
                                                                    <path
                                                                        d="M12 17.27L18.18 21L16.54 13.97L22 9.24L14.81 8.63L12 2L9.19 8.63L2 9.24L7.46 13.97L5.82 21L12 17.27Z"
                                                                        fill="white" />
                                                                </svg>
                                                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                                    xmlns="http://www.w3.org/2000/svg">
                                                                    <path
                                                                        d="M12 17.27L18.18 21L16.54 13.97L22 9.24L14.81 8.63L12 2L9.19 8.63L2 9.24L7.46 13.97L5.82 21L12 17.27Z"
                                                                        fill="white" />
                                                                </svg>
                                                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                                    xmlns="http://www.w3.org/2000/svg">
                                                                    <path
                                                                        d="M12 17.27L18.18 21L16.54 13.97L22 9.24L14.81 8.63L12 2L9.19 8.63L2 9.24L7.46 13.97L5.82 21L12 17.27Z"
                                                                        fill="white" />
                                                                </svg>
                                                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                                    xmlns="http://www.w3.org/2000/svg">
                                                                    <path
                                                                        d="M12 17.27L18.18 21L16.54 13.97L22 9.24L14.81 8.63L12 2L9.19 8.63L2 9.24L7.46 13.97L5.82 21L12 17.27Z"
                                                                        fill="white" />
                                                                </svg>
                                                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                                    xmlns="http://www.w3.org/2000/svg">
                                                                    <path
                                                                        d="M12 15.39L8.24 17.66L9.23 13.38L5.91 10.5L10.29 10.13L12 6.09L13.71 10.13L18.09 10.5L14.77 13.38L15.76 17.66M22 9.24L14.81 8.63L12 2L9.19 8.63L2 9.24L7.45 13.97L5.82 21L12 17.27L18.18 21L16.54 13.97L22 9.24Z"
                                                                        fill="white" />
                                                                </svg>
                                                            </div>
                                                            <p class="name_hotel">
                                                                {{ $item->numberBron->hotelBron->name }}
                                                            </p>
                                                            <p class="class_and_eat">
                                                                {{ $item->numberBron->type }} - {{ $item->numberBron->hotelBron->feed }}
                
                                                            </p>
                                                        </div>
                
                
                                                    </div>
                                                    <div class="white_block white_cur">
                                                        <p class="cost">
                                                            {{ $item->cost }}
                                                        </p>
                                                        <svg width="21" height="23" viewBox="0 0 21 23" fill="none"
                                                            xmlns="http://www.w3.org/2000/svg">
                                                            <path
                                                                d="M12.7129 14.35C14.7259 14.35 16.658 13.6171 18.0838 12.3101C19.5099 11.0028 20.3129 9.22783 20.3129 7.375C20.3129 5.52217 19.5099 3.74719 18.0838 2.43993C16.658 1.13293 14.7259 0.4 12.7129 0.4H5.21289C4.92382 0.4 4.64504 0.505182 4.43821 0.69477C4.2311 0.884626 4.11289 1.14408 4.11289 1.41667V12.3167H1.21289C0.923825 12.3167 0.645036 12.4218 0.438212 12.6114C0.231096 12.8013 0.112891 13.0608 0.112891 13.3333C0.112891 13.6059 0.231096 13.8654 0.438212 14.0552C0.645036 14.2448 0.923825 14.35 1.21289 14.35H4.11289V15.9833H1.21289C0.923825 15.9833 0.645036 16.0885 0.438212 16.2781C0.231096 16.468 0.112891 16.7274 0.112891 17C0.112891 17.2726 0.231096 17.532 0.438212 17.7219C0.645035 17.9115 0.923825 18.0167 1.21289 18.0167H4.11289V21.5833C4.11289 21.8559 4.2311 22.1154 4.43821 22.3052C4.64504 22.4948 4.92383 22.6 5.21289 22.6C5.50196 22.6 5.78075 22.4948 5.98757 22.3052C6.19468 22.1154 6.31289 21.8559 6.31289 21.5833V18.0167H12.2129C12.502 18.0167 12.7807 17.9115 12.9876 17.7219C13.1947 17.532 13.3129 17.2726 13.3129 17C13.3129 16.7274 13.1947 16.468 12.9876 16.2781C12.7807 16.0885 12.502 15.9833 12.2129 15.9833H6.31289V14.35H12.7129ZM6.31289 2.43333H12.7129C14.1477 2.43333 15.5222 2.9559 16.5344 3.88372C17.5463 4.81127 18.1129 6.06734 18.1129 7.375C18.1129 8.68266 17.5463 9.93873 16.5344 10.8663C15.5222 11.7941 14.1477 12.3167 12.7129 12.3167H6.31289V2.43333Z"
                                                                fill="black" stroke="black" stroke-width="0.2" />
                                                        </svg>
                                                    </div>
                                                </div>
                                             
                                                <p class="name_pass">
                                                    Пасс.: {{$item->tourists_id}}
                                                </p>
                                            </div>
                                        </div>
                                        
                                    </div>
                                </div>
                                @endforeach
                                @foreach ($bronsDecline as $item)
                                <div class="ebanutsa" style="display: block;" id="all" >
                                    <div class="content_bron">
                                        <div class="hrum_hrum">
                                            <div class="flex_top">
                                                <p class="name_bron">
                                                    юзер: №{{$item->user->id}} {{$item->user->surname}} {{$item->user->name}} {{$item->user->patronymic}}
                                                </p>
                                                <p class="namber_order">
                                                    зАКАЗ №:{{$item->id}}
                                                </p>
                                                <p class="data_bron">
                                                    Дата брони: {{$item->created_at}}
                                                </p>
                                            </div>
                                            
                                            <div class="panel_my_bron">
                                                <div class="bottom_block_border_content qwe">
                                                    <h5 class="name_blovk">
                                                        космоперелёт кол-во чел.: 2
                                                    </h5>
                                                    <div class="tet_a_tet">
                                                        <div class="column_time">
                                                            <p class="time">
                                                                {{ $item->raceFrom->time_otb }}
                                                            </p>
                                                            <p class="lit">
                                                                {{ $item->raceFrom->otcuda }}
                                                            </p>
                                                        </div>
                                                        <svg width="40" height="7" viewBox="0 0 39 7" fill="none"
                                                            xmlns="http://www.w3.org/2000/svg">
                                                            <path d="M39 3.5L34 0.613249V6.38675L39 3.5ZM0 4H34.5V3H0V4Z" fill="#9A9A9A" />
                                                        </svg>
                                                        <div class="column_time">
                                                            <p class="time">
                                                                {{ $item->raceFrom->time_prib }}
                
                                                            </p>
                                                            <p class="lit">
                                                                {{ $item->raceFrom->cuda }}
                
                                                            </p>
                                                        </div>
                
                                                    </div>
                                                    <div class="hotel_info">
                
                                                        <p class="name_hotel">
                                                            {{ $item->company_from }}
                                                            @if ($item->company_from == 1)
                                                                Роскосмос
                                                            @endif
                                                            @if ($item->company_from == 2)
                                                                SpaceX
                                                            @endif
                                                            @if ($item->company_from == 3)
                                                                CNSA
                                                            @endif
                                                            @if ($item->company_from == 4)
                                                                BLUE ORIGIN
                                                            @endif
                                                        </p>
                                                        <p class="class_and_eat">
                                                            {{ $item->class_from }}
                                                        </p>
                                                    </div>
                                                    <div class="time_info">
                                                        <p class="name_hotel">
                                                            время полёта
                                                        </p>
                                                        <p class="class_and_eat">
                                                            {{ $item->raceFrom->timeFly()}} д.
                                                        </p>
                                                    </div>
                                                    
                                                </div>
                                                <div class="bottom_block_border_content rew">
                                                    <div class="tet_a_tet">
                                                        <div class="column_time">
                                                            <p class="time">
                                                                {{ $item->raceTo->time_otb }}
                                                            </p>
                                                            <p class="lit">
                                                                {{ $item->raceTo->otcuda }}
                                                            </p>
                                                        </div>
                                                        <svg width="40" height="7" viewBox="0 0 39 7" fill="none"
                                                            xmlns="http://www.w3.org/2000/svg">
                                                            <path d="M39 3.5L34 0.613249V6.38675L39 3.5ZM0 4H34.5V3H0V4Z" fill="#9A9A9A" />
                                                        </svg>
                                                        <div class="column_time">
                                                            <p class="time">
                                                                {{ $item->raceTo->time_prib }}
                
                                                            </p>
                                                            <p class="lit">
                                                                {{ $item->raceTo->cuda }}
                                                            </p>
                                                        </div>
                
                                                    </div>
                                                    <div class="hotel_info">
                
                                                        <p class="name_hotel">
                                                            {{ $item->company_to }}
                                                            @if ($item->company_to == 1)
                                                                Роскосмос
                                                            @endif
                                                            @if ($item->company_to == 2)
                                                                SpaceX
                                                            @endif
                                                            @if ($item->company_to == 3)
                                                                CNSA
                                                            @endif
                                                            @if ($item->company_to == 4)
                                                                BLUE ORIGIN
                                                            @endif
                                                        </p>
                                                        <p class="class_and_eat">
                                                            {{ $item->class_to }}
                                                        </p>
                                                    </div>
                                                    <div class="time_info">
                                                        <p class="name_hotel">
                                                            время полёта
                                                        </p>
                                                        <p class="class_and_eat">
                                                            {{ $item->raceTo->timeFly()}} д.
                                                        </p>
                                                    </div>
                                                    
                                                </div>
                                                <hr class="line_qw">
                                                <div class="riobn">
                                                    <div class="hz_kak_nazvat_block">
                                                        <h5 class="name_blovk">
                                                            Отель
                                                        </h5>
                                                        <div class="tet_a_tet">
                                                            <div class="column_time">
                                                                <p class="time">
                                                                    {{ $item->raceFrom->time_prib }}
                                                                </p>
                                                                <p class="lit">
                                                                    Дата заезда
                                                                </p>
                                                            </div>
                                                            <svg width="39" height="7" viewBox="0 0 39 7" fill="none"
                                                                xmlns="http://www.w3.org/2000/svg">
                                                                <path d="M39 3.5L34 0.613249V6.38675L39 3.5ZM0 4H34.5V3H0V4Z"
                                                                    fill="#9A9A9A" />
                                                            </svg>
                                                            <div class="column_time">
                                                                <p class="time">
                                                                    {{ $item->raceTo->time_otb }}
                                                                </p>
                                                                <p class="lit">
                                                                    Дата выезда
                                                                </p>
                                                            </div>
                
                
                                                        </div>
                                                        <div class="hotel_info">
                                                            <div class="stars">
                                                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                                    xmlns="http://www.w3.org/2000/svg">
                                                                    <path
                                                                        d="M12 17.27L18.18 21L16.54 13.97L22 9.24L14.81 8.63L12 2L9.19 8.63L2 9.24L7.46 13.97L5.82 21L12 17.27Z"
                                                                        fill="white" />
                                                                </svg>
                                                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                                    xmlns="http://www.w3.org/2000/svg">
                                                                    <path
                                                                        d="M12 17.27L18.18 21L16.54 13.97L22 9.24L14.81 8.63L12 2L9.19 8.63L2 9.24L7.46 13.97L5.82 21L12 17.27Z"
                                                                        fill="white" />
                                                                </svg>
                                                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                                    xmlns="http://www.w3.org/2000/svg">
                                                                    <path
                                                                        d="M12 17.27L18.18 21L16.54 13.97L22 9.24L14.81 8.63L12 2L9.19 8.63L2 9.24L7.46 13.97L5.82 21L12 17.27Z"
                                                                        fill="white" />
                                                                </svg>
                                                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                                    xmlns="http://www.w3.org/2000/svg">
                                                                    <path
                                                                        d="M12 17.27L18.18 21L16.54 13.97L22 9.24L14.81 8.63L12 2L9.19 8.63L2 9.24L7.46 13.97L5.82 21L12 17.27Z"
                                                                        fill="white" />
                                                                </svg>
                                                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                                    xmlns="http://www.w3.org/2000/svg">
                                                                    <path
                                                                        d="M12 15.39L8.24 17.66L9.23 13.38L5.91 10.5L10.29 10.13L12 6.09L13.71 10.13L18.09 10.5L14.77 13.38L15.76 17.66M22 9.24L14.81 8.63L12 2L9.19 8.63L2 9.24L7.45 13.97L5.82 21L12 17.27L18.18 21L16.54 13.97L22 9.24Z"
                                                                        fill="white" />
                                                                </svg>
                                                            </div>
                                                            <p class="name_hotel">
                                                                {{ $item->numberBron->hotelBron->name }}
                                                            </p>
                                                            <p class="class_and_eat">
                                                                {{ $item->numberBron->type }} - {{ $item->numberBron->hotelBron->feed }}
                
                                                            </p>
                                                        </div>
                
                
                                                    </div>
                                                    <div class="white_block white_cur">
                                                        <p class="cost">
                                                            {{ $item->cost }}
                                                        </p>
                                                        <svg width="21" height="23" viewBox="0 0 21 23" fill="none"
                                                            xmlns="http://www.w3.org/2000/svg">
                                                            <path
                                                                d="M12.7129 14.35C14.7259 14.35 16.658 13.6171 18.0838 12.3101C19.5099 11.0028 20.3129 9.22783 20.3129 7.375C20.3129 5.52217 19.5099 3.74719 18.0838 2.43993C16.658 1.13293 14.7259 0.4 12.7129 0.4H5.21289C4.92382 0.4 4.64504 0.505182 4.43821 0.69477C4.2311 0.884626 4.11289 1.14408 4.11289 1.41667V12.3167H1.21289C0.923825 12.3167 0.645036 12.4218 0.438212 12.6114C0.231096 12.8013 0.112891 13.0608 0.112891 13.3333C0.112891 13.6059 0.231096 13.8654 0.438212 14.0552C0.645036 14.2448 0.923825 14.35 1.21289 14.35H4.11289V15.9833H1.21289C0.923825 15.9833 0.645036 16.0885 0.438212 16.2781C0.231096 16.468 0.112891 16.7274 0.112891 17C0.112891 17.2726 0.231096 17.532 0.438212 17.7219C0.645035 17.9115 0.923825 18.0167 1.21289 18.0167H4.11289V21.5833C4.11289 21.8559 4.2311 22.1154 4.43821 22.3052C4.64504 22.4948 4.92383 22.6 5.21289 22.6C5.50196 22.6 5.78075 22.4948 5.98757 22.3052C6.19468 22.1154 6.31289 21.8559 6.31289 21.5833V18.0167H12.2129C12.502 18.0167 12.7807 17.9115 12.9876 17.7219C13.1947 17.532 13.3129 17.2726 13.3129 17C13.3129 16.7274 13.1947 16.468 12.9876 16.2781C12.7807 16.0885 12.502 15.9833 12.2129 15.9833H6.31289V14.35H12.7129ZM6.31289 2.43333H12.7129C14.1477 2.43333 15.5222 2.9559 16.5344 3.88372C17.5463 4.81127 18.1129 6.06734 18.1129 7.375C18.1129 8.68266 17.5463 9.93873 16.5344 10.8663C15.5222 11.7941 14.1477 12.3167 12.7129 12.3167H6.31289V2.43333Z"
                                                                fill="black" stroke="black" stroke-width="0.2" />
                                                        </svg>
                                                    </div>
                                                </div>
                                                <form action="/changeBronStatus/{{$item->id}}" method="POST">
                                                    @csrf
                                                    <button type="submit">
                                                        <svg width="50" height="50" viewBox="0 0 50 50" class="btn_delete" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <rect width="50" height="50" fill="black" />
                                                            <rect x="14" y="23" width="22" height="4" fill="white" />
                                                        </svg>
                                                    </button>
                                                </form>
                                                <p class="name_pass">
                                                    Пасс.: {{$item->tourists_id}}
                                                </p>
                                            </div>
                                        </div>
                                        
                                    </div>
                                </div>
                                @endforeach
                                    
                                </div>
                            </div>
                           
                        </div>
                
                </div>
                <div id="Monte" class="tabcontent">
                    <div class="block_add_turist">
                        <div class="block_content_add_turist">
                            <div class="qweweweq">
                                <h4 class="name_block">
                                    Добавить рейс
                                </h4>
                                <form action="/addRace" class="add_reise" method="POST">
                                    @csrf
                                    <div class="columm_input">
                                        <div class="item_form">
                                            <p class="name_inp">
                                                Откуда
                                            </p>
                                            <select name="otcuda"  class="inp_add_prof" id="">
                                                <option value disabled selected>Откуда</option>
                                                <option value="байконур">байконур</option>
                                                <option value="Starbase">Starbase</option>
                                                <option value="Вэньчан">Вэньчан</option>
                                                <option value="Канаверал">Канаверал</option>
                                                <option value="луна">луна</option>
                                                <option value="Международная космическая станция (МКС)">Международная космическая станция (МКС)</option>
                                                <option value="Китайская модульная космическая станция (cms)">Китайская модульная космическая станция (cms)</option>
                                                <option value="Космическая станция Axiom Space">Космическая станция Axiom Space</option>
                                            </select>
                                            @error('otcuda')
                                                {{$message}}
                                            @enderror
                                        </div>
                                        <div class="item_form">
                                            <p class="name_inp">
                                                куда
                                            </p>
                                            <select name="cuda"  class="inp_add_prof" id="">
                                                <option value disabled selected>Куда</option>
                                                <option value="байконур">байконур</option>
                                                <option value="Starbase">Starbase</option>
                                                <option value="Вэньчан">Вэньчан</option>
                                                <option value="Канаверал">Канаверал</option>
                                                <option value="луна">луна</option>
                                                <option value="Международная космическая станция (МКС)">Международная космическая станция (МКС)</option>
                                                <option value="Китайская модульная космическая станция (cms)">Китайская модульная космическая станция (cms)</option>
                                                <option value="Космическая станция Axiom Space">Космическая станция Axiom Space</option>
                                            </select>
                                            @error('cuda')
                                            {{$message}}
                                        @enderror
                                        </div>
                                        <div class="item_form">
                                            <p class="name_inp">
                                                Время отбытия
                                            </p>
                                            <input type="date" name="time_otb" class="inp_add_prof">
                                            @error('time_otb')
                                            {{$message}}
                                        @enderror
                                        </div>
                                        <div class="item_form">
                                            <p class="name_inp">
                                                Время прибытия
                                            </p>
                                            <input type="date" name="time_prib" class="inp_add_prof">
                                        </div>
                                        <div class="item_form">
                                            <p class="name_inp">
                                                космокомпания
                                            </p>
                                            <select name="company"  class="inp_add_prof" id="select_company">
                                                <option value="">космокомпания</option>
                                                <option value="1">Roscosmos</option>
                                                <option value="2">SpaceX</option>
                                                <option value="3">CNSA</option>
                                                <option value="4">Blue Origin</option>
                                            </select>
                                            @error('company')
                                            {{$message}}
                                        @enderror
                                        </div>

                                        <div class="item_form">
                                            <p class="name_inp">
                                                космический корабль
                                            </p>
                                            <select name="ship"  class="inp_add_prof" id="results">
                                                <option value disabled selected>космокомпания</option>
                                              
                                            </select>
                                            @error('ship')
                                            {{$message}}
                                        @enderror
                                        </div>
                                        <div class="item_form">
                                            <p class="name_inp">
                                                цена
                                            </p>
                                            <div class="three_items_form">
                                                <div class="row_item_fotm">
                                                    <div class="itemm_form">
                                                        <p class="p_name_inp">
                                                            эконом класс
                                                        </p>
                                                        <input type="text" name="cost_ec" class="inp_cost" id="">
                                                        @error('cost_ec')
                                                        {{$message}}
                                                    @enderror
                                                    </div>
                                                    
                                                </div>
                                                <div class="row_item_fotm">
                                                    <div class="itemm_form">
                                                        <p class="p_name_inp">
                                                            бизнес класс
                                                        </p>
                                                        <input type="text" name="cost_bus" class="inp_cost" id="">
                                                        @error('cost_bus')
                                                        {{$message}}
                                                    @enderror
                                                    </div>
                                                   
                                                </div>
                                                <div class="row_item_fotm">
                                                    <div class="itemm_form">
                                                        <p class="p_name_inp">
                                                            первый класс
                                                        </p>
                                                        <input type="text" name="cost_first" class="inp_cost" id="">
                                                        @error('cost_first')
                                                        {{$message}}
                                                    @enderror
                                                    </div>
                                                    
                                                </div>
                                            </div>
                                        </div>
                                       <button type="submit" class="btn_add">
                                            Добавить
                                       </button>
                                    </div>
                                </form>
                            </div>
                           
                        </div>
                    </div>
                </div>
                <div id="Tokyo" class="tabcontent">
                    <div class="block_add_turist">
                        <div class="block_content_add_turist">
                            <div class="qweweweq">
                                <h4 class="name_block">
                                    Добавить отель/станцию
                                </h4>
                                <form action="/addHotel" class="add_reise" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    <div class="dop_class">
                                        <div class="columm_input">

                                            <div class="item_form">
                                                <p class="name_inp">
                                                    название
                                                </p>
                                                <input type="text"  name="name" value="{{old('name')}}" class="inp_add_prof" id="">
                                                @error('name')
                                                    {{$message}}
                                                @enderror
                                                
                                            </div>
                                            <div class="item_form">
                                                <p class="name_inp">
                                                    Рейтинг
                                                </p>
                                                <select name="reiting"  class="inp_add_prof" id="">
                                                    <option value disabled selected>кол-во звезд</option>
                                                    <option>1</option>
                                                    <option>2</option>
                                                    <option>3</option>
                                                    <option>4</option>
                                                    <option>5</option>
                                                </select>
                                                @error('reiting')
                                                {{$message}}
                                            @enderror
                                            </div>
                                            <div class="item_form">
                                                <p class="name_inp">
                                                    местоположение
                                                </p>
                                                <select name="place"class="inp_add_prof" id="">
                                                    <option value="Луна">луна</option>
                                                    <option value="Международная космическая станция (МКС)">Международная космическая станция (МКС)</option>
                                                    <option value="Китайская модульная космическая станция (cms)">Китайская модульная космическая станция (cms)</option>
                                                    <option value="Космическая станция Axiom Space">Космическая станция Axiom Space</option>
                                          

                                                </select>
                                                @error('place')
                                                {{$message}}
                                            @enderror
                                            </div>
                                   
                                            <div class="item_form">
                                                <p class="name_inp">
                                                    мак. кол-во дней
                                                </p>
                                                <input type="text" name="max_days" class="inp_add_prof" id="">
                                                @error('max_days')
                                                {{$message}}
                                            @enderror
                                            </div>
                                            
                                        </div>
                                        <div class="img_flex_block">
                                            <div class="item_form">
                                                <p class="name_inp">
                                                    фото
                                                </p>
                                                <div class="upload-container">

                                                    <div class="upload-block">
                                                  
                                                      <input type="file" id="file-input-1" name="img">
                                                  
                                                      <img id="upload-image-1" src="" width="220" height="220">
                                                      @error('img')
                                                      {{$message}}
                                                  @enderror
                                                    </div>
                                                  
                                                    
                                                  
                                                    
                                                  
                                                  </div>
                                                
                                            </div>
                                        </div>
                                    </div>
                                    <div class="columm_input">
                                        <div class="item_form">
                                            <p class="name_inp">
                                                общее
                                            </p>
                                            <textarea name="description"  spellcheck="true" id=""class="textrea_add_prof">
                                                {{old('description')}}

                                            </textarea>
                                            
                                        </div>
                                        <div class="item_form">
                                            <p class="name_inp">
                                                услуги
                                            </p>
                                            <textarea name="services"  spellcheck="true" id=""class="textrea_add_prof">
                                                {{old('services')}}

                                            </textarea>
                                            @error('services')
                                            {{$message}}
                                        @enderror
                                        </div>
                                        <div class="item_form">
                                            <p class="name_inp">
                                                питание
                                            </p>
                                            <textarea name="feed"  spellcheck="true" id=""class="textrea_add_prof">
                                                {{old('feed')}}

                                            </textarea>
                                            @error('feed')
                                            {{$message}}
                                        @enderror
                                        </div>
                                        <div class="item_form">
                                            <p class="name_inp">
                                                концепция
                                            </p>
                                            <textarea name="concepc"  spellcheck="true" id=""class="textrea_add_prof">
                                                {{old('concepc')}}
                                            </textarea>
                                            @error('concepc')
                                            {{$message}}
                                        @enderror
                                            
                                        </div> 
                                        <input type="hidden" value="" name="terms" id="terms_inp">      
                                        <div class="categories">
                                            <div class="category">КОНФЕРЕНЦ-ЗАЛ</div>                                           
                                            <div class="category">ДИСКОТЕКА</div>
                                            <div class="category">БАССЕЙН</div>
                                            <div class="category">САУНА</div>    
                                            <div class="category">РЕСТОРАН</div>
                                            <div class="category">УСЛУГИ НЯНИ</div>
                                            <div class="category">WI-FI</div>
                                            <div class="category">КОНСЬЕРЖ</div>
                                            <div class="category">СПА-САЛОН</div>     
                                        </div>
                                        <div class="categories">
                                            <div class="category">Ультра всё включено</div>                                           
                                            <div class="category">всё включено</div>
                                            <div class="category">Полупансион</div>
                                            <div class="category">завтрак</div>    
                                            <div class="category">без питания</div>
                                            <div class="category">особые типы питания</div>
                                     
                                        </div>
                                        <button type="submit" class="btn_add">
                                            Добавить
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="Berlin" class="tabcontent">
                    <div class="block_add_turist">
                        <div class="block_content_add_turist">
                            <div class="qweweweq">
                                <h4 class="name_block">
                                    Добавить корабль
                                </h4>
                                <form action="/addShip" method="POST" class="add_reise" enctype="multipart/form-data">
                                    @csrf
                                    <div class="dop_class">
                                        <div class="columm_input">
                                            <div class="item_form">
                                                <p class="name_inp">
                                                    космокомпания
                                                </p>

                                                <select name="id_company"  class="inp_add_prof" id="">
                                                    <option value disabled selected>космокомпания</option>
                                                    <option value="1">Roscosmos</option>
                                                    <option value="2">SpaceX</option>
                                                    <option value="3">CNSA</option>
                                                    <option value="4">Blue Origin</option>
                                                </select>
                                            </div>
                                            <div class="item_form">
                                                <p class="name_inp">
                                                    название
                                                </p>
                                                <input type="text"  name="name" class="inp_add_prof" id="">
                                            </div>
                                            <div class="item_form">
                                                <p class="name_inp">
                                                    Рейтинг
                                                </p>
                                                <select name="reiting"  class="inp_add_prof" id="">
                                                    <option value disabled selected>кол-во звезд</option>
                                                    <option>1</option>
                                                    <option>2</option>
                                                    <option>3</option>
                                                    <option>4</option>
                                                    <option>5</option>
                                                </select>
                                            </div>
                                            <div class="item_form">
                                                <p class="name_inp">
                                                    Количество мест
                                                </p>
                                                <div class="three_items_form">
                                                    <div class="row_item_fotm">
                                                        <div class="itemm_form">
                                                            <p class="p_name_inp">
                                                                эконом класс
                                                            </p>
                                                            <input type="text" name="eco_class" class="inp_cost" id="">
                                                        </div>
                                                        
                                                    </div>
                                                    <div class="row_item_fotm">
                                                        <div class="itemm_form">
                                                            <p class="p_name_inp">
                                                                бизнес класс
                                                            </p>
                                                            <input type="text" name="bus_class" class="inp_cost" id="">
                                                        </div>
                                                       
                                                    </div>
                                                    <div class="row_item_fotm">
                                                        <div class="itemm_form">
                                                            <p class="p_name_inp">
                                                                первый класс
                                                            </p>
                                                            <input type="text" name="first_class" class="inp_cost" id="">
                                                        </div>
                                                        
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="img_flex_block">
                                            <div class="item_form">
                                                <p class="name_inp">
                                                    фото
                                                </p>
                                                <div class="upload-container">

                                                    <div class="upload-block">
                                                  
                                                      <input type="file" id="file-input-1" name="img_one" >
                                                  
                                                      <img id="upload-image-1" src="" width="220" height="220">
                                                  
                                                    </div>
                                                  
                                                    
                                                  
                                                    <div class="upload-block">
                                                  
                                                      <input type="file" id="file-input-2" name="img_two">
                                                  
                                                      <img id="upload-image-2" src="" width="220" height="220">
                                                  
                                                    </div>
                                                  
                                                    
                                                  
                                                    <div class="upload-block">
                                                  
                                                      <input type="file" id="file-input-3" name="img_three">
                                                  
                                                      <img id="upload-image-3" src="" width="220" height="220">
                                                  
                                                    </div>
                                                  
                                                  </div>
                                                
                                            </div>
                                        </div>
                                    </div>
                                    <div class="columm_input">
                                        <div class="item_form">
                                            <p class="name_inp">
                                                общее
                                            </p>
                                            <textarea name="description"  spellcheck="true" id=""class="textrea_add_prof">

                                            </textarea>
                                            
                                        </div>    
                                       
                                        <button type="submit" class="btn_add">
                                            Добавить
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="Rio" class="tabcontent">
                    <div class="block_add_turist">
                        <div class="block_content_add_turist">
                            <div class="qweweweq">
                                <h4 class="name_block">
                                    Добавить номер
                                </h4>


                                <form action="/addNumber" method="POST" class="add_reise" enctype="multipart/form-data">
                                    @csrf
                                    <div class="dop_class">
                                        <div class="columm_input">
                                            
                                            <div class="item_form">
                                                <p class="name_inp">
                                                    название
                                                </p>
                                                <input type="text"  name="name" class="inp_add_prof" id="">
                                                
                                            </div>
                                            <div class="item_form">
                                                <p class="name_inp">
                                                    Отель
                                                </p>
                                                <select name="hotel"  class="inp_add_prof" id="">
                                                    @foreach ($hotels as $item)
                                                        <option value="{{$item->id}}">{{$item->name}}</option>
                                                    @endforeach
                                                  
                                                </select>
                                            </div>
                                            <div class="item_form">
                                                <p class="name_inp">
                                                    тип номера
                                                </p>
                                                <select name="type"  class="inp_add_prof" id="">
                                                    <option value=''>тип номера</option>
                                                    <option value="STANDART">STANDART</option>
                                                    <option value="SUITE + FAMILY + DELUXE">SUITE + FAMILY + DELUXE</option>
                                                    <option value="VILLA">VILLA</option>
                                                    <option value="LARGER SUITES">LARGER SUITES</option>
                                                  
                                                </select>
                                            </div>
                                            
                                            <div class="item_form">
                                                <p class="name_inp">
                                                    цена
                                                </p>
                                                <input type="text"  name="cost" class="inp_add_prof" id="">
                                                
                                            </div>
                                            
                                            
                                        </div>
                                        <div class="img_flex_block">
                                            <div class="item_form">
                                                <p class="name_inp">
                                                    фото
                                                </p>
                                                <div class="upload-container">

                                                    <div class="upload-block">
                                                  
                                                      <input type="file" id="file-input-1" name="img_one">
                                                  
                                                      <img id="upload-image-1" src="" width="220" height="220">
                                                  
                                                    </div>
                                                  
                                                    
                                                  
                                                    <div class="upload-block">
                                                  
                                                      <input type="file" id="file-input-2" name="img_two">
                                                  
                                                      <img id="upload-image-2" src="" width="220" height="220">
                                                  
                                                    </div>
                                                  
                                                    
                                                  
                                                    <div class="upload-block">
                                                  
                                                      <input type="file" id="file-input-3" name="img_three">
                                                  
                                                      <img id="upload-image-3" src="" width="220" height="220">
                                                  
                                                    </div>
                                                  
                                                  </div>
                                                
                                            </div>
                                        </div>
                                    </div>
                                    <div class="columm_input">
                                        <div class="item_form">
                                            <p class="name_inp">
                                                общее
                                            </p>
                                            <textarea name="description"  spellcheck="true" id=""class="textrea_add_prof">

                                            </textarea>
                                            
                                        </div>
                                        
                                        <button class="btn_add">
                                            Добавить
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>    
    
</main>
@endsection('content')
