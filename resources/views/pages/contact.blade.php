@extends('layouts.master')

@section('content')

   <div class="container contactForm">
        <div class="wrap">

            <h1>Contact me by email</h1>

            {{ Form::open(['route' => 'FeedbackPage']) }}<br>
            {{ Form::text('firstName', null, ['required','placeholder'=>'First Name']) }}
            {{ Form::text('lastName', null,['required', 'placeholder'=>'Last Name']) }}
            {{ Form::text('email', null, ['required', 'placeholder'=>'email']) }}
            {{ Form::textarea('feedback', null, ['required', 'placeholder'=>'your message']) }} <br>
            {{ Form::submit('submit', null, ['value'=>'send']) }}
            {{ Form::close() }}

        </div>
    </div>



@endsection