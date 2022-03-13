<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\LogoutController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\SimcardController;

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

Route::get('/',function(){
    return view('home');
})->name('home');

Route::get('/posts',[PostController::class,'index'])
->middleware('auth')
;
Route::post('/posts',[PostController::class,'store'])
->middleware('auth')
->name('post');
Route::GET('/edit-site/{id}',[PostController::class,'edit'])
->middleware('auth')
->name('edit');

Route::patch('/update-site/{id}',[PostController::class,'update'])
->middleware('auth');

Route::DELETE('/delete-site/{id}',[PostController::class, 'delete']);

Route::get('/register',[RegisterController::class, 'index'])->name('register');
Route::post('/register',[RegisterController::class, 'store']);


Route::get('/login',[LoginController::class, 'index'])->name('login');
Route::post('/login',[LoginController::class, 'store']);


Route::post('/logout',[LogoutController::class, 'store'])->name('logout');


/* -------------------------------------Sim cards---------------------------------------------------------------*/


Route::get('/sim',[SimcardController::class, 'index'])->name('sim')->middleware('auth');
Route::PUT('/update-sim/{id}',[SimcardController::class, 'updatesim'])->middleware('auth');
Route::delete('/deletesim/{id}',[SimcardController::class, 'delete'])->middleware('auth');
Route::get('/get-sims',[SimcardController::class, 'getsims'])->middleware('auth');
Route::get('/get-sim/{id}',[SimcardController::class, 'getsim'])->middleware('auth');
Route::post('/addsim',[SimcardController::class, 'store'])->name('addsim')->middleware('auth');