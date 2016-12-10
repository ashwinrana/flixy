<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'first_name','last_name','address','contact_number','email','user_name','password','date_of_birth',
        'created_at','updated_at','country','occupation','website','about_me','image'
    ];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    function setPasswordAttribute($password)
    {
        $this->attributes['password'] = bcrypt($password);
    }

    function posts(){
        return $this->hasMany('App\Post');
    }

    public function likedPosts()
    {
        return $this->morphedByMany('App\Post', 'likeable')->whereDeletedAt(null);
    }
//    function likes(){
//        return $this->hasMany('App\Like');
//    }

//    function friendRequest(){
//        return $this->hasMany( FriendRequest::class, 'send_to');
//    }
//
//    function sentRequest() {
//        return $this->hasMany( FriendRequest::class, 'send_from');
//    }

}
