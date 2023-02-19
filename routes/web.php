<?php

use App\Http\Controllers\UsersController;
use Illuminate\Support\Facades\Route;

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
    return view('welcome');
});



Route::prefix('users')->group(function(){
    Route::post('/store' , [UsersController::class , 'store'])->name('users.store');
    Route::post('/login' , [UsersController::class , 'login'])->name('users.login');
    Route::get('/login/page' , [UsersController::class , 'singin'])->name('login.page');
    Route::get('/reg' , [UsersController::class , 'index'])->name('users.reg');
    Route::get('/logouts' , [UsersController::class , 'logout'])->name('user.test');


});


// Route::get('/test' , [UsersController::class , ' test'])->name('user.logout');

