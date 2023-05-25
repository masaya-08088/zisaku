@extends('layouts.app')

@section('content')
    <div class='stop-display.blade'>



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