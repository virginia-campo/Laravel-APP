<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

/* Route::get('/', function () {
    return (view('welcome'));
}); */

Route::view('/','welcome');
Route::view('/add-user','add-user');
Route::post('/add-user',[UserController::class,'addUser']);

Route::get('user-home',[UserController::class,'userHome']);
Route::get('user-about',[UserController::class,'userAbout']);


Route::view('/home','home');
Route::view('/contact','contact');
Route::view('/about','about');
// Route::get('/',[UserController::class, 'index']);