<?php

//namespace App;
//
//use Illuminate\Database\Eloquent\Model;
//
//class Like extends Model
//{
//    public function user(){
//        return $this->belongsTo('App\User');
//    }
//
//    public function post(){
//        return $this->belongsTo('App\Post');
//    }
//}


// app/Like.php

namespace App;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class Like extends Model
{
    use SoftDeletes;

    protected $table = 'likeables';

    protected $fillable = [
        'user_id',
        'post_id',
        'likeable',
    ];

    /**
     * Get all of the products that are assigned this like.
     */
//    public function products()
//    {
//        return $this->morphedByMany('App\Product', 'post');
//    }

    /**
     * Get all of the posts that are assigned this like.
     */
    public function posts()
    {
        return $this->morphedByMany('App\Post', 'post');
    }
}