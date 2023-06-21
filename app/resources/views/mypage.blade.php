@extends('layouts.app')

@section('content')
    <div class='mypage.blade'>
            <div class='mypage-1'>
                
                <h4><?php $user = Auth::user(); ?>{{ $user->name }}</h4>
                @if($user->del_flg==0)
                <a href="{{ route('user.create')}}">
                    <button type='button' class='btn btn-mypage.blade'>新規投稿</button>
                </a>
                <a href="{{ route('user.edit',['user'=>Auth::id()])}}">
                    <button type='button' class='btn btn-mypage.blade-1'>ユーザー情報編集</button>
                </a>
               
                @else
                <h3>利用停止されています</h3>
                @endif
            </div>
            <hr style="height: 1px; background-color: #000000; ">
            <div class='btn-mypage'>
                <h5>自分の投稿一覧</h5>
            </div>
            <hr style="height: 1px; background-color: #000000; ">

            <table class="table">
            <thead>
                <tr>
                    <th scope='col'>編集</th>
                    <th scope='col'>タイトル</th>
                    <th scope='col'>ポイント</th>
                    <th scope='col'>エピソード</th>
                </tr>
            </thead>
            <tbody>
            @foreach($mys as $my)
            <tr>
            <th>
            @if($user->del_flg==0)
                 <a href="{{ route('shopedit',['id'=>$my['id']])}}">編集</a>
            @endif
            </th>
            <th scope='col'> {{ $my['title']}} </th>
            <th scope='col'> {{ $my['points']}} </th>
            <th scope='col'> {{ $my['episode']}} </th>
            </tr>
            @endforeach
            </tbody>
        </table>
        </div>
    </div>
@endsection