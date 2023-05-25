@extends('layouts.app')

@section('content')
    <div class="card">
        <div class="card-header">アカウント情報編集</div>
        <div class='user_edit.blade'>
            
            <div class='edit-blade-1'>
                <label for="name" class="col-md-1">ユーザー名：</label>

                <div class='col-md-1'>
                <input id="name" type="text"  name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                @error('name')
                    <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                    </span>
                @enderror
                </div>
            </div>

            <div class="edit-blade-1">
                  <ladel for="mail" class="col-md-1">メールアドレス　: </ladel>
                   <div class='col-md-1'>
                  <input id="mail" type="email"  name="mail"  value="{{ old('email') }}" required autocomplete="email" autofocus>
                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>

            <div classs='edit-blade-1'>
                <label for="avatar">アカウント画像：</label>
                <input type="file"id="avatar" name="avatar"accept="image/png, image/jpeg">
            </div>
            <div class='edit-blade-1'>
            <label for="text">プロフィール：</label>
            <input type="text"id="episode-confirm" name="episode" name="email" required autocomplete="episode">
            </div>

            <div class='btn-user_edit'>
             <a href="{{ route('user.update',['user'=>Auth::id()])}}">
                    <button type='button' class='btn-user_edit-1'>編集内容の確認</button>
                </a>
                <a href="{{ route('user.destroy',['user'=>Auth::id()])}}">
                    <button type='button' class='btn-user_edit-2'>アカウントを削除する</button>
                </a>
            </div>
        </div>
    </div>
    @endsection
    
