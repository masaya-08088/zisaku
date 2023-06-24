@extends('layouts.app')

@section('content')

    <div class='btn-shop-manager'>
        <div class='text-3'>
            <h1>店舗管理者ページ</h1>
            　<a href="{{route('shoplist')}}">店舗一覧</a>
        </div>
        <div class='btn-review'>
            @if(isset($shop['user_id']))
                    <a href="{{ route('shops.show',['shop'=>$shop['user_id']])}}">
                        <button type='button' class='btn btn-review'>レビュー確認</button>
                    </a>
            @endif
        </div>
        <div class='btn-store-registration'>
            <div class='btn-store-registration'>
                <a href="{{ route('shops.create',['user'=>Auth::id()])}}" class='btn btn-store-registration'>店舗情報の登録</a>
            </div>
        </div>
    </div>
@endsection