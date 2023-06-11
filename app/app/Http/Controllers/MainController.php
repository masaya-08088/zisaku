<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;


use Illuminate\Http\Request;
use App\Review;
use App\Shop;


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
        
        $review = new Review;

        $viol = $review
        ->join('users','reviews.id','users.reviews_id')
        ->where('users.id',$id)
        ->first();
        
        return view('violation',[
            'viol' => $viol
        ]);
    }

    
}
