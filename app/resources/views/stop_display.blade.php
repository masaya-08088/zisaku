@extends('layouts.app')

@section('content')
  <div class='stop-display.blade'>
    <div class="stop-display">
      <h2>詳細画面</h2>
  <tbody>
         <h3> 名前：{{$reviews['name']}}</h3> 
           <h5>タイトル：{{$reviews['title']}} 　評価：{{$reviews['points']}}</h5>
           <div>レビュー内容：{{$reviews['episode']}}</div>    
   </tbody>
   </div>
    </div>
@endsection