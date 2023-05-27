@extends('layouts.app')

@section('content')
    <div class="card">
        <div class="card-header">アカウント情報編集</div>
        <div class='user_edit.blade'>
            @if($errors->any())
                  <div class="alert alert-danger">
                    <ul>
                        @foreach($errors->all() as $message)
                        <li>{{ $message }}</li>
                        @endforeach
                    </ul>
                  </div>
            @endif
          <form action="{{route('user.update',['user'=>Auth::id()])}}" method="post"　enctype="multipart/form-data">
          @method('PATCH')
              @csrf
                <div class='edit-blade-1'>
                    <label for="name" class="col-md-1">ユーザー名：</label>

                    <div class='col-md-1'>
                    <input id="name" type="text"  name="name" value="{{  $result['name'] }}" required autocomplete="name" autofocus>
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
                    <input id="mail" type="email"  name="email"  value="{{ $result['email'] }}" required autocomplete="email" autofocus>
                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

                <div classs='edit-blade-1'>
                    <label for="avatar">アカウント画像：</label>
                    
                    <input type="file" id="avatar" name="image" >
                </div>
                    <div class='btn-user_edit'>
                      <button type='submit' class='btn-user_edit-1'>完了</button>
                    </div>
            </form>
            <form action="{{route('user.destroy',['user'=>Auth::id()])}}" method="post" >
                @method('PUT')
                @csrt
                <div class="btn-user_edit-1">
                    <button type='submit' class='btn-user_edit-2' value="PUT">アカウントを削除する</button>
                </div>
            </form>
        </div>
    </div>
    @endsection
    
