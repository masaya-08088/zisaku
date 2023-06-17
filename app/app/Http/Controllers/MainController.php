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
            'viol' => $viol,
            'id' => $id
        ]);
    }
    public function shoplist($id)
    {
        $shop = new Shop;
        
        $shops = $shop->all();
       
        return view('list_stores',[
            'shops' => $shops
        ]);
    }

    // レビューの非公開公開
    public function hikoukai($id)
    {
       
        $reviews = new Review;
        $review = $reviews->find($id);
    //    dd($review);
        $review->del_flg=1;
        $review->save();
        return redirect('/list');

    }

    public function  koukai($id){

        $reviews = new Review;
        $review = $reviews->find($id);
       
        $review->del_flg=0;
        $review->save();
       
        return redirect('/list');
    }
    

    
}
