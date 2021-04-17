<?php

use Illuminate\Support\Facades\Route;

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
Route::get('/registration', function(){
    return view('user.registration');
});
Route::get('/login', function(){
    return view('user.login');
});

Route::get('/profile', function(){
    return view('user.profile');
});
Route::get('/form', function(){
    return view('form');
});

Route::get('/moder', 'userController@moderpage');
Route::get('/games', 'userController@games');
Route::post('/comment', 'userController@editcomment'
);
Route::get('/gallery', 'userController@gallerycom'
);

Route::post('/reg', 'userController@register'
);
Route::post('/log', 'userController@login'
);
Route::post('/edgame', 'userController@edgame'
);
Route::post('/send', 'userController@send'
);



Route::get('/logout', 'userController@off');
Route::get('/admin','userController@allusers');

Route::get('/deletegame/{id}','userController@deletegame');
Route::get('/deletecom/{id}','userController@deletecom');
Route::get('/delete/{id}','userController@destroy');
Route::get('/ban/{id}','userController@ban');
Route::get('/unban/{id}','userController@unban');
Route::get('/changeC/{id}','userController@commonuser');
Route::get('/changeM/{id}','userController@moder');

