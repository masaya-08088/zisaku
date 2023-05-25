@extends('layouts.app')

@section('content')
    <div class='ownerpage-1'>
        <div class='ownerpage-2'>
            <h1>管理者ページ</h1>
        </div>
        <div class='ownerpage-3'>
            <a href="user_list.blade.php">
                <button type='button' class='btn btn-ownerpage'>違反報告</button>
            </a>
        </div>
        <div class='ownerpage-4'>
            <a href="post_list.blade.php"></a>
            <button type='button' class='btn btn-ownerpage-1'></button>
        </div>
    </div>
@endsection