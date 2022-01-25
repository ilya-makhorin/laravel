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
Route::get('/index',[
    \App\Http\Controllers\HomeController::class,'index'
]);
Route::get('/news',[
    \App\Http\Controllers\NewsController::class,'news'
]);
Route::get('/newsrus',[
    \App\Http\Controllers\NewsController::class,'newsrus'
]);
Route::get('/newsworld',[
    \App\Http\Controllers\NewsController::class,'newsworld'
]);
Route::get('/newsregion',[
    \App\Http\Controllers\NewsController::class,'newsregion'
]);
Route::get('/auth',[
    \App\Http\Controllers\AuthController::class,'auth'
]);
Route::post('/create',[
    \App\Http\Controllers\NewsController::class,'create'
])->name("news::create");
Route::get('/new',[
    \App\Http\Controllers\NewsController::class,'new'
])->name("news::new");
