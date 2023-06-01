@extends('layouts.app')

@section('content')
    <div class='store-regisration'>
        <div class='store-regisration1'>
            <h3>店舗情報の登録</h3>
            <div id="map" style="height:500px"></div>
        </div>
            
        <form action="" method="post">
            <label for="name" class="mt-2">名称　:</label>
            　<input type="text" class="form-control" name="name"/>
            <label for="address" class="mt-2">所在地　:</label>
            　<input type="text" class="form-control" name="address"/>
        　　　<button type="submit" class="btn btn-primary w-25 mt-3">登録</button>
        </form>
    </div>
@endsection