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

use App\User;
use App\Adress;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/walid', function () {
    $walid = User::all()->where('name', '=', 'walid');
    // $walid = $users->where('name', '=', 'walid');
    return $walid;
});
//
// Route::get('/a/{as}/{asd}', function ($as, $asd) {
//     return 'tus datos: '.$as.' '.$asd;
// });
//
// Route::get('/post/{a}', 'PostController@index');
//
// Route::get('/insert', function () {
//     $user = User::find(1);
//     $adress = new Adress(['name'=>'calle oropendola']);
//     $user->adress()->save($adress);
//
// });


Route::resource('/posts','PostController');
