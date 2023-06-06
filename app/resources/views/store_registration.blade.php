@extends('layouts.app')

@section('content')
    <div class='store-regisration'>
            <h3>店舗情報の登録</h3>
            <div id="map" style="height:500px"></div>
            <label for="juusyo"></label>
            <input type="text" name="add" id="add" placeholder="住所を入力">
        </label>
        <button id="button">ピン留めで場所確認</button>
        　　<form method="POST" action="{{route('shops.store')}}" enctype="multipart/form-data">
            @csrf
                
                    <input type="text" id="lat" name="longitude">   
                    <input type="text" id="lng" name="atitude">  
                
               
                <label for="address" class="mt-2">所在地　:</label>
                　<input type="text" class="form-control" name="address"/>
                <label for="comment" class="mt--2">コメント内容 :</label>
                <textarea class="form-control" name="comment"></textarea>
                <label for="image">お店画像：</label>
                <input type="file" id="image" name="image" >
            　　　<button type="submit" class="btn btn-primary w-25 mt-3">登録</button>
            </form>
    </div>
    <script src="{{ asset('/js/result.js') }}"></script> 
    <script src="https://maps.googleapis.com/maps/api/js?language=ja&region=JP&key=AIzaSyBMNV0ep-bX2G_tEfkhSNM51bxBaLBL1Uk&callback=initMap" async defer> 
    </script>
    @endsection