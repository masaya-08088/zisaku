@extends('layouts.app')

@section('content')
    <div class='post_detail_conf'>
        <div class='btn-post_detail'>
            <a href="post_edit.blade.php">
                <button type='button' class='btn btn-post_edit.blade'>編集画面に戻る</button>
            </a>
            <a href="mypage.blade.php">
                <button type='button' class='btn btn-post_edit.blade-1'>削除する</button>
            </a>
        </div>

    </div>
@endsection