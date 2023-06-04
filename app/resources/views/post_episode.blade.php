@extends('layouts.app')

@section('content')
    <div class='post_episode.blade'>
        <form action="{{ route('reviews.store',['user'=>Auth::id()])}}" method="post">
            @csrf
            <div class='post_episode'>
            <h4>・スポット情報</h4>
               <label for="name">店舗名 </label>
                 <input type="text" class='form-control' name='name' value="{{ old('name')}}">
                <label for="address">所在地 </label>
                 <input type="text" class='form-control' name='address' value="{{ old('address')}}">
            </div>
            <div class="new-title">
                <h5>・エピソード登録</h5>
                <label for="title">タイトル </label>
                 <input type="text" class='form-control' name='title'/>
                 <label for="image">お店画像</label>
                  <input type="file" id="image" name="image" >
                <div class="episode-1">
                    <label for="episode" class="mt--2">コメント内容 </label>
                    <textarea class="form-control" name="episode"></textarea>
                </div>
                <select name='review'>
                    <option value='one'>⭐️</option>
                    <option value='to'>⭐️⭐️</option>
                    <option value='san'>⭐️⭐️⭐️</option>
                    <option value='four'>⭐️⭐️⭐️⭐️</option>
                    <option value='five'>⭐️⭐️⭐️⭐️⭐️</option>
                </select>
            </div>
            <button type="submit" class="btn btn-primary w-25 mt-3">投稿内容確認</button>
        </form>
            <div class='btn-post_episode.blade'>
                <a href="{{ route('user.create')}}">
                    <button type="submit" class="btn btn-primary w-25 mt-3" >スポット選択に戻る</button>
                </a>
            </div>
    </div>
@endsection