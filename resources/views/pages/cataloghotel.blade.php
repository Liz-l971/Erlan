@extends('loyauts.app')
@section('title')
    Erlan
@endsection
@section('content')
    <main>
        <section class="banner">
            <div class="container">
                <div class="banner_content">
                    <div class="desktop">
                        <form action="/searchMain" method="POST" class="banner_form desktop">
                            @csrf
                            <select name="from" class="banner_inp_one" id="">
                                <option value="{{ $search['from'] }}">{{ $search['from'] }}</option>
                                <option>Откуда</option>
                                <option value="байконур">байконур</option>
                                <option value="Starbase">Starbase</option>
                                <option value="Вэньчан">Вэньчан</option>
                                <option value="Канаверал">Канаверал</option>
                            </select>
                            <select name="to" class="banner_inp_one" id="">
                                <option value="{{ $search['to'] }}">{{ $search['to'] }}</option>
                                <option>Куда</option>
                                <option value="луна">луна</option>
                                <option value="Международная космическая станция (МКС)">Международная космическая станция
                                    (МКС)</option>
                                <option value="Китайская модульная космическая станция (cms)">Китайская модульная
                                    космическая станция (cms)</option>
                                <option value="Космическая станция Axiom Space">Космическая станция Axiom Space</option>
                            </select>



                            <input type="date" name="date" value="{{ $search['date'] }}" class="banner_inp_two"
                                placeholder="период вылета">
                            <input type="text" name="nights" class="banner_inp_three" value="{{ $search['nights'] }}"
                                placeholder="ночей">
                            <input type="text" name="tourists" class="banner_inp_three" value="{{ $search['tourists'] }}"
                                placeholder="чел">
                            <button type="submit" class="banner_btn">найти</button>
                        </form>
                    </div>
                    <div class="mobile">
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


                            <input type="date" value="{{ $search['date'] }}" class="banner_inp_two"
                                placeholder="период вылета">
                            <div class="flex">
                                <input type="text" value="{{ $search['nights'] }}" class="banner_inp_three"
                                    placeholder="ночей">
                                <input type="text" value="{{ $search['tourists'] }}" class="banner_inp_three"
                                    placeholder="чел">
                            </div>

                            <a href="./catalog_hotel.html" class="banner_btn white_cur">найти</a>
                        </form>
                    </div>
                </div>
            </div>
        </section>
        <div class="container">
            <section class="crums">
                <a href="/" class="href_crum">главная</a>
                <svg width="8" height="15" viewBox="0 0 8 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M1 1.5L7 7.5L1 13.5" stroke="white" stroke-width="1.1" stroke-linecap="square"
                        stroke-linejoin="round" />
                </svg>
                <a href="/catalog-hotel" class="href_crum">Поиск тура</a>
            </section>
            <div id="hamburger" class="mobile mobile_filtr">
                <img src="../assets/img/icons/Menu_Alt_01.svg" class="mobile_filtr_img" alt="">
            </div>
            <div class="" id="drawer">
                <div class="left_catalog_hotel mobile">
                    <h4 class="name_block">
                        Фильтры
                    </h4>
                    <div class="filtr_block">
                        <h5 class="name_filtr_block">
                            цена
                        </h5>
                        <div class="filtr_block_column_price">
                            <input type="text" class="filtr_block_price_inp">
                            <hr class="price_line">
                            <input type="text" class="filtr_block_price_inp">
                        </div>

                    </div>
                    <div class="filtr_block">
                        <h5 class="name_filtr_block">
                            тип питания
                        </h5>
                        <div class="filtr_block_column">
                            <div class="checkbox-wrapper-21">
                                <label class="control control--checkbox">
                                    Ультра всё включено
                                    <input type="checkbox" />
                                    <div class="control__indicator"></div>
                                </label>
                            </div>
                            <div class="checkbox-wrapper-21">
                                <label class="control control--checkbox">
                                    всё включено
                                    <input type="checkbox" />
                                    <div class="control__indicator"></div>
                                </label>
                            </div>
                            <div class="checkbox-wrapper-21">
                                <label class="control control--checkbox">
                                    Полупансион
                                    <input type="checkbox" />
                                    <div class="control__indicator"></div>
                                </label>
                            </div>
                            <div class="checkbox-wrapper-21">
                                <label class="control control--checkbox">
                                    завтрак
                                    <input type="checkbox" />
                                    <div class="control__indicator"></div>
                                </label>
                            </div>
                            <div class="checkbox-wrapper-21">
                                <label class="control control--checkbox">
                                    без питания
                                    <input type="checkbox" />
                                    <div class="control__indicator"></div>
                                </label>
                            </div>
                            <div class="checkbox-wrapper-21">
                                <label class="control control--checkbox">
                                    особые типы питания
                                    <input type="checkbox" />
                                    <div class="control__indicator"></div>
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="filtr_block">
                        <h5 class="name_filtr_block">
                            тип номера
                        </h5>
                        <div class="filtr_block_column">
                            <div class="checkbox-wrapper-21">
                                <label class="control control--checkbox">
                                    STANDART

                                    <input type="checkbox" />
                                    <div class="control__indicator"></div>
                                </label>
                            </div>
                            <div class="checkbox-wrapper-21">
                                <label class="control control--checkbox">
                                    SUITE + FAMILY + DELUXE
                                    <input type="checkbox" />
                                    <div class="control__indicator"></div>
                                </label>
                            </div>
                            <div class="checkbox-wrapper-21">
                                <label class="control control--checkbox">
                                    VILLA
                                    <input type="checkbox" />
                                    <div class="control__indicator"></div>
                                </label>
                            </div>
                            <div class="checkbox-wrapper-21">
                                <label class="control control--checkbox">
                                    LARGER SUITES
                                    <input type="checkbox" />
                                    <div class="control__indicator"></div>
                                </label>
                            </div>

                        </div>
                    </div>
                    <button class="filter_btn white_cur">Применить</button>
                </div>
            </div>
            {{ var_dump($filterHotel) }}
            <section class="catalog_hotel">

                <form action="/filterHotel" class="left_catalog_hotel desktop" method="POST">
                    @csrf
                    <h4 class="name_block">
                        Фильтры
                    </h4>
                    <div class="filtr_block">
                        <h5 class="name_filtr_block">
                            цена
                        </h5>
                        <div class="filtr_block_column_price">
                            <input type="number" class="filtr_block_price_inp" name="cost_one"
                                value="{{ $filterHotel['cost_one'] }}">
                            <hr class="price_line">
                            <input type="number" class="filtr_block_price_inp" name="cost_two"
                                value="{{ $filterHotel['cost_two'] }}">
                        </div>

                    </div>
                    <div class="filtr_block">
                        <h5 class="name_filtr_block">
                            тип питания
                        </h5>
                        <div class="filtr_block_column">
                            <div class="checkbox-wrapper-21">
                                <label class="control control--checkbox">
                                    Ультра всё включено
                                    <input type="checkbox" value="Ультра всё включено" name="ultra_all" />
                                    <div class="control__indicator"></div>
                                </label>
                            </div>
                            <div class="checkbox-wrapper-21">
                                <label class="control control--checkbox">
                                    всё включено
                                    <input type="checkbox" value="всё включено" name="all" />
                                    <div class="control__indicator"></div>
                                </label>
                            </div>
                            <div class="checkbox-wrapper-21">
                                <label class="control control--checkbox">
                                    Полупансион
                                    <input type="checkbox" value="Полупансион" name="pansion" />
                                    <div class="control__indicator"></div>
                                </label>
                            </div>
                            <div class="checkbox-wrapper-21">
                                <label class="control control--checkbox">
                                    завтрак
                                    <input type="checkbox" name="breakfast" />
                                    <div class="control__indicator"></div>
                                </label>
                            </div>
                            <div class="checkbox-wrapper-21">
                                <label class="control control--checkbox">
                                    без питания
                                    <input type="checkbox" name="without" />
                                    <div class="control__indicator"></div>
                                </label>
                            </div>
                            <div class="checkbox-wrapper-21">
                                <label class="control control--checkbox">
                                    особые типы питания
                                    <input type="checkbox" name="osob" />
                                    <div class="control__indicator"></div>
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="filtr_block">
                        <h5 class="name_filtr_block">
                            тип номера
                        </h5>
                        <div class="filtr_block_column">
                            <div class="checkbox-wrapper-21">
                                <label class="control control--checkbox">
                                    STANDART
                                    <input type="checkbox" value="standart" name="standart" />
                                    <div class="control__indicator"></div>
                                </label>
                            </div>
                            <div class="checkbox-wrapper-21">
                                <label class="control control--checkbox">
                                    SUITE + FAMILY + DELUXE
                                    <input type="checkbox" value="SUITE + FAMILY + DELUXE" name="SUITE_FAMILY_DELUXE" />
                                    <div class="control__indicator"></div>
                                </label>
                            </div>
                            <div class="checkbox-wrapper-21">
                                <label class="control control--checkbox">
                                    VILLA
                                    <input type="checkbox" value="VILLA" name="VILLA" />
                                    <div class="control__indicator"></div>
                                </label>
                            </div>
                            <div class="checkbox-wrapper-21">
                                <label class="control control--checkbox">
                                    LARGER SUITES
                                    <input type="checkbox" value="LARGER SUITES" name="LARGER_SUITES" />
                                    <div class="control__indicator"></div>
                                </label>
                            </div>

                        </div>
                    </div>
                    <button type="submit" class="filter_btn white_cur">Применить</button>
                </form>
                <div class="right_catalog_hotel desktop">

                    @foreach ($hotels as $item)
                        <div class="catalog_hotel_flex desktop">
                            <div class="catalog_info_hotel">
                                <img src="{{ $item->imageHotel() }}{{ $item->img }}" class="img_hotel_catalog"
                                    alt="">
                                <div class="text_info_hotel desktop">
                                    <p class="name_hotel">
                                        {{ $item->name }}
                                    </p>
                                    <div class="more_info_hotel">
                                       <!--  <p class="more_info_hotel_p">
                                           тип питания: {{ $item->feed }}
                                       </p> -->
                                        <p class="more_info_hotel_p">
                                            тип номера:
                                            @foreach ($item->numbers() as $number)
                                                {{ $number->type }},
                                            @endforeach
                                        </p>
                                    </div>
                                </div>
                                <div class="text_info_hotel_mobile mobile">
                                    <div class="text_info_hotel">
                                        <p class="name_hotel">
                                            КАФКА ПЛАЗА
                                        </p>
                                        <div class="more_info_hotel">
                                            <p class="more_info_hotel_p">
                                                тип питания: {{ $item->feed }}
                                            </p>
                                            <p class="more_info_hotel_p">
                                                тип номера:
                                                @foreach ($item->numbers() as $number)
                                                    {{ $number->type }},
                                                @endforeach
                                            </p>
                                        </div>
                                    </div>
                                    <div class="catalog_price_hotel">
                                        <div class="qwe_catalog">
                                            <p class="price_text">
                                                цена от:
                                            </p>
                                            <div class="price_main">
                                                <p class="price_number">

                                                    {{ $item->feed }}
                                                </p>
                                                <div class="valute">
                                                    <svg width="15" height="16" class=""
                                                        viewBox="0 0 15 16" fill="none"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M9.125 9.82054C10.4343 9.82054 11.6914 9.35383 12.6193 8.52109C13.5474 7.68813 14.0705 6.55665 14.0705 5.375C14.0705 4.19335 13.5474 3.06187 12.6193 2.22891C11.6914 1.39617 10.4343 0.929461 9.125 0.929461H4.25C4.06122 0.929461 3.87883 0.996693 3.74327 1.11836C3.60745 1.24024 3.52946 1.4073 3.52946 1.58333V8.51279H1.65C1.46122 8.51279 1.27883 8.58003 1.14327 8.70169C1.00745 8.82358 0.929461 8.99063 0.929461 9.16667C0.929461 9.3427 1.00745 9.50976 1.14327 9.63164C1.27883 9.75331 1.46122 9.82054 1.65 9.82054H3.52946V10.8461H1.65C1.46122 10.8461 1.27883 10.9134 1.14327 11.035C1.00745 11.1569 0.929461 11.324 0.929461 11.5C0.929461 11.676 1.00745 11.8431 1.14327 11.965C1.27883 12.0866 1.46122 12.1539 1.65 12.1539H3.52946V14.4167C3.52946 14.5927 3.60745 14.7598 3.74327 14.8816C3.87883 15.0033 4.06122 15.0705 4.25 15.0705C4.43878 15.0705 4.62117 15.0033 4.75673 14.8816C4.89255 14.7598 4.97054 14.5927 4.97054 14.4167V12.1539H8.8C8.98878 12.1539 9.17117 12.0866 9.30673 11.965C9.44255 11.8431 9.52054 11.676 9.52054 11.5C9.52054 11.324 9.44255 11.1569 9.30673 11.035C9.17117 10.9134 8.98878 10.8461 8.8 10.8461H4.97054V9.82054H9.125ZM4.97054 2.23721H9.125C10.0568 2.23721 10.949 2.56945 11.6058 3.15886C12.2623 3.74805 12.6295 4.54542 12.6295 5.375C12.6295 6.20458 12.2623 7.00195 11.6058 7.59114C10.949 8.18055 10.0568 8.51279 9.125 8.51279H4.97054V2.23721Z"
                                                            fill="white" stroke="white" stroke-width="0.141079" />
                                                    </svg>
                                                </div>
                                            </div>
                                            <p class="text_about_price">
                                                включая обязательные доплаты 0 рублей
                                            </p>
                                        </div>

                                    </div>
                                </div>

                                <a href="/hotel/{{ $item->id }}" class="choice_hotel mobile white_cur">
                                    выбрать
                                </a>
                            </div>
                            <hr class="catalog_hotel_line">
                            <div class="catalog_price_hotel desktop">
                                <div class="qwe_catalog">
                                    <p class="price_text">
                                        цена от:
                                    </p>
                                    <div class="price_main">
                                        <p class="price_number pricee" id="price">
                                            @if (isset($lang))
                                            @if ($lang == 1)
                                            {{ $item->freeNumber() }}
                                        @endif
                                        @if ($lang == 0)
                                            {{ floor($item->freeNumber() / 89) }}
                                        @endif
                                        @if ($lang == 2)
                                            {{ floor($item->freeNumber() / 12 )}}
                                        @endif
                                            @endif
                                            @if (!isset($lang))
                                            {{ $item->freeNumber() }}

                                            @endif
                                        
                                            {{-- <?php
                                            //    echo "<script>outputPrice(".$item->freeNumber().")</script>";
                                            ?> 
                                   --}}
                                        </p>
                                        <div class="valute">
                                            <svg width="22" height="24" viewBox="0 0 22 24" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M13.5 14.85C15.513 14.85 17.4451 14.1171 18.8709 12.8101C20.297 11.5028 21.1 9.72783 21.1 7.875C21.1 6.02217 20.297 4.24719 18.8709 2.93993C17.4451 1.63293 15.513 0.9 13.5 0.9H6C5.71093 0.9 5.43214 1.00518 5.22532 1.19477C5.01821 1.38463 4.9 1.64408 4.9 1.91667V12.8167H2C1.71093 12.8167 1.43214 12.9218 1.22532 13.1114C1.01821 13.3013 0.9 13.5608 0.9 13.8333C0.9 14.1059 1.01821 14.3654 1.22532 14.5552C1.43215 14.7448 1.71093 14.85 2 14.85H4.9V16.4833H2C1.71093 16.4833 1.43215 16.5885 1.22532 16.7781C1.01821 16.968 0.9 17.2274 0.9 17.5C0.9 17.7726 1.01821 18.032 1.22532 18.2219C1.43214 18.4115 1.71093 18.5167 2 18.5167H4.9V22.0833C4.9 22.3559 5.01821 22.6154 5.22532 22.8052C5.43215 22.9948 5.71093 23.1 6 23.1C6.28907 23.1 6.56785 22.9948 6.77468 22.8052C6.98179 22.6154 7.1 22.3559 7.1 22.0833V18.5167H13C13.2891 18.5167 13.5679 18.4115 13.7747 18.2219C13.9818 18.032 14.1 17.7726 14.1 17.5C14.1 17.2274 13.9818 16.968 13.7747 16.7781C13.5679 16.5885 13.2891 16.4833 13 16.4833H7.1V14.85H13.5ZM7.1 2.93333H13.5C14.9348 2.93333 16.3094 3.4559 17.3215 4.38372C18.3334 5.31127 18.9 6.56734 18.9 7.875C18.9 9.18266 18.3334 10.4387 17.3215 11.3663C16.3094 12.2941 14.9348 12.8167 13.5 12.8167H7.1V2.93333Z"
                                                    fill="white" stroke="white" stroke-width="0.2" />
                                            </svg>
                                        </div>
                                    </div>
                                    <p class="text_about_price">
                                        включая обязательные доплаты 0 рублей
                                    </p>
                                </div>
                                <a href="/hotel/{{ $item->id }}" class="choice_hotel white_cur">
                                    выбрать
                                </a>
                            </div>
                        </div>
                    @endforeach



                </div>
            </section>
        </div>
    </main>
@endsection('content')
