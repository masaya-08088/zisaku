@extends('layouts.app')

@section('content')
<div class="review-1">
    <div class="review-2">

        <h3>違反報告画面</h3>
        <div　class="review-3">
        <form action="{{route('user.index')}}" method='get'>
            @csrf
          <input type="text" name="keyword" >
          <input type="submit" value="検索">
          <div class="form-group row">
   <label for="sel01" class="col-md-4 col-form-label text-md-right">評価</label>
   <div class="col-md-6">
      <select class="form-control" id="sel01" name="sel01">
         <option value="1">1</option>
         <option value="2" selected>2</option>
         <option value="3" selected>3</option>
         <option value="4" selected>4</option>
         <option value="5" selected>5</option>
         <option value="6" selected></option>
      </select>
   </div>
</form>
</div>
    　　</div>
    <a href="{{route('shoplist',['id'=>Auth::id()])}}">店舗一覧</a>
</div>

    <table class="table">
            <thead>
                <tr>
                    <th scope='col'></th>
                    <th scope='col'>ユーザー名</th>
                    <th scope='col'>投稿件数</th>
                    <th scope='col'>違反件数</th>
                    <th scope='col'>公開・非公開</th>
                    <th scope='col'>詳細</th>
                </tr>
            </thead>
            <tbody>
            @foreach($users as $user)
            
            <tr>
               
                <th scope='col'></th>
                <th scope='col'>{{ $user['name']}}</th>
                <th scope='col'>{{ $user['review_count']}}</th>
                <th scope='col'>{{ $user['violation_count']}}</th>
                <th scope='col'>
                    @if($user['del_flg']==0)
                    <a href="{{route('violation.edit',['violation'=>$user['id']])}}">非公開する</a>
                  @elseif($user['del_flg']==1)
                    <a href="{{route('shops.edit',['shop'=>$user['id']])}}">公開する</a>
                    @endif
                </th>
            </tr>
            
            @endforeach
            </tbody>
        </table>
@endsection