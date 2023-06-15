<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Shop;
use App\Review;


class ShopsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }
      
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('store_registration');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $shop = new Shop;

        $shop->name = $request->name;
        $shop->address = $request->address;
        $shop->comment = $request->comment;
        $shop->longitude = $request->longitude;
        $shop->atitude = $request->atitude;
        

        $file_name = $request->file('image')->getClientOriginalName();
        $request->file('image')->storeAs('public/images' , $file_name);        
        $shop->image = $file_name;

        $shop->save();
         return redirect()->route('reviews.create',['user'=>Auth::id()]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $user = new User;
        $user = $user->all();
        

        $review = new Review;
        $reviews = $review->where('user_id',$id)->get();
        
        
        
        return view('shop_review_check',[
            'users' => $user,
            'mys'=> $reviews
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
        //
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
        
        $review = new Review;
        $reviews = $review->find($id);

        $file_name = $request->file('image')->getClientOriginalName();
        $request->file('image')->storeAs('public/images' , $file_name);        
        $reviews->image = $file_name;

        $reviews->user_id = Auth::id();
        $reviews->shop_id = $request->shop_id;
        $reviews->title = $request->title;
        $reviews->points = $request->points;
        $reviews->episode = $request->episode;
        
        
        
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

    public function manager()
    {
        return view('post_list');
    }

}
