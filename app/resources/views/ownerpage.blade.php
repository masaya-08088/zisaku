@extends('layouts.app')

@section('content')
    <div class='ownerpage-1'>
        <div class='ownerpage-2'>
            <h1>管理者ページ</h1>
        </div>
        <div class='ownerpage-3'>
            <a href="user_list.blade.php">
                <button type="submit" class="btn btn-primary w-25 mt-3">違反報告</button>
            </a>
        </div>
        <div class='ownerpage-4'>
            <a href="post_list.blade.php">
            <button type="submit" class="btn btn-primary w-25 mt-3">ステータス確認</button>
            </a>
        </div>
    </div>
@endsection