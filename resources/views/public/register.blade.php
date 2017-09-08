@extends('public.master.layout')

@section('main-content')
<div class="grid-container">
    <div class="wrap">
        <div class="brand">
            <img src="{{url('img/f-logo.svg')}}" class="logo">
        </div>
        <div class="loginbox">
            <div class="links">
                <a href="{{ route('public.index') }}">Login</a>
                <a href="{{ route('public.register') }}" class="active">Register</a>
            </div>
            <div class="box registration">
                <form method="POST" action="{{ route('public.register') }}">
                    {{ csrf_field() }}
                    <input type="text" name="firstname" placeholder="Firstname">
                    <input type="text" name="lastname" placeholder="Lastname">
                    <input type="email" name="email" placeholder="Email">
                    <input type="password" name="password" placeholder="Password">
                    <input type="password" name="password_confirmation" placeholder="Retype Password">
                    <button type="submit">Register</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection