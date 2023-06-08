@extends('layouts.app')

@section('content')
<div class="review-1">
    <div class="review-2">

    <h3>管理ユーザー専用画面</h3>
    </div>
    <table class="table">
            <thead>
                <tr>
                    <th scope='col'>投稿ID</th>
                    <th scope='col'>ユーザー名</th>
                    <th scope='col'>タイトル</th>
                    <th scope='col'>スポット</th>
                    <th scope='col'>投稿日時</th>
                    <th scope='col'>評価</th>
                    <th scope='col'>公開or非公開</th>
                    <th scope='col'>違反件数</th>
                    <th scope='col'>詳細</th>
                </tr>
            </thead>
            <tbody>
            
            <tr>
                <th scope='col'></th>
                <th scope='col'></th>
                <th scope='col'></th>
                <th scope='col'></th>
                <th scope='col'></th>
                <th scope='col'></th>
                <th scope='col'></th>
                <th scope='col'></th>
                <th scope='col'></th>
            </tr>
            
            </tbody>
        </table>
@endsection