@extends('layouts.app')

@section('content')
    <div class='violation-blade'>
        <div class='text-violation.blade'>
            <h1>レビュー違反報告</h1>
        </div>
        <form action="" method="post">
            <div class='violation.blade-1'>
                <ladel for='title'>タイトル</ladel>
                <input type="text" class='form-violation' name='title' >
            </div>
            <div class='violation.blade-2'>
                <ladel for='episode'>エピソード</ladel>
                <textarea id="episode" name="episode"></textarea>
            </div>
            <div class='violation.blade-3'>
                <a href="violation_conf.blade.php">
                    <button type='button' class='btn btn-violation.blade'>報告する</button>
                </a>
                <a href="main.blade.php">
                    <button type='button' class='btn btn-violation.blade-1'>メインページに戻る</button>
                </a>
            </div>
        </from>
    </div>
    @endsection