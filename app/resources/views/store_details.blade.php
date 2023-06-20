@extends('layouts.app')

@section('content')
<!-- 管理者用リスト -->
    <div class="new-spot-1">
        <p>スポット選択画面</p>
    </div>
    <div class="new-spot-2">
        <h5>店舗詳細</h5>
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
                <th scope='col'><a href="{{route('reviews.show',['review'=> $shop->id])}}"> {{ $shop->name}} </a></th>
                <th scope='col'>{{ $shop->address}}</th>
                <th scope='col'> {{ number_format($shop->points,1)}} </th>
            </tr>
            @endforeach
            </tbody>
        </table>
    </div>
    <h3>レビューの一覧</h3>
    <div class="d-flex">
    @foreach($reviews as $review)
    <div class="card" style="width: 18rem;">
  <div class="card-body">
    <h4 class="card-title">名前：{{$review->name}}</h4>
    <p class="card-text">タイトル：{{$review->title}}</p>
    <p class="card-text">コメント：{{$review->episode}}</p>
  </div>
</div>
</div>
@endforeach
@endsection