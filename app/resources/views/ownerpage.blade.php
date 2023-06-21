@extends('layouts.app')

@section('content')
    <div class='ownerpage-1'>
        <div class='ownerpage-2'>
            <h1>管理者ページ</h1>
        </div>
        <div class='ownerpage-3'>
            <a href="{{ route('user.index')}}">
                <button type="submit" class="btn btn-primary w-25 mt-3">違反報告</button>
            </a>
        </div>
        <div class='ownerpage-4'>
            <a href="{{route('list')}}">
            <button type="submit" class="btn btn-primary w-25 mt-3">投稿リスト</button>
            </a>
        </div>
    </div>
@endsection