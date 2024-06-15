{{-- <header>
    <div class="container">
        <div class="header_content">
            <div class="logo">
                ERLAN
            </div>
            <nav>
                <div class="nav_item" style="display: flex;">
                    <svg width="28" height="28" class="desktop" viewBox="0 0 28 28" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M13.7498 6.1001V21.4001M17.5748 10.5626C17.5748 8.8031 15.8625 7.3751 13.7498 7.3751C11.6371 7.3751 9.9248 8.8031 9.9248 10.5626C9.9248 12.3221 11.6371 13.7501 13.7498 13.7501C15.8625 13.7501 17.5748 15.1781 17.5748 16.9376C17.5748 18.6971 15.8625 20.1251 13.7498 20.1251C11.6371 20.1251 9.9248 18.6971 9.9248 16.9376" stroke="white" stroke-width="2" stroke-linecap="round" />
                        <path d="M7.375 2.70597C9.31239 1.58511 11.5117 0.996566 13.75 1.00002C20.7918 1.00002 26.5 6.70819 26.5 13.75C26.5 20.7918 20.7918 26.5 13.75 26.5C6.70818 26.5 1 20.7918 1 13.75C1 11.4282 1.62093 9.24927 2.70595 7.37502" stroke="white" stroke-width="2" stroke-linecap="round" />
                        </svg>
                    <p class="name_valute">
                        USD.
                    </p>
                </div>
                <a href="./src/pages/catalog_hotel.html" class="time_item">
                    каталог
                </a>
                <button class="sidebar_toggler">
                    <div class="">
                        <svg width="78" height="15" viewBox="0 0 78 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M2 2H76" stroke="white" stroke-width="4" stroke-linecap="round" />
                            <path d="M2 13.5H76" stroke="white" stroke-width="4" stroke-linecap="round" />
                        </svg>
                    </div> <!-- Иконка бургера -->
                </button>
                <div class="sidebar" id="sidebar">
                    <span class="close_btn" id="close_btn">&times;</span><!-- Кнопка закрытия -->
                    <div class="menu_burder_contetn">
                        @auth
                        <a href="/profile" class="profile">
                            <h5 class="name_user">
                                {{auth()->user()->surname}} {{auth()->user()->name}}
                            </h5>
                            <div class="profile_link">
                                <p class="profile_p">
                                    профиль
                                </p>
                                <svg width="9" height="15" viewBox="0 0 9 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M1 1L8 7.5L1 14"  stroke-width="1.1" stroke-linecap="square" stroke-linejoin="round" />
                                </svg>
                            </div>
                        </a>
                            
                        @endauth
                    
                        <div class="gap user">
                            <a href="/" class="burger_item">забронировать</a>
                            <a href="" class="burger_item">мои брони</a>
                            <a href="" class="burger_item">мои пассажиры</a>
                        </div>
                        @if (!auth()->user())
                        <div class="gap nouser">
                            <a href="/sign-in" class="burger_item">войти в аккаунт</a>
                       
                        </div>
                        @endif
                      
                        <hr class="line_burger">
                        <div class="gap">
                            <a href="" class="little_text">о компании</a>
                            <a href="" class="little_text">новости</a>
                            <a href="" class="little_text">частые вопросы</a>
                        </div>
                        
                    </div>
                </div>
                <div class="content" id="content">
                 
                </div>
        
            </nav>
        </div>
    </div>
</header> --}}

