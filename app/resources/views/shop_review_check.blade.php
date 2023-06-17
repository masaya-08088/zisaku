@extends('layouts.app')

@section('content')
<div class="review-1">
<h3>当店舗に対してのレビュー</h3>

<div　class="review-3">
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
    </div>
    <div class="review-2">
    <table class="table">
            <thead>
                <tr>
                    <th scope='col'>ユーザー名</th>
                    <th scope='col'>タイトル</th>
                    <th scope='col'>エピソード</th>
                </tr>
            </thead>
            <tbody>
            @foreach($reviews as $review)
            <tr>
            <th scope='col'>{{ $review[name]}}</th>
            <th scope='col'>{{ $review[title]}}</th>
            <th scope='col'>{{ $review[episode]}}</th>
            </tr>
            @endforeach
            </tbody>
        </table>
    </div>
    </div>
@endsection