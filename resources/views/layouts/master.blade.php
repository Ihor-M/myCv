<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8"/>
    <title>Ihor Mulyk</title>
    {{--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">--}}
    <link href="{{ asset('css/main.css') }}" rel="stylesheet" type="text/css"/>
    <link href='https://fonts.googleapis.com/css?family=Bangers' rel='stylesheet' type='text/css'/>

</head>
<body>

@include('partials.header')

@yield('content')

@include('partials.footer')



</body>
</html>