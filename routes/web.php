<?php

use App\Http\Controllers\userController;
use App\Http\Middleware\ValidUser;
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

Route::get("/", [userController::class,"index"])->name("index");

Route::group(["prefix"=> "/registration"], function () {});

Route::get('/registration', [userController::class,'registration'])
         ->name('registration');
Route::post('/registration', [userController::class,'registration_save'])->name('registration.save');

Route::get('/login', [userController::class,'login'])->name('login');
Route::post('/login', [userController::class,'login_match'])->name('login.match');
// Route::get('/dashboard', [userController::class,'dashboard'])->name('dashboard')
//             ->middleware(['IsUserLoggedIn',]);
Route::get('/logout', [userController::class,'logout'])->name('logout');

Route::middleware(['IsUserLoggedIn',])->group(function(){
    Route::get('/dashboard', [userController::class,'dashboard'])->name('dashboard');
});

