<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('public/assets/css/style.css')}}">
    <script src="{{asset('public/assets/js/script.js')}}" defer></script>
    <script src="{{asset('public/assets/js/app.min.js')}}" defer></script>

    <script src="{{asset('public/assets/js/app.js')}}" defer></script>
    <script src="{{asset('public/assets/js/admin.js')}}" defer></script>
    <script src="{{asset('public/assets/js/burder.js')}}" defer></script>
    <script src="{{asset('public/assets/js/filter.js')}}" defer></script>
    <script src="{{asset('public/assets/js/popup.js')}}" defer></script>
    <script src="{{asset('public/assets/js/slider.js')}}" defer></script>
    <title>@yield('title')</title>
</head>
<body>
    <div id="cursor"></div>
	<div id="aura"></div>
    @include('components.header');
    @yield('content');

</body>
</html>