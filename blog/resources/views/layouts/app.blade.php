<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>{{config('app.name', 'Blog App')}}</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="{{asset('css/app.css')}}"/>
    <script src="main.js"></script>
</head>
<body>
    @include('include/navbar')
    <div class="container"></div>
    @yield('content')    
</body>
</html>