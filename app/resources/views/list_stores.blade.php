@extends('layouts.app')

@section('content')
<!-- 管理者用リスト -->
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
                    <th scope='col'></th>
                    <th scope='col'>店舗名</th>
                    <th scope='col'>住所</th>
                    <th scope='col'>製作日</th>
                </tr>
            </thead>
            <tbody>
            @foreach($shops as $shop)
            <tr>
                <th scope='col'>
                    <!-- 画像追加 -->
                </th>
                <th scope='col'> {{ $shop['name']}} </th>
                <th scope='col'>{{ $shop['address']}}</th>
                <th scope='col'> {{ $shop['created_at']}} </th>
            </tr>
            @endforeach
            </tbody>
        </table>
    </div>

@endsection