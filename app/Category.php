<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    /* make function that every cat had many posts*/
    public function posts(){
        return $this->hasMany("App\Post");
    }

    

}
