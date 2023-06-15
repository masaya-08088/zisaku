@extends('layouts.app')

@section('content')
    <div class='stop-display.blade'>
    <form action="{{route('violation.destroy',['user'=>Auth::id()])}}" method="post">
      @csrf
    @foreach($users as $user)
      <h1>ユーザー名：<?php echo $user['name']; ?></h1>
      @endforeach

    <div class='btn btn-stop-display'>
    <input type='submit' value="削除" class='btn-user_edit-1' onclick='return confirm("削除しますか？")';>
    </form>
        
        <a href="{{route('user.index')}}">
            <button type='button' class='btn btn-display-1'>戻る</button>
        </a>
        <a href="stop_display_comp.blade.php">
            <button type='button' class='btn btn-display-2'>公開</button>
        </a>
    </div>
    </div>
@endsection