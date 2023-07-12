<?php

use App\Http\Controllers\blogdetailsController;
use App\Http\Controllers\HomeController;

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

//Route::get('/', [HomeController::class,'intoData']);


Route::get('/',[HomeController::class,'page']);
Route::get('/blogdetails/{blog_id}',[blogdetailsController::class,'page']);



Route::get('/banner',[HomeController::class,'bannerData']);
Route::get('/intro',[HomeController::class,'intoData']);
Route::get('/blogpost',[HomeController::class,'blogpostData']);
