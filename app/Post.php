<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = ['title', 'description'];

    public function user(){
        return $this->belongTo('App/User');
    }
    
    public function category(){
        return $this->belongTo('App/Category');
    }
    
    public function tags(){
        return $this->belogsToMany('App/Tag');
    }
}


