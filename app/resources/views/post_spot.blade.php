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
                    <th scope='col'></th>
                    <th scope='col'>店舗名</th>
                    <th scope='col'>レビュー</th>
                    <th scope='col'>住所</th>
                </tr>
            </thead>
            <tbody>
            @foreach($shops as $shop)
            <tr>
                <th scope='col'>
                @if(isset($shop))
                 <a href="{{ route('shopdetale',['shop' => $shop->id])}}">選択</a>
                @endif
                </th>
                <th scope='col'> {{ $shop->name}} </th>
                <th scope='col'>{{ number_format($shop->points,1)}}</th>
                <th scope='col'> {{ $shop->address}} </th>
            </tr>
            @endforeach
            </tbody>
        </table>
    </div>

@endsection