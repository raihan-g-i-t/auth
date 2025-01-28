<?php

use App\Http\Controllers\cityController;
use App\Http\Controllers\studentController;
use App\Http\Controllers\TestmodelController;
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
Route::get('/dashboard/user_overview',[studentController::class, 'user_overview'])->name('user.overview');

Route::get('/students', [studentController::class, 'show_student'])->name('show.student');
Route::get('/single_student/{id}',[studentController::class, 'single_student'])->name('single.student');
Route::get('/single_student_name/{id}',[studentController::class, 'single_student_name'])->name('single.student.name');
Route::post('/students/add',[studentController::class,'add_student'])->name('add.student');
Route::get('/students/add',[studentController::class,'add_student_view'])->name('add.student.view');
Route::get('/students/delete/{id}',[studentController::class,'delete_student'])->name('delete.student');
Route::get('/students/update/{id}',[studentController::class,'update_student'])->name('update.student');
Route::post('/students/update/{id}',[studentController::class,'update_store'])->name('update.store');

Route::get('/cityshow', [cityController::class, 'show']);

Route::get('/testmodel',[TestmodelController::class, 'index']);
