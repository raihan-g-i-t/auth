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

Route::middleware(['auth', 'IsUserLoggedIn:0'])->group(function(){
    Route::get('/dashboard', [userController::class,'dashboard'])->name('dashboard');
    
});

Route::get('/user_dash', [userController::class,'user_dash'])->name('user_dash');

Route::get('/students', [userController::class, 'show_student'])->name('show.student');
Route::get('/single_student/{id}',[userController::class, 'single_student'])->name('single.student');
Route::get('/single_student_name/{id}',[userController::class, 'single_student_name'])->name('single.student.name');
Route::get('/dashboard/user_overview',[userController::class, 'user_overview'])->name('user.overview');
Route::post('/students/add',[userController::class,'add_student'])->name('add.student');
Route::get('/students/add',[userController::class,'add_student_view'])->name('add.student.view');
Route::get('/students/delete/{id}',[userController::class,'delete_student'])->name('delete.student');
Route::get('/students/update/{id}',[userController::class,'update_student'])->name('update.student');
