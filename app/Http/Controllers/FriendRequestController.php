<?php

namespace App\Http\Controllers;

use App\FriendRequest;
use App\User;
use Illuminate\Http\Request;

use App\Http\Requests;

class FriendRequestController extends Controller
{
    function index( $from, $to ){
        
        
        FriendRequest::create([
            'send_from' => $from,
            'send_to' => $to,
            'status' => 1
        ]);
        
    }
    
    function requests( User $user ) {
        
        dd( $user->sentRequest );
    }
}
