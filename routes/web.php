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
| 1.home
| 2.users
| 3.students
| 4.artworks
| 5.albums
| 6.settings
| 7.auth
*/

// 1.home
Route::get('/', function () {
    return redirect()->route('users');
});

// 2.users
Route::get('/users', function () {

    if(auth()->check())
    {
        return redirect('students');
    }
    return view('users.index');
})->name('users');

Route::get('/users/join', function () {
    return view('users.join');
});

Route::get('/users/find', function () {
    return view('users.find');
});

Route::get('/users/logout', function () {
    auth()->logout();

    return redirect('users');
});

// 3.students
Route::resource('students', 'StudentsController');

// 4.artworks
Route::resource('artworks', 'ArtworksController');

// 5.albums
Route::get('/albums', function () {
    if (auth()->check())
    {
      return view('albums.index');
    }

    return redirect('users');
});

Route::get('/albums/{seq}', function ($seq) {
    return view('albums.seq0',[
      'temp'=>$seq
    ]);
});


// 6.settings
Route::get('/settings', function () {
    if (auth()->check())
    {
      return view('settings.index');
    }

    return redirect('users');
});

// 7.auth
Auth::routes();

// Route::post('/students/add', function(){
//   return view('students.add');
// });
// Route::put('/students/seq/modify', function () {
//     return view('students.seq0_modify');
// });


// Route::post('/artworks/add', function () {
//     return view('artworks.add');
// });
// Route::get('/artworks/search', function () {
//     return view('artworks.search');
// });

// Route::get('/artworks/{var}', function ($var) {
//     return view('artworks.seq0',[
//       'temp'=>$var
//     ]);
// });
//
// Route::get ('/artworks',function ($var) {
// return view('artworks.tags0',[ /** 확인하기 **/
//     'temp'=>$var
//   ]);
// });

// Route::put('/artworks/{var}/modify', function ($var) {/**고쳐야함 컨트롤러 보기**/
//     return view('artworks.seq0_modify',[
//       'temp'=>$var
//     ]);
// });


// Route::get('students', function () {
//     return view('students.index', [
//       'studentsUrl' => '/students'
//     ]);
// });
// Route::get('/students/add', function () {
//     return view('artworks.add', [
//       'intro' => 0
//     ]);
// });

// Route::get('/home', 'HomeController@index');
