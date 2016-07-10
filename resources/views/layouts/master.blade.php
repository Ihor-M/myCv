<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8"/>
    <title>Ihor Mulyk</title>
    <link href="{{ asset('css/main.css') }}" rel="stylesheet" type="text/css"/>
    <link href='https://fonts.googleapis.com/css?family=Bangers' rel='stylesheet' type='text/css'/>

</head>
<body>

@include('pages.header')

@yield('content')

<div class="container contact">
    <div class="wrap">
        <h3>contact me by email:</h3>
        <a href="#" class="email">igormulyk@icloud.com</a>
    </div>
</div>
</body>
</html>