@extends('layouts.app')

@section('content')
    <div class='mypage.blade'>
            <div class='mypage-1'>
                <!-- アイコン画像表示 -->
                <img src="data" alt="">
                <h4><?php $user = Auth::user(); ?>{{ $user->name }}</h4>
                <a href="{{ route('user.create',['user'=>Auth::id()])}}">
                    <button type='button' class='btn btn-mypage.blade'>新規投稿</button>
                </a>
                <a href="{{ route('user.edit',['user'=>Auth::id()])}}">
                    <button type='button' class='btn btn-mypage.blade-1'>ユーザー情報編集</button>
                </a>
            </div>
            <hr style="height: 1px; background-color: #000000; ">
            <div class='btn-mypage'>
                <a href="{{ route('user.show',['user'=>Auth::id()])}}">
                    <button type='button' class='btn btn-mypage.blade-2'>自分の投稿一覧</button>
                </a>
            </div>
            <hr style="height: 1px; background-color: #000000; ">
        </div>
    </div>
@endsection