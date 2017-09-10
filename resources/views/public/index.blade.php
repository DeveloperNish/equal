@extends('public.master.layout')

@section('css')
    {{ Html::style("css/publiclayout.css") }}
@endsection


@section('main-content')
<div class="grid-container">
    <div class="wrap">
        <div class="brand">
            <img src="{{url('img/f-logo.svg')}}" class="logo">
        </div>
        <div class="loginbox">
            <div class="links">
                <a href="{{ route('public.index') }}" class="active">Login</a>
                <a href="{{ route('public.register') }}">Register</a>
            </div>
            <div class="box">
                <form method="POST" action="{{ route('login') }}">
                    {{ csrf_field() }}
                    <input type="email" name="email" placeholder="Email" class="inputfield">
                    <input type="password" name="password" placeholder="Password" class="inputfield">
                    <div class="optlinks">
                        <div class="remember"><input type="checkbox" name="remember" id="remember"><label for="remember">Remember Me</label></div>
                        <a href="#forgotpassword" class="forgot">Forgot Password?</a>                    
                    </div>
                    <button type="submit">Login</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection