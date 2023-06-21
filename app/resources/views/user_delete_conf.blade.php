@extends('layouts.app')

@section('content')
    <div class='user_delete_conf'>
     　 <div class="card-header">アカウント削除ページ</div>
        　　　<p>アカウントを削除してもよろしいでしょうか？</p>
            <a href="{{ route('user.edit',['user'=>Auth::id()])}}">
                <input type='submit' value="編集画面に戻る" class='btn-user_edit-1'>
            </a>
            <form action="{{route('user.destroy',['user'=>Auth::id()])}}" method="post">
                @csrf
                @method('delete')
                <input type='submit' value="削除" class='btn-user_edit-1' onclick='return confirm("削除しますか？")';>
                <label for="name" class="col-md-1">ユーザー名</label>
                <input  value="{{ old('name',isset($result['name']) ? $result['name'] :'')}}" type=text  calass='form-contorl' name='name' required/>
                <ladel for="mail" class="col-md-1">メールアドレス</ladel>
                <input  value="{{ old('email',isset($result['email']) ? $result['email'] :'')}}" type="email"  calass='form-contorl'  name="email" id='email' required/>
        　　　</form>
    </div>
        
    </div>
@endsection