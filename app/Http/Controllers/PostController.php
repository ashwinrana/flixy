<?php

namespace App\Http\Controllers;

use App\Post;
use App\Like;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests;
use Illuminate\Session;
use Illuminate\Support\Facades\Input;
use Intervention\Image\Facades\Image;


class PostController extends Controller
{
    function dashboard()
    {
        $posts = Post::paginate(5);
        $posts = Post::orderBy('created_at','desc')->get();
        return view('users.dashboard', ['posts' => $posts]);
    }

    public function home()
    {
        $posts = Post::paginate(5);
        $posts = Post::orderBy('created_at','desc')->get();
        return view('users.home2',['posts' => $posts]);
    }

    public function timeline()
    {
        $posts = Post::paginate(5);
        $posts = Post::orderBy('created_at','desc')->get();
        return view('users.user',['posts' => $posts]);
    }


      function postCreatePost(Request $request)
   {
       if ($request->hasFile('image')) {
           $image = $request->file('image');
           dd($image);
           $filename = time() . "." . $image->getClientOriginalExtension();
           Image::make($image)->resize(400,300)->save(public_path('post-photos/' . $filename));
            $imagepost = new post();
           $imagepost->image = $filename;
           $request->user()->posts()->save($imagepost);
           return redirect()->route('home');
       }

       $this->validate($request, ['post' => 'required|max:1000']);
       $post = new Post();
       $post->post = $request['post'];
       $message = 'There was an error';
       if($request->user()->posts()->save($post)){
           $message = 'Post was Sucessfully Posted';
       }
       return redirect()->route('home')->with(['message' => $message]);
   }


     function getDeletePost($post_id){
        $post = Post::find($post_id);

//dd($user->$post_id);
         if(Auth::user()->id == $post->user_id){
             $post->delete();
             return redirect()->route('dashboard')->with(['message' => 'Post Was Successfully Deleted!']);
         }
         return redirect()->back();
    }

//    function postLike(Request $request){
//        $post_id = $request['postId'];
//        $is_like = $request['isLike'] === 'true';
//        $update = false;
//        $post = Post::find($post_id);
//        if(!post)
//        {
//            return null;
//        }
//        $user = Auth::user();
//        $like = $user->likes()->where('post_id',$post_id)->first();
//        if($like){
//            $liked = $like->like;
//            $update = true;
//            if($liked == $is_like){
//                $like->delete();
//                return null;
//            }
//
//        }else{
//            $like = new Like();
//        }
//        $like->like = $is_like;
//        $like->user_id = $user->id;
//        $like->post_id = $post->id;
//        if ($update){
//            $like->update();
//        }else{
//            $like->save();
//        }
//        return null;
//    }
//
//
//    function  getPostLike($post_id){
//        $post = Post::find($post_id);
//
////        $value=DB::table('likes')->orderBy('like',r 'asc')->get();
////        return $value;
//
////        dd($like);
//        dd($post_id);
//    }

}
