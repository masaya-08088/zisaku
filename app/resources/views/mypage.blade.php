@extends('layouts.app')

@section('content')
    <div class='mypage.blade'>
            <div class='mypage-1'>
                <a href="{{ route('user.create',['user'=>Auth::id()])}}">
                    <button type='button' class='btn btn-mypage.blade'>新規投稿</button>
                </a>
                <a href="{{ route('user.edit',['user'=>Auth::id()])}}">
                    <button type='button' class='btn btn-mypage.blade-1'>ユーザー情報編集</button>
                </a>
            </div>
            
            <div class='btn-mypage'>
                <a href="{{ route('user.show',['user'=>Auth::id()])}}">
                    <button type='button' class='btn btn-mypage.blade-2'>自分の投稿一覧</button>
                </a>
            </div>
        </div>
    </div>
@endsection