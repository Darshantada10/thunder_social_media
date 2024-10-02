<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Artisan;
use App\Http\Controllers\CheckController;
use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\FrontEnd\HomeController;
use App\Http\Controllers\FrontEnd\PostController;
use App\Http\Controllers\FrontEnd\ProfileController;


Route::get('/',[AuthController::class,'Login'])->middleware('guest')->name('login');
Route::post('/',[AuthController::class,'AuthUser'])->name('authenticate.user');
Route::post('/new/user/register',[AuthController::class,'SaveUser']);
Route::get('/logout',[AuthController::class,'Logout']);


Route::get('/non-authorized',[CheckController::class,'Index']);


Route::get('/clear-commands',function(){

    // Artisan::command('clear:config');

});

Route::middleware(['auth','usercheck'])->group(function ()
{

    Route::get('/home',[HomeController::class,'Index']);

    Route::post('/home',[PostController::class,'Index'])->name('add.post');

    Route::get('/my-account',[ProfileController::class,'Index']);
    Route::post('/my-account',[ProfileController::class,'Update'])->name('update.profile-information');


});
