<?php

use App\Http\Controllers\MediaController;
use App\Http\Controllers\UserController;
use Illuminate\Http\Request;
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
// Route::get('/',function(){

//     if(session()->has('user')){
//         return redirect(route('dashboard'));
//     }
//     else {
//         return view('welcome');
//     }

// })->name('welcome');


Route::get('/',[UserController::class,'index'])->name('dashboard');
Route::get('/login',[UserController::class,'index'])->name('index');
Route::get('/logout',[UserController::class,'logout'])->name('logout');
Route::post('/login',[UserController::class,'login'])->name('login');
Route::get('/signup',[UserController::class,'signUpIndex'])->name('signUpIndex');
Route::post('/signup',[UserController::class,'signup'])->name('signup');
Route::get('/new_memory',[MediaController::class,'new_memory'])->name('new_memory');
Route::get('/new_diary',[MediaController::class,'new_diary'])->name('new_diary');
Route::post('/add_memory',[MediaController::class,'add_memory'])->name('add_memory');
Route::get('/google/login',[UserController::class,'redirectToGoogle']);
Route::get('/google/login/callback', [UserController::class,'redirectGoogleCallback']);
Route::get('/facebook/login',[UserController::class,'redirectToFacebook']);
Route::get('/facebook/login/callback', [UserController::class,'redirectFacebookCallback']);
Route::get('/subscription', function(){
    return view('subscription');
});
Route::post('/media_objects',[MediaController::class,'media_objects'])->name('media_objects');


