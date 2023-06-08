<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Review;

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

    
}
