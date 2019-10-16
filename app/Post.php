<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{ 
    protected $primaryKey="post_id";//you make it because in c-post you change it to id
    /* make function that posts belong to cat */
    public function category(){
        return $this->belongsTo("App\Category");
    }
      /* make function that posts belong to users */
    public function user(){
        return $this->belongsTo("App\User");
    }


}
