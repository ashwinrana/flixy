<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FriendRequest extends Model
{

    protected $table = 'friend_request';
    protected $fillable = ['send_from',
            'send_to',
            'status'];

    function requestFrom() {

        return $this->belongsTo( User::class, 'send_from');
    }

    function requestTo() {

        return $this->belongsTo( User::class, 'send_to');
    }

}

