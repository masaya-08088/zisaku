@extends('layouts.app')

@section('content')
<div class="review-1">
    <div class="review-2">

    <h3>違反報告画面</h3>
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
            @if($user['role']==1)
            <tr>
               
                <th scope='col'></th>
                <th scope='col'>{{ $user['name']}}</th>
                <th scope='col'>{{ $user['review_count']}}</th>
                <th scope='col'>{{ $user['violation_count']}}</th>
                <th scope='col'>
                    <a href="{{route('violation.edit',['violation'=>$user['id']])}}">公開・非公開</a>
                </th>
                <th scope='col'></th>
            </tr>
            @endif
            @endforeach
            </tbody>
        </table>
@endsection