<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

/* Route::get('/', function () {
    return (view('welcome'));
}); */

Route::view('/','add-user');
Route::post('/add-user',[UserController::class,'addUser']);