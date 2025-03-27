@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/auth/register1.css')}}">
@endsection

@section('content')
<div class="mv">
    <div class="wrapper">
        <div class="form-title">
            <h1>PiGLy</h1>
            <h2>新規会員登録</h2>
        </div>
        <p class="form-step">STEP1 アカウント情報の登録</p>
        <form class="form" action="/register/step1" method="post">
            @csrf
            <div class="form__group">
                <label class="form__label" for="name">お名前</label>
                <input class="form__input" type="text" name="name" id="name" placeholder="名前を入力" value="{{ old('name') }}">

                <p class="error-message">
                    @error('name')
                        {{ $message }}
                    @enderror
                </p>

            </div>
            <div class="form__group">
                <label class="form__label" for="email">メールアドレス</label>
                <input class="form__input" type="email" name="email" id="email" placeholder="メールアドレスを入力" value="{{ old('email') }}">

                <p class="error-message">
                    @error('email')
                    {{ $message }}
                    @enderror
                </p>

            </div>
            <div class="form__group">
                <label class="form__label" for="password">パスワード</label>
                <input class="form__input" type="password" name="password" id="password" placeholder="パスワードを入力"
                value="{{ old('password') }}">

                <p class="error-message">
                    @error('password')
                    {{ $message }}
                    @enderror
                </p>

            </div>
            <input class="form__btn" type="submit" value="次に進む">
        </form>
        <a href="/login" class="login-link">ログインはこちら</a>
    </div>
</div>
@endsection