<div id="cursor" class="desktop"></div>
<div id="aura" class="desktop"></div>
<header>
    <div class="container">
        <div class="header_content">
            <div class="logo">
                ERLAN
            </div>
            <nav>
             
                <div class="nav_item" style="display: flex;">
                    <svg width="28" height="28" class="desktop" viewBox="0 0 28 28" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M13.7498 6.1001V21.4001M17.5748 10.5626C17.5748 8.8031 15.8625 7.3751 13.7498 7.3751C11.6371 7.3751 9.9248 8.8031 9.9248 10.5626C9.9248 12.3221 11.6371 13.7501 13.7498 13.7501C15.8625 13.7501 17.5748 15.1781 17.5748 16.9376C17.5748 18.6971 15.8625 20.1251 13.7498 20.1251C11.6371 20.1251 9.9248 18.6971 9.9248 16.9376" stroke="white" stroke-width="2" stroke-linecap="round" />
                        <path d="M7.375 2.70597C9.31239 1.58511 11.5117 0.996566 13.75 1.00002C20.7918 1.00002 26.5 6.70819 26.5 13.75C26.5 20.7918 20.7918 26.5 13.75 26.5C6.70818 26.5 1 20.7918 1 13.75C1 11.4282 1.62093 9.24927 2.70595 7.37502" stroke="white" stroke-width="2" stroke-linecap="round" />
                        </svg>
                    <p class="name_valute">
                        USD.
                    </p>
                </div>
                <div class="nav_item" tyle="display: flex;">
                    <svg width="32" class="desktop" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M16 31C24.2843 31 31 24.2843 31 16C31 7.71573 24.2843 1 16 1C7.71573 1 1 7.71573 1 16C1 24.2843 7.71573 31 16 31Z" stroke="white" stroke-width="2" />
                        <path d="M11 19.2H16.1429M12.7143 16V9.92C12.7143 9.6224 12.7143 9.4736 12.7349 9.3504C12.7913 9.01629 12.9598 8.70747 13.216 8.46829C13.4723 8.22912 13.8032 8.0719 14.1611 8.0192C14.2914 8 14.4526 8 14.7714 8H18.7143C19.8509 8 20.941 8.42143 21.7447 9.17157C22.5485 9.92172 23 10.9391 23 12C23 13.0609 22.5485 14.0783 21.7447 14.8284C20.941 15.5786 19.8509 16 18.7143 16H12.7143ZM12.7143 16V24M12.7143 16H11" stroke="white" stroke-width="2" stroke-linecap="round" />
                    </svg>
                    <p class="name_valute">
                        RUB.
                    </p>
                </div>
                
                <div class="nav_item" tyle="display: flex;">
                    <svg width="30" height="30" class="desktop" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M8.56025 5.98378C8.68359 5.89574 8.82306 5.83285 8.9707 5.79871C9.11835 5.76457 9.27127 5.75984 9.42074 5.78481C9.57021 5.80977 9.7133 5.86394 9.84183 5.94421C9.97037 6.02448 10.0818 6.12928 10.1699 6.25263L15.9391 14.3296C16.1169 14.5787 16.1885 14.8882 16.138 15.19C16.0876 15.4919 15.9193 15.7614 15.6702 15.9392C15.4211 16.117 15.1116 16.1885 14.8098 16.1381C14.5079 16.0877 14.2384 15.9194 14.0606 15.6703L8.2914 7.5934C8.20335 7.47006 8.14046 7.33059 8.10632 7.18294C8.07218 7.0353 8.06746 6.88238 8.09243 6.73291C8.11739 6.58344 8.17155 6.44035 8.25182 6.31181C8.33209 6.18328 8.4369 6.07181 8.56025 5.98378Z" fill="white" />
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M21.4397 5.98378C21.3164 5.89574 21.1769 5.83285 21.0293 5.79871C20.8816 5.76457 20.7287 5.75984 20.5793 5.78481C20.4298 5.80977 20.2867 5.86394 20.1582 5.94421C20.0296 6.02448 19.9182 6.12928 19.8301 6.25263L14.0609 14.3296C13.9729 14.4529 13.91 14.5924 13.8758 14.74C13.8417 14.8877 13.837 15.0406 13.862 15.19C13.9124 15.4919 14.0806 15.7614 14.3297 15.9392C14.5788 16.117 14.8884 16.1885 15.1902 16.1381C15.3397 16.1131 15.4828 16.059 15.6113 15.9787C15.7399 15.8985 15.8513 15.7937 15.9394 15.6703L21.7086 7.5934C21.7966 7.47006 21.8595 7.33059 21.8937 7.18294C21.9278 7.0353 21.9325 6.88238 21.9076 6.73291C21.8826 6.58344 21.8284 6.44035 21.7482 6.31181C21.6679 6.18328 21.5631 6.07181 21.4397 5.98378Z" fill="white" />
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M8.65381 16.1538C8.65381 15.8478 8.77537 15.5543 8.99176 15.338C9.20815 15.1216 9.50164 15 9.80765 15H20.1923C20.4983 15 20.7918 15.1216 21.0082 15.338C21.2246 15.5543 21.3461 15.8478 21.3461 16.1538C21.3461 16.4599 21.2246 16.7534 21.0082 16.9697C20.7918 17.1861 20.4983 17.3077 20.1923 17.3077H9.80765C9.50164 17.3077 9.20815 17.1861 8.99176 16.9697C8.77537 16.7534 8.65381 16.4599 8.65381 16.1538Z" fill="white" />
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M15 13.8462C15.3061 13.8462 15.5995 13.9678 15.8159 14.1841C16.0323 14.4005 16.1539 14.694 16.1539 15V23.077C16.1539 23.383 16.0323 23.6765 15.8159 23.8929C15.5995 24.1092 15.3061 24.2308 15 24.2308C14.694 24.2308 14.4005 24.1092 14.1841 23.8929C13.9678 23.6765 13.8462 23.383 13.8462 23.077V15C13.8462 14.694 13.9678 14.4005 14.1841 14.1841C14.4005 13.9678 14.694 13.8462 15 13.8462Z" fill="white" />
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M15 27.6923C22.0096 27.6923 27.6923 22.0096 27.6923 15C27.6923 7.99039 22.0096 2.30769 15 2.30769C7.99039 2.30769 2.30769 7.99039 2.30769 15C2.30769 22.0096 7.99039 27.6923 15 27.6923ZM15 30C23.2846 30 30 23.2846 30 15C30 6.71538 23.2846 0 15 0C6.71538 0 0 6.71538 0 15C0 23.2846 6.71538 30 15 30Z" fill="white" />
                        </svg>
                    <p class="name_valute">
                        CNY.
                    </p>
                </div>
                    

                <button class="sidebar_toggler sidebar_togglermob">
                    <div class="">
                        <svg width="78" class="desktop" height="15" viewBox="0 0 78 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M2 2H76" stroke="white" stroke-width="4" stroke-linecap="round" />
                            <path d="M2 13.5H76" stroke="white" stroke-width="4" stroke-linecap="round" />
                        </svg>
                        <svg width="55" height="12" class="mobile" viewBox="0 0 55 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M1.21875 2H53.0395" stroke="white" stroke-width="2.10084" stroke-linecap="round" />
                            <path d="M1.21875 10.0742H53.0395" stroke="white" stroke-width="2.10084" stroke-linecap="round" />
                          </svg>
                    </div> <!-- Иконка бургера -->
                </button>
                <div class="sidebar desktop" id="sidebar">
                    <span class="close_btn" id="close_btn">&times;</span><!-- Кнопка закрытия -->
                    <div class="menu_burder_contetn">
                        @auth
                        <a href="/profile" class="profile">
                            <h5 class="name_user">
                                {{auth()->user()->surname}} {{auth()->user()->name}}
                            </h5>
                            <div class="profile_link">
                                <p class="profile_p">
                                    профиль
                                </p>
                                <svg width="9" height="15" viewBox="0 0 9 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M1 1L8 7.5L1 14"  stroke-width="1.1" stroke-linecap="square" stroke-linejoin="round" />
                                </svg>
                            </div>
                        </a>
                            
                        @endauth
                        <div class="gap user">
                            <a href="/" class="burger_item">забронировать</a>
                            <a href="" class="burger_item">мои брони</a>
                            <a href="" class="burger_item">мои пассажиры</a>
                        </div>
                        <div class="gap nouser">
                            <a href="/sign-in" class="burger_item">войти в аккаунт</a>
                       
                        </div>
                        <hr class="line_burger">
                        <div class="gap">
                            <a href="/about" class="little_text">о компании</a>
                            <a href="" class="little_text">новости</a>
                            <a href="" class="little_text">частые вопросы</a>
                        </div>
                        
                    </div>
                </div>
                <div class="sidebar mobile" id="sidebarmob">
                    <span class="close_btn" id="close_btnmob">&times;</span><!-- Кнопка закрытия -->
                    <div class="menu_burder_contetn">
                        @auth
                        <a href="/profile" class="profile">
                            <h5 class="name_user">
                                {{auth()->user()->surname}} {{auth()->user()->name}}
                            </h5>
                            <div class="profile_link">
                                <p class="profile_p">
                                    профиль
                                </p>
                                <svg width="9" height="15" viewBox="0 0 9 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M1 1L8 7.5L1 14"  stroke-width="1.1" stroke-linecap="square" stroke-linejoin="round" />
                                </svg>
                            </div>
                        </a>
                            
                        @endauth
                        <div class="gap user">
                            <a href="/" class="burger_item">забронировать</a>
                            <a href="" class="burger_item">мои брони</a>
                            <a href="" class="burger_item">мои пассажиры</a>
                        </div>
                        <div class="gap nouser">
                            <a href="./src/pages/autorization.html" class="burger_item">войти в аккаунт</a>
                       
                        </div>
                        <hr class="line_burger">
                        <div class="gap">
                            <a href="/about" class="little_text">о компании</a>
                            <a href="" class="little_text">новости</a>
                            <a href="" class="little_text">частые вопросы</a>
                        </div>
                        
                    </div>
                </div>
                <div class="content desktop" id="content">
                 
                </div>
                <div class="content mobile" id="contentmob">
                 
                </div>
        
            </nav>
        </div>
    </div>
</header>