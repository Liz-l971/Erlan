<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Подтверждение бронирования</title>
</head>
<body style="font-family: Arial, sans-serif; background: #000; color: #fff; padding: 20px; margin: 0;">
<div style="max-width: 600px; margin: 0 auto; background: #111; padding: 20px; border: 1px solid #333;">
    <div style="text-align: right; font-size: 12px; color: #777; margin-bottom: 20px;">
        ЗАКАЗ №: {{ $body->id }} | ДАТА БРОНИ: {{ $body->created_at }}
    </div>
    <div style="margin-bottom: 20px; text-align: center;">
        <h1 style="font-size: 24px; color: #ffffff;">БРОНИРОВАНИЕ УСПЕШНО ВЫПОЛНЕНО</h1>
        <p style="font-size: 14px; color: #bbb; ">Рекомендуется прибыть в космодром <span style="color: #ffffff;">за 5 часов</span>
            до вылета для прохождения процедуры посадочного контроля</p>
    </div>
    <div style="margin-bottom: 20px;">
        <h2 style="font-size: 18px;">КОСМОПЕРЕЛЁТ</h2>
        <p style="font-size: 14px; color: #bbb; line-height: 130%;">ОТ: {{ $body->raceFrom->time_otb }}, {{ $body->raceFrom->otcuda }}</p>
        <p style="font-size: 14px; color: #bbb; line-height: 130%;">ДО: {{ $body->raceFrom->time_prib }}, {{ $body->raceFrom->cuda }}<br>
        <p style="font-size: 14px; color: #bbb; line-height: 130%;">{{ $body->company_from }} @if ($body->company_from == 1) Роскосмос @endif @if ($body->company_from == 2) SpaceX @endif @if ($body->company_from == 3) CNSA @endif @if ($body->company_from == 4) BLUE ORIGIN @endif, {{ $body->class_from }}</p>
        <p style="font-size: 14px; color: #bbb; line-height: 130%;">Время полёта: {{ $body->raceFrom->timeFly()}} д.</p>
    </div>
    <div style="margin-bottom: 20px;">
        <h2 style="font-size: 18px;">КОСМОПЕРЕЛЁТ</h2>
        <p style="font-size: 14px; color: #bbb; line-height: 130%;">ОТ: {{ $body->raceTo->time_otb }}, {{ $body->raceTo->otcuda }}</p>
        <p style="font-size: 14px; color: #bbb; line-height: 130%;">ДО: {{ $body->raceTo->time_prib }}, {{ $body->raceTo->cuda }}</p>
        <p style="font-size: 14px; color: #bbb; line-height: 130%;">{{ $body->company_to }} @if ($body->company_to == 1) Роскосмос @endif @if ($body->company_to == 2) SpaceX @endif @if ($body->company_to == 3) CNSA @endif @if ($body->company_to == 4) BLUE ORIGIN @endif , {{ $body->class_to }}</p>
        <p style="font-size: 14px; color: #bbb; line-height: 130%;">Время полёта: {{ $body->raceTo->timeFly()}} д. </p>
    </div>
    <p>
    <h2 style="font-size: 18px;">ОТЕЛЬ</h2>
    <div class="stars">
        <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
             xmlns="http://www.w3.org/2000/svg">
            <path
                    d="M12 17.27L18.18 21L16.54 13.97L22 9.24L14.81 8.63L12 2L9.19 8.63L2 9.24L7.46 13.97L5.82 21L12 17.27Z"
                    fill="white"/>
        </svg>
        <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
             xmlns="http://www.w3.org/2000/svg">
            <path
                    d="M12 17.27L18.18 21L16.54 13.97L22 9.24L14.81 8.63L12 2L9.19 8.63L2 9.24L7.46 13.97L5.82 21L12 17.27Z"
                    fill="white"/>
        </svg>
        <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
             xmlns="http://www.w3.org/2000/svg">
            <path
                    d="M12 17.27L18.18 21L16.54 13.97L22 9.24L14.81 8.63L12 2L9.19 8.63L2 9.24L7.46 13.97L5.82 21L12 17.27Z"
                    fill="white"/>
        </svg>
        <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
             xmlns="http://www.w3.org/2000/svg">
            <path
                    d="M12 17.27L18.18 21L16.54 13.97L22 9.24L14.81 8.63L12 2L9.19 8.63L2 9.24L7.46 13.97L5.82 21L12 17.27Z"
                    fill="white"/>
        </svg>
        <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
             xmlns="http://www.w3.org/2000/svg">
            <path
                    d="M12 15.39L8.24 17.66L9.23 13.38L5.91 10.5L10.29 10.13L12 6.09L13.71 10.13L18.09 10.5L14.77 13.38L15.76 17.66M22 9.24L14.81 8.63L12 2L9.19 8.63L2 9.24L7.45 13.97L5.82 21L12 17.27L18.18 21L16.54 13.97L22 9.24Z"
                    fill="white"/>
        </svg>
    </div>
    <p style="font-size: 14px; color: #9a9a9a;">Дата заезда: {{ $body->raceFrom->time_prib }}</p>
    <p style="font-size: 14px; color: #9a9a9a;">Дата выезда: {{ $body->raceTo->time_otb }}</p>
    <p style="font-size: 14px; color: #9a9a9a;">
        {{ $body->numberBron->hotelBron->name }} <br>
        {{ $body->numberBron->type }} - {{ $body->numberBron->hotelBron->feed }}</p>
    <div style="text-align: center; font-size: 32px; color: #000; background: #fff; padding: 10px; margin-top: 20px;">
        {{ $body->cost }} ₽
    </div>
    <p style="color: #9a9a9a; text-align: center; margin-bottom: 0;">ERLAN</p>
</div>
</body>
</html>
