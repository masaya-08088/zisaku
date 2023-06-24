@extends('layouts.app')

@section('content')
<div class="review-1">
    <div class="review-2">
    <a href="/home">戻る</a>
    <h3>管理ユーザー専用画面</h3>
    </div>
        <table class="table">
            <thead>
                <tr>
                    <th scope='col'>投稿ID</th>
                    <th scope='col'>ユーザー名</th>
                    <th scope='col'>タイトル</th>
                    <th scope='col'>スポット</th>
                    <th scope='col'>投稿日時</th>
                    <th scope='col'>評価</th>
                    <th scope='col'>公開or非公開</th>
                    <th scope='col'>違反件数</th>
                    <th scope='col'>詳細</th>
                </tr>
            </thead>
            <tbody>
                
            @foreach($reviews as $review)
           
            <tr>
                <th scope='col'>{{$review['review']}}</th>
                <th scope='col'>{{$review['user']}}</th>
                <th scope='col'>{{$review['title']}}</th>
                <th scope='col'>{{$review['name']}}</th>
                <th scope='col'>{{$review['created_at']}}</th>
                <th scope='col'>{{$review['points']}}</th>
                <th scope='col'>
                @if($review['del']==0)
                    <a href="{{route('hikoukai',['id'=>$review['review']])}}">非公開する</a>
                  @else
                    <a href="{{route('koukai',['id'=>$review['review']])}}">公開する</a>
                @endif
                </th>
                <th scope='col'>{{$review['violation_count']}}</th>
                <th scope='col'>
                <a href="{{route('picup',['id'=>$review['review']])}}">詳細</a>

                </th>
            </tr>
          
            @endforeach
            </tbody>
        </table>
@endsection