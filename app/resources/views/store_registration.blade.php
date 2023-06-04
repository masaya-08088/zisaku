@extends('layouts.app')

@section('content')
    <div class='store-regisration'>
            <h3>店舗情報の登録</h3>
            <div id="map" style="height:500px"></div>
        　　<form method="POST" action="/upload" enctype="multipart/form-data">
            @csrf
                <ul>
                    <li>緯度: <span name="longitude" id="lat"></span></li>
                    <li>経度: <span name="atitude" id="lng"></span></li>
                </ul>
                <label for="name" class="mt-2">名称　:</label>
                　<input type="text" class="form-control" name="name"/>
                <label for="address" class="mt-2">所在地　:</label>
                　<input type="text" class="form-control" name="address"/>
                <label for="comment" class="mt--2">コメント内容 :</label>
                <textarea class="form-control" name="comment"></textarea>
                <label for="image">お店画像：</label>
                <input type="file" id="image" name="image" >
            　　　<button type="submit" class="btn btn-primary w-25 mt-3">登録</button>
            </form>
    </div>
@endsection