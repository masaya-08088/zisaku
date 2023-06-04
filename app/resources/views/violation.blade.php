@extends('layouts.app')

@section('content')
    <div class='violation-blade'>
        <div class='text-violation.blade'>
                <h3>レビュー違反報告</h3>
            </div>
            <form action="{{ route('violation.store')}}" method="post">
            @csrf
              <label for="title">タイトル </label>
                <input type="text" class='form-control' name='title'/>
              <label for="episode" class="mt--2">コメント内容 </label>
                <textarea class="form-control" name="episode"></textarea>
             <button type='submit' class="btn btn-primary w-25 mt-3">報告する</button>
            </from>
            
            <a href="{{ route('home')}}">
                <button type='submit' class="btn btn-primary w-25 mt-3">メインページに戻る</button>
            </a>
       </div>
    </div>
    @endsection