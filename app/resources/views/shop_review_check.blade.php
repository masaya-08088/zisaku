@extends('layouts.app')

@section('content')
<div class="review-1">
　<h3>当店舗に対してのレビュー</h3>
    <div class="review-2">
        <table class="table">
                <thead>
                    <tr>
                        <th scope='col'>ユーザー名</th>
                        <th scope='col'>タイトル</th>
                        <th scope='col'>エピソード</th>
                    </tr>
                </thead>
                <tbody>
                @foreach($reviews as $review)
                <tr>
                <th scope='col'>{{ $review['name']}}</th>
                <th scope='col'>{{ $review['title']}}</th>
                <th scope='col'>{{ $review['episode']}}</th>
                </tr>
                @endforeach
                </tbody>
        </table>
    </div>
</div>
@endsection