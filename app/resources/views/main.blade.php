@extends('layouts.app')

@section('content')
<div　class="review-3">
        <form action="{{route('main')}}" method='get'>
            @csrf
            <label for="sel01" class="col-md-4 col-form-label text-md-right">キーワード</label>

          <input type="text" name="keyword" vaule="{{$keyword}}">
         
          <div class="form-group row">
   <label for="sel01" class="col-md-4 col-form-label text-md-right">評価</label>
   <div class="col-md-6">
      <select class="form-control" id="sel01" name="sel01">
       
         <option value="" selected></option>
         <option value="1">1</option>
         <option value="2">2</option>
         <option value="3">3</option>
         <option value="4">4</option>
         <option value="5">5</option>
         
      </select>
   </div>
   <input type="submit" value="検索" required>
</form>
</div>
<div class="new-spot-3">
    <?php $user = Auth::user(); ?>
    @if(isset($user) && $user->del_flg==1)
    <h3>利用停止されています</h3>
    @endif
　<a href="{{route('shoplist')}}">店舗一覧</a>

        <table class="table">
            <thead>

                <tr>
                    <th scope='col'>店名</th>
                    <th scope='col'>住所</th>
                    <th scope='col'>タイトル</th>
                    <th scope='col'>ポイント</th>
                    <th scope='col'>エピソード</th>
                </tr>
            </thead>
            <tbody>
            @foreach($displays as $display)
            <tr>
            <th scope='col'> {{ $display['shopname']}} </th>
            <th scope='col'> {{ $display['address']}} </th>
            <th scope='col'> {{ $display['title']}} </th>
            <th scope='col'> {{ $display['points']}} </th>
            <th scope='col'> {{ $display['episode']}} </th>
            </tr>
            @endforeach
            </tbody>
        </table>
    </div>

@endsection





