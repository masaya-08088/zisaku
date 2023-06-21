@extends('layouts.app')

@section('content')
    <div class='post_episode.blade'>
        <form action="{{ route('reviews.store',['user'=>Auth::id()])}}" method="POST" enctype="multipart/form-data">
            @csrf
            <input type="hidden" value="{{$id}}" name='shop_id'>
            <div class='post_episode'>
            <h4>・スポット情報</h4>
               <label for="name">店舗名 </label>
                 <input type="text" class='form-control' name='name' value="{{ old('name',$result['name'])}}">
                <label for="address">所在地 </label>
                 <input type="text" class='form-control' name='address' value="{{ old('address',$result['address'])}}">
            </div>
            <div class="new-title">
                <h5>・エピソード登録</h5>
                <label for="title">タイトル </label>
                 <input type="text" class='form-control' name='title'required>
                 <label for="image">お店画像</label>
                  <input type="file" id="image" name="image" >
                <div class="episode-1">
                    <label for="episode" class="mt--2" >コメント内容 </label>
                    <textarea class="form-control" name="episode" required></textarea>
                </div>
                <select name='points' required>
                    <option value='1'>⭐️</option>
                    <option value='2'>⭐️⭐️</option>
                    <option value='3'>⭐️⭐️⭐️</option>
                    <option value='4'>⭐️⭐️⭐️⭐️</option>
                    <option value='5'>⭐️⭐️⭐️⭐️⭐️</option>
                </select>
            </div>
            <button type="submit" class="btn btn-primary w-25 mt-3">投稿</button>
        </form>
            <div class='btn-post_episode.blade'>
                <a href="{{ route('user.create')}}">
                    <button type="submit" class="btn btn-primary w-25 mt-3" >スポット選択に戻る</button>
                </a>
            </div>
    </div>
@endsection