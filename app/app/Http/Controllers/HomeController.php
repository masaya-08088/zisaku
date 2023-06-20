<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Shop;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        // 管理者
        $users=Auth::user()->toArray();
        if($users['role']==0){
            return view('ownerpage');
        }
        // 一般ユーザー
        elseif($users['role']==1){
            // return view('main');
            return redirect('/');
        }
        // 店舗管理者
        elseif($users['role']==2){
            $shop = Shop::where('user_id',Auth::id())->first();

            return view('shop_manager',[
               'shop' => $shop
            ]);
        }
        // return view('home');
    }

    
}
