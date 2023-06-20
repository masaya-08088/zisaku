<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;
use App\Review;
use App\Shop;
use App\User;


class MainController extends Controller
{
    public function main(Request $request)
    {
        $keyword=$request->input('keyword');
        $sel01=$request->input('sel01');
        $user = Review::query();
        $space = mb_convert_kana($keyword, 's');
        $keys = explode(" ",$space);
        $user->join('shops',function ($user) use($request){
            $user->on('reviews.shop_id','=','shops.id');
       })
       ->join('users',function ($user) use($request){
        $user->on('reviews.user_id','=','users.id');
       })->select('users.*','reviews.*','shops.*','shops.name as shopname');
       if(!empty($keyword)){
        foreach($keys as $key){
            $user->orWhere('title', 'LIKE', "%{$key}%")
            ->orWhere('episode', 'LIKE', "%{$key}%")
            ->orWhere('address', 'LIKE', "%{$key}%");
            }
            if(!empty($sel01)){
                $user->orWhere('points', 'LIKE', "%{$sel01}%");   
            }
       }
       $displays=$user->get();

        // $displays = new Review;
        // $displays = $displays->all();
        return view('main',[
            'displays' => $displays,
            'keyword'=> $keyword,
            'sel01'=> $sel01
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
            'revirew' => $review,
            'id'=>$id
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
    public function shoplist()
    {
        $shops = DB::table('shops')
        ->join('reviews','shops.id','reviews.shop_id')
        ->select('shops.image','shops.name','shops.address',DB::raw("avg(reviews.points) as points"))
        ->groupBy('shops.image')
        ->groupBy('shops.address')
        ->groupBy('shops.name')
        ->get();
        
       
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

    // ユーザの詳細
    public function picup($id)
    {
        $review = new User;
        
        $reviews = $review
        ->join('reviews','users.id','reviews.user_id')
        ->where('reviews.id',$id)
        ->first();
        // dd($reviews);
    
        
        
        return view('stop_display',[
            'reviews' => $reviews,
            'id' => $id
        ]);
    }

   
    
    
}
