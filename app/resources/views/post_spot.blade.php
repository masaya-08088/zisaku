@extends('layouts.app')

@section('content')
    <div class="new-spot-1">
        <p>スポット選択画面</p>
    </div>
    <div class="new-spot-2">
        <h5>店舗一覧</h5>
    </div>
    <div class="new-spot-3">
        <table class="table">
            <thead>
                <tr>
                    <th scope='col'>店舗名</th>
                    <th scope='col'>レビュー</th>
                    <th scope='col'>住所</th>
                </tr>
            </thead>
            <tr>
                <th scope='col'>
                    <!-- 画像追加 -->
                 <a href="{{ route('reviews.create')}}">選択</a>
                </th>
                <th scope='col'></th>
                <th scope='col'></th>
                <th scope='col'></th>
            </tr>
    </div>

@endsection