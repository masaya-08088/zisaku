@extends('layouts.app')

@section('content')
<div class="review-1">
<h3>当店舗に対してのレビュー</h3>

    <input type="search" placeholder="ユーザー名を入力" name="search" value="@if (isset($search)) {{ $search }} @endif">
    <div>
        <button type="submit">投稿検索</button>
        <button>
            <a href="{{}}" class="text-white">
                クリア
            </a>
        </button>
    </div>
    <div class="review-2">
        <!-- ユーザー名
        タイトル
        エピソード -->
    </div>
    </div>
@endsection