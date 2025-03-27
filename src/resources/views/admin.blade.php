@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/admin.css') }}">
@endsection

@section('content')
<header class="header">
    <div class="header__inner">
        <a href="/weight_logs" class="header__logo">
            PiGLy
        </a>
    </div>
    <div class="header__link">
        <a href="/wight_logs/goal_setting" class="header__link--target">
            <img src="/images/設定の歯車アイコン素材 1.png" alt="">
            目標体重設定
        </a>
        <a href="/logout" class="header__link--logout">
            <img src="/images/ログアウト・サインアウトのアイコン素材 4.png" alt="">
            ログアウト
        </a>
    </div>
</header>

<div class="wrapper">
    <div class="container">
        <div class="target">
            <div class="target__group">
                <p>目標体重</p>
                <p><span></span>kg</p>
            </div>
            <div class="target__group">
                <p>目標まで</p>
                <p><span></span>kg</p>
            </div>
            <div class="target__group">
                <p>最新体重</p>
                <p><span></span>kg</p>
            </div>
        </div>

        <div class="content">
            <div class="log">
                <div class="log__btn">
                    <div class="log__btn__search">
                        <input type="date" name="" id="" class="input-date" placeholder="年/月/日">
                        <p>〜</p>
                        <input type="date" name="" id="" placeholder="年/月/日" class="input-date">
                        <input type="submit" value="検索" class="input-search">
                        <!-- 検索した場合にはリセットボタン -->
                    </div>
                    <div class="log__btn__modal">
                        <a href="#" id="openModal">モーダルを開く</a>
                    </div>
                </div>
                <!--
                <div class="log__result">
                {{-- @if --}}(検索した時の条件とか件数表示など)
                </div>
                -->
            </div>
            <div class="log__table">
                <table>
                    <tr>
                        <th>日付</th>
                        <th>体重</th>
                        <th>食事摂取カロリー</th>
                        <th>運動時間</th>
                        <th></th>
                    </tr>
                    {{-- @foreach --}}
                    <tr>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td>
                            <a href="/weight_logs/{:weightLogId}/update">
                                <img src="/images/定番ペンのフリーアイコン素材 1.png"  alt="編集" class=""/>
                            </a>
                        </td>
                    </tr>
                    {{-- @endforeach --}}
                </table>

            </div>

        </div>

        <div class="pagination">
            {{-- Pagination links or content goes here --}}
        </div>
    </div>
</div>

@endsection