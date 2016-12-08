<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('/users', function () {
    return view('users.index');
});
Route::get('/users/login', function () {
    return view('users.login');
});
Route::get('/users/join', function () {
    return view('users.join');
});
Route::get('/users/find', function () {
    return view('users.find');
});


Route::get('/students', function () {
    return view('students.index');
});
Route::post('/students/add', function(){
  return view('students.add');
});
Route::get('/students/{seq}', function ($seq) {
    return view('students.seq0',[
      'temp'=> $seq
    ]);
});
Route::put('/students/seq/modify', function () {
    return view('students.seq0_modify');
});


Route::get('/artworks', function () {
    return view('artworks.index');
});
Route::post('/artworks/add', function () {
    return view('artworks.add');
});
Route::get('/artworks/search', function () {
    return view('artworks.search');
});

Route::get('/artworks/{var}', function ($var) {
    return view('artworks.seq0',[
      'temp'=>$var
    ]);
});

Route::get ('/artworks',function ($var) {
return view('artworks.tags0',[ /** 확인하기 **/
    'temp'=>$var
  ]);
});




Route::put('/artworks/{var}/modify', function ($var) {/**고쳐야함 컨트롤러 보기**/
    return view('artworks.seq0_modify',[
      'temp'=>$var
    ]);
});



Route::get('/albums', function () {
    return view('albums.index');
});
Route::get('/albums/{seq}', function ($seq) {
    return view('albums.seq0',[
      'temp'=>$seq
    ]);
});


Route::get('/settings', function () {
    return view('settings.index');
});
