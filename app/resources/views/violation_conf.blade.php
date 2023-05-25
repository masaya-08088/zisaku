@extends('layouts.app')

@section('content')
    <div class='text-violation_conf'>
        <div class='violation_conf'>
          <h1>レビュー違反報告確認画面</h1>
        </div>
        <div class='btn-violation_conf-1'>
            <div class='btn-violation_conf-1'>
                <a href="violation_comp.blade.php">
                    <button type='button' class='violation-1'>内容送信</button>
                </a>
            </div>
            <div class='btn-violation_conf-2'>
                <a href="main.blade.php">
                    <button type='button' class='violation-2'>メインページに戻る</button>
                </a>
            </div>
        </div>
    </div>
    @endsection