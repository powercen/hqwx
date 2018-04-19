<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="{{ asset('css/weui.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/jquery-weui.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
    <div id="app" class="{{ route_name() }}">
        <router-view></router-view>
        <tabbar></tabbar>
    </div>
<script src="{{ asset('js/app.js') }}"></script>
<script src="{{ asset('js/jquery-weui.min.js') }}"></script>
</body>
</html>
