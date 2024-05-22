<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

Route::get('/' , [HomeController::class,'home']);

Route::get('/test' , [HomeController::class,'index']);

Route::post('/add_post', [HomeController::class,'add_post']);

Route::get('/view_post',[HomeController::class,'view_post'] );

Route::get('/edit_post/{id}',[HomeController::class,'edit_post']);

Route::post('/update_post/{id}',[HomeController::class,'update_post']);
