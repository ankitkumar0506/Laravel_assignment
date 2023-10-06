<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\fontend\HomeController;
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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/home',[HomeController::class,'index1']);
Route::get('/aboutus',[HomeController::class,'index2']);
Route::get('/contactus',[HomeController::class,'index3']);
Route::get('/gallery',[HomeController::class,'index4']);

Route::get('/login',[AuthController::class,'index']);
Route::post('/login',[AuthController::class,'store']);

Route::get('/registration',[HomeController::class,'index6']);

// <<<<<<<<<<<<<<<<<<<<<<Q 1 complate hear>>>>>>>>>>>>>>>>>>>>>>>












