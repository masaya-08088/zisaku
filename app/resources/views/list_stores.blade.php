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
                    <th scope='col'>平均レビュー点</th>
                </tr>
            </thead>
            <tbody>
            @foreach($shops as $shop)
            <tr>
                <th scope='col'>
                    <img width="200" height="200" src="{{ asset('storage/images/'.$shop->image)}}" alt="">
                </th>
                <th scope='col'> {{ $shop->name}} </th>
                <th scope='col'>{{ $shop->address}}</th>
                <th scope='col'> {{ $shop->points}} </th>
            </tr>
            @endforeach
            </tbody>
        </table>
    </div>

@endsection