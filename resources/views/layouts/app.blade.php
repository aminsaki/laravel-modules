<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="api-base-url" content="{{ url('/') }}"/>
    <link rel="stylesheet" href="{{asset('/public/css/all.min.css')}}">
    <link rel="stylesheet" href="{{asset('/public/css/main.css')}}"/>
    <title>صفحه ورود</title>
</head>
<body>
<div id="app">
    <div>
        @yield('container')
    </div>
</div>
<script src="{{asset('/public/js/jquery-3.6.0.min.js')}}"></script>
<script src="{{asset('/public/js/main.js')}}"></script>
@stack('login')
</body>
</html>

