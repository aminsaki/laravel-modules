<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <meta name="api-base-url" content="{{ url('/') }}"/>
    <link rel="stylesheet" href="{{asset('/public/css/all.min.css')}}">
    <link rel="stylesheet" href="{{asset('/public/css/main.css')}}"/>

    <title>صفحه ورود</title>
</head>
<body>
<div id="app">
    <div>
        @include('layouts.Admin.Header')
        @include('layouts.Admin.Sidbar')
        @yield('container')

        @include('layouts.Admin.Footer')
    </div>
</div>
<script src="{{asset('/public/js/jquery-3.6.0.min.js')}}"></script>
<script src="{{asset('/public/js/main.js')}}"></script>
<script src="{{asset('/public/js/sweetalert.min.js')}}"></script>
 <script>
     $(document).ready(function() {
         $("form").bind("keypress", function(e) {
             if (e.keyCode == 13) {
                 return false;
             }
         });
     });
 </script>

@stack('scripts')
</body>
</html>

