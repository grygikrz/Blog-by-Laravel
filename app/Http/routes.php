<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/about', function () {
    
    return view('about');
    
});



Route::get('/start', function () {
    
    $posts = DB::table('blog_short')->get();
    return view('start')->with('posts', $posts);
    
});

Route::get('/', function () {
    
    $posts = DB::table('blog_short')->get();
    return view('start')->with('posts', $posts);
    
});

Route::resource('blog', 'FirstController');
Route::resource('contact', 'ContactController');

Route::get('blog/{id}', 'FirstController@show');

Route::post('contact/{store}', 'ContactController@store');

//Route::get('test', function()      --- Do testów konfiga. Dlaczego mail nie działa.
//{
//    dd(Config::get('mail'));
//});




Route::group(array('prefix' => 'admin'), function()
    {

		Route::get('/', function () {
		    
		    return view('admin.index');
		    
		});

		Route::get('/start', function () {
		    
		    return view('admin.index');
		    
		});

		Route::post('/addpost/store', 'AdminController@store');

		Route::get('/addpost', 'AdminController@index');

    });