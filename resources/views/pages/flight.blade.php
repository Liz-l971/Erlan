@extends('loyauts.app')
@section('title')
    Админ-панель
@endsection
@section('content')

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
        </section>
        <form action="/chooseClass/{{$fromRace->id}}/{{$toRace->id}}" method="POST" class="flight_class">
            @csrf
            <h2 class="name_page">
                выберите класс обслуживания
            </h2>
            <div class="admin_btn white_cur">
                <a href="" class="edit"><img src="../assets/img/icons/edit.svg" alt=""></a>
                <a href="" class="delete"><img src="../assets/img/icons/delete.svg" alt=""></a>
            </div>
            <div class="display_content">
                <div class="flex_column_content">
                    <h3 class="name_block">Туда</h3>
                    <div class="column_flight">
                        <div class="company">
                            @if ($fromRace['company']==1)
                            <img src="{{asset('public/assets/img/company/roscosmos.png')}}" alt="company">
                            @endif
                            @if ($fromRace['company']==2)
                            <img src="{{asset('public/assets/img/company/space.png')}}" alt="company">
                            @endif
                            @if ($fromRace['company']==3)
                            <img src="{{asset('public/assets/img/company/cnsa.png')}}" alt="company">
                            @endif
        
                            @if ($fromRace['company']==4)
                            <img src="{{asset('public/assets/img/company/space.png')}}" alt="company">
                            @endif
        
                            <h4 class="name_company">
                                @if ($fromRace['company']==1)
                                Роскосмос
                            @endif
                            @if ($fromRace['company']==2)
                            SpaceX
                        @endif
                        @if ($fromRace['company']==3)
                        CNSA
                    @endif
                    @if ($fromRace['company']==4)
                    BLUE ORIGIN
                @endif
                            </h4>
                        </div>
                        <div class="napravlenie">
                            <div class="info_otkuda">
                                <h4 class="kosmodrom">
                                   {{$fromRace->otcuda}}
                                </h4>
                                <p class="time_vilet">
                                    {{$fromRace->time_otb}}

                                </p>
                            </div>
                            <svg width="67" height="2" viewBox="0 0 67 2" fill="none" class="line_tuda_obratno" xmlns="http://www.w3.org/2000/svg">
                                <path d="M1 1H66" stroke="white" stroke-linecap="round" stroke-dasharray="6 6" />
                            </svg>
                            <div class="info_otkuda">
                                <h4 class="kosmodrom">
                                    {{$fromRace->cuda}}
                                </h4>
                                <p class="time_vilet">
                                    {{$fromRace->time_prib}}
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="column_class">
                        @if ($fromRace->cost_ec!=null)
                        <div class="row_class">
                         
                            <p class="name_class">
                                эконом(ecofly)
                            </p>
                            {{-- <p class="col">
                                Осталось:9+
                            </p> --}}
                            <div class="pluss">
                                <p class="bagaj">включенный багаж</p>
                                <p class="bagaj">возвратный</p>
                            </div>
                            <div class="price">
                                <p class="cost">
                                    {{$fromRace->cost_ec}}
                                </p>
                                <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M9.75 9.8C11.153 9.8 12.5 9.33563 13.4943 8.507C14.4889 7.67815 15.05 6.55183 15.05 5.375C15.05 4.19817 14.4889 3.07184 13.4943 2.243C12.5 1.41437 11.153 0.95 9.75 0.95H4.5C4.30374 0.95 4.11408 1.01489 3.97302 1.13244C3.83169 1.25022 3.75 1.41211 3.75 1.58333V8.53333H1.7C1.50374 8.53333 1.31408 8.59822 1.17302 8.71578C1.03169 8.83355 0.95 8.99545 0.95 9.16667C0.95 9.33788 1.03169 9.49978 1.17302 9.61756C1.31408 9.73511 1.50374 9.8 1.7 9.8H3.75V10.8667H1.7C1.50374 10.8667 1.31408 10.9316 1.17302 11.0491C1.03169 11.1669 0.95 11.3288 0.95 11.5C0.95 11.6712 1.03169 11.8331 1.17302 11.9509C1.31408 12.0684 1.50374 12.1333 1.7 12.1333H3.75V14.4167C3.75 14.5879 3.83169 14.7498 3.97302 14.8676C4.11408 14.9851 4.30374 15.05 4.5 15.05C4.69626 15.05 4.88592 14.9851 5.02698 14.8676C5.16831 14.7498 5.25 14.5879 5.25 14.4167V12.1333H9.4C9.59626 12.1333 9.78592 12.0684 9.92698 11.9509C10.0683 11.8331 10.15 11.6712 10.15 11.5C10.15 11.3288 10.0683 11.1669 9.92698 11.0491C9.78592 10.9316 9.59626 10.8667 9.4 10.8667H5.25V9.8H9.75ZM5.25 2.21667H9.75C10.7605 2.21667 11.7281 2.55125 12.4404 3.14478C13.1523 3.73808 13.55 4.54061 13.55 5.375C13.55 6.20939 13.1523 7.01192 12.4404 7.60522C11.7281 8.19875 10.7605 8.53333 9.75 8.53333H5.25V2.21667Z" fill="white" stroke="white" stroke-width="0.1" />
                                </svg>
                            </div>
                            <div class="checkbox-wrapper-15">
                                <input class="inp-cbx" id="cbx-1" type="checkbox" style="display: none;" value="econom" name="fromClass"/>
                                <label class="cbx" for="cbx-1">
                                  <span>
                                    <svg width="12px" height="9px" viewbox="0 0 12 9">
                                      <polyline points="1 5 4 8 11 1"></polyline>
                                    </svg>
                                  </span>
                                 
                                </label>
                              </div>
                        </div> 
                        @endif
                        @if ($fromRace->cost_bus!=null) 
                        <div class="row_class">
                            <p class="name_class">
                                бизнес
                            </p>
                            {{-- <p class="col">
                                Осталось:9+
                            </p> --}}
                            <div class="pluss">
                                <p class="bagaj">включенный багаж</p>
                                <p class="bagaj">возвратный</p>
                            </div>
                            <div class="price">
                                <p class="cost">
                                   {{$fromRace->cost_bus}}
                                </p>
                                <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M9.75 9.8C11.153 9.8 12.5 9.33563 13.4943 8.507C14.4889 7.67815 15.05 6.55183 15.05 5.375C15.05 4.19817 14.4889 3.07184 13.4943 2.243C12.5 1.41437 11.153 0.95 9.75 0.95H4.5C4.30374 0.95 4.11408 1.01489 3.97302 1.13244C3.83169 1.25022 3.75 1.41211 3.75 1.58333V8.53333H1.7C1.50374 8.53333 1.31408 8.59822 1.17302 8.71578C1.03169 8.83355 0.95 8.99545 0.95 9.16667C0.95 9.33788 1.03169 9.49978 1.17302 9.61756C1.31408 9.73511 1.50374 9.8 1.7 9.8H3.75V10.8667H1.7C1.50374 10.8667 1.31408 10.9316 1.17302 11.0491C1.03169 11.1669 0.95 11.3288 0.95 11.5C0.95 11.6712 1.03169 11.8331 1.17302 11.9509C1.31408 12.0684 1.50374 12.1333 1.7 12.1333H3.75V14.4167C3.75 14.5879 3.83169 14.7498 3.97302 14.8676C4.11408 14.9851 4.30374 15.05 4.5 15.05C4.69626 15.05 4.88592 14.9851 5.02698 14.8676C5.16831 14.7498 5.25 14.5879 5.25 14.4167V12.1333H9.4C9.59626 12.1333 9.78592 12.0684 9.92698 11.9509C10.0683 11.8331 10.15 11.6712 10.15 11.5C10.15 11.3288 10.0683 11.1669 9.92698 11.0491C9.78592 10.9316 9.59626 10.8667 9.4 10.8667H5.25V9.8H9.75ZM5.25 2.21667H9.75C10.7605 2.21667 11.7281 2.55125 12.4404 3.14478C13.1523 3.73808 13.55 4.54061 13.55 5.375C13.55 6.20939 13.1523 7.01192 12.4404 7.60522C11.7281 8.19875 10.7605 8.53333 9.75 8.53333H5.25V2.21667Z" fill="white" stroke="white" stroke-width="0.1" />
                                </svg>
                            </div>
                            <div class="checkbox-wrapper-15">
                                <input class="inp-cbx" id="cbx-2" type="checkbox" style="display: none;"  value="busines" name="fromClass"/>
                                <label class="cbx" for="cbx-2">
                                  <span>
                                    <svg width="12px" height="9px" viewbox="0 0 12 9">
                                      <polyline points="1 5 4 8 11 1"></polyline>
                                    </svg>
                                  </span>
                                 
                                </label>
                              </div>
                        </div>
                        @endif
                        @if ($fromRace->cost_first!=null) 
                        <div class="row_class">
                            <p class="name_class">
                                первый
                            </p>
                            {{-- <p class="col">
                                Осталось:9+
                            </p> --}}
                            <div class="pluss">
                                <p class="bagaj">включенный багаж</p>
                                <p class="bagaj">возвратный</p>
                            </div>
                            <div class="price">
                                <p class="cost">
                                   {{$fromRace->cost_first}}
                                </p>
                                <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M9.75 9.8C11.153 9.8 12.5 9.33563 13.4943 8.507C14.4889 7.67815 15.05 6.55183 15.05 5.375C15.05 4.19817 14.4889 3.07184 13.4943 2.243C12.5 1.41437 11.153 0.95 9.75 0.95H4.5C4.30374 0.95 4.11408 1.01489 3.97302 1.13244C3.83169 1.25022 3.75 1.41211 3.75 1.58333V8.53333H1.7C1.50374 8.53333 1.31408 8.59822 1.17302 8.71578C1.03169 8.83355 0.95 8.99545 0.95 9.16667C0.95 9.33788 1.03169 9.49978 1.17302 9.61756C1.31408 9.73511 1.50374 9.8 1.7 9.8H3.75V10.8667H1.7C1.50374 10.8667 1.31408 10.9316 1.17302 11.0491C1.03169 11.1669 0.95 11.3288 0.95 11.5C0.95 11.6712 1.03169 11.8331 1.17302 11.9509C1.31408 12.0684 1.50374 12.1333 1.7 12.1333H3.75V14.4167C3.75 14.5879 3.83169 14.7498 3.97302 14.8676C4.11408 14.9851 4.30374 15.05 4.5 15.05C4.69626 15.05 4.88592 14.9851 5.02698 14.8676C5.16831 14.7498 5.25 14.5879 5.25 14.4167V12.1333H9.4C9.59626 12.1333 9.78592 12.0684 9.92698 11.9509C10.0683 11.8331 10.15 11.6712 10.15 11.5C10.15 11.3288 10.0683 11.1669 9.92698 11.0491C9.78592 10.9316 9.59626 10.8667 9.4 10.8667H5.25V9.8H9.75ZM5.25 2.21667H9.75C10.7605 2.21667 11.7281 2.55125 12.4404 3.14478C13.1523 3.73808 13.55 4.54061 13.55 5.375C13.55 6.20939 13.1523 7.01192 12.4404 7.60522C11.7281 8.19875 10.7605 8.53333 9.75 8.53333H5.25V2.21667Z" fill="white" stroke="white" stroke-width="0.1" />
                                </svg>
                            </div>
                            <div class="checkbox-wrapper-15">
                                <input class="inp-cbx" id="cbx-3" type="checkbox" style="display: none;" value="first"  name="fromClass"/>
                                <label class="cbx" for="cbx-3">
                                  <span>
                                    <svg width="12px" height="9px" viewbox="0 0 12 9">
                                      <polyline points="1 5 4 8 11 1"></polyline>
                                    </svg>
                                  </span>
                                 
                                </label>
                              </div>
                        </div>
                        @endif
                    </div>
                </div>
                <div class="flex_column_content">
                    <h3 class="name_block">Обратно</h3>
                    <div class="column_flight">
                        <div class="company">
                            @if ($toRace['company']==1)
                    <img src="{{asset('public/assets/img/company/roscosmos.png')}}" alt="company">
                    @endif
                    @if ($toRace['company']==2)
                    <img src="{{asset('public/assets/img/company/space.png')}}" alt="company">
                    @endif
                    @if ($toRace['company']==3)
                    <img src="{{asset('public/assets/img/company/cnsa.png')}}" alt="company">
                    @endif

                    @if ($toRace['company']==4)
                    <img src="{{asset('public/assets/img/company/space.png')}}" alt="company">
                    @endif
        
                            <h4 class="name_company">
                                @if ($toRace['company']==1)
                                Роскосмос
                            @endif
                            @if ($toRace['company']==2)
                            SpaceX
                        @endif
                        @if ($toRace['company']==3)
                        CNSA
                    @endif
                    @if ($toRace['company']==4)
                    BLUE ORIGIN
                @endif
                            </h4>
                        </div>
                        <div class="napravlenie">
                            <div class="info_otkuda">
                                <h4 class="kosmodrom">
                                   {{$toRace->otcuda}}
                                </h4>
                                <p class="time_vilet">
                                    {{$toRace->time_otb}}

                                </p>
                            </div>
                            <svg width="67" height="2" viewBox="0 0 67 2" fill="none" class="line_tuda_obratno" xmlns="http://www.w3.org/2000/svg">
                                <path d="M1 1H66" stroke="white" stroke-linecap="round" stroke-dasharray="6 6" />
                            </svg>
                            <div class="info_otkuda">
                                <h4 class="kosmodrom">
                                    {{$toRace->cuda}}
                                </h4>
                                <p class="time_vilet">
                                    {{$toRace->time_prib}}
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="column_class">
                        @if ($toRace->cost_ec!=null)
                        <div class="row_class">
                         
                            <p class="name_class">
                                эконом(ecofly)
                            </p>
                            {{-- <p class="col">
                                Осталось:9+
                            </p> --}}
                            <div class="pluss">
                                <p class="bagaj">включенный багаж</p>
                                <p class="bagaj">возвратный</p>
                            </div>
                            <div class="price">
                                <p class="cost">
                                    {{$toRace->cost_ec}}
                                </p>
                                <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M9.75 9.8C11.153 9.8 12.5 9.33563 13.4943 8.507C14.4889 7.67815 15.05 6.55183 15.05 5.375C15.05 4.19817 14.4889 3.07184 13.4943 2.243C12.5 1.41437 11.153 0.95 9.75 0.95H4.5C4.30374 0.95 4.11408 1.01489 3.97302 1.13244C3.83169 1.25022 3.75 1.41211 3.75 1.58333V8.53333H1.7C1.50374 8.53333 1.31408 8.59822 1.17302 8.71578C1.03169 8.83355 0.95 8.99545 0.95 9.16667C0.95 9.33788 1.03169 9.49978 1.17302 9.61756C1.31408 9.73511 1.50374 9.8 1.7 9.8H3.75V10.8667H1.7C1.50374 10.8667 1.31408 10.9316 1.17302 11.0491C1.03169 11.1669 0.95 11.3288 0.95 11.5C0.95 11.6712 1.03169 11.8331 1.17302 11.9509C1.31408 12.0684 1.50374 12.1333 1.7 12.1333H3.75V14.4167C3.75 14.5879 3.83169 14.7498 3.97302 14.8676C4.11408 14.9851 4.30374 15.05 4.5 15.05C4.69626 15.05 4.88592 14.9851 5.02698 14.8676C5.16831 14.7498 5.25 14.5879 5.25 14.4167V12.1333H9.4C9.59626 12.1333 9.78592 12.0684 9.92698 11.9509C10.0683 11.8331 10.15 11.6712 10.15 11.5C10.15 11.3288 10.0683 11.1669 9.92698 11.0491C9.78592 10.9316 9.59626 10.8667 9.4 10.8667H5.25V9.8H9.75ZM5.25 2.21667H9.75C10.7605 2.21667 11.7281 2.55125 12.4404 3.14478C13.1523 3.73808 13.55 4.54061 13.55 5.375C13.55 6.20939 13.1523 7.01192 12.4404 7.60522C11.7281 8.19875 10.7605 8.53333 9.75 8.53333H5.25V2.21667Z" fill="white" stroke="white" stroke-width="0.1" />
                                </svg>
                            </div>
                            <div class="checkbox-wrapper-15">
                                <input class="inp-cbx" id="cbx-4" type="checkbox" style="display: none;" value="econom" name="toClass"/>
                                <label class="cbx" for="cbx-4">
                                  <span>
                                    <svg width="12px" height="9px" viewbox="0 0 12 9">
                                      <polyline points="1 5 4 8 11 1"></polyline>
                                    </svg>
                                  </span>
                                 
                                </label>
                              </div>
                        </div> 
                        @endif
                        @if ($toRace->cost_bus!=null) 
                        <div class="row_class">
                            <p class="name_class">
                                бизнес
                            </p>
                            {{-- <p class="col">
                                Осталось:9+
                            </p> --}}
                            <div class="pluss">
                                <p class="bagaj">включенный багаж</p>
                                <p class="bagaj">возвратный</p>
                            </div>
                            <div class="price">
                                <p class="cost">
                                   {{$toRace->cost_bus}}
                                </p>
                                <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M9.75 9.8C11.153 9.8 12.5 9.33563 13.4943 8.507C14.4889 7.67815 15.05 6.55183 15.05 5.375C15.05 4.19817 14.4889 3.07184 13.4943 2.243C12.5 1.41437 11.153 0.95 9.75 0.95H4.5C4.30374 0.95 4.11408 1.01489 3.97302 1.13244C3.83169 1.25022 3.75 1.41211 3.75 1.58333V8.53333H1.7C1.50374 8.53333 1.31408 8.59822 1.17302 8.71578C1.03169 8.83355 0.95 8.99545 0.95 9.16667C0.95 9.33788 1.03169 9.49978 1.17302 9.61756C1.31408 9.73511 1.50374 9.8 1.7 9.8H3.75V10.8667H1.7C1.50374 10.8667 1.31408 10.9316 1.17302 11.0491C1.03169 11.1669 0.95 11.3288 0.95 11.5C0.95 11.6712 1.03169 11.8331 1.17302 11.9509C1.31408 12.0684 1.50374 12.1333 1.7 12.1333H3.75V14.4167C3.75 14.5879 3.83169 14.7498 3.97302 14.8676C4.11408 14.9851 4.30374 15.05 4.5 15.05C4.69626 15.05 4.88592 14.9851 5.02698 14.8676C5.16831 14.7498 5.25 14.5879 5.25 14.4167V12.1333H9.4C9.59626 12.1333 9.78592 12.0684 9.92698 11.9509C10.0683 11.8331 10.15 11.6712 10.15 11.5C10.15 11.3288 10.0683 11.1669 9.92698 11.0491C9.78592 10.9316 9.59626 10.8667 9.4 10.8667H5.25V9.8H9.75ZM5.25 2.21667H9.75C10.7605 2.21667 11.7281 2.55125 12.4404 3.14478C13.1523 3.73808 13.55 4.54061 13.55 5.375C13.55 6.20939 13.1523 7.01192 12.4404 7.60522C11.7281 8.19875 10.7605 8.53333 9.75 8.53333H5.25V2.21667Z" fill="white" stroke="white" stroke-width="0.1" />
                                </svg>
                            </div>
                            <div class="checkbox-wrapper-15">
                                <input class="inp-cbx" id="cbx-5" type="checkbox" style="display: none;" value="busines" name="toClass"/>
                                <label class="cbx" for="cbx-5">
                                  <span>
                                    <svg width="12px" height="9px" viewbox="0 0 12 9">
                                      <polyline points="1 5 4 8 11 1"></polyline>
                                    </svg>
                                  </span>
                                 
                                </label>
                              </div>
                        </div>
                        @endif
                        @if ($toRace->cost_first!=null) 
                        <div class="row_class">
                            <p class="name_class">
                                первый
                            </p>
                            {{-- <p class="col">
                                Осталось:9+
                            </p> --}}
                            <div class="pluss">
                                <p class="bagaj">включенный багаж</p>
                                <p class="bagaj">возвратный</p>
                            </div>
                            <div class="price">
                                <p class="cost">
                                   {{$toRace->cost_first}}
                                </p>
                                <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M9.75 9.8C11.153 9.8 12.5 9.33563 13.4943 8.507C14.4889 7.67815 15.05 6.55183 15.05 5.375C15.05 4.19817 14.4889 3.07184 13.4943 2.243C12.5 1.41437 11.153 0.95 9.75 0.95H4.5C4.30374 0.95 4.11408 1.01489 3.97302 1.13244C3.83169 1.25022 3.75 1.41211 3.75 1.58333V8.53333H1.7C1.50374 8.53333 1.31408 8.59822 1.17302 8.71578C1.03169 8.83355 0.95 8.99545 0.95 9.16667C0.95 9.33788 1.03169 9.49978 1.17302 9.61756C1.31408 9.73511 1.50374 9.8 1.7 9.8H3.75V10.8667H1.7C1.50374 10.8667 1.31408 10.9316 1.17302 11.0491C1.03169 11.1669 0.95 11.3288 0.95 11.5C0.95 11.6712 1.03169 11.8331 1.17302 11.9509C1.31408 12.0684 1.50374 12.1333 1.7 12.1333H3.75V14.4167C3.75 14.5879 3.83169 14.7498 3.97302 14.8676C4.11408 14.9851 4.30374 15.05 4.5 15.05C4.69626 15.05 4.88592 14.9851 5.02698 14.8676C5.16831 14.7498 5.25 14.5879 5.25 14.4167V12.1333H9.4C9.59626 12.1333 9.78592 12.0684 9.92698 11.9509C10.0683 11.8331 10.15 11.6712 10.15 11.5C10.15 11.3288 10.0683 11.1669 9.92698 11.0491C9.78592 10.9316 9.59626 10.8667 9.4 10.8667H5.25V9.8H9.75ZM5.25 2.21667H9.75C10.7605 2.21667 11.7281 2.55125 12.4404 3.14478C13.1523 3.73808 13.55 4.54061 13.55 5.375C13.55 6.20939 13.1523 7.01192 12.4404 7.60522C11.7281 8.19875 10.7605 8.53333 9.75 8.53333H5.25V2.21667Z" fill="white" stroke="white" stroke-width="0.1" />
                                </svg>
                            </div>
                            <div class="checkbox-wrapper-15">
                                <input class="inp-cbx" id="cbx-6" type="checkbox" style="display: none;" value="first"  name="toClass"/>
                                <label class="cbx" for="cbx-6">
                                  <span>
                                    <svg width="12px" height="9px" viewbox="0 0 12 9">
                                      <polyline points="1 5 4 8 11 1"></polyline>
                                    </svg>
                                  </span>
                                 
                                </label>
                              </div>
                        </div>
                        @endif
                    </div>
                </div>
            </div>
            <button type="submit" class="continie white_cur">продолжить</button>
        </form>
    </div>
</main>
@endsection('content')