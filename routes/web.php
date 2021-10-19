<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostsController;

use App\Http\Controllers\PhotoController;
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
    return '<h1> About Page </h1>';
});

// Route::get('/contact', function () {

//     $respose_arr = [];
//     $respose_arr['name'] = 'John';
//     $respose_arr['school'] = 'Vanarts';
//     $respose_arr['version'] = '1.2.2';
//     return $respose_arr;
// });

// Route::get('/contact', function () {

//     return view('contact');
// });



Route::get('/home', function () {

    $respose_arr = [];
    $respose_arr['name'] = 'John';
    $respose_arr['school'] = 'Vanarts';
    $respose_arr['version'] = '1.2.2';
    return view('welcome', $respose_arr);
});

// Route::get('/post', [PostsController::class, 'index']);

Route::resource('photos', PhotoController::class);

Route::get('/post/{id}', [PostsController::class, 'index']);

Route::get('/contacts/{id}', [PhotoController::class, 'contact']);
