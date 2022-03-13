<?php

use Illuminate\Support\Facades\Route;
// use App\Http\Controllers\DemoController;
// use App\Http\Controllers\SingleActionController;
// use App\Http\Controllers\PhotoController;
use App\Http\Controllers\RegistrationController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
// Route::get('/',[DemoController::class,'index']);
// Route::get('/about','App\Http\Controllers\DemoController@about');
// Route::get('/product',SingleActionController::class);
// Route::resource('photo',PhotoController::class);

Route::get('/register',[RegistrationController::class, 'index']);
Route::post('/register',[RegistrationController::class, 'register']);