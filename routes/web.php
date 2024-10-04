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

Route::get('/all-users',[CheckController::class,'api']);
Route::get('/save-user',[CheckController::class,'saveuser']); // now do this using jwt and csrf or auth token in post method

Route::get('/non-authorized',[CheckController::class,'Index']);


Route::get('/clear-commands',function(){

    // Artisan::command('clear:config');

});

Route::middleware(['auth','usercheck'])->group(function ()
{

    Route::get('/home',[HomeController::class,'Index']);

    Route::post('/home',[PostController::class,'Index'])->name('add.post');
    Route::post('/save-like',[PostController::class,'SaveLike'])->name('add.like');

    Route::get('/my-account',[ProfileController::class,'Index']);
    Route::post('/my-account',[ProfileController::class,'Update'])->name('update.profile-information');


});
