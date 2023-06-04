<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;


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
        $users=Auth::user()->toArray();
        if($users['role']==0){
            return view('ownerpage');
        }
        elseif($users['role']==1){
            return view('mypage');
        }
        elseif($users['role']==2){
            return view('shop_manager');
        }
        // return view('home');
    }
}
