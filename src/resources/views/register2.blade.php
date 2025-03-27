@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/register2.css')}}">
@endsection

@section('content')
<div class="mv">
    <div class="wrapper">
        <div class="form-title">
            <h1>PiGLy</h1>
            <h2>新規会員登録</h2>
        </div>
        <p class="form-step">STEP2 体重データの入力</p>
        <form class="form" action="/register/step2" method="post">
            @csrf
            <div class="form__group">
                <label class="form__label" for="weight">現在の体重</label>
                <div class="form__item">
                    <input class="form__input" type="text" name="weight" id="weight" placeholder="現在の体重を入力" value="{{ old('weight') }}">
                    <p>kg</p>
                </div>

                <p class="error-message">
                    @error('weight')
                        {{ $message }}
                    @enderror
                </p>

            </div>
            <div class="form__group">
                <label class="form__label" for="target_weight">目標の体重</label>
                <div class="form__item">
                    <input class="form__input" type="text" name="target_weight" id="target_weight" placeholder="目標の体重を入力" value="{{ old('target_weight') }}">
                    <p>kg</p>
                </div>

                <p class="error-message">
                    @error('target_weight')
                    {{ $message }}
                    @enderror
                </p>

            </div>
            <input class="form__btn" type="submit" value="アカウント作成">
        </form>
    </div>
</div>
@endsection
