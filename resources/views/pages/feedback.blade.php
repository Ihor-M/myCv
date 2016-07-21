@extends('layouts.master')

@section('content')

    <div class="container feedback">
        <div class="wrap">
            <p><span>{{ $feedback->firstName }}</span> <span>{{ $feedback->lastName }}</span>, thanks for your feedback.<br>
                I'll contact you as soon as possible.<br>
                Your message is: <span>{{ $feedback->feedback }}</span>.<br>
                Your email is: <span>{{ $feedback->email }}</span>.
            </p>
        </div>
    </div>

@endsection