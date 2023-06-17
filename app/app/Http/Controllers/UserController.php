<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\User;
use App\Shop;
use App\Review;
use App\Violation;


class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        // $user = new User;
        $keyword=$request->input('keyword');
        $user = Review::query();
        $space = mb_convert_kana($keyword, 's');
        $keys = explode(" ",$space);
        // $users=User::where('role',1)->withCount('review','violation')->having('violation_count','>',0)->get();
        $user->join('violations',function ($user) use($request){
            $user->on('reviews.id','=','violations.review_id');
       })
       ->join('shops',function ($user) use($request){
        $user->on('reviews.shop_id','=','shops.id');
       });
       if(!empty($keyword)){
        foreach($keys as $key){
            $user->orWhere('title', 'LIKE', "%{$key}%")
            ->orWhere('episode', 'LIKE', "%{$key}%")
            ->orWhere('address', 'LIKE', "%{$key}%");
            }
       }
       $users=$user->get();
       
        return view('user_list',[
            'users' => $users
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $shops = new Shop;
        $shops = $shops->all();
        return view('post_spot',[
            'shops' => $shops
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
        //
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
        

        $my = new Review;
        $mys = $my->where('user_id',$id)->get();
        
        
        
        return view('mypage',[
            'users' => $user,
            'mys'=> $mys
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(int $id)
    {
        $users = new User;

        $result = $users->find($id);
        // dd($result);
        return view('user_edit',[
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
        $instance =new User;
        $record =  $instance->find($id);
        
        $file_name = $request->file('image')->getClientOriginalName();
        $request->file('image')->storeAs('public/images' , $file_name);        
        $record->image = $file_name;
        $record->name =$request->name;
        $record->email =$request->email;

        $record->save();
        return redirect()->route('user.show',['user'=>Auth::id()]);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        $user->del_flg=1;
        $user->save();
        Auth::logout();
        return redirect(route('home'));
    }
    public function delete($id)
    {
        $users = new User;

        $result = $users->find($id);
        return view('user_delete_conf',[
            'id' => $id,
            'result'=>$result,
        ]);
       
    }
}
