@extends('loyauts.app')
@section('title')
    Админ-панель
@endsection
@section('content')
<main>
    <section class="banner">
        <div class="container">
            <div class="banner_content">
                <form action="/searchMain" method="POST" class="banner_form desktop">
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
        </section>
        <section class="hotel_item desktop ">
            <div class="stars">
                
                @for ($i=0;$i<$hotel->reiting; $i++)
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M12 17.27L18.18 21L16.54 13.97L22 9.24L14.81 8.63L12 2L9.19 8.63L2 9.24L7.46 13.97L5.82 21L12 17.27Z" fill="white" />
                </svg>
                @endfor
                
                {{-- <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M12 17.27L18.18 21L16.54 13.97L22 9.24L14.81 8.63L12 2L9.19 8.63L2 9.24L7.46 13.97L5.82 21L12 17.27Z" fill="white" />
                </svg>
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M12 17.27L18.18 21L16.54 13.97L22 9.24L14.81 8.63L12 2L9.19 8.63L2 9.24L7.46 13.97L5.82 21L12 17.27Z" fill="white" />
                </svg>
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M12 17.27L18.18 21L16.54 13.97L22 9.24L14.81 8.63L12 2L9.19 8.63L2 9.24L7.46 13.97L5.82 21L12 17.27Z" fill="white" />
                </svg> --}}
                @for ($i=0;$i<(5-$hotel->reiting); $i++)
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M12 15.39L8.24 17.66L9.23 13.38L5.91 10.5L10.29 10.13L12 6.09L13.71 10.13L18.09 10.5L14.77 13.38L15.76 17.66M22 9.24L14.81 8.63L12 2L9.19 8.63L2 9.24L7.45 13.97L5.82 21L12 17.27L18.18 21L16.54 13.97L22 9.24Z" fill="white" />
                </svg>
                @endfor
               
            </div>
            <h2 class="name_hotel_item">
               {{$hotel->name}}
            </h2>
            <div class="main_info_about_hotel_item">
                <img src="{{$hotel->imageHotel()}}{{$hotel->img}}" class="big_img_hotel" alt="">
                <div class="right_block_info_hotel">
                   
                    <div class="price_text">
                        <div class="price_p">
                            цена от:
                        </div>
                        <div class="price_cost">
                            <p class="cost">
                                @if (isset($lang))
                                @if ($lang == 1)
                                {{ $hotel->freeNumber() }}
                            @endif
                            @if ($lang == 0)
                                {{ floor($hotel->freeNumber() / 89) }}
                            @endif
                            @if ($lang == 2)
                                {{ floor($hotel->freeNumber() / 12 )}}
                            @endif
                                @endif
                                @if (!isset($lang))
                                {{ $hotel->freeNumber() }}

                                @endif
                            </p>
                            <svg width="34" height="36" viewBox="0 0 34 36" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M21 22.35C24.2055 22.35 27.2817 21.2227 29.5516 19.2129C31.8218 17.2028 33.1 14.4736 33.1 11.625C33.1 8.77635 31.8218 6.04724 29.5516 4.03712C27.2817 2.02735 24.2055 0.9 21 0.9H9C8.5528 0.9 8.12182 1.05719 7.80234 1.34006C7.48246 1.62329 7.3 2.01022 7.3 2.41667V19.3167H2.6C2.1528 19.3167 1.72182 19.4739 1.40234 19.7567C1.08246 20.04 0.9 20.4269 0.9 20.8333C0.9 21.2398 1.08246 21.6267 1.40234 21.9099C1.72182 22.1928 2.1528 22.35 2.6 22.35H7.3V24.9833H2.6C2.1528 24.9833 1.72182 25.1405 1.40234 25.4234C1.08246 25.7066 0.9 26.0936 0.9 26.5C0.9 26.9064 1.08246 27.2934 1.40234 27.5766C1.72182 27.8595 2.1528 28.0167 2.6 28.0167H7.3V33.5833C7.3 33.9898 7.48246 34.3767 7.80234 34.6599C8.12182 34.9428 8.5528 35.1 9 35.1C9.4472 35.1 9.87818 34.9428 10.1977 34.6599C10.5175 34.3767 10.7 33.9898 10.7 33.5833V28.0167H20.2C20.6472 28.0167 21.0782 27.8595 21.3977 27.5766C21.7175 27.2934 21.9 26.9064 21.9 26.5C21.9 26.0936 21.7175 25.7066 21.3977 25.4234C21.0782 25.1405 20.6472 24.9833 20.2 24.9833H10.7V22.35H21ZM10.7 3.93333H21C23.311 3.93333 25.5254 4.74631 27.1562 6.19033C28.7867 7.634 29.7 9.58924 29.7 11.625C29.7 13.6608 28.7867 15.616 27.1562 17.0597C25.5254 18.5037 23.311 19.3167 21 19.3167H10.7V3.93333Z" fill="white" stroke="white" stroke-width="0.2" />
                            </svg>
                        </div>
                        
                    </div>
                    <div class="icons_comfort">
                        <?
                            $arrayTerms = explode(',',$hotel->terms); 
                        ?>
                        @foreach ($arrayTerms as $item)
                           @if ( trim($item) == 'КОНФЕРЕНЦ-ЗАЛ')
                           
                           <img src="{{asset('/assets/img/icons/ZAL.svg')}}" alt="">
                           @endif

                           @if ( trim($item) == 'ДИСКОТЕКА')
                           
                           <img src="{{asset('/assets/img/icons/DISKO.svg')}}" alt="">

                           @endif

                           @if ( trim($item) == 'БАССЕЙН')
                           
                           <img src="{{asset('/assets/img/icons/SWIM.svg')}}" alt="">
                           
                           @endif

                           @if ( trim($item) == 'САУНА')
                           
                           <img src="{{asset('/assets/img/icons/SAUNA.svg')}}" alt="">
                           
                           @endif

                           @if ( trim($item) == 'РЕСТОРАН')
                           
                           <img src="{{asset('/assets/img/icons/RESTAUTANT.svg')}}" alt="">
                           
                           @endif

                           @if ( trim($item) == 'УСЛУГИ НЯНИ')
                           
                           <img src="{{asset('/assets/img/icons/mdi_mom.svg')}}" alt="">
                           
                           @endif

                           @if ( trim($item) == 'КОНСЬЕРЖ')
                           
                           <img src="{{asset('/assets/img/icons/KONSILIERGE.svg')}}" alt="">
                           
                           @endif

                           
                           @if ( trim($item) == 'СПА-САЛОН')
                           
                           <img src="{{asset('/assets/img/icons/SPA.svg')}}" alt="">
                           
                           @endif


                        @endforeach
                      
                        {{-- <img src="{{asset('/assets/img/icons/ic_baseline-wifi.svg')}}" alt=""> --}}
                        {{-- <img src="{{asset('/assets/img/icons/maki_nightclub.svg')}}" alt="">
                        <img src="{{asset('/assets/img/icons/mdi_swim.svg')}}" alt="">
                        <img src="{{asset('/assets/img/icons/ph_disco-ball.svg')}}" alt="">
                        <img src="{{asset('/assets/img/icons/solar_volleyball-bold.svg')}}" alt=""> --}}
                    </div>
                   
                </div>
            </div>
            

            
        </section>
        <section class="catalog_hotel_mob_item mobile">
            
         
            <div class="right_catalog_hotel">
                <div class="catalog_hotel_flex">
                    <div class="catalog_info_hotel " >
                        <img src="{{$hotel->imageHotel()}}{{$hotel->img}}" class="img_hotel_catalog" alt="">
                        
                        <div class="text_info_hotel_mobile ">
                            <div class="text_info_hotel">
                                <p class="name_hotel">
                                    {{$hotel->name}}
                                </p>
                                <div class="more_info_hotel">
                                    <p class="more_info_hotel_p">
                                        тип питания: {{$hotel->name}}
                                    </p>
                                    <p class="more_info_hotel_p">
                                        тип номера: @foreach ($hotel->numbers() as $number)
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
                                            @if (isset($lang))
                                            @if ($lang == 1)
                                            {{ $hotel->freeNumber() }}
                                        @endif
                                        @if ($lang == 0)
                                            {{ floor($hotel->freeNumber() / 89) }}
                                        @endif
                                        @if ($lang == 2)
                                            {{ floor($hotel->freeNumber() / 12 )}}
                                        @endif
                                            @endif
                                            @if (!isset($lang))
                                            {{ $hotel->freeNumber() }}
         
                                            @endif
                                        </p>
                                        <div class="valute">
                                            <svg width="15" height="16" class="" viewBox="0 0 15 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M9.125 9.82054C10.4343 9.82054 11.6914 9.35383 12.6193 8.52109C13.5474 7.68813 14.0705 6.55665 14.0705 5.375C14.0705 4.19335 13.5474 3.06187 12.6193 2.22891C11.6914 1.39617 10.4343 0.929461 9.125 0.929461H4.25C4.06122 0.929461 3.87883 0.996693 3.74327 1.11836C3.60745 1.24024 3.52946 1.4073 3.52946 1.58333V8.51279H1.65C1.46122 8.51279 1.27883 8.58003 1.14327 8.70169C1.00745 8.82358 0.929461 8.99063 0.929461 9.16667C0.929461 9.3427 1.00745 9.50976 1.14327 9.63164C1.27883 9.75331 1.46122 9.82054 1.65 9.82054H3.52946V10.8461H1.65C1.46122 10.8461 1.27883 10.9134 1.14327 11.035C1.00745 11.1569 0.929461 11.324 0.929461 11.5C0.929461 11.676 1.00745 11.8431 1.14327 11.965C1.27883 12.0866 1.46122 12.1539 1.65 12.1539H3.52946V14.4167C3.52946 14.5927 3.60745 14.7598 3.74327 14.8816C3.87883 15.0033 4.06122 15.0705 4.25 15.0705C4.43878 15.0705 4.62117 15.0033 4.75673 14.8816C4.89255 14.7598 4.97054 14.5927 4.97054 14.4167V12.1539H8.8C8.98878 12.1539 9.17117 12.0866 9.30673 11.965C9.44255 11.8431 9.52054 11.676 9.52054 11.5C9.52054 11.324 9.44255 11.1569 9.30673 11.035C9.17117 10.9134 8.98878 10.8461 8.8 10.8461H4.97054V9.82054H9.125ZM4.97054 2.23721H9.125C10.0568 2.23721 10.949 2.56945 11.6058 3.15886C12.2623 3.74805 12.6295 4.54542 12.6295 5.375C12.6295 6.20458 12.2623 7.00195 11.6058 7.59114C10.949 8.18055 10.0568 8.51279 9.125 8.51279H4.97054V2.23721Z" fill="white" stroke="white" stroke-width="0.141079" />
                                              </svg>
                                        </div>
                                    </div>
                                    <p class="text_about_price">
                                        включая обязательные доплаты 0 рублей
                                    </p>
                                    <div class="icons">
                                        <img src="{{asset('/assets/img/icons/ic_baseline-wifi.svg')}}" alt="">
                                        <img src="{{asset('/assets/img/icons/maki_nightclub.svg')}}" alt="">
                                        <img src="{{asset('/assets/img/icons/mdi_swim.svg')}}" alt="">
                                        <img src="{{asset('/assets/img/icons/ph_disco-ball.svg')}}" alt="">
                                        <img src="{{asset('/assets/img/icons/solar_volleyball-bold.svg')}}" alt="">
                                    </div>
                                </div>
                                
                            </div>
                        </div>
                      
                        
                    </div>
                    
                </div>
                
                
            </div>
        </section>
        
        <section class="vklad_abaot_hotel">
            <h2 class="name_section">
                Удобства отеля
            </h2>
            <div class="vkladki_more_info_hotel">
                <div class="vk">
                    
                    <div class="tab">
                      <button class="tablinks active" onclick="openCity(event, 'Londofn')">Общее</button>
                      <button class="tablinks" onclick="openCity(event, 'Paris')">услуги</button>
                      <button class="tablinks" onclick="openCity(event, 'Tokyo')">питание</button>
                      <button class="tablinks" onclick="openCity(event, 'God')">концепция</button>
                    </div>
                    
                    <div id="Londofn" class="tabcontent" style="display: block;">
                      <p class="white">{{$hotel->description}}</p>
                    </div>
                    
                    <div id="Paris" class="tabcontent">
                      <p class="white">{{$hotel->services}}</p> 
                    </div>
                    
                    <div id="Tokyo" class="tabcontent">
                      <p class="white">{{$hotel->feed}}</p>
                    </div>
                    <div id="God" class="tabcontent">
                        <p class="white">{{$hotel->concepc}}
                         </p>
                    </div>
              </div>
            </div>
        </section>
        <section class="choice_place">
            <div class="name_section">
                
                выбрать номер
            </div>
            <div class="flex">

