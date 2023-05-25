@extends('layouts.app')

@section('content')

    <div class='btn-shop-manager'>
        <div class='text-3'>
            <h1>店舗管理者ページ</h1>
        </div>
        <div class='btn-review'>
            <a href="shop_review_cjeck.php">
                <button type='button' class='btn btn-review'>レビュー確認</button>
            </a>
        </div>
        <div class='btn-store-registration'>
            <div class='btn-store-registration'>
                <a href="store_registration.blade.php">
                    <button type='button' class='btn btn-store-registration'>店舗情報の登録</button>
                </a>
            </div>
        </div>
    </div>
@endsection