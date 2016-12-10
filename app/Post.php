<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;
class Post extends Model
{
   function user(){
       return $this->belongsTo('App\User');
   }

//   function likes(){
//       return $this->hasMany('App\Like');
//   }

    public function likes()
    {
        return $this->morphToMany('App\User', 'likeable')->whereDeletedAt(null);
    }

    public function getIsLikedAttribute()
    {
        $like = $this->likes()->whereUserId(Auth::id());
        return (!is_null($like)) ? true : false;
    }
}




