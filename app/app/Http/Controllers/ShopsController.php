<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Shop;
use App\Review;
use App\User;


class ShopsController extends Controller
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
        $shop->user_id = Auth::id();

        

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
        $review = new Review;
        
        $reviews = $review
        ->join('users','reviews.user_id','users.id')
        ->join('shops','reviews.shop_id','shops.id')
        ->where('shops.user_id',$id)
        ->where('reviews.del_flg',0)
        ->get();
        // dd($reviews);
        return view('shop_review_check',[
            'reviews'=> $reviews,
            'id'=> $id,
           
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
        $users = new User;
        $user = $users->find($id);
       
        $user->del_flg=0;
        $user->save();
       
        return redirect('/user');

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
        $image= $request->file('image');
        if(isset($image)){
            $file_name = $request->file('image')->getClientOriginalName();
        $request->file('image')->storeAs('public/images' , $file_name);        
        $reviews->image = $file_name;
        }
    
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
        $review= Review::find($id);
        $review->delete();
        return redirect()->route('user.show',['user'=>Auth::id()]);
    }

   


}
