@extends('layouts.app')

@section('content')
    <div class='post_episode.blade'>
        <div class='post_episode'>
            <p>名称：</p>
            <p>所在地：</p>
        </div>
        <div class="new-title">
            <h5>エピソード登録</h5>
            <p>タイトル</p>
            <p>画像</p>
            <p>エピソード</p>
           <select name='review'>
                <option value='one'>⭐️</option>
                <option value='to'>⭐️⭐️</option>
                <option value='san'>⭐️⭐️⭐️</option>
                <option value='four'>⭐️⭐️⭐️⭐️</option>
                <option value='five'>⭐️⭐️⭐️⭐️⭐️</option>
           </select>
        </div>
        <div class='btn-post_episode.blade'>
        <a href="{{ route('user.create')}}">
                <button type='button' class='btn btn-post_episode'>スポット選択に戻る</button>
            </a>
            <a href="post_conf.blade.php">
                <button type='button' class='btn btn-post_episode-1'>投稿内容確認</button>
            </a>
        </div>
    </div>
@endsection