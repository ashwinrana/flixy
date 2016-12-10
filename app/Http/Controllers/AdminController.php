<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

use App\Http\Requests;

class AdminController extends Controller
{

    function __construct()
    {
//        $this->middleware('admin');
    }

    function dashboard()
    {
        $users = User::paginate(5);
        return view('admin.dashboard', ['users' => $users]);
//        return view('admin.dashboard');
    }



    function profile($id){
        $user = User::find($id);
        return view('admin.profile',['user'=> $user]);
    }

    function edit($id)
    {
        $user = User::find($id);
        return view('admin.edit', ['user' => $user]);

    }

    function update(Request $requests, $id)
    {
        $user = User::find($id);
        $user->update($requests->all());
//        dd($user);
        return redirect('admin.dashboard');

    }
    
}
