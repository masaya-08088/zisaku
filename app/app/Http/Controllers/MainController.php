<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;


use Illuminate\Http\Request;
use App\Review;
use App\Shop;
use App\User;


class MainController extends Controller
{
    public function main()
    {
        $displays = new Review;
        $displays = $displays->all();
        return view('main',[
            'displays' => $displays
        ]);
    }
    

    public function shopedit($id)
    {
        
        $shops = new Shop;

        $review = $shops
        ->join('reviews','shops.id','reviews.shop_id')
        ->where('reviews.id',$id)
        ->first();
        return view('post_edit',[
            'revirew' => $review
        ]);
    }
    
    public function viol($id)
    {
        
        $review = new User;
        
        $viol = $review
        ->join('reviews','users.id','reviews.user_id')
        ->where('reviews.id',$id)
        ->first();
        
        
        return view('violation',[
            'viol' => $viol
        ]);
    }

    
}
