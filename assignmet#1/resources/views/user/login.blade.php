@extends('layout.layout')
<link href="/css/style.css" rel="stylesheet">
@section('content')
    <form method="GET" action="{{route('login')}}">
        @csrf
        <div class="login-box">
            <h1>Login</h1>
            <div class="textbox">
                <input type="text" placeholder="Username" name="name" value="">
            </div>
            <div class="textbox">
                <input type="password" placeholder="password" name="password" value="">
            </div>
            <button class="btn" type="submit">SING IN</button>
            <button class="btn"><a href="{{route('user.registration')}}">SING UP</a></button>
        </div>
    </form>
@endsection
