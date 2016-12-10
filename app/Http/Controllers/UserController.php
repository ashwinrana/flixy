<?php
namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;


class UserController extends Controller
{



    public function main()
    {
        return view('users.welcome2');
    }

    function index()
    {
        $users = User::paginate(5);
        return view('users.List', ['users' => $users]);
    }


    function create()
    {
        return view('users.create');
    }


    function store( Request $request){
//        dd( $_FILES );
//  dd($request->file('image'));
//        if($request->hasFile('image')){
//            $image = $request->file('image');
//            $image->move(public_path('uploads') , time() . "." . $image->getClientOriginalExtension());
//        }
//        die;
        $user = $request->all();
//        $user['image'] = $image->getClientOriginalName();
        User::create( $user );
        return redirect('home');
//    dd($request->all());
    }

    function profile($id)
    {
        if( is_numeric(  $id ))
        {
            $users = User::findOrFail($id);
        }

        if( !is_numeric(  $id ))
        {
            $users = User::where( 'user_name', $id)->first();
        }

        return view('users.user')->with('user',$users);

    }


    function User($user_name)
    {
//        $user = User::where('user_name',$user_name)->first();
//        if(!$user){
//            abort(404);
//        }
//        return view('users.user')->with('user',$user);

    }

    function edit($id)
    {
        $user = User::find($id);
        return view('users.edit', ['user' => $user]);

    }


    function update(Request $requests, $id)
    {
        $user = User::find($id);
        $user->update($requests->all());
//        dd($user);
        if($requests->save(update))
        return redirect('home');

    }


    function delete($id)
    {
        $user = User::find($id);
        $user->delete();
        return redirect()->route('userList');

    }


    function login()
    {
        return view('users.login');
    }

    function home()
    {
        return view('users.welcome2');
    }



    function postLogin(Request $request)
    {
//        dd($request->all());
        if (Auth::attempt($request->only('user_name', 'password'))) {

//            dd(Auth::user());
//            dd("True");
//            return redirect()->intended(route('userList'));
            return redirect()->intended(route('home'));
        }

//        dd($request->all());
        return redirect()->route('login')->with('message', '<div class="alert alert-danger">Incorrect User Name or Password</div>');

    }


    function search()
    {

        return view('users.search');
    }


    function logout(){

        Auth::logout();
        return redirect()->route('login')->with('msg',"Thanks for stoppong by");
    }
}
