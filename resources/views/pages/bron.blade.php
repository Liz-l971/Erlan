@extends('loyauts.app')
@section('title')
    Бронь
@endsection
@section('content')
    <main>
        <section class="banner">
            <div class="container">
                <div class="banner_content">
                    <form action="" class="banner_form">

                        <select name="" class="banner_inp_one" id="">
                            <option value disabled selected>Откуда</option>
                            <option>байконур</option>
                            <option>Starbase</option>
                            <option>Вэньчан</option>
                            <option>Канаверал</option>
                        </select>
                        <select name="" class="banner_inp_one" id="">
                            <option value disabled selected>Куда</option>
                            <option>луна</option>
                            <option>Международная космическая станция (МКС)</option>
                            <option>Китайская модульная космическая станция (cms)</option>
                            <option>Космическая станция Axiom Space</option>
                        </select>

                        <input type="date" class="banner_inp_two" placeholder="период вылета">
                        <input type="text" class="banner_inp_three" placeholder="ночей">
                        <input type="text" class="banner_inp_three" placeholder="чел">
                        <button class="banner_btn">найти</button>
                    </form>
                </div>
            </div>
        </section>
        <div class="container">
            <section class="crums">
                <a href="" class="href_crum">главная</a>
                <svg width="8" height="15" viewBox="0 0 8 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M1 1.5L7 7.5L1 13.5" stroke="white" stroke-width="1.1" stroke-linecap="square"
                        stroke-linejoin="round" />
                </svg>
                <a href="" class="href_crum">Поиск тура</a>
                <svg width="8" height="15" viewBox="0 0 8 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M1 1.5L7 7.5L1 13.5" stroke="white" stroke-width="1.1" stroke-linecap="square"
                        stroke-linejoin="round" />
                </svg>
                <a href="" class="href_crum">Название отеля</a>
                <svg width="8" height="15" viewBox="0 0 8 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M1 1.5L7 7.5L1 13.5" stroke="white" stroke-width="1.1" stroke-linecap="square"
                        stroke-linejoin="round" />
                </svg>
                <a href="" class="href_crum">Выбор рейса</a>
                <svg width="8" height="15" viewBox="0 0 8 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M1 1.5L7 7.5L1 13.5" stroke="white" stroke-width="1.1" stroke-linecap="square"
                        stroke-linejoin="round" />
                </svg>
                <a href="" class="href_crum">Выбор класса</a>
                <svg width="8" height="15" viewBox="0 0 8 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M1 1.5L7 7.5L1 13.5" stroke="white" stroke-width="1.1" stroke-linecap="square"
                        stroke-linejoin="round" />
                </svg>
                <a href="" class="href_crum">Выбор услуг</a>
                <svg width="8" height="15" viewBox="0 0 8 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M1 1.5L7 7.5L1 13.5" stroke="white" stroke-width="1.1" stroke-linecap="square"
                        stroke-linejoin="round" />
                </svg>
                <a href="" class="href_crum">Добавление туристов</a>
                <svg width="8" height="15" viewBox="0 0 8 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M1 1.5L7 7.5L1 13.5" stroke="white" stroke-width="1.1" stroke-linecap="square"
                        stroke-linejoin="round" />
                </svg>
                <a href="" class="href_crum">Бронь</a>
            </section>
            <section class="bron_end">
                <div class="left_just_text">
                    <h2 class="bron_uspeh">
                        БРОНИРОВАНИЕ УСПЕШНО ВЫПОЛНЕНО
                    </h2>
                    <p class="short_inf">БИЛЕТ БУДЕТ ДОСТУПЕН В УКАЗАННОЙ ВАМИ ЭЛЕКТРОННОЙ ПОЧТЕ: <span
                            class="white_email">{{ auth()->user()->email }}</span>. </p>
                    <p class="short_inf">РЕКОМЕНДУЕТСЯ ПРИБЫТЬ В КОСМОДРОМ ЗА <span class="white_email">5 ЧАСОВ</span> ДО
                        ВЫЛЕТА ДЛЯ ПРОХОЖДЕНИЯ ПРОЦЕДУРЫ ПОСАДОЧНОГО КОНТРОЛЯ</p>
                    <p class="short_inf"><span class="white_email">Пассажиры:</span> {{ $bron->tourists }}</p>
                </div>
                <div class="right_bilet">
                    <div class="content_bron">
                        <div class="hrum_hrum">
                            <div class="grey_top_inf">
                                <p class="number_order">
                                    ЗАКАЗ №: {{ $bron->id }}
                                </p>
                                <p class="data_bron">
                                    Дата брони: {{ $bron->created_at }}
                                </p>
                            </div>

                            <div class="panel_my_bron">
                                <div class="bottom_block_border_content qwe">
                                    <h5 class="name_blovk">
                                        космоперелёт
                                    </h5>
                                    <div class="tet_a_tet">
                                        <div class="column_time">
                                            <p class="time">
                                                {{ $bron->raceFrom->time_otb }}
                                            </p>
                                            <p class="lit">
                                                {{ $bron->raceFrom->otcuda }}
                                            </p>
                                        </div>
                                        <svg width="40" height="7" viewBox="0 0 39 7" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path d="M39 3.5L34 0.613249V6.38675L39 3.5ZM0 4H34.5V3H0V4Z" fill="#9A9A9A" />
                                        </svg>
                                        <div class="column_time">
                                            <p class="time">
                                                {{ $bron->raceFrom->time_prib }}

                                            </p>
                                            <p class="lit">
                                                {{ $bron->raceFrom->cuda }}

                                            </p>
                                        </div>

                                    </div>
                                    <div class="hotel_info">

                                        <p class="name_hotel">
                                            {{ $bron->company_from }}
                                            @if ($bron->company_from == 1)
                                                Роскосмос
                                            @endif
                                            @if ($bron->company_from == 2)
                                                SpaceX
                                            @endif
                                            @if ($bron->company_from == 3)
                                                CNSA
                                            @endif
                                            @if ($bron->company_from == 4)
                                                BLUE ORIGIN
                                            @endif
                                        </p>
                                        <p class="class_and_eat">
                                            {{ $bron->class_from }}
                                        </p>
                                    </div>
                                    <div class="time_info">
                                        <p class="name_hotel">
                                            время полёта
                                        </p>
                                        <p class="class_and_eat">
                                            {{ $bron->raceFrom->timeFly()}} д.
                                        </p>
                                    </div>

                                </div>
                                <div class="bottom_block_border_content rew">
                                    <div class="tet_a_tet">
                                        <div class="column_time">
                                            <p class="time">
                                                {{ $bron->raceTo->time_otb }}
                                            </p>
                                            <p class="lit">
                                                {{ $bron->raceTo->otcuda }}
                                            </p>
                                        </div>
                                        <svg width="40" height="7" viewBox="0 0 39 7" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path d="M39 3.5L34 0.613249V6.38675L39 3.5ZM0 4H34.5V3H0V4Z" fill="#9A9A9A" />
                                        </svg>
                                        <div class="column_time">
                                            <p class="time">
                                                {{ $bron->raceTo->time_prib }}

                                            </p>
                                            <p class="lit">
                                                {{ $bron->raceTo->cuda }}
                                            </p>
                                        </div>

                                    </div>
                                    <div class="hotel_info">

                                        <p class="name_hotel">
                                            {{ $bron->company_to }}
                                            @if ($bron->company_to == 1)
                                                Роскосмос
                                            @endif
                                            @if ($bron->company_to == 2)
                                                SpaceX
                                            @endif
                                            @if ($bron->company_to == 3)
                                                CNSA
                                            @endif
                                            @if ($bron->company_to == 4)
                                                BLUE ORIGIN
                                            @endif
                                        </p>
                                        <p class="class_and_eat">
                                            {{ $bron->class_to }}
                                        </p>
                                    </div>
                                    <div class="time_info">
                                        <p class="name_hotel">
                                            время полёта
                                        </p>
                                        <p class="class_and_eat">
                                            {{ $bron->raceTo->timeFly()}} д.
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
                                                    {{ $bron->raceFrom->time_prib }}
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
                                                    {{ $bron->raceTo->time_otb }}
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
                                                {{ $bron->numberBron->hotelBron->name }}
                                            </p>
                                            <p class="class_and_eat">
                                                {{ $bron->numberBron->type }} - {{ $bron->numberBron->hotelBron->feed }}

                                            </p>
                                        </div>


                                    </div>
                                    <div class="white_block white_cur">
                                        <p class="cost">
                                            {{ $bron->cost }}
                                        </p>
                                        <svg width="21" height="23" viewBox="0 0 21 23" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M12.7129 14.35C14.7259 14.35 16.658 13.6171 18.0838 12.3101C19.5099 11.0028 20.3129 9.22783 20.3129 7.375C20.3129 5.52217 19.5099 3.74719 18.0838 2.43993C16.658 1.13293 14.7259 0.4 12.7129 0.4H5.21289C4.92382 0.4 4.64504 0.505182 4.43821 0.69477C4.2311 0.884626 4.11289 1.14408 4.11289 1.41667V12.3167H1.21289C0.923825 12.3167 0.645036 12.4218 0.438212 12.6114C0.231096 12.8013 0.112891 13.0608 0.112891 13.3333C0.112891 13.6059 0.231096 13.8654 0.438212 14.0552C0.645036 14.2448 0.923825 14.35 1.21289 14.35H4.11289V15.9833H1.21289C0.923825 15.9833 0.645036 16.0885 0.438212 16.2781C0.231096 16.468 0.112891 16.7274 0.112891 17C0.112891 17.2726 0.231096 17.532 0.438212 17.7219C0.645035 17.9115 0.923825 18.0167 1.21289 18.0167H4.11289V21.5833C4.11289 21.8559 4.2311 22.1154 4.43821 22.3052C4.64504 22.4948 4.92383 22.6 5.21289 22.6C5.50196 22.6 5.78075 22.4948 5.98757 22.3052C6.19468 22.1154 6.31289 21.8559 6.31289 21.5833V18.0167H12.2129C12.502 18.0167 12.7807 17.9115 12.9876 17.7219C13.1947 17.532 13.3129 17.2726 13.3129 17C13.3129 16.7274 13.1947 16.468 12.9876 16.2781C12.7807 16.0885 12.502 15.9833 12.2129 15.9833H6.31289V14.35H12.7129ZM6.31289 2.43333H12.7129C14.1477 2.43333 15.5222 2.9559 16.5344 3.88372C17.5463 4.81127 18.1129 6.06734 18.1129 7.375C18.1129 8.68266 17.5463 9.93873 16.5344 10.8663C15.5222 11.7941 14.1477 12.3167 12.7129 12.3167H6.31289V2.43333Z"
                                                fill="black" stroke="black" stroke-width="0.2" />
                                        </svg>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </main>
@endsection
