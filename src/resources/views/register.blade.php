@extends('layouts/app')

@section('css')
    <link rel="stylesheet" href="{{ asset('css/register.css') }}"/>
@endsection

@section('sub')
    <a href="/login" class="header__sub">
        login
    </a>
@endsection

@section('content')
<main>
<div class="contact-form__content">
    <div class="contact-form__heading">
        <h2>Register</h2>
    </div>

    <form class="form" action="{{route('register')}}" method="post">
    @csrf
    <div class="login">
        <div class="login__block">

            <div class="login__block--content">
                <div class="login__block--content--title">
                    お名前
                </div>
                <div class="login__block--content--input">
                    <input type="text" name="name" placeholder="例：山田　太郎" value="{{old('name')}}">
                </div>
                <div class="login__error">
                    @error('name')
                        {{$message}}
                    @enderror
                </div>
            </div>

            <div class="login__block--content">
                <div class="login__block--content--title">
                    メールアドレス
                </div>
                <div class="login__block--content--input">
                    <input type="email" name="email" placeholder="例：test@example.com" value="{{old('email')}}">
                </div>
                <div class="login__error">
                    @error('email')
                        {{$message}}
                    @enderror
                </div>
            </div>

            <div class="login__block--content">
                <div class="login__block--content--title">
                    パスワード
                </div>
                <div class="login__block--content--input">
                    <input type="text" name="password" placeholder="例：coachtech1106" value="{{old('password')}}">
                </div>
                <div class="login__error">
                    @error('password')
                        {{$message}}
                    @enderror
                </div>
            </div>

        </div>
        <div class="login__button">
            <button class="login__button--submit" type="submit" >
                登録
            </button>
        </div>
    </div>

    </form>
</div>
</main>
@endsection
