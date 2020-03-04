<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


Route::get('/about', function () {
    return view('about');
});
Route::get('/k', function () {
    return view('content.k');
});

 
    
     
Route::get('/addblog', function () {
    
    return view('content.addblog');
});

Route::post('sendblog','postcontroller@addblog');

Route::get('/post',"postcontroller@post" );
 
Route::get('/onepost/{post_id}',"postcontroller@onepost" );

//========================comments==================
Route::post('post/addcomment/{id}','commentscontroller@addcomment');

//========================auth==================
Route::get('/register',"usercontroller@register" );
Route::post('adduser',"usercontroller@adduser" );
Route::get('/login',"sessioncontroller@login" );
Route::post('session',"sessioncontroller@session" );
Route::get('logout',"sessioncontroller@logout" );
//========================admin==================
Route::group( [ 'middleware'=> "roles",'roles'=>["admin"]],function(){
           Route::get('/admin' , "postcontroller@admin");
            Route::post ( '/addrole',"postcontroller@addrole");
           });
     
Route::get('/editor',[
     'uses'=> "postcontroller@editor",
    
    'as'=> "content.editor",
    'middleware'=> "roles",
    'roles'=>["admin","editor"] 
    
    ]);

 Route::get('/access_permmion',"postcontroller@access_permmion" );
 
 Route::group( [ 'middleware'=> "roles",'roles'=>["admin"]],function(){
 Route::get('/statistics',"postcontroller@statistics" );
 Route::get('/settings',"postcontroller@settings" );
 Route::post('/changesettings',"postcontroller@changesettings" );
 Route::get('/manage_users',"postcontroller@manage_users" );
 Route::get('/edit_user/{user}',"usercontroller@edit_user" );
  Route::post('/update_user/{user_id}',"usercontroller@update_user" );
  Route::get('/delete_user/{user_id}',"usercontroller@delete_user" );
 });
 
 //========================search==================
  Route::post('/search',"postcontroller@search" );