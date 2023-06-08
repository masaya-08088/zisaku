<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;


use App\Shop;
use App\Review;

class ReviewsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        return view('main');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('shop_manager');
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

        $file_name = $request->file('image')->getClientOriginalName();
        $request->file('image')->storeAs('public/images' , $file_name);        
        $review->image = $file_name;
        

        $review->save();
        
         return view('home');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
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

}
