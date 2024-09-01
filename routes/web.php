<?php

use App\Http\Controllers\Admin\HomeController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     // return view('Layouts.AdminApp');
//     // return view('Layouts/AdminApp');
// });

// Route::get('/admin/brand', function () {
//     return view('demo');
//     // return view('Layouts/AdminApp');
// });


Route::get('/',[HomeController::class,'index']);