@foreach ($hotel->numbers() as $item)
<div class="card_choice_card">
    <div class="flex_content">
        <div class="slider" id="slider-1">
            <!-- слайды -->

            <div class="slide">
                <img src="{{$item->imageNumber()}}{{$item->img_one}}" class="img_inside_number" alt="">
            </div>
            <div class="slide">
                <img src="{{$item->imageNumber()}}{{$item->img_two}}" class="img_inside_number" alt="">
            </div>
            <div class="slide">
                <img src="{{$item->imageNumber()}}{{$item->img_three}}" class="img_inside_number" alt="">
            </div>
            <!-- стрелки -->
            <div class="arrow left">
                <i class="fas fa-chevron-left"></i>
            </div>
            <div class="arrow right">
                <i class="fas fa-chevron-right"></i>
            </div>
        </div>
        
        <div class="text_all_cacaca">
            <p class="name_place">
                {{$item->name}}
            </p>
            <div class="flex_wrap">
                <p class="txt_place">тип питания: {{$hotel->feed}}</p>
                <p class="txt_place">макс. размещение: {{$hotel->max_days}}</p>
                <p class="txt_place">тип номера: {{$item->type}}</p>
      
            </div>
        </div>
        <hr class="line">
        <div class="catalog_price_hotel desktop">
            <div class="qwe_catalog">
                <p class="price_text">
                    цена:
                </p>
                <div class="price_main">
                    <p class="price_number">
                        
                        @if (isset($lang))
                        @if ($lang == 1)
                        {{$item->cost}}
                    @endif
                    @if ($lang == 0)
                        {{ floor($item->cost / 89) }}
                    @endif
                    @if ($lang == 2)
                        {{ floor($item->cost / 12 )}}
                    @endif
                        @endif
                        @if (!isset($lang))
                        {{ $item->cost }}

                        @endif
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
          
            <form action="/choiceNumber/{{$item->id}}" method="POST">
                @csrf

                <button type="submit" class="choice_hotel">
                    выбрать
                </button>
            </form>
        </div>
    </div>
    
</div>
@endforeach
              
              
            </div>
        </section>
        <section class="reviews">
            <div class="container">
                <div class="reviews_wrapp">
                    <div class="reviews_content">
                        <div class="reviews_top">
                            <div class="top_left">
                                <div class="top_line"></div>
                            </div>
                            <div class="top_right">
                                <h3 class="reviews_h3">ОТЗЫВЫ</h3>
                            </div>
                            
                        </div>
                        <div class="top_bottom">
                            <div class="top_lin">
                                <div class="top_bol"></div>
                            </div>
                        </div>                   
                        <div class="scrollbar" id="element">
                            <div class="scrollbar_content">

                                @foreach ($reviews as $item)
                                <div class="scrollbar_wrapper">
                                    <div class="scrollbar_top">
                                        <div class="scrollbar_name">
                                            <p class="scrollbar_p">{{$item->user->surname}} {{$item->user->name}}</p>
                                        </div>
                                        <div class="scrollbar_date">
                                            <p class="scrollbar_da">{{$item->created_at}}</p>
                                        </div>
                                        <div class="scrollbar_star">
                                            @for ($i=0;$i<$item->reit; $i++)
                                            <div class="star_svg">
                                                <svg style="color: white" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"><path d="M287.9 0c9.2 0 17.6 5.2 21.6 13.5l68.6 141.3 153.2 22.6c9 1.3 16.5 7.6 19.3 16.3s.5 18.1-5.9 24.5L433.6 328.4l26.2 155.6c1.5 9-2.2 18.1-9.7 23.5s-17.3 6-25.3 1.7l-137-73.2L151 509.1c-8.1 4.3-17.9 3.7-25.3-1.7s-11.2-14.5-9.7-23.5l26.2-155.6L31.1 218.2c-6.5-6.4-8.7-15.9-5.9-24.5s10.3-14.9 19.3-16.3l153.2-22.6L266.3 13.5C270.4 5.2 278.7 0 287.9 0zm0 79L235.4 187.2c-3.5 7.1-10.2 12.1-18.1 13.3L99 217.9 184.9 303c5.5 5.5 8.1 13.3 6.8 21L171.4 443.7l105.2-56.2c7.1-3.8 15.6-3.8 22.6 0l105.2 56.2L384.2 324.1c-1.3-7.7 1.2-15.5 6.8-21l85.9-85.1L358.6 200.5c-7.8-1.2-14.6-6.1-18.1-13.3L287.9 79z" fill="white" ></path></svg>
                                            </div>
                                            @endfor
                                         
                                       
                                        </div>
                                    </div>
                                    <div class="scrollbar_name">
                                        <h4 class="scrollbar_h4">{{$item->name}}</h4>
                                    </div>
                                    <div class="scrollbar_opis">
                                        <h5 class="scrollbar_h5">{{$item->text}}</h5>
                                    </div>
                                    <div class="top_lin">
                                        
                                    </div>
                                </div>
                                @endforeach
                            
                              
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="add_reviews">
            <div class="container">
                <div class="add_container">
                    <div class="add_wrapper">
                        <div class="add_top">
                            <h4 class="add_h4">
                                Напишите свой отзыв 
                            </h4>
                            <p class="add_p">
                                Какие впечатления у Вас остались от проживания?
                            </p>
                        </div>
                        <form action="/addRewiew/{{$hotel->id}}" class="add_form" method="POST">
                            @csrf
                            <input type="text" class="add_input" placeholder="название отзыва" name="name">
                            <input type="text" class="add_input" placeholder="напишите отзыв" name="text">
                            <div class="add_lab">
                               <input type="hidden" id='reiting' name="reit">
                                <div class="rating">
                                    <span class="star" data-value="1">&#9733;</span>
                                    <span class="star" data-value="2">&#9733;</span>
                                    <span class="star" data-value="3">&#9733;</span>
                                    <span class="star" data-value="4">&#9733;</span>
                                    <span class="star" data-value="5">&#9733;</span>
                                </div>
                                
                            </div>
                            <input type="submit" value="отправить" class="add_sub white_cur">
                        </form>
                    </div>
                </div>
            </div>
        </section>
    </div>
</main>
<script>
    const stars = document.querySelectorAll('.star');
const selectedRating = document.getElementById('selectedRating');
let clicked = false;

stars.forEach(star => {
  star.addEventListener('click', () => {
    clicked = true;
    const value = star.getAttribute('data-value');
    
    stars.forEach(s => {
      if (s.getAttribute('data-value') <= value) {
        s.classList.add('active');
      } else {
        s.classList.remove('active');
      }
    });
    console.log(value);
    document.getElementById('reiting').value=value;
    
    selectedRating.innerText = value;

  });
  
  star.addEventListener('mouseover', () => {
    const value = star.getAttribute('data-value');
    
    if (!clicked) {
      stars.forEach(s => {
        if (s.getAttribute('data-value') <= value) {
          s.classList.add('active');
        } else {
          s.classList.remove('active');
        }
      });
    }
  });
  
  star.addEventListener('mouseout', () => {
    if (!clicked) {
      stars.forEach(s => {
        s.classList.remove('active');
      });
    }
  });

});

</script>
@endsection('content')