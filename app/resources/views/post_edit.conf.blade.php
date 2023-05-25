@extends('layouts.app')

@section('content')
    <div class='post_edit.conf.blade'>
        <div class='post_edit.conf'>

        </div>
        <p>タイトル</p>
        <div class='post_edit.conf-1'>

        </div>
        <div class='post_edit.conf-2'>
            <a href="post_episode.blade.php">
                <button type='button' class='btn btn-post_episode'>編集画面に戻る</button>
            </a>
            <a href="mypage.blade.php">
                <button type='button' class='btn btn-post_episode-1'>投稿する</button>
            </a>
        </div>
    </div>
@endsection