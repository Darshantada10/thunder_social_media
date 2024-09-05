<?php

use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\Auth\AuthController;
use Illuminate\Support\Facades\Route;


Route::get('/',[AuthController::class,'Login']);
Route::post('/new/user/register',[AuthController::class,'SaveUser']);