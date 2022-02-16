<?php

use App\Http\Controllers\SocialController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|-------------------------------------------------------------------------
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
Route::match(['post','get'],'/create',[
    \App\Http\Controllers\NewsController::class,'create'
])->name("news::create");
Route::match(['post','get'],'/deleteNews{news}',[
    \App\Http\Controllers\NewsController::class,'delete'
])->name("news::deleteNews");

Route::match(['post','get'],'/updateNews{news}',[
    \App\Http\Controllers\NewsController::class,'update'
])->name("news::updateNews");

Route::get('/allNews',[
    \App\Http\Controllers\NewsController::class,'allNews'
])->name("news::allNews");

Route::get('/db',[\App\Http\Controllers\DBcontroller::class,'index']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/adminka', [\App\Http\Controllers\ProfileController::class, 'admin'])->name('adminka');
Route::match(['post','get'],'/delete{user}',[
    \App\Http\Controllers\ProfileController::class,'delete'
])->name("delete");

Route::match(['get', 'post'], '/profile', ['App\Http\Controllers\ProfileController', 'update'])
    ->name('profile')
    ->middleware('auth');
Route::match(['post','get'],'/updateAdmin{user}',[
    \App\Http\Controllers\ProfileController::class,'updateAdmin'
])->name("updateAdmin");

Route::get('parser',[\App\Http\Controllers\ParserController::class,'index'])
    ->name('parser');
Route::group([
    'prefix'=>'social',
    'as'=>'social::',
    ],function(){
Route::get('/login',[SocialController::class,'loginVK'])
    ->name('login-vk');
Route::get('/response',[SocialController::class,'responseVK'])
    ->name('response-vk');
});
