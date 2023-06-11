@extends('layouts.app')

@section('content')
    <div class='post_edit.blade'>
    <form action="{{route('shops.update',['shop'=>$revirew['id']])}}" method="post" enctype="multipart/form-data">
          @method('PATCH')
              @csrf
            <div class='post_episode'>
             
              <div class="post_episode-1">
               <label for="name">店舗名 </label>
                 <input type="text" class='form-control' name='name' value="{{ $revirew['name'] }}" required autocomplete="name" autofocus>
                <label for="address">所在地 </label>
                 <input type="text" class='form-control' name='address' value="{{ $revirew['address'] }}" required autocomplete="name" autofocus>
                 <input type="hidden" name="shop_id" value="{{ $revirew['shop_id']}}">
                 </div>
              </div>
            <div class="new-title">
                <h5>・エピソード登録</h5>
                <label for="title">タイトル </label>
                 <input type="text" class='form-control'  name='title' value="{{ $revirew['title'] }}" required autocomplete="title" autofocus/>
                 <label for="image">お店画像</label>
                 <input type="file" id="image" name="image" >
                <div class="episode-1">
                    <label for="episode" class="mt--2">コメント内容 </label>
                    <textarea class="form-control" name="episode" >{{ $revirew['episode'] }}</textarea>
                </div>
                <select name='points'>
                    <option value='1'>⭐️</option>
                    <option value='2'>⭐️⭐️</option>
                    <option value='3'>⭐️⭐️⭐️</option>
                    <option value='4'>⭐️⭐️⭐️⭐️</option>
                    <option value='5'>⭐️⭐️⭐️⭐️⭐️</option>
                </select>
            </div>
            <button type="submit" class="btn btn-primary w-25 mt-3">完了</button>
        </form>

        <div class='btn-post_edit.blade'>
            <a href="post_delete_conf.blade.php">
                <button type='button'  class='btn btn-post_edit_conf.blade-1'>投稿を削除する</button>
            </a>
        </div>
    </div>
@endsection