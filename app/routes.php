<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('authen/login',['as'=>'getlogin','uses'=>'Thanhviencontroller@getlogin']);
Route::post('authen/login',['as'=>'getlogin','uses'=>'Thanhviencontroller@postlogin']);

Route::get('dangky',['as'=>'dangky','uses'=>'HomeController@dangky']);
Route::post('postdangky',['as'=>'postdangkyy','uses'=>'HomeController@postdangky']);
//-----------------------LOGIN--------------------------------------------
Route::get('/login', 'HomeController@index');
Route::post('/postlogin', 'HomeController@login');

//-----------------------LOGIN--------------------------------------------
Route::get('/iddd',function(){
	return View::make('client');
});
Route::get('listpage', 'HomeController@listpage');
//-----------------------LOGOUT--------------------------------------------
Route::get('logout',function(){
	Auth::logout();
	return Redirect::to('login');
});

//-----------------------ADDPAGE--------------------------------------------

Route::get('addpage','HomeController@addpage');
Route::post('/postaddpage', 'HomeController@postaddpage');

//-----------------------DASHBOARD--------------------------------------------
Route::get('index/admin',function(){
    return View::make('Admin.dashboard');
});



//Route::get('/admin','HomeController@admin');
//-----------------------CLIENT--------------------------------------------
Route::get('/tintuc','HomeController@tintuc');



//-----------------------EDIT,DELETE PAGE--------------------------------------------
Route::get('editpage/{id}','HomeController@editpage');

Route::post('editpage/postedit','HomeController@posteditpage');

Route::get('delete/{id}','HomeController@delete');
Route::post('update/{id}','HomeController@update');

//---------------------------SEARCH----------------------------------------------
Route::post('index/research','HomeController@search');
Route::get('/baiviet/{slug}-{id}',[ 'as' => 'testslug', 'uses' => 'HomeController@baiviet' ])->where([ 'slug'=>'[a-zA-Z0-9\-]+','id' => '[0-9]+' ]);


Route::get('home','TemplateController@home');
Route::get('add-cate','TemplateController@addcate');
Route::post('post-cate','TemplateController@postcate');

Route::get('test-tt','TemplateController@layout');
