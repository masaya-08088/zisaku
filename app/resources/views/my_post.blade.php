@extends('layouts.app')

@section('content')

    <div class='my_post.blade'>
        <div class='my_post'>

        </div>
        <div class='btn-my_post'>
            <a href='post_edit.blade.php'>
                <button type='button' class='btn btn-my_post-1'>投稿を編集する</button>
            </a>
        </div>
    </div>
    @endsection