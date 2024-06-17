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
                    <div class="admin_btn white_cur">
                        <a href="" class="edit"><img src="../assets/img/icons/edit.svg" alt=""></a>
                        <a href="" class="delete"><img src="../assets/img/icons/delete.svg" alt=""></a>
                    </div>
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
                    <div style="visibility: hidden;" class="white_btn white_cur">выбрать</div>
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
                    <div class="valute">
                        <svg width="22" height="24" viewBox="0 0 22 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M13.5 14.85C15.513 14.85 17.4451 14.1171 18.8709 12.8101C20.297 11.5028 21.1 9.72783 21.1 7.875C21.1 6.02217 20.297 4.24719 18.8709 2.93993C17.4451 1.63293 15.513 0.9 13.5 0.9H6C5.71093 0.9 5.43214 1.00518 5.22532 1.19477C5.01821 1.38463 4.9 1.64408 4.9 1.91667V12.8167H2C1.71093 12.8167 1.43214 12.9218 1.22532 13.1114C1.01821 13.3013 0.9 13.5608 0.9 13.8333C0.9 14.1059 1.01821 14.3654 1.22532 14.5552C1.43215 14.7448 1.71093 14.85 2 14.85H4.9V16.4833H2C1.71093 16.4833 1.43215 16.5885 1.22532 16.7781C1.01821 16.968 0.9 17.2274 0.9 17.5C0.9 17.7726 1.01821 18.032 1.22532 18.2219C1.43214 18.4115 1.71093 18.5167 2 18.5167H4.9V22.0833C4.9 22.3559 5.01821 22.6154 5.22532 22.8052C5.43215 22.9948 5.71093 23.1 6 23.1C6.28907 23.1 6.56785 22.9948 6.77468 22.8052C6.98179 22.6154 7.1 22.3559 7.1 22.0833V18.5167H13C13.2891 18.5167 13.5679 18.4115 13.7747 18.2219C13.9818 18.032 14.1 17.7726 14.1 17.5C14.1 17.2274 13.9818 16.968 13.7747 16.7781C13.5679 16.5885 13.2891 16.4833 13 16.4833H7.1V14.85H13.5ZM7.1 2.93333H13.5C14.9348 2.93333 16.3094 3.4559 17.3215 4.38372C18.3334 5.31127 18.9 6.56734 18.9 7.875C18.9 9.18266 18.3334 10.4387 17.3215 11.3663C16.3094 12.2941 14.9348 12.8167 13.5 12.8167H7.1V2.93333Z" fill="white" stroke="white" stroke-width="0.2" />
                        </svg>
                    </div>
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
                                <div class="scrollbar_wrapper">
                                    <div class="scrollbar_top">
                                        <div class="scrollbar_name">
                                            <p class="scrollbar_p">Гейдур диана</p>
                                        </div>
                                        <div class="scrollbar_date">
                                            <p class="scrollbar_da">5 апр. 2038</p>
                                        </div>
                                        <div class="scrollbar_star">
                                            <div class="star_svg">
                                                <svg style="color: white" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"><path d="M287.9 0c9.2 0 17.6 5.2 21.6 13.5l68.6 141.3 153.2 22.6c9 1.3 16.5 7.6 19.3 16.3s.5 18.1-5.9 24.5L433.6 328.4l26.2 155.6c1.5 9-2.2 18.1-9.7 23.5s-17.3 6-25.3 1.7l-137-73.2L151 509.1c-8.1 4.3-17.9 3.7-25.3-1.7s-11.2-14.5-9.7-23.5l26.2-155.6L31.1 218.2c-6.5-6.4-8.7-15.9-5.9-24.5s10.3-14.9 19.3-16.3l153.2-22.6L266.3 13.5C270.4 5.2 278.7 0 287.9 0zm0 79L235.4 187.2c-3.5 7.1-10.2 12.1-18.1 13.3L99 217.9 184.9 303c5.5 5.5 8.1 13.3 6.8 21L171.4 443.7l105.2-56.2c7.1-3.8 15.6-3.8 22.6 0l105.2 56.2L384.2 324.1c-1.3-7.7 1.2-15.5 6.8-21l85.9-85.1L358.6 200.5c-7.8-1.2-14.6-6.1-18.1-13.3L287.9 79z" fill="white" ></path></svg>
                                            </div>
                                            <div class="star_svg">
                                                <svg style="color: white" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"><path d="M287.9 0c9.2 0 17.6 5.2 21.6 13.5l68.6 141.3 153.2 22.6c9 1.3 16.5 7.6 19.3 16.3s.5 18.1-5.9 24.5L433.6 328.4l26.2 155.6c1.5 9-2.2 18.1-9.7 23.5s-17.3 6-25.3 1.7l-137-73.2L151 509.1c-8.1 4.3-17.9 3.7-25.3-1.7s-11.2-14.5-9.7-23.5l26.2-155.6L31.1 218.2c-6.5-6.4-8.7-15.9-5.9-24.5s10.3-14.9 19.3-16.3l153.2-22.6L266.3 13.5C270.4 5.2 278.7 0 287.9 0zm0 79L235.4 187.2c-3.5 7.1-10.2 12.1-18.1 13.3L99 217.9 184.9 303c5.5 5.5 8.1 13.3 6.8 21L171.4 443.7l105.2-56.2c7.1-3.8 15.6-3.8 22.6 0l105.2 56.2L384.2 324.1c-1.3-7.7 1.2-15.5 6.8-21l85.9-85.1L358.6 200.5c-7.8-1.2-14.6-6.1-18.1-13.3L287.9 79z" fill="white"></path></svg>
                                            </div>
                                            <div class="star_svg">
                                                <svg style="color: white" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"><path d="M287.9 0c9.2 0 17.6 5.2 21.6 13.5l68.6 141.3 153.2 22.6c9 1.3 16.5 7.6 19.3 16.3s.5 18.1-5.9 24.5L433.6 328.4l26.2 155.6c1.5 9-2.2 18.1-9.7 23.5s-17.3 6-25.3 1.7l-137-73.2L151 509.1c-8.1 4.3-17.9 3.7-25.3-1.7s-11.2-14.5-9.7-23.5l26.2-155.6L31.1 218.2c-6.5-6.4-8.7-15.9-5.9-24.5s10.3-14.9 19.3-16.3l153.2-22.6L266.3 13.5C270.4 5.2 278.7 0 287.9 0zm0 79L235.4 187.2c-3.5 7.1-10.2 12.1-18.1 13.3L99 217.9 184.9 303c5.5 5.5 8.1 13.3 6.8 21L171.4 443.7l105.2-56.2c7.1-3.8 15.6-3.8 22.6 0l105.2 56.2L384.2 324.1c-1.3-7.7 1.2-15.5 6.8-21l85.9-85.1L358.6 200.5c-7.8-1.2-14.6-6.1-18.1-13.3L287.9 79z" fill="white"></path></svg>
                                            </div>
                                            <div class="star_svg">
                                                <svg style="color: white" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"><path d="M287.9 0c9.2 0 17.6 5.2 21.6 13.5l68.6 141.3 153.2 22.6c9 1.3 16.5 7.6 19.3 16.3s.5 18.1-5.9 24.5L433.6 328.4l26.2 155.6c1.5 9-2.2 18.1-9.7 23.5s-17.3 6-25.3 1.7l-137-73.2L151 509.1c-8.1 4.3-17.9 3.7-25.3-1.7s-11.2-14.5-9.7-23.5l26.2-155.6L31.1 218.2c-6.5-6.4-8.7-15.9-5.9-24.5s10.3-14.9 19.3-16.3l153.2-22.6L266.3 13.5C270.4 5.2 278.7 0 287.9 0zm0 79L235.4 187.2c-3.5 7.1-10.2 12.1-18.1 13.3L99 217.9 184.9 303c5.5 5.5 8.1 13.3 6.8 21L171.4 443.7l105.2-56.2c7.1-3.8 15.6-3.8 22.6 0l105.2 56.2L384.2 324.1c-1.3-7.7 1.2-15.5 6.8-21l85.9-85.1L358.6 200.5c-7.8-1.2-14.6-6.1-18.1-13.3L287.9 79z" fill="white"></path></svg>
                                            </div>
                                            <div class="star_svgg">
                                                <svg style="color: white" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"><path d="M287.9 0c9.2 0 17.6 5.2 21.6 13.5l68.6 141.3 153.2 22.6c9 1.3 16.5 7.6 19.3 16.3s.5 18.1-5.9 24.5L433.6 328.4l26.2 155.6c1.5 9-2.2 18.1-9.7 23.5s-17.3 6-25.3 1.7l-137-73.2L151 509.1c-8.1 4.3-17.9 3.7-25.3-1.7s-11.2-14.5-9.7-23.5l26.2-155.6L31.1 218.2c-6.5-6.4-8.7-15.9-5.9-24.5s10.3-14.9 19.3-16.3l153.2-22.6L266.3 13.5C270.4 5.2 278.7 0 287.9 0zm0 79L235.4 187.2c-3.5 7.1-10.2 12.1-18.1 13.3L99 217.9 184.9 303c5.5 5.5 8.1 13.3 6.8 21L171.4 443.7l105.2-56.2c7.1-3.8 15.6-3.8 22.6 0l105.2 56.2L384.2 324.1c-1.3-7.7 1.2-15.5 6.8-21l85.9-85.1L358.6 200.5c-7.8-1.2-14.6-6.1-18.1-13.3L287.9 79z" fill="white"></path></svg>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="scrollbar_name">
                                        <h4 class="scrollbar_h4">Как из мечты воплощается реальность, так и из целеустремленности рождается достижение!</h4>
                                    </div>
                                    <div class="scrollbar_opis">
                                        <h5 class="scrollbar_h5">Я прожил незабываемую неделю в кафке плаза и могу смело заявить, что это было самым захватывающим опытом в моей жизни. Начиная с внимательного обслуживания персонала до уникальной атмосферы, созданной современным дизайном и технологическими новшествами, каждый момент был наполнен удивлением и восторгом. Вид на Землю из окна номера был просто потрясающим, а космические прогулки оставили незабываемые впечатления. кафка плаза обязательно стал для меня местом, куда я хочу вернуться снова и снова. Спасибо за незабываемые впечатления!</h5>
                                    </div>
                                    <div class="top_lin">
                                        
                                    </div>
                                </div>
                              
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
                            <input type="text" class="add_input" placeholder="название отзыва">
                            <input type="text" class="add_input" placeholder="напишите отзыв">
                            <div class="rating">
                                <span class="star" data-value="1">&#9733;</span>
                                <span class="star" data-value="2">&#9733;</span>
                                <span class="star" data-value="3">&#9733;</span>
                                <span class="star" data-value="4">&#9733;</span>
                                <span class="star" data-value="5">&#9733;</span>
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