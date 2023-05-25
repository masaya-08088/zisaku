@extends('layouts.app')

@section('content')
    <div class="new-spot-1">
        <p>スポット選択画面</p>
    </div>
    <div class="new-spot-2">
        <h5>店舗一覧</h5>
    </div>
    <div class="new-spot-3">
        <p>・店舗名⚪︎⚪︎⚪︎⚪︎⚪︎⚪︎⚪︎⚪︎⚪︎⚪︎⚪︎⚪︎⚪︎</p>
        <p>⭐️⭐️⭐️⭐️⭐️</p>
        <p>・住所⚪︎⚪︎⚪︎⚪︎⚪︎⚪︎⚪︎⚪︎⚪︎⚪︎⚪︎⚪︎</p>
        <a href="{{ route('user.create',['user'=>Auth::id()])}}">選択</a>
    </div>

@endsection