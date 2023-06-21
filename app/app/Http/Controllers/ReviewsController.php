<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;


use App\Shop;
use App\Review;
use App\User;

class ReviewsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $shop = Shop::where('user_id',Auth::id())->first();
        return view('shop_manager',[
            'shop'=>$shop
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $review = new Review;
        
        $review->user_id = Auth::id();
        $review->shop_id = $request->shop_id;
        $review->title = $request->title;
        $review->points = $request->points;
        $review->episode = $request->episode;
        $image=$request->file('image');
        if(isset($image)){
            $file_name = $request->file('image')->getClientOriginalName();
            $request->file('image')->storeAs('public/images' , $file_name);        
            $review->image = $file_name;
        }
        
        

        $review->save();
        
         return redirect('/');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $shop = DB::table('shops')
        ->join('reviews','shops.id','reviews.shop_id')
        ->select('shops.id','shops.image','shops.name','shops.address',DB::raw("avg(reviews.points) as points"))
        ->where('reviews.shop_id',$id)->where('reviews.del_flg',0)
        ->groupBy('shops.id')
        ->groupBy('shops.image')
        ->groupBy('shops.address')
        ->groupBy('shops.name')
        ->first();
        $reviews = DB::table('shops')
        ->join('reviews','shops.id','reviews.shop_id')
        ->join('users','reviews.user_id','users.id')
        ->select('users.*','reviews.*','shops.*','reviews.image as gazou')
        ->where('reviews.shop_id',$id)->where('reviews.del_flg',0)->get();
        
       return view('store_details',[
        'shop'=> $shop,
        'reviews'=>$reviews,
       ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $review = new Review;
        $result = $review->find($id);
        // dd($result);
        return view('post_edit',[
            'id' => $id,
            'result'=>$result,
        ]);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $reviews = new Review;
        
        $reviews->user_id = Auth::id();
        $reviews->shop_id = $request->shop_id;
        $reviews->title = $request->title;
        $reviews->points = $request->points;
        $reviews->episode = $request->episode;

        $file_name = $request->file('image')->getClientOriginalName();
        $request->file('image')->storeAs('public/images' , $file_name);        
        $reviews->image = $file_name;
        
        $reviews->save();
        return redirect()->route('user.show',['user'=>Auth::id()]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }



    public function Shopdetale($id)
    {
    
        $shops = new Shop;


        $result = $shops->find($id);
        return view('post_episode',[
            'id' => $id,
            'result' => $result,
        ]);
    }



    public function list()
    {
        $review = new Review;
        // $reviews = $review->join('users','reviews.user_id','users.id')
        // ->join('shops','reviews.shop_id','shops.id')->select('reviews.*','users.*','shops.*','users.name as user','reviews.id as review','reviews.del_flg as del')
        // ->where('role',1)->withCount('review')
        // // ->orderBy('violation_count','desc')
        // // ->take(20)
        // ->get();
        // dd($reviews);
        $reviews = $review->join('users','reviews.user_id','users.id')
        ->join('shops','reviews.shop_id','shops.id')->select('reviews.*','users.*','shops.*','users.name as user','reviews.id as review','reviews.del_flg as del')
        ->where('role',1)->withCount('violation')
        ->orderBy('violation_count','desc')
        ->take(20)->get();
        
        return view('post_list',[
            'reviews' => $reviews,
        ]);
    }

}
