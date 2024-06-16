<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <style>
        @charset "UTF-8";

        * {
            margin: 0;
            padding: 0;
            -webkit-box-sizing: border-box;
            box-sizing: border-box;
            list-style: none;
            text-decoration: none;
            outline: 0 !important;
            /* cursor: none; */
        }

        button::-moz-focus-inner {
            border: 0;
        }

        button,
        button:active,
        button:focus {
            border: none;
        }

        input[type=date]::-webkit-inner-spin-button,
        input[type=date]::-webkit-calendar-picker-indicator {
            display: none;
        }

        input[type=date]::-moz-appearance {
            -moz-appearance: none;
            appearance: none;
        }

        ::-moz-focus-outer,
        ::-moz-focus-inner {
            border: 0;
            padding: 0;
        }

        @font-face {
            font-family: "MullerLight";
            src: url(../fonts/MullerLight.ttf);
        }

        @font-face {
            font-family: "MullerMedium";
            src: url(../fonts/MullerMedium.ttf);
        }

        @font-face {
            font-family: "MullerRegular";
            src: url(../fonts/MullerRegular.ttf);
        }

        @font-face {
            font-family: "MullerUltraLight";
            src: url(../fonts/MullerUltraLight.ttf);
        }

        body {
            background-color: #000000;
            width: 100%;
            max-width: 100%;
            overflow-x: hidden;
        }

        .main div,
        p,
        a,
        h1,
        h2,
        h3,
        h4,
        h5 {
            color: white;
        }

        .cursor {
            width: 3px;
            border-left: 0.1em solid rgb(225, 225, 225);
            /* Стиль текстового курсора */
            -webkit-animation: blink 0.75s step-end infinite;
            animation: blink 0.75s step-end infinite;
            /* Анимация мигания курсора */
        }

        .desktop {
            display: block;
        }

        .mobile {
            display: none;
        }

        @-webkit-keyframes blink {

            from,
            to {
                border-color: transparent;
            }

            50% {
                border-color: rgb(235, 235, 235);
            }
        }

        @keyframes blink {

            from,
            to {
                border-color: transparent;
            }

            50% {
                border-color: rgb(235, 235, 235);
            }
        }

        .container {
            margin: 0 auto;
            max-width: 1624px;
        }

        .hotel_mobile {
            display: none;
        }

        .header_content {
            z-index: 99;
            margin-top: 40px;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-pack: justify;
            -ms-flex-pack: justify;
            justify-content: space-between;
            margin-bottom: 60px;
        }

        .header_content .logo {
            font-family: "MullerLight";
            font-size: 40px;
            letter-spacing: 0.25em;
            text-transform: uppercase;
            color: #ffffff;
        }

        .header_content nav {
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            gap: 50px;
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center;
            /* Стили для контента */
            /* Стили для кнопки закрытия */
        }

        .header_content nav .nav_item {
            width: 150px;
            height: 40px;
            z-index: 999;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            gap: 10px;
        }

        .header_content nav .nav_item .name_valute {
            font-weight: 400;
            font-family: "MullerRegular";
            font-size: 18px;
            padding-top: 4px;
            line-height: 130%;
            letter-spacing: 0.1em;
            text-transform: uppercase;
        }

        .header_content nav .sidebar_toggler {
            padding: 10px;
            border: none;
            opacity: 80%;
            font: inherit;
            color: inherit;
            background-color: transparent;
            -webkit-transition: 0.2s;
            transition: 0.2s;
        }

        .header_content nav .sidebar_toggler:hover {
            padding: 10px;
            border: none;
            opacity: 100%;
            font: inherit;
            color: inherit;
            background-color: transparent;
        }

        .header_content nav .sidebar {
            z-index: 999;
            border-left: 1px solid #ADADAD;
            position: fixed;
            top: 0;
            right: -363px;
            /* начальное положение за пределами экрана */
            width: 363px;
            height: 100vh;
            background: #000;
            color: #fff;
            -webkit-transition: right 0.3s;
            transition: right 0.3s;
            /* анимация выезда панели */
        }

        .header_content nav .sidebar .menu_burder_contetn {
            padding-top: 40px;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-orient: vertical;
            -webkit-box-direction: normal;
            -ms-flex-direction: column;
            flex-direction: column;
            gap: 30px;
            padding-left: 26px;
            padding-right: 37px;
        }

        .header_content nav .sidebar .menu_burder_contetn .profile .name_user {
            font-weight: 400;
            font-size: 24px;
            font-family: "MullerRegular";
            line-height: 130%;
            letter-spacing: 0.1em;
            text-transform: uppercase;
            color: #d6d6d6;
            -webkit-transition: 0.3s;
            transition: 0.3s;
        }

        .header_content nav .sidebar .menu_burder_contetn .profile .profile_link {
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            gap: 7px;
        }

        .header_content nav .sidebar .menu_burder_contetn .profile .profile_link .profile_p {
            font-weight: 400;
            font-family: "MullerRegular";
            font-size: 14px;
            line-height: 130%;
            letter-spacing: 0.1em;
            text-transform: uppercase;
            color: #696969;
            -webkit-transition: 0.3s;
            transition: 0.3s;
        }

        .header_content nav .sidebar .menu_burder_contetn .profile .profile_link svg {
            -webkit-transition: 0.3s;
            transition: 0.3s;
            stroke: #696969;
        }

        .header_content nav .sidebar .menu_burder_contetn .profile:hover .name_user {
            font-weight: 400;
            font-size: 24px;
            font-family: "MullerRegular";
            line-height: 130%;
            letter-spacing: 0.1em;
            text-transform: uppercase;
            color: #ffffff;
        }

        .header_content nav .sidebar .menu_burder_contetn .profile:hover .profile_link {
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            gap: 7px;
        }

        .header_content nav .sidebar .menu_burder_contetn .profile:hover .profile_link .profile_p {
            font-weight: 400;
            font-family: "MullerRegular";
            font-size: 14px;
            line-height: 130%;
            letter-spacing: 0.1em;
            text-transform: uppercase;
            color: #a9a9a9;
        }

        .header_content nav .sidebar .menu_burder_contetn .profile:hover .profile_link svg {
            stroke: #a9a9a9;
        }

        .header_content nav .sidebar .menu_burder_contetn .gap {
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-orient: vertical;
            -webkit-box-direction: normal;
            -ms-flex-direction: column;
            flex-direction: column;
            gap: 25px;
        }

        .header_content nav .sidebar .menu_burder_contetn .gap .burger_item {
            font-weight: 400;
            font-family: "MullerRegular";
            font-size: 18px;
            line-height: 130%;
            color: #c9c9c9;
            letter-spacing: 0.1em;
            text-transform: uppercase;
            -webkit-transition: 0.3s;
            transition: 0.3s;
        }

        .header_content nav .sidebar .menu_burder_contetn .gap .little_text {
            font-weight: 400;
            font-size: 16px;
            color: #c9c9c9;
            line-height: 130%;
            font-family: "MullerRegular";
            letter-spacing: 0.1em;
            text-transform: uppercase;
            -webkit-transition: 0.3s;
            transition: 0.3s;
        }

        .header_content nav .sidebar .menu_burder_contetn .gap .burger_item:hover {
            font-weight: 400;
            font-family: "MullerRegular";
            font-size: 18px;
            line-height: 130%;
            color: #ffffff;
            letter-spacing: 0.1em;
            text-transform: uppercase;
        }

        .header_content nav .sidebar .menu_burder_contetn .gap .little_text:hover {
            font-weight: 400;
            font-size: 16px;
            color: #ffffff;
            line-height: 130%;
            font-family: "MullerRegular";
            letter-spacing: 0.1em;
            text-transform: uppercase;
        }

        .header_content nav .content {
            position: absolute;
            padding-right: 360px;
            /* учитываем ширину панели для смещения контента */
            -webkit-transition: padding-right 0.3s;
            transition: padding-right 0.3s;
            /* анимация смещения контента */
        }

        .header_content nav .close_btn {
            position: absolute;
            top: 10px;
            right: 10px;
            color: #fff;
            font-size: 20px;
        }

        .banner_img {
            position: absolute;
            top: 0;
            z-index: -1;
            right: 0;
        }

        .svg-container {
            position: absolute;
            top: 858px;
            left: 178px;
            width: 100%;
            height: auto;
            overflow: visible;
        }

        .svg-container svg {
            -webkit-animation: pulse 5s ease-in-out infinite;
            animation: pulse 5s ease-in-out infinite;
        }

        .navigate {
            position: absolute;
            top: 748px;
            left: 48px;
        }

        @-webkit-keyframes pulse {
            0% {
                -webkit-transform: scale(1);
                transform: scale(1);
                -webkit-filter: blur(4px);
                filter: blur(4px);
                fill: linear-gradient(180deg, #ff8d07 0%, #ff0707 50%, #ffc24a 100%);
            }

            50% {
                -webkit-transform: scale(1.9);
                transform: scale(1.9);
                -webkit-filter: blur(7px);
                filter: blur(7px);
                fill: linear-gradient(180deg, #ffc24a 0%, #ff0707 50%, #ff8d07 100%);
            }

            100% {
                -webkit-transform: scale(1);
                transform: scale(1);
                -webkit-filter: blur(4px);
                filter: blur(4px);
                fill: linear-gradient(180deg, #ff8d07 0%, #ff0707 100%, #ffc24a 100%);
            }
        }

        @keyframes pulse {
            0% {
                -webkit-transform: scale(1);
                transform: scale(1);
                -webkit-filter: blur(4px);
                filter: blur(4px);
                fill: linear-gradient(180deg, #ff8d07 0%, #ff0707 50%, #ffc24a 100%);
            }

            50% {
                -webkit-transform: scale(1.9);
                transform: scale(1.9);
                -webkit-filter: blur(7px);
                filter: blur(7px);
                fill: linear-gradient(180deg, #ffc24a 0%, #ff0707 50%, #ff8d07 100%);
            }

            100% {
                -webkit-transform: scale(1);
                transform: scale(1);
                -webkit-filter: blur(4px);
                filter: blur(4px);
                fill: linear-gradient(180deg, #ff8d07 0%, #ff0707 100%, #ffc24a 100%);
            }
        }

        .ship_banner {
            position: absolute;
            top: 680px;
            z-index: -2;
            left: 10px;
            -webkit-transform: rotate(13deg);
            -ms-transform: rotate(13deg);
            transform: rotate(13deg);
        }

        .banner .container .banner_content {
            margin-top: 60px;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-orient: vertical;
            -webkit-box-direction: normal;
            -ms-flex-direction: column;
            flex-direction: column;
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center;
        }

        .banner .container .banner_content .banner_main_text {
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center;
            font-weight: 250;
            margin-top: 110px;
            font-size: 128px;
            letter-spacing: 0.16em;
            text-transform: uppercase;
            font-family: "MullerUltraLight";
            z-index: 998;
            margin-bottom: 40px;
        }

        .banner .container .banner_content .banner_text {
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center;
            font-weight: 400;
            font-size: 35px;
            line-height: 120%;
            z-index: 989;
            height: 84px;
            font-family: "MullerRegular";
            width: 1300px;
            letter-spacing: 0.12em;
            text-transform: uppercase;
            text-align: center;
            color: #c1c1c1;
            margin-bottom: 65px;
        }

        .banner .container .banner_content .banner_form {
            display: block;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            gap: 20px;
        }

        .banner .container .banner_content .banner_form .banner_inp_one {
            -webkit-appearance: none;
            -moz-appearance: none;
            appearance: none;
            border: 2px solid #9a9a9a;
            width: 391px;
            outline: none;
            height: 65px;
            background: #1a1919;
            padding-top: 4px;
            padding-left: 20px;
            font-weight: 400;
            font-size: 18px;
            letter-spacing: 0.02em;
            text-transform: uppercase;
            color: #D4D4D4;
            font-family: "MullerRegular";
        }

        .banner .container .banner_content .banner_form .banner_inp_one::-ms-expand {
            display: none;
        }

        .banner .container .banner_content .banner_form .banner_inp_one::-webkit-select {
            background: transparent;
        }

        .banner .container .banner_content .banner_form .banner_inp_one option {
            font-family: "YourDesiredFont", sans-serif;
            letter-spacing: 0.6em;
        }

        .banner .container .banner_content .banner_form .banner_inp_two {
            border: 2px solid #9a9a9a;
            width: 254px;
            height: 65px;
            outline: none;
            background: #1a1919;
            padding-top: 4px;
            padding-left: 20px;
            font-weight: 400;
            font-size: 18px;
            letter-spacing: 0.02em;
            text-transform: uppercase;
            color: #D4D4D4;
            font-family: "MullerRegular";
        }

        .banner .container .banner_content .banner_form .banner_inp_three {
            border: 2px solid #9a9a9a;
            width: 117px;
            outline: none;
            height: 65px;
            background: #1a1919;
            padding-top: 4px;
            padding-left: 20px;
            font-weight: 400;
            font-size: 18px;
            letter-spacing: 0.02em;
            text-transform: uppercase;
            color: #D4D4D4;
            font-family: "MullerRegular";
        }

        .banner .container .banner_content .banner_form .banner_btn {
            z-index: 998;
            width: 254px;
            height: 65px;
            background: #f3f3f3;
            outline: none;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-pack: center;
            -ms-flex-pack: center;
            justify-content: center;
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center;
            font-family: "MullerMedium";
            font-weight: 500;
            font-size: 18px;
            text-transform: uppercase;
            text-decoration: underline;
            -webkit-text-decoration-skip-ink: none;
            text-decoration-skip-ink: none;
            color: #000;
        }

        .all_main_page_info {
            position: relative;
            margin-top: 430px;
        }

        .all_main_page_info .abslolute {
            position: absolute;
            left: 50%;
            margin-left: -812px;
        }

        .all_main_page_info .moon_main_page_img {
            margin-top: 250px;
        }

        .all_main_page_info .starship_main {
            position: absolute;
            bottom: -707px;
            left: 50%;
            margin-left: 180px;
        }

        .all_main_page_info .container .top_farcts .name_page_block {
            font-weight: 300;
            font-size: 64px;
            letter-spacing: 0.1em;
            text-transform: uppercase;
            font-family: "MullerLight";
        }

        .all_main_page_info .container .top_farcts .text_fact {
            font-weight: 400;
            font-family: "MullerRegular";
            color: #ADADAD;
            font-size: 18px;
            line-height: 130%;
            letter-spacing: 0.1em;
            text-transform: uppercase;
        }

        .all_main_page_info .container .top_farcts .short_width {
            width: 314px;
            margin-top: 30px;
        }

        .all_main_page_info .container .top_farcts .short_width_name {
            width: 780px;
        }

        .all_main_page_info .container .top_farcts .width_fact {
            width: 660px;
            margin-top: 40px;
            margin-left: 280px;
        }

        .all_main_page_info .container .top_farcts .climat_width {
            margin-top: 30px;
            width: 755px;
        }

        .all_main_page_info .container .fact1 {
            position: absolute;
            top: -80px;
            left: 50%;
            margin-left: -250px;
        }

        .all_main_page_info .container .fact2 {
            position: absolute;
            top: 420px;
            left: 50%;
            margin-left: -370px;
        }

        .all_main_page_info .container .fact3 {
            position: absolute;
            bottom: -320px;
            left: 50%;
            margin-left: 40px;
        }

        .crums {
            display: block;
            margin-top: 40px;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            gap: 15px;
            margin-bottom: 60px;
        }

        .crums .href_crum {
            font-weight: 400;
            font-size: 16px;
            line-height: 130%;
            font-family: "MullerRegular";
            letter-spacing: 0.1em;
            text-transform: uppercase;
        }

        .form_sign {
            margin-top: 100px;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-pack: justify;
            -ms-flex-pack: justify;
            justify-content: space-between;
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center;
        }

        .form_sign .qwe {
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-orient: vertical;
            -webkit-box-direction: normal;
            -ms-flex-direction: column;
            flex-direction: column;
            -webkit-box-pack: center;
            -ms-flex-pack: center;
            justify-content: center;
            text-align: center;
        }

        .form_sign .qwe .name_form {
            font-weight: 300;
            font-size: 80px;
            letter-spacing: 0.01em;
            text-transform: uppercase;
            font-family: "MullerLight";
            margin-bottom: 40px;
        }

        .form_sign .qwe .form_col {
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-orient: vertical;
            -webkit-box-direction: normal;
            -ms-flex-direction: column;
            flex-direction: column;
            gap: 20px;
            -webkit-box-align: start;
            -ms-flex-align: start;
            align-items: start;
        }

        .form_sign .qwe .form_col .inp {
            padding-top: 2px;
            background: #1a1919;
            border: 1px solid #9a9a9a;
            width: 802px;
            height: 70px;
            font-weight: 400;
            font-size: 18px;
            letter-spacing: 0.02em;
            text-transform: uppercase;
            color: #ffffff;
            font-family: "MullerRegular";
            padding-left: 30px;
        }

        .form_sign .qwe .form_col .form_btn {
            padding-top: 2px;
            margin-top: 20px;
            width: 802px;
            height: 70px;
            background: #d9d9d9;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-pack: center;
            -ms-flex-pack: center;
            justify-content: center;
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center;
            font-weight: 500;
            font-size: 18px;
            text-transform: uppercase;
            text-decoration: underline;
            -webkit-text-decoration-skip-ink: none;
            text-decoration-skip-ink: none;
            color: #000;
            font-family: "MullerMedium";
            -webkit-transition: 0.2s;
            transition: 0.2s;
        }

        .form_sign .qwe .form_col .form_btn:hover {
            background-color: #fff;
        }

        .form_sign .qwe .form_col .link {
            font-weight: 500;
            font-family: "MullerMedium";
            font-size: 18px;
            text-transform: uppercase;
            text-decoration: underline;
            -webkit-text-decoration-skip-ink: none;
            text-decoration-skip-ink: none;
            color: #ADADAD;
        }

        .profile_banner {
            background-size: cover;
            background-image: url("../img/background/profile.png");
            height: 370px;
            border-bottom: 1px solid #343434;
        }

        .profile_banner .name_user {
            font-weight: 500;
            font-size: 40px;
            line-height: 130%;
            letter-spacing: 0.1em;
            text-transform: uppercase;
            font-family: "MullerMedium";
            color: #fff;
            padding-top: 160px;
        }

        .catalog_hotel {
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            gap: 20px;
        }

        .catalog_hotel .left_catalog_hotel {
            position: sticky;
            top: 10px;
            -ms-flex-item-align: start;
            align-self: start;
            padding: 35px 40px 25px;
            border: 1px solid #ffffff;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-orient: vertical;
            -webkit-box-direction: normal;
            -ms-flex-direction: column;
            flex-direction: column;
            gap: 35px;
        }

        .catalog_hotel .left_catalog_hotel .name_block {
            font-family: "MullerRegular";
            font-weight: 400;
            font-size: 32px;
            line-height: 130%;
            letter-spacing: 0.1em;
            text-transform: uppercase;
        }

        .catalog_hotel .left_catalog_hotel .filtr_block {
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-orient: vertical;
            -webkit-box-direction: normal;
            -ms-flex-direction: column;
            flex-direction: column;
            gap: 20px;
        }

        .catalog_hotel .left_catalog_hotel .filtr_block .name_filtr_block {
            font-family: "MullerRegular";
            font-weight: 400;
            font-size: 24px;
            line-height: 130%;
            letter-spacing: 0.1em;
            text-transform: uppercase;
        }

        .catalog_hotel .left_catalog_hotel .filtr_block .filtr_block_column_price {
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            gap: 10px;
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center;
        }

        .catalog_hotel .left_catalog_hotel .filtr_block .filtr_block_column_price .filtr_block_price_inp {
            border: 1px solid #9a9a9a;
            width: 136px;
            padding-top: 2px;
            height: 65px;
            background: #1a1919;
            padding-left: 20px;
            font-weight: 400;
            font-size: 18px;
            letter-spacing: 0.02em;
            text-transform: uppercase;
            color: #D4D4D4;
            font-family: "MullerRegular";
        }

        .catalog_hotel .left_catalog_hotel .filtr_block .filtr_block_column_price .price_line {
            border: 1px solid #D4D4D4;
            width: 16px;
            height: 0px;
        }

        .catalog_hotel .left_catalog_hotel .filtr_block .filtr_block_column {
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-orient: vertical;
            -webkit-box-direction: normal;
            -ms-flex-direction: column;
            flex-direction: column;
            gap: 15px;
        }

        .catalog_hotel .left_catalog_hotel .filtr_block .filtr_block_column .checkbox-wrapper-21 .control {
            display: block;
            position: relative;
            padding-left: 35px;
            padding-top: 3px;
            font-weight: 400;
            font-size: 18px;
            line-height: 130%;
            letter-spacing: 0.02em;
            text-transform: uppercase;
            color: #9a9a9a;
            font-size: 20px;
            font-family: "MullerRegular";
        }

        .catalog_hotel .left_catalog_hotel .filtr_block .filtr_block_column .checkbox-wrapper-21 .control input {
            position: absolute;
            z-index: -1;
            opacity: 0;
        }

        .catalog_hotel .left_catalog_hotel .filtr_block .filtr_block_column .checkbox-wrapper-21 .control input:checked~.control__indicator {
            background: #ffffff;
        }

        .catalog_hotel .left_catalog_hotel .filtr_block .filtr_block_column .checkbox-wrapper-21 .control input:checked~.control__indicator:after {
            display: block;
        }

        .catalog_hotel .left_catalog_hotel .filtr_block .filtr_block_column .checkbox-wrapper-21 .control input:disabled~.control__indicator {
            background: #e6e6e6;
            opacity: 0.6;
            pointer-events: none;
        }

        .catalog_hotel .left_catalog_hotel .filtr_block .filtr_block_column .checkbox-wrapper-21 .control__indicator {
            position: absolute;
            top: 2px;
            left: 0;
            height: 25px;
            width: 25px;
            background: #000000;
            border: 1px solid #9a9a9a;
        }

        .catalog_hotel .left_catalog_hotel .filtr_block .filtr_block_column .checkbox-wrapper-21 .control__indicator:after {
            content: "";
            position: absolute;
            display: none;
        }

        .catalog_hotel .left_catalog_hotel .filtr_block .filtr_block_column .checkbox-wrapper-21 .control:hover input~.control__indicator,
        .catalog_hotel .left_catalog_hotel .filtr_block .filtr_block_column .checkbox-wrapper-21 .control input:focus~.control__indicator {
            background: #1b1b1b;
            border: 1px solid #9a9a9a;
        }

        .catalog_hotel .left_catalog_hotel .filtr_block .filtr_block_column .checkbox-wrapper-21 .control:hover input:not([disabled]):checked~.control__indicator,
        .catalog_hotel .left_catalog_hotel .filtr_block .filtr_block_column .checkbox-wrapper-21 .control input:checked:focus~.control__indicator {
            background: #ffffff;
        }

        .catalog_hotel .left_catalog_hotel .filtr_block .filtr_block_column .checkbox-wrapper-21 .control--checkbox .control__indicator:after {
            left: 8px;
            top: 4px;
            width: 5px;
            height: 10px;
            border: solid #000000;
            border-width: 0 2px 2px 0;
            -webkit-transform: rotate(45deg);
            -ms-transform: rotate(45deg);
            transform: rotate(45deg);
        }

        .catalog_hotel .left_catalog_hotel .filtr_block .filtr_block_column .checkbox-wrapper-21 .control--checkbox input:disabled~.control__indicator:after {
            border-color: #7b7b7b;
        }

        .catalog_hotel .left_catalog_hotel .filter_btn {
            font-weight: 400;
            font-size: 18px;
            text-transform: uppercase;
            color: #000;
            font-family: "MullerRegular";
            width: 308px;
            height: 60px;
            padding-top: 2px;
            background: #d9d9d9;
            text-decoration: underline;
            -webkit-text-decoration-skip-ink: none;
            text-decoration-skip-ink: none;
            -webkit-transition: 0.25s;
            transition: 0.25s;
        }

        .catalog_hotel .left_catalog_hotel .filter_btn:hover {
            font-weight: 400;
            font-size: 18px;
            text-transform: uppercase;
            color: #000;
            font-family: "MullerRegular";
            width: 308px;
            height: 60px;
            padding-top: 2px;
            background: #ffffff;
            text-decoration: underline;
            -webkit-text-decoration-skip-ink: none;
            text-decoration-skip-ink: none;
            -webkit-transition: 0.25s;
            transition: 0.25s;
        }

        .catalog_hotel .right_catalog_hotel {
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-orient: vertical;
            -webkit-box-direction: normal;
            -ms-flex-direction: column;
            flex-direction: column;
            gap: 30px;
        }

        .catalog_hotel .right_catalog_hotel .catalog_hotel_flex {
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            height: 366px;
            border: 1px solid #ffffff;
        }

        .catalog_hotel .right_catalog_hotel .catalog_hotel_flex .catalog_info_hotel {
            padding: 30px;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            gap: 20px;
        }

        .catalog_hotel .right_catalog_hotel .catalog_hotel_flex .catalog_info_hotel .img_hotel_catalog {
            width: 498px;
            height: 256px;
        }

        .catalog_hotel .right_catalog_hotel .catalog_hotel_flex .catalog_info_hotel .text_info_hotel {
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-orient: vertical;
            -webkit-box-direction: normal;
            -ms-flex-direction: column;
            flex-direction: column;
            margin-top: 15px;
            gap: 130px;
        }

        .catalog_hotel .right_catalog_hotel .catalog_hotel_flex .catalog_info_hotel .text_info_hotel .name_hotel {
            font-weight: 400;
            font-size: 32px;
            letter-spacing: 0.02em;
            text-transform: uppercase;
            font-family: "MullerRegular";
        }

        .catalog_hotel .right_catalog_hotel .catalog_hotel_flex .catalog_info_hotel .text_info_hotel .more_info_hotel {
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-orient: vertical;
            -webkit-box-direction: normal;
            -ms-flex-direction: column;
            flex-direction: column;
            gap: 20px;
        }

        .catalog_hotel .right_catalog_hotel .catalog_hotel_flex .catalog_info_hotel .text_info_hotel .more_info_hotel .more_info_hotel_p {
            font-weight: 400;
            font-family: "MullerRegular";
            font-size: 18px;
            line-height: 130%;
            letter-spacing: 0.1em;
            text-transform: uppercase;
        }

        .catalog_hotel .right_catalog_hotel .catalog_hotel_flex .catalog_hotel_line {
            display: block;
            height: 100%;
            border: 1px solid #D4D4D4;
            width: 0px;
        }

        .catalog_hotel .right_catalog_hotel .catalog_hotel_flex .catalog_price_hotel {
            padding: 45px 20px 30px;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-orient: vertical;
            -webkit-box-direction: normal;
            -ms-flex-direction: column;
            flex-direction: column;
            gap: 116px;
        }

        .catalog_hotel .right_catalog_hotel .catalog_hotel_flex .catalog_price_hotel .qwe_catalog .price_text {
            font-weight: 400;
            font-size: 14px;
            margin-bottom: 10px;
            line-height: 130%;
            letter-spacing: 0.05em;
            text-transform: uppercase;
            color: #9a9a9a;
            font-family: "MullerRegular";
        }

        .catalog_hotel .right_catalog_hotel .catalog_hotel_flex .catalog_price_hotel .qwe_catalog .price_main {
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            gap: 10px;
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center;
        }

        .catalog_hotel .right_catalog_hotel .catalog_hotel_flex .catalog_price_hotel .qwe_catalog .price_main .price_number {
            font-weight: 400;
            font-size: 32px;
            line-height: 130%;
            letter-spacing: 0.02em;
            text-transform: uppercase;
            font-family: "MullerRegular";
        }

        .catalog_hotel .right_catalog_hotel .catalog_hotel_flex .catalog_price_hotel .qwe_catalog .text_about_price {
            margin-top: 20px;
            font-weight: 400;
            font-size: 14px;
            line-height: 130%;
            width: 234px;
            letter-spacing: 0.1em;
            text-transform: uppercase;
            font-family: "MullerRegular";
            color: #9a9a9a;
        }

        .catalog_hotel .right_catalog_hotel .catalog_hotel_flex .catalog_price_hotel .qwe_catalog .icons {
            margin-top: 20px;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
        }

        .catalog_hotel .right_catalog_hotel .catalog_hotel_flex .catalog_price_hotel .qwe_catalog .icons img {
            width: 24px;
        }

        .catalog_hotel .right_catalog_hotel .catalog_hotel_flex .catalog_price_hotel .choice_hotel {
            font-weight: 400;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-pack: center;
            -ms-flex-pack: center;
            justify-content: center;
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center;
            font-size: 18px;
            text-transform: uppercase;
            color: #000;
            font-family: "MullerRegular";
            width: 234px;
            background: #d9d9d9;
            text-decoration: underline;
            -webkit-text-decoration-skip-ink: none;
            text-decoration-skip-ink: none;
            height: 46px;
            -webkit-transition: 0.25s;
            transition: 0.25s;
        }

        .catalog_hotel .right_catalog_hotel .catalog_hotel_flex .catalog_price_hotel .choice_hotel:hover {
            font-weight: 400;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-pack: center;
            -ms-flex-pack: center;
            justify-content: center;
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center;
            font-size: 18px;
            text-transform: uppercase;
            color: #000;
            font-family: "MullerRegular";
            width: 234px;
            background: #ffffff;
            text-decoration: underline;
            -webkit-text-decoration-skip-ink: none;
            text-decoration-skip-ink: none;
            height: 46px;
            -webkit-transition: 0.25s;
            transition: 0.25s;
        }

        .catalog_hotel .right_catalog_flight {
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-orient: vertical;
            -webkit-box-direction: normal;
            -ms-flex-direction: column;
            flex-direction: column;
            gap: 30px;
        }

        .catalog_hotel .right_catalog_flight .right_catalog_flight_flex {
            width: 1213px;
            height: 329px;
            border: 1px solid #ffffff;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
        }

        .catalog_hotel .right_catalog_flight .right_catalog_flight_flex .flight_napravlenia_info .line_xa {
            border: 1px solid #565656;
            width: 938px;
            height: 0px;
        }

        .catalog_hotel .right_catalog_flight .right_catalog_flight_flex .flight_napravlenia_info .flight_tuda_obratno_info {
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center;
            padding: 43px 40px 35px 35px;
        }

        .catalog_hotel .right_catalog_flight .right_catalog_flight_flex .flight_napravlenia_info .flight_tuda_obratno_info .name_company_and_status {
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-orient: vertical;
            -webkit-box-direction: normal;
            -ms-flex-direction: column;
            flex-direction: column;
            gap: 20px;
            margin-right: 20px;
        }

        .catalog_hotel .right_catalog_flight .right_catalog_flight_flex .flight_napravlenia_info .flight_tuda_obratno_info .name_company_and_status .company {
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center;
            gap: 15px;
            width: 264px;
        }

        .catalog_hotel .right_catalog_flight .right_catalog_flight_flex .flight_napravlenia_info .flight_tuda_obratno_info .name_company_and_status .company .name_company {
            font-weight: 400;
            font-size: 24px;
            color: #ffffff;
            line-height: 130%;
            font-family: "MullerRegular";
            letter-spacing: 0.1em;
            text-transform: uppercase;
        }

        .catalog_hotel .right_catalog_flight .right_catalog_flight_flex .flight_napravlenia_info .flight_tuda_obratno_info .name_company_and_status .status {
            font-weight: 400;
            font-size: 14px;
            line-height: 130%;
            letter-spacing: 0.1em;
            text-transform: uppercase;
            font-family: "MullerRegular";
            color: #9a9a9a;
        }

        .catalog_hotel .right_catalog_flight .right_catalog_flight_flex .flight_napravlenia_info .flight_tuda_obratno_info .info_otkuda {
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-orient: vertical;
            -webkit-box-direction: normal;
            -ms-flex-direction: column;
            flex-direction: column;
            -webkit-box-pack: justify;
            -ms-flex-pack: justify;
            justify-content: space-between;
            height: 84px;
        }

        .catalog_hotel .right_catalog_flight .right_catalog_flight_flex .flight_napravlenia_info .flight_tuda_obratno_info .info_otkuda .kosmodrom {
            font-weight: 400;
            font-size: 16px;
            line-height: 130%;
            letter-spacing: 0.1em;
            font-family: "MullerRegular";
            text-transform: uppercase;
            width: 250px;
        }

        .catalog_hotel .right_catalog_flight .right_catalog_flight_flex .flight_napravlenia_info .flight_tuda_obratno_info .info_otkuda .time_vilet {
            font-weight: 400;
            font-size: 14px;
            line-height: 130%;
            width: 250px;
            letter-spacing: 0.1em;
            text-transform: uppercase;
            color: #9a9a9a;
            font-family: "MullerRegular";
        }

        .catalog_hotel .right_catalog_flight .right_catalog_flight_flex .flight_napravlenia_info .flight_tuda_obratno_info .line_tuda_obratno {
            padding: 0 9px;
        }

        .catalog_hotel .right_catalog_flight .right_catalog_flight_flex .flight_napravlenia_info .flight_obratno_tuda_info {
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center;
            padding: 30px 43px 35px 35px;
        }

        .catalog_hotel .right_catalog_flight .right_catalog_flight_flex .flight_napravlenia_info .flight_obratno_tuda_info .name_company_and_status {
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-orient: vertical;
            -webkit-box-direction: normal;
            -ms-flex-direction: column;
            flex-direction: column;
            gap: 20px;
            margin-right: 33px;
        }

        .catalog_hotel .right_catalog_flight .right_catalog_flight_flex .flight_napravlenia_info .flight_obratno_tuda_info .name_company_and_status .company {
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center;
            gap: 15px;
            width: 264px;
        }

        .catalog_hotel .right_catalog_flight .right_catalog_flight_flex .flight_napravlenia_info .flight_obratno_tuda_info .name_company_and_status .company .name_company {
            font-weight: 400;
            font-size: 24px;
            color: #ffffff;
            line-height: 130%;
            font-family: "MullerRegular";
            letter-spacing: 0.1em;
            text-transform: uppercase;
        }

        .catalog_hotel .right_catalog_flight .right_catalog_flight_flex .flight_napravlenia_info .flight_obratno_tuda_info .name_company_and_status .status {
            font-weight: 400;
            font-size: 14px;
            line-height: 130%;
            letter-spacing: 0.1em;
            text-transform: uppercase;
            font-family: "MullerRegular";
            color: #9a9a9a;
        }

        .catalog_hotel .right_catalog_flight .right_catalog_flight_flex .flight_napravlenia_info .flight_obratno_tuda_info .info_otkuda {
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-orient: vertical;
            -webkit-box-direction: normal;
            -ms-flex-direction: column;
            flex-direction: column;
            -webkit-box-pack: justify;
            -ms-flex-pack: justify;
            justify-content: space-between;
            height: 84px;
        }

        .catalog_hotel .right_catalog_flight .right_catalog_flight_flex .flight_napravlenia_info .flight_obratno_tuda_info .info_otkuda .kosmodrom {
            font-weight: 400;
            font-size: 16px;
            line-height: 130%;
            letter-spacing: 0.1em;
            font-family: "MullerRegular";
            text-transform: uppercase;
            width: 250px;
        }

        .catalog_hotel .right_catalog_flight .right_catalog_flight_flex .flight_napravlenia_info .flight_obratno_tuda_info .info_otkuda .time_vilet {
            font-weight: 400;
            font-size: 14px;
            line-height: 130%;
            width: 250px;
            letter-spacing: 0.1em;
            text-transform: uppercase;
            color: #9a9a9a;
            font-family: "MullerRegular";
        }

        .catalog_hotel .right_catalog_flight .right_catalog_flight_flex .flight_napravlenia_info .flight_obratno_tuda_info .line_tuda_obratno {
            padding: 0 9px;
        }

        .catalog_hotel .right_catalog_flight .right_catalog_flight_flex .line_napr_cost {
            height: 329px;
            border: 1px solid #ffffff;
            width: 0;
        }

        .catalog_hotel .right_catalog_flight .right_catalog_flight_flex .fright_cost_info {
            padding: 40px 20px 35px 20px;
            width: 270px;
        }

        .catalog_hotel .right_catalog_flight .right_catalog_flight_flex .fright_cost_info .melk_text {
            font-weight: 400;
            font-size: 14px;
            line-height: 130%;
            letter-spacing: 0.05em;
            text-transform: uppercase;
            color: #9a9a9a;
            font-family: "MullerRegular";
        }

        .catalog_hotel .right_catalog_flight .right_catalog_flight_flex .fright_cost_info .cost {
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            gap: 6px;
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center;
            width: 230px;
            margin-top: 10px;
        }

        .catalog_hotel .right_catalog_flight .right_catalog_flight_flex .fright_cost_info .cost .cost_p {
            font-weight: 400;
            font-size: 32px;
            line-height: 130%;
            font-family: "MullerRegular";
            letter-spacing: 0.01em;
            text-transform: uppercase;
        }

        .catalog_hotel .right_catalog_flight .right_catalog_flight_flex .fright_cost_info .evething {
            font-weight: 400;
            margin-top: 15px;
            font-size: 14px;
            line-height: 130%;
            letter-spacing: 0.1em;
            text-transform: uppercase;
            color: #9a9a9a;
            font-family: "MullerRegular";
            width: 230px;
        }

        .catalog_hotel .right_catalog_flight .right_catalog_flight_flex .fright_cost_info .choice {
            margin-top: 60px;
            width: 230px;
            height: 46px;
            background: #d9d9d9;
            font-weight: 400;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-pack: center;
            -ms-flex-pack: center;
            justify-content: center;
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center;
            padding-top: 2px;
            font-size: 18px;
            font-family: "MullerRegular";
            text-transform: uppercase;
            text-decoration: underline;
            -webkit-text-decoration-skip-ink: none;
            text-decoration-skip-ink: none;
            color: #000;
            -webkit-transition: 0.25s;
            transition: 0.25s;
        }

        .catalog_hotel .right_catalog_flight .right_catalog_flight_flex .fright_cost_info .choice:hover {
            margin-top: 60px;
            width: 230px;
            height: 46px;
            background: #ffffff;
            font-weight: 400;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-pack: center;
            -ms-flex-pack: center;
            justify-content: center;
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center;
            padding-top: 2px;
            font-size: 18px;
            font-family: "MullerRegular";
            text-transform: uppercase;
            text-decoration: underline;
            -webkit-text-decoration-skip-ink: none;
            text-decoration-skip-ink: none;
            color: #000;
            -webkit-transition: 0.25s;
            transition: 0.25s;
        }

        .catalog_hotel .right_catalog_flight .right_catalog_flight_flex .fright_cost_info .po {
            margin-top: 10px;
            font-weight: 400;
            font-size: 12px;
            line-height: 130%;
            letter-spacing: 0.1em;
            text-transform: uppercase;
            color: #9a9a9a;
            font-family: "MullerRegular";
            width: 230px;
        }

        .hotel_item .stars {
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
        }

        .hotel_item .name_hotel_item {
            font-weight: 250;
            margin-top: 20px;
            font-size: 48px;
            letter-spacing: 0.02em;
            text-transform: uppercase;
            font-family: "MullerUltraLight";
        }

        .hotel_item .main_info_about_hotel_item {
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            gap: 60px;
            margin-top: 10px;
        }

        .hotel_item .main_info_about_hotel_item .big_img_hotel {
            width: 1076px;
            height: 517px;
        }

        .hotel_item .main_info_about_hotel_item .right_block_info_hotel {
            position: relative;
            padding: 40px 30px 30px 30px;
            border: 1px solid #D4D4D4;
        }

        .hotel_item .main_info_about_hotel_item .right_block_info_hotel .admin_btn {
            position: absolute;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            top: 0px;
            right: 0;
        }

        .hotel_item .main_info_about_hotel_item .right_block_info_hotel .admin_btn a {
            opacity: 92%;
            -webkit-transition: 0.3s;
            transition: 0.3s;
        }

        .hotel_item .main_info_about_hotel_item .right_block_info_hotel .admin_btn a:hover {
            opacity: 100%;
        }

        .hotel_item .main_info_about_hotel_item .right_block_info_hotel .price_text .price_p {
            font-weight: 400;
            font-size: 14px;
            line-height: 130%;
            letter-spacing: 0.05em;
            text-transform: uppercase;
            color: #9a9a9a;
            font-family: "MullerRegular";
        }

        .hotel_item .main_info_about_hotel_item .right_block_info_hotel .price_text .price_cost {
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            gap: 10px;
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center;
        }

        .hotel_item .main_info_about_hotel_item .right_block_info_hotel .price_text .price_cost .cost {
            font-weight: 500;
            font-size: 48px;
            padding-top: 6px;
            line-height: 130%;
            letter-spacing: 0.05em;
            text-transform: uppercase;
            font-family: "MullerMedium";
        }

        .hotel_item .main_info_about_hotel_item .right_block_info_hotel .icons_comfort {
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            gap: 10px;
            margin-top: 225px;
        }

        .hotel_item .main_info_about_hotel_item .right_block_info_hotel .white_btn {
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-pack: center;
            -ms-flex-pack: center;
            justify-content: center;
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center;
            margin-top: 32px;
            width: 426px;
            height: 46px;
            background: #d9d9d9;
            font-weight: 400;
            font-size: 18px;
            text-transform: uppercase;
            text-decoration: underline;
            -webkit-text-decoration-skip-ink: none;
            text-decoration-skip-ink: none;
            color: #000;
            font-family: "MullerRegular";
            -webkit-transition: 0.25s;
            transition: 0.25s;
        }

        .hotel_item .main_info_about_hotel_item .right_block_info_hotel .white_btn:hover {
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-pack: center;
            -ms-flex-pack: center;
            justify-content: center;
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center;
            margin-top: 32px;
            width: 426px;
            height: 46px;
            background: #ffffff;
            font-weight: 400;
            font-size: 18px;
            text-transform: uppercase;
            text-decoration: underline;
            -webkit-text-decoration-skip-ink: none;
            text-decoration-skip-ink: none;
            color: #000;
            font-family: "MullerRegular";
            -webkit-transition: 0.3s;
            transition: 0.3s;
        }

        .hotel_item .name_section {
            font-weight: 400;
            font-size: 64px;
            letter-spacing: 0.02em;
            text-transform: uppercase;
            font-family: "MullerRegular";
            margin-top: 120px;
        }

        .vklad_abaot_hotel {
            margin-top: 120px;
        }

        .vklad_abaot_hotel .name_section {
            font-weight: 400;
            font-size: 64px;
            letter-spacing: 0.02em;
            text-transform: uppercase;
            font-family: "MullerRegular";
        }

        .vklad_abaot_hotel .vkladki_more_info_hotel {
            margin-top: 40px;
        }

        .vklad_abaot_hotel .vkladki_more_info_hotel .vk .tab {
            overflow: hidden;
            width: 100%;
            background-color: #000000;
            border-bottom: 1px solid #ffffff;
        }

        .vklad_abaot_hotel .vkladki_more_info_hotel .vk .tab button {
            background-color: inherit;
            float: left;
            border: none;
            outline: none;
            color: #ffffff;
            opacity: 60%;
            cursor: pointer;
            padding: 12px 35px 9px 35px;
            -webkit-transition: 0.3s;
            transition: 0.3s;
            font-family: "MullerRegular";
            font-weight: 400;
            font-size: 24px;
            line-height: 130%;
            letter-spacing: 0.1em;
            text-transform: uppercase;
        }

        .vklad_abaot_hotel .vkladki_more_info_hotel .vk .tab button:hover {
            background-color: #000000;
            color: #D4E7EE;
            opacity: 100%;
        }

        .vklad_abaot_hotel .vkladki_more_info_hotel .vk .tab button.active {
            background-color: #ffffff;
            color: #000000;
            opacity: 100%;
        }

        .vklad_abaot_hotel .vkladki_more_info_hotel .vk .tabcontent {
            display: none;
            width: 100%;
            background-color: #000000;
            color: #D4E7EE;
            padding: 20px 16px;
            border-top: none;
            border-left: 1px solid rgb(129, 129, 129);
            border-bottom: 1px solid #636363;
        }

        .vklad_abaot_hotel .vkladki_more_info_hotel .vk .tabcontent .white {
            font-weight: 400;
            font-size: 18px;
            line-height: 150%;
            font-family: "MullerRegular";
            letter-spacing: 0.1em;
            text-transform: uppercase;
            color: #c8c8c8;
            white-space: pre-line;
        }

        .choice_place {
            margin-top: 150px;
        }

        .choice_place .name_section {
            color: white;
            font-family: "MullerRegular";
            font-size: 64px;
            text-transform: uppercase;
            font-weight: 400;
            margin-bottom: 40px;
        }

        .choice_place .flex {
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-orient: vertical;
            -webkit-box-direction: normal;
            -ms-flex-direction: column;
            flex-direction: column;
            gap: 20px;
        }

        .choice_place .flex .card_choice_card {
            border: 1px solid white;
            width: 1553px;
            height: 366px;
        }

        .choice_place .flex .card_choice_card .flex_content {
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
        }

        .choice_place .flex .card_choice_card .flex_content .slider {
            position: relative;
            width: 498px;
            height: 256px;
            overflow: hidden;
        }

        .choice_place .flex .card_choice_card .flex_content .slider .slide {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            display: none;
        }

        .choice_place .flex .card_choice_card .flex_content .slider .slide .img_inside_number {
            margin-top: 30px;
            margin-left: 30px;
            width: 498px;
            height: 256px;
            -o-object-fit: cover;
            object-fit: cover;
        }

        .choice_place .flex .card_choice_card .flex_content .slider .active {
            display: block;
        }

        .choice_place .flex .card_choice_card .flex_content .slider .arrow {
            position: absolute;
            top: 80%;
            width: 40px;
            height: 400px;
            background-color: rgba(0, 0, 0, 0.146);
            -webkit-transform: translateY(-50%);
            -ms-transform: translateY(-50%);
            transform: translateY(-50%);
            cursor: pointer;
            z-index: 10003;
            margin-top: 25px;
            -webkit-transition: 0.2s;
            transition: 0.2s;
        }

        .choice_place .flex .card_choice_card .flex_content .slider .arrow:hover {
            background-color: rgba(78, 78, 78, 0.316);
        }

        .choice_place .flex .card_choice_card .flex_content .slider .left {
            left: 30px;
        }

        .choice_place .flex .card_choice_card .flex_content .slider .right {
            right: 0px;
        }

        .choice_place .flex .card_choice_card .flex_content .text_all_cacaca {
            margin-left: 20px;
            margin-right: 45px;
            width: 686px;
        }

        .choice_place .flex .card_choice_card .flex_content .text_all_cacaca .name_place {
            font-weight: 400;
            font-size: 32px;
            letter-spacing: 0.02em;
            text-transform: uppercase;
            font-family: "MullerRegular";
            margin-top: 45px;
            margin-bottom: 60px;
        }

        .choice_place .flex .card_choice_card .flex_content .text_all_cacaca .flex_wrap {
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-orient: vertical;
            -webkit-box-direction: normal;
            -ms-flex-direction: column;
            flex-direction: column;
            -ms-flex-wrap: wrap;
            flex-wrap: wrap;
            gap: 38px;
            row-gap: 18px;
            height: 150px;
        }

        .choice_place .flex .card_choice_card .flex_content .text_all_cacaca .flex_wrap .txt_place {
            width: 324px;
            font-weight: 400;
            font-size: 18px;
            line-height: 130%;
            letter-spacing: 0.1em;
            font-family: "MullerRegular";
            text-transform: uppercase;
        }

        .choice_place .flex .card_choice_card .flex_content .line {
            height: 366px;
            width: 1px;
        }

        .choice_place .flex .card_choice_card .flex_content .catalog_price_hotel {
            padding: 45px 20px 30px;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-orient: vertical;
            -webkit-box-direction: normal;
            -ms-flex-direction: column;
            flex-direction: column;
            gap: 116px;
        }

        .choice_place .flex .card_choice_card .flex_content .catalog_price_hotel .qwe_catalog .price_text {
            font-weight: 400;
            font-size: 14px;
            margin-bottom: 10px;
            line-height: 130%;
            letter-spacing: 0.05em;
            text-transform: uppercase;
            color: #9a9a9a;
            font-family: "MullerRegular";
        }

        .choice_place .flex .card_choice_card .flex_content .catalog_price_hotel .qwe_catalog .price_main {
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            gap: 10px;
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center;
        }

        .choice_place .flex .card_choice_card .flex_content .catalog_price_hotel .qwe_catalog .price_main .price_number {
            font-weight: 400;
            font-size: 32px;
            line-height: 130%;
            letter-spacing: 0.02em;
            text-transform: uppercase;
            font-family: "MullerRegular";
        }

        .choice_place .flex .card_choice_card .flex_content .catalog_price_hotel .qwe_catalog .text_about_price {
            margin-top: 20px;
            font-weight: 400;
            font-size: 14px;
            line-height: 130%;
            width: 234px;
            letter-spacing: 0.1em;
            text-transform: uppercase;
            font-family: "MullerRegular";
            color: #9a9a9a;
        }

        .choice_place .flex .card_choice_card .flex_content .catalog_price_hotel .qwe_catalog .icons {
            margin-top: 20px;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
        }

        .choice_place .flex .card_choice_card .flex_content .catalog_price_hotel .qwe_catalog .icons img {
            width: 24px;
        }

        .choice_place .flex .card_choice_card .flex_content .catalog_price_hotel .choice_hotel {
            font-weight: 400;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-pack: center;
            -ms-flex-pack: center;
            justify-content: center;
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center;
            font-size: 18px;
            text-transform: uppercase;
            color: #000;
            font-family: "MullerRegular";
            width: 234px;
            background: #d9d9d9;
            text-decoration: underline;
            -webkit-text-decoration-skip-ink: none;
            text-decoration-skip-ink: none;
            height: 46px;
            -webkit-transition: 0.25s;
            transition: 0.25s;
        }

        .choice_place .flex .card_choice_card .flex_content .catalog_price_hotel .choice_hotel:hover {
            font-weight: 400;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-pack: center;
            -ms-flex-pack: center;
            justify-content: center;
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center;
            font-size: 18px;
            text-transform: uppercase;
            color: #000;
            font-family: "MullerRegular";
            width: 234px;
            background: #ffffff;
            text-decoration: underline;
            -webkit-text-decoration-skip-ink: none;
            text-decoration-skip-ink: none;
            height: 46px;
            -webkit-transition: 0.25s;
            transition: 0.25s;
        }

        .reviews .container .reviews_wrapp {
            border-color: white rgb(0, 0, 0) rgb(56, 56, 56) #1d1d1d;
        }

        .reviews .container .reviews_wrapp .reviews_content .reviews_top {
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-align: end;
            -ms-flex-align: end;
            align-items: end;
            left: 50%;
            margin-left: 50%;
        }

        .reviews .container .reviews_wrapp .reviews_content .reviews_top .top_left .top_line {
            height: 233px;
            width: 1px;
            -webkit-box-orient: vertical;
            -webkit-box-direction: normal;
            -ms-flex-direction: column;
            flex-direction: column;
            background-image: -webkit-gradient(linear, left bottom, left top, from(white), to(black));
            background-image: linear-gradient(to top, white, black);
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
        }

        .reviews .container .reviews_wrapp .reviews_content .reviews_top .top_right .reviews_h3 {
            color: white;
            font-family: "MullerRegular";
            font-size: 64px;
            text-transform: uppercase;
            font-weight: 400;
            padding: 9px 25px;
        }

        .reviews .container .reviews_wrapp .reviews_content .top_bottom {
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center;
            -webkit-box-pack: center;
            -ms-flex-pack: center;
            justify-content: center;
        }

        .reviews .container .reviews_wrapp .reviews_content .top_bottom .top_lin {
            width: 100%;
            height: 1px;
            background: -webkit-gradient(linear, left top, right top, from(black), color-stop(white), to(black));
            background: linear-gradient(to right, black, white, black);
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center;
            -webkit-box-pack: center;
            -ms-flex-pack: center;
            justify-content: center;
        }

        .reviews .container .reviews_wrapp .reviews_content .top_bottom .top_lin .top_bol {
            width: 8px;
            height: 8px;
            border-radius: 50px;
            background-color: white;
        }

        .reviews .container .reviews_wrapp .reviews_content .scrollbar {
            overflow-y: scroll;
            height: 930px;
        }

        .reviews .container .reviews_wrapp .reviews_content .scrollbar .scrollbar_content .scrollbar_wrapper {
            margin: 50px 66px;
        }

        .reviews .container .reviews_wrapp .reviews_content .scrollbar .scrollbar_content .scrollbar_wrapper .scrollbar_top {
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center;
            gap: 28px;
            -webkit-box-pack: start;
            -ms-flex-pack: start;
            justify-content: start;
        }

        .reviews .container .reviews_wrapp .reviews_content .scrollbar .scrollbar_content .scrollbar_wrapper .scrollbar_top .scrollbar_name .scrollbar_p {
            color: white;
            font-family: "MullerRegular";
            font-size: 18px;
            text-transform: uppercase;
        }

        .reviews .container .reviews_wrapp .reviews_content .scrollbar .scrollbar_content .scrollbar_wrapper .scrollbar_top .scrollbar_date .scrollbar_da {
            color: #ADADAD;
            font-family: "MullerRegular";
            font-size: 18px;
            text-transform: uppercase;
        }

        .reviews .container .reviews_wrapp .reviews_content .scrollbar .scrollbar_content .scrollbar_wrapper .scrollbar_top .scrollbar_star {
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center;
            gap: 2px;
        }

        .reviews .container .reviews_wrapp .reviews_content .scrollbar .scrollbar_content .scrollbar_wrapper .scrollbar_name .scrollbar_h4 {
            font-size: 48px;
            color: white;
            font-family: "MullerRegular";
            text-transform: uppercase;
            padding-top: 18px;
        }

        .reviews .container .reviews_wrapp .reviews_content .scrollbar .scrollbar_content .scrollbar_wrapper .scrollbar_opis {
            padding-bottom: 60px;
        }

        .reviews .container .reviews_wrapp .reviews_content .scrollbar .scrollbar_content .scrollbar_wrapper .scrollbar_opis .scrollbar_h5 {
            color: #ADADAD;
            font-family: "MullerRegular";
            font-size: 18px;
            text-transform: uppercase;
            letter-spacing: 2px;
            line-height: 27px;
            padding-top: 13px;
        }

        .reviews .container .reviews_wrapp .reviews_content .scrollbar .scrollbar_content .scrollbar_wrapper .top_lin {
            width: 100%;
            height: 1px;
            background: -webkit-gradient(linear, left top, right top, from(black), color-stop(white), to(black));
            background: linear-gradient(to right, black, white, black);
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center;
            -webkit-box-pack: center;
            -ms-flex-pack: center;
            justify-content: center;
        }

        .reviews .container .reviews_wrapp .reviews_content #element::-webkit-scrollbar {
            width: 10px;
        }

        .reviews .container .reviews_wrapp .reviews_content #element::-webkit-scrollbar-track {
            -webkit-box-shadow: 5px 5px 5px -5px rgba(34, 60, 80, 0.2) inset;
            background-color: #1A1919;
            border-radius: 10px;
        }

        .reviews .container .reviews_wrapp .reviews_content #element::-webkit-scrollbar-thumb {
            border-radius: 10px;
            background: #D9D9D9;
        }

        .add_reviews .container .add_container {
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center;
            -webkit-box-pack: center;
            -ms-flex-pack: center;
            justify-content: center;
            margin-top: 160px;
        }

        .add_reviews .container .add_container .add_wrapper {
            background-image: url("../img/background/revievs.png");
            width: 1368px;
            height: 1368px;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center;
            -webkit-box-pack: center;
            -ms-flex-pack: center;
            justify-content: center;
            -webkit-box-orient: vertical;
            -webkit-box-direction: normal;
            -ms-flex-direction: column;
            flex-direction: column;
        }

        .add_reviews .container .add_container .add_wrapper .add_top {
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center;
            -webkit-box-pack: center;
            -ms-flex-pack: center;
            justify-content: center;
            -webkit-box-orient: vertical;
            -webkit-box-direction: normal;
            -ms-flex-direction: column;
            flex-direction: column;
        }

        .add_reviews .container .add_container .add_wrapper .add_top .add_h4 {
            font-size: 80px;
            color: white;
            font-family: "MullerLight";
            font-weight: 400;
            padding-bottom: 15px;
            text-transform: uppercase;
        }

        .add_reviews .container .add_container .add_wrapper .add_top .add_p {
            color: white;
            font-family: "MullerRegular";
            font-size: 18px;
            text-transform: uppercase;
            font-weight: 400;
            letter-spacing: 2px;
            padding-bottom: 60px;
        }

        .add_reviews .container .add_container .add_wrapper .add_form .add_input {
            width: 800px;
            height: 70px;
            border: 1px solid #9A9A9A;
            background-color: #1A1919;
            color: #616161;
            font-family: "MullerMedium";
            font-size: 18px;
            text-transform: uppercase;
            font-weight: 400;
            letter-spacing: 2px;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center;
            padding-left: 30px;
            margin-bottom: 20px;
        }

        .add_reviews .container .add_container .add_wrapper .add_form .add_lab {
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center;
            margin-bottom: 50px;
        }

        .add_reviews .container .add_container .add_wrapper .add_form .add_lab .upload-button {
            overflow: hidden;
            display: inline-block;
            font-family: "MullerMedium";
            font-weight: 400;
            border: 2px solid white;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center;
            -webkit-box-pack: center;
            -ms-flex-pack: center;
            justify-content: center;
            line-height: 1.5;
            color: white;
            text-align: center;
            text-decoration: none;
            -webkit-transition: all 0.3s ease;
            transition: all 0.3s ease;
            width: 391px;
            height: 70px;
            font-size: 18px;
            background-color: black;
        }

        .add_reviews .container .add_container .add_wrapper .add_form .add_lab .upload-button span {
            position: relative;
            z-index: 1;
        }

        .add_reviews .container .add_container .add_wrapper .add_form .add_lab .upload-button input[type=file] {
            position: absolute;
            top: 0;
            right: 0;
            bottom: 0;
            left: 0;
            width: 10%;
            height: 100%;
            opacity: 0;
        }

        .add_reviews .container .add_container .add_wrapper .add_form .add_lab .add_st {
            padding-left: 60px;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
        }

        .add_reviews .container .add_container .add_wrapper .add_form .add_lab .add_st .add_star {
            width: 70px;
            height: 70px;
        }

        .add_reviews .container .add_container .add_wrapper .add_form .add_sub {
            width: 802px;
            height: 70px;
            background-color: white;
            font-family: "mull", sans-serif;
            font-size: 18px;
            text-transform: uppercase;
            font-weight: 400;
            letter-spacing: 2px;
            text-decoration: underline;
        }

        .flight_class {
            position: relative;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-pack: center;
            -ms-flex-pack: center;
            justify-content: center;
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center;
            -webkit-box-orient: vertical;
            -webkit-box-direction: normal;
            -ms-flex-direction: column;
            flex-direction: column;
        }

        .flight_class .name_page {
            width: 100%;
            font-weight: 400;
            font-size: 32px;
            letter-spacing: 0.02em;
            text-transform: uppercase;
            font-family: "MullerRegular";
        }

        .flight_class .admin_btn {
            position: absolute;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            top: 0px;
            right: 0;
        }

        .flight_class .admin_btn a {
            opacity: 92%;
            -webkit-transition: 0.3s;
            transition: 0.3s;
        }

        .flight_class .admin_btn a:hover {
            opacity: 100%;
        }

        .flight_class .display_content {
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            gap: 20px;
        }

        .flight_class .display_content .flex_column_content {
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-orient: vertical;
            -webkit-box-direction: normal;
            -ms-flex-direction: column;
            flex-direction: column;
            display: inline-block;
        }

        .flight_class .display_content .flex_column_content .name_block {
            font-weight: 400;
            font-size: 24px;
            margin-top: 30px;
            margin-bottom: 20px;
            line-height: 130%;
            letter-spacing: 0.1em;
            text-transform: uppercase;
            font-family: "MullerRegular";
        }

        .flight_class .display_content .flex_column_content .column_flight {
            padding: 35px 41px;
            border: 1px solid #ffffff;
        }

        .flight_class .display_content .flex_column_content .column_flight .company {
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center;
            gap: 15px;
            width: 720px;
        }

        .flight_class .display_content .flex_column_content .column_flight .company .name_company {
            font-weight: 400;
            font-size: 24px;
            line-height: 130%;
            letter-spacing: 0.1em;
            text-transform: uppercase;
            font-family: "MullerRegular";
        }

        .flight_class .display_content .flex_column_content .column_flight .napravlenie {
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            gap: 10px;
            margin-top: 75px;
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center;
        }

        .flight_class .display_content .flex_column_content .column_flight .napravlenie .info_otkuda {
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-orient: vertical;
            -webkit-box-direction: normal;
            -ms-flex-direction: column;
            flex-direction: column;
            -webkit-box-pack: justify;
            -ms-flex-pack: justify;
            justify-content: space-between;
            height: 84px;
        }

        .flight_class .display_content .flex_column_content .column_flight .napravlenie .info_otkuda .kosmodrom {
            font-weight: 400;
            font-size: 16px;
            line-height: 130%;
            letter-spacing: 0.1em;
            font-family: "MullerRegular";
            text-transform: uppercase;
            width: 250px;
        }

        .flight_class .display_content .flex_column_content .column_flight .napravlenie .info_otkuda .time_vilet {
            font-weight: 400;
            font-size: 14px;
            line-height: 130%;
            width: 250px;
            letter-spacing: 0.1em;
            text-transform: uppercase;
            color: #9a9a9a;
            font-family: "MullerRegular";
        }

        .flight_class .display_content .flex_column_content .column_class {
            border-right: 1px solid #ffffff;
            border-bottom: 1px solid #ffffff;
            border-left: 1px solid #ffffff;
        }

        .flight_class .display_content .flex_column_content .column_class .row_class {
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            padding: 8px 31px;
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center;
            border-top: 1px solid #565656;
        }

        .flight_class .display_content .flex_column_content .column_class .row_class .name_class {
            font-weight: 400;
            font-family: "MullerRegular";
            font-size: 14px;
            line-height: 130%;
            letter-spacing: 0.1em;
            width: 170px;
            text-transform: uppercase;
            margin-right: 30px;
        }

        .flight_class .display_content .flex_column_content .column_class .row_class .col {
            font-weight: 400;
            font-size: 12px;
            width: 97px;
            font-family: "MullerRegular";
            line-height: 130%;
            letter-spacing: 0.1em;
            text-transform: uppercase;
            color: #9a9a9a;
            margin-right: 30px;
        }

        .flight_class .display_content .flex_column_content .column_class .row_class .pluss {
            width: 183px;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-orient: vertical;
            -webkit-box-direction: normal;
            -ms-flex-direction: column;
            flex-direction: column;
            gap: 3px;
            margin-right: 30px;
        }

        .flight_class .display_content .flex_column_content .column_class .row_class .pluss .bagaj {
            font-family: "MullerRegular";
            font-weight: 400;
            font-size: 14px;
            line-height: 130%;
            letter-spacing: 0.1em;
            text-transform: uppercase;
        }

        .flight_class .display_content .flex_column_content .column_class .row_class .price {
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            gap: 8px;
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center;
            margin-right: 32px;
        }

        .flight_class .display_content .flex_column_content .column_class .row_class .price .cost {
            font-family: "MullerRegular";
            font-weight: 400;
            font-size: 20px;
            line-height: 130%;
            letter-spacing: 0.02em;
            text-transform: uppercase;
        }

        .flight_class .display_content .flex_column_content .column_class .row_class .checkbox-wrapper-15 .cbx {
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
            -webkit-tap-highlight-color: transparent;
        }

        .flight_class .display_content .flex_column_content .column_class .row_class .checkbox-wrapper-15 .cbx span {
            display: inline-block;
            vertical-align: middle;
            -webkit-transform: translate3d(0, 0, 0);
            transform: translate3d(0, 0, 0);
        }

        .flight_class .display_content .flex_column_content .column_class .row_class .checkbox-wrapper-15 .cbx span:first-child {
            position: relative;
            width: 24px;
            height: 24px;
            border-radius: 50%;
            -webkit-transform: scale(1);
            -ms-transform: scale(1);
            transform: scale(1);
            vertical-align: middle;
            border: 1px solid #B9B8C3;
            -webkit-transition: all 0.2s ease;
            transition: all 0.2s ease;
        }

        .flight_class .display_content .flex_column_content .column_class .row_class .checkbox-wrapper-15 .cbx span:first-child svg {
            position: absolute;
            z-index: 1;
            top: 8px;
            left: 6px;
            fill: none;
            stroke: rgb(0, 0, 0);
            stroke-width: 2;
            stroke-linecap: round;
            stroke-linejoin: round;
            stroke-dasharray: 16px;
            stroke-dashoffset: 16px;
            -webkit-transition: all 0.3s ease;
            transition: all 0.3s ease;
            -webkit-transition-delay: 0.1s;
            transition-delay: 0.1s;
            -webkit-transform: translate3d(0, 0, 0);
            transform: translate3d(0, 0, 0);
        }

        .flight_class .display_content .flex_column_content .column_class .row_class .checkbox-wrapper-15 .cbx span:first-child:before {
            content: "";
            width: 100%;
            height: 100%;
            background: #ffffff;
            display: block;
            -webkit-transform: scale(0);
            -ms-transform: scale(0);
            transform: scale(0);
            opacity: 1;
            border-radius: 50%;
            -webkit-transition-delay: 0.2s;
            transition-delay: 0.2s;
        }

        .flight_class .display_content .flex_column_content .column_class .row_class .checkbox-wrapper-15 .cbx span:last-child {
            margin-left: 8px;
        }

        .flight_class .display_content .flex_column_content .column_class .row_class .checkbox-wrapper-15 .cbx span:last-child:after {
            content: "";
            position: absolute;
            top: 8px;
            left: 0;
            height: 1px;
            width: 100%;
            background: #B9B8C3;
            -webkit-transform-origin: 0 0;
            -ms-transform-origin: 0 0;
            transform-origin: 0 0;
            -webkit-transform: scaleX(0);
            -ms-transform: scaleX(0);
            transform: scaleX(0);
        }

        .flight_class .display_content .flex_column_content .column_class .row_class .checkbox-wrapper-15 .cbx:hover span:first-child {
            border-color: #ffffff;
        }

        .flight_class .display_content .flex_column_content .column_class .row_class .checkbox-wrapper-15 .inp-cbx:checked+.cbx span:first-child {
            border-color: #ffffff;
            background: #ffffff;
            -webkit-animation: check-15 0.6s ease;
            animation: check-15 0.6s ease;
        }

        .flight_class .display_content .flex_column_content .column_class .row_class .checkbox-wrapper-15 .inp-cbx:checked+.cbx span:first-child svg {
            stroke-dashoffset: 0;
        }

        .flight_class .display_content .flex_column_content .column_class .row_class .checkbox-wrapper-15 .inp-cbx:checked+.cbx span:first-child:before {
            -webkit-transform: scale(2.2);
            -ms-transform: scale(2.2);
            transform: scale(2.2);
            opacity: 0;
            -webkit-transition: all 0.6s ease;
            transition: all 0.6s ease;
        }

        .flight_class .display_content .flex_column_content .column_class .row_class .checkbox-wrapper-15 .inp-cbx:checked+.cbx span:last-child {
            color: #B9B8C3;
            -webkit-transition: all 0.3s ease;
            transition: all 0.3s ease;
        }

        @-webkit-keyframes check-15 {
            50% {
                -webkit-transform: scale(1.2);
                transform: scale(1.2);
            }
        }

        @keyframes check-15 {
            50% {
                -webkit-transform: scale(1.2);
                transform: scale(1.2);
            }
        }

        .flight_class .continie {
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            background: #d9d9d9;
            width: 528px;
            height: 60px;
            font-weight: 400;
            font-size: 18px;
            text-transform: uppercase;
            text-align: center;
            color: #000;
            font-family: "MullerRegular";
            -webkit-box-pack: center;
            -ms-flex-pack: center;
            justify-content: center;
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center;
            margin-top: 35px;
            -webkit-transition: 0.3s;
            transition: 0.3s;
            margin-bottom: 100px;
        }

        .flight_class .continie:hover {
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            background: #ffffff;
            width: 528px;
            height: 60px;
            font-weight: 400;
            font-size: 18px;
            text-transform: uppercase;
            text-align: center;
            color: #000;
            font-family: "MullerRegular";
            -webkit-box-pack: center;
            -ms-flex-pack: center;
            justify-content: center;
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center;
            margin-top: 35px;
        }

        .add_pass {
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            gap: 20px;
        }

        .add_pass .block_add_turist {
            width: 1213px;
        }

        .add_pass .block_add_turist .name_page {
            position: sticky;
            top: 20px;
            font-weight: 400;
            font-size: 32px;
            letter-spacing: 0.02em;
            text-transform: uppercase;
            font-family: "MullerRegular";
            margin-bottom: 30px;
        }

        .add_pass .block_add_turist .block_content_add_turist {
            position: sticky;
            top: 90px;
            padding: 35px 40px 40px 40px;
            border: 1px solid #ffffff;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-orient: vertical;
            -webkit-box-direction: normal;
            -ms-flex-direction: column;
            flex-direction: column;
            gap: 30px;
        }

        .add_pass .block_add_turist .block_content_add_turist .qweweweq {
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-orient: vertical;
            -webkit-box-direction: normal;
            -ms-flex-direction: column;
            flex-direction: column;
        }

        .add_pass .block_add_turist .block_content_add_turist .qweweweq .name_block {
            font-weight: 400;
            font-size: 24px;
            line-height: 130%;
            letter-spacing: 0.1em;
            text-transform: uppercase;
            margin-bottom: 25px;
            font-family: "MullerRegular";
        }

        .add_pass .block_add_turist .block_content_add_turist .qweweweq .add_turist_form {
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-orient: vertical;
            -webkit-box-direction: normal;
            -ms-flex-direction: column;
            flex-direction: column;
            gap: 12px;
            -webkit-box-align: end;
            -ms-flex-align: end;
            align-items: flex-end;
        }

        .add_pass .block_add_turist .block_content_add_turist .qweweweq .add_turist_form .display_flex {
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            gap: 10px;
        }

        .add_pass .block_add_turist .block_content_add_turist .qweweweq .add_turist_form .display_flex .top_inputs {
            padding-left: 19px;
            padding-top: 2px;
            border: 2px solid #9a9a9a;
            width: 276px;
            background: #1a1919;
            height: 47px;
            color: #ffffff;
            font-size: 16px;
            font-family: "MullerRegular";
            letter-spacing: 0.02em;
            text-transform: uppercase;
            color: #ffffff;
        }

        .add_pass .block_add_turist .block_content_add_turist .qweweweq .add_turist_form .display_flex .data_inputs {
            padding-left: 19px;
            border: 1px solid #9a9a9a;
            width: 188px;
            background: #1a1919;
            height: 47px;
            color: #ffffff;
            font-size: 16px;
            padding-top: 2px;
            font-family: "MullerRegular";
            letter-spacing: 0.02em;
            text-transform: uppercase;
            color: #ffffff;
        }

        .add_pass .block_add_turist .block_content_add_turist .qweweweq .add_turist_form .display_flex .data_inputs::-webkit-calendar-picker-indicator {
            display: none;
        }

        .add_pass .block_add_turist .block_content_add_turist .qweweweq .add_turist_form .display_flex .pol_inputs {
            -webkit-appearance: none;
            -moz-appearance: none;
            appearance: none;
            padding-left: 19px;
            border: 2px solid #9a9a9a;
            width: 78px;
            background: #1a1919;
            padding-top: 2px;
            height: 47px;
            color: #ffffff;
            font-size: 16px;
            font-family: "MullerRegular";
            letter-spacing: 0.01em;
            text-transform: uppercase;
        }

        .add_pass .block_add_turist .block_content_add_turist .qweweweq .add_turist_form .display_flex .pol_inputs:-ms-expand {
            display: none;
        }

        .add_pass .block_add_turist .block_content_add_turist .qweweweq .add_turist_form .display_flex .pol_inputs::-webkit-select {
            background: transparent;
        }

        .add_pass .block_add_turist .block_content_add_turist .qweweweq .add_turist_form .display_flex .pol_inputs option {
            font-family: "MullerRegular", sans-serif;
            /* Замените "YourDesiredFont" на имя вашего шрифта */
        }

        .add_pass .block_add_turist .block_content_add_turist .qweweweq .add_turist_form .btn_add_turist {
            font-size: 18px;
            font-family: "MullerRegular";
            text-transform: uppercase;
            text-decoration: underline;
            -webkit-text-decoration-skip-ink: none;
            text-decoration-skip-ink: none;
            color: #000;
            width: 276px;
            height: 46px;
            background: #bbbbbb;
            -webkit-transition: 0.2s;
            transition: 0.2s;
        }

        .add_pass .block_add_turist .block_content_add_turist .qweweweq .add_turist_form .btn_add_turist:hover {
            -webkit-transition: 0.3s;
            transition: 0.3s;
            font-size: 18px;
            font-family: "MullerRegular";
            text-transform: uppercase;
            text-decoration: underline;
            -webkit-text-decoration-skip-ink: none;
            text-decoration-skip-ink: none;
            color: #000;
            width: 276px;
            height: 46px;
            background: #ffffff;
        }

        .add_pass .block_add_turist .block_content_add_turist .qweweweq .vklad_sort {
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            gap: 20px;
        }

        .add_pass .block_all_info_about_broni {
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-orient: vertical;
            -webkit-box-direction: normal;
            -ms-flex-direction: column;
            flex-direction: column;
        }

        .add_pass .block_all_info_about_broni .top_white_block {
            background: #d9d9d9;
            width: 391px;
            height: 116px;
        }

        .add_pass .block_all_info_about_broni .top_white_block .top_white_block_content {
            padding: 40px;
            padding-top: 35px;
        }

        .add_pass .block_all_info_about_broni .top_white_block .top_white_block_content .little_text {
            font-weight: 400;
            font-family: "MullerRegular";
            font-size: 14px;
            line-height: 130%;
            letter-spacing: 0.05em;
            text-transform: uppercase;
            color: #2d2d2d;
            margin-bottom: 10px;
        }

        .add_pass .block_all_info_about_broni .top_white_block .top_white_block_content .cost {
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            gap: 6px;
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center;
        }

        .add_pass .block_all_info_about_broni .top_white_block .top_white_block_content .cost .cost_p {
            font-family: "MullerRegular";
            font-weight: 400;
            font-size: 32px;
            line-height: 130%;
            letter-spacing: 0.02em;
            text-transform: uppercase;
            color: #000;
        }

        .add_pass .block_all_info_about_broni .bottom_block_border {
            border: 1px solid #ffffff;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-orient: vertical;
            -webkit-box-direction: normal;
            -ms-flex-direction: column;
            flex-direction: column;
            gap: 35px;
        }

        .add_pass .block_all_info_about_broni .bottom_block_border .bottom_block_border_content {
            padding: 0px 40px;
            width: 389px;
        }

        .add_pass .block_all_info_about_broni .bottom_block_border .bottom_block_border_content .main_name_bl {
            margin-top: 35px;
            font-weight: 400;
            font-size: 32px;
            letter-spacing: 0.02em;
            text-transform: uppercase;
            font-family: "MullerRegular";
            margin-bottom: 30px;
        }

        .add_pass .block_all_info_about_broni .bottom_block_border .bottom_block_border_content .name_blovk {
            font-weight: 400;
            font-size: 24px;
            line-height: 130%;
            letter-spacing: 0.1em;
            text-transform: uppercase;
            font-family: "MullerRegular";
        }

        .add_pass .block_all_info_about_broni .bottom_block_border .bottom_block_border_content .tet_a_tet {
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            gap: 10px;
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center;
            margin-bottom: 20px;
        }

        .add_pass .block_all_info_about_broni .bottom_block_border .bottom_block_border_content .tet_a_tet .column_time {
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            margin-top: 25px;
            -webkit-box-orient: vertical;
            -webkit-box-direction: normal;
            -ms-flex-direction: column;
            flex-direction: column;
            gap: 15px;
            width: 122px;
        }

        .add_pass .block_all_info_about_broni .bottom_block_border .bottom_block_border_content .tet_a_tet .column_time .time {
            font-weight: 400;
            font-size: 18px;
            line-height: 130%;
            letter-spacing: 0.1em;
            text-transform: uppercase;
            font-family: "MullerRegular";
        }

        .add_pass .block_all_info_about_broni .bottom_block_border .bottom_block_border_content .tet_a_tet .column_time .lit {
            font-family: "MullerRegular";
            font-weight: 400;
            font-size: 14px;
            line-height: 130%;
            letter-spacing: 0.1em;
            text-transform: uppercase;
            color: #9a9a9a;
        }

        .add_pass .block_all_info_about_broni .bottom_block_border .bottom_block_border_content .hotel_info {
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-orient: vertical;
            -webkit-box-direction: normal;
            -ms-flex-direction: column;
            flex-direction: column;
        }

        .add_pass .block_all_info_about_broni .bottom_block_border .bottom_block_border_content .hotel_info .stars {
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            margin-bottom: 8px;
        }

        .add_pass .block_all_info_about_broni .bottom_block_border .bottom_block_border_content .hotel_info .name_hotel {
            font-family: "MullerRegular";
            font-weight: 400;
            font-size: 18px;
            line-height: 130%;
            letter-spacing: 0.1em;
            text-transform: uppercase;
            margin-bottom: 6px;
        }

        .add_pass .block_all_info_about_broni .bottom_block_border .bottom_block_border_content .hotel_info .class_and_eat {
            font-family: "MullerMedium";
            font-size: 13px;
            line-height: 130%;
            letter-spacing: 0.05em;
            text-transform: uppercase;
            color: #9a9a9a;
        }

        .add_pass .block_all_info_about_broni .bottom_block_border .bottom_block_border_content .time_info {
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            gap: 15px;
            margin-top: 20px;
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center;
        }

        .add_pass .block_all_info_about_broni .bottom_block_border .bottom_block_border_content .time_info .name_hotel {
            font-family: "MullerRegular";
            font-weight: 400;
            font-size: 18px;
            line-height: 130%;
            letter-spacing: 0.1em;
            text-transform: uppercase;
            margin-bottom: 6px;
        }

        .add_pass .block_all_info_about_broni .bottom_block_border .bottom_block_border_content .time_info .class_and_eat {
            font-family: "MullerMedium";
            font-size: 13px;
            line-height: 130%;
            letter-spacing: 0.05em;
            text-transform: uppercase;
            color: #9a9a9a;
        }

        .add_pass .block_all_info_about_broni .bottom_block_border .bottom_block_border_content .bron {
            width: 100%;
            height: 60px;
            font-weight: 400;
            font-size: 18px;
            text-transform: uppercase;
            text-align: center;
            background: #d9d9d9;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-pack: center;
            -ms-flex-pack: center;
            justify-content: center;
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center;
            font-family: "MullerRegular";
            color: #000;
            -webkit-transition: 0.2s;
            transition: 0.2s;
            margin-top: 30px;
            margin-bottom: 40px;
        }

        .add_pass .block_all_info_about_broni .bottom_block_border .bottom_block_border_content .bron:hover {
            background: #ffffff;
        }

        .add_pass .block_all_info_about_broni .bottom_block_border .line_white {
            background-color: #ffffff;
        }

        .add_pass .block_all_info_about_broni .bottom_block_border .position {
            position: sticky;
            top: 30px;
        }

        .add_pass .block_all_info_about_broni .bottom_block_border .line_grey {
            background-color: #ffffff;
            opacity: 20%;
        }

        .add_pass .block_all_info_about_broni .position {
            position: sticky;
            top: 30px;
        }

        .add_pass .block_add_turist {
            width: 1213px;
        }

        .add_pass .block_add_turist .name_page {
            position: sticky;
            top: 20px;
            font-weight: 400;
            font-size: 32px;
            letter-spacing: 0.02em;
            text-transform: uppercase;
            font-family: "MullerRegular";
            margin-bottom: 30px;
        }

        .add_pass .block_add_turist .block_content_add_turist {
            position: sticky;
            top: 90px;
            padding: 35px 40px 40px 40px;
            border: 1px solid #ffffff;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-orient: vertical;
            -webkit-box-direction: normal;
            -ms-flex-direction: column;
            flex-direction: column;
            gap: 30px;
        }

        .add_pass .block_add_turist .block_content_add_turist .qweweweq {
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-orient: vertical;
            -webkit-box-direction: normal;
            -ms-flex-direction: column;
            flex-direction: column;
        }

        .add_pass .block_add_turist .block_content_add_turist .qweweweq .name_block {
            font-weight: 400;
            font-size: 24px;
            line-height: 130%;
            letter-spacing: 0.1em;
            text-transform: uppercase;
            margin-bottom: 25px;
            font-family: "MullerRegular";
        }

        .add_pass .block_add_turist .block_content_add_turist .qweweweq .add_turist_form {
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-orient: vertical;
            -webkit-box-direction: normal;
            -ms-flex-direction: column;
            flex-direction: column;
            gap: 12px;
            -webkit-box-align: end;
            -ms-flex-align: end;
            align-items: flex-end;
        }

        .add_pass .block_add_turist .block_content_add_turist .qweweweq .add_turist_form .display_flex {
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            gap: 10px;
        }

        .add_pass .block_add_turist .block_content_add_turist .qweweweq .add_turist_form .display_flex .top_inputs {
            -webkit-appearance: none;
            -moz-appearance: none;
            appearance: none;
            padding-left: 19px;
            padding-top: 2px;
            border: 2px solid #9a9a9a;
            width: 276px;
            background: #1a1919;
            height: 47px;
            color: #ffffff;
            font-size: 16px;
            font-family: "MullerRegular";
            letter-spacing: 0.02em;
            text-transform: uppercase;
            color: #ffffff;
        }

        .add_pass .block_add_turist .block_content_add_turist .qweweweq .add_turist_form .display_flex .top_inputs:-ms-expand {
            display: none;
        }

        .add_pass .block_add_turist .block_content_add_turist .qweweweq .add_turist_form .display_flex .top_inputs:-webkit-select {
            background: transparent;
        }

        .add_pass .block_add_turist .block_content_add_turist .qweweweq .add_turist_form .display_flex .top_inputs option {
            font-family: "MullerRegular", sans-serif;
            /* Замените "YourDesiredFont" на имя вашего шрифта */
            letter-spacing: 0.01em;
        }

        .add_pass .block_add_turist .block_content_add_turist .qweweweq .add_turist_form .display_flex .data_inputs {
            padding-left: 19px;
            border: 1px solid #9a9a9a;
            width: 188px;
            background: #1a1919;
            height: 47px;
            color: #ffffff;
            font-size: 16px;
            padding-top: 2px;
            font-family: "MullerRegular";
            letter-spacing: 0.02em;
            text-transform: uppercase;
            color: #ffffff;
        }

        .add_pass .block_add_turist .block_content_add_turist .qweweweq .add_turist_form .display_flex .data_inputs::-webkit-calendar-picker-indicator {
            display: none;
        }

        .add_pass .block_add_turist .block_content_add_turist .qweweweq .add_turist_form .display_flex .pol_inputs {
            -webkit-appearance: none;
            -moz-appearance: none;
            appearance: none;
            padding-left: 19px;
            border: 2px solid #9a9a9a;
            width: 78px;
            background: #1a1919;
            padding-top: 2px;
            height: 47px;
            color: #ffffff;
            font-size: 16px;
            font-family: "MullerRegular";
            letter-spacing: 0.01em;
            text-transform: uppercase;
        }

        .add_pass .block_add_turist .block_content_add_turist .qweweweq .add_turist_form .display_flex .pol_inputs::-ms-expand {
            display: none;
        }

        .add_pass .block_add_turist .block_content_add_turist .qweweweq .add_turist_form .display_flex .pol_inputs::-webkit-select {
            background: transparent;
        }

        .add_pass .block_add_turist .block_content_add_turist .qweweweq .add_turist_form .display_flex .pol_inputs option {
            font-family: "MullerRegular", sans-serif;
            /* Замените "YourDesiredFont" на имя вашего шрифта */
            letter-spacing: 0.01em;
        }

        .add_pass .block_add_turist .block_content_add_turist .qweweweq .add_turist_form .btn_add_turist {
            font-size: 18px;
            font-family: "MullerRegular";
            text-transform: uppercase;
            text-decoration: underline;
            -webkit-text-decoration-skip-ink: none;
            text-decoration-skip-ink: none;
            color: #000;
            width: 276px;
            height: 46px;
            background: #bbbbbb;
            -webkit-transition: 0.2s;
            transition: 0.2s;
        }

        .add_pass .block_add_turist .block_content_add_turist .qweweweq .add_turist_form .btn_add_turist:hover {
            -webkit-transition: 0.3s;
            transition: 0.3s;
            font-size: 18px;
            font-family: "MullerRegular";
            text-transform: uppercase;
            text-decoration: underline;
            -webkit-text-decoration-skip-ink: none;
            text-decoration-skip-ink: none;
            color: #000;
            width: 276px;
            height: 46px;
            background: #ffffff;
        }

        .add_pass .block_all_info_about_broni {
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-orient: vertical;
            -webkit-box-direction: normal;
            -ms-flex-direction: column;
            flex-direction: column;
        }

        .add_pass .block_all_info_about_broni .top_white_block {
            background: #d9d9d9;
            width: 391px;
            height: 116px;
        }

        .add_pass .block_all_info_about_broni .top_white_block .top_white_block_content {
            padding: 40px;
            padding-top: 35px;
        }

        .add_pass .block_all_info_about_broni .top_white_block .top_white_block_content .little_text {
            font-weight: 400;
            font-family: "MullerRegular";
            font-size: 14px;
            line-height: 130%;
            letter-spacing: 0.05em;
            text-transform: uppercase;
            color: #2d2d2d;
            margin-bottom: 10px;
        }

        .add_pass .block_all_info_about_broni .top_white_block .top_white_block_content .cost {
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            gap: 6px;
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center;
        }

        .add_pass .block_all_info_about_broni .top_white_block .top_white_block_content .cost .cost_p {
            font-family: "MullerRegular";
            font-weight: 400;
            font-size: 32px;
            line-height: 130%;
            letter-spacing: 0.02em;
            text-transform: uppercase;
            color: #000;
        }

        .add_pass .block_all_info_about_broni .bottom_block_border {
            border: 1px solid #ffffff;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-orient: vertical;
            -webkit-box-direction: normal;
            -ms-flex-direction: column;
            flex-direction: column;
            gap: 35px;
        }

        .add_pass .block_all_info_about_broni .bottom_block_border .bottom_block_border_content {
            padding: 0px 40px;
            width: 389px;
        }

        .add_pass .block_all_info_about_broni .bottom_block_border .bottom_block_border_content .main_name_bl {
            margin-top: 35px;
            font-weight: 400;
            font-size: 32px;
            letter-spacing: 0.02em;
            text-transform: uppercase;
            font-family: "MullerRegular";
            margin-bottom: 30px;
        }

        .add_pass .block_all_info_about_broni .bottom_block_border .bottom_block_border_content .name_blovk {
            font-weight: 400;
            font-size: 24px;
            line-height: 130%;
            letter-spacing: 0.1em;
            text-transform: uppercase;
            font-family: "MullerRegular";
        }

        .add_pass .block_all_info_about_broni .bottom_block_border .bottom_block_border_content .tet_a_tet {
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            gap: 10px;
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center;
            margin-bottom: 20px;
        }

        .add_pass .block_all_info_about_broni .bottom_block_border .bottom_block_border_content .tet_a_tet .column_time {
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            margin-top: 25px;
            -webkit-box-orient: vertical;
            -webkit-box-direction: normal;
            -ms-flex-direction: column;
            flex-direction: column;
            gap: 15px;
            width: 122px;
        }

        .add_pass .block_all_info_about_broni .bottom_block_border .bottom_block_border_content .tet_a_tet .column_time .time {
            font-weight: 400;
            font-size: 18px;
            line-height: 130%;
            letter-spacing: 0.1em;
            text-transform: uppercase;
            font-family: "MullerRegular";
        }

        .add_pass .block_all_info_about_broni .bottom_block_border .bottom_block_border_content .tet_a_tet .column_time .lit {
            font-family: "MullerRegular";
            font-weight: 400;
            font-size: 14px;
            line-height: 130%;
            letter-spacing: 0.1em;
            text-transform: uppercase;
            color: #9a9a9a;
        }

        .add_pass .block_all_info_about_broni .bottom_block_border .bottom_block_border_content .hotel_info {
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-orient: vertical;
            -webkit-box-direction: normal;
            -ms-flex-direction: column;
            flex-direction: column;
        }

        .add_pass .block_all_info_about_broni .bottom_block_border .bottom_block_border_content .hotel_info .stars {
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            margin-bottom: 8px;
        }

        .add_pass .block_all_info_about_broni .bottom_block_border .bottom_block_border_content .hotel_info .name_hotel {
            font-family: "MullerRegular";
            font-weight: 400;
            font-size: 18px;
            line-height: 130%;
            letter-spacing: 0.1em;
            text-transform: uppercase;
            margin-bottom: 6px;
        }

        .add_pass .block_all_info_about_broni .bottom_block_border .bottom_block_border_content .hotel_info .class_and_eat {
            font-family: "MullerMedium";
            font-size: 13px;
            line-height: 130%;
            letter-spacing: 0.05em;
            text-transform: uppercase;
            color: #9a9a9a;
        }

        .add_pass .block_all_info_about_broni .bottom_block_border .bottom_block_border_content .time_info {
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            gap: 15px;
            margin-top: 20px;
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center;
        }

        .add_pass .block_all_info_about_broni .bottom_block_border .bottom_block_border_content .time_info .name_hotel {
            font-family: "MullerRegular";
            font-weight: 400;
            font-size: 18px;
            line-height: 130%;
            letter-spacing: 0.1em;
            text-transform: uppercase;
            margin-bottom: 6px;
        }

        .add_pass .block_all_info_about_broni .bottom_block_border .bottom_block_border_content .time_info .class_and_eat {
            font-family: "MullerMedium";
            font-size: 13px;
            line-height: 130%;
            letter-spacing: 0.05em;
            text-transform: uppercase;
            color: #9a9a9a;
        }

        .add_pass .block_all_info_about_broni .bottom_block_border .bottom_block_border_content .bron {
            width: 100%;
            height: 60px;
            font-weight: 400;
            font-size: 18px;
            text-transform: uppercase;
            text-align: center;
            background: #d9d9d9;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-pack: center;
            -ms-flex-pack: center;
            justify-content: center;
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center;
            font-family: "MullerRegular";
            color: #000;
            -webkit-transition: 0.2s;
            transition: 0.2s;
            margin-top: 30px;
            margin-bottom: 40px;
        }

        .add_pass .block_all_info_about_broni .bottom_block_border .bottom_block_border_content .bron:hover {
            background: #ffffff;
        }

        .add_pass .block_all_info_about_broni .bottom_block_border .line_white {
            background-color: #ffffff;
        }

        .add_pass .block_all_info_about_broni .bottom_block_border .line_grey {
            background-color: #ffffff;
            opacity: 20%;
        }

        .add_pass .block_all_info_about_broni .position {
            position: sticky;
            top: 30px;
        }

        .bron_end {
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-pack: justify;
            -ms-flex-pack: justify;
            justify-content: space-between;
        }

        .bron_end .left_just_text {
            width: 420px;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            margin-top: 30px;
            -webkit-box-orient: vertical;
            -webkit-box-direction: normal;
            -ms-flex-direction: column;
            flex-direction: column;
        }

        .bron_end .left_just_text .bron_uspeh {
            font-weight: 400;
            font-size: 48px;
            line-height: 120%;
            letter-spacing: 0.02em;
            text-transform: uppercase;
            font-family: "MullerRegular";
            margin-bottom: 30px;
        }

        .bron_end .left_just_text .short_inf {
            margin-bottom: 15px;
            width: 412px;
            font-weight: 400;
            font-size: 15px;
            line-height: 140%;
            letter-spacing: 0.1em;
            text-transform: uppercase;
            color: #9a9a9a;
            font-family: "MullerRegular";
        }

        .bron_end .left_just_text .short_inf .white_email {
            color: #fff;
            font-weight: 500;
            font-family: "MullerMedium";
        }

        .bron_end .right_bilet .content_bron {
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-orient: vertical;
            -webkit-box-direction: normal;
            -ms-flex-direction: column;
            flex-direction: column;
            gap: 20px;
        }

        .bron_end .right_bilet .content_bron .hrum_hrum {
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-orient: vertical;
            -webkit-box-direction: normal;
            -ms-flex-direction: column;
            flex-direction: column;
            gap: 15px;
            -webkit-box-align: end;
            -ms-flex-align: end;
            align-items: flex-end;
        }

        .bron_end .right_bilet .content_bron .hrum_hrum .grey_top_inf {
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
        }

        .bron_end .right_bilet .content_bron .hrum_hrum .grey_top_inf .data_bron {
            font-weight: 400;
            font-size: 14px;
            width: 262px;
            line-height: 130%;
            text-align: right;
            letter-spacing: 0.1em;
            text-transform: uppercase;
            color: #9a9a9a;
            font-family: "MullerRegular";
        }

        .bron_end .right_bilet .content_bron .hrum_hrum .grey_top_inf .number_order {
            text-align: right;
            margin-right: 100px;
            font-weight: 400;
            font-size: 14px;
            width: 223px;
            line-height: 130%;
            letter-spacing: 0.1em;
            text-transform: uppercase;
            color: #9a9a9a;
            font-family: "MullerRegular";
        }

        .bron_end .right_bilet .content_bron .hrum_hrum .panel_my_bron {
            border: 1px solid #fff;
            width: 1133px;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            height: 424px;
        }

        .bron_end .right_bilet .content_bron .hrum_hrum .panel_my_bron .bottom_block_border_content {
            padding: 0px 40px;
            width: 389px;
        }

        .bron_end .right_bilet .content_bron .hrum_hrum .panel_my_bron .bottom_block_border_content .main_name_bl {
            margin-top: 35px;
            font-weight: 400;
            font-size: 32px;
            letter-spacing: 0.02em;
            text-transform: uppercase;
            font-family: "MullerRegular";
            margin-bottom: 30px;
        }

        .bron_end .right_bilet .content_bron .hrum_hrum .panel_my_bron .bottom_block_border_content .name_blovk {
            font-weight: 400;
            font-size: 24px;
            line-height: 130%;
            letter-spacing: 0.1em;
            text-transform: uppercase;
            font-family: "MullerRegular";
        }

        .bron_end .right_bilet .content_bron .hrum_hrum .panel_my_bron .bottom_block_border_content .tet_a_tet {
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            gap: 10px;
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center;
            margin-bottom: 20px;
        }

        .bron_end .right_bilet .content_bron .hrum_hrum .panel_my_bron .bottom_block_border_content .tet_a_tet .column_time {
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            margin-top: 25px;
            -webkit-box-orient: vertical;
            -webkit-box-direction: normal;
            -ms-flex-direction: column;
            flex-direction: column;
            gap: 15px;
            width: 122px;
        }

        .bron_end .right_bilet .content_bron .hrum_hrum .panel_my_bron .bottom_block_border_content .tet_a_tet .column_time .time {
            font-weight: 400;
            font-size: 18px;
            line-height: 130%;
            letter-spacing: 0.1em;
            text-transform: uppercase;
            font-family: "MullerRegular";
        }

        .bron_end .right_bilet .content_bron .hrum_hrum .panel_my_bron .bottom_block_border_content .tet_a_tet .column_time .lit {
            font-family: "MullerRegular";
            font-weight: 400;
            font-size: 14px;
            line-height: 130%;
            letter-spacing: 0.1em;
            text-transform: uppercase;
            color: #9a9a9a;
        }

        .bron_end .right_bilet .content_bron .hrum_hrum .panel_my_bron .bottom_block_border_content .hotel_info {
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-orient: vertical;
            -webkit-box-direction: normal;
            -ms-flex-direction: column;
            flex-direction: column;
        }

        .bron_end .right_bilet .content_bron .hrum_hrum .panel_my_bron .bottom_block_border_content .hotel_info .stars {
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            margin-bottom: 8px;
        }

        .bron_end .right_bilet .content_bron .hrum_hrum .panel_my_bron .bottom_block_border_content .hotel_info .name_hotel {
            font-family: "MullerRegular";
            font-weight: 400;
            font-size: 18px;
            line-height: 130%;
            letter-spacing: 0.1em;
            text-transform: uppercase;
            margin-bottom: 6px;
        }

        .bron_end .right_bilet .content_bron .hrum_hrum .panel_my_bron .bottom_block_border_content .hotel_info .class_and_eat {
            font-family: "MullerMedium";
            font-size: 13px;
            line-height: 130%;
            letter-spacing: 0.05em;
            text-transform: uppercase;
            color: #9a9a9a;
        }

        .bron_end .right_bilet .content_bron .hrum_hrum .panel_my_bron .bottom_block_border_content .time_info {
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            gap: 15px;
            margin-top: 20px;
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center;
        }

        .bron_end .right_bilet .content_bron .hrum_hrum .panel_my_bron .bottom_block_border_content .time_info .name_hotel {
            font-family: "MullerRegular";
            font-weight: 400;
            font-size: 18px;
            line-height: 130%;
            letter-spacing: 0.1em;
            text-transform: uppercase;
            margin-bottom: 6px;
        }

        .bron_end .right_bilet .content_bron .hrum_hrum .panel_my_bron .bottom_block_border_content .time_info .class_and_eat {
            font-family: "MullerMedium";
            font-size: 13px;
            line-height: 130%;
            letter-spacing: 0.05em;
            text-transform: uppercase;
            color: #9a9a9a;
        }

        .bron_end .right_bilet .content_bron .hrum_hrum .panel_my_bron .bottom_block_border_content .white_block {
            background: #d9d9d9;
            height: 79px;
            width: 300px;
        }

        .bron_end .right_bilet .content_bron .hrum_hrum .panel_my_bron .bottom_block_border_content .white_block .cost {
            font-weight: 400;
            font-size: 32px;
            line-height: 130%;
            letter-spacing: 0.02em;
            text-transform: uppercase;
            color: #000;
        }

        .bron_end .right_bilet .content_bron .hrum_hrum .panel_my_bron .bottom_block_border_content .bron {
            width: 100%;
            height: 60px;
            font-weight: 400;
            font-size: 18px;
            text-transform: uppercase;
            text-align: center;
            background: #d9d9d9;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-pack: center;
            -ms-flex-pack: center;
            justify-content: center;
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center;
            font-family: "MullerRegular";
            color: #000;
            -webkit-transition: 0.2s;
            transition: 0.2s;
            margin-top: 30px;
            margin-bottom: 40px;
        }

        .bron_end .right_bilet .content_bron .hrum_hrum .panel_my_bron .bottom_block_border_content .bron:hover {
            background: #ffffff;
        }

        .bron_end .right_bilet .content_bron .hrum_hrum .panel_my_bron .position {
            position: sticky;
            top: 30px;
        }

        .bron_end .right_bilet .content_bron .hrum_hrum .panel_my_bron .qwe {
            margin-top: 30px;
        }

        .bron_end .right_bilet .content_bron .hrum_hrum .panel_my_bron .rew {
            margin-top: 61px;
        }

        .bron_end .right_bilet .content_bron .hrum_hrum .panel_my_bron .riobn .hz_kak_nazvat_block {
            padding: 30px;
        }

        .bron_end .right_bilet .content_bron .hrum_hrum .panel_my_bron .riobn .hz_kak_nazvat_block .name_blovk {
            font-weight: 400;
            font-size: 24px;
            line-height: 130%;
            letter-spacing: 0.1em;
            text-transform: uppercase;
            font-family: "MullerRegular";
        }

        .bron_end .right_bilet .content_bron .hrum_hrum .panel_my_bron .riobn .hz_kak_nazvat_block .tet_a_tet {
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            gap: 10px;
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center;
            margin-bottom: 20px;
        }

        .bron_end .right_bilet .content_bron .hrum_hrum .panel_my_bron .riobn .hz_kak_nazvat_block .tet_a_tet .column_time {
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            margin-top: 25px;
            -webkit-box-orient: vertical;
            -webkit-box-direction: normal;
            -ms-flex-direction: column;
            flex-direction: column;
            gap: 15px;
            width: 122px;
        }

        .bron_end .right_bilet .content_bron .hrum_hrum .panel_my_bron .riobn .hz_kak_nazvat_block .tet_a_tet .column_time .time {
            font-weight: 400;
            font-size: 18px;
            line-height: 130%;
            letter-spacing: 0.1em;
            text-transform: uppercase;
            font-family: "MullerRegular";
        }

        .bron_end .right_bilet .content_bron .hrum_hrum .panel_my_bron .riobn .hz_kak_nazvat_block .tet_a_tet .column_time .lit {
            font-family: "MullerRegular";
            font-weight: 400;
            font-size: 14px;
            line-height: 130%;
            letter-spacing: 0.1em;
            text-transform: uppercase;
            color: #9a9a9a;
        }

        .bron_end .right_bilet .content_bron .hrum_hrum .panel_my_bron .riobn .hz_kak_nazvat_block .hotel_info {
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-orient: vertical;
            -webkit-box-direction: normal;
            -ms-flex-direction: column;
            flex-direction: column;
        }

        .bron_end .right_bilet .content_bron .hrum_hrum .panel_my_bron .riobn .hz_kak_nazvat_block .hotel_info .stars {
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            margin-bottom: 8px;
        }

        .bron_end .right_bilet .content_bron .hrum_hrum .panel_my_bron .riobn .hz_kak_nazvat_block .hotel_info .name_hotel {
            font-family: "MullerRegular";
            font-weight: 400;
            font-size: 18px;
            line-height: 130%;
            letter-spacing: 0.1em;
            text-transform: uppercase;
            margin-bottom: 6px;
        }

        .bron_end .right_bilet .content_bron .hrum_hrum .panel_my_bron .riobn .hz_kak_nazvat_block .hotel_info .class_and_eat {
            font-family: "MullerMedium";
            font-size: 13px;
            line-height: 130%;
            letter-spacing: 0.05em;
            text-transform: uppercase;
            color: #9a9a9a;
        }

        .bron_end .right_bilet .content_bron .hrum_hrum .panel_my_bron .riobn .hz_kak_nazvat_block .time_info {
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            gap: 15px;
            margin-top: 20px;
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center;
        }

        .bron_end .right_bilet .content_bron .hrum_hrum .panel_my_bron .riobn .hz_kak_nazvat_block .time_info .name_hotel {
            font-family: "MullerRegular";
            font-weight: 400;
            font-size: 18px;
            line-height: 130%;
            letter-spacing: 0.1em;
            text-transform: uppercase;
            margin-bottom: 6px;
        }

        .bron_end .right_bilet .content_bron .hrum_hrum .panel_my_bron .riobn .hz_kak_nazvat_block .time_info .class_and_eat {
            font-family: "MullerMedium";
            font-size: 13px;
            line-height: 130%;
            letter-spacing: 0.05em;
            text-transform: uppercase;
            color: #9a9a9a;
        }

        .bron_end .right_bilet .content_bron .hrum_hrum .panel_my_bron .riobn .white_block {
            background: #d9d9d9;
            height: 80px;
            width: 100%;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center;
            -webkit-box-pack: end;
            -ms-flex-pack: end;
            justify-content: flex-end;
            padding-right: 40px;
            gap: 10px;
        }

        .bron_end .right_bilet .content_bron .hrum_hrum .panel_my_bron .riobn .white_block .cost {
            font-weight: 400;
            font-size: 32px;
            line-height: 130%;
            letter-spacing: 0.02em;
            text-transform: uppercase;
            font-family: "MullerRegular";
            color: #000;
        }

        .bron_end .right_bilet .content_bron .hrum_hrum .panel_my_bron .riobn .white_block svg {
            margin-bottom: 5px;
        }

        .profile_block {
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            gap: 20px;
        }

        .profile_block .block_add_turist {
            width: 1213px;
        }

        .profile_block .block_add_turist .name_page {
            position: sticky;
            top: 20px;
            font-weight: 400;
            font-size: 32px;
            letter-spacing: 0.02em;
            text-transform: uppercase;
            font-family: "MullerRegular";
            margin-bottom: 30px;
        }

        .profile_block .block_add_turist .block_content_add_turist {
            position: sticky;
            top: 90px;
            padding: 35px 40px 40px 40px;
            border: 1px solid #ffffff;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-orient: vertical;
            -webkit-box-direction: normal;
            -ms-flex-direction: column;
            flex-direction: column;
            gap: 30px;
        }

        .profile_block .block_add_turist .block_content_add_turist .qweweweq {
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-orient: vertical;
            -webkit-box-direction: normal;
            -ms-flex-direction: column;
            flex-direction: column;
        }

        .profile_block .block_add_turist .block_content_add_turist .qweweweq .name_block {
            font-weight: 400;
            font-size: 24px;
            line-height: 130%;
            letter-spacing: 0.1em;
            text-transform: uppercase;
            margin-bottom: 25px;
            font-family: "MullerRegular";
        }

        .profile_block .block_add_turist .block_content_add_turist .qweweweq .add_turist_form {
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-orient: vertical;
            -webkit-box-direction: normal;
            -ms-flex-direction: column;
            flex-direction: column;
            gap: 12px;
            -webkit-box-align: end;
            -ms-flex-align: end;
            align-items: flex-end;
        }

        .profile_block .block_add_turist .block_content_add_turist .qweweweq .add_turist_form .display_flex {
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            gap: 10px;
        }

        .profile_block .block_add_turist .block_content_add_turist .qweweweq .add_turist_form .display_flex .top_inputs {
            -webkit-appearance: none;
            -moz-appearance: none;
            appearance: none;
            padding-left: 19px;
            padding-top: 2px;
            border: 2px solid #9a9a9a;
            width: 276px;
            background: #1a1919;
            height: 47px;
            color: #ffffff;
            font-size: 16px;
            font-family: "MullerRegular";
            letter-spacing: 0.02em;
            text-transform: uppercase;
            color: #ffffff;
        }

        .profile_block .block_add_turist .block_content_add_turist .qweweweq .add_turist_form .display_flex .top_inputs::-ms-expand {
            display: none;
        }

        .profile_block .block_add_turist .block_content_add_turist .qweweweq .add_turist_form .display_flex .top_inputs::-webkit-select {
            background: transparent;
        }

        .profile_block .block_add_turist .block_content_add_turist .qweweweq .add_turist_form .display_flex .top_inputs option {
            font-family: "MullerRegular", sans-serif;
            /* Замените "YourDesiredFont" на имя вашего шрифта */
        }

        .profile_block .block_add_turist .block_content_add_turist .qweweweq .add_turist_form .display_flex .data_inputs {
            padding-left: 19px;
            border: 1px solid #9a9a9a;
            width: 188px;
            background: #1a1919;
            height: 47px;
            color: #ffffff;
            font-size: 16px;
            padding-top: 2px;
            font-family: "MullerRegular";
            letter-spacing: 0.02em;
            text-transform: uppercase;
            color: #ffffff;
        }

        .profile_block .block_add_turist .block_content_add_turist .qweweweq .add_turist_form .display_flex .data_inputs::-webkit-calendar-picker-indicator {
            display: none;
        }

        .profile_block .block_add_turist .block_content_add_turist .qweweweq .add_turist_form .display_flex .pol_inputs {
            -webkit-appearance: none;
            -moz-appearance: none;
            appearance: none;
            padding-left: 19px;
            border: 2px solid #9a9a9a;
            width: 78px;
            background: #1a1919;
            padding-top: 2px;
            height: 47px;
            color: #ffffff;
            font-size: 16px;
            font-family: "MullerRegular";
            letter-spacing: 0.01em;
            text-transform: uppercase;
        }

        .profile_block .block_add_turist .block_content_add_turist .qweweweq .add_turist_form .display_flex .pol_inputs::-ms-expand {
            display: none;
        }

        .profile_block .block_add_turist .block_content_add_turist .qweweweq .add_turist_form .display_flex .pol_inputs::-webkit-select {
            background: transparent;
        }

        .profile_block .block_add_turist .block_content_add_turist .qweweweq .add_turist_form .display_flex .pol_inputs option {
            font-family: "MullerRegular", sans-serif;
            /* Замените "YourDesiredFont" на имя вашего шрифта */
            letter-spacing: 0.01em;
        }

        .profile_block .block_add_turist .block_content_add_turist .qweweweq .add_turist_form .display_flex_pass {
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-orient: vertical;
            -webkit-box-direction: normal;
            -ms-flex-direction: column;
            flex-direction: column;
            gap: 20px;
        }

        .profile_block .block_add_turist .block_content_add_turist .qweweweq .add_turist_form .display_flex_pass .pg {
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            gap: 10px;
        }

        .profile_block .block_add_turist .block_content_add_turist .qweweweq .add_turist_form .display_flex_pass .pg .top_inputs {
            padding-left: 19px;
            padding-top: 2px;
            border: 2px solid #9a9a9a;
            width: 276px;
            background: #1a1919;
            height: 47px;
            color: #ffffff;
            font-size: 16px;
            font-family: "MullerRegular";
            letter-spacing: 0.02em;
            text-transform: uppercase;
            color: #ffffff;
        }

        .profile_block .block_add_turist .block_content_add_turist .qweweweq .add_turist_form .display_flex_pass .pg .data_inputs {
            padding-left: 19px;
            border: 1px solid #9a9a9a;
            width: 188px;
            background: #1a1919;
            height: 47px;
            color: #ffffff;
            font-size: 16px;
            padding-top: 2px;
            font-family: "MullerRegular";
            letter-spacing: 0.02em;
            text-transform: uppercase;
            color: #ffffff;
        }

        .profile_block .block_add_turist .block_content_add_turist .qweweweq .add_turist_form .display_flex_pass .pg .data_inputs::-webkit-calendar-picker-indicator {
            display: none;
        }

        .profile_block .block_add_turist .block_content_add_turist .qweweweq .add_turist_form .display_flex_pass .pg .pol_inputs {
            padding-left: 19px;
            border: 2px solid #9a9a9a;
            width: 78px;
            background: #1a1919;
            padding-top: 2px;
            height: 47px;
            color: #ffffff;
            font-size: 16px;
            font-family: "MullerRegular";
            letter-spacing: 0.01em;
            text-transform: uppercase;
        }

        .profile_block .block_add_turist .block_content_add_turist .qweweweq .add_turist_form .display_flex_pass .pg .pol_inputs option {
            font-family: "MullerRegular", sans-serif;
            /* Замените "YourDesiredFont" на имя вашего шрифта */
            letter-spacing: 0.01em;
        }

        .profile_block .block_add_turist .block_content_add_turist .qweweweq .add_turist_form .display_flex_pass .checkbox-wrapper-21 .control {
            display: block;
            position: relative;
            padding-left: 35px;
            padding-top: 3px;
            font-weight: 400;
            font-size: 18px;
            line-height: 130%;
            letter-spacing: 0.02em;
            text-transform: uppercase;
            color: #9a9a9a;
            font-size: 20px;
            font-family: "MullerRegular";
        }

        .profile_block .block_add_turist .block_content_add_turist .qweweweq .add_turist_form .display_flex_pass .checkbox-wrapper-21 .control input {
            position: absolute;
            z-index: -1;
            opacity: 0;
        }

        .profile_block .block_add_turist .block_content_add_turist .qweweweq .add_turist_form .display_flex_pass .checkbox-wrapper-21 .control input:checked~.control__indicator {
            background: #ffffff;
        }

        .profile_block .block_add_turist .block_content_add_turist .qweweweq .add_turist_form .display_flex_pass .checkbox-wrapper-21 .control input:checked~.control__indicator:after {
            display: block;
        }

        .profile_block .block_add_turist .block_content_add_turist .qweweweq .add_turist_form .display_flex_pass .checkbox-wrapper-21 .control input:disabled~.control__indicator {
            background: #e6e6e6;
            opacity: 0.6;
            pointer-events: none;
        }

        .profile_block .block_add_turist .block_content_add_turist .qweweweq .add_turist_form .display_flex_pass .checkbox-wrapper-21 .control__indicator {
            position: absolute;
            top: 2px;
            left: 0;
            height: 25px;
            width: 25px;
            background: #000000;
            border: 1px solid #9a9a9a;
        }

        .profile_block .block_add_turist .block_content_add_turist .qweweweq .add_turist_form .display_flex_pass .checkbox-wrapper-21 .control__indicator:after {
            content: "";
            position: absolute;
            display: none;
        }

        .profile_block .block_add_turist .block_content_add_turist .qweweweq .add_turist_form .display_flex_pass .checkbox-wrapper-21 .control:hover input~.control__indicator,
        .profile_block .block_add_turist .block_content_add_turist .qweweweq .add_turist_form .display_flex_pass .checkbox-wrapper-21 .control input:focus~.control__indicator {
            background: #1b1b1b;
            border: 1px solid #9a9a9a;
        }

        .profile_block .block_add_turist .block_content_add_turist .qweweweq .add_turist_form .display_flex_pass .checkbox-wrapper-21 .control:hover input:not([disabled]):checked~.control__indicator,
        .profile_block .block_add_turist .block_content_add_turist .qweweweq .add_turist_form .display_flex_pass .checkbox-wrapper-21 .control input:checked:focus~.control__indicator {
            background: #ffffff;
        }

        .profile_block .block_add_turist .block_content_add_turist .qweweweq .add_turist_form .display_flex_pass .checkbox-wrapper-21 .control--checkbox .control__indicator:after {
            left: 8px;
            top: 4px;
            width: 5px;
            height: 10px;
            border: solid #000000;
            border-width: 0 2px 2px 0;
            -webkit-transform: rotate(45deg);
            -ms-transform: rotate(45deg);
            transform: rotate(45deg);
        }

        .profile_block .block_add_turist .block_content_add_turist .qweweweq .add_turist_form .display_flex_pass .checkbox-wrapper-21 .control--checkbox input:disabled~.control__indicator:after {
            border-color: #7b7b7b;
        }

        .profile_block .block_add_turist .block_content_add_turist .qweweweq .add_turist_form .btn_add_turist {
            font-size: 18px;
            font-family: "MullerRegular";
            text-transform: uppercase;
            text-decoration: underline;
            -webkit-text-decoration-skip-ink: none;
            text-decoration-skip-ink: none;
            color: #000;
            width: 276px;
            height: 46px;
            background: #bbbbbb;
            -webkit-transition: 0.2s;
            transition: 0.2s;
        }

        .profile_block .block_add_turist .block_content_add_turist .qweweweq .add_turist_form .btn_add_turist:hover {
            -webkit-transition: 0.3s;
            transition: 0.3s;
            font-size: 18px;
            font-family: "MullerRegular";
            text-transform: uppercase;
            text-decoration: underline;
            -webkit-text-decoration-skip-ink: none;
            text-decoration-skip-ink: none;
            color: #000;
            width: 276px;
            height: 46px;
            background: #ffffff;
        }

        .profile_block .block_all_info_about_broni {
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-orient: vertical;
            -webkit-box-direction: normal;
            -ms-flex-direction: column;
            flex-direction: column;
        }

        .profile_block .block_all_info_about_broni .bottom_block_border {
            border: 1px solid #ffffff;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-orient: vertical;
            -webkit-box-direction: normal;
            -ms-flex-direction: column;
            flex-direction: column;
            gap: 35px;
        }

        .profile_block .block_all_info_about_broni .bottom_block_border .bottom_block_border_content {
            padding: 0px 40px;
            width: 389px;
        }

        .profile_block .block_all_info_about_broni .bottom_block_border .bottom_block_border_content .main_name_bl {
            margin-top: 35px;
            font-weight: 400;
            font-size: 32px;
            letter-spacing: 0.02em;
            text-transform: uppercase;
            font-family: "MullerRegular";
            margin-bottom: 30px;
        }

        .profile_block .block_all_info_about_broni .bottom_block_border .bottom_block_border_content .tab {
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-orient: vertical;
            -webkit-box-direction: normal;
            -ms-flex-direction: column;
            flex-direction: column;
            gap: 18px;
            -webkit-box-align: start;
            -ms-flex-align: start;
            align-items: flex-start;
            padding-bottom: 40px;
        }

        .profile_block .block_all_info_about_broni .bottom_block_border .bottom_block_border_content .tab button {
            background-color: inherit;
            float: left;
            border: none;
            outline: none;
            color: #979797;
            -webkit-transition: 0.3s;
            transition: 0.3s;
        }

        .profile_block .block_all_info_about_broni .bottom_block_border .bottom_block_border_content .tab button:hover {
            color: #D4E7EE;
        }

        .profile_block .block_all_info_about_broni .bottom_block_border .bottom_block_border_content .tab button.active {
            text-decoration: underline;
            -webkit-text-decoration-skip-ink: none;
            text-decoration-skip-ink: none;
            color: #ffffff;
        }

        .profile_block .block_all_info_about_broni .bottom_block_border .bottom_block_border_content .tablinks {
            font-weight: 400;
            font-size: 24px;
            line-height: 130%;
            letter-spacing: 0.1em;
            text-transform: uppercase;
            font-family: "MullerRegular";
            color: #a4a4a4;
        }

        .profile_block .block_all_info_about_broni .bottom_block_border .bottom_block_border_content .act {
            text-decoration: underline;
            -webkit-text-decoration-skip-ink: none;
            text-decoration-skip-ink: none;
            color: #ffffff;
        }

        .profile_block .block_all_info_about_broni .bottom_block_border .position {
            position: sticky;
            top: 30px;
        }

        .profile_block .block_all_info_about_broni .bottom_block_border .line_white {
            background-color: #ffffff;
        }

        .profile_block .block_all_info_about_broni .bottom_block_border .line_grey {
            background-color: #ffffff;
            opacity: 20%;
        }

        .profile_block .block_all_info_about_broni .position {
            position: sticky;
            top: 30px;
        }

        .profile_block .tabcontent {
            display: none;
        }

        .profile_block .tabcontent .block_add_turist {
            width: 1213px;
        }

        .profile_block .tabcontent .block_add_turist .name_page {
            position: sticky;
            top: 20px;
            font-weight: 400;
            font-size: 32px;
            letter-spacing: 0.02em;
            text-transform: uppercase;
            font-family: "MullerRegular";
            margin-bottom: 30px;
        }

        .profile_block .tabcontent .block_add_turist .block_content_add_turist {
            position: sticky;
            top: 90px;
            padding: 35px 40px 40px 40px;
            border: 1px solid #ffffff;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-orient: vertical;
            -webkit-box-direction: normal;
            -ms-flex-direction: column;
            flex-direction: column;
            gap: 30px;
        }

        .profile_block .tabcontent .block_add_turist .block_content_add_turist .name_block {
            font-weight: 400;
            font-size: 32px;
            line-height: 130%;
            letter-spacing: 0.1em;
            text-transform: uppercase;
            margin-bottom: 0px;
            font-family: "MullerRegular";
        }

        .profile_block .tabcontent .block_add_turist .block_content_add_turist .qweweweq {
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-orient: vertical;
            -webkit-box-direction: normal;
            -ms-flex-direction: column;
            flex-direction: column;
        }

        .profile_block .tabcontent .block_add_turist .block_content_add_turist .qweweweq .name_block {
            font-weight: 400;
            font-size: 24px;
            line-height: 130%;
            letter-spacing: 0.1em;
            text-transform: uppercase;
            margin-bottom: 25px;
            font-family: "MullerRegular";
        }

        .profile_block .tabcontent .block_add_turist .block_content_add_turist .qweweweq .add_turist_form {
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-orient: vertical;
            -webkit-box-direction: normal;
            -ms-flex-direction: column;
            flex-direction: column;
            gap: 12px;
            -webkit-box-align: end;
            -ms-flex-align: end;
            align-items: flex-end;
        }

        .profile_block .tabcontent .block_add_turist .block_content_add_turist .qweweweq .add_turist_form .display_flex {
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            gap: 10px;
        }

        .profile_block .tabcontent .block_add_turist .block_content_add_turist .qweweweq .add_turist_form .display_flex .top_inputs {
            padding-left: 19px;
            padding-top: 2px;
            border: 2px solid #9a9a9a;
            width: 276px;
            background: #1a1919;
            height: 47px;
            color: #ffffff;
            font-size: 16px;
            font-family: "MullerRegular";
            letter-spacing: 0.02em;
            text-transform: uppercase;
            color: #ffffff;
        }

        .profile_block .tabcontent .block_add_turist .block_content_add_turist .qweweweq .add_turist_form .display_flex .data_inputs {
            padding-left: 19px;
            border: 1px solid #9a9a9a;
            width: 188px;
            background: #1a1919;
            height: 47px;
            color: #ffffff;
            font-size: 16px;
            padding-top: 2px;
            font-family: "MullerRegular";
            letter-spacing: 0.02em;
            text-transform: uppercase;
            color: #ffffff;
        }

        .profile_block .tabcontent .block_add_turist .block_content_add_turist .qweweweq .add_turist_form .display_flex .data_inputs::-webkit-calendar-picker-indicator {
            display: none;
        }

        .profile_block .tabcontent .block_add_turist .block_content_add_turist .qweweweq .add_turist_form .display_flex .pol_inputs {
            padding-left: 19px;
            border: 2px solid #9a9a9a;
            width: 78px;
            background: #1a1919;
            padding-top: 2px;
            height: 47px;
            color: #ffffff;
            font-size: 16px;
            font-family: "MullerRegular";
            letter-spacing: 0.01em;
            text-transform: uppercase;
        }

        .profile_block .tabcontent .block_add_turist .block_content_add_turist .qweweweq .add_turist_form .btn_add_turist {
            font-size: 18px;
            font-family: "MullerRegular";
            text-transform: uppercase;
            text-decoration: underline;
            -webkit-text-decoration-skip-ink: none;
            text-decoration-skip-ink: none;
            color: #000;
            width: 276px;
            height: 46px;
            background: #bbbbbb;
            -webkit-transition: 0.2s;
            transition: 0.2s;
        }

        .profile_block .tabcontent .block_add_turist .block_content_add_turist .qweweweq .add_turist_form .btn_add_turist:hover {
            -webkit-transition: 0.3s;
            transition: 0.3s;
            font-size: 18px;
            font-family: "MullerRegular";
            text-transform: uppercase;
            text-decoration: underline;
            -webkit-text-decoration-skip-ink: none;
            text-decoration-skip-ink: none;
            color: #000;
            width: 276px;
            height: 46px;
            background: #ffffff;
        }

        .profile_block .tabcontent .block_add_turist .block_content_add_turist .qweweweq .vklad_sort {
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            gap: 20px;
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center;
        }

        .profile_block .tabcontent .block_add_turist .block_content_add_turist .qweweweq .vklad_sort .link {
            font-family: "MullerMedium";
            font-weight: 500;
            font-size: 16px;
            line-height: 130%;
            letter-spacing: 0.05em;
            text-transform: uppercase;
            color: rgba(255, 255, 255, 0.6);
            -webkit-transition: 0.2s;
            transition: 0.2s;
        }

        .profile_block .tabcontent .block_add_turist .block_content_add_turist .qweweweq .vklad_sort .act {
            font-family: "MullerMedium";
            font-weight: 500;
            font-size: 16px;
            line-height: 130%;
            letter-spacing: 0.05em;
            text-transform: uppercase;
            color: #000;
            padding: 10px 20px;
            background: #ffffff;
        }

        .profile_block .tabcontent .block_add_turist .block_content_add_turist .qweweweq .content_bron {
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-orient: vertical;
            -webkit-box-direction: normal;
            -ms-flex-direction: column;
            flex-direction: column;
            gap: 20px;
        }

        .profile_block .tabcontent .block_add_turist .block_content_add_turist .qweweweq .content_bron .hrum_hrum {
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-orient: vertical;
            -webkit-box-direction: normal;
            -ms-flex-direction: column;
            flex-direction: column;
            gap: 15px;
            -webkit-box-align: end;
            -ms-flex-align: end;
            align-items: flex-end;
        }

        .profile_block .tabcontent .block_add_turist .block_content_add_turist .qweweweq .content_bron .hrum_hrum .data_bron {
            font-weight: 400;
            font-size: 14px;
            color: #000;
            width: 262px;
            text-align: right;
            line-height: 130%;
            letter-spacing: 0.1em;
            text-transform: uppercase;
            color: #9a9a9a;
            font-family: "MullerRegular";
        }

        .profile_block .tabcontent .block_add_turist .block_content_add_turist .qweweweq .content_bron .hrum_hrum .panel_my_bron {
            border: 1px solid #ffffff;
            width: 1133px;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            height: 424px;
        }

        .profile_block .tabcontent .block_add_turist .block_content_add_turist .qweweweq .content_bron .hrum_hrum .panel_my_bron .bottom_block_border_content {
            padding: 0px 40px;
            width: 389px;
        }

        .profile_block .tabcontent .block_add_turist .block_content_add_turist .qweweweq .content_bron .hrum_hrum .panel_my_bron .bottom_block_border_content .main_name_bl {
            margin-top: 35px;
            color: #ffffff;
            font-weight: 400;
            font-size: 32px;
            letter-spacing: 0.02em;
            text-transform: uppercase;
            font-family: "MullerRegular";
            margin-bottom: 30px;
        }

        .profile_block .tabcontent .block_add_turist .block_content_add_turist .qweweweq .content_bron .hrum_hrum .panel_my_bron .bottom_block_border_content .name_blovk {
            font-weight: 400;
            font-size: 24px;
            color: #ffffff;
            line-height: 130%;
            letter-spacing: 0.1em;
            text-transform: uppercase;
            font-family: "MullerRegular";
        }

        .profile_block .tabcontent .block_add_turist .block_content_add_turist .qweweweq .content_bron .hrum_hrum .panel_my_bron .bottom_block_border_content .tet_a_tet {
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            gap: 10px;
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center;
            margin-bottom: 20px;
        }

        .profile_block .tabcontent .block_add_turist .block_content_add_turist .qweweweq .content_bron .hrum_hrum .panel_my_bron .bottom_block_border_content .tet_a_tet .column_time {
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            margin-top: 25px;
            -webkit-box-orient: vertical;
            -webkit-box-direction: normal;
            -ms-flex-direction: column;
            flex-direction: column;
            gap: 15px;
            width: 122px;
        }

        .profile_block .tabcontent .block_add_turist .block_content_add_turist .qweweweq .content_bron .hrum_hrum .panel_my_bron .bottom_block_border_content .tet_a_tet .column_time .time {
            font-weight: 400;
            font-size: 18px;
            line-height: 130%;
            color: #ffffff;
            letter-spacing: 0.1em;
            text-transform: uppercase;
            font-family: "MullerRegular";
        }

        .profile_block .tabcontent .block_add_turist .block_content_add_turist .qweweweq .content_bron .hrum_hrum .panel_my_bron .bottom_block_border_content .tet_a_tet .column_time .lit {
            font-family: "MullerRegular";
            font-weight: 400;
            font-size: 14px;
            color: #000;
            line-height: 130%;
            letter-spacing: 0.1em;
            text-transform: uppercase;
            color: #9a9a9a;
        }

        .profile_block .tabcontent .block_add_turist .block_content_add_turist .qweweweq .content_bron .hrum_hrum .panel_my_bron .bottom_block_border_content .hotel_info {
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-orient: vertical;
            -webkit-box-direction: normal;
            -ms-flex-direction: column;
            flex-direction: column;
        }

        .profile_block .tabcontent .block_add_turist .block_content_add_turist .qweweweq .content_bron .hrum_hrum .panel_my_bron .bottom_block_border_content .hotel_info .stars {
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            margin-bottom: 8px;
        }

        .profile_block .tabcontent .block_add_turist .block_content_add_turist .qweweweq .content_bron .hrum_hrum .panel_my_bron .bottom_block_border_content .hotel_info .name_hotel {
            font-family: "MullerRegular";
            font-weight: 400;
            color: #ffffff;
            font-size: 18px;
            line-height: 130%;
            letter-spacing: 0.1em;
            text-transform: uppercase;
            margin-bottom: 6px;
        }

        .profile_block .tabcontent .block_add_turist .block_content_add_turist .qweweweq .content_bron .hrum_hrum .panel_my_bron .bottom_block_border_content .hotel_info .class_and_eat {
            font-family: "MullerMedium";
            color: #ffffff;
            font-size: 13px;
            line-height: 130%;
            letter-spacing: 0.05em;
            text-transform: uppercase;
            color: #9a9a9a;
        }

        .profile_block .tabcontent .block_add_turist .block_content_add_turist .qweweweq .content_bron .hrum_hrum .panel_my_bron .bottom_block_border_content .time_info {
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            gap: 15px;
            margin-top: 20px;
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center;
        }

        .profile_block .tabcontent .block_add_turist .block_content_add_turist .qweweweq .content_bron .hrum_hrum .panel_my_bron .bottom_block_border_content .time_info .name_hotel {
            font-family: "MullerRegular";
            font-weight: 400;
            font-size: 18px;
            color: #ffffff;
            line-height: 130%;
            letter-spacing: 0.1em;
            text-transform: uppercase;
            margin-bottom: 6px;
        }

        .profile_block .tabcontent .block_add_turist .block_content_add_turist .qweweweq .content_bron .hrum_hrum .panel_my_bron .bottom_block_border_content .time_info .class_and_eat {
            font-family: "MullerMedium";
            color: #ffffff;
            font-size: 13px;
            line-height: 130%;
            letter-spacing: 0.05em;
            text-transform: uppercase;
            color: #9a9a9a;
        }

        .profile_block .tabcontent .block_add_turist .block_content_add_turist .qweweweq .content_bron .hrum_hrum .panel_my_bron .bottom_block_border_content .white_block {
            background: #d9d9d9;
            height: 79px;
            width: 300px;
        }

        .profile_block .tabcontent .block_add_turist .block_content_add_turist .qweweweq .content_bron .hrum_hrum .panel_my_bron .bottom_block_border_content .white_block .cost {
            font-weight: 400;
            font-size: 32px;
            line-height: 130%;
            letter-spacing: 0.02em;
            text-transform: uppercase;
            color: #000;
        }

        .profile_block .tabcontent .block_add_turist .block_content_add_turist .qweweweq .content_bron .hrum_hrum .panel_my_bron .bottom_block_border_content .bron {
            width: 100%;
            height: 60px;
            font-weight: 400;
            font-size: 18px;
            text-transform: uppercase;
            text-align: center;
            background: #d9d9d9;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-pack: center;
            -ms-flex-pack: center;
            justify-content: center;
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center;
            font-family: "MullerRegular";
            color: #000;
            -webkit-transition: 0.2s;
            transition: 0.2s;
            margin-top: 30px;
            margin-bottom: 40px;
        }

        .profile_block .tabcontent .block_add_turist .block_content_add_turist .qweweweq .content_bron .hrum_hrum .panel_my_bron .bottom_block_border_content .bron:hover {
            background: #ffffff;
        }

        .profile_block .tabcontent .block_add_turist .block_content_add_turist .qweweweq .content_bron .hrum_hrum .panel_my_bron .position {
            position: sticky;
            top: 30px;
        }

        .profile_block .tabcontent .block_add_turist .block_content_add_turist .qweweweq .content_bron .hrum_hrum .panel_my_bron .qwe {
            margin-top: 30px;
        }

        .profile_block .tabcontent .block_add_turist .block_content_add_turist .qweweweq .content_bron .hrum_hrum .panel_my_bron .rew {
            margin-top: 61px;
        }

        .profile_block .tabcontent .block_add_turist .block_content_add_turist .qweweweq .content_bron .hrum_hrum .panel_my_bron .riobn .hz_kak_nazvat_block {
            padding: 30px;
        }

        .profile_block .tabcontent .block_add_turist .block_content_add_turist .qweweweq .content_bron .hrum_hrum .panel_my_bron .riobn .hz_kak_nazvat_block .name_blovk {
            font-weight: 400;
            color: #ffffff;
            font-size: 24px;
            line-height: 130%;
            letter-spacing: 0.1em;
            text-transform: uppercase;
            font-family: "MullerRegular";
        }

        .profile_block .tabcontent .block_add_turist .block_content_add_turist .qweweweq .content_bron .hrum_hrum .panel_my_bron .riobn .hz_kak_nazvat_block .tet_a_tet {
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            gap: 10px;
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center;
            margin-bottom: 20px;
        }

        .profile_block .tabcontent .block_add_turist .block_content_add_turist .qweweweq .content_bron .hrum_hrum .panel_my_bron .riobn .hz_kak_nazvat_block .tet_a_tet .column_time {
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            margin-top: 25px;
            -webkit-box-orient: vertical;
            -webkit-box-direction: normal;
            -ms-flex-direction: column;
            flex-direction: column;
            gap: 15px;
            width: 122px;
        }

        .profile_block .tabcontent .block_add_turist .block_content_add_turist .qweweweq .content_bron .hrum_hrum .panel_my_bron .riobn .hz_kak_nazvat_block .tet_a_tet .column_time .time {
            font-weight: 400;
            font-size: 18px;
            line-height: 130%;
            letter-spacing: 0.1em;
            color: #ffffff;
            text-transform: uppercase;
            font-family: "MullerRegular";
        }

        .profile_block .tabcontent .block_add_turist .block_content_add_turist .qweweweq .content_bron .hrum_hrum .panel_my_bron .riobn .hz_kak_nazvat_block .tet_a_tet .column_time .lit {
            font-family: "MullerRegular";
            font-weight: 400;
            font-size: 14px;
            line-height: 130%;
            letter-spacing: 0.1em;
            text-transform: uppercase;
            color: #9a9a9a;
        }

        .profile_block .tabcontent .block_add_turist .block_content_add_turist .qweweweq .content_bron .hrum_hrum .panel_my_bron .riobn .hz_kak_nazvat_block .hotel_info {
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-orient: vertical;
            -webkit-box-direction: normal;
            -ms-flex-direction: column;
            flex-direction: column;
        }

        .profile_block .tabcontent .block_add_turist .block_content_add_turist .qweweweq .content_bron .hrum_hrum .panel_my_bron .riobn .hz_kak_nazvat_block .hotel_info .stars {
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            margin-bottom: 8px;
        }

        .profile_block .tabcontent .block_add_turist .block_content_add_turist .qweweweq .content_bron .hrum_hrum .panel_my_bron .riobn .hz_kak_nazvat_block .hotel_info .stars svg path {
            fill: rgb(255, 255, 255);
        }

        .profile_block .tabcontent .block_add_turist .block_content_add_turist .qweweweq .content_bron .hrum_hrum .panel_my_bron .riobn .hz_kak_nazvat_block .hotel_info .name_hotel {
            font-family: "MullerRegular";
            font-weight: 400;
            font-size: 18px;
            line-height: 130%;
            color: #ffffff;
            letter-spacing: 0.1em;
            text-transform: uppercase;
            margin-bottom: 6px;
        }

        .profile_block .tabcontent .block_add_turist .block_content_add_turist .qweweweq .content_bron .hrum_hrum .panel_my_bron .riobn .hz_kak_nazvat_block .hotel_info .class_and_eat {
            font-family: "MullerMedium";
            color: #000;
            font-size: 13px;
            line-height: 130%;
            letter-spacing: 0.05em;
            text-transform: uppercase;
            color: #ffffff;
        }

        .profile_block .tabcontent .block_add_turist .block_content_add_turist .qweweweq .content_bron .hrum_hrum .panel_my_bron .riobn .hz_kak_nazvat_block .time_info {
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            gap: 15px;
            margin-top: 20px;
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center;
        }

        .profile_block .tabcontent .block_add_turist .block_content_add_turist .qweweweq .content_bron .hrum_hrum .panel_my_bron .riobn .hz_kak_nazvat_block .time_info .name_hotel {
            font-family: "MullerRegular";
            font-weight: 400;
            font-size: 18px;
            line-height: 130%;
            color: #ffffff;
            letter-spacing: 0.1em;
            text-transform: uppercase;
            margin-bottom: 6px;
        }

        .profile_block .tabcontent .block_add_turist .block_content_add_turist .qweweweq .content_bron .hrum_hrum .panel_my_bron .riobn .hz_kak_nazvat_block .time_info .class_and_eat {
            font-family: "MullerMedium";
            color: #000;
            font-size: 13px;
            line-height: 130%;
            letter-spacing: 0.05em;
            text-transform: uppercase;
            color: #9a9a9a;
        }

        .profile_block .tabcontent .block_add_turist .block_content_add_turist .qweweweq .content_bron .hrum_hrum .panel_my_bron .riobn .white_block {
            background: #ffffff;
            height: 80px;
            width: 100%;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center;
            -webkit-box-pack: end;
            -ms-flex-pack: end;
            justify-content: flex-end;
            padding-right: 40px;
            gap: 10px;
        }

        .profile_block .tabcontent .block_add_turist .block_content_add_turist .qweweweq .content_bron .hrum_hrum .panel_my_bron .riobn .white_block .cost {
            font-weight: 400;
            font-size: 32px;
            line-height: 130%;
            letter-spacing: 0.02em;
            text-transform: uppercase;
            font-family: "MullerRegular";
            color: #000000;
        }

        .profile_block .tabcontent .block_add_turist .block_content_add_turist .qweweweq .content_bron .hrum_hrum .panel_my_bron .riobn .white_block svg {
            margin-bottom: 5px;
            background-color: none;
            color: #ffffff;
        }

        .profile_block .tabcontent .block_add_turist .block_content_add_turist .qweweweq .content_bron .hrum_hrum .panel_my_bron .riobn .white_block svg path {
            stroke: rgb(255, 255, 255);
            fill: rgb(0, 0, 0);
        }

        .profile_block .tabcontent .block_add_turist .block_content_add_turist .qweweweq .add_reise .columm_input {
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-orient: vertical;
            -webkit-box-direction: normal;
            -ms-flex-direction: column;
            flex-direction: column;
            gap: 15px;
        }

        .profile_block .tabcontent .block_add_turist .block_content_add_turist .qweweweq .add_reise .columm_input .item_form {
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-orient: vertical;
            -webkit-box-direction: normal;
            -ms-flex-direction: column;
            flex-direction: column;
            gap: 8px;
        }

        .profile_block .tabcontent .block_add_turist .block_content_add_turist .qweweweq .add_reise .columm_input .item_form .name_inp {
            font-weight: 400;
            font-size: 20px;
            line-height: 130%;
            letter-spacing: 0.1em;
            text-transform: uppercase;
            color: #000;
            font-family: "MullerRegular";
        }

        .profile_block .tabcontent .block_add_turist .block_content_add_turist .qweweweq .add_reise .columm_input .item_form .inp_add_prof {
            border: 1px solid #000;
            width: 391px;
            height: 50px;
            padding-left: 20px;
            padding-top: 1px;
            font-weight: 400;
            font-size: 16px;
            line-height: 130%;
            background-color: #E6E6E6;
            letter-spacing: 0.1em;
            text-transform: uppercase;
            color: #000;
            font-family: "MullerRegular";
            -webkit-appearance: none;
            -moz-appearance: none;
            appearance: none;
        }

        .profile_block .tabcontent .block_add_turist .block_content_add_turist .qweweweq .add_reise .columm_input .item_form .inp_add_prof option {
            letter-spacing: 0.4em;
            font-family: "YourDesiredFont", sans-serif;
        }

        .profile_block .tabcontent .block_add_turist .block_content_add_turist .qweweweq .add_reise .columm_input .item_form .inp_add_prof::-ms-expand {
            display: none;
        }

        .profile_block .tabcontent .block_add_turist .block_content_add_turist .qweweweq .add_reise .columm_input .item_form .inp_add_prof::-webkit-select {
            background: transparent;
        }

        .profile_block .block {
            display: block;
        }

        .admin_color {
            padding-top: 1px;
            background-color: #E6E6E6;
            padding-bottom: 50px;
        }

        .admin_color .href_crum {
            color: #000;
        }

        .admin_color .profile_block_admin {
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            gap: 20px;
        }

        .admin_color .profile_block_admin .block_all_info_about_broni {
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-orient: vertical;
            -webkit-box-direction: normal;
            -ms-flex-direction: column;
            flex-direction: column;
        }

        .admin_color .profile_block_admin .block_all_info_about_broni .bottom_block_border {
            border: 1px solid #000000;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-orient: vertical;
            -webkit-box-direction: normal;
            -ms-flex-direction: column;
            flex-direction: column;
            gap: 35px;
        }

        .admin_color .profile_block_admin .block_all_info_about_broni .bottom_block_border .bottom_block_border_content {
            padding: 0px 40px;
            width: 389px;
        }

        .admin_color .profile_block_admin .block_all_info_about_broni .bottom_block_border .bottom_block_border_content .main_name_bl {
            margin-top: 35px;
            font-weight: 400;
            font-size: 32px;
            letter-spacing: 0.02em;
            text-transform: uppercase;
            font-family: "MullerRegular";
            margin-bottom: 30px;
            color: #000;
        }

        .admin_color .profile_block_admin .block_all_info_about_broni .bottom_block_border .bottom_block_border_content .tab {
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-orient: vertical;
            -webkit-box-direction: normal;
            -ms-flex-direction: column;
            flex-direction: column;
            gap: 18px;
            -webkit-box-align: start;
            -ms-flex-align: start;
            align-items: flex-start;
            padding-bottom: 40px;
        }

        .admin_color .profile_block_admin .block_all_info_about_broni .bottom_block_border .bottom_block_border_content .tab button {
            background-color: inherit;
            float: left;
            border: none;
            outline: none;
            color: #5E5E5E;
            -webkit-transition: 0.3s;
            transition: 0.3s;
        }

        .admin_color .profile_block_admin .block_all_info_about_broni .bottom_block_border .bottom_block_border_content .tab button:hover {
            color: #272727;
        }

        .admin_color .profile_block_admin .block_all_info_about_broni .bottom_block_border .bottom_block_border_content .tab button.active {
            text-decoration: underline;
            -webkit-text-decoration-skip-ink: none;
            text-decoration-skip-ink: none;
            color: #000000;
        }

        .admin_color .profile_block_admin .block_all_info_about_broni .bottom_block_border .bottom_block_border_content .tablinks {
            font-weight: 400;
            font-size: 24px;
            line-height: 130%;
            letter-spacing: 0.1em;
            text-transform: uppercase;
            font-family: "MullerRegular";
            color: #a4a4a4;
        }

        .admin_color .profile_block_admin .block_all_info_about_broni .bottom_block_border .bottom_block_border_content .act {
            text-decoration: underline;
            -webkit-text-decoration-skip-ink: none;
            text-decoration-skip-ink: none;
            color: #ffffff;
        }

        .admin_color .profile_block_admin .block_all_info_about_broni .bottom_block_border .position {
            position: sticky;
            top: 30px;
        }

        .admin_color .profile_block_admin .block_all_info_about_broni .bottom_block_border .line_white {
            background-color: #ffffff;
        }

        .admin_color .profile_block_admin .block_all_info_about_broni .bottom_block_border .line_grey {
            background-color: #ffffff;
            opacity: 20%;
        }

        .admin_color .profile_block_admin .block_all_info_about_broni .position {
            position: sticky;
            top: 30px;
        }

        .admin_color .profile_block_admin .tabcontent {
            display: none;
        }

        .admin_color .profile_block_admin .tabcontent .block_add_turist {
            width: 1213px;
        }

        .admin_color .profile_block_admin .tabcontent .block_add_turist .block_content_add_turist {
            position: sticky;
            top: 90px;
            padding: 35px 40px 40px 40px;
            border: 1px solid #000000;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-orient: vertical;
            -webkit-box-direction: normal;
            -ms-flex-direction: column;
            flex-direction: column;
            gap: 30px;
        }

        .admin_color .profile_block_admin .tabcontent .block_add_turist .block_content_add_turist .name_block {
            font-weight: 400;
            font-size: 32px;
            line-height: 130%;
            letter-spacing: 0.1em;
            text-transform: uppercase;
            margin-bottom: 0px;
            color: #000;
            font-family: "MullerRegular";
        }

        .admin_color .profile_block_admin .tabcontent .block_add_turist .block_content_add_turist .qweweweq {
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-orient: vertical;
            -webkit-box-direction: normal;
            -ms-flex-direction: column;
            flex-direction: column;
        }

        .admin_color .profile_block_admin .tabcontent .block_add_turist .block_content_add_turist .qweweweq .name_block {
            font-weight: 400;
            font-size: 24px;
            line-height: 130%;
            letter-spacing: 0.1em;
            text-transform: uppercase;
            margin-bottom: 25px;
            font-family: "MullerRegular";
        }

        .admin_color .profile_block_admin .tabcontent .block_add_turist .block_content_add_turist .qweweweq .add_turist_form {
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-orient: vertical;
            -webkit-box-direction: normal;
            -ms-flex-direction: column;
            flex-direction: column;
            gap: 12px;
            -webkit-box-align: end;
            -ms-flex-align: end;
            align-items: flex-end;
        }

        .admin_color .profile_block_admin .tabcontent .block_add_turist .block_content_add_turist .qweweweq .add_turist_form .display_flex {
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            gap: 10px;
        }

        .admin_color .profile_block_admin .tabcontent .block_add_turist .block_content_add_turist .qweweweq .add_turist_form .display_flex .top_inputs {
            padding-left: 19px;
            padding-top: 2px;
            border: 2px solid #9a9a9a;
            width: 276px;
            background: #1a1919;
            height: 47px;
            color: #ffffff;
            font-size: 16px;
            font-family: "MullerRegular";
            letter-spacing: 0.02em;
            text-transform: uppercase;
            color: #ffffff;
        }

        .admin_color .profile_block_admin .tabcontent .block_add_turist .block_content_add_turist .qweweweq .add_turist_form .display_flex .data_inputs {
            padding-left: 19px;
            border: 1px solid #9a9a9a;
            width: 188px;
            background: #1a1919;
            height: 47px;
            color: #ffffff;
            font-size: 16px;
            padding-top: 2px;
            font-family: "MullerRegular";
            letter-spacing: 0.02em;
            text-transform: uppercase;
            color: #ffffff;
        }

        .admin_color .profile_block_admin .tabcontent .block_add_turist .block_content_add_turist .qweweweq .add_turist_form .display_flex .data_inputs::-webkit-calendar-picker-indicator {
            display: none;
        }

        .admin_color .profile_block_admin .tabcontent .block_add_turist .block_content_add_turist .qweweweq .add_turist_form .display_flex .pol_inputs {
            padding-left: 19px;
            border: 2px solid #9a9a9a;
            width: 78px;
            background: #1a1919;
            padding-top: 2px;
            height: 47px;
            color: #ffffff;
            font-size: 16px;
            font-family: "MullerRegular";
            letter-spacing: 0.01em;
            text-transform: uppercase;
        }

        .admin_color .profile_block_admin .tabcontent .block_add_turist .block_content_add_turist .qweweweq .add_turist_form .btn_add_turist {
            font-size: 18px;
            font-family: "MullerRegular";
            text-transform: uppercase;
            text-decoration: underline;
            -webkit-text-decoration-skip-ink: none;
            text-decoration-skip-ink: none;
            color: #000;
            width: 276px;
            height: 46px;
            background: #bbbbbb;
            -webkit-transition: 0.2s;
            transition: 0.2s;
        }

        .admin_color .profile_block_admin .tabcontent .block_add_turist .block_content_add_turist .qweweweq .add_turist_form .btn_add_turist:hover {
            -webkit-transition: 0.3s;
            transition: 0.3s;
            font-size: 18px;
            font-family: "MullerRegular";
            text-transform: uppercase;
            text-decoration: underline;
            -webkit-text-decoration-skip-ink: none;
            text-decoration-skip-ink: none;
            color: #000;
            width: 276px;
            height: 46px;
            background: #ffffff;
        }

        .admin_color .profile_block_admin .tabcontent .block_add_turist .block_content_add_turist .qweweweq .vklad_sort {
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            gap: 20px;
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center;
        }

        .admin_color .profile_block_admin .tabcontent .block_add_turist .block_content_add_turist .qweweweq .vklad_sort .link {
            font-family: "MullerMedium";
            font-weight: 500;
            font-size: 16px;
            line-height: 130%;
            letter-spacing: 0.05em;
            text-transform: uppercase;
            color: rgba(0, 0, 0, 0.6);
            -webkit-transition: 0.1s;
            transition: 0.1s;
        }

        .admin_color .profile_block_admin .tabcontent .block_add_turist .block_content_add_turist .qweweweq .vklad_sort .act {
            font-family: "MullerMedium";
            font-weight: 500;
            font-size: 16px;
            line-height: 130%;
            letter-spacing: 0.05em;
            text-transform: uppercase;
            color: #ffffff;
            padding: 10px 20px;
            background: #000000;
        }

        .admin_color .profile_block_admin .tabcontent .block_add_turist .block_content_add_turist .qweweweq .ebanutsa .content_bron {
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-orient: vertical;
            -webkit-box-direction: normal;
            -ms-flex-direction: column;
            flex-direction: column;
            gap: 20px;
        }

        .admin_color .profile_block_admin .tabcontent .block_add_turist .block_content_add_turist .qweweweq .ebanutsa .content_bron .hrum_hrum {
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-orient: vertical;
            -webkit-box-direction: normal;
            -ms-flex-direction: column;
            flex-direction: column;
            gap: 15px;
            -webkit-box-align: end;
            -ms-flex-align: end;
            align-items: flex-end;
        }

        .admin_color .profile_block_admin .tabcontent .block_add_turist .block_content_add_turist .qweweweq .ebanutsa .content_bron .hrum_hrum .flex_top {
            margin-top: 20px;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
        }

        .admin_color .profile_block_admin .tabcontent .block_add_turist .block_content_add_turist .qweweweq .ebanutsa .content_bron .hrum_hrum .flex_top .name_bron {
            font-weight: 400;
            margin-right: 90px;
            font-size: 14px;
            color: #000;
            text-align: left;
            line-height: 130%;
            letter-spacing: 0.1em;
            width: 460px;
            text-transform: uppercase;
            color: #9a9a9a;
            font-family: "MullerRegular";
        }

        .admin_color .profile_block_admin .tabcontent .block_add_turist .block_content_add_turist .qweweweq .ebanutsa .content_bron .hrum_hrum .flex_top .namber_order {
            font-weight: 400;
            margin-right: 108px;
            font-size: 14px;
            width: 203px;
            color: #000;
            line-height: 130%;
            text-align: right;
            letter-spacing: 0.1em;
            text-transform: uppercase;
            color: #9a9a9a;
            font-family: "MullerRegular";
        }

        .admin_color .profile_block_admin .tabcontent .block_add_turist .block_content_add_turist .qweweweq .ebanutsa .content_bron .hrum_hrum .flex_top .data_bron {
            font-weight: 400;
            font-size: 14px;
            color: #000;
            width: 262px;
            text-align: right;
            line-height: 130%;
            letter-spacing: 0.1em;
            text-transform: uppercase;
            color: #9a9a9a;
            font-family: "MullerRegular";
        }

        .admin_color .profile_block_admin .tabcontent .block_add_turist .block_content_add_turist .qweweweq .ebanutsa .content_bron .hrum_hrum .panel_my_bron {
            position: relative;
            border: 1px solid #000000;
            width: 1133px;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            height: 424px;
        }

        .admin_color .profile_block_admin .tabcontent .block_add_turist .block_content_add_turist .qweweweq .ebanutsa .content_bron .hrum_hrum .panel_my_bron .bottom_block_border_content {
            padding: 0px 40px;
            width: 389px;
        }

        .admin_color .profile_block_admin .tabcontent .block_add_turist .block_content_add_turist .qweweweq .ebanutsa .content_bron .hrum_hrum .panel_my_bron .bottom_block_border_content .main_name_bl {
            margin-top: 35px;
            color: #000000;
            font-weight: 400;
            font-size: 32px;
            letter-spacing: 0.02em;
            text-transform: uppercase;
            font-family: "MullerRegular";
            margin-bottom: 30px;
        }

        .admin_color .profile_block_admin .tabcontent .block_add_turist .block_content_add_turist .qweweweq .ebanutsa .content_bron .hrum_hrum .panel_my_bron .bottom_block_border_content .name_blovk {
            font-weight: 400;
            font-size: 24px;
            color: #000000;
            line-height: 130%;
            letter-spacing: 0.1em;
            text-transform: uppercase;
            font-family: "MullerRegular";
        }

        .admin_color .profile_block_admin .tabcontent .block_add_turist .block_content_add_turist .qweweweq .ebanutsa .content_bron .hrum_hrum .panel_my_bron .bottom_block_border_content .tet_a_tet {
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            gap: 10px;
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center;
            margin-bottom: 20px;
        }

        .admin_color .profile_block_admin .tabcontent .block_add_turist .block_content_add_turist .qweweweq .ebanutsa .content_bron .hrum_hrum .panel_my_bron .bottom_block_border_content .tet_a_tet .column_time {
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            margin-top: 25px;
            -webkit-box-orient: vertical;
            -webkit-box-direction: normal;
            -ms-flex-direction: column;
            flex-direction: column;
            gap: 15px;
            width: 122px;
        }

        .admin_color .profile_block_admin .tabcontent .block_add_turist .block_content_add_turist .qweweweq .ebanutsa .content_bron .hrum_hrum .panel_my_bron .bottom_block_border_content .tet_a_tet .column_time .time {
            font-weight: 400;
            font-size: 18px;
            line-height: 130%;
            color: #000000;
            letter-spacing: 0.1em;
            text-transform: uppercase;
            font-family: "MullerRegular";
        }

        .admin_color .profile_block_admin .tabcontent .block_add_turist .block_content_add_turist .qweweweq .ebanutsa .content_bron .hrum_hrum .panel_my_bron .bottom_block_border_content .tet_a_tet .column_time .lit {
            font-family: "MullerRegular";
            font-weight: 400;
            font-size: 14px;
            color: #000;
            line-height: 130%;
            letter-spacing: 0.1em;
            text-transform: uppercase;
            color: #000000;
        }

        .admin_color .profile_block_admin .tabcontent .block_add_turist .block_content_add_turist .qweweweq .ebanutsa .content_bron .hrum_hrum .panel_my_bron .bottom_block_border_content .hotel_info {
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-orient: vertical;
            -webkit-box-direction: normal;
            -ms-flex-direction: column;
            flex-direction: column;
        }

        .admin_color .profile_block_admin .tabcontent .block_add_turist .block_content_add_turist .qweweweq .ebanutsa .content_bron .hrum_hrum .panel_my_bron .bottom_block_border_content .hotel_info .stars {
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            margin-bottom: 8px;
        }

        .admin_color .profile_block_admin .tabcontent .block_add_turist .block_content_add_turist .qweweweq .ebanutsa .content_bron .hrum_hrum .panel_my_bron .bottom_block_border_content .hotel_info .name_hotel {
            font-family: "MullerRegular";
            font-weight: 400;
            color: #000000;
            font-size: 18px;
            line-height: 130%;
            letter-spacing: 0.1em;
            text-transform: uppercase;
            margin-bottom: 6px;
        }

        .admin_color .profile_block_admin .tabcontent .block_add_turist .block_content_add_turist .qweweweq .ebanutsa .content_bron .hrum_hrum .panel_my_bron .bottom_block_border_content .hotel_info .class_and_eat {
            font-family: "MullerMedium";
            font-size: 13px;
            line-height: 130%;
            letter-spacing: 0.05em;
            text-transform: uppercase;
            color: #000000;
        }

        .admin_color .profile_block_admin .tabcontent .block_add_turist .block_content_add_turist .qweweweq .ebanutsa .content_bron .hrum_hrum .panel_my_bron .bottom_block_border_content .time_info {
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            gap: 15px;
            margin-top: 20px;
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center;
        }

        .admin_color .profile_block_admin .tabcontent .block_add_turist .block_content_add_turist .qweweweq .ebanutsa .content_bron .hrum_hrum .panel_my_bron .bottom_block_border_content .time_info .name_hotel {
            font-family: "MullerRegular";
            font-weight: 400;
            font-size: 18px;
            color: #000000;
            line-height: 130%;
            letter-spacing: 0.1em;
            text-transform: uppercase;
            margin-bottom: 6px;
        }

        .admin_color .profile_block_admin .tabcontent .block_add_turist .block_content_add_turist .qweweweq .ebanutsa .content_bron .hrum_hrum .panel_my_bron .bottom_block_border_content .time_info .class_and_eat {
            font-family: "MullerMedium";
            color: #000000;
            font-size: 13px;
            line-height: 130%;
            letter-spacing: 0.05em;
            text-transform: uppercase;
        }

        .admin_color .profile_block_admin .tabcontent .block_add_turist .block_content_add_turist .qweweweq .ebanutsa .content_bron .hrum_hrum .panel_my_bron .bottom_block_border_content .white_block {
            background: #ffffff;
            height: 79px;
            width: 300px;
        }

        .admin_color .profile_block_admin .tabcontent .block_add_turist .block_content_add_turist .qweweweq .ebanutsa .content_bron .hrum_hrum .panel_my_bron .bottom_block_border_content .white_block .cost {
            font-weight: 400;
            font-size: 32px;
            line-height: 130%;
            letter-spacing: 0.02em;
            text-transform: uppercase;
            color: #000;
        }

        .admin_color .profile_block_admin .tabcontent .block_add_turist .block_content_add_turist .qweweweq .ebanutsa .content_bron .hrum_hrum .panel_my_bron .position {
            position: sticky;
            top: 30px;
        }

        .admin_color .profile_block_admin .tabcontent .block_add_turist .block_content_add_turist .qweweweq .ebanutsa .content_bron .hrum_hrum .panel_my_bron .qwe {
            margin-top: 30px;
        }

        .admin_color .profile_block_admin .tabcontent .block_add_turist .block_content_add_turist .qweweweq .ebanutsa .content_bron .hrum_hrum .panel_my_bron .rew {
            margin-top: 61px;
        }

        .admin_color .profile_block_admin .tabcontent .block_add_turist .block_content_add_turist .qweweweq .ebanutsa .content_bron .hrum_hrum .panel_my_bron .riobn .hz_kak_nazvat_block {
            padding: 30px;
        }

        .admin_color .profile_block_admin .tabcontent .block_add_turist .block_content_add_turist .qweweweq .ebanutsa .content_bron .hrum_hrum .panel_my_bron .riobn .hz_kak_nazvat_block .name_blovk {
            font-weight: 400;
            color: #000000;
            font-size: 24px;
            line-height: 130%;
            letter-spacing: 0.1em;
            text-transform: uppercase;
            font-family: "MullerRegular";
        }

        .admin_color .profile_block_admin .tabcontent .block_add_turist .block_content_add_turist .qweweweq .ebanutsa .content_bron .hrum_hrum .panel_my_bron .riobn .hz_kak_nazvat_block .tet_a_tet {
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            gap: 10px;
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center;
            margin-bottom: 20px;
        }

        .admin_color .profile_block_admin .tabcontent .block_add_turist .block_content_add_turist .qweweweq .ebanutsa .content_bron .hrum_hrum .panel_my_bron .riobn .hz_kak_nazvat_block .tet_a_tet .column_time {
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            margin-top: 25px;
            -webkit-box-orient: vertical;
            -webkit-box-direction: normal;
            -ms-flex-direction: column;
            flex-direction: column;
            gap: 15px;
            width: 122px;
        }

        .admin_color .profile_block_admin .tabcontent .block_add_turist .block_content_add_turist .qweweweq .ebanutsa .content_bron .hrum_hrum .panel_my_bron .riobn .hz_kak_nazvat_block .tet_a_tet .column_time .time {
            font-weight: 400;
            font-size: 18px;
            line-height: 130%;
            letter-spacing: 0.1em;
            color: #000000;
            text-transform: uppercase;
            font-family: "MullerRegular";
        }

        .admin_color .profile_block_admin .tabcontent .block_add_turist .block_content_add_turist .qweweweq .ebanutsa .content_bron .hrum_hrum .panel_my_bron .riobn .hz_kak_nazvat_block .tet_a_tet .column_time .lit {
            font-family: "MullerRegular";
            font-weight: 400;
            font-size: 14px;
            line-height: 130%;
            letter-spacing: 0.1em;
            text-transform: uppercase;
            color: #000000;
        }

        .admin_color .profile_block_admin .tabcontent .block_add_turist .block_content_add_turist .qweweweq .ebanutsa .content_bron .hrum_hrum .panel_my_bron .riobn .hz_kak_nazvat_block .hotel_info {
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-orient: vertical;
            -webkit-box-direction: normal;
            -ms-flex-direction: column;
            flex-direction: column;
        }

        .admin_color .profile_block_admin .tabcontent .block_add_turist .block_content_add_turist .qweweweq .ebanutsa .content_bron .hrum_hrum .panel_my_bron .riobn .hz_kak_nazvat_block .hotel_info .stars {
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            margin-bottom: 8px;
        }

        .admin_color .profile_block_admin .tabcontent .block_add_turist .block_content_add_turist .qweweweq .ebanutsa .content_bron .hrum_hrum .panel_my_bron .riobn .hz_kak_nazvat_block .hotel_info .stars svg path {
            fill: rgb(0, 0, 0);
        }

        .admin_color .profile_block_admin .tabcontent .block_add_turist .block_content_add_turist .qweweweq .ebanutsa .content_bron .hrum_hrum .panel_my_bron .riobn .hz_kak_nazvat_block .hotel_info .name_hotel {
            font-family: "MullerRegular";
            font-weight: 400;
            font-size: 18px;
            line-height: 130%;
            color: #000000;
            letter-spacing: 0.1em;
            text-transform: uppercase;
            margin-bottom: 6px;
        }

        .admin_color .profile_block_admin .tabcontent .block_add_turist .block_content_add_turist .qweweweq .ebanutsa .content_bron .hrum_hrum .panel_my_bron .riobn .hz_kak_nazvat_block .hotel_info .class_and_eat {
            font-family: "MullerMedium";
            color: #000;
            font-size: 13px;
            line-height: 130%;
            letter-spacing: 0.05em;
            text-transform: uppercase;
        }

        .admin_color .profile_block_admin .tabcontent .block_add_turist .block_content_add_turist .qweweweq .ebanutsa .content_bron .hrum_hrum .panel_my_bron .riobn .hz_kak_nazvat_block .time_info {
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            gap: 15px;
            margin-top: 20px;
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center;
        }

        .admin_color .profile_block_admin .tabcontent .block_add_turist .block_content_add_turist .qweweweq .ebanutsa .content_bron .hrum_hrum .panel_my_bron .riobn .hz_kak_nazvat_block .time_info .name_hotel {
            font-family: "MullerRegular";
            font-weight: 400;
            font-size: 18px;
            line-height: 130%;
            color: #000000;
            letter-spacing: 0.1em;
            text-transform: uppercase;
            margin-bottom: 6px;
        }

        .admin_color .profile_block_admin .tabcontent .block_add_turist .block_content_add_turist .qweweweq .ebanutsa .content_bron .hrum_hrum .panel_my_bron .riobn .hz_kak_nazvat_block .time_info .class_and_eat {
            font-family: "MullerMedium";
            color: #000;
            font-size: 13px;
            line-height: 130%;
            letter-spacing: 0.05em;
            text-transform: uppercase;
        }

        .admin_color .profile_block_admin .tabcontent .block_add_turist .block_content_add_turist .qweweweq .ebanutsa .content_bron .hrum_hrum .panel_my_bron .riobn .white_block {
            background: #000000;
            height: 80px;
            width: 100%;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center;
            -webkit-box-pack: end;
            -ms-flex-pack: end;
            justify-content: flex-end;
            padding-right: 40px;
            gap: 10px;
        }

        .admin_color .profile_block_admin .tabcontent .block_add_turist .block_content_add_turist .qweweweq .ebanutsa .content_bron .hrum_hrum .panel_my_bron .riobn .white_block .cost {
            font-weight: 400;
            font-size: 32px;
            line-height: 130%;
            letter-spacing: 0.02em;
            text-transform: uppercase;
            font-family: "MullerRegular";
            color: #ffffff;
        }

        .admin_color .profile_block_admin .tabcontent .block_add_turist .block_content_add_turist .qweweweq .ebanutsa .content_bron .hrum_hrum .panel_my_bron .riobn .white_block svg {
            margin-bottom: 5px;
            background-color: none;
            color: #ffffff;
        }

        .admin_color .profile_block_admin .tabcontent .block_add_turist .block_content_add_turist .qweweweq .ebanutsa .content_bron .hrum_hrum .panel_my_bron .riobn .white_block svg path {
            stroke: rgb(255, 255, 255);
            fill: rgb(255, 255, 255);
        }

        .admin_color .profile_block_admin .tabcontent .block_add_turist .block_content_add_turist .qweweweq .ebanutsa .content_bron .hrum_hrum .panel_my_bron .btn_delete {
            position: absolute;
            bottom: 0;
            left: 0;
        }

        .admin_color .profile_block_admin .tabcontent .block_add_turist .block_content_add_turist .qweweweq .ebanutsa .content_bron .hrum_hrum .panel_my_bron .name_pass {
            position: absolute;
            bottom: 20px;
            left: 70px;
            font-weight: 400;
            font-size: 14px;
            width: 680px;
            text-align: left;
            line-height: 130%;
            letter-spacing: 0em;
            text-transform: uppercase;
            color: #414141;
            font-family: "MullerRegular";
        }

        .admin_color .profile_block_admin .tabcontent .block_add_turist .block_content_add_turist .qweweweq .add_reise .dop_class {
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            gap: 20px;
        }

        .admin_color .profile_block_admin .tabcontent .block_add_turist .block_content_add_turist .qweweweq .add_reise .dop_class .columm_input {
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-orient: vertical;
            -webkit-box-direction: normal;
            -ms-flex-direction: column;
            flex-direction: column;
            gap: 25px;
        }

        .admin_color .profile_block_admin .tabcontent .block_add_turist .block_content_add_turist .qweweweq .add_reise .dop_class .columm_input .item_form {
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-orient: vertical;
            -webkit-box-direction: normal;
            -ms-flex-direction: column;
            flex-direction: column;
            gap: 5px;
        }

        .admin_color .profile_block_admin .tabcontent .block_add_turist .block_content_add_turist .qweweweq .add_reise .dop_class .columm_input .item_form .name_inp {
            font-weight: 400;
            font-size: 20px;
            line-height: 130%;
            letter-spacing: 0.1em;
            text-transform: uppercase;
            color: #000;
            font-family: "MullerRegular";
        }

        .admin_color .profile_block_admin .tabcontent .block_add_turist .block_content_add_turist .qweweweq .add_reise .dop_class .columm_input .item_form .inp_add_prof {
            border: 1px solid #000;
            width: 391px;
            height: 50px;
            padding-left: 20px;
            padding-top: 1px;
            font-weight: 400;
            font-size: 16px;
            line-height: 130%;
            background-color: #E6E6E6;
            letter-spacing: 0.1em;
            text-transform: uppercase;
            color: #000;
            font-family: "MullerRegular";
            -webkit-appearance: none;
            -moz-appearance: none;
            appearance: none;
        }

        .admin_color .profile_block_admin .tabcontent .block_add_turist .block_content_add_turist .qweweweq .add_reise .dop_class .columm_input .item_form .inp_add_prof option {
            letter-spacing: 0.4em;
            font-family: "YourDesiredFont", sans-serif;
        }

        .admin_color .profile_block_admin .tabcontent .block_add_turist .block_content_add_turist .qweweweq .add_reise .dop_class .columm_input .item_form .inp_add_prof::-ms-expand {
            display: none;
        }

        .admin_color .profile_block_admin .tabcontent .block_add_turist .block_content_add_turist .qweweweq .add_reise .dop_class .columm_input .item_form .inp_add_prof::-webkit-select {
            background: transparent;
        }

        .admin_color .profile_block_admin .tabcontent .block_add_turist .block_content_add_turist .qweweweq .add_reise .dop_class .columm_input .item_form :disabled {
            background-color: rgb(211, 211, 211);
            color: linen;
            opacity: 1;
        }

        .admin_color .profile_block_admin .tabcontent .block_add_turist .block_content_add_turist .qweweweq .add_reise .dop_class .columm_input .item_form .textrea_add_prof {
            border: 1px solid #000;
            width: 802px;
            height: 350px;
            padding: 20px 30px;
            font-weight: 400;
            font-size: 16px;
            line-height: 130%;
            background-color: #E6E6E6;
            letter-spacing: 0.1em;
            text-transform: uppercase;
            color: #000;
            font-family: "MullerRegular";
            text-wrap: wrap;
            resize: none;
        }

        .admin_color .profile_block_admin .tabcontent .block_add_turist .block_content_add_turist .qweweweq .add_reise .dop_class .columm_input .item_form .three_items_form {
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-orient: vertical;
            -webkit-box-direction: normal;
            -ms-flex-direction: column;
            flex-direction: column;
            gap: 20px;
        }

        .admin_color .profile_block_admin .tabcontent .block_add_turist .block_content_add_turist .qweweweq .add_reise .dop_class .columm_input .item_form .three_items_form .row_item_fotm {
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            gap: 20px;
        }

        .admin_color .profile_block_admin .tabcontent .block_add_turist .block_content_add_turist .qweweweq .add_reise .dop_class .columm_input .item_form .three_items_form .row_item_fotm .itemm_form {
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-orient: vertical;
            -webkit-box-direction: normal;
            -ms-flex-direction: column;
            flex-direction: column;
            gap: 5px;
        }

        .admin_color .profile_block_admin .tabcontent .block_add_turist .block_content_add_turist .qweweweq .add_reise .dop_class .columm_input .item_form .three_items_form .row_item_fotm .itemm_form .p_name_inp {
            font-weight: 400;
            font-size: 16px;
            line-height: 130%;
            letter-spacing: 0.1em;
            text-transform: uppercase;
            color: #000;
            font-family: "MullerRegular";
        }

        .admin_color .profile_block_admin .tabcontent .block_add_turist .block_content_add_turist .qweweweq .add_reise .dop_class .columm_input .item_form .three_items_form .row_item_fotm .itemm_form .inp_cost {
            border: 1px solid #000;
            width: 254px;
            height: 36px;
            background: #e6e6e6;
            padding-left: 15px;
            padding-top: 1px;
            letter-spacing: 0.1em;
            font-size: 14px;
        }

        .admin_color .profile_block_admin .tabcontent .block_add_turist .block_content_add_turist .qweweweq .add_reise .dop_class .img_flex_block .name_inp {
            font-weight: 400;
            font-size: 20px;
            line-height: 130%;
            letter-spacing: 0.1em;
            text-transform: uppercase;
            color: #000;
            font-family: "MullerRegular";
        }

        .admin_color .profile_block_admin .tabcontent .block_add_turist .block_content_add_turist .qweweweq .add_reise .dop_class .img_flex_block .upload-container {
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            gap: 20px;
        }

        .admin_color .profile_block_admin .tabcontent .block_add_turist .block_content_add_turist .qweweweq .add_reise .dop_class .img_flex_block .upload-container .upload-block {
            position: relative;
            width: 220px;
            outline: none !important;
            height: 220px;
            border: 1px solid #000000;
            outline: none;
            cursor: pointer;
        }

        .admin_color .profile_block_admin .tabcontent .block_add_turist .block_content_add_turist .qweweweq .add_reise .dop_class .img_flex_block .upload-container .upload-block input[type=file] {
            position: absolute;
            top: 0;
            left: 0;
            outline: none !important;
            width: 100%;
            height: 100%;
            opacity: 0;
            cursor: pointer;
        }

        .admin_color .profile_block_admin .tabcontent .block_add_turist .block_content_add_turist .qweweweq .add_reise .dop_class .img_flex_block .upload-container .upload-block img {
            width: 100%;
            outline: none !important;
            height: 100%;
            -o-object-fit: cover;
            object-fit: cover;
        }

        .admin_color .profile_block_admin .tabcontent .block_add_turist .block_content_add_turist .qweweweq .add_reise .columm_input {
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-orient: vertical;
            -webkit-box-direction: normal;
            -ms-flex-direction: column;
            flex-direction: column;
            gap: 25px;
            margin-top: 20px;
        }

        .admin_color .profile_block_admin .tabcontent .block_add_turist .block_content_add_turist .qweweweq .add_reise .columm_input .item_form {
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-orient: vertical;
            -webkit-box-direction: normal;
            -ms-flex-direction: column;
            flex-direction: column;
            gap: 5px;
        }

        .admin_color .profile_block_admin .tabcontent .block_add_turist .block_content_add_turist .qweweweq .add_reise .columm_input .item_form .name_inp {
            font-weight: 400;
            font-size: 20px;
            line-height: 130%;
            letter-spacing: 0.1em;
            text-transform: uppercase;
            color: #000;
            font-family: "MullerRegular";
        }

        .admin_color .profile_block_admin .tabcontent .block_add_turist .block_content_add_turist .qweweweq .add_reise .columm_input .item_form .inp_add_prof {
            border: 1px solid #000;
            width: 391px;
            height: 50px;
            padding-left: 20px;
            padding-top: 1px;
            font-weight: 400;
            font-size: 16px;
            line-height: 130%;
            background-color: #E6E6E6;
            letter-spacing: 0.1em;
            text-transform: uppercase;
            color: #000;
            font-family: "MullerRegular";
            -webkit-appearance: none;
            -moz-appearance: none;
            appearance: none;
        }

        .admin_color .profile_block_admin .tabcontent .block_add_turist .block_content_add_turist .qweweweq .add_reise .columm_input .item_form .inp_add_prof option {
            letter-spacing: 0.4em;
            font-family: "YourDesiredFont", sans-serif;
        }

        .admin_color .profile_block_admin .tabcontent .block_add_turist .block_content_add_turist .qweweweq .add_reise .columm_input .item_form .inp_add_prof::-ms-expand {
            display: none;
        }

        .admin_color .profile_block_admin .tabcontent .block_add_turist .block_content_add_turist .qweweweq .add_reise .columm_input .item_form .inp_add_prof::-webkit-select {
            background: transparent;
        }

        .admin_color .profile_block_admin .tabcontent .block_add_turist .block_content_add_turist .qweweweq .add_reise .columm_input .item_form :disabled {
            background-color: rgb(211, 211, 211);
            color: linen;
            opacity: 1;
        }

        .admin_color .profile_block_admin .tabcontent .block_add_turist .block_content_add_turist .qweweweq .add_reise .columm_input .item_form .textrea_add_prof {
            border: 1px solid #000;
            width: 802px;
            height: 350px;
            padding: 20px 30px;
            font-weight: 400;
            font-size: 16px;
            line-height: 130%;
            background-color: #E6E6E6;
            letter-spacing: 0.1em;
            text-transform: uppercase;
            color: #000;
            font-family: "MullerRegular";
            text-wrap: wrap;
            resize: none;
        }

        .admin_color .profile_block_admin .tabcontent .block_add_turist .block_content_add_turist .qweweweq .add_reise .columm_input .item_form .three_items_form {
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-orient: vertical;
            -webkit-box-direction: normal;
            -ms-flex-direction: column;
            flex-direction: column;
            gap: 20px;
        }

        .admin_color .profile_block_admin .tabcontent .block_add_turist .block_content_add_turist .qweweweq .add_reise .columm_input .item_form .three_items_form .row_item_fotm {
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            gap: 20px;
        }

        .admin_color .profile_block_admin .tabcontent .block_add_turist .block_content_add_turist .qweweweq .add_reise .columm_input .item_form .three_items_form .row_item_fotm .itemm_form {
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-orient: vertical;
            -webkit-box-direction: normal;
            -ms-flex-direction: column;
            flex-direction: column;
            gap: 5px;
        }

        .admin_color .profile_block_admin .tabcontent .block_add_turist .block_content_add_turist .qweweweq .add_reise .columm_input .item_form .three_items_form .row_item_fotm .itemm_form .p_name_inp {
            font-weight: 400;
            font-size: 16px;
            line-height: 130%;
            letter-spacing: 0.1em;
            text-transform: uppercase;
            color: #000;
            font-family: "MullerRegular";
        }

        .admin_color .profile_block_admin .tabcontent .block_add_turist .block_content_add_turist .qweweweq .add_reise .columm_input .item_form .three_items_form .row_item_fotm .itemm_form .inp_cost {
            border: 1px solid #000;
            width: 254px;
            height: 36px;
            background: #e6e6e6;
            padding-left: 15px;
            padding-top: 1px;
            etter-spacing: 0.1em;
            font-size: 14px;
        }

        .admin_color .profile_block_admin .tabcontent .block_add_turist .block_content_add_turist .qweweweq .add_reise .columm_input .categories {
            width: 802px;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-pack: start;
            -ms-flex-pack: start;
            justify-content: start;
            -ms-flex-wrap: wrap;
            flex-wrap: wrap;
            gap: 7px;
            /* Промежуток между категориями */
        }

        .admin_color .profile_block_admin .tabcontent .block_add_turist .block_content_add_turist .qweweweq .add_reise .columm_input .categories .category {
            background-color: #E6E6E6;
            /* Фон категории */
            border: 1px solid #000000;
            /* Граница категории */
            padding: 5px 13px 3px 13px;
            /* Отступы текста внутри категории */
            text-align: center;
            /* Выравнивание текста по центру */
            cursor: pointer;
            font-weight: 400;
            font-size: 20px;
            line-height: 130%;
            letter-spacing: 0.05em;
            text-transform: uppercase;
            color: #000;
            font-family: "MullerRegular";
        }

        .admin_color .profile_block_admin .tabcontent .block_add_turist .block_content_add_turist .qweweweq .add_reise .columm_input .categories .active {
            background-color: #000000;
            color: #eee;
        }

        .admin_color .profile_block_admin .tabcontent .block_add_turist .block_content_add_turist .qweweweq .add_reise .columm_input .btn_add {
            width: 802px;
            height: 70px;
            background: #000;
            font-weight: 500;
            font-size: 18px;
            text-transform: uppercase;
            text-decoration: underline;
            -webkit-text-decoration-skip-ink: none;
            text-decoration-skip-ink: none;
            text-align: center;
            padding-top: 1px;
            font-family: "MullerRegular";
            color: #f3f3f3;
        }

        .admin_color .profile_block_admin .tabcontent .block_add_turist .tabcontentqwe {
            display: none;
        }

        .admin_color .profile_block_admin .tabcontent .block_add_turist .tabcontentqwe .content_bron {
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-orient: vertical;
            -webkit-box-direction: normal;
            -ms-flex-direction: column;
            flex-direction: column;
            gap: 20px;
        }

        .admin_color .profile_block_admin .tabcontent .block_add_turist .tabcontentqwe .content_bron .text_column {
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            padding: 0 24px;
            margin-top: 20px;
            margin-bottom: 0px;
        }

        .admin_color .profile_block_admin .tabcontent .block_add_turist .tabcontentqwe .content_bron .text_column .grey_text {
            font-weight: 500;
            font-size: 16px;
            line-height: 130%;
            letter-spacing: 0.05em;
            text-transform: uppercase;
            color: rgba(0, 0, 0, 0.6);
            font-family: "MullerMedium";
        }

        .admin_color .profile_block_admin .tabcontent .block_add_turist .tabcontentqwe .content_bron .text_column .id {
            margin-right: 129px;
        }

        .admin_color .profile_block_admin .tabcontent .block_add_turist .tabcontentqwe .content_bron .text_column .fio {
            margin-right: 515px;
        }

        .admin_color .profile_block_admin .tabcontent .block_add_turist .tabcontentqwe .content_bron .text_column .zaregan {
            margin-right: 50px;
        }

        .admin_color .profile_block_admin .tabcontent .block_add_turist .tabcontentqwe .content_bron .column_flex {
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-orient: vertical;
            -webkit-box-direction: normal;
            -ms-flex-direction: column;
            flex-direction: column;
            gap: 10px;
        }

        .admin_color .profile_block_admin .tabcontent .block_add_turist .tabcontentqwe .content_bron .column_flex .flrx {
            width: 1143px;
            padding: 15px 35px;
            border: 1px solid #000;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-align: end;
            -ms-flex-align: end;
            align-items: flex-end;
            -webkit-box-pack: justify;
            -ms-flex-pack: justify;
            justify-content: space-between;
        }

        .admin_color .profile_block_admin .tabcontent .block_add_turist .tabcontentqwe .content_bron .column_flex .flrx .layot {
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-align: end;
            -ms-flex-align: end;
            align-items: flex-end;
            gap: 35px;
        }

        .admin_color .profile_block_admin .tabcontent .block_add_turist .tabcontentqwe .content_bron .column_flex .flrx .layot .id {
            font-weight: 400;
            font-size: 18px;
            line-height: 130%;
            letter-spacing: 0.1em;
            text-transform: uppercase;
            color: #000;
            font-family: "MullerRegular";
        }

        .admin_color .profile_block_admin .tabcontent .block_add_turist .tabcontentqwe .content_bron .column_flex .flrx .layot .fio {
            font-size: 24px;
            line-height: 130%;
            letter-spacing: 0em;
            text-transform: uppercase;
            color: #000;
            width: 520px;
            font-family: "MullerRegular";
        }

        .admin_color .profile_block_admin .tabcontent .block_add_turist .tabcontentqwe .content_bron .column_flex .flrx .layot .data_zareg {
            font-weight: 400;
            font-size: 18px;
            line-height: 130%;
            letter-spacing: 0.1em;
            text-transform: uppercase;
            color: #000;
            font-family: "MullerRegular";
        }

        .admin_color .profile_block_admin .tabcontent .block_add_turist .tabcontentqwe .content_bron .column_flex .flrx .layot .data_zaban {
            font-weight: 400;
            font-size: 18px;
            line-height: 130%;
            letter-spacing: 0.1em;
            text-transform: uppercase;
            color: #000;
            font-family: "MullerRegular";
        }

        .admin_color .profile_block_admin .block {
            display: block;
        }

        .ban .container h1 {
            margin-top: 20px;
            font-weight: 400;
            font-size: 48px;
            line-height: 120%;
            letter-spacing: 0.02em;
            text-transform: uppercase;
            margin-bottom: 60px;
            font-family: "MullerRegular";
        }

        .ban .container p {
            font-weight: 400;
            width: 450px;
            font-size: 15px;
            line-height: 140%;
            letter-spacing: 0.1em;
            font-family: "MullerRegular";
            text-transform: uppercase;
            color: #9a9a9a;
        }

        .ban .container .ban_gif {
            position: absolute;
            right: 0;
            top: 100px;
            width: 800px;
        }

        footer .container .footer_content {
            margin-top: 100px;
            margin-bottom: 20px;
        }

        footer .container .footer_content .footer_top .footer_h3 {
            font-weight: 300;
            font-size: 40px;
            letter-spacing: 0.25em;
            text-transform: uppercase;
            color: white;
            font-family: "MullerLight";
        }

        footer .container .footer_content .footer_line {
            width: 100%;
            border: 1px solid white;
        }

        footer .container .footer_content .footer_bottom .footer_name {
            font-family: "MullerLight";
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            gap: 8px;
            margin-top: 18px;
        }

        footer .container .footer_content .footer_bottom .footer_name .footer_h4 {
            font-weight: 400;
            font-size: 18px;
            letter-spacing: 0.25em;
            text-transform: uppercase;
            color: #ADADAD;
        }

        footer .container .footer_content .footer_bottom .footer_name .footer_copy {
            font-size: 20px;
            color: #ADADAD;
        }

        footer .container .footer_content .footer_bottom .footer_name .footer_year {
            font-weight: 400;
            font-size: 18px;
            letter-spacing: 0.1em;
            text-transform: uppercase;
            color: #ADADAD;
        }

        #popup {
            position: fixed;
            top: 50%;
            left: 50%;
            -webkit-transform: translate(-50%, -50%);
            -ms-transform: translate(-50%, -50%);
            transform: translate(-50%, -50%);
            width: 600px;
            height: 400px;
            background-color: #000000;
            border: 1px solid rgb(255, 255, 255);
            z-index: 1000;
            padding: 20px;
            -webkit-box-sizing: border-box;
            box-sizing: border-box;
            display: none;
            padding: 20px;
            -webkit-box-shadow: 2px 10px 1800px 500px rgba(0, 0, 0, 0.75);
            box-shadow: 2px 10px 1800px 500px rgba(0, 0, 0, 0.75);
        }

        #popup #close-popup-btn {
            position: absolute;
            top: 10px;
            right: 15px;
            font-size: 24px;
            cursor: pointer;
            color: #696969;
        }

        #popup .content_popup {
            padding: 30px;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-orient: vertical;
            -webkit-box-direction: normal;
            -ms-flex-direction: column;
            flex-direction: column;
            -webkit-box-pack: center;
            -ms-flex-pack: center;
            justify-content: center;
            gap: 30px;
        }

        #popup .content_popup .big_pop {
            font-family: "MullerMedium";
            font-weight: 500;
            font-size: 24px;
            text-transform: uppercase;
            text-decoration: underline;
        }

        #popup .content_popup .lit_pop {
            font-weight: 400;
            font-size: 16px;
            line-height: 130%;
            width: 300px;
            font-family: "MullerRegular";
            letter-spacing: 0.1em;
            text-transform: uppercase;
            color: #616161;
        }

        #popup .content_popup .delete {
            height: 50px;
            margin-top: 70px;
            font-size: 18px;
            padding-top: 2px;
            background-color: #e6e6e6;
            font-family: "MullerRegular";
            text-transform: uppercase;
            text-decoration: underline;
        }

        #cursor,
        #aura {
            position: absolute;
            border-radius: 100%;
            -webkit-transition: 0.2s cubic-bezier(0.75, -1.27, 3, 2.33) opacity, 0.5s cubic-bezier(0.75, -1.27, 3, 2.33) -webkit-transform;
            transition: 0.2s cubic-bezier(0.75, -1.27, 3, 2.33) opacity, 0.5s cubic-bezier(0.75, -1.27, 3, 2.33) -webkit-transform;
            transition: 0.5s cubic-bezier(0.75, -1.27, 3, 2.33) transform, 0.2s cubic-bezier(0.75, -1.27, 3, 2.33) opacity;
            transition: 0.5s cubic-bezier(0.75, -1.27, 3, 2.33) transform, 0.2s cubic-bezier(0.75, -1.27, 3, 2.33) opacity, 0.5s cubic-bezier(0.75, -1.27, 3, 2.33) -webkit-transform;
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
            pointer-events: none;
            z-index: 10000;
        }

        #cursor {
            width: 8px;
            height: 8px;
            background-color: white;
            -webkit-transform: scale(1);
            -ms-transform: scale(1);
            transform: scale(1);
        }

        #cursor.active {
            opacity: 100%;
            -webkit-transform: scale(1);
            -ms-transform: scale(1);
            transform: scale(1);
        }

        #aura {
            width: 46px;
            height: 46px;
            border: 1px solid rgba(255, 255, 255, 0.5);
            background-color: rgba(255, 255, 255, 0.1);
            -webkit-transform: translate(5px, 5px);
            -ms-transform: translate(5px, 5px);
            transform: translate(5px, 5px);
            -webkit-transition: 0.1s;
            transition: 0.1s;
        }

        #aura.active {
            border: 1.2px solid rgba(255, 255, 255, 0.12);
            background-color: rgba(255, 255, 255, 0.1);
            -webkit-transform: scale(1.3);
            -ms-transform: scale(1.3);
            transform: scale(1.3);
        }

        #aura.hidden,
        #cursor.hidden {
            -webkit-transform: scale(0.001);
            -ms-transform: scale(0.001);
            transform: scale(0.001);
        }

        @media screen and (max-width: 500px) {
            * {
                cursor: pointer;
            }

            body {
                background-color: #000000;
                width: 100%;
                max-width: 100%;
                overflow-x: hidden;
            }

            .desktop {
                display: none;
            }

            .mobile {
                display: block;
            }

            .container {
                margin: 0 auto;
                max-width: 350px;
            }

            .header_content {
                z-index: 99;
                margin-top: 40px;
                display: -webkit-box;
                display: -ms-flexbox;
                display: flex;
                -webkit-box-align: center;
                -ms-flex-align: center;
                align-items: center;
                -webkit-box-pack: justify;
                -ms-flex-pack: justify;
                justify-content: space-between;
                margin-bottom: 40px;
            }

            .header_content .logo {
                padding-top: 5px;
                font-family: "MullerLight";
                font-size: 20px;
                letter-spacing: 0.25em;
                text-transform: uppercase;
                color: #ffffff;
            }

            .header_content nav {
                display: -webkit-box;
                display: -ms-flexbox;
                display: flex;
                gap: 12px;
                -webkit-box-align: center;
                -ms-flex-align: center;
                align-items: center;
                /* Стили для контента */
                /* Стили для кнопки закрытия */
            }

            .header_content nav .nav_item {
                z-index: 999;
                display: -webkit-box;
                display: -ms-flexbox;
                display: flex;
                gap: 6px;
                -webkit-box-align: center;
                -ms-flex-align: center;
                align-items: center;
            }

            .header_content nav .nav_item .name_valute {
                font-weight: 400;
                font-family: "MullerRegular";
                font-size: 12px;
                padding-top: 4px;
                line-height: 130%;
                letter-spacing: 0.1em;
                text-transform: uppercase;
            }

            .header_content nav .sidebar_toggler {
                padding: 10px;
                border: none;
                opacity: 80%;
                font: inherit;
                color: inherit;
                background-color: transparent;
                -webkit-transition: 0.2s;
                transition: 0.2s;
            }

            .header_content nav .sidebar_toggler:hover {
                padding: 10px;
                border: none;
                opacity: 100%;
                font: inherit;
                color: inherit;
                background-color: transparent;
            }

            .header_content nav .sidebar {
                z-index: 999;
                border-left: 1px solid #ADADAD;
                position: fixed;
                top: 0;
                right: -363px;
                /* начальное положение за пределами экрана */
                width: 360px;
                height: 100vh;
                background: #000;
                color: #fff;
                -webkit-transition: right 0.3s;
                transition: right 0.3s;
                /* анимация выезда панели */
            }

            .header_content nav .sidebar .menu_burder_contetn {
                padding-top: 40px;
                display: -webkit-box;
                display: -ms-flexbox;
                display: flex;
                -webkit-box-orient: vertical;
                -webkit-box-direction: normal;
                -ms-flex-direction: column;
                flex-direction: column;
                gap: 30px;
                padding-left: 26px;
                padding-right: 37px;
            }

            .header_content nav .sidebar .menu_burder_contetn .profile .name_user {
                font-weight: 400;
                font-size: 18px;
                font-family: "MullerRegular";
                line-height: 130%;
                letter-spacing: 0.1em;
                text-transform: uppercase;
                color: #d6d6d6;
                -webkit-transition: 0.3s;
                transition: 0.3s;
            }

            .header_content nav .sidebar .menu_burder_contetn .profile .profile_link {
                display: -webkit-box;
                display: -ms-flexbox;
                display: flex;
                gap: 7px;
            }

            .header_content nav .sidebar .menu_burder_contetn .profile .profile_link .profile_p {
                font-weight: 400;
                font-family: "MullerRegular";
                font-size: 12px;
                line-height: 130%;
                letter-spacing: 0.1em;
                text-transform: uppercase;
                color: #696969;
                -webkit-transition: 0.3s;
                transition: 0.3s;
            }

            .header_content nav .sidebar .menu_burder_contetn .profile .profile_link svg {
                -webkit-transition: 0.3s;
                transition: 0.3s;
                stroke: #696969;
            }

            .header_content nav .sidebar .menu_burder_contetn .profile:hover .name_user {
                font-weight: 400;
                font-size: 18px;
                font-family: "MullerRegular";
                line-height: 130%;
                letter-spacing: 0.1em;
                text-transform: uppercase;
                color: #ffffff;
            }

            .header_content nav .sidebar .menu_burder_contetn .profile:hover .profile_link {
                display: -webkit-box;
                display: -ms-flexbox;
                display: flex;
                gap: 7px;
            }

            .header_content nav .sidebar .menu_burder_contetn .profile:hover .profile_link .profile_p {
                font-weight: 400;
                font-family: "MullerRegular";
                font-size: 12px;
                line-height: 130%;
                letter-spacing: 0.1em;
                text-transform: uppercase;
                color: #a9a9a9;
            }

            .header_content nav .sidebar .menu_burder_contetn .profile:hover .profile_link svg {
                stroke: #a9a9a9;
            }

            .header_content nav .sidebar .menu_burder_contetn .gap {
                display: -webkit-box;
                display: -ms-flexbox;
                display: flex;
                -webkit-box-orient: vertical;
                -webkit-box-direction: normal;
                -ms-flex-direction: column;
                flex-direction: column;
                gap: 15px;
            }

            .header_content nav .sidebar .menu_burder_contetn .gap .burger_item {
                font-weight: 400;
                font-family: "MullerRegular";
                font-size: 15px;
                line-height: 130%;
                color: #c9c9c9;
                letter-spacing: 0.1em;
                text-transform: uppercase;
                -webkit-transition: 0.3s;
                transition: 0.3s;
            }

            .header_content nav .sidebar .menu_burder_contetn .gap .little_text {
                font-weight: 400;
                font-size: 13px;
                color: #c9c9c9;
                line-height: 130%;
                font-family: "MullerRegular";
                letter-spacing: 0.1em;
                text-transform: uppercase;
                -webkit-transition: 0.3s;
                transition: 0.3s;
            }

            .header_content nav .sidebar .menu_burder_contetn .gap .burger_item:hover {
                font-weight: 400;
                font-family: "MullerRegular";
                font-size: 15px;
                line-height: 130%;
                color: #ffffff;
                letter-spacing: 0.1em;
                text-transform: uppercase;
            }

            .header_content nav .sidebar .menu_burder_contetn .gap .little_text:hover {
                font-weight: 400;
                font-size: 13px;
                color: #ffffff;
                line-height: 130%;
                font-family: "MullerRegular";
                letter-spacing: 0.1em;
                text-transform: uppercase;
            }

            .header_content nav .content {
                position: absolute;
                padding-right: 360px;
                /* учитываем ширину панели для смещения контента */
                -webkit-transition: padding-right 0.3s;
                transition: padding-right 0.3s;
                /* анимация смещения контента */
            }

            .header_content nav .close_btn {
                position: absolute;
                top: 10px;
                right: 126px;
                color: #fff;
                font-size: 20px;
            }

            .banner_img {
                position: absolute;
                top: 0;
                z-index: -1;
            }

            .banner .container .banner_content {
                margin-top: 0px;
                display: -webkit-box;
                display: -ms-flexbox;
                display: flex;
                -webkit-box-orient: vertical;
                -webkit-box-direction: normal;
                -ms-flex-direction: column;
                flex-direction: column;
                -webkit-box-align: center;
                -ms-flex-align: center;
                align-items: center;
            }

            .banner .container .banner_content .banner_main_text {
                margin-top: 20px;
                font-weight: 250;
                font-size: 48px;
                letter-spacing: 0.16em;
                text-transform: uppercase;
                text-align: center;
                font-family: "MullerUltraLight";
                z-index: 998;
                margin-bottom: 40px;
            }

            .banner .container .banner_content .banner_text {
                font-family: "MullerRegular";
                z-index: 989;
                -webkit-box-align: center;
                -ms-flex-align: center;
                align-items: center;
                font-weight: 400;
                font-size: 15px;
                line-height: 120%;
                height: 40px;
                letter-spacing: 0.04em;
                text-transform: uppercase;
                text-align: center;
                color: #c1c1c1;
                width: 340px;
            }

            .banner .container .banner_content .banner_form {
                display: -webkit-box;
                display: -ms-flexbox;
                display: flex;
                gap: 0px;
                -webkit-box-orient: vertical;
                -webkit-box-direction: normal;
                -ms-flex-direction: column;
                flex-direction: column;
            }

            .banner .container .banner_content .banner_form .flex {
                display: -webkit-box;
                display: -ms-flexbox;
                display: flex;
                gap: -3px;
            }

            .banner .container .banner_content .banner_form .flex .banner_inp_three {
                border: 1px solid #9a9a9a;
                width: 190px;
                outline: none;
                height: 46px;
                background: #1a1919;
                padding-top: 4px;
                padding-left: 20px;
                font-weight: 400;
                font-size: 18px;
                letter-spacing: 0.02em;
                text-transform: uppercase;
                color: #D4D4D4;
                font-family: "MullerRegular";
            }

            .banner .container .banner_content .banner_form .banner_inp_one {
                -webkit-appearance: none;
                -moz-appearance: none;
                appearance: none;
                border: 1px solid #9a9a9a;
                width: 377px;
                outline: none;
                height: 46px;
                background: #1a1919;
                padding-top: 4px;
                padding-left: 20px;
                font-weight: 400;
                font-size: 16px;
                letter-spacing: 0.02em;
                text-transform: uppercase;
                color: #D4D4D4;
                font-family: "MullerRegular";
            }

            .banner .container .banner_content .banner_form .banner_inp_one::-ms-expand {
                display: none;
            }

            .banner .container .banner_content .banner_form .banner_inp_one::-webkit-select {
                background: transparent;
            }

            .banner .container .banner_content .banner_form .banner_inp_one option {
                font-family: "YourDesiredFont", sans-serif;
                letter-spacing: 0.6em;
            }

            .banner .container .banner_content .banner_form .banner_inp_two {
                border: 1px solid #9a9a9a;
                width: 377px;
                height: 46px;
                outline: none;
                background: #1a1919;
                padding-top: 4px;
                padding-left: 20px;
                font-weight: 400;
                font-size: 16px;
                letter-spacing: 0.02em;
                text-transform: uppercase;
                color: #D4D4D4;
                font-family: "MullerRegular";
            }

            .banner .container .banner_content .banner_form .banner_btn {
                z-index: 998;
                width: 378px;
                height: 46px;
                background: #f3f3f3;
                outline: none;
                display: -webkit-box;
                display: -ms-flexbox;
                display: flex;
                -webkit-box-pack: center;
                -ms-flex-pack: center;
                justify-content: center;
                -webkit-box-align: center;
                -ms-flex-align: center;
                align-items: center;
                font-family: "MullerMedium";
                font-weight: 500;
                font-size: 16px;
                text-transform: uppercase;
                text-decoration: underline;
                -webkit-text-decoration-skip-ink: none;
                text-decoration-skip-ink: none;
                color: #000;
            }

            .all_main_page_info {
                position: relative;
                margin-top: 80px;
            }

            .all_main_page_info .moon_main_page_img {
                position: absolute;
                margin-top: 200px;
                width: 50%;
                left: -15%;
                z-index: -99;
            }

            .all_main_page_info .starship_main {
                position: absolute;
                bottom: -170px;
                left: 40%;
                width: 60%;
                opacity: 70%;
                margin-left: 0px;
                z-index: -99;
            }

            .all_main_page_info .container .top_farcts .name_page_block {
                font-weight: 300;
                font-size: 28px;
                letter-spacing: 0.1em;
                text-transform: uppercase;
                font-family: "MullerLight";
            }

            .all_main_page_info .container .top_farcts .text_fact {
                font-weight: 400;
                font-family: "MullerRegular";
                color: #ADADAD;
                font-size: 12px;
                line-height: 130%;
                letter-spacing: 0.1em;
                text-transform: uppercase;
            }

            .all_main_page_info .container .top_farcts .short_width {
                width: 314px;
                margin-top: 30px;
            }

            .all_main_page_info .container .top_farcts .short_width_name {
                width: 340px;
            }

            .all_main_page_info .container .top_farcts .width_fact {
                width: 100%;
                margin-top: 20px;
                margin-left: 0px;
            }

            .all_main_page_info .container .top_farcts .climat_width {
                margin-top: 20px;
                width: 220px;
            }

            .all_main_page_info .container .fact1 {
                position: static;
                margin-left: 0px;
            }

            .all_main_page_info .container .fact2 {
                position: static;
                margin-top: 80px;
                margin-left: 120px;
            }

            .all_main_page_info .container .fact3 {
                margin-top: 80px;
                position: static;
                margin-left: 0px;
            }

            .crums {
                display: none;
            }

            .hotel_mobile {
                display: block;
                margin-top: 20px;
            }

            .mobile_filtr {
                outline: none;
                /* Для синий ободки */
                border: 0;
                background: transparent;
            }

            .mobile_filtr .mobile_filtr_img {
                padding: 20px;
                /* отображаем курсор в виде руки при наведении; некоторые
        считают, что необходимо оставлять стрелочный вид для кнопок */
                cursor: pointer;
            }

            #drawer {
                position: fixed;
                top: 0;
                left: 0;
                border-right: 1px solid white;
                border-top: none;
                z-index: 10000;
                width: 235px;
                height: 100%;
                background-color: #000000;
                -webkit-transform: translateX(-100%);
                -ms-transform: translateX(-100%);
                transform: translateX(-100%);
                -webkit-transition: -webkit-transform 0.3s ease-out;
                transition: -webkit-transform 0.3s ease-out;
                transition: transform 0.3s ease-out;
                transition: transform 0.3s ease-out, -webkit-transform 0.3s ease-out;
            }

            #drawer .left_catalog_hotel {
                position: static;
                top: 10px;
                -ms-flex-item-align: start;
                align-self: start;
                padding: 35px 20px 5px;
                border-right: 1px solid white;
                display: -webkit-box;
                display: -ms-flexbox;
                display: flex;
                -webkit-box-orient: vertical;
                -webkit-box-direction: normal;
                -ms-flex-direction: column;
                flex-direction: column;
                gap: 25px;
            }

            #drawer .left_catalog_hotel .name_block {
                font-family: "MullerRegular";
                font-weight: 400;
                font-size: 24px;
                line-height: 130%;
                letter-spacing: 0.1em;
                text-transform: uppercase;
            }

            #drawer .left_catalog_hotel .filtr_block {
                display: -webkit-box;
                display: -ms-flexbox;
                display: flex;
                -webkit-box-orient: vertical;
                -webkit-box-direction: normal;
                -ms-flex-direction: column;
                flex-direction: column;
                gap: 10px;
            }

            #drawer .left_catalog_hotel .filtr_block .name_filtr_block {
                font-family: "MullerRegular";
                font-weight: 400;
                font-size: 18px;
                line-height: 130%;
                letter-spacing: 0.1em;
                text-transform: uppercase;
            }

            #drawer .left_catalog_hotel .filtr_block .filtr_block_column_price {
                display: -webkit-box;
                display: -ms-flexbox;
                display: flex;
                gap: 10px;
                -webkit-box-align: center;
                -ms-flex-align: center;
                align-items: center;
            }

            #drawer .left_catalog_hotel .filtr_block .filtr_block_column_price .filtr_block_price_inp {
                border: 1px solid #9a9a9a;
                width: 80px;
                padding-top: 2px;
                height: 40px;
                background: #1a1919;
                padding-left: 20px;
                font-weight: 400;
                font-size: 18px;
                letter-spacing: 0.02em;
                text-transform: uppercase;
                color: #D4D4D4;
                font-family: "MullerRegular";
            }

            #drawer .left_catalog_hotel .filtr_block .filtr_block_column_price .price_line {
                border: 1px solid #D4D4D4;
                width: 10px;
                height: 0px;
            }

            #drawer .left_catalog_hotel .filtr_block .filtr_block_column {
                display: -webkit-box;
                display: -ms-flexbox;
                display: flex;
                -webkit-box-orient: vertical;
                -webkit-box-direction: normal;
                -ms-flex-direction: column;
                flex-direction: column;
                gap: 15px;
            }

            #drawer .left_catalog_hotel .filtr_block .filtr_block_column .checkbox-wrapper-21 .control {
                display: block;
                position: relative;
                padding-left: 35px;
                padding-top: 3px;
                font-weight: 400;
                font-size: 13px;
                line-height: 130%;
                letter-spacing: 0.02em;
                text-transform: uppercase;
                color: #9a9a9a;
                font-family: "MullerRegular";
            }

            #drawer .left_catalog_hotel .filtr_block .filtr_block_column .checkbox-wrapper-21 .control input {
                position: absolute;
                z-index: -1;
                opacity: 0;
            }

            #drawer .left_catalog_hotel .filtr_block .filtr_block_column .checkbox-wrapper-21 .control input:checked~.control__indicator {
                background: #ffffff;
            }

            #drawer .left_catalog_hotel .filtr_block .filtr_block_column .checkbox-wrapper-21 .control input:checked~.control__indicator:after {
                display: block;
            }

            #drawer .left_catalog_hotel .filtr_block .filtr_block_column .checkbox-wrapper-21 .control input:disabled~.control__indicator {
                background: #e6e6e6;
                opacity: 0.6;
                pointer-events: none;
            }

            #drawer .left_catalog_hotel .filtr_block .filtr_block_column .checkbox-wrapper-21 .control__indicator {
                position: absolute;
                top: 2px;
                left: 0;
                height: 25px;
                width: 25px;
                background: #000000;
                border: 1px solid #9a9a9a;
            }

            #drawer .left_catalog_hotel .filtr_block .filtr_block_column .checkbox-wrapper-21 .control__indicator:after {
                content: "";
                position: absolute;
                display: none;
            }

            #drawer .left_catalog_hotel .filtr_block .filtr_block_column .checkbox-wrapper-21 .control:hover input~.control__indicator,
            #drawer .left_catalog_hotel .filtr_block .filtr_block_column .checkbox-wrapper-21 .control input:focus~.control__indicator {
                background: #1b1b1b;
                border: 1px solid #9a9a9a;
            }

            #drawer .left_catalog_hotel .filtr_block .filtr_block_column .checkbox-wrapper-21 .control:hover input:not([disabled]):checked~.control__indicator,
            #drawer .left_catalog_hotel .filtr_block .filtr_block_column .checkbox-wrapper-21 .control input:checked:focus~.control__indicator {
                background: #ffffff;
            }

            #drawer .left_catalog_hotel .filtr_block .filtr_block_column .checkbox-wrapper-21 .control--checkbox .control__indicator:after {
                left: 8px;
                top: 4px;
                width: 5px;
                height: 10px;
                border: solid #000000;
                border-width: 0 2px 2px 0;
                -webkit-transform: rotate(45deg);
                -ms-transform: rotate(45deg);
                transform: rotate(45deg);
            }

            #drawer .left_catalog_hotel .filtr_block .filtr_block_column .checkbox-wrapper-21 .control--checkbox input:disabled~.control__indicator:after {
                border-color: #7b7b7b;
            }

            #drawer .left_catalog_hotel .filter_btn {
                font-weight: 400;
                font-size: 18px;
                text-transform: uppercase;
                color: #000;
                font-family: "MullerRegular";
                width: 100%;
                height: 40px;
                padding-top: 2px;
                background: #d9d9d9;
                text-decoration: underline;
                -webkit-text-decoration-skip-ink: none;
                text-decoration-skip-ink: none;
                -webkit-transition: 0.25s;
                transition: 0.25s;
            }

            #drawer .left_catalog_hotel .filter_btn:hover {
                font-weight: 400;
                font-size: 18px;
                text-transform: uppercase;
                color: #000;
                font-family: "MullerRegular";
                width: 100%;
                height: 40px;
                padding-top: 2px;
                background: #ffffff;
                text-decoration: underline;
                -webkit-text-decoration-skip-ink: none;
                text-decoration-skip-ink: none;
                -webkit-transition: 0.25s;
                transition: 0.25s;
            }

            #drawer.open {
                -webkit-transform: translateX(0);
                -ms-transform: translateX(0);
                transform: translateX(0);
            }

            .catalog_hotel {
                display: -webkit-box;
                display: -ms-flexbox;
                display: flex;
                gap: 20px;
            }

            .catalog_hotel .desktop {
                display: none;
            }

            .catalog_hotel .right_catalog_hotel {
                margin-top: 0px;
                display: -webkit-box;
                display: -ms-flexbox;
                display: flex;
                -webkit-box-orient: vertical;
                -webkit-box-direction: normal;
                -ms-flex-direction: column;
                flex-direction: column;
                gap: 20px;
            }

            .catalog_hotel .right_catalog_hotel .catalog_hotel_flex {
                display: -webkit-box;
                display: -ms-flexbox;
                display: flex;
                -webkit-box-orient: vertical;
                -webkit-box-direction: normal;
                -ms-flex-direction: column;
                flex-direction: column;
                height: 415px;
                border: 1px solid #ffffff;
            }

            .catalog_hotel .right_catalog_hotel .catalog_hotel_flex .catalog_info_hotel {
                padding: 20px;
                display: -webkit-box;
                display: -ms-flexbox;
                display: flex;
                -webkit-box-orient: vertical;
                -webkit-box-direction: normal;
                -ms-flex-direction: column;
                flex-direction: column;
                gap: 20px;
            }

            .catalog_hotel .right_catalog_hotel .catalog_hotel_flex .catalog_info_hotel .img_hotel_catalog {
                width: 300px;
                height: 160px;
            }

            .catalog_hotel .right_catalog_hotel .catalog_hotel_flex .catalog_info_hotel .text_info_hotel {
                display: -webkit-box;
                display: -ms-flexbox;
                display: flex;
                -webkit-box-orient: vertical;
                -webkit-box-direction: normal;
                -ms-flex-direction: column;
                flex-direction: column;
                margin-top: 10px;
                gap: 8px;
            }

            .catalog_hotel .right_catalog_hotel .catalog_hotel_flex .catalog_info_hotel .text_info_hotel .name_hotel {
                font-weight: 400;
                font-size: 18px;
                letter-spacing: 0.02em;
                text-transform: uppercase;
                font-family: "MullerRegular";
            }

            .catalog_hotel .right_catalog_hotel .catalog_hotel_flex .catalog_info_hotel .text_info_hotel .more_info_hotel {
                display: -webkit-box;
                display: -ms-flexbox;
                display: flex;
                -webkit-box-orient: vertical;
                -webkit-box-direction: normal;
                -ms-flex-direction: column;
                flex-direction: column;
                gap: 20px;
            }

            .catalog_hotel .right_catalog_hotel .catalog_hotel_flex .catalog_info_hotel .text_info_hotel .more_info_hotel .more_info_hotel_p {
                font-weight: 400;
                font-family: "MullerRegular";
                font-size: 12px;
                width: 146px;
                line-height: 130%;
                letter-spacing: 0.1em;
                text-transform: uppercase;
            }

            .catalog_hotel .right_catalog_hotel .catalog_hotel_flex .catalog_info_hotel .desktop {
                display: none;
            }

            .catalog_hotel .right_catalog_hotel .catalog_hotel_flex .catalog_info_hotel .text_info_hotel_mobile {
                display: -webkit-box;
                display: -ms-flexbox;
                display: flex;
                gap: 10px;
            }

            .catalog_hotel .right_catalog_hotel .catalog_hotel_flex .catalog_info_hotel .text_info_hotel_mobile .text_info_hotel {
                display: -webkit-box;
                display: -ms-flexbox;
                display: flex;
                -webkit-box-orient: vertical;
                -webkit-box-direction: normal;
                -ms-flex-direction: column;
                flex-direction: column;
                margin-top: 10px;
                gap: 8px;
            }

            .catalog_hotel .right_catalog_hotel .catalog_hotel_flex .catalog_info_hotel .text_info_hotel_mobile .text_info_hotel .name_hotel {
                font-weight: 400;
                font-size: 18px;
                letter-spacing: 0.02em;
                text-transform: uppercase;
                font-family: "MullerRegular";
            }

            .catalog_hotel .right_catalog_hotel .catalog_hotel_flex .catalog_info_hotel .text_info_hotel_mobile .text_info_hotel .more_info_hotel {
                display: -webkit-box;
                display: -ms-flexbox;
                display: flex;
                -webkit-box-orient: vertical;
                -webkit-box-direction: normal;
                -ms-flex-direction: column;
                flex-direction: column;
                gap: 20px;
            }

            .catalog_hotel .right_catalog_hotel .catalog_hotel_flex .catalog_info_hotel .text_info_hotel_mobile .text_info_hotel .more_info_hotel .more_info_hotel_p {
                font-weight: 400;
                font-family: "MullerRegular";
                font-size: 12px;
                width: 146px;
                line-height: 130%;
                letter-spacing: 0.1em;
                text-transform: uppercase;
            }

            .catalog_hotel .right_catalog_hotel .catalog_hotel_flex .catalog_info_hotel .text_info_hotel_mobile .catalog_price_hotel {
                padding: 0px;
                margin-top: 5px;
                display: -webkit-box;
                display: -ms-flexbox;
                display: flex;
                -webkit-box-orient: vertical;
                -webkit-box-direction: normal;
                -ms-flex-direction: column;
                flex-direction: column;
                gap: 16px;
            }

            .catalog_hotel .right_catalog_hotel .catalog_hotel_flex .catalog_info_hotel .text_info_hotel_mobile .catalog_price_hotel .qwe_catalog .price_text {
                font-weight: 400;
                font-size: 10px;
                margin-bottom: 5px;
                line-height: 130%;
                letter-spacing: 0.05em;
                text-transform: uppercase;
                color: #9a9a9a;
                font-family: "MullerRegular";
            }

            .catalog_hotel .right_catalog_hotel .catalog_hotel_flex .catalog_info_hotel .text_info_hotel_mobile .catalog_price_hotel .qwe_catalog .price_main {
                display: -webkit-box;
                display: -ms-flexbox;
                display: flex;
                gap: 5px;
                -webkit-box-align: center;
                -ms-flex-align: center;
                align-items: center;
            }

            .catalog_hotel .right_catalog_hotel .catalog_hotel_flex .catalog_info_hotel .text_info_hotel_mobile .catalog_price_hotel .qwe_catalog .price_main .price_number {
                font-weight: 400;
                font-size: 18px;
                line-height: 130%;
                letter-spacing: 0.02em;
                text-transform: uppercase;
                font-family: "MullerRegular";
            }

            .catalog_hotel .right_catalog_hotel .catalog_hotel_flex .catalog_info_hotel .text_info_hotel_mobile .catalog_price_hotel .qwe_catalog .text_about_price {
                margin-top: 15px;
                font-weight: 400;
                font-size: 9px;
                line-height: 130%;
                width: 140px;
                letter-spacing: 0.08em;
                text-transform: uppercase;
                font-family: "MullerRegular";
                color: #9a9a9a;
            }

            .catalog_hotel .right_catalog_hotel .catalog_hotel_flex .catalog_info_hotel .choice_hotel {
                font-weight: 400;
                display: -webkit-box;
                display: -ms-flexbox;
                display: flex;
                -webkit-box-pack: center;
                -ms-flex-pack: center;
                justify-content: center;
                -webkit-box-align: center;
                -ms-flex-align: center;
                align-items: center;
                font-size: 18px;
                text-transform: uppercase;
                color: #000;
                font-family: "MullerRegular";
                width: 100%;
                background: #d9d9d9;
                text-decoration: underline;
                -webkit-text-decoration-skip-ink: none;
                text-decoration-skip-ink: none;
                height: 46px;
                -webkit-transition: 0.25s;
                transition: 0.25s;
            }

            .catalog_hotel .right_catalog_hotel .catalog_hotel_flex .catalog_info_hotel .choice_hotel:hover {
                font-weight: 400;
                display: -webkit-box;
                display: -ms-flexbox;
                display: flex;
                -webkit-box-pack: center;
                -ms-flex-pack: center;
                justify-content: center;
                -webkit-box-align: center;
                -ms-flex-align: center;
                align-items: center;
                font-size: 18px;
                text-transform: uppercase;
                color: #000;
                font-family: "MullerRegular";
                width: 100%;
                background: #ffffff;
                text-decoration: underline;
                -webkit-text-decoration-skip-ink: none;
                text-decoration-skip-ink: none;
                height: 46px;
                -webkit-transition: 0.25s;
                transition: 0.25s;
            }

            .catalog_hotel .right_catalog_hotel .catalog_hotel_flex .catalog_hotel_line {
                display: none;
                height: 100%;
                border: 1px solid #D4D4D4;
                width: 0px;
            }

            .catalog_hotel .right_catalog_hotel .catalog_hotel_flex .catalog_price_hotel {
                padding: 45px 20px 30px;
                display: -webkit-box;
                display: -ms-flexbox;
                display: flex;
                -webkit-box-orient: vertical;
                -webkit-box-direction: normal;
                -ms-flex-direction: column;
                flex-direction: column;
                gap: 16px;
            }

            .catalog_hotel .right_catalog_hotel .catalog_hotel_flex .catalog_price_hotel .qwe_catalog .price_text {
                font-weight: 400;
                font-size: 10px;
                margin-bottom: 10px;
                line-height: 130%;
                letter-spacing: 0.05em;
                text-transform: uppercase;
                color: #9a9a9a;
                font-family: "MullerRegular";
            }

            .catalog_hotel .right_catalog_hotel .catalog_hotel_flex .catalog_price_hotel .qwe_catalog .price_main {
                display: -webkit-box;
                display: -ms-flexbox;
                display: flex;
                gap: 5px;
                -webkit-box-align: center;
                -ms-flex-align: center;
                align-items: center;
            }

            .catalog_hotel .right_catalog_hotel .catalog_hotel_flex .catalog_price_hotel .qwe_catalog .price_main .price_number {
                font-weight: 400;
                font-size: 18px;
                line-height: 130%;
                letter-spacing: 0.02em;
                text-transform: uppercase;
                font-family: "MullerRegular";
            }

            .catalog_hotel .right_catalog_hotel .catalog_hotel_flex .catalog_price_hotel .qwe_catalog .text_about_price {
                margin-top: 15px;
                font-weight: 400;
                font-size: 10px;
                line-height: 130%;
                width: 150px;
                letter-spacing: 0.1em;
                text-transform: uppercase;
                font-family: "MullerRegular";
                color: #9a9a9a;
            }

            .catalog_hotel .right_catalog_hotel .catalog_hotel_flex .catalog_price_hotel .choice_hotel {
                font-weight: 400;
                display: -webkit-box;
                display: -ms-flexbox;
                display: flex;
                -webkit-box-pack: center;
                -ms-flex-pack: center;
                justify-content: center;
                -webkit-box-align: center;
                -ms-flex-align: center;
                align-items: center;
                font-size: 18px;
                text-transform: uppercase;
                color: #000;
                font-family: "MullerRegular";
                width: 234px;
                background: #d9d9d9;
                text-decoration: underline;
                -webkit-text-decoration-skip-ink: none;
                text-decoration-skip-ink: none;
                height: 46px;
                -webkit-transition: 0.25s;
                transition: 0.25s;
            }

            .catalog_hotel .right_catalog_hotel .catalog_hotel_flex .catalog_price_hotel .choice_hotel:hover {
                font-weight: 400;
                display: -webkit-box;
                display: -ms-flexbox;
                display: flex;
                -webkit-box-pack: center;
                -ms-flex-pack: center;
                justify-content: center;
                -webkit-box-align: center;
                -ms-flex-align: center;
                align-items: center;
                font-size: 18px;
                text-transform: uppercase;
                color: #000;
                font-family: "MullerRegular";
                width: 234px;
                background: #ffffff;
                text-decoration: underline;
                -webkit-text-decoration-skip-ink: none;
                text-decoration-skip-ink: none;
                height: 46px;
                -webkit-transition: 0.25s;
                transition: 0.25s;
            }

            .catalog_hotel .right_catalog_hotel .catalog_hotel_flex .desktop {
                display: none;
            }

            .catalog_hotel .right_catalog_flight {
                display: -webkit-box;
                display: -ms-flexbox;
                display: flex;
                -webkit-box-orient: vertical;
                -webkit-box-direction: normal;
                -ms-flex-direction: column;
                flex-direction: column;
                gap: 30px;
            }

            .catalog_hotel .right_catalog_flight .right_catalog_flight_flex {
                width: 1213px;
                height: 329px;
                border: 1px solid #ffffff;
                display: -webkit-box;
                display: -ms-flexbox;
                display: flex;
            }

            .catalog_hotel .right_catalog_flight .right_catalog_flight_flex .flight_napravlenia_info .line_xa {
                border: 1px solid #565656;
                width: 938px;
                height: 0px;
            }

            .catalog_hotel .right_catalog_flight .right_catalog_flight_flex .flight_napravlenia_info .flight_tuda_obratno_info {
                display: -webkit-box;
                display: -ms-flexbox;
                display: flex;
                -webkit-box-align: center;
                -ms-flex-align: center;
                align-items: center;
                padding: 43px 40px 35px 35px;
            }

            .catalog_hotel .right_catalog_flight .right_catalog_flight_flex .flight_napravlenia_info .flight_tuda_obratno_info .name_company_and_status {
                display: -webkit-box;
                display: -ms-flexbox;
                display: flex;
                -webkit-box-orient: vertical;
                -webkit-box-direction: normal;
                -ms-flex-direction: column;
                flex-direction: column;
                gap: 20px;
                margin-right: 20px;
            }

            .catalog_hotel .right_catalog_flight .right_catalog_flight_flex .flight_napravlenia_info .flight_tuda_obratno_info .name_company_and_status .company {
                display: -webkit-box;
                display: -ms-flexbox;
                display: flex;
                -webkit-box-align: center;
                -ms-flex-align: center;
                align-items: center;
                gap: 15px;
                width: 264px;
            }

            .catalog_hotel .right_catalog_flight .right_catalog_flight_flex .flight_napravlenia_info .flight_tuda_obratno_info .name_company_and_status .company .name_company {
                font-weight: 400;
                font-size: 24px;
                color: #ffffff;
                line-height: 130%;
                font-family: "MullerRegular";
                letter-spacing: 0.1em;
                text-transform: uppercase;
            }

            .catalog_hotel .right_catalog_flight .right_catalog_flight_flex .flight_napravlenia_info .flight_tuda_obratno_info .name_company_and_status .status {
                font-weight: 400;
                font-size: 14px;
                line-height: 130%;
                letter-spacing: 0.1em;
                text-transform: uppercase;
                font-family: "MullerRegular";
                color: #9a9a9a;
            }

            .catalog_hotel .right_catalog_flight .right_catalog_flight_flex .flight_napravlenia_info .flight_tuda_obratno_info .info_otkuda {
                display: -webkit-box;
                display: -ms-flexbox;
                display: flex;
                -webkit-box-orient: vertical;
                -webkit-box-direction: normal;
                -ms-flex-direction: column;
                flex-direction: column;
                -webkit-box-pack: justify;
                -ms-flex-pack: justify;
                justify-content: space-between;
                height: 84px;
            }

            .catalog_hotel .right_catalog_flight .right_catalog_flight_flex .flight_napravlenia_info .flight_tuda_obratno_info .info_otkuda .kosmodrom {
                font-weight: 400;
                font-size: 16px;
                line-height: 130%;
                letter-spacing: 0.1em;
                font-family: "MullerRegular";
                text-transform: uppercase;
                width: 250px;
            }

            .catalog_hotel .right_catalog_flight .right_catalog_flight_flex .flight_napravlenia_info .flight_tuda_obratno_info .info_otkuda .time_vilet {
                font-weight: 400;
                font-size: 14px;
                line-height: 130%;
                width: 250px;
                letter-spacing: 0.1em;
                text-transform: uppercase;
                color: #9a9a9a;
                font-family: "MullerRegular";
            }

            .catalog_hotel .right_catalog_flight .right_catalog_flight_flex .flight_napravlenia_info .flight_tuda_obratno_info .line_tuda_obratno {
                padding: 0 9px;
            }

            .catalog_hotel .right_catalog_flight .right_catalog_flight_flex .flight_napravlenia_info .flight_obratno_tuda_info {
                display: -webkit-box;
                display: -ms-flexbox;
                display: flex;
                -webkit-box-align: center;
                -ms-flex-align: center;
                align-items: center;
                padding: 30px 43px 35px 35px;
            }

            .catalog_hotel .right_catalog_flight .right_catalog_flight_flex .flight_napravlenia_info .flight_obratno_tuda_info .name_company_and_status {
                display: -webkit-box;
                display: -ms-flexbox;
                display: flex;
                -webkit-box-orient: vertical;
                -webkit-box-direction: normal;
                -ms-flex-direction: column;
                flex-direction: column;
                gap: 20px;
                margin-right: 33px;
            }

            .catalog_hotel .right_catalog_flight .right_catalog_flight_flex .flight_napravlenia_info .flight_obratno_tuda_info .name_company_and_status .company {
                display: -webkit-box;
                display: -ms-flexbox;
                display: flex;
                -webkit-box-align: center;
                -ms-flex-align: center;
                align-items: center;
                gap: 15px;
                width: 264px;
            }

            .catalog_hotel .right_catalog_flight .right_catalog_flight_flex .flight_napravlenia_info .flight_obratno_tuda_info .name_company_and_status .company .name_company {
                font-weight: 400;
                font-size: 24px;
                color: #ffffff;
                line-height: 130%;
                font-family: "MullerRegular";
                letter-spacing: 0.1em;
                text-transform: uppercase;
            }

            .catalog_hotel .right_catalog_flight .right_catalog_flight_flex .flight_napravlenia_info .flight_obratno_tuda_info .name_company_and_status .status {
                font-weight: 400;
                font-size: 14px;
                line-height: 130%;
                letter-spacing: 0.1em;
                text-transform: uppercase;
                font-family: "MullerRegular";
                color: #9a9a9a;
            }

            .catalog_hotel .right_catalog_flight .right_catalog_flight_flex .flight_napravlenia_info .flight_obratno_tuda_info .info_otkuda {
                display: -webkit-box;
                display: -ms-flexbox;
                display: flex;
                -webkit-box-orient: vertical;
                -webkit-box-direction: normal;
                -ms-flex-direction: column;
                flex-direction: column;
                -webkit-box-pack: justify;
                -ms-flex-pack: justify;
                justify-content: space-between;
                height: 84px;
            }

            .catalog_hotel .right_catalog_flight .right_catalog_flight_flex .flight_napravlenia_info .flight_obratno_tuda_info .info_otkuda .kosmodrom {
                font-weight: 400;
                font-size: 16px;
                line-height: 130%;
                letter-spacing: 0.1em;
                font-family: "MullerRegular";
                text-transform: uppercase;
                width: 250px;
            }

            .catalog_hotel .right_catalog_flight .right_catalog_flight_flex .flight_napravlenia_info .flight_obratno_tuda_info .info_otkuda .time_vilet {
                font-weight: 400;
                font-size: 14px;
                line-height: 130%;
                width: 250px;
                letter-spacing: 0.1em;
                text-transform: uppercase;
                color: #9a9a9a;
                font-family: "MullerRegular";
            }

            .catalog_hotel .right_catalog_flight .right_catalog_flight_flex .flight_napravlenia_info .flight_obratno_tuda_info .line_tuda_obratno {
                padding: 0 9px;
            }

            .catalog_hotel .right_catalog_flight .right_catalog_flight_flex .line_napr_cost {
                height: 329px;
                border: 1px solid #ffffff;
                width: 0;
            }

            .catalog_hotel .right_catalog_flight .right_catalog_flight_flex .fright_cost_info {
                padding: 40px 20px 35px 20px;
                width: 270px;
            }

            .catalog_hotel .right_catalog_flight .right_catalog_flight_flex .fright_cost_info .melk_text {
                font-weight: 400;
                font-size: 14px;
                line-height: 130%;
                letter-spacing: 0.05em;
                text-transform: uppercase;
                color: #9a9a9a;
                font-family: "MullerRegular";
            }

            .catalog_hotel .right_catalog_flight .right_catalog_flight_flex .fright_cost_info .cost {
                display: -webkit-box;
                display: -ms-flexbox;
                display: flex;
                gap: 6px;
                -webkit-box-align: center;
                -ms-flex-align: center;
                align-items: center;
                width: 230px;
                margin-top: 10px;
            }

            .catalog_hotel .right_catalog_flight .right_catalog_flight_flex .fright_cost_info .cost .cost_p {
                font-weight: 400;
                font-size: 32px;
                line-height: 130%;
                font-family: "MullerRegular";
                letter-spacing: 0.01em;
                text-transform: uppercase;
            }

            .catalog_hotel .right_catalog_flight .right_catalog_flight_flex .fright_cost_info .evething {
                font-weight: 400;
                margin-top: 15px;
                font-size: 14px;
                line-height: 130%;
                letter-spacing: 0.1em;
                text-transform: uppercase;
                color: #9a9a9a;
                font-family: "MullerRegular";
                width: 230px;
            }

            .catalog_hotel .right_catalog_flight .right_catalog_flight_flex .fright_cost_info .choice {
                margin-top: 60px;
                width: 230px;
                height: 46px;
                background: #d9d9d9;
                font-weight: 400;
                display: -webkit-box;
                display: -ms-flexbox;
                display: flex;
                -webkit-box-pack: center;
                -ms-flex-pack: center;
                justify-content: center;
                -webkit-box-align: center;
                -ms-flex-align: center;
                align-items: center;
                padding-top: 2px;
                font-size: 18px;
                font-family: "MullerRegular";
                text-transform: uppercase;
                text-decoration: underline;
                -webkit-text-decoration-skip-ink: none;
                text-decoration-skip-ink: none;
                color: #000;
                -webkit-transition: 0.25s;
                transition: 0.25s;
            }

            .catalog_hotel .right_catalog_flight .right_catalog_flight_flex .fright_cost_info .choice:hover {
                margin-top: 60px;
                width: 230px;
                height: 46px;
                background: #ffffff;
                font-weight: 400;
                display: -webkit-box;
                display: -ms-flexbox;
                display: flex;
                -webkit-box-pack: center;
                -ms-flex-pack: center;
                justify-content: center;
                -webkit-box-align: center;
                -ms-flex-align: center;
                align-items: center;
                padding-top: 2px;
                font-size: 18px;
                font-family: "MullerRegular";
                text-transform: uppercase;
                text-decoration: underline;
                -webkit-text-decoration-skip-ink: none;
                text-decoration-skip-ink: none;
                color: #000;
                -webkit-transition: 0.25s;
                transition: 0.25s;
            }

            .catalog_hotel .right_catalog_flight .right_catalog_flight_flex .fright_cost_info .po {
                margin-top: 10px;
                font-weight: 400;
                font-size: 12px;
                line-height: 130%;
                letter-spacing: 0.1em;
                text-transform: uppercase;
                color: #9a9a9a;
                font-family: "MullerRegular";
                width: 230px;
            }

            .catalog_hotel_mob_item {
                display: -webkit-box;
                display: -ms-flexbox;
                display: flex;
                gap: 20px;
                margin-top: 20px;
            }

            .catalog_hotel_mob_item .desktop {
                display: none;
            }

            .catalog_hotel_mob_item .right_catalog_hotel {
                margin-top: 0px;
                display: -webkit-box;
                display: -ms-flexbox;
                display: flex;
                -webkit-box-orient: vertical;
                -webkit-box-direction: normal;
                -ms-flex-direction: column;
                flex-direction: column;
                gap: 20px;
            }

            .catalog_hotel_mob_item .right_catalog_hotel .catalog_hotel_flex {
                display: -webkit-box;
                display: -ms-flexbox;
                display: flex;
                -webkit-box-orient: vertical;
                -webkit-box-direction: normal;
                -ms-flex-direction: column;
                flex-direction: column;
                height: 415px;
                border: 1px solid #ffffff;
            }

            .catalog_hotel_mob_item .right_catalog_hotel .catalog_hotel_flex .catalog_info_hotel {
                padding: 20px;
                display: -webkit-box;
                display: -ms-flexbox;
                display: flex;
                -webkit-box-orient: vertical;
                -webkit-box-direction: normal;
                -ms-flex-direction: column;
                flex-direction: column;
                gap: 20px;
            }

            .catalog_hotel_mob_item .right_catalog_hotel .catalog_hotel_flex .catalog_info_hotel .img_hotel_catalog {
                width: 300px;
                height: 160px;
            }

            .catalog_hotel_mob_item .right_catalog_hotel .catalog_hotel_flex .catalog_info_hotel .text_info_hotel {
                display: -webkit-box;
                display: -ms-flexbox;
                display: flex;
                -webkit-box-orient: vertical;
                -webkit-box-direction: normal;
                -ms-flex-direction: column;
                flex-direction: column;
                margin-top: 10px;
                gap: 8px;
            }

            .catalog_hotel_mob_item .right_catalog_hotel .catalog_hotel_flex .catalog_info_hotel .text_info_hotel .name_hotel {
                font-weight: 400;
                font-size: 18px;
                letter-spacing: 0.02em;
                text-transform: uppercase;
                font-family: "MullerRegular";
            }

            .catalog_hotel_mob_item .right_catalog_hotel .catalog_hotel_flex .catalog_info_hotel .text_info_hotel .more_info_hotel {
                display: -webkit-box;
                display: -ms-flexbox;
                display: flex;
                -webkit-box-orient: vertical;
                -webkit-box-direction: normal;
                -ms-flex-direction: column;
                flex-direction: column;
                gap: 20px;
            }

            .catalog_hotel_mob_item .right_catalog_hotel .catalog_hotel_flex .catalog_info_hotel .text_info_hotel .more_info_hotel .more_info_hotel_p {
                font-weight: 400;
                font-family: "MullerRegular";
                font-size: 12px;
                width: 146px;
                line-height: 130%;
                letter-spacing: 0.1em;
                text-transform: uppercase;
            }

            .catalog_hotel_mob_item .right_catalog_hotel .catalog_hotel_flex .catalog_info_hotel .desktop {
                display: none;
            }

            .catalog_hotel_mob_item .right_catalog_hotel .catalog_hotel_flex .catalog_info_hotel .text_info_hotel_mobile {
                display: -webkit-box;
                display: -ms-flexbox;
                display: flex;
                gap: 10px;
            }

            .catalog_hotel_mob_item .right_catalog_hotel .catalog_hotel_flex .catalog_info_hotel .text_info_hotel_mobile .text_info_hotel {
                display: -webkit-box;
                display: -ms-flexbox;
                display: flex;
                -webkit-box-orient: vertical;
                -webkit-box-direction: normal;
                -ms-flex-direction: column;
                flex-direction: column;
                margin-top: 10px;
                gap: 8px;
            }

            .catalog_hotel_mob_item .right_catalog_hotel .catalog_hotel_flex .catalog_info_hotel .text_info_hotel_mobile .text_info_hotel .name_hotel {
                font-weight: 400;
                font-size: 18px;
                letter-spacing: 0.02em;
                text-transform: uppercase;
                font-family: "MullerRegular";
            }

            .catalog_hotel_mob_item .right_catalog_hotel .catalog_hotel_flex .catalog_info_hotel .text_info_hotel_mobile .text_info_hotel .more_info_hotel {
                display: -webkit-box;
                display: -ms-flexbox;
                display: flex;
                -webkit-box-orient: vertical;
                -webkit-box-direction: normal;
                -ms-flex-direction: column;
                flex-direction: column;
                gap: 20px;
            }

            .catalog_hotel_mob_item .right_catalog_hotel .catalog_hotel_flex .catalog_info_hotel .text_info_hotel_mobile .text_info_hotel .more_info_hotel .more_info_hotel_p {
                font-weight: 400;
                font-family: "MullerRegular";
                font-size: 12px;
                width: 146px;
                line-height: 130%;
                letter-spacing: 0.1em;
                text-transform: uppercase;
            }

            .catalog_hotel_mob_item .right_catalog_hotel .catalog_hotel_flex .catalog_info_hotel .text_info_hotel_mobile .catalog_price_hotel {
                padding: 0px;
                margin-top: 5px;
                display: -webkit-box;
                display: -ms-flexbox;
                display: flex;
                -webkit-box-orient: vertical;
                -webkit-box-direction: normal;
                -ms-flex-direction: column;
                flex-direction: column;
                gap: 16px;
            }

            .catalog_hotel_mob_item .right_catalog_hotel .catalog_hotel_flex .catalog_info_hotel .text_info_hotel_mobile .catalog_price_hotel .qwe_catalog .price_text {
                font-weight: 400;
                font-size: 10px;
                margin-bottom: 5px;
                line-height: 130%;
                letter-spacing: 0.05em;
                text-transform: uppercase;
                color: #9a9a9a;
                font-family: "MullerRegular";
            }

            .catalog_hotel_mob_item .right_catalog_hotel .catalog_hotel_flex .catalog_info_hotel .text_info_hotel_mobile .catalog_price_hotel .qwe_catalog .price_main {
                display: -webkit-box;
                display: -ms-flexbox;
                display: flex;
                gap: 5px;
                -webkit-box-align: center;
                -ms-flex-align: center;
                align-items: center;
            }

            .catalog_hotel_mob_item .right_catalog_hotel .catalog_hotel_flex .catalog_info_hotel .text_info_hotel_mobile .catalog_price_hotel .qwe_catalog .price_main .price_number {
                font-weight: 400;
                font-size: 18px;
                line-height: 130%;
                letter-spacing: 0.02em;
                text-transform: uppercase;
                font-family: "MullerRegular";
            }

            .catalog_hotel_mob_item .right_catalog_hotel .catalog_hotel_flex .catalog_info_hotel .text_info_hotel_mobile .catalog_price_hotel .qwe_catalog .text_about_price {
                margin-top: 15px;
                font-weight: 400;
                font-size: 9px;
                line-height: 130%;
                width: 140px;
                letter-spacing: 0.08em;
                text-transform: uppercase;
                font-family: "MullerRegular";
                color: #9a9a9a;
            }

            .catalog_hotel_mob_item .right_catalog_hotel .catalog_hotel_flex .catalog_info_hotel .choice_hotel {
                font-weight: 400;
                display: -webkit-box;
                display: -ms-flexbox;
                display: flex;
                -webkit-box-pack: center;
                -ms-flex-pack: center;
                justify-content: center;
                -webkit-box-align: center;
                -ms-flex-align: center;
                align-items: center;
                font-size: 18px;
                text-transform: uppercase;
                color: #000;
                font-family: "MullerRegular";
                width: 100%;
                background: #d9d9d9;
                text-decoration: underline;
                -webkit-text-decoration-skip-ink: none;
                text-decoration-skip-ink: none;
                height: 46px;
                -webkit-transition: 0.25s;
                transition: 0.25s;
            }

            .catalog_hotel_mob_item .right_catalog_hotel .catalog_hotel_flex .catalog_info_hotel .choice_hotel:hover {
                font-weight: 400;
                display: -webkit-box;
                display: -ms-flexbox;
                display: flex;
                -webkit-box-pack: center;
                -ms-flex-pack: center;
                justify-content: center;
                -webkit-box-align: center;
                -ms-flex-align: center;
                align-items: center;
                font-size: 18px;
                text-transform: uppercase;
                color: #000;
                font-family: "MullerRegular";
                width: 100%;
                background: #ffffff;
                text-decoration: underline;
                -webkit-text-decoration-skip-ink: none;
                text-decoration-skip-ink: none;
                height: 46px;
                -webkit-transition: 0.25s;
                transition: 0.25s;
            }

            .catalog_hotel_mob_item .right_catalog_hotel .catalog_hotel_flex .catalog_hotel_line {
                display: none;
                height: 100%;
                border: 1px solid #D4D4D4;
                width: 0px;
            }

            .catalog_hotel_mob_item .right_catalog_hotel .catalog_hotel_flex .catalog_price_hotel {
                padding: 45px 20px 30px;
                display: -webkit-box;
                display: -ms-flexbox;
                display: flex;
                -webkit-box-orient: vertical;
                -webkit-box-direction: normal;
                -ms-flex-direction: column;
                flex-direction: column;
                gap: 16px;
            }

            .catalog_hotel_mob_item .right_catalog_hotel .catalog_hotel_flex .catalog_price_hotel .qwe_catalog .price_text {
                font-weight: 400;
                font-size: 10px;
                margin-bottom: 10px;
                line-height: 130%;
                letter-spacing: 0.05em;
                text-transform: uppercase;
                color: #9a9a9a;
                font-family: "MullerRegular";
            }

            .catalog_hotel_mob_item .right_catalog_hotel .catalog_hotel_flex .catalog_price_hotel .qwe_catalog .price_main {
                display: -webkit-box;
                display: -ms-flexbox;
                display: flex;
                gap: 5px;
                -webkit-box-align: center;
                -ms-flex-align: center;
                align-items: center;
            }

            .catalog_hotel_mob_item .right_catalog_hotel .catalog_hotel_flex .catalog_price_hotel .qwe_catalog .price_main .price_number {
                font-weight: 400;
                font-size: 18px;
                line-height: 130%;
                letter-spacing: 0.02em;
                text-transform: uppercase;
                font-family: "MullerRegular";
            }

            .catalog_hotel_mob_item .right_catalog_hotel .catalog_hotel_flex .catalog_price_hotel .qwe_catalog .text_about_price {
                margin-top: 15px;
                font-weight: 400;
                font-size: 10px;
                line-height: 130%;
                width: 150px;
                letter-spacing: 0.1em;
                text-transform: uppercase;
                font-family: "MullerRegular";
                color: #9a9a9a;
            }

            .catalog_hotel_mob_item .right_catalog_hotel .catalog_hotel_flex .catalog_price_hotel .qwe_catalog .icons {
                margin-top: 20px;
                display: -webkit-box;
                display: -ms-flexbox;
                display: flex;
            }

            .catalog_hotel_mob_item .right_catalog_hotel .catalog_hotel_flex .catalog_price_hotel .qwe_catalog .icons img {
                width: 22px;
            }

            .catalog_hotel_mob_item .right_catalog_hotel .catalog_hotel_flex .catalog_price_hotel .choice_hotel {
                font-weight: 400;
                display: -webkit-box;
                display: -ms-flexbox;
                display: flex;
                -webkit-box-pack: center;
                -ms-flex-pack: center;
                justify-content: center;
                -webkit-box-align: center;
                -ms-flex-align: center;
                align-items: center;
                font-size: 18px;
                text-transform: uppercase;
                color: #000;
                font-family: "MullerRegular";
                width: 234px;
                background: #d9d9d9;
                text-decoration: underline;
                -webkit-text-decoration-skip-ink: none;
                text-decoration-skip-ink: none;
                height: 46px;
                -webkit-transition: 0.25s;
                transition: 0.25s;
            }

            .catalog_hotel_mob_item .right_catalog_hotel .catalog_hotel_flex .catalog_price_hotel .choice_hotel:hover {
                font-weight: 400;
                display: -webkit-box;
                display: -ms-flexbox;
                display: flex;
                -webkit-box-pack: center;
                -ms-flex-pack: center;
                justify-content: center;
                -webkit-box-align: center;
                -ms-flex-align: center;
                align-items: center;
                font-size: 18px;
                text-transform: uppercase;
                color: #000;
                font-family: "MullerRegular";
                width: 234px;
                background: #ffffff;
                text-decoration: underline;
                -webkit-text-decoration-skip-ink: none;
                text-decoration-skip-ink: none;
                height: 46px;
                -webkit-transition: 0.25s;
                transition: 0.25s;
            }

            .catalog_hotel_mob_item .right_catalog_hotel .catalog_hotel_flex .desktop {
                display: none;
            }

            .catalog_hotel_mob_item .right_catalog_flight {
                display: -webkit-box;
                display: -ms-flexbox;
                display: flex;
                -webkit-box-orient: vertical;
                -webkit-box-direction: normal;
                -ms-flex-direction: column;
                flex-direction: column;
                gap: 30px;
            }

            .catalog_hotel_mob_item .right_catalog_flight .right_catalog_flight_flex {
                width: 1213px;
                height: 329px;
                border: 1px solid #ffffff;
                display: -webkit-box;
                display: -ms-flexbox;
                display: flex;
            }

            .catalog_hotel_mob_item .right_catalog_flight .right_catalog_flight_flex .flight_napravlenia_info .line_xa {
                border: 1px solid #565656;
                width: 938px;
                height: 0px;
            }

            .catalog_hotel_mob_item .right_catalog_flight .right_catalog_flight_flex .flight_napravlenia_info .flight_tuda_obratno_info {
                display: -webkit-box;
                display: -ms-flexbox;
                display: flex;
                -webkit-box-align: center;
                -ms-flex-align: center;
                align-items: center;
                padding: 43px 40px 35px 35px;
            }

            .catalog_hotel_mob_item .right_catalog_flight .right_catalog_flight_flex .flight_napravlenia_info .flight_tuda_obratno_info .name_company_and_status {
                display: -webkit-box;
                display: -ms-flexbox;
                display: flex;
                -webkit-box-orient: vertical;
                -webkit-box-direction: normal;
                -ms-flex-direction: column;
                flex-direction: column;
                gap: 20px;
                margin-right: 20px;
            }

            .catalog_hotel_mob_item .right_catalog_flight .right_catalog_flight_flex .flight_napravlenia_info .flight_tuda_obratno_info .name_company_and_status .company {
                display: -webkit-box;
                display: -ms-flexbox;
                display: flex;
                -webkit-box-align: center;
                -ms-flex-align: center;
                align-items: center;
                gap: 15px;
                width: 264px;
            }

            .catalog_hotel_mob_item .right_catalog_flight .right_catalog_flight_flex .flight_napravlenia_info .flight_tuda_obratno_info .name_company_and_status .company .name_company {
                font-weight: 400;
                font-size: 24px;
                color: #ffffff;
                line-height: 130%;
                font-family: "MullerRegular";
                letter-spacing: 0.1em;
                text-transform: uppercase;
            }

            .catalog_hotel_mob_item .right_catalog_flight .right_catalog_flight_flex .flight_napravlenia_info .flight_tuda_obratno_info .name_company_and_status .status {
                font-weight: 400;
                font-size: 14px;
                line-height: 130%;
                letter-spacing: 0.1em;
                text-transform: uppercase;
                font-family: "MullerRegular";
                color: #9a9a9a;
            }

            .catalog_hotel_mob_item .right_catalog_flight .right_catalog_flight_flex .flight_napravlenia_info .flight_tuda_obratno_info .info_otkuda {
                display: -webkit-box;
                display: -ms-flexbox;
                display: flex;
                -webkit-box-orient: vertical;
                -webkit-box-direction: normal;
                -ms-flex-direction: column;
                flex-direction: column;
                -webkit-box-pack: justify;
                -ms-flex-pack: justify;
                justify-content: space-between;
                height: 84px;
            }

            .catalog_hotel_mob_item .right_catalog_flight .right_catalog_flight_flex .flight_napravlenia_info .flight_tuda_obratno_info .info_otkuda .kosmodrom {
                font-weight: 400;
                font-size: 16px;
                line-height: 130%;
                letter-spacing: 0.1em;
                font-family: "MullerRegular";
                text-transform: uppercase;
                width: 250px;
            }

            .catalog_hotel_mob_item .right_catalog_flight .right_catalog_flight_flex .flight_napravlenia_info .flight_tuda_obratno_info .info_otkuda .time_vilet {
                font-weight: 400;
                font-size: 14px;
                line-height: 130%;
                width: 250px;
                letter-spacing: 0.1em;
                text-transform: uppercase;
                color: #9a9a9a;
                font-family: "MullerRegular";
            }

            .catalog_hotel_mob_item .right_catalog_flight .right_catalog_flight_flex .flight_napravlenia_info .flight_tuda_obratno_info .line_tuda_obratno {
                padding: 0 9px;
            }

            .catalog_hotel_mob_item .right_catalog_flight .right_catalog_flight_flex .flight_napravlenia_info .flight_obratno_tuda_info {
                display: -webkit-box;
                display: -ms-flexbox;
                display: flex;
                -webkit-box-align: center;
                -ms-flex-align: center;
                align-items: center;
                padding: 30px 43px 35px 35px;
            }

            .catalog_hotel_mob_item .right_catalog_flight .right_catalog_flight_flex .flight_napravlenia_info .flight_obratno_tuda_info .name_company_and_status {
                display: -webkit-box;
                display: -ms-flexbox;
                display: flex;
                -webkit-box-orient: vertical;
                -webkit-box-direction: normal;
                -ms-flex-direction: column;
                flex-direction: column;
                gap: 20px;
                margin-right: 33px;
            }

            .catalog_hotel_mob_item .right_catalog_flight .right_catalog_flight_flex .flight_napravlenia_info .flight_obratno_tuda_info .name_company_and_status .company {
                display: -webkit-box;
                display: -ms-flexbox;
                display: flex;
                -webkit-box-align: center;
                -ms-flex-align: center;
                align-items: center;
                gap: 15px;
                width: 264px;
            }

            .catalog_hotel_mob_item .right_catalog_flight .right_catalog_flight_flex .flight_napravlenia_info .flight_obratno_tuda_info .name_company_and_status .company .name_company {
                font-weight: 400;
                font-size: 24px;
                color: #ffffff;
                line-height: 130%;
                font-family: "MullerRegular";
                letter-spacing: 0.1em;
                text-transform: uppercase;
            }

            .catalog_hotel_mob_item .right_catalog_flight .right_catalog_flight_flex .flight_napravlenia_info .flight_obratno_tuda_info .name_company_and_status .status {
                font-weight: 400;
                font-size: 14px;
                line-height: 130%;
                letter-spacing: 0.1em;
                text-transform: uppercase;
                font-family: "MullerRegular";
                color: #9a9a9a;
            }

            .catalog_hotel_mob_item .right_catalog_flight .right_catalog_flight_flex .flight_napravlenia_info .flight_obratno_tuda_info .info_otkuda {
                display: -webkit-box;
                display: -ms-flexbox;
                display: flex;
                -webkit-box-orient: vertical;
                -webkit-box-direction: normal;
                -ms-flex-direction: column;
                flex-direction: column;
                -webkit-box-pack: justify;
                -ms-flex-pack: justify;
                justify-content: space-between;
                height: 84px;
            }

            .catalog_hotel_mob_item .right_catalog_flight .right_catalog_flight_flex .flight_napravlenia_info .flight_obratno_tuda_info .info_otkuda .kosmodrom {
                font-weight: 400;
                font-size: 16px;
                line-height: 130%;
                letter-spacing: 0.1em;
                font-family: "MullerRegular";
                text-transform: uppercase;
                width: 250px;
            }

            .catalog_hotel_mob_item .right_catalog_flight .right_catalog_flight_flex .flight_napravlenia_info .flight_obratno_tuda_info .info_otkuda .time_vilet {
                font-weight: 400;
                font-size: 14px;
                line-height: 130%;
                width: 250px;
                letter-spacing: 0.1em;
                text-transform: uppercase;
                color: #9a9a9a;
                font-family: "MullerRegular";
            }

            .catalog_hotel_mob_item .right_catalog_flight .right_catalog_flight_flex .flight_napravlenia_info .flight_obratno_tuda_info .line_tuda_obratno {
                padding: 0 9px;
            }

            .catalog_hotel_mob_item .right_catalog_flight .right_catalog_flight_flex .line_napr_cost {
                height: 329px;
                border: 1px solid #ffffff;
                width: 0;
            }

            .catalog_hotel_mob_item .right_catalog_flight .right_catalog_flight_flex .fright_cost_info {
                padding: 40px 20px 35px 20px;
                width: 270px;
            }

            .catalog_hotel_mob_item .right_catalog_flight .right_catalog_flight_flex .fright_cost_info .melk_text {
                font-weight: 400;
                font-size: 14px;
                line-height: 130%;
                letter-spacing: 0.05em;
                text-transform: uppercase;
                color: #9a9a9a;
                font-family: "MullerRegular";
            }

            .catalog_hotel_mob_item .right_catalog_flight .right_catalog_flight_flex .fright_cost_info .cost {
                display: -webkit-box;
                display: -ms-flexbox;
                display: flex;
                gap: 6px;
                -webkit-box-align: center;
                -ms-flex-align: center;
                align-items: center;
                width: 230px;
                margin-top: 10px;
            }

            .catalog_hotel_mob_item .right_catalog_flight .right_catalog_flight_flex .fright_cost_info .cost .cost_p {
                font-weight: 400;
                font-size: 32px;
                line-height: 130%;
                font-family: "MullerRegular";
                letter-spacing: 0.01em;
                text-transform: uppercase;
            }

            .catalog_hotel_mob_item .right_catalog_flight .right_catalog_flight_flex .fright_cost_info .evething {
                font-weight: 400;
                margin-top: 15px;
                font-size: 14px;
                line-height: 130%;
                letter-spacing: 0.1em;
                text-transform: uppercase;
                color: #9a9a9a;
                font-family: "MullerRegular";
                width: 230px;
            }

            .catalog_hotel_mob_item .right_catalog_flight .right_catalog_flight_flex .fright_cost_info .choice {
                margin-top: 60px;
                width: 230px;
                height: 46px;
                background: #d9d9d9;
                font-weight: 400;
                display: -webkit-box;
                display: -ms-flexbox;
                display: flex;
                -webkit-box-pack: center;
                -ms-flex-pack: center;
                justify-content: center;
                -webkit-box-align: center;
                -ms-flex-align: center;
                align-items: center;
                padding-top: 2px;
                font-size: 18px;
                font-family: "MullerRegular";
                text-transform: uppercase;
                text-decoration: underline;
                -webkit-text-decoration-skip-ink: none;
                text-decoration-skip-ink: none;
                color: #000;
                -webkit-transition: 0.25s;
                transition: 0.25s;
            }

            .catalog_hotel_mob_item .right_catalog_flight .right_catalog_flight_flex .fright_cost_info .choice:hover {
                margin-top: 60px;
                width: 230px;
                height: 46px;
                background: #ffffff;
                font-weight: 400;
                display: -webkit-box;
                display: -ms-flexbox;
                display: flex;
                -webkit-box-pack: center;
                -ms-flex-pack: center;
                justify-content: center;
                -webkit-box-align: center;
                -ms-flex-align: center;
                align-items: center;
                padding-top: 2px;
                font-size: 18px;
                font-family: "MullerRegular";
                text-transform: uppercase;
                text-decoration: underline;
                -webkit-text-decoration-skip-ink: none;
                text-decoration-skip-ink: none;
                color: #000;
                -webkit-transition: 0.25s;
                transition: 0.25s;
            }

            .catalog_hotel_mob_item .right_catalog_flight .right_catalog_flight_flex .fright_cost_info .po {
                margin-top: 10px;
                font-weight: 400;
                font-size: 12px;
                line-height: 130%;
                letter-spacing: 0.1em;
                text-transform: uppercase;
                color: #9a9a9a;
                font-family: "MullerRegular";
                width: 230px;
            }

            .desktop {
                display: none;
            }
        }

        .about_company_block .about_content {
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            gap: 20px;
        }

        .about_company_block .about_content .block_add_turist {
            width: 1213px;
        }

        .about_company_block .about_content .block_add_turist .name_page {
            position: sticky;
            top: 20px;
            font-weight: 400;
            font-size: 32px;
            letter-spacing: 0.02em;
            text-transform: uppercase;
            font-family: "MullerRegular";
            margin-bottom: 30px;
        }

        .about_company_block .about_content .block_add_turist .block_content_add_turist {
            position: sticky;
            top: 90px;
            padding: 35px 40px 40px 40px;
            border: none;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-orient: vertical;
            -webkit-box-direction: normal;
            -ms-flex-direction: column;
            flex-direction: column;
            gap: 30px;
        }

        .about_company_block .about_content .block_add_turist .block_content_add_turist .qweweweq {
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-orient: vertical;
            -webkit-box-direction: normal;
            -ms-flex-direction: column;
            flex-direction: column;
        }

        .about_company_block .about_content .block_add_turist .block_content_add_turist .qweweweq .name_block {
            font-weight: 400;
            font-size: 24px;
            line-height: 130%;
            letter-spacing: 0.1em;
            text-transform: uppercase;
            margin-bottom: 25px;
            font-family: "MullerRegular";
        }

        .about_company_block .about_content .block_add_turist .block_content_add_turist .qweweweq .add_turist_form {
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-orient: vertical;
            -webkit-box-direction: normal;
            -ms-flex-direction: column;
            flex-direction: column;
            gap: 12px;
            -webkit-box-align: end;
            -ms-flex-align: end;
            align-items: flex-end;
        }

        .about_company_block .about_content .block_add_turist .block_content_add_turist .qweweweq .add_turist_form .display_flex {
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            gap: 10px;
        }

        .about_company_block .about_content .block_add_turist .block_content_add_turist .qweweweq .add_turist_form .display_flex .top_inputs {
            -webkit-appearance: none;
            -moz-appearance: none;
            appearance: none;
            padding-left: 19px;
            padding-top: 2px;
            border: 2px solid #9a9a9a;
            width: 276px;
            background: #1a1919;
            height: 47px;
            color: #ffffff;
            font-size: 16px;
            font-family: "MullerRegular";
            letter-spacing: 0.02em;
            text-transform: uppercase;
            color: #ffffff;
        }

        .about_company_block .about_content .block_add_turist .block_content_add_turist .qweweweq .add_turist_form .display_flex .top_inputs::-ms-expand {
            display: none;
        }

        .about_company_block .about_content .block_add_turist .block_content_add_turist .qweweweq .add_turist_form .display_flex .top_inputs::-webkit-select {
            background: transparent;
        }

        .about_company_block .about_content .block_add_turist .block_content_add_turist .qweweweq .add_turist_form .display_flex .top_inputs option {
            font-family: "MullerRegular", sans-serif;
            /* Замените "YourDesiredFont" на имя вашего шрифта */
        }

        .about_company_block .about_content .block_add_turist .block_content_add_turist .qweweweq .add_turist_form .display_flex .data_inputs {
            padding-left: 19px;
            border: 1px solid #9a9a9a;
            width: 188px;
            background: #1a1919;
            height: 47px;
            color: #ffffff;
            font-size: 16px;
            padding-top: 2px;
            font-family: "MullerRegular";
            letter-spacing: 0.02em;
            text-transform: uppercase;
            color: #ffffff;
        }

        .about_company_block .about_content .block_add_turist .block_content_add_turist .qweweweq .add_turist_form .display_flex .data_inputs::-webkit-calendar-picker-indicator {
            display: none;
        }

        .about_company_block .about_content .block_add_turist .block_content_add_turist .qweweweq .add_turist_form .display_flex .pol_inputs {
            -webkit-appearance: none;
            -moz-appearance: none;
            appearance: none;
            padding-left: 19px;
            border: 2px solid #9a9a9a;
            width: 78px;
            background: #1a1919;
            padding-top: 2px;
            height: 47px;
            color: #ffffff;
            font-size: 16px;
            font-family: "MullerRegular";
            letter-spacing: 0.01em;
            text-transform: uppercase;
        }

        .about_company_block .about_content .block_add_turist .block_content_add_turist .qweweweq .add_turist_form .display_flex .pol_inputs::-ms-expand {
            display: none;
        }

        .about_company_block .about_content .block_add_turist .block_content_add_turist .qweweweq .add_turist_form .display_flex .pol_inputs::-webkit-select {
            background: transparent;
        }

        .about_company_block .about_content .block_add_turist .block_content_add_turist .qweweweq .add_turist_form .display_flex .pol_inputs option {
            font-family: "MullerRegular", sans-serif;
            /* Замените "YourDesiredFont" на имя вашего шрифта */
            letter-spacing: 0.01em;
        }

        .about_company_block .about_content .block_add_turist .block_content_add_turist .qweweweq .add_turist_form .display_flex_pass {
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-orient: vertical;
            -webkit-box-direction: normal;
            -ms-flex-direction: column;
            flex-direction: column;
            gap: 20px;
        }

        .about_company_block .about_content .block_add_turist .block_content_add_turist .qweweweq .add_turist_form .display_flex_pass .pg {
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            gap: 10px;
        }

        .about_company_block .about_content .block_add_turist .block_content_add_turist .qweweweq .add_turist_form .display_flex_pass .pg .top_inputs {
            padding-left: 19px;
            padding-top: 2px;
            border: 2px solid #9a9a9a;
            width: 276px;
            background: #1a1919;
            height: 47px;
            color: #ffffff;
            font-size: 16px;
            font-family: "MullerRegular";
            letter-spacing: 0.02em;
            text-transform: uppercase;
            color: #ffffff;
        }

        .about_company_block .about_content .block_add_turist .block_content_add_turist .qweweweq .add_turist_form .display_flex_pass .pg .data_inputs {
            padding-left: 19px;
            border: 1px solid #9a9a9a;
            width: 188px;
            background: #1a1919;
            height: 47px;
            color: #ffffff;
            font-size: 16px;
            padding-top: 2px;
            font-family: "MullerRegular";
            letter-spacing: 0.02em;
            text-transform: uppercase;
            color: #ffffff;
        }

        .about_company_block .about_content .block_add_turist .block_content_add_turist .qweweweq .add_turist_form .display_flex_pass .pg .data_inputs::-webkit-calendar-picker-indicator {
            display: none;
        }

        .about_company_block .about_content .block_add_turist .block_content_add_turist .qweweweq .add_turist_form .display_flex_pass .pg .pol_inputs {
            padding-left: 19px;
            border: 2px solid #9a9a9a;
            width: 78px;
            background: #1a1919;
            padding-top: 2px;
            height: 47px;
            color: #ffffff;
            font-size: 16px;
            font-family: "MullerRegular";
            letter-spacing: 0.01em;
            text-transform: uppercase;
        }

        .about_company_block .about_content .block_add_turist .block_content_add_turist .qweweweq .add_turist_form .display_flex_pass .pg .pol_inputs option {
            font-family: "MullerRegular", sans-serif;
            /* Замените "YourDesiredFont" на имя вашего шрифта */
            letter-spacing: 0.01em;
        }

        .about_company_block .about_content .block_add_turist .block_content_add_turist .qweweweq .add_turist_form .display_flex_pass .checkbox-wrapper-21 .control {
            display: block;
            position: relative;
            padding-left: 35px;
            padding-top: 3px;
            font-weight: 400;
            font-size: 18px;
            line-height: 130%;
            letter-spacing: 0.02em;
            text-transform: uppercase;
            color: #9a9a9a;
            font-size: 20px;
            font-family: "MullerRegular";
        }

        .about_company_block .about_content .block_add_turist .block_content_add_turist .qweweweq .add_turist_form .display_flex_pass .checkbox-wrapper-21 .control input {
            position: absolute;
            z-index: -1;
            opacity: 0;
        }

        .about_company_block .about_content .block_add_turist .block_content_add_turist .qweweweq .add_turist_form .display_flex_pass .checkbox-wrapper-21 .control input:checked~.control__indicator {
            background: #ffffff;
        }

        .about_company_block .about_content .block_add_turist .block_content_add_turist .qweweweq .add_turist_form .display_flex_pass .checkbox-wrapper-21 .control input:checked~.control__indicator:after {
            display: block;
        }

        .about_company_block .about_content .block_add_turist .block_content_add_turist .qweweweq .add_turist_form .display_flex_pass .checkbox-wrapper-21 .control input:disabled~.control__indicator {
            background: #e6e6e6;
            opacity: 0.6;
            pointer-events: none;
        }

        .about_company_block .about_content .block_add_turist .block_content_add_turist .qweweweq .add_turist_form .display_flex_pass .checkbox-wrapper-21 .control__indicator {
            position: absolute;
            top: 2px;
            left: 0;
            height: 25px;
            width: 25px;
            background: #000000;
            border: 1px solid #9a9a9a;
        }

        .about_company_block .about_content .block_add_turist .block_content_add_turist .qweweweq .add_turist_form .display_flex_pass .checkbox-wrapper-21 .control__indicator:after {
            content: "";
            position: absolute;
            display: none;
        }

        .about_company_block .about_content .block_add_turist .block_content_add_turist .qweweweq .add_turist_form .display_flex_pass .checkbox-wrapper-21 .control:hover input~.control__indicator,
        .about_company_block .about_content .block_add_turist .block_content_add_turist .qweweweq .add_turist_form .display_flex_pass .checkbox-wrapper-21 .control input:focus~.control__indicator {
            background: #1b1b1b;
            border: 1px solid #9a9a9a;
        }

        .about_company_block .about_content .block_add_turist .block_content_add_turist .qweweweq .add_turist_form .display_flex_pass .checkbox-wrapper-21 .control:hover input:not([disabled]):checked~.control__indicator,
        .about_company_block .about_content .block_add_turist .block_content_add_turist .qweweweq .add_turist_form .display_flex_pass .checkbox-wrapper-21 .control input:checked:focus~.control__indicator {
            background: #ffffff;
        }

        .about_company_block .about_content .block_add_turist .block_content_add_turist .qweweweq .add_turist_form .display_flex_pass .checkbox-wrapper-21 .control--checkbox .control__indicator:after {
            left: 8px;
            top: 4px;
            width: 5px;
            height: 10px;
            border: solid #000000;
            border-width: 0 2px 2px 0;
            -webkit-transform: rotate(45deg);
            -ms-transform: rotate(45deg);
            transform: rotate(45deg);
        }

        .about_company_block .about_content .block_add_turist .block_content_add_turist .qweweweq .add_turist_form .display_flex_pass .checkbox-wrapper-21 .control--checkbox input:disabled~.control__indicator:after {
            border-color: #7b7b7b;
        }

        .about_company_block .about_content .block_add_turist .block_content_add_turist .qweweweq .add_turist_form .btn_add_turist {
            font-size: 18px;
            font-family: "MullerRegular";
            text-transform: uppercase;
            text-decoration: underline;
            -webkit-text-decoration-skip-ink: none;
            text-decoration-skip-ink: none;
            color: #000;
            width: 276px;
            height: 46px;
            background: #bbbbbb;
            -webkit-transition: 0.2s;
            transition: 0.2s;
        }

        .about_company_block .about_content .block_add_turist .block_content_add_turist .qweweweq .add_turist_form .btn_add_turist:hover {
            -webkit-transition: 0.3s;
            transition: 0.3s;
            font-size: 18px;
            font-family: "MullerRegular";
            text-transform: uppercase;
            text-decoration: underline;
            -webkit-text-decoration-skip-ink: none;
            text-decoration-skip-ink: none;
            color: #000;
            width: 276px;
            height: 46px;
            background: #ffffff;
        }

        .about_company_block .about_content .block_all_info_about_broni {
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-orient: vertical;
            -webkit-box-direction: normal;
            -ms-flex-direction: column;
            flex-direction: column;
        }

        .about_company_block .about_content .block_all_info_about_broni .bottom_block_border {
            border: 1px solid #ffffff;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-orient: vertical;
            -webkit-box-direction: normal;
            -ms-flex-direction: column;
            flex-direction: column;
            gap: 35px;
        }

        .about_company_block .about_content .block_all_info_about_broni .bottom_block_border .bottom_block_border_content {
            padding: 0px 40px;
            width: 389px;
        }

        .about_company_block .about_content .block_all_info_about_broni .bottom_block_border .bottom_block_border_content .main_name_bl {
            margin-top: 35px;
            font-weight: 400;
            font-size: 32px;
            letter-spacing: 0.02em;
            text-transform: uppercase;
            font-family: "MullerRegular";
            margin-bottom: 30px;
        }

        .about_company_block .about_content .block_all_info_about_broni .bottom_block_border .bottom_block_border_content .tab {
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-orient: vertical;
            -webkit-box-direction: normal;
            -ms-flex-direction: column;
            flex-direction: column;
            gap: 18px;
            -webkit-box-align: start;
            -ms-flex-align: start;
            align-items: flex-start;
            padding-bottom: 40px;
        }

        .about_company_block .about_content .block_all_info_about_broni .bottom_block_border .bottom_block_border_content .tab button {
            background-color: inherit;
            float: left;
            border: none;
            outline: none;
            color: #979797;
            -webkit-transition: 0.3s;
            transition: 0.3s;
        }

        .about_company_block .about_content .block_all_info_about_broni .bottom_block_border .bottom_block_border_content .tab button:hover {
            color: #D4E7EE;
        }

        .about_company_block .about_content .block_all_info_about_broni .bottom_block_border .bottom_block_border_content .tab button.active {
            text-decoration: underline;
            -webkit-text-decoration-skip-ink: none;
            text-decoration-skip-ink: none;
            color: #ffffff;
        }

        .about_company_block .about_content .block_all_info_about_broni .bottom_block_border .bottom_block_border_content .tablinks {
            font-weight: 400;
            font-size: 24px;
            line-height: 130%;
            letter-spacing: 0.1em;
            text-transform: uppercase;
            font-family: "MullerRegular";
            color: #a4a4a4;
        }

        .about_company_block .about_content .block_all_info_about_broni .bottom_block_border .bottom_block_border_content .act {
            text-decoration: underline;
            -webkit-text-decoration-skip-ink: none;
            text-decoration-skip-ink: none;
            color: #ffffff;
        }

        .about_company_block .about_content .block_all_info_about_broni .bottom_block_border .position {
            position: sticky;
            top: 30px;
        }

        .about_company_block .about_content .block_all_info_about_broni .bottom_block_border .line_white {
            background-color: #ffffff;
        }

        .about_company_block .about_content .block_all_info_about_broni .bottom_block_border .line_grey {
            background-color: #ffffff;
            opacity: 20%;
        }

        .about_company_block .about_content .block_all_info_about_broni .position {
            position: sticky;
            top: 30px;
        }

        .about_company_block .about_content .tabcontent {
            display: none;
        }

        .about_company_block .about_content .tabcontent .block_add_turist {
            width: 1270px;
        }

        .about_company_block .about_content .tabcontent .block_add_turist .block_content_add_turist {
            position: sticky;
            top: 90px;
            padding: 0px 40px 40px 40px;
            border: none;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-orient: vertical;
            -webkit-box-direction: normal;
            -ms-flex-direction: column;
            flex-direction: column;
            gap: 30px;
        }

        .about_company_block .about_content .tabcontent .block_add_turist .block_content_add_turist .name_block {
            font-weight: 400;
            font-size: 32px;
            line-height: 130%;
            letter-spacing: 0.1em;
            text-transform: uppercase;
            margin-bottom: 0px;
            font-family: "MullerRegular";
        }

        .about_company_block .about_content .tabcontent .block_add_turist .block_content_add_turist .qweweweq {
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-orient: vertical;
            -webkit-box-direction: normal;
            -ms-flex-direction: column;
            flex-direction: column;
        }

        .about_company_block .about_content .tabcontent .block_add_turist .block_content_add_turist .qweweweq .name_block {
            font-weight: 300;
            font-size: 48px;
            line-height: 160%;
            letter-spacing: 0.1em;
            text-transform: uppercase;
            margin-bottom: 0px;
            font-family: "MullerLight";
        }

        .about_company_block .about_content .tabcontent .block_add_turist .block_content_add_turist .qweweweq .main_info_about_company {
            font-weight: 400;
            font-size: 18px;
            line-height: 130%;
            letter-spacing: 0.1em;
            white-space: pre-line;
            text-transform: uppercase;
            font-family: "MullerRegular";
            color: #a4a4a4;
        }

        .about_company_block .about_content .tabcontent .block_add_turist .block_content_add_turist .qweweweq .block_ships_flex {
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            margin-top: 30px;
            gap: 20px;
            -ms-flex-wrap: wrap;
            flex-wrap: wrap;
        }

        .about_company_block .about_content .tabcontent .block_add_turist .block_content_add_turist .qweweweq .block_ships_flex .cart_ship {
            border: 1px solid #e6e6e6;
            width: 576px;
            height: 780px;
        }

        .about_company_block .about_content .tabcontent .block_add_turist .block_content_add_turist .qweweweq .block_ships_flex .cart_ship .cart_ship_content {
            padding: 25px 60px;
        }

        .about_company_block .about_content .tabcontent .block_add_turist .block_content_add_turist .qweweweq .block_ships_flex .cart_ship .cart_ship_content .slider {
            position: relative;
            width: 456px;
            height: 456px;
            overflow: hidden;
        }

        .about_company_block .about_content .tabcontent .block_add_turist .block_content_add_turist .qweweweq .block_ships_flex .cart_ship .cart_ship_content .slider .slide {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            display: none;
        }

        .about_company_block .about_content .tabcontent .block_add_turist .block_content_add_turist .qweweweq .block_ships_flex .cart_ship .cart_ship_content .slider .slide img {
            border: 1px solid #282828;
            width: 456px;
            height: 456px;
            -o-object-fit: cover;
            object-fit: cover;
        }

        .about_company_block .about_content .tabcontent .block_add_turist .block_content_add_turist .qweweweq .block_ships_flex .cart_ship .cart_ship_content .slider .active {
            display: block;
        }

        .about_company_block .about_content .tabcontent .block_add_turist .block_content_add_turist .qweweweq .block_ships_flex .cart_ship .cart_ship_content .slider .arrow {
            position: absolute;
            top: 30%;
            width: 40px;
            height: 600px;
            background-color: rgba(0, 0, 0, 0.146);
            -webkit-transform: translateY(-50%);
            -ms-transform: translateY(-50%);
            transform: translateY(-50%);
            cursor: pointer;
            z-index: 10003;
            margin-top: 25px;
            -webkit-transition: 0.2s;
            transition: 0.2s;
        }

        .about_company_block .about_content .tabcontent .block_add_turist .block_content_add_turist .qweweweq .block_ships_flex .cart_ship .cart_ship_content .slider .arrow:hover {
            background-color: rgba(78, 78, 78, 0.316);
        }

        .about_company_block .about_content .tabcontent .block_add_turist .block_content_add_turist .qweweweq .block_ships_flex .cart_ship .cart_ship_content .slider .left {
            left: 0px;
        }

        .about_company_block .about_content .tabcontent .block_add_turist .block_content_add_turist .qweweweq .block_ships_flex .cart_ship .cart_ship_content .slider .right {
            right: 0px;
        }

        .about_company_block .about_content .tabcontent .block_add_turist .block_content_add_turist .qweweweq .block_ships_flex .cart_ship .cart_ship_content .name_ship {
            margin-top: 20px;
            text-align: center;
            font-family: "MullerRegular";
            font-weight: 300;
            font-size: 36px;
            line-height: 160%;
            letter-spacing: 0.1em;
            text-transform: uppercase;
        }

        .about_company_block .about_content .tabcontent .block_add_turist .block_content_add_turist .qweweweq .block_ships_flex .cart_ship .cart_ship_content .opis_ship {
            margin-top: 20px;
            font-weight: 400;
            color: #a4a4a4;
            font-size: 16px;
            font-family: "MullerRegular";
            line-height: 130%;
            letter-spacing: 0.1em;
            text-transform: uppercase;
        }

        .about_company_block .about_content .block {
            display: block;
        }
    </style>


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
</body>

</html>
