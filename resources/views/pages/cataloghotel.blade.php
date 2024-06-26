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
                                                    {{ floor($item->freeNumber() / 12) }}
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
                                        @if (isset($lang))
                                            @if ($lang == 1)
                                                <div class="valute">
                                                    <svg width="22" height="24" viewBox="0 0 22 24"
                                                        fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M13.5 14.85C15.513 14.85 17.4451 14.1171 18.8709 12.8101C20.297 11.5028 21.1 9.72783 21.1 7.875C21.1 6.02217 20.297 4.24719 18.8709 2.93993C17.4451 1.63293 15.513 0.9 13.5 0.9H6C5.71093 0.9 5.43214 1.00518 5.22532 1.19477C5.01821 1.38463 4.9 1.64408 4.9 1.91667V12.8167H2C1.71093 12.8167 1.43214 12.9218 1.22532 13.1114C1.01821 13.3013 0.9 13.5608 0.9 13.8333C0.9 14.1059 1.01821 14.3654 1.22532 14.5552C1.43215 14.7448 1.71093 14.85 2 14.85H4.9V16.4833H2C1.71093 16.4833 1.43215 16.5885 1.22532 16.7781C1.01821 16.968 0.9 17.2274 0.9 17.5C0.9 17.7726 1.01821 18.032 1.22532 18.2219C1.43214 18.4115 1.71093 18.5167 2 18.5167H4.9V22.0833C4.9 22.3559 5.01821 22.6154 5.22532 22.8052C5.43215 22.9948 5.71093 23.1 6 23.1C6.28907 23.1 6.56785 22.9948 6.77468 22.8052C6.98179 22.6154 7.1 22.3559 7.1 22.0833V18.5167H13C13.2891 18.5167 13.5679 18.4115 13.7747 18.2219C13.9818 18.032 14.1 17.7726 14.1 17.5C14.1 17.2274 13.9818 16.968 13.7747 16.7781C13.5679 16.5885 13.2891 16.4833 13 16.4833H7.1V14.85H13.5ZM7.1 2.93333H13.5C14.9348 2.93333 16.3094 3.4559 17.3215 4.38372C18.3334 5.31127 18.9 6.56734 18.9 7.875C18.9 9.18266 18.3334 10.4387 17.3215 11.3663C16.3094 12.2941 14.9348 12.8167 13.5 12.8167H7.1V2.93333Z"
                                                            fill="white" stroke="white" stroke-width="0.2" />
                                                    </svg>
                                                </div>
                                            @endif
                                            @if ($lang == 0)
                                                <div class="valute">
                                                    <svg width="20" height="36" viewBox="0 0 20 36"
                                                        fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M8.1 4.1H8C5.90479 4.1 3.89539 4.93232 2.41386 6.41386C0.932319 7.89539 0.1 9.90479 0.1 12C0.1 14.0952 0.932319 16.1046 2.41386 17.5861C3.89539 19.0677 5.90479 19.9 8 19.9H8.1V20V28V28.1L8.00005 28.1C7.15197 28.1004 6.32462 27.8378 5.632 27.3484C4.93964 26.8592 4.41596 26.1674 4.13304 25.3683M8.1 4.1L4.227 25.334M8.1 4.1V4V2C8.1 1.49609 8.30018 1.01282 8.6565 0.656497C9.01282 0.300178 9.49609 0.1 10 0.1C10.5039 0.1 10.9872 0.300178 11.3435 0.656497C11.6998 1.01282 11.9 1.49609 11.9 2V4V4.10002L12 4.1C13.634 4.09974 15.2279 4.60616 16.5621 5.54951C17.8961 6.49268 18.9048 7.82622 19.4494 9.36647L8.1 4.1ZM4.13304 25.3683C4.13294 25.368 4.13283 25.3677 4.13272 25.3673L4.227 25.334M4.13304 25.3683C4.13314 25.3685 4.13324 25.3688 4.13333 25.369L4.227 25.334M4.13304 25.3683C3.95857 24.9022 3.60824 24.5233 3.15731 24.3128C2.70614 24.1022 2.19033 24.0771 1.72086 24.2429C1.25138 24.4087 0.86576 24.7522 0.646957 25.1995C0.428288 25.6465 0.393697 26.1614 0.550592 26.6335M4.227 25.334C4.04345 24.8431 3.67453 24.4438 3.19961 24.2222C2.7247 24.0005 2.18174 23.9741 1.68755 24.1486C1.19337 24.3232 0.787449 24.6847 0.55713 25.1555C0.326811 25.6263 0.290496 26.1687 0.456 26.666M0.550592 26.6335C0.550489 26.6333 0.550387 26.633 0.550284 26.6327L0.456 26.666M0.550592 26.6335C1.0952 28.1738 2.10393 29.5073 3.43788 30.4505C4.77208 31.3938 6.36597 31.9003 7.99998 31.9L8.1 31.9V32V34C8.1 34.5039 8.30018 34.9872 8.6565 35.3435C9.01282 35.6998 9.49609 35.9 10 35.9C10.5039 35.9 10.9872 35.6998 11.3435 35.3435C11.6998 34.9872 11.9 34.5039 11.9 34V32V31.9H12C14.0952 31.9 16.1046 31.0677 17.5861 29.5861C19.0677 28.1046 19.9 26.0952 19.9 24C19.9 21.9048 19.0677 19.8954 17.5861 18.4139C16.1046 16.9323 14.0952 16.1 12 16.1H11.9V16V8V7.90005L12 7.9C12.848 7.89958 13.6754 8.16216 14.368 8.65156C15.0604 9.14079 15.584 9.8326 15.867 10.6318L0.456 26.666M0.550592 26.6335C0.550689 26.6338 0.550786 26.6341 0.550883 26.6344L0.456 26.666M7.9 27.9988V28H7.996C7.96396 28 7.93196 27.9996 7.9 27.9988ZM8.1 8V7.9H8C6.91261 7.9 5.86976 8.33196 5.10086 9.10086C4.33196 9.86976 3.9 10.9126 3.9 12C3.9 13.0874 4.33196 14.1302 5.10086 14.8991C5.86976 15.668 6.91261 16.1 8 16.1H8.1V16V8ZM12 19.9H11.9V20V28V28.1H12C13.0874 28.1 14.1302 27.668 14.8991 26.8991C15.668 26.1302 16.1 25.0874 16.1 24C16.1 22.9126 15.668 21.8698 14.8991 21.1009C14.1302 20.332 13.0874 19.9 12 19.9Z"
                                                            fill="white" stroke="black" stroke-width="0.2" />
                                                    </svg>

                                                </div>
                                            @endif
                                            @if ($lang == 2)
                                                <div class="valute">
                                                    <svg width="43" height="44" viewBox="0 0 43 44"
                                                        fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                                            d="M9.50069 5.19994C9.73051 5.03588 9.9904 4.91869 10.2655 4.85508C10.5406 4.79146 10.8256 4.78266 11.1041 4.82918C11.3826 4.8757 11.6492 4.97663 11.8887 5.12619C12.1282 5.27576 12.3359 5.47105 12.4999 5.70089L23.2499 20.7509C23.5812 21.215 23.7146 21.7918 23.6206 22.3543C23.5267 22.9167 23.2132 23.4188 22.749 23.7501C22.2848 24.0814 21.7081 24.2148 21.1456 24.1208C20.5832 24.0269 20.081 23.7133 19.7497 23.2492L8.99974 8.19919C8.83568 7.96937 8.7185 7.70949 8.65488 7.43438C8.59127 7.15926 8.58247 6.87432 8.62899 6.5958C8.6755 6.31729 8.77643 6.05067 8.926 5.81117C9.07557 5.57166 9.27085 5.36397 9.50069 5.19994Z"
                                                            fill="white" />
                                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                                            d="M33.4989 5.19994C33.2691 5.03588 33.0092 4.91869 32.7341 4.85508C32.459 4.79146 32.1741 4.78266 31.8955 4.82918C31.617 4.8757 31.3504 4.97663 31.1109 5.12619C30.8714 5.27576 30.6637 5.47105 30.4997 5.70089L19.7497 20.7509C19.5856 20.9807 19.4685 21.2406 19.4049 21.5157C19.3413 21.7908 19.3325 22.0758 19.379 22.3543C19.4729 22.9167 19.7865 23.4188 20.2506 23.7501C20.7148 24.0814 21.2915 24.2148 21.854 24.1208C22.1325 24.0743 22.3991 23.9734 22.6386 23.8238C22.8781 23.6743 23.0858 23.479 23.2499 23.2492L33.9999 8.19919C34.1639 7.96937 34.2811 7.70949 34.3447 7.43438C34.4084 7.15926 34.4172 6.87432 34.3706 6.5958C34.3241 6.31729 34.2232 6.05067 34.0736 5.81117C33.9241 5.57166 33.7288 5.36397 33.4989 5.19994Z"
                                                            fill="white" />
                                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                                            d="M9.67578 24.15C9.67578 23.5798 9.9023 23.0329 10.3055 22.6297C10.7087 22.2265 11.2556 22 11.8258 22H31.1758C31.746 22 32.2929 22.2265 32.6961 22.6297C33.0993 23.0329 33.3258 23.5798 33.3258 24.15C33.3258 24.7202 33.0993 25.2671 32.6961 25.6703C32.2929 26.0735 31.746 26.3 31.1758 26.3H11.8258C11.2556 26.3 10.7087 26.0735 10.3055 25.6703C9.9023 25.2671 9.67578 24.7202 9.67578 24.15Z"
                                                            fill="white" />
                                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                                            d="M21.4996 19.8501C22.0698 19.8501 22.6167 20.0766 23.0199 20.4798C23.4231 20.883 23.6496 21.4299 23.6496 22.0001V37.0501C23.6496 37.6203 23.4231 38.1672 23.0199 38.5704C22.6167 38.9736 22.0698 39.2001 21.4996 39.2001C20.9294 39.2001 20.3825 38.9736 19.9793 38.5704C19.5761 38.1672 19.3496 37.6203 19.3496 37.0501V22.0001C19.3496 21.4299 19.5761 20.883 19.9793 20.4798C20.3825 20.0766 20.9294 19.8501 21.4996 19.8501Z"
                                                            fill="white" />
                                                    </svg>
                                                </div>
                                            @endif
                                        @endif
                                        @if (!isset($lang))
                                            <div class="valute">
                                                <svg width="22" height="24" viewBox="0 0 22 24" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M13.5 14.85C15.513 14.85 17.4451 14.1171 18.8709 12.8101C20.297 11.5028 21.1 9.72783 21.1 7.875C21.1 6.02217 20.297 4.24719 18.8709 2.93993C17.4451 1.63293 15.513 0.9 13.5 0.9H6C5.71093 0.9 5.43214 1.00518 5.22532 1.19477C5.01821 1.38463 4.9 1.64408 4.9 1.91667V12.8167H2C1.71093 12.8167 1.43214 12.9218 1.22532 13.1114C1.01821 13.3013 0.9 13.5608 0.9 13.8333C0.9 14.1059 1.01821 14.3654 1.22532 14.5552C1.43215 14.7448 1.71093 14.85 2 14.85H4.9V16.4833H2C1.71093 16.4833 1.43215 16.5885 1.22532 16.7781C1.01821 16.968 0.9 17.2274 0.9 17.5C0.9 17.7726 1.01821 18.032 1.22532 18.2219C1.43214 18.4115 1.71093 18.5167 2 18.5167H4.9V22.0833C4.9 22.3559 5.01821 22.6154 5.22532 22.8052C5.43215 22.9948 5.71093 23.1 6 23.1C6.28907 23.1 6.56785 22.9948 6.77468 22.8052C6.98179 22.6154 7.1 22.3559 7.1 22.0833V18.5167H13C13.2891 18.5167 13.5679 18.4115 13.7747 18.2219C13.9818 18.032 14.1 17.7726 14.1 17.5C14.1 17.2274 13.9818 16.968 13.7747 16.7781C13.5679 16.5885 13.2891 16.4833 13 16.4833H7.1V14.85H13.5ZM7.1 2.93333H13.5C14.9348 2.93333 16.3094 3.4559 17.3215 4.38372C18.3334 5.31127 18.9 6.56734 18.9 7.875C18.9 9.18266 18.3334 10.4387 17.3215 11.3663C16.3094 12.2941 14.9348 12.8167 13.5 12.8167H7.1V2.93333Z"
                                                        fill="white" stroke="white" stroke-width="0.2" />
                                                </svg>
                                            </div>
                                        @endif

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
