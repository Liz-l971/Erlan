@extends('loyauts.app')
@section('title')
   О компании
@endsection
@section('content')
<main>
    <div class="container">
        <div class="about_company_block">
            <div class="about_content">
                <div class="block_all_info_about_broni">
                    <div class="bottom_block_border position">
                        <div class="bottom_block_border_content position">
                            <h4 class="main_name_bl">
                                компании
                            </h4>
                            <div class="tab">
                                <button class="tablinks active" onclick="openCity(event, 'London')">SPACEX</button>
                                <button class="tablinks" onclick="openCity(event, 'Pekin')">CNSA</button>
                                <button class="tablinks" onclick="openCity(event, 'Paris')">BLUE ORIGIN</button>
                                <button class="tablinks" onclick="openCity(event, 'Tokyo')">ROSCOSMOS</button>
                                

                            </div>

                        </div>
                    </div>
                </div>
                <div id="London" class="tabcontent block">
                    <div class="block_add_turist">
                        <div class="block_content_add_turist">
                            <div class="qweweweq">
                                <h4 class="name_block">
                                    SpaceX
                                </h4>
                                <p class="main_info_about_company">
                                    Space Exploration Technologies Corporation, известная как SpaceX, является ведущим разработчиком и производителем космической техники. Основав в 2002 году, SpaceX с тех пор постоянно прокладывает новые пути в области космических технологий и туризма, зарекомендовав себя как одна из первых коммерческих компаний, занимающихся отправкой туристов на Луну.


                                    Преимущества

Передовые технологии: SpaceX известна своими инновациями, такими как многоразовые ракеты Falcon и космический корабль Dragon, предоставляющими безопасные и экономически эффективные решения для космических путешествий .

Высокая надежность: Благодаря многочисленным успешным запускам и миссиям, компания заслужила доверие и признание во всем мире.

