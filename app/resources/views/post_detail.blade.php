@extends('layouts.app')

@section('content')
<div class="new-spot-3">
    <h2>違反報告</h2>
        <table class="table">
            <thead>
                <tr>
                    <th scope='col'>違反報告</th>
                    <th scope='col'>タイトル</th>
                    <th scope='col'>ポイント</th>
                    <th scope='col'>エピソード</th>
                </tr>
            </thead>
            <tbody>
            @foreach($vio as $violations)
            <tr>
            <th>　
            <a href="{{ route('viol',['id'=>$violations['id']])}}">違反報告</a>                
　          </th>
            <th scope='col'> {{ $violations['title']}} </th>
            <th scope='col'> {{ $violations['points']}} </th>
            <th scope='col'> {{ $violations['episode']}} </th>
            </tr>
            @endforeach
            </tbody>
        </table>
    </div>

@endsection