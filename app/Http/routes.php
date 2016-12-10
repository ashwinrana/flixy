    <?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/




/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/


  Route::group(['middleware' => ['web']], function () {
      Route::get('/','UserController@main')->name('re');
      Route::get('/demo', 'UserController@home')->name('home');
      Route::get('/login', 'UserController@login')->name('login');
      Route::post('/login','UserController@postLogin')->name('postLogin');
      Route::get('/logout','UserController@logout')->name('logout');
      Route::get('/create','UserController@create')->name('create');
      Route::post('/users','UserController@store')->name('store');
      Route::get('/profile/{id}','UserController@profile')->name('profile');
      Route::get('/profile/{user_name}','UserController@User')->name('pro');
      Route::get('/friend-request/{from}/{to}','FriendRequestController@index')->name('friendRequest');
      Route::get('/friend-requests/{user}','FriendRequestController@requests')->name('requests');

  Route::group(['middleware' => 'auth'], function (){
      Route::get('home2','PostController@home')->name('home');

//      Route::get('/users','PostController@dashboard')->name('userList');
      Route::get('/admin/home','AdminController@dashboard')->name('admin');
      Route::get('/admin/profile&{id}','AdminController@profile')->name('adminProfile');
      Route::get('/admin/edit&{id}','AdminController@edit')->name('editlists');
      Route::post('/update&{id}','AdminController@update')->name('updates');
//      Route::get('/edit&{id}','UserController@edit')->name('editlist');
      Route::post('update&{id}','UserController@update')->name('update');
      Route::get('/search','UserController@search')->name('search');
      Route::get('users&{id}','UserController@delete')->name('deleteUser');
      Route::get('/home','PostController@dashboard')->name('dashboard');
//      Route::get('/home2','PostController@dashboard2')->name('dashboard');
      Route::post('/post','PostController@postCreatePost')->name('post');
      Route::get('/post-delete&{post_id}','PostController@getDeletePost')->name('post.delete');
//      Route::get('/like&{post_id}','PostController@getPostLike')->name('like');
//      Route::get('product/like/{id}', ['as' => 'product.like', 'uses' => 'LikeController@likeProduct']);
//      Route::get('post/like/{id}', ['as' => 'post.like', 'uses' => 'LikeController@likePost']);
//      Route::get('post/like/{id}','LikeController@likePost')->name('post.like');
  });
});