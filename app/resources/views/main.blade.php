@extends('layouts.app')

@section('content')
<div class="new-spot-3">
        <table class="table">
            <thead>
                <tr>
                    <th scope='col'></th>
                    <th scope='col'>タイトル</th>
                    <th scope='col'>ポイント</th>
                    <th scope='col'>エピソード</th>
                </tr>
            </thead>
            <tbody>
            @foreach($displays as $display)
            <tr>
                <th scope='col'> {{ $display['title']}} </th>
                <th scope='col'> {{ $display['point']}} </th>
                <th scope='col'> {{ $display['episode']}} </th>
            </tr>
            @endforeach
            </tbody>
        </table>
    </div>

@endsection





