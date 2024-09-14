<?php

use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\FrontEnd\HomeController;
use App\Http\Controllers\FrontEnd\ProfileController;
use Illuminate\Support\Facades\Route;


Route::get('/',[AuthController::class,'Login'])->middleware('guest')->name('login');
Route::post('/',[AuthController::class,'AuthUser'])->name('authenticate.user');
Route::post('/new/user/register',[AuthController::class,'SaveUser']);
Route::get('/logout',[AuthController::class,'Logout']);


// Route::get('/home',[HomeController::class,'Index'])->middleware('auth');


Route::middleware(['auth'])->group(function ()
{

    Route::get('/home',[HomeController::class,'Index']);

    Route::get('/my-account',[ProfileController::class,'Index']);
    Route::post('/my-account',[ProfileController::class,'Update'])->name('update.profile-information');


});
