@extends('layouts.app')

@section('content')
    <div class='violation-blade'>
        <div class='text-violation.blade'>
                <h3>レビュー違反報告</h3>
            </div>
            <form action="{{ route('violation.store',['user'=>Auth::id()])}}" method="post">
            @csrf
            <input type="hidden" name='review_id' value='{{$id}}'>
              <label for="text" class="mt--2">コメント内容 </label>
                <textarea class="form-control" name="text"></textarea>
             <button type='submit' class="btn btn-primary w-25 mt-3">報告する</button>
            </from>
            
            <a href="{{ route('user.show',['user'=>Auth::id()])}}">
                <button type='submit' class="btn btn-primary w-25 mt-3">メインページに戻る</button>
            </a>
       </div>
    </div>
    @endsection