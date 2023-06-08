@extends('layouts.app')

@section('content')
    <div class='stop-display.blade'>
    <label for="name">アイコン </label>
      <input type="text" class='form-control' name='name' >
      <label for="name">ユーザー名 </label>
        <input type="text" class='form-control' name='name' >
        <div class="kozinn-1">
        <label for="episode" class="mt--2">エピソード </label>
        <label for="title" class="mt--2">タイトル </label>
        <label for="point" class="mt--2">評価 </label>
        <input type="text" class='form-control' name='title' >
          <textarea class="form-control" name="episode"></textarea>
        </div>
        <label for="name"> </label>
      <input type="text" class='form-control' name='name' >

    <div class='btn btn-stop-display'>
        <a href="stop_display_comp.blade.php">
            <button type='button' class='btn btn-display'>非公開</button>
        </a>
        <a href="post_list.blade.php">
            <button type='button' class='btn btn-display-1'>戻る</button>
        </a>
        <a href="stop_display_comp.blade.php">
            <button type='button' class='btn btn-display-2'>公開</button>
        </a>
    </div>
    </div>
@endsection