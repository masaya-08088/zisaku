@extends('layouts.app')

@section('content')
<div class="review-1">
    <div class="review-2">

        <h3>違反報告画面</h3>
       
    　　</div>
</div>

    <table class="table">
            <thead>
                <tr>
                    <th scope='col'></th>
                    <th scope='col'>ユーザー名</th>
                    <th scope='col'>投稿件数</th>
                    <th scope='col'>違反件数</th>
                    <th scope='col'>公開・非公開</th>
                    
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