<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

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

Route::get('/', function () {
    return view('template.nav');
})->middleware('auth');

Route::get('/register', function () {
    return view('users.register');
});

Route::post('/register',[UserController::class, 'store']);
Route::post('/logout',[UserController::class, 'logout']);
Route::get('/login',function(){
    return view('users.login');
})->name('login');
Route::post('/login',[UserController::class, 'login']);