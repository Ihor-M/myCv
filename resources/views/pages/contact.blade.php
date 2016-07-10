@extends('layouts.master')

@section('content')

   <div class="container contactForm">
        <div class="wrap">

            <h1>Contact me by email</h1>

            <form action="{{route('MainPage')}}">
                <input type="text" placeholder="First Name" name="firstname">
                <input type="text" placeholder="Last Name" name="lastname">
                <input type="text" placeholder="Your email" name="email"><br>
                <textarea name="textfeedback" rows="10" cols="20" placeholder="your mesage"></textarea><br>
                <input type="submit" name="submit">
            </form>
        </div>
    </div>


@endsection