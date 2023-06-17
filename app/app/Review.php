<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    public function review(){
        return $this->hasMany('App\Review');
       }
       
       public function shop(){
        return $this->hasMany('App\Shop');
       }
       
       public function violation(){
        return $this->hasMany('App\Violation');
       }
}