Квалифицированная команда: Команда SpaceX состоит из лучших специалистов в области аэрокосмической инженерии, что обеспечивает высочайший уровень безопасности и комфорта для туристов
                                </p>
                                <div class="block_ships_flex">
                                    @foreach ($spacex as $item)
                                    <div class="cart_ship">
                                        <div class="cart_ship_content">
                                            <div class="slider" id="slider-5">
                                                <!-- слайды -->
                                                <div class="slide">
                                                    
                                                    <img src="/storage/ships/{{$item->img_one}}" class="ship" alt="">
                                                </div>
                                                <div class="slide">
                                                    <img src="/storage/ships/{{$item->img_two}}" class="ship" alt="">
                                                </div>
                                                <div class="slide">
                                                    <img src="/storage/ships/{{$item->img_three}}" class="ship" alt="">
                                                </div>
                                                <!-- стрелки -->
                                                <div class="arrow left">
                                                    <i class="fas fa-chevron-left"></i>
                                                </div>
                                                <div class="arrow right">
                                                    <i class="fas fa-chevron-right"></i>
                                                </div>
                                            </div>
                                            
                                            <p class="name_ship">
                                                {{$item->name}}
                                            </p>
                                            <p class="opis_ship">
                                                {{$item->description}}
                                            </p>
                                        </div>
                                        
                                    </div>
                                    @endforeach
                                   
                                 
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
                                    CNSA (Китайское Национальное Космическое Управление)
                                </h4>
                                <p class="main_info_about_company">
                                    Китайское Национальное Космическое Управление (CNSA) активно занимается исследованиями и освоением космоса с момента своего основания в 1993 году. CNSA быстро завоевала репутацию надежного и амбициозного игрока на международной космической арене, предлагающего туры на Луну для туристов.

                                    Преимущества
                                    
                                    Инновационные технологии: CNSA активно использует новейшие космические телескопы и карго ракеты для обеспечения успешных миссий.
                                    Экономичность: Китай предлагает конкурентные цены на космические туры благодаря государственной поддержке и масштабам производства.
                                    Комфорт и безопасность: Высококлассные космические корабли оснащены всеми необходимыми системами для обеспечения комфорта и безопасности космических туристов
                                </p>
                                <div class="block_ships_flex">
                                    @foreach ($cnsa as $item)
                                    <div class="cart_ship">
                                        <div class="cart_ship_content">
                                            <div class="slider" id="slider-5">
                                                <!-- слайды -->
                                                <div class="slide">
                                                    
                                                    <img src="/storage/ships/{{$item->img_one}}" class="ship" alt="">
                                                </div>
                                                <div class="slide">
                                                    <img src="/storage/ships/{{$item->img_two}}" class="ship" alt="">
                                                </div>
                                                <div class="slide">
                                                    <img src="/storage/ships/{{$item->img_three}}" class="ship" alt="">
                                                </div>
                                                <!-- стрелки -->
                                                <div class="arrow left">
                                                    <i class="fas fa-chevron-left"></i>
                                                </div>
                                                <div class="arrow right">
                                                    <i class="fas fa-chevron-right"></i>
                                                </div>
                                            </div>
                                            
                                            <p class="name_ship">
                                                {{$item->name}}
                                            </p>
                                            <p class="opis_ship">
                                                {{$item->description}}
                                            </p>
                                        </div>
                                        
                                    </div>
                                    @endforeach
                                </div>
                            </div>
                           
                        </div>
                    </div>
                </div>          
                <div id="Paris" class="tabcontent">
                    <div class="block_add_turist">
                        <div class="block_content_add_turist">
                            <div class="qweweweq">
                                <h4 class="name_block">
                                    Blue Origin
                                </h4>
                                <p class="main_info_about_company">
                                    Основанная Джеффом Безосом, компания Blue Origin с 2000 года занимается разработкой многоразовых ракет и космических систем. Ее миссия — сделать космос доступным для всех, и в рамках этой миссии компания уже давно занимается организацией полетов туристов на Луну.

                                    Преимущества
                                    
                                    Экологичность: Blue Origin уделяет особое внимание разработке экологически чистых технологий для космических полетов.
                                    Комфортные условия полетов: Капсулы Blue Origin оснащены большими иллюминаторами и просторными кабинами, что делает путешествие на Луну максимально приятным и захватывающим.
                                    Высокий уровень безопасности: Многоразовые ракеты New Shepard и New Glenn проходят строгие проверки безопасности на каждом этапе полета
                                </p>
                                <div class="block_ships_flex">
                                    @foreach ($blue as $item)
                                    <div class="cart_ship">
                                        <div class="cart_ship_content">
                                            <div class="slider" id="slider-5">
                                                <!-- слайды -->
                                                <div class="slide">
                                                    
                                                    <img src="/storage/ships/{{$item->img_one}}" class="ship" alt="">
                                                </div>
                                                <div class="slide">
                                                    <img src="/storage/ships/{{$item->img_two}}" class="ship" alt="">
                                                </div>
                                                <div class="slide">
                                                    <img src="/storage/ships/{{$item->img_three}}" class="ship" alt="">
                                                </div>
                                                <!-- стрелки -->
                                                <div class="arrow left">
                                                    <i class="fas fa-chevron-left"></i>
                                                </div>
                                                <div class="arrow right">
                                                    <i class="fas fa-chevron-right"></i>
                                                </div>
                                            </div>
                                            
                                            <p class="name_ship">
                                                {{$item->name}}
                                            </p>
                                            <p class="opis_ship">
                                                {{$item->description}}
                                            </p>
                                        </div>
                                        
                                    </div>
                                    @endforeach
                                </div>
                            </div>
                           
                        </div>
                    </div>
                </div> 
                <div id="Tokyo" class="tabcontent">
                    <div class="block_add_turist">
                        <div class="block_content_add_turist">
                            <div class="qweweweq">
                                <h4 class="name_block">
                                    Роскосмос
                                </h4>
                                <p class="main_info_about_company">
                                    Роскосмос, являясь государственной корпорацией Российской Федерации, с момента его основания в 1992 году активно занимается развитием космических технологий и туризма. Роскосмос — один из главных игроков на международной арене, обеспечивающий межпланетные путешествия, включая маршруты на Луну.

Преимущества

Богатый опыт и наследие: С многолетним опытом освоения космоса, включая запуск первых спутников и полеты человека в космос, Роскосмос предлагает надежные и проверенные решения для космических туров.
Доступные цены: Поддержка государства позволяет устанавливать конкурентные цены на туры, делая их доступными для широкого круга туристов.
Безопасность и контроль качества: Все миссии под строгим контролем ведущих российских специалистов и с использованием передовых технологий
                                </p>
                                <div class="block_ships_flex">
                                    @foreach ($ros as $item)
                                    <div class="cart_ship">
                                        <div class="cart_ship_content">
                                            <div class="slider" id="slider-5">
                                                <!-- слайды -->
                                                <div class="slide">
                                                    
                                                    <img src="/storage/ships/{{$item->img_one}}" class="ship" alt="">
                                                </div>
                                                <div class="slide">
                                                    <img src="/storage/ships/{{$item->img_two}}" class="ship" alt="">
                                                </div>
                                                <div class="slide">
                                                    <img src="/storage/ships/{{$item->img_three}}" class="ship" alt="">
                                                </div>
                                                <!-- стрелки -->
                                                <div class="arrow left">
                                                    <i class="fas fa-chevron-left"></i>
                                                </div>
                                                <div class="arrow right">
                                                    <i class="fas fa-chevron-right"></i>
                                                </div>
                                            </div>
                                            
                                            <p class="name_ship">
                                                {{$item->name}}
                                            </p>
                                            <p class="opis_ship">
                                                {{$item->description}}
                                            </p>
                                        </div>
                                        
                                    </div>
                                    @endforeach
                                </div>
                            </div>
                           
                        </div>
                    </div>
                </div> 
            </div>
        </div>
    </div>
</main>
@endsection