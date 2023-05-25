@extends('layouts.app')

@section('content')
    <div class='post_edit.blade'>
        <div class='post_edit-1'>
            <a href="post_edit_spot.lade.php">
                <button type='button' class='btn btn-post_edit.blade'>スポット変更</button>
            </a>
        </div>

        <div class='btn-post_edit.blade'>
            <a href="post_edit_conf.blade.php">
                <button type='button' class='btn btn-post_edit_conf.blade'>編集内容確認</button>
            </a>
            <a href="post_delete_conf.blade.php">
                <button type='button'  class='btn btn-post_edit_conf.blade-1'>投稿を削除する</button>
            </a>
        </div>
    </div>
@endsection