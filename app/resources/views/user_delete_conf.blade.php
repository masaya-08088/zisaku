@extends('layouts.app')

@section('content')
    <div class='user_delete_conf'>
        <div class='btn-user_delete_conf'>
            <a href="{{ route('user.delete_conf',['user'=>Auth::id()])}}">
                <button type='button' class='btn btn-user_delete_conf-1'>削除する</button>
            </a>
            <a href="{{ route('user.edit',['user'=>Auth::id()])}}">
                <button type='button' class='btn btn-user_delete_conf-2'>編集画面に戻る</button>
            </a>
        </div>

        <div class='user_edit.blade'>
            
            <div class='edit-blade-1'>
                <label for="name" class="col-md-1">ユーザー名：</label>

                <div class='col-md-1'>
                 <input id="name" type="text"  name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                </div>
            </div>

            <div class="edit-blade-1">
                  <ladel for="mail" class="col-md-1">メールアドレス　: </ladel>
                <div class='col-md-1'>
                  <input id="mail" type="email"  name="mail"  value="{{ old('email') }}" required autocomplete="email" autofocus>
                </div>
            </div>

            <div class="edit-blade-1">
                <label for="password" class="col-md-1">パスワード：</label>

                <div class="col-md-1">
                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
                </div>
            </div>

            <div class="edit-blade-1">
                <label for="password-confirm" class="col-md-1">パスワード確認：</label>
                <div class="col-md-1">
                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                </div>
            </div>

            <div classs='edit-blade-1'>
                <!-- 画面表示 -->
                <label for="avatar">アカウント画像：</label>
                <input type="file"id="avatar" name="avatar"accept="image/png, image/jpeg">
            </div>
            <div class='edit-blade-1'>
            <label for="text">プロフィール：</label>
            <input type="text"id="episode-confirm" name="episode" name="email" required autocomplete="episode">
            </div>
    </div>
@endsection