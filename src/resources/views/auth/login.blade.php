@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/auth/login.css')}}">
@endsection

@section('content')
<div class="mv">
    <div class="wrapper">
        <div class="form-title">
            <h1>PiGLy</h1>
            <h2>ログイン</h2>
        </div>
        <form action="/login" method="post">
            @csrf
            <div class="form__group">
                <label class="form__label" for="email">メールアドレス</label>
                <input class="form__input" type="mail" name="email" id="email" placeholder="メールアドレスを入力" value="{{ old('email') }}">
                <p class="error-message">
                @error('email')
                {{ $message }}
                @enderror
                </p>
            </div>


            <div class="form__group">
                <label class="form__label" for="password">パスワード</label>
                <input class="form__input" type="password" name="password" id="password" placeholder="パスワードを入力" value="{{ old('password') }}">
                <p class="error-message">
                    @error('password')
                    {{ $message }}
                    @enderror
                </p>
            </div>

            <input class="form__btn" type="submit" value="ログイン">
        </form>
        <a href="/register/step1" class="register-link"> アカウント作成はこちら</a>
    </div>
</div>
@endsection('content')