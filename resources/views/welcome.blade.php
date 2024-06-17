
   
    
    
    @extends('loyauts.app')
    @section('title')
    Erlan
    @endsection
    @section('content')
   
    
    <img src="{{asset('/assets/img/background/banner.png')}}" class="banner_img" alt="">
    
    <img src="{{asset('/assets/img/background/mob.png')}}" class="banner_img desktop" alt="">\
    <img src="{{asset('/assets/img/background/ship.png')}}" class="ship_banner desktop" alt="">
    <div class="svg-container">

        <svg width="45" height="36" viewBox="0 0 45 36" fill="none" xmlns="http://www.w3.org/2000/svg">
            <g filter="url(#filter0_f_747_4)">
              <path d="M38.4516 14.2034C34.4202 19.297 11.5957 31.0692 4.97437 31.1893C5.44181 24.754 22.5985 12.1307 26.63 7.03706C30.6614 1.94345 30.9633 4.2161 34.6551 7.13803C38.3469 10.06 42.483 9.10982 38.4516 14.2034Z" fill="url(#paint0_linear_747_4)" />
            </g>
            <defs>
              <filter id="filter0_f_747_4" x="0.974609" y="0.0185547" width="43.1338" height="35.1709" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                <feFlood flood-opacity="0" result="BackgroundImageFix" />
                <feBlend mode="normal" in="SourceGraphic" in2="BackgroundImageFix" result="shape" />
                <feGaussianBlur stdDeviation="2" result="effect1_foregroundBlur_747_4" />
              </filter>
              <linearGradient id="paint0_linear_747_4" x1="34.655" y1="7.13783" x2="20.0559" y2="25.5834" gradientUnits="userSpaceOnUse">
                <stop stop-color="#FF8D07" />
                <stop offset="1" stop-color="#FFC24A" />
              </linearGradient>
            </defs>
        </svg>
    </div>
    <div class="svg-container navigate">
        <svg width="34" height="37" viewBox="0 0 34 37" fill="none" xmlns="http://www.w3.org/2000/svg">
            <g opacity="0.7" filter="url(#filter0_f_747_5)">
              <path d="M27.8737 15.7754C25.3562 19.7812 7.638 33.6379 4.82213 31.8682C2.00627 30.0985 14.393 13.0992 17.6766 9.36686C20.1941 5.36108 24.5176 3.54836 27.3335 5.31804C30.1494 7.08772 30.3912 11.7697 27.8737 15.7754Z" fill="#FF8D07" />
            </g>
            <defs>
              <filter id="filter0_f_747_5" x="0.40918" y="0.639648" width="33.2051" height="35.3838" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                <feFlood flood-opacity="0" result="BackgroundImageFix" />
                <feBlend mode="normal" in="SourceGraphic" in2="BackgroundImageFix" result="shape" />
                <feGaussianBlur stdDeviation="2" result="effect1_foregroundBlur_747_5" />
              </filter>
            </defs>
          </svg>
    </div>

    <main>
        <div class="banner">
            <div class="container">
                <div class="banner_content">
                    <h1 class="banner_main_text">
                        Вдали от дома
                    </h1>
                    <h3 class="banner_text">
                        "Это небольшой шаг для человека, но гигантский скачок для человечества" - Нил Армстронг
                    </h3>
                    <div class="desktop">
                        <form action="/searchMain" class="banner_form" method="POST">      
                            @csrf
                            <select name="from"  class="banner_inp_one" id="">
                                <option value disabled selected>Откуда</option>
                                <option>байконур</option>
                                <option>Starbase</option>
                                <option>Вэньчан</option>
                                <option>Канаверал</option>
                            </select>
                            <select name="to"  class="banner_inp_one" id="">
                                <option value disabled selected>Куда</option>
                                <option>луна</option>
                                <option>Международная космическая станция (МКС)</option>
                                <option>Китайская модульная космическая станция (cms)</option>
                                <option>Космическая станция Axiom Space</option>
                            </select>
                
                            <input type="date" name="date" class="banner_inp_two" placeholder="период вылета">
                            <input type="text" name="nights" class="banner_inp_three" placeholder="ночей">
                            <input type="text" name="tourists" class="banner_inp_three" placeholder="чел">
                            <button type="submit" class="banner_btn">найти</button>
                        </form>
                    </div>
                    <div class="mobile">
                        <form action="/searchMain" class="banner_form" method="POST">      
                            @csrf
                            <select name="from"  class="banner_inp_one" id="">
                                <option value disabled selected>Откуда</option>
                                <option>байконур</option>
                                <option>Starbase</option>
                                <option>Вэньчан</option>
                                <option>Канаверал</option>
                            </select>
                            <select name="to"  class="banner_inp_one" id="">
                                <option value disabled selected>Куда</option>
                                <option>луна</option>
                                <option>Международная космическая станция (МКС)</option>
                                <option>Китайская модульная космическая станция (cms)</option>
                                <option>Космическая станция Axiom Space</option>
                            </select>
                
                            <input type="date" name="date" class="banner_inp_two" placeholder="период вылета">
                            <input type="text" name="nights" class="banner_inp_three" placeholder="ночей">
                            <input type="text" name="tourists" class="banner_inp_three" placeholder="чел">
                            <button type="submit" class="banner_btn">найти</button>
                        </form>
                    </div>
                </div>
            </div>
        </div> 
        <div class="all_main_page_info">
            
            
            

            <img src="{{asset('/assets/img/background/lines.svg')}}" class="abslolute desktop" alt="">
            <img src="{{asset('/assets/img/background/moon_main.png')}}" class="moon_main_page_img" alt="">
            <img src="{{asset('/assets/img/background/starship_main.png')}}" class="starship_main" alt="">
            <div class="container">
                <div class="top_farcts fact1">
                    <h2 class="name_page_block ">ИНТЕРЕСНЫЕ ФАКТЫ</h2>
                    <p class="text_fact width_fact">Поверхность Луны покрыта лунными морями, кратерами и горами, создавая уникальные и захватывающие пейзажи. <br><br>
                        Кратеры общей высотой до 20 км и крупные горы, такие как Лунные Альпы и Каукс, делают Луну зрелищной достопримечательностью для туристов.
                    </p>
                </div>
                <div class="top_farcts fact2">
                    <h2 class="name_page_block">климат</h2>
                    <p class="text_fact climat_width">Луна не имеет атмосферы и магнитосферы, что означает, что она подвержена экстремальным температурным колебаниям — от жары до холода. <br><br>
                        Дневная температура на Луне может достигать +127°C, в то время как ночью она падает до -173°C.
                    </p>
                </div>
                <div class="top_farcts fact3">
                    <h2 class="name_page_block short_width_name">полёт на “звездный взлёт”</h2>
                    <p class="text_fact short_width">первый Космический корабль "Звездный Взлет" созданый, чтобы предоставить неповторимый комфорт и безопасность для туристов в их захватывающем путешествии к Луне.
                    </p>
                </div>
            </div>
        </div>
    </main>
  
@endsection('content